'use strict';

// ▼TOP-kvのフラッシュ画像表示▼
var pics_src = new Array(
    "../assets/img/sample2.jpg",
    "../assets/img/sample3.jpg",
    "../assets/img/sample6.jpg"
);
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
