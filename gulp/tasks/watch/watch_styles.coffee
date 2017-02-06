gulp = require "gulp"
path = require "../../path"
stylus = require "gulp-stylus"
koutoSwiss = require "kouto-swiss"
sourcemaps = require "gulp-sourcemaps"
watch = require "gulp-watch"

gulp.task "watch:styles", ["build:styles"], ()->
  gulp.watch path.styles + "/**/**/*.styl", ["build:styles"]
  return

