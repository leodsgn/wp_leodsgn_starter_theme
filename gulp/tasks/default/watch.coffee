gulp = require "gulp"
runSequence = require "run-sequence"

gulp.task "watch", [
  "watch:images",
  "watch:styles",
  "watch:scripts"
  ]
