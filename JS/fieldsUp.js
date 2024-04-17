let msg = document.getElementsByClassName("msg")[0];
let submit_btn = document.getElementsByClassName("button")[0];
submit_btn.addEventListener("click", (e) => {
    let email = document.getElementById("email").value;
    let name = document.getElementById("name").value;
    let number = document.getElementById("number").value;
    let password = document.getElementById("password").value;
    if (email == "" || password == "" || name == "" || number == "") {
        msg.textContent = "Заполните все поля";
        msg.classList.add("msg-error");
        msg.classList.remove("hide", "msg-success");
        e.preventDefault();
    }
    else {
        msg.textContent = "Регистрация прошла успешно";
        msg.classList.add("msg-success");
        msg.classList.remove("hide", "msg-error");
    }
});