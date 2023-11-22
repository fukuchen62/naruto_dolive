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


// ▼PC_NAVの装飾▼
//ドロップダウンの設定を関数でまとめる
function mediaQueriesWin() {
    var width = $(window).width();
    if (width <= 1024) {//横幅が768px以下の場合
        $(".has-child>a").off('click'); //has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
        $(".has-child>a").on('click', function () {//has-childクラスがついたaタグをクリックしたら
            var parentElem = $(this).parent();// aタグから見た親要素の<li>を取得し
            $(parentElem).toggleClass('active');//矢印方向を変えるためのクラス名を付与して
            $(parentElem).children('ul').stop().slideToggle(500);//liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
            return false;//リンクの無効化
        });
    } else {//横幅が1024px以上の場合
        $(".has-child>a").off('click');//has-childクラスがついたaタグのonイベントをoff(無効)にし
        $(".has-child").removeClass('active');//activeクラスを削除
        $('.has-child').children('ul').css("display", "");//スライドトグルで動作したdisplayも無効化にする
    }
}

// ページがリサイズされたら動かしたい場合の記述
$(window).resize(function () {
    mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
    mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
});
// ▼ドライブコース切替▼
