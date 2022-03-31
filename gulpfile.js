//const projectUrl = "localhost/MI_PROJECTS/socialPlatform/";

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const concat = require('gulp-concat');
const css = require('cssnano');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const phpToHtml = require('gulp-php2html');
const phpServer = require('gulp-connect-php');
const browserSync = require('browser-sync').create();

let paths = {
    styles:{
        src: "./scss/**/style.scss",
        dest: "./dist/css/"
    },
    script: {
        src: "./js/**/*.js",
        dest: "./dist/js"
    },
    php:{
        src: "./index.php",
        dest: "./"
    }
}

function styles(){
    
    gulp.src(paths.styles.src)
    .pipe(sass())
    .on('error',sass.logError)
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(postcss([autoprefixer('last 2 versions'), css()]))
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream())
}

function scripts(){
    gulp.src(paths.script.src)
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.script.dest))
    .pipe(concat('app.min.js'))
    .pipe(gulp.dest(paths.script.dest))
    .pipe(browserSync.stream())
}

function phpHtml(){
    gulp.src(paths.php.src)
    .pipe(phpToHtml())
    .pipe(gulp.dest(paths.php.dest))
    .pipe(browserSync.stream());
}

function watch(){

    phpServer.server({
        port: 8000,
        keepalive: true,
        base: "./"
    },function(){
        browserSync.init({
            proxy: '127.0.0.1:8000'
        });
    })

    gulp.watch('./scss/**/*.scss').on('change',gulp.series(styles));
    gulp.watch(paths.script.src).on('change',gulp.series(scripts));
    gulp.watch('./**/*.php',gulp.series(phpHtml,browserSync.reload));
}

exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.phpHtml = phpHtml;

let build = gulp.parallel(styles,scripts,phpHtml,watch);

exports.default = watch;