// Smooth scroll
document.querySelectorAll('.js-scroll-trigger a[href^="#"]').forEach(trigger => {
    trigger.onclick = function (e) {
        e.preventDefault();
        let hash = this.getAttribute('href');
        let target = document.querySelector(hash);
        let headerOffset = 100;
        let elementPosition = target.offsetTop;
        let offsetPosition = elementPosition - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    };
});

//use window.scrollY
let scrollpos = window.scrollY;
let header = document.getElementById("navbar");

function add_class_on_scroll() {
    header.classList.add("bg-white", "shadow-lg");
}

function remove_class_on_scroll() {
    header.classList.remove("bg-white", "shadow-lg");
}

window.addEventListener('scroll', function(){
    scrollpos = window.scrollY;

    if(scrollpos > 100){
        add_class_on_scroll();
    }
    else {
        remove_class_on_scroll();
    }
});
