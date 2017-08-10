var ipcopy = document.getElementById('ip-copy');

ipcopy.addEventListener("click", function(){
	ipcopy.select();
	document.exeCommand("copy");
});