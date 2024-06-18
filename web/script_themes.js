document.addEventListener('DOMContentLoaded', () => {
    const themeSwitcher = document.getElementById('theme-switcher');
    const navLinks = document.querySelectorAll('.nav-link');
    const pages = document.querySelectorAll('.page');

    themeSwitcher.addEventListener('click', () => {
        document.body.classList.toggle('dark');
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            const target = link.getAttribute('data-target');
            pages.forEach(page => {
                page.classList.add('hidden');
            });
            document.getElementById(target).classList.remove('hidden');
        });
    });
});

