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
    let labelText = "スタート\n"+start_time;

    for (let i = 0; i < cardXValues.length - 1; i++) {
        if (car_x >= cardXValues[0] + 200 ) {
            labelText = "移動時間\n"+ move_time2;
        } 
        if(car_x >= cardXValues[1] + 200){
            labelText =  "移動時間\n"+ move_time3;
        }
        if(car_x >= cardXValues[2] + 200){
            labelText =  "移動時間\n"+ move_time4;
        }
        if(car_x >= cardXValues[3] + 200){
            labelText = "移動時間\n"+ move_time5;
        }
        if(car_x >= cardXValues[4] + 200){
            labelText = "移動時間\n"+ move_time6;
        }
        if(car_x >= cardXValues[5] + 200){
            labelText = "移動時間\n"+ move_time7;
        }
        if(car_x >= cardXValues[6] + 200){
            labelText = "移動時間\n"+ move_time8;
        }
        if(car_x >= cardXValues[7] + 200){
            labelText = "移動時間\n"+ move_time9;
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

});

