<?php
$site_url = "https://howtocancelsubscription.com";
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abo kündigen — Kostenlose Schritt-für-Schritt Anleitungen</title>
  <meta name="description" content="Kostenlose Anleitungen zum Kündigen von Abonnements. Netflix, Spotify, Amazon, Sky, DAZN und 20+ weitere Dienste kündigen — ohne Warteschleife.">
  <link rel="canonical" href="<?= $site_url ?>/de/">
  <link rel="alternate" hreflang="en" href="<?= $site_url ?>/">
  <link rel="alternate" hreflang="de" href="<?= $site_url ?>/de/">
  <link rel="alternate" hreflang="fr" href="<?= $site_url ?>/fr/">
  <link rel="icon" href="/favicon.ico?v=2" sizes="any">
  <link rel="apple-touch-icon" href="/icon_180.png?v=2">
  <meta property="og:image" content="<?= $site_url ?>/icon_192.png?v=2">
  <meta property="og:title" content="Abo kündigen — Kostenlose Schritt-für-Schritt Anleitungen">
  <meta property="og:description" content="Netflix, Spotify, Amazon, Sky und 20+ Dienste kündigen — ohne Telefon.">
  <meta property="og:url" content="<?= $site_url ?>/de/">
  <script type="application/ld+json">
  {"@context":"https://schema.org","@type":"WebSite","name":"AboKündigen","url":"<?= $site_url ?>/de/","inLanguage":"de","description":"Schritt-für-Schritt Anleitungen zum Kündigen von Abonnements","potentialAction":{"@type":"SearchAction","target":"<?= $site_url ?>/de/?q={search_term_string}","query-input":"required name=search_term_string"}}
  </script>
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;background:#f4f6f9;color:#1a1f2e}
    a{color:inherit;text-decoration:none}
    .header{background:#1a1f2e;color:#fff;padding:0 24px;height:54px;display:flex;align-items:center;gap:12px;position:sticky;top:0;z-index:100;box-shadow:0 2px 8px rgba(0,0,0,.25)}
    .logo{font-size:17px;font-weight:800;color:#fff;display:flex;align-items:center;gap:8px}
    .logo span{color:#ff5c5c}
    .lang-switch{margin-left:auto;display:flex;gap:6px}
    .lang-btn{background:rgba(255,255,255,.1);color:rgba(255,255,255,.7);padding:5px 10px;border-radius:6px;font-size:12px;font-weight:600}
    .lang-btn:hover,.lang-btn.active{background:rgba(255,255,255,.2);color:#fff}
    .hero{background:linear-gradient(135deg,#1a1f2e 0%,#2d3561 100%);color:#fff;padding:56px 24px 52px;text-align:center}
    .hero h1{font-size:clamp(26px,5vw,50px);font-weight:800;margin-bottom:16px;letter-spacing:-.5px;line-height:1.1}
    .hero h1 em{color:#ff5c5c;font-style:normal}
    .hero p{font-size:17px;opacity:.75;max-width:540px;margin:0 auto 32px;line-height:1.65}
    .search-wrap{max-width:480px;margin:0 auto;position:relative}
    .search-wrap input{width:100%;padding:16px 60px 16px 22px;border-radius:50px;border:none;font-size:16px;outline:none;box-shadow:0 6px 30px rgba(0,0,0,.3);color:#1a1f2e}
    .search-wrap button{position:absolute;right:6px;top:50%;transform:translateY(-50%);background:#ff5c5c;color:#fff;border:none;border-radius:50px;padding:9px 22px;font-size:14px;font-weight:700;cursor:pointer}
    .search-dropdown{position:absolute;top:calc(100% + 6px);left:0;right:0;background:#fff;border-radius:14px;box-shadow:0 8px 32px rgba(0,0,0,.18);overflow:hidden;z-index:50;display:none}
    .search-dropdown a{display:flex;align-items:center;gap:10px;padding:12px 18px;font-size:14px;color:#1a1f2e;transition:background .1s}
    .search-dropdown a:hover{background:#f4f6f9}
    .search-dropdown .app-icon{width:28px;height:28px;border-radius:6px;background:#e8eaf0;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0}
    .search-dropdown .hint{padding:10px 18px;font-size:12px;color:#999;border-top:1px solid #f0f0f0}
    .hero-stats{display:flex;gap:32px;justify-content:center;margin-top:32px;flex-wrap:wrap}
    .hero-stats .stat strong{display:block;font-size:22px;font-weight:800}
    .hero-stats .stat span{font-size:13px;color:rgba(255,255,255,.55)}
    .app-promo-hero{display:flex;align-items:center;gap:14px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:16px;padding:14px 20px;max-width:480px;margin:28px auto 0;cursor:pointer;transition:background .15s}
    .app-promo-hero:hover{background:rgba(255,255,255,.13)}
    .app-promo-hero .app-ico img{width:44px;height:44px;border-radius:10px}
    .app-promo-hero .app-text{flex:1;text-align:left}
    .app-promo-hero .tag{font-size:10px;font-weight:800;letter-spacing:.6px;color:#ff9999;text-transform:uppercase}
    .app-promo-hero .title{font-size:14px;font-weight:700;margin:2px 0}
    .app-promo-hero .sub{font-size:12px;opacity:.6}
    .dl-btn{background:#ff5c5c;color:#fff;padding:8px 16px;border-radius:50px;font-size:12px;font-weight:700;white-space:nowrap;display:flex;align-items:center;gap:6px}
    .dl-btn svg{width:14px;height:14px}
    .wrap{max-width:1040px;margin:0 auto;padding:0 20px}
    .cats{display:flex;gap:8px;overflow-x:auto;padding:20px 20px 0;max-width:1040px;margin:0 auto;scrollbar-width:none}
    .cats::-webkit-scrollbar{display:none}
    .cat-btn{background:#fff;border:1.5px solid #e0e3ed;color:#555;padding:7px 16px;border-radius:50px;font-size:13px;font-weight:600;cursor:pointer;white-space:nowrap;transition:all .15s}
    .cat-btn:hover,.cat-btn.active{background:#1a1f2e;border-color:#1a1f2e;color:#fff}
    .section{margin-top:28px}
    .sec-header{display:flex;align-items:center;gap:10px;margin-bottom:14px}
    .sec-header h2{font-size:18px;font-weight:800;color:#1a1f2e}
    .badge{background:#ff5c5c;color:#fff;font-size:10px;font-weight:800;padding:3px 8px;border-radius:50px;letter-spacing:.5px}
    .sec-line{flex:1;height:1px;background:#e0e3ed}
    .pop-list{display:flex;flex-direction:column;gap:8px}
    .pop-item{background:#fff;border-radius:14px;padding:14px 16px;display:flex;align-items:center;gap:12px;box-shadow:0 1px 4px rgba(0,0,0,.06);transition:all .15s;border:1.5px solid transparent}
    .pop-item:hover{box-shadow:0 4px 16px rgba(0,0,0,.1);border-color:#ff5c5c20;transform:translateY(-1px)}
    .pop-item .rank{width:28px;height:28px;border-radius:50%;background:#f4f6f9;color:#888;font-size:12px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0}
    .pop-item .icon{font-size:24px;flex-shrink:0}
    .pop-item .info{flex:1;min-width:0}
    .pop-item .name{font-size:14px;font-weight:700;color:#1a1f2e;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
    .pop-item .desc{font-size:12px;color:#888;margin-top:2px}
    .pop-item .arrow{color:#ccc;font-size:18px}
    .app-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(150px,1fr));gap:12px}
    .app-card{background:#fff;border-radius:14px;padding:16px 14px;display:flex;flex-direction:column;gap:8px;box-shadow:0 1px 4px rgba(0,0,0,.06);transition:all .15s;border:1.5px solid transparent}
    .app-card:hover{box-shadow:0 6px 20px rgba(0,0,0,.1);transform:translateY(-2px);border-color:#ff5c5c20}
    .app-card .app-top{display:flex;align-items:center;gap:8px}
    .app-card .icon{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0}
    .app-card .app-name{font-size:14px;font-weight:700;color:#1a1f2e;line-height:1.2}
    .app-card .cancel-btn{margin-top:auto;background:#fff0f0;color:#ff5c5c;font-size:12px;font-weight:700;padding:6px 10px;border-radius:8px;text-align:center;transition:background .15s}
    .app-card:hover .cancel-btn{background:#ff5c5c;color:#fff}
    .steps{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px}
    .step{background:#fff;border-radius:14px;padding:20px;box-shadow:0 1px 4px rgba(0,0,0,.06)}
    .step .num{width:36px;height:36px;border-radius:50%;background:#ff5c5c;color:#fff;font-size:16px;font-weight:800;display:flex;align-items:center;justify-content:center;margin-bottom:12px}
    .step h3{font-size:15px;font-weight:700;color:#1a1f2e;margin-bottom:6px}
    .step p{font-size:13px;color:#666;line-height:1.6}
    .faq-list{display:flex;flex-direction:column;gap:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 1px 4px rgba(0,0,0,.06)}
    .faq-item{border-bottom:1px solid #f4f6f9;padding:0 20px}
    .faq-item:last-child{border-bottom:none}
    .faq-q{padding:16px 0;font-size:15px;font-weight:700;color:#1a1f2e;cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:8px}
    .faq-q .arr{font-size:18px;color:#999;transition:transform .2s;flex-shrink:0}
    .faq-q.open .arr{transform:rotate(180deg)}
    .faq-a{display:none;padding:0 0 16px;font-size:14px;color:#555;line-height:1.7}
    .seo-block{background:#fff;border-radius:16px;padding:28px;margin:28px 0;font-size:14px;color:#555;line-height:1.8}
    .seo-block h2{font-size:20px;font-weight:800;color:#1a1f2e;margin-bottom:12px}
    .seo-block h3{font-size:15px;font-weight:700;color:#1a1f2e;margin:18px 0 8px}
    .app-promo-banner{display:flex;align-items:center;gap:16px;background:linear-gradient(135deg,#1a1f2e,#2d3561);border-radius:20px;padding:24px;margin:28px 0;color:#fff;flex-wrap:wrap}
    .app-promo-banner .app-ico img{width:56px;height:56px;border-radius:14px}
    .app-promo-banner .info{flex:1;min-width:160px}
    .app-promo-banner .tag{font-size:11px;font-weight:800;letter-spacing:.6px;color:#ff9999;text-transform:uppercase;margin-bottom:4px}
    .app-promo-banner .stars{font-size:13px;margin-bottom:4px}
    .app-promo-banner .title{font-size:17px;font-weight:800;margin-bottom:4px}
    .app-promo-banner .sub{font-size:13px;opacity:.7}
    .app-promo-banner .dl-btn{background:#fff;color:#1a1f2e;padding:11px 22px;border-radius:50px;font-size:14px;font-weight:800;display:flex;align-items:center;gap:8px;white-space:nowrap}
    .app-promo-banner .dl-btn svg{width:16px;height:16px}
    .request-block{background:#fff;border-radius:16px;padding:20px 24px;display:flex;align-items:center;gap:16px;flex-wrap:wrap;box-shadow:0 1px 4px rgba(0,0,0,.06);margin-bottom:40px}
    .request-left{display:flex;align-items:center;gap:12px;flex:1;min-width:200px}
    .req-icon{font-size:28px}
    .request-left strong{display:block;font-size:15px;font-weight:700;color:#1a1f2e;margin-bottom:3px}
    .request-left span{font-size:13px;color:#888}
    .req-form{display:flex;gap:8px;flex-wrap:wrap}
    .req-form input{padding:9px 14px;border:1.5px solid #e0e3ed;border-radius:10px;font-size:14px;outline:none;min-width:160px;font-family:inherit}
    .req-form input:focus{border-color:#ff5c5c}
    .req-form button{background:#ff5c5c;color:#fff;border:none;padding:9px 18px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;white-space:nowrap}
    .req-success{background:#f0fff4;color:#15803d;font-size:14px;font-weight:700;padding:10px 16px;border-radius:10px;border:1.5px solid #bbf7d0}
    footer{background:#1a1f2e;color:rgba(255,255,255,.5);text-align:center;padding:24px 20px;font-size:13px;margin-top:40px}
    footer a{color:rgba(255,255,255,.5);margin:0 10px}
    footer a:hover{color:#fff}
    @media(max-width:600px){.app-grid{grid-template-columns:repeat(2,1fr)}.steps{grid-template-columns:1fr}.hero p{font-size:15px}.app-promo-banner{padding:18px}}
  </style>
</head>
<body>

<header class="header">
  <a href="/de/" class="logo"><img src="/favicon.ico?v=2" width="22" height="22" alt=""> ✕ <span>AboKündigen</span></a>
  <div class="lang-switch">
    <a href="/" class="lang-btn">🇺🇸 EN</a>
    <a href="/de/" class="lang-btn active">🇩🇪 DE</a>
    <a href="/fr/" class="lang-btn">🇫🇷 FR</a>
  </div>
</header>

<div class="hero">
  <h1>Jedes Abo kündigen<br><em>in wenigen Minuten</em></h1>
  <p>Schritt-für-Schritt Anleitungen zum Kündigen von Netflix, Spotify, Sky, Amazon, DAZN und 20+ weiteren Diensten — ohne Warteschleife.</p>
  <div class="search-wrap">
    <input type="text" id="hero-search" placeholder="Dienst suchen, z. B. Netflix, Sky…" autocomplete="off" onkeyup="heroSearch(this.value)">
    <button onclick="goSearch()">Suchen</button>
    <div class="search-dropdown" id="hero-dropdown"></div>
  </div>
  <div class="hero-stats">
    <div class="stat"><strong>23+</strong><span>Anleitungen</span></div>
    <div class="stat"><strong>2 Min</strong><span>Lesezeit</span></div>
    <div class="stat"><strong>Kostenlos</strong><span>Kein Anmelden</span></div>
  </div>
  <a href="https://apps.apple.com/us/app/cancel-subscriptions-app/id6759456590" class="app-promo-hero" target="_blank" rel="noopener">
    <div class="app-ico"><img src="/icon_180.png?v=2" alt="Abonnements App"></div>
    <div class="app-text">
      <div class="tag">Kostenlose iPhone App</div>
      <div class="title">Alle Abos auf einen Blick</div>
      <div class="sub">Aktive Abonnements scannen &amp; kündigen</div>
    </div>
    <div class="dl-btn">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
      Kostenlos laden
    </div>
  </a>
</div>

<?php
$apps = [
  // [name, slug, emoji, category, monthly_searches, tagline]
  ["Netflix",          "netflix",          "🎬", "Streaming",  27100, "In 2 Klicks kündigen"],
  ["Amazon Prime",     "amazon-prime",     "📦", "Sonstiges",  27100, "Sofort oder zum Verlängerungsdatum"],
  ["Sky Deutschland",  "sky",              "📡", "Streaming",  27100, "Kündigungsfrist beachten!"],
  ["Spotify",          "spotify",          "🎵", "Streaming",  22200, "Playlists bleiben erhalten"],
  ["Disney+",          "disney-plus",      "✨", "Streaming",  22200, "Ohne Telefonanruf kündigen"],
  ["Audible",          "audible",          "🎧", "Sonstiges",  18100, "Hörbücher bleiben für immer"],
  ["HelloFresh",       "hellofresh",       "🥗", "Sonstiges",  14800, "Vor Stichtag kündigen!"],
  ["WOW Streaming",    "wow",              "🎬", "Streaming",  14800, "Monatlich kündbar"],
  ["DAZN",             "dazn",             "⚽", "Streaming",   9900, "Sport-Abo online kündigen"],
  ["Paramount+",       "paramount-plus",   "⛰️", "Streaming",   8100, "In 3 Schritten kündigen"],
  ["Crunchyroll",      "crunchyroll",      "🎌", "Streaming",   5400, "Anime-Merkliste bleibt"],
  ["Apple TV+",        "apple-tv",         "🍎", "Streaming",   5400, "In den iPhone-Einstellungen"],
  ["Canva Pro",        "canva",            "🎨", "Produktivität",4400, "Designs bleiben erhalten"],
  ["ChatGPT Plus",     "chatgpt",          "🤖", "Produktivität",3600, "In 3 Klicks kündigen"],
  ["McAfee",           "mcafee",           "🔐", "Sicherheit",  3600, "Auto-Verlängerung deaktivieren"],
  ["Adobe",            "adobe",            "🖌️", "Produktivität",2400, "Vorfälligkeitsgebühr beachten!"],
  ["YouTube Premium",  "youtube-premium",  "▶️", "Streaming",   1900, "YouTube bleibt kostenlos"],
  ["Norton",           "norton",           "🛡️", "Sicherheit",  1300, "60-Tage-Geld-zurück"],
  ["Microsoft 365",    "microsoft-365",    "📄", "Produktivität",1000, "OneDrive-Daten sichern"],
  ["Duolingo Super",   "duolingo",         "🦉", "Sonstiges",   1000, "Lernfortschritt bleibt"],
  ["eBay Plus",        "ebay-plus",        "🛒", "Sonstiges",    880, "Einfach im eBay-Konto"],
  ["Blinkist",         "blinkist",         "📖", "Sonstiges",    260, "Kostenlose Version bleibt"],
  ["Grammarly",        "grammarly",        "✏️", "Produktivität", 170, "Browser-Erweiterung bleibt"],
  ["Kindle Unlimited", "kindle-unlimited", "📚", "Sonstiges",     6600, "Gekaufte Bücher bleiben"],
  ["NordVPN",          "nordvpn",          "🔒", "Sicherheit",    3600, "30-Tage-Garantie"],
  ["Parship",          "parship",          "💑", "Sonstiges",     2400, "Schriftliche Kündigung empfohlen"],
  ["PlayStation Plus", "playstation-plus", "🎮", "Gaming",        2400, "Spiele bis Ablauf nutzbar"],
  ["Xbox Game Pass",   "xbox-game-pass",   "🟢", "Gaming",        1900, "Spielstände bleiben erhalten"],
  ["Babbel",           "babbel",           "🗣️", "Sonstiges",     1900, "20-Tage-Garantie für Neukunden"],
  ["Apple Music",      "apple-music",      "🎵", "Streaming",     1600, "Playlists bleiben erhalten"],
  ["Discord Nitro",    "discord-nitro",    "💬", "Gaming",        1600, "Boosts werden entfernt"],
  ["Google One",       "google-one",       "☁️", "Sonstiges",     1300, "Dateien nicht sofort gelöscht"],
  ["Dropbox",          "dropbox",          "📦", "Produktivität", 1000, "Kostenlos 2 GB bleiben"],
  ["Tinder",           "tinder",           "🔥", "Sonstiges",      880, "Profil bleibt erhalten"],
  ["EA Play",          "ea-play",          "🎮", "Gaming",          880, "Gekaufte Spiele bleiben"],
  ["iCloud+",          "apple-icloud",     "☁️", "Sonstiges",       880, "15 GB kostenlos bleiben"],
  ["Surfshark",        "surfshark",        "🦈", "Sicherheit",      880, "30-Tage-Garantie"],
  ["ElitePartner",     "elitepartner",     "💎", "Sonstiges",       590, "14 Tage Widerrufsrecht"],
  ["Bumble",           "bumble",           "🐝", "Sonstiges",       390, "Kostenlose Version bleibt"],
  ["LinkedIn",         "linkedin",         "💼", "Produktivität",   480, "Profildaten bleiben erhalten"],
  ["Zoom",             "zoom",             "📹", "Produktivität",   390, "40-Min-Limit kehrt zurück"],
  ["ExpressVPN",       "expressvpn",       "🔐", "Sicherheit",      390, "30-Tage-Garantie"],
];
usort($apps, fn($a,$b) => $b[4]-$a[4]);
?>

<div class="cats" id="cats">
  <button class="cat-btn active" onclick="filterCat('all',this)">Alle</button>
  <button class="cat-btn" onclick="filterCat('streaming',this)">📺 Streaming</button>
  <button class="cat-btn" onclick="filterCat('produktivit',this)">💼 Produktivität</button>
  <button class="cat-btn" onclick="filterCat('sicherheit',this)">🛡️ Sicherheit</button>
  <button class="cat-btn" onclick="filterCat('sonstiges',this)">📦 Sonstiges</button>
</div>

<div class="wrap">
  <div class="section">
    <div class="sec-header"><h2>Meistgesucht</h2><span class="badge">BELIEBT</span><div class="sec-line"></div></div>
    <div class="pop-list" id="pop-list">
      <?php foreach (array_slice($apps,0,8) as $i=>$app): [$name,$slug,$emoji,$cat,$vol,$tag]=$app; ?>
      <a href="/de/<?= $slug ?>-kuendigen/" class="pop-item">
        <div class="rank"><?= $i+1 ?></div>
        <div class="icon"><?= $emoji ?></div>
        <div class="info">
          <div class="name"><?= $name ?> kündigen</div>
          <div class="desc"><?= $tag ?> · <?= $vol>=1000?round($vol/1000,1).'K':$vol ?>/Monat</div>
        </div>
        <div class="arrow">›</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="section">
    <div class="sec-header"><h2>Alle Dienste</h2><div class="sec-line"></div></div>
    <div class="app-grid" id="app-grid">
      <?php foreach ($apps as $app): [$name,$slug,$emoji,$cat,$vol,$tag]=$app;
        $dc=strtolower(str_replace(' ','-',$cat)); ?>
      <a href="/de/<?= $slug ?>-kuendigen/" class="app-card" data-cat="<?= $dc ?>" data-name="<?= strtolower($name) ?>">
        <div class="app-top">
          <div class="icon"><?= $emoji ?></div>
          <div class="app-name"><?= $name ?></div>
        </div>
        <div class="cancel-btn">Anleitung →</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="section">
    <div class="sec-header"><h2>So funktioniert es</h2><div class="sec-line"></div></div>
    <div class="steps">
      <div class="step"><div class="num">1</div><h3>Dienst finden</h3><p>Suche oder stöbere in der Liste der 23+ Abonnements oben.</p></div>
      <div class="step"><div class="num">2</div><h3>Anleitung folgen</h3><p>Schritt-für-Schritt für jede Plattform — iPhone, Android, Browser.</p></div>
      <div class="step"><div class="num">3</div><h3>Kündigung bestätigen</h3><p>Wir zeigen dir, welche Bestätigungs-E-Mail oder -Anzeige du erwarten kannst.</p></div>
      <div class="step"><div class="num">4</div><h3>Fertig — kein Anruf</h3><p>Die meisten Abos lassen sich in unter 2 Minuten online kündigen.</p></div>
    </div>
  </div>

  <div class="section">
    <div class="sec-header"><h2>Häufige Fragen</h2><div class="sec-line"></div></div>
    <div class="faq-list">
      <?php foreach ([
        ["Wie kündige ich ein Abo auf dem iPhone?","Gehe zu Einstellungen → [Dein Name] → Abonnements. Tippe auf das gewünschte Abo und dann auf 'Abonnement kündigen'. Der Zugang bleibt bis Ende des aktuellen Abrechnungszeitraums."],
        ["Wie kündige ich ein Google-Play-Abo auf Android?","Öffne den Google Play Store → tippe auf dein Profilbild → Zahlungen & Abos → Abonnements. Wähle das Abo aus, tippe auf 'Abonnement kündigen' und bestätige."],
        ["Bekomme ich eine Erstattung nach der Kündigung?","Die meisten Dienste erstatten keine anteiligen Beträge, gewähren aber Zugang bis zum Ende des Abrechnungszeitraums. Ausnahmen: Amazon Prime (anteilig), Norton/McAfee (60-Tage-Garantie). Prüfe die individuelle Anleitung."],
        ["Was ist die Kündigungsfrist bei Sky Deutschland?","Bei Sky Deutschland beträgt die Kündigungsfrist 1 Monat zum Ende der Mindestlaufzeit (meist 12 oder 24 Monate). Prüfe dein Vertragsende im Sky-Kundenportal."],
        ["Kann ich ein Abo pausieren statt kündigen?","Ja — Netflix, Spotify und HelloFresh bieten Pausenfunktionen an. Suche in den Kontoeinstellungen nach 'Pause' oder 'Überspringen' statt 'Kündigen'."],
      ] as $faq): ?>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)"><?= $faq[0] ?><span class="arr">⌄</span></div>
        <div class="faq-a"><?= $faq[1] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="seo-block">
    <h2>Abo kündigen — Kompletter Ratgeber</h2>
    <p>Unerwünschte Abonnements gehören zu den häufigsten Quellen ungeplanter Ausgaben. Studien zeigen, dass der Durchschnittsdeutsche monatlich für mehrere vergessene Abos zahlt. Diese Seite hilft dir, alle Abos schnell zu kündigen — ohne stundenlange Warteschleifen im Kundendienst.</p>
    <h3>Abo kündigen auf dem iPhone</h3>
    <p>Apple macht es einfach, alle aktiven Abonnements auf einem Blick zu sehen. Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>, um alle App-Store-Abos anzuzeigen und zu kündigen. Das funktioniert für Netflix, Spotify und jede andere App, die du über den App Store abonniert hast.</p>
    <h3>Sky, DAZN und WOW kündigen</h3>
    <p>Für Sky Deutschland (Vertrag) gilt eine Kündigungsfrist von 1 Monat zum Vertragsende. WOW und DAZN hingegen sind monatlich kündbar — direkt online im jeweiligen Kundenkonto, ganz ohne Anruf.</p>
    <h3>Kündigungsfristen und Erstattungen</h3>
    <p>Manche Dienste wie Adobe berechnen eine Vorfälligkeitsentschädigung bei vorzeitiger Kündigung eines Jahresplans. Unsere Anleitungen weisen auf solche Besonderheiten hin und erklären, wie du Gebühren vermeidest.</p>
  </div>

  <a href="https://apps.apple.com/us/app/cancel-subscriptions-app/id6759456590" class="app-promo-banner" target="_blank" rel="noopener">
    <div class="app-ico"><img src="/icon_180.png?v=2" alt="Abonnements App"></div>
    <div class="info">
      <div class="tag">Kostenlose iPhone App</div>
      <div class="stars">⭐⭐⭐⭐⭐ <span style="opacity:.7">Abonnements kündigen</span></div>
      <div class="title">Weißt du nicht, wofür du bezahlst?</div>
      <div class="sub">Unsere kostenlose App erkennt alle aktiven Abos automatisch — auch vergessene. Direkt aus der App kündigen, kein Telefonanruf nötig.</div>
    </div>
    <div class="dl-btn">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
      Kostenlos laden
    </div>
  </a>

  <div class="request-block">
    <div class="request-left">
      <div class="req-icon">🔍</div>
      <div><strong>Deinen Dienst nicht gefunden?</strong><span>Sag uns Bescheid — wir fügen die Anleitung hinzu.</span></div>
    </div>
    <div id="req-success" class="req-success" style="display:none">✓ Danke! Wir fügen die Anleitung bald hinzu.</div>
    <form class="req-form" id="req-form" method="post">
      <input type="hidden" name="_ajax" value="1">
      <input type="text" name="req_service" placeholder="Dienstname, z. B. Sky, DAZN…" maxlength="80" required>
      <input type="email" name="req_email" placeholder="Deine E-Mail (optional)">
      <button type="submit">Anfrage senden →</button>
    </form>
  </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD']==='POST' && !empty($_POST['req_service'])) {
  $s=trim(strip_tags($_POST['req_service']??''));
  if ($s) {
    file_put_contents(dirname(__DIR__).'/guide_requests.txt', date('Y-m-d H:i:s')." [DE] $s\n", FILE_APPEND|LOCK_EX);
    @mail('hello@britetodo.com',"DE Anfrage: $s","Dienst: $s\nSeite: /de/","From: noreply@howtocancelsubscription.com");
    if (!empty($_POST['_ajax'])) { header('Content-Type: application/json'); echo json_encode(['ok'=>true]); exit; }
  }
}
?>

<footer>
  <p>© <?= date('Y') ?> HowToCancelSubscription.com — Kostenlose Anleitungen zum Kündigen von Abonnements</p>
  <p style="margin-top:8px"><a href="/">🇺🇸 English</a><a href="/fr/">🇫🇷 Français</a><a href="/privacy/">Datenschutz</a></p>
</footer>

<script>
const apps = <?php echo json_encode(array_map(fn($a)=>['name'=>$a[0],'slug'=>$a[1],'emoji'=>$a[2]],$apps)); ?>;
function heroSearch(q){
  const dd=document.getElementById('hero-dropdown');
  if(!q||q.length<1){dd.style.display='none';return;}
  const m=apps.filter(a=>a.name.toLowerCase().includes(q.toLowerCase())).slice(0,6);
  if(!m.length){dd.style.display='none';return;}
  dd.innerHTML=m.map(a=>`<a href="/de/${a.slug}-kuendigen/"><div class="app-icon">${a.emoji}</div>${a.name} kündigen</a>`).join('')+'<div class="hint">Enter drücken für alle Ergebnisse</div>';
  dd.style.display='block';
}
function goSearch(){const q=document.getElementById('hero-search').value.trim();if(q)window.location='/de/?q='+encodeURIComponent(q);}
function filterCat(cat,btn){
  document.querySelectorAll('.cat-btn').forEach(b=>b.classList.remove('active'));
  btn.classList.add('active');
  const pop=document.getElementById('pop-list');
  if(pop) pop.closest('.section').style.display=cat==='all'?'':'none';
  document.querySelectorAll('.app-card').forEach(card=>{
    card.style.display=cat==='all'||card.dataset.cat===cat||card.dataset.cat.startsWith(cat)?'':'none';
  });
}
function toggleFaq(el){const a=el.nextElementSibling;const o=el.classList.toggle('open');a.style.display=o?'block':'none';}
document.addEventListener('click',e=>{if(!e.target.closest('.search-wrap'))document.getElementById('hero-dropdown').style.display='none';});
const rf=document.getElementById('req-form');
if(rf)rf.addEventListener('submit',async function(e){
  e.preventDefault();const btn=this.querySelector('button');btn.disabled=true;btn.textContent='Wird gesendet…';
  try{const r=await fetch('/de/',{method:'POST',body:new FormData(this)});const j=await r.json();
    if(j.ok){this.style.display='none';document.getElementById('req-success').style.display='';}}
  catch(err){btn.disabled=false;btn.textContent='Anfrage senden →';}
});
</script>
</body>
</html>
