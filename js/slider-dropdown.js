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

$(this).click(function()
{
var X=$(this).attr('id');

if(X==1)
{
$(".submenu").hide();
$(this).attr('id', '0');	
}
else
{
$(".submenu").show();
$(this).attr('id', '1');

}
	
});

});