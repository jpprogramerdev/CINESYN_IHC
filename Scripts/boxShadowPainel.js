let painelLogin = document.getElementById("painelLogin")

painelLogin.addEventListener("mouseenter", function() {
    this.style.boxShadow = "0px 5px 15px rgba(0, 0, 0, 0.3)"
    this.style.transition = "box-shadow 0.3s ease-in-out"
});

painelLogin.addEventListener("mouseleave", function() {
    this.style.boxShadow = "none"
});