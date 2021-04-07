const headerDateElement = $(`#todayDate`)
const date = new Date();
const months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septempbre", "Octobre", "Novembre", "Décembre"];
const days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
headerDateElement.html(`<span class="underline-black">${days[date.getDay()]} . </span><span class="underline-lightgrey">${date.getDate()} ${months[date.getMonth()]} . ${date.getFullYear()}</span>`);
