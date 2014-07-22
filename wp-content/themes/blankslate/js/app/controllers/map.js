app.map = {
	init:function()
	{
		$('#tumo-map').maphilight();
		
	},
	doFirst:function()
	{
		var s=1142;
		doc=document.getElementById('content');
		iframe=document.getElementById('ifr');
		slaq = document.getElementById("arrow_image");
		slaq.style.display='block';
		slaq.style.visibility='visible';
		doc.style.height=s+'px';
		iframe.style.display='block';
	}
};




