gulp = require "gulp"
imagemin = require "gulp-imagemin"
path = require "../../path"
pngquant = require "imagemin-pngquant"
# gzip = require "gulp-gzip"

gulp.task "build:images", ()->
  gulp.src path.images + "/**/*"
  .pipe imagemin({
    progressive: true
    use: [pngquant()]
  })
  .on "error", (err)-> console.error err
  # .pipe gzip()
  .pipe gulp.dest(path.dist + "/images")
