gulp = require "gulp"
bs = require("browser-sync").create()
php = require("gulp-connect-php")

gulp.task "php", ()->
  php.server { base: '../../../', port: 8000, keepalive: true}

gulp.task "connect", ["build", "php"], ()->
  bs.init({
    files: [
      './**/*.php',
      './dist/scripts/*.js',
      './dist/styles/*.css',
      './dist/images/*.js'
      ]
    proxy:
      target: "localhost:8000"
      ws: true # enables websockets
    open: true
  })
