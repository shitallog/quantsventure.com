(function () {
  'use strict';

  $("#copy-year").html(new Date().getFullYear());

  $(document).ready(function()
  {
    // $("main").css({paddingTop: $("#navbar").outerHeight()});
    document.addEventListener('click', function(event)
    {
      var mainmenu = document.getElementById('main-navigation');
      if(mainmenu.classList.contains('show') && !event.target.isEqualNode(mainmenu) && !mainmenu.contains(event.target)) {
          $('.navbar-collapse').collapse('hide');
      }
    });

    $("#main-navigation .dropdown-item").on('click', function(event)
    {     
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "")
      {
        // var hash = 'packages.html'+this.hash;
        var hash = this.href;
        $(this).addClass('active');
        $("#main-navigation .dropdown-item").not(this).removeClass("active");

        window.location.hash = hash;
      }
    });

    if ($(window).width() <= 992)
    {
      $(".dropdown-toggle").attr("role", "button");
      $(".dropdown-toggle").attr("data-bs-toggle", "dropdown");
      $(".dropdown-toggle").attr("aria-expanded", "false");
    }
    else
    {
      $(".dropdown-toggle").removeAttr("role");
      $(".dropdown-toggle").removeAttr("data-bs-toggle");
      $(".dropdown-toggle").removeAttr("aria-expanded");
    }
  });

  $(window).resize(function()
  {
    if ($(window).width() <= 992)
    {
      $(".dropdown-toggle").attr("role", "button");
      $(".dropdown-toggle").attr("data-bs-toggle", "dropdown");
      $(".dropdown-toggle").attr("aria-expanded", "false");
    }
    else
    {
      $(".dropdown-toggle").removeAttr("role");
      $(".dropdown-toggle").removeAttr("data-bs-toggle");
      $(".dropdown-toggle").removeAttr("aria-expanded");
    }
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() != 0) {
      $("#scroll-top").addClass('show');
    } else {
      $("#scroll-top").removeClass('show');
    }

    if (window.scrollY > 0)
    {
      document.getElementById('navbar-fixed').classList.add('fixed-top');
      var navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
    }
    else
    {
      document.getElementById('navbar-fixed').classList.remove('fixed-top');
      document.body.style.paddingTop = '0';
    }
  });

  /**** Scroll to top *****/
  $("#scroll-top").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 100);
    return false;
  });

})()