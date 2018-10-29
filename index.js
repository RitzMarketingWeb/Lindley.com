var menu = document.getElementById("hamburger"),
    x = document.getElementById("nav");

function menuShow() {
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none"
  }
}


var law = document.getElementById("law"),
    drop = document.getElementById("dropdown");

law.addEventListener("mouseover", function(){
  drop.style.display = "flex";
}, false);

law.addEventListener("mouseout", function(){
  drop.style.display = "none";
}, false);

drop.addEventListener("mouseover", function(){
  this.style.display = "flex";
}, false);

drop.addEventListener("mouseout", function(){
  this.style.display = "none";
}, false);

var about = document.getElementById("about"),
    dropAbout = document.getElementById("dropdown-about");

about.addEventListener("mouseover", function(){
  dropAbout.style.display = "flex";
}, false);

about.addEventListener("mouseout", function(){
  dropAbout.style.display = "none";
}, false);

dropAbout.addEventListener("mouseover", function(){
  this.style.display = "flex";
}, false);

dropAbout.addEventListener("mouseout", function(){
  this.style.display = "none";
}, false);


var acc = document.getElementsByClassName("accordion");
var i;

for(i = 0; i < acc.length; i++) {
	acc[i].onclick = function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;

		if(panel.style.maxHeight) {
			panel.style.maxHeight = null;
		}	else {
			panel.style.maxHeight = panel.scrollHeight + "px"
		}
	}
}
