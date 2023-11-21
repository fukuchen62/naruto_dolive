'use strict';

const init = 3  //初期表示数
const more = 3  //追加表示数

// 初期表示数以降のリストを非表示に
$(".card_item:nth-child(n+" + (init + 1) + ")").hide()

//初期表示数以下であればMoreボタンを非表示
$(".archive_col").filter(function () {
    return $(this).find(".card_item").length <= init
}).find(".more_btn").hide()

// Moreボタンクリックで指定数表示
$(".more_btn").on("click", function () {
    let this_list = $(this).closest(".archive_col")
    this_list.find(".card_item:hidden").slice(0, more).slideToggle()

    if (this_list.find(".card_item:hidden").length == 0) {
        $(this).fadeOut()
    }
})
