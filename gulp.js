const gulp = require('gulp');
const babel = require('gulp-babel');

gulp.task('default', () =>
    gulp.src('system/src/js/main.js')
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(gulp.dest('public/js'))
);