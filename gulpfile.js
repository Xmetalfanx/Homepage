'use strict';

var gulp = require('gulp'), 
    sass = require('gulp-dart-sass'),
    sorting = require('postcss-sorting'),
    sourcemaps = require('gulp-sourcemaps');
  
const autoprefixer = require('autoprefixer'),
      postcss = require('gulp-postcss'),
      cleanCSS = require('gulp-clean-css'),
      imagemin = require('gulp-imagemin');;


// run stylelint and fixes fixable issues 
function lintFixScss() {
  const gulpStylelint = require('gulp-stylelint');

  return gulp
    .src('scss/**/*.scss')
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ],
      failAfterError: false,
    }))
    .pipe(gulp.dest('./scss'));

}
exports.lintFixScss = lintFixScss;

// run stylelint and fix fixable issues on the CSS 
function lintFixCss() {
  const gulpStylelint = require('gulp-stylelint');

  return gulp
    .src('css/**/*.css')
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ],
      failAfterError: false,
    }))
    // minifies ... no need for another function 
    .pipe(cleanCSS({debug: true}, (details) => {
      }))
    .pipe(gulp.dest('./css'));
}

exports.lintFixCss = lintFixCss;

// Compiles sass/scss to css gulp option says it's obsolete and to be honest ... the vscode auto-compiler addon for scss works fine
function compileSCSSToCSS() {
    var plugin = [
    // PostCSS Plugins
    autoprefixer,
    sorting,
  ]

  return gulp.src('./scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    //.pipe(postcss(plugin))
    .pipe(sourcemaps.write('../maps'))
    .pipe(gulp.dest('./css'));
}
exports.compileSCSSToCSS = compileSCSSToCSS;

// this is not to be run all the time 
function imageLinuxScreenshotsMin() {
  gulp.src('linuxHQ/screenshots/**/*')
    .pipe(imagemin([
      imagemin.gifsicle({interlaced: true}),
      imagemin.mozjpeg({quality: 90, progressive: true}),
      imagemin.optipng({optimizationLevel: 5}),
    ]))
        
    .pipe(gulp.dest('linuxHQ/optScreenshots'))
}
exports.imageLinuxScreenshotsMin = imageLinuxScreenshotsMin;

function fixLinuxJSON() {
  fixjson linuxHQ/JSON
}


exports.default = gulp.series(lintFixScss,compileSCSSToCSS,lintFixCss)
