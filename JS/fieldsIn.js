let msg = document.getElementsByClassName("msg")[0];
let submit_btn = document.getElementsByClassName("button")[0];
submit_btn.addEventListener("click", (e) => {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    if (email == "" || password == "") {
        msg.textContent = "Заполните все поля";
        msg.classList.add("msg-error");
        msg.classList.remove("hide", "msg-success");
        e.preventDefault();
    }
    else {
        msg.textContent = "Нет такого пользователя";
        msg.classList.add("msg-error");
        msg.classList.remove("hide", "msg-success");
    }
});