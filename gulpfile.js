
// --------------------------------------------
// Dependencies
// --------------------------------------------
var autoprefixer = require('gulp-autoprefixer'),
  concat = require('gulp-concat'),
  del = require('del'),
  gulp = require('gulp'),
  minifycss = require('gulp-minify-css'),
  plumber = require('gulp-plumber'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  rename = require('gulp-rename'),
  uglify = require('gulp-uglify'),
  images = require('gulp-imagemin'),
  browserSync = require('browser-sync').create(),
  imagemin = require('gulp-imagemin'),
  babel = require('gulp-babel'),
  terser = require('gulp-terser');



// paths
var styleSrc = 'src/sass/**/*.sass',
  styleDest = 'public/assets/css/',
  htmlSrc = 'src/',
  htmlDest = 'public/',
  vendorSrc = 'src/js/vendors/',
  vendorDest = 'public/assets/js/',
  scriptSrc = 'src/js/*.js',
  scriptDest = 'public/assets/js/';




// --------------------------------------------
// Stand Alone Tasks
// --------------------------------------------





// Compiles all SASS files


gulp.task('sass', function () {
  return gulp
    .src(styleSrc)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(rename({
      basename: 'main',
      suffix: '.min'
    }))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(minifycss())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(styleDest));
});





gulp.task('images', function () {
  gulp.src('src/img/**/*')
    .pipe(images())
    .pipe(imagemin())
    .pipe(gulp.dest('public/assets/img'));
});

// Uglify js files
gulp.task('scripts', function () {
  gulp.src('src/js/*.js')
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(babel())
    .pipe(concat('main.min.js'))
    .pipe(terser())
    .pipe(sourcemaps.write())

    .pipe(gulp.dest('public/assets/js'));
});


//Concat and Compress Vendor .js files
gulp.task('vendors', function () {
  gulp.src(
    [
      'src/js/vendors/jquery.min.js',
      'src/js/vendors/*.js'
    ])
    .pipe(plumber())
    .pipe(concat('vendors.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('public/assets/js'));
});



// Watch for changes
gulp.task('watch', function () {

  // Serve files from the root of this project
  browserSync.init({

    proxy: 'marbin.digital/amplifon-signia/public/',
    // notify: false


  });

  gulp.watch(styleSrc, ['sass']);
  gulp.watch(styleSrc, ['images']);
  gulp.watch(scriptSrc, ['scripts']);
  gulp.watch(vendorSrc, ['vendors']);
  gulp.watch([

    'public/*/*.html',
    'public/*/*.php',
    'public/*.html',
    'public/assets/css/*.css',
    'public/assets/js/*.js',
    'public/assets/js/vendors/*.js'])
    .on('change', browserSync.reload);

});


// use default task to launch Browsersync and watch JS files
gulp.task('default', ['sass', 'scripts', 'vendors', 'watch', 'images'], function () { });