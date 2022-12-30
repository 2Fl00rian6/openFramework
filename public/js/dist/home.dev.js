"use strict";

var loader = document.getElementById('loader');
setTimeout(function () {
  loader.classList.add('none');
}, 2000);
var redirectionDoc = document.getElementById('redirection-doc');
redirectionDoc.addEventListener('click', function () {
  window.location.href = "/documentation";
});