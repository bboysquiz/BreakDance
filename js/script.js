$(function(){
    $('.user__edit').click( function(event){
      event.preventDefault();
    $('.user__photo-menu').fadeIn(1,  function(){
        $('.user__photo-menu') 
        .css('display', 'flex')
        .animate({opacity: 1}, 198);
      });
    });

    $('.user__edit-cancel').click( function(event){
      event.preventDefault();
    $('.user__photo-menu').css('display', 'none');
    });

  $('input[type="file"]').change(function(){
    var value = $("input[type='file']").val();
    $('.js-value').text(value);
  });

	$('#galary__photo-element-1').click( function(event){
    event.preventDefault();
	$('#galary__photo-element-1_mobile').fadeIn(297,  function(){
      $('#galary__photo-element-1_mobile') 
      .css('display', 'flex')
      .animate({opacity: 1}, 198);
    });
  });
  $('#galary__photo-element-2').click( function(event){
    event.preventDefault();
	$('#galary__photo-element-2_mobile').fadeIn(297,  function(){
      $('#galary__photo-element-2_mobile') 
      .css('display', 'flex')
      .animate({opacity: 1}, 198);
    });
  });
  $('#galary__photo-element-3').click( function(event){
    event.preventDefault();
	$('#galary__photo-element-3_mobile').fadeIn(297,  function(){
      $('#galary__photo-element-3_mobile') 
      .css('display', 'flex')
      .animate({opacity: 1}, 198);
    });
  });
  $('#galary__photo-element-4').click( function(event){
    event.preventDefault();
	$('#galary__photo-element-4_mobile').fadeIn(297,  function(){
      $('#galary__photo-element-4_mobile') 
      .css('display', 'flex')
      .animate({opacity: 1}, 198);
    });
  });
  $('#galary__photo-element-5').click( function(event){
    event.preventDefault();
	$('#galary__photo-element-5_mobile').fadeIn(297,  function(){
      $('#galary__photo-element-5_mobile') 
      .css('display', 'flex')
      .animate({opacity: 1}, 198);
    });
  });
  $('#galary__photo-element-6').click( function(event){
    event.preventDefault();
	$('#galary__photo-element-6_mobile').fadeIn(297,  function(){
      $('#galary__photo-element-6_mobile') 
      .css('display', 'flex')
      .animate({opacity: 1}, 198);
    });
  });
  $(document).mouseup(function (e){ // событие клика по веб-документу
      var div = $(".galary__photo-element_mobile"); // тут указываем ID элемента
      if (!div.is(e.target) // если клик был не по нашему блоку
          && div.has(e.target).length === 0) { // и не по его дочерним элементам
        div.fadeOut(297); // скрываем его
      }
  });
  $('.favorites__slider').slick({
    arrows: true,
    dots: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1250,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});