var gulp = require('gulp');
var sass = require('gulp-sass');
var slim = require("gulp-slim");

gulp.task('sass', function(){
    gulp.src('./src/scss/*.sass')
    .pipe(sass({style : 'expanded'}))
    .pipe(gulp.dest('./www/css'));
});

/*gulp.task('slim', function(){
    gulp.src('./src/slim/*.slim')
    .pipe(sass({style : 'expanded'}))
    .pipe(gulp.dest('./www/css'));
});*/

gulp.task('watch', function() {
    gulp.watch('./src/scss/*.sass', ['sass']);
});