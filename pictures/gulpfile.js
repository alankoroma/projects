var gulp = require('gulp');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('js-build', function () {
    return gulp.src('assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .pipe(concat('app.js'))
        .pipe(gulp.dest('assets/builds/js'));
});

gulp.src('node_modules/jquery/dist/jquery.min.js')
    .pipe(gulp.dest('assets/builds/js/jquery'));

gulp.src('node_modules/vue/dist/vue.min.js')
    .pipe(gulp.dest('assets/builds/js/vue'));

gulp.src('node_modules/bootstrap/dist/js/Bootstrap.js')
    .pipe(gulp.dest('assets/builds/js/bootstrap'));

gulp.src('node_modules/bootstrap/dist/css/bootstrap.min.css')
    .pipe(gulp.dest('assets/builds/css/bootstrap'));

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/js/*.js', ['js-build']);
});

// Default Task
gulp.task('default', ['js-build', 'watch']);
