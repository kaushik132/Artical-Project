@php
    echo '<?xml version="1.0" encoding="UTF-8"?>'
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>https://asd.org/</loc>
        <lastmod>2026-01-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>


    <url>
        <loc>https://asd.org/post</loc>
        <lastmod>2026-01-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>


    @foreach ($articalsitemap as $articalsitemap)

    <url>
        <loc>{{url('/')}}/artical-detail/{{$articalsitemap->slug}}</loc>
        <lastmod>{{$articalsitemap->created_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach



    <url>
        <loc>https://asd.org/travel-clips</loc>
        <lastmod>2026-01-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>





</urlset>
