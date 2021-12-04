function validate() {
    // bindings for variables to ensure at least one item is selected
    let kittenAmount = document.querySelector("#Kitten food");
    let adultAmount = document.querySelector("#Adult food");
    let sensitiveAmount = document.querySelector("#Sensitive");

    // bindings for email and password checking
    let emailCheck = document.querySelector("#email");
    let passwordCheck = document.querySelector("#password");

    // bindings for checking if a mailing option has been selected
    let freeCheck = document.querySelector("#shipping1");
    let overnightCheck = document.querySelector("#shipping2");
    let threeDayCheck = document.querySelector("#shipping3");

    if (passwordCheck.value.length == 0) {
        alert("Please enter a password!");
        e.preventDefault();
    }

    if (emailCheck == "" || !emailCheck.includes("@") || !emailCheck.endsWith(".com")) {
        alert("Please enter a valid email address for username!")
        e.preventDefault();
    }

    if ((kittenAmount.value == 0) && (adultAmount.value == 0) && (sensitiveAmount.value == 0)) {
        alert("Please select at least one item to purchase!");
        e.preventDefault();
    }

    if ((freeCheck.checked == false) && (overnightCheck.checked == false) && (threeDayCheck.checked == false)) {
        alert("Please select a shipping type!");
        e.preventDefault();
    }
}

