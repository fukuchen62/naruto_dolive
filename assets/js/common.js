// トップへ戻るボタン

$(function () {
    var btn = $('.button');
    var timer;

    $(window).scroll(function () {
        //スクロール開始するとボタンを非表示
        btn.removeClass('is-active');

        //スクロール中はイベントの発火をキャンセルする
        clearTimeout(timer);

        //スクロールが停止して0.2秒後にイベントを発火する
        timer = setTimeout(function () {
            //スクロール位置を判定してページ上部のときはボタンを非表示にする
            if ($(this).scrollTop()) {
                btn.addClass('is-active');
            } else {
                btn.removeClass('is-active');
            }
        }, 200);
    });

    //ボタンクリックでトップへ戻る
    btn.on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        });
    });
});
