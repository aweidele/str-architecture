var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var pump = require('pump');

var jsQueue = [
  'node_modules/owl.carousel2/dist/owl.carousel.js',
  'src/js/*.js'
];

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var autoprefixerOptions = {
  browsers: ['last 4 versions']
};

gulp.task('sass', function(){
  return gulp
    .src('src/sass/str.scss')
    .pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('css/'))
});

gulp.task('compress', function() {
  return gulp.src(jsQueue)
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('js'))
    .pipe(rename('str.js'))
    .pipe(uglify())
    .pipe(gulp.dest('js'));
});

gulp.task('watch', function(){
  gulp.watch('src/sass/**/*.scss', gulp.series('sass'));
  gulp.watch('src/js/**/*.js', gulp.series('compress'));
});

gulp.task('default', gulp.series('sass', 'compress', 'watch'));
