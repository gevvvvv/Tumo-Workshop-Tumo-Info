app.map = {
	init:function()
	{
		$('#tumo-map').maphilight();
		
	},
	doFirst:function()
	{
		var s=1142;
		doc=document.getElementById('content');
		console.log(doc);
		iframe=document.getElementById('ifr');
		slaq = document.getElementById("arrow_image");
		slaq.style.display='block';
		slaq.style.visibility='visible';
		doc.style.height=s+'px';
		iframe.style.display='block';
	}
};




