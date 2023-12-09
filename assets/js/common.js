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
var isAnimating = false; // アニメーション中かどうかを示すフラグ

$('#page_top').click(function () {
    if (!isAnimating) { // アニメーション中でない場合のみ処理を実行
        isAnimating = true; // アニメーション開始
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(this).addClass('floatAnime');
            $('body,html').animate({
                scrollTop: 0
            }, 2000, function () {
                $('#page_top').removeClass('floatAnime');
                isAnimating = false; // アニメーション終了
            });
        }
    }
    return false;
});
// ▲トップへ戻るボタン▲

// ▼sp_nav(ハンバーガーメニュー)▼
// スマホ・タブレットサイズ時のみ表示されるメニューの開閉ボタンを変数に格納。
$(document).ready(function () {
    const spMenuBtn = $("#spMenuBtn");
    const headerInner = $("#headerInner");
    const headerMenu = $(".header_menu");

    spMenuBtn.click(function () {
        headerInner.toggleClass("active");
        if (headerInner.hasClass("active")) {
            // メニューが展開された状態でスクロールを制御する
            $("body").css("overflow", "hidden");
            headerMenu.css("overflow-y", "auto"); // メニュー内のコンテンツが表示領域に収まるようにスクロールする
        } else {
            // メニューが閉じられた状態でスクロールを許可する
            $("body").css("overflow", "auto");
            headerMenu.css("overflow-y", "hidden"); // メニューが閉じられた場合はスクロールを禁止する
        }
    });
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

// ▼画面上を走行する車▼
window.addEventListener('load', function () {
    let runningCarContainer = document.querySelector('.runningcar_container');
    let footer = document.querySelector('footer');
    let startTimestamp = performance.now(); // ロード開始時のタイムスタンプを取得
    let targetTime = startTimestamp + 10000; // 10秒後のタイムスタンプを計算

    // イベントを発火する関数
    function fireEvent() {
        console.log('イベントが発火しました');
        runningCarContainer.style.animationPlayState = 'running'; // アニメーションを再生

        // アニメーションが開始した際に位置を更新
        updatePosition();
    }

    // アニメーションが完了した時に呼ばれるコールバック
    function onAnimationEnd() {
        console.log('アニメーションが完了しました');
        runningCarContainer.style.display = 'none'; // または visibility: hidden; で非表示にする

        // Check if the footer is below the viewport
        let viewportHeight = window.innerHeight || document.documentElement.clientHeight;
        let footerPosition = footer.getBoundingClientRect().bottom;

        if (footerPosition > viewportHeight) {
            document.body.style.overflow = 'hidden'; // 隠れたコンテンツを非表示にする
        }

        // アニメーションが完了した際に位置を更新
        updatePosition();
    }

    // タイミングを監視し、指定時間に達したらイベントを発火
    function checkTime(currentTime) {
        if (currentTime >= targetTime) {
            fireEvent();
        } else {
            requestAnimationFrame(checkTime);
        }
    }

    // アニメーションが終了した時に呼ばれるイベントリスナーを追加
    runningCarContainer.addEventListener('animationend', onAnimationEnd);

    // タイミングを監視を開始
    requestAnimationFrame(checkTime);

    // Get the user's current viewport position
    let viewportTop = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
    let viewportLeft = window.scrollX || window.pageXOffset || document.documentElement.scrollLeft;

    // Set initial position of the running car container
    runningCarContainer.style.top = viewportTop + 'px';
    runningCarContainer.style.left = viewportLeft + 'px';

    // ページのスクロール時に要素の位置を更新する
    window.addEventListener('scroll', updatePosition);

    // ページのロード時にも一度要素の位置を更新する
    window.addEventListener('load', updatePosition);

    function updatePosition() {
        // ユーザーの表示画面領域を取得し、アニメーションの開始位置を更新
        let newViewportTop = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
        let newViewportLeft = window.scrollX || window.pageXOffset || document.documentElement.scrollLeft;

        runningCarContainer.style.top = newViewportTop + 'px';
        runningCarContainer.style.left = newViewportLeft + 'px';
    }
});
// ▲画面上を走行する車▲
