// DEPENDENCIES =================================================================================
// PACKAGES ------------------------------------------------------------------------------------
const gulp = require('gulp');
const watch = require('gulp-watch');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();


const path = {
    css: './css/*.scss'
};

const js_path = [
    './node_modules/jquery/dist/jquery.min.js',
    './js/main.js'
];

// TASKS ========================================================================================
// DEFAULT --------------------------------------------------------------------------------------
/**
 * Tasks who can be run
 * 
 * default : run for local watch
 */
gulp.task('default', () => {
    gulp.start('watch');
});

// WATCH ----------------------------------------------------------------------------------------
/**
 * Minify and compile assets, and then launch browserSync
 */
gulp.task('watch', function () {
    watcher();
    minify_css();
});

/**
 * Browser_Sync restart after change
 */
function watcher() {
    browserSync.init({
        proxy: "localhost/portfoliov2",
        browser: ""
    });

    watch(["./css/*.scss"], function () {
        minify_css();
        browserSync.reload();
    });

    watch(["index.php"], function () {
        browserSync.reload();
    });

    watch("./js/*.js", () => {
        minify_js();
        browserSync.reload();
    });
}

// ASSETS MINIFICATION --------------------------------------------------------------------------
/**
 * reduce CSS sources and librairies into a single minified CSS file
 *
 * @returns {*|void} result of Gulp data Stream
 */
function minify_css() { 
    return gulp.src([path.css])
        .pipe(sass())
        .pipe(concat('custom.min.css'))
        .pipe(minifyCSS())
        .pipe(gulp.dest("./"));
}

/**
 * reduce JS sources and librairies into a single minified script file
 *
 * @returns {*|void} result of Gulp data Stream
 */
function minify_js() {
    return gulp.src(js_path)
        .pipe(concat('script.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest("./"));
}
