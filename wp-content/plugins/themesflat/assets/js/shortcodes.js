/**

* testimonialCarousel     
* portfolioCarousel
* blogCarousel             
* themesflatCounter
* slider
* logoClient
* googleMap
* videothumbnail
* progressBar
* rowStyling
* detectViewport
* spacer 
* sectionVideo

*/

;(function($) {
    'use strict'

var testimonialCarousel = function() {   
    $('.testimonial-sliders.1').each(function() {   
        var $this = $(this),datas = $this
            if ( $().owlCarousel ) {   
                $this.find('.slide_nav .slides').owlCarousel({
                    autoWidth:true,
                    nav: false,
                    dots: false,
                    margin: 4
                });
               $this.find('.testimonial-slider').on('initialized.owl.carousel change.owl.carousel changed.owl.carousel', function(e) { 
                    if (!e.namespace || e.type != 'initialized' && e.property.name != 'position') return;
                    var current = e.relatedTarget.current()
                    var items = $(this).find('.owl-stage').children()
                    var add = e.type == 'changed' || e.type == 'initialized'
                    var owl = $(this);
                    $this.find('.slide_nav li').on("click",function(){
                        owl.trigger("to.owl.carousel", [$(this).parent().index(), 500, true]);
                    })
                    $this.find('.slide_nav li').eq(e.relatedTarget.normalize(current) - 1).toggleClass('current', add);
                }).owlCarousel({
                    loop: true,
                    margin:datas.data('margin'),
                    nav: Boolean( datas.data('show_direction') )? true: false,
                    dots: Boolean( datas.data('show_control') )? true: false,                   
                    autoplay: Boolean( datas.data('autoplay') )? true: false,       
                    items: datas.data('items'),         
                    responsive:{
                        0:{
                            items: 1
                        },
                        767:{
                            items: next_item(datas.data('items') -1,$this.width())
                        },
                        991:{
                            items: next_item(datas.data('items'),$this.width())
                        },
                        1200: {
                            items: datas.data('items')
                        }
                    }
                });
               
            }
    });
};    

var portfolioCarousel = function() {
    if ( $( ".themesflat-portfolio" ).hasClass( "themesflat_enable_carousel" ) ) {          
        if ( $().owlCarousel ) { 
            $('.themesflat-portfolio.themesflat_enable_carousel').find('.portfolio-container').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                dots: false,                   
                autoplay: false,                
                responsive:{
                    0:{
                        items: 1
                    },
                    480: {
                        items: 2
                    },
                    767:{
                        items: 2
                    },
                    991:{
                        items: 2
                    },
                    1200: {
                        items: $('.portfolio-container').data('item')
                    }
                }
            });
        }
    }
}; 

var portfolioIsotope = function() { 
    if ( $( '.portfolio-container' ).hasClass('show_filter_portfolio') ) {
        if ( $().isotope ) {           
            var $container = $('.portfolio-container');
            $container.imagesLoaded(function(){
                $container.isotope({
                    layoutMode: 'fitRows',
                    itemSelector: '.item',
                    transitionDuration: '1s'
                });
            });
            $('.portfolio-filter li').on('click',function() {                           
                var selector = $(this).find("a").attr('data-filter');
                $('.portfolio-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });            
        };
    };        
};

var portfolioMasory = function() {         
    if ( $().isotope ) {           
        var $container = $('.portfolio-container.masonry');
        $container.imagesLoaded(function(){
            $container.masonry({
                itemSelector: '.item',
                columnWidth: 1,
                transitionDuration: '0.5s',                    
                layoutMode: 'masonry',                 
                masonry: { columnWidth: $container.width() / 12 }
            }); // isotope
        });
        $(window).resize(function() {
            $container.masonry({
               masonry: { columnWidth: $container.width() / 12 }
           });
        }); // relayout        
        
    };
}; 

var portfolioLoadMore = function() {       
    var $container = $('.portfolio-container') 
    var $nav = ".navigation.portfolio.loadmore a";
    $($nav).on('click', function(e) {
        e.preventDefault();  
        $('<span/>', {
            class: 'infscr-loading',
            text: 'Loading...',
        }).appendTo($container);

        $.ajax({
            type: "GET",
            url: $(this).attr('href'),
            dataType: "html",
            success: function( out ) {
                var result = $(out).find('.portfolio-container .item');                        
                var nextlink = $(out).find($nav).attr('href');
                result.css({ opacity: 0 });   
                if ($container.hasClass('masonry')) {
                    $container.append(result).imagesLoaded(function () {
                        result.css({ opacity: 1 });
                        $container.masonry('appended', result);
                    });
                }else {                     
                    $container.append(result).imagesLoaded(function () {
                        result.css({ opacity: 1 });
                        $container.isotope('appended', result);
                    });
                }

                if ( nextlink != undefined && result != undefined) {
                    $($nav).attr('href', nextlink);
                    $container.find('.infscr-loading').remove();
                } else {
                    $container.find('.infscr-loading').addClass('no-ajax').text('All posts loaded.').delay(2000).queue(function() {$(this).remove();});
                    $($nav).remove();
                }
            },
            error: function() {
               $container.find('.infscr-loading').addClass('no-ajax').text('All posts loaded.').delay(2000).queue(function() {$(this).remove();});
               $($nav).remove();
           }
       })
    })        
}

var blogCarousel = function() {
    if ( $().owlCarousel ) { 
        $(".blog-shortcode.has-carousel:not(.blog-masonry)").each(function() {
            var $this = $(this),_items = $this.data('items');
            $this.owlCarousel({
                loop: true,
                margin: 0,
                nav: $('.blog-shortcode.has-carousel:not(.blog-masonry)').data('nav'),
                dots: $('.blog-shortcode.has-carousel:not(.blog-masonry)').data('dot'),                   
                autoplay: $('.blog-shortcode.has-carousel:not(.blog-masonry)').data('auto'),                
                responsive:{
                    0:{
                        items: next_item(_items-2,$this.width()),
                        dots: false,
                    },
                    767:{
                        items: next_item(_items-1,$this.width())
                    },
                    991:{
                        items: next_item(_items,$this.width())
                    },
                    1200: {
                        items: _items
                    }
                }
            });
        });
    }
};  

var slider = function() {
    if ($().owlCarousel){
        $('.themesflat_enable_slider').each(function() {
            var $this = $(this),
                datas =  $this;
                $this.owlCarousel({
                    loop: true,
                    margin:datas.data('margin'),
                    nav: Boolean( datas.data('show_direction') )? true: false,
                    dots: Boolean( datas.data('show_control') )? true: false,                   
                    autoplay: Boolean( datas.data('autoplay') )? true: false,       
                    items: datas.data('slides_per_view'),         
                    responsive:{
                        0:{
                            items: 1
                        },
                        767:{
                            items: next_item(datas.data('slides_per_view') -1,$this.width())
                        },
                        991:{
                            items: next_item(datas.data('slides_per_view'),$this.width())
                        },
                        1200: {
                            items: datas.data('slides_per_view')
                        }
                    }
                })
        })
    }
}

var logoClient = function() {
    $('.themesflat_client_slider').each(function() {             
        if ( $().owlCarousel ) {   
            var data = $(this).find('.themesflat_client_slider_inner');
            $('.themesflat_client_slider_inner').owlCarousel({
                loop: true,
                margin: parseInt( data.data('margin') ),
                nav: Boolean( data.data('hide_buttons') )? false: true, 
                dots: Boolean( data.data('hide_control') )? false: true,                   
                autoplay: Boolean( data.data('autoplay') )? true: false,                        
                responsive:{
                    0:{
                        items: 2
                    },                                              
                    480:{
                        items: 3
                    }, 
                    767:{
                        items: 4
                    },
                    991:{
                        items: 5
                    },
                    1200: {
                        items: parseInt( data.data('slides_per_view') )
                    }
                }
            });
        }
    });
};

var googleMap = function() {            
    if ( $().gmap3 ) {  
        $("#map").gmap3({
            map:{
                options:{
                    zoom: 12,
                    mapTypeId: 'themesflat_style',
                    mapTypeControlOptions: {
                        mapTypeIds: ['themesflat_style', google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]
                    },
                    scrollwheel: false
                }
            },
            getlatlng:{
                address:  $('.themesflat-maps').data('address'),
                callback: function(results) {
                    if ( !results ) return;
                    var img = '';
                    if ($('.themesflat-maps').data('images_layout_address') != '' ) {
                        img = "<img src=".concat($('.themesflat-maps').data('images_layout_address')).concat(" alt='images'>");
                    }
                    $(this).gmap3('get').setCenter(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                    $(this).gmap3({
                        marker:{
                            latLng:results[0].geometry.location,
                            options:{
                                icon: $('.themesflat-maps').data('images')
                            }
                        },
                        overlay:{
                            latLng:results[0].geometry.location,
                            options:{
                                content:  img,
                                offset:{
                                    y:$('.themesflat-maps').data('address_x'),
                                    x:$('.themesflat-maps').data('address_y')
                                }
                            }
                        }
                    });
                }
            },
            styledmaptype:{
                id: "themesflat_style",
                options:{
                    name: "Themesflat Map"
                },
                styles:[
                {
                      "featureType": "water",
                      "elementType": "geometry",
                      "stylers": [
                          {
                              "color": "#e9e9e9"
                          },
                          {
                              "lightness": 17
                          }
                      ]
                  },
                  {
                      "featureType": "landscape",
                      "elementType": "geometry",
                      "stylers": [
                          {
                              "color": "#f5f5f5"
                          },
                          {
                              "lightness": 20
                          }
                      ]
                  },
                  {
                      "featureType": "road.highway",
                      "elementType": "geometry.fill",
                      "stylers": [
                          {
                              "color": "#ffffff"
                          },
                          {
                              "lightness": 17
                          }
                      ]
                  },
                  {
                      "featureType": "road.highway",
                      "elementType": "geometry.stroke",
                      "stylers": [
                          {
                              "color": "#ffffff"
                          },
                          {
                              "lightness": 29
                          },
                          {
                              "weight": 0.2
                          }
                      ]
                  },
                  {
                      "featureType": "road.arterial",
                      "elementType": "geometry",
                      "stylers": [
                          {
                              "color": "#ffffff"
                          },
                          {
                              "lightness": 18
                          }
                      ]
                  },
                  {
                      "featureType": "road.local",
                      "elementType": "geometry",
                      "stylers": [
                          {
                              "color": "#ffffff"
                          },
                          {
                              "lightness": 16
                          }
                      ]
                  },
                  {
                      "featureType": "poi",
                      "elementType": "geometry",
                      "stylers": [
                          {
                              "color": "#f5f5f5"
                          },
                          {
                              "lightness": 21
                          }
                      ]
                  },
                  {
                      "featureType": "poi.park",
                      "elementType": "geometry",
                      "stylers": [
                          {
                              "color": "#dedede"
                          },
                          {
                              "lightness": 21
                          }
                      ]
                  },
                  {
                      "elementType": "labels.text.stroke",
                      "stylers": [
                          {
                              "visibility": "on"
                          },
                          {
                              "color": "#ffffff"
                          },
                          {
                              "lightness": 16
                          }
                      ]
                  },
                  {
                      "elementType": "labels.text.fill",
                      "stylers": [
                          {
                              "saturation": 36
                          },
                          {
                              "color": "#333333"
                          },
                          {
                              "lightness": 40
                          }
                      ]
                  },
                  {
                      "elementType": "labels.icon",
                      "stylers": [
                          {
                              "visibility": "off"
                          }
                      ]
                  },
                  {
                      "featureType": "transit",
                      "elementType": "geometry",
                      "stylers": [
                          {
                              "color": "#f2f2f2"
                          },
                          {
                              "lightness": 19
                          }
                      ]
                  },
                  {
                      "featureType": "administrative",
                      "elementType": "geometry.fill",
                      "stylers": [
                          {
                              "color": "#fefefe"
                          },
                          {
                              "lightness": 20
                          }
                      ]
                  },
                  {
                      "featureType": "administrative",
                      "elementType": "geometry.stroke",
                      "stylers": [
                          {
                              "color": "#fefefe"
                          },
                          {
                              "lightness": 17
                          },
                          {
                              "weight": 1.2
                          }
                      ]
                  }
                ]
            },  
        });
    }
    $('#map').css( 'height', $('.themesflat-maps').data('height') );
};

var themesflatCounter = function() {
    $('.themesflat_counter').on('on-appear', function() { 
        $(this).find('.numb-count').each(function() { 
            var to = parseInt( ($(this).attr('data-to')),10 ), speed = parseInt( ($(this).attr('data-speed')),10 );
            if ( $().countTo ) {
                $(this).countTo({
                    to: to,
                    speed: speed
                });
            }
        });
    });
};

var videothumbnail = function() { 
    $(document).on('click',".themesflat_video_embed a",function(e){
        e.preventDefault();
        var iframe = $(this).parent().find('iframe');
        iframe[0].src += "&autoplay=1";
        iframe.show();
        $(this).hide();
    })
}

var progressBar = function() {        
    $('.progres-bar').on('on-appear', function() {
        $(this).each(function() {
            var percent = $(this).data('percent');                
            $(this).find('.progress-animate').animate({
                "width": percent + '%'
            }, $(this).find('.progress-animate').data('duration') );

            $(this).parent('.progress-item').find('.perc').addClass('show').animate({
                "width": '100%'
            }, $(this).find('.progress-animate').data('duration') );
        });
    });
}; 

var detectViewport = function() {
    if($().waypoint){
        $('[data-waypoint-active="yes"]').waypoint(function() {
            $(this).trigger('on-appear');
            }, { offset: '90%', triggerOnce: true });

        $(window).on('load', function() {
            setTimeout(function() {
                $.waypoints('refresh');
            });
        });
    }
};  

var rowStyling = function() {
    $(".vc_row").each(function( idx, el ) {
        if ($(this).hasClass('themesflat-overlay')) {
            var class_mask ='<div class="overlay"></div>';
            $(this).append(class_mask);
        }          
    });       
};

var spacer = function() {
    $(".themesflat-spacer").each(function() {
        var spacer_size = $(this).data( 'desktop' );
        if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
            spacer_size = $(this).data( 'mobile' )
        }
        if ( matchMedia( 'only screen and (max-width: 479px)' ).matches ) {
            spacer_size = $(this).data( 'smobile' )
        }
        
        $(this).css( "height", spacer_size );
    });       
}; 

function next_item($item,$width) {
    if (typeof $width =='undefined') {
        $width = 0;
    }
    var $int_item = parseInt($item);
    if ( $int_item -1 > 0) {
        if (($width/$int_item) > 250) {
            return $int_item 
        }
        return $int_item -1;
    }
    else {
        return 1;
    }
}   

var sectionVideo = function () {
        $(".themesflat-video-fancybox").on("click", function(){
            $.fancybox({
              href: this.href,
              type: $(this).data("type")
            }); // fancybox
            return false   
        }); // on
    }




// Dom Ready
$(function() {        
    testimonialCarousel();     
    portfolioCarousel();
    portfolioIsotope();
    portfolioMasory();
    portfolioLoadMore();
    blogCarousel();             
    themesflatCounter();
    slider();
    logoClient();
    googleMap();
    videothumbnail();
    progressBar();
    rowStyling();
    detectViewport();
    spacer(); 
    sectionVideo();       
});
})(jQuery);