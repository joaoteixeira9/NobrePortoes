document.addEventListener('DOMContentLoaded', function() {
    var imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var imageUrl = button.getAttribute('data-bs-image');
        var imageTitle = button.getAttribute('data-bs-title');
        
        var modalImage = document.getElementById('modalImage');
        var modalTitle = document.getElementById('imageModalLabel');
        
        modalImage.src = imageUrl;
        modalTitle.textContent = imageTitle;
    });

    var addFotosModal = document.getElementById('addFotosModal');
    addFotosModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var categoria = button.getAttribute('data-categoria');
        document.getElementById('modalCategoria').value = categoria;
    });
});