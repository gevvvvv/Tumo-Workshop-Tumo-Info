app.coaches = {
	init:function()
	{
		var im_number = -1;
		for (var i = 0;i<$("#box img").length;i++)
		{
			$("#box img").eq(i).css("z-index",$("#box img").length - i);
		}
		setInterval(function()
			{
				if (im_number < 4)
					{
						++im_number;
						console.log(im_number);
						$("#box img").eq(im_number).fadeOut(2000);
						setTimeout(function()
						{
							$("#box img").eq(im_number).css("z-index",1);
							$("#box img").eq(im_number).fadeIn();
							for (var k = 0;k<$("#box img").length;k++)
								{
									if (k != im_number)
										{
											var current = parseInt($("#box img").eq(k).css("z-index"),10);
											$("#box img").eq(k).css("z-index",current+1);
										}
								}
						},3000);
					}
					else im_number = -1;
			},5000);
	}
};