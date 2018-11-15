'use strict';
let gulp = require('gulp'),
  concatCSS = require('gulp-concat-css'),
  rename = require('gulp-rename'),
  sass = require('gulp-sass'),
  prefix = require('gulp-autoprefixer'),
  cleanCSS = require('gulp-clean-css');

gulp.task('css', function () {
  gulp.src('assets/sass/style.scss')
    .pipe(sass(''))
    .pipe(rename('styles.css'))
    .pipe(cleanCSS(''))
    .pipe(prefix('last 15 versions'))
    .pipe(gulp.dest('assets/public/css'));
});

gulp.task('concat', function () {
  gulp.src('assets/public/css/*.css')
    .pipe(concatCSS('bundle.css'))
    .pipe(cleanCSS(''))
    .pipe(rename('bundle.min.css'))
    .pipe(gulp.dest('assets/public/css'));
});

gulp.task('watch', function () {
  gulp.watch('assets/sass/*.scss', ['css']);
});


// default
gulp.task('default', ['concat', 'css', 'watch']);