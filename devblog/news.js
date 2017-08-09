function sendNews(title, content)
{
	$.post("send.php",{title:title,content:content},function(data){
		recoverNews();
	});
}
function recoverNews()
{
	$.post("recover.php",function(data){
		$(".news").html(data);
	});
}
recoverNews();