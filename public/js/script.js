document.querySelector('.navbar-toggle').addEventListener('click', function() {
    document.querySelector('.navbar-menu').classList.toggle('active');
});

if (slides.length <= itemsPerPage) {
    nextButton.style.display = 'none';
    prevButton.style.display = 'none';
    return;
}