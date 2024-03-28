window.addEventListener('scroll', function () {
    let scrollPosition = window.scrollY;
    let windowHeight = window.innerHeight;
    let documentHeight = document.body.scrollHeight;

    if (scrollPosition + windowHeight >= documentHeight) {
        document.getElementById('footer').style.display = 'block';
    } else {
        document.getElementById('footer').style.display = 'none';
    }

});









