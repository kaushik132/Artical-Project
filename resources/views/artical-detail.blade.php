@extends('dashboard.layout.main')
@section('content')

<!-- header  -->


<style>
    .article-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .article-content p {
        text-align: justify;
        font-size: 15px;
        font-weight: 400;
    }

    .action-buttons {
        margin-top: 0px;

    }

    @media(max-width:480px) {
        .article-card h4 {
            font-size: 16px;
            font-weight: 400;
        }

        .back-page {
            font-size: 12px;
        }

        .article-meta {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-direction: column;
        }

        .action-buttons {
            margin-top: 5px;
        }
            .article-card img {
        height: 160px;
    }

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




                    <!-- ARTICLE -->
                    <div class="article-card">
                        <a href="index.php" class="text-decoration-none text-dark fw-semibold back-page"><i class="fa-solid fa-arrow-left-long"></i> back</a>
                        <h4 class="mt-2">Why you must include a whirlwind trip to Jacksonville while in Florida</h4>
                        <div class="article-meta mb-2">
                            By Riya Sharma • Jan 8, 2026
                            <div class="action-buttons">
                                <a href="#" class="action-btn share-btn">
                                    <i class="fa fa-share-alt"></i> Share
                                </a>

                                <a href="#" class="action-btn">
                                    <i class="fa fa-bookmark"></i> Save to List
                                </a>
                            </div>

                        </div>
                        <img src="assets/images/8d0d7f3d7fd5c595282933f6385548b7f523c7d8.jpg" alt="">
                        <div class="article-content">

                            <p>
                                Over the past couple of seasons, the vast resort of La Plagne– linked to Les Arcs as part of the 425km Paradiski ski area – has been starting at the top. Live 3000 is the name for the expansion just below the area’s top point of 3,080m and now it’s quicker and more comfortable to get there.
                                The reborn two-stage Roche de Mio gondola from Plagne Bellecôte, one of the main village centres, provides travel to 2,739m Roche de Mio itself in just nine minutes, with the Glaciers lift servicing the last short leg. The improvements also cut the time to the top from Plagne Centre itself. The top of the first stage is Col de Forcle, itself an impressive spot with runs down to Bellcote, but also over to the pretty bowl runs all the way down to the 1,250m village of Champagny-en-Vanoise. The gondola’s second stage also has Aérolive, two completely open-air cabins (just the frame!) with a maximum of six riders held in by harnesses, getting 360° panoramic views (€29pp). At the top, you can relax on a sun lounger on Café Sixieme Ciel’s panoramic terrace. January is an ideal time for a Caribbean cruise, particularly to the Antilles. However, with so many options to choose from, first-time visitors to the region can easily feel a bit overwhelmed. Each island in the Lesser Antilles has its own unique appeal. Guadeloupe boasts lush forests and mangroves, while Barbados enchants with its golden beaches and rich colonial heritage. Saint Lucia offers a dramatic landscape dominated by the Pitons, Grenada delights with its fragrant spices, and St Vincent & the Grenadines features beautiful gardens a
                            </p>


                        </div>
                    </div>


                </div>
            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-lg-3">
                <div class="sidebar-right">

                    <div class="sidebar-box">
                        <h5>Related Articles</h5>

                        <div class="sidebar-item">
                            <img src="assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg">
                            <div>
                                <h6>Manali mountain views</h6>
                                <small>Instagram</small>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <img src="assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg">
                            <div>
                                <h6>Manali mountain views</h6>
                                <small>Instagram</small>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <img src="assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg">
                            <div>
                                <h6>Manali mountain views</h6>
                                <small>Instagram</small>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <img src="assets/images/aa9def214301ac693996ae9995d0b1a6ef690604.jpg">
                            <div>
                                <h6>Manali mountain views</h6>
                                <small>Instagram</small>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>





@endsection
