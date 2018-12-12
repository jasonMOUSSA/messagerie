<style>
.banner {width:600px; text-align:center; margin:0 auto; position: relative; -webkit-border-radius: 5px 0 5px 5px; -moz-border-radius: 5px 0 5px 5px; border-radius: 5px 0 5px 5px; padding:50px 20px;}
.banner:before {content: ""; position: absolute; top: 0; right: 0;border-width: 0 24px 24px 0; border-style: solid; border-color:#F0F0F0 #fff; -webkit-border-radius: 0px 0 0px 5px; -moz-border-radius: 0px 0 0px 5px; border-radius: 0px 0 0px 5px;}
#screen {width:100%;color: #555;"Century Gothic",CenturyGothic,AppleGothic,sans-serif;line-height:45px;}
.txt-title {font-size:2em;}
.txt-subtitle {font-size:1.2em;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#screen").load('banners.php')
    }, 2000);
});
</script>
<div id="screen"></div>
