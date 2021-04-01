document.addEventListener("DOMContentLoaded", function () {
  const togglerBtn = document.getElementById('toggler-btn');
  const sideBar = document.getElementById('side-bar');
  const overlay = document.getElementById('overlay');
  togglerBtn.addEventListener('click', function () {
    sideBar.classList.add('show');
    overlay.classList.add('show')
  });
  overlay.addEventListener('click', function (event) {
    sideBar.classList.remove('show');
    overlay.classList.remove('show')
  })
});

