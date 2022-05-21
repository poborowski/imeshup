function toggleIconHamburger() {
    var btn = document.querySelector(".navbar-toggler");
    if (btn) {
      var icon = document.querySelector(".togglerIcon");
      btn.addEventListener("click", function () {
        icon.classList.toggle("fa-bars");
        icon.classList.toggle("fa-times");
        document.body.classList.toggle("overlay-hover");
        document.body.classList.toggle("lockScroll");
      });
    }
  }


  function aosInit() {
    AOS.init({
      startEvent: "DOMContentLoaded",
      initClassName: "aos-init",
      animatedClassName: "aos-animate",
      offset: 120,
      delay: 20,
      duration: 600,
      easing: "ease",
      once: false,
      mirror: false,
      anchorPlacement: "top-bottom",
      debounceDelay: 50,
      throttleDelay: 99,
    });
  }

  function addChevronSubmenu(target) {
    jQuery(`<i class="fa fa-chevron-down show-dropdown"></i>`).appendTo(target);
    
    jQuery(target).find(".show-dropdown").on("click", function () {
        this.classList.toggle('fa-chevron-down')
        this.classList.toggle('fa-chevron-up')
        jQuery(target).find(".dropdown-menu").toggle("d-block");
    });
  }

  function dropDownMenu(){
      const linksDropDown = document.querySelectorAll('.header-site .menu-item-has-children');

      linksDropDown.forEach(link=>{
        addChevronSubmenu(link)
      })
  }

  jQuery(document).ready(function () {
    toggleIconHamburger();
    aosInit();
    dropDownMenu()
  });

