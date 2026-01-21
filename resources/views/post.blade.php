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

                    <!-- post SLIDER -->
                    <div class="owl-carousel article-slider mb-4">

                        <a href="#target-post">
                            <div class="article-card-2">
                                <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg">
                                <p>Discover breathtaking ski destinations and winter adventures.</p>
                            </div>
                        </a>
                        <a href="#target-post">
                            <div class="article-card-2">
                                <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg">
                                <p>Discover breathtaking ski destinations and winter adventures.</p>
                            </div>
                        </a>
                        <a href="#target-post">
                            <div class="article-card-2">
                                <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg">
                                <p>Discover breathtaking ski destinations and winter adventures.</p>
                            </div>
                        </a>
                        <a href="#target-post">
                            <div class="article-card-2">
                                <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg">
                                <p>Discover breathtaking ski destinations and winter adventures.</p>
                            </div>
                        </a>


                    </div>

                    <div class="article-card" id="target-post">
                        <div class="post-rofile">
                            <div class="post-p">
                                <ul>
                                    <li><img src="assets/images/profile.jpg" alt=""></li>
                                    <li>
                                        <h6>Riya Sharma</h6> <span>12 Jan 2026</span>

                                    </li>
                                </ul>
                            </div>
                            <div class="post-social">
                                <ul>
                                    <li><a href="#!"><img src="assets/images/linkedin.png" alt=""></a></li>
                                    <li><a href="#!"><img src="assets/images/social-2.png" alt=""></a></li>
                                    <li><a href="#!"><img src="assets/images/social-3.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg" alt="">
                        <div class="article-content">

                            <div class="artical-contenet-post">
                                <div class="action-buttons">
                                    <a href="#!"
                                        class="action-btn like-btn"
                                        data-liked="false"
                                        data-count="23">

                                        <i class="fa-regular fa-heart"></i>
                                        Like <br>
                                        <small><span class="like-count">23</span> Likes</small>
                                    </a>


                                    <a href="#!" class="action-btn share-btn">
                                        <i class="fa fa-share-alt"></i> Share<br><small>234 Reviews</small>
                                    </a>
                                </div>
                                <a href="#!" class="save-icon">
                                    <img src="assets/images/save.png" alt="">
                                </a>
                            </div>
                            <p class="mt-2 read-more-text" data-limit="200">
                                Jacksonville offers accessibility, beaches, and scenic beauty for road trips across Florida. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nam deserunt, vero et facere adipisci doloribus sint, facilis at sunt ea nisi doloremque numquam. Itaque vero aliquid inventore laudantium quisquam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae quidem, consequuntur sequi voluptas eum molestias excepturi ab quos dignissimos dolorum ipsam error aliquid impedit mollitia corporis quod? Aperiam, neque fuga.
                            </p>

                            <div class="tag-list mt-2">
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                                                    </div>

                        </div>
                    </div>
                    <div class="article-card" id="target-post">
                        <div class="post-rofile">
                            <div class="post-p">
                                <ul>
                                    <li><img src="assets/images/profile.jpg" alt=""></li>
                                    <li>
                                        <h6>Riya Sharma</h6> <span>12 Jan 2026</span>

                                    </li>
                                </ul>
                            </div>
                            <div class="post-social">
                                <ul>
                                    <li><a href="#!"><img src="assets/images/linkedin.png" alt=""></a></li>
                                    <li><a href="#!"><img src="assets/images/social-2.png" alt=""></a></li>
                                    <li><a href="#!"><img src="assets/images/social-3.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg" alt="">
                        <div class="article-content">

                            <div class="artical-contenet-post">
                                <div class="action-buttons">
                                    <a href="#!"
                                        class="action-btn like-btn"
                                        data-liked="false"
                                        data-count="23">

                                        <i class="fa-regular fa-heart"></i>
                                        Like <br>
                                        <small><span class="like-count">23</span> Likes</small>
                                    </a>


                                    <a href="#!" class="action-btn share-btn">
                                        <i class="fa fa-share-alt"></i> Share<br><small>234 Reviews</small>
                                    </a>
                                </div>
                                <a href="#!" class="save-icon">
                                    <img src="assets/images/save.png" alt="">
                                </a>
                            </div>
                            <p class="mt-2 read-more-text" data-limit="200">
                                Jacksonville offers accessibility, beaches, and scenic beauty for road trips across Florida. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nam deserunt, vero et facere adipisci doloribus sint, facilis at sunt ea nisi doloremque numquam. Itaque vero aliquid inventore laudantium quisquam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae quidem, consequuntur sequi voluptas eum molestias excepturi ab quos dignissimos dolorum ipsam error aliquid impedit mollitia corporis quod? Aperiam, neque fuga.
                            </p>

                            <div class="tag-list mt-2">
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                                                    </div>

                        </div>
                    </div>
                    <div class="article-card" id="target-post">
                        <div class="post-rofile">
                            <div class="post-p">
                                <ul>
                                    <li><img src="assets/images/profile.jpg" alt=""></li>
                                    <li>
                                        <h6>Riya Sharma</h6> <span>12 Jan 2026</span>

                                    </li>
                                </ul>
                            </div>
                            <div class="post-social">
                                <ul>
                                    <li><a href="#!"><img src="assets/images/linkedin.png" alt=""></a></li>
                                    <li><a href="#!"><img src="assets/images/social-2.png" alt=""></a></li>
                                    <li><a href="#!"><img src="assets/images/social-3.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg" alt="">
                        <div class="article-content">

                            <div class="artical-contenet-post">
                                <div class="action-buttons">
                                    <a href="#!"
                                        class="action-btn like-btn"
                                        data-liked="false"
                                        data-count="23">

                                        <i class="fa-regular fa-heart"></i>
                                        Like <br>
                                        <small><span class="like-count">23</span> Likes</small>
                                    </a>


                                    <a href="#!" class="action-btn share-btn">
                                        <i class="fa fa-share-alt"></i> Share<br><small>234 Reviews</small>
                                    </a>
                                </div>
                                <a href="#!" class="save-icon">
                                    <img src="assets/images/save.png" alt="">
                                </a>
                            </div>
                            <p class="mt-2 read-more-text" data-limit="200">
                                Jacksonville offers accessibility, beaches, and scenic beauty for road trips across Florida. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nam deserunt, vero et facere adipisci doloribus sint, facilis at sunt ea nisi doloremque numquam. Itaque vero aliquid inventore laudantium quisquam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae quidem, consequuntur sequi voluptas eum molestias excepturi ab quos dignissimos dolorum ipsam error aliquid impedit mollitia corporis quod? Aperiam, neque fuga.
                            </p>

                            <div class="tag-list mt-2">
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                                                    </div>

                        </div>
                    </div>
                    <div class="article-card" id="target-post">
                        <div class="post-rofile">
                            <div class="post-p">
                                <ul>
                                    <li><img src="assets/images/profile.jpg" alt=""></li>
                                    <li>
                                        <h6>Riya Sharma</h6> <span>12 Jan 2026</span>

                                    </li>
                                </ul>
                            </div>
                            <div class="post-social">
                                <ul>
                                    <li><a href="#!"><img src="assets/images/linkedin.png" alt=""></a></li>
                                    <li><a href="#!"><img src="assets/images/social-2.png" alt=""></a></li>
                                    <li><a href="#!"><img src="assets/images/social-3.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg" alt="">
                        <div class="article-content">

                            <div class="artical-contenet-post">
                                <div class="action-buttons">
                                    <a href="#!"
                                        class="action-btn like-btn"
                                        data-liked="false"
                                        data-count="23">

                                        <i class="fa-regular fa-heart"></i>
                                        Like <br>
                                        <small><span class="like-count">23</span> Likes</small>
                                    </a>


                                    <a href="#" class="action-btn share-btn">
                                        <i class="fa fa-share-alt"></i> Share<br><small>234 Reviews</small>
                                    </a>
                                </div>
                                <a href="#!" class="save-icon">
                                    <img src="assets/images/save.png" alt="">
                                </a>
                            </div>
                            <p class="mt-2 read-more-text" data-limit="200">
                                Jacksonville offers accessibility, beaches, and scenic beauty for road trips across Florida. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nam deserunt, vero et facere adipisci doloribus sint, facilis at sunt ea nisi doloremque numquam. Itaque vero aliquid inventore laudantium quisquam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae quidem, consequuntur sequi voluptas eum molestias excepturi ab quos dignissimos dolorum ipsam error aliquid impedit mollitia corporis quod? Aperiam, neque fuga.
                            </p>

                            <div class="tag-list mt-2">
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                                                    </div>

                        </div>
                    </div>





                </div>
            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-lg-3">
                <div class="sidebar-right">
                    <div class="hashtags">
                        <h6>Travel Hashtags</h6>

                        <div class="tag-list mb-2">
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                            <a href="#">#BudgetTravel</a>
                        </div>
                    </div>


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
