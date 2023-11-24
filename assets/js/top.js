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

// ▼ドライブコース切替▼
$(document).ready(function () {

    // 1つ目のコース以外のコースを非表示させる
    // guruttocourse
    $('#guruttocourse').attr('display', "block");
    // mankitsucourse
    $('#mankitsucourse').attr('display', "none");
    // rekishibunkacourse
    $('#rekishibunkacourse').attr('display', "none");
    // osusumecourse
    $('#osusumecourse').attr('display', "none");
    // Nightcourse
    $('#Nightcourse').attr('display', "none");


    jQuery('#course1').on('click', function () {
        clear_all();
        $('#guruttocourse').attr('display', "block");
    });
    jQuery('#course2').on('click', function () {
        clear_all();
        $('#mankitsucourse').attr('display', "block");
    });
    jQuery('#course3').on('click', function () {
        clear_all();
        $('#rekishibunkacourse').attr('display', "block");
    });
    jQuery('#course4').on('click', function () {
        clear_all();
        $('#osusumecourse').attr('display', "block");
    });
    jQuery('#course5').on('click', function () {
        clear_all();
        $('#Nightcourse').attr('display', "block");
    });
});

function clear_all() {

    // 全てのコース以外のコースを非表示させる
    // guruttocourse
    $('#guruttocourse').attr('display', "none");
    // mankitsucourse
    $('#mankitsucourse').attr('display', "none");
    // rekishibunkacourse
    $('#rekishibunkacourse').attr('display', "none");
    // osusumecourse
    $('#osusumecourse').attr('display', "none");
    // Nightcourse
    $('#Nightcourse').attr('display', "none");
}
// ▲ドライブコース切替▲

// ▼コースリンク切替▼
$(document).ready(function () {
            let currentLink = ''; // 現在のリンクを保持する変数

            // ボタンクリック時の処理
            $('.course_button').on('click', function () {
                // 対応するリンクを取得し、現在のリンクを更新する
                const targetLink = $(this).data('link');
                currentLink = targetLink;
            });

            // 詳細ボタンクリック時の処理
            $('#detailButton').on('click', function () {
                // 現在のリンクに遷移
                if (currentLink) {
                    window.location.href = currentLink;
                }
            });
});
// ▲コースリンク切替▲

// ▼目的別ボタンtest▼
var imageItems = document.querySelectorAll('.image-item');

function showImagesWithDelay() {
    var delay = 5000; // 遅延時間（ミリ秒）
    var initialDelay = 5000; // 最初の画像の遅延時間（ミリ秒）

    var index = 0;
    var timer = setInterval(function () {
        imageItems[index].style.opacity = '1';
        index++;
        if (index === imageItems.length) {
            clearInterval(timer);
        }
    }, delay);
}

window.addEventListener('load', showImagesWithDelay);
// ▲目的別ボタンtest▲
