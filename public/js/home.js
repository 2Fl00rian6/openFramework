const loader = document.getElementById('loader');
setTimeout(() => {
    loader.classList.add('none');
}, 2000);

const redirectionDoc = document.getElementById('redirection-doc');
redirectionDoc.addEventListener('click', () => {
    window.location.href = "/documentation";
});