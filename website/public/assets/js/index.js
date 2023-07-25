// Password show/hidden button method
const inputPass = document.querySelector("#password");
const eyeBtn = document.getElementById("span-click");
const eye = document.getElementById("toggle-eye");

eyeBtn.addEventListener("click", function () {
    if (inputPass.getAttribute("type") === "password") {
        eye.classList.remove("bi-eye");
        inputPass.setAttribute("type", "text");
        eye.classList.add("bi-eye-slash");
    } else {
        eye.classList.remove("bi-eye-slash");
        inputPass.setAttribute("type", "password");
        eye.classList.add("bi-eye");
    }
});

// Change Homestay Price Within
function changePrice() {
    let total = document.getElementById("jumlah-orang").value;
    let price = document.querySelector("#price");

    let sum = total * 80000;

    let IDR = new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
    }).format(sum);

    price.innerHTML = IDR;
}
