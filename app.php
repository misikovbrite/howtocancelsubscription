<?php
$site_url = "https://howtocancelsubscription.com";

// ── App data ────────────────────────────────────────────────────────────────
$apps_data = [
  "netflix" => [
    "name"     => "Netflix",
    "emoji"    => "🎬",
    "color"    => "#E50914",
    "tagline"  => "Cancel in 2 clicks — no phone call needed",
    "about"    => "Netflix charges your credit card automatically each month. You can cancel anytime online — your access continues until the end of the billing period.",
    "refund"   => "Netflix does not offer refunds for partial billing periods. You keep access until your current period ends.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>Settings</strong> app on your iPhone",
          "Tap your <strong>name</strong> at the top",
          "Tap <strong>Subscriptions</strong>",
          "Find and tap <strong>Netflix</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong> — you're done",
        ],
        "note"  => "This only works if you subscribed via the App Store. If you signed up on netflix.com, cancel there instead.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open the <strong>Google Play Store</strong>",
          "Tap your <strong>profile picture</strong> in the top right",
          "Tap <strong>Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Netflix</strong>",
          "Tap <strong>Cancel subscription</strong>",
          "Follow the prompts to confirm",
        ],
        "note"  => "Only works if you subscribed through Google Play. Otherwise, cancel at netflix.com.",
      ],
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>netflix.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>Account</strong>",
          "Under \"Membership\", click <strong>Cancel Membership</strong>",
          "Click <strong>Finish Cancellation</strong>",
          "You'll see a confirmation — keep the email as proof",
        ],
        "note"  => "This is the most reliable method and works regardless of how you originally signed up.",
      ],
    ],
    "after_cancel" => [
      "You keep Netflix access until the end of your current billing period",
      "Your viewing history and profiles are saved for 10 months",
      "You can re-subscribe any time and pick up where you left off",
      "No cancellation fee — Netflix is month-to-month",
    ],
    "faq" => [
      ["Can I get a refund after cancelling Netflix?",
       "Netflix doesn't offer refunds for unused days in a billing period. If you were charged recently and want a refund, contact Netflix support — they sometimes make exceptions for accidental charges."],
      ["What happens to my Netflix profiles when I cancel?",
       "Your profiles, viewing history, and My List are saved for 10 months. If you resubscribe within that time, everything will be restored."],
      ["Can I pause Netflix instead of cancelling?",
       "Yes! Netflix offers a subscription pause option. Go to Account → Pause Membership. You can pause for 1–3 months."],
      ["I cancelled but I'm still being charged — what do I do?",
       "Check that you cancelled in the right place (App Store, Google Play, or netflix.com). Each has a separate subscription. Contact your bank if charges continue after the billing period ends."],
    ],
    "related" => ["hulu", "spotify", "disney-plus", "amazon-prime"],
  ],

  "hulu" => [
    "name"     => "Hulu",
    "emoji"    => "📺",
    "color"    => "#1CE783",
    "tagline"  => "Cancel online in under 2 minutes",
    "about"    => "Hulu offers multiple plan tiers including ad-supported, ad-free, and Live TV bundles. You can cancel any Hulu plan online without calling customer support.",
    "refund"   => "Hulu does not provide refunds for the current billing period. Access continues until the period ends.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>hulu.com</strong> and sign in",
          "Click your <strong>profile name</strong> in the top right",
          "Click <strong>Account</strong>",
          "Scroll to \"Your Subscription\" and click <strong>Cancel</strong>",
          "Click <strong>Continue to Cancel</strong>",
          "Select a reason and click <strong>Cancel Subscription</strong>",
          "You'll receive a confirmation email",
        ],
        "note"  => "The fastest and most reliable way to cancel Hulu.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings</strong> on your iPhone",
          "Tap your <strong>Apple ID name</strong> at the top",
          "Tap <strong>Subscriptions</strong>",
          "Tap <strong>Hulu</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed through the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store</strong>",
          "Tap your <strong>profile icon → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Hulu</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed through Google Play.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of your billing period",
      "Your watchlist and account data are saved for 30 days",
      "Live TV add-on is also cancelled if included in your plan",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Can I cancel Hulu Live TV separately from regular Hulu?",
       "Yes — Hulu Live TV and regular Hulu are billed as one subscription but you can downgrade from Live TV to a base plan by going to Account → Your Subscription → Change Plan."],
      ["I'm being charged by Disney+ for Hulu — where do I cancel?",
       "If you have the Disney Bundle (Disney+, Hulu, ESPN+), you must cancel the entire bundle through your Disney+ account settings."],
      ["Will I lose my Hulu watchlist when I cancel?",
       "Your watchlist and viewing history are saved for 30 days. If you resubscribe within that window, everything is restored."],
    ],
    "related" => ["netflix", "disney-plus", "espn-plus", "youtube-tv"],
  ],

  "spotify" => [
    "name"     => "Spotify",
    "emoji"    => "🎵",
    "color"    => "#1DB954",
    "tagline"  => "Downgrade to free — keep your playlists forever",
    "about"    => "Cancelling Spotify Premium downgrades you to the free tier — you never lose your playlists or saved songs. You can cancel any time without penalty.",
    "refund"   => "Spotify doesn't offer refunds for unused Premium time. You keep Premium until your billing date.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>spotify.com</strong> and log in",
          "Click your <strong>profile name</strong> → <strong>Account</strong>",
          "Scroll to \"Your plan\" and click <strong>Change plan</strong>",
          "Scroll down to \"Spotify Free\" and click <strong>Cancel Premium</strong>",
          "Click <strong>Yes, cancel</strong> to confirm",
        ],
        "note"  => "The web browser method works for all Spotify accounts.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Spotify</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Spotify</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "You keep Spotify Premium until your next billing date",
      "After that you switch to Spotify Free — with ads",
      "All your playlists, liked songs, and podcasts are kept forever",
      "Offline downloads are removed when Premium ends",
    ],
    "faq" => [
      ["Do I lose my playlists when I cancel Spotify Premium?",
       "No — your playlists, liked songs, and followed podcasts are permanently saved on your account. You lose offline downloads and shuffle-free listening, but your library stays intact."],
      ["Can I pause Spotify Premium instead of cancelling?",
       "Spotify doesn't offer a pause option. You can cancel and resubscribe later — your data will be waiting."],
      ["I cancelled but Spotify is still charging me",
       "Make sure you cancelled in the right place (spotify.com, App Store, or Google Play). If you signed up through Spotify.com but cancelled in the App Store, the charge continues. Check all three."],
    ],
    "related" => ["netflix", "audible", "amazon-music", "calm"],
  ],

  "amazon-prime" => [
    "name"     => "Amazon Prime",
    "emoji"    => "📦",
    "color"    => "#FF9900",
    "tagline"  => "Cancel auto-renewal or end membership immediately",
    "about"    => "Amazon Prime includes free shipping, Prime Video, Prime Music, and more. You can end your membership immediately (with a prorated refund if unused) or turn off auto-renewal.",
    "refund"   => "Amazon offers a prorated refund if you cancel and haven't used Prime benefits in the current period. Go to Account → Prime → End Membership to see refund eligibility.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>amazon.com</strong> and sign in",
          "Hover over <strong>Account &amp; Lists</strong> → click <strong>Account</strong>",
          "Click <strong>Prime</strong> (or go to amazon.com/mc/pipeline/membership)",
          "Click <strong>Manage membership</strong>",
          "Click <strong>End membership</strong>",
          "Choose: <strong>End Now</strong> (possible refund) or <strong>End on renewal date</strong>",
          "Confirm your choice",
        ],
        "note"  => "Choose 'End Now' if you haven't used Prime this month — you may get a refund.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>Amazon Shopping</strong> app",
          "Tap the <strong>profile icon</strong> → <strong>Your Account</strong>",
          "Tap <strong>Manage Prime Membership</strong>",
          "Tap <strong>End Membership</strong> and confirm",
        ],
        "note"  => "Amazon Prime is not managed through Apple Subscriptions — always cancel via the Amazon app or website.",
      ],
    ],
    "after_cancel" => [
      "If you choose 'End Now' you may get a partial refund",
      "Prime Video, Music, and free shipping stop immediately or on renewal date",
      "Amazon Fresh and Whole Foods discounts are also removed",
      "Alexa features tied to Prime continue to work",
    ],
    "faq" => [
      ["Can I get a refund when I cancel Amazon Prime?",
       "Yes — Amazon offers a partial refund if you cancel Prime and haven't used any Prime benefits (free shipping, Prime Video, etc.) in the current billing period. The refund is prorated."],
      ["Does cancelling Amazon Prime cancel Prime Video?",
       "Yes — Prime Video is included in Amazon Prime. Cancelling Prime cancels Prime Video access too. You can keep Prime Video as a standalone subscription separately."],
      ["How do I cancel Amazon Prime free trial?",
       "Same process — go to Account → Prime → End Membership → End Now. Free trial cancellations always take effect immediately with no charge."],
    ],
    "related" => ["netflix", "audible", "kindle-unlimited", "amazon-music"],
  ],

  "adobe" => [
    "name"     => "Adobe",
    "emoji"    => "🖌️",
    "color"    => "#FF0000",
    "tagline"  => "Avoid the early cancellation fee — timing matters",
    "about"    => "Adobe Creative Cloud plans have a 14-day cancellation window without fees. After that, cancelling an annual plan early costs 50% of remaining months. Month-to-month plans can be cancelled anytime.",
    "refund"   => "Annual plans: 50% early termination fee on remaining balance. Cancel within 14 days of purchase for a full refund. Month-to-month: no fee.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.adobe.com</strong> and sign in",
          "Click <strong>Plans</strong> in the top navigation",
          "Find your Creative Cloud plan and click <strong>Manage plan</strong>",
          "Click <strong>Cancel plan</strong>",
          "Read the early termination fee information carefully",
          "Select a cancellation reason and click <strong>Continue</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "⚠️ If you're on an annual plan and it's been more than 14 days, you'll be charged 50% of remaining months. Consider waiting until renewal.",
      ],
    ],
    "after_cancel" => [
      "Access to Creative Cloud apps continues until the end of the billing period",
      "Cloud storage drops to 2 GB — download your files first",
      "Creative Cloud desktop app and synced files may be removed",
      "Free apps (Acrobat Reader, Adobe Express) remain accessible",
    ],
    "faq" => [
      ["How do I avoid the Adobe early cancellation fee?",
       "Cancel within 14 days of your plan start or renewal date for a full refund with no fee. If more than 14 days have passed, wait until your plan renews and then cancel immediately to avoid the 50% fee."],
      ["Can I downgrade Adobe instead of cancelling?",
       "Yes — you can switch from All Apps to a single-app plan (e.g., Photoshop only) which is cheaper. Go to account.adobe.com → Plans → Change plan."],
      ["What happens to my Adobe Cloud storage when I cancel?",
       "Your storage is reduced to 2 GB free tier. Download your files before cancelling — files over the 2 GB limit may be deleted after 90 days."],
    ],
    "related" => ["canva", "chatgpt", "microsoft-365", "grammarly"],
  ],

  "canva" => [
    "name"     => "Canva",
    "emoji"    => "🎨",
    "color"    => "#7D2AE8",
    "tagline"  => "Cancel Canva Pro anytime — keep your designs forever",
    "about"    => "Canva Pro can be cancelled at any time. Your designs and files remain accessible on the free plan after cancellation.",
    "refund"   => "Canva offers refunds within 30 days of purchase if you haven't used premium features. Contact support for refund requests.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>canva.com</strong> and sign in",
          "Click your <strong>profile picture</strong> in the top right",
          "Click <strong>Account settings</strong>",
          "Click <strong>Billing &amp; plans</strong> in the left menu",
          "Under your current plan, click <strong>Cancel plan</strong>",
          "Select a reason and click <strong>Continue cancellation</strong>",
          "Confirm to finish",
        ],
        "note"  => "Your free account stays active and all your designs are kept.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Canva</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "All your designs stay accessible on the free plan",
      "Premium templates you used remain in your designs (not editable)",
      "Pro features (resize, background remover, brand kit) are disabled",
      "You can resubscribe at any time to regain Pro features",
    ],
    "faq" => [
      ["Do I lose my Canva designs when I cancel Pro?",
       "No — all your designs are permanently saved in your free account. You just lose access to Pro features like Magic Resize, Background Remover, and the full template library."],
      ["Can I cancel Canva Pro and get a refund?",
       "Canva offers refunds within 30 days for annual plans if you haven't used premium features. Contact Canva support through the Help Center to request one."],
    ],
    "related" => ["adobe", "chatgpt", "grammarly", "microsoft-365"],
  ],
];

// ── Routing ──────────────────────────────────────────────────────────────────
$slug = $_GET['app'] ?? '';
$app  = $apps_data[$slug] ?? null;

// All apps list for related/suggestions
$all_apps = [
  ["Hulu","hulu"],["FuboTV","fubotv"],["Amazon Prime","amazon-prime"],
  ["Netflix","netflix"],["Spotify","spotify"],["Canva","canva"],
  ["ChatGPT","chatgpt"],["Disney+","disney-plus"],["Adobe","adobe"],
  ["Peacock","peacock"],["Experian","experian"],["Apple TV+","apple-tv"],
  ["Audible","audible"],["Norton","norton"],["Microsoft 365","microsoft-365"],
  ["Tinder","tinder"],["HelloFresh","hellofresh"],["Calm","calm"],
  ["Grammarly","grammarly"],["SiriusXM","siriusxm"],["Starz","starz"],
  ["ESPN+","espn-plus"],["HBO Max","hbo-max"],["Paramount+","paramount-plus"],
  ["Kindle Unlimited","kindle-unlimited"],["DoorDash","doordash"],
  ["Duolingo","duolingo"],["Bumble","bumble"],["Amazon Music","amazon-music"],
];

// ── Audit form handler ────────────────────────────────────────────────────────
$audit_success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['audit_email'])) {
  $audit_email = trim(strip_tags($_POST['audit_email'] ?? ''));
  $audit_subs  = trim(strip_tags($_POST['audit_subs']  ?? ''));
  $audit_budget= trim(strip_tags($_POST['audit_budget']?? ''));
  if ($audit_email && $audit_subs) {
    // Save to file
    $log = date('Y-m-d H:i:s') . "\n"
         . "Email: $audit_email\n"
         . "Budget: $audit_budget/mo\n"
         . "Subscriptions:\n$audit_subs\n"
         . "Page: " . ($slug ?: 'homepage') . "\n"
         . str_repeat('-', 40) . "\n";
    file_put_contents(__DIR__ . '/audit_requests.txt', $log, FILE_APPEND | LOCK_EX);

    // Email to admin
    $to      = 'britetodo@gmail.com';
    $subject = "New Subscription Audit Request — $audit_email";
    $body    = "New audit request from howtocancelsubscription.com\n\n"
             . "From: $audit_email\n"
             . "Monthly budget: $audit_budget\n"
             . "Page: " . ($slug ?: 'homepage') . "\n\n"
             . "Their subscriptions:\n$audit_subs\n";
    $headers = "From: noreply@howtocancelsubscription.com\r\nReply-To: $audit_email";
    @mail($to, $subject, $body, $headers);

    $audit_success = true;
  }
}

if (!$app) {
  http_response_code(404);
}
$platforms_count = $app ? count($app['platforms']) : 0;
$platform_names  = $app ? implode(', ', array_map(fn($p) => $p['label'], $app['platforms'])) : '';
$title    = $app ? "How to Cancel {$app['name']} Subscription — Step-by-Step Guide" : "Page Not Found";
$desc     = $app ? "How to cancel {$app['name']} on {$platform_names} — step-by-step. {$app['tagline']}. Free guide, takes 2 minutes." : "";
$canon    = $app ? "$site_url/how-to-cancel-$slug-subscription/" : "$site_url/";
$platforms = $app ? array_values($app['platforms']) : [];
$first_key = $app ? array_keys($app['platforms'])[0] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
  <?php if ($app): ?>
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <link rel="canonical" href="<?= $canon ?>">
  <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:url" content="<?= $canon ?>">
  <meta property="og:image" content="<?= $site_url ?>/icon_192.png?v=2">
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"HowTo",
    "name":"How to Cancel <?= htmlspecialchars($app['name']) ?> Subscription",
    "description":"<?= addslashes($desc) ?>",
    "totalTime":"PT2M",
    "tool":{"@type":"HowToTool","name":"Web browser or smartphone"},
    "step":[<?php
      $first = reset($app['platforms']);
      echo implode(',', array_map(fn($s,$i) =>
        '{"@type":"HowToStep","position":'.($i+1).',"name":"Step '.($i+1).'","text":'.json_encode(strip_tags($s)).'}',
        $first['steps'], array_keys($first['steps'])
      ));
    ?>]
  }
  </script>
  <?php if (!empty($app['faq'])): ?>
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"FAQPage",
    "mainEntity":[<?php
      echo implode(',', array_map(fn($faq) =>
        '{"@type":"Question","name":'.json_encode($faq[0]).',"acceptedAnswer":{"@type":"Answer","text":'.json_encode($faq[1]).'}}'
      , $app['faq']));
    ?>]
  }
  </script>
  <?php endif; ?>
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"BreadcrumbList",
    "itemListElement":[
      {"@type":"ListItem","position":1,"name":"Home","item":"<?= $site_url ?>"},
      {"@type":"ListItem","position":2,"name":"How to Cancel <?= htmlspecialchars($app['name']) ?> Subscription","item":"<?= $canon ?>"}
    ]
  }
  </script>
  <?php endif; ?>
  <link rel="icon" href="/favicon.ico?v=2" sizes="any">
  <link rel="apple-touch-icon" href="/icon_180.png?v=2">
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;background:#f4f6f9;color:#1a1f2e}
    a{color:inherit;text-decoration:none}

    /* Header */
    .header{background:#1a1f2e;color:#fff;padding:0 24px;height:54px;display:flex;align-items:center;gap:12px;position:sticky;top:0;z-index:100;box-shadow:0 2px 8px rgba(0,0,0,.25)}
    .logo{font-size:17px;font-weight:800;color:#fff;display:flex;align-items:center;gap:8px}
    .logo span{color:#ff5c5c}
    .back-btn{margin-left:auto;background:rgba(255,255,255,.1);color:rgba(255,255,255,.8);padding:7px 14px;border-radius:8px;font-size:13px;font-weight:600;display:flex;align-items:center;gap:6px;transition:background .15s}
    .back-btn:hover{background:rgba(255,255,255,.18);color:#fff}

    /* Audit banner */
    .audit-bar{background:linear-gradient(90deg,#fff7f7 0%,#fff 100%);border-bottom:1.5px solid #ffe0e0}
    .audit-bar .inner{max-width:760px;margin:0 auto;padding:16px 20px;display:flex;align-items:center;gap:14px;flex-wrap:wrap}
    .audit-bar .audit-left{flex:1;min-width:200px}
    .audit-bar .audit-left .tag{font-size:10px;font-weight:800;letter-spacing:.7px;color:#ff5c5c;text-transform:uppercase;margin-bottom:3px}
    .audit-bar .audit-left strong{font-size:15px;font-weight:800;color:#1a1f2e;display:block;margin-bottom:2px}
    .audit-bar .audit-left span{font-size:13px;color:#666}
    .audit-bar .audit-cta{background:#ff5c5c;color:#fff;border:none;padding:10px 20px;border-radius:10px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;transition:background .15s;display:flex;align-items:center;gap:6px}
    .audit-bar .audit-cta:hover{background:#ff3b3b}

    /* Audit modal */
    .audit-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:500;align-items:center;justify-content:center;padding:20px}
    .audit-overlay.open{display:flex}
    .audit-modal{background:#fff;border-radius:20px;padding:28px;max-width:480px;width:100%;position:relative;max-height:90vh;overflow-y:auto}
    .audit-modal h2{font-size:20px;font-weight:800;color:#1a1f2e;margin-bottom:6px}
    .audit-modal .sub{font-size:14px;color:#666;margin-bottom:20px;line-height:1.5}
    .audit-modal .close{position:absolute;top:16px;right:16px;background:#f4f6f9;border:none;width:32px;height:32px;border-radius:50%;cursor:pointer;font-size:16px;display:flex;align-items:center;justify-content:center;color:#555}
    .audit-modal .close:hover{background:#e0e3ed}
    .audit-modal label{display:block;font-size:13px;font-weight:700;color:#1a1f2e;margin-bottom:5px;margin-top:14px}
    .audit-modal input,.audit-modal textarea,.audit-modal select{width:100%;padding:10px 14px;border:1.5px solid #e0e3ed;border-radius:10px;font-size:14px;outline:none;transition:border-color .15s;font-family:inherit}
    .audit-modal input:focus,.audit-modal textarea:focus{border-color:#ff5c5c}
    .audit-modal textarea{resize:vertical;min-height:90px}
    .audit-modal .hint{font-size:12px;color:#999;margin-top:4px}
    .audit-modal .submit-btn{width:100%;background:#ff5c5c;color:#fff;border:none;padding:13px;border-radius:12px;font-size:15px;font-weight:800;cursor:pointer;margin-top:20px;transition:background .15s}
    .audit-modal .submit-btn:hover{background:#ff3b3b}
    .audit-success{text-align:center;padding:16px 0}
    .audit-success .big{font-size:48px;margin-bottom:12px}
    .audit-success h3{font-size:20px;font-weight:800;color:#1a1f2e;margin-bottom:8px}
    .audit-success p{font-size:14px;color:#666;line-height:1.6}

    /* Wrap */
    .wrap{max-width:760px;margin:0 auto;padding:0 20px}

    /* Breadcrumb */
    .breadcrumb{padding:14px 20px;max-width:760px;margin:0 auto;font-size:13px;color:#888;display:flex;align-items:center;gap:6px;flex-wrap:wrap}
    .breadcrumb a{color:#888;transition:color .15s}
    .breadcrumb a:hover{color:#ff5c5c}
    .breadcrumb .sep{color:#ccc}

    /* App hero */
    .app-hero{background:#fff;border-radius:16px;padding:24px;margin-bottom:20px;display:flex;gap:20px;align-items:flex-start;box-shadow:0 1px 6px rgba(0,0,0,.06)}
    .app-hero .app-icon{width:72px;height:72px;border-radius:18px;display:flex;align-items:center;justify-content:center;font-size:38px;flex-shrink:0}
    .app-hero .info h1{font-size:clamp(20px,4vw,28px);font-weight:800;color:#1a1f2e;margin-bottom:6px;line-height:1.2}
    .app-hero .info .tagline{font-size:15px;color:#555;margin-bottom:12px;line-height:1.5}
    .app-hero .meta{display:flex;gap:10px;flex-wrap:wrap}
    .app-hero .badge{background:#f4f6f9;color:#555;font-size:12px;font-weight:600;padding:5px 12px;border-radius:50px;display:flex;align-items:center;gap:5px}
    .app-hero .badge.warn{background:#fff3e0;color:#e65100}
    .app-hero .badge.good{background:#e8f5e9;color:#2e7d32}

    /* Platform tabs */
    .tabs{display:flex;gap:6px;margin-bottom:16px;overflow-x:auto;scrollbar-width:none;padding-bottom:2px}
    .tabs::-webkit-scrollbar{display:none}
    .tab-btn{background:#fff;border:1.5px solid #e0e3ed;color:#555;padding:8px 18px;border-radius:50px;font-size:13px;font-weight:600;cursor:pointer;white-space:nowrap;transition:all .15s;display:flex;align-items:center;gap:6px}
    .tab-btn.active{background:#1a1f2e;border-color:#1a1f2e;color:#fff}
    .tab-btn:hover:not(.active){border-color:#999;color:#1a1f2e}

    /* Steps */
    .platform-block{display:none}
    .platform-block.active{display:block}
    .steps-card{background:#fff;border-radius:16px;padding:24px;box-shadow:0 1px 6px rgba(0,0,0,.06)}
    .steps-list{display:flex;flex-direction:column;gap:0}
    .step-row{display:flex;gap:16px;align-items:flex-start;padding:16px 0;border-bottom:1px solid #f0f2f6;position:relative}
    .step-row:last-child{border-bottom:none;padding-bottom:0}
    .step-row:first-child{padding-top:0}
    .step-num{width:32px;height:32px;background:#ff5c5c;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:800;flex-shrink:0;margin-top:1px}
    .step-text{font-size:15px;color:#333;line-height:1.6;padding-top:5px}
    .step-note{background:#fff8e1;border-left:3px solid #ffc107;border-radius:0 10px 10px 0;padding:12px 16px;margin-top:16px;font-size:13px;color:#555;line-height:1.6}
    .step-note strong{color:#1a1f2e}

    /* After cancel */
    .info-card{background:#fff;border-radius:16px;padding:24px;box-shadow:0 1px 6px rgba(0,0,0,.06);margin-top:20px}
    .info-card h2{font-size:17px;font-weight:800;color:#1a1f2e;margin-bottom:14px;display:flex;align-items:center;gap:8px}
    .info-card h2 .ico{font-size:20px}
    .check-list{display:flex;flex-direction:column;gap:8px}
    .check-item{display:flex;align-items:flex-start;gap:10px;font-size:14px;color:#444;line-height:1.55}
    .check-item .ck{width:20px;height:20px;background:#e8f5e9;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;flex-shrink:0;margin-top:1px;color:#2e7d32}
    .refund-box{background:#fff8e1;border-radius:12px;padding:14px 16px;margin-top:14px;font-size:13px;color:#555;line-height:1.6;display:flex;gap:10px}
    .refund-box .ico{font-size:18px;flex-shrink:0}

    /* FAQ */
    .faq-list{display:flex;flex-direction:column;gap:8px;margin-top:0}
    .faq-item{background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 1px 4px rgba(0,0,0,.05)}
    .faq-q{padding:16px 20px;font-size:15px;font-weight:700;color:#1a1f2e;cursor:pointer;display:flex;justify-content:space-between;align-items:center;user-select:none;gap:12px}
    .faq-q:hover{background:#fafbfd}
    .faq-q .arr{color:#ccc;transition:transform .2s;font-size:20px;flex-shrink:0}
    .faq-q.open .arr{transform:rotate(180deg);color:#ff5c5c}
    .faq-a{padding:0 20px 16px;font-size:14px;color:#555;line-height:1.75;display:none}

    /* Related */
    .related-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(150px,1fr));gap:10px;margin-top:0}
    .related-card{background:#fff;border-radius:12px;padding:14px;display:flex;align-items:center;gap:10px;box-shadow:0 1px 4px rgba(0,0,0,.05);transition:all .15s;border:1.5px solid transparent}
    .related-card:hover{box-shadow:0 4px 14px rgba(0,0,0,.1);border-color:#ff5c5c30;transform:translateY(-1px)}
    .related-card .ico{font-size:22px;flex-shrink:0}
    .related-card .name{font-size:13px;font-weight:700;color:#1a1f2e;line-height:1.2}
    .related-card .sub{font-size:11px;color:#888;margin-top:2px}

    /* Section header */
    .sec-header{display:flex;align-items:center;gap:10px;margin:24px 0 14px}
    .sec-header h2{font-size:17px;font-weight:800;color:#1a1f2e}
    .sec-line{flex:1;height:1px;background:#e0e3ed}

    /* SEO block */
    .seo-block{background:#fff;border-radius:16px;padding:24px 28px;box-shadow:0 1px 6px rgba(0,0,0,.06);margin-top:20px}
    .seo-block h2{font-size:18px;font-weight:800;color:#1a1f2e;margin-bottom:10px}
    .seo-block h3{font-size:15px;font-weight:700;color:#2d3561;margin:18px 0 7px}
    .seo-block p{font-size:14px;color:#555;line-height:1.8;margin-bottom:8px}

    /* App promo */
    .app-promo-banner{background:linear-gradient(135deg,#1a1f2e 0%,#2d3561 100%);border-radius:20px;padding:24px;display:flex;align-items:center;gap:18px;margin-top:24px;position:relative;overflow:hidden}
    .app-promo-banner::before{content:'';position:absolute;right:-40px;top:-40px;width:160px;height:160px;background:rgba(255,92,92,.1);border-radius:50%}
    .app-promo-banner .app-ico{width:64px;height:64px;border-radius:14px;flex-shrink:0;overflow:hidden;box-shadow:0 6px 20px rgba(0,0,0,.3);position:relative;z-index:1}
    .app-promo-banner .app-ico img{width:100%;height:100%;display:block}
    .app-promo-banner .info{flex:1;position:relative;z-index:1}
    .app-promo-banner .info .tag{font-size:10px;font-weight:800;letter-spacing:.8px;color:#ff5c5c;text-transform:uppercase;margin-bottom:4px}
    .app-promo-banner .info h3{font-size:16px;font-weight:800;color:#fff;margin-bottom:4px;line-height:1.3}
    .app-promo-banner .info p{font-size:12px;color:rgba(255,255,255,.6);line-height:1.5;margin-bottom:12px}
    .app-promo-banner .dl-btn{display:inline-flex;align-items:center;gap:6px;background:#fff;color:#1a1f2e;font-size:12px;font-weight:800;padding:9px 18px;border-radius:50px;transition:transform .15s}
    .app-promo-banner .dl-btn:hover{transform:translateY(-1px)}
    .app-promo-banner .dl-btn svg{width:14px;height:14px}

    /* Request guide */
    .request-block{background:#fff;border-radius:16px;padding:20px 24px;display:flex;align-items:center;gap:16px;flex-wrap:wrap;box-shadow:0 1px 6px rgba(0,0,0,.06);margin-top:28px;border:1.5px solid #ffe0e0}
    .request-left{display:flex;align-items:center;gap:12px;flex:1;min-width:200px}
    .req-icon{font-size:28px;flex-shrink:0}
    .request-left strong{display:block;font-size:15px;font-weight:800;color:#1a1f2e;margin-bottom:2px}
    .request-left span{font-size:13px;color:#666}
    .req-form{display:flex;gap:8px;flex-wrap:wrap;flex:1}
    .req-form input{flex:1;min-width:140px;padding:9px 14px;border:1.5px solid #e0e3ed;border-radius:9px;font-size:13px;outline:none;transition:border-color .15s}
    .req-form input:focus{border-color:#ff5c5c}
    .req-form button{background:#ff5c5c;color:#fff;border:none;padding:9px 20px;border-radius:9px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;transition:background .15s}
    .req-form button:hover{background:#ff3b3b}
    .req-success{background:#e8f5e9;color:#2e7d32;font-size:14px;font-weight:700;padding:10px 18px;border-radius:9px}

    /* Footer */
    footer{text-align:center;padding:32px 20px;color:#999;font-size:13px;border-top:1px solid #e0e3ed;margin-top:48px}
    footer a{color:#aaa;margin:0 8px}

    @media(max-width:600px){
      .app-hero{flex-direction:column;gap:14px;padding:20px}
      .app-hero .app-icon{width:60px;height:60px;font-size:32px}
      .app-hero .info h1{font-size:22px}
      .steps-card{padding:18px 16px}
      .step-num{width:28px;height:28px;font-size:13px}
      .info-card{padding:18px 16px}
      .app-promo-banner{flex-direction:column;text-align:center;padding:20px 16px}
      .related-grid{grid-template-columns:repeat(2,1fr)}
      .suggest-bar .inner{gap:10px}
      .suggest-form{width:100%}
    }
  </style>
</head>
<body>

<header class="header">
  <a href="/" class="logo"><span>✕</span> HowToCancel<span>Subscription</span></a>
  <a href="/" class="back-btn">← All guides</a>
</header>


<?php if (!$app): ?>
<div class="wrap" style="padding-top:40px;text-align:center">
  <h1 style="font-size:28px;margin-bottom:12px">Guide not found</h1>
  <p style="color:#666;margin-bottom:24px">We don't have a guide for this service yet.</p>
  <a href="/" style="background:#ff5c5c;color:#fff;padding:12px 28px;border-radius:50px;font-weight:700">← Back to all guides</a>
</div>
<?php else: ?>

<!-- Breadcrumb -->
<nav class="breadcrumb">
  <a href="/">Home</a>
  <span class="sep">›</span>
  <span>How to Cancel <?= $app['name'] ?> Subscription</span>
</nav>

<div class="wrap">

  <!-- App hero -->
  <div class="app-hero">
    <div class="app-icon" style="background:<?= $app['color'] ?>22"><?= $app['emoji'] ?></div>
    <div class="info">
      <h1>How to Cancel <?= $app['name'] ?> Subscription</h1>
      <p class="tagline"><?= $app['tagline'] ?></p>
      <div class="meta">
        <div class="badge good">✓ No phone call needed</div>
        <div class="badge good">✓ Takes ~2 minutes</div>
        <div class="badge">Free guide</div>
      </div>
    </div>
  </div>

  <!-- About -->
  <div class="info-card" style="margin-top:0;margin-bottom:20px">
    <p style="font-size:14px;color:#555;line-height:1.75"><?= $app['about'] ?></p>
  </div>

  <!-- Steps -->
  <div class="sec-header">
    <h2>Step-by-Step Instructions</h2>
    <div class="sec-line"></div>
  </div>

  <?php if (count($app['platforms']) > 1): ?>
  <div class="tabs" id="platform-tabs">
    <?php foreach ($app['platforms'] as $key => $p): ?>
    <button class="tab-btn <?= $key === $first_key ? 'active' : '' ?>" onclick="switchTab('<?= $key ?>', this)">
      <?= $p['icon'] ?> <?= $p['label'] ?>
    </button>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <?php foreach ($app['platforms'] as $key => $p): ?>
  <div class="platform-block <?= $key === $first_key ? 'active' : '' ?>" id="tab-<?= $key ?>">
    <div class="steps-card">
      <div class="steps-list">
        <?php foreach ($p['steps'] as $i => $step): ?>
        <div class="step-row">
          <div class="step-num"><?= $i + 1 ?></div>
          <div class="step-text"><?= $step ?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php if (!empty($p['note'])): ?>
      <div class="step-note">💡 <?= $p['note'] ?></div>
      <?php endif; ?>
    </div>
  </div>
  <?php endforeach; ?>

  <!-- After cancellation -->
  <div class="info-card">
    <h2><span class="ico">✅</span> What Happens After You Cancel</h2>
    <div class="check-list">
      <?php foreach ($app['after_cancel'] as $item): ?>
      <div class="check-item">
        <div class="ck">✓</div>
        <span><?= $item ?></span>
      </div>
      <?php endforeach; ?>
    </div>
    <?php if (!empty($app['refund'])): ?>
    <div class="refund-box">
      <span class="ico">💰</span>
      <div><strong>Refund policy:</strong> <?= $app['refund'] ?></div>
    </div>
    <?php endif; ?>
  </div>

  <!-- FAQ -->
  <?php if (!empty($app['faq'])): ?>
  <div class="sec-header">
    <h2>Frequently Asked Questions</h2>
    <div class="sec-line"></div>
  </div>
  <div class="faq-list">
    <?php foreach ($app['faq'] as $faq): ?>
    <div class="faq-item">
      <div class="faq-q" onclick="toggleFaq(this)">
        <?= $faq[0] ?>
        <span class="arr">⌄</span>
      </div>
      <div class="faq-a"><?= $faq[1] ?></div>
    </div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <!-- Related -->
  <?php if (!empty($app['related'])): ?>
  <div class="sec-header">
    <h2>Related Guides</h2>
    <div class="sec-line"></div>
  </div>
  <div class="related-grid">
    <?php
    $emojis = ["hulu"=>"📺","fubotv"=>"⚽","amazon-prime"=>"📦","netflix"=>"🎬",
               "spotify"=>"🎵","canva"=>"🎨","chatgpt"=>"🤖","disney-plus"=>"🏰",
               "adobe"=>"🖌️","peacock"=>"🦚","experian"=>"💳","apple-tv"=>"🍎",
               "audible"=>"🎧","norton"=>"🛡️","microsoft-365"=>"💼","tinder"=>"🔥",
               "hellofresh"=>"🥗","calm"=>"🧘","grammarly"=>"✍️","siriusxm"=>"📻",
               "starz"=>"⭐","espn-plus"=>"🏈","hbo-max"=>"🎭","paramount-plus"=>"⛰️",
               "kindle-unlimited"=>"📚","doordash"=>"🍔","duolingo"=>"🦜",
               "bumble"=>"🐝","amazon-music"=>"🎶"];
    $names = ["hulu"=>"Hulu","fubotv"=>"FuboTV","amazon-prime"=>"Amazon Prime",
              "netflix"=>"Netflix","spotify"=>"Spotify","canva"=>"Canva",
              "chatgpt"=>"ChatGPT Plus","disney-plus"=>"Disney+","adobe"=>"Adobe",
              "peacock"=>"Peacock","experian"=>"Experian","apple-tv"=>"Apple TV+",
              "audible"=>"Audible","norton"=>"Norton","microsoft-365"=>"Microsoft 365",
              "tinder"=>"Tinder","hellofresh"=>"HelloFresh","calm"=>"Calm",
              "grammarly"=>"Grammarly","siriusxm"=>"SiriusXM","starz"=>"Starz",
              "espn-plus"=>"ESPN+","hbo-max"=>"HBO Max","paramount-plus"=>"Paramount+",
              "kindle-unlimited"=>"Kindle Unlimited","doordash"=>"DoorDash",
              "duolingo"=>"Duolingo","bumble"=>"Bumble","amazon-music"=>"Amazon Music"];
    foreach ($app['related'] as $rel_slug):
      $rel_name = $names[$rel_slug] ?? $rel_slug;
      $rel_emoji = $emojis[$rel_slug] ?? "📱";
      $has_guide = isset($apps_data[$rel_slug]);
    ?>
    <a href="/how-to-cancel-<?= $rel_slug ?>-subscription/" class="related-card">
      <div class="ico"><?= $rel_emoji ?></div>
      <div>
        <div class="name"><?= $rel_name ?></div>
        <div class="sub"><?= $has_guide ? 'Full guide →' : 'Guide coming soon' ?></div>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <!-- SEO content block -->
  <div class="seo-block">
    <h2>About <?= $app['name'] ?> Subscriptions</h2>
    <p><?= $app['about'] ?> This guide covers every platform — <?= $platform_names ?> — so you can cancel from whichever device you have handy.</p>

    <h3>Before You Cancel <?= $app['name'] ?></h3>
    <p>Before cancelling, check a few things: <strong>which platform you subscribed on</strong> (App Store, Google Play, or the website directly), since you must cancel in the same place you signed up. If you subscribed on the website, cancelling through your iPhone Settings won't work — and vice versa.</p>
    <p>Also note your <strong>next billing date</strong>. <?= $app['name'] ?> doesn't delete your account when you cancel — you keep access until the period ends. There's no penalty for cancelling early, but you won't get a refund for unused days unless stated in the refund policy above.</p>

    <h3>Can I Resubscribe After Cancelling?</h3>
    <p>Yes — you can resubscribe to <?= $app['name'] ?> at any time. Your account data, preferences, and history are typically preserved for 30–90 days after cancellation, depending on the service. Simply log back in and choose a new plan.</p>

    <h3>What If I Can't Find the Cancel Button?</h3>
    <p>Some services intentionally bury the cancel option. Follow the exact steps above — if you still can't find it, check that you're logged into the correct account (some people have multiple accounts). You can also contact <?= $app['name'] ?> support directly and request cancellation via chat or email — they are legally required to process it.</p>
  </div>

  <!-- App promo -->
  <a href="https://apps.apple.com/us/app/cancel-subscriptions-app/id6759456590" class="app-promo-banner" target="_blank" rel="noopener">
    <div class="app-ico"><img src="/icon_180.png?v=2" alt="Cancel Subscriptions App" title="Cancel Subscriptions — Free iOS App"></div>
    <div class="info">
      <div class="tag">Free iOS App</div>
      <h3>See ALL your subscriptions at once</h3>
      <p>Scan your iPhone and find every active subscription — cancel unwanted ones in seconds, no manual searching needed.</p>
      <div class="dl-btn">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
        Download Free on the App Store
      </div>
    </div>
  </a>

</div><!-- /wrap -->

<?php endif; ?>

<?php
$req_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['req_service'])) {
  $req_service = trim(strip_tags($_POST['req_service'] ?? ''));
  $req_email   = trim(strip_tags($_POST['req_email']   ?? ''));
  if ($req_service) {
    $log = date('Y-m-d H:i:s') . "\tService: $req_service\tEmail: $req_email\tPage: $slug\n";
    file_put_contents(__DIR__ . '/guide_requests.txt', $log, FILE_APPEND | LOCK_EX);
    @mail('hello@britetodo.com',
      "Guide Request: $req_service",
      "Service: $req_service\nEmail: $req_email\nPage: $slug",
      "From: noreply@howtocancelsubscription.com\r\nReply-To: $req_email"
    );
    $req_sent = true;
  }
}
?>
<div class="wrap" style="margin-bottom:0">
  <div class="request-block">
    <div class="request-left">
      <div class="req-icon">🔍</div>
      <div>
        <strong>Don't see your subscription?</strong>
        <span>Tell us — we'll add a step-by-step guide within 24 hours.</span>
      </div>
    </div>
    <?php if ($req_sent): ?>
      <div class="req-success">✓ Thanks! Guide coming soon.</div>
    <?php else: ?>
    <form class="req-form" method="post">
      <input type="text" name="req_service" placeholder="Service name…" maxlength="80" required>
      <input type="email" name="req_email" placeholder="Your email (optional)">
      <button type="submit">Request →</button>
    </form>
    <?php endif; ?>
  </div>
</div>

<footer>
  <p>© <?= date('Y') ?> HowToCancelSubscription.com — Free guides to cancel any subscription</p>
  <p style="margin-top:8px"><a href="/">All Guides</a><a href="/privacy/">Privacy Policy</a><a href="/contact/">Contact</a></p>
</footer>

<script>
function openAudit() {
  document.getElementById('audit-overlay').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeAudit() {
  document.getElementById('audit-overlay').classList.remove('open');
  document.body.style.overflow = '';
}
// Auto-open if just submitted (success state)
<?php if ($audit_success): ?>window.addEventListener('DOMContentLoaded', openAudit);<?php endif; ?>

function switchTab(key, btn) {
  document.querySelectorAll('.platform-block').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.getElementById('tab-' + key).classList.add('active');
  btn.classList.add('active');
  // Smooth scroll to steps
  document.getElementById('tab-' + key).scrollIntoView({behavior:'smooth', block:'nearest'});
}
function toggleFaq(el) {
  const ans = el.nextElementSibling;
  const open = el.classList.toggle('open');
  ans.style.display = open ? 'block' : 'none';
}
</script>
</body>
</html>
