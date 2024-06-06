// Modalı aç
function openModal(imageUrl) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImg");
    modal.style.display = "block";
    modalImg.src = imageUrl;
}

// Modalı kapat
function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}
