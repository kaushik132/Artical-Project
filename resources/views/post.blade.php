@extends('dashboard.layout.main')
@section('content')
    <style>
        .article-card img {
            border-radius: 0;

        }

        .article-card {
            padding: 0;
        }

        .article-content {
            padding: 15px 15px;
        }

        .action-btn {

            display: block;
        }

        .action-btn {
            color: #000;
        }

        .action-btn small {
            font-size: 14px;
            font-weight: 500;
            color: #000;
        }

        .action-buttons {
            margin-top: 0px;
        }

        .read-more-btn {
            color: #deba70;
            cursor: pointer;
            font-weight: 500;
            margin-left: 5px;
        }

        .artical-contenet-post .save-icon img {
            width: 20px;
            height: auto;
            object-fit: none;
        }

        .artical-contenet-post {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hashtags h6 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag-list a {
            color: #000;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tag-list a:hover {
            color: #deba70;
        }

        .article-slider a {
            text-decoration: none;
        }

        .like-count {
            transition: opacity 0.15s ease;
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
                            <button class="btn active" data-category="all">All</button>

                            @foreach ($postcategories as $postcategory)
                                <button class="btn" data-category="{{ $postcategory->id }}">
                                    {{ $postcategory->name }}
                                </button>
                            @endforeach
                        </div>

                        <!-- post SLIDER -->
                        <div class="owl-carousel article-slider mb-4">


                            @foreach ($articals as $item)
                                <a href="{{ route('artical-detail', $item->slug) }}">
                                    <div class="article-card-2">
                                        <img src="{{ url('uploads/' . $item->image) }}" alt="{{ $item->alt }}">
                                        <p>{{ $item->title }}</p>
                                    </div>
                                </a>
                            @endforeach




                        </div>


                        @foreach ($post as $posts)
                            <div class="article-card" id="target-post" data-category="{{ $posts->post_category_id }}"
                                data-hashtags="{{ is_array($posts->hashtags_id) ? implode(',', $posts->hashtags_id) : '' }}">
                                <div class="post-rofile">
                                    <div class="post-p">
                                        <ul>
                                            <li><img src="{{ url('uploads/' . $posts->image) }}" alt="{{ $posts->name }}">
                                            </li>
                                            <li>
                                                <h6>{{ $posts->name }}</h6> <span>
                                                    {{ $posts->created_at->format('M d, Y') }}</span>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-social">
                                        <ul>
                                            <li><a href="{{ $posts->instagram_link }}" target="_blank"><img
                                                        src="{{ url('assets/images/social-2.png') }}"
                                                        alt="Instgram logo"></a></li>
                                            <li><a href="{{ $posts->facebook_link }}" target="_blank"><img
                                                        src="{{ url('assets/images/social-3.png') }}"
                                                        alt="Facebook logo"></a></li>
                                            <li><a href="{{ $posts->youtube_link }}" target="_blank"><img
                                                        src="{{ url('assets/images/social-4.png') }}"
                                                        alt="Youtube logo"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <img src="{{ url('uploads/' . $posts->post_image) }}" alt="{{ $posts->alt }}">
                                <div class="article-content">

                                    <div class="artical-contenet-post">
                                        <div class="action-buttons">
                                            @php $ip = request()->ip(); @endphp

                                            <a href="javascript:void(0)"
                                                class="action-btn like-btn {{ $posts->isLikedByIp($ip) ? 'liked' : '' }}"
                                                data-id="{{ $posts->id }}">

                                                <i
                                                    class="{{ $posts->isLikedByIp($ip) ? 'fa-solid' : 'fa-regular' }} fa-heart"></i>
                                                Like <br>
                                                <small>
                                                    <span class="like-count"
                                                        data-count="{{ $posts->postLikes->count() ?? 0 }}">
                                                        {{ $posts->postLikes->count() ?? 0 }}
                                                    </span>


                                                    Likes
                                                </small>
                                            </a>



                                            <a href="#!" class="action-btn share-btn">
                                                <i class="fa fa-share-alt"></i> Share<br><small>{{ $posts->reviews }}
                                                    Reviews</small>
                                            </a>
                                        </div>

                                    </div>
                                    <p class="mt-2 read-more-text" data-limit="200">
                                        Jacksonville offers accessibility, beaches, and scenic beauty for road trips across
                                        Florida. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nam
                                        deserunt, vero et facere adipisci doloribus sint, facilis at sunt ea nisi doloremque
                                        numquam. Itaque vero aliquid inventore laudantium quisquam. Lorem ipsum dolor, sit
                                        amet consectetur adipisicing elit. Repudiandae quidem, consequuntur sequi voluptas
                                        eum molestias excepturi ab quos dignissimos dolorum ipsam error aliquid impedit
                                        mollitia corporis quod? Aperiam, neque fuga.
                                    </p>

                                    <div class="tag-list mt-2">
                                        @if (is_array($posts->hashtags_id))
                                            @foreach ($posthashtags->whereIn('id', $posts->hashtags_id) as $hashtag)
                                                {{ $hashtag->name }}
                                            @endforeach
                                        @endif
                                    </div>



                                </div>
                            </div>
                        @endforeach





                    </div>
                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="col-lg-3">
                    <div class="sidebar-right">
                        <div class="hashtags">
                            <h6>Travel Hashtags</h6>

                            <div class="tag-list mb-2 hashtag-filter">
                                <a href="#" class="active" data-hashtag="all">All</a>

                                @foreach ($posthashtags as $posthashtag)
                                    <a href="#" data-hashtag="{{ $posthashtag->id }}">
                                        {{ $posthashtag->name }}
                                    </a>
                                @endforeach
                            </div>

                        </div>


                        <div class="sidebar-box">
                            <h5>Related Articles</h5>


                            @foreach ($articals as $articalss)
                                <a href="{{ route('artical-detail', $articalss->slug) }}">
                                    <div class="sidebar-item">
                                        <img src="{{ url('uploads/' . $articalss->image) }}" alt="{{ $articalss->alt }}">
                                        <div>
                                            <h6>{{ $articalss->title }}</h6>
                                            <small>{{ $articalss->created_at->format('M d, Y') }}</small>
                                        </div>
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
        document.addEventListener("DOMContentLoaded", function() {

            const categoryBtns = document.querySelectorAll('.category-pills .btn');
            const hashtagBtns = document.querySelectorAll('.hashtag-filter a');
            const posts = document.querySelectorAll('.article-card');

            let activeCategory = 'all';
            let activeHashtag = 'all';

            function filterPosts() {

                posts.forEach(post => {

                    const postCategory = post.dataset.category;
                    const postHashtags = post.dataset.hashtags ?
                        post.dataset.hashtags.split(',') // ✅ FIX HERE
                        :
                        [];

                    const categoryMatch =
                        activeCategory === 'all' || postCategory == activeCategory;

                    const hashtagMatch =
                        activeHashtag === 'all' ||
                        postHashtags.includes(activeHashtag);

                    post.style.display =
                        (categoryMatch && hashtagMatch) ? 'block' : 'none';
                });
            }

            /* CATEGORY FILTER */
            categoryBtns.forEach(btn => {
                btn.addEventListener('click', function() {

                    categoryBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    activeCategory = this.dataset.category || 'all';
                    filterPosts();
                });
            });

            /* HASHTAG FILTER */
            hashtagBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();

                    hashtagBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    activeHashtag = this.dataset.hashtag || 'all';
                    filterPosts();
                });
            });

        });
    </script>

    <script>
        document.querySelectorAll('.like-btn').forEach(btn => {
            btn.addEventListener('click', function() {

                if (this.classList.contains('loading')) return;
                this.classList.add('loading');

                const postId = this.dataset.id;
                const likeBtn = this;
                const countSpan = likeBtn.querySelector('.like-count');

                // cache last valid count
                const lastCount = parseInt(countSpan.dataset.count) || 0;

                // 🔹 Temporary hide count while request in progress
                countSpan.style.visibility = 'hidden';

                fetch("{{ route('post.like') }}", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            post_id: postId
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        // server count safe
                        const finalCount = Number.isInteger(data.count) ? data.count : lastCount;

                        // 🔹 Update DOM and show count
                        countSpan.innerText = finalCount;
                        countSpan.dataset.count = finalCount;
                        countSpan.style.visibility = 'visible';

                        const icon = likeBtn.querySelector('i');
                        if (data.liked) {
                            icon.classList.remove('fa-regular');
                            icon.classList.add('fa-solid');
                            likeBtn.classList.add('liked');
                        } else {
                            icon.classList.remove('fa-solid');
                            icon.classList.add('fa-regular');
                            likeBtn.classList.remove('liked');
                        }
                    })
                    .catch(() => {
                        countSpan.innerText = lastCount;
                        countSpan.style.visibility = 'visible';
                    })
                    .finally(() => {
                        likeBtn.classList.remove('loading');
                    });
            });
        });
    </script>
@endsection
