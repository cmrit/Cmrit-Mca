      $(window).load(function(){
          $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              playBu:false,
              duration:1000,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:6000,
              numStatus:false,
              banners:'fromRight',
		      waitBannerAnimation:false,
			  progressBar:false
          })
		  $(function() {
             $(".carousel").jCarouselLite({	
                  btnNext: "#next",
                  btnPrev: "#prev",
                  easing:"easeOutBack",
                  speed: 700
             });
          });		
      })
	  
$(document).ready(function()
{

$("#about .account").click(function()
{
var X=$(this).attr('id');

if(X==1)
{
$("#about .submenu").hide();
$(this).attr('id', '0');	
}
else
{
$("#about .submenu").show();
$(this).attr('id', '1');

}
	
});

$("#beyond .account").click(function()
{
var X=$(this).attr('id');

if(X==1)
{
$("#beyond .submenu").hide();
$(this).attr('id', '0');	
}
else
{
$("#beyond .submenu").show();
$(this).attr('id', '1');

}
	
});

$('.gallery-pic a').lightBox({
		
		imageLoading: 'images/loading.gif',
		imageBtnClose: 'images/close.gif',
		imageBtnPrev: 'images/prev.gif',
		imageBtnNext: 'images/next.gif'

	});

	
});
	
