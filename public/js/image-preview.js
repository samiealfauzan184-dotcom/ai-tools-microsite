document.addEventListener('DOMContentLoaded', function () {
    const input        = document.getElementById('image');
    const wrapper       = document.getElementById('preview-wrapper');
    const emptyState    = document.getElementById('preview-empty');
    const filledState   = document.getElementById('preview-filled');
    const previewImg     = document.getElementById('preview-img');
    const previewName   = document.getElementById('preview-file-name');
    const removeBtn      = document.getElementById('preview-remove');

    if (!input || !wrapper || !emptyState || !filledState || !previewImg || !previewName || !removeBtn) {
        return;
    }

    function showPreview(file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
            previewName.textContent = file.name;
            emptyState.classList.add('hidden');
            filledState.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    }

    function resetPreview() {
        input.value = '';
        previewImg.src = '';
        previewName.textContent = '';
        filledState.classList.add('hidden');
        emptyState.classList.remove('hidden');
    }

    // Klik area kosong -> buka file picker
    emptyState.addEventListener('click', function () {
        input.click();
    });

    // Pilih file lewat input
    input.addEventListener('change', function () {
        if (input.files && input.files[0]) {
            showPreview(input.files[0]);
        }
    });

    // Hapus gambar terpilih
    removeBtn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        resetPreview();
    });

    // Drag & Drop
    ['dragenter', 'dragover'].forEach(function (eventName) {
        wrapper.addEventListener(eventName, function (e) {
            e.preventDefault();
            e.stopPropagation();
            wrapper.classList.add('ring-4', 'ring-blue-500/30');
        });
    });

    ['dragleave', 'drop'].forEach(function (eventName) {
        wrapper.addEventListener(eventName, function (e) {
            e.preventDefault();
            e.stopPropagation();
            wrapper.classList.remove('ring-4', 'ring-blue-500/30');
        });
    });

    wrapper.addEventListener('drop', function (e) {
        const files = e.dataTransfer.files;
        if (files && files[0] && files[0].type.startsWith('image/')) {
            input.files = files;
            showPreview(files[0]);
        }
    });
});