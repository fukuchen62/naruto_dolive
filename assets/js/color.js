// カテゴリーによって色を変える

// コラム個別色
const pageH2 = document.querySelector(".page_title");
const topArea = document.querySelector(".toparea");
const pageTitle = pageH2.textContent;
if (pageTitle === "名物" || pageTitle === "カテゴリ別：名物") {
    pageH2.style.color = "#FEB59B";
    topArea.style.backgroundColor = "#FF7162";
} else if (pageTitle === "過ごし方" || pageTitle === "カテゴリ別：過ごし方") {
    pageH2.style.color = "#6AB0A3";
    topArea.style.backgroundColor = "#3B645F";
} else if (pageTitle === "鳴門について" || pageTitle === "カテゴリ別：鳴門について") {
    pageH2.style.color = "#5E83EA";
    topArea.style.backgroundColor = "#9AC4F7";
} else if (pageTitle === "その他" || pageTitle === "カテゴリ別：その他") {
    pageH2.style.color = "#B042BD ";
    topArea.style.backgroundColor = "#A271C8";
} else if (pageTitle === "食べる" || pageTitle === "目的別一覧：食べる") {
    // 目的別色
    // 赤
    pageH2.style.color = "#F8A59B";
    topArea.style.backgroundColor = "#d13a2b";
} else if (pageTitle === "遊ぶ" || pageTitle === "目的別一覧：遊ぶ") {
    // 黄色
    pageH2.style.color = " #F2A430";
    topArea.style.backgroundColor = "#F3E35A";
} else if (pageTitle === "観光" || pageTitle === "目的別一覧：観光") {
    // 青
    pageH2.style.color = "#1D8BCE";
    topArea.style.backgroundColor = " #6DB1D8";
} else if (pageTitle === "宿泊" || pageTitle === "目的別一覧：宿泊") {
    // 茶色
    pageH2.style.color = "#CF7D51 ";
    topArea.style.backgroundColor = " #DBB197";
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
