// 各要素を変数に
const carText = document.querySelector(".car_text");
const carWrapper = document.querySelector(".car_wrapper");
const course = document.querySelector('.course_all');
const courseRect = course.getBoundingClientRect();
const courseBottom = courseRect.bottom;

//   cardを全て取得し、変数に入れる
const cards = document.querySelectorAll(".card");
//   車の位置とサイズに関する情報を取得
let car_rect = carText.getBoundingClientRect();
//   cardの座標を入れる配列を用意
let card_rects = [];
//   cardのx座標を代入する配列を用意
let xValues = []
// スクロール位置と要素の距離の閾値
let offset = 200; 

//   配列にcards配列の要素それぞれの位置などを代入
//   xValuesにcardのそれぞれのx座標マイナス50を代入
for (let i = 0; i < cards.length; i++) {
    card_rects[i] = cards[i].getBoundingClientRect();
    xValues[i] = card_rects[i].top + window.pageYOffset;
}

//   windowをスクロールした際のイベント
window.addEventListener("scroll", () => {
    // スクロールごとに車の座標を取得
    let car_x = car_rect.left + window.pageYOffset;
    // デフォルトのラベル
    let labelText = "車";

    // xValuesの配列の長さ分だけfor文をまわす
    for (let i = 0; i < xValues.length; i++) {
        // 車のx座標がcardのそれぞれのx座標よりも大きくなればラベルを変える
        if (car_x >= xValues[i]) {
            labelText = "時間" + (i + 1);
        } else {
            break; // 車のx座標がcardのx座標より小さい場合にループを抜ける
        }
        let lastIndex = cards.length - 1;

        // ここにlastindexを用いた処理を書く

    }
    carText.textContent = labelText;

        // 車の要素の位置やサイズの情報を変数に取得
        let carWrapRect = carWrapper.getBoundingClientRect();

        // コース要素の初期位置のオフセットを取得
        // コースが親要素からどれだけ離れているかを取得
        let coursePos = course.offsetTop;
    
        // スクロール位置を取得
        let scrollPos = window.scrollY;
        
        // スクロール位置と要素の距離の閾値に基づいて判定
        // トップから200pxで固定
        if (carWrapRect.top <= offset) {
            // 要素が閾値以下にスクロールされた場合の処理
            carWrapper.style.position = 'fixed';
            carWrapper.style.top = offset + 'px';
            if(window.innerWidth >= 768){
                carWrapper.style.left= 5.3 + "%";
            }
        } 
    
        // 初期位置を超えた場合の処理
        // コースからはみ出ないように
        if(coursePos >= scrollPos + 200 ){
            carWrapper.style.position = 'absolute';
            carWrapper.style.top = 0 + "px";
            if(window.innerWidth >= 768){
                carWrapper.style.left = 0 + "px";
            }
        }
});




// 以下は道を表示する処理


// ドキュメントの読み込み完了後に実行される関数
document.addEventListener("DOMContentLoaded", function () {
    // .cardの要素数を取得
    let cardCount = document.querySelectorAll(".card").length;

    // .road要素の高さを計算し設定
    let roadHeight = cardCount * 600; // 1つの.cardの高さが300pxと仮定
    document.querySelector(".road").style.height = roadHeight + "px";
});


// $(document).ready(function () {
//     const car = $(".car");
//     const cards = $(".card");

//     let car_rect = car[0].getBoundingClientRect();
//     let card_rects = [];
//     let xValues = [];

//     cards.each(function () {
//         card_rects.push(this.getBoundingClientRect());
//         xValues.push(
//             card_rects[card_rects.length - 1].top + window.pageYOffset - 50
//         );
//     });

//     $(window).scroll(function () {
//         let car_x = car_rect.left + window.pageYOffset;
//         let labelText = "車";

//         for (let i = 0; i < xValues.length; i++) {
//             if (car_x >= xValues[i]) {
//                 labelText = "時間" + (i + 1);
//             } else {
//                 break;
//             }
//             let lastIndex = cards.length - 1;

//             if (car_x >= xValues[lastIndex]) {
//                 car.css({
//                     position: "absolute",
//                     top: xValues[lastIndex] + 90 + "px",
//                 });
//             }

//             if (car_x <= xValues[lastIndex]) {
//                 car.css({
//                     position: "fixed",
//                     top: "200px",
//                 });
//             }
//         }
//         car.text(labelText);
//     });

//     let cardCount = $(".card").length;
//     let roadHeight = cardCount * 600;
//     $(".road").css("height", roadHeight + "px");
// });
