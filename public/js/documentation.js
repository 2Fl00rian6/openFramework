const firstPage = document.getElementById('first-page');
const secondPage = document.getElementById('second-page');
const page1 = document.getElementById('page1');
const page2 = document.getElementById('page2');
firstPage.addEventListener('click', () => {
    firstPage.classList.add('tab-active');
    secondPage.classList.remove('tab-active');
    page1.classList.remove('hidden');
    page2.classList.add('hidden');
});
secondPage.addEventListener('click', () => {
    firstPage.classList.remove('tab-active');
    secondPage.classList.add('tab-active');
    page1.classList.add('hidden');
    page2.classList.remove('hidden');
});