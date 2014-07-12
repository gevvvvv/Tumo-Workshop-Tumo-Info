$(document).ready(function()
{
	$("#menu-main-menu li").hover(function()
		{
			var this_id = $(this).attr("id");
			switch (this_id)
			{
				case "menu-item-13":
				$(this).find("a").css("color","#f69230");
				break;
				case "menu-item-17":
				$(this).find("a").css("color","#f05f42");
				break;
				case "menu-item-15":
				$(this).find("a").css("color","#5588c1");
				break;
				case "menu-item-14":
				$(this).find("a").css("color","#a1d147");
				break;
			}
			
		},function()
		{
			$(this).find("a").css("color","#000");
		});
});
