// scroll nav
const navbar = document.getElementById('navbar');
window.onscroll = function () {
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
        navbar.classList.remove('not-scroll');
    } else {
        navbar.classList.add('not-scroll');
        navbar.classList.remove('scrolled');
    };
}

document.addEventListener("DOMContentLoaded", function () {
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbarCollapse = document.querySelector(".navbar-collapse");
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(link => {
        link.addEventListener("click", () => {
            if (window.innerWidth <= 991) {
                navbarCollapse.classList.remove("show");
                navbarToggler.classList.add("collapsed");
            }
        });
    });

    document.addEventListener("click", (event) => {
        if (!navbarCollapse.contains(event.target) && !navbarToggler.contains(event.target)) {
            navbarCollapse.classList.remove("show");
            navbarToggler.classList.add("collapsed");
        }
    });
});


// swiper
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".swiper", {
        slidesPerView: 3,
        spaceBetween: 2,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 3,
            },
        },
    });

    document.getElementById("prev-slide").addEventListener("click", function () {
        swiper.slidePrev();
    });

    document.getElementById("next-slide").addEventListener("click", function () {
        swiper.slideNext();
    });
});


// prodact
document.addEventListener("DOMContentLoaded", function () {
    let cards = document.querySelectorAll(".card-body");

    cards.forEach(card => {
        let arrow = card.querySelector('img[alt="img"]');
        card.addEventListener("click", function () {
            document.querySelectorAll('.card-body img[alt="img"]').forEach(img => {
                img.style.transform = "rotate(0deg)";

            });

            if (!card.classList.contains("open")) {
                arrow.style.transform = "rotate(180deg)";
                card.classList.add("open");
            } else {
                arrow.style.transform = "rotate(0deg)";
                card.classList.remove("open");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".toggle-card").forEach(card => {
        card.addEventListener("click", function () {
            this.classList.toggle("expanded");
        });
    });
});

// lang
document.querySelectorAll(".lang-option").forEach(item => {
    item.addEventListener("click", function (event) {
        event.preventDefault();
        let selectedLang = this.getAttribute("data-lang");
        let langText = document.getElementById("langText");
        let elements = document.querySelectorAll(".translatable");

        // تحديث النص المتعلق بالـ LangText
        langText.innerText = selectedLang;

        elements.forEach(el => {
            // تغيير النصوص للـ LABELs
            if (el.tagName === 'LABEL') {
                el.innerText = el.getAttribute(`data-${selectedLang.toLowerCase()}`);
            }

            // تغيير النصوص للـ INPUTs و TEXTAREAs
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                let placeholder = el.getAttribute(`data-${selectedLang.toLowerCase()}-placeholder`);
                if (placeholder) {
                    el.placeholder = placeholder;
                }
            }

            // في حالة وجود نصوص مباشرة في العناصر الأخرى (مثل div أو p أو span)
            if (el.tagName !== 'INPUT' && el.tagName !== 'TEXTAREA' && el.getAttribute(`data-${selectedLang.toLowerCase()}`)) {
                el.innerText = el.getAttribute(`data-${selectedLang.toLowerCase()}`);
            }

            // إضافة تأثير الاتجاه بناءً على اللغة
            if (el.classList.contains("reverse-text")) {
                if (selectedLang === "Arabic") {
                    el.style.direction = "rtl"; // اللغة العربية
                    el.style.textAlign = "right"; // محاذاة النص لليمين
                } else {
                    el.style.direction = "ltr"; // اللغة الإنجليزية
                    el.style.textAlign = "left"; // محاذاة النص لليسار
                }
            }
        });

        // تحديث الاتجاه في العناصر التي تحمل كلاس "reverse-text"
        let reverseElements = document.querySelectorAll(".reverse-text");
        reverseElements.forEach(el => {
            if (selectedLang === "Arabic") {
                el.style.direction = "rtl"; // اللغة العربية
                el.style.textAlign = "right"; // محاذاة النص لليمين
            } else {
                el.style.direction = "ltr"; // اللغة الإنجليزية
                el.style.textAlign = "left"; // محاذاة النص لليسار
            }
        });

        // تحديث النص المتعلق بالـ LangText
        langText.innerText = selectedLang;
    });
});



// form
document.querySelectorAll(".lang-option").forEach(item => {
    item.addEventListener("click", function (event) {
        event.preventDefault();
        let selectedLang = this.getAttribute("data-lang");
        let langText = document.getElementById("langText");
        let elements = document.querySelectorAll(".translatable");

        // تحديث النص المتعلق بالـ LangText
        langText.innerText = selectedLang;

        // إزالة تأثير الاتجاه من العناصر التي تحمل كلاس "reverse-text"
        let reverseElements = document.querySelectorAll(".reverse-text");
        reverseElements.forEach(el => {
            // إلغاء تأثير الاتجاه عندما نختار EN
            if (selectedLang === "EN") {
                el.style.direction = 'ltr';
                el.style.textAlign = 'left';
            }
            // إلغاء تأثير الاتجاه عندما نختار AR
            else if (selectedLang === "AR") {
                el.style.direction = 'rtl';
                el.style.textAlign = 'right';
            }
        });

        // تغيير النصوص للـ عناصر الأخرى
        elements.forEach(el => {
            // تغيير النصوص للـ LABELs
            if (el.tagName === 'LABEL') {
                el.innerText = el.getAttribute(`data-${selectedLang.toLowerCase()}`);
            }

            // تغيير النصوص للـ INPUTs و TEXTAREAs
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                let placeholder = el.getAttribute(`data-${selectedLang.toLowerCase()}-placeholder`);
                if (placeholder) {
                    el.placeholder = placeholder;
                }
            }

            // في حالة وجود نصوص مباشرة في العناصر الأخرى (مثل div أو p أو span)
            if (el.tagName !== 'INPUT' && el.tagName !== 'TEXTAREA' && el.getAttribute(`data-${selectedLang.toLowerCase()}`)) {
                el.innerText = el.getAttribute(`data-${selectedLang.toLowerCase()}`);
            }

            // إضافة تأثير الاتجاه بناءً على اللغة
            if (el.classList.contains("reverse-text")) {
                if (selectedLang === "Arabic") {
                    el.style.direction = "rtl"; // اللغة العربية
                    el.style.textAlign = "right"; // محاذاة النص لليمين
                } else {
                    el.style.direction = "ltr"; // اللغة الإنجليزية
                    el.style.textAlign = "left"; // محاذاة النص لليسار
                }
            }
        });

        // تحديث النص المتعلق بالـ LangText
        langText.innerText = selectedLang;
    });
});

