
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Demo File Upload Widget Responsive Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type='text/javascript'>//<![CDATA[ 
   $(function() {
   	
 $('.web').click(function(e){
     e.preventDefault();
   //$("#bg").attr('src',"template_preview/images/2x2.gif");
    $("#device").attr('style',"margin: 0px auto;text-align: center;");
    $("#hw").attr('class',"web");
     $("#hw").attr('height',"100%");
      $("#hw").attr('width',"100%");
 });
 $('.Ipad-vertical').click(function(e){
     e.preventDefault();
   ///$("#bg").attr('src',"template_preview/images/ipad-landscape-big.png");
     $("#device").attr('style',"margin: 1em auto;text-align: center;");
      $("#hw").attr('class',"ipad-frame-land");
    // $("#hw").attr('style',"position: absolute;	left: 7.3%;	top: 55px;");
     $("#hw").attr('height',"680");
      $("#hw").attr('width',"1024");
     
 });
$('.Ipad-hori').click(function(e){
     e.preventDefault();
   //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
      $("#device").attr('style',"margin: 1em auto;text-align: center;");
       //$("#hw").attr('style',"left:50px;top:135px");
       $("#hw").attr('class',"ipad-frame-ver");
      // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
     $("#hw").attr('height',"1024");
      $("#hw").attr('width',"768");
        
 });
 
 
 
 $('.Iphone-vertical').click(function(e){
     e.preventDefault();
   ///$("#bg").attr('src',"template_preview/images/ipad-landscape-big.png");
     $("#device").attr('style',"margin: 1em auto;text-align: center;");
      $("#hw").attr('class',"smart-frame-var");
    // $("#hw").attr('style',"position: absolute;	left: 7.3%;	top: 55px;");
     $("#hw").attr('height',"320");
      $("#hw").attr('width',"480");
     
 });
$('.Iphone-hori').click(function(e){
     e.preventDefault();
   //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
      $("#device").attr('style',"margin: 1em auto;text-align: center;");
       //$("#hw").attr('style',"left:50px;top:135px");
       $("#hw").attr('class',"smart-frame-land");
      // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
     $("#hw").attr('height',"480");
      $("#hw").attr('width',"320");
      });
 
 $('.mobile').click(function(e){
     e.preventDefault();
   //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
      $("#device").attr('style',"margin: 1em auto;text-align: center;");
       //$("#hw").attr('style',"left:50px;top:135px");
       $("#hw").attr('class',"mobile-frame");
      // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
     $("#hw").attr('height',"500");
      $("#hw").attr('width',"240");
        
 });
 
 
});
  
</script>
</head>
<body>
<div id="wrap" style="margin-top: 0px; position: relative;">
<!-- Navbar -->
	  <!-- <div class="go-back">
		 	<a href="/file-upload-widget-responsive-template/">Download Template</a>
		</div>
		<a id="close-button" title="Remove Frame" class="closeMe" href="https://p.w3layouts.com/demos/file_upload_widget/web" target="_blank"></a>
	</div>-->

	<div class="clear"></div>
		 </div>
</div>
</div>
<div style="" id="device">
<iframe id="hw" class="web" src="https://p.w3layouts.com/demos/file_upload_widget/web" name="livePreviewFrame" width="100%" height="100%" frameborder="0" noresize="noresize" style=" min-height: 100%;"> </iframe>
</div>
	<script>
  var adjustFrame = function() {
	var headerDimensions = $('#topBar').height();
	$('#livePreviewFrame').height($(window).height() - headerDimensions);
  }
  $(document).ready(function() {
	adjustFrame();
	$('.closeMe').mouseover(function() {
	  $('.closeMe').addClass('active');
	}).mouseout(function() {
	  $('.closeMe').removeClass('active');
	});
  });

  $(window).resize(function() {
	adjustFrame();
  }).load(function() {
	adjustFrame();
  });
</script>
<script type="text/javascript">
//		function to fix height of iframe!
    var calcHeight = function() {
	var headerDimensions = $('#headerlivedemo').height();
	var selector = '#iframelive';
	   if($('#wrap').hasClass('closed')) {
		   $(selector).height($(window).height());
	   } else {
		   $(selector).height($(window).height() - headerDimensions);
	   }
    }
    $(document).ready(function() {
    calcHeight();
    });
    $(window).resize(function() {
    calcHeight();
    }).load(function() {
    calcHeight();
    });
</script>
</body>
</html> <script type="text/javascript">
		$.ajax({
        url : "https://stat.w3layouts.com/submit_stat/Demostats/?action_type=2&template_type=1&pid=14654&uip=125.17.113.98&UA=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36",
        dataType:"jsonp",
        jsonp:"mycallback",
        success:function(data)
        {
        }
    });
		</script>
