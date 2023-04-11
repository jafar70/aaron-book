"use strict";

(function () {
  var hamburgerIcon = document.querySelector('.gm02__grid__hamburger');
  var menu = document.querySelector('.gm02__grid__menu');
  var background = document.querySelector('.background-overlay');
  var closeButton = document.querySelector('.gm02__grid__closebtn');
  var toggle = function toggle(event) {
    event.stopPropagation();
    hamburgerIcon.classList.toggle('active');
    background.classList.remove('is-active');
    if (!event.target.closest('.gm02__grid__menu')) {
      menu.classList.toggle('active');
      background.classList.toggle('active');
      closeButton.classList.toggle('active');
      menu.classList.contains('active') ? document.addEventListener('click', toggle) : document.removeEventListener('click', toggle);
    } else {}
  };
  hamburgerIcon.addEventListener('click', toggle);
})();
"use strict";

/**
 * LazyLoad
 * Animated scroll to a hashed element on the page.
 * Fallbacks to default hash links when JS is disabled.
 *
 * Usage:
 * See official docs https://github.com/verlok/lazyload
 *
 * Basic Example:
 * <img class="lazy" data-src="https://via.placeholder.com/150" alt="">
 * <div class="lazy" data-bg="https://via.placeholder.com/150"></div>
 */
(function () {
  var lazyLoadInstance = new LazyLoad({
    // Your custom settings go here
  });
})();
"use strict";

(function () {
  /**
   * Search results Form
   * Used in search-form.php
   */
  var searchField = document.getElementById("search");
  var clearFieldButton = document.querySelector(".search-form__close");
  if (searchField) {
    searchField.addEventListener('keyup', function () {
      if (searchField.value == '') {
        clearFieldButton.style.display = 'none';
      } else {
        clearFieldButton.style.display = 'flex';
      }
    });
  }
  if (clearFieldButton) {
    clearFieldButton.addEventListener('click', function (e) {
      e.preventDefault();
      searchField.value = "";
      clearFieldButton.style.display = 'none';
    }, false);
  }

  /**
  * Search results Form
  * Used in search-form-page.php
  */
  var pageSearchField = document.getElementById("search-page");
  var pageClearFieldButton = document.querySelector(".search-form__close-page");
  if (pageSearchField) {
    pageSearchField.addEventListener('keyup', function () {
      if (pageSearchField.value == '') {
        pageClearFieldButton.style.display = 'none';
      } else {
        pageClearFieldButton.style.display = 'flex';
      }
    });
  }
  if (pageSearchField) {
    pageClearFieldButton.addEventListener('click', function (e) {
      e.preventDefault();
      pageSearchField.value = "";
      pageClearFieldButton.style.display = 'none';
    }, false);
  }
})();