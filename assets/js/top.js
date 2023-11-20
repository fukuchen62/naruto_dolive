'use strict';

// ▼TOP-kvのフラッシュ画像表示▼
var pics_src = [
    "../assets/img/mypic1.jpg",
    "../assets/img/mypic2.jpg",
    "../assets/img/mypic3.jpg",
    "../assets/img/mypic4.jpg",
    "../assets/img/mypic5.jpg"
];
var num = 0;

slideshow_timer();

function slideshow_timer() {
    if (num >= pics_src.length) {
        num = 0;
    }
    document.getElementById("mypic1").src = pics_src[num];
    document.getElementById("mypic2").src = pics_src[num];
    document.getElementById("mypic3").src = pics_src[num];
    num++;
    setTimeout(slideshow_timer, 600);
}
// ▲TOP-kvのフラッシュ画像表示▲

// ▼sp_nav(ハンバーガーメニュー)▼
// スマホ・タブレットサイズ時のみ表示されるメニューの開閉ボタンを変数に格納。
const spMenuBtn = $("#spMenuBtn");

// メニューや開閉ボタンをラップしている要素を変数に格納。
const headerInner = $("#headerInner");

// 開閉ボタンをクリックすると発火。
spMenuBtn.click(function () {
    // ラップ要素にactiveというクラスを付与する。
    headerInner.toggleClass("active");
});
// ▲sp_nav(ハンバーガーメニュー)▲
