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
                    {{-- <div class="category-pills mb-3">
                        <button class="btn active">Destinations</button>
                        <button class="btn">Itineraries</button>
                        <button class="btn">Food & Cafés</button>
                        <button class="btn">Itineraries</button>
                        <button class="btn">Food & Cafés</button>
                    </div> --}}




                    <!-- ARTICLE -->
                    <div class="article-card">
                        <a href="{{url('/')}}" class="text-decoration-none text-dark fw-semibold back-page"><i class="fa-solid fa-arrow-left-long"></i> back</a>
                        <h4 class="mt-2">{{$artical->title}}</h4>
                        <div class="article-meta mb-2">
                             By {{ $artical->writer_name ?? 'Admin' }} •
                                            {{ $artical->created_at->format('M d, Y') }}
                            <div class="action-buttons">
                                <a href="#" class="action-btn share-btn">
                                    <i class="fa fa-share-alt"></i> Share
                                </a>


                            </div>

                        </div>
                        <img src="{{url('uploads/' . $artical->image)}}" alt="{{$artical->alt}}" >
                        <div class="article-content">

                            <p>
                                {!! $artical->content !!}
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
@foreach ($articalcategories as $articalcategoriess)
                        <a href="{{url('artical-detail/' . $articalcategoriess->slug)}}" class="sidebar-item">
                            <img src="{{ url('uploads/' . $articalcategoriess->image) }}"
                                alt="{{$articalcategoriess->alt}}">
                            <div>
                                <h6>{{ $articalcategoriess->title}}</h6>
                                {{-- <small>{{ $resentArticals->created_at->format('M d, Y') }}</small> --}}
                            </div>
                        </a>

@endforeach


                    </div>


                </div>
            </div>

        </div>
    </div>
</section>

<div class="share-overlay" id="shareOverlay"
     data-title="{{ $artical->title }}"
     data-url="{{ url()->current() }}">

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

    const overlay = document.getElementById('shareOverlay');
    const title = encodeURIComponent(overlay.dataset.title);
    const url   = encodeURIComponent(overlay.dataset.url);

    const facebook = document.querySelector('.share.facebook');
    const whatsapp = document.querySelector('.share.whatsapp');
    const linkedin = document.querySelector('.share.linkedin');
    const telegram = document.querySelector('.share.telegram');

    facebook.href  = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
    whatsapp.href  = `https://api.whatsapp.com/send?text=${title}%20${url}`;
    linkedin.href  = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
    telegram.href  = `https://t.me/share/url?url=${url}&text=${title}`;

    // Open all share links in new tab
    [facebook, whatsapp, linkedin, telegram].forEach(link => {
        link.target = "_blank";
        link.rel = "noopener noreferrer";
    });

    document.querySelector('.share.copy').addEventListener('click', function (e) {
        e.preventDefault();
        navigator.clipboard.writeText(decodeURIComponent(url));
        alert('Link copied!');
    });

});
</script>



@endsection
