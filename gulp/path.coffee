path = require "path"


 # Declare root and public path

root = path.resolve(__dirname, "../")
pub = path.resolve(root, "public")
dist = path.resolve(root, "dist")


# Make then exportable and declare script, styles and images path

module.exports =
    public: pub
    root: root
    dist: dist
    scripts: path.resolve(pub, "scripts")
    styles: path.resolve(pub, "styles")
    images: path.resolve(pub, "images")
