<?php
$site_url = "https://howtocancelsubscription.com";
$site_name = "HowToCancelSubscription";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>How to Cancel Any Subscription — Step-by-Step Guides</title>
  <meta name="description" content="Free step-by-step guides to cancel any subscription. Find your app or service and cancel in minutes — Netflix, Spotify, Amazon, Hulu, Adobe, and 100+ more.">
  <link rel="canonical" href="<?= $site_url ?>/">
  <link rel="icon" href="/favicon.ico">
  <meta property="og:title" content="How to Cancel Any Subscription — Step-by-Step Guides">
  <meta property="og:description" content="Cancel any subscription in minutes. Step-by-step guides for Netflix, Spotify, Amazon, Hulu, Adobe, and 100+ more.">
  <meta property="og:url" content="<?= $site_url ?>/">
  <meta property="og:type" content="website">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "<?= $site_name ?>",
    "url": "<?= $site_url ?>",
    "description": "Step-by-step guides to cancel any subscription service",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "<?= $site_url ?>/search?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
  </script>
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;background:#f4f6f9;color:#1a1f2e}
    a{color:inherit;text-decoration:none}

    /* Header */
    .header{background:#1a1f2e;color:#fff;padding:0 24px;height:54px;display:flex;align-items:center;gap:12px;position:sticky;top:0;z-index:100;box-shadow:0 2px 8px rgba(0,0,0,.25)}
    .logo{font-size:17px;font-weight:800;color:#fff;display:flex;align-items:center;gap:8px}
    .logo span{color:#ff5c5c}
    .header-search{margin-left:auto;position:relative}
    .header-search input{background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);color:#fff;padding:7px 36px 7px 14px;border-radius:8px;font-size:14px;width:220px;outline:none;transition:all .2s}
    .header-search input::placeholder{color:rgba(255,255,255,.4)}
    .header-search input:focus{background:rgba(255,255,255,.15);border-color:rgba(255,255,255,.3);width:280px}
    .header-search .icon{position:absolute;right:10px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,.4);font-size:14px}

    /* Hero */
    .hero{background:linear-gradient(135deg,#1a1f2e 0%,#2d3561 100%);color:#fff;padding:56px 24px 52px;text-align:center}
    .hero h1{font-size:clamp(28px,5vw,52px);font-weight:800;margin-bottom:16px;letter-spacing:-.5px;line-height:1.1}
    .hero h1 em{color:#ff5c5c;font-style:normal}
    .hero p{font-size:17px;opacity:.75;max-width:540px;margin:0 auto 32px;line-height:1.65}
    .search-wrap{max-width:480px;margin:0 auto;position:relative}
    .search-wrap input{width:100%;padding:16px 60px 16px 22px;border-radius:50px;border:none;font-size:16px;outline:none;box-shadow:0 6px 30px rgba(0,0,0,.3);color:#1a1f2e}
    .search-wrap button{position:absolute;right:6px;top:50%;transform:translateY(-50%);background:#ff5c5c;color:#fff;border:none;border-radius:50px;padding:9px 22px;font-size:14px;font-weight:700;cursor:pointer;transition:background .15s}
    .search-wrap button:hover{background:#ff3b3b}
    .search-dropdown{position:absolute;top:calc(100% + 6px);left:0;right:0;background:#fff;border-radius:14px;box-shadow:0 8px 32px rgba(0,0,0,.18);overflow:hidden;z-index:50;display:none}
    .search-dropdown a{display:flex;align-items:center;gap:10px;padding:12px 18px;font-size:14px;color:#1a1f2e;transition:background .1s}
    .search-dropdown a:hover{background:#f4f6f9}
    .search-dropdown a .app-icon{width:28px;height:28px;border-radius:6px;background:#e8eaf0;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0}
    .search-dropdown .hint{padding:10px 18px;font-size:12px;color:#999;border-top:1px solid #f0f0f0}
    .hero-stats{display:flex;gap:32px;justify-content:center;margin-top:32px;flex-wrap:wrap}
    .hero-stats .stat{text-align:center}
    .hero-stats .stat strong{display:block;font-size:22px;font-weight:800;color:#fff}
    .hero-stats .stat span{font-size:13px;color:rgba(255,255,255,.55)}

    /* Wrap */
    .wrap{max-width:1040px;margin:0 auto;padding:0 20px}

    /* Categories nav */
    .cats{display:flex;gap:8px;overflow-x:auto;padding:20px 20px 0;max-width:1040px;margin:0 auto;scrollbar-width:none}
    .cats::-webkit-scrollbar{display:none}
    .cat-btn{background:#fff;border:1.5px solid #e0e3ed;color:#555;padding:7px 16px;border-radius:50px;font-size:13px;font-weight:600;cursor:pointer;white-space:nowrap;transition:all .15s}
    .cat-btn:hover,.cat-btn.active{background:#1a1f2e;border-color:#1a1f2e;color:#fff}

    /* Section */
    .section{margin-top:28px}
    .sec-header{display:flex;align-items:center;gap:10px;margin-bottom:14px}
    .sec-header h2{font-size:18px;font-weight:800;color:#1a1f2e}
    .sec-header .badge{background:#ff5c5c;color:#fff;font-size:11px;font-weight:700;padding:2px 8px;border-radius:50px}
    .sec-line{flex:1;height:1px;background:#e0e3ed}

    /* App grid */
    .app-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:10px}
    .app-card{background:#fff;border-radius:14px;padding:16px 14px;display:flex;flex-direction:column;gap:8px;box-shadow:0 1px 4px rgba(0,0,0,.06);transition:all .15s;border:1.5px solid transparent}
    .app-card:hover{box-shadow:0 6px 20px rgba(0,0,0,.1);transform:translateY(-2px);border-color:#ff5c5c20}
    .app-card .app-top{display:flex;align-items:center;gap:8px}
    .app-card .icon{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0}
    .app-card .app-name{font-size:14px;font-weight:700;color:#1a1f2e;line-height:1.2}
    .app-card .cancel-btn{margin-top:auto;background:#fff0f0;color:#ff5c5c;font-size:12px;font-weight:700;padding:6px 10px;border-radius:8px;text-align:center;transition:background .15s}
    .app-card:hover .cancel-btn{background:#ff5c5c;color:#fff}

    /* Popular list */
    .pop-list{display:flex;flex-direction:column;gap:6px}
    .pop-item{background:#fff;border-radius:12px;padding:14px 18px;display:flex;align-items:center;gap:14px;box-shadow:0 1px 4px rgba(0,0,0,.05);transition:all .15s}
    .pop-item:hover{box-shadow:0 4px 16px rgba(0,0,0,.09);transform:translateX(3px)}
    .pop-item .rank{width:28px;height:28px;background:#f4f6f9;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:800;color:#888;flex-shrink:0}
    .pop-item .icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0}
    .pop-item .info{flex:1}
    .pop-item .info .name{font-size:15px;font-weight:700;color:#1a1f2e}
    .pop-item .info .desc{font-size:12px;color:#888;margin-top:2px}
    .pop-item .arrow{color:#ccc;font-size:18px;transition:color .15s}
    .pop-item:hover .arrow{color:#ff5c5c}

    /* How it works */
    .steps{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px;margin-top:20px}
    .step{background:#fff;border-radius:14px;padding:20px;box-shadow:0 1px 4px rgba(0,0,0,.06)}
    .step .num{width:36px;height:36px;background:#ff5c5c;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:16px;font-weight:800;margin-bottom:12px}
    .step h3{font-size:15px;font-weight:700;margin-bottom:6px;color:#1a1f2e}
    .step p{font-size:13px;color:#666;line-height:1.6}

    /* FAQ */
    .faq-list{display:flex;flex-direction:column;gap:8px;margin-top:16px}
    .faq-item{background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 1px 4px rgba(0,0,0,.05)}
    .faq-q{padding:16px 20px;font-size:15px;font-weight:700;color:#1a1f2e;cursor:pointer;display:flex;justify-content:space-between;align-items:center;user-select:none}
    .faq-q:hover{background:#fafbfd}
    .faq-q .arr{color:#999;transition:transform .2s;font-size:18px}
    .faq-q.open .arr{transform:rotate(180deg);color:#ff5c5c}
    .faq-a{padding:0 20px 16px;font-size:14px;color:#555;line-height:1.75;display:none}

    /* SEO block */
    .seo-block{background:#fff;border-radius:16px;padding:28px;box-shadow:0 1px 6px rgba(0,0,0,.06);margin-top:28px}
    .seo-block h2{font-size:20px;font-weight:800;color:#1a1f2e;margin-bottom:12px}
    .seo-block h3{font-size:16px;font-weight:700;color:#2d3561;margin:20px 0 8px}
    .seo-block p{font-size:14px;color:#555;line-height:1.8;margin-bottom:10px}

    /* Footer */
    footer{text-align:center;padding:40px 20px 32px;color:#999;font-size:13px;border-top:1px solid #e0e3ed;margin-top:48px}
    footer a{color:#aaa;margin:0 8px}
    footer a:hover{color:#ff5c5c}

    @media(max-width:600px){
      .hero{padding:40px 20px 36px}
      .app-grid{grid-template-columns:repeat(2,1fr)}
      .header-search{display:none}
      .hero-stats{gap:20px}
    }
  </style>
</head>
<body>

<header class="header">
  <a href="/" class="logo">
    <span>✕</span> HowToCancel<span>Subscription</span>
  </a>
  <div class="header-search">
    <input type="text" placeholder="Search an app…" id="hs" autocomplete="off" onkeyup="hsSearch(this.value)">
    <span class="icon">⌕</span>
  </div>
</header>

<div class="hero">
  <h1>Cancel Any Subscription<br><em>In Minutes</em></h1>
  <p>Step-by-step guides to cancel Netflix, Spotify, Amazon, Hulu, Adobe, and 100+ more services — without calling customer support.</p>
  <div class="search-wrap">
    <input type="text" id="hero-search" placeholder="Search your app or service…" autocomplete="off" onkeyup="heroSearch(this.value)" onkeydown="if(event.key==='Enter')goSearch()">
    <button onclick="goSearch()">Search</button>
    <div class="search-dropdown" id="hero-dropdown"></div>
  </div>
  <div class="hero-stats">
    <div class="stat"><strong>100+</strong><span>Services covered</span></div>
    <div class="stat"><strong>2 min</strong><span>Average read time</span></div>
    <div class="stat"><strong>Free</strong><span>No sign-up needed</span></div>
  </div>
</div>

<?php
$categories = [
  "All" => [],
  "Streaming" => [],
  "Productivity" => [],
  "Finance" => [],
  "Social & Dating" => [],
  "Security" => [],
  "Other" => [],
];

$apps = [
  // [name, slug, emoji, category, monthly_searches, tagline]
  ["Hulu",           "hulu",           "📺", "Streaming",       27100, "Cancel online or via app"],
  ["FuboTV",         "fubotv",         "⚽", "Streaming",       22200, "Cancel without calling"],
  ["Amazon Prime",   "amazon-prime",   "📦", "Streaming",       22200, "Cancel auto-renewal"],
  ["Netflix",        "netflix",        "🎬", "Streaming",       12100, "Cancel in 2 clicks"],
  ["Crunchyroll",    "crunchyroll",    "🇯🇵", "Streaming",      12100, "Cancel anytime"],
  ["Spotify",        "spotify",        "🎵", "Streaming",       12100, "Keep your playlists"],
  ["YouTube TV",     "youtube-tv",     "▶️", "Streaming",       12100, "Cancel & keep access"],
  ["Canva",          "canva",          "🎨", "Productivity",    12100, "Cancel Pro anytime"],
  ["ChatGPT Plus",   "chatgpt",        "🤖", "Productivity",    12100, "Cancel ChatGPT Plus"],
  ["Disney+",        "disney-plus",    "🏰", "Streaming",        6600, "Cancel without penalty"],
  ["Peacock",        "peacock",        "🦚", "Streaming",        9900, "Cancel Premium/Plus"],
  ["Experian",       "experian",       "💳", "Finance",          9900, "Stop credit monitoring"],
  ["Adobe",          "adobe",          "🖌️", "Productivity",    9900, "Avoid early-cancel fee"],
  ["Apple TV+",      "apple-tv",       "🍎", "Streaming",        5400, "Cancel via iPhone"],
  ["Google Play",    "google-play",    "▶", "Other",            5400, "Cancel Android app subs"],
  ["App Store",      "app-store",      "📱", "Other",            5400, "Cancel iOS subscriptions"],
  ["Weight Watchers","weight-watchers","⚖️", "Other",            4400, "Cancel WW membership"],
  ["Audible",        "audible",        "🎧", "Other",            4400, "Keep your credits"],
  ["Norton",         "norton",         "🛡️", "Security",         880, "Cancel auto-renew"],
  ["McAfee",         "mcafee",         "🔒", "Security",          720, "Cancel before renewal"],
  ["Microsoft 365",  "microsoft-365",  "💼", "Productivity",     390, "Cancel & keep files"],
  ["Tinder",         "tinder",         "🔥", "Social & Dating",  480, "Cancel Gold/Plus"],
  ["Bumble",         "bumble",         "🐝", "Social & Dating",  390, "Cancel Bumble Boost"],
  ["HelloFresh",     "hellofresh",     "🥗", "Other",            480, "Pause or cancel"],
  ["DoorDash",       "doordash",       "🍔", "Other",            320, "Cancel DashPass"],
  ["Calm",           "calm",           "🧘", "Other",            210, "Cancel premium"],
  ["Duolingo",       "duolingo",       "🦜", "Other",            210, "Cancel Super Duolingo"],
  ["Grammarly",      "grammarly",      "✍️", "Productivity",     210, "Cancel Premium"],
  ["SiriusXM",       "siriusxm",       "📻", "Other",            590, "Cancel without hold"],
  ["Starz",          "starz",          "⭐", "Streaming",         720, "Cancel streaming"],
  ["Sling TV",       "sling-tv",       "📡", "Streaming",         590, "Cancel live TV"],
  ["ESPN+",          "espn-plus",      "🏈", "Streaming",         720, "Cancel ESPN Plus"],
  ["HBO Max",        "hbo-max",        "🎭", "Streaming",         720, "Cancel Max subscription"],
  ["Paramount+",     "paramount-plus", "⛰️", "Streaming",         390, "Cancel Paramount Plus"],
  ["Ipsy",           "ipsy",           "💄", "Other",             480, "Cancel beauty box"],
  ["Amazon Music",   "amazon-music",   "🎶", "Streaming",         590, "Cancel Unlimited"],
  ["Kindle Unlimited","kindle-unlimited","📚","Other",            590, "Cancel & keep books"],
  ["New York Times", "new-york-times", "📰", "Other",             590, "Cancel NYT digital"],
  ["Shopify",        "shopify",        "🛒", "Other",             320, "Cancel store plan"],
];

// Sort by monthly searches
usort($apps, fn($a, $b) => $b[4] - $a[4]);

// Build category map
$by_cat = [];
foreach ($apps as $app) {
  $by_cat[$app[2] === "All" ? "All" : $app[2]][] = $app;
}
?>

<!-- Category tabs -->
<div class="cats" id="cats">
  <button class="cat-btn active" onclick="filterCat('all',this)">All</button>
  <button class="cat-btn" onclick="filterCat('streaming',this)">📺 Streaming</button>
  <button class="cat-btn" onclick="filterCat('productivity',this)">💼 Productivity</button>
  <button class="cat-btn" onclick="filterCat('finance',this)">💳 Finance</button>
  <button class="cat-btn" onclick="filterCat('social',this)">❤️ Social & Dating</button>
  <button class="cat-btn" onclick="filterCat('security',this)">🛡️ Security</button>
  <button class="cat-btn" onclick="filterCat('other',this)">📦 Other</button>
</div>

<div class="wrap">

  <!-- Most searched -->
  <div class="section">
    <div class="sec-header">
      <h2>Most Searched</h2>
      <span class="badge">POPULAR</span>
      <div class="sec-line"></div>
    </div>
    <div class="pop-list">
      <?php
      $top = array_slice($apps, 0, 8);
      foreach ($top as $i => $app):
        [$name, $slug, $emoji, $cat, $vol, $tag] = $app;
        $vol_fmt = $vol >= 1000 ? round($vol/1000,1).'K' : $vol;
      ?>
      <a href="/how-to-cancel-<?= $slug ?>-subscription/" class="pop-item">
        <div class="rank"><?= $i+1 ?></div>
        <div class="icon"><?= $emoji ?></div>
        <div class="info">
          <div class="name">How to Cancel <?= $name ?> Subscription</div>
          <div class="desc"><?= $tag ?> · <?= $vol_fmt ?> searches/mo</div>
        </div>
        <div class="arrow">›</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- All apps grid -->
  <div class="section">
    <div class="sec-header">
      <h2>All Services</h2>
      <div class="sec-line"></div>
    </div>
    <div class="app-grid" id="app-grid">
      <?php foreach ($apps as $app):
        [$name, $slug, $emoji, $cat, $vol, $tag] = $app;
        $data_cat = strtolower(str_replace([' & ',' '], ['-','-'], $cat));
      ?>
      <a href="/how-to-cancel-<?= $slug ?>-subscription/" class="app-card" data-cat="<?= $data_cat ?>" data-name="<?= strtolower($name) ?>">
        <div class="app-top">
          <div class="icon"><?= $emoji ?></div>
          <div class="app-name"><?= $name ?></div>
        </div>
        <div class="cancel-btn">Cancel guide →</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- How it works -->
  <div class="section">
    <div class="sec-header">
      <h2>How It Works</h2>
      <div class="sec-line"></div>
    </div>
    <div class="steps">
      <div class="step">
        <div class="num">1</div>
        <h3>Find your service</h3>
        <p>Search or browse the list of 100+ subscription services above.</p>
      </div>
      <div class="step">
        <div class="num">2</div>
        <h3>Follow the guide</h3>
        <p>Step-by-step instructions with screenshots for every platform — iPhone, Android, web.</p>
      </div>
      <div class="step">
        <div class="num">3</div>
        <h3>Confirm cancellation</h3>
        <p>We show you exactly what confirmation email or screen to expect.</p>
      </div>
      <div class="step">
        <div class="num">4</div>
        <h3>Done — no phone calls</h3>
        <p>Most subscriptions can be cancelled online in under 2 minutes.</p>
      </div>
    </div>
  </div>

  <!-- FAQ -->
  <div class="section">
    <div class="sec-header">
      <h2>Frequently Asked Questions</h2>
      <div class="sec-line"></div>
    </div>
    <div class="faq-list">
      <?php
      $faqs = [
        ["How do I cancel a subscription on my iPhone?",
         "Go to Settings → tap your name → Subscriptions. Find the subscription you want to cancel and tap it, then tap Cancel Subscription. Your access continues until the end of the current billing period."],
        ["How do I cancel a subscription on Android / Google Play?",
         "Open the Google Play Store → tap your profile picture → Payments & subscriptions → Subscriptions. Select the subscription, tap Cancel subscription, and follow the prompts."],
        ["Will I get a refund when I cancel?",
         "Most services don't offer refunds for partial billing periods, but you keep access until the period ends. Some services like Apple offer refunds — check our individual guides for refund policies."],
        ["What happens to my data after I cancel?",
         "Policies vary by service. Most keep your data for 30–90 days in case you resubscribe. Check the specific app's guide on this site for exact data retention policies."],
        ["Can I pause instead of cancel?",
         "Yes — services like Netflix, Spotify, HelloFresh, and Amazon Prime offer a pause option. Look for 'Pause' instead of 'Cancel' in your account settings."],
        ["Why can't I find the cancel button?",
         "Some services make cancellation intentionally hard to find. Our guides include exact navigation paths and screenshots so you don't waste time hunting for the button."],
      ];
      foreach ($faqs as $i => $faq):
      ?>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <?= $faq[0] ?>
          <span class="arr">⌄</span>
        </div>
        <div class="faq-a"><?= $faq[1] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- SEO text -->
  <div class="seo-block">
    <h2>How to Cancel Any Subscription — Complete Guide</h2>
    <p>Unwanted subscriptions are one of the biggest sources of wasted money. Studies show the average American spends over $200 per month on subscriptions — and forgets about at least a third of them. This site helps you find and cancel those subscriptions fast, without spending hours on hold with customer support.</p>

    <h3>Cancel Subscriptions on iPhone</h3>
    <p>Apple makes it easy to see all your active subscriptions in one place. Go to <strong>Settings → [Your Name] → Subscriptions</strong> to view and cancel any App Store subscription. This works for Netflix, Hulu, Spotify, and any other app you subscribed to through the App Store.</p>

    <h3>Cancel Subscriptions on Android</h3>
    <p>For subscriptions purchased through Google Play, open the <strong>Play Store → Profile → Payments &amp; subscriptions → Subscriptions</strong>. You can cancel any subscription from this screen. Note: if you subscribed directly through a service's website, you'll need to cancel there instead.</p>

    <h3>Cancel Amazon Prime &amp; Amazon Subscriptions</h3>
    <p>Amazon subscriptions — including Prime, Kindle Unlimited, Audible, and Amazon Music — are managed through <strong>amazon.com/mc/pipeline/membership</strong>. Each service has its own cancellation flow. Our guides walk you through each one step by step.</p>

    <h3>Avoid Cancellation Fees</h3>
    <p>Some services like Adobe charge an early cancellation fee if you cancel an annual plan before it ends. Our guides flag these cases and explain how to minimize or avoid fees — for example, by timing your cancellation correctly or negotiating a pause instead.</p>
  </div>

</div><!-- /wrap -->

<footer>
  <p>© <?= date('Y') ?> HowToCancelSubscription.com — Free guides to cancel any subscription</p>
  <p style="margin-top:8px">
    <a href="/privacy/">Privacy Policy</a>
    <a href="/contact/">Contact</a>
  </p>
</footer>

<script>
const apps = <?php
  $js_apps = array_map(fn($a) => ['name'=>$a[0],'slug'=>$a[1],'emoji'=>$a[2],'cat'=>strtolower(str_replace([' & ',' '],['-','-'],$a[2]))], $apps);
  echo json_encode($js_apps);
?>;

function slugUrl(slug) {
  return '/how-to-cancel-' + slug + '-subscription/';
}

function heroSearch(q) {
  const dd = document.getElementById('hero-dropdown');
  if (!q || q.length < 1) { dd.style.display='none'; return; }
  const matches = apps.filter(a => a.name.toLowerCase().includes(q.toLowerCase())).slice(0,6);
  if (!matches.length) { dd.style.display='none'; return; }
  dd.innerHTML = matches.map(a =>
    `<a href="${slugUrl(a.slug)}"><div class="app-icon">${a.emoji}</div>Cancel ${a.name} subscription</a>`
  ).join('') + '<div class="hint">Press Enter to search all results</div>';
  dd.style.display = 'block';
}

function goSearch() {
  const q = document.getElementById('hero-search').value.trim();
  if (q) window.location = '/search?q=' + encodeURIComponent(q);
}

function hsSearch(q) {
  // header search — just filter grid for now
  filterByName(q);
}

function filterByName(q) {
  document.querySelectorAll('.app-card').forEach(card => {
    const show = !q || card.dataset.name.includes(q.toLowerCase());
    card.style.display = show ? '' : 'none';
  });
}

function filterCat(cat, btn) {
  document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.app-card').forEach(card => {
    const show = cat === 'all' || card.dataset.cat === cat || card.dataset.cat.startsWith(cat);
    card.style.display = show ? '' : 'none';
  });
}

function toggleFaq(el) {
  const ans = el.nextElementSibling;
  const open = el.classList.toggle('open');
  ans.style.display = open ? 'block' : 'none';
}

// Close dropdown on outside click
document.addEventListener('click', e => {
  if (!e.target.closest('.search-wrap')) {
    document.getElementById('hero-dropdown').style.display = 'none';
  }
});
</script>
</body>
</html>
