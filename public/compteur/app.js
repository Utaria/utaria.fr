var launch = new Date(2017,8,3,16,00,00);
setDate();
function setDate()
{
	var now = new Date();
	var seconds = (launch.getTime() - now.getTime())/1000;
	var days = Math.floor(seconds/86400);
	$("#days").html(days + " jour"+(days>1?"s":""));
	seconds -= days*86400;
	var hours = Math.floor(seconds/3600);
	$("#hours").html(hours + " heure"+(hours>1?"s":""));
	seconds -= hours*3600;
	var minutes = Math.floor(seconds/60);
	$("#minutes").html(minutes +" minute"+(minutes>1?"s":""));
	seconds -= minutes*60;
	seconds = Math.floor(seconds);
	$("#seconds").html(seconds +" seconde"+(seconds>1?"s":""));
	setTimeout(setDate, 1000);
}