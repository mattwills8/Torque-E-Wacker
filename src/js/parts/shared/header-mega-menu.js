function bindMegaMenu($) {

  $(window).load(() => {
      new MegaMenu()
  })

  class MegaMenu {
    constructor() {
      const entry = $('#mega-menu-entry')

      if (entry) {
        this._bind()
      }
    }

    _bind() {
      console.log('worked')
    }
  }
}

module.exports = bindMegaMenu
