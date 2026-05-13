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

  "crunchyroll" => [
    "name"     => "Crunchyroll",
    "emoji"    => "🎌",
    "color"    => "#F47521",
    "tagline"  => "Cancel anytime — your anime watchlist stays safe",
    "about"    => "Crunchyroll offers anime streaming with Fan, Mega Fan, and Ultimate Fan tiers. You can cancel your subscription online at any time without calling support.",
    "refund"   => "Crunchyroll does not offer refunds for the current billing period. Your access continues until the subscription end date.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>crunchyroll.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>Settings</strong>",
          "Click <strong>Manage Subscription</strong>",
          "Click <strong>Cancel Premium</strong>",
          "Select a reason and click <strong>Continue</strong>",
          "Confirm by clicking <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Most reliable method — works regardless of how you signed up.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Crunchyroll</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Crunchyroll</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "You keep Premium access until the end of your billing period",
      "After that you revert to the free tier (with ads, limited simulcasts)",
      "Your watchlist and viewing history are preserved on the free plan",
      "You can re-subscribe at any time to regain Premium",
    ],
    "faq" => [
      ["Does cancelling Crunchyroll delete my watchlist?",
       "No — your watchlist and watch history are saved on your free account. You lose Premium perks like ad-free viewing and simulcast access, but your data stays."],
      ["Can I get a refund from Crunchyroll?",
       "Crunchyroll generally does not offer refunds for the current billing period. If you were charged in error, contact Crunchyroll support within 24–48 hours for the best chance of a refund."],
      ["What's the difference between Crunchyroll Fan, Mega Fan, and Ultimate Fan?",
       "Fan: ad-free streaming on 1 device. Mega Fan: up to 4 devices + offline viewing. Ultimate Fan: everything in Mega Fan + monthly digital manga. All tiers are cancelled the same way."],
    ],
    "related" => ["netflix", "hulu", "disney-plus", "amazon-prime"],
  ],

  "chatgpt" => [
    "name"     => "ChatGPT Plus",
    "emoji"    => "🤖",
    "color"    => "#10A37F",
    "tagline"  => "Cancel in 3 clicks — no hidden fees",
    "about"    => "ChatGPT Plus is OpenAI's paid subscription that gives access to GPT-4, advanced reasoning, and priority access. You can cancel anytime through your account settings.",
    "refund"   => "OpenAI does not offer refunds for unused ChatGPT Plus time. Your subscription remains active until the end of the billing period.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>chat.openai.com</strong> and sign in",
          "Click your <strong>profile picture</strong> in the bottom left",
          "Click <strong>My plan</strong>",
          "Click <strong>Manage my subscription</strong>",
          "Click <strong>Cancel plan</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "ChatGPT Plus is managed through OpenAI's website — not through app stores.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>ChatGPT</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed through the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>ChatGPT</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "You keep ChatGPT Plus until the end of your current billing period",
      "After that you revert to the free tier (GPT-3.5, limited usage)",
      "All your conversation history is preserved",
      "You can resubscribe any time to regain GPT-4 access",
    ],
    "faq" => [
      ["What do I lose when I cancel ChatGPT Plus?",
       "You lose access to GPT-4, advanced data analysis, image generation (DALL·E), and priority server access. You keep your account and all conversation history on the free GPT-3.5 tier."],
      ["Can I get a refund for ChatGPT Plus?",
       "OpenAI's standard policy is no refunds for the current billing period. If you believe you were charged in error, contact support at help.openai.com."],
      ["How do I cancel ChatGPT Plus on iPhone?",
       "If you subscribed through the App Store, cancel in iPhone Settings → [Your Name] → Subscriptions → ChatGPT → Cancel Subscription. If you subscribed on the website, cancel at chat.openai.com instead."],
    ],
    "related" => ["grammarly", "canva", "adobe", "microsoft-365"],
  ],

  "audible" => [
    "name"     => "Audible",
    "emoji"    => "🎧",
    "color"    => "#FF9900",
    "tagline"  => "Keep your audiobooks even after you cancel",
    "about"    => "Audible is Amazon's audiobook subscription service. Any audiobooks you've purchased with credits remain in your library forever — even after cancellation.",
    "refund"   => "Audible offers a 365-day return policy on audiobooks. You can also get a prorated refund on your membership if you contact support within 7 days of the charge.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>audible.com</strong> and sign in with your Amazon account",
          "Click <strong>Account &amp; Lists</strong> in the top right",
          "Click <strong>Membership Details</strong>",
          "Scroll down and click <strong>Cancel membership</strong>",
          "Follow the prompts — Audible will offer you a pause option first",
          "Select <strong>Cancel membership</strong> to confirm",
          "You'll receive a confirmation email",
        ],
        "note"  => "Audible may try to retain you with a pause option or a discount — click 'Cancel membership' again to proceed.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Audible</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "All audiobooks you purchased with credits stay in your library forever",
      "You lose the monthly credit for new audiobooks",
      "Audible Originals you've added remain accessible",
      "You can resubscribe any time and unused credits may be restored",
    ],
    "faq" => [
      ["Do I keep my Audible books after cancelling?",
       "Yes — any audiobooks you purchased with credits are yours to keep forever. You can still access them through the Audible app even without a membership."],
      ["Can I pause Audible instead of cancelling?",
       "Yes — Audible offers a 1–3 month pause option. During the pause you won't be charged and won't receive credits, but your library stays intact. Audible will offer this option before you can complete the cancellation."],
      ["I have unused credits — what happens when I cancel?",
       "Unused Audible credits expire when you cancel. Use them before cancelling to get the most value from your subscription."],
    ],
    "related" => ["amazon-prime", "kindle-unlimited", "spotify", "amazon-music"],
  ],

  "doordash" => [
    "name"     => "DoorDash DashPass",
    "emoji"    => "🍔",
    "color"    => "#FF3008",
    "tagline"  => "Cancel DashPass in 2 minutes online",
    "about"    => "DashPass is DoorDash's subscription for free delivery and reduced service fees. You can cancel anytime through the DoorDash app or website.",
    "refund"   => "DoorDash does not offer refunds for the current DashPass billing period. Access continues until the subscription end date.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>doordash.com</strong> and sign in",
          "Click your <strong>profile picture</strong> in the top left",
          "Click <strong>DashPass</strong>",
          "Click <strong>Manage DashPass</strong>",
          "Click <strong>End Subscription</strong>",
          "Select a reason and confirm",
        ],
        "note"  => "DashPass can only be cancelled through DoorDash — not through app stores.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>DoorDash</strong> app",
          "Tap your <strong>profile icon</strong> in the bottom right",
          "Tap <strong>DashPass</strong>",
          "Tap <strong>Manage DashPass</strong>",
          "Tap <strong>End Subscription</strong> and confirm",
        ],
        "note"  => "Use the DoorDash app itself — DashPass is not managed through Apple Subscriptions.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open the <strong>DoorDash</strong> app",
          "Tap your <strong>profile icon</strong> in the bottom right",
          "Tap <strong>DashPass</strong>",
          "Tap <strong>Manage DashPass</strong>",
          "Tap <strong>End Subscription</strong> and confirm",
        ],
        "note"  => "Use the DoorDash app — DashPass is not managed through Google Play.",
      ],
    ],
    "after_cancel" => [
      "DashPass benefits end at the next billing date",
      "You'll see regular delivery fees and service fees on orders",
      "Your DoorDash account remains active",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Can I get a refund for DashPass?",
       "DoorDash generally does not refund the current DashPass period. If you were charged in error or signed up by mistake, contact DoorDash support immediately — they may make an exception within 24–48 hours."],
      ["How do I cancel a DashPass free trial?",
       "Cancel the same way — go to DashPass → Manage DashPass → End Subscription. Free trial cancellations take effect immediately with no charge."],
      ["Does cancelling DashPass affect my DoorDash account?",
       "No — your DoorDash account, order history, and saved addresses remain intact. You just lose the free delivery and reduced fees benefit."],
    ],
    "related" => ["amazon-prime", "hellofresh", "netflix", "spotify"],
  ],

  "norton" => [
    "name"     => "Norton",
    "emoji"    => "🛡️",
    "color"    => "#FFD200",
    "tagline"  => "Turn off auto-renewal before you're charged",
    "about"    => "Norton antivirus and security products auto-renew annually. You can turn off auto-renewal at any time in your Norton account to prevent being charged.",
    "refund"   => "Norton offers a 60-day money-back guarantee on new subscriptions. If within 60 days of purchase, contact support for a full refund.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>my.norton.com</strong> and sign in",
          "Click <strong>My Subscriptions</strong>",
          "Find your product and click the <strong>dropdown arrow</strong> next to it",
          "Click <strong>Turn Off Auto-Renewal</strong>",
          "Confirm your choice",
        ],
        "note"  => "Norton charges the full year upfront — turn off auto-renewal ASAP after purchase to avoid next year's charge.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Norton</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Norton protection continues until the end of your subscription period",
      "Auto-renewal is disabled — you won't be charged next year",
      "You can manually renew at any time before the expiry date",
      "Your Norton account and settings are preserved",
    ],
    "faq" => [
      ["Can I get a refund from Norton?",
       "Yes — Norton has a 60-day money-back guarantee for new subscriptions. Contact Norton support at support.norton.com within 60 days of purchase to request a refund."],
      ["I was already charged for renewal — can I cancel and get a refund?",
       "If you were just charged and don't want to renew, contact Norton support immediately. The 60-day guarantee applies to new purchases, but support agents often process refunds on recent renewals as a courtesy."],
      ["What's the difference between cancelling Norton and turning off auto-renewal?",
       "Turning off auto-renewal stops future charges but lets your current subscription run its full term. 'Cancelling' typically means requesting a refund and ending protection immediately. Most users should just turn off auto-renewal."],
    ],
    "related" => ["mcafee", "adobe", "microsoft-365", "experian"],
  ],

  "grammarly" => [
    "name"     => "Grammarly",
    "emoji"    => "✏️",
    "color"    => "#15C39A",
    "tagline"  => "Cancel Grammarly Premium — keep the free version",
    "about"    => "Grammarly Premium adds advanced writing suggestions, tone detection, and plagiarism checks. Cancelling downgrades you to Grammarly Free — the extension and basic features remain.",
    "refund"   => "Grammarly offers refunds within 10 days of an annual subscription charge if you haven't used the premium features. Contact support to request one.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.grammarly.com/subscribe</strong>",
          "Click <strong>Manage Plan</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Select a reason and click <strong>Continue</strong>",
          "Click <strong>Cancel my subscription</strong> to confirm",
        ],
        "note"  => "Your free account remains active — the Grammarly browser extension continues to work.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Grammarly</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Grammarly Premium access continues until the billing period ends",
      "After that you revert to Grammarly Free",
      "Basic spelling and grammar checks still work for free",
      "Advanced suggestions, tone analysis, and plagiarism checks are disabled",
    ],
    "faq" => [
      ["Do I lose my writing data when I cancel Grammarly?",
       "No — your documents and writing history stay in your Grammarly account. You lose Premium features but the free extension and basic corrections remain."],
      ["Can I get a refund for Grammarly Premium?",
       "Grammarly allows refunds within 10 days of purchase for annual plans if premium features haven't been significantly used. Contact support at grammarly.com/contact."],
      ["Is Grammarly Free worth keeping after cancelling Premium?",
       "Yes — Grammarly Free provides basic spelling, grammar, and punctuation checks for free. Many users find it useful even without the premium features."],
    ],
    "related" => ["chatgpt", "canva", "adobe", "microsoft-365"],
  ],

  "hbo-max" => [
    "name"     => "Max (HBO Max)",
    "emoji"    => "🎥",
    "color"    => "#002BE7",
    "tagline"  => "Cancel Max in 3 steps — no cancellation fee",
    "about"    => "Max (formerly HBO Max) is Warner Bros. Discovery's streaming service. You can cancel anytime online or through the app with no cancellation fees.",
    "refund"   => "Max does not offer refunds for the current billing period. Your access continues until the subscription period ends.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>max.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>Account</strong>",
          "Under \"Plan &amp; Payments\", click <strong>Cancel Plan</strong>",
          "Click <strong>Cancel Subscription</strong> to confirm",
        ],
        "note"  => "Works for all Max plans including the ad-supported tier.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Max</strong> (or HBO Max)",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Max</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Access continues until your current billing period ends",
      "Your watchlist and viewing history are preserved for 90 days",
      "You can resubscribe at any time",
      "No cancellation fee — Max is month-to-month",
    ],
    "faq" => [
      ["What happens to my Max watchlist when I cancel?",
       "Your watchlist and viewing history are saved for 90 days after cancellation. If you resubscribe within that window, everything is restored."],
      ["Is Max the same as HBO Max?",
       "Yes — HBO Max was rebranded to just \"Max\" in May 2023. It's the same service with added Discovery+ content. Cancellation works the same way."],
      ["Can I get a refund from Max?",
       "Max does not typically offer refunds for the current billing period. Contact support at help.max.com if you believe you were charged in error."],
    ],
    "related" => ["netflix", "hulu", "disney-plus", "peacock"],
  ],

  "tiktok" => [
    "name"     => "TikTok",
    "emoji"    => "🎵",
    "color"    => "#010101",
    "tagline"  => "Cancel TikTok subscription or coins auto-top-up",
    "about"    => "TikTok offers subscriptions to individual creators and TikTok LIVE features. You can cancel any active TikTok subscription through the app or your device's subscription settings.",
    "refund"   => "TikTok does not offer refunds for purchased coins or subscription periods. Unused coins remain in your account after cancellation.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Find <strong>TikTok</strong> in the list",
          "Tap your subscription",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "This cancels TikTok subscriptions managed through Apple. Creator subscriptions may need to be cancelled within TikTok.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>TikTok</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if your subscription is managed through Google Play.",
      ],
      "web" => [
        "label" => "In-App (TikTok)",
        "icon"  => "💻",
        "steps" => [
          "Open the <strong>TikTok</strong> app",
          "Tap your <strong>profile icon</strong> in the bottom right",
          "Tap the <strong>≡ menu</strong> (top right)",
          "Tap <strong>Settings and Privacy</strong>",
          "Tap <strong>Account → Subscriptions</strong>",
          "Tap the subscription you want to cancel",
          "Tap <strong>Manage → Cancel</strong>",
        ],
        "note"  => "Use this method for creator subscriptions or TikTok LIVE subscriptions.",
      ],
    ],
    "after_cancel" => [
      "Your subscription benefits end at the next billing date",
      "Any TikTok coins you purchased remain in your account",
      "You can still use TikTok for free",
      "Creator subscriptions you had will not auto-renew",
    ],
    "faq" => [
      ["Can I cancel a TikTok creator subscription?",
       "Yes — go to TikTok Settings → Account → Subscriptions to see and cancel any creator subscriptions you've purchased."],
      ["Can I get a refund for TikTok coins?",
       "TikTok coins are generally non-refundable. If you were charged in error, contact TikTok support through the app within 24 hours for the best chance of a refund."],
      ["I subscribed to a TikTok LIVE creator — how do I cancel?",
       "Open TikTok → profile → Settings → Account → Subscriptions. Find the creator's subscription and tap Cancel. The benefit ends at the current subscription period."],
    ],
    "related" => ["spotify", "netflix", "youtube-tv", "crunchyroll"],
  ],

  "shopify" => [
    "name"     => "Shopify",
    "emoji"    => "🛒",
    "color"    => "#96BF48",
    "tagline"  => "Pause or close your Shopify store without calling",
    "about"    => "Shopify charges monthly for your online store. You can pause your plan (keeps your store but stops selling) or close your store entirely to stop all charges.",
    "refund"   => "Shopify does not offer prorated refunds for monthly plans. Annual plans may be eligible for a partial refund if closed early — contact Shopify support.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Log in to your <strong>Shopify admin</strong> at yourstore.myshopify.com/admin",
          "Click <strong>Settings</strong> in the bottom left",
          "Click <strong>Plan</strong>",
          "Click <strong>Cancel subscription</strong> (or <strong>Pause and build</strong> to pause instead)",
          "Select a reason for cancelling",
          "Enter your password to confirm",
          "Click <strong>Close store</strong>",
        ],
        "note"  => "⚠️ Closing your store is permanent — export your data first (Products, Orders, Customers) from Settings → Export.",
      ],
    ],
    "after_cancel" => [
      "Your store is immediately closed and taken offline",
      "Export all your store data before cancelling — you won't be able to after",
      "Your custom domain is released (you keep it if registered elsewhere)",
      "Any unused paid days on monthly plans are not refunded",
    ],
    "faq" => [
      ["Can I pause Shopify instead of cancelling?",
       "Yes — Shopify offers a 'Pause and Build' plan for $9/month. Your store goes offline to customers but you keep your admin access to work on it. Upgrade back to a full plan when ready."],
      ["What happens to my Shopify domain when I cancel?",
       "If your domain was purchased through Shopify, it will be released but you can still manage it. Domains registered externally (e.g. GoDaddy) are unaffected."],
      ["Can I get a refund when I cancel Shopify?",
       "Shopify doesn't refund unused days on monthly plans. For annual plans, contact Shopify support to discuss potential prorated refunds."],
    ],
    "related" => ["canva", "adobe", "grammarly", "chatgpt"],
  ],

  "uber-eats" => [
    "name"     => "Uber One",
    "emoji"    => "🚗",
    "color"    => "#142328",
    "tagline"  => "Cancel Uber One — stop the monthly charge today",
    "about"    => "Uber One (formerly Uber Pass/Eats Pass) is Uber's membership for free Uber Eats delivery and discounts on rides. You can cancel anytime in the Uber app.",
    "refund"   => "Uber One does not offer refunds for the current billing period. Your membership benefits continue until the period ends.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>Uber</strong> app",
          "Tap your <strong>profile icon</strong> in the top left",
          "Tap <strong>Uber One</strong>",
          "Scroll down and tap <strong>Manage membership</strong>",
          "Tap <strong>End membership</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Use the Uber app itself — Uber One is not managed through Apple Subscriptions.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open the <strong>Uber</strong> app",
          "Tap your <strong>profile icon</strong> in the top left",
          "Tap <strong>Uber One</strong>",
          "Tap <strong>Manage membership → End membership</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Use the Uber app — Uber One is not managed through Google Play.",
      ],
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>ubereats.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Click <strong>Uber One</strong>",
          "Click <strong>Manage membership</strong>",
          "Click <strong>End membership</strong> and confirm",
        ],
        "note"  => "You can also manage Uber One from the web at ubereats.com.",
      ],
    ],
    "after_cancel" => [
      "Uber One benefits continue until the end of your billing period",
      "After that delivery fees and surge pricing apply as normal",
      "Your Uber account and order history are unaffected",
      "You can rejoin Uber One at any time",
    ],
    "faq" => [
      ["What is Uber One and what do I lose when I cancel?",
       "Uber One gives you free delivery on Uber Eats (orders over $15), 5% off rides, and 5% Uber Cash on Eats orders. When you cancel, standard delivery fees resume."],
      ["Can I get a refund when I cancel Uber One?",
       "Uber One does not offer prorated refunds. If you were charged in error, contact Uber support through the app immediately."],
      ["Is Uber One different from Uber Pass and Eats Pass?",
       "Yes — Uber combined Uber Pass and Eats Pass into Uber One in 2021. If you're still seeing Uber Pass or Eats Pass in your account, cancel it the same way."],
    ],
    "related" => ["doordash", "amazon-prime", "hellofresh", "netflix"],
  ],

  "experian" => [
    "name"     => "Experian",
    "emoji"    => "📊",
    "color"    => "#1B1464",
    "tagline"  => "Cancel Experian credit monitoring — call required",
    "about"    => "Experian offers credit monitoring and identity theft protection subscriptions. Some plans can be cancelled online; others require a phone call.",
    "refund"   => "Experian may offer a prorated refund for annual plans. Contact customer service to discuss refund options after cancellation.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>experian.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>My Account</strong>",
          "Look for <strong>Subscription Settings</strong> or <strong>Manage Plan</strong>",
          "If available, click <strong>Cancel Subscription</strong>",
          "If no cancel option — call <strong>1-877-284-7942</strong> (Mon–Fri 6am–8pm PT, Sat–Sun 8am–5pm PT)",
        ],
        "note"  => "Some Experian plans require a phone call to cancel. Have your account number and last 4 digits of SSN ready.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Experian</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Credit monitoring alerts stop at the end of the billing period",
      "Your free Experian account remains (free credit score access stays)",
      "Identity theft protection coverage ends",
      "You can re-subscribe at any time",
    ],
    "faq" => [
      ["Do I need to call to cancel Experian?",
       "It depends on your plan. Some Experian products can be cancelled online in Account settings. Others require calling 1-877-284-7942. If you don't see a cancel button online, call the number."],
      ["Can I still check my credit score for free after cancelling Experian?",
       "Yes — Experian offers a free basic credit report and score without a paid subscription. You keep free access to your Experian credit score after cancelling the paid plan."],
      ["What is Experian CreditWorks and how do I cancel it?",
       "CreditWorks is Experian's credit monitoring subscription. Cancel online at experian.com (Account → Subscription Settings) or by calling 1-877-284-7942."],
    ],
    "related" => ["norton", "mcafee", "microsoft-365", "adobe"],
  ],

  "capcut" => [
    "name"     => "CapCut Pro",
    "emoji"    => "🎬",
    "color"    => "#000000",
    "tagline"  => "Cancel CapCut Pro in seconds",
    "about"    => "CapCut Pro gives access to premium templates, AI tools, and watermark-free exports. You can cancel anytime through the app store where you subscribed.",
    "refund"   => "CapCut does not offer refunds directly. Refunds are handled by Apple App Store or Google Play based on their standard policies (usually within 48 hours of purchase for accidental charges).",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>CapCut</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "This is the only way to cancel CapCut Pro on iPhone — there's no cancel option inside the app.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>CapCut</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Google Play manages CapCut subscriptions on Android.",
      ],
      "web" => [
        "label" => "Web (capcut.com)",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>capcut.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Click <strong>Settings → Subscription</strong>",
          "Click <strong>Cancel plan</strong> and confirm",
        ],
        "note"  => "Web cancellations apply to subscriptions started on capcut.com.",
      ],
    ],
    "after_cancel" => [
      "CapCut Pro access continues until the end of your billing period",
      "After that you revert to the free version",
      "Your projects and exports are preserved",
      "Watermark-free export requires an active Pro subscription",
    ],
    "faq" => [
      ["Can I use CapCut for free after cancelling Pro?",
       "Yes — CapCut is free to use with ads and basic features. Watermark removal, premium templates, and AI tools require Pro."],
      ["How do I get a refund for CapCut Pro?",
       "Refunds for CapCut Pro are handled by Apple or Google. On iPhone, go to reportaproblem.apple.com and request a refund. On Android, go to the Google Play website → Order History → Request a refund."],
      ["I was charged for CapCut but never used it — what do I do?",
       "Request a refund through Apple (reportaproblem.apple.com) or Google Play immediately. Both platforms typically approve refunds for unused subscriptions within 48 hours of purchase."],
    ],
    "related" => ["canva", "adobe", "tiktok", "chatgpt"],
  ],

  "disney-plus" => [
    "name"     => "Disney+",
    "emoji"    => "✨",
    "color"    => "#113CCF",
    "tagline"  => "Cancel Disney+ online — no phone call needed",
    "about"    => "Disney+ offers ad-supported and ad-free subscription plans. You can cancel anytime through DisneyPlus.com or your device's subscription manager.",
    "refund"   => "Disney+ does not offer refunds for the current billing period. Your access continues until the period ends.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>disneyplus.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>Account</strong>",
          "Under \"Subscription\", click <strong>Cancel subscription</strong>",
          "Click <strong>Agree</strong> to confirm",
        ],
        "note"  => "If you're on the Disney Bundle (Disney+, Hulu, ESPN+), cancelling here cancels the entire bundle.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Disney+</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Disney+</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Disney+ access continues until the billing period ends",
      "Your watchlist and profile settings are saved for 30 days",
      "Disney Bundle (Hulu + ESPN+) is also cancelled if applicable",
      "You can resubscribe any time and your profiles are restored",
    ],
    "faq" => [
      ["If I cancel Disney+ do I also cancel Hulu and ESPN+?",
       "If you're on the Disney Bundle, yes — cancelling Disney+ cancels the entire bundle. If you have standalone Hulu or ESPN+ subscriptions, those are separate."],
      ["Does Disney+ offer a pause option?",
       "No — Disney+ doesn't offer a pause feature. You must cancel and resubscribe. Your watchlist and profile data are saved for 30 days."],
      ["Can I get a refund from Disney+?",
       "Disney+ does not offer refunds for current billing periods. Contact Disney+ support at help.disneyplus.com if you believe you were charged in error."],
    ],
    "related" => ["hulu", "netflix", "espn-plus", "amazon-prime"],
  ],

  "microsoft-365" => [
    "name"     => "Microsoft 365",
    "emoji"    => "📄",
    "color"    => "#D83B01",
    "tagline"  => "Turn off Microsoft 365 auto-renewal before it charges",
    "about"    => "Microsoft 365 (formerly Office 365) includes Word, Excel, PowerPoint, Teams, and 1TB OneDrive storage. You can turn off auto-renewal or cancel via your Microsoft account.",
    "refund"   => "Microsoft offers a prorated refund if you cancel within 30 days of purchase. After 30 days, you keep access for the paid period with no refund.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.microsoft.com/services</strong> and sign in",
          "Find <strong>Microsoft 365</strong> and click <strong>Manage</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "Microsoft may offer a discounted rate or offer to switch plans — click past these to complete the cancellation.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Microsoft 365</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Microsoft 365 apps switch to read-only mode after the subscription ends",
      "OneDrive storage reduces to 5 GB — download files over that limit first",
      "Word, Excel, PowerPoint remain installed but stop working for editing",
      "Microsoft accounts and Outlook email remain free",
    ],
    "faq" => [
      ["What happens to my Word/Excel files when I cancel Microsoft 365?",
       "Files stay on your computer. However, Word, Excel, and PowerPoint switch to read-only view-only mode. You can export to PDF or use the free web versions at office.com."],
      ["Can I get a refund when I cancel Microsoft 365?",
       "Microsoft offers a prorated refund within 30 days of purchase. After 30 days, you keep access for the remaining paid period with no refund available."],
      ["What happens to my OneDrive files when I cancel?",
       "Your OneDrive storage reduces from 1TB to 5GB (free). Files over 5GB become read-only and inaccessible until you either download them or resubscribe. Download important files before cancelling."],
    ],
    "related" => ["adobe", "grammarly", "canva", "chatgpt"],
  ],

  "peacock" => [
    "name"     => "Peacock",
    "emoji"    => "🦚",
    "color"    => "#000000",
    "tagline"  => "Cancel Peacock Premium — free tier stays active",
    "about"    => "Peacock is NBCUniversal's streaming service with a free ad-supported tier plus Premium and Premium Plus paid plans. You can cancel the paid plan and revert to the free tier.",
    "refund"   => "Peacock does not offer refunds for the current billing period. Your paid access continues until the subscription ends.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>peacocktv.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Click <strong>Account</strong>",
          "Click <strong>Change Plan</strong>",
          "Select <strong>Peacock Free</strong> and confirm",
        ],
        "note"  => "Selecting the Free plan is equivalent to cancelling — Peacock always keeps your free account active.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Peacock</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Peacock</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Premium access continues until the billing period ends",
      "After that you revert to Peacock Free (ad-supported, limited content)",
      "Your watchlist and account are preserved on the free plan",
      "WWE Network, Premier League, and other exclusive content requires Premium",
    ],
    "faq" => [
      ["Is Peacock Free really free?",
       "Yes — Peacock has a genuinely free ad-supported tier with thousands of hours of content including many NBC shows, news, and sports. Premium unlocks next-day TV, movies, and live sports."],
      ["Can I get a refund from Peacock?",
       "Peacock does not offer refunds for the current billing period. Contact support at peacocktv.com/help if you were charged in error."],
    ],
    "related" => ["netflix", "hulu", "disney-plus", "hbo-max"],
  ],

  "apple-tv" => [
    "name"     => "Apple TV+",
    "emoji"    => "🍎",
    "color"    => "#555555",
    "tagline"  => "Cancel Apple TV+ directly in iPhone Settings",
    "about"    => "Apple TV+ is Apple's streaming service for original movies and shows. It's managed directly in your Apple account — no third-party sites needed.",
    "refund"   => "Apple offers refunds on a case-by-case basis through reportaproblem.apple.com. Generally, unused billing periods may be refunded if requested promptly.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>Settings</strong> app",
          "Tap your <strong>name</strong> at the top",
          "Tap <strong>Subscriptions</strong>",
          "Tap <strong>Apple TV+</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "Apple TV+ is always managed through Apple — there's no separate website.",
      ],
      "web" => [
        "label" => "Mac / Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Open the <strong>TV</strong> app on Mac, or go to <strong>tv.apple.com</strong>",
          "Click your <strong>profile picture</strong>",
          "Click <strong>Account Settings</strong>",
          "Click <strong>Manage Subscriptions</strong>",
          "Click <strong>Edit</strong> next to Apple TV+",
          "Click <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Also accessible via Apple ID at appleid.apple.com → Media &amp; Purchases → Subscriptions.",
      ],
    ],
    "after_cancel" => [
      "Apple TV+ access continues until the end of the billing period",
      "Your watchlist and viewing progress are saved",
      "Shared Family Sharing members also lose access",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["I got Apple TV+ free with my new device — how do I cancel it?",
       "Free Apple TV+ trials from device purchases are managed the same way — Settings → [Your Name] → Subscriptions → Apple TV+ → Cancel. Cancel before the trial ends to avoid being charged."],
      ["Does cancelling Apple TV+ affect other Apple subscriptions?",
       "No — Apple subscriptions are independent. Cancelling Apple TV+ doesn't affect Apple Music, iCloud+, Apple Arcade, or Apple News+."],
      ["Can I get a refund for Apple TV+?",
       "Go to reportaproblem.apple.com within 90 days of the charge and select 'Request a refund'. Apple processes refunds case by case, typically within 5–7 days."],
    ],
    "related" => ["netflix", "hulu", "disney-plus", "amazon-prime"],
  ],

  "tinder" => [
    "name"     => "Tinder Gold / Plus",
    "emoji"    => "🔥",
    "color"    => "#FF4458",
    "tagline"  => "Cancel Tinder Gold or Plus before the next charge",
    "about"    => "Tinder offers Tinder Plus, Gold, and Platinum subscriptions. You can cancel anytime through the app store where you subscribed — Tinder doesn't have a web cancellation page.",
    "refund"   => "Tinder does not offer refunds for subscription periods already paid. Refund requests for accidental charges must go through Apple or Google.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Tinder</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "All Tinder premium features purchased on iPhone are managed through Apple Subscriptions.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Tinder</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only for Tinder subscriptions purchased through Google Play.",
      ],
    ],
    "after_cancel" => [
      "Premium features (unlimited likes, Boosts, Gold badges) expire at billing end",
      "Your Tinder account and matches remain intact",
      "You revert to the free version with limited daily likes",
      "Unused Boosts and Super Likes are forfeited — use them before cancelling",
    ],
    "faq" => [
      ["Does cancelling Tinder delete my account?",
       "No — cancelling your paid subscription only removes premium features. Your account, matches, and conversations are kept. To delete your account, go to Tinder Settings → Delete Account."],
      ["What is the difference between Tinder Plus, Gold, and Platinum?",
       "Plus: unlimited likes + passport. Gold: Plus + see who liked you. Platinum: Gold + priority messages. All are cancelled the same way through your app store."],
      ["I was charged for Tinder but I thought I had a free trial — can I get a refund?",
       "Request a refund through Apple (reportaproblem.apple.com) or Google Play immediately. Both platforms typically approve refunds for first-time accidental charges."],
    ],
    "related" => ["bumble", "netflix", "spotify", "hinge"],
  ],

  "bumble" => [
    "name"     => "Bumble Boost / Premium",
    "emoji"    => "🐝",
    "color"    => "#FFC629",
    "tagline"  => "Cancel Bumble Boost in your subscription settings",
    "about"    => "Bumble offers Boost and Premium+ subscriptions for extra features like unlimited swipes, Rematch, and Spotlight. Cancel through the app store or inside the app.",
    "refund"   => "Bumble does not offer refunds for subscription periods already paid. Refund requests go through Apple or Google based on their policies.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Bumble</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only for Bumble subscriptions purchased through Apple.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Bumble</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only for Bumble subscriptions purchased through Google Play.",
      ],
      "web" => [
        "label" => "Inside Bumble App",
        "icon"  => "💻",
        "steps" => [
          "Open the <strong>Bumble</strong> app",
          "Tap your <strong>profile icon</strong>",
          "Tap <strong>Settings (gear icon)</strong>",
          "Tap <strong>Membership & Coins → Membership</strong>",
          "Tap <strong>Cancel subscription</strong>",
        ],
        "note"  => "Use in-app settings for subscriptions started directly in Bumble.",
      ],
    ],
    "after_cancel" => [
      "Bumble Boost/Premium continues until the billing period ends",
      "After that you revert to the free Bumble experience",
      "Your matches and conversations are kept",
      "Unused Spotlight or Superswipes are forfeited",
    ],
    "faq" => [
      ["Does cancelling Bumble Boost delete my profile?",
       "No — only premium features are removed. Your profile, matches, and conversations stay. To delete your account go to Bumble Settings → Delete account."],
      ["Can I pause Bumble instead of cancelling?",
       "Bumble offers a 'Snooze' feature that hides your profile temporarily (not a subscription pause). To stop charges, you must cancel the subscription."],
      ["I purchased Bumble Coins — do they expire when I cancel?",
       "Bumble Coins are separate from the subscription and don't expire when you cancel Boost/Premium. Use them before they potentially expire per Bumble's terms."],
    ],
    "related" => ["tinder", "netflix", "spotify", "calm"],
  ],

  "hellofresh" => [
    "name"     => "HelloFresh",
    "emoji"    => "🥗",
    "color"    => "#2D9B30",
    "tagline"  => "Skip weeks or cancel HelloFresh online",
    "about"    => "HelloFresh is a meal kit delivery service that auto-charges weekly. You can pause deliveries, skip weeks, or cancel online — no phone call needed.",
    "refund"   => "HelloFresh refunds are handled case by case. If a box arrives damaged or with wrong items, contact support within 5 days for a credit or refund.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>hellofresh.com</strong> and sign in",
          "Click your <strong>name</strong> in the top right → <strong>Account Settings</strong>",
          "Scroll to \"Plan Settings\" and click <strong>Cancel Plan</strong>",
          "Answer the cancellation survey",
          "Click <strong>Cancel My Subscription</strong> to confirm",
        ],
        "note"  => "Cancel at least 5 days before your next delivery date to avoid being charged for that box.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>HelloFresh</strong> app",
          "Tap the <strong>menu icon</strong> (top left)",
          "Tap <strong>Account Settings</strong>",
          "Tap <strong>Cancel Plan</strong> and follow the prompts",
        ],
        "note"  => "HelloFresh is not managed through Apple Subscriptions.",
      ],
    ],
    "after_cancel" => [
      "All upcoming deliveries and charges are stopped",
      "Any credits or promotions on your account may be forfeited",
      "You can reactivate your HelloFresh account at any time",
      "Cancellation takes effect for the next billing cycle",
    ],
    "faq" => [
      ["Can I just skip HelloFresh weeks instead of cancelling?",
       "Yes — HelloFresh lets you skip individual weeks from your account dashboard. Useful if you're traveling or have enough food. Skipping is free and easier than cancelling and resubscribing."],
      ["What's the deadline to cancel HelloFresh before being charged?",
       "Cancel at least 5 days before your next delivery date. If you cancel after that cutoff, you'll still receive and be charged for the next box."],
      ["How do I cancel HelloFresh free trial?",
       "Same process — Account Settings → Cancel Plan. Cancel before the trial ends to avoid being charged for the first full box."],
    ],
    "related" => ["amazon-prime", "doordash", "uber-eats", "netflix"],
  ],

  "calm" => [
    "name"     => "Calm",
    "emoji"    => "🧘",
    "color"    => "#4F70CC",
    "tagline"  => "Cancel Calm Premium — keep your meditation history",
    "about"    => "Calm offers meditation, sleep stories, and mindfulness content. You can cancel your annual or monthly subscription anytime — your saved content stays accessible during the paid period.",
    "refund"   => "Calm offers refunds within 48 hours of an annual subscription charge. Contact support at support.calm.com with your order details.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>calm.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>Settings</strong>",
          "Click <strong>Subscription</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm by clicking <strong>Cancel subscription</strong>",
        ],
        "note"  => "Web cancellation works for subscriptions started on calm.com.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Calm</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Calm</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Premium access continues until the billing period ends",
      "Your meditation journey stats and history are preserved",
      "Daily Calm and a limited selection remain free",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Do I lose my Calm meditation history when I cancel?",
       "No — your stats, streaks, and session history are saved in your account. The free tier gives access to some content; your history stays visible."],
      ["Can I get a refund for Calm?",
       "Calm offers refunds within 48 hours of an annual charge. Contact support.calm.com — include your account email and payment details."],
      ["What's the difference between Calm Free and Calm Premium?",
       "Calm Free gives access to the Daily Calm, a handful of meditations, and 7 Days of Calm. Premium unlocks 100+ guided meditations, sleep stories, masterclasses, and all music content."],
    ],
    "related" => ["spotify", "audible", "duolingo", "netflix"],
  ],

  "duolingo" => [
    "name"     => "Duolingo Plus",
    "emoji"    => "🦉",
    "color"    => "#58CC02",
    "tagline"  => "Cancel Duolingo Plus — keep your streak for free",
    "about"    => "Duolingo Plus (now called Duolingo Super) removes ads and gives unlimited hearts. The free version is nearly identical — you lose very little by cancelling.",
    "refund"   => "Duolingo does not offer refunds directly. Request a refund through Apple or Google within 48 hours of the charge.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Duolingo</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Duolingo</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>duolingo.com</strong> and sign in",
          "Click your <strong>profile picture</strong>",
          "Click <strong>Settings</strong>",
          "Under \"Duolingo Plus\", click <strong>Cancel subscription</strong>",
          "Confirm",
        ],
        "note"  => "Web cancellation works for subscriptions started at duolingo.com.",
      ],
    ],
    "after_cancel" => [
      "Duolingo Plus continues until the billing period ends",
      "After that you revert to Duolingo Free",
      "Your streak, progress, and XP are fully preserved",
      "Ads return and heart limits apply again on the free plan",
    ],
    "faq" => [
      ["Do I lose my Duolingo streak when I cancel Plus?",
       "No — your streak, progress, and all course completions are saved forever on your free account. You just lose ad-free learning and unlimited hearts."],
      ["Is Duolingo worth using for free after cancelling Plus?",
       "Yes — Duolingo Free is one of the most effective free language learning tools. The main differences are ads between lessons and heart limits. Most learners do fine on the free plan."],
      ["How do I get a refund for Duolingo Plus?",
       "Duolingo doesn't handle refunds directly. On iPhone, go to reportaproblem.apple.com. On Android, go to Google Play → Order History → Request a refund."],
    ],
    "related" => ["calm", "chatgpt", "grammarly", "spotify"],
  ],

  "siriusxm" => [
    "name"     => "SiriusXM",
    "emoji"    => "📻",
    "color"    => "#0046BE",
    "tagline"  => "Cancel SiriusXM — call or cancel online",
    "about"    => "SiriusXM offers satellite and streaming radio. You can cancel your subscription online or by phone. Online cancellation is available through your SiriusXM account.",
    "refund"   => "SiriusXM may offer a prorated refund for prepaid annual plans. Contact customer service at 1-866-635-2349 to discuss your specific situation.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>siriusxm.com/myaccount</strong> and sign in",
          "Click <strong>Subscriptions</strong>",
          "Click <strong>Cancel Subscription</strong> next to your plan",
          "Follow the prompts to confirm",
          "If no online cancel — call <strong>1-866-635-2349</strong>",
        ],
        "note"  => "SiriusXM is known for aggressive retention offers — stay firm if you want to cancel.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>SiriusXM</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the subscription period",
      "In-car satellite radio will stop working on the cancellation date",
      "The streaming app will also stop working",
      "You may receive win-back offers via email",
    ],
    "faq" => [
      ["Does SiriusXM make you call to cancel?",
       "SiriusXM prefers cancellations by phone (1-866-635-2349) but online cancellation is available at siriusxm.com/myaccount for most plans. If you can't find the cancel button online, call them."],
      ["SiriusXM keeps giving me retention offers — how do I actually cancel?",
       "Keep declining and specifically say 'I want to cancel, not pause or change plans.' If online doesn't work, call 1-866-635-2349 and say 'cancel' immediately when the IVR asks how to help."],
      ["Can I get a refund from SiriusXM?",
       "SiriusXM may offer a prorated refund on prepaid annual plans. Call customer service at 1-866-635-2349 within the billing period to request one."],
    ],
    "related" => ["spotify", "amazon-music", "apple-tv", "audible"],
  ],

  "amazon-music" => [
    "name"     => "Amazon Music Unlimited",
    "emoji"    => "🎶",
    "color"    => "#25D1DA",
    "tagline"  => "Cancel Amazon Music Unlimited without losing Prime Music",
    "about"    => "Amazon Music Unlimited is Amazon's premium music tier. Cancelling removes Music Unlimited but keeps Prime Music (included with Amazon Prime) and your purchased music.",
    "refund"   => "Amazon Music Unlimited follows Amazon's standard refund policy — contact support within 3 days of an unexpected charge for the best chance of a refund.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>amazon.com/music/unlimited</strong> and sign in",
          "Click your <strong>profile icon → Your Music settings</strong>",
          "Or go directly to <strong>amazon.com/hz/music/settings</strong>",
          "Find \"Amazon Music Unlimited\" and click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Cancelling Music Unlimited does not affect your Amazon Prime subscription.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Amazon Music</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Music Unlimited access ends at the billing period",
      "Prime Music (included with Prime) remains available if you have Prime",
      "Downloaded offline tracks from Unlimited are removed",
      "Your purchased music and playlists are preserved",
    ],
    "faq" => [
      ["Does cancelling Amazon Music Unlimited cancel Amazon Prime?",
       "No — they are separate subscriptions. Cancelling Music Unlimited only removes the premium music tier. Amazon Prime (and Prime Music) remain active."],
      ["What's the difference between Prime Music and Amazon Music Unlimited?",
       "Prime Music is included in Amazon Prime with about 2 million songs. Music Unlimited has 100+ million songs and is a separate add-on subscription."],
      ["Can I get a refund for Amazon Music Unlimited?",
       "Contact Amazon customer service within 3 days of the charge. Amazon generally offers refunds for recent accidental charges or first-time subscriptions."],
    ],
    "related" => ["spotify", "amazon-prime", "audible", "apple-tv"],
  ],

  "kindle-unlimited" => [
    "name"     => "Kindle Unlimited",
    "emoji"    => "📚",
    "color"    => "#FF9900",
    "tagline"  => "Cancel Kindle Unlimited — keep your purchased books",
    "about"    => "Kindle Unlimited is Amazon's ebook subscription giving access to over 3 million titles. Purchased Kindle books stay in your library forever after cancellation.",
    "refund"   => "Kindle Unlimited follows Amazon's standard policy. Contact Amazon support within 3 days of a charge for an accidental charge refund.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>amazon.com/kindle-unlimited</strong> and sign in",
          "Click <strong>Manage Membership</strong>",
          "Click <strong>Cancel Kindle Unlimited Membership</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Kindle Unlimited is always managed on Amazon.com — not through app stores.",
      ],
      "iphone" => [
        "label" => "Kindle App",
        "icon"  => "📱",
        "steps" => [
          "Open a browser on your iPhone and go to <strong>amazon.com/kindle-unlimited</strong>",
          "Sign in and tap <strong>Manage Membership → Cancel</strong>",
        ],
        "note"  => "Due to Apple's policies, Kindle subscriptions cannot be managed inside the Kindle iOS app — use a browser.",
      ],
    ],
    "after_cancel" => [
      "Access to Kindle Unlimited titles ends at the billing period",
      "Books you bought outright stay in your library forever",
      "Borrowed KU titles are removed from your device",
      "You can re-borrow KU books anytime if you resubscribe",
    ],
    "faq" => [
      ["Do I lose my purchased Kindle books when I cancel Unlimited?",
       "No — books you purchased stay in your Kindle library forever. You only lose access to Kindle Unlimited borrowed titles, not purchased books."],
      ["How is Kindle Unlimited different from buying Kindle books?",
       "Kindle Unlimited is a subscription for borrowing from a library of 3M+ titles. Purchased Kindle books are permanent. KU works best if you read frequently."],
      ["Can I get a refund for Kindle Unlimited?",
       "Contact Amazon customer service via chat at amazon.com — they often refund accidental charges or charges for a plan not used in the current month."],
    ],
    "related" => ["amazon-prime", "audible", "amazon-music", "netflix"],
  ],

  "starz" => [
    "name"     => "Starz",
    "emoji"    => "⭐",
    "color"    => "#000000",
    "tagline"  => "Cancel Starz online in 2 minutes",
    "about"    => "Starz is a premium cable and streaming network. You can cancel your Starz subscription online without calling customer service.",
    "refund"   => "Starz does not offer refunds for the current billing period. Access continues until the subscription end date.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>starz.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>Account Settings</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "This works for subscriptions started directly on Starz.com.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Starz</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Starz</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Starz access continues until the billing period ends",
      "Your watchlist is saved if you resubscribe",
      "Starz content is also available as an Amazon Prime Video add-on channel",
      "No cancellation fee",
    ],
    "faq" => [
      ["Can I cancel Starz if I subscribed through Amazon Prime?",
       "Yes — if you added Starz as an Amazon channel, cancel it through Amazon: amazon.com/videosubscriptions → Starz → Cancel channel."],
      ["Can I get a refund from Starz?",
       "Starz generally does not refund the current billing period. Contact support at starz.com if you believe you were charged in error."],
    ],
    "related" => ["netflix", "hulu", "hbo-max", "peacock"],
  ],

  "espn-plus" => [
    "name"     => "ESPN+",
    "emoji"    => "🏈",
    "color"    => "#CC0000",
    "tagline"  => "Cancel ESPN+ or the Disney Bundle online",
    "about"    => "ESPN+ is Disney's sports streaming add-on. It can be cancelled on its own, or as part of the Disney Bundle (Disney+, Hulu, ESPN+).",
    "refund"   => "ESPN+ does not offer refunds for the current billing period. Contact support at help.disneyplus.com for billing errors.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>disneyplus.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Click <strong>Account</strong>",
          "Under \"Subscription\", click <strong>Cancel subscription</strong>",
          "Confirm",
        ],
        "note"  => "ESPN+ standalone and the Disney Bundle are both managed through DisneyPlus.com.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>ESPN+</strong> (or Disney+)",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "ESPN+ access continues until the billing period ends",
      "If on the Disney Bundle, Disney+ and Hulu are also cancelled",
      "Live event access ends with the subscription",
      "Your account history is preserved",
    ],
    "faq" => [
      ["Can I cancel ESPN+ without cancelling Hulu and Disney+?",
       "If you have the Disney Bundle, you must cancel all three together. For standalone ESPN+, you can cancel only ESPN+ at disneyplus.com → Account → Subscription."],
      ["Does ESPN+ include the full ESPN channel?",
       "No — ESPN+ is a separate streaming add-on. It includes exclusive games and events not on cable ESPN, but not the full cable ESPN channel."],
    ],
    "related" => ["disney-plus", "hulu", "youtube-tv", "peacock"],
  ],

  "paramount-plus" => [
    "name"     => "Paramount+",
    "emoji"    => "⛰️",
    "color"    => "#0064FF",
    "tagline"  => "Cancel Paramount+ in 3 steps online",
    "about"    => "Paramount+ streams CBS, MTV, Nickelodeon, and Paramount movies. You can cancel online anytime without calling.",
    "refund"   => "Paramount+ does not offer refunds for the current billing period. Contact support for billing errors.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>paramountplus.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Click <strong>Account &amp; Settings</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Follow the prompts to confirm",
        ],
        "note"  => "Works for subscriptions started at paramountplus.com.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Paramount+</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Paramount+</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the billing period ends",
      "Your profile and watchlist are preserved if you resubscribe",
      "Showtime content (if bundled) is also removed",
      "No cancellation fee",
    ],
    "faq" => [
      ["Does Paramount+ include Showtime?",
       "The Paramount+ with SHOWTIME plan includes Showtime content. Cancelling that plan cancels both. The Essential plan does not include Showtime."],
      ["Can I get a refund from Paramount+?",
       "Paramount+ does not offer refunds for current billing periods. Contact support at paramountplus.com/help for billing errors."],
    ],
    "related" => ["netflix", "hulu", "peacock", "disney-plus"],
  ],

  "new-york-times" => [
    "name"     => "New York Times",
    "emoji"    => "📰",
    "color"    => "#121212",
    "tagline"  => "Cancel NYT subscription — call or cancel online",
    "about"    => "The New York Times offers digital news, games (Wordle, Spelling Bee), and Cooking subscriptions. Cancellation options vary by plan.",
    "refund"   => "NYT does not typically offer refunds for the current billing period. Contact customer service for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>nytimes.com/account</strong> and sign in",
          "Click <strong>Cancel subscription</strong> (if available)",
          "If not available online — call <strong>1-800-591-9233</strong>",
          "Or use online chat at <strong>nytimes.com/help</strong>",
          "Confirm your cancellation and note the confirmation number",
        ],
        "note"  => "NYT often requires a phone call or live chat to complete cancellation — have your account email and zip code ready.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>New York Times</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the billing period ends",
      "NYT free articles (limited per month) remain accessible",
      "NYT Games and Cooking are separate subscriptions",
      "You may receive a discounted retention offer",
    ],
    "faq" => [
      ["Do I have to call to cancel the New York Times?",
       "Many NYT subscribers report needing to call 1-800-591-9233 or use live chat to cancel. Check nytimes.com/account first — some plans show a cancel button online."],
      ["If I cancel NYT news, do I also cancel NYT Games and Cooking?",
       "No — NYT Games (Wordle, Spelling Bee, Crossword) and NYT Cooking are separate subscriptions. Cancel each one individually."],
      ["Can I get a refund from the New York Times?",
       "NYT does not typically refund current billing periods. Contact customer service at 1-800-591-9233 for billing disputes."],
    ],
    "related" => ["grammarly", "chatgpt", "microsoft-365", "adobe"],
  ],

  "mcafee" => [
    "name"     => "McAfee",
    "emoji"    => "🔐",
    "color"    => "#D71920",
    "tagline"  => "Turn off McAfee auto-renewal before you're charged",
    "about"    => "McAfee antivirus auto-renews annually at full price. Turn off auto-renewal in your MyAccount dashboard to prevent next year's charge.",
    "refund"   => "McAfee offers a 30-day money-back guarantee on new purchases. Contact McAfee support within 30 days for a full refund.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>myaccount.mcafee.com</strong> and sign in",
          "Click <strong>My Account</strong> in the top right",
          "Click <strong>Auto-Renewal Settings</strong>",
          "Toggle off <strong>Auto-Renewal</strong> for your subscription",
          "Confirm the change",
        ],
        "note"  => "Turning off auto-renewal lets your current subscription run its full term without a future charge.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>McAfee</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "McAfee protection continues until the end of your subscription",
      "Auto-renewal is off — you won't be charged next year",
      "You can manually renew before expiry if needed",
      "McAfee free tools (some browser extensions) remain usable",
    ],
    "faq" => [
      ["Can I get a refund from McAfee?",
       "Yes — McAfee has a 30-day money-back guarantee for new purchases. Contact McAfee support at mcafee.com/support within 30 days of purchase."],
      ["McAfee renewed automatically without warning — can I get a refund?",
       "McAfee is required to notify you before auto-renewal. If you received no notice or the charge was unexpected, contact support immediately — they often refund recent unexpected renewals."],
      ["What's the difference between cancelling McAfee and turning off auto-renewal?",
       "Turning off auto-renewal is the preferred method — your protection continues for the paid period and stops at renewal. Requesting an early cancellation + refund is only worth doing within the 30-day window."],
    ],
    "related" => ["norton", "experian", "microsoft-365", "adobe"],
  ],

  "weight-watchers" => [
    "name"     => "WeightWatchers",
    "emoji"    => "⚖️",
    "color"    => "#0066CC",
    "tagline"  => "Cancel WeightWatchers online — no phone call needed",
    "about"    => "WeightWatchers (WW) is a weight management and wellness subscription. You can cancel your subscription online through your account settings.",
    "refund"   => "WW does not offer refunds for the current billing period. Contact support if you were charged unexpectedly.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>weightwatchers.com</strong> and sign in",
          "Click your <strong>profile picture</strong> in the top right",
          "Click <strong>My Subscription</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "WW may offer a pause or discounted plan — click past offers to complete cancellation.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>WeightWatchers</strong> (or WW)",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>WW (Weight Watchers)</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the billing period ends",
      "Your food diary and progress history are preserved for 60 days",
      "Workshop attendance (if applicable) stops at cancellation",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Does cancelling WW delete my food diary and progress?",
       "Your history is saved for 60 days after cancellation. After that it may be permanently deleted. Export or screenshot your progress data before cancelling if you want to keep it."],
      ["Can I freeze my WW membership instead of cancelling?",
       "WW offers account freezes in some regions. Check My Subscription settings — if available, you can freeze for 1–3 months for a reduced fee."],
    ],
    "related" => ["calm", "duolingo", "netflix", "spotify"],
  ],

  "youtube-tv" => [
    "name"     => "YouTube TV",
    "emoji"    => "📡",
    "color"    => "#FF0000",
    "tagline"  => "Cancel YouTube TV in 2 clicks — pause is also free",
    "about"    => "YouTube TV is Google's live TV streaming service. You can cancel anytime online or pause for up to 6 months without being charged.",
    "refund"   => "YouTube TV offers prorated refunds for unused months if you cancel mid-cycle. Contact Google support for refund requests.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>tv.youtube.com</strong> and sign in",
          "Click your <strong>profile picture</strong> in the top right",
          "Click <strong>Settings</strong>",
          "Click <strong>Membership</strong>",
          "Click <strong>Manage</strong> next to your plan",
          "Click <strong>Cancel membership</strong> and confirm",
        ],
        "note"  => "You can also pause YouTube TV for up to 6 months from the same Membership settings.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>YouTube TV</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>YouTube TV</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Live TV access ends immediately or at billing period end",
      "DVR recordings are deleted after 21 days",
      "Your YouTube TV account and preferences are preserved",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Can I pause YouTube TV instead of cancelling?",
       "Yes — YouTube TV lets you pause for 1–6 months. You won't be charged during the pause but also can't watch. Go to Settings → Membership → Pause membership."],
      ["Do I lose my YouTube TV DVR recordings when I cancel?",
       "DVR recordings are stored for 9 months while subscribed. After cancellation, recordings are deleted after 21 days — download anything important before cancelling."],
      ["Can I get a refund for YouTube TV?",
       "YouTube TV typically doesn't offer refunds for current billing periods. However, if you cancel immediately after a charge you weren't expecting, contact Google support — they sometimes make exceptions."],
    ],
    "related" => ["hulu", "espn-plus", "disney-plus", "netflix"],
  ],

  "fubotv" => [
    "name"     => "Fubo",
    "emoji"    => "⚽",
    "color"    => "#F26522",
    "tagline"  => "Cancel Fubo online — no contract required",
    "about"    => "Fubo is a sports-focused live TV streaming service. It's month-to-month with no contract — you can cancel anytime online.",
    "refund"   => "Fubo does not offer refunds for the current billing period. Access continues until the subscription end date.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>fubo.tv</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>Account</strong>",
          "Under \"Your Subscription\", click <strong>Cancel Subscription</strong>",
          "Select a reason and confirm",
        ],
        "note"  => "Fubo may offer a pause or discounted plan during cancellation — skip to complete the cancellation.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>FuboTV</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>FuboTV</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Live TV access continues until the billing period ends",
      "Cloud DVR recordings are accessible until the period ends",
      "No cancellation fee — Fubo is month-to-month",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Does Fubo have a contract?",
       "No — Fubo is month-to-month. You can cancel anytime without an early termination fee."],
      ["Can I get a refund from Fubo?",
       "Fubo does not offer prorated refunds. Contact support at fubo.tv/support if you were charged in error."],
      ["Can I pause Fubo?",
       "Fubo does not offer a native pause feature. You must cancel and resubscribe. Since it's month-to-month, this is simple to do."],
    ],
    "related" => ["youtube-tv", "hulu", "espn-plus", "disney-plus"],
  ],

  "google-play" => [
    "name"     => "Google Play Subscriptions",
    "emoji"    => "▶️",
    "color"    => "#34A853",
    "tagline"  => "Cancel any Android app subscription in one place",
    "about"    => "Google Play is the central place to cancel all Android app subscriptions — Netflix, Spotify, Duolingo, and any app you subscribed to through the Play Store.",
    "refund"   => "Google Play offers refunds within 48 hours of a subscription charge in some cases. Go to play.google.com → Subscriptions → Request refund.",
    "platforms" => [
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open the <strong>Google Play Store</strong> app on your Android device",
          "Tap your <strong>profile picture</strong> in the top right corner",
          "Tap <strong>Payments &amp; subscriptions</strong>",
          "Tap <strong>Subscriptions</strong>",
          "Find the subscription you want to cancel and tap it",
          "Tap <strong>Cancel subscription</strong>",
          "Select a reason and tap <strong>Continue</strong>",
          "Tap <strong>Cancel subscription</strong> again to confirm",
        ],
        "note"  => "This only cancels subscriptions purchased through Google Play. Subscriptions started on a website must be cancelled there.",
      ],
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>play.google.com</strong> and sign in with your Google account",
          "Click the <strong>☰ menu</strong> in the top left",
          "Click <strong>Subscriptions</strong>",
          "Find the subscription and click <strong>Manage</strong>",
          "Click <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "You can manage all your Google Play subscriptions from any browser at play.google.com/store/account/subscriptions.",
      ],
    ],
    "after_cancel" => [
      "You keep access until the end of the current billing period",
      "The app remains on your device — you just lose premium features",
      "Cancelled subscriptions show as 'Expired' in your Play Store",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["How do I see all my Google Play subscriptions at once?",
       "Open Google Play → tap your profile picture → Payments & subscriptions → Subscriptions. You'll see every active and cancelled subscription linked to your Google account."],
      ["Can I get a refund from Google Play?",
       "Google Play allows refund requests within 48 hours at play.google.com → Subscriptions → Report a problem. After 48 hours, contact the app developer directly."],
      ["I cancelled on Google Play but I'm still being charged — why?",
       "Check that the subscription shows as 'Cancelled' in your Subscriptions list. If you subscribed on a website (not through Google Play), you must cancel there separately."],
    ],
    "related" => ["netflix", "spotify", "youtube-tv", "disney-plus"],
  ],

  "app-store" => [
    "name"     => "App Store Subscriptions",
    "emoji"    => "📱",
    "color"    => "#0071E3",
    "tagline"  => "Cancel any iPhone subscription from one screen",
    "about"    => "Apple's App Store subscription manager lets you see and cancel all your iPhone and iPad subscriptions in one place — Netflix, Spotify, Hulu, and any app you subscribed to through Apple.",
    "refund"   => "Apple processes refunds at reportaproblem.apple.com within 90 days of the charge. Approval is case by case.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>Settings</strong> app on your iPhone or iPad",
          "Tap your <strong>name</strong> at the very top",
          "Tap <strong>Subscriptions</strong>",
          "You'll see all active and expired subscriptions",
          "Tap the subscription you want to cancel",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "This only works for subscriptions you started through the App Store. Subscriptions from websites must be cancelled on those websites.",
      ],
      "web" => [
        "label" => "Mac / iTunes",
        "icon"  => "💻",
        "steps" => [
          "Open the <strong>App Store</strong> on your Mac",
          "Click your <strong>name</strong> in the bottom left",
          "Click <strong>Account Settings</strong> (you may need to sign in)",
          "Scroll to <strong>Subscriptions</strong> and click <strong>Manage</strong>",
          "Click <strong>Edit</strong> next to the subscription",
          "Click <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "You can also manage subscriptions at appleid.apple.com → Media & Purchases → Manage subscriptions.",
      ],
    ],
    "after_cancel" => [
      "You keep access until the end of the current billing period",
      "The app stays on your device — you just lose premium features",
      "Cancelled subscriptions still appear in your list (marked 'Cancelled')",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["How do I see all my iPhone subscriptions in one place?",
       "Go to Settings → [Your Name] → Subscriptions. This shows every active and recently cancelled subscription on your Apple ID. It's the fastest way to audit what you're paying for."],
      ["Can I get a refund for an App Store subscription?",
       "Go to reportaproblem.apple.com, sign in, find the charge, and select 'Request a refund'. Apple reviews each request — accidental charges and first-time subscriptions are often approved."],
      ["Why isn't my subscription showing in Apple Subscriptions?",
       "If a subscription isn't listed, you likely subscribed directly on the app's website (not through the App Store). Check your email for the original signup confirmation to find where to cancel."],
    ],
    "related" => ["netflix", "spotify", "hulu", "disney-plus"],
  ],

  "ipsy" => [
    "name"     => "Ipsy",
    "emoji"    => "💄",
    "color"    => "#D5008F",
    "tagline"  => "Cancel Ipsy Glam Bag online — no phone call needed",
    "about"    => "Ipsy is a monthly beauty subscription box. You can cancel your Glam Bag, Glam Bag Plus, or Glam Bag X subscription online through your Ipsy account.",
    "refund"   => "Ipsy does not offer refunds for boxes already shipped. Cancel before the 14th of the month to avoid being charged for the next box.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>ipsy.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Click <strong>Account Settings</strong>",
          "Click <strong>Manage membership</strong>",
          "Click <strong>Cancel membership</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "Cancel before the 14th of the month to avoid being charged for the next box. Ipsy bills around the 15th–20th.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Ipsy</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Any already-shipped boxes will still be delivered",
      "No more boxes will be shipped after the cancellation",
      "Your Ipsy account and beauty quiz results are saved",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["When do I need to cancel Ipsy to avoid next month's charge?",
       "Cancel before the 14th of the month. Ipsy processes billing around the 15th–20th — cancelling after that means you've already been charged for the next box."],
      ["Can I pause Ipsy instead of cancelling?",
       "Yes — Ipsy offers a Skip option to skip the next month's box. Go to Account Settings → Manage membership → Skip a month. Useful if you just want a break."],
      ["Can I get a refund from Ipsy?",
       "Ipsy doesn't refund boxes that have already been shipped. If you were charged for a box you never received, contact Ipsy support at help.ipsy.com."],
    ],
    "related" => ["hellofresh", "amazon-prime", "netflix", "spotify"],
  ],

  "sling-tv" => [
    "name"     => "Sling TV",
    "emoji"    => "📺",
    "color"    => "#2979FF",
    "tagline"  => "Cancel Sling TV online — month-to-month, no commitment",
    "about"    => "Sling TV is a live TV streaming service with Orange and Blue packages. There's no contract — cancel anytime online.",
    "refund"   => "Sling TV does not offer refunds for the current billing period. Access continues until the subscription end date.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>sling.com</strong> and sign in",
          "Click your <strong>profile name</strong> in the top right",
          "Click <strong>My Account</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "Sling may show a pause offer or promotional rate — skip these if you want to fully cancel.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Sling TV</strong>",
          "Tap <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Live TV access continues until the billing period ends",
      "Cloud DVR recordings are preserved until the period ends",
      "No cancellation fee",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Can I pause Sling TV instead of cancelling?",
       "Yes — Sling TV offers a pause option for $5/month, which keeps your guide settings and DVR. Go to My Account → Pause subscription."],
      ["Can I get a refund from Sling TV?",
       "Sling does not offer refunds for the current billing period. If you were charged unexpectedly, contact Sling support at sling.com/help."],
    ],
    "related" => ["youtube-tv", "fubotv", "hulu", "espn-plus"],
  ],

  "planet-fitness" => [
    "name"     => "Planet Fitness",
    "emoji"    => "💪",
    "color"    => "#7B2D8B",
    "tagline"  => "Cancel Planet Fitness membership — in person or by mail",
    "about"    => "Planet Fitness memberships ($10/mo Classic or $25/mo Black Card) must be cancelled in person at your home club or by certified mail. You cannot cancel online or by phone.",
    "refund"   => "Planet Fitness does not offer refunds. Annual fees are non-refundable once charged. Cancel before the 17th of the month to avoid the next monthly billing.",
    "platforms" => [
      "inperson" => [
        "label" => "In Person (Home Club)",
        "icon"  => "🏋️",
        "steps" => [
          "Visit your <strong>home club</strong> (the location where you signed up)",
          "Ask the front desk staff for a <strong>cancellation form</strong>",
          "Complete and sign the form",
          "Ask for a <strong>written confirmation</strong> or receipt",
          "Note: cancellation takes effect at end of your current billing cycle",
        ],
        "note"  => "You must go to your home club specifically — other Planet Fitness locations cannot process your cancellation.",
      ],
      "mail" => [
        "label" => "Certified Mail",
        "icon"  => "✉️",
        "steps" => [
          "Write a cancellation letter including your <strong>full name, address, date of birth, and member ID</strong>",
          "Send via <strong>certified mail with return receipt</strong> to your home club address",
          "Keep the tracking confirmation as proof",
          "Allow 5&ndash;7 business days for processing",
        ],
        "note"  => "Certified mail is the safest method if you cannot visit in person. Find your club address at planetfitness.com/clubs.",
      ],
    ],
    "after_cancel" => [
      "Membership remains active until the end of your current billing period",
      "Annual fee ($39) is charged in August — cancel before then to avoid it",
      "You can rejoin at any time with no penalty",
      "Bring your key fob or membership card when visiting to cancel",
    ],
    "faq" => [
      ["Can I cancel Planet Fitness online?",
       "No. Planet Fitness does not allow online cancellations. You must cancel in person at your home club or send a certified letter to your home club address."],
      ["How do I avoid the Planet Fitness annual fee?",
       "The annual fee ($39) is typically charged in August. Cancel before the 17th of July to avoid it. Check your specific billing date in your member agreement."],
      ["What is the Planet Fitness cancellation policy?",
       "Planet Fitness requires in-person or certified mail cancellation. There is no early termination fee for month-to-month members. Annual members may owe a fee if cancelling mid-contract."],
    ],
    "related" => ["peloton", "noom", "calm", "headspace"],
  ],

  "linkedin" => [
    "name"     => "LinkedIn Premium",
    "emoji"    => "💼",
    "color"    => "#0A66C2",
    "tagline"  => "Cancel LinkedIn Premium in 2 minutes",
    "about"    => "LinkedIn Premium offers Career, Business, Sales Navigator, and Recruiter plans ranging from $29.99 to $99.99/month. All plans can be cancelled directly from your LinkedIn account settings.",
    "refund"   => "LinkedIn does not offer refunds for unused portions of your subscription. However, if you were charged unexpectedly, contact LinkedIn support — they sometimes grant a one-time courtesy refund.",
    "platforms" => [
      "web" => [
        "label" => "Web Browser",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>linkedin.com</strong> and sign in",
          "Click your <strong>profile photo</strong> at top right",
          "Select <strong>Settings &amp; Privacy</strong>",
          "Click <strong>Subscriptions &amp; payments</strong> in the left menu",
          "Under Premium subscriptions, click <strong>Manage subscription</strong>",
          "Click <strong>Cancel subscription</strong> and follow the prompts",
        ],
        "note"  => "LinkedIn will try to offer you a discounted plan — scroll past the offers to find the cancel link.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>LinkedIn</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Only use this method if you subscribed through Apple. Otherwise cancel via the web.",
      ],
    ],
    "after_cancel" => [
      "Premium access continues until the end of your billing period",
      "Your profile reverts to free LinkedIn",
      "InMail credits expire at cancellation",
      "You keep your connections, posts, and profile data",
    ],
    "faq" => [
      ["Will my LinkedIn data disappear after cancelling Premium?",
       "No. All your connections, messages, and profile information remain. Only Premium features (InMail, who viewed your profile, etc.) are removed."],
      ["Can I get a refund from LinkedIn?",
       "LinkedIn&apos;s policy is no refunds, but customer support sometimes grants a one-time courtesy refund if you contact them shortly after being charged. Go to linkedin.com/help to submit a request."],
      ["How do I cancel LinkedIn Sales Navigator?",
       "Go to linkedin.com/sales → Admin → Account Settings → Cancel Subscription. Sales Navigator cancellations must be done by an account admin."],
    ],
    "related" => ["zoom", "dropbox", "microsoft-365", "grammarly"],
  ],

  "playstation-plus" => [
    "name"     => "PlayStation Plus",
    "emoji"    => "🎮",
    "color"    => "#003087",
    "tagline"  => "Cancel PS Plus subscription easily",
    "about"    => "PlayStation Plus (Essential $9.99/mo, Extra $14.99/mo, Premium $17.99/mo) gives access to monthly games, online multiplayer, and a game catalog. Cancel through your PlayStation account.",
    "refund"   => "Sony does not offer refunds for PS Plus once the subscription period has started. If you have not used the subscription at all, contact PlayStation support for a possible exception.",
    "platforms" => [
      "web" => [
        "label" => "PlayStation Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>playstation.com</strong> and sign in",
          "Click your <strong>avatar icon</strong> at top right",
          "Select <strong>Subscription</strong>",
          "Click <strong>Turn Off Auto-Renew</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Turning off auto-renew cancels the subscription at the end of the current period.",
      ],
      "console" => [
        "label" => "PS4 / PS5 Console",
        "icon"  => "🕹️",
        "steps" => [
          "Go to <strong>Settings → Account Management → Account Information → PlayStation Subscriptions</strong>",
          "Select <strong>PlayStation Plus</strong>",
          "Select <strong>Turn Off Auto-Renew</strong>",
        ],
        "note"  => "This works on both PS4 and PS5.",
      ],
    ],
    "after_cancel" => [
      "PS Plus access continues until the end of your paid period",
      "Online multiplayer becomes unavailable after expiry",
      "Monthly free games claimed remain in your library while Plus is active",
      "PS Plus Essential games leave your library when subscription ends",
    ],
    "faq" => [
      ["Do I lose my free PS Plus games if I cancel?",
       "Yes — PS Plus Essential monthly games require an active subscription to play. They return to your library if you resubscribe. PS Plus Extra/Premium games also become unplayable after cancellation."],
      ["Can I get a refund for PlayStation Plus?",
       "Sony generally does not refund PS Plus. Contact PlayStation Support at playstation.com/support if you were charged in error — decisions are made case by case."],
      ["How do I cancel PS Plus on PS5?",
       "On PS5: Settings → Users and Accounts → Account → Payment and Subscriptions → Subscription → Turn Off Auto-Renew."],
    ],
    "related" => ["xbox-game-pass", "hulu", "netflix", "twitch"],
  ],

  "xbox-game-pass" => [
    "name"     => "Xbox Game Pass",
    "emoji"    => "🟢",
    "color"    => "#107C10",
    "tagline"  => "Cancel Xbox Game Pass — keep your saved games",
    "about"    => "Xbox Game Pass Ultimate ($19.99/mo) includes 100+ games, Xbox Live Gold, and PC Game Pass. Cancel anytime through your Microsoft account online.",
    "refund"   => "Microsoft does not offer refunds for Game Pass once the billing cycle starts. For unexpected charges, contact Microsoft support at support.microsoft.com.",
    "platforms" => [
      "web" => [
        "label" => "Microsoft Account Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.microsoft.com/services</strong> and sign in",
          "Find <strong>Xbox Game Pass</strong> and click <strong>Manage</strong>",
          "Click <strong>Cancel</strong>",
          "Select a reason and click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Microsoft will offer a free month or discounted rate before cancelling — scroll past to find the confirm button.",
      ],
      "console" => [
        "label" => "Xbox Console",
        "icon"  => "🕹️",
        "steps" => [
          "Press the <strong>Xbox button</strong> to open the guide",
          "Go to <strong>Profile &amp; system → Settings → Account → Subscriptions</strong>",
          "Select <strong>Xbox Game Pass</strong>",
          "Select <strong>Cancel subscription</strong>",
        ],
        "note"  => "Works on Xbox One, Series S, and Series X.",
      ],
    ],
    "after_cancel" => [
      "Game Pass access continues until the end of your billing period",
      "Downloaded Game Pass games become unplayable after expiry",
      "Your saved game data is preserved on the cloud",
      "Games you purchased separately are unaffected",
    ],
    "faq" => [
      ["Do I lose my saved games if I cancel Xbox Game Pass?",
       "No — cloud saves are preserved. If you re-subscribe later, your progress will be there. However, you won&apos;t be able to play Game Pass titles until you resubscribe."],
      ["Can I cancel Xbox Game Pass and keep Gold?",
       "No — Xbox Live Gold was merged into Game Pass Ultimate. You cannot subscribe to Gold separately anymore."],
      ["How do I cancel Xbox Game Pass on PC?",
       "Open the Xbox app on your PC → click your profile → Xbox Game Pass → Manage → Cancel. Or go to account.microsoft.com/services on any browser."],
    ],
    "related" => ["playstation-plus", "twitch", "espn-plus", "hulu"],
  ],

  "twitch" => [
    "name"     => "Twitch",
    "emoji"    => "🟣",
    "color"    => "#9146FF",
    "tagline"  => "Cancel Twitch subscription or Prime Gaming",
    "about"    => "Twitch subscriptions support streamers directly ($4.99&ndash;$24.99/month) or via Twitch Prime (Amazon Prime benefit). Each streamer subscription is separate and must be cancelled individually.",
    "refund"   => "Twitch does not offer refunds for channel subscriptions. For Bits purchases or technical billing errors, contact Twitch support at help.twitch.tv.",
    "platforms" => [
      "web" => [
        "label" => "Twitch Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>twitch.tv</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Subscriptions</strong>",
          "Find the channel subscription you want to cancel",
          "Click the <strong>gear icon</strong> next to it",
          "Select <strong>Don&apos;t Renew Subscription</strong>",
        ],
        "note"  => "You must cancel each channel subscription separately. There is no &quot;cancel all&quot; option.",
      ],
      "prime" => [
        "label" => "Twitch Prime (Amazon)",
        "icon"  => "📦",
        "steps" => [
          "Go to <strong>twitch.tv</strong> → profile icon → <strong>Prime Gaming</strong>",
          "Click <strong>Manage Prime Gaming Benefits</strong>",
          "Or cancel directly at <strong>amazon.com/primetwitch</strong>",
          "Click <strong>Do not renew</strong> next to the Twitch channel subscription",
        ],
        "note"  => "Twitch Prime subs are free with Amazon Prime but still need manual renewal each month.",
      ],
    ],
    "after_cancel" => [
      "Channel subscription remains active until the end of the current month",
      "Subscriber-only emotes and chat badges are removed",
      "Ad-free viewing ends on that channel",
      "Your Twitch account and followed channels remain",
    ],
    "faq" => [
      ["How do I cancel all Twitch subscriptions at once?",
       "There is no bulk cancel option. Go to twitch.tv → profile → Subscriptions and cancel each channel one by one."],
      ["What happens to my Twitch Prime sub if I cancel Amazon Prime?",
       "If you cancel Amazon Prime, your Twitch Prime benefit ends and any active Twitch Prime subscriptions will not renew next month."],
      ["Can I get a refund for a Twitch subscription?",
       "Twitch subscriptions are generally non-refundable. For billing errors, contact support at help.twitch.tv within 7 days of the charge."],
    ],
    "related" => ["youtube-tv", "xbox-game-pass", "playstation-plus", "netflix"],
  ],

  "apple-music" => [
    "name"     => "Apple Music",
    "emoji"    => "🎵",
    "color"    => "#FC3C44",
    "tagline"  => "Cancel Apple Music in Settings",
    "about"    => "Apple Music offers Individual ($10.99/mo), Family ($16.99/mo), and Student ($5.99/mo) plans with 100 million songs and offline listening. Cancel through Apple Settings or iTunes.",
    "refund"   => "Apple Music subscriptions are managed by Apple. Refunds are handled through reportaproblem.apple.com — accidental charges within 48 hours are usually approved.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Apple Music</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "If you don&apos;t see Apple Music listed, you may be subscribed through a Family Sharing plan. Ask the family organizer to cancel.",
      ],
      "mac" => [
        "label" => "Mac (Music App)",
        "icon"  => "🖥️",
        "steps" => [
          "Open the <strong>Music app</strong>",
          "Click <strong>Account → View My Account</strong>",
          "Scroll to <strong>Subscriptions</strong> and click <strong>Manage</strong>",
          "Click <strong>Edit</strong> next to Apple Music",
          "Click <strong>Cancel Subscription</strong>",
        ],
        "note"  => "You can also manage through System Settings → Apple ID → Media &amp; Purchases.",
      ],
      "web" => [
        "label" => "Web (iTunes)",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>music.apple.com</strong> and sign in",
          "Click your <strong>account icon</strong>",
          "Go to <strong>Settings</strong>",
          "Under Subscriptions, click <strong>Manage</strong>",
          "Click <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Web access to Apple Music subscription management is limited — iPhone or Mac is easier.",
      ],
    ],
    "after_cancel" => [
      "Apple Music access continues until the end of your billing period",
      "Downloaded music for offline use becomes unplayable",
      "Your playlists remain in the Music app but tracks show as unavailable",
      "Music you purchased separately (not streamed) is always accessible",
    ],
    "faq" => [
      ["Will I lose my playlists if I cancel Apple Music?",
       "Your playlists remain in the Music app but the songs will show as unavailable. If you re-subscribe, they become playable again."],
      ["How do I cancel Apple One (which includes Apple Music)?",
       "Go to Settings → [Your Name] → Subscriptions → Apple One → Cancel Subscription. This cancels the bundle including Apple Music, TV+, Arcade, etc."],
      ["Can I get a refund for Apple Music?",
       "Go to reportaproblem.apple.com, select the Apple Music charge, and request a refund. Apple approves refunds for accidental charges, especially within 48 hours."],
    ],
    "related" => ["spotify", "amazon-music", "audible", "siriusxm"],
  ],

  "instacart" => [
    "name"     => "Instacart+",
    "emoji"    => "🛒",
    "color"    => "#43B02A",
    "tagline"  => "Cancel Instacart+ in your account settings",
    "about"    => "Instacart+ (formerly Instacart Express) costs $9.99/month or $99/year and offers free delivery on orders over $35 and reduced service fees.",
    "refund"   => "Instacart+ annual plans are eligible for a prorated refund if cancelled within 15 days of renewal. Monthly plans are non-refundable. Contact support at help.instacart.com.",
    "platforms" => [
      "web" => [
        "label" => "Instacart Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>instacart.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Instacart+ membership</strong>",
          "Click <strong>Manage your membership</strong>",
          "Click <strong>Cancel membership</strong>",
          "Follow the prompts to confirm",
        ],
        "note"  => "If you see an offer for a discounted rate, you can decline it to proceed with cancellation.",
      ],
      "iphone" => [
        "label" => "iPhone App",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>Instacart app</strong>",
          "Tap <strong>Account</strong> at bottom right",
          "Tap <strong>Instacart+</strong>",
          "Tap <strong>Manage membership → Cancel membership</strong>",
        ],
        "note"  => "Works the same on Android — find Account → Instacart+ → Manage membership.",
      ],
    ],
    "after_cancel" => [
      "Instacart+ benefits continue until your next billing date",
      "You can still use Instacart without a membership (delivery fees apply)",
      "Your order history and saved stores are kept",
      "Annual plan may qualify for prorated refund if cancelled within 15 days",
    ],
    "faq" => [
      ["Can I get a refund for Instacart+?",
       "Annual plans are eligible for a prorated refund within 15 days of renewal. Monthly plans are not refunded. Go to help.instacart.com to submit a refund request."],
      ["Does cancelling Instacart+ affect my orders?",
       "No — pending and scheduled orders are not affected by cancelling your membership. You can still place orders after cancelling, but standard delivery fees will apply."],
      ["How is Instacart+ different from Instacart without a membership?",
       "Without Instacart+, you pay a per-order delivery fee (varies by store) plus higher service fees. With Instacart+, you get free delivery on orders $35+ and reduced service fees."],
    ],
    "related" => ["doordash", "uber-eats", "hellofresh", "walmart-plus"],
  ],

  "zoom" => [
    "name"     => "Zoom",
    "emoji"    => "📹",
    "color"    => "#2D8CFF",
    "tagline"  => "Cancel Zoom Pro subscription easily",
    "about"    => "Zoom Pro ($15.99/mo) removes the 40-minute meeting limit and adds 5GB cloud recording. Cancel through your Zoom account portal — you keep Pro until the billing period ends.",
    "refund"   => "Zoom offers a prorated refund if you cancel an annual plan mid-term. Monthly plans are not refunded. Contact Zoom billing support at zoom.us/billing.",
    "platforms" => [
      "web" => [
        "label" => "Zoom Web Portal",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>zoom.us</strong> and sign in to your account",
          "Click <strong>Admin → Account Management → Billing</strong>",
          "Or go directly to <strong>zoom.us/billing</strong>",
          "Find your current plan and click <strong>Cancel Subscription</strong>",
          "Select a cancellation reason and confirm",
        ],
        "note"  => "If you purchased through Apple App Store or Google Play, cancel through those platforms instead.",
      ],
    ],
    "after_cancel" => [
      "Pro features remain active until the end of your billing period",
      "After expiry, meetings revert to 40-minute limit for groups",
      "Cloud recordings are deleted 30 days after downgrade",
      "Download your recordings before the period ends",
    ],
    "faq" => [
      ["Can I get a refund for Zoom?",
       "Annual Zoom subscriptions are eligible for a prorated refund if cancelled before the term ends. Go to zoom.us/billing and submit a cancellation/refund request. Monthly plans are not refunded."],
      ["What happens to my Zoom cloud recordings when I cancel?",
       "Cloud recordings are deleted 30 days after your Pro subscription ends. Download any recordings you need before your billing period expires."],
      ["Can I use Zoom for free after cancelling Pro?",
       "Yes. Zoom has a free plan with 100 participants and 40-minute limit for group meetings. 1-on-1 meetings remain unlimited."],
    ],
    "related" => ["microsoft-365", "dropbox", "slack", "linkedin"],
  ],

  "dropbox" => [
    "name"     => "Dropbox",
    "emoji"    => "📦",
    "color"    => "#0061FF",
    "tagline"  => "Cancel Dropbox Plus or Business subscription",
    "about"    => "Dropbox Plus ($11.99/mo) offers 2TB storage, offline access, and 180-day file recovery. Cancel through your Dropbox account settings — data is preserved on the free plan.",
    "refund"   => "Annual plans are eligible for a prorated refund if cancelled within 30 days of renewal. Monthly plans are not refunded. Email support@dropbox.com or use the in-app chat.",
    "platforms" => [
      "web" => [
        "label" => "Dropbox Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>dropbox.com</strong> and sign in",
          "Click your <strong>avatar</strong> at top right → <strong>Settings</strong>",
          "Click the <strong>Plan</strong> tab",
          "Scroll down and click <strong>Cancel plan</strong>",
          "Follow the prompts and confirm cancellation",
        ],
        "note"  => "If you purchased via Apple or Google, cancel through those platforms.",
      ],
    ],
    "after_cancel" => [
      "Paid features remain active until the end of the billing period",
      "Account reverts to free plan (2GB storage)",
      "Files exceeding free quota become read-only but are not deleted",
      "Download or delete excess files to stay within the 2GB free limit",
    ],
    "faq" => [
      ["Will my files be deleted if I cancel Dropbox?",
       "No. Your files are not deleted when you cancel. The account reverts to the free 2GB plan. Files beyond the 2GB limit become read-only until you reduce storage or upgrade again."],
      ["Can I get a refund from Dropbox?",
       "Annual plans can be refunded within 30 days of renewal on a prorated basis. Contact Dropbox support at dropbox.com/support to request a refund."],
      ["How do I cancel Dropbox Business?",
       "Dropbox Business admins can cancel by going to Admin Console → Billing → Cancel plan. Only the team admin can do this."],
    ],
    "related" => ["zoom", "microsoft-365", "linkedin", "grammarly"],
  ],

  "ancestry" => [
    "name"     => "Ancestry",
    "emoji"    => "🌳",
    "color"    => "#2E7D32",
    "tagline"  => "Cancel Ancestry subscription before renewal",
    "about"    => "Ancestry offers DNA-only access (free) and subscription plans (US Discovery $24.99/mo, World Explorer $39.99/mo) for genealogy research and family tree building.",
    "refund"   => "Ancestry does not offer refunds for the current subscription period. Cancel before your renewal date to avoid the next charge. Annual plans may qualify for a prorated refund &mdash; contact support.",
    "platforms" => [
      "web" => [
        "label" => "Ancestry Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>ancestry.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Membership settings</strong>",
          "Scroll to <strong>Renewal settings</strong>",
          "Click <strong>Cancel membership</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "You can still access your family tree and DNA results after cancellation on the free plan.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Ancestry</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Only use this if you subscribed via App Store.",
      ],
    ],
    "after_cancel" => [
      "Subscription access continues until the end of your paid period",
      "DNA results remain accessible for free",
      "Your family tree remains visible (limited editing on free plan)",
      "Historical record access requires an active subscription",
    ],
    "faq" => [
      ["Can I keep my Ancestry DNA results after cancelling?",
       "Yes. DNA results, your ethnicity estimate, and DNA matches are always free to access. You only lose access to historical records and subscriber-only features."],
      ["How do I cancel Ancestry free trial?",
       "Go to ancestry.com → name → Membership settings → Cancel membership. Cancel before the trial ends to avoid the first charge. Trial end dates are shown in your settings."],
      ["Does cancelling Ancestry delete my family tree?",
       "No. Your family tree data is preserved. You can view it on the free plan but editing capabilities may be limited without a subscription."],
    ],
    "related" => ["chegg", "masterclass", "new-york-times", "duolingo"],
  ],

  "chegg" => [
    "name"     => "Chegg",
    "emoji"    => "📚",
    "color"    => "#F06024",
    "tagline"  => "Cancel Chegg Study subscription",
    "about"    => "Chegg Study ($19.95/mo) and Chegg Study Pack ($29.95/mo) offer textbook solutions, expert Q&amp;A, and tutoring. Cancel anytime through your account settings.",
    "refund"   => "Chegg does not offer refunds for the current subscription month. Cancel before your next billing date to stop future charges. Contact support at chegg.com/contactus for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Chegg Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>chegg.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>My Account</strong>",
          "Click <strong>Subscription</strong> in the left panel",
          "Click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Write down your cancellation confirmation number for reference.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of your current billing cycle",
      "You lose access to expert Q&A and textbook solutions",
      "Your account and saved answers remain",
      "Chegg eTextbook rentals are separate from the Study subscription",
    ],
    "faq" => [
      ["Can I pause my Chegg subscription instead of cancelling?",
       "Chegg does not offer a pause option. You must cancel and re-subscribe when needed. There are no penalties for rejoining."],
      ["How do I cancel Chegg if I can&apos;t log in?",
       "Contact Chegg support at chegg.com/contactus or call 1-855-477-3370. Provide your account email to cancel without logging in."],
      ["Does cancelling Chegg affect my textbook rental?",
       "No. Chegg Study subscription and textbook rentals are separate. Cancelling your Study plan does not affect physical or digital rentals."],
    ],
    "related" => ["skillshare", "masterclass", "duolingo", "ancestry"],
  ],

  "pandora" => [
    "name"     => "Pandora",
    "emoji"    => "🎶",
    "color"    => "#224099",
    "tagline"  => "Cancel Pandora Plus or Premium subscription",
    "about"    => "Pandora Plus ($4.99/mo) removes ads and adds offline listening. Pandora Premium ($9.99/mo) adds on-demand song selection. Both can be cancelled through pandora.com.",
    "refund"   => "Pandora does not offer refunds for the current billing period. Cancel before your renewal date to stop future charges. For billing errors contact pandora.com/account/support.",
    "platforms" => [
      "web" => [
        "label" => "Pandora Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>pandora.com</strong> and sign in",
          "Click your <strong>profile name</strong> at top right",
          "Select <strong>Subscription &amp; Billing</strong>",
          "Click <strong>Manage Subscription</strong>",
          "Click <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "If subscribed via Apple or Google, cancel through those platforms instead.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Pandora</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this method only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Premium or Plus features continue until billing period ends",
      "Account reverts to free Pandora with ads",
      "Offline playlists become unavailable",
      "Your stations and thumbs ratings are preserved",
    ],
    "faq" => [
      ["What happens to my Pandora stations if I cancel?",
       "Your stations, thumbs up/down history, and account data are preserved. You just lose the premium features and ads return."],
      ["How do I cancel Pandora if I subscribed through Amazon?",
       "Go to amazon.com → Account &amp; Lists → Memberships &amp; Subscriptions → find Pandora and cancel there."],
      ["Is there a free version of Pandora?",
       "Yes. Pandora free includes unlimited ad-supported radio. Pandora Plus adds offline, Pandora Premium adds on-demand."],
    ],
    "related" => ["spotify", "apple-music", "amazon-music", "siriusxm"],
  ],

  "philo" => [
    "name"     => "Philo",
    "emoji"    => "📺",
    "color"    => "#FFB300",
    "tagline"  => "Cancel Philo TV subscription instantly",
    "about"    => "Philo costs $25/month and offers 70+ live TV channels including AMC, HGTV, and Discovery without sports or local channels. Cancel anytime with no fees.",
    "refund"   => "Philo does not offer refunds for the current billing period. Cancel before your renewal date to avoid the next charge.",
    "platforms" => [
      "web" => [
        "label" => "Philo Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>philo.com</strong> and sign in",
          "Click your <strong>name</strong> at top right",
          "Select <strong>Settings</strong>",
          "Click <strong>Billing</strong>",
          "Click <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "Philo is month-to-month with no contracts — cancellation is instant.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Philo</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of your billing period",
      "DVR recordings are deleted after cancellation",
      "Download any saved content you want to keep",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Does Philo have a free trial?",
       "Yes, Philo offers a 7-day free trial. Cancel before it ends to avoid being charged. Go to philo.com → Settings → Billing → Cancel Subscription."],
      ["Can I cancel Philo and keep my DVR recordings?",
       "No. DVR recordings are deleted when you cancel. Philo does not allow downloading content to keep offline."],
      ["How is Philo different from Sling or Hulu Live?",
       "Philo has no sports or local channels, which makes it cheaper ($25/mo). Sling and Hulu Live cost more but include ESPN and local ABC/NBC/CBS."],
    ],
    "related" => ["sling-tv", "youtube-tv", "fubotv", "hulu"],
  ],

  "nordvpn" => [
    "name"     => "NordVPN",
    "emoji"    => "🔒",
    "color"    => "#4687FF",
    "tagline"  => "Cancel NordVPN subscription and get a refund",
    "about"    => "NordVPN offers 1-month, 1-year, and 2-year plans starting at $3.39/month. Cancel within 30 days for a full refund thanks to their money-back guarantee.",
    "refund"   => "NordVPN offers a 30-day money-back guarantee on all plans. Request a refund through the NordVPN support portal at support.nordvpn.com — refunds are processed in 5&ndash;10 business days.",
    "platforms" => [
      "web" => [
        "label" => "NordVPN Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>nordvpn.com</strong> and sign in to My Nord account",
          "Click <strong>Billing</strong> in the left menu",
          "Click <strong>Cancel subscription</strong>",
          "To request a refund: go to <strong>support.nordvpn.com</strong> and start a live chat",
          "Request a refund within 30 days of purchase",
        ],
        "note"  => "The 30-day money-back guarantee applies to all NordVPN plans, including 2-year plans.",
      ],
    ],
    "after_cancel" => [
      "VPN access continues until the end of your paid period",
      "After expiry the app stops connecting to VPN servers",
      "Refunds (within 30 days) are processed in 5&ndash;10 business days",
      "Your NordVPN account remains active for potential future use",
    ],
    "faq" => [
      ["How do I get a NordVPN refund?",
       "Contact NordVPN support via live chat at support.nordvpn.com within 30 days of purchase. State you want a refund under their 30-day money-back guarantee. No questions asked."],
      ["Can I cancel NordVPN mid-year?",
       "Yes. Cancel anytime through the billing portal. If within 30 days, you get a full refund. After 30 days, you keep access until the paid period ends with no refund."],
      ["Does NordVPN auto-renew?",
       "Yes. NordVPN auto-renews unless you cancel. Turn off auto-renew in My Nord → Billing → Subscription settings, or cancel outright before the renewal date."],
    ],
    "related" => ["surfshark", "experian", "norton", "mcafee"],
  ],

  "hinge" => [
    "name"     => "Hinge",
    "emoji"    => "❤️",
    "color"    => "#E8175D",
    "tagline"  => "Cancel Hinge subscription on your phone",
    "about"    => "Hinge+ ($29.99/mo) and HingeX ($49.99/mo) offer unlimited likes, advanced filters, and activity insights. Cancel through your phone&apos;s app store subscriptions.",
    "refund"   => "Hinge subscriptions are managed by Apple or Google. Refunds are handled through reportaproblem.apple.com (iOS) or the Google Play refund process (Android).",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Hinge</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "This is the primary way to cancel on iPhone.",
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play Store → profile → Payments &amp; subscriptions → Subscriptions</strong>",
          "Tap <strong>Hinge</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Google Play manages Hinge subscriptions on Android.",
      ],
    ],
    "after_cancel" => [
      "Subscription features continue until the end of the billing period",
      "Your profile and matches are preserved",
      "You revert to the free Hinge experience (limited likes)",
      "Deleting the app does NOT cancel your subscription",
    ],
    "faq" => [
      ["Does deleting Hinge cancel my subscription?",
       "No. Deleting the app does not cancel your subscription. You must cancel through App Store or Google Play to stop being charged."],
      ["How do I delete my Hinge account?",
       "In the Hinge app: Settings → Account → Delete Account. This is separate from cancelling your subscription — do both if you want to stop charges AND remove your profile."],
      ["Can I get a refund for Hinge?",
       "Hinge refers refunds to Apple or Google. Go to reportaproblem.apple.com (iPhone) or the Google Play help center to request a refund for recent charges."],
    ],
    "related" => ["tinder", "bumble", "eharmony", "match"],
  ],

  "nba-league-pass" => [
    "name"     => "NBA League Pass",
    "emoji"    => "🏀",
    "color"    => "#17408B",
    "tagline"  => "Cancel NBA League Pass before next season",
    "about"    => "NBA League Pass offers live and on-demand NBA games. Plans include single-team ($28.99/mo), all-teams ($40.99/mo), and annual options. Cancel through your account settings.",
    "refund"   => "NBA League Pass does not offer refunds mid-season. Annual plans may qualify for a refund during the off-season. Contact NBA support at help.nba.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "NBA Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>nba.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Account Settings</strong>",
          "Click <strong>Manage Subscription</strong> or <strong>Cancel Plan</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If you subscribed through Apple, Amazon, or Google, cancel through those platforms instead.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>NBA</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of your billing period",
      "Live games and replays become unavailable after expiry",
      "Your NBA account remains active",
      "Re-subscribe at the start of next season for best annual rates",
    ],
    "faq" => [
      ["Can I cancel NBA League Pass mid-season?",
       "Yes, but refunds are generally not available for the current billing period. Cancelling stops future charges. Access continues until the period ends."],
      ["Does NBA League Pass have a free trial?",
       "NBA occasionally offers 7-day free trials. Cancel before the trial ends at nba.com → Account Settings → Manage Subscription."],
      ["How do I cancel NBA League Pass on Apple TV?",
       "Go to Apple TV Settings → Users and Accounts → your account → Subscriptions → NBA League Pass → Cancel Subscription."],
    ],
    "related" => ["espn-plus", "mlb-tv", "fanduel", "hulu"],
  ],

  "youtube-premium" => [
    "name"     => "YouTube Premium",
    "emoji"    => "▶️",
    "color"    => "#FF0000",
    "tagline"  => "Cancel YouTube Premium — keep your account",
    "about"    => "YouTube Premium ($13.99/mo) removes ads, adds background play, downloads, and YouTube Music Premium. Cancel anytime through your Google account settings.",
    "refund"   => "YouTube Premium is managed by Google. Refunds are not typically offered for the current billing period. Contact Google support at support.google.com if charged unexpectedly.",
    "platforms" => [
      "web" => [
        "label" => "YouTube Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>youtube.com/premium</strong> and sign in",
          "Click <strong>Manage membership</strong>",
          "Click <strong>Deactivate membership</strong>",
          "Select a reason and click <strong>Continue to Cancel</strong>",
          "Click <strong>No thanks, cancel</strong> to confirm",
        ],
        "note"  => "YouTube will show an offer to pause for 1&ndash;6 months before presenting the cancel option.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>YouTube</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Only use this if you subscribed through the App Store on iPhone.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open the <strong>YouTube app</strong>",
          "Tap your <strong>profile photo → Paid memberships</strong>",
          "Tap <strong>YouTube Premium → Cancel membership</strong>",
        ],
        "note"  => "On Android, you can also cancel via Google Play → Subscriptions.",
      ],
    ],
    "after_cancel" => [
      "Premium benefits continue until the end of the billing period",
      "Ads return on all YouTube videos",
      "Background play stops working",
      "Downloaded videos become unplayable after expiry",
      "YouTube Music reverts to free (ad-supported)",
    ],
    "faq" => [
      ["Does cancelling YouTube Premium affect YouTube Music?",
       "Yes. YouTube Premium includes YouTube Music Premium. Cancelling YouTube Premium also cancels YouTube Music Premium, reverting it to the free ad-supported version."],
      ["Can I pause YouTube Premium instead of cancelling?",
       "Yes. During the cancellation flow, YouTube offers a pause option for 1&ndash;6 months. This is useful if you want to temporarily stop paying without losing your settings."],
      ["How do I cancel YouTube Premium Family Plan?",
       "Only the plan manager can cancel. Go to youtube.com/premium → Manage membership → Cancel as plan manager. All family members lose Premium when the plan is cancelled."],
    ],
    "related" => ["spotify", "apple-music", "netflix", "twitch"],
  ],

  "eharmony" => [
    "name"     => "eHarmony",
    "emoji"    => "💑",
    "color"    => "#0072BB",
    "tagline"  => "Cancel eHarmony subscription",
    "about"    => "eHarmony offers 3, 6, and 12-month Premium subscription plans for dating. Cancel through your account settings to prevent auto-renewal.",
    "refund"   => "eHarmony does not offer refunds after the subscription period starts. If you cancel within 3 days of purchase in certain US states, you may qualify for a refund under state consumer protection law.",
    "platforms" => [
      "web" => [
        "label" => "eHarmony Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>eharmony.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account settings</strong>",
          "Click <strong>Billing</strong>",
          "Select <strong>Cancel my subscription</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "eHarmony may present retention offers &mdash; decline them to reach the cancel confirmation.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>eHarmony</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this method only if you subscribed via Apple.",
      ],
    ],
    "after_cancel" => [
      "Subscription access continues until the end of your paid period",
      "Your profile and matches remain visible",
      "Communication features require an active subscription",
      "You can still receive matches as a free member",
    ],
    "faq" => [
      ["Can I get a refund from eHarmony?",
       "Generally no. However, some US states (California, Florida, etc.) have 3-day cooling-off laws. Contact eHarmony support immediately after purchase if you want to cancel under these laws."],
      ["How do I cancel eHarmony before it renews?",
       "Go to Account settings → Billing → Cancel subscription. Do this at least 24 hours before your renewal date to ensure the cancellation processes in time."],
      ["Does cancelling eHarmony delete my profile?",
       "No. Your profile remains. To fully remove your profile, go to Account settings → Close account (separate from cancelling the subscription)."],
    ],
    "related" => ["tinder", "bumble", "hinge", "match"],
  ],

  "mlb-tv" => [
    "name"     => "MLB.TV",
    "emoji"    => "⚾",
    "color"    => "#041E42",
    "tagline"  => "Cancel MLB.TV subscription",
    "about"    => "MLB.TV ($24.99/mo or $149.99/year) streams live and on-demand out-of-market MLB games. Cancel through your MLB account before the season starts to avoid annual charges.",
    "refund"   => "MLB.TV annual subscriptions purchased before Opening Day can be cancelled for a full refund before the season starts. In-season cancellations typically receive no refund. Contact mlb.com/support.",
    "platforms" => [
      "web" => [
        "label" => "MLB Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>mlb.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account Settings</strong>",
          "Click <strong>Subscriptions</strong>",
          "Find MLB.TV and click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Best time to cancel is after the World Series and before Opening Day to get a full refund on next year&apos;s annual plan.",
      ],
    ],
    "after_cancel" => [
      "Access continues through the current billing period",
      "Live games and replays become unavailable after expiry",
      "Your MLB account and watchlist remain",
      "Annual subscriptions pre-season can be fully refunded",
    ],
    "faq" => [
      ["Does MLB.TV show local games?",
       "No. MLB.TV is for out-of-market games only. Your local team&apos;s games are blacked out. Use a live TV service (YouTube TV, Fubo) for local games."],
      ["How do I cancel MLB.TV and get a refund?",
       "Cancel before the MLB season starts for a full refund. Go to mlb.com → Account Settings → Subscriptions → Cancel. Contact support at mlb.com/support for refund requests."],
      ["Can I watch the playoffs on MLB.TV?",
       "Postseason games are not included in MLB.TV. Playoffs are on national TV (Fox, ESPN, TBS) and services like YouTube TV and Hulu Live."],
    ],
    "related" => ["espn-plus", "nba-league-pass", "fanduel", "sling-tv"],
  ],

  "masterclass" => [
    "name"     => "MasterClass",
    "emoji"    => "🎓",
    "color"    => "#1C1C1C",
    "tagline"  => "Cancel MasterClass subscription",
    "about"    => "MasterClass offers an All-Access Pass ($120/year or $180/year for 2 devices) with 150+ courses from world-class instructors. Cancel before renewal to avoid the annual charge.",
    "refund"   => "MasterClass offers a 30-day satisfaction guarantee. If you are not satisfied, contact support@masterclass.com within 30 days for a full refund.",
    "platforms" => [
      "web" => [
        "label" => "MasterClass Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>masterclass.com</strong> and sign in",
          "Click your <strong>profile photo</strong> → <strong>Settings</strong>",
          "Click <strong>Plans &amp; Billing</strong>",
          "Click <strong>Cancel Plan</strong>",
          "Follow the prompts to confirm",
        ],
        "note"  => "For a refund within 30 days, email support@masterclass.com instead of just cancelling.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>MasterClass</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of your paid year",
      "Downloaded lessons remain watchable offline until expiry",
      "Your progress and notes are preserved",
      "You can restart with a new annual plan at any time",
    ],
    "faq" => [
      ["Does MasterClass have a refund policy?",
       "Yes &mdash; MasterClass offers a 30-day satisfaction guarantee. Email support@masterclass.com within 30 days of purchase to request a full refund."],
      ["Can I share MasterClass with family?",
       "The standard plan is for one device. The 2-device plan ($180/year) allows sharing. Cancelling the plan affects all linked accounts."],
      ["Is MasterClass worth it?",
       "MasterClass is best for people who want bite-sized inspiration from celebrity instructors (Gordon Ramsay, Serena Williams, etc.) rather than deep-dive technical courses. Cancel if you prefer platforms like Coursera or Skillshare for structured learning."],
    ],
    "related" => ["skillshare", "duolingo", "chegg", "ancestry"],
  ],

  "surfshark" => [
    "name"     => "Surfshark",
    "emoji"    => "🦈",
    "color"    => "#1B2B5A",
    "tagline"  => "Cancel Surfshark VPN and get a refund",
    "about"    => "Surfshark offers 1-month, 1-year, and 2-year VPN plans starting at $2.49/month. All plans include a 30-day money-back guarantee.",
    "refund"   => "Surfshark offers a 30-day money-back guarantee. Contact support via live chat at surfshark.com within 30 days to request a full refund.",
    "platforms" => [
      "web" => [
        "label" => "Surfshark Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>surfshark.com</strong> and sign in",
          "Click <strong>My Account → Billing</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "For a refund: use <strong>live chat</strong> on surfshark.com within 30 days",
        ],
        "note"  => "Surfshark&apos;s 30-day guarantee is the easiest way to get a full refund if you&apos;re not satisfied.",
      ],
    ],
    "after_cancel" => [
      "VPN access continues until the end of the billing period",
      "App stops connecting to VPN servers after expiry",
      "Refunds processed in 5&ndash;10 business days",
    ],
    "faq" => [
      ["How do I get a Surfshark refund?",
       "Start a live chat at surfshark.com within 30 days of purchase and request a refund under their money-back guarantee. The process takes 5&ndash;10 business days."],
      ["Does Surfshark auto-renew?",
       "Yes. Turn off auto-renew in My Account → Billing → Subscription, or contact support to cancel before renewal."],
      ["Can I cancel Surfshark after 1 year?",
       "Yes. The 30-day money-back guarantee applies to renewals too. If you were just charged for renewal, contact support within 30 days for a refund."],
    ],
    "related" => ["nordvpn", "norton", "mcafee", "experian"],
  ],

  "match" => [
    "name"     => "Match",
    "emoji"    => "💘",
    "color"    => "#E8385C",
    "tagline"  => "Cancel Match.com subscription",
    "about"    => "Match.com offers 1, 3, and 6-month subscription plans ($39.99&ndash;$23.99/mo). Cancel through your account settings to prevent auto-renewal at the end of your term.",
    "refund"   => "Match.com does not offer refunds for subscription periods already started. Cancel before your renewal date to stop future charges. Contact Match support at help.match.com for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Match.com Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>match.com</strong> and sign in",
          "Click your <strong>profile photo</strong> → <strong>Settings</strong>",
          "Click <strong>Subscriptions</strong>",
          "Click <strong>Manage subscription</strong>",
          "Select <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "If Match offers a discounted renewal rate, you can decline it to confirm cancellation.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Match</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Only use this if you originally subscribed via Apple.",
      ],
    ],
    "after_cancel" => [
      "Subscription access continues until the term ends",
      "Your profile remains visible after cancellation",
      "To remove your profile, go to Settings → Account → Delete account",
      "Messages and matches are preserved on free plan (limited access)",
    ],
    "faq" => [
      ["Does cancelling Match delete my profile?",
       "No. Cancelling your subscription and deleting your profile are separate actions. Go to Settings → Account → Delete account if you want to remove your profile entirely."],
      ["Can I get a refund from Match?",
       "Match does not offer refunds. If you believe you were charged in error, contact help.match.com. Some US states have consumer protection laws that may apply within 3 days of purchase."],
      ["How do I hide my Match profile without cancelling?",
       "Go to Settings → Privacy → Hide my profile. This keeps your subscription active but makes your profile invisible to other members."],
    ],
    "related" => ["tinder", "bumble", "hinge", "eharmony"],
  ],

  "mubi" => [
    "name"     => "MUBI",
    "emoji"    => "🎞️",
    "color"    => "#0A0A0A",
    "tagline"  => "Cancel MUBI subscription easily",
    "about"    => "MUBI ($10.99/mo or $95.88/year) is a curated film streaming service featuring art-house, classic, and indie films. Cancel anytime through your account settings.",
    "refund"   => "MUBI does not offer refunds for the current billing period. Annual plans may be prorated &mdash; contact support@mubi.com for assistance.",
    "platforms" => [
      "web" => [
        "label" => "MUBI Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>mubi.com</strong> and sign in",
          "Click your <strong>profile icon</strong> → <strong>Settings</strong>",
          "Click <strong>Subscription</strong>",
          "Click <strong>Cancel plan</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Your films in progress and watchlist are preserved after cancellation.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>MUBI</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of your billing period",
      "Films currently showing rotate out every 30 days regardless",
      "Your watchlist and film notes are preserved",
      "You can re-subscribe at any time",
    ],
    "faq" => [
      ["What kind of movies does MUBI show?",
       "MUBI specializes in curated art-house, foreign, classic, and festival films. It shows a rotating selection of 30 films at any time, with a new film added each day."],
      ["Is MUBI available on Smart TV?",
       "Yes &mdash; MUBI is available on Apple TV, Roku, Amazon Fire TV, Samsung Smart TV, and Chromecast. Cancel the subscription from any platform through mubi.com."],
      ["How do I cancel MUBI on Amazon?",
       "Go to amazon.com → Account &amp; Lists → Memberships &amp; Subscriptions → find MUBI → Cancel subscription."],
    ],
    "related" => ["netflix", "hbo-max", "britbox", "starz"],
  ],

  "aura" => [
    "name"     => "Aura",
    "emoji"    => "🛡️",
    "color"    => "#6C3FC5",
    "tagline"  => "Cancel Aura identity protection subscription",
    "about"    => "Aura offers identity theft protection and credit monitoring plans ($12&ndash;$37/month depending on individual vs. family). Cancel through your Aura account portal.",
    "refund"   => "Aura offers a 60-day money-back guarantee on annual plans. Contact Aura support at aura.com/contact within 60 days of purchase for a full refund.",
    "platforms" => [
      "web" => [
        "label" => "Aura Account Portal",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>aura.com</strong> and sign in",
          "Click your <strong>name</strong> → <strong>Account Settings</strong>",
          "Click <strong>Subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "For a refund within 60 days, contact Aura support directly rather than just cancelling.",
      ],
    ],
    "after_cancel" => [
      "Protection and monitoring continue until the billing period ends",
      "Credit monitoring alerts stop after cancellation",
      "Identity theft insurance coverage ends",
      "Annual plans refunded within 60-day window",
    ],
    "faq" => [
      ["Does Aura have a money-back guarantee?",
       "Yes &mdash; Aura offers a 60-day money-back guarantee on annual plans. Contact support at aura.com/contact within 60 days of purchase to request a full refund."],
      ["How is Aura different from LifeLock or Norton 360?",
       "Aura combines credit monitoring, identity protection, VPN, antivirus, and password manager in one plan. LifeLock focuses on identity theft. Choose based on whether you want an all-in-one security suite."],
      ["What happens to my credit monitoring if I cancel Aura?",
       "Credit monitoring and fraud alerts stop immediately upon cancellation. If you have an active identity theft issue, consider keeping the plan active or switching to a free service like Credit Karma."],
    ],
    "related" => ["experian", "norton", "mcafee", "nordvpn"],
  ],

  "plenty-of-fish" => [
    "name"     => "Plenty of Fish",
    "emoji"    => "🐟",
    "color"    => "#00B2FF",
    "tagline"  => "Cancel Plenty of Fish Premium subscription",
    "about"    => "Plenty of Fish (POF) Premium offers enhanced messaging, profile boosts, and visibility features at $19.99&ndash;$31.99/month. Cancel through the app or website.",
    "refund"   => "POF does not offer refunds for subscription periods. For Apple or Google subscriptions, refunds are handled by those platforms. Contact POF support at help.pof.com for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "POF Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>pof.com</strong> and sign in",
          "Click <strong>Upgrade</strong> at the top of the page",
          "Click <strong>Manage Subscription</strong>",
          "Click <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "You can also go to pof.com/account_settings.aspx to manage your subscription.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Plenty of Fish</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed through the App Store.",
      ],
    ],
    "after_cancel" => [
      "Premium features remain active until billing period ends",
      "Account reverts to free POF (with ads and limited messaging)",
      "Your profile and conversations are preserved",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Is there a free version of Plenty of Fish?",
       "Yes. POF has a robust free tier with messaging, matching, and profile browsing. Premium mainly adds extra visibility, profile boosts, and message read receipts."],
      ["Does deleting the POF app cancel my subscription?",
       "No. You must cancel through the website or App Store/Google Play. Deleting the app does not stop charges."],
      ["How do I cancel POF on Android?",
       "Open Google Play Store → profile icon → Payments &amp; subscriptions → Subscriptions → Plenty of Fish → Cancel subscription."],
    ],
    "related" => ["tinder", "bumble", "hinge", "match"],
  ],

  "britbox" => [
    "name"     => "BritBox",
    "emoji"    => "🇬🇧",
    "color"    => "#0B2F5A",
    "tagline"  => "Cancel BritBox subscription",
    "about"    => "BritBox ($8.99/mo or $89.99/year) is a streaming service featuring British TV shows from BBC, ITV, Channel 4, and Channel 5. Cancel anytime through your account.",
    "refund"   => "BritBox does not offer refunds for the current billing period. Annual plans may be prorated &mdash; contact support@britbox.com. Apple/Google subscriptions follow their respective refund policies.",
    "platforms" => [
      "web" => [
        "label" => "BritBox Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>britbox.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account settings</strong>",
          "Click <strong>Manage subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If you subscribed via Apple, Amazon, or Google, cancel through those platforms.",
      ],
      "amazon" => [
        "label" => "Amazon Prime Channels",
        "icon"  => "📦",
        "steps" => [
          "Go to <strong>amazon.com → Account &amp; Lists → Memberships &amp; Subscriptions</strong>",
          "Find <strong>BritBox</strong> and click <strong>Cancel Channel</strong>",
        ],
        "note"  => "BritBox is commonly subscribed through Amazon Prime Video Channels.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the billing period",
      "Watchlist and viewing history are preserved",
      "Re-subscribe at any time to regain access",
    ],
    "faq" => [
      ["How do I cancel BritBox on Amazon?",
       "Go to amazon.com → Your Account → Memberships &amp; Subscriptions → BritBox → Cancel Channel. Access continues until your billing period ends."],
      ["Is BritBox available through Apple TV?",
       "Yes. Cancel via Settings → [Your Name] → Subscriptions → BritBox → Cancel Subscription on your iPhone or iPad."],
      ["What is the difference between BritBox and Acorn TV?",
       "Both offer British content. BritBox focuses on BBC and ITV shows; Acorn TV features more niche British, Canadian, and Australian dramas. Many subscribers have both."],
    ],
    "related" => ["netflix", "hbo-max", "mubi", "amazon-prime"],
  ],

  "noom" => [
    "name"     => "Noom",
    "emoji"    => "⚖️",
    "color"    => "#F15A24",
    "tagline"  => "Cancel Noom subscription before auto-renew",
    "about"    => "Noom ($70/month or ~$209/year) is a psychology-based weight loss program with personalized coaching. Cancel through the app or website settings.",
    "refund"   => "Noom offers a 14-day money-back guarantee for new subscribers. Contact support@noom.com within 14 days. Annual plans purchased at full price may qualify for prorated refunds.",
    "platforms" => [
      "web" => [
        "label" => "Noom Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>noom.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Go to <strong>Settings → Manage subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "For a 14-day refund, email support@noom.com directly after cancelling.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Noom</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the billing period",
      "Coach access and daily lessons become unavailable",
      "Your logged data and progress are preserved",
      "14-day refund window for new subscribers",
    ],
    "faq" => [
      ["Does Noom offer a refund?",
       "Yes &mdash; Noom has a 14-day money-back guarantee for new users. Email support@noom.com within 14 days to request a full refund."],
      ["How do I cancel the Noom free trial?",
       "Before the trial ends, go to noom.com → Settings → Manage subscription → Cancel subscription. Or cancel via App Store/Google Play if you signed up on mobile."],
      ["Is Noom worth the cost?",
       "Noom works well for people who want psychology-based habit building with coach support. If you prefer calorie tracking apps without coaching, consider MyFitnessPal or Cronometer (both free)."],
    ],
    "related" => ["weight-watchers", "calm", "headspace", "planet-fitness"],
  ],

  "peloton" => [
    "name"     => "Peloton",
    "emoji"    => "🚴",
    "color"    => "#CC0000",
    "tagline"  => "Cancel Peloton membership or app subscription",
    "about"    => "Peloton offers an App+ membership ($24/mo, no equipment needed) and an All-Access membership ($44/mo, for Peloton hardware owners). Cancel through your account settings.",
    "refund"   => "Peloton does not offer refunds for the current billing month. Contact Peloton support at support.onepeloton.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Peloton Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>onepeloton.com</strong> and sign in",
          "Click your <strong>profile icon</strong> → <strong>Settings</strong>",
          "Click <strong>Membership</strong>",
          "Click <strong>Cancel Membership</strong>",
          "Select a reason and confirm",
        ],
        "note"  => "Peloton may offer a pause option (3 months) before presenting the cancel confirmation.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Peloton</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this only if you subscribed through the App Store.",
      ],
    ],
    "after_cancel" => [
      "Membership access continues until the end of the billing period",
      "Live and on-demand classes become unavailable",
      "Scenic routes and meditations also require membership",
      "Your fitness data and achievements are preserved",
    ],
    "faq" => [
      ["Can I use my Peloton bike without a membership?",
       "You can still use the bike in &quot;Just Ride&quot; mode without a membership, but you won&apos;t have access to live or on-demand classes, which removes most of the value."],
      ["Does cancelling Peloton affect my equipment warranty?",
       "No. The Peloton hardware warranty is separate from the membership subscription. Cancelling the membership does not void your equipment warranty."],
      ["Can I pause Peloton instead of cancelling?",
       "Yes. Peloton allows you to pause your membership for 1&ndash;3 months at a lower rate. Go to onepeloton.com → Settings → Membership → Pause Membership."],
    ],
    "related" => ["planet-fitness", "noom", "calm", "headspace"],
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
  ["Planet Fitness","planet-fitness"],["LinkedIn","linkedin"],
  ["PlayStation Plus","playstation-plus"],["Xbox Game Pass","xbox-game-pass"],
  ["Twitch","twitch"],["Apple Music","apple-music"],["Instacart+","instacart"],
  ["Zoom","zoom"],["Dropbox","dropbox"],["Ancestry","ancestry"],
  ["Chegg","chegg"],["Pandora","pandora"],["Philo","philo"],
  ["NordVPN","nordvpn"],["Hinge","hinge"],["NBA League Pass","nba-league-pass"],
  ["YouTube Premium","youtube-premium"],["eHarmony","eharmony"],
  ["MLB.TV","mlb-tv"],["MasterClass","masterclass"],["Surfshark","surfshark"],
  ["Match","match"],["MUBI","mubi"],["Aura","aura"],
  ["Plenty of Fish","plenty-of-fish"],["BritBox","britbox"],
  ["Noom","noom"],["Peloton","peloton"],
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
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['req_service'])) {
  $req_service = trim(strip_tags($_POST['req_service'] ?? ''));
  $req_email   = trim(strip_tags($_POST['req_email']   ?? ''));
  if ($req_service) {
    $log = date('Y-m-d H:i:s') . "\tService: $req_service\tEmail: $req_email\tPage: $slug\n";
    file_put_contents(__DIR__ . '/guide_requests.txt', $log, FILE_APPEND | LOCK_EX);
    @mail('hello@britetodo.com',
      "Guide Request: $req_service",
      "Service: $req_service\nEmail: $req_email\nPage: $slug",
      "From: noreply@howtocancelsubscription.com\r\nReply-To: " . ($req_email ?: 'noreply@howtocancelsubscription.com')
    );
    if (!empty($_POST['_ajax'])) {
      header('Content-Type: application/json');
      echo json_encode(['ok' => true]);
      exit;
    }
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
    <div id="req-success" class="req-success" style="display:none">✓ Thanks! Guide coming soon.</div>
    <form class="req-form" id="req-form" method="post">
      <input type="hidden" name="_ajax" value="1">
      <input type="text" name="req_service" placeholder="Service name…" maxlength="80" required>
      <input type="email" name="req_email" placeholder="Your email (optional)">
      <button type="submit">Request →</button>
    </form>
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
const reqForm = document.getElementById('req-form');
if (reqForm) {
  reqForm.addEventListener('submit', async function(e) {
    e.preventDefault();
    const btn = this.querySelector('button');
    btn.disabled = true;
    btn.textContent = 'Sending…';
    try {
      const res = await fetch(window.location.href, {method:'POST', body: new FormData(this)});
      const json = await res.json();
      if (json.ok) {
        this.style.display = 'none';
        document.getElementById('req-success').style.display = '';
      }
    } catch(err) {
      btn.disabled = false;
      btn.textContent = 'Request →';
    }
  });
}
</script>
</body>
</html>
