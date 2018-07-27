var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    minify = require('gulp-minify-css'),
    watch = require('gulp-watch');

gulp.task('js', function () {
    gulp.src(['js/*.js', '!js/customizer.js'])
        .pipe(uglify())
	.pipe(concat('app.js'))
        .pipe(gulp.dest('build'));
});

gulp.task('css', function () {
    return gulp.src(['sass/start.+(scss|css)', 'css/*.+(scss|css)'])
        .pipe(sass())
        .pipe(minify({keepBreaks: true}))
	    .pipe(concat('app.css'))
        .pipe(gulp.dest('build'));
});

gulp.task('watch', function () {
    gulp.watch(['sass/**/*.+(scss|css)', 'css/*.+(scss|css)', 'js/*.js'], ['css', 'js']);
});
