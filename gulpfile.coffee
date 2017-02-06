gulp = require "gulp"
path = require "path"
requireDir = require "require-dir"
runSequence = require "run-sequence"

requireDir path.resolve(__dirname, "gulp/tasks/"), {recurse: true}

gulp.task "default", (callback)->
  runSequence(
    "build",
    "watch",
    "connect",
    callback
  )
