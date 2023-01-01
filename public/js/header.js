var menu = document.querySelector(".menu-deroulant");
var buttonMenu = document.querySelector(".menu-button");
var barTop = document.querySelector("#top.menubar");
var barBottom = document.querySelector("#bottom.menubar");

buttonMenu.addEventListener("click", function () {
  menu.classList.toggle("active");
  barTop.classList.toggle("active");
  barBottom.classList.toggle("active");
});
