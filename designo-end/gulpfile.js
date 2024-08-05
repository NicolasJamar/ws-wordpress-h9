const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();
const sourcemaps = require('gulp-sourcemaps');


// Compile SASS to CSS
gulp.task('sass', function () {
  return gulp.src('./src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist/'));
});

// Minify CSS with Source Maps
gulp.task('minify-css', gulp.series('sass', function () {
  return gulp.src('./src/scss/**/*.scss')
    .pipe(gulp.dest('./dist/'))
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(rename({ extname: '.min.css' }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./dist/'));
}));


// Concatenate and Minify JavaScript
gulp.task('scripts', function () {
  return gulp.src('./src/js/**/*.js')
    .pipe(concat('all.js'))
    .pipe(gulp.dest('./dist/'))
    .pipe(rename('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/'));
});


// BrowserSync Task
gulp.task('browser-sync', function () {
  browserSync.init({
    proxy: "http://localhost/DESIGNO/",
    files: [
      "./**/*.php",
      "./dist/**/*.css",
      "./dist/**/*.js"
    ]
  });
});

// Watch Task
gulp.task('watch', function () {
  gulp.watch('./src/scss/**/*.scss', gulp.series('minify-css'));
  gulp.watch('./src/js/**/*.js', gulp.series('scripts'));
  gulp.watch('./**/*.php').on('change', browserSync.reload);
});

// Default Task
gulp.task('default', gulp.parallel('minify-css', 'scripts', 'browser-sync', 'watch'));


//Read more on https://kontra.agency/modern-wordpress-theme-development-with-gulp-js-a-guide/