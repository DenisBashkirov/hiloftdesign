const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');
const gulpif = require('gulp-if');
const argv = require('yargs').argv;
const debug = require('gulp-debug');
const rjs = require('gulp-requirejs');
const browserSync = require('browser-sync').create();
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const uncss = require('postcss-uncss');
const del = require('del');
const purgecss = require('gulp-purgecss')
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const critical = require('critical').stream;
const criticalCss = require('gulp-penthouse');


sass.compiler = require('node-sass');


/*
VARS
 */

let env = {
    localUrl: 'http://hiloftdesign.prjv2', // Прописать локальный адрес проекта (для BrowserSync)
    watch: {
        styles: [
            './resources/sass/**/*.sass',
            './resources/sass/**/*.scss',
            './public/fonts/icons/style.scss'
        ],
        img: [
            './resources/img/**/*',
        ]
    },
    dest: {
        css: './public/css/'
    }

};


/*
FUNCTIONS
 */

let app = {
    sass: {
        common: [
            './resources/sass/*.sass'
        ],
        frontend: [
            './resources/sass/frontend/**/*.sass',
            './resources/sass/frontend/**/*.scss',
        ],
        backend: [
            './resources/sass/backend/**/*.sass',
            './resources/sass/backend/**/*.scss'
        ]
    }
};

app.compileStyles = function (paths, outputFileName) {
    return gulp.src(paths)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(concat(outputFileName + '.css'))
        .pipe(autoprefixer({
            cascade: true
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(env.dest.css))
};


gulp.task('styles', done => {

    app.compileStyles(
        app.sass.common.concat(app.sass.frontend),
        'frontend'
    );

    app.compileStyles(
        app.sass.common.concat(app.sass.backend),
        'backend'
    );

    done();

});

gulp.task('css-sass', function () {
   return gulp.src(app.sass.common.concat(app.sass.frontend))
       .pipe(sass().on('error', sass.logError))
       .pipe(concat('dist/frontend.css'))
       .pipe(gulp.dest(env.dest.css));
});

gulp.task('min-css', function () {
    return gulp.src('./public/css/frontend.css')
        .pipe(cleanCSS({level: 2}))
        .pipe(autoprefixer({
            cascade: true
        }))
        .pipe(rename('frontend.min.css'))
        .pipe(gulp.dest(env.dest.css))
});

gulp.task('purgecss', () => {
    return gulp.src('./public/css/dist/frontend.css')
        .pipe(purgecss({
            content: ['./resources/views/frontend/**/*.blade.php'],
            safelist: [
                /.is-active/,
                /.swiper*/,
                '.header--sticky',
                /.sx-/,
            ],
        }))
        .pipe(gulp.dest('./public/css'));
})

gulp.task('uncss', function () {

    let plugins = [
        uncss({
            html: [
                './resources/views/frontend/**/*.blade.php'
            ],
            ignore: [
                /.is-active/,
                /.swiper*/,
                '.header--sticky',
                /.sx-/,
                /--/
            ]
        })
    ];

    return gulp.src('./public/css/dist/frontend.css')
        .pipe(postcss(plugins))
        .pipe(gulp.dest('./public/css'));
});



gulp.task('critical-css', function () {
    return gulp.src('./public/css/frontend.min.css')
        .pipe(criticalCss({
            out: 'critical.css', // output file name
            url: 'http://hiloftdesign', // url from where we want penthouse to extract critical styles
            width: 1400, // max window width for critical media queries
            height: 900, // max window height for critical media queries
            userAgent: 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)' // pretend to be googlebot when grabbing critical page styles.
        }))
        .pipe(gulp.dest('./public/css/critical/')); // destination folder for the output file
});


gulp.task('build-css', gulp.series('min-css', 'purgecss'));



gulp.task('del-img', done => {
    return del([
        './public/img/'
    ]);
});


gulp.task('img', done => {

    gulp.src(env.watch.img)
        .pipe(imagemin())
        .pipe(gulp.dest('./public/img/'))

    done();

});


gulp.task('webp', () =>
    gulp.src(env.watch.img)
        .pipe(webp())
        .pipe(gulp.dest('./public/img/'))
);


/*
TASKS
 */

gulp.task('watch', function () {

    /*browserSync.init({
        proxy: env.localUrl,
        notify: false
    });*/

    gulp.watch(
        env.watch.styles,
        gulp.series('styles')
    )
        //.on('change', browserSync.reload);
});

gulp.task('run', gulp.series('styles', 'watch'));


gulp.task('watch-img', function () {

    gulp.watch(
        env.watch.img,
        gulp.series('del-img', 'img', 'webp')
    )

});





/*
COMMANDS
 */

// gulp styles [--prod]
// компилирует .sass файлы в .css [в .min.css]

// gulp run [--prod]
// сперва копилирует .sass в .css, затем запускает виртульный сервер и наблюдатель .sass-файлов
// наблюдатель компилирует файлы стилей и обновляет страницу
