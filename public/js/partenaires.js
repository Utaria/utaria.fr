(function($){
		$(".streamer").each(function(){
			var username = $(this).data("name");
			if (username == "" || username == null) return;
			var $self = $(this);

			streamIsOnline(username, function(online) {
				var stateClass = (online) ? "on" : "off";
				$self.find(".state").addClass(stateClass);
			});
				
			function streamIsOnline(name, callback) {
				$.getJSON("https://api.twitch.tv/kraken/streams/" + name + "?client_id=test", function(channel) {
					callback(channel["stream"] != null);              
				});
			}
		});
		
    	$('article.fold img').each(function(){
    		var img = $(this);
    		var article = img.parent();
    		img.clone().appendTo(article).wrap('<div class="bot"/>');
    		img.wrap('<div class="top"/>');
    		article.find('div').append('<div class="shadow"/>');
		})
})(jQuery);