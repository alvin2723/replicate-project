$(function(){
  $('.banner-items').slick({
      dots: true,
      infinite: true,
      autoplay:true,
      autoplaySpeed: 2000,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
       
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  });
});

// Popular Course Section
$(function(){
    $('.popular-class-items').slick({
        dots: true,
        infinite: true,
        autoplay:true,
        autoplaySpeed: 2000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
         
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 520,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });
});

// Expert Course Section
$(function(){
  $('.expert-class-items').slick({
      dots: false,
      infinite: false,
      arrows:false,
      autoplay:false,
      slidesToShow: 4,
      responsive: [
      
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            arrows:true,
            autoplay:true,
          }
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows:true,
            autoplay:true,
          }
        }
      ]
  });
});

// Multiple Course Section
$(function(){
    $('.mutiple-class-items').slick({
        dots: true,
        infinite: true,
        autoplay:true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 520,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });
});

// LatihID Course Section
$(function(){
    $('.latih-class-items').slick({
        dots: false,
        infinite: false,
        autoplay:false,
        rows:3,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 768,
            settings: {
                arrows:false,
                rows:3,
                slidesPerRow: 1,
                slidesToShow: 2,
                slidesToScroll: 1,
              
            }
          },
          {
            breakpoint: 520,
            settings: {
              arrows:true,
              rows:3,
              slidesPerRow: 1,
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
    });
});
