const passwordInput = document.getElementById("password")
const showPasswordBtn = document.getElementById("showPasswordBtn")

showPasswordBtn.addEventListener("click", function() {
    const passwordType = passwordInput.getAttribute("type")
    passwordInput.setAttribute("type", passwordType === "password" ? "text" : "password")
    showPasswordBtn.innerHTML = passwordType === "password" ? '<i class="far fa-eye-slash"></i>' : '<i class="far fa-eye"></i>';
});