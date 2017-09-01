$(".streamer").each(function(){
	var username = $(this).find("h4").text();
	if (username == "" || username == null) return;
	var $self = $(this);
			
	streamIsOnline(username, function(online) {
		var stateClass = (online) ? "state-on" : "state-off";
		$self.find(".state-pending").removeClass("state-pending").addClass(stateClass);
		});
	});
		
	function streamIsOnline(name, callback) {
		$.getJSON("https://api.twitch.tv/kraken/streams/" + name + "?client_id=test", function(channel) {
		callback(channel["stream"] != null);              
	});
}