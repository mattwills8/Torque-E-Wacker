function bindMegaMenu($) {
  $(window).load(() => {
    new MegaMenu();
  });

  class MegaMenu {
    constructor() {
      this.entry = $("#mega-menu-entry");

      if (this.entry) {
        this._bindMenuToggle();
        this._bindParentToggle();
      }
    }

    _bindMenuToggle() {
      this.entry
        .find(".mega-menu-highlight-box")
        .first()
        .click(() => {
          this.entry.toggleClass("active");
        });
    }

    _bindParentToggle() {
      const parents = this.entry.find(".torque-mega-menu-parent-item");

      parents.each((index, el) => {
        const parent = $(el);
        const children = parent
          .find(".mega-menu-child-items-wrapper")
          .first()
          .children();

        if (children.length) {
          const childrenOpener = parent
            .find(".torque-mega-menu-item-has-children-marker")
            .first();

          childrenOpener.click(e => {
            e.stopPropagation();

            const parentId = parent.attr("data-id");
            const openChildId = this.entry.attr("data-open-parent");
            const childGroupsWrapper = this.entry.find(
              ".children-items-wrapper"
            );

            const openChildGroup = childGroupsWrapper
              .find(`[data-parent-id="${parentId}"]`)
              .first();

            // mobile only requires this line
            parent.toggleClass("children-open");

            // for desktop
            if (openChildId !== parentId) {
              // when we click on a new parent item we have to update
              // the entry data-open-parent attribute
              this.entry.addClass("children-showing");
              this.entry.attr("data-open-parent", parentId);

              // hide all curent ones first
              childGroupsWrapper.children().hide();

              // show new child group
              openChildGroup.show();
            } else if (
              openChildId &&
              openChildId !== undefined &&
              openChildId === parentId
            ) {
              // close the child tab if we click on the same parent item twice
              this.entry.attr("data-open-parent", "0");

              // hide all curent ones
              childGroupsWrapper.children().hide();
              // show contact details
              childGroupsWrapper
                .children()
                .first()
                .show();
            }
          });
        }
      });
    }
  }
}

module.exports = bindMegaMenu;
