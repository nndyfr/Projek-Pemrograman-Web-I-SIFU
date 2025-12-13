const form = document.querySelector("form");

form.addEventListener("submit", function(e){
    const pass = form.password.value;
    const confirm = form.confirm_password.value;

    if (pass !== confirm) {
        e.preventDefault();
        alert("Password and Confirm Password are not the same!");
    }
});
