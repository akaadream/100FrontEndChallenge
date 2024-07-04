document.addEventListener('DOMContentLoaded', () => {
    const previewElements = document.querySelectorAll('.product-image');
    if (previewElements) {
        previewElements.forEach((preview) => {
            preview.addEventListener('click', (event) => {
                event.preventDefault();

                const zoomed = document.getElementById('zoomed');
                if (zoomed != null)
                {
                    removeSelected(previewElements);
                    zoomed.setAttribute('src', preview.getAttribute('src'));
                    preview.classList.add('selected');
                }
            });
        });
    }

    const sizes = document.querySelectorAll('.size');
    if (sizes) {
        sizes.forEach((size) => {
            size.addEventListener('click', (event) => {
                event.preventDefault();

                removeSelected(sizes);
                size.classList.add('selected');
            });
        })
    }
});

function removeSelected(elements) {
    elements.forEach((element) => {
        element.classList.remove('selected');
    });
}
