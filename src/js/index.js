import '../scss/main.scss'

if (!global._babelPolyfill) {
  require('babel-polyfill')
}

require('./parts/shared/header-mega-menu')(jQuery)
require('./parts/templates/loop-post')(jQuery)
