$.post("recuparticles.php",function(data){
	$(".items-container").html(data);
});
$(".add").click(function(){
	var id = $(".add").data("id");
	console.log(id);
});