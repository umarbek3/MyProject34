function validate1() {
    var username = document.forms["registration"]["username"].value;
    if (username === "") {
        alert("Please enter your username");
        return false;
    }

    var password = document.forms["registration"]["password"].value;
    if (password === "") {
        alert("Please enter your password");
        return false;
    }

    var confirmPassword = document.forms["registration"]["confirmPassword"].value;
    if (confirmPassword === "") {
        alert("Please confirm your password");
        return false;
    }

    var firstname = document.forms["registration"]["firstname"].value;
    if (firstname === "") {
        alert("Please enter your first name");
        return false;
    }

    var lastname = document.forms["registration"]["lastname"].value;
    if (lastname === "") {
        alert("Please enter your last name");
        return false;
    }
}



