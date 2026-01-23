<!-- footer -->

<div class="bottom-nav">
    <a href="{{url('/')}}" class="nav-item active">
        <img src="{{asset('assets/images/copywriting_1.png')}}" alt="Article">
        <span>Article</span>
    </a>

    <a href="post.php" class="nav-item">
        <img src="{{asset('assets/images/copywriting_2.png')}}" alt="Post">
        <span>Post</span>
    </a>

    <a href="video.php" class="nav-item">
        <img src="{{asset('assets/images/copywriting_3.png')}}" alt="Travel Clips">
        <span>Clips</span>
    </a>
</div>

<!-- SHARE POPUP -->
{{-- <div class="share-overlay" id="shareOverlay">
    <div class="share-popup">
        <div class="share-header">
            <h6>Share this</h6>
            <span class="close-share">&times;</span>
        </div>

        <div class="share-icons">
            <a href="#" class="share facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="share whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="share linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="share telegram"><i class="fab fa-telegram-plane"></i></a>
            <a href="#" class="share copy"><i class="fa fa-link"></i></a>
        </div>
    </div>
</div> --}}








<footer class="main-footer">
</footer>

<script>
function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        {
            pageLanguage: 'en',
            includedLanguages: 'en,hi,fr',
            autoDisplay: false
        },
        'google_translate_element'
    );
}
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
// dropdown toggle
document.getElementById('langToggle').addEventListener('click', function () {
    document.querySelector('.lang-menu').classList.toggle('show');
});

// language change
document.querySelectorAll('.lang-menu a').forEach(item => {
    item.addEventListener('click', function (e) {
        e.preventDefault();

        let lang = this.getAttribute('data-lang');
        let select = document.querySelector('.goog-te-combo');

        if (select) {
            select.value = lang;
            select.dispatchEvent(new Event('change'));
        }

        document.querySelector('.lang-text').innerText = this.innerText;
        document.querySelector('.lang-menu').classList.remove('show');
    });
});
</script>


<!-- Bootstrap JS Bundle -->
<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<!-- <script src="{{asset('assets/js/isotope-pkd-min.js')}}"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script> -->
<!-- <script src="{{asset('assets/js/aos.js')}}" type="text/javascript"></script> -->
<script src="{{asset('assets/js/custom.js')}}" type="text/javascript" defer></script>

<script>
    // PHP → JS data (Blade is allowed here)
    window.searchData = {!! json_encode([
        'articles' => $fillterArtical ?? [],
        'posts' => $fillterPost ?? [],
        'travelClips' => $fillterTravelClip ?? []
    ]) !!};
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById("searchInput");
    const suggestionBox = document.getElementById("suggestionBox");

    if (!searchInput || !suggestionBox) return;

    const data = window.searchData || {
        articles: [],
        posts: [],
        travelClips: []
    };

 const suggestions = [
    ...data.articles.map(i => ({
        text: i.name,
        type: "Article",
        url: "/?article_category=" + encodeURIComponent(i.slug)
    })),
    ...data.posts.map(i => ({
        text: i.name,
        type: "Post",
        url: "/post?category=" + encodeURIComponent(i.slug)
    })),
    ...data.travelClips.map(i => ({
        text: i.name,
        type: "Travel Clip",
        url: "/travel-clips?category=" + encodeURIComponent(i.slug)
    })),
];


    searchInput.addEventListener("input", function () {
        const value = this.value.toLowerCase();
        suggestionBox.innerHTML = "";

        if (!value) {
            suggestionBox.classList.remove("active");
            return;
        }

        const filtered = suggestions.filter(item =>
            item.text.toLowerCase().includes(value)
        );

        if (!filtered.length) {
            suggestionBox.classList.remove("active");
            return;
        }

        filtered.forEach(item => {
            const div = document.createElement("div");
            div.classList.add("search-item");

            div.innerHTML = `
                <strong>${item.text}</strong>
                <small style="margin-left:6px;opacity:.6">(${item.type})</small>
            `;

        div.addEventListener("click", () => {
    window.location.href = item.url;
});


            suggestionBox.appendChild(div);
        });

        suggestionBox.classList.add("active");
    });

    document.addEventListener("click", (e) => {
        if (!e.target.closest(".search-bar")) {
            suggestionBox.classList.remove("active");
        }
    });

});
</script>



</body>

</html>
