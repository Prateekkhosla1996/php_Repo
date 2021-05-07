$('.happy').slick({
    dots: false,
    infinite: true,
    fade:true,
    lazyLoad: 'ondemand',
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 400,
    slidesToShow:1,
    slidesToScroll: 1,
    
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
