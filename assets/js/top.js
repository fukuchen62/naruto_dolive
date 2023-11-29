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
    // 鳴門海峡満喫旅
    $('#narutokaikyoumankitu').attr('display', "block");
    // ぐるっと一周鳴門旅
    $('#guruttoissyuunaruto').attr('display', "none");
    // 歴史・文化の鳴門旅
    $('#rekishibunkanonaruto').attr('display', "none");
    // 鳴門おおそと一周旅
    $('#narutooosotoissyuu').attr('display', "none");
    // キッズが主役旅
    $('#kizzugasyuyaku').attr('display', "none");


    jQuery('.course1').on('click', function () {
        clear_all();
        $('#narutokaikyoumankitu').attr('display', "block");
    });
    jQuery('.course2').on('click', function () {
        clear_all();
        $('#guruttoissyuunaruto').attr('display', "block");
    });
    jQuery('.course3').on('click', function () {
        clear_all();
        $('#rekishibunkanonaruto').attr('display', "block");
    });
    jQuery('.course4').on('click', function () {
        clear_all();
        $('#narutooosotoissyuu').attr('display', "block");
    });
    jQuery('.course5').on('click', function () {
        clear_all();
        $('#kizzugasyuyaku').attr('display', "block");
    });
});

function clear_all() {

    // 全てのコース以外のコースを非表示させる
    // 鳴門海峡満喫旅
    $('#narutokaikyoumankitu').attr('display', "none");
    // ぐるっと一周鳴門旅
    $('#guruttoissyuunaruto').attr('display', "none");
    // 歴史・文化の鳴門旅
    $('#rekishibunkanonaruto').attr('display', "none");
    // 鳴門おおそと一周旅
    $('#narutooosotoissyuu').attr('display', "none");
    // キッズが主役旅
    $('#kizzugasyuyaku').attr('display', "none");
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

// ▼目的別ボタン▼
$(document).ready(function () {
    var delay = 1000; // アニメーションの遅延時間（ミリ秒）
    var duration = 1500; // アニメーションの持続時間（ミリ秒）
    var animationTriggered = false;

    $(window).scroll(function () {
        var purposeDelayOffsetTop = $(".purpose_delay").offset().top;
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();

        if (!animationTriggered && scrollTop + windowHeight >= purposeDelayOffsetTop) {
            setTimeout(animateImages, 1500); // 1.5秒後にanimateImages関数を呼び出す
            animationTriggered = true;
        }
    });

    function animateImages() {
        var images = $(".purpose_delaywrap_box");

        images.each(function (index) {
            var image = $(this);

            setTimeout(function () {
                image.addClass("show");
            }, delay * index);
        });
    }
});
// ▲目的別ボタン▲


// ▼おススメキーワード枠▼
(function () {
    var container = document.getElementById('recommended_keywords');
    var textElements = document.querySelectorAll('.moving_text');
    var containerWidth = container.clientWidth;
    var containerHeight = container.clientHeight;

    var texts = [];
    var speedsX = [];
    var speedsY = [];

    for (var i = 0; i < textElements.length; i++) {
        var textElement = textElements[i];
        var textWidth = textElement.offsetWidth;
        var textHeight = textElement.offsetHeight;
        var x = Math.random() * (containerWidth - textWidth);
        var y = Math.random() * (containerHeight - textHeight);
        var speedX = (Math.random() - 0.5) * 2; // -1から1の乱数
        var speedY = (Math.random() - 0.5) * 2; // -1から1の乱数

        texts.push(textElement);
        speedsX.push(speedX);
        speedsY.push(speedY);

        textElement.style.left = x + 'px';
        textElement.style.top = y + 'px';
    }

    function moveTexts() {
        for (var i = 0; i < texts.length; i++) {
            var textElement = texts[i];
            var textWidth = textElement.offsetWidth;
            var textHeight = textElement.offsetHeight;
            var x = parseFloat(textElement.style.left);
            var y = parseFloat(textElement.style.top);

            x += speedsX[i];
            y += speedsY[i];

            // テキスト要素が跳ね返るように調整
            if (x + textWidth >= containerWidth) {
                x = containerWidth - textWidth;
                speedsX[i] = -Math.abs(speedsX[i]); // 速度の絶対値を反転させる
            } else if (x <= 0) {
                x = 0;
                speedsX[i] = Math.abs(speedsX[i]); // 速度の絶対値を反転させる
            }

            if (y + textHeight >= containerHeight) {
                y = containerHeight - textHeight;
                speedsY[i] = -Math.abs(speedsY[i]); // 速度の絶対値を反転させる
            } else if (y <= 0) {
                y = 0;
                speedsY[i] = Math.abs(speedsY[i]); // 速度の絶対値を反転させる
            }

            textElement.style.left = x + 'px';
            textElement.style.top = y + 'px';
        }

        requestAnimationFrame(moveTexts);
    }

    moveTexts();

    // ウィンドウのリサイズ時にcontainerのサイズを更新する
    window.addEventListener('resize', function () {
        containerWidth = container.clientWidth;
        containerHeight = container.clientHeight;
    });
})();
// ▲おススメキーワード枠▲
