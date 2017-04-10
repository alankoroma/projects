var gulp = require('gulp');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var gulpLoadPlugins = require('gulp-load-plugins'), plugins = gulpLoadPlugins();


gulp.task('js-build', function () {
   return gulp.src('assets/js/*.js')
      .pipe(plugins.jshint())
      .pipe(plugins.jshint.reporter('default'))
      .pipe(plugins.uglify())
      .pipe(plugins.concat('app.js'))
      .pipe(gulp.dest('assets/builds/js'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/js/*.js', ['js-build']);
});

// Default Task
gulp.task('default', ['js-build', 'watch']);
