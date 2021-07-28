document.addEventListener("DOMContentLoaded", function () {
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

