@extends('dashboard.layout.main')
@section('content')
    <style>
        .video-tag a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar-item {
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
            text-decoration: none;
            color: #333;
        }

        .thumb-wrap {
            position: relative;
            width: 90px;
            height: 60px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .thumb-wrap .thumb {
            width: 80px;
            object-fit: cover;
        }

        .play-icon {
            position: absolute;
            top: 48%;
            left: 47%;
            width: 28px;
            height: 28px;
            transform: translate(-50%, -50%);
            pointer-events: none;
            opacity: 0.9;
        }

        .sidebar-item:hover .play-icon {
            transform: translate(-50%, -50%) scale(1.1);
            opacity: 1;
        }

        .sidebar-item .play-icon {
            width: 28px;
            height: 28px;
            border-radius: 12px;
            object-fit: cover;
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
                            <button class="btn active" data-category="all" type="button">All</button>

                            @foreach ($travelclipcategories as $travelclipcategory)
                                <button class="btn" type="button" data-category="{{ $travelclipcategory->id }}">
                                    {{ $travelclipcategory->name }}
                                </button>
                            @endforeach
                        </div>




                        <div class="row g-4">

                            <!-- VIDEO CARD -->

                            @foreach ($travelclips as $travelclip)
                                <div class="col-lg-4 col-md-6 video-tag"
                                    data-category="{{ $travelclip->travel_clip_id }}">

                                    <div class="video-card" onclick="window.open('{{ $travelclip->video_link }}','_blank')">

                                        <span class="duration">{{ $travelclip->time_duration }}</span>

                                        <img src="{{ asset('uploads/' . $travelclip->thumbnail) }}"
                                            alt="{{ $travelclip->alt }}" class="video-thumb">

                                        <img src="{{ url('assets/images/Frame 85.png') }}" class="play-btn" alt="Play">

                                        <div class="video-info">
                                            <p>{{ $travelclip->short_content }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach







                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="col-lg-3">
                    <div class="sidebar-right">

                        <div class="sidebar-box">
                            <h5>Related Articles</h5>

                            <a href="#!">
                                <div class="sidebar-item">
                                    <img src="assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg">
                                    <div>
                                        <h6>Manali mountain views</h6>
                                        <small>Instagram</small>
                                    </div>
                                </div>
                            </a>

                            <a href="#!">
                                <div class="sidebar-item">
                                    <img src="assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg">
                                    <div>
                                        <h6>Manali mountain views</h6>
                                        <small>Instagram</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#!">
                                <div class="sidebar-item">
                                    <img src="assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg">
                                    <div>
                                        <h6>Manali mountain views</h6>
                                        <small>Instagram</small>
                                    </div>
                                </div>
                            </a>

                            <a href="#!">
                                <div class="sidebar-item">
                                    <img src="assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg">
                                    <div>
                                        <h6>Manali mountain views</h6>
                                        <small>Instagram</small>
                                    </div>
                                </div>
                            </a>

                        </div>



                    </div>
                </div>

            </div>
        </div>
    </section>




<script>
document.addEventListener("DOMContentLoaded", function () {

    console.log('Travel clip filter JS loaded ✅');

    const categoryBtns = document.querySelectorAll('.category-pills .btn');
    const videos = document.querySelectorAll('.video-tag');

    console.log('Buttons:', categoryBtns.length);
    console.log('Videos:', videos.length);

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function () {

            const selectedCategory = this.dataset.category;
            console.log('Clicked category:', selectedCategory);

            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            videos.forEach(video => {
                const videoCategory = video.dataset.category;

                if (selectedCategory === 'all' || videoCategory === selectedCategory) {
                    video.style.display = '';
                } else {
                    video.style.display = 'none';
                }
            });
        });
    });

});
</script>

@endsection
