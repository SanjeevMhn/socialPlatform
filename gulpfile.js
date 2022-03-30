const projectUrl = "localhost/MI_PROJECTS/socialPlatform/";

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const concat = require('gulp-concat');
const css = require('cssnano');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();

let paths = {
    styles:{
        src: "./scss/**/style.scss",
        dest: "./dist/css/"
    },
    script: {
        src: "./js/**/*.js",
        dest: "./dist/js"
    }
}

function styles(){
    let plugins = [
        autoprefixer(),
        css()
    ]
    gulp.src(paths.styles.src)
    .pipe(sass())
    .on('error',sass.logError)
    .pipe(postcss([autoprefixer('last 2 versions')]))
    .pipe(sourcemaps.init())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(postcss([autoprefixer('last 2 versions')]))
    .pipe(sourcemaps.write('./'))
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

function watch(){
    browserSync.init({
        proxy: projectUrl,
    });

    gulp.watch(paths.styles.src).on('change',gulp.series(styles));
    gulp.watch(paths.script.dest).on('change',gulp.series(scripts));
    gulp.watch("./*.php").on('change',browserSync.reload);
}

exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;

let build = gulp.parallel(styles,scripts,watch);

exports.default = watch;