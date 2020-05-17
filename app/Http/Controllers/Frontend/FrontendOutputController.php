<?php

namespace App\Http\Controllers\Frontend;

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
        $this->route_name = Route::currentRouteName();
        $this->template = 'frontend.pages.' . $this->route_name . '.' . $this->route_name;
        View::share('current_route', $this->route_name);

        $current_urn = str_replace(env('APP_URL'), '', URL::current());
        if ($current_urn == '')
            $current_urn = '/';
        $this->page = Page::where('urn', $current_urn)->first();
        //$this->varsAdd('page', $this->page);
        View::share('page', $this->page);

        $company_phone = '8 (929) 669 96 97';
        View::share('phone', $company_phone);

        $nav_menu = NavMenuItem::all();
        View::share('nav_menu', $nav_menu);
    }

    public function home() {

        $this->varsAdd('portfolio_items', PortfolioItem::take(8)->get());

        $team_people = TeamPerson::all();
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

    public function files() {
        $files = [
            [
                'header'=>'Как сэкономить на ремонте 400&nbsp;000&nbsp;р',
                'subheader'=>'Чек-лист, который поможет вам избежать самых распространённых ошибок'
            ],
            [
                'header'=>'90% делают эти ошибки в ремонте ',
                'subheader'=>'Чек-лист, который поможет вам избежать самых распространённых ошибок'
            ],
            [
                'header'=>'Как сделать ремонт в кризис',
                'subheader'=>'Чек-лист, который поможет вам избежать самых распространённых ошибок'
            ]
        ];

        $this->varsAdd('files', $files);

        return $this->renderOutput();
    }

    public function contacts() {
        return $this->renderOutput();
    }
}
