var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
    //scssディレクトリの指定
    gulp.src('./src/scss/*.sass')
    //コンパイル実行
    .pipe(sass({style : 'expanded'})) //出力形式の種類　#nested, compact, compressed, expanded.
    //出力先の指定
    .pipe(gulp.dest('./www/css'));
});

gulp.task('watch', function() {
    gulp.watch('./src/scss/*.sass', ['sass']);
});