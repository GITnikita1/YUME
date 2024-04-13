let login = document.getElementById('blockIn');
let logup = document.getElementById('blockUp');

login.addEventListener("click", () => {
    window.location.href = 'logIn.php';
})

logup.addEventListener("click", () => {
    window.location.href = 'logUp.php';
})