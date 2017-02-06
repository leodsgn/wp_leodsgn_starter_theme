gulp = require "gulp"
gulpWebpack = require "gulp-webpack"
webpack = require "webpack"
path = require "../../path"
webpackConfig = require path.root + "/webpack.config.js"
sourcemaps = require "gulp-sourcemaps"

gulp.task "build:scripts", ()->
  return gulp.src path.scripts + "/index.js"
    .pipe gulpWebpack(webpackConfig)
    .on "error", (err)-> console.log(err)
    .pipe gulp.dest(path.dist + "/scripts")
