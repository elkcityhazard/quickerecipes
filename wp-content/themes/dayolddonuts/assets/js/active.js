let pageAddress = window.location.href;
let link = document.querySelectorAll('a');

for (i = 0; i < link.length; i++) {
    if (link[i].href === pageAddress) {
      link[i].setAttribute('class', 'current');
    }
  }
