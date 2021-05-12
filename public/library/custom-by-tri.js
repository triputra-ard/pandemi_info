$(function(){
  AOS.init();

  $('.collapse').on('shown.bs.collapse', function() {
      $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");
  }).on('hidden.bs.collapse', function() {
      $(this).parent().find(".fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");
  });
});
$(window).scroll(function(){
  var scroll = $(window).scrollTop();
  var navbar = document.getElementById('mobileView');
  if (scroll > 50) {
    navbar.classList.add("bg-info");
    navbar.classList.remove("bg-success");
  }else {
    navbar.classList.remove("bg-info");
    navbar.classList.add("bg-success");
  }
});
