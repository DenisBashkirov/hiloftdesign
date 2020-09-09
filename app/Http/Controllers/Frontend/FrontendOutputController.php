<?php

namespace App\Http\Controllers\Frontend;

use App\Config;
use App\Events\LeadFormSubmitted;
use App\Feedback;
use App\NavMenuItem;
use App\Page;
use App\PortfolioItem;
use App\ServiceType;
use App\TeamPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Route;
use Cookie;

class FrontendOutputController extends FrontendBaseController
{
    protected $route_name;
    protected $page;

    public function __construct(Request $request) {

        // сохраняем utm из url в сессию
        foreach ($request->input() as $key=>$val) {
            if(strripos($key, 'utm') === 0) {
                session([$key => $val]);
            }
        }

        // Случай перехода не по рекламе (нет utm, но есть источник)
        if(!session('utm_source') & array_key_exists('HTTP_REFERER', $_SERVER)) {
            $referer = $_SERVER['HTTP_REFERER'];
            $referer = explode('//', $referer)[1];
            if (mb_strpos($referer, 'www') === false) {
                $source = explode('.', $referer)[0];
            } else {
                $source = explode('.', $referer)[1];
            }

            session(['utm_source' => $source]);

            if ($source = 'google' || $source = 'yandex') {
                session(['utm_medium' => 'organic']);
            }

        }

        // Случай прямого входа на сайт (нет utm_source и нет источника перехода)
        if(!session('utm_source') & !array_key_exists('HTTP_REFERER', $_SERVER)) {
            session(['utm_source' => 'direct']);
        }


        $this->route_name = Route::currentRouteName();
        $this->template = 'frontend.pages.' . $this->route_name . '.' . $this->route_name;
        View::share('current_route', $this->route_name);

        $current_urn = str_replace(env('APP_URL'), '', URL::current());
        if ($current_urn == '')
            $current_urn = '/';
        $this->page = Page::where('urn', $current_urn)->first();
        View::share('page', $this->page);

        $company_phone = '8 (929) 669 96 97';
        View::share('phone', $company_phone);

        $nav_menu = NavMenuItem::all();
        View::share('nav_menu', $nav_menu);
    }

    public function home() {

        $this->varsAdd('portfolio_items', PortfolioItem::take(8)->get());

        $team_people = TeamPerson::where('active', true)->orderBy('order')->get();
        $this->varsAdd('team_people', $team_people);

        return $this->renderOutput();
    }

    public function portfolio() {
        $this->varsAdd('portfolio_items', PortfolioItem::all());

        return $this->renderOutput();
    }

    public function services($service_name) {
        $this->varsAdd('service_name', $service_name);

        return $this->renderOutput();
    }

    public function contacts() {
        return $this->renderOutput();
    }

    public function privacy_policy() {
        return $this->renderOutput();
    }

    public function contract_offer() {
        return $this->renderOutput();
    }

    public function thanks(Request $request) {

        // TODO Зкарыть дыру в доступе через GET!
        if($request->method() == 'POST') {
            $data = array_merge($request->all(), $request->session()->all());
            event(new LeadFormSubmitted($data));
        }

        return $this->renderOutput();
    }
}
