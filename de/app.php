<?php
$site_url = "https://howtocancelsubscription.com";

// ── App-Daten ─────────────────────────────────────────────────────────────────
$apps_data = [
  "netflix" => [
    "name"     => "Netflix",
    "emoji"    => "🎬",
    "color"    => "#E50914",
    "tagline"  => "In 2 Klicks kündigen — kein Telefonanruf nötig",
    "about"    => "Netflix wird monatlich automatisch abgerechnet. Du kannst jederzeit online kündigen — der Zugang bleibt bis zum Ende des Abrechnungszeitraums bestehen.",
    "refund"   => "Netflix erstattet keine anteiligen Beträge für nicht genutzte Tage. Du behältst den Zugang bis zum Ende der aktuellen Abrechnungsperiode.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Öffne die <strong>Einstellungen</strong>-App auf deinem iPhone",
          "Tippe oben auf deinen <strong>Namen</strong>",
          "Tippe auf <strong>Abonnements</strong>",
          "Tippe auf <strong>Netflix</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong>",
          "Tippe auf <strong>Bestätigen</strong> — fertig",
        ],
        "note"  => "Nur möglich wenn du über den App Store abonniert hast. Falls du dich auf netflix.com angemeldet hast, kündige dort.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne den <strong>Google Play Store</strong>",
          "Tippe auf dein <strong>Profilbild</strong> oben rechts",
          "Tippe auf <strong>Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>Netflix</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong> und bestätige",
        ],
        "note"  => "Nur wenn du über Google Play abonniert hast. Andernfalls auf netflix.com kündigen.",
      ],
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>netflix.com</strong> und melde dich an",
          "Klicke oben rechts auf dein <strong>Profilsymbol</strong>",
          "Klicke auf <strong>Konto</strong>",
          "Klicke unter &bdquo;Mitgliedschaft&ldquo; auf <strong>Mitgliedschaft kündigen</strong>",
          "Klicke auf <strong>Kündigung abschließen</strong>",
          "Du erhältst eine Bestätigungs-E-Mail — aufbewahren",
        ],
        "note"  => "Diese Methode funktioniert unabhängig davon, wie du ursprünglich abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Du behältst Netflix-Zugang bis zum Ende des aktuellen Abrechnungszeitraums",
      "Dein Wiedergabeverlauf und alle Profile werden 10 Monate gespeichert",
      "Du kannst jederzeit wieder abonnieren und weiterschauen",
      "Keine Kündigungsgebühr — Netflix ist monatlich kündbar",
    ],
    "faq" => [
      ["Bekomme ich nach der Kündigung eine Erstattung von Netflix?",
       "Netflix erstattet keine anteiligen Beträge für laufende Abrechnungszeiträume. Wenn du kürzlich versehentlich verlängert wurdest, wende dich an den Netflix-Support — in Einzelfällen gibt es Ausnahmen."],
      ["Was passiert mit meinen Netflix-Profilen nach der Kündigung?",
       "Deine Profile, der Wiedergabeverlauf und deine Merkliste werden 10 Monate gespeichert. Wenn du innerhalb dieser Zeit wieder abonnierst, wird alles wiederhergestellt."],
      ["Kann ich Netflix pausieren statt kündigen?",
       "Ja — Netflix bietet eine Pausenfunktion. Gehe zu Konto → Mitgliedschaft pausieren. Du kannst 1–3 Monate pausieren und wirst in dieser Zeit nicht abgerechnet."],
    ],
    "related" => ["spotify", "disney-plus", "amazon-prime", "crunchyroll"],
  ],

  "spotify" => [
    "name"     => "Spotify Premium",
    "emoji"    => "🎵",
    "color"    => "#1DB954",
    "tagline"  => "Zur kostenlosen Version wechseln — Playlists bleiben für immer",
    "about"    => "Das Kündigen von Spotify Premium wechselt dich auf den kostenlosen Tarif — du verlierst niemals deine Playlists oder gespeicherten Songs.",
    "refund"   => "Spotify erstattet keine anteiligen Premium-Beträge. Du behältst Premium bis zum nächsten Abrechnungsdatum.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>spotify.com</strong> und melde dich an",
          "Klicke auf deinen <strong>Profilnamen → Konto</strong>",
          "Scrolle zu &bdquo;Dein Abo&ldquo; und klicke auf <strong>Abo ändern</strong>",
          "Scrolle bis &bdquo;Spotify Free&ldquo; und klicke auf <strong>Premium kündigen</strong>",
          "Klicke auf <strong>Ja, kündigen</strong> zur Bestätigung",
        ],
        "note"  => "Die Web-Methode funktioniert für alle Spotify-Konten.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Spotify</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong> und bestätige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne <strong>Google Play Store → Profil → Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>Spotify</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong> und bestätige",
        ],
        "note"  => "Nur wenn du über Google Play abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Du behältst Spotify Premium bis zum nächsten Abrechnungsdatum",
      "Danach wechselst du zu Spotify Free — mit Werbung",
      "Alle deine Playlists, Lieblingssongs und Podcasts bleiben dauerhaft erhalten",
      "Offline-Downloads werden nach Ablauf von Premium entfernt",
    ],
    "faq" => [
      ["Verliere ich meine Playlists, wenn ich Spotify Premium kündige?",
       "Nein — deine Playlists, Lieblingssongs und abonnierten Podcasts bleiben dauerhaft in deinem Konto gespeichert. Du verlierst nur Offline-Downloads und werbefreies Hören."],
      ["Kann ich Spotify pausieren statt kündigen?",
       "Spotify bietet keine Pausenfunktion. Du kannst kündigen und später wieder abonnieren — deine Daten warten auf dich."],
      ["Spotify zieht weiter Geld ab nach der Kündigung — was tun?",
       "Prüfe, ob du an der richtigen Stelle gekündigt hast (spotify.com, App Store oder Google Play). Wenn du dich auf Spotify.com angemeldet aber im App Store gekündigt hast, laufen die Abbuchungen weiter. Alle drei Orte prüfen."],
    ],
    "related" => ["netflix", "amazon-music", "dazn", "blinkist"],
  ],

  "amazon-prime" => [
    "name"     => "Amazon Prime",
    "emoji"    => "📦",
    "color"    => "#FF9900",
    "tagline"  => "Mitgliedschaft sofort beenden oder Auto-Verlängerung abschalten",
    "about"    => "Amazon Prime bietet kostenlosen Versand, Prime Video, Prime Music und mehr. Du kannst die Mitgliedschaft sofort beenden (mit anteiliger Erstattung falls ungenutzt) oder die automatische Verlängerung deaktivieren.",
    "refund"   => "Amazon erstattet anteilig, wenn du Prime kündigst und keine Prime-Vorteile im aktuellen Zeitraum genutzt hast. Gehe zu Konto → Prime → Mitgliedschaft beenden für die Erstattungsinfo.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>amazon.de</strong> und melde dich an",
          "Fahre über <strong>Konto und Listen</strong> → klicke <strong>Mein Konto</strong>",
          "Klicke auf <strong>Prime</strong>",
          "Klicke auf <strong>Prime-Mitgliedschaft verwalten</strong>",
          "Klicke auf <strong>Mitgliedschaft beenden</strong>",
          "Wähle: <strong>Jetzt beenden</strong> (mögliche Erstattung) oder <strong>Zum Verlängerungsdatum beenden</strong>",
          "Bestätige deine Wahl",
        ],
        "note"  => "Wähle 'Jetzt beenden', wenn du Prime diesen Monat noch nicht genutzt hast — du erhältst möglicherweise eine Erstattung.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Öffne die <strong>Amazon Shopping</strong>-App",
          "Tippe auf das <strong>Profilsymbol → Mein Konto</strong>",
          "Tippe auf <strong>Prime-Mitgliedschaft verwalten</strong>",
          "Tippe auf <strong>Mitgliedschaft beenden</strong> und bestätige",
        ],
        "note"  => "Amazon Prime wird nicht über Apple-Abonnements verwaltet — immer über die Amazon-App oder Website kündigen.",
      ],
    ],
    "after_cancel" => [
      "Bei 'Jetzt beenden' erhältst du möglicherweise eine anteilige Erstattung",
      "Prime Video, Music und kostenloser Versand enden sofort oder zum Verlängerungsdatum",
      "Amazon Fresh- und Whole-Foods-Rabatte werden ebenfalls entfernt",
      "Du kannst jederzeit wieder Mitglied werden",
    ],
    "faq" => [
      ["Bekomme ich eine Erstattung, wenn ich Amazon Prime kündige?",
       "Ja — Amazon erstattet anteilig, wenn du Prime kündigst und im aktuellen Abrechnungszeitraum keine Prime-Vorteile (kostenlosen Versand, Prime Video usw.) genutzt hast."],
      ["Wird Prime Video auch gekündigt, wenn ich Amazon Prime kündige?",
       "Ja — Prime Video ist in Amazon Prime enthalten. Das Kündigen von Prime beendet auch den Zugang zu Prime Video. Du kannst Prime Video separat als eigenständiges Abo weiter nutzen."],
      ["Wie kündige ich die kostenlose Amazon-Prime-Testphase?",
       "Gleicher Ablauf — Konto → Prime → Mitgliedschaft beenden → Jetzt beenden. Kündigungen während der Testphase sind kostenlos und gelten sofort."],
    ],
    "related" => ["netflix", "audible", "kindle-unlimited", "amazon-music"],
  ],

  "sky" => [
    "name"     => "Sky Deutschland",
    "emoji"    => "📡",
    "color"    => "#003580",
    "tagline"  => "Sky rechtzeitig kündigen — Kündigungsfrist unbedingt beachten!",
    "about"    => "Sky Deutschland-Verträge haben oft eine Mindestlaufzeit von 12 oder 24 Monaten mit einer Kündigungsfrist von 1 Monat zum Vertragsende. Die Kündigung kann online, per Post oder telefonisch erfolgen.",
    "refund"   => "Keine Erstattung bei Kündigung innerhalb der Mindestlaufzeit ohne wichtigen Grund. Die Kündigung wird zum Ende der Mindestlaufzeit wirksam. Außerordentliche Kündigung ist bei Preiserhöhung möglich.",
    "platforms" => [
      "web" => [
        "label" => "Online (sky.de)",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>sky.de/kuendigen</strong> und melde dich an",
          "Klicke auf <strong>Kündigung einreichen</strong>",
          "Gib deine Kundennummer und persönlichen Daten ein",
          "Wähle das Kündigungsdatum (zum nächstmöglichen Termin)",
          "Klicke auf <strong>Kündigung abschicken</strong>",
          "Du erhältst eine Bestätigung per E-Mail — aufbewahren",
        ],
        "note"  => "⚠️ Kündigungsfrist: 1 Monat vor Vertragsende. Prüfe dein Vertragsende im Sky-Kundenportal unter Mein Sky → Meine Verträge.",
      ],
    ],
    "after_cancel" => [
      "Dein Sky-Vertrag läuft bis zum Ende der Mindestlaufzeit weiter",
      "Danach werden keine weiteren Abbuchungen vorgenommen",
      "Sky Go und Sky Q App verlieren den Zugang zum Vertragsende",
      "Gemietete Hardware (Sky Q Box) muss zurückgegeben werden",
    ],
    "faq" => [
      ["Wie lange ist die Kündigungsfrist bei Sky Deutschland?",
       "Die Kündigungsfrist beträgt in der Regel 1 Monat zum Ende der Vertragslaufzeit. Wenn dein Vertrag z. B. am 31. Oktober endet, muss die Kündigung spätestens am 30. September bei Sky eingegangen sein."],
      ["Kann ich Sky sofort kündigen?",
       "Eine sofortige Kündigung ist nur aus wichtigem Grund möglich (z. B. Umzug ins Ausland, anhaltende technische Störungen, Preiserhöhung). Ohne wichtigen Grund läuft der Vertrag bis zum Ende der Mindestlaufzeit."],
      ["Was passiert mit meiner Sky Q Box bei der Kündigung?",
       "Gemietete Sky Q Boxen müssen nach der Kündigung zurückgeschickt werden. Sky sendet dir ein Rücksendeset. Nicht zurückgeschickte Geräte werden in Rechnung gestellt."],
    ],
    "related" => ["wow", "dazn", "netflix", "amazon-prime"],
  ],

  "disney-plus" => [
    "name"     => "Disney+",
    "emoji"    => "✨",
    "color"    => "#113CCF",
    "tagline"  => "Disney+ online kündigen — kein Telefonanruf nötig",
    "about"    => "Disney+ bietet werbefinanzierte und werbefreie Abonnementpläne. Du kannst jederzeit über DisneyPlus.com oder dein Gerät kündigen.",
    "refund"   => "Disney+ erstattet keine Beträge für den laufenden Abrechnungszeitraum. Der Zugang bleibt bis zum Ende der bezahlten Periode bestehen.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>disneyplus.com</strong> und melde dich an",
          "Klicke auf das <strong>Profilsymbol</strong> oben rechts",
          "Klicke auf <strong>Konto</strong>",
          "Klicke unter &bdquo;Abonnement&ldquo; auf <strong>Abonnement kündigen</strong>",
          "Klicke auf <strong>Weiter</strong> zur Bestätigung",
        ],
        "note"  => "Wenn du das Disney Bundle (Disney+, Star+ etc.) hast, wird beim Kündigen das gesamte Bundle gekündigt.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Disney+</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong> und bestätige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne <strong>Google Play Store → Profil → Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>Disney+</strong> und kündige",
        ],
        "note"  => "Nur wenn du über Google Play abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Zugang bleibt bis zum Ende des Abrechnungszeitraums",
      "Merkliste und Profileinstellungen werden 30 Tage gespeichert",
      "Du kannst jederzeit wieder abonnieren",
    ],
    "faq" => [
      ["Bekomme ich eine Erstattung von Disney+?",
       "Disney+ erstattet grundsätzlich keine Beträge für den laufenden Abrechnungszeitraum. Wende dich an den Disney+-Support unter help.disneyplus.com, wenn du irrtümlich belastet wurdest."],
      ["Gibt es eine Pausenfunktion bei Disney+?",
       "Nein — Disney+ bietet keine Pausenfunktion. Du musst kündigen und später wieder abonnieren. Deine Merkliste und Profildaten bleiben 30 Tage erhalten."],
    ],
    "related" => ["netflix", "amazon-prime", "wow", "crunchyroll"],
  ],

  "audible" => [
    "name"     => "Audible",
    "emoji"    => "🎧",
    "color"    => "#FF9900",
    "tagline"  => "Audible kündigen — Hörbücher bleiben für immer in deiner Bibliothek",
    "about"    => "Audible ist Amazons Hörbuch-Dienst. Alle mit Credits gekauften Hörbücher bleiben dauerhaft in deiner Bibliothek — auch nach der Kündigung.",
    "refund"   => "Audible erstattet keine anteiligen Mitgliedsbeiträge. Hörbücher können innerhalb von 365 Tagen zurückgegeben werden. Bei versehentlicher Verlängerung innerhalb von 7 Tagen Support kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>audible.de</strong> und melde dich mit deinem Amazon-Konto an",
          "Klicke oben rechts auf <strong>Konto und Listen → Mein Konto</strong>",
          "Klicke auf <strong>Mitgliedschaft verwalten</strong>",
          "Scrolle nach unten und klicke auf <strong>Mitgliedschaft kündigen</strong>",
          "Audible zeigt zuerst eine Pausenoption — klicke auf <strong>Weiter kündigen</strong>",
          "Bestätige die Kündigung",
        ],
        "note"  => "Audible versucht dich zu halten — klicke an allen Halte-Angeboten vorbei und wähle immer 'Weiter kündigen'.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Audible</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong> und bestätige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Alle mit Credits gekauften Hörbücher bleiben dauerhaft in deiner Bibliothek",
      "Du verlierst den monatlichen Credit für neue Hörbücher",
      "Audible Originals, die du hinzugefügt hast, bleiben zugänglich",
      "Du kannst jederzeit wieder Mitglied werden",
    ],
    "faq" => [
      ["Behalte ich meine Audible-Hörbücher nach der Kündigung?",
       "Ja — alle mit Credits gekauften Hörbücher bleiben dauerhaft in deiner Bibliothek. Du kannst sie weiterhin über die Audible-App hören, auch ohne aktive Mitgliedschaft."],
      ["Kann ich Audible pausieren statt kündigen?",
       "Ja — Audible bietet eine Pausenfunktion für 1–3 Monate. In dieser Zeit wirst du nicht abgerechnet und erhältst keinen Credit, aber deine Bibliothek bleibt erhalten. Audible bietet diese Option vor der endgültigen Kündigung an."],
      ["Ich habe ungenutzte Credits — was passiert bei der Kündigung?",
       "Ungenutzte Audible-Credits verfallen bei der Kündigung. Nutze sie vor der Kündigung, um noch Hörbücher zu erwerben."],
    ],
    "related" => ["amazon-prime", "spotify", "blinkist", "amazon-music"],
  ],

  "hellofresh" => [
    "name"     => "HelloFresh",
    "emoji"    => "🥗",
    "color"    => "#2D9B30",
    "tagline"  => "HelloFresh kündigen — vor dem Stichtag beachten!",
    "about"    => "HelloFresh ist ein Kochbox-Lieferdienst, der wöchentlich abrechnet. Du kannst pausieren, einzelne Wochen überspringen oder online kündigen — kein Telefonanruf nötig.",
    "refund"   => "HelloFresh erstattet keine bereits versendeten Boxen. Bei beschädigten oder falschen Lieferungen den Support innerhalb von 5 Tagen kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>hellofresh.de</strong> und melde dich an",
          "Klicke oben rechts auf deinen <strong>Namen → Kontoeinstellungen</strong>",
          "Scrolle zu &bdquo;Planeinstellungen&ldquo; und klicke auf <strong>Plan kündigen</strong>",
          "Beantworte die Kündigungsumfrage",
          "Klicke auf <strong>Mein Abo kündigen</strong> zur Bestätigung",
        ],
        "note"  => "⚠️ Kündigung muss spätestens 5 Tage vor dem nächsten Liefertag eingehen, sonst wird die nächste Box noch versandt und berechnet.",
      ],
      "iphone" => [
        "label" => "HelloFresh App",
        "icon"  => "📱",
        "steps" => [
          "Öffne die <strong>HelloFresh</strong>-App",
          "Tippe auf das <strong>Menü-Symbol</strong> (oben links)",
          "Tippe auf <strong>Kontoeinstellungen</strong>",
          "Tippe auf <strong>Plan kündigen</strong> und folge den Anweisungen",
        ],
        "note"  => "HelloFresh wird nicht über Apple-Abonnements verwaltet.",
      ],
    ],
    "after_cancel" => [
      "Alle kommenden Lieferungen und Abbuchungen werden gestoppt",
      "Bereits bestellte und bezahlte Boxen werden noch geliefert",
      "Dein HelloFresh-Konto bleibt erhalten",
      "Du kannst dich jederzeit wieder anmelden",
    ],
    "faq" => [
      ["Kann ich bei HelloFresh einzelne Wochen überspringen statt zu kündigen?",
       "Ja — HelloFresh ermöglicht es, einzelne Wochen im Konto-Dashboard zu überspringen. Praktisch wenn du verreist oder genug zu essen hast. Überspringen ist kostenlos."],
      ["Bis wann muss ich bei HelloFresh kündigen, um nicht mehr berechnet zu werden?",
       "Kündige mindestens 5 Tage vor deinem nächsten Liefertag. Nach diesem Stichtag wirst du für die nächste Box noch abgerechnet."],
      ["Wie kündige ich die HelloFresh-Gratis-Probewoche?",
       "Gleicher Ablauf — Kontoeinstellungen → Plan kündigen. Kündige vor Ende der Testwoche, um nicht für die erste reguläre Box berechnet zu werden."],
    ],
    "related" => ["amazon-prime", "dazn", "netflix", "spotify"],
  ],

  "wow" => [
    "name"     => "WOW Streaming",
    "emoji"    => "🎬",
    "color"    => "#003580",
    "tagline"  => "WOW monatlich kündbar — kein Jahresvertrag",
    "about"    => "WOW (früher Sky Ticket) ist das Streaming-Angebot von Sky ohne feste Vertragslaufzeit. Monatlich kündbar — einfach online im Kundenkonto.",
    "refund"   => "WOW erstattet keine anteiligen Beträge für den laufenden Monat. Der Zugang bleibt bis zum Ende des Abrechnungszeitraums bestehen.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser (wowtv.de)",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>wowtv.de</strong> und melde dich an",
          "Klicke oben rechts auf dein <strong>Profilsymbol</strong>",
          "Klicke auf <strong>Mein Konto</strong>",
          "Klicke auf <strong>Abonnements</strong>",
          "Klicke neben deinem Abo auf <strong>Kündigen</strong>",
          "Bestätige die Kündigung",
        ],
        "note"  => "WOW ist kein Jahresvertrag — du kannst jeden Monat kündigen, ohne Gebühren zu zahlen.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>WOW</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong> und bestätige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne <strong>Google Play Store → Profil → Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>WOW</strong> und kündige",
        ],
        "note"  => "Nur wenn du über Google Play abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "WOW-Zugang bleibt bis Ende des laufenden Monats",
      "Dein WOW-Konto bleibt bestehen — du kannst jederzeit wieder abonnieren",
      "Keine Kündigungsgebühr — WOW ist monatlich kündbar",
      "Unterschied zu Sky: WOW hat keine Mindestlaufzeit",
    ],
    "faq" => [
      ["Was ist der Unterschied zwischen WOW und Sky?",
       "WOW (früher Sky Ticket) ist das monatlich kündbare Streaming-Angebot von Sky ohne Hardware und ohne Jahresvertrag. Sky Deutschland hingegen ist ein Vertrag mit Mindestlaufzeit und kann Sat/Kabel-Empfang beinhalten."],
      ["Kann ich WOW nach der Kündigung wieder buchen?",
       "Ja — du kannst WOW jederzeit wieder über wowtv.de abonnieren. Dein Konto und deine Einstellungen bleiben erhalten."],
      ["Bekomme ich eine Erstattung von WOW?",
       "WOW erstattet keine anteiligen Monatsbeträge. Wende dich an den WOW-Support, wenn du irrtümlich abgerechnet wurdest."],
    ],
    "related" => ["sky", "dazn", "netflix", "amazon-prime"],
  ],

  "dazn" => [
    "name"     => "DAZN",
    "emoji"    => "⚽",
    "color"    => "#F8FF00",
    "tagline"  => "DAZN Abo online kündigen — Schritt für Schritt",
    "about"    => "DAZN ist ein Sportstreaming-Dienst für Fußball (Bundesliga, Champions League), Boxen und mehr. Monatliche und Jahrespläne können online im DAZN-Konto gekündigt werden.",
    "refund"   => "DAZN erstattet bei Jahresplänen keine anteiligen Beträge. Monatliche Pläne laufen bis zum Ende des Abrechnungsmonats. Bei Fehlern innerhalb von 48 Stunden den Support kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>dazn.com</strong> und melde dich an",
          "Klicke oben rechts auf dein <strong>Profilsymbol</strong>",
          "Klicke auf <strong>Konto</strong>",
          "Klicke auf <strong>Abonnement verwalten</strong>",
          "Klicke auf <strong>Abo kündigen</strong>",
          "Wähle einen Grund und bestätige die Kündigung",
        ],
        "note"  => "DAZN kann auch über den App Store oder Google Play verwaltet werden, abhängig davon, wo du abonniert hast.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>DAZN</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong> und bestätige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne <strong>Google Play Store → Profil → Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>DAZN</strong> und kündige",
        ],
        "note"  => "Nur wenn du über Google Play abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Zugang bleibt bis zum Ende des laufenden Abrechnungszeitraums",
      "Alle Live-Spiele und Highlights sind bis dahin weiterhin zugänglich",
      "Dein DAZN-Konto bleibt erhalten",
      "Du kannst jederzeit wieder abonnieren",
    ],
    "faq" => [
      ["Verliere ich Bundesliga-Spiele sofort nach der DAZN-Kündigung?",
       "Nein — du hast weiterhin Zugang bis zum Ende des bezahlten Zeitraums. Erst danach endet der Zugang zu Bundesliga, Champions League und anderen Übertragungen."],
      ["Kann ich DAZN pausieren?",
       "DAZN bietet keine offizielle Pausenfunktion. Du musst kündigen und bei Bedarf neu abonnieren."],
      ["Bekomme ich eine Erstattung von DAZN?",
       "Bei Jahresplänen erstattet DAZN in der Regel keine anteiligen Beträge. Monatliche Abos laufen bis Monatsende. Bei irrtümlicher Abbuchung den DAZN-Support innerhalb von 48 Stunden kontaktieren."],
    ],
    "related" => ["sky", "wow", "netflix", "amazon-prime"],
  ],

  "paramount-plus" => [
    "name"     => "Paramount+",
    "emoji"    => "⛰️",
    "color"    => "#0064FF",
    "tagline"  => "Paramount+ in 3 Schritten online kündigen",
    "about"    => "Paramount+ bietet Serien, Filme und Sportinhalte. Das Abo kann jederzeit online ohne Telefonanruf gekündigt werden.",
    "refund"   => "Paramount+ erstattet keine Beträge für den laufenden Abrechnungszeitraum.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>paramountplus.com</strong> und melde dich an",
          "Klicke auf dein <strong>Profilsymbol</strong>",
          "Klicke auf <strong>Konto &amp; Einstellungen</strong>",
          "Klicke auf <strong>Abo kündigen</strong>",
          "Folge den Anweisungen und bestätige",
        ],
        "note"  => "Funktioniert für Abos, die direkt auf paramountplus.com gebucht wurden.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Paramount+</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne <strong>Google Play Store → Profil → Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>Paramount+</strong> und kündige",
        ],
        "note"  => "Nur wenn du über Google Play abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Zugang bleibt bis zum Ende des Abrechnungszeitraums",
      "Deine Merkliste und Profilinfos bleiben erhalten, wenn du wieder abonnierst",
      "Keine Kündigungsgebühr",
    ],
    "faq" => [
      ["Bekomme ich eine Erstattung von Paramount+?",
       "Paramount+ erstattet keine Beträge für laufende Zeiträume. Kontaktiere den Support bei Falschabbuchungen."],
    ],
    "related" => ["netflix", "amazon-prime", "wow", "disney-plus"],
  ],

  "crunchyroll" => [
    "name"     => "Crunchyroll",
    "emoji"    => "🎌",
    "color"    => "#F47521",
    "tagline"  => "Crunchyroll kündigen — Anime-Merkliste bleibt erhalten",
    "about"    => "Crunchyroll bietet Anime-Streaming mit Fan-, Mega-Fan- und Ultimate-Fan-Tarifen. Du kannst jederzeit online kündigen — ohne Telefonanruf.",
    "refund"   => "Crunchyroll erstattet keine Beträge für den laufenden Abrechnungszeitraum.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>crunchyroll.com</strong> und melde dich an",
          "Klicke auf dein <strong>Profilsymbol</strong>",
          "Klicke auf <strong>Einstellungen</strong>",
          "Klicke auf <strong>Abonnement verwalten</strong>",
          "Klicke auf <strong>Premium kündigen</strong>",
          "Wähle einen Grund und bestätige",
        ],
        "note"  => "Zuverlässigste Methode — funktioniert unabhängig davon, wo du abonniert hast.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Crunchyroll</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne <strong>Google Play Store → Profil → Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>Crunchyroll</strong> und kündige",
        ],
        "note"  => "Nur wenn du über Google Play abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Premium-Zugang läuft bis zum Ende der Abrechnungsperiode",
      "Danach zurück zum kostenlosen Tarif (mit Werbung)",
      "Merkliste und Wiedergabeverlauf bleiben erhalten",
    ],
    "faq" => [
      ["Verliere ich meine Crunchyroll-Merkliste nach der Kündigung?",
       "Nein — Merkliste und Wiedergabeverlauf bleiben im kostenlosen Konto. Du verlierst nur Premium-Vorteile wie werbefreies Streaming und Simulcast-Zugang."],
      ["Bekomme ich eine Erstattung von Crunchyroll?",
       "Crunchyroll erstattet grundsätzlich keine Beträge für den laufenden Zeitraum. Bei irrtümlicher Abbuchung innerhalb von 48 Stunden den Support kontaktieren."],
    ],
    "related" => ["netflix", "disney-plus", "amazon-prime", "wow"],
  ],

  "apple-tv" => [
    "name"     => "Apple TV+",
    "emoji"    => "🍎",
    "color"    => "#555555",
    "tagline"  => "Apple TV+ direkt in den iPhone-Einstellungen kündigen",
    "about"    => "Apple TV+ ist Apples Streaming-Dienst für Originalserien und -filme. Das Abo wird direkt über dein Apple-Konto verwaltet — keine externen Websites nötig.",
    "refund"   => "Apple bearbeitet Erstattungsanträge unter reportaproblem.apple.com. Genehmigungen sind Einzelfallentscheidungen.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Öffne die <strong>Einstellungen</strong>-App",
          "Tippe oben auf deinen <strong>Namen</strong>",
          "Tippe auf <strong>Abonnements</strong>",
          "Tippe auf <strong>Apple TV+</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong>",
          "Tippe auf <strong>Bestätigen</strong>",
        ],
        "note"  => "Apple TV+ wird immer über Apple verwaltet — es gibt keine separate Website zum Kündigen.",
      ],
      "web" => [
        "label" => "Mac / Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Öffne die <strong>TV</strong>-App auf dem Mac oder gehe zu <strong>tv.apple.com</strong>",
          "Klicke auf dein <strong>Profilbild</strong>",
          "Klicke auf <strong>Kontoeinstellungen</strong>",
          "Klicke auf <strong>Abonnements verwalten</strong>",
          "Klicke neben Apple TV+ auf <strong>Bearbeiten → Abonnement kündigen</strong>",
        ],
        "note"  => "Auch über appleid.apple.com → Medien &amp; Käufe → Abonnements verwalten möglich.",
      ],
    ],
    "after_cancel" => [
      "Apple TV+-Zugang läuft bis zum Ende der Abrechnungsperiode",
      "Deine Merkliste und Wiedergabefortschritte bleiben gespeichert",
      "Familienmitglieder (Familienfreigabe) verlieren ebenfalls den Zugang",
      "Du kannst jederzeit wieder abonnieren",
    ],
    "faq" => [
      ["Ich habe Apple TV+ kostenlos mit meinem Gerät erhalten — wie kündige ich?",
       "Kostenlose Apple TV+-Testphasen werden gleich verwaltet — Einstellungen → [Dein Name] → Abonnements → Apple TV+ → Kündigen. Vor Ablauf der Testphase kündigen, um keine Kosten zu verursachen."],
      ["Beeinflusst das Kündigen von Apple TV+ andere Apple-Abos?",
       "Nein — Apple-Abos sind unabhängig voneinander. Das Kündigen von Apple TV+ beeinflusst nicht Apple Music, iCloud+, Apple Arcade oder Apple News+."],
    ],
    "related" => ["netflix", "amazon-prime", "disney-plus", "wow"],
  ],

  "canva" => [
    "name"     => "Canva Pro",
    "emoji"    => "🎨",
    "color"    => "#7D2AE8",
    "tagline"  => "Canva Pro kündigen — Designs bleiben für immer",
    "about"    => "Canva Pro kann jederzeit gekündigt werden. Alle deine Designs und Dateien bleiben im kostenlosen Konto erhalten.",
    "refund"   => "Canva erstattet Jahrespläne innerhalb von 30 Tagen, wenn keine Premium-Funktionen verwendet wurden. Support für Erstattungsanfragen kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>canva.com</strong> und melde dich an",
          "Klicke oben rechts auf dein <strong>Profilbild</strong>",
          "Klicke auf <strong>Kontoeinstellungen</strong>",
          "Klicke im linken Menü auf <strong>Abrechnung &amp; Pläne</strong>",
          "Klicke auf <strong>Plan kündigen</strong>",
          "Wähle einen Grund und klicke auf <strong>Weiter kündigen</strong>",
        ],
        "note"  => "Dein kostenloses Konto bleibt aktiv und alle Designs bleiben erhalten.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Canva</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Alle deine Designs bleiben im kostenlosen Plan zugänglich",
      "Premium-Vorlagen, die du verwendet hast, bleiben in deinen Designs (aber nicht editierbar)",
      "Pro-Funktionen (Größe ändern, Hintergrund entfernen, Brand Kit) werden deaktiviert",
    ],
    "faq" => [
      ["Verliere ich meine Canva-Designs nach der Kündigung von Pro?",
       "Nein — alle Designs sind dauerhaft in deinem kostenlosen Konto gespeichert. Du verlierst nur Zugang zu Pro-Funktionen wie Magic Resize, Hintergrundentferner und der vollen Vorlagenbibliothek."],
      ["Kann ich eine Erstattung für Canva Pro erhalten?",
       "Canva erstattet Jahrespläne innerhalb von 30 Tagen, wenn keine Premium-Funktionen erheblich genutzt wurden. Kontaktiere den Canva-Support über das Hilfezentrum."],
    ],
    "related" => ["adobe", "chatgpt", "grammarly", "microsoft-365"],
  ],

  "chatgpt" => [
    "name"     => "ChatGPT Plus",
    "emoji"    => "🤖",
    "color"    => "#10A37F",
    "tagline"  => "ChatGPT Plus in 3 Klicks kündigen",
    "about"    => "ChatGPT Plus ist OpenAIs kostenpflichtiges Abo für GPT-4, erweiterte Analysen und Prioritätszugang. Kündigung jederzeit möglich über die Kontoeinstellungen.",
    "refund"   => "OpenAI erstattet keine anteiligen ChatGPT-Plus-Beträge. Das Abo bleibt bis zum Ende des Abrechnungszeitraums aktiv.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>chat.openai.com</strong> und melde dich an",
          "Klicke unten links auf dein <strong>Profilbild</strong>",
          "Klicke auf <strong>Mein Abo</strong>",
          "Klicke auf <strong>Abo verwalten</strong>",
          "Klicke auf <strong>Abo kündigen</strong>",
          "Bestätige die Kündigung",
        ],
        "note"  => "ChatGPT Plus wird über die OpenAI-Website verwaltet — nicht über App-Stores.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>ChatGPT</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "ChatGPT Plus läuft bis zum Ende des aktuellen Abrechnungszeitraums",
      "Danach Wechsel auf die kostenlose Version (GPT-3.5, eingeschränkte Nutzung)",
      "Alle Gesprächsverläufe bleiben erhalten",
      "Du kannst jederzeit wieder auf Plus upgraden",
    ],
    "faq" => [
      ["Was verliere ich, wenn ich ChatGPT Plus kündige?",
       "Du verlierst Zugang zu GPT-4, erweiterter Datenanalyse, Bildgenerierung (DALL·E) und Prioritätszugang. Dein Konto und alle Gesprächsverläufe bleiben im kostenlosen GPT-3.5-Tarif erhalten."],
      ["Wie kündige ich ChatGPT Plus auf dem iPhone?",
       "Wenn du über den App Store abonniert hast, kündige in iPhone-Einstellungen → [Dein Name] → Abonnements → ChatGPT → Abonnement kündigen. Wenn du auf der Website abonniert hast, kündige dort."],
    ],
    "related" => ["grammarly", "canva", "adobe", "microsoft-365"],
  ],

  "mcafee" => [
    "name"     => "McAfee",
    "emoji"    => "🔐",
    "color"    => "#D71920",
    "tagline"  => "McAfee-Auto-Verlängerung vor der Abrechnung deaktivieren",
    "about"    => "McAfee-Antivirenprogramme verlängern sich jährlich automatisch zum vollen Preis. Deaktiviere die Auto-Verlängerung rechtzeitig im MyAccount-Dashboard.",
    "refund"   => "McAfee bietet eine 30-Tage-Geld-zurück-Garantie für Neukäufe. Support innerhalb von 30 Tagen nach dem Kauf kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>myaccount.mcafee.com</strong> und melde dich an",
          "Klicke oben rechts auf <strong>Mein Konto</strong>",
          "Klicke auf <strong>Einstellungen für automatische Verlängerung</strong>",
          "Deaktiviere den Schalter für <strong>Automatische Verlängerung</strong>",
          "Bestätige die Änderung",
        ],
        "note"  => "Das Deaktivieren der Auto-Verlängerung lässt dein Abo bis zum Ablauf laufen, ohne zukünftige Abbuchungen.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>McAfee</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "McAfee-Schutz läuft bis zum Ende des Abonnementzeitraums",
      "Auto-Verlängerung ist deaktiviert — keine weiteren Abbuchungen",
      "Du kannst vor Ablauf manuell verlängern",
    ],
    "faq" => [
      ["Bekomme ich eine Erstattung von McAfee?",
       "Ja — McAfee bietet eine 30-Tage-Geld-zurück-Garantie für Neukäufe. Kontaktiere den McAfee-Support unter mcafee.com/support innerhalb von 30 Tagen nach dem Kauf."],
      ["McAfee hat sich automatisch verlängert — kann ich eine Erstattung bekommen?",
       "McAfee muss dich vor der Auto-Verlängerung benachrichtigen. Wenn du keine Benachrichtigung erhalten hast oder die Abbuchung unerwartet war, kontaktiere sofort den Support — sie erstatten häufig kürzliche unerwartete Verlängerungen."],
    ],
    "related" => ["norton", "adobe", "microsoft-365", "canva"],
  ],

  "adobe" => [
    "name"     => "Adobe Creative Cloud",
    "emoji"    => "🖌️",
    "color"    => "#FF0000",
    "tagline"  => "Adobe vorzeitig kündigen? Vorfälligkeitsentschädigung beachten!",
    "about"    => "Adobe Creative Cloud-Jahrespläne haben eine 14-tägige Widerrufsfrist. Nach Ablauf kostet eine vorzeitige Kündigung 50% der verbleibenden Monatsbeiträge. Monatliche Pläne sind jederzeit kündbar.",
    "refund"   => "Jahrespläne: 50% Vorfälligkeitsentschädigung auf die Restlaufzeit. Kündigung innerhalb von 14 Tagen nach Kauf für volle Erstattung. Monatlich: keine Gebühr.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>account.adobe.com</strong> und melde dich an",
          "Klicke oben auf <strong>Pläne</strong>",
          "Klicke neben deinem Creative-Cloud-Plan auf <strong>Plan verwalten</strong>",
          "Klicke auf <strong>Plan kündigen</strong>",
          "Lies die Hinweise zur Vorfälligkeitsentschädigung sorgfältig durch",
          "Wähle einen Kündigungsgrund und klicke auf <strong>Weiter</strong>",
          "Bestätige die Kündigung",
        ],
        "note"  => "⚠️ Bei einem Jahresplan nach Ablauf der 14 Tage werden 50% der verbleibenden Monate berechnet. Warte wenn möglich bis zur Verlängerung und kündige dann sofort.",
      ],
    ],
    "after_cancel" => [
      "Zugang zu Creative-Cloud-Apps läuft bis Ende der Abrechnungsperiode",
      "Cloud-Speicher wird auf 2 GB reduziert — vorher Dateien herunterladen!",
      "Creative-Cloud-Desktop-App und synchronisierte Dateien können entfernt werden",
      "Kostenlose Apps (Acrobat Reader, Adobe Express) bleiben zugänglich",
    ],
    "faq" => [
      ["Wie vermeide ich die Adobe-Vorfälligkeitsentschädigung?",
       "Kündige innerhalb von 14 Tagen nach Abo-Beginn oder -Verlängerung für volle Erstattung ohne Gebühr. Nach Ablauf dieser Frist warte auf das Verlängerungsdatum und kündige sofort danach."],
      ["Was passiert mit meinem Adobe-Cloud-Speicher bei der Kündigung?",
       "Dein Speicher wird auf 2 GB (kostenlos) reduziert. Dateien über 2 GB können nach 90 Tagen gelöscht werden — unbedingt vorher herunterladen."],
      ["Kann ich Adobe downgraden statt kündigen?",
       "Ja — du kannst von All Apps auf einen Einzelplan (z. B. nur Photoshop) wechseln, der günstiger ist. Gehe zu account.adobe.com → Pläne → Plan ändern."],
    ],
    "related" => ["canva", "chatgpt", "microsoft-365", "grammarly"],
  ],

  "youtube-premium" => [
    "name"     => "YouTube Premium",
    "emoji"    => "▶️",
    "color"    => "#FF0000",
    "tagline"  => "YouTube Premium kündigen — YouTube bleibt kostenlos nutzbar",
    "about"    => "YouTube Premium ermöglicht werbefreies Schauen, Hintergrundwiedergabe und Offline-Downloads. Das Kündigen wechselt dich zurück zum kostenlosen YouTube mit Werbung.",
    "refund"   => "YouTube Premium erstattet keine anteiligen Beträge. Das Abo läuft bis zum Ende des Abrechnungszeitraums.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>youtube.com</strong> und melde dich an",
          "Klicke oben rechts auf dein <strong>Profilbild</strong>",
          "Klicke auf <strong>Käufe und Mitgliedschaften</strong>",
          "Klicke neben YouTube Premium auf <strong>Verwalten</strong>",
          "Klicke auf <strong>Mitgliedschaft kündigen</strong>",
          "Bestätige die Kündigung",
        ],
        "note"  => "YouTube Premium wird über dein Google-Konto verwaltet.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>YouTube Premium</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne <strong>Google Play Store → Profil → Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>YouTube Premium</strong> und kündige",
        ],
        "note"  => "Funktioniert auch wenn du über Google Play abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "YouTube Premium läuft bis zum Ende des aktuellen Zeitraums",
      "Danach kehrt YouTube mit Werbung zurück",
      "Offline-Downloads werden nach Ablauf entfernt",
      "YouTube Music Premium (falls enthalten) endet ebenfalls",
    ],
    "faq" => [
      ["Beinhaltet YouTube Premium auch YouTube Music?",
       "Ja — YouTube Premium beinhaltet in Deutschland auch YouTube Music Premium ohne Aufpreis. Wenn du beide kündigst, verlierst du beide Dienste."],
      ["Bekomme ich eine Erstattung von YouTube Premium?",
       "YouTube Premium erstattet grundsätzlich keine anteiligen Beträge. Bei unerwarteten Abbuchungen wende dich an den Google-Support."],
    ],
    "related" => ["spotify", "dazn", "netflix", "amazon-music"],
  ],

  "norton" => [
    "name"     => "Norton",
    "emoji"    => "🛡️",
    "color"    => "#FFD200",
    "tagline"  => "Norton Auto-Verlängerung deaktivieren — bevor die Rechnung kommt",
    "about"    => "Norton-Antivirenprodukte verlängern sich jährlich automatisch. Deaktiviere die Auto-Verlängerung rechtzeitig im Norton-Konto, um nicht nochmals abgerechnet zu werden.",
    "refund"   => "Norton bietet eine 60-Tage-Geld-zurück-Garantie für Neukäufe. Support innerhalb von 60 Tagen kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>my.norton.com</strong> und melde dich an",
          "Klicke auf <strong>Meine Abonnements</strong>",
          "Klicke beim betreffenden Produkt auf den <strong>Dropdown-Pfeil</strong>",
          "Klicke auf <strong>Automatische Verlängerung deaktivieren</strong>",
          "Bestätige deine Wahl",
        ],
        "note"  => "Norton berechnet das volle Jahr im Voraus — deaktiviere die Auto-Verlängerung sofort nach dem Kauf.",
      ],
    ],
    "after_cancel" => [
      "Norton-Schutz läuft bis zum Ende des Abonnementzeitraums",
      "Auto-Verlängerung ist deaktiviert — keine weiteren Abbuchungen",
      "Vor Ablauf kann manuell verlängert werden",
    ],
    "faq" => [
      ["Bekomme ich eine Erstattung von Norton?",
       "Ja — Norton bietet eine 60-Tage-Geld-zurück-Garantie für Neukäufe. Kontaktiere den Norton-Support unter support.norton.com innerhalb von 60 Tagen."],
      ["Norton hat sich automatisch verlängert — kann ich eine Erstattung erhalten?",
       "Norton ist verpflichtet, vor der Auto-Verlängerung zu informieren. Wenn du keine Benachrichtigung erhalten hast, kontaktiere sofort den Support — aktuelle unerwartete Verlängerungen werden häufig erstattet."],
    ],
    "related" => ["mcafee", "adobe", "microsoft-365", "canva"],
  ],

  "microsoft-365" => [
    "name"     => "Microsoft 365",
    "emoji"    => "📄",
    "color"    => "#D83B01",
    "tagline"  => "Microsoft 365 Auto-Verlängerung vor der nächsten Abbuchung deaktivieren",
    "about"    => "Microsoft 365 (früher Office 365) umfasst Word, Excel, PowerPoint, Teams und 1 TB OneDrive-Speicher. Kündigung jederzeit möglich über dein Microsoft-Konto.",
    "refund"   => "Microsoft erstattet anteilig bei Kündigung innerhalb von 30 Tagen nach dem Kauf. Nach 30 Tagen läuft das Abo bis zum Ende des bezahlten Zeitraums ohne Erstattung.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>account.microsoft.com/services</strong> und melde dich an",
          "Suche <strong>Microsoft 365</strong> und klicke auf <strong>Verwalten</strong>",
          "Klicke auf <strong>Abonnement kündigen</strong>",
          "Folge den Anweisungen und bestätige",
        ],
        "note"  => "Microsoft zeigt möglicherweise Rabattangebote — klicke vorbei, wenn du wirklich kündigen möchtest.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Microsoft 365</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Microsoft 365-Apps wechseln nach Ablauf in den Nur-Lesen-Modus",
      "OneDrive-Speicher sinkt auf 5 GB — Dateien über 5 GB vorher herunterladen!",
      "Word, Excel, PowerPoint bleiben installiert, aber nur noch lesbar",
      "Microsoft-Konto und Outlook-E-Mail bleiben kostenlos",
    ],
    "faq" => [
      ["Was passiert mit meinen Word/Excel-Dateien nach der Kündigung?",
       "Dateien bleiben auf deinem Computer. Word, Excel und PowerPoint wechseln aber in den Nur-Lesen-Modus. Du kannst die kostenlosen Web-Versionen unter office.com weiter nutzen."],
      ["Was passiert mit meinem OneDrive-Speicher?",
       "Dein Speicher sinkt von 1 TB auf 5 GB (kostenlos). Dateien über 5 GB werden nach einer Schonfrist nur noch lesbar. Wichtige Dateien vor der Kündigung herunterladen."],
    ],
    "related" => ["adobe", "grammarly", "canva", "chatgpt"],
  ],

  "duolingo" => [
    "name"     => "Duolingo Super",
    "emoji"    => "🦉",
    "color"    => "#58CC02",
    "tagline"  => "Duolingo Super kündigen — Lernfortschritt bleibt erhalten",
    "about"    => "Duolingo Super (früher Duolingo Plus) schaltet werbefreies Lernen und unbegrenzte Herzen frei. Die kostenlose Version ist fast identisch — du verlierst kaum etwas durch die Kündigung.",
    "refund"   => "Duolingo verwaltet keine direkten Erstattungen. Erstattungsanfragen über Apple oder Google innerhalb von 48 Stunden nach der Abbuchung stellen.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Duolingo</strong>",
          "Tippe auf <strong>Abonnement kündigen</strong> und bestätige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Öffne <strong>Google Play Store → Profil → Zahlungen &amp; Abos → Abonnements</strong>",
          "Tippe auf <strong>Duolingo</strong> und kündige",
        ],
        "note"  => "Nur wenn du über Google Play abonniert hast.",
      ],
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>duolingo.com</strong> und melde dich an",
          "Klicke auf dein <strong>Profilbild → Einstellungen</strong>",
          "Klicke unter &bdquo;Duolingo Super&ldquo; auf <strong>Abo kündigen</strong>",
        ],
        "note"  => "Für Abos, die auf duolingo.com gestartet wurden.",
      ],
    ],
    "after_cancel" => [
      "Duolingo Super läuft bis Ende der Abrechnungsperiode",
      "Danach kostenlose Version",
      "Lernfortschritt, Streak und XP bleiben vollständig erhalten",
      "Werbung kehrt zurück und Herzlimits gelten wieder",
    ],
    "faq" => [
      ["Verliere ich meinen Duolingo-Streak bei der Kündigung?",
       "Nein — Streak, Lernfortschritt und alle Kursabschlüsse bleiben dauerhaft im kostenlosen Konto gespeichert."],
      ["Wie erhalte ich eine Erstattung für Duolingo Super?",
       "Auf dem iPhone über reportaproblem.apple.com. Auf Android über Google Play → Bestellverlauf → Erstattung anfordern."],
    ],
    "related" => ["chatgpt", "grammarly", "blinkist", "spotify"],
  ],

  "ebay-plus" => [
    "name"     => "eBay Plus",
    "emoji"    => "🛒",
    "color"    => "#E53238",
    "tagline"  => "eBay Plus kündigen — einfach im Kundenkonto",
    "about"    => "eBay Plus ist eBays Premium-Mitgliedschaft mit kostenlosem Versand, kostenlosen Rücksendungen und exklusiven Angeboten. Jederzeit online über Mein eBay kündbar.",
    "refund"   => "eBay Plus erstattet anteilig bei sofortiger Kündigung. Bei Fragen zum Erstattungsanspruch den eBay-Kundendienst kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser (ebay.de)",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>ebay.de</strong> und melde dich in deinem Konto an",
          "Fahre über <strong>Mein eBay</strong> in der oberen Navigation",
          "Klicke auf <strong>Konto</strong>",
          "Klicke auf <strong>eBay Plus verwalten</strong>",
          "Klicke auf <strong>Mitgliedschaft kündigen</strong>",
          "Bestätige die Kündigung",
        ],
        "note"  => "eBay Plus ist nicht über App-Store-Abonnements verwaltbar — immer direkt über ebay.de kündigen.",
      ],
    ],
    "after_cancel" => [
      "eBay-Plus-Vorteile laufen bis zum Ende der bezahlten Periode",
      "Danach entfallen kostenloser Versand und Rücksendungen",
      "Dein eBay-Konto bleibt aktiv",
      "Du kannst jederzeit wieder Mitglied werden",
    ],
    "faq" => [
      ["Was beinhaltet eBay Plus und was verliere ich bei der Kündigung?",
       "eBay Plus bietet kostenlosen Versand auf millionen Artikel, kostenlose Rücksendungen und exklusive Plus-Angebote. Nach der Kündigung entfallen diese Vorteile — reguläre Versandkosten gelten wieder."],
      ["Bekomme ich eine Erstattung von eBay Plus?",
       "eBay kann anteilig erstatten, wenn du sofort nach der Verlängerung kündigst und die Vorteile noch nicht genutzt hast. Kontaktiere den eBay-Kundendienst direkt."],
    ],
    "related" => ["amazon-prime", "netflix", "spotify", "hellofresh"],
  ],

  "blinkist" => [
    "name"     => "Blinkist Premium",
    "emoji"    => "📖",
    "color"    => "#2D9B30",
    "tagline"  => "Blinkist Premium kündigen — kostenlose Version bleibt aktiv",
    "about"    => "Blinkist bietet Buchzusammenfassungen (\"Blinks\") als Text und Audio für tausende Sachbücher. Die kostenlose Version mit täglich einem Blink bleibt nach der Kündigung erhalten.",
    "refund"   => "Blinkist erstattet Jahrespläne innerhalb von 14 Tagen nach dem Kauf, wenn die Inhalte kaum genutzt wurden. Support kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>blinkist.com</strong> und melde dich an",
          "Klicke oben rechts auf dein <strong>Profilbild</strong>",
          "Klicke auf <strong>Einstellungen</strong>",
          "Klicke auf <strong>Abonnement</strong>",
          "Klicke auf <strong>Abo kündigen</strong>",
          "Wähle einen Grund und bestätige",
        ],
        "note"  => "Dein kostenloses Konto bleibt aktiv und du kannst weiterhin den täglichen Gratis-Blink nutzen.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Blinkist</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Premium-Zugang läuft bis zum Ende der Abrechnungsperiode",
      "Danach kostenloser Tarif mit täglich einem Gratis-Blink",
      "Alle deine gespeicherten Blinks und Highlights bleiben erhalten",
    ],
    "faq" => [
      ["Was bleibt kostenlos nach der Kündigung von Blinkist Premium?",
       "Du behältst Zugang zum täglichen Gratis-Blink und kannst gespeicherte Blinks und Highlights weiterhin lesen. Das Premium-Bibliothekszugang endet."],
      ["Bekomme ich eine Erstattung von Blinkist?",
       "Blinkist erstattet Jahrespläne innerhalb von 14 Tagen nach dem Kauf, wenn die Inhalte kaum genutzt wurden. Kontaktiere support@blinkist.com mit deiner Bestell-ID."],
    ],
    "related" => ["audible", "spotify", "duolingo", "chatgpt"],
  ],

  "grammarly" => [
    "name"     => "Grammarly Premium",
    "emoji"    => "✏️",
    "color"    => "#15C39A",
    "tagline"  => "Grammarly Premium kündigen — kostenlose Version bleibt aktiv",
    "about"    => "Grammarly Premium fügt erweiterte Schreibvorschläge, Tonanalyse und Plagiatsprüfung hinzu. Nach der Kündigung wechselst du auf Grammarly Free — die Browser-Erweiterung und Grundfunktionen bleiben.",
    "refund"   => "Grammarly erstattet innerhalb von 10 Tagen nach einer Jahresgebühr, wenn Premium-Funktionen kaum genutzt wurden. Support kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>account.grammarly.com/subscribe</strong>",
          "Klicke auf <strong>Plan verwalten</strong>",
          "Klicke auf <strong>Abo kündigen</strong>",
          "Wähle einen Grund und klicke auf <strong>Weiter</strong>",
          "Klicke auf <strong>Mein Abo kündigen</strong>",
        ],
        "note"  => "Dein kostenloses Konto bleibt aktiv — die Grammarly-Browser-Erweiterung funktioniert weiterhin.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehe zu <strong>Einstellungen → [Dein Name] → Abonnements</strong>",
          "Tippe auf <strong>Grammarly</strong> und kündige",
        ],
        "note"  => "Nur wenn du über den App Store abonniert hast.",
      ],
    ],
    "after_cancel" => [
      "Grammarly Premium läuft bis zum Ende der Abrechnungsperiode",
      "Danach Wechsel auf Grammarly Free",
      "Grundlegende Rechtschreib- und Grammatikprüfungen bleiben kostenlos",
      "Erweiterte Vorschläge, Tonanalyse und Plagiatsprüfung werden deaktiviert",
    ],
    "faq" => [
      ["Verliere ich meine Grammarly-Daten nach der Kündigung?",
       "Nein — Dokumente und Schreibverlauf bleiben in deinem Konto gespeichert. Du verlierst nur Premium-Funktionen, nicht deine Daten."],
      ["Kann ich eine Erstattung für Grammarly Premium erhalten?",
       "Grammarly erstattet innerhalb von 10 Tagen für Jahrespläne, wenn Premium-Funktionen kaum genutzt wurden. Kontaktiere den Support unter grammarly.com/contact."],
    ],
    "related" => ["chatgpt", "canva", "adobe", "microsoft-365"],
  ],

  "amazon-music" => [
    "name"     => "Amazon Music Unlimited",
    "emoji"    => "🎶",
    "color"    => "#25D1DA",
    "tagline"  => "Amazon Music Unlimited kündigen — Prime Music bleibt erhalten",
    "about"    => "Amazon Music Unlimited ist Amazons Premium-Musiktarif. Das Kündigen entfernt Music Unlimited, aber Prime Music (in Amazon Prime enthalten) und gekaufte Musik bleiben.",
    "refund"   => "Amazon Music Unlimited folgt Amazons Standardrichtlinie — Support innerhalb von 3 Tagen bei unerwarteten Abbuchungen kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Webbrowser",
        "icon"  => "💻",
        "steps" => [
          "Gehe zu <strong>amazon.de/music/settings</strong> und melde dich an",
          "Suche &bdquo;Amazon Music Unlimited&ldquo; und klicke auf <strong>Abo kündigen</strong>",
          "Bestätige die Kündigung",
        ],
        "note"  => "Das Kündigen von Music Unlimited hat keinen Einfluss auf Amazon Prime.",
      ],
    ],
    "after_cancel" => [
      "Music-Unlimited-Zugang endet mit der Abrechnungsperiode",
      "Prime Music (in Prime enthalten) bleibt verfügbar",
      "Offline heruntergeladene Titel werden entfernt",
      "Gekaufte Musik und Playlists bleiben erhalten",
    ],
    "faq" => [
      ["Kündigt das Kündigen von Amazon Music Unlimited auch Amazon Prime?",
       "Nein — es sind separate Abonnements. Das Kündigen von Music Unlimited hat keinen Einfluss auf Amazon Prime oder Prime Music."],
      ["Was ist der Unterschied zwischen Prime Music und Amazon Music Unlimited?",
       "Prime Music ist in Amazon Prime enthalten und bietet ca. 2 Millionen Songs. Music Unlimited bietet 100+ Millionen Songs und ist ein separates Add-on."],
    ],
    "related" => ["spotify", "amazon-prime", "audible", "youtube-premium"],
  ],
];

// ── Routing ───────────────────────────────────────────────────────────────────
$slug = $_GET['app'] ?? '';
$app  = $apps_data[$slug] ?? null;

$all_apps = [
  ["Netflix","netflix"],["Amazon Prime","amazon-prime"],["Spotify","spotify"],
  ["Sky","sky"],["Disney+","disney-plus"],["Audible","audible"],
  ["HelloFresh","hellofresh"],["WOW","wow"],["DAZN","dazn"],
  ["Paramount+","paramount-plus"],["Crunchyroll","crunchyroll"],["Apple TV+","apple-tv"],
  ["Canva","canva"],["ChatGPT","chatgpt"],["McAfee","mcafee"],["Adobe","adobe"],
  ["YouTube Premium","youtube-premium"],["Norton","norton"],["Microsoft 365","microsoft-365"],
  ["Duolingo","duolingo"],["eBay Plus","ebay-plus"],["Blinkist","blinkist"],["Grammarly","grammarly"],
];

if (!$app) { http_response_code(404); }
$platforms_count = $app ? count($app['platforms']) : 0;
$platform_names  = $app ? implode(', ', array_map(fn($p) => $p['label'], $app['platforms'])) : '';
$title    = $app ? "{$app['name']} kündigen — Schritt-für-Schritt Anleitung" : "Seite nicht gefunden";
$desc     = $app ? "{$app['name']} auf {$platform_names} kündigen — Schritt für Schritt. {$app['tagline']}. Kostenlose Anleitung, dauert 2 Minuten." : "";
$canon    = $app ? "$site_url/de/$slug-kuendigen/" : "$site_url/de/";
$platforms = $app ? array_values($app['platforms']) : [];
$first_key = $app ? array_keys($app['platforms'])[0] : '';
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
  <?php if ($app): ?>
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <link rel="canonical" href="<?= $canon ?>">
  <link rel="alternate" hreflang="en" href="<?= $site_url ?>/how-to-cancel-<?= $slug ?>-subscription/">
  <link rel="alternate" hreflang="de" href="<?= $canon ?>">
  <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:url" content="<?= $canon ?>">
  <meta property="og:image" content="<?= $site_url ?>/icon_192.png?v=2">
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"HowTo",
    "inLanguage":"de",
    "name":"<?= htmlspecialchars($app['name']) ?> kündigen",
    "description":"<?= addslashes($desc) ?>",
    "totalTime":"PT2M",
    "tool":{"@type":"HowToTool","name":"Webbrowser oder Smartphone"},
    "step":[<?php
      $first = reset($app['platforms']);
      echo implode(',', array_map(fn($s,$i) =>
        '{"@type":"HowToStep","position":'.($i+1).',"name":"Schritt '.($i+1).'","text":'.json_encode(strip_tags($s)).'}',
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
      {"@type":"ListItem","position":1,"name":"Startseite","item":"<?= $site_url ?>/de/"},
      {"@type":"ListItem","position":2,"name":"<?= htmlspecialchars($app['name']) ?> kündigen","item":"<?= $canon ?>"}
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
    .header{background:#1a1f2e;color:#fff;padding:0 24px;height:54px;display:flex;align-items:center;gap:12px;position:sticky;top:0;z-index:100;box-shadow:0 2px 8px rgba(0,0,0,.25)}
    .logo{font-size:17px;font-weight:800;color:#fff;display:flex;align-items:center;gap:8px}
    .logo span{color:#ff5c5c}
    .back-btn{margin-left:auto;background:rgba(255,255,255,.1);color:rgba(255,255,255,.8);padding:7px 14px;border-radius:8px;font-size:13px;font-weight:600;display:flex;align-items:center;gap:6px}
    .back-btn:hover{background:rgba(255,255,255,.18);color:#fff}
    .wrap{max-width:760px;margin:0 auto;padding:0 20px}
    .breadcrumb{padding:14px 20px;max-width:760px;margin:0 auto;font-size:13px;color:#888;display:flex;align-items:center;gap:6px;flex-wrap:wrap}
    .breadcrumb a{color:#888}.breadcrumb a:hover{color:#ff5c5c}
    .app-hero{background:#fff;border-radius:20px;padding:28px;margin:0 20px 20px;max-width:760px;margin-left:auto;margin-right:auto;box-shadow:0 2px 12px rgba(0,0,0,.06)}
    .app-hero-top{display:flex;align-items:flex-start;gap:16px;margin-bottom:16px}
    .app-icon-big{width:64px;height:64px;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:36px;flex-shrink:0}
    .app-hero-info h1{font-size:22px;font-weight:800;color:#1a1f2e;margin-bottom:4px}
    .app-hero-info .tagline{font-size:14px;color:#666;line-height:1.5}
    .about-text{font-size:14px;color:#555;line-height:1.65;margin-top:8px}
    .tabs{display:flex;gap:8px;overflow-x:auto;padding:0;margin-bottom:20px;scrollbar-width:none}
    .tabs::-webkit-scrollbar{display:none}
    .tab-btn{background:#f4f6f9;border:1.5px solid #e0e3ed;color:#555;padding:8px 16px;border-radius:50px;font-size:13px;font-weight:600;cursor:pointer;white-space:nowrap;display:flex;align-items:center;gap:6px;transition:all .15s}
    .tab-btn.active{background:#1a1f2e;border-color:#1a1f2e;color:#fff}
    .tab-panel{display:none}.tab-panel.active{display:block}
    .steps-list{list-style:none;display:flex;flex-direction:column;gap:12px}
    .step-item{display:flex;gap:12px;align-items:flex-start}
    .step-num{width:28px;height:28px;border-radius:50%;background:#ff5c5c;color:#fff;font-size:13px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px}
    .step-text{font-size:15px;color:#1a1f2e;line-height:1.6;padding-top:3px}
    .step-note{background:#fff8e1;border:1.5px solid #ffe082;border-radius:10px;padding:12px 14px;font-size:13px;color:#7a6000;line-height:1.55;margin-top:14px}
    .card{background:#fff;border-radius:16px;padding:20px;margin-bottom:16px;box-shadow:0 1px 6px rgba(0,0,0,.06)}
    .card h2{font-size:16px;font-weight:800;color:#1a1f2e;margin-bottom:14px;display:flex;align-items:center;gap:8px}
    .checklist{list-style:none;display:flex;flex-direction:column;gap:9px}
    .checklist li{display:flex;gap:10px;align-items:flex-start;font-size:14px;color:#444;line-height:1.5}
    .checklist li::before{content:'✓';color:#22c55e;font-weight:800;flex-shrink:0;margin-top:1px}
    .refund-box{background:#fff7f0;border:1.5px solid #ffd4a3;border-radius:12px;padding:14px 16px;font-size:13px;color:#7a4500;line-height:1.6;margin-bottom:16px}
    .faq-item{border-bottom:1px solid #f0f0f0;padding:0}
    .faq-q{padding:16px 0;font-size:15px;font-weight:700;color:#1a1f2e;cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:8px;user-select:none}
    .faq-q .arr{font-size:18px;color:#999;transition:transform .2s;flex-shrink:0}
    .faq-q.open .arr{transform:rotate(180deg)}
    .faq-a{display:none;padding:0 0 16px;font-size:14px;color:#555;line-height:1.7}
    .related-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:10px}
    .rel-card{background:#fff;border:1.5px solid #e0e3ed;border-radius:12px;padding:14px;text-align:center;transition:all .15s}
    .rel-card:hover{border-color:#ff5c5c;transform:translateY(-2px)}
    .rel-card .r-icon{font-size:24px;margin-bottom:6px}
    .rel-card .r-name{font-size:12px;font-weight:700;color:#1a1f2e}
    .seo-block{background:#fff;border-radius:16px;padding:24px;margin:0 0 24px;font-size:14px;color:#555;line-height:1.8}
    .seo-block h2{font-size:18px;font-weight:800;color:#1a1f2e;margin-bottom:12px}
    .seo-block h3{font-size:15px;font-weight:700;color:#1a1f2e;margin:16px 0 8px}
    .app-promo-card{background:linear-gradient(135deg,#1a1f2e,#2d3561);border-radius:20px;padding:24px;margin-bottom:24px;display:flex;align-items:center;gap:16px;color:#fff;flex-wrap:wrap}
    .app-promo-card .ico{width:60px;height:60px;border-radius:14px;overflow:hidden;flex-shrink:0}
    .app-promo-card .ico img{width:100%;height:100%;object-fit:cover}
    .app-promo-card .info{flex:1;min-width:160px}
    .app-promo-card .tag{font-size:11px;font-weight:800;letter-spacing:.6px;color:#ff9999;text-transform:uppercase;margin-bottom:4px}
    .app-promo-card .title{font-size:16px;font-weight:800;margin-bottom:4px}
    .app-promo-card .sub{font-size:13px;opacity:.75}
    .dl-btn{background:#ff5c5c;color:#fff;padding:10px 20px;border-radius:50px;font-size:13px;font-weight:700;display:flex;align-items:center;gap:8px;white-space:nowrap;flex-shrink:0}
    .dl-btn svg{width:16px;height:16px}
    .request-card{background:#fff;border-radius:16px;padding:24px;margin-bottom:24px;border:1.5px solid #e0e3ed}
    .request-card h3{font-size:16px;font-weight:800;color:#1a1f2e;margin-bottom:4px}
    .request-card p{font-size:13px;color:#888;margin-bottom:16px}
    .request-card input{width:100%;padding:10px 14px;border:1.5px solid #e0e3ed;border-radius:10px;font-size:14px;margin-bottom:10px;outline:none;font-family:inherit}
    .request-card input:focus{border-color:#ff5c5c}
    .request-card button{background:#ff5c5c;color:#fff;border:none;padding:11px 24px;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;width:100%}
    .request-success{text-align:center;padding:12px;background:#f0fff4;border-radius:10px;font-size:14px;color:#15803d;font-weight:600}
    footer{background:#1a1f2e;color:rgba(255,255,255,.5);text-align:center;padding:24px 20px;font-size:13px;margin-top:40px}
    footer a{color:rgba(255,255,255,.5);margin:0 10px}footer a:hover{color:#fff}
    @media(max-width:600px){.app-hero{margin:0 12px 16px;padding:20px}.app-hero-info h1{font-size:19px}.related-grid{grid-template-columns:repeat(2,1fr)}.app-promo-card{padding:18px}}
  </style>
</head>
<body>

<header class="header">
  <a href="/de/" class="logo"><img src="/favicon.ico?v=2" width="22" height="22" alt=""> ✕ <span>AboKündigen</span></a>
  <a href="/de/" class="back-btn">← Alle Dienste</a>
</header>

<?php if (!$app): ?>
<div class="wrap" style="padding:60px 20px;text-align:center">
  <h1 style="font-size:28px;margin-bottom:12px">Seite nicht gefunden</h1>
  <p style="color:#666;margin-bottom:24px">Dieser Dienst ist noch nicht in unserer Datenbank.</p>
  <a href="/de/" style="background:#ff5c5c;color:#fff;padding:12px 24px;border-radius:12px;font-weight:700">← Zur Startseite</a>
</div>
<?php else: ?>

<nav class="breadcrumb">
  <a href="/de/">Startseite</a> <span>›</span>
  <span><?= htmlspecialchars($app['name']) ?> kündigen</span>
</nav>

<div class="app-hero">
  <div class="app-hero-top">
    <div class="app-icon-big" style="background:<?= $app['color'] ?>22"><?= $app['emoji'] ?></div>
    <div class="app-hero-info">
      <h1><?= htmlspecialchars($app['name']) ?> kündigen</h1>
      <div class="tagline">✓ <?= htmlspecialchars($app['tagline']) ?></div>
    </div>
  </div>
  <div class="about-text"><?= htmlspecialchars($app['about']) ?></div>
</div>

<div class="wrap">

  <?php if (!empty($app['refund'])): ?>
  <div class="refund-box">💰 <strong>Erstattungsrichtlinie:</strong> <?= htmlspecialchars($app['refund']) ?></div>
  <?php endif; ?>

  <div class="card">
    <h2>📋 Schritt-für-Schritt-Anleitung</h2>
    <?php if (count($app['platforms']) > 1): ?>
    <p style="font-size:13px;color:#888;margin-bottom:14px">Gerät wählen:</p>
    <div class="tabs">
      <?php foreach ($app['platforms'] as $key => $plat): ?>
      <button class="tab-btn <?= $key === $first_key ? 'active' : '' ?>" onclick="showTab('<?= $key ?>')">
        <?= $plat['icon'] ?> <?= htmlspecialchars($plat['label']) ?>
      </button>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php foreach ($app['platforms'] as $key => $plat): ?>
    <div class="tab-panel <?= $key === $first_key ? 'active' : '' ?>" id="tab-<?= $key ?>">
      <ol class="steps-list">
        <?php foreach ($plat['steps'] as $i => $step): ?>
        <li class="step-item">
          <div class="step-num"><?= $i+1 ?></div>
          <div class="step-text"><?= $step ?></div>
        </li>
        <?php endforeach; ?>
      </ol>
      <?php if (!empty($plat['note'])): ?>
      <div class="step-note">ℹ️ <?= $plat['note'] ?></div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>

  <?php if (!empty($app['after_cancel'])): ?>
  <div class="card">
    <h2>✅ Nach der Kündigung</h2>
    <ul class="checklist">
      <?php foreach ($app['after_cancel'] as $item): ?>
      <li><?= htmlspecialchars($item) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>

  <?php if (!empty($app['faq'])): ?>
  <div class="card">
    <h2>❓ Häufige Fragen</h2>
    <?php foreach ($app['faq'] as $faq): ?>
    <div class="faq-item">
      <div class="faq-q" onclick="this.classList.toggle('open');this.nextElementSibling.style.display=this.classList.contains('open')?'block':'none'">
        <?= htmlspecialchars($faq[0]) ?><span class="arr">⌄</span>
      </div>
      <div class="faq-a"><?= htmlspecialchars($faq[1]) ?></div>
    </div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <?php
  $related_apps = array_filter($all_apps, fn($a) => in_array($a[1], $app['related'] ?? []) && isset($apps_data[$a[1]]));
  if (!empty($related_apps)):
  ?>
  <div class="card">
    <h2>🔗 Weitere Anleitungen</h2>
    <div class="related-grid">
      <?php foreach ($related_apps as $rel): ?>
      <a href="/de/<?= $rel[1] ?>-kuendigen/" class="rel-card">
        <div class="r-icon"><?= $apps_data[$rel[1]]['emoji'] ?></div>
        <div class="r-name"><?= htmlspecialchars($rel[0]) ?> kündigen</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endif; ?>

  <div class="seo-block">
    <h2><?= htmlspecialchars($app['name']) ?> kündigen — alle Methoden im Überblick</h2>
    <p>Das Kündigen von <?= htmlspecialchars($app['name']) ?> ist einfacher als viele denken. Mit unserer Schritt-für-Schritt-Anleitung sparst du dir den Anruf beim Kundenservice und kannst dein Abo in wenigen Minuten beenden.</p>
    <h3>Kündigung auf dem iPhone</h3>
    <p>Auf dem iPhone kannst du alle über den App Store gebuchten Abonnements direkt in den <strong>Einstellungen → [Dein Name] → Abonnements</strong> verwalten. Dort findest du <?= htmlspecialchars($app['name']) ?> und kannst es mit wenigen Taps kündigen.</p>
    <h3>Was passiert nach der Kündigung?</h3>
    <p><?= htmlspecialchars($app['about']) ?></p>
  </div>

  <a href="https://apps.apple.com/us/app/cancel-subscriptions-app/id6759456590" class="app-promo-card" target="_blank" rel="noopener">
    <div class="ico"><img src="/icon_180.png?v=2" alt="Abonnements App"></div>
    <div class="info">
      <div class="tag">Kostenlose iPhone App</div>
      <div class="title">Alle Abos auf einen Blick</div>
      <div class="sub">Aktive Abonnements scannen &amp; kündigen</div>
    </div>
    <div class="dl-btn">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
      Kostenlos laden
    </div>
  </a>

  <?php
  $req_success = false;
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['req_service'])) {
    $svc = trim(strip_tags($_POST['req_service'] ?? ''));
    if ($svc) {
      $log = date('Y-m-d H:i:s') . " [DE] Anfrage: $svc\n";
      file_put_contents(dirname(__DIR__) . '/guide_requests.txt', $log, FILE_APPEND | LOCK_EX);
      @mail('hello@britetodo.com', "DE Anleitung-Anfrage: $svc", "Dienst: $svc\nSeite: /de/$slug-kuendigen/", "From: noreply@howtocancelsubscription.com");
      $req_success = true;
    }
  }
  ?>
  <div class="request-card">
    <?php if ($req_success): ?>
    <div class="request-success">✓ Danke! Wir fügen die Anleitung so bald wie möglich hinzu.</div>
    <?php else: ?>
    <h3>Deinen Dienst nicht gefunden?</h3>
    <p>Sag uns Bescheid — wir fügen ihn hinzu.</p>
    <form method="post">
      <input type="text" name="req_service" placeholder="Name des Dienstes (z. B. Netflix, Spotify...)" required>
      <button type="submit">Anfrage senden</button>
    </form>
    <?php endif; ?>
  </div>

</div>

<?php endif; ?>

<footer>
  <p>© <?= date('Y') ?> HowToCancelSubscription.com — Kostenlose Anleitungen zum Kündigen von Abonnements</p>
  <p style="margin-top:8px"><a href="/de/">Startseite</a><a href="/privacy/">Datenschutz</a></p>
</footer>

<script>
function showTab(key) {
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
  document.querySelector('[onclick="showTab(\''+key+'\')"]').classList.add('active');
  document.getElementById('tab-'+key).classList.add('active');
}
</script>
</body>
</html>
