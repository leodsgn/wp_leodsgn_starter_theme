gulp = require "gulp"
stylus = require "gulp-stylus"
koutoSwiss = require "kouto-swiss"
path = require "../../path"
sourcemaps = require "gulp-sourcemaps"

gulp.task "build:styles", ()->
  return gulp.src path.styles +  "/index.styl"
  .pipe sourcemaps.init()
  .pipe stylus({ compress: true, use: koutoSwiss(), 'include css': true })
  .on "error", (err)-> console.log err
  .pipe sourcemaps.write()
  .pipe gulp.dest(path.dist + "/styles")
