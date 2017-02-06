gulp = require "gulp"
path = require "../../path"
watch = require "gulp-watch"
imagemin = require "gulp-imagemin"
pngquant = require "imagemin-pngquant"

gulp.task "watch:images", ["build:images"], ()->
  gulp.watch path.images + "/**/*", ["build:images"]
