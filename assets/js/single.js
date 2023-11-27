'use strict';



// $('.facility_img_box').slick({
//     arrows: false, // 矢印の消去
//     autoplay: true, // 自動再生
//     autoplaySpeed: 5000, // 再生速度（ミリ秒設定） 1000ミリ秒=1秒
//     infinite: true,
//     dots: true,
//     variableWidth: true, //width等をcssで管理
//     customPaging: function (slick, index) {
//         let targetImage = slick.$slides.eq(index).find('img').attr('src');
//         return '<img src=' + targetImage + '>';
//     },
// });

const facilityImgList = document.querySelectorAll('.facility_img_list li');
const facilityImg1 = document.querySelector('.facility_img1');

facilityImgList.forEach(item => {
    const img = item.querySelector('.facility_img2');
    img.addEventListener('click', function () {
        const src = this.src;
        facilityImg1.src = src;
    });
});
