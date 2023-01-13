$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 1000,
    margin:30,
    dot:false,
    nav:false,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        768:{
            items:2,
        }
    }
})