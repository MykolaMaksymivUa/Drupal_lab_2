var gulp     = require('gulp'),
sass         = require('gulp-sass'),
browserSync  = require('browser-sync'),
autoprefixer = require('gulp-autoprefixer'),
cleancss     = require('gulp-clean-css'),
rename       = require('gulp-rename'); 

gulp.task('sass', function () {
    return gulp.src('app/scss/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer(['last 15 versions', '>1%', 'ie 8', 'ie 7'], {cascade: true}))
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('browser-sync', function () {
    browserSync({
        server: {
            baseDir: 'app'
        },
        notify: false
    })
});

gulp.task('watch', ['browser-sync', 'sass'], function () {
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('app/*.html', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
});