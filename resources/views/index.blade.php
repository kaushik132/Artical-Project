@extends('dashboard.layout.main')
@section('content')
    <!-- header  -->

    <style>
        .article-slider a {
            text-decoration: none;
        }

        .art-link {
            text-decoration: none;
            color: #000;
        }

        .article-content a:hover {
            color: #000 !important;
        }
    </style>
    <section class="artical-sec">
        <div class="container-fluid">
            <div class="row g-4">
                <!-- LEFT SIDEBAR -->
                @include('dashboard.layout.sidebar')
                <!-- CENTER CONTENT -->
                <div class="col-lg-6 mt-0 mt-md-2">
                    <div class="main-content">
                        <!-- CATEGORY -->
                        <div class="category-pills mb-3">
                            <button class="btn active" data-category="All">All</button>

                            @foreach ($articalcategories as $ac)
                                <button class="btn" data-category="{{ $ac->name }}">
                                    {{ $ac->name }}
                                </button>
                            @endforeach
                        </div>

                        <!-- ARTICLE SLIDER -->
                        <div class="owl-carousel article-slider mb-4">
                            @foreach ($randomArtical as $randomArticals)
                                <a href="{{url('artical-detail/'.$randomArticals->slug)}}">
                                    <div class="article-card-2">
                                        <img src="{{ url('uploads/' . $randomArticals->image) }}" alt="{{$randomArticals->alt}}">
                                        <p>{{ $randomArticals->title}}</p>
                                    </div>
                                </a>

                            @endforeach

                        </div>
                        <!-- ARTICLE -->
                        @foreach ($artical as $articals)
                            <a href="{{url('artical-detail/'.$articals->slug)}}" class="art-link" style="text-decoration: none; color: #000;"
                                data-category="{{ $articals->articalcategory->name }}">

                                <div class="article-card">
                                    <img src="{{ url('uploads/' . $articals->image)}}"
                                        alt="{{$articals->alt}}">

                                    <div class="article-content">
                                        <h4>{{ $articals->title ?? 'Article Title' }}</h4>

                                        <div class="article-meta mb-2">
                                            By {{ $articals->writer_name ?? 'Admin' }} •
                                            {{ $articals->created_at->format('M d, Y') }}
                                        </div>

                                        <p>{{ Str::limit($articals->content , 200)}}</p>

                                        <span class="text-decoration-none text-dark fw-semibold">
                                            Read More →
                                        </span>
                                    </div>
                                </div>
                            </a>
                        @endforeach



                    </div>
                </div>
                <!-- RIGHT SIDEBAR -->
                <div class="col-lg-3">
                    <div class="sidebar-right">
                        <div class="sidebar-box">
                            <h5>Related Articles</h5>
                            @foreach ($resentArtical as $resentArticals)
                                <a href="{{ url('artical-detail', $resentArticals->slug) }}" class="sidebar-item">
                                    <img src="{{ url('uploads/' . $resentArticals->image) }}"
                                        alt="{{$resentArticals->alt}}">
                                    <div>
                                        <h6>{{ $resentArticals->title}}</h6>
                                        <small>{{ $resentArticals->created_at->format('M d, Y') }}</small>
                                    </div>
                                </a>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="share-overlay" id="shareOverlay">
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
</div>

    <script>
document.addEventListener("DOMContentLoaded", function () {

    const categoryButtons = document.querySelectorAll(".category-pills .btn");
    const articles = document.querySelectorAll(".art-link");

    categoryButtons.forEach(btn => {
        btn.addEventListener("click", function () {

            // Active class handle
            categoryButtons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            const selectedCategory = this.getAttribute("data-category");

            articles.forEach(article => {
                const articleCategory = article.getAttribute("data-category");

                if (selectedCategory === "All" || articleCategory === selectedCategory) {
                    article.style.display = "block";
                } else {
                    article.style.display = "none";
                }
            });
        });
    });

});
</script>

@endsection
