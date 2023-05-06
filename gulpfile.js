var gulp = require('gulp');

// Image related
imagemin = import('gulp-imagemin');

// this is not to be run all the time
async function imageLinuxScreenshotsMin() {
  gulp
    .src('linuxHQ/screenshots/**/*')
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.mozjpeg({ quality: 90, progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
      ])
    )

    .pipe(gulp.dest('linuxHQ/optScreenshots'));
}
exports.imageLinuxScreenshotsMin = imageLinuxScreenshotsMin;
