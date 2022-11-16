$(document).ready( function (){

    $('.slickSlider').slick({
        centerMode: true,
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerMode: true,
                    autoplay: true,
                    infinite: true,
                    slidesToShow: 2,
                    arrows: true,
                    dots: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    autoplay: true,
                    infinite: true,
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                }
            }
        ]
    });

    $('.slickProduct').slick({
        centerMode: true,
        autoplay: false,
        infinite: true,
        slidesToShow: 3,
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    centerMode: true,
                    autoplay: true,
                    infinite: true,
                    slidesToShow: 2,
                    arrows: true,
                    dots: false,
                }
            },
            {
                breakpoint: 998,
                settings: {
                    centerMode: true,
                    autoplay: true,
                    infinite: true,
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                }
            }
        ]
    });

    $('.buttonSearch').click( function (){
       var category=$("input[name='kategorie']:checked").val();
       var capacity=$("input[name='pojemnosc']:checked").val();
       var type=$("input[name='typ']:checked").val();
       console.log(category, capacity, type);
       if((category==0 && capacity==null && type==null) || (category==null && capacity==4 && type==null) || (category==null && capacity==null && type==8) || (category==0 && capacity==4 && type==null) || (category==0 && capacity==null && type==8) || (category==null && capacity==4 && type==8) || (category==0 && capacity==4 && type==8)){
           $('.productsShowcase').removeClass('active');
           if(!$('.bol-brzucha').hasClass('active')){
               $('.bol-brzucha').addClass('active');
           }
       } else if ((category==1 && capacity==null && type==null) || (category==null && capacity==6 && type==null) || (category==null && capacity==null && type==10) || (category==1 && capacity==6 && type==null) || (category==1 && capacity==null && type==10) || (category==null && capacity==6 && type==10) || (category==1 && capacity==6 && type==10)){
           $('.productsShowcase').removeClass('active');
           if(!$('.bol-glowy').hasClass('active')){
               $('.bol-glowy').addClass('active');
           }
       } else if ((category==2 && capacity==null && type==null) || (category==null && capacity==7 && type==null) || (category==null && capacity==null && type==11) || (category==2 && capacity==7 && type==null) || (category==2 && capacity==null && type==11) || (category==null && capacity==7 && type==11) || (category==2 && capacity==7 && type==11)){
           $('.productsShowcase').removeClass('active');
           if(!$('.kaszel').hasClass('active')){
               $('.kaszel').addClass('active');
           }
       } else if ((category==3 && capacity==null && type==null) || (category==null && capacity==5 && type==null) || (category==null && capacity==null && type==9) || (category==3 && capacity==5 && type==null) || (category==3 && capacity==null && type==9) || (category==null && capacity==5 && type==9) || (category==3 && capacity==5 && type==9)){
           $('.productsShowcase').removeClass('active');
           if(!$('.katar').hasClass('active')){
               $('.katar').addClass('active');
           }
       } else {
            $('.productsShowcase').removeClass('active');
        }
    });

    $('.buttonClear').click( function (){
        if(!$('.bol-brzucha').hasClass('active')){
            $('.bol-brzucha').addClass('active');
        }
        if(!$('.bol-glowy').hasClass('active')){
            $('.bol-glowy').addClass('active');
        }
        if(!$('.kaszel').hasClass('active')){
            $('.kaszel').addClass('active');
        }
        if(!$('.katar').hasClass('active')){
            $('.katar').addClass('active');
        }

        $("input[name='kategorie']").prop('checked',false);
        $("input[name='pojemnosc']").prop('checked',false);
        $("input[name='typ']").prop('checked',false);
    })
})