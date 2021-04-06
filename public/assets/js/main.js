
    const date = new Date();
    const months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septempbre", "Octobre", "Novembre", "Décembre"];
    const days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    let hour = date.getHours();
    let min = date.getMinutes();
    let heure = (hour > 9 ? hour : "0" + hour);
    heure += "h" + (min > 9? min:"0" + min);
    `${days[date.getDay()]} ${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()} à ${heure}`;
