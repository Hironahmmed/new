<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/blog</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/blog/post/{{ $post->slug }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    <url>
        <loc>{{ url('/') }}/about</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/contact-us</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/affiliate</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/privacy</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/terms</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/faq</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/login</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/register</loc>
        <lastmod>{{ Carbon\Carbon::now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
</urlset>