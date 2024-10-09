const menuBtn = document.querySelector('.menu-btn')
const navlinks = document.querySelector('.nav-links')

menuBtn.addEventListener('click', () => {
    navlinks.classList.toggle('mobile-menu')
})

$('#darkModeToggle').change(() => {
    if (darkModeToggle.checked) {
        $('body').addClass("dark-mode");
        $('p').css('color', '#fff');
        $('header').addClass('bg-header-dark');
    } else {
        $('body').removeClass("dark-mode");
        $('p').css('color', '');
        $('header').removeClass('bg-header-dark');
    }
});

const learMoreParagraphs = [
    "With Ryzen Gaming, your experience game will be nice:) ",
    "With Ryzen Gaming, your experience game will be nice:) ",
    "With Ryzen Gaming, your experience game will be nice:) ",
    "With Ryzen Gaming, your experience game will be nice:) ",
];

$('.learn-more').click(function (event) {
    event.preventDefault();
    const index = $('.learn-more').index(this);
    alert(learMoreParagraphs[index]);
});