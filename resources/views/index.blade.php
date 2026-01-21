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
                            <button class="btn active">Destinations</button>
                            <button class="btn">Itineraries</button>
                            <button class="btn">Food & Cafés</button>
                            <button class="btn">Itineraries</button>
                            <button class="btn">Food & Cafés</button>

                            @foreach ( $articalcategories as $ac)
                                <button class="btn">{{ $ac->name }}</button>
                            @endforeach
                        </div>
                        <!-- ARTICLE SLIDER -->
                        <div class="owl-carousel article-slider mb-4">
                            <a href="artical-detail">
                                <div class="article-card-2">
                                    <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}">
                                    <p>Discover breathtaking ski destinations and winter adventures.</p>
                                </div>
                            </a>
                            <a href="artical-detail">
                                <div class="article-card-2">
                                    <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}">
                                    <p>Discover breathtaking ski destinations and winter adventures.</p>
                                </div>
                            </a>
                            <a href="artical-detail">
                                <div class="article-card-2">
                                    <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}">
                                    <p>Discover breathtaking ski destinations and winter adventures.</p>
                                </div>
                            </a>
                            <a href="artical-detail">
                                <div class="article-card-2">
                                    <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}">
                                    <p>Discover breathtaking ski destinations and winter adventures.</p>
                                </div>
                            </a>
                        </div>
                        <!-- ARTICLE -->
                        <a href="artical-detail" class="art-link">
                            <div class="article-card">
                                <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}" alt="">
                                <div class="article-content">
                                    <h4>Why you must include a whirlwind trip to Jacksonville while in Florida</h4>
                                    <div class="article-meta mb-2">
                                        By Riya Sharma • Jan 8, 2026
                                    </div>
                                    <p>
                                        Jacksonville offers accessibility, beaches, and scenic beauty for road trips across
                                        Florida.
                                    </p>
                                    <a href="artical-detail" class="text-decoration-none text-dark fw-semibold">Read
                                        More →</a>
                                    <div class="action-buttons">
                                        <a href="#!" class="action-btn share-btn">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                        <a href="#" class="action-btn">
                                            <i class="fa fa-bookmark"></i> Save to List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="artical-detail" class="art-link">
                            <div class="article-card">
                                <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}" alt="">
                                <div class="article-content">
                                    <h4>Why you must include a whirlwind trip to Jacksonville while in Florida</h4>
                                    <div class="article-meta mb-2">
                                        By Riya Sharma • Jan 8, 2026
                                    </div>
                                    <p>
                                        Jacksonville offers accessibility, beaches, and scenic beauty for road trips across
                                        Florida.
                                    </p>
                                    <a href="artical-detail" class="text-decoration-none text-dark fw-semibold">Read
                                        More →</a>
                                    <div class="action-buttons">
                                        <a href="#!" class="action-btn share-btn">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                        <a href="#" class="action-btn">
                                            <i class="fa fa-bookmark"></i> Save to List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="artical-detail" class="art-link">
                            <div class="article-card">
                                <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}" alt="">
                                <div class="article-content">
                                    <h4>Why you must include a whirlwind trip to Jacksonville while in Florida</h4>
                                    <div class="article-meta mb-2">
                                        By Riya Sharma • Jan 8, 2026
                                    </div>
                                    <p>
                                        Jacksonville offers accessibility, beaches, and scenic beauty for road trips across
                                        Florida.
                                    </p>
                                    <a href="artical-detail" class="text-decoration-none text-dark fw-semibold">Read
                                        More →</a>
                                    <div class="action-buttons">
                                        <a href="#!" class="action-btn share-btn">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                        <a href="#" class="action-btn">
                                            <i class="fa fa-bookmark"></i> Save to List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="artical-detail" class="art-link">
                            <div class="article-card">
                                <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}" alt="">
                                <div class="article-content">
                                    <h4>Why you must include a whirlwind trip to Jacksonville while in Florida</h4>
                                    <div class="article-meta mb-2">
                                        By Riya Sharma • Jan 8, 2026
                                    </div>
                                    <p>
                                        Jacksonville offers accessibility, beaches, and scenic beauty for road trips across
                                        Florida.
                                    </p>
                                    <a href="artical-detail" class="text-decoration-none text-dark fw-semibold">Read
                                        More →</a>
                                    <div class="action-buttons">
                                        <a href="#!" class="action-btn share-btn">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                        <a href="#" class="action-btn">
                                            <i class="fa fa-bookmark"></i> Save to List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="artical-detail" class="art-link">
                            <div class="article-card">
                                <img src="{{url('assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg')}}" alt="">
                                <div class="article-content">
                                    <h4>Why you must include a whirlwind trip to Jacksonville while in Florida</h4>
                                    <div class="article-meta mb-2">
                                        By Riya Sharma • Jan 8, 2026
                                    </div>
                                    <p>
                                        Jacksonville offers accessibility, beaches, and scenic beauty for road trips across
                                        Florida.
                                    </p>
                                    <a href="artical-detail" class="text-decoration-none text-dark fw-semibold">Read
                                        More →</a>
                                    <div class="action-buttons">
                                        <a href="#!" class="action-btn share-btn">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                        <a href="#" class="action-btn">
                                            <i class="fa fa-bookmark"></i> Save to List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- RIGHT SIDEBAR -->
                <div class="col-lg-3">
                    <div class="sidebar-right">
                        <div class="sidebar-box">
                            <h5>Related Articles</h5>
                            <a href="#!">
                                <div class="sidebar-item">
                                    <img src="{{url('assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg')}}">
                                    <div>
                                        <h6>Manali mountain views</h6>
                                        <small>Instagram</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#!">
                                <div class="sidebar-item">
                                    <img src="{{url('assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg')}}">
                                    <div>
                                        <h6>Manali mountain views</h6>
                                        <small>Instagram</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#!">
                                <div class="sidebar-item">
                                    <img src="{{url('assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg')}}">
                                    <div>
                                        <h6>Manali mountain views</h6>
                                        <small>Instagram</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#!">
                                <div class="sidebar-item">
                                    <img src="{{url('assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg')}}">
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
