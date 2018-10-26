function validacion() {

    var user = document.getElementById("user").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;



    if (user = null || (user.length == 0) || /^\s+$/.test(user) ) {

        alert('[ERROR] El cambio debe tener un valor...');
        return false;

    }else if (email = null || (email.length == 0) || /^\s+$/.test(email) )

        alert('[ERROR] El cambio debe tener un valor...');
        return false;

    return true;


}
