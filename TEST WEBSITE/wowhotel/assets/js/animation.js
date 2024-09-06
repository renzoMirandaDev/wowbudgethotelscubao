document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        document.getElementById('bg-video').style.opacity = '0.7';
        document.querySelector('.video-overlay.header-text').classList.add('show');
        document.body.style.backgroundColor = 'black';

        setTimeout(function() {
            document.getElementById('bg-video').style.filter = 'blur(5px)';
        }, 5000);
    }, 2500);
});
