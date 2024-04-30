// scroll up 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp);


let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navlist.classList.toggle('open');
}

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navlist.classList.remove('open');
}


const header = document.getElementById('header');

// Function to add or remove the 'sticky' class based on scroll position
function toggleStickyHeader() {
    if (window.scrollY > 0) {
        header.classList.add('sticky'); // Add the 'sticky' class when scrolled
    } else {
        header.classList.remove('sticky'); // Remove the 'sticky' class when not scrolled
    }
}

// Add scroll event listener to window
window.addEventListener('scroll', toggleStickyHeader);


 // Testimonial Section


const swiper = new Swiper('.test__body', {
    autoHeight: true,
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

});

// scroll reveal section........

ScrollReveal({
    distance: '80px',
    duration: 2000,
    delay: 200,
});

ScrollReveal().reveal('.homed-content', { origin: 'top' });

// typed js section........

const typed = new Typed('.multiple-text', {
    strings: ['Frontend Developer', 'Graphic Designer', 'Media Agency'],
    typeSpeed: 70,
    backSpeed: 70,
    backDelay: 1000,
    loop: true,
});
