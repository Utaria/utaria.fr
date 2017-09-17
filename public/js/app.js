// Les particules sur la page d'accueil
setTimeout(function() {
	if (typeof particlesJS !== 'undefined')
		particlesJS.load('particles-js', 'js/particles-conf.json', function() {});
}, 800);

// Permet de copier l'IP correctement dans tous les navigateurs
var clipboard = new Clipboard(document.querySelectorAll(".ip-copy"));
		
clipboard.on('success', function(e) {
	var trigger = e.trigger;
	var bHtml   = trigger.innerHTML;

	trigger.innerHTML = "<b>IP copiée !</b>";

	setTimeout(function() {
		trigger.innerHTML = bHtml;
	}, 3000);
});

// Gestion des sous-menus sur toutes les pages
var subEls = document.querySelectorAll(".sub");
var secEls = document.querySelectorAll(".sec-nav");

for (var subEl of subEls) {
	subEl.addEventListener("mouseenter", function() {
		var secNav = this.nextSibling.nextSibling;

		this.classList.add("hover");

		secNav.style.left = this.offsetLeft + "px";
		secNav.classList.add("opened");
	});
	subEl.addEventListener("mouseleave", function(event) {
		var target = event.toElement || event.relatedTarget;
		if (target.classList.contains("sec-nav") ||
			(target.parentNode != null && target.parentNode.classList.contains("sec-nav")))
			return;

		this.classList.remove("hover");
		var secNav = this.nextSibling.nextSibling;
		secNav.classList.remove("opened");
	});
}

for (var secEl of secEls)
	secEl.addEventListener("mouseleave", function() {
		this.classList.remove("opened");

		var subNav = this.previousSibling.previousSibling;
		subNav.classList.remove("hover");
	})