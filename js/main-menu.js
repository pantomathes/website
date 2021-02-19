var mainMenu = (function () {
	var $listItems = $("#mainmenu > ul > li"),
		$menuItems = $listItems.children("a"),
		$body = $("body"),
		current = -1;

	function init() {
		$menuItems.on("click", open);
		$listItems.on("click", function (event) {
			event.stopPropagation();
		});
	}

	function open(event) {
		var $item = $(event.currentTarget).parent("li.has-submenu"),
			idx = $item.index();
		if ($item.length != 0) {
			if (current !== -1) {
				$listItems.eq(current).removeClass("mainmenu-open");
			}

			if (current === idx) {
				$item.removeClass("mainmenu-open");
				current = -1;
			} else {
				$item.addClass("mainmenu-open");
				current = idx;
				$body.off("click").on("click", close);
			}
			return false;
		} else window.location = $item.find("a").attr("href");
	}

	function close(event) {
		$listItems.eq(current).removeClass("mainmenu-open");
		current = -1;
	}

	return { init: init };
})();

let url = window.location.pathname.split("/").pop();

const nav_links = document.querySelectorAll(".links");
nav_links.forEach((element) => {
	let childern = element.firstElementChild;
	if (childern.getAttribute("href") === url) {
		element.classList.add("active");
	}
});

const hamburger = document.querySelector(".hamburger");
const mainmenu = document.querySelector(".mainmenu ul");
hamburger.addEventListener("click", function () {
	if (this.classList.contains("cross")) {
		this.classList.remove("cross");
		mainmenu.classList.remove("show");
	} else {
		this.classList.add("cross");
		mainmenu.classList.add("show");
	}
});

const side_btn = document.querySelector(".arrow button");
window.onscroll = function () {
	if (this.scrollY > 400) {
		side_btn.classList.add("show");
	} else {
		side_btn.classList.remove("show");
	}
};
function btn_click() {
	window.scrollTo(0, 0);
}
