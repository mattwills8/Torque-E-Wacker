import "../scss/main.scss"

if (!global._babelPolyfill) {
	require('babel-polyfill')
}

require('./parts/shared/header-mega-menu')(jQuery)
