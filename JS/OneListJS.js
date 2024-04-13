let login = document.getElementById('blockIn');
let logup = document.getElementById('blockUp');

login.addEventListener("click", () => {
    window.location.href = '/log_in_up/logIn.php';
})

logup.addEventListener("click", () => {
    window.location.href = '/log_in_up/logUp.php';
})