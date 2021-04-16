const headerDateElement = $(`#todayDate`)
const date = new Date();
const months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septempbre", "Octobre", "Novembre", "Décembre"];
const days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
headerDateElement.html(`<span class="underline-black">${days[date.getDay()]} . </span><span class="underline-lightgrey">${date.getDate()} ${months[date.getMonth()]} . ${date.getFullYear()}</span>`);

const categories = $(`.list-article-category`);
for (const category of categories) {
    const titleWith = (category.childNodes[1].offsetWidth+75);
    category.childNodes[3].style.width = `${category.offsetWidth-titleWith}px`
}
if (window.location.pathname === "/auth") {
    document.body.style.backgroundColor = "#ecf0f3";
}

/*
		AUTH CONTENT
*/

let switchCtn = document.querySelector("#switch-cnt");
let switchC1 = document.querySelector("#switch-c1");
let switchC2 = document.querySelector("#switch-c2");
let switchCircle = document.querySelectorAll(".switch__circle");
let switchBtn = document.querySelectorAll(".switch-btn");
let aContainer = document.querySelector("#a-container");
let bContainer = document.querySelector("#b-container");
let allButtons = document.querySelectorAll(".submit");

let changeForm = (e) => {

    switchCtn.classList.add("is-gx");
    setTimeout(function(){
        switchCtn.classList.remove("is-gx");
    }, 1500)

    switchCtn.classList.toggle("is-txr");
    switchCircle[0].classList.toggle("is-txr");
    switchCircle[1].classList.toggle("is-txr");

    switchC1.classList.toggle("is-hidden");
    switchC2.classList.toggle("is-hidden");
    aContainer.classList.toggle("is-txl");
    bContainer.classList.toggle("is-txl");
    bContainer.classList.toggle("is-z200");
}

let mainF = (e) => {
    for (var i = 0; i < switchBtn.length; i++)
        switchBtn[i].addEventListener("click", changeForm)
}

window.addEventListener("load", mainF);

// Auth System
$(`form`).on("submit", function(e) {
    e.preventDefault();
    const element = e.target;
    let data;
    if (element.querySelector('input[name="lastname"]')) {
        data = {
            lastname: element.querySelector('input[name="lastname"]').value,
            firstname: element.querySelector('input[name="firstname"]').value,
            email: element.querySelector('input[name="email"]').value,
            password: element.querySelector('input[name="password"]').value,
            confirmPassword: element.querySelector('input[name="confirmPassword"]').value,
        }
    } else {
        data = {
            email: element.querySelector('input[name="email"]').value,
            password: element.querySelector('input[name="password"]').value
        }
    }
    $.post( "/authRegister", data)
    .done(function( data ) {
        if (data.includes("E")) {
            data = data.split("$");
            for (const datum of data) {
                let unit = datum.split("E")
                if (unit[0] !== "") {
                    let label = element.querySelector(`label[name="${unit[0]}"]`);
                    if (!label) {
                        let focus = element.querySelector(`input[name="${unit[0]}"]`);
                        let errorElement = document.createElement("label");
                        errorElement.setAttribute("name", unit[0]);
                        errorElement.innerText = unit[1];
                        focus.after(errorElement);
                    } else {
                        label.innerText = unit[1];
                    }
                }
            }
        }
    });
})
