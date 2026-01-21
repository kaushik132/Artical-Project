window.onscroll = function () {
    myFunction();
};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
    if (window.pageYOffset >= 120) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

document.getElementById("langToggle").addEventListener("click", function () {
    this.parentElement.classList.toggle("active");
});

document.addEventListener("click", function (e) {
    if (!e.target.closest(".lang-dropdown")) {
        document.querySelector(".lang-dropdown").classList.remove("active");
    }
});

$(document).ready(function () {
    $(".article-slider").owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: { items: 1.3 },
            768: { items: 3.2 },
            1200: { items: 3.2 },
        },
    });
});

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".read-more-text").forEach((p) => {
        const limit = parseInt(p.dataset.limit) || 80;
        const fullText = p.innerText.trim();

        if (fullText.length <= limit) return;

        const shortText = fullText.substring(0, limit) + "...";

        p.innerHTML = `
            ${shortText}
            <span class="read-more-btn">Read more</span>
        `;

        let expanded = false;

        p.querySelector(".read-more-btn").addEventListener(
            "click",
            function () {
                expanded = !expanded;

                p.innerHTML = expanded
                    ? `${fullText} <span class="read-more-btn">Read less</span>`
                    : `${shortText} <span class="read-more-btn">Read more</span>`;

                p.querySelector(".read-more-btn").addEventListener(
                    "click",
                    arguments.callee,
                );
            },
        );
    });
});
// serch bar autocomplete

const searchInput = document.getElementById("searchInput");
const suggestionBox = document.getElementById("suggestionBox");

/* Demo data (replace with API / backend) */
const suggestions = [
    "Travel Backpack",
    "Mountain Shoes",
    "Camping Tent",
    "Waterproof Jacket",
    "Travel Camera",
    "Hiking Bag",
    "Trekking Shoes",
];

searchInput.addEventListener("input", function () {
    const value = this.value.toLowerCase();
    suggestionBox.innerHTML = "";

    if (value.length === 0) {
        suggestionBox.classList.remove("active");
        return;
    }

    const filtered = suggestions.filter((item) =>
        item.toLowerCase().includes(value),
    );

    if (filtered.length === 0) {
        suggestionBox.classList.remove("active");
        return;
    }

    filtered.forEach((item) => {
        const div = document.createElement("div");
        div.classList.add("search-item");
        div.textContent = item;

        div.addEventListener("click", () => {
            searchInput.value = item;
            suggestionBox.classList.remove("active");
        });

        suggestionBox.appendChild(div);
    });

    suggestionBox.classList.add("active");
});

/* Close on outside click */
document.addEventListener("click", (e) => {
    if (!e.target.closest(".search-bar")) {
        suggestionBox.classList.remove("active");
    }
});

//end serch bar autocomplete

const shareOverlay = document.getElementById("shareOverlay");
const closeShare = document.querySelector(".close-share");

document.querySelectorAll(".share-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
        shareOverlay.style.display = "flex";
    });
});

closeShare.onclick = () => {
    shareOverlay.style.display = "none";
};

shareOverlay.onclick = (e) => {
    if (e.target === shareOverlay) {
        shareOverlay.style.display = "none";
    }
};

document.querySelectorAll(".like-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
        let liked = this.dataset.liked === "true";
        let count = parseInt(this.dataset.count);
        const icon = this.querySelector("i");
        const countSpan = this.querySelector(".like-count");

        if (!liked) {
            // LIKE
            this.classList.add("liked");
            icon.classList.remove("fa-regular");
            icon.classList.add("fa-solid");
            count++;
            this.dataset.liked = "true";
        } else {
            // UNLIKE
            this.classList.remove("liked");
            icon.classList.remove("fa-solid");
            icon.classList.add("fa-regular");
            count--;
            this.dataset.liked = "false";
        }

        this.dataset.count = count;
        countSpan.innerText = count;
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".category-pills");
    let isDown = false;
    let startX;
    let scrollLeft;
    slider.addEventListener("mousedown", (e) => {
        isDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener("mouseleave", () => {
        isDown = false;
    });
    slider.addEventListener("mouseup", () => {
        isDown = false;
    });
    slider.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = x - startX;
        slider.scrollLeft = scrollLeft - walk;
    });
    slider.addEventListener("touchstart", (e) => {
        startX = e.touches[0].pageX;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener("touchmove", (e) => {
        const x = e.touches[0].pageX;
        const walk = x - startX;
        slider.scrollLeft = scrollLeft - walk;
    });
    document.querySelectorAll(".category-pills .btn").forEach((btn) => {
        btn.addEventListener("click", function () {
            document
                .querySelectorAll(".category-pills .btn")
                .forEach((b) => b.classList.remove("active"));
            this.classList.add("active");
        });
    });
});
