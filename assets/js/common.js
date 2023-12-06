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

// ▼画面上を走行する車▼
// 車が表示されているかの判定 falseは非表示
let carDisplayed = true;

function createCar() {
    // carDisplayedがtrueの場合 つまり車が表示されている間は車の生成をスキップする。車が複数台表示されることを防ぐため
    if (carDisplayed) {
        return;
    }
    // windowの幅を取得
    const winW = window.innerWidth;
    // windowの高さを取得
    const winH = window.innerHeight;
    // img要素を作成
    const car = document.createElement("img");
    // 上記のimg要素を参照する変数carのimgのsrc属性の設定
    car.setAttribute("src", "../assets/img/running_around.png");
    // car変数にcarクラスを付与する
    car.classList.add("moving_car");
    // carの初期位置を横方向にランダム設定
    car.style.left = getRandomInt(0, winW) + "px";
    // carの初期位置を画面上部に設定
    car.style.top = 0;
    // img要素(car変数)をhtml文書に追加 今回はhtml文書のbody要素の子要素として追加
    document.body.appendChild(car);

    // img要素の作成
    const tireTrack = document.createElement("img");
    // 上記のimg要素を参照する変数carのimgのsrc属性の設定
    tireTrack.setAttribute("src", "../assets/img/exhaust_fumes.gif");
    // tireTrack変数にtire-trackクラスを付与する
    tireTrack.classList.add("smoke_of_car");
    // tireTrack要素を水平位置をcar要素の水平位置から10ピクセル左にオフセット
    tireTrack.style.left = (parseInt(car.style.left) - 10) + "px";
    // tireTrack要素の垂直位置をcar要素と同じ垂直位置に設定
    tireTrack.style.top = car.style.top;
    // img要素(tireTrack変数)をhtml文書に追加 今回はhtml文書のbody要素の子要素として追加
    document.body.appendChild(tireTrack);
    // animateCar関数を呼び出し
    animateCar(car, tireTrack, winW, winH);
    // 車が表示されているのでtrueに変更することで複数の車が生成されるのを防ぐ
    carDisplayed = true;
    // ====================================================================
    console.log("carDisplayed:", carDisplayed);
    // ====================================================================
    // 一定時間が経過すればcarDisplayedがfalseとなり車の生成を許可する ※現在2秒で車の生成許可をtrueにする
    setTimeout(function () {
        carDisplayed = false;
        // ====================================================================
        console.log("carDisplayed:", carDisplayed);
        // ========================================================================
    }, 2000);
}

function animateCar(car, tireTrack, winW, winH) {
    let x = parseInt(car.style.left);
    let y = parseInt(car.style.top);
    const xstep = -5;
    const ystep = 3;
    const tspan = 5;

    function move() {
        // 車とタイやトラックの移動位置の設定
        x += xstep;
        y += ystep;
        car.style.left = x + "px";
        car.style.top = y + "px";

        tireTrack.style.left = (x + 170) + "px";
        tireTrack.style.top = (y + -100) + "px";
        // アニメーションの修了条件 車が画面外に出る前(垂直方向で下に移動中)はアニメーションを続行する条件 それ以外はelse文の方
        if (y < winH + document.documentElement.scrollTop && x < winW) {
            requestAnimationFrame(move);
        } else {
            // 車とタイヤトラックを削除
            car.parentNode.removeChild(car);
            tireTrack.parentNode.removeChild(tireTrack);
        }
    }

    move();
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
// ====================================================================================
// windowのスクロールイベントを監視
window.addEventListener("scroll", function () {
    // 現在のスクロール位置を取得して変数に格納
    const scrollTop = document.documentElement.scrollTop;
    // コンソールに上記で格納したスクロール値を出力
    console.log("Scroll Top:", scrollTop);
    // =======================================================================================

    // 新しい車の生成条件 ※生成条件を緩くする場合は10の部分の数字を大きくする
    // スクロール値が1080以上 スクロール値が1080で余った余りが10以下であるか確認(例 1080 3610 5410など) carDisplayedがfalseの時(車が表示されていないとき)
    if (scrollTop >= 1080 && Math.floor(scrollTop % 1080) <= 10 && !carDisplayed) {
        // 上記の条件が全て満たされたときに新しい車を生成する
        createCar();
    }
});
// ▲画面上を走行する車▲
