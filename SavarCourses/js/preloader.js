// document.addEventListener("DOMContentLoaded", function () {
//     const preloader = document.querySelector('.section-center');

//     window.addEventListener('load', function () {
//         preloader.style.display = 'none';
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    const preloader = document.querySelector('.section-center');

    // Show the preloader initially
    preloader.style.display = 'block';

    // Hide the preloader after 2 seconds
    setTimeout(function () {
        preloader.style.display = 'none';
    }, 3000); // 2000 milliseconds = 2 seconds
});

