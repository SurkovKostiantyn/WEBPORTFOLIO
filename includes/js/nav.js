const header = document.querySelector('#header');
const nav = document.querySelector('#navbar');
const callback = ([entry]) => {
    const { isIntersecting } = entry;
    nav.classList.toggle('sticky', !isIntersecting);
};
const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.0
};
const observer = new IntersectionObserver(callback, options);
observer.observe(header);