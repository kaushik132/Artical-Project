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
                        <button class="btn active">Destinations</button>
                        <button class="btn">Itineraries</button>
                        <button class="btn">Food & Cafés</button>
                        <button class="btn">Itineraries</button>
                        <button class="btn">Food & Cafés</button>
                    </div>

                    <div class="row g-4">

                        <!-- VIDEO CARD -->
                        <div class="col-lg-4 col-md-6 video-tag">
                            <div class="video-card"
                                onclick="window.open('https://www.youtube.com/shorts/bMyrJ7kZuMs','_blank')">

                                <span class="duration">0:20</span>

                                <!-- THUMBNAIL -->
                                <img src="https://img.youtube.com/vi/bMyrJ7kZuMs/maxresdefault.jpg"
                                    class="video-thumb">

                                <!-- PLAY ICON IMAGE -->
                                <img src="assets/images/Frame 85.png" class="play-btn" alt="Play">

                                <div class="video-info">
                                    <p>Why you must include a whirlwind trip to...</p>
                                    <div class="video-actions">
                                        <a href="#" class="share-btn"><img src="assets/images/Frame 48.png"></a>
                                        <a href="#"><img src="assets/images/Frame 49.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="video-card"
                                onclick="window.open('https://youtube.com/shorts/jBk0gR31Gus?si=Q7OjGJUn3umcWHOb','_blank')">

                                <span class="duration">0:30</span>

                                <!-- THUMBNAIL -->
                                <img src="https://img.youtube.com/vi/jBk0gR31Gus/maxresdefault.jpg" class="video-thumb">


                                <!-- PLAY ICON IMAGE -->
                                <img src="assets/images/Frame 85.png" class="play-btn" alt="Play">

                                <div class="video-info">
                                    <p>Why you must include a whirlwind trip to...</p>
                                    <div class="video-actions">
                                        <a href="#" class="share-btn"><img src="assets/images/Frame 48.png"></a>
                                        <a href="#"><img src="assets/images/Frame 49.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 video-tag">
                            <div class="video-card"
                                onclick="window.open('https://www.youtube.com/shorts/bMyrJ7kZuMs','_blank')">

                                <span class="duration">0:20</span>

                                <!-- THUMBNAIL -->
                                <img src="https://img.youtube.com/vi/bMyrJ7kZuMs/maxresdefault.jpg"
                                    class="video-thumb">

                                <!-- PLAY ICON IMAGE -->
                                <img src="assets/images/Frame 85.png" class="play-btn" alt="Play">

                                <div class="video-info">
                                    <p>Why you must include a whirlwind trip to...</p>
                                    <div class="video-actions">
                                        <a href="#" class="share-btn"><img src="assets/images/Frame 48.png"></a>
                                        <a href="#"><img src="assets/images/Frame 49.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="video-card"
                                onclick="window.open('https://youtube.com/shorts/jBk0gR31Gus?si=Q7OjGJUn3umcWHOb','_blank')">

                                <span class="duration">0:30</span>

                                <!-- THUMBNAIL -->
                                <img src="https://img.youtube.com/vi/jBk0gR31Gus/maxresdefault.jpg" class="video-thumb">


                                <!-- PLAY ICON IMAGE -->
                                <img src="assets/images/Frame 85.png" class="play-btn" alt="Play">

                                <div class="video-info">
                                    <p>Why you must include a whirlwind trip to...</p>
                                    <div class="video-actions">
                                        <a href="#" class="share-btn"><img src="assets/images/Frame 48.png"></a>
                                        <a href="#"><img src="assets/images/Frame 49.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 video-tag">
                            <div class="video-card"
                                onclick="window.open('https://www.youtube.com/shorts/bMyrJ7kZuMs','_blank')">

                                <span class="duration">0:20</span>

                                <!-- THUMBNAIL -->
                                <img src="https://img.youtube.com/vi/bMyrJ7kZuMs/maxresdefault.jpg"
                                    class="video-thumb">

                                <!-- PLAY ICON IMAGE -->
                                <img src="assets/images/Frame 85.png" class="play-btn" alt="Play">

                                <div class="video-info">
                                    <p>Why you must include a whirlwind trip to...</p>
                                    <div class="video-actions">
                                        <a href="#" class="share-btn"><img src="assets/images/Frame 48.png"></a>
                                        <a href="#"><img src="assets/images/Frame 49.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="video-card"
                                onclick="window.open('https://youtube.com/shorts/jBk0gR31Gus?si=Q7OjGJUn3umcWHOb','_blank')">

                                <span class="duration">0:30</span>

                                <!-- THUMBNAIL -->
                                <img src="https://img.youtube.com/vi/jBk0gR31Gus/maxresdefault.jpg" class="video-thumb">


                                <!-- PLAY ICON IMAGE -->
                                <img src="assets/images/Frame 85.png" class="play-btn" alt="Play">

                                <div class="video-info">
                                    <p>Why you must include a whirlwind trip to...</p>
                                    <div class="video-actions">
                                        <a href="#" class="share-btn"><img src="assets/images/Frame 48.png"></a>
                                        <a href="#"><img src="assets/images/Frame 49.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 video-tag">
                            <div class="video-card"
                                onclick="window.open('https://www.youtube.com/shorts/bMyrJ7kZuMs','_blank')">

                                <span class="duration">0:20</span>

                                <!-- THUMBNAIL -->
                                <img src="https://img.youtube.com/vi/bMyrJ7kZuMs/maxresdefault.jpg"
                                    class="video-thumb">

                                <!-- PLAY ICON IMAGE -->
                                <img src="assets/images/Frame 85.png" class="play-btn" alt="Play">

                                <div class="video-info">
                                    <p>Why you must include a whirlwind trip to...</p>
                                    <div class="video-actions">
                                        <a href="#" class="share-btn"><img src="assets/images/Frame 48.png"></a>
                                        <a href="#"><img src="assets/images/Frame 49.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="video-card"
                                onclick="window.open('https://youtube.com/shorts/jBk0gR31Gus?si=Q7OjGJUn3umcWHOb','_blank')">

                                <span class="duration">0:30</span>

                                <!-- THUMBNAIL -->
                                <img src="https://img.youtube.com/vi/jBk0gR31Gus/maxresdefault.jpg" class="video-thumb">


                                <!-- PLAY ICON IMAGE -->
                                <img src="assets/images/Frame 85.png" class="play-btn" alt="Play">

                                <div class="video-info">
                                    <p>Why you must include a whirlwind trip to...</p>
                                    <div class="video-actions">
                                        <a href="#" class="share-btn"><img src="assets/images/Frame 48.png"></a>
                                        <a href="#"><img src="assets/images/Frame 49.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>




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

@endsection
