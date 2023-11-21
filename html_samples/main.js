"use strict";

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
