<?php
$page_title = "Comment Résilier un Abonnement — Guide complet 2025";
$page_desc  = "Guides étape par étape pour résilier vos abonnements : Netflix, Spotify, Canal+, Amazon Prime et plus encore. Simple et rapide.";

$apps = [
  ["slug"=>"canal-plus",       "name"=>"Canal+",           "cat"=>"streaming",    "vol"=>74000],
  ["slug"=>"free",             "name"=>"Free",              "cat"=>"telecom",      "vol"=>60000],
  ["slug"=>"sfr",              "name"=>"SFR",               "cat"=>"telecom",      "vol"=>55000],
  ["slug"=>"amazon-prime",     "name"=>"Amazon Prime",      "cat"=>"streaming",    "vol"=>49000],
  ["slug"=>"orange",           "name"=>"Orange",            "cat"=>"telecom",      "vol"=>45000],
  ["slug"=>"netflix",          "name"=>"Netflix",           "cat"=>"streaming",    "vol"=>40000],
  ["slug"=>"spotify",          "name"=>"Spotify",           "cat"=>"streaming",    "vol"=>33000],
  ["slug"=>"disney-plus",      "name"=>"Disney+",           "cat"=>"streaming",    "vol"=>28000],
  ["slug"=>"deezer",           "name"=>"Deezer",            "cat"=>"streaming",    "vol"=>22000],
  ["slug"=>"audible",          "name"=>"Audible",           "cat"=>"autre",        "vol"=>18000],
  ["slug"=>"hbo-max",          "name"=>"Max (HBO)",         "cat"=>"streaming",    "vol"=>15000],
  ["slug"=>"youtube-premium",  "name"=>"YouTube Premium",   "cat"=>"streaming",    "vol"=>14000],
  ["slug"=>"adobe",            "name"=>"Adobe",             "cat"=>"productivite", "vol"=>13000],
  ["slug"=>"chatgpt",          "name"=>"ChatGPT Plus",      "cat"=>"productivite", "vol"=>12000],
  ["slug"=>"canva",            "name"=>"Canva Pro",         "cat"=>"productivite", "vol"=>11000],
  ["slug"=>"apple-tv",         "name"=>"Apple TV+",         "cat"=>"streaming",    "vol"=>10000],
  ["slug"=>"crunchyroll",      "name"=>"Crunchyroll",       "cat"=>"streaming",    "vol"=>9500],
  ["slug"=>"hellofresh",       "name"=>"HelloFresh",        "cat"=>"autre",        "vol"=>8000],
  ["slug"=>"paramount-plus",   "name"=>"Paramount+",        "cat"=>"streaming",    "vol"=>7000],
  ["slug"=>"meetic",           "name"=>"Meetic",            "cat"=>"autre",        "vol"=>390],
  ["slug"=>"playstation-plus", "name"=>"PlayStation Plus",  "cat"=>"gaming",       "vol"=>320],
  ["slug"=>"nordvpn",          "name"=>"NordVPN",           "cat"=>"securite",     "vol"=>260],
  ["slug"=>"tinder",           "name"=>"Tinder",            "cat"=>"autre",        "vol"=>260],
  ["slug"=>"linkedin",         "name"=>"LinkedIn Premium",  "cat"=>"productivite", "vol"=>210],
  ["slug"=>"microsoft-365",    "name"=>"Microsoft 365",     "cat"=>"productivite", "vol"=>210],
  ["slug"=>"xbox-game-pass",   "name"=>"Xbox Game Pass",    "cat"=>"gaming",       "vol"=>110],
  ["slug"=>"google-one",       "name"=>"Google One",        "cat"=>"productivite", "vol"=>90],
  ["slug"=>"duolingo",         "name"=>"Duolingo Super",    "cat"=>"autre",        "vol"=>70],
  ["slug"=>"apple-music",      "name"=>"Apple Music",       "cat"=>"streaming",    "vol"=>50],
  ["slug"=>"apple-icloud",     "name"=>"iCloud+",           "cat"=>"productivite", "vol"=>50],
  ["slug"=>"bumble",           "name"=>"Bumble",            "cat"=>"autre",        "vol"=>50],
  ["slug"=>"zoom",             "name"=>"Zoom",              "cat"=>"productivite", "vol"=>20],
  ["slug"=>"dropbox",          "name"=>"Dropbox",           "cat"=>"productivite", "vol"=>20],
  ["slug"=>"babbel",           "name"=>"Babbel",            "cat"=>"autre",        "vol"=>20],
];

usort($apps, fn($a,$b) => $b['vol'] - $a['vol']);

$pop = array_slice($apps, 0, 6);

// Handle AJAX form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_ajax'])) {
  header('Content-Type: application/json');
  $service = htmlspecialchars(trim($_POST['service'] ?? ''));
  $issue   = htmlspecialchars(trim($_POST['issue']   ?? ''));
  $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
  if ($service && $issue) {
    $line = date('Y-m-d H:i:s') . " | FR | " . $service . " | " . $issue . " | " . ($email ?: 'no email') . "\n";
    file_put_contents(__DIR__ . '/../guide_requests.txt', $line, FILE_APPEND);
    if ($email) {
      $to      = 'hello@britetodo.com';
      $subject = "FR Guide Request: $service";
      $body    = "Service: $service\nIssue: $issue\nEmail: $email";
      $headers = "From: noreply@howtocancelsubscription.com\r\nReply-To: $email";
      mail($to, $subject, $body, $headers);
    }
    echo json_encode(['ok' => true]);
  } else {
    echo json_encode(['ok' => false, 'error' => 'Champs manquants']);
  }
  exit;
}

$cat_labels = [
  'all'         => 'Tous',
  'streaming'   => 'Streaming',
  'telecom'     => 'Télécom',
  'productivite'=> 'Productivité',
  'autre'       => 'Autre',
];

$icons = [
  'canal-plus'      => '📺',
  'free'            => '📡',
  'sfr'             => '📡',
  'amazon-prime'    => '📦',
  'orange'          => '🍊',
  'netflix'         => '🎬',
  'spotify'         => '🎵',
  'disney-plus'     => '🏰',
  'deezer'          => '🎶',
  'audible'         => '🎧',
  'hbo-max'         => '🎭',
  'youtube-premium' => '▶️',
  'adobe'           => '🎨',
  'chatgpt'         => '🤖',
  'canva'           => '✏️',
  'apple-tv'        => '🍎',
  'crunchyroll'     => '⛩️',
  'hellofresh'      => '🥗',
  'paramount-plus'  => '⛰️',
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $page_title ?></title>
<meta name="description" content="<?= $page_desc ?>">
<link rel="canonical" href="https://howtocancelsubscription.com/fr/">
<link rel="alternate" hreflang="en" href="https://howtocancelsubscription.com/">
<link rel="alternate" hreflang="de" href="https://howtocancelsubscription.com/de/">
<link rel="alternate" hreflang="fr" href="https://howtocancelsubscription.com/fr/">
<link rel="alternate" hreflang="x-default" href="https://howtocancelsubscription.com/">
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"WebSite",
  "name":"Comment Résilier un Abonnement",
  "url":"https://howtocancelsubscription.com/fr/",
  "description":"<?= $page_desc ?>",
  "inLanguage":"fr"
}
</script>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',sans-serif;background:#f8f9fa;color:#1a1a1a}
header{background:linear-gradient(135deg,#1a56db,#0e3fa0);color:#fff;padding:48px 20px 40px;text-align:center}
header h1{font-size:clamp(1.6rem,4vw,2.4rem);font-weight:800;margin-bottom:10px}
header p{font-size:1.05rem;opacity:.88;max-width:560px;margin:0 auto}
.lang-switch{position:absolute;top:16px;right:20px;display:flex;gap:8px}
.lang-switch a{color:rgba(255,255,255,.7);text-decoration:none;font-size:.85rem;padding:4px 8px;border-radius:4px;transition:background .2s}
.lang-switch a:hover,.lang-switch a.active{background:rgba(255,255,255,.2);color:#fff}
.section{max-width:900px;margin:36px auto;padding:0 16px}
.section-title{font-size:1.25rem;font-weight:700;margin-bottom:18px;color:#1a1a1a}
.cat-tabs{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:20px}
.cat-btn{background:#fff;border:1.5px solid #dde;border-radius:20px;padding:6px 16px;font-size:.88rem;cursor:pointer;transition:all .2s;font-weight:500}
.cat-btn.active,.cat-btn:hover{background:#1a56db;color:#fff;border-color:#1a56db}
.pop-list{display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:12px;margin-bottom:24px}
.pop-item{background:#fff;border-radius:12px;padding:16px 12px;text-align:center;box-shadow:0 1px 4px rgba(0,0,0,.07);text-decoration:none;color:#1a1a1a;transition:transform .15s,box-shadow .15s}
.pop-item:hover{transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,.1)}
.pop-item .icon{font-size:2rem;margin-bottom:8px}
.pop-item .name{font-size:.82rem;font-weight:600}
.pop-item .vol{font-size:.72rem;color:#888;margin-top:2px}
.app-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:12px}
.app-card{background:#fff;border-radius:12px;padding:16px 12px;text-align:center;box-shadow:0 1px 4px rgba(0,0,0,.07);text-decoration:none;color:#1a1a1a;transition:transform .15s,box-shadow .15s}
.app-card:hover{transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,.1)}
.app-card .icon{font-size:1.8rem;margin-bottom:8px}
.app-card .name{font-size:.84rem;font-weight:600}
.cta-box{background:linear-gradient(135deg,#1a56db,#0e3fa0);border-radius:16px;padding:28px 24px;text-align:center;color:#fff;margin:32px auto;max-width:900px;margin-left:auto;margin-right:auto;padding-left:16px;padding-right:16px}
.cta-box h2{font-size:1.3rem;font-weight:700;margin-bottom:8px}
.cta-box p{opacity:.88;margin-bottom:18px;font-size:.95rem}
.cta-btn{display:inline-block;background:#fff;color:#1a56db;padding:12px 28px;border-radius:10px;font-weight:700;text-decoration:none;font-size:.95rem}
.req-box{background:#fff;border-radius:16px;padding:28px 24px;box-shadow:0 2px 8px rgba(0,0,0,.07);max-width:900px;margin:0 auto}
.req-box h2{font-size:1.1rem;font-weight:700;margin-bottom:16px}
.req-form input,.req-form textarea,.req-form select{width:100%;border:1.5px solid #dde;border-radius:8px;padding:10px 12px;font-size:.92rem;margin-bottom:12px;font-family:inherit;background:#fafbfc}
.req-form textarea{resize:vertical;min-height:80px}
.req-form button{background:#1a56db;color:#fff;border:none;border-radius:8px;padding:11px 24px;font-size:.95rem;font-weight:600;cursor:pointer;width:100%}
.req-form button:hover{background:#174bb5}
.req-msg{display:none;margin-top:12px;padding:10px 14px;border-radius:8px;font-size:.9rem;background:#e8f5e9;color:#2e7d32;text-align:center}
.faq-section{max-width:900px;margin:0 auto;padding:0 16px}
.faq-item{background:#fff;border-radius:12px;margin-bottom:10px;box-shadow:0 1px 4px rgba(0,0,0,.06);overflow:hidden}
.faq-q{padding:16px 20px;font-weight:600;cursor:pointer;display:flex;justify-content:space-between;align-items:center;font-size:.95rem}
.faq-q::after{content:'+';font-size:1.2rem;color:#1a56db}
.faq-item.open .faq-q::after{content:'−'}
.faq-a{display:none;padding:0 20px 16px;color:#555;font-size:.9rem;line-height:1.6}
.faq-item.open .faq-a{display:block}
.seo-text{max-width:900px;margin:0 auto;padding:0 16px;color:#555;font-size:.9rem;line-height:1.7}
.seo-text h2{font-size:1.1rem;font-weight:700;color:#1a1a1a;margin-bottom:10px}
.seo-text p{margin-bottom:12px}
footer{text-align:center;padding:30px 20px;color:#888;font-size:.82rem;border-top:1px solid #eee;margin-top:48px}
footer a{color:#1a56db;text-decoration:none}
@media(max-width:600px){.pop-list,.app-grid{grid-template-columns:repeat(2,1fr)}}
</style>
</head>
<body>

<header style="position:relative">
  <div class="lang-switch">
    <a href="/">EN</a>
    <a href="/de/">DE</a>
    <a href="/fr/" class="active">FR</a>
  </div>
  <h1>Comment résilier un abonnement</h1>
  <p>Guides étape par étape pour annuler vos abonnements facilement — sans attente, sans stress.</p>
</header>

<div class="section">
  <div class="cat-tabs">
    <?php foreach ($cat_labels as $k => $label): ?>
    <button class="cat-btn<?= $k==='all' ? ' active' : '' ?>" onclick="filterCat('<?= $k ?>',this)"><?= $label ?></button>
    <?php endforeach; ?>
  </div>

  <div class="section-title pop-section-title">Les plus recherchés</div>
  <div class="pop-list">
    <?php foreach ($pop as $a): ?>
    <a href="/fr/resilier-<?= $a['slug'] ?>/" class="pop-item">
      <div class="icon"><?= $icons[$a['slug']] ?? '📱' ?></div>
      <div class="name"><?= $a['name'] ?></div>
      <div class="vol"><?= number_format($a['vol']/1000,0) ?>K/mois</div>
    </a>
    <?php endforeach; ?>
  </div>

  <div class="section-title" style="margin-top:28px">Tous les guides</div>
  <div class="app-grid">
    <?php foreach ($apps as $a): ?>
    <a href="/fr/resilier-<?= $a['slug'] ?>/" class="app-card" data-cat="<?= $a['cat'] ?>">
      <div class="icon"><?= $icons[$a['slug']] ?? '📱' ?></div>
      <div class="name"><?= $a['name'] ?></div>
    </a>
    <?php endforeach; ?>
  </div>
</div>

<div class="section">
  <div class="cta-box">
    <h2>Gérez tous vos abonnements en un clic</h2>
    <p>L'application gratuite qui vous montre tous vos abonnements actifs et vous aide à les résilier facilement.</p>
    <a href="https://apps.apple.com/us/app/cancel-subscriptions-app/id6759456590" class="cta-btn">Télécharger gratuitement</a>
  </div>
</div>

<div class="section">
  <div class="req-box">
    <h2>Vous ne trouvez pas votre guide ?</h2>
    <form class="req-form" id="req-form">
      <input type="hidden" name="_ajax" value="1">
      <input type="text" name="service" placeholder="Nom du service (ex. Canal+)" required>
      <textarea name="issue" placeholder="Décrivez votre problème" required></textarea>
      <input type="email" name="email" placeholder="Votre e-mail (facultatif)">
      <button type="submit">Envoyer la demande</button>
      <div class="req-msg" id="req-msg">Merci ! Nous créerons votre guide sous 24 h.</div>
    </form>
  </div>
</div>

<div class="faq-section" style="margin-top:32px">
  <div class="section-title">Questions fréquentes</div>

  <?php $faqs = [
    ["Comment résilier un abonnement sur iPhone ?",
     "Ouvrez Réglages → votre nom → Abonnements. Sélectionnez l'abonnement et appuyez sur « Annuler l'abonnement ». La résiliation prend effet à la fin de la période payée."],
    ["Comment résilier Canal+ ?",
     "Appelez le 0 892 39 39 10 ou connectez-vous sur moncompte.canalplus.com. Vous pouvez aussi envoyer un courrier recommandé. Respectez le préavis d'un mois."],
    ["Comment résilier un abonnement Free ?",
     "Rendez-vous sur espace.free.fr (Freebox) ou mobile.free.fr (Free Mobile) → Mon compte → Gérer mon abonnement → Résilier. La résiliation est immédiate pour le mobile, sous 10 jours pour la Freebox."],
    ["Qu'est-ce que le délai de rétractation de 14 jours ?",
     "En France, vous avez 14 jours pour vous rétracter d'un abonnement souscrit en ligne. Passé ce délai, vous êtes lié au contrat et devez respecter le préavis prévu."],
    ["Comment résilier un abonnement Google Play ?",
     "Ouvrez l'application Google Play → icône de profil → Paiements et abonnements → Abonnements. Sélectionnez l'abonnement et appuyez sur « Annuler l'abonnement »."],
    ["Puis-je résilier Netflix à tout moment ?",
     "Oui. Connectez-vous sur netflix.com → Compte → Annuler l'abonnement. Vous conservez l'accès jusqu'à la fin de la période payée. Aucun préavis requis."],
  ]; ?>

  <?php foreach ($faqs as $i => $faq): ?>
  <div class="faq-item" id="faq<?= $i ?>">
    <div class="faq-q" onclick="toggleFaq(<?= $i ?>)"><?= $faq[0] ?></div>
    <div class="faq-a"><?= $faq[1] ?></div>
  </div>
  <?php endforeach; ?>
</div>

<div class="seo-text section" style="margin-top:32px">
  <h2>Résilier un abonnement en France — ce qu'il faut savoir</h2>
  <p>En France, la loi Chatel et la loi Hamon encadrent strictement les résiliations d'abonnements. Les opérateurs télécoms (Free, SFR, Orange, Bouygues) doivent vous permettre de résilier à tout moment après 12 mois d'engagement, avec un préavis de 10 jours. Pour les services en ligne comme Netflix ou Spotify, la résiliation est instantanée depuis l'espace client.</p>
  <p>Pour les abonnements aux box internet ou téléphonie, pensez à demander votre numéro RIO (composez le 3179) si vous souhaitez changer d'opérateur : cela permet la portabilité de votre numéro et accélère la procédure. Canal+ et d'autres services premium peuvent exiger un courrier recommandé avec accusé de réception.</p>
  <p>Nos guides détaillent les étapes précises pour chaque service : numéros de téléphone, liens directs vers les espaces client, délais à respecter et astuces pour éviter les frais de résiliation anticipée.</p>
</div>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {"@type":"Question","name":"Comment résilier un abonnement sur iPhone ?","acceptedAnswer":{"@type":"Answer","text":"Ouvrez Réglages → votre nom → Abonnements. Sélectionnez l'abonnement et appuyez sur Annuler l'abonnement."}},
    {"@type":"Question","name":"Comment résilier Canal+ ?","acceptedAnswer":{"@type":"Answer","text":"Appelez le 0 892 39 39 10 ou connectez-vous sur moncompte.canalplus.com. Respectez le préavis d'un mois."}},
    {"@type":"Question","name":"Qu'est-ce que le délai de rétractation de 14 jours ?","acceptedAnswer":{"@type":"Answer","text":"En France, vous avez 14 jours pour vous rétracter d'un abonnement souscrit en ligne."}}
  ]
}
</script>

<footer>
  <p>&copy; 2025 HowToCancelSubscription.com &mdash; <a href="/privacy-policy/">Politique de confidentialité</a> &mdash; <a href="/contact/">Contact</a></p>
  <p style="margin-top:6px">Ce site n'est pas affilié aux services mentionnés.</p>
</footer>

<script>
function filterCat(cat, btn) {
  document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  // Show/hide "Most searched" section
  const popTitle = document.querySelector('.pop-section-title');
  const popList  = document.querySelector('.pop-list');
  if (popTitle) popTitle.style.display = cat === 'all' ? '' : 'none';
  if (popList)  popList.style.display  = cat === 'all' ? '' : 'none';
  document.querySelectorAll('.app-card').forEach(card => {
    const show = cat === 'all' || card.dataset.cat === cat;
    card.style.display = show ? '' : 'none';
  });
}

function toggleFaq(i) {
  const el = document.getElementById('faq' + i);
  el.classList.toggle('open');
}

document.getElementById('req-form').addEventListener('submit', async function(e) {
  e.preventDefault();
  const btn = this.querySelector('button');
  btn.disabled = true;
  btn.textContent = 'Envoi...';
  try {
    const res = await fetch('/fr/', {method:'POST', body: new FormData(this)});
    const data = await res.json();
    if (data.ok) {
      const msg = document.getElementById('req-msg');
      msg.style.display = 'block';
      this.reset();
    }
  } catch(err) {}
  btn.disabled = false;
  btn.textContent = 'Envoyer la demande';
});
</script>

</body>
</html>
