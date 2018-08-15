function bindPostAnchor($) {
  $(window).load(() => {
    const anchors = $('.wacker-loop-post-link-button')

    anchors.each((index, anchor) => {
      $(anchor).click(() => {
        // create temp input
        const temp = $('<input>')
        $('body').append(temp)

        // add copy text to temp input
        const href = window.location.href
        let page = href

        // remove any current anchor from href
        const hashindex = href.indexOf('#')
        if (hashindex > -1) {
          page = href.substring(0, hashindex)
        }

        // make sure we have trailing /
        if (page.charAt(page.length - 1) !== '/') {
          page = `${page}/`
        }

        // append anchor to href
        const copy = `${page}#${anchor.id}`
        temp.val(copy).select()

        document.execCommand('copy')
        alert(`Copied link: ${copy}`)

        // delete temp input
        temp.remove()
      })
    })
  })
}

module.exports = bindPostAnchor
