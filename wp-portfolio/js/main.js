document.addEventListener("DOMContentLoaded", () => {
  /* ===============================
		メニューボタン・画面
  ================================= */

  // 要素の取得
  const menuBtn = document.querySelector(".menu-btn");
  const berger = document.querySelector(".hamburger-btn");
  const slide_menu = document.querySelector(".slide-menu");
  const body = document.querySelector(".body");
  const slide_container = document.querySelector(".slide-container")

  // ハンバーガーメニューの動作
  menuBtn.addEventListener("click", () => {
    berger.classList.toggle("menu-active");
    slide_menu.classList.toggle("menu-active");
    body.classList.toggle("hidden");
    slide_container.style.overflow = 'visible';
  });

  slide_menu.addEventListener("click", () => {
    berger.classList.remove("menu-active");
    slide_menu.classList.remove("menu-active");
    body.classList.remove('hidden');
    slide_container.style.overflow = 'hidden';

  });

  // メニュー画面の開閉
});
