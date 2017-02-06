gulp = require "gulp"
path = require "../../path"
gulpWebpack = require "gulp-webpack"
webpack = require "webpack"
sourcemaps = require "gulp-sourcemaps"
watch = require "gulp-watch"

gulp.task "watch:scripts", ["build:scripts"], ()->
  gulp.watch path.scripts + "/**/**/*.js", ["build:scripts"]
