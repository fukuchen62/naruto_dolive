// ▼トップへ戻るボタン▼

function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {//上から100pxスクロールしたら
        $('#page_top').removeClass('DownMove');//#page_topについているDownMoveというクラス名を除く
        $('#page_top').addClass('UpMove');//#page_topについているUpMoveというクラス名を付与
    } else {
        if ($('#page_top').hasClass('UpMove')) {//すでに#page_topにUpMoveというクラス名がついていたら
            $('#page_top').removeClass('UpMove');//UpMoveというクラス名を除き
            $('#page_top').addClass('DownMove');//DownMoveというクラス名を#page_topに付与
        }
    }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
    PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});


// #page_topをクリックした際の設定
$('#page_top').click(function () {
    var scroll = $(window).scrollTop(); //スクロール値を取得
    if (scroll > 0) {
        $(this).addClass('floatAnime');//クリックしたらfloatAnimeというクラス名が付与
        $('body,html').animate({
            scrollTop: 0
        }, 2000, function () {//スクロールの速さ。数字が大きくなるほど遅くなる
            $('#page_top').removeClass('floatAnime');//上までスクロールしたらfloatAnimeというクラス名を除く
        });
    }
    return false;//リンク自体の無効化
});
// ▲トップへ戻るボタン▲

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

// ▼PC_NAV▼
//ドロップダウンの設定を関数でまとめる
function mediaQueriesWin() {
    var width = $(window).width();
    if (width <= 1024) {//横幅が768px以下の場合
        $(".has_child>a").off('click'); //has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
        $(".has_child>a").on('click', function () {//has-childクラスがついたaタグをクリックしたら
            var parentElem = $(this).parent();// aタグから見た親要素の<li>を取得し
            $(parentElem).toggleClass('active');//矢印方向を変えるためのクラス名を付与して
            $(parentElem).children('ul').stop().slideToggle(500);//liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
            return false;//リンクの無効化
        });
    } else {//横幅が1024px以上の場合
        $(".has_child>a").off('click');//has-childクラスがついたaタグのonイベントをoff(無効)にし
        $(".has_child").removeClass('active');//activeクラスを削除
        $('.has_child').children('ul').css("display", "");//スライドトグルで動作したdisplayも無効化にする
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
// ▲PC_NAV▲




/* ------------------------------------------------------------------------
    マウスストーカー
------------------------------------------------------------------------  */
// マウスストーカー関連の要素（任意で変更してください）
const mouseStalker = "#stkr";           // マウスストーカーになる要素を指定
const mouseTarget = ".stkr-target";     // リンクなどアクションを付けたい要素を指定
const mouseStalkerArea = window;        // マウスストーカーが機能する要素を指定

// 処理で使う変数たち
const stkrSize = parseInt($(mouseStalker).css("width").replace(/px/, ""));
const stkrPosX = parseInt($(mouseStalker).css("left").replace(/px/, ""));
const stkrPosY = parseInt($(mouseStalker).css("top").replace(/px/, ""));
const cssPosAjust = stkrPosX + (stkrSize / 2);
let scale = 1;

// 追従用の処理
$(mouseStalkerArea).hover(function () {
    $(mouseStalkerArea).mousemove(function (e) {
        let x = e.clientX - cssPosAjust;
        let y = e.clientY - cssPosAjust;
        $(mouseStalker).css({
            "transform": "translate(" + x + "px," + y + "px) scale(" + scale + ")",
        });
    });
});

// リンクホバーの処理
$(mouseTarget).hover(function (e) {
    scale = 2;
    let x = e.clientX - cssPosAjust;
    let y = e.clientY - cssPosAjust;
    $(mouseStalker).css({
        "transform": "translate(" + x + "px," + y + "px) scale(" + scale + ")",
    });
}, function () {
    scale = 1;
});
