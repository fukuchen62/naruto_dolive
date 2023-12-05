// カテゴリーによって色を変える

// コラム個別色
const pageH2 = document.querySelector(".page_title");
const topArea = document.querySelector(".toparea");
const purposeBtns = document.querySelectorAll(".purpose_btn");
const pageTitle = pageH2.textContent;
if (pageTitle === "名物" || pageTitle === "名物一覧" || pageTitle === "カテゴリ別：名物") {
    pageH2.style.color = "#FEB59B";
    topArea.style.backgroundColor = "#FF7162";
} else if (pageTitle === "過ごし方" || pageTitle === "過ごし方一覧" || pageTitle === "カテゴリ別：過ごし方") {
    pageH2.style.color = "#6AB0A3";
    topArea.style.backgroundColor = "#3B645F";
} else if (pageTitle === "鳴門について" || pageTitle === "鳴門について一覧" || pageTitle === "カテゴリ別：鳴門について") {
    pageH2.style.color = "#5E83EA";
    topArea.style.backgroundColor = "#9AC4F7";
} else if (pageTitle === "その他" || pageTitle === "その他一覧" || pageTitle === "カテゴリ別：その他") {
    pageH2.style.color = "#B042BD ";
    topArea.style.backgroundColor = "#A271C8";
} else if (pageTitle === "食べる" || pageTitle === "目的別一覧：食べる" || pageTitle === "カテゴリ別：和食" || pageTitle === "カテゴリ別：洋食" || pageTitle === "カテゴリ別：中華" || pageTitle === "カテゴリ別：スイーツ" || pageTitle === "カテゴリ別：その他") {
    // 目的別色
    // 赤
    pageH2.style.color = "#F8A59B";
    topArea.style.backgroundColor = "#d13a2b";
    // ボタンの色を変更する
    purposeBtns.forEach((purposeBtn) => {
        purposeBtn.style.backgroundColor = " #F8A59B";
    });
} else if (pageTitle === "遊ぶ" || pageTitle === "目的別一覧：遊ぶ") {
    // 黄色
    pageH2.style.color = " #F2A430";
    topArea.style.backgroundColor = "#F3E35A";
} else if (pageTitle === "観光" || pageTitle === "目的別一覧：観光" || pageTitle === "カテゴリ別：アート・カルチャー" || pageTitle === "カテゴリ別：公園" || pageTitle === "カテゴリ別：寺院・神社" || pageTitle === "カテゴリ別：歴史・文化" || pageTitle === "カテゴリ別：自然") {
    // 青
    pageH2.style.color = "#1D8BCE";
    topArea.style.backgroundColor = " #6DB1D8";
    // ボタンの色を変更する
    purposeBtns.forEach((purposeBtn) => {
        purposeBtn.style.backgroundColor = " #6DB1D8";
    });

} else if (pageTitle === "宿泊" || pageTitle === "目的別一覧：宿泊") {
    // 茶色
    pageH2.style.color = "#CF7D51 ";
    topArea.style.backgroundColor = " #DBB197";
}


// 新着情報個別色
if (pageTitle === "ニュース" || pageTitle === "ニュース一覧") {
    pageH2.style.color = "#33F3FF";
    topArea.style.backgroundColor = "#01ADB9";
} else if (pageTitle === "アップデート" || pageTitle === "アップデート一覧") {
    pageH2.style.color = "#FFB357";
    topArea.style.backgroundColor = "#F6EA00";
} else if (pageTitle === "イベント" || pageTitle === "イベント一覧") {
    pageH2.style.color = "#FF93C8";
    topArea.style.backgroundColor = "#FF188A";
}


// コースの色変更

console.log("test");
