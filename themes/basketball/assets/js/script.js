document.addEventListener("DOMContentLoaded", function () {
  console.log('document dom is loaded!!!!')
  var togglerBtn = document.getElementById('toggler-btn');
  var sideBar = document.getElementById('side-bar');
  var overlay = document.getElementById('overlay');
  togglerBtn.addEventListener('click', function () {
    sideBar.classList.add('show');
    overlay.classList.add('show')
  });
  overlay.addEventListener('click', function (event) {
    sideBar.classList.remove('show');
    overlay.classList.remove('show')
  })
});

window.onload = function () {
  document.querySelector('.spinner-overlay').remove();
  document.querySelector('body').style.overflow = "auto";
}