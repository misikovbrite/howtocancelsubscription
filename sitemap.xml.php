<?php
header('Content-Type: application/xml; charset=utf-8');
$base = "https://howtocancelsubscription.com";

$apps = [
  "hulu","fubotv","amazon-prime","netflix","crunchyroll","spotify","youtube-tv",
  "canva","chatgpt","disney-plus","peacock","experian","adobe","apple-tv",
  "google-play","app-store","weight-watchers","audible","norton","mcafee",
  "microsoft-365","tinder","bumble","hellofresh","doordash","calm","duolingo",
  "grammarly","siriusxm","starz","sling-tv","espn-plus","hbo-max",
  "paramount-plus","ipsy","amazon-music","kindle-unlimited","new-york-times",
  "shopify","uber-eats","tiktok","capcut"
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Main page
echo "  <url>\n";
echo "    <loc>{$base}/</loc>\n";
echo "    <changefreq>weekly</changefreq>\n";
echo "    <priority>1.0</priority>\n";
echo "  </url>\n";

// App pages
foreach ($apps as $slug) {
    echo "  <url>\n";
    echo "    <loc>{$base}/how-to-cancel-{$slug}-subscription/</loc>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>0.8</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';
