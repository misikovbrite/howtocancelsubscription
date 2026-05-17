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

  "google-one" => [
    "name"     => "Google One",
    "emoji"    => "☁️",
    "color"    => "#4285F4",
    "tagline"  => "Cancel Google One storage plan",
    "about"    => "Google One ($1.99&ndash;$9.99/mo) upgrades your Google storage shared across Gmail, Drive, and Photos. Cancel anytime through your Google account settings.",
    "refund"   => "Google does not offer refunds for the current billing period. Cancel before renewal to avoid the next charge. Contact Google Support at support.google.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Google Account (Web)",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>one.google.com</strong> and sign in",
          "Click <strong>Settings</strong> in the left panel",
          "Scroll to <strong>Cancel membership</strong>",
          "Click <strong>Cancel membership</strong> and confirm",
        ],
        "note"  => "Cancelling Google One reverts your storage to the free 15GB limit. Gmail, Drive, and Photos data is not deleted but you cannot upload new files if over 15GB.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Open the <strong>Google One app</strong>",
          "Tap the <strong>menu icon</strong> at top left",
          "Tap <strong>Settings → Manage membership → Cancel membership</strong>",
        ],
        "note"  => "Works on Android. iPhone users should cancel via one.google.com.",
      ],
    ],
    "after_cancel" => [
      "Storage plan continues until end of billing period",
      "Account reverts to free 15GB after expiry",
      "Files over 15GB become read-only — not deleted",
      "Delete excess files to stay within the free limit",
    ],
    "faq" => [
      ["Will my Google Photos be deleted if I cancel Google One?",
       "No. Your photos and files are not deleted. However, if you have more than 15GB stored, you won&apos;t be able to upload new content until you free up space or re-subscribe."],
      ["How do I check how much Google storage I&apos;m using?",
       "Go to one.google.com or storage.google.com to see your storage breakdown across Gmail, Drive, and Photos."],
      ["Can I share Google One storage with family?",
       "Yes. Plans of 200GB and above can be shared with up to 5 family members via Google Family. Cancelling the plan removes storage benefits for all family members."],
    ],
    "related" => ["dropbox", "apple-music", "microsoft-365", "zoom"],
  ],

  "rocket-money" => [
    "name"     => "Rocket Money",
    "emoji"    => "🚀",
    "color"    => "#C0392B",
    "tagline"  => "Cancel Rocket Money premium subscription",
    "about"    => "Rocket Money (formerly Truebill) offers a free tier and a Premium plan ($6&ndash;$12/month, pay-what-you-want) for subscription tracking, budgeting, and bill negotiation.",
    "refund"   => "Rocket Money does not offer refunds for completed billing periods. Contact support at rocketmoney.com/support for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Rocket Money Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>rocketmoney.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Settings → Premium</strong>",
          "Click <strong>Cancel Premium</strong> and confirm",
        ],
        "note"  => "The free version of Rocket Money remains available after cancelling Premium.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Rocket Money</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this method if you subscribed via Apple.",
      ],
    ],
    "after_cancel" => [
      "Premium features (bill negotiation, unlimited budgets) are removed",
      "Free tier remains active with basic subscription tracking",
      "Your linked accounts and transaction history are preserved",
    ],
    "faq" => [
      ["Is Rocket Money free to use?",
       "Yes. Rocket Money has a free tier with subscription tracking and basic budgeting. The Premium tier adds bill negotiation, unlimited budgets, and a savings account feature."],
      ["Does Rocket Money actually cancel subscriptions for you?",
       "Yes — Premium users can request Rocket Money to cancel subscriptions on their behalf. After cancelling Rocket Money Premium, you&apos;ll need to cancel other subscriptions manually."],
      ["What happened to Truebill?",
       "Truebill was acquired by Rocket Companies and rebranded as Rocket Money in 2022. The product is the same — subscription tracking and personal finance management."],
    ],
    "related" => ["microsoft-365", "dropbox", "zoom", "linkedin"],
  ],

  "coursera" => [
    "name"     => "Coursera Plus",
    "emoji"    => "🎓",
    "color"    => "#0056D2",
    "tagline"  => "Cancel Coursera Plus subscription",
    "about"    => "Coursera Plus ($59/month or $399/year) gives unlimited access to 7,000+ courses and certificates from top universities. Cancel anytime through your account settings.",
    "refund"   => "Coursera offers a 14-day refund for annual Coursera Plus subscriptions. Monthly plans are not refunded. Contact support at coursera.org/about/contact for refund requests.",
    "platforms" => [
      "web" => [
        "label" => "Coursera Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>coursera.org</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>My Purchases</strong>",
          "Find Coursera Plus and click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Annual plans cancelled within 14 days receive a full refund. After 14 days, you keep access until the year ends.",
      ],
    ],
    "after_cancel" => [
      "Full access continues until the end of the billing period",
      "Certificates already earned remain in your profile permanently",
      "Completed course progress is preserved",
      "Annual plans get a 14-day full refund window",
    ],
    "faq" => [
      ["Do I keep my Coursera certificates after cancelling?",
       "Yes. All certificates you earned remain on your Coursera profile and LinkedIn permanently, even after cancelling your subscription."],
      ["How do I cancel individual Coursera course subscriptions?",
       "Go to coursera.org → My Purchases → find the individual course or Specialization → Cancel Subscription. Individual course subscriptions are separate from Coursera Plus."],
      ["Is there a free version of Coursera?",
       "Yes. You can audit most courses for free (no certificate). Coursera Plus or paid enrollment is needed for graded assignments and certificates."],
    ],
    "related" => ["masterclass", "skillshare", "duolingo", "chegg"],
  ],

  "wix" => [
    "name"     => "Wix",
    "emoji"    => "🌐",
    "color"    => "#FAAD4F",
    "tagline"  => "Cancel Wix Premium plan",
    "about"    => "Wix Premium plans ($17&ndash;$159/month) remove ads and add custom domains, storage, and eCommerce. Cancel through your Wix dashboard before the next renewal.",
    "refund"   => "Wix offers a 14-day money-back guarantee on new annual Premium plan purchases. Monthly plans are not refunded. Contact Wix support at support.wix.com.",
    "platforms" => [
      "web" => [
        "label" => "Wix Dashboard",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>manage.wix.com</strong> and sign in",
          "Click <strong>Billing &amp; Payments</strong> in the left menu",
          "Find your Premium plan and click the <strong>3-dot menu</strong>",
          "Select <strong>Cancel plan</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Cancelling removes Premium features (custom domain, no ads) at the end of the billing period. Your site stays live on a free Wix subdomain.",
      ],
    ],
    "after_cancel" => [
      "Premium features remain active until the billing period ends",
      "Custom domain disconnects — site moves to free wixsite.com subdomain",
      "Wix ads reappear on your site",
      "Site content and pages are preserved",
    ],
    "faq" => [
      ["What happens to my custom domain when I cancel Wix?",
       "Your custom domain registration is separate from the Premium plan. The domain won&apos;t be lost, but it will no longer be connected to your Wix site. You can reconnect it if you resubscribe."],
      ["Can I downgrade Wix instead of cancelling?",
       "Yes — go to Billing &amp; Payments and select a lower-tier plan. Downgrades take effect at the next renewal date."],
      ["Does cancelling Wix delete my website?",
       "No. Your site remains but reverts to the free plan with Wix branding and a wixsite.com URL. You can resubscribe at any time to restore Premium features."],
    ],
    "related" => ["squarespace", "shopify", "canva", "mailchimp"],
  ],

  "squarespace" => [
    "name"     => "Squarespace",
    "emoji"    => "🔲",
    "color"    => "#000000",
    "tagline"  => "Cancel Squarespace subscription",
    "about"    => "Squarespace plans ($16&ndash;$52/month) offer website building, eCommerce, and marketing tools. Cancel through your account billing settings before renewal.",
    "refund"   => "Squarespace offers a 14-day refund on new annual plan purchases. Monthly plans are not refunded. Contact support at squarespace.com/support.",
    "platforms" => [
      "web" => [
        "label" => "Squarespace Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>squarespace.com</strong> and sign in",
          "Click your <strong>profile icon</strong> → <strong>Account &amp; Security</strong>",
          "Click <strong>Billing</strong>",
          "Find your subscription and click <strong>Cancel Subscription</strong>",
          "Select a reason and confirm",
        ],
        "note"  => "Cancelling removes your site from the web. Export your content first if you want to keep it.",
      ],
    ],
    "after_cancel" => [
      "Site remains online until the billing period ends",
      "After expiry, site goes offline and becomes inaccessible",
      "Your domain registration is separate and unaffected",
      "Export content before cancelling: Settings → Advanced → Export",
    ],
    "faq" => [
      ["Does cancelling Squarespace delete my website?",
       "Yes &mdash; unlike Wix, Squarespace takes your site offline when a subscription lapses. Export your content at Settings → Advanced → Export before cancelling."],
      ["How do I get a Squarespace refund?",
       "Annual plans get a 14-day refund window. Contact support at squarespace.com/support within 14 days of purchase. Monthly plans are not eligible for refunds."],
      ["Can I pause a Squarespace subscription?",
       "No. Squarespace does not offer a pause option. You must cancel and resubscribe, which may require rebuilding your site if you let it fully lapse."],
    ],
    "related" => ["wix", "shopify", "canva", "mailchimp"],
  ],

  "scribd" => [
    "name"     => "Scribd",
    "emoji"    => "📖",
    "color"    => "#1E7B85",
    "tagline"  => "Cancel Scribd subscription",
    "about"    => "Scribd ($11.99/month) is an unlimited reading service with ebooks, audiobooks, magazines, and documents. Cancel anytime through your account settings.",
    "refund"   => "Scribd does not offer refunds for the current billing month. Cancel before your renewal date to stop future charges. Contact support at support.scribd.com for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Scribd Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>scribd.com</strong> and sign in",
          "Click your <strong>account icon</strong> at top right",
          "Select <strong>Account settings</strong>",
          "Click <strong>Subscription</strong>",
          "Click <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "Your reading history and bookmarks are preserved after cancellation.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Scribd</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Full access continues until the end of the billing period",
      "Downloads and offline books become inaccessible",
      "Your reading history is preserved",
      "Re-subscribe at any time to regain full access",
    ],
    "faq" => [
      ["Is Scribd worth it?",
       "Scribd is great value if you read more than 1 book per month. At $11.99/mo it&apos;s cheaper than buying individual ebooks. Cancel if you&apos;re reading less than one book a month."],
      ["How does Scribd compare to Kindle Unlimited?",
       "Scribd includes audiobooks, magazines, and documents alongside ebooks. Kindle Unlimited ($11.99/mo) is limited to Amazon&apos;s catalog but has more romance/thriller titles. Scribd has broader content diversity."],
      ["Can I download books on Scribd?",
       "Yes — Scribd allows downloading books for offline reading on mobile. Downloads are removed when your subscription ends."],
    ],
    "related" => ["audible", "kindle-unlimited", "blinkist", "masterclass"],
  ],

  "discovery-plus" => [
    "name"     => "Discovery+",
    "emoji"    => "🔭",
    "color"    => "#0000EB",
    "tagline"  => "Cancel Discovery+ subscription",
    "about"    => "Discovery+ ($4.99/mo ad-supported, $8.99/mo ad-free) offers content from Discovery, HGTV, Food Network, TLC, Animal Planet, and more. Cancel through your account settings.",
    "refund"   => "Discovery+ does not offer refunds for the current billing period. Cancel before renewal to avoid the next charge. Contact support at help.discoveryplus.com.",
    "platforms" => [
      "web" => [
        "label" => "Discovery+ Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>discoveryplus.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Account</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If subscribed through a TV provider or Amazon, cancel through that platform instead.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Discovery+</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this method only if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the billing period",
      "Downloaded content becomes unavailable",
      "Your watchlist and progress are preserved",
    ],
    "faq" => [
      ["Is Discovery+ included with any other services?",
       "Discovery+ is sometimes bundled with certain cable/internet providers and was previously bundled with HBO Max (now Max). Check your Max subscription — it may include Discovery+ content."],
      ["How do I cancel Discovery+ on Amazon?",
       "Go to amazon.com → Account &amp; Lists → Memberships &amp; Subscriptions → find Discovery+ → Cancel Channel."],
      ["What channels are on Discovery+?",
       "Discovery+includes Discovery, HGTV, Food Network, TLC, Animal Planet, Science Channel, Investigation Discovery, and more."],
    ],
    "related" => ["hbo-max", "peacock", "paramount-plus", "britbox"],
  ],

  "apple-arcade" => [
    "name"     => "Apple Arcade",
    "emoji"    => "🕹️",
    "color"    => "#000000",
    "tagline"  => "Cancel Apple Arcade subscription",
    "about"    => "Apple Arcade ($6.99/month or $49.99/year) offers 200+ games with no ads and no in-app purchases. Cancel through your Apple subscription settings.",
    "refund"   => "Apple Arcade subscriptions are managed by Apple. Request a refund at reportaproblem.apple.com within 48 hours for accidental charges.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Apple Arcade</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "Apple Arcade can also be cancelled via the App Store → your profile → Subscriptions.",
      ],
      "mac" => [
        "label" => "Mac",
        "icon"  => "🖥️",
        "steps" => [
          "Open the <strong>App Store</strong>",
          "Click your <strong>name</strong> at bottom left",
          "Click <strong>View Information → Subscriptions → Manage</strong>",
          "Click <strong>Edit</strong> next to Apple Arcade",
          "Click <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Works on Mac running macOS Catalina or later.",
      ],
    ],
    "after_cancel" => [
      "Arcade games remain playable until end of billing period",
      "Games with saved progress can be resumed if you re-subscribe",
      "Arcade-only games become unplayable after expiry",
      "Other App Store games are not affected",
    ],
    "faq" => [
      ["Do I lose my game progress if I cancel Apple Arcade?",
       "Game progress is saved via iCloud. If you re-subscribe, your progress will be there. You just can&apos;t play Arcade-exclusive games until resubscribed."],
      ["Is Apple Arcade included in Apple One?",
       "Yes. Apple One (Individual $19.95/mo, Family $25.95/mo) includes Apple Arcade, TV+, Music, and iCloud+. Cancelling Apple One also cancels Arcade."],
      ["Can I use Apple Arcade on multiple devices?",
       "Yes. One Apple Arcade subscription works across iPhone, iPad, Mac, and Apple TV linked to the same Apple ID."],
    ],
    "related" => ["xbox-game-pass", "playstation-plus", "apple-music", "disney-plus"],
  ],

  "discord-nitro" => [
    "name"     => "Discord Nitro",
    "emoji"    => "💬",
    "color"    => "#5865F2",
    "tagline"  => "Cancel Discord Nitro subscription",
    "about"    => "Discord Nitro ($9.99/mo or $99.99/year) adds animated avatars, custom emojis, file upload boosts, and HD video streaming. Cancel through your Discord User Settings.",
    "refund"   => "Discord offers a prorated refund if you cancel within 5 days of purchase or renewal. Contact Discord support at discord.com/support for refund requests.",
    "platforms" => [
      "web" => [
        "label" => "Discord App / Website",
        "icon"  => "💻",
        "steps" => [
          "Open <strong>Discord</strong> and click the <strong>gear icon</strong> (User Settings) at bottom left",
          "Click <strong>Subscriptions</strong> in the left menu",
          "Click <strong>Cancel</strong> next to Discord Nitro",
          "Confirm the cancellation",
        ],
        "note"  => "Works in both the desktop app and the browser version at discord.com.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Discord</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this method if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Nitro perks remain active until end of billing period",
      "Animated avatar reverts to static",
      "Custom emoji use across servers stops",
      "Server boosts provided by Nitro are removed",
      "Your Discord account and servers are unaffected",
    ],
    "faq" => [
      ["What happens to my server boosts when I cancel Nitro?",
       "Server boosts provided by your Nitro subscription are removed when it expires. Servers may lose perks like improved audio quality or more emoji slots."],
      ["Can I get a refund for Discord Nitro?",
       "Discord offers a prorated refund within 5 days of purchase. Contact support at discord.com/support with your order details to request it."],
      ["What is the difference between Nitro and Nitro Basic?",
       "Nitro Basic ($2.99/mo) includes larger uploads and animated avatars but no server boosts or HD streaming. Full Nitro ($9.99/mo) adds 2 server boosts and HD video."],
    ],
    "related" => ["twitch", "xbox-game-pass", "spotify", "youtube-premium"],
  ],

  "minecraft" => [
    "name"     => "Minecraft Realms",
    "emoji"    => "⛏️",
    "color"    => "#4CAF50",
    "tagline"  => "Cancel Minecraft Realms subscription",
    "about"    => "Minecraft Realms ($7.99/mo for Java, $3.99/mo for Bedrock) provides a private multiplayer server for up to 10 friends. Cancel through your Microsoft account or in-game.",
    "refund"   => "Microsoft does not offer refunds for Realms subscriptions. Contact Microsoft support at support.microsoft.com for accidental charges or billing errors.",
    "platforms" => [
      "web" => [
        "label" => "Microsoft Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.microsoft.com/services</strong> and sign in",
          "Find <strong>Minecraft Realms</strong> and click <strong>Manage</strong>",
          "Click <strong>Cancel subscription</strong> and confirm",
        ],
        "note"  => "This method works for both Java and Bedrock Realms subscriptions.",
      ],
      "ingame" => [
        "label" => "In-Game (Minecraft)",
        "icon"  => "🎮",
        "steps" => [
          "Open <strong>Minecraft</strong> and go to <strong>Minecraft Realms</strong>",
          "Select your <strong>Realm</strong>",
          "Click the <strong>pencil/edit icon</strong>",
          "Scroll down and click <strong>Recurring subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
        ],
        "note"  => "Works in both Java and Bedrock editions.",
      ],
    ],
    "after_cancel" => [
      "Realm stays online until the end of the billing period",
      "After expiry, the Realm goes offline",
      "World data is preserved for 18 months — download it before it expires",
      "Players can rejoin if you resubscribe",
    ],
    "faq" => [
      ["How do I download my Minecraft Realm world before cancelling?",
       "Go to Minecraft Realms → select your Realm → pencil icon → World Backups → Download latest. Save the world file before your subscription expires."],
      ["What happens to my Realm world when I cancel?",
       "The Realm goes offline but world data is stored for 18 months. You can reactivate it by resubscribing within that window."],
      ["Can I cancel Minecraft Realms on mobile?",
       "On mobile (Bedrock), cancel through Google Play or the App Store if you subscribed there. Otherwise use account.microsoft.com/services."],
    ],
    "related" => ["xbox-game-pass", "discord-nitro", "roblox-premium", "ea-play"],
  ],

  "funimation" => [
    "name"     => "Funimation",
    "emoji"    => "⛩️",
    "color"    => "#440099",
    "tagline"  => "Cancel Funimation subscription",
    "about"    => "Funimation Premium ($7.99/mo) offers dubbed and subbed anime streaming. Note: Funimation is merging into Crunchyroll. New subscriptions now go through Crunchyroll.",
    "refund"   => "Funimation does not offer refunds for the current billing period. For Apple or Google subscriptions, refunds are handled by those platforms.",
    "platforms" => [
      "web" => [
        "label" => "Funimation Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>funimation.com</strong> and sign in",
          "Click your <strong>profile name</strong> at top right",
          "Select <strong>Account Settings</strong>",
          "Click <strong>Subscription</strong>",
          "Click <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "If you have been migrated to Crunchyroll, cancel through Crunchyroll instead.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Funimation</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the billing period",
      "Funimation content is migrating to Crunchyroll",
      "Your watchlist may transfer to Crunchyroll — check your Crunchyroll account",
    ],
    "faq" => [
      ["Is Funimation merging with Crunchyroll?",
       "Yes. Sony acquired both and is consolidating content under Crunchyroll. Funimation accounts are migrating to Crunchyroll. Cancel Funimation and subscribe to Crunchyroll for continued anime access."],
      ["Does Funimation have better dubbing than Crunchyroll?",
       "Funimation was historically the leader in English dubbing. After the merger, dubbed content is available on Crunchyroll. Crunchyroll now handles both subbed and dubbed anime."],
      ["How do I cancel Funimation on Android?",
       "Open Google Play → profile icon → Payments &amp; subscriptions → Subscriptions → Funimation → Cancel subscription."],
    ],
    "related" => ["crunchyroll", "netflix", "hulu", "disney-plus"],
  ],

  "shudder" => [
    "name"     => "Shudder",
    "emoji"    => "👻",
    "color"    => "#1A1A1A",
    "tagline"  => "Cancel Shudder subscription",
    "about"    => "Shudder ($6.99/mo or $56.99/year) is a horror-focused streaming service with exclusive films, series, and documentaries. Cancel through your account or the platform you subscribed on.",
    "refund"   => "Shudder does not offer refunds for the current billing period. For Apple or Amazon subscriptions, refunds are handled by those platforms.",
    "platforms" => [
      "web" => [
        "label" => "Shudder Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>shudder.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>My Account</strong>",
          "Click <strong>Cancel Plan</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If you subscribed through Amazon Channels, cancel there instead.",
      ],
      "amazon" => [
        "label" => "Amazon Prime Channels",
        "icon"  => "📦",
        "steps" => [
          "Go to <strong>amazon.com → Account → Memberships &amp; Subscriptions</strong>",
          "Find <strong>Shudder</strong> and click <strong>Cancel Channel</strong>",
        ],
        "note"  => "Many Shudder subscribers are on Amazon Prime Channels.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the billing period",
      "Watchlist and viewing history are preserved",
      "Re-subscribe at any time",
    ],
    "faq" => [
      ["Does Shudder have original content?",
       "Yes. Shudder produces originals like Creepshow, Cursed Films, and The Last Drive-In with Joe Bob Briggs, which are exclusive to the platform."],
      ["How do I cancel Shudder on Amazon?",
       "Go to amazon.com → Your Account → Memberships &amp; Subscriptions → Shudder → Cancel Channel. Access continues through the billing period."],
      ["Is Shudder available on smart TV?",
       "Yes. Shudder is on Roku, Apple TV, Amazon Fire TV, Android TV, and Samsung Smart TV. Cancel through shudder.com regardless of which device you watch on (unless via Apple/Amazon)."],
    ],
    "related" => ["netflix", "hbo-max", "mubi", "britbox"],
  ],

  "ea-play" => [
    "name"     => "EA Play",
    "emoji"    => "🎮",
    "color"    => "#FF4747",
    "tagline"  => "Cancel EA Play subscription",
    "about"    => "EA Play ($4.99/mo or $29.99/year) gives access to EA&apos;s game vault, early trials, and 10% discounts. EA Play Pro ($14.99/mo) adds full game access on PC.",
    "refund"   => "EA does not offer refunds for EA Play subscriptions. Contact EA Help at help.ea.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "EA Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>ea.com</strong> and sign in to your EA account",
          "Go to <strong>account.ea.com/cp-ui/downloadandplay/index</strong>",
          "Or visit <strong>origin.com → EA App → My Account → Subscriptions</strong>",
          "Click <strong>Cancel subscription</strong> next to EA Play",
          "Confirm the cancellation",
        ],
        "note"  => "EA Play on Xbox is managed through Microsoft &mdash; cancel at account.microsoft.com/services.",
      ],
      "xbox" => [
        "label" => "Xbox (Microsoft Account)",
        "icon"  => "🟢",
        "steps" => [
          "Go to <strong>account.microsoft.com/services</strong>",
          "Find <strong>EA Play</strong> and click <strong>Cancel</strong>",
        ],
        "note"  => "EA Play is included in Xbox Game Pass Ultimate. Cancelling Game Pass also removes EA Play access.",
      ],
    ],
    "after_cancel" => [
      "EA Play access continues until end of billing period",
      "Game vault titles become unplayable",
      "Purchased games are not affected",
      "10% purchase discounts are removed",
    ],
    "faq" => [
      ["Is EA Play included with Xbox Game Pass?",
       "Yes. EA Play is included in Xbox Game Pass Ultimate and PC Game Pass at no extra cost. You don&apos;t need a separate EA Play subscription if you have Game Pass Ultimate."],
      ["Can I cancel EA Play and keep my saved games?",
       "Yes. Saved game data stored via EA servers or cloud sync is preserved. You just can&apos;t play EA Play-exclusive titles without a subscription."],
      ["What is the difference between EA Play and EA Play Pro?",
       "EA Play ($4.99/mo) gives access to older EA titles and early trials. EA Play Pro ($14.99/mo, PC only) gives full access to all new EA releases including FIFA and Battlefield on day one."],
    ],
    "related" => ["xbox-game-pass", "playstation-plus", "discord-nitro", "twitch"],
  ],

  "expressvpn" => [
    "name"     => "ExpressVPN",
    "emoji"    => "🔐",
    "color"    => "#DA3940",
    "tagline"  => "Cancel ExpressVPN and get a refund",
    "about"    => "ExpressVPN ($12.95/mo or $99.95/year) is a premium VPN service with 3,000+ servers in 105 countries. All plans include a 30-day money-back guarantee.",
    "refund"   => "ExpressVPN offers a 30-day money-back guarantee. Contact ExpressVPN live chat support at expressvpn.com within 30 days of purchase for a full refund.",
    "platforms" => [
      "web" => [
        "label" => "ExpressVPN Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>expressvpn.com</strong> and sign in",
          "Click your <strong>account email</strong> at top right",
          "Click <strong>Manage subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
          "For a refund: use <strong>live chat</strong> on expressvpn.com within 30 days",
        ],
        "note"  => "The 30-day money-back guarantee applies to all ExpressVPN plans including annual plans.",
      ],
    ],
    "after_cancel" => [
      "VPN access continues until end of paid period",
      "App stops connecting after expiry",
      "Refunds via live chat within 30 days",
    ],
    "faq" => [
      ["How do I get a refund from ExpressVPN?",
       "Start a live chat at expressvpn.com and request a refund within 30 days of purchase. No questions asked &mdash; refunds typically process in 5&ndash;7 business days."],
      ["How does ExpressVPN compare to NordVPN?",
       "ExpressVPN is faster and easier to use on routers but costs more. NordVPN is cheaper for long-term plans. Both offer 30-day money-back guarantees."],
      ["Does ExpressVPN auto-renew?",
       "Yes. Turn off auto-renew in your account at expressvpn.com or cancel outright before the renewal date."],
    ],
    "related" => ["nordvpn", "surfshark", "norton", "mcafee"],
  ],

  "home-chef" => [
    "name"     => "Home Chef",
    "emoji"    => "🍽️",
    "color"    => "#E35205",
    "tagline"  => "Cancel Home Chef meal kit subscription",
    "about"    => "Home Chef offers weekly meal kit boxes starting at $9.95/serving. It&apos;s a flexible subscription &mdash; you can pause, skip weeks, or cancel anytime through your account.",
    "refund"   => "Home Chef does not refund already-processed orders. Cancel or skip at least 5 days before your next delivery date to avoid the next charge.",
    "platforms" => [
      "web" => [
        "label" => "Home Chef Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>homechef.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account settings</strong>",
          "Click <strong>Pause or cancel membership</strong>",
          "Select <strong>Cancel membership</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Cancel at least 5 days before your next order cut-off date to avoid being charged for the next box.",
      ],
    ],
    "after_cancel" => [
      "Pending orders already processed will still ship",
      "No future orders will be placed",
      "Your account and recipe preferences are preserved",
      "You can resubscribe at any time",
    ],
    "faq" => [
      ["Can I pause Home Chef instead of cancelling?",
       "Yes. Home Chef lets you pause for 1&ndash;8 weeks. Go to Account settings → Pause or cancel membership → Pause. This is a great option if you&apos;re traveling."],
      ["How far in advance do I need to cancel Home Chef?",
       "Cancel at least 5 days before your next delivery date. You can see your cut-off date in Account settings → My deliveries."],
      ["How does Home Chef compare to HelloFresh?",
       "Home Chef has more customization options and a larger meal selection. HelloFresh is more structured with fixed recipes. Both are ~$9&ndash;$12/serving."],
    ],
    "related" => ["hellofresh", "everyplate", "blue-apron", "factor-meal"],
  ],

  "factor-meal" => [
    "name"     => "Factor Meals",
    "emoji"    => "🥡",
    "color"    => "#FF6B35",
    "tagline"  => "Cancel Factor meal delivery subscription",
    "about"    => "Factor (by HelloFresh) delivers fully prepared, chef-crafted meals starting at $10.99/meal. No cooking needed &mdash; just heat and eat. Cancel anytime online.",
    "refund"   => "Factor does not refund orders already being processed. Cancel at least 5 days before your next delivery cut-off. Contact support at factor75.com/contact for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Factor Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>factor75.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>My Account</strong>",
          "Click <strong>Plan settings</strong>",
          "Click <strong>Cancel plan</strong> and confirm",
        ],
        "note"  => "Cancel at least 5 days before your next order cut-off to avoid being charged for the next delivery.",
      ],
    ],
    "after_cancel" => [
      "Already processed orders will still ship",
      "No future orders placed",
      "Account and preferences preserved",
      "Can resubscribe at any time",
    ],
    "faq" => [
      ["How do I skip a week on Factor instead of cancelling?",
       "Log in to factor75.com → Plan settings → Manage deliveries and click Skip next to the week you want to skip. Skips must be done before the order cut-off date."],
      ["Are Factor meals healthy?",
       "Factor offers dietitian-designed meals in categories including Calorie Smart, Keto &amp; Paleo, Vegan &amp; Veggie, and Chef&apos;s Choice. All meals are free of refined sugars and artificial ingredients."],
      ["How does Factor compare to HelloFresh?",
       "Factor meals arrive fully cooked (heat &amp; eat). HelloFresh sends ingredients and recipes you cook yourself. Factor is better for convenience; HelloFresh is better if you enjoy cooking."],
    ],
    "related" => ["hellofresh", "home-chef", "everyplate", "doordash"],
  ],

  "everyplate" => [
    "name"     => "EveryPlate",
    "emoji"    => "🍳",
    "color"    => "#FFD100",
    "tagline"  => "Cancel EveryPlate subscription",
    "about"    => "EveryPlate is one of the most affordable meal kit services starting at $4.99/serving. Cancel or skip through your account settings at least 5 days before delivery.",
    "refund"   => "EveryPlate does not refund orders already processed. Cancel before the weekly cut-off date (typically Wednesday for following week delivery). Contact support at everyplate.com/help.",
    "platforms" => [
      "web" => [
        "label" => "EveryPlate Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>everyplate.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account Settings</strong>",
          "Click <strong>Plan Settings</strong>",
          "Select <strong>Cancel Plan</strong>",
          "Choose a reason and confirm",
        ],
        "note"  => "Check your next order date and cancel before the cut-off to avoid being charged.",
      ],
    ],
    "after_cancel" => [
      "Already scheduled deliveries may still ship",
      "No new orders are created",
      "Account remains active for resubscription",
    ],
    "faq" => [
      ["How do I skip a week on EveryPlate?",
       "Go to everyplate.com → Account Settings → Plan Settings → manage your upcoming weeks. Click Skip on any week before the cut-off date."],
      ["Is EveryPlate owned by HelloFresh?",
       "Yes. EveryPlate is a HelloFresh brand targeting budget-conscious customers. It has fewer meal choices but a lower price point than HelloFresh."],
      ["How does EveryPlate compare to HelloFresh?",
       "EveryPlate starts at $4.99/serving vs $9.99 for HelloFresh. EveryPlate has fewer meal options and simpler packaging. Both are owned by the same company."],
    ],
    "related" => ["hellofresh", "home-chef", "factor-meal", "blue-apron"],
  ],

  "blue-apron" => [
    "name"     => "Blue Apron",
    "emoji"    => "👨‍🍳",
    "color"    => "#2D51A0",
    "tagline"  => "Cancel Blue Apron subscription",
    "about"    => "Blue Apron delivers weekly meal kits starting at $9.99/serving with chef-designed recipes and fresh ingredients. Cancel anytime through your account settings.",
    "refund"   => "Blue Apron does not refund processed orders. Cancel at least 6 days before your next delivery date. Contact support at blueapron.com/pages/contact for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Blue Apron Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>blueapron.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account</strong>",
          "Scroll to <strong>My Plan</strong>",
          "Click <strong>Cancel Plan</strong>",
          "Select a reason and confirm",
        ],
        "note"  => "Cancel at least 6 days before your delivery date to avoid being charged for the next box.",
      ],
    ],
    "after_cancel" => [
      "Scheduled orders already confirmed will still ship",
      "No new boxes ordered",
      "Recipes and account history preserved",
      "Can reactivate at any time",
    ],
    "faq" => [
      ["Can I pause Blue Apron?",
       "Yes. Blue Apron lets you skip weeks individually. Go to your account and skip the weeks you won&apos;t need. Skips must be submitted before the order cut-off."],
      ["Does Blue Apron offer wine delivery?",
       "Blue Apron previously offered a wine subscription add-on, but it has been discontinued. The current service focuses on meal kits."],
      ["How does Blue Apron compare to HelloFresh?",
       "Blue Apron is known for more gourmet, chef-designed recipes. HelloFresh offers more meal variety and is often cheaper for larger plans. Both require cooking."],
    ],
    "related" => ["hellofresh", "home-chef", "everyplate", "factor-meal"],
  ],

  "mailchimp" => [
    "name"     => "Mailchimp",
    "emoji"    => "🐒",
    "color"    => "#FFE01B",
    "tagline"  => "Cancel Mailchimp paid plan",
    "about"    => "Mailchimp offers email marketing plans from free to Essentials ($13/mo), Standard ($20/mo), and Premium ($350/mo). Downgrade or cancel through your account billing settings.",
    "refund"   => "Mailchimp does not offer refunds for completed billing periods. Contact Mailchimp support at mailchimp.com/contact/support for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Mailchimp Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>mailchimp.com</strong> and sign in",
          "Click your <strong>profile name</strong> at bottom left",
          "Select <strong>Account &amp; billing</strong>",
          "Click the <strong>Billing</strong> tab",
          "Click <strong>Cancel account</strong> (or <strong>Downgrade</strong> to free)",
          "Confirm the action",
        ],
        "note"  => "Downgrading to free is usually better than full cancellation &mdash; you keep your lists and templates but lose paid features.",
      ],
    ],
    "after_cancel" => [
      "Paid features removed at end of billing period",
      "Downgrading to free preserves lists up to 500 contacts",
      "Full cancellation deletes your account and data",
      "Export your audience lists before cancelling",
    ],
    "faq" => [
      ["What happens to my email lists if I cancel Mailchimp?",
       "Full account cancellation deletes your data. Export your audience lists first: Audience → Manage Audience → Export Audience. Downgrading to free is safer &mdash; lists up to 500 contacts are preserved."],
      ["Can I downgrade Mailchimp to free instead of cancelling?",
       "Yes. Downgrading to free is usually the better choice. You keep lists (up to 500 contacts), templates, and campaign history. Go to Account &amp; Billing → Downgrade plan."],
      ["How many emails can I send for free on Mailchimp?",
       "The free Mailchimp plan allows 500 contacts and 1,000 emails per month. Essentials ($13/mo) removes the send limit and adds A/B testing."],
    ],
    "related" => ["shopify", "squarespace", "wix", "canva"],
  ],

  "babbel" => [
    "name"     => "Babbel",
    "emoji"    => "🗣️",
    "color"    => "#43A047",
    "tagline"  => "Cancel Babbel language subscription",
    "about"    => "Babbel offers 1-month ($13.95), 3-month, 6-month, and 12-month language learning subscriptions. Cancel before renewal through your account settings.",
    "refund"   => "Babbel offers a 20-day money-back guarantee for new subscribers. Contact support@babbel.com within 20 days of first purchase. Renewals are generally not refunded.",
    "platforms" => [
      "web" => [
        "label" => "Babbel Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>babbel.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account</strong>",
          "Click <strong>Subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "For a 20-day refund, email support@babbel.com within 20 days of your first purchase.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Babbel</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the billing period",
      "Lesson progress and streak data are preserved",
      "You can practice with limited free lessons",
      "Re-subscribe at any time to regain full access",
    ],
    "faq" => [
      ["Does Babbel offer a free trial?",
       "Babbel does not offer a traditional free trial but does have a 20-day money-back guarantee. You can also try the first lesson in each language for free without subscribing."],
      ["How does Babbel compare to Duolingo?",
       "Babbel focuses on practical conversation skills with grammar-focused lessons, suited to adult learners. Duolingo is free and gamified, better for casual learning. Babbel is often recommended for faster real-world fluency."],
      ["Can I learn multiple languages with one Babbel subscription?",
       "Yes. One Babbel subscription gives access to all 14 languages available on the platform."],
    ],
    "related" => ["duolingo", "pimsleur", "masterclass", "coursera"],
  ],

  "directv" => [
    "name"     => "DIRECTV",
    "emoji"    => "📡",
    "color"    => "#00A8E0",
    "tagline"  => "Cancel DIRECTV subscription — call required",
    "about"    => "DIRECTV (satellite and streaming) requires calling to cancel. Streaming plans start at $79.99/mo. Satellite customers may have early termination fees if under contract.",
    "refund"   => "DIRECTV does not offer refunds for the current billing period. Early termination fees apply if you are within a 2-year satellite contract. Call 1-800-531-5000 to discuss your options.",
    "platforms" => [
      "phone" => [
        "label" => "Phone (Required)",
        "icon"  => "📞",
        "steps" => [
          "Call <strong>DIRECTV at 1-800-531-5000</strong>",
          "Say &quot;Cancel service&quot; to the automated system",
          "Ask to speak with <strong>Retention</strong>",
          "Request cancellation and ask about any early termination fees",
          "Ask for a <strong>confirmation number</strong>",
        ],
        "note"  => "DIRECTV requires phone cancellation for both satellite and streaming plans. Best time to call is weekday mornings to avoid long hold times.",
      ],
      "stream" => [
        "label" => "DIRECTV Stream (Online)",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>directv.com</strong> and sign in",
          "Click your <strong>profile icon</strong> → <strong>My Account</strong>",
          "Go to <strong>Manage Package</strong>",
          "Click <strong>Cancel</strong> (available for streaming plans only)",
        ],
        "note"  => "Online cancellation is only available for DIRECTV Stream (no satellite equipment). Satellite customers must call.",
      ],
    ],
    "after_cancel" => [
      "Service continues until billing period ends",
      "Satellite equipment must be returned (prepaid box provided)",
      "Early termination fee may apply for satellite contracts",
      "DIRECTV Stream has no contract &mdash; cancel any time",
    ],
    "faq" => [
      ["How do I avoid DIRECTV early termination fees?",
       "Satellite plans have 2-year contracts with ETFs up to $480. Wait until your contract ends to avoid fees. Call and ask for your contract end date before cancelling."],
      ["Do I need to return DIRECTV equipment?",
       "Yes &mdash; satellite dish equipment and receivers must be returned. DIRECTV sends a prepaid shipping box. Failure to return may result in equipment charges of $135&ndash;$200 per piece."],
      ["What is the difference between DIRECTV satellite and DIRECTV Stream?",
       "DIRECTV satellite requires a dish and 2-year contract. DIRECTV Stream is internet-based, no contract, and can be cancelled online. Stream starts at $79.99/mo."],
    ],
    "related" => ["sling-tv", "youtube-tv", "fubotv", "philo"],
  ],

  "apple-icloud" => [
    "name"     => "iCloud+",
    "emoji"    => "☁️",
    "color"    => "#1D6FF3",
    "tagline"  => "Cancel iCloud+ storage plan",
    "about"    => "iCloud+ storage plans range from $0.99/mo (50GB) to $9.99/mo (2TB). Downgrade to the free 5GB plan anytime through your Apple device settings.",
    "refund"   => "Apple does not offer refunds for iCloud+ storage plans. Contact Apple Support at apple.com/support if charged incorrectly.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → iCloud</strong>",
          "Tap <strong>Manage Account Storage</strong>",
          "Tap <strong>Change Storage Plan</strong>",
          "Select <strong>Downgrade Options</strong>",
          "Choose the <strong>free 5GB plan</strong>",
          "Confirm with your Apple ID password",
        ],
        "note"  => "If you store more than 5GB, your files won&apos;t be deleted immediately but new data won&apos;t sync until you free up space.",
      ],
      "mac" => [
        "label" => "Mac",
        "icon"  => "🖥️",
        "steps" => [
          "Open <strong>System Settings → [Your Name] → iCloud</strong>",
          "Click <strong>Manage</strong>",
          "Click <strong>Change Storage Plan</strong>",
          "Select <strong>Downgrade Options</strong> → free 5GB plan",
        ],
        "note"  => "Works on macOS Ventura and later.",
      ],
    ],
    "after_cancel" => [
      "Storage plan downgrades at end of billing period",
      "Files are NOT immediately deleted",
      "iCloud Backup, Photos sync stops when over 5GB",
      "Download files you want to keep locally before exceeding 5GB",
    ],
    "faq" => [
      ["Will my photos be deleted if I cancel iCloud+?",
       "No, not immediately. But iCloud Photos won&apos;t sync new photos and backups will stop once you exceed 5GB. Download your photos to your device or a Mac using Image Capture before downgrading."],
      ["What is the difference between iCloud and iCloud+?",
       "iCloud+ is Apple&apos;s paid storage upgrade beyond the free 5GB. It also includes iCloud Private Relay, Hide My Email, and Custom Email Domain features."],
      ["Can I cancel iCloud+ for just one family member?",
       "If you have iCloud+ Family Sharing, the plan organizer manages the storage. Individual family members cannot independently cancel &mdash; the organizer must downgrade the family plan."],
    ],
    "related" => ["google-one", "dropbox", "apple-music", "apple-arcade"],
  ],

  "roblox-premium" => [
    "name"     => "Roblox Premium",
    "emoji"    => "🧱",
    "color"    => "#00A2FF",
    "tagline"  => "Cancel Roblox Premium subscription",
    "about"    => "Roblox Premium ($4.99&ndash;$19.99/month) provides a monthly Robux allowance and access to the Roblox economy for trading items. Cancel through your Roblox account settings.",
    "refund"   => "Roblox does not offer refunds for Premium subscriptions or Robux purchases. For billing issues, contact Roblox support at roblox.com/support.",
    "platforms" => [
      "web" => [
        "label" => "Roblox Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>roblox.com</strong> and sign in",
          "Click the <strong>Robux icon</strong> or go to <strong>roblox.com/premium/membership</strong>",
          "Scroll down to find your current plan",
          "Click <strong>Cancel Membership</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "For accounts where a parent made the purchase, the parent must sign into their account to cancel.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Roblox</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if the subscription was purchased through Apple.",
      ],
    ],
    "after_cancel" => [
      "Premium benefits continue until the end of the billing period",
      "Monthly Robux stipend stops",
      "Trading access is removed after expiry",
      "Existing Robux balance is kept",
    ],
    "faq" => [
      ["Can I get a refund for Roblox Premium?",
       "Roblox does not offer refunds for Premium or Robux. For unauthorized charges (e.g., a child made a purchase), contact Roblox support at roblox.com/support immediately."],
      ["Do I keep my Robux when I cancel Roblox Premium?",
       "Yes. Any Robux you have accumulated remains in your account after cancelling Premium. You just stop receiving the monthly stipend."],
      ["How do I cancel Roblox Premium for my child&apos;s account?",
       "If you subscribed via App Store, cancel through Settings → Subscriptions. If via Roblox directly, sign in to the child&apos;s Roblox account → go to roblox.com/premium/membership → Cancel Membership."],
    ],
    "related" => ["minecraft", "discord-nitro", "xbox-game-pass", "ea-play"],
  ],

  "pimsleur" => [
    "name"     => "Pimsleur",
    "emoji"    => "🎧",
    "color"    => "#00427A",
    "tagline"  => "Cancel Pimsleur language subscription",
    "about"    => "Pimsleur Premium ($19.99/month) offers audio-based language learning in 50+ languages. Cancel anytime through your account settings.",
    "refund"   => "Pimsleur offers a 30-day money-back guarantee for new subscribers. Contact customer service at pimsleur.com/support within 30 days for a full refund.",
    "platforms" => [
      "web" => [
        "label" => "Pimsleur Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>pimsleur.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account Settings</strong>",
          "Click <strong>Manage Plan</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "For a refund within 30 days, contact pimsleur.com/support after cancelling.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Pimsleur</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the billing period",
      "Lesson progress is saved",
      "30-day money-back guarantee for new subscribers",
    ],
    "faq" => [
      ["How does Pimsleur compare to Babbel or Duolingo?",
       "Pimsleur is entirely audio-based &mdash; ideal for learning while driving or exercising. Babbel focuses on reading and grammar. Duolingo is gamified and free. Pimsleur is best for spoken fluency."],
      ["Can I cancel Pimsleur and get a refund?",
       "Yes &mdash; Pimsleur offers a 30-day money-back guarantee for new users. Contact their support at pimsleur.com/support within 30 days of first purchase."],
      ["Does Pimsleur work without internet?",
       "Yes. Pimsleur lessons can be downloaded for offline use in the mobile app, which is one of its advantages for commuters and travelers."],
    ],
    "related" => ["babbel", "duolingo", "masterclass", "audible"],
  ],

  "ynab" => [
    "name"     => "YNAB",
    "emoji"    => "💵",
    "color"    => "#70B244",
    "tagline"  => "Cancel YNAB budgeting subscription",
    "about"    => "YNAB (You Need A Budget) costs $14.99/month or $109/year and offers zero-based budgeting tools. Cancel anytime through your account settings.",
    "refund"   => "YNAB does not offer refunds for paid periods. However, if you cancel within the first 34-day free trial period you are not charged. Contact support@youneedabudget.com for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "YNAB Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>app.ynab.com</strong> and sign in",
          "Click your <strong>email address</strong> at top right",
          "Select <strong>Account Settings</strong>",
          "Click <strong>Manage Subscription</strong>",
          "Click <strong>Cancel Subscription</strong> and confirm",
        ],
        "note"  => "YNAB offers a 34-day free trial. Cancel before the trial ends to avoid being charged.",
      ],
    ],
    "after_cancel" => [
      "Full access continues until the end of the billing period",
      "Budget data is read-only after expiry",
      "Data can be exported as CSV",
      "Export your budget data before cancelling permanently",
    ],
    "faq" => [
      ["What is YNAB&apos;s free trial?",
       "YNAB offers a 34-day free trial with no credit card required. Cancel before the trial ends at app.ynab.com → Account Settings → Cancel to avoid being charged."],
      ["Can I export my YNAB data after cancelling?",
       "Yes. Go to your budget → Reports → Export, or use the budget settings to export transactions as CSV before your subscription expires."],
      ["Is YNAB worth $14.99/month?",
       "YNAB is most valuable for people actively working to pay off debt or build savings. Users report saving an average of $600 in their first two months. If you&apos;re comfortable with your budget, consider free alternatives like Mint or Rocket Money."],
    ],
    "related" => ["rocket-money", "microsoft-365", "google-one", "dropbox"],
  ],

  "costco" => [
    "name"     => "Costco",
    "emoji"    => "🏪",
    "color"    => "#005DAA",
    "tagline"  => "Cancel Costco membership — in-warehouse or online",
    "about"    => "Costco memberships (Gold Star $65/year, Executive $130/year) can be cancelled for a full refund at any time &mdash; even after using them.",
    "refund"   => "Costco offers a 100% satisfaction guarantee on memberships. Cancel any time for a full prorated refund of your unused membership fee. No questions asked.",
    "platforms" => [
      "instore" => [
        "label" => "In Warehouse (Fastest)",
        "icon"  => "🏪",
        "steps" => [
          "Visit any <strong>Costco warehouse</strong>",
          "Go to the <strong>Member Services</strong> desk near the entrance",
          "Bring your <strong>Costco card or member ID</strong>",
          "Request to cancel your membership",
          "Receive an immediate <strong>full refund</strong> to your original payment method",
        ],
        "note"  => "In-warehouse cancellation is the fastest method and guarantees same-day refund processing.",
      ],
      "web" => [
        "label" => "Online",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>costco.com</strong> and sign in",
          "Go to <strong>Orders &amp; Returns → Membership</strong>",
          "Click <strong>Cancel Membership</strong>",
          "Or call <strong>1-800-774-2678</strong> to cancel by phone",
        ],
        "note"  => "Online and phone cancellations may take 5&ndash;10 business days to process the refund.",
      ],
    ],
    "after_cancel" => [
      "Full prorated membership refund issued",
      "Costco credit card (if applicable) is separate &mdash; contact Citi to manage it",
      "Costco.com orders can still be returned per standard return policy",
      "Executive member upgrade fees are also refunded",
    ],
    "faq" => [
      ["Can I get a refund if I already used my Costco membership?",
       "Yes. Costco&apos;s 100% satisfaction guarantee applies even if you&apos;ve used your membership. You get a prorated refund based on how many months remain in your year."],
      ["How do I cancel Costco without going to the warehouse?",
       "Call 1-800-774-2678 or use the online cancellation at costco.com → Membership. Allow 5&ndash;10 business days for the refund."],
      ["What happens to my Costco credit card if I cancel my membership?",
       "The Costco Anywhere Visa by Citi is separate from your membership. Cancelling your Costco membership does not automatically cancel the credit card. Contact Citi directly if you want to close the card."],
    ],
    "related" => ["instacart", "walmart-plus", "amazon-prime", "doordash"],
  ],

  "aaa" => [
    "name"     => "AAA",
    "emoji"    => "🚗",
    "color"    => "#003087",
    "tagline"  => "Cancel AAA membership",
    "about"    => "AAA (American Automobile Association) memberships (Classic $62/year, Plus $89/year, Premier $119/year) provide roadside assistance, travel discounts, and insurance services.",
    "refund"   => "AAA offers a prorated refund if you cancel within the membership year. Contact your local AAA club for the exact refund amount. Call 1-800-222-4357.",
    "platforms" => [
      "phone" => [
        "label" => "Phone",
        "icon"  => "📞",
        "steps" => [
          "Call <strong>1-800-222-4357</strong> (AAA national) or your local AAA club number",
          "Have your <strong>membership card</strong> or member number ready",
          "Request to cancel your membership",
          "Ask about your <strong>prorated refund</strong> for unused months",
        ],
        "note"  => "AAA is regional &mdash; contact your specific club (AAA Northeast, AAA Southern California, etc.) for the most direct service.",
      ],
      "web" => [
        "label" => "Online / In Person",
        "icon"  => "💻",
        "steps" => [
          "Sign in at <strong>aaa.com</strong>",
          "Go to <strong>My Account → Membership</strong>",
          "Look for the <strong>Cancel</strong> option (availability varies by region)",
          "Or visit a <strong>local AAA branch</strong> in person",
        ],
        "note"  => "Online cancellation is not available in all AAA regions. Phone or in-person is the most reliable method.",
      ],
    ],
    "after_cancel" => [
      "Roadside assistance coverage ends immediately",
      "Prorated refund issued for remaining months",
      "Travel and insurance discounts are no longer available",
      "AAA credit cards are managed separately by the issuing bank",
    ],
    "faq" => [
      ["Can I get a refund for my AAA membership?",
       "Yes. AAA typically offers a prorated refund for the unused portion of your membership year. Call your local AAA club or 1-800-222-4357 to request the refund."],
      ["Does cancelling AAA affect my car insurance?",
       "Only if you purchased insurance through AAA. AAA roadside assistance and AAA insurance are separate products. Contact your insurance provider directly if needed."],
      ["Can I cancel AAA online?",
       "Some regional AAA clubs allow online cancellation; others require a phone call. Check aaa.com or call 1-800-222-4357 for your specific region."],
    ],
    "related" => ["costco", "walmart-plus", "amazon-prime", "experian"],
  ],

  "adobe-acrobat" => [
    "name"     => "Adobe Acrobat",
    "emoji"    => "📄",
    "color"    => "#FF0000",
    "tagline"  => "Cancel Adobe Acrobat subscription",
    "about"    => "Adobe Acrobat Standard ($12.99/mo) and Pro ($19.99/mo) offer PDF editing, signing, and creation tools. Cancel through your Adobe account &mdash; early termination fees apply for annual plans cancelled mid-term.",
    "refund"   => "Adobe offers a refund within 14 days of purchase or renewal. Cancelling an annual plan mid-term incurs a 50% early termination fee on remaining months. Contact Adobe support to request a refund.",
    "platforms" => [
      "web" => [
        "label" => "Adobe Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.adobe.com</strong> and sign in",
          "Click <strong>Plans &amp; Payment</strong>",
          "Find <strong>Adobe Acrobat</strong> and click <strong>Manage plan</strong>",
          "Click <strong>Cancel plan</strong>",
          "Review any early termination fees and confirm",
        ],
        "note"  => "Annual plans cancelled before the term ends incur a 50% fee on remaining payments. Cancel within 14 days to avoid this fee entirely.",
      ],
    ],
    "after_cancel" => [
      "Acrobat Pro/Standard access continues until end of billing period",
      "Reverts to free Acrobat Reader (view-only PDFs)",
      "PDFs you created are not affected",
      "14-day window for full refund with no ETF",
    ],
    "faq" => [
      ["What is Adobe&apos;s early termination fee?",
       "If you cancel an annual Adobe plan after 14 days, you owe 50% of the remaining subscription amount. For example, cancelling 6 months early on a $240/year plan costs $60."],
      ["How do I avoid Adobe&apos;s cancellation fee?",
       "Cancel within 14 days of purchase or annual renewal for a full refund and no fee. After 14 days, wait until the annual term ends before cancelling."],
      ["What is the difference between Adobe Acrobat and Adobe Reader?",
       "Adobe Reader is free and lets you view PDFs. Acrobat Standard/Pro adds editing, converting, signing, and form creation. Cancel Acrobat to revert to the free Reader."],
    ],
    "related" => ["adobe", "dropbox", "microsoft-365", "google-one"],
  ],

  "google-workspace" => [
    "name"     => "Google Workspace",
    "emoji"    => "🏢",
    "color"    => "#4285F4",
    "tagline"  => "Cancel Google Workspace subscription",
    "about"    => "Google Workspace (formerly G Suite) plans start at $6/user/month (Business Starter) up to $18/user/month (Business Plus), offering Gmail, Drive, Meet, and admin tools for businesses.",
    "refund"   => "Google Workspace does not offer refunds for completed billing periods. Cancel before your renewal date to stop charges. Annual plans may be prorated &mdash; contact Google support.",
    "platforms" => [
      "web" => [
        "label" => "Google Admin Console",
        "icon"  => "💻",
        "steps" => [
          "Sign in to <strong>admin.google.com</strong> as a super admin",
          "Go to <strong>Billing → Subscriptions</strong>",
          "Click on your <strong>Google Workspace</strong> plan",
          "Click <strong>Cancel subscription</strong>",
          "Select a cancellation date and confirm",
        ],
        "note"  => "Only super admins can cancel Google Workspace. After cancellation, users lose access to admin-managed Gmail and Drive at the end of the billing period.",
      ],
    ],
    "after_cancel" => [
      "Users keep access until end of billing period",
      "Emails and Drive files remain for 30 days after cancellation",
      "Export your data via Google Takeout before cancelling",
      "Custom domain email stops working after expiry",
    ],
    "faq" => [
      ["How do I export Google Workspace data before cancelling?",
       "Go to admin.google.com → Data Export → Start Export. This backs up all user Gmail, Drive, Calendar, and Docs data. Allow 24&ndash;72 hours for the export to complete."],
      ["What happens to my custom domain email after cancelling?",
       "Custom email (you@yourbusiness.com) stops working. You&apos;ll need to set up email through another provider or revert to free Gmail (@gmail.com)."],
      ["Can I downgrade Google Workspace instead of cancelling?",
       "Yes. Go to admin.google.com → Billing → Subscriptions → Upgrade/Downgrade. You can switch to a cheaper plan or to the free Google account tier."],
    ],
    "related" => ["microsoft-365", "zoom", "dropbox", "mailchimp"],
  ],

  "lightroom" => [
    "name"     => "Adobe Lightroom",
    "emoji"    => "📷",
    "color"    => "#31A8FF",
    "tagline"  => "Cancel Adobe Lightroom subscription",
    "about"    => "Adobe Lightroom is available as Lightroom ($9.99/mo with 1TB storage) or as part of the Photography Plan ($9.99/mo with Photoshop + 20GB). Cancel through your Adobe account.",
    "refund"   => "Adobe offers a 14-day refund window. Cancelling an annual plan after 14 days incurs a 50% early termination fee on remaining months. Cancel within 14 days for a full refund.",
    "platforms" => [
      "web" => [
        "label" => "Adobe Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.adobe.com</strong> and sign in",
          "Click <strong>Plans &amp; Payment</strong>",
          "Find <strong>Lightroom</strong> or your <strong>Photography Plan</strong>",
          "Click <strong>Manage plan → Cancel plan</strong>",
          "Review any early termination fees and confirm",
        ],
        "note"  => "Cancel within 14 days of purchase or renewal to avoid the 50% early termination fee.",
      ],
    ],
    "after_cancel" => [
      "Lightroom access continues until end of billing period",
      "Cloud photos remain accessible for 30 days after cancellation",
      "Download your photos from Lightroom before cancelling",
      "Lightroom Classic files on your computer are always accessible",
    ],
    "faq" => [
      ["Will my Lightroom photos be deleted if I cancel?",
       "Cloud-synced photos remain accessible for 30 days after cancellation. Download them via Lightroom desktop or File → Export. Local files in Lightroom Classic are never deleted."],
      ["Can I use Lightroom after cancelling?",
       "You can view photos in Lightroom mobile in a limited read-only mode. Editing, cloud sync, and presets require an active subscription."],
      ["What is Adobe&apos;s Photography Plan?",
       "The Photography Plan ($9.99/mo) includes Lightroom, Photoshop, and 20GB cloud storage. It&apos;s the best value for photographers. Cancelling the plan removes access to both apps."],
    ],
    "related" => ["adobe", "adobe-acrobat", "adobe-stock", "canva"],
  ],

  "strava" => [
    "name"     => "Strava",
    "emoji"    => "🏃",
    "color"    => "#FC4C02",
    "tagline"  => "Cancel Strava subscription",
    "about"    => "Strava Subscription ($11.99/mo or $79.99/year) adds training analysis, route planning, segment leaderboards, and safety features to the free fitness tracking app.",
    "refund"   => "Strava does not offer refunds for the current billing period. For Apple or Google subscriptions, refunds are handled by those platforms.",
    "platforms" => [
      "web" => [
        "label" => "Strava Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>strava.com</strong> and sign in",
          "Click your <strong>profile photo</strong> at top right",
          "Select <strong>Settings → My Account → Subscription</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Free Strava still tracks activities, segments, and routes &mdash; just without advanced analytics.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Strava</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Subscription features removed at end of billing period",
      "Activity history and routes are fully preserved",
      "Free Strava remains active with basic features",
      "Segment leaderboard positions and records are kept",
    ],
    "faq" => [
      ["What do I lose when I cancel Strava?",
       "You lose Training Log analysis, heart rate zones, power analysis, route suggestions, the Live Segments feature, and the Safety Beacon. Basic activity tracking, segments (top 10 only), and your full history remain free."],
      ["Can I keep my Strava data after cancelling?",
       "Yes. All your activities, routes, and followers are preserved on the free plan. Export your data anytime at strava.com → Settings → My Account → Download or Delete Your Account."],
      ["Is Strava worth paying for?",
       "If you follow a structured training plan with a coach or use power/heart rate analysis, Strava Subscription is valuable. Casual runners and cyclists often find the free tier sufficient."],
    ],
    "related" => ["whoop", "myfitnesspal", "peloton", "apple-music"],
  ],

  "figma" => [
    "name"     => "Figma",
    "emoji"    => "🎨",
    "color"    => "#F24E1E",
    "tagline"  => "Cancel Figma Professional or Organization plan",
    "about"    => "Figma Professional ($15/editor/mo or $12/editor/mo annual) adds unlimited projects, version history, and team libraries. Cancel or downgrade to the free Starter plan.",
    "refund"   => "Figma does not offer refunds for completed billing periods. Annual plans cancelled mid-term are not refunded. Contact support@figma.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Figma Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>figma.com</strong> and sign in",
          "Click your <strong>team name</strong> in the left sidebar",
          "Go to <strong>Settings → Plan</strong>",
          "Click <strong>Downgrade to Starter</strong> (effectively cancels paid plan)",
          "Confirm the downgrade",
        ],
        "note"  => "Downgrading to the free Starter plan is the easiest way to stop charges. Starter allows 3 projects and unlimited personal files.",
      ],
    ],
    "after_cancel" => [
      "Paid features removed at end of billing period",
      "Files beyond free plan limits become read-only",
      "Version history limited to 30 days on free plan",
      "Team libraries deactivate on free plan",
    ],
    "faq" => [
      ["What is the Figma free plan limit?",
       "Figma Starter (free) allows 3 Figma files and 3 FigJam files per team. Unlimited personal files, unlimited collaborators viewing, and 30-day version history are included."],
      ["Does FigJam have a separate subscription?",
       "No. FigJam is included in Figma plans. The Figma Professional plan includes both Figma design and FigJam for the same price."],
      ["How do I cancel Figma for an Organization plan?",
       "Organization plan cancellations must be handled by the organization admin. Go to Admin → Billing → Cancel plan. Contact Figma sales for Enterprise plan changes."],
    ],
    "related" => ["canva", "adobe", "lightroom", "squarespace"],
  ],

  "whoop" => [
    "name"     => "WHOOP",
    "emoji"    => "⌚",
    "color"    => "#000000",
    "tagline"  => "Cancel WHOOP membership",
    "about"    => "WHOOP charges a membership fee ($30/mo or $239/year) that includes the wearable device plus recovery, strain, and sleep analytics. Cancel through the WHOOP app.",
    "refund"   => "WHOOP offers a 30-day return policy on new memberships. After 30 days, no refunds are issued. Contact support@whoop.com for billing issues.",
    "platforms" => [
      "app" => [
        "label" => "WHOOP App",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>WHOOP app</strong>",
          "Tap your <strong>profile icon</strong> at top left",
          "Tap <strong>Settings → Membership</strong>",
          "Tap <strong>Cancel Membership</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "WHOOP membership can only be cancelled through the app. Cancelling returns the device to an inactive state.",
      ],
      "web" => [
        "label" => "WHOOP Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>join.whoop.com</strong> and sign in",
          "Go to <strong>Account → Membership</strong>",
          "Click <strong>Cancel Membership</strong>",
        ],
        "note"  => "Web cancellation works as an alternative to the app.",
      ],
    ],
    "after_cancel" => [
      "WHOOP device stops syncing after membership ends",
      "Health data is preserved and exportable",
      "30-day return policy for new members",
      "Device must be returned to WHOOP if within return window",
    ],
    "faq" => [
      ["Do I need to return my WHOOP device if I cancel?",
       "You only need to return the device if you cancel within the 30-day return window. After 30 days, you keep the device but it stops functioning without an active membership."],
      ["Can I export my WHOOP data before cancelling?",
       "Yes. Go to WHOOP app → profile → Settings → Privacy &amp; Data → Export Data. You&apos;ll receive a CSV of your health metrics."],
      ["How does WHOOP compare to a Fitbit or Apple Watch?",
       "WHOOP focuses entirely on recovery, strain, and sleep analytics with no screen. It&apos;s designed for serious athletes. Fitbit and Apple Watch are general-purpose smartwatches with fitness tracking as a secondary feature."],
    ],
    "related" => ["strava", "peloton", "myfitnesspal", "apple-music"],
  ],

  "bark" => [
    "name"     => "Bark",
    "emoji"    => "🐾",
    "color"    => "#7B3F9A",
    "tagline"  => "Cancel Bark parental monitoring subscription",
    "about"    => "Bark ($14/mo or $99/year) monitors children&apos;s devices and social media for signs of bullying, depression, and predators. Cancel through your account settings.",
    "refund"   => "Bark offers a full refund within 7 days of purchase. After 7 days, annual plans are non-refundable. Contact support@bark.us for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Bark Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>bark.us</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account Settings</strong>",
          "Click <strong>Billing</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "After cancelling, monitoring stops immediately. The app remains installed on children&apos;s devices but sends no alerts.",
      ],
    ],
    "after_cancel" => [
      "Monitoring alerts stop immediately",
      "Bark app remains on child&apos;s device but is inactive",
      "Account data is preserved for 90 days",
      "7-day refund window for new subscribers",
    ],
    "faq" => [
      ["Does Bark read my child&apos;s messages?",
       "Bark uses AI to flag concerning content without storing full message histories. Parents see alerts, not transcripts. This is different from screen time apps like Circle or Qustodio."],
      ["What happens to monitoring after I cancel Bark?",
       "Monitoring stops immediately. The Bark app remains installed on devices but does not send alerts or analyze activity. Uninstall it from your child&apos;s device after cancelling."],
      ["How does Bark compare to parental control apps?",
       "Bark focuses on smart monitoring (alerts for risky content) rather than blocking. Circle and Qustodio block content and set time limits. Many parents use both approaches."],
    ],
    "related" => ["calm", "headspace", "google-one", "apple-icloud"],
  ],

  "walmart-plus" => [
    "name"     => "Walmart+",
    "emoji"    => "🛒",
    "color"    => "#0071CE",
    "tagline"  => "Cancel Walmart+ membership",
    "about"    => "Walmart+ ($12.95/mo or $98/year) offers free delivery from Walmart stores, fuel discounts, and a Paramount+ subscription. Cancel anytime through your Walmart account.",
    "refund"   => "Walmart+ offers a prorated refund on annual memberships. Monthly memberships are non-refundable. Contact Walmart support at walmart.com/help for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Walmart Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>walmart.com</strong> and sign in",
          "Click your <strong>account icon</strong> at top right",
          "Select <strong>Walmart+ membership</strong>",
          "Click <strong>Manage membership → Cancel membership</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Walmart+ includes a free Paramount+ subscription. Cancelling Walmart+ also removes your Paramount+ access.",
      ],
      "iphone" => [
        "label" => "Walmart App",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>Walmart app</strong>",
          "Tap <strong>Account → Walmart+</strong>",
          "Tap <strong>Manage membership → Cancel</strong>",
        ],
        "note"  => "Works the same on Android.",
      ],
    ],
    "after_cancel" => [
      "Membership benefits continue until end of billing period",
      "Free delivery and fuel discounts stop",
      "Paramount+ access (included with Walmart+) is also removed",
      "Annual membership may receive a prorated refund",
    ],
    "faq" => [
      ["Does cancelling Walmart+ cancel Paramount+?",
       "Yes. If you got Paramount+ through Walmart+, it will be cancelled when you cancel Walmart+. To keep Paramount+, subscribe separately at paramountplus.com."],
      ["How is Walmart+ different from Amazon Prime?",
       "Walmart+ focuses on grocery and Walmart delivery with fuel discounts. Amazon Prime has broader shopping, Prime Video, and more. Both are ~$13/mo. They serve different primary use cases."],
      ["Can I get a refund for Walmart+?",
       "Annual plans get a prorated refund for the unused portion. Monthly plans are non-refundable. Contact walmart.com/help to request a refund."],
    ],
    "related" => ["amazon-prime", "instacart", "costco", "doordash"],
  ],

  "evernote" => [
    "name"     => "Evernote",
    "emoji"    => "🐘",
    "color"    => "#1F8F3A",
    "tagline"  => "Cancel Evernote Personal or Professional plan",
    "about"    => "Evernote Personal ($14.99/mo) and Professional ($17.99/mo) add unlimited uploads, offline access, and AI features. Cancel through your account settings.",
    "refund"   => "Evernote does not offer refunds for the current billing period. Annual plans are non-refundable after purchase. Contact support.evernote.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Evernote Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>evernote.com</strong> and sign in",
          "Click your <strong>profile icon</strong> → <strong>Settings</strong>",
          "Click <strong>Billing</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "After cancellation, account reverts to Free (1 notebook, 50 notes, 60MB upload/month).",
      ],
    ],
    "after_cancel" => [
      "Paid features continue until end of billing period",
      "Account reverts to Free tier (1 notebook, 50 notes)",
      "Notes exceeding free limits become read-only",
      "Export notes before downgrading: File → Export Notes",
    ],
    "faq" => [
      ["What happens to my notes after I cancel Evernote?",
       "Your notes are not deleted, but the free plan limits you to 1 notebook and 50 notes. Notes beyond the limit become read-only. Export all notes first via File → Export Notes → HTML or ENEX format."],
      ["How do I export Evernote notes before cancelling?",
       "In Evernote desktop: select all notes → right-click → Export Notes → choose .enex format. This backs up everything. You can import .enex files into Notion, Bear, or Apple Notes."],
      ["What are good Evernote alternatives?",
       "Notion (free tier is generous), Apple Notes (free), Obsidian (free for local notes), and Bear ($2.99/mo) are popular alternatives. All can import Evernote .enex files."],
    ],
    "related" => ["notion", "dropbox", "google-one", "microsoft-365"],
  ],

  "myfitnesspal" => [
    "name"     => "MyFitnessPal",
    "emoji"    => "🥗",
    "color"    => "#0072B1",
    "tagline"  => "Cancel MyFitnessPal Premium subscription",
    "about"    => "MyFitnessPal Premium ($19.99/mo or $79.99/year) removes ads and adds advanced analytics, meal plans, and guided workouts. The free version remains highly functional.",
    "refund"   => "MyFitnessPal does not offer refunds for completed billing periods. For Apple/Google subscriptions, refunds follow their respective policies. Contact support at myfitnesspal.com/support.",
    "platforms" => [
      "web" => [
        "label" => "MyFitnessPal Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>myfitnesspal.com</strong> and sign in",
          "Click your <strong>username</strong> at top right",
          "Select <strong>Settings → My Subscription</strong>",
          "Click <strong>Cancel Premium</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "The free MyFitnessPal plan (calorie tracking, macro logging) remains available after cancelling Premium.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>MyFitnessPal</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this if you subscribed via the App Store.",
      ],
    ],
    "after_cancel" => [
      "Premium features removed at end of billing period",
      "Food diary and logged data are fully preserved",
      "Free plan continues with calorie and macro tracking",
      "Ads return on the free version",
    ],
    "faq" => [
      ["Is MyFitnessPal free version still useful?",
       "Yes. The free version includes calorie tracking, macro logging, a food database of 14 million items, and exercise logging. Premium mainly adds ad removal, guided workouts, and detailed nutrient analysis."],
      ["Can I export my MyFitnessPal data?",
       "Yes. Go to myfitnesspal.com → Settings → Diary Settings → Export. You can download CSV files of your food diary and exercise log."],
      ["How does MyFitnessPal compare to Cronometer?",
       "Cronometer is free and more detailed for micronutrients. MyFitnessPal has a larger food database and better social features. Both are solid calorie trackers."],
    ],
    "related" => ["strava", "whoop", "noom", "peloton"],
  ],

  "proton-vpn" => [
    "name"     => "Proton VPN",
    "emoji"    => "🔒",
    "color"    => "#6D4AFF",
    "tagline"  => "Cancel Proton VPN subscription",
    "about"    => "Proton VPN Plus ($9.99/mo or $4.99/mo annually) offers high-speed VPN with servers in 65+ countries, no-logs policy, and Tor over VPN. Free plan available with no data limit.",
    "refund"   => "Proton VPN offers a 30-day money-back guarantee. Contact support at proton.me/support within 30 days of purchase for a full refund.",
    "platforms" => [
      "web" => [
        "label" => "Proton Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.proton.me</strong> and sign in",
          "Click <strong>Dashboard</strong>",
          "Find <strong>Proton VPN</strong> and click <strong>Manage</strong>",
          "Click <strong>Cancel subscription</strong>",
          "For a refund, contact support at <strong>proton.me/support</strong> within 30 days",
        ],
        "note"  => "After cancelling paid plan, you keep access to the Proton VPN free tier (3 countries, 1 device).",
      ],
    ],
    "after_cancel" => [
      "VPN Plus features removed at end of billing period",
      "Free Proton VPN remains active (3 server locations, 1 device)",
      "30-day money-back guarantee for new subscribers",
    ],
    "faq" => [
      ["Is there a free version of Proton VPN?",
       "Yes. Proton VPN has a genuinely unlimited free plan (no data cap) with servers in 3 countries and 1 device. It&apos;s slower than paid but a good fallback after cancelling."],
      ["How does Proton VPN compare to NordVPN?",
       "Proton VPN is based in Switzerland (strong privacy laws) and has a verified open-source app. NordVPN is faster and cheaper long-term. Both have no-logs policies."],
      ["Does cancelling Proton VPN cancel Proton Mail?",
       "Only if they&apos;re on the same Proton plan (Proton Unlimited). If subscribed separately, they are independent. Check your account.proton.me dashboard to confirm."],
    ],
    "related" => ["nordvpn", "surfshark", "expressvpn", "norton"],
  ],

  "adobe-stock" => [
    "name"     => "Adobe Stock",
    "emoji"    => "🖼️",
    "color"    => "#FF0000",
    "tagline"  => "Cancel Adobe Stock subscription",
    "about"    => "Adobe Stock plans start at $29.99/mo for 10 images/month up to $199.99/mo for unlimited assets. Cancel through your Adobe account &mdash; early termination fees apply for annual plans.",
    "refund"   => "Adobe offers a 14-day refund window. Cancelling annual plans after 14 days incurs a 50% early termination fee. Unused image credits are not refunded.",
    "platforms" => [
      "web" => [
        "label" => "Adobe Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>account.adobe.com</strong> and sign in",
          "Click <strong>Plans &amp; Payment</strong>",
          "Find <strong>Adobe Stock</strong> and click <strong>Manage plan</strong>",
          "Click <strong>Cancel plan</strong>",
          "Review any early termination fees and confirm",
        ],
        "note"  => "Unused image credits expire at cancellation and are not refunded. Use remaining credits before cancelling.",
      ],
    ],
    "after_cancel" => [
      "Stock access continues until end of billing period",
      "Unused image credits are lost upon cancellation",
      "Downloaded licensed images remain usable under standard license",
      "14-day window to cancel with full refund and no ETF",
    ],
    "faq" => [
      ["Do I keep my downloaded Adobe Stock images after cancelling?",
       "Yes. Images you already downloaded and licensed remain usable under the standard or extended license you purchased. Only future downloads require an active subscription."],
      ["Can I use Adobe Stock images for commercial purposes after cancelling?",
       "Yes, as long as you licensed the image before cancelling. The license is perpetual. Check your license type (Standard vs. Extended) for specific usage rights."],
      ["What is Adobe&apos;s early termination fee for Stock?",
       "Cancelling an annual Adobe Stock plan after 14 days triggers a fee of 50% of remaining payments. Cancel within 14 days of purchase or annual renewal to avoid this."],
    ],
    "related" => ["adobe", "lightroom", "adobe-acrobat", "canva"],
  ],

  "amc-plus" => [
    "name"     => "AMC+",
    "emoji"    => "🎬",
    "color"    => "#CC0000",
    "tagline"  => "Cancel AMC+ subscription",
    "about"    => "AMC+ ($8.99/mo or $83.99/year) offers AMC originals (The Walking Dead, Better Call Saul), plus content from Shudder, Sundance Now, and IFC Films Unlimited.",
    "refund"   => "AMC+ does not offer refunds for the current billing period. For Apple, Amazon, or Google subscriptions, refunds follow their respective policies.",
    "platforms" => [
      "web" => [
        "label" => "AMC+ Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>amcplus.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Account</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If you subscribed through Amazon, Apple, or Roku, cancel through those platforms instead.",
      ],
      "amazon" => [
        "label" => "Amazon Prime Channels",
        "icon"  => "📦",
        "steps" => [
          "Go to <strong>amazon.com → Account → Memberships &amp; Subscriptions</strong>",
          "Find <strong>AMC+</strong> and click <strong>Cancel Channel</strong>",
        ],
        "note"  => "Many AMC+ subscribers are on Amazon Prime Video Channels.",
      ],
    ],
    "after_cancel" => [
      "Access continues until end of billing period",
      "Watchlist and viewing history preserved",
      "Shudder and Sundance Now content also become unavailable",
    ],
    "faq" => [
      ["Does AMC+ include Shudder?",
       "Yes. AMC+ includes content from Shudder (horror), Sundance Now (indie films), and IFC Films Unlimited alongside AMC originals. Cancelling AMC+ removes access to all of these."],
      ["How do I cancel AMC+ on Roku?",
       "Go to Roku home → find AMC+ channel → press * → Manage subscription → Cancel subscription."],
      ["What is the difference between AMC and AMC+?",
       "AMC is the free TV channel available through cable. AMC+ is the premium streaming service with originals, exclusives, and early access to AMC shows, available without cable."],
    ],
    "related" => ["shudder", "hbo-max", "netflix", "britbox"],
  ],

  "clickup" => [
    "name"     => "ClickUp",
    "emoji"    => "✅",
    "color"    => "#7B68EE",
    "tagline"  => "Cancel ClickUp subscription",
    "about"    => "ClickUp Unlimited ($7/member/mo) and Business ($12/member/mo) add unlimited storage, integrations, and advanced reporting. Downgrade to the generous free plan anytime.",
    "refund"   => "ClickUp does not offer refunds for completed billing periods. Annual plans are non-refundable. Contact support@clickup.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "ClickUp Settings",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>clickup.com</strong> and sign in",
          "Click your <strong>workspace name</strong> at bottom left",
          "Select <strong>Settings → Billing</strong>",
          "Click <strong>Downgrade to Free</strong> (or Cancel plan)",
          "Confirm the action",
        ],
        "note"  => "The free ClickUp plan includes unlimited tasks, 100MB storage, and most core features. Downgrading is usually sufficient.",
      ],
    ],
    "after_cancel" => [
      "Paid features removed at end of billing period",
      "Data remains on the free plan",
      "Storage limited to 100MB on free tier",
      "Unlimited guests and time tracking remain on free plan",
    ],
    "faq" => [
      ["What does the ClickUp free plan include?",
       "ClickUp Free includes unlimited tasks and members, 100MB storage, 2-factor authentication, and most core views (list, board, calendar). Paid plans add storage, reporting, and integrations."],
      ["How does ClickUp compare to Asana or Monday.com?",
       "ClickUp has the most features on its free plan. Asana is simpler and better for task management. Monday.com is more visual and better for non-technical teams. ClickUp has a steeper learning curve."],
      ["Can I export my ClickUp data before cancelling?",
       "Yes. Go to Settings → Export Workspace. You can download your tasks and data as CSV or Excel files."],
    ],
    "related" => ["notion", "evernote", "microsoft-365", "google-workspace"],
  ],

  "notion" => [
    "name"     => "Notion",
    "emoji"    => "📓",
    "color"    => "#000000",
    "tagline"  => "Cancel Notion Plus or Business subscription",
    "about"    => "Notion Plus ($10/mo or $8/mo annually) removes page limits and adds unlimited file uploads. The free plan is very capable for individual use. Cancel or downgrade through account settings.",
    "refund"   => "Notion does not offer refunds for completed billing periods. Annual plans are non-refundable. Contact team@makenotion.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Notion Settings",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>notion.so</strong> and sign in",
          "Click <strong>Settings &amp; members</strong> in the left sidebar",
          "Click <strong>Plans</strong>",
          "Click <strong>Downgrade</strong> (to free) or <strong>Cancel subscription</strong>",
          "Confirm the action",
        ],
        "note"  => "Notion&apos;s free plan is very generous for individuals. Downgrading is usually better than fully closing your account.",
      ],
    ],
    "after_cancel" => [
      "Paid features removed at end of billing period",
      "All pages and databases are preserved on the free plan",
      "File upload limit reverts to 5MB on free tier",
      "Page history limited to 7 days on free plan",
    ],
    "faq" => [
      ["What does the Notion free plan include?",
       "Notion Free includes unlimited pages and blocks, basic page analytics, 7-day page history, 5MB file uploads, and collaboration with up to 10 guests. Most individuals never need more."],
      ["Will my Notion pages be deleted when I downgrade?",
       "No. All your pages and databases are preserved when you downgrade to the free plan. You just lose unlimited guests, file upload size, and extended page history."],
      ["How does Notion compare to Evernote or Obsidian?",
       "Notion is best for structured databases and project management alongside notes. Evernote is better for quick capture and search. Obsidian (free) is better for linked notes and offline use."],
    ],
    "related" => ["evernote", "clickup", "dropbox", "google-one"],
  ],

  "acorn-tv" => [
    "name"     => "Acorn TV",
    "emoji"    => "🌰",
    "color"    => "#1A3A5C",
    "tagline"  => "Cancel Acorn TV subscription",
    "about"    => "Acorn TV ($6.99/mo or $69.99/year) streams British, Irish, and international mysteries and dramas. Cancel anytime through your account or Amazon.",
    "refund"   => "Acorn TV does not offer refunds for the current billing period. Contact support at acorn.tv/help for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Acorn TV Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>acorn.tv</strong> and sign in",
          "Click your <strong>name</strong> at top right",
          "Select <strong>My Subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If you subscribed through Amazon, Apple, or Roku, cancel through those platforms.",
      ],
      "amazon" => [
        "label" => "Amazon Prime Channels",
        "icon"  => "📦",
        "steps" => [
          "Go to <strong>amazon.com → Account → Memberships &amp; Subscriptions</strong>",
          "Find <strong>Acorn TV</strong> and click <strong>Cancel Channel</strong>",
        ],
        "note"  => "Acorn TV is commonly subscribed through Amazon Prime Video Channels.",
      ],
    ],
    "after_cancel" => [
      "Access continues until end of billing period",
      "Watchlist and viewing history preserved",
      "Re-subscribe at any time",
    ],
    "faq" => [
      ["How does Acorn TV compare to BritBox?",
       "Acorn TV focuses on British and international mysteries and dramas, often exclusive. BritBox has more mainstream BBC and ITV programming. Many British TV fans subscribe to both."],
      ["Does Acorn TV have a free trial?",
       "Acorn TV occasionally offers 7-day free trials. Check acorn.tv for current offers. Cancel before the trial ends to avoid being charged."],
      ["What are some popular shows on Acorn TV?",
       "Acorn TV is known for Doc Martin, Agatha Raisin, Jack Irish, Foyle&apos;s War, and Murdoch Mysteries. It&apos;s especially popular for cozy mystery fans."],
    ],
    "related" => ["britbox", "mubi", "shudder", "amc-plus"],
  ],

  "onlyfans" => [
    "name"     => "OnlyFans",
    "emoji"    => "🔞",
    "color"    => "#00AFF0",
    "tagline"  => "Cancel OnlyFans subscription — step by step",
    "about"    => "OnlyFans subscriptions are paid directly to individual creators. Each creator subscription must be cancelled separately. There is no single &quot;cancel all&quot; option.",
    "refund"   => "OnlyFans does not offer refunds for subscription payments. Payments go directly to creators. For billing disputes, contact OnlyFans support at onlyfans.com/support.",
    "platforms" => [
      "web" => [
        "label" => "OnlyFans Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>onlyfans.com</strong> and sign in",
          "Click on the <strong>creator&apos;s profile</strong> you want to unsubscribe from",
          "Click the <strong>subscribed</strong> button (it shows the price)",
          "Click <strong>Don&apos;t renew</strong> or <strong>Turn off auto-renew</strong>",
          "Confirm — you keep access until the end of the paid period",
        ],
        "note"  => "Repeat for each creator you want to unsubscribe from. To cancel all subscriptions, visit each profile individually.",
      ],
      "iphone" => [
        "label" => "iPhone App",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>OnlyFans app</strong> and go to the creator&apos;s profile",
          "Tap the <strong>subscription button</strong>",
          "Tap <strong>Turn off auto-renew</strong>",
        ],
        "note"  => "If you subscribed via Apple In-App Purchase, cancel through Settings → [Your Name] → Subscriptions → OnlyFans instead.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the paid subscription period",
      "Creator content becomes unavailable after expiry",
      "Your account and messages are preserved",
      "Re-subscribe to any creator at any time",
    ],
    "faq" => [
      ["How do I cancel all OnlyFans subscriptions at once?",
       "There is no bulk cancel option. Go to your profile → Subscriptions → Active, and turn off auto-renew for each creator individually."],
      ["Can I get a refund from OnlyFans?",
       "OnlyFans states that all payments are final and non-refundable. For unauthorized charges, contact your bank to dispute the transaction or reach out to OnlyFans support at onlyfans.com/support."],
      ["Does deleting the OnlyFans app cancel my subscriptions?",
       "No. Deleting the app does not cancel subscriptions. You must log in to onlyfans.com and disable auto-renew for each creator."],
    ],
    "related" => ["patreon", "substack", "twitch", "tiktok"],
  ],

  "substack" => [
    "name"     => "Substack",
    "emoji"    => "📨",
    "color"    => "#FF6719",
    "tagline"  => "Cancel Substack paid newsletter subscription",
    "about"    => "Substack paid newsletter subscriptions are managed per publication. Each newsletter you pay for must be cancelled separately through your Substack account.",
    "refund"   => "Substack does not offer refunds for completed billing periods. Contact the newsletter author or Substack support at support.substack.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Substack Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>substack.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Settings</strong>",
          "Click <strong>Subscriptions</strong> in the left menu",
          "Find the paid newsletter and click <strong>Cancel subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "You can also cancel directly from the newsletter page: click the publication name → Settings → Cancel subscription.",
      ],
    ],
    "after_cancel" => [
      "Paid access continues until end of the billing period",
      "Free posts from the newsletter remain accessible",
      "Your email stays subscribed to free content unless you unsubscribe",
      "Re-subscribe anytime to regain paid access",
    ],
    "faq" => [
      ["Will I stop receiving emails after cancelling Substack?",
       "No — cancelling the paid subscription only removes paid content access. You&apos;ll still receive free posts by email. To stop all emails, click Unsubscribe at the bottom of any newsletter email."],
      ["How do I cancel all my Substack subscriptions?",
       "Go to substack.com → profile → Settings → Subscriptions. You&apos;ll see all paid newsletters listed. Cancel each one individually."],
      ["Can I get a refund from Substack?",
       "Substack itself does not process refunds — contact the newsletter author directly. Some authors may offer a courtesy refund. Annual subscriptions are typically non-refundable after 14 days."],
    ],
    "related" => ["patreon", "onlyfans", "new-york-times", "medium"],
  ],

  "patreon" => [
    "name"     => "Patreon",
    "emoji"    => "🎨",
    "color"    => "#FF424D",
    "tagline"  => "Cancel Patreon membership — per creator",
    "about"    => "Patreon memberships support individual creators at monthly or annual tiers. Each creator membership must be cancelled separately from your Patreon account.",
    "refund"   => "Patreon does not offer refunds for completed billing periods. For billing errors, contact Patreon support at support.patreon.com.",
    "platforms" => [
      "web" => [
        "label" => "Patreon Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>patreon.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Memberships</strong>",
          "Find the creator and click <strong>Edit membership</strong>",
          "Click <strong>Cancel membership</strong>",
          "Select a reason and confirm",
        ],
        "note"  => "Repeat for each creator you want to unsubscribe from.",
      ],
      "iphone" => [
        "label" => "Patreon App",
        "icon"  => "📱",
        "steps" => [
          "Open the <strong>Patreon app</strong>",
          "Tap your <strong>profile icon</strong> → <strong>Memberships</strong>",
          "Tap the creator → <strong>Edit membership → Cancel membership</strong>",
        ],
        "note"  => "Works on both iPhone and Android apps.",
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of the paid month",
      "Creator content becomes unavailable after expiry",
      "Your Patreon account is preserved",
      "Re-join any creator at any time",
    ],
    "faq" => [
      ["How do I cancel all my Patreon memberships at once?",
       "Patreon does not have a bulk cancel option. Go to patreon.com → profile icon → Memberships and cancel each creator one by one."],
      ["What happens if I cancel Patreon mid-month?",
       "You keep access until the end of the current billing period. Patreon does not prorate or refund partial months."],
      ["Can I pause a Patreon membership instead of cancelling?",
       "Some creators enable a pause feature. On the membership edit page, look for &quot;Pause membership&quot; if the creator has enabled it. Not all creators support this."],
    ],
    "related" => ["substack", "onlyfans", "twitch", "masterclass"],
  ],

  "wall-street-journal" => [
    "name"     => "Wall Street Journal",
    "emoji"    => "📰",
    "color"    => "#004B87",
    "tagline"  => "Cancel Wall Street Journal subscription",
    "about"    => "WSJ subscriptions ($9.99&ndash;$38.99/month) offer digital or print+digital access to financial news. Cancel by calling or chatting with WSJ support — online self-service is not available.",
    "refund"   => "WSJ does not offer prorated refunds for the current billing period. Contact WSJ customer service at 1-800-JOURNAL (1-800-568-7625) to discuss your options.",
    "platforms" => [
      "phone" => [
        "label" => "Phone / Live Chat",
        "icon"  => "📞",
        "steps" => [
          "Call <strong>1-800-568-7625</strong> (1-800-JOURNAL)",
          "Or use the live chat at <strong>wsj.com/customer-service</strong>",
          "Request to cancel your subscription",
          "Ask for a <strong>confirmation number</strong>",
        ],
        "note"  => "WSJ requires contacting customer service to cancel — there is no self-service cancellation in your account settings.",
      ],
      "web" => [
        "label" => "WSJ Customer Service Page",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>wsj.com/customer-service</strong>",
          "Click <strong>Chat</strong> to start a live chat",
          "Request cancellation and provide your account email",
          "Save the chat transcript as confirmation",
        ],
        "note"  => "Live chat is available during business hours. Phone support is available 7 days a week.",
      ],
    ],
    "after_cancel" => [
      "Digital access continues until end of billing period",
      "Print delivery stops after processing (1&ndash;2 billing cycles)",
      "You can resubscribe online at wsj.com/subscribe",
    ],
    "faq" => [
      ["Why can&apos;t I cancel WSJ online?",
       "Like many legacy newspaper publishers, WSJ routes cancellations through customer service to offer retention deals. You must call or chat to cancel."],
      ["Is there a free version of the Wall Street Journal?",
       "WSJ allows reading a limited number of free articles per month. Google search WSJ headlines to access some articles without a subscription."],
      ["How is the Wall Street Journal different from Barron&apos;s?",
       "Both are owned by News Corp (Dow Jones). WSJ covers broad business and political news. Barron&apos;s focuses specifically on investing, markets, and stock analysis."],
    ],
    "related" => ["new-york-times", "washington-post", "substack", "scribd"],
  ],

  "washington-post" => [
    "name"     => "Washington Post",
    "emoji"    => "🗞️",
    "color"    => "#111111",
    "tagline"  => "Cancel Washington Post subscription",
    "about"    => "Washington Post digital subscriptions ($9.99/month or $99.99/year) offer unlimited news access. Cancel online through your account settings.",
    "refund"   => "Washington Post does not offer refunds for the current billing period. Annual subscriptions cancelled before the end of the year are not prorated. Contact support at help.washingtonpost.com.",
    "platforms" => [
      "web" => [
        "label" => "Washington Post Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>washingtonpost.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account</strong>",
          "Click <strong>Manage subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "Washington Post may offer a discounted pause (a few dollars/month) before showing the cancel option.",
      ],
    ],
    "after_cancel" => [
      "Access continues until end of billing period",
      "Limited free articles per month available after cancellation",
      "Your account is preserved for resubscription",
    ],
    "faq" => [
      ["How many free articles does the Washington Post allow?",
       "Non-subscribers can read a limited number of free articles per month before hitting the paywall. The exact number varies and may change."],
      ["Does Jeff Bezos own the Washington Post?",
       "Jeff Bezos personally owns The Washington Post (not Amazon). He purchased it in 2013 for $250 million."],
      ["Can I share my Washington Post subscription?",
       "Some plans allow gift subscriptions. Standard digital plans are for individual use only and cannot be shared with other accounts."],
    ],
    "related" => ["new-york-times", "wall-street-journal", "substack", "scribd"],
  ],

  "aarp" => [
    "name"     => "AARP",
    "emoji"    => "🏛️",
    "color"    => "#E31837",
    "tagline"  => "Cancel AARP membership",
    "about"    => "AARP membership costs $16/year (or less with multi-year plans) and offers discounts, insurance, and advocacy for people 50+. Cancel by phone, mail, or through your online account.",
    "refund"   => "AARP offers a prorated refund for the unused portion of your annual membership if you cancel before the year ends. Call 1-888-687-2277 to request a refund.",
    "platforms" => [
      "web" => [
        "label" => "AARP Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>aarp.org</strong> and sign in",
          "Click your <strong>name</strong> at top right",
          "Go to <strong>My Account → Membership</strong>",
          "Click <strong>Cancel membership</strong>",
          "Or call <strong>1-888-687-2277</strong> for phone cancellation",
        ],
        "note"  => "AARP auto-renews annually. Cancel at least a few days before renewal to avoid the next charge.",
      ],
      "mail" => [
        "label" => "By Mail",
        "icon"  => "✉️",
        "steps" => [
          "Write a cancellation letter with your <strong>name, address, and membership number</strong>",
          "Mail to: <strong>AARP, 601 E Street NW, Washington, DC 20049</strong>",
          "Request a prorated refund in your letter",
        ],
        "note"  => "Mail cancellation may take 2&ndash;4 weeks to process.",
      ],
    ],
    "after_cancel" => [
      "Member discounts and benefits end when membership expires",
      "Prorated refund available for remaining membership period",
      "AARP The Magazine subscription is separate",
      "Secondary members (spouse/partner) also lose benefits",
    ],
    "faq" => [
      ["Can I get a refund for my AARP membership?",
       "Yes. AARP offers a prorated refund for the unused portion of your annual membership. Call 1-888-687-2277 to request it."],
      ["Does AARP membership auto-renew?",
       "Yes. AARP automatically renews unless you cancel. You&apos;ll receive a renewal notice 60 days before expiration. Cancel before then to stop the charge."],
      ["What benefits do I lose when I cancel AARP?",
       "You lose discounts on hotels, restaurants, prescriptions, car rentals, and insurance. AARP Medicare Supplement insurance is a separate product managed by UnitedHealthcare and is not affected by membership cancellation."],
    ],
    "related" => ["costco", "aaa", "planet-fitness", "amazon-prime"],
  ],

  "bet-plus" => [
    "name"     => "BET+",
    "emoji"    => "🎭",
    "color"    => "#8B0000",
    "tagline"  => "Cancel BET+ subscription",
    "about"    => "BET+ ($9.99/month) streams Black culture content including original series, movies, and classic BET shows. Cancel through your account or the platform you subscribed on.",
    "refund"   => "BET+ does not offer refunds for the current billing period. For Apple or Amazon subscriptions, refunds are handled by those platforms.",
    "platforms" => [
      "web" => [
        "label" => "BET+ Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>bet.plus</strong> and sign in",
          "Click your <strong>profile icon</strong> at top right",
          "Select <strong>Account Settings</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If subscribed through Amazon, Apple, or Roku, cancel through those platforms instead.",
      ],
      "amazon" => [
        "label" => "Amazon Prime Channels",
        "icon"  => "📦",
        "steps" => [
          "Go to <strong>amazon.com → Account → Memberships &amp; Subscriptions</strong>",
          "Find <strong>BET+</strong> and click <strong>Cancel Channel</strong>",
        ],
        "note"  => "BET+ is commonly subscribed through Amazon Prime Video Channels.",
      ],
    ],
    "after_cancel" => [
      "Access continues until end of billing period",
      "Watchlist and viewing history preserved",
      "Re-subscribe at any time",
    ],
    "faq" => [
      ["What shows are on BET+?",
       "BET+ offers original series, classic BET content, Tyler Perry shows and movies, and a library of Black cinema. Notable originals include The Family Business and Zatima."],
      ["How do I cancel BET+ on Roku?",
       "On Roku: Home → find BET+ → press * → Manage subscription → Cancel subscription."],
      ["Is BET+ the same as BET cable channel?",
       "No. BET is the free cable channel. BET+ is the paid streaming service with exclusive content not available on the cable channel."],
    ],
    "related" => ["hbo-max", "paramount-plus", "peacock", "netflix"],
  ],

  "pureflix" => [
    "name"     => "Pure Flix",
    "emoji"    => "✝️",
    "color"    => "#1A3A6C",
    "tagline"  => "Cancel Pure Flix subscription",
    "about"    => "Pure Flix ($12.99/month or $79.99/year) is a Christian streaming service with faith-based movies, TV shows, and original content. Cancel through your account settings.",
    "refund"   => "Pure Flix does not offer refunds for the current billing period. Annual plans are not prorated after purchase. Contact support at pureflix.com/contact for billing issues.",
    "platforms" => [
      "web" => [
        "label" => "Pure Flix Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>pureflix.com</strong> and sign in",
          "Click your <strong>name</strong> at top right → <strong>Account Settings</strong>",
          "Click <strong>Manage Plan</strong>",
          "Click <strong>Cancel Plan</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If subscribed through Apple or Roku, cancel through those platforms instead.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Pure Flix</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Use this method if you subscribed via Apple.",
      ],
    ],
    "after_cancel" => [
      "Access continues until end of billing period",
      "Watchlist and preferences preserved",
      "Re-subscribe at any time",
    ],
    "faq" => [
      ["Does Pure Flix have a free trial?",
       "Yes. Pure Flix offers a 7-day free trial for new subscribers. Cancel before the trial ends at pureflix.com → Account Settings → Manage Plan to avoid being charged."],
      ["What is the difference between Pure Flix and Hallmark Movies Now?",
       "Pure Flix focuses on Christian and faith-based content. Hallmark Movies Now focuses on wholesome, family-friendly movies from the Hallmark Channel. Their content catalogs don&apos;t overlap much."],
      ["Is Pure Flix available on smart TV?",
       "Yes. Pure Flix is available on Roku, Apple TV, Amazon Fire TV, Android TV, and Chromecast. Cancel through pureflix.com regardless of which device you use."],
    ],
    "related" => ["netflix", "peacock", "discovery-plus", "hulu"],
  ],

  "quickbooks" => [
    "name"     => "QuickBooks",
    "emoji"    => "📊",
    "color"    => "#2CA01C",
    "tagline"  => "Cancel QuickBooks Online subscription",
    "about"    => "QuickBooks Online plans ($30&ndash;$200/month) offer accounting, invoicing, and payroll for small businesses. Cancel through your QuickBooks account settings.",
    "refund"   => "Intuit does not offer refunds for QuickBooks Online subscriptions. Annual plans cancelled mid-term are not refunded. Contact Intuit support at quickbooks.intuit.com/support for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "QuickBooks Online",
        "icon"  => "💻",
        "steps" => [
          "Sign in to <strong>quickbooks.intuit.com</strong>",
          "Click the <strong>gear icon</strong> at top right → <strong>Account and Settings</strong>",
          "Click <strong>Billing &amp; Subscription</strong>",
          "Click <strong>Cancel subscription</strong>",
          "Follow the prompts and confirm",
        ],
        "note"  => "Only the primary admin of the QuickBooks account can cancel. Make sure to export your financial data before cancelling.",
      ],
    ],
    "after_cancel" => [
      "Read-only access to your data for 1 year after cancellation",
      "You cannot create new transactions after cancellation",
      "Export your data before cancelling: Reports → Export",
      "Payroll must be cancelled separately if active",
    ],
    "faq" => [
      ["How do I export my QuickBooks data before cancelling?",
       "Go to Reports → select All Reports → Export to Excel or PDF. For a full data export, go to Settings → Export data → choose your file format."],
      ["Will QuickBooks delete my data when I cancel?",
       "No. QuickBooks keeps your data in read-only mode for 1 year after cancellation. You can view reports and export data but cannot add transactions."],
      ["Can I cancel QuickBooks Payroll separately?",
       "Yes. Payroll is a separate subscription from QuickBooks Online. Go to Settings → Billing → Payroll billing → Cancel. Make sure all payroll runs and tax filings are complete first."],
    ],
    "related" => ["shopify", "mailchimp", "microsoft-365", "zoom"],
  ],

  "medium" => [
    "name"     => "Medium",
    "emoji"    => "✍️",
    "color"    => "#000000",
    "tagline"  => "Cancel Medium membership",
    "about"    => "Medium membership ($5/month or $50/year) gives unlimited access to articles behind the paywall and lets you earn money from your own writing. Cancel through your account settings.",
    "refund"   => "Medium does not offer refunds for completed billing periods. Contact support at medium.com/help for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Medium Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>medium.com</strong> and sign in",
          "Click your <strong>profile picture</strong> at top right",
          "Select <strong>Settings</strong>",
          "Click <strong>Membership</strong> in the left menu",
          "Click <strong>Cancel membership</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "After cancellation, you can still read 3 member-only stories per month for free.",
      ],
    ],
    "after_cancel" => [
      "Full access continues until end of billing period",
      "Limited free article access after cancellation",
      "Your own published stories remain accessible",
      "Partner Program earnings are unaffected",
    ],
    "faq" => [
      ["Can I still write on Medium after cancelling my membership?",
       "Yes. You can still publish stories on Medium for free. The membership is for reading unlimited stories, not for writing. Your existing stories remain published."],
      ["How many free articles does Medium allow?",
       "Non-members can read 3 member-only stories per month for free. After that, you hit the paywall until the next month resets."],
      ["Is Medium worth $5/month?",
       "Medium is worthwhile if you regularly read 3+ paywalled articles per month, especially for tech, entrepreneurship, and personal development content. Cancel if you mostly read free content."],
    ],
    "related" => ["substack", "new-york-times", "wall-street-journal", "scribd"],
  ],

  "midjourney" => [
    "name"     => "Midjourney",
    "emoji"    => "🖼️",
    "color"    => "#000000",
    "tagline"  => "Cancel Midjourney AI image subscription",
    "about"    => "Midjourney plans ($10&ndash;$120/month) provide GPU time for AI image generation. Cancel through the Midjourney website to stop future charges.",
    "refund"   => "Midjourney offers refunds on unused GPU credits if you have not used more than 1% of the current month&apos;s subscription. Contact support at midjourney.com/support.",
    "platforms" => [
      "web" => [
        "label" => "Midjourney Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>midjourney.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at bottom left",
          "Click <strong>Manage Sub</strong>",
          "Click <strong>Cancel Plan</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Midjourney is managed entirely online — no mobile app for subscription management.",
      ],
    ],
    "after_cancel" => [
      "Remaining GPU fast hours available until period ends",
      "Generated images preserved in your Midjourney gallery",
      "View and download previous generations anytime",
      "Re-subscribe at any time to generate new images",
    ],
    "faq" => [
      ["Do I lose my Midjourney images if I cancel?",
       "No. All images you generated remain in your gallery at midjourney.com/app. You can view and download them after cancelling."],
      ["What happens to unused GPU hours when I cancel?",
       "Fast GPU hours expire at the end of your billing period. There is no rollover for unused credits."],
      ["How does Midjourney compare to DALL-E?",
       "Midjourney produces more aesthetically polished results. DALL-E (via ChatGPT Plus) handles text in images better and is more accessible without Discord."],
    ],
    "related" => ["chatgpt", "adobe", "canva", "adobe-stock"],
  ],

  "monday-com" => [
    "name"     => "Monday.com",
    "emoji"    => "📋",
    "color"    => "#FF3D57",
    "tagline"  => "Cancel Monday.com subscription",
    "about"    => "Monday.com work management plans start at $9/seat/month (Basic) up to $19/seat/month (Pro). Cancel or downgrade to the free plan through your account billing settings.",
    "refund"   => "Monday.com does not offer refunds for completed billing periods. Annual plans are non-refundable. Contact support at support.monday.com for billing disputes.",
    "platforms" => [
      "web" => [
        "label" => "Monday.com Account",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>monday.com</strong> and sign in",
          "Click your <strong>profile icon</strong> at bottom left",
          "Go to <strong>Admin → Billing</strong>",
          "Click <strong>Cancel plan</strong> or <strong>Downgrade</strong>",
          "Confirm the action",
        ],
        "note"  => "The free Monday.com plan supports up to 2 seats with 3 boards. Downgrading is usually better than full cancellation.",
      ],
    ],
    "after_cancel" => [
      "Paid features removed at end of billing period",
      "Data remains accessible on the free plan",
      "Board limit and seat limit apply on free tier",
      "Export data before cancelling: click board → ⋮ → Export",
    ],
    "faq" => [
      ["What does Monday.com&apos;s free plan include?",
       "Monday.com Free includes 2 seats, 3 boards, unlimited docs, and 200+ templates. It&apos;s suitable for very small teams or solo use."],
      ["How does Monday.com compare to Asana or ClickUp?",
       "Monday.com is the most visual and easiest to set up for non-technical teams. Asana is better for task tracking. ClickUp has the most features on its free plan."],
      ["Can I export my Monday.com data?",
       "Yes. Go to any board → ⋮ (menu) → Export → Excel or CSV. You can export individual boards before cancelling."],
    ],
    "related" => ["clickup", "notion", "asana", "google-workspace"],
  ],

  "apple-fitness-plus" => [
    "name"     => "Apple Fitness+",
    "emoji"    => "🏋️",
    "color"    => "#000000",
    "tagline"  => "Cancel Apple Fitness+ subscription",
    "about"    => "Apple Fitness+ ($9.99/month or $79.99/year) offers guided workouts and meditations accessible on iPhone, iPad, Apple TV, and Apple Watch. Cancel through your Apple subscription settings.",
    "refund"   => "Apple Fitness+ subscriptions are managed by Apple. Request a refund at reportaproblem.apple.com within 48 hours for accidental charges.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Open <strong>Settings → [Your Name] → Subscriptions</strong>",
          "Tap <strong>Apple Fitness+</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Tap <strong>Confirm</strong>",
        ],
        "note"  => "Apple Fitness+ may be included in your Apple One bundle. Check your Apple One plan before cancelling Fitness+ separately.",
      ],
      "mac" => [
        "label" => "Mac",
        "icon"  => "🖥️",
        "steps" => [
          "Open <strong>System Settings → [Your Name] → Media &amp; Purchases → Subscriptions → Manage</strong>",
          "Click <strong>Edit</strong> next to Apple Fitness+",
          "Click <strong>Cancel Subscription</strong>",
        ],
        "note"  => "Works on Mac with macOS Monterey or later.",
      ],
    ],
    "after_cancel" => [
      "Fitness+ access continues until end of billing period",
      "Workout history on Apple Watch is preserved",
      "Fitness app continues tracking workouts without guided sessions",
      "Apple Watch metrics still record without Fitness+",
    ],
    "faq" => [
      ["Do I need an Apple Watch for Apple Fitness+?",
       "An Apple Watch was previously required to view real-time metrics on Fitness+ workouts. Apple has since opened Fitness+ to iPhone-only users, though some metrics require Apple Watch."],
      ["Is Apple Fitness+ included in Apple One?",
       "Yes. Apple One Premium ($37.95/month) includes Fitness+, as well as Apple Music, TV+, Arcade, iCloud+, and News+. Check your Apple One plan before cancelling Fitness+ separately."],
      ["How does Apple Fitness+ compare to Peloton App?",
       "Apple Fitness+ works natively with Apple Watch for real-time health metrics. Peloton App ($12.99/mo) has a larger class library and better cycling/rowing integration. Apple Fitness+ wins for Apple ecosystem users."],
    ],
    "related" => ["peloton", "strava", "whoop", "calm"],
  ],

  "max" => [
    "name"     => "Max",
    "emoji"    => "🎭",
    "color"    => "#002BE7",
    "tagline"  => "Cancel Max (HBO Max) subscription",
    "about"    => "Max (formerly HBO Max) offers Ad-Free (~$15.99/mo), Ad-Lite (~$9.99/mo), and Ultimate (~$20.99/mo) plans. Cancel anytime online or through your device's subscription settings.",
    "refund"   => "Max does not offer refunds for current billing periods. You'll keep access until the end of your paid period.",
    "platforms" => [
      "web" => [
        "label" => "Max Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>max.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Select <strong>Account</strong>",
          "Under 'Plan & Payment', click <strong>Cancel Plan</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "If you subscribed through Amazon, Apple, or Google, cancel through that provider instead.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>Max</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play → Subscriptions</strong>",
          "Tap <strong>Max</strong>",
          "Tap <strong>Cancel subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Access continues until end of billing period",
      "All watchlist items and viewing history preserved",
      "Downloads deleted when subscription expires",
      "Resubscribe anytime to regain access",
    ],
    "faq" => [
      ["What happened to HBO Max — is it now just Max?",
       "Yes. HBO Max rebranded to 'Max' in May 2023, combining HBO originals with Discovery+, CNN, and Warner Bros. content. If you search 'cancel HBO Max' this is the same service."],
      ["Can I pause my Max subscription instead of canceling?",
       "Max does not offer a formal pause option. You can cancel and resubscribe when ready — there's no penalty or re-activation fee."],
      ["Does Max include HBO content after cancellation?",
       "No — canceling removes access to all Max content including HBO. Re-subscribe at any time to regain full access."],
    ],
    "related" => ["hbo-max", "netflix", "peacock", "paramount-plus"],
  ],

  "vix" => [
    "name"     => "ViX+",
    "emoji"    => "🌟",
    "color"    => "#FF6B00",
    "tagline"  => "Cancel ViX+ subscription",
    "about"    => "ViX+ (~$6.99/month) is the premium tier of ViX, the largest Spanish-language streaming service. It offers exclusive telenovelas, sports, and movies. A free ad-supported tier is also available.",
    "refund"   => "ViX+ does not offer refunds for the current billing period. Cancel before the renewal date to avoid the next charge.",
    "platforms" => [
      "web" => [
        "label" => "ViX Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>vix.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Select <strong>Account Settings</strong>",
          "Click <strong>Manage Subscription</strong>",
          "Select <strong>Cancel Subscription</strong>",
        ],
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>ViX</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play → Subscriptions</strong>",
          "Tap <strong>ViX</strong>",
          "Tap <strong>Cancel subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Access to ViX+ content until end of billing period",
      "Free ViX tier remains available with ads",
      "Watchlist and history are preserved",
      "Resubscribe anytime to restore premium access",
    ],
    "faq" => [
      ["Is ViX still free after canceling ViX+?",
       "Yes — ViX has a free ad-supported tier with thousands of hours of Spanish-language content. Only the premium ViX+ content requires a paid subscription."],
      ["What content is exclusive to ViX+?",
       "ViX+ includes Liga MX soccer, exclusive telenovelas, original series, and premium movies not available on the free tier."],
    ],
    "related" => ["netflix", "hulu", "peacock", "amazon-prime"],
  ],

  "showtime" => [
    "name"     => "Showtime",
    "emoji"    => "🎬",
    "color"    => "#FF0000",
    "tagline"  => "Cancel Showtime subscription",
    "about"    => "Showtime (~$10.99/month) is now bundled with Paramount+ (Paramount+ with SHOWTIME plan). You can subscribe standalone or through Paramount+, Apple TV channels, or Amazon Prime Video.",
    "refund"   => "Showtime/Paramount+ does not offer refunds for the current billing period. Cancel before renewal to stop future charges.",
    "platforms" => [
      "web" => [
        "label" => "Paramount+ Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>paramountplus.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Select <strong>Account</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm",
        ],
        "note"  => "Showtime is now integrated into Paramount+ — cancel via the Paramount+ account portal.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Find <strong>Showtime</strong> or <strong>Paramount+</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Access until end of current billing period",
      "Watchlist and history preserved",
      "No longer able to stream Showtime originals",
      "Resubscribe anytime through Paramount+ or directly",
    ],
    "faq" => [
      ["Is Showtime now part of Paramount+?",
       "Yes. Showtime merged with Paramount+ in 2023. The combined 'Paramount+ with SHOWTIME' plan (~$12.99/mo) includes all Showtime content plus Paramount+ originals."],
      ["How do I cancel Showtime if I subscribed through Apple TV?",
       "Go to Settings → [your name] → Subscriptions on your iPhone and find the Showtime or Paramount+ subscription there."],
    ],
    "related" => ["paramount-plus", "hbo-max", "max", "starz"],
  ],

  "apple-one" => [
    "name"     => "Apple One",
    "emoji"    => "🍎",
    "color"    => "#555555",
    "tagline"  => "Cancel Apple One subscription bundle",
    "about"    => "Apple One bundles Apple Music, Apple TV+, Apple Arcade, and iCloud+ into one plan. Individual (~$19.95/mo), Family (~$25.95/mo), or Premier (~$37.95/mo, adds Fitness+ and News+).",
    "refund"   => "Apple generally does not refund Apple One subscriptions for the current period. Cancel through your Apple ID settings.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>Apple One</strong>",
          "Tap <strong>Cancel Subscription</strong>",
          "Confirm",
        ],
        "note"  => "Canceling Apple One cancels all included services (Music, TV+, Arcade, iCloud+). Consider downgrading individual services instead.",
      ],
      "web" => [
        "label" => "Mac (System Settings)",
        "icon"  => "💻",
        "steps" => [
          "Open <strong>System Settings → [your name]</strong>",
          "Click <strong>Subscriptions</strong>",
          "Select <strong>Apple One</strong>",
          "Click <strong>Cancel Subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Access to all Apple One services until period ends",
      "Apple Music, TV+, Arcade all expire together",
      "iCloud+ storage reverts to 5GB free plan",
      "You can subscribe to individual Apple services separately",
    ],
    "faq" => [
      ["What happens to my Apple Music and iCloud if I cancel Apple One?",
       "All included services stop at the end of the billing period. Your iCloud storage reverts to 5GB free. Downloaded Apple Music tracks are removed from your device."],
      ["Is Apple One worth it vs subscribing individually?",
       "Apple One Individual saves ~$6/month vs subscribing to Music + TV+ + Arcade + 50GB iCloud separately. If you use at least 3 of the included services, it's worth it."],
      ["Can I cancel Apple One and keep just Apple Music?",
       "Yes — cancel Apple One and then subscribe to Apple Music individually ($10.99/mo). You'll lose Arcade, TV+, and the bundled iCloud+ storage."],
    ],
    "related" => ["apple-music", "apple-tv", "apple-arcade", "apple-icloud"],
  ],

  "plex" => [
    "name"     => "Plex Pass",
    "emoji"    => "🎞️",
    "color"    => "#E5A00D",
    "tagline"  => "Cancel Plex Pass subscription",
    "about"    => "Plex Pass (~$4.99/month, $39.99/year, or $119.99 lifetime) unlocks offline sync, mobile sync, hardware transcoding, and live TV DVR features. The free Plex app continues working after cancellation.",
    "refund"   => "Plex does not offer refunds for Plex Pass subscriptions. The free Plex app remains fully functional after cancellation.",
    "platforms" => [
      "web" => [
        "label" => "Plex Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>plex.tv</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Select <strong>Account</strong>",
          "Under 'Plex Pass', click <strong>Change Plan</strong>",
          "Select <strong>Cancel</strong>",
        ],
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>Plex Pass</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Free Plex app still works — stream your personal media library",
      "Offline sync and mobile sync features disabled",
      "Hardware transcoding disabled (software transcoding still works)",
      "Live TV DVR features require active Plex Pass",
    ],
    "faq" => [
      ["Can I still use Plex after canceling Plex Pass?",
       "Yes — Plex is free for streaming your personal media library at home. Plex Pass only adds premium features like offline sync, mobile downloads, and live TV DVR."],
      ["Is there a Plex Pass lifetime deal?",
       "Yes — Plex Pass Lifetime ($119.99 one-time) is the best value if you plan to use Plex long-term. It pays for itself after about 3 years of the monthly plan."],
    ],
    "related" => ["netflix", "hulu", "emby", "jellyfin"],
  ],

  "dazn" => [
    "name"     => "DAZN",
    "emoji"    => "🥊",
    "color"    => "#F5FF00",
    "tagline"  => "Cancel DAZN subscription",
    "about"    => "DAZN (~$24.99/month or $224.99/year) is a sports streaming service offering boxing, MMA, NFL, soccer, and more. Cancel online before your renewal date to stop future charges.",
    "refund"   => "DAZN does not offer refunds for the current billing period. Cancel before your renewal date to avoid the next charge. Some markets offer a 7-day free trial.",
    "platforms" => [
      "web" => [
        "label" => "DAZN Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>dazn.com</strong> and sign in",
          "Click your <strong>profile icon</strong> in the top right",
          "Select <strong>Account</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Follow the prompts to confirm",
        ],
        "note"  => "DAZN will offer a pause option — choose Cancel if you want to stop billing entirely.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>DAZN</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play → Subscriptions</strong>",
          "Tap <strong>DAZN</strong>",
          "Tap <strong>Cancel subscription</strong> and confirm",
        ],
      ],
    ],
    "after_cancel" => [
      "Access continues until the end of your billing period",
      "All live and on-demand sports content accessible until expiry",
      "No downloads or offline content after cancellation",
      "Resubscribe anytime — no reactivation fee",
    ],
    "faq" => [
      ["Can I pause my DAZN subscription instead of canceling?",
       "Yes — DAZN offers a pause feature in some markets. Go to Account → Cancel Subscription and look for the 'Pause' option. This stops billing for up to 3 months."],
      ["What sports does DAZN cover?",
       "DAZN carries boxing (major fights), MMA/Bellator, NFL, Champions League (select markets), Serie A, and more. Coverage varies by country."],
      ["Does DAZN offer a refund if I forgot to cancel?",
       "DAZN generally does not offer refunds. If you were charged by mistake, contact DAZN support within 48 hours of the charge for the best chance of a refund."],
    ],
    "related" => ["espn-plus", "nba-league-pass", "mlb-tv", "peacock"],
  ],

  "fabletics" => [
    "name"     => "Fabletics",
    "emoji"    => "👟",
    "color"    => "#FF4444",
    "tagline"  => "Cancel Fabletics VIP membership",
    "about"    => "Fabletics VIP membership (~$59.95/month credit) charges you monthly unless you skip by the 5th of each month. Cancel to stop the automatic monthly charges.",
    "refund"   => "Unused member credits can be applied to purchases. Fabletics does not refund credits once charged. Cancel before the 6th of the month to skip that month's charge.",
    "platforms" => [
      "web" => [
        "label" => "Fabletics Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>fabletics.com</strong> and sign in",
          "Click your <strong>name</strong> in the top right",
          "Select <strong>My Account</strong>",
          "Click <strong>Membership</strong>",
          "Select <strong>Cancel Membership</strong> and confirm",
        ],
        "note"  => "Canceling by phone is also an option: call 1-844-322-5384. Expect retention offers.",
      ],
      "iphone" => [
        "label" => "Fabletics App",
        "icon"  => "🍎",
        "steps" => [
          "Open the <strong>Fabletics app</strong>",
          "Tap <strong>Account → My Membership</strong>",
          "Tap <strong>Cancel Membership</strong>",
          "Confirm the cancellation",
        ],
      ],
    ],
    "after_cancel" => [
      "Unused member credits remain on your account",
      "Use credits to shop at regular (non-member) prices",
      "No further monthly charges after cancellation",
      "You can rejoin as a VIP member at any time",
    ],
    "faq" => [
      ["What happens to my Fabletics credits if I cancel?",
       "Your credits stay in your account and can be used for purchases even after canceling VIP membership. Credits do not expire."],
      ["How do I skip a month on Fabletics to avoid being charged?",
       "Log in between the 1st and 5th of each month and click 'Skip This Month' in your account. If you miss the window, you'll be charged the $59.95 credit."],
      ["Can I cancel Fabletics without calling?",
       "Yes — you can cancel online through your account settings or via the app. Phone cancellation is also available but not required."],
    ],
    "related" => ["stitch-fix", "amazon-prime", "walmart-plus", "instacart"],
  ],

  "stitch-fix" => [
    "name"     => "Stitch Fix",
    "emoji"    => "👗",
    "color"    => "#2B2B2B",
    "tagline"  => "Cancel Stitch Fix subscription",
    "about"    => "Stitch Fix is a personal styling subscription that sends curated clothing boxes. There's no monthly fee — you pay a $20 styling fee per box (credited toward purchases). Cancel to stop future shipments.",
    "refund"   => "The $20 styling fee is credited toward items you keep. Items you return are free to send back within 5 days. No restocking fees.",
    "platforms" => [
      "web" => [
        "label" => "Stitch Fix Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>stitchfix.com</strong> and sign in",
          "Click your <strong>profile icon</strong>",
          "Go to <strong>Account Settings</strong>",
          "Under 'Shipment Schedule', click <strong>Cancel Fixes</strong>",
          "Confirm cancellation",
        ],
        "note"  => "Cancel at least 5 days before your next scheduled Fix to avoid being charged.",
      ],
    ],
    "after_cancel" => [
      "No future Fix shipments will be scheduled",
      "No further $20 styling fees charged",
      "Account remains active — you can order on-demand Fixes later",
      "Any in-transit Fix must be returned within 5 days as usual",
    ],
    "faq" => [
      ["Does Stitch Fix charge a monthly fee?",
       "No — Stitch Fix charges a $20 styling fee per box, which is credited toward anything you keep. You only pay for the clothes you decide to keep."],
      ["How do I pause Stitch Fix instead of canceling?",
       "In your account settings, you can adjust your Fix frequency to 'On Demand' instead of a scheduled interval, which effectively pauses automatic shipments."],
    ],
    "related" => ["fabletics", "amazon-prime", "walmart-plus", "instacart"],
  ],

  "alltrails" => [
    "name"     => "AllTrails+",
    "emoji"    => "🥾",
    "color"    => "#5C8A3D",
    "tagline"  => "Cancel AllTrails+ subscription",
    "about"    => "AllTrails+ (~$35.99/year or $5.99/month) adds offline maps, route planning, weather forecasts, and life-time stats to the free AllTrails app.",
    "refund"   => "AllTrails offers refunds for annual subscriptions canceled within 30 days of purchase. Contact support@alltrails.com. Monthly plans are not refunded.",
    "platforms" => [
      "web" => [
        "label" => "AllTrails Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>alltrails.com</strong> and sign in",
          "Click your <strong>profile icon → Settings</strong>",
          "Select <strong>Subscription</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm",
        ],
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>AllTrails</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Open <strong>Google Play → Subscriptions</strong>",
          "Tap <strong>AllTrails</strong>",
          "Tap <strong>Cancel subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Free AllTrails app continues to work",
      "Offline maps and downloaded trails no longer accessible",
      "Saved trails and reviews remain on your free account",
      "Weather overlays and life-time stats require AllTrails+",
    ],
    "faq" => [
      ["Is AllTrails free after canceling AllTrails+?",
       "Yes — AllTrails has a solid free tier with trail maps, reviews, photos, and basic navigation. AllTrails+ adds offline maps and planning tools but isn't required to use the app."],
      ["Can I get a refund on AllTrails+?",
       "Annual subscriptions purchased directly can be refunded within 30 days. Contact support@alltrails.com. App Store and Google Play purchases follow those platforms' refund policies."],
    ],
    "related" => ["strava", "whoop", "peloton", "calm"],
  ],

  "ipvanish" => [
    "name"     => "IPVanish",
    "emoji"    => "🛡️",
    "color"    => "#009DDC",
    "tagline"  => "Cancel IPVanish VPN subscription",
    "about"    => "IPVanish (~$3.99/month on annual plan) is a VPN with unlimited simultaneous connections. It's owned by Ziff Davis. Cancel online before renewal to stop charges.",
    "refund"   => "IPVanish offers a 30-day money-back guarantee on annual plans. Monthly plans have a 7-day refund window. Contact support to request a refund.",
    "platforms" => [
      "web" => [
        "label" => "IPVanish Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>ipvanish.com</strong> and sign in",
          "Click your <strong>account name → Account</strong>",
          "Select <strong>Subscription</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "For a refund, contact IPVanish support via live chat within 30 days of purchase.",
      ],
    ],
    "after_cancel" => [
      "VPN access continues until end of billing period",
      "30-day refund available on annual plans",
      "No further automatic charges after cancellation",
      "Resubscribe anytime at current pricing",
    ],
    "faq" => [
      ["How does IPVanish compare to NordVPN or ExpressVPN?",
       "IPVanish is cheaper and allows unlimited device connections, making it good for households. NordVPN and ExpressVPN generally offer faster speeds and larger server networks."],
      ["Does IPVanish keep logs of my activity?",
       "IPVanish has a no-logs policy that has been independently audited. However, note that the company is US-based, subject to US jurisdiction."],
    ],
    "related" => ["nordvpn", "expressvpn", "surfshark", "proton-vpn"],
  ],

  "preply" => [
    "name"     => "Preply",
    "emoji"    => "🎓",
    "color"    => "#6A5ACD",
    "tagline"  => "Cancel Preply subscription",
    "about"    => "Preply is a language tutoring platform where you pay per lesson or via a subscription package. Subscriptions auto-renew weekly based on your chosen lessons-per-week plan.",
    "refund"   => "Preply offers a credit guarantee — if you're not satisfied with your first lesson, you get a free lesson credit to try a different tutor. Contact support at preply.com/en/contact.",
    "platforms" => [
      "web" => [
        "label" => "Preply Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>preply.com</strong> and sign in",
          "Click your <strong>profile icon → Settings</strong>",
          "Select <strong>Subscription</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm the cancellation",
        ],
        "note"  => "Cancel before your weekly renewal to avoid being charged for the next set of lessons.",
      ],
    ],
    "after_cancel" => [
      "Unused lesson credits remain usable after cancellation",
      "No further weekly charges",
      "Your tutor history and progress notes are saved",
      "You can book individual lessons without a subscription",
    ],
    "faq" => [
      ["What happens to my unused Preply lessons if I cancel?",
       "Unused lessons credits remain in your account for 365 days after the last subscription payment. You can still book lessons with your tutor using those credits."],
      ["Can I use Preply without a subscription?",
       "Yes — you can purchase individual trial lessons at a one-time rate. Subscriptions just offer a discounted per-lesson rate based on your weekly lesson commitment."],
    ],
    "related" => ["rosetta-stone", "babbel", "duolingo", "masterclass"],
  ],

  "rosetta-stone" => [
    "name"     => "Rosetta Stone",
    "emoji"    => "🗿",
    "color"    => "#003087",
    "tagline"  => "Cancel Rosetta Stone subscription",
    "about"    => "Rosetta Stone offers monthly (~$11.99), annual (~$7.99/mo), and lifetime ($179) plans for 25+ languages. Cancel before renewal to stop automatic charges.",
    "refund"   => "Rosetta Stone offers a 30-day money-back guarantee on all subscriptions. Contact support at rosettastone.com/support within 30 days of purchase.",
    "platforms" => [
      "web" => [
        "label" => "Rosetta Stone Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>rosettastone.com</strong> and sign in",
          "Click your <strong>name → Account Settings</strong>",
          "Select <strong>Subscription</strong>",
          "Click <strong>Cancel Auto-Renewal</strong>",
          "Confirm",
        ],
        "note"  => "For the 30-day refund, contact support directly at rosettastone.com/support.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>Rosetta Stone</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Access continues until end of current billing period",
      "30-day refund available if requested promptly",
      "Your language progress is saved in your account",
      "Lifetime plan holders are not affected",
    ],
    "faq" => [
      ["Is Rosetta Stone still worth it in 2024?",
       "Rosetta Stone's immersive approach works well for building listening and speaking intuition. For structured grammar learning, Babbel may be more efficient. For casual practice, Duolingo is free."],
      ["What's the difference between Rosetta Stone subscription and lifetime?",
       "The lifetime plan ($179 one-time) gives permanent access to all 25 languages. At $11.99/month, the lifetime pays for itself in about 15 months."],
    ],
    "related" => ["babbel", "duolingo", "preply", "pimsleur"],
  ],

  "keeper" => [
    "name"     => "Keeper",
    "emoji"    => "🔑",
    "color"    => "#1A6BCC",
    "tagline"  => "Cancel Keeper password manager subscription",
    "about"    => "Keeper Password Manager (~$2.91/month billed annually) securely stores passwords, payment cards, and private documents. Cancel before your annual renewal to stop charges.",
    "refund"   => "Keeper offers refunds within 30 days of purchase for new subscriptions. Contact support at keepersecurity.com/support.",
    "platforms" => [
      "web" => [
        "label" => "Keeper Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>keepersecurity.com</strong> and sign in",
          "Click your <strong>account icon → Settings</strong>",
          "Select <strong>Subscription</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm",
        ],
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>Keeper</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Vault access continues until end of billing period",
      "Export your passwords before cancellation as a backup",
      "Free tier available with limited features after expiry",
      "Your data remains encrypted in the vault",
    ],
    "faq" => [
      ["What happens to my passwords if I cancel Keeper?",
       "Your vault remains accessible in read-only mode on the free tier. Export your passwords (Settings → Export) before canceling to ensure you have a backup."],
      ["How does Keeper compare to 1Password or LastPass?",
       "Keeper has the most rigorous security certifications (SOC 2, ISO 27001). 1Password is known for best-in-class UX. LastPass had a major breach in 2022 and is now considered less trusted by security professionals."],
    ],
    "related" => ["lastpass", "1password", "nordvpn", "proton-vpn"],
  ],

  "lastpass" => [
    "name"     => "LastPass",
    "emoji"    => "🔐",
    "color"    => "#D32D27",
    "tagline"  => "Cancel LastPass subscription",
    "about"    => "LastPass Premium (~$3/month billed annually) adds unlimited device syncing, dark web monitoring, and 1 GB encrypted storage. The free tier is limited to one device type.",
    "refund"   => "LastPass offers refunds within 30 days of purchase. Contact support at lastpass.com/support.",
    "platforms" => [
      "web" => [
        "label" => "LastPass Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>lastpass.com</strong> and sign in",
          "Click your <strong>username → Account Settings</strong>",
          "Select <strong>Subscription</strong>",
          "Click <strong>Cancel Subscription</strong>",
          "Confirm",
        ],
        "note"  => "Export your vault data before canceling: Account Settings → Advanced → Export.",
      ],
    ],
    "after_cancel" => [
      "Reverts to free tier (one device type only)",
      "All saved passwords remain accessible on free plan",
      "Dark web monitoring and emergency access disabled",
      "Export your data as a backup before canceling",
    ],
    "faq" => [
      ["Is LastPass safe to use after the 2022 breach?",
       "LastPass suffered a major breach in 2022 where encrypted vaults were stolen. While encrypted data requires your master password to decrypt, many security experts now recommend switching to Bitwarden, 1Password, or Keeper as safer alternatives."],
      ["Does LastPass have a free tier?",
       "Yes — LastPass free allows unlimited passwords but syncs only across one device type (mobile OR desktop, not both). Premium ($3/mo) adds multi-device sync."],
    ],
    "related" => ["1password", "keeper", "nordvpn", "proton-vpn"],
  ],

  "1password" => [
    "name"     => "1Password",
    "emoji"    => "🗝️",
    "color"    => "#1A8CFF",
    "tagline"  => "Cancel 1Password subscription",
    "about"    => "1Password Individual (~$2.99/month billed annually) or Families (~$4.99/month for up to 5 users) is a premium password manager known for its security and polished design.",
    "refund"   => "1Password offers refunds within 30 days of purchase. Contact support at support.1password.com.",
    "platforms" => [
      "web" => [
        "label" => "1Password Website",
        "icon"  => "💻",
        "steps" => [
          "Go to <strong>my.1password.com</strong> and sign in",
          "Click your <strong>name → Manage Plan</strong>",
          "Select <strong>Cancel Subscription</strong>",
          "Follow prompts to confirm",
        ],
        "note"  => "Export your vault (File → Export) before canceling as a safety backup.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Open <strong>Settings → [your name] → Subscriptions</strong>",
          "Tap <strong>1Password</strong>",
          "Tap <strong>Cancel Subscription</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Read-only access to your vault after cancellation",
      "Cannot add or edit passwords without active subscription",
      "Export your data before the vault becomes read-only",
      "Resubscribe anytime to restore full access",
    ],
    "faq" => [
      ["Does 1Password have a free tier?",
       "No — 1Password does not offer a permanent free tier. You can try it free for 14 days. After canceling, the vault goes into read-only mode. Consider Bitwarden (free, open-source) as a free alternative."],
      ["Is 1Password safer than LastPass?",
       "Generally yes — 1Password uses a two-secret key system (master password + secret key) that makes remote attacks much harder. 1Password has not had a major breach like LastPass's 2022 incident."],
    ],
    "related" => ["lastpass", "keeper", "nordvpn", "proton-vpn"],
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
  ["Google One","google-one"],["Rocket Money","rocket-money"],
  ["Coursera","coursera"],["Wix","wix"],["Squarespace","squarespace"],
  ["Scribd","scribd"],["Discovery+","discovery-plus"],["Apple Arcade","apple-arcade"],
  ["Discord Nitro","discord-nitro"],["Minecraft","minecraft"],
  ["Funimation","funimation"],["Shudder","shudder"],["EA Play","ea-play"],
  ["ExpressVPN","expressvpn"],["Home Chef","home-chef"],["Factor","factor-meal"],
  ["EveryPlate","everyplate"],["Blue Apron","blue-apron"],["Mailchimp","mailchimp"],
  ["Babbel","babbel"],["DIRECTV","directv"],["iCloud+","apple-icloud"],
  ["Roblox Premium","roblox-premium"],["Pimsleur","pimsleur"],["YNAB","ynab"],
  ["Costco","costco"],["AAA","aaa"],["Adobe Acrobat","adobe-acrobat"],
  ["Google Workspace","google-workspace"],["Lightroom","lightroom"],
  ["Strava","strava"],["Figma","figma"],["WHOOP","whoop"],["Bark","bark"],
  ["Walmart+","walmart-plus"],["Evernote","evernote"],
  ["MyFitnessPal","myfitnesspal"],["Proton VPN","proton-vpn"],
  ["Adobe Stock","adobe-stock"],["AMC+","amc-plus"],["ClickUp","clickup"],
  ["Notion","notion"],["Acorn TV","acorn-tv"],
  ["OnlyFans","onlyfans"],["Substack","substack"],["Patreon","patreon"],
  ["Wall Street Journal","wall-street-journal"],["Washington Post","washington-post"],
  ["AARP","aarp"],["BET+","bet-plus"],["Pure Flix","pureflix"],
  ["Midjourney","midjourney"],["QuickBooks","quickbooks"],["Medium","medium"],
  ["Monday.com","monday-com"],["Apple Fitness+","apple-fitness-plus"],
  ["Max","max"],["ViX+","vix"],["Showtime","showtime"],
  ["Apple One","apple-one"],["Plex Pass","plex"],
  ["DAZN","dazn"],["Fabletics","fabletics"],["Stitch Fix","stitch-fix"],
  ["AllTrails+","alltrails"],["IPVanish","ipvanish"],["Preply","preply"],
  ["Rosetta Stone","rosetta-stone"],["Keeper","keeper"],
  ["LastPass","lastpass"],["1Password","1password"],
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
