let gulp = require('gulp')
  sass = require('gulp-sass');

gulp.task('css', function() {
  gulp.src('assets/sass/style.scss')
  .pipe(sass(''))
  .pipe(gulp.dest('./public/css'));
});