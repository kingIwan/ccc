window.addEventListener('load', function () {
    const loader = document.getElementById('loader');
    loader.style.opacity = '1';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 700); 
});