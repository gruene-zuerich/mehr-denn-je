window.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.mdj-progress')) {
        let progress = document.querySelector('.mdj-progress');
        let bar = progress.querySelector('.mdj-progress__bar');
        let width = bar.getAttribute('data-width');
        let text = bar.querySelector('span');
        console.log(width);
        setTimeout(function () {

            bar.animate([
                { width: '0%' },
                { width: width + '%' }
            ], {
                duration: 1000,
                fill: 'forwards',
                easing: 'ease-in-out'
            });

            setTimeout(function () {
                text.animate([
                    { opacity: 0 },
                    { opacity: 1 }
                ], {
                    duration: 500,
                    fill: 'forwards',
                    easing: 'ease-in-out'
                });
            }, 500);
        }, bar.getAttribute('data-timeout') || 1500);
    }
});
