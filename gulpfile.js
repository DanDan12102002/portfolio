'use strict';
let gulp = require('gulp'),
  rename = require('gulp-rename'),
  sass = require('gulp-sass'),
  prefix = require('gulp-autoprefixer'),
  cleanCSS = require('gulp-clean-css');

gulp.task('css', function () {
  gulp.src('assets/sass/style.scss')
    .pipe(sass(''))
    .pipe(cleanCSS(''))
    .pipe(rename('styles.min.css'))
    .pipe(prefix('last 15 versions'))
    .pipe(gulp.dest('assets/public/css'));
});

gulp.task('watch', function () {
  gulp.watch('assets/sass/*.scss', ['css']);
});


// default
gulp.task('default', ['css', 'watch']);