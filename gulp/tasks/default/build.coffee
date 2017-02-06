gulp = require "gulp"
runSequence = require "run-sequence"

gulp.task "build", (callback)->
    runSequence(
        "build:images",
        "build:styles",
        "build:scripts",
        callback
    )
