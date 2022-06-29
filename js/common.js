const header = document.querySelector('#banner');
const nav = document.querySelector('#navbar');
const callback = ([entry]) => {
    const { isIntersecting } = entry;
    nav.classList.toggle('navOpacity', !isIntersecting);
};
const options = {
    root: null,
    rootMargin: '-80px',
    threshold: 0.0
};
const observer = new IntersectionObserver(callback, options);
observer.observe(header);