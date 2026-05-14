<?php
header('Content-Type: application/xml; charset=utf-8');
$base = "https://howtocancelsubscription.com";

$en_apps = [
  "hulu","fubotv","amazon-prime","netflix","crunchyroll","spotify","youtube-tv",
  "canva","chatgpt","disney-plus","peacock","experian","adobe","apple-tv",
  "google-play","app-store","weight-watchers","audible","norton","mcafee",
  "microsoft-365","tinder","bumble","hellofresh","doordash","calm","duolingo",
  "grammarly","siriusxm","starz","sling-tv","espn-plus","hbo-max",
  "paramount-plus","ipsy","amazon-music","kindle-unlimited","new-york-times",
  "shopify","uber-eats","tiktok","capcut",
  "planet-fitness","linkedin","playstation-plus","xbox-game-pass","twitch",
  "apple-music","instacart","zoom","dropbox","ancestry","chegg","pandora",
  "philo","nordvpn","hinge","nba-league-pass","youtube-premium","eharmony",
  "mlb-tv","masterclass","surfshark","match","mubi","aura","plenty-of-fish",
  "britbox","noom","peloton",
  "google-one","rocket-money","coursera","wix","squarespace","scribd",
  "discovery-plus","apple-arcade","discord-nitro","minecraft","funimation",
  "shudder","ea-play","expressvpn","home-chef","factor-meal","everyplate",
  "blue-apron","mailchimp","babbel","directv","apple-icloud","roblox-premium",
  "pimsleur","ynab"
];

$de_apps = [
  "netflix","spotify","amazon-prime","sky","disney-plus","audible","hellofresh",
  "wow","dazn","paramount-plus","crunchyroll","apple-tv","canva","chatgpt",
  "mcafee","adobe","youtube-premium","norton","microsoft-365","duolingo",
  "ebay-plus","blinkist","grammarly","amazon-music"
];

$fr_apps = [
  "canal-plus","free","sfr","amazon-prime","orange","netflix","spotify",
  "disney-plus","audible","adobe","hbo-max","canva","crunchyroll","deezer",
  "hellofresh","apple-tv","chatgpt","paramount-plus","youtube-premium"
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Main pages (EN / DE / FR)
$homepages = [
  [$base . "/",      "1.0"],
  [$base . "/de/",   "0.9"],
  [$base . "/fr/",   "0.9"],
];
foreach ($homepages as [$loc, $pri]) {
    echo "  <url>\n";
    echo "    <loc>{$loc}</loc>\n";
    echo "    <changefreq>weekly</changefreq>\n";
    echo "    <priority>{$pri}</priority>\n";
    echo "  </url>\n";
}

// EN app pages
foreach ($en_apps as $slug) {
    echo "  <url>\n";
    echo "    <loc>{$base}/how-to-cancel-{$slug}-subscription/</loc>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>0.8</priority>\n";
    echo "  </url>\n";
}

// DE app pages
foreach ($de_apps as $slug) {
    echo "  <url>\n";
    echo "    <loc>{$base}/de/{$slug}-kuendigen/</loc>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>0.8</priority>\n";
    echo "  </url>\n";
}

// FR app pages
foreach ($fr_apps as $slug) {
    echo "  <url>\n";
    echo "    <loc>{$base}/fr/resilier-{$slug}/</loc>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>0.8</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';
