const courseh4 = document.querySelector(".course_title");
const courseTitle = courseh4.textContent;
const courseCards = document.querySelectorAll(".course_details_card");
const card1Contents = document.querySelectorAll(".card1_content");
const recTitles = document.querySelectorAll(".rec_title");


if (courseTitle === "鳴門海峡満喫旅") {
    courseCards.forEach((courseCard) => {
        courseCard.style.backgroundColor = "#FF8B0380";
    });
} else if (courseTitle === "歴史・文化の鳴門旅") {
    courseCards.forEach((courseCard) => {
        courseCard.style.backgroundColor = "#99663380";
    });
} else if (courseTitle === "ぐるっと一周鳴門旅") {
    courseCards.forEach((courseCard) => {
        courseCard.style.backgroundColor = "#FF1E1E80";
    });
} else if (courseTitle === "鳴門おおそと一周旅") {
    courseCards.forEach((courseCard) => {
        courseCard.style.backgroundColor = "#11CD7E80";
    });
} else if (courseTitle === "キッズが主役旅") {
    courseCards.forEach((courseCard) => {
        courseCard.style.backgroundColor = "#D427F080";
    });
}
