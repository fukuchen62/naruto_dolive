// カテゴリーによって色を変える

// コラム個別色
const pageH2 = document.querySelector(".page_title");
const topArea = document.querySelector(".toparea");
const pageTitle = pageH2.textContent;
if (pageTitle === "名物") {
    pageH2.style.color = "#FEB59B";
    topArea.style.backgroundColor = "#FF7162";
} else if (pageTitle === "過ごし方") {
    pageH2.style.color = "#6AB0A3";
    topArea.style.backgroundColor = "#3B645F";
} else if (pageTitle === "鳴門について") {
    pageH2.style.color = "#5E83EA";
    topArea.style.backgroundColor = "#9AC4F7";
} else if (pageTitle === "その他") {
    pageH2.style.color = "#B042BD ";
    topArea.style.backgroundColor = "#A271C8";
}

// 新着情報個別色
if (pageTitle === "ニュース") {
    pageH2.style.color = "#33F3FF";
    topArea.style.backgroundColor = "#01ADB9";
} else if (pageTitle === "アップデート") {
    pageH2.style.color = "#FFB357";
    topArea.style.backgroundColor = "#F6EA00";
} else if (pageTitle === "イベント") {
    pageH2.style.color = "#FF93C8";
    topArea.style.backgroundColor = "#FF188A";
}
