const childInfo = document.querySelector(".child-info");
const rotateIcon = document.getElementById("rotateIcon");
const listProduct = document.getElementById("list-product");

let isRotated = false;

childInfo.addEventListener("click", () => {
    if (!isRotated) {
        rotateIcon.classList.add("rotated");
        listProduct.classList.add("open");
    } else {
        rotateIcon.classList.remove("rotated");
        listProduct.classList.remove("open");
    }

    isRotated = !isRotated;
});
