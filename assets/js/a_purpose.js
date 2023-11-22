'use strict';

const init = 3  //初期表示数
const more = 3  //追加表示数

//1番目の記事

$(".sec01").each(function () {
    // moreボタンを表示し、closeボタンを隠す
    $(this).find(".more01").show();
    $(this).find(".close01").hide();
});

// 初期表示数以降のリストを非表示に
$(".card_item:nth-child(n+" + (init + 1) + ")").hide()

//初期表示数以下であればMoreボタンを非表示
$(".sec01").filter(function () {
    return $(this).find(".card_item").length <= init
}).find(".more01", ".close01").hide()

// Moreボタンクリックで指定数表示
$(".more01").on("click", function () {
    let this_list = $(this).closest(".sec01")
    this_list.find(".card_item:hidden").slice(0, more).slideToggle()

    if (this_list.find(".card_item:hidden").length == 0) {
        $(this).hide();
        $(".close01").show();
    }
})

// closeボタンがクリックされた時の処理
$(".close01").click(function () {

    $(this).parent().find("a:gt(" + (init - 1) + ")").slideUp();

    // closeボタンを隠し、moreボタンを表示する
    $(this).hide();
    $(".more01").show();
});


//2番目の記事
$(".sec02").each(function () {
    // moreボタンを表示し、closeボタンを隠す
    $(this).find(".more02").show();
    $(this).find(".close02").hide();
});

// 初期表示数以降のリストを非表示に
$(".card_item:nth-child(n+" + (init + 1) + ")").hide()

//初期表示数以下であればMoreボタンを非表示
$(".sec02").filter(function () {
    return $(this).find(".card_item").length <= init
}).find(".more02", ".close02").hide()

// Moreボタンクリックで指定数表示
$(".more02").on("click", function () {
    let this_list = $(this).closest(".sec02")
    this_list.find(".card_item:hidden").slice(0, more).slideToggle()

    if (this_list.find(".card_item:hidden").length == 0) {
        $(this).hide();
        $(".close02").show();
    }
})

// closeボタンがクリックされた時の処理
$(".close02").click(function () {

    $(this).parent().find("a:gt(" + (init - 1) + ")").slideUp();

    // closeボタンを隠し、moreボタンを表示する
    $(this).hide();
    $(".more02").show();
});

//3番目の記事
$(".sec03").each(function () {
    // moreボタンを表示し、closeボタンを隠す
    $(this).find(".more03").show();
    $(this).find(".close03").hide();
});

// 初期表示数以降のリストを非表示に
$(".card_item:nth-child(n+" + (init + 1) + ")").hide()

//初期表示数以下であればMoreボタンを非表示
$(".sec03").filter(function () {
    return $(this).find(".card_item").length <= init
}).find(".more03", ".close03").hide()

// Moreボタンクリックで指定数表示
$(".more03").on("click", function () {
    let this_list = $(this).closest(".sec03")
    this_list.find(".card_item:hidden").slice(0, more).slideToggle()

    if (this_list.find(".card_item:hidden").length == 0) {
        $(this).hide();
        $(".close03").show();
    }
})

// closeボタンがクリックされた時の処理
$(".close03").click(function () {

    $(this).parent().find("a:gt(" + (init - 1) + ")").slideUp();

    // closeボタンを隠し、moreボタンを表示する
    $(this).hide();
    $(".more03").show();
});


//4番目の記事
$(".sec04").each(function () {
    // moreボタンを表示し、closeボタンを隠す
    $(this).find(".more04").show();
    $(this).find(".close04").hide();
});

// 初期表示数以降のリストを非表示に
$(".card_item:nth-child(n+" + (init + 1) + ")").hide()

//初期表示数以下であればMoreボタンを非表示
$(".sec04").filter(function () {
    return $(this).find(".card_item").length <= init
}).find(".more04", ".close04").hide()

// Moreボタンクリックで指定数表示
$(".more04").on("click", function () {
    let this_list = $(this).closest(".sec04")
    this_list.find(".card_item:hidden").slice(0, more).slideToggle()

    if (this_list.find(".card_item:hidden").length == 0) {
        $(this).hide();
        $(".close04").show();
    }
})

// closeボタンがクリックされた時の処理
$(".close04").click(function () {

    $(this).parent().find("a:gt(" + (init - 1) + ")").slideUp();

    // closeボタンを隠し、moreボタンを表示する
    $(this).hide();
    $(".more04").show();
});


//5番目の記事
$(".sec05").each(function () {
    // moreボタンを表示し、closeボタンを隠す
    $(this).find(".more05").show();
    $(this).find(".close05").hide();
});

// 初期表示数以降のリストを非表示に
$(".card_item:nth-child(n+" + (init + 1) + ")").hide()

//初期表示数以下であればMoreボタンを非表示
$(".sec05").filter(function () {
    return $(this).find(".card_item").length <= init
}).find(".more05", ".close05").hide()

// Moreボタンクリックで指定数表示
$(".more05").on("click", function () {
    let this_list = $(this).closest(".sec05")
    this_list.find(".card_item:hidden").slice(0, more).slideToggle()

    if (this_list.find(".card_item:hidden").length == 0) {
        $(this).hide();
        $(".close05").show();
    }
})

// closeボタンがクリックされた時の処理
$(".close05").click(function () {

    $(this).parent().find("a:gt(" + (init - 1) + ")").slideUp();

    // closeボタンを隠し、moreボタンを表示する
    $(this).hide();
    $(".more05").show();
});
