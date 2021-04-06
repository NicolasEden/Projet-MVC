const array = ["username", "password", "confirm"];
$('#form').submit(function(event) {
    event.preventDefault();

    // Vérification des informations en JS
    let valid = true;
    for (let i = 0; i < array.length; i++) {
        if ($(`h6[name=${array[i]}]`).hasClass("invalid")) {
            $(`span[name=${array[i]}]`).remove()
            $(`h6[name=${array[i]}]`).attr("class", "valid")
            $(`input[name=${array[i]}]`).attr("class", "valid")
            $(`select[name=${array[i]}]`).attr("class", "valid")
        }
        if ($(`input[name=${array[i]}]`).val() == "" || $(`input[name=${array[i]}]`).val() == " ") {
            error(array[i], " - Ce chanp est obligatoire");
            valid = false;
        }
    }
    if (valid === true) {
        let data;
        if ($(`input[name="confirm"]`).val()) {
            if ($(`input[name="password"]`).val() !== $(`input[name="confirm"]`).val()) {
                error("password", " - Les mot de passes ne correspondent pas");
                error("confirm", " - Les mot de passes ne correspondent pas");
                return;
            }
            data = {
                "username": $(`input[name="username"]`).val(),
                "password": $(`input[name="password"]`).val(),
                "type": "register"
            }
        } else {
            data = {
                "username": $(`input[name="username"]`).val(),
                "password": $(`input[name="password"]`).val(),
                "type": "login"
            }
        }
        // Récupération de toutes les informations pour les envoyées à l'API
        console.log(window.location.search.replace("?action=", ""))
        $.post(`./index.php?action=${window.location.search.replace("?action=", "")}`, data).done(function( data ) {
            console.log(data);
            if (data.includes("finish")) {
                window.location.href = "./index.php";
            } else {
                error("password", " - Mot de passe ou nom d'utilisateur incorrect");
                error("username", " - Mot de passe ou nom d'utilisateur incorrect");
            }
        })
    }
})

function error(type, message) {
    // Fonction de traitement des erreurs
    $(`h6[name=${type}]`).append(`<span name=${type} class="spanError">${message}</span>`);
    $(`h6[name=${type}]`).attr("class", "invalid");
    $(`input[name=${type}]`).attr("class", "invalid");
    $(`select[name=${type}]`).attr("class", "invalid");
}

$('#edit').submit(function(event) {
    event.preventDefault();
    const data = {
        "id": $(`#billet`).val(),
        "title": $(`#titre`).text(),
        "text": $(`#text`).text()
    }
    const type = $(`#type`).val();
    if (type === "Billet") {
        $.post(`./index.php?action=edit&id=${data.id}&send="true"`, data).done(function (result) {
            console.log(result)
            if (result.includes("finish")) {
                window.location.href = `./index.php?action=billet&id=${data.id}`;
            }
        })
    } else {
        $.post(`./index.php?action=edit&idCom=${data.id}&send="true"`, data).done(function (result) {
            if (result.includes("finish")) {
                window.location.href = `./index.php`;
            }
        })
    }
})