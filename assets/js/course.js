// 各要素を変数に
const carWrapper = document.querySelector(".car_wrap");
const course = document.querySelector('.course_wrap');
const reqTime = document.querySelector(".req_time");
const coordinate = document.querySelector(".coordinate");
//   cardを全て取得し、変数に入れる
const cards = document.querySelectorAll(".course_details_card");

//   cardの座標を入れる配列を用意
let card_rects = [];
//   cardのx座標を代入する配列を用意
let cardXValues = [];

for (let i = 0; i < cards.length; i++) {
    card_rects[i] = cards[i].getBoundingClientRect();
    cardXValues[i] = card_rects[i].top + window.pageYOffset - 50;
}

window.addEventListener("scroll", ()=>{

    let carWrapperPos = carWrapper.getBoundingClientRect();
    let coursePos = course.getBoundingClientRect();
    let car_x = carWrapperPos.left + window.pageYOffset;
    let labelText = "スタート";

    for (let i = 0; i < cardXValues.length - 1; i++) {
        // 車のx座標がcardのそれぞれのx座標よりも大きくなればラベルを変える
        if (car_x >= cardXValues[i] + 50 ) {
            labelText = "時間" + (i + 1);
        } else {
            break; // 車のx座標がcardのx座標より小さい場合にループを抜ける
        }
    }
    reqTime.textContent = labelText;

        // したで止める
    if(window.pageYOffset >= (course.offsetTop + course.offsetHeight - 500)){
        carWrapper.style.position = 'relative';
        carWrapper.style.top = (course.offsetHeight - 250) + 'px';
        // 上で止める
    } else if(window.pageYOffset >= (coursePos.top + 300)){
        carWrapper.style.position = 'fixed';
        carWrapper.style.top = 300 + 'px';
        carWrapper.style.zIndex = 999;
    }

    if(course.offsetTop >= window.pageYOffset + 250){
        carWrapper.style.position = 'relative';
        carWrapper.style.top = 0 + 'px';
    }

    console.log(course.offsetTop);
    console.log(window.pageYOffset + 200);
});

