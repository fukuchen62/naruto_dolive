'use strict';

const facilityImgList = document.querySelectorAll('.facility_img_list li');
const facilityImg1 = document.querySelector('.facility_img1');

facilityImgList.forEach(item => {
    const img = item.querySelector('.facility_img2');
    img.addEventListener('click', function () {
        const src = this.src;
        facilityImg1.src = src;
    });
});
