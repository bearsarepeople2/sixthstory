const gulp = require('gulp');
const sass = require('gulp-sass');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

const paths = {
  styles: {
    src: 'src/css/**/*.scss',
    dest: 'assets/css/'
  },
  scripts: {
    src: 'src/js/**/*.js',
    dest: 'assets/js/'
  }
};

gulp.task('styles', function() {
  return gulp.src(paths.styles.src)
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest(paths.styles.dest));
});

gulp.task('scripts', function() {
  return gulp.src(paths.scripts.src, { sourcemaps: true })
    .pipe(babel({presets: ['env']}))
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest(paths.scripts.dest));
});

gulp.task('watch', function() {
    gulp.watch(paths.styles.src, ['styles'])
    gulp.watch(paths.scripts.src, ['scripts'])
});
