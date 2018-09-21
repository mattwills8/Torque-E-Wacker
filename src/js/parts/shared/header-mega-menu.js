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

      parents.each(this._bindParent.bind(this));
    }

    _bindParent(index, el) {
      const parent = $(el);
      const children = parent
        .find(".mega-menu-child-items-wrapper")
        .first()
        .children();

      if (children.length) {
        // this is the actual icon that needs to be clicked to open the second menu
        const childrenOpener = parent
          .find(".torque-mega-menu-item-has-children-marker")
          .first();

        this._bindMobileFunctionality(parent, childrenOpener);

        this._bindDesktopFunctionality(parent, childrenOpener);
      }
    }

    _bindMobileFunctionality(parent, childrenOpener) {
      childrenOpener.click(e => {
        e.stopPropagation();

        // mobile only requires this line
        parent.toggleClass("children-open");
      });
    }

    _bindDesktopFunctionality(parent, childrenOpener) {
      // curent parent id that we're focusing on
      const parentId = parent.attr("data-id");

      // currently open id
      const openChildId = this.entry.attr("data-open-parent");

      // contains all child menus
      const childGroupsWrapper = this.entry.find(".children-items-wrapper");
      // find our current child menu
      const openChildGroup = childGroupsWrapper
        .find(`[data-parent-id="${parentId}"]`)
        .first();

      this.mouseOvers = { opener: false, menu: false };

      $.each([childrenOpener, openChildGroup], (index, el) => {
        $(el).hover(
          e => {
            // for desktop
            if (openChildId !== parentId) {
              // cache whats been hovered on
              if (index === 0) {
                this.mouseOvers.opener = true;
                this.mouseOvers.menu = false;
              } else {
                this.mouseOvers.menu = true;
                this.mouseOvers.opener = false;
                return;
              }

              // when we hover on a new parent item we have to update
              // the entry data-open-parent attribute
              this.entry.addClass("children-showing");
              this.entry.attr("data-open-parent", parentId);

              // hide all curent ones first
              childGroupsWrapper.children().hide();

              // show new child group
              openChildGroup.show();
            }
          },
          e => {
            //on mouse leave

            if (index === 0) {
              this.mouseOvers.opener = false;
            } else {
              this.mouseOvers.menu = false;
            }

            this._maybeResetMenu(parent, childGroupsWrapper);
          }
        );
      });
    }

    _maybeResetMenu(parent, childGroupsWrapper) {
      setTimeout(() => {
        if (!this.mouseOvers.menu && !this.mouseOvers.opener) {
          this.entry.attr("data-open-parent", "0");

          // hide all curent ones
          childGroupsWrapper.children().hide();
          // show contact details
          childGroupsWrapper
            .children()
            .first()
            .show();
        }
      }, 2000);
    }
  }
}

module.exports = bindMegaMenu;
