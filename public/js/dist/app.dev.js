"use strict";

var navMenu = document.getElementById('nav-menu');
var mobileMenu = document.getElementById('mobile-menu');
navMenu.addEventListener('click', function () {
  mobileMenu.classList.toggle('hidden');
});
var firstPage = document.getElementById('first-page');
var secondPage = document.getElementById('second-page');
var page1 = document.getElementById('page1');
var page2 = document.getElementById('page2');
firstPage.addEventListener('click', function () {
  firstPage.classList.add('tab-active');
  secondPage.classList.remove('tab-active');
  page1.classList.remove('hidden');
  page2.classList.add('hidden');
});
secondPage.addEventListener('click', function () {
  firstPage.classList.remove('tab-active');
  secondPage.classList.add('tab-active');
  page1.classList.add('hidden');
  page2.classList.remove('hidden');
});