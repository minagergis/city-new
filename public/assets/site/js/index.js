$.global = new Object();

$.global.item = 1;
$.global.total = 0;
window_height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
$(document).ready(function() 
	{
	
	var WindowWidth = $(window).width();
	var SlideCount = $('#slides li').length;
	var SlidesWidth = SlideCount * WindowWidth;
  slider_prop_height = window_height - $('header').outerHeight();

  
   $.global.item = 0;
    $.global.total = SlideCount; 
    
  $('.main-slide').css('width',WindowWidth+'px');
  $('#slides').css('width',SlidesWidth+'px');

   $("#slides li:nth-child(1)").addClass('alive');
    
  var automaticSlide = setInterval(function(){ Slide('forward'); }, 3000);

  $('#left').click(function() {
      clearInterval(automaticSlide);
      automaticSlide = setInterval(function(){ Slide('forward'); }, 3000);
      Slide('back'); 
  }); 
  $('#right').click(function() {
      clearInterval(automaticSlide);
      automaticSlide = setInterval(function(){ Slide('forward'); }, 3000); 
      Slide('forward'); 
  }); 
  
  $('#slide-window-prop').height(slider_prop_height+"px");
  $('#slide-window-prop .slide-prop-item , .gallary-item').height(slider_prop_height/2 +"px");
   

   // for menu 

   $('.sub-menu').each(function(){
      var item_width = $('.sub-menu').width();
      var item_ul_width = $('ul', $(this)).width();
      var diff_width = (item_width - item_ul_width)/2 ; 
      $('ul', $(this)).css('margin-left', diff_width+'px')  ;    

   })

    footerAdjust();


    // carousel slider for proerties
      $('#myCarousel ,.carousel').carousel({
          interval: 10000
      })
      $('.fdi-Carousel .item').each(function () {
          var next = $(this).next();
          if (!next.length) {
              next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          if (next.next().length > 0) {
              next.next().children(':first-child').clone().appendTo($(this));
          }
          else {
              $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
          }
      });


     
        
  });

function Slide(direction)
	{
   
    if (direction == 'back') { var $target = $.global.item - 1; }
    if (direction == 'forward') { var $target = $.global.item + 1; }  
    
    if ($target == -1) { DoIt($.global.total-1); } 
    else if ($target == $.global.total) { DoIt(0); }  
    else { DoIt($target); }
    
    
	}

function DoIt(target)
  {
   
    var $windowwidth = $(window).width();
	  var $margin = $windowwidth * target; 
    var $actualtarget = target+1;
    
    $("#slides li:nth-child("+$actualtarget+")").addClass('alive');
    
    $('#slides').css('transform','translate3d(-'+$margin+'px,0px,0px)');	
    
    $.global.item = target; 
    
    $('#count').html($.global.item+1);
    // $('.slides-caption .container div').removeClass('active');
    // $('.slides-caption .container div').eq($.global.item).addClass('active');
    $('.slides-caption .container div').fadeOut(0);
    $('.slides-caption .container div').eq($.global.item).fadeIn(1500);
    $('.static-caption').fadeOut(0);
    $('.static-caption').fadeIn(1500);
  }

 
  //footer adjust 
   function footerAdjust(){
     
     if($('.page-content').outerHeight() >= window_height ){
      $('footer').addClass('down');
     }
    }

$(document).ready(function() 
  {

     // stop scrolling
  
      var $window = $(window),
      previousScrollTop = 0,
      scrollLock = false;
      
      $window.scroll(function(event) {     
          if(scrollLock) {
              $window.scrollTop(previousScrollTop); 
          }      
          previousScrollTop = $window.scrollTop();
      });
     
          

     // gallary animation


      $('.gallary-item').each(function(){
          
          var this_item = $(this);
          var this_item_index = $(this).index();
          var this_item_Left = this_item.position().left;
          var this_item_Top = this_item.position().top;
        
        // open gallary item
        $('.read-more' ,this_item).on('click',function(){
            
            // $.ajax({
            //   url: "gallary-item-more.html",
            //   dataType: "html",
            //   context: document.body
            // }).done(function(response) {
            //   //$('#products').remove(); // you can keep this line if you think is necessary
            //   $('.gallary-item-more',this_item).html(response);
            // });

                             
            
            $("html, body").animate({ scrollTop: this_item_Top }, 'slow' ,function(){
            $('.overlay-bg').fadeIn(300);
            $('.gallary-item-more .carousel ,.gallary-item-more .carousel .carousel-inner .item',this_item).height(slider_prop_height+"px");                   
            $( '.gallary-item-more-caption, .arrows-stars',this_item).fadeIn(300); 
            scrollLock = true; 
              if(this_item_index == 0){
                $( '.gallary-item-more',this_item).addClass('active left').height(slider_prop_height+"px"); 
              }
              else if(this_item_index == 1) {             
                $( '.gallary-item-more',this_item).addClass('active middle').css('left',this_item_Left).height(slider_prop_height+"px"); 
              }
              else{
                $( '.gallary-item-more',this_item).addClass('active right').height(slider_prop_height+"px");              
              }
            });                
        })
        
        // close opened gallary item
        $('.gallary-item-close',this_item).on('click',function(){
          $( '.gallary-item-more-caption,.arrows-stars',this_item).fadeOut("fast"); 
          $('.gallary-item-more').removeClass('active').height(slider_prop_height/2+"px");
          $('.overlay-bg').fadeOut(300);
          scrollLock = false;   
        });

      })
      
      // help section
      $('.help-header').click(function(){
        $(this).toggleClass('active');
         $('.help-form').slideToggle()();

      })
    });