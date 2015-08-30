var gulp = require('gulp');
var jade = require('gulp-jade');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
gulp.task('watch', function() {gulp.watch('src/css/*.sass', ['sass']);gulp.watch('src/*.js', ['min']);gulp.watch('src/*.jade', ['jade']);});
gulp.task('sass', function () {gulp.src('src/css/*.sass').pipe(sass().on('error', sass.logError)).pipe(gulp.dest('build/css'));});
gulp.task('jade', function() {return gulp.src('src/*.jade').pipe(jade()).pipe(gulp.dest('build'));});
gulp.task('min', function() {return gulp.src('src/*.js').pipe(uglify()).pipe(gulp.dest('build'));});
gulp.task('default', function() {console.log('Hello World');}); 
