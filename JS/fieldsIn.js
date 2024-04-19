let msg = document.getElementsByClassName("msg")[0];
let submit_btn = document.getElementsByClassName("button")[0];
submit_btn.addEventListener("click", () => {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    $.post('/log_in_up/entry.php', {email: email, password: password},
        function(data){
            if (data == "ERROR_FIELDS") {
                msg.textContent = "Заполните все поля";
                msg.classList.add("msg-error");
                msg.classList.remove("hide", "msg-success");
            }
            else if (data == "OK") {
                msg.textContent = "Авторизация прошла успешно";
                msg.classList.add("msg-success");
                msg.classList.remove("hide", "msg-error");
                window.location.href = "/main/main.php";
            }
            else if (data == "ERROR") {
                msg.textContent = "Неверный адрес электронной почты или пароль";
                msg.classList.add("msg-error");
                msg.classList.remove("hide", "msg-success");
            }
        });
});