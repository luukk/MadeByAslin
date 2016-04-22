$(window).load(function(){
  $('.scroll').click(function(e) {
    e.preventDefault();
    $('.navbar-nav .active').removeClass('active');
        $(this).addClass('active');
    $('body').animate({
        scrollTop: eval($('.' + $(this).attr('target')).offset().top - 70)
    }, 1000);
});
})
