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

  "kindle-unlimited" => [
    "name"     => "Kindle Unlimited",
    "emoji"    => "📚",
    "color"    => "#FF9900",
    "tagline"  => "Kindle Unlimited kündigen — schnell &amp; einfach",
    "about"    => "Kindle Unlimited (9,99 €/Monat) bietet unbegrenzten Zugriff auf &uuml;ber 4 Millionen E-Books, Audible-H&ouml;rb&uuml;cher und Magazine. Kündigung jederzeit &uuml;ber Ihr Amazon-Konto m&ouml;glich.",
    "refund"   => "Amazon erstattet Kindle Unlimited gew&ouml;hnlich nicht f&uuml;r den laufenden Monat. Bei versehentlicher Verl&auml;ngerung k&ouml;nnen Sie den Amazon-Kundendienst kontaktieren.",
    "platforms" => [
      "web" => [
        "label" => "Amazon-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>amazon.de</strong> und melden Sie sich an",
          "Klicken Sie auf <strong>Konto &amp; Listen → Meine Mitgliedschaften &amp; Abonnements</strong>",
          "Finden Sie <strong>Kindle Unlimited</strong> und klicken Sie auf <strong>Kündigen</strong>",
          "Best&auml;tigen Sie die K&uuml;ndigung",
        ],
        "note"  => "Alternativ: Einstellungen → Konto → Kindle Unlimited verwalten direkt in der Kindle-App.",
      ],
    ],
    "after_cancel" => [
      "Zugriff bleibt bis zum Ende des bezahlten Zeitraums bestehen",
      "Heruntergeladene Titel werden nach Ablauf gesperrt",
      "Gek&auml;ufte Kindle-B&uuml;cher bleiben dauerhaft erhalten",
      "Kostenloses Kindle-Programm f&uuml;r Prime-Mitglieder bleibt verf&uuml;gbar",
    ],
    "faq" => [
      ["Verliere ich meine heruntergeladenen Kindle-B&uuml;cher nach der K&uuml;ndigung?",
       "Nur Kindle Unlimited-Titel werden gesperrt. Gek&auml;ufte B&uuml;cher und Ihre pers&ouml;nlichen Dokumente bleiben immer auf Ihrem Kindle verf&uuml;gbar."],
      ["Kann ich Kindle Unlimited nach der K&uuml;ndigung erneut abonnieren?",
       "Ja, jederzeit. Amazon bietet neuen und zur&uuml;ckkehrenden Abonnenten h&auml;ufig Probeangebote an."],
    ],
    "related" => ["audible", "blinkist", "amazon-prime", "spotify"],
  ],

  "nordvpn" => [
    "name"     => "NordVPN",
    "emoji"    => "🔒",
    "color"    => "#4687FF",
    "tagline"  => "NordVPN kündigen und Geld zur&uuml;ckbekommen",
    "about"    => "NordVPN bietet 1-Monats-, 1-Jahres- und 2-Jahres-Pl&auml;ne an. Alle Pl&auml;ne beinhalten eine 30-Tage-Geld-zur&uuml;ck-Garantie — einfach den Support kontaktieren.",
    "refund"   => "NordVPN bietet eine 30-Tage-Geld-zur&uuml;ck-Garantie. Kontaktieren Sie den Support &uuml;ber den Live-Chat auf nordvpn.com innerhalb von 30 Tagen nach dem Kauf.",
    "platforms" => [
      "web" => [
        "label" => "NordVPN-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>nordvpn.com</strong> und melden Sie sich im My Nord-Konto an",
          "Klicken Sie auf <strong>Abrechnung</strong> im linken Men&uuml;",
          "Klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
          "F&uuml;r eine Erstattung: Starten Sie den <strong>Live-Chat</strong> auf nordvpn.com innerhalb von 30 Tagen",
        ],
        "note"  => "Die 30-Tage-Geld-zur&uuml;ck-Garantie gilt f&uuml;r alle NordVPN-Pl&auml;ne, auch f&uuml;r 2-Jahres-Abos.",
      ],
    ],
    "after_cancel" => [
      "VPN-Zugang bleibt bis zum Ablauf des bezahlten Zeitraums aktiv",
      "Erstattungen bei 30-Tage-Garantie in 5&ndash;10 Werktagen",
      "Ihr NordVPN-Konto bleibt f&uuml;r k&uuml;nftige Nutzung erhalten",
    ],
    "faq" => [
      ["Wie bekomme ich eine Erstattung von NordVPN?",
       "Starten Sie einen Live-Chat auf nordvpn.com innerhalb von 30 Tagen nach dem Kauf und beantragen Sie eine R&uuml;ckerstattung gem&auml;&szlig; der 30-Tage-Geld-zur&uuml;ck-Garantie."],
      ["Verl&auml;ngert sich NordVPN automatisch?",
       "Ja. Deaktivieren Sie die automatische Verl&auml;ngerung unter My Nord → Abrechnung → Abonnement-Einstellungen, oder kündigen Sie vor dem Verl&auml;ngerungsdatum."],
    ],
    "related" => ["surfshark", "expressvpn", "mcafee", "norton"],
  ],

  "parship" => [
    "name"     => "Parship",
    "emoji"    => "💑",
    "color"    => "#8B1A3A",
    "tagline"  => "Parship kündigen — Schritt f&uuml;r Schritt",
    "about"    => "Parship ist eine der f&uuml;hrenden Partnervermittlungen in Deutschland mit Premium-Abonnements ab ca. 34,90 €/Monat. Die K&uuml;ndigung muss schriftlich oder &uuml;ber das Kundenkonto erfolgen.",
    "refund"   => "Parship erstattet laufende Abonnementzeitr&auml;ume grunds&auml;tzlich nicht. Bei widerrechtlichen Abbuchungen wenden Sie sich an den Parship-Kundenservice unter 040&nbsp;609&nbsp;415&nbsp;90.",
    "platforms" => [
      "web" => [
        "label" => "Parship-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>parship.de</strong> und melden Sie sich an",
          "Klicken Sie oben rechts auf Ihr <strong>Profilbild → Einstellungen</strong>",
          "W&auml;hlen Sie <strong>Mitgliedschaft → Mitgliedschaft k&uuml;ndigen</strong>",
          "Folgen Sie den Anweisungen und best&auml;tigen Sie die K&uuml;ndigung",
          "Sie erhalten eine <strong>Best&auml;tigungs-E-Mail</strong> — bitte aufbewahren",
        ],
        "note"  => "Kündigen Sie mindestens 3 Tage vor Verl&auml;ngerungsdatum. Die K&uuml;ndigungsfrist betr&auml;gt laut AGB in der Regel eine Woche vor Ablauf.",
      ],
      "mail" => [
        "label" => "Per Post oder E-Mail",
        "icon"  => "✉️",
        "steps" => [
          "Schreiben Sie eine K&uuml;ndigung mit Name, Adresse, Geburtsdatum und Mitgliedsnummer",
          "Senden Sie diese per E-Mail an <strong>service@parship.de</strong>",
          "Oder per Einschreiben an: Parship GmbH, Speersort 10, 20095 Hamburg",
        ],
        "note"  => "Der schriftliche Weg ist empfehlenswert als zus&auml;tzliche Absicherung.",
      ],
    ],
    "after_cancel" => [
      "Premium-Zugang bleibt bis zum Ende der bezahlten Laufzeit aktiv",
      "Kostenloses Basisprofil bleibt nach Ablauf erhalten",
      "Nachrichten und Kontakte bleiben im Konto sichtbar",
    ],
    "faq" => [
      ["Was ist die K&uuml;ndigungsfrist bei Parship?",
       "Laut Parship-AGB m&uuml;ssen Sie mindestens eine Woche vor Ablauf k&uuml;ndigen. Es empfiehlt sich, fr&uuml;hzeitig zu k&uuml;ndigen, um eine automatische Verl&auml;ngerung zu vermeiden."],
      ["Kann ich Parship im 14-t&auml;gigen Widerrufsrecht k&uuml;ndigen?",
       "Ja. Bei Online-Abschl&uuml;ssen haben Sie in Deutschland 14 Tage Widerrufsrecht. Widerrufen Sie schriftlich per E-Mail an service@parship.de mit dem Satz: Hiermit widerrufe ich meinen Vertrag."],
    ],
    "related" => ["elitepartner", "tinder", "bumble", "netflix"],
  ],

  "elitepartner" => [
    "name"     => "ElitePartner",
    "emoji"    => "💎",
    "color"    => "#1A1A2E",
    "tagline"  => "ElitePartner kündigen — so geht es",
    "about"    => "ElitePartner ist eine Premium-Partneragentur in Deutschland f&uuml;r Akademiker und Berufst&auml;tige mit Abonnements ab ca. 39,90 €/Monat. K&uuml;ndigung per Online-Formular oder schriftlich.",
    "refund"   => "ElitePartner erstattet keine laufenden Abonnementzeitr&auml;ume. Bei Widerruf innerhalb von 14 Tagen nach Vertragsschluss erhalten Sie eine vollst&auml;ndige R&uuml;ckerstattung.",
    "platforms" => [
      "web" => [
        "label" => "ElitePartner-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>elitepartner.de</strong> und melden Sie sich an",
          "Klicken Sie auf <strong>Mein Profil → Einstellungen → Mitgliedschaft</strong>",
          "W&auml;hlen Sie <strong>Mitgliedschaft k&uuml;ndigen</strong>",
          "Best&auml;tigen Sie die K&uuml;ndigung und notieren Sie die Best&auml;tigungsnummer",
        ],
        "note"  => "Alternativ k&ouml;nnen Sie per E-Mail an service@elitepartner.de k&uuml;ndigen.",
      ],
    ],
    "after_cancel" => [
      "Premium-Zugang bleibt bis Laufzeitende aktiv",
      "Basismitgliedschaft bleibt kostenlos erhalten",
      "14-t&auml;giges Widerrufsrecht bei Online-Abschluss",
    ],
    "faq" => [
      ["Wie unterscheidet sich ElitePartner von Parship?",
       "ElitePartner richtet sich speziell an Akademiker und Berufst&auml;tige. Parship spricht ein breiteres Publikum an. Beide sind seri&ouml;se Premium-Partnerb&ouml;rsen mit &auml;hnlichen Preisen."],
      ["Kann ich ElitePartner nach dem 14-t&auml;gigen Widerrufsrecht k&uuml;ndigen?",
       "Ja, jederzeit. Die K&uuml;ndigung beendet die automatische Verl&auml;ngerung. Sie behalten den Zugang bis zum Ende der bezahlten Laufzeit."],
    ],
    "related" => ["parship", "tinder", "bumble", "spotify"],
  ],

  "playstation-plus" => [
    "name"     => "PlayStation Plus",
    "emoji"    => "🎮",
    "color"    => "#003087",
    "tagline"  => "PlayStation Plus kündigen — einfach erkl&auml;rt",
    "about"    => "PlayStation Plus (Essential 8,99 €/Monat, Extra 13,99 €/Monat, Premium 17,99 €/Monat) bietet Online-Multiplayer, monatliche Gratis-Spiele und einen Spielekatalog.",
    "refund"   => "Sony erstattet PS Plus grunds&auml;tzlich nicht f&uuml;r den laufenden Zeitraum. Bei unerwarteten Abbuchungen kontaktieren Sie den PlayStation-Support.",
    "platforms" => [
      "web" => [
        "label" => "PlayStation-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>playstation.com/de-de</strong> und melden Sie sich an",
          "Klicken Sie oben rechts auf Ihr <strong>Profilbild → Abonnements</strong>",
          "W&auml;hlen Sie <strong>PlayStation Plus</strong>",
          "Klicken Sie auf <strong>Automatische Verl&auml;ngerung deaktivieren</strong>",
          "Best&auml;tigen Sie die K&uuml;ndigung",
        ],
        "note"  => "Das Deaktivieren der automatischen Verl&auml;ngerung k&uuml;ndigt das Abonnement zum Ende des Abrechnungszeitraums.",
      ],
      "console" => [
        "label" => "PS4 / PS5-Konsole",
        "icon"  => "🕹️",
        "steps" => [
          "Gehen Sie zu <strong>Einstellungen → Benutzerverwaltung → Kontoinfo → PlayStation-Abonnements</strong>",
          "W&auml;hlen Sie <strong>PlayStation Plus</strong>",
          "W&auml;hlen Sie <strong>Automatische Verl&auml;ngerung deaktivieren</strong>",
        ],
        "note"  => "Funktioniert auf PS4 und PS5.",
      ],
    ],
    "after_cancel" => [
      "PS Plus-Zugang bleibt bis Ende des bezahlten Zeitraums aktiv",
      "Online-Multiplayer endet nach Ablauf",
      "Monatliche Gratis-Spiele werden gesperrt (bleiben bei Reaktivierung verf&uuml;gbar)",
    ],
    "faq" => [
      ["Verliere ich meine PS Plus-Gratis-Spiele bei der K&uuml;ndigung?",
       "Ja &mdash; PS Plus Essential-Spiele erfordern ein aktives Abonnement. Sie kehren in Ihre Bibliothek zur&uuml;ck, wenn Sie erneut abonnieren."],
      ["Kann ich PS Plus auf der PS5 k&uuml;ndigen?",
       "Auf der PS5: Einstellungen → Benutzer und Konten → Konto → Zahlung und Abonnements → Abonnements → Automatische Verl&auml;ngerung deaktivieren."],
    ],
    "related" => ["xbox-game-pass", "ea-play", "discord-nitro", "netflix"],
  ],

  "xbox-game-pass" => [
    "name"     => "Xbox Game Pass",
    "emoji"    => "🟢",
    "color"    => "#107C10",
    "tagline"  => "Xbox Game Pass kündigen — schnell &amp; einfach",
    "about"    => "Xbox Game Pass Ultimate (14,99 €/Monat) bietet &uuml;ber 100 Spiele, Xbox Live Gold und PC Game Pass. K&uuml;ndigung &uuml;ber Ihr Microsoft-Konto online.",
    "refund"   => "Microsoft erstattet Game Pass nach dem Start des Abrechnungszeitraums nicht. Bei unerwarteten Abbuchungen kontaktieren Sie den Microsoft-Support.",
    "platforms" => [
      "web" => [
        "label" => "Microsoft-Konto",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>account.microsoft.com/services</strong> und melden Sie sich an",
          "Finden Sie <strong>Xbox Game Pass</strong> und klicken Sie auf <strong>Verwalten</strong>",
          "Klicken Sie auf <strong>K&uuml;ndigen</strong>",
          "W&auml;hlen Sie einen Grund und klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "Microsoft bietet vor der K&uuml;ndigung h&auml;ufig einen Gratismonat oder Rabatt an &mdash; ablehnen, um zur Best&auml;tigung zu gelangen.",
      ],
      "console" => [
        "label" => "Xbox-Konsole",
        "icon"  => "🕹️",
        "steps" => [
          "Dr&uuml;cken Sie die <strong>Xbox-Taste → Profil &amp; System → Einstellungen → Konto → Abonnements</strong>",
          "W&auml;hlen Sie <strong>Xbox Game Pass</strong>",
          "W&auml;hlen Sie <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "Funktioniert auf Xbox One, Series S und Series X.",
      ],
    ],
    "after_cancel" => [
      "Game Pass-Zugang bleibt bis Ende des bezahlten Zeitraums aktiv",
      "Heruntergeladene Game Pass-Spiele werden nach Ablauf gesperrt",
      "Cloud-Spielst&auml;nde bleiben erhalten",
      "Separat gekaufte Spiele sind nicht betroffen",
    ],
    "faq" => [
      ["Verliere ich meine Spielst&auml;nde bei der K&uuml;ndigung?",
       "Nein &mdash; Cloud-Spielst&auml;nde bleiben erhalten. Sie k&ouml;nnen dort weiterspielen, wo Sie aufgeh&ouml;rt haben, wenn Sie erneut abonnieren."],
      ["Wie k&uuml;ndige ich Xbox Game Pass auf dem PC?",
       "&Ouml;ffnen Sie die Xbox-App auf Ihrem PC → klicken Sie auf Ihr Profil → Xbox Game Pass → Verwalten → K&uuml;ndigen. Oder &uuml;ber account.microsoft.com/services."],
    ],
    "related" => ["playstation-plus", "ea-play", "discord-nitro", "twitch"],
  ],

  "babbel" => [
    "name"     => "Babbel",
    "emoji"    => "🗣️",
    "color"    => "#43A047",
    "tagline"  => "Babbel-Abonnement kündigen",
    "about"    => "Babbel bietet Sprachkurse in 14 Sprachen f&uuml;r 12,99 €/Monat (monatlich) oder g&uuml;nstiger im Jahresabo. K&uuml;ndigung jederzeit &uuml;ber die Kontoeinstellungen m&ouml;glich.",
    "refund"   => "Babbel gew&auml;hrt Neukunden eine 20-t&auml;gige Geld-zur&uuml;ck-Garantie. Kontaktieren Sie support@babbel.com innerhalb von 20 Tagen nach dem ersten Kauf.",
    "platforms" => [
      "web" => [
        "label" => "Babbel-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>babbel.com</strong> und melden Sie sich an",
          "Klicken Sie oben rechts auf Ihren <strong>Namen → Konto</strong>",
          "Klicken Sie auf <strong>Abonnement</strong>",
          "Klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
          "Best&auml;tigen Sie die K&uuml;ndigung",
        ],
        "note"  => "F&uuml;r eine Erstattung innerhalb von 20 Tagen schreiben Sie an support@babbel.com.",
      ],
    ],
    "after_cancel" => [
      "Zugriff bis Ende des bezahlten Zeitraums",
      "Lernfortschritt und Streak bleiben erhalten",
      "Einige kostenlose Lektionen bleiben verf&uuml;gbar",
    ],
    "faq" => [
      ["Wie unterscheidet sich Babbel von Duolingo?",
       "Babbel konzentriert sich auf praxisnahe Gespr&auml;chsf&auml;higkeit mit Grammatikfokus. Duolingo ist kostenlos und spielerischer. Babbel wird oft f&uuml;r schnelleren Fortschritt im Alltag empfohlen."],
      ["Gilt die 20-Tage-Garantie auch bei Verl&auml;ngerung?",
       "Die Garantie gilt in der Regel nur f&uuml;r den Erstkauf. Bei Verl&auml;ngerungen wenden Sie sich an support@babbel.com &mdash; die Entscheidung liegt beim Support-Team."],
    ],
    "related" => ["duolingo", "blinkist", "audible", "amazon-prime"],
  ],

  "apple-music" => [
    "name"     => "Apple Music",
    "emoji"    => "🎵",
    "color"    => "#FC3C44",
    "tagline"  => "Apple Music kündigen — in wenigen Schritten",
    "about"    => "Apple Music kostet 10,99 €/Monat (Einzel) oder 16,99 €/Monat (Familie) und bietet &uuml;ber 100 Millionen Songs. K&uuml;ndigung &uuml;ber die Einstellungen Ihres Apple-Ger&auml;ts.",
    "refund"   => "Apple Music-Abonnements werden von Apple verwaltet. Erstattungen k&ouml;nnen &uuml;ber reportaproblem.apple.com beantragt werden &mdash; versehentliche Abbuchungen werden h&auml;ufig innerhalb von 48 Stunden genehmigt.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehen Sie zu <strong>Einstellungen → [Ihr Name] → Abonnements</strong>",
          "Tippen Sie auf <strong>Apple Music</strong>",
          "Tippen Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
          "Tippen Sie auf <strong>Best&auml;tigen</strong>",
        ],
        "note"  => "Wenn Apple Music nicht aufgelistet ist, sind Sie m&ouml;glicherweise &uuml;ber Familienfreigabe abonniert. Bitten Sie den Familienorganisator zu k&uuml;ndigen.",
      ],
      "mac" => [
        "label" => "Mac (Musik-App)",
        "icon"  => "🖥️",
        "steps" => [
          "&Ouml;ffnen Sie die <strong>Musik-App</strong>",
          "Klicken Sie auf <strong>Account → Mein Konto anzeigen</strong>",
          "Scrollen Sie zu <strong>Abonnements</strong> und klicken Sie auf <strong>Verwalten</strong>",
          "Klicken Sie auf <strong>Bearbeiten</strong> neben Apple Music",
          "Klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "Funktioniert auf Mac mit macOS Catalina oder h&ouml;her.",
      ],
    ],
    "after_cancel" => [
      "Apple Music-Zugang bis Ende des Abrechnungszeitraums",
      "Offline heruntergeladene Musik wird gesperrt",
      "Playlists bleiben erhalten, Titel als nicht verf&uuml;gbar markiert",
      "Separat gekaufte Musik bleibt immer zug&auml;nglich",
    ],
    "faq" => [
      ["Verliere ich meine Playlists bei der K&uuml;ndigung?",
       "Ihre Playlists bleiben in der Musik-App, die Titel sind jedoch nicht abspielbar. Bei erneutem Abonnieren sind sie wieder verf&uuml;gbar."],
      ["Wie k&uuml;ndige ich Apple One (das Apple Music enth&auml;lt)?",
       "Gehen Sie zu Einstellungen → [Ihr Name] → Abonnements → Apple One → Abonnement k&uuml;ndigen. Dies beendet das gesamte Bundle."],
    ],
    "related" => ["spotify", "amazon-prime", "audible", "youtube-premium"],
  ],

  "tinder" => [
    "name"     => "Tinder",
    "emoji"    => "🔥",
    "color"    => "#FE3C72",
    "tagline"  => "Tinder Gold oder Plus kündigen",
    "about"    => "Tinder Plus (ab 9,99 €/Monat), Tinder Gold und Platinum bieten unbegrenzte Likes, Passport und andere Premium-Funktionen. K&uuml;ndigung &uuml;ber App Store oder Google Play.",
    "refund"   => "Tinder-Abonnements werden &uuml;ber Apple oder Google abgewickelt. Erstattungen erfolgen &uuml;ber reportaproblem.apple.com (iOS) oder den Google Play-Erstattungsprozess.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Gehen Sie zu <strong>Einstellungen → [Ihr Name] → Abonnements</strong>",
          "Tippen Sie auf <strong>Tinder</strong>",
          "Tippen Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "Dies ist der prim&auml;re Weg zur K&uuml;ndigung auf dem iPhone.",
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "&Ouml;ffnen Sie den <strong>Google Play Store → Profil → Zahlungen &amp; Abonnements → Abonnements</strong>",
          "Tippen Sie auf <strong>Tinder</strong>",
          "Tippen Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "Google Play verwaltet Tinder-Abonnements auf Android.",
      ],
    ],
    "after_cancel" => [
      "Premium-Funktionen bis Ende des Abrechnungszeitraums verf&uuml;gbar",
      "Profil und Matches bleiben erhalten",
      "R&uuml;ckkehr zur kostenlosen Tinder-Version (begrenzte Likes)",
      "App-L&ouml;schung kündigt das Abonnement NICHT",
    ],
    "faq" => [
      ["K&uuml;ndigt das L&ouml;schen der Tinder-App mein Abonnement?",
       "Nein. Sie m&uuml;ssen &uuml;ber den App Store oder Google Play k&uuml;ndigen. Das L&ouml;schen der App beendet keine Abbuchungen."],
      ["Wie l&ouml;sche ich mein Tinder-Konto?",
       "In der Tinder-App: Einstellungen → Konto → Konto l&ouml;schen. Dies ist von der Abonnement-K&uuml;ndigung getrennt."],
    ],
    "related" => ["bumble", "parship", "elitepartner", "netflix"],
  ],

  "bumble" => [
    "name"     => "Bumble",
    "emoji"    => "🐝",
    "color"    => "#FFD01F",
    "tagline"  => "Bumble Boost oder Premium kündigen",
    "about"    => "Bumble Boost (ab ca. 14,99 €/Monat) und Bumble Premium bieten erweiterte Filter, unbegrenzte Swipes und die R&uuml;ckspul-Funktion. K&uuml;ndigung &uuml;ber App Store oder Google Play.",
    "refund"   => "Bumble-Abonnements werden von Apple oder Google verwaltet. Erstattungen &uuml;ber reportaproblem.apple.com (iOS) oder den Google Play-Erstattungsprozess.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "📱",
        "steps" => [
          "Gehen Sie zu <strong>Einstellungen → [Ihr Name] → Abonnements</strong>",
          "Tippen Sie auf <strong>Bumble</strong>",
          "Tippen Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "Nur diese Methode verwenden, wenn &uuml;ber den App Store abonniert.",
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "&Ouml;ffnen Sie den <strong>Google Play Store → Profil → Zahlungen &amp; Abonnements → Abonnements</strong>",
          "Tippen Sie auf <strong>Bumble</strong>",
          "Tippen Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "Google Play verwaltet Bumble-Abonnements auf Android.",
      ],
    ],
    "after_cancel" => [
      "Premium-Funktionen bis Ende des Abrechnungszeitraums",
      "Profil und Matches bleiben erhalten",
      "R&uuml;ckkehr zur kostenlosen Version",
    ],
    "faq" => [
      ["K&uuml;ndigt das L&ouml;schen der Bumble-App mein Abonnement?",
       "Nein. K&uuml;ndigen Sie &uuml;ber den App Store oder Google Play. Das L&ouml;schen der App allein stoppt keine Abbuchungen."],
      ["Wie unterscheidet sich Bumble von Tinder?",
       "Bei Bumble m&uuml;ssen Frauen bei heterosexuellen Matches zuerst schreiben. Bumble gilt als seri&ouml;ser und hat weniger Spam als Tinder."],
    ],
    "related" => ["tinder", "parship", "elitepartner", "spotify"],
  ],

  "ea-play" => [
    "name"     => "EA Play",
    "emoji"    => "🎮",
    "color"    => "#FF4747",
    "tagline"  => "EA Play kündigen",
    "about"    => "EA Play (4,99 €/Monat oder 29,99 €/Jahr) bietet Zugang zu EA-Spielen, fr&uuml;hen Testversionen und 10 % Rabatt. EA Play Pro (14,99 €/Monat) gibt vollen Zugang zu neuen EA-Titeln auf dem PC.",
    "refund"   => "EA bietet keine Erstattungen f&uuml;r EA Play-Abonnements an. Kontaktieren Sie den EA-Hilfe-Service unter help.ea.com f&uuml;r Abrechnungsanfragen.",
    "platforms" => [
      "web" => [
        "label" => "EA-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>ea.com</strong> und melden Sie sich an",
          "Gehen Sie zu <strong>account.ea.com → Abonnements</strong>",
          "Klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong> neben EA Play",
          "Best&auml;tigen Sie die K&uuml;ndigung",
        ],
        "note"  => "EA Play auf Xbox wird &uuml;ber Microsoft verwaltet &mdash; k&uuml;ndigen Sie unter account.microsoft.com/services.",
      ],
    ],
    "after_cancel" => [
      "EA Play-Zugang bis Ende des Abrechnungszeitraums",
      "Spiele-Vault-Titel werden nach Ablauf gesperrt",
      "Separat gekaufte Spiele sind nicht betroffen",
    ],
    "faq" => [
      ["Ist EA Play in Xbox Game Pass enthalten?",
       "Ja. EA Play ist in Xbox Game Pass Ultimate und PC Game Pass kostenlos enthalten. Sie ben&ouml;tigen kein separates EA Play-Abonnement, wenn Sie Game Pass Ultimate haben."],
      ["Wie k&uuml;ndige ich EA Play auf der PS5?",
       "Gehen Sie zu Einstellungen → Benutzerverwaltung → Kontoinfo → PlayStation-Abonnements → EA Play → K&uuml;ndigen."],
    ],
    "related" => ["xbox-game-pass", "playstation-plus", "discord-nitro", "netflix"],
  ],

  "apple-icloud" => [
    "name"     => "iCloud+",
    "emoji"    => "☁️",
    "color"    => "#1D6FF3",
    "tagline"  => "iCloud-Speicher kündigen — so geht es",
    "about"    => "iCloud+-Speicherpl&auml;ne kosten 0,99 €/Monat (50 GB), 2,99 €/Monat (200 GB) oder 9,99 €/Monat (2 TB). Downgrade auf den kostenlosen 5-GB-Plan jederzeit m&ouml;glich.",
    "refund"   => "Apple erstattet iCloud+-Speicherpl&auml;ne in der Regel nicht. Kontaktieren Sie den Apple-Support unter apple.com/de/support bei falschen Abbuchungen.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Gehen Sie zu <strong>Einstellungen → [Ihr Name] → iCloud</strong>",
          "Tippen Sie auf <strong>Speicher verwalten</strong>",
          "Tippen Sie auf <strong>Speicherplan &auml;ndern</strong>",
          "W&auml;hlen Sie <strong>Downgrade-Optionen</strong>",
          "W&auml;hlen Sie den <strong>kostenlosen 5-GB-Plan</strong>",
          "Best&auml;tigen Sie mit Ihrem Apple-ID-Passwort",
        ],
        "note"  => "Wenn Sie mehr als 5 GB gespeichert haben, werden Ihre Dateien nicht sofort gel&ouml;scht, aber neue Inhalte werden nicht mehr synchronisiert.",
      ],
    ],
    "after_cancel" => [
      "Speicherplan wird zum Ende des Abrechnungszeitraums herabgestuft",
      "Dateien werden NICHT sofort gel&ouml;scht",
      "iCloud Backup und Foto-Sync stoppen bei &Uuml;berschreitung von 5 GB",
      "Wichtige Dateien vorher lokal herunterladen",
    ],
    "faq" => [
      ["Werden meine Fotos gel&ouml;scht, wenn ich iCloud+ k&uuml;ndige?",
       "Nein, nicht sofort. Aber iCloud-Fotos synchronisiert keine neuen Bilder mehr, sobald Sie 5 GB &uuml;berschreiten. Laden Sie Fotos vorher auf Ihren Mac oder ein externes Laufwerk herunter."],
      ["Was ist der Unterschied zwischen iCloud und iCloud+?",
       "iCloud+ ist Apples kostenpflichtiges Speicher-Upgrade &uuml;ber die kostenlosen 5 GB hinaus. Es beinhaltet auch iCloud Private Relay und E-Mail-Adressen verbergen."],
    ],
    "related" => ["google-one", "dropbox", "apple-music", "microsoft-365"],
  ],

  "surfshark" => [
    "name"     => "Surfshark",
    "emoji"    => "🦈",
    "color"    => "#1B2B5A",
    "tagline"  => "Surfshark kündigen und Geld zur&uuml;ckbekommen",
    "about"    => "Surfshark VPN bietet 1-Monats-, 1-Jahres- und 2-Jahres-Pl&auml;ne mit einer 30-Tage-Geld-zur&uuml;ck-Garantie. K&uuml;ndigung &uuml;ber Ihr Konto oder per Live-Chat.",
    "refund"   => "Surfshark bietet eine 30-Tage-Geld-zur&uuml;ck-Garantie. Kontaktieren Sie den Support via Live-Chat auf surfshark.com innerhalb von 30 Tagen nach dem Kauf.",
    "platforms" => [
      "web" => [
        "label" => "Surfshark-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>surfshark.com</strong> und melden Sie sich an",
          "Klicken Sie auf <strong>Mein Konto → Abrechnung</strong>",
          "Klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
          "F&uuml;r eine Erstattung: <strong>Live-Chat</strong> auf surfshark.com innerhalb von 30 Tagen nutzen",
        ],
        "note"  => "Die 30-Tage-Garantie von Surfshark ist der einfachste Weg, eine vollst&auml;ndige R&uuml;ckerstattung zu erhalten.",
      ],
    ],
    "after_cancel" => [
      "VPN-Zugang bis Ende des bezahlten Zeitraums aktiv",
      "App verbindet sich nach Ablauf nicht mehr",
      "Erstattungen in 5&ndash;10 Werktagen",
    ],
    "faq" => [
      ["Wie bekomme ich eine Surfshark-Erstattung?",
       "Starten Sie einen Live-Chat auf surfshark.com innerhalb von 30 Tagen nach dem Kauf und beantragen Sie eine R&uuml;ckerstattung. Der Vorgang dauert 5&ndash;10 Werktage."],
      ["Verl&auml;ngert sich Surfshark automatisch?",
       "Ja. Deaktivieren Sie die automatische Verl&auml;ngerung unter Mein Konto → Abrechnung → Abonnement, oder k&uuml;ndigen Sie vor dem Verl&auml;ngerungsdatum."],
    ],
    "related" => ["nordvpn", "expressvpn", "mcafee", "norton"],
  ],

  "expressvpn" => [
    "name"     => "ExpressVPN",
    "emoji"    => "🔐",
    "color"    => "#DA3940",
    "tagline"  => "ExpressVPN kündigen und Geld zur&uuml;ckerhalten",
    "about"    => "ExpressVPN bietet 1-Monats-, 1-Jahres-Pl&auml;ne und alle beinhalten eine 30-Tage-Geld-zur&uuml;ck-Garantie. K&uuml;ndigung &uuml;ber Ihr Konto oder per Live-Chat.",
    "refund"   => "ExpressVPN bietet eine 30-Tage-Geld-zur&uuml;ck-Garantie. Kontaktieren Sie den Live-Chat auf expressvpn.com innerhalb von 30 Tagen.",
    "platforms" => [
      "web" => [
        "label" => "ExpressVPN-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>expressvpn.com</strong> und melden Sie sich an",
          "Klicken Sie auf Ihre <strong>Konto-E-Mail → Abonnement verwalten</strong>",
          "Klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
          "F&uuml;r Erstattung: <strong>Live-Chat</strong> auf expressvpn.com innerhalb von 30 Tagen nutzen",
        ],
        "note"  => "Die 30-Tage-Geld-zur&uuml;ck-Garantie gilt f&uuml;r alle ExpressVPN-Pl&auml;ne.",
      ],
    ],
    "after_cancel" => [
      "VPN-Zugang bis Ende des bezahlten Zeitraums aktiv",
      "Erstattungen &uuml;ber Live-Chat innerhalb von 30 Tagen",
    ],
    "faq" => [
      ["Wie erhalte ich eine Erstattung von ExpressVPN?",
       "Starten Sie einen Live-Chat auf expressvpn.com und beantragen Sie innerhalb von 30 Tagen eine R&uuml;ckerstattung. Wird in der Regel in 5&ndash;7 Werktagen bearbeitet."],
      ["Wie unterscheidet sich ExpressVPN von NordVPN?",
       "ExpressVPN ist schneller und einfacher auf Routern zu nutzen, aber teurer. NordVPN ist g&uuml;nstiger f&uuml;r langfristige Pl&auml;ne. Beide bieten 30-Tage-Geld-zur&uuml;ck-Garantien."],
    ],
    "related" => ["nordvpn", "surfshark", "mcafee", "norton"],
  ],

  "google-one" => [
    "name"     => "Google One",
    "emoji"    => "☁️",
    "color"    => "#4285F4",
    "tagline"  => "Google One kündigen",
    "about"    => "Google One (ab 1,99 €/Monat f&uuml;r 100 GB) erweitert Ihren Google-Speicher f&uuml;r Gmail, Drive und Fotos. K&uuml;ndigung jederzeit &uuml;ber Ihr Google-Konto m&ouml;glich.",
    "refund"   => "Google erstattet Google One in der Regel nicht f&uuml;r den laufenden Zeitraum. K&uuml;ndigen Sie vor dem Verl&auml;ngerungsdatum. Kontaktieren Sie den Google-Support bei falschen Abbuchungen.",
    "platforms" => [
      "web" => [
        "label" => "Google-Konto",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>one.google.com</strong> und melden Sie sich an",
          "Klicken Sie auf <strong>Einstellungen</strong> im linken Bereich",
          "Scrollen Sie zu <strong>Mitgliedschaft k&uuml;ndigen</strong>",
          "Klicken Sie auf <strong>Mitgliedschaft k&uuml;ndigen</strong> und best&auml;tigen Sie",
        ],
        "note"  => "Das K&uuml;ndigen setzt Ihren Speicher auf den kostenlosen 15-GB-Grenzwert zur&uuml;ck. Ihre Dateien werden nicht gel&ouml;scht, aber neue k&ouml;nnen nicht hochgeladen werden.",
      ],
    ],
    "after_cancel" => [
      "Speicherplan bis Ende des Abrechnungszeitraums aktiv",
      "Konto kehrt nach Ablauf zu kostenlosen 15 GB zur&uuml;ck",
      "Dateien &uuml;ber 15 GB werden schreibgesch&uuml;tzt &mdash; nicht gel&ouml;scht",
      "&Uuml;berz&auml;hlige Dateien l&ouml;schen oder herunterladen",
    ],
    "faq" => [
      ["Werden meine Google Fotos gel&ouml;scht, wenn ich Google One k&uuml;ndige?",
       "Nein. Fotos und Dateien werden nicht gel&ouml;scht. Wenn Sie jedoch mehr als 15 GB gespeichert haben, k&ouml;nnen Sie keine neuen Inhalte hochladen."],
      ["Kann ich Google One-Speicher mit der Familie teilen?",
       "Ja. Pl&auml;ne ab 200 GB k&ouml;nnen &uuml;ber Google Family mit bis zu 5 Familienmitgliedern geteilt werden. Das K&uuml;ndigen des Plans entzieht allen Mitgliedern den zus&auml;tzlichen Speicher."],
    ],
    "related" => ["apple-icloud", "dropbox", "microsoft-365", "amazon-prime"],
  ],

  "dropbox" => [
    "name"     => "Dropbox",
    "emoji"    => "📦",
    "color"    => "#0061FF",
    "tagline"  => "Dropbox Plus kündigen",
    "about"    => "Dropbox Plus (11,99 €/Monat) bietet 2 TB Speicher, Offline-Zugriff und 180-t&auml;gige Dateiwiederherstellung. K&uuml;ndigung &uuml;ber Ihre Dropbox-Kontoeinstellungen.",
    "refund"   => "Jahrespl&auml;ne k&ouml;nnen innerhalb von 30 Tagen nach Verl&auml;ngerung anteilig erstattet werden. Monatspl&auml;ne werden nicht erstattet. Kontaktieren Sie support@dropbox.com.",
    "platforms" => [
      "web" => [
        "label" => "Dropbox-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>dropbox.com</strong> und melden Sie sich an",
          "Klicken Sie oben rechts auf Ihren <strong>Avatar → Einstellungen</strong>",
          "Klicken Sie auf den Tab <strong>Plan</strong>",
          "Scrollen Sie nach unten und klicken Sie auf <strong>Plan k&uuml;ndigen</strong>",
          "Best&auml;tigen Sie die K&uuml;ndigung",
        ],
        "note"  => "Das Konto wechselt zum kostenlosen Plan (2 GB). Dateien &uuml;ber dem Limit werden schreibgesch&uuml;tzt, aber nicht gel&ouml;scht.",
      ],
    ],
    "after_cancel" => [
      "Bezahlte Funktionen bis Ende des Zeitraums aktiv",
      "Konto wechselt zum kostenlosen Plan (2 GB Speicher)",
      "Dateien &uuml;ber 2 GB werden schreibgesch&uuml;tzt",
      "Jahresplan innerhalb von 30 Tagen anteilig erstattungsf&auml;hig",
    ],
    "faq" => [
      ["Werden meine Dateien gel&ouml;scht, wenn ich Dropbox k&uuml;ndige?",
       "Nein. Ihre Dateien werden nicht gel&ouml;scht. Das Konto wechselt zum kostenlosen 2-GB-Plan. Dateien &uuml;ber dem Limit sind schreibgesch&uuml;tzt, bis Sie Speicherplatz freigeben oder erneut abonnieren."],
      ["Kann ich eine Dropbox-Erstattung erhalten?",
       "Jahrespl&auml;ne k&ouml;nnen innerhalb von 30 Tagen nach Verl&auml;ngerung anteilig erstattet werden. Wenden Sie sich an dropbox.com/support f&uuml;r Erstattungsanfragen."],
    ],
    "related" => ["google-one", "apple-icloud", "microsoft-365", "canva"],
  ],

  "discord-nitro" => [
    "name"     => "Discord Nitro",
    "emoji"    => "💬",
    "color"    => "#5865F2",
    "tagline"  => "Discord Nitro kündigen",
    "about"    => "Discord Nitro (9,99 €/Monat oder 99,99 €/Jahr) bietet animierte Avatare, benutzerdefinierte Emojis, HD-Video und Server-Boosts. K&uuml;ndigung &uuml;ber die Discord-App oder Website.",
    "refund"   => "Discord bietet eine anteilige Erstattung, wenn Sie innerhalb von 5 Tagen nach Kauf oder Verl&auml;ngerung k&uuml;ndigen. Kontaktieren Sie den Discord-Support unter discord.com/support.",
    "platforms" => [
      "web" => [
        "label" => "Discord App / Website",
        "icon"  => "💻",
        "steps" => [
          "&Ouml;ffnen Sie <strong>Discord</strong> und klicken Sie unten links auf das <strong>Zahnrad-Symbol (Benutzereinstellungen)</strong>",
          "Klicken Sie auf <strong>Abonnements</strong> im linken Men&uuml;",
          "Klicken Sie auf <strong>K&uuml;ndigen</strong> neben Discord Nitro",
          "Best&auml;tigen Sie die K&uuml;ndigung",
        ],
        "note"  => "Funktioniert in der Desktop-App und im Browser unter discord.com.",
      ],
    ],
    "after_cancel" => [
      "Nitro-Vorteile bis Ende des Abrechnungszeitraums aktiv",
      "Animierter Avatar wechselt zu statischem Bild",
      "Benutzerdefinierte Emojis werden serverübergreifend deaktiviert",
      "Server-Boosts durch Nitro werden entfernt",
    ],
    "faq" => [
      ["Was passiert mit meinen Server-Boosts, wenn ich Nitro k&uuml;ndige?",
       "Server-Boosts, die durch Ihr Nitro-Abonnement bereitgestellt wurden, werden nach Ablauf entfernt. Server k&ouml;nnten Vorteile wie bessere Audioqualit&auml;t oder mehr Emoji-Slots verlieren."],
      ["Was ist der Unterschied zwischen Nitro und Nitro Basic?",
       "Nitro Basic (2,99 €/Monat) enth&auml;lt gr&ouml;&szlig;ere Uploads und animierte Avatare, aber keine Server-Boosts oder HD-Streaming. Vollst&auml;ndiges Nitro (9,99 €/Monat) enth&auml;lt 2 Server-Boosts und HD-Video."],
    ],
    "related" => ["xbox-game-pass", "playstation-plus", "ea-play", "spotify"],
  ],

  "linkedin" => [
    "name"     => "LinkedIn Premium",
    "emoji"    => "💼",
    "color"    => "#0A66C2",
    "tagline"  => "LinkedIn Premium kündigen",
    "about"    => "LinkedIn Premium (ab 29,99 €/Monat) bietet erweiterte Jobsuche, InMail-Nachrichten und Einblicke in Profilbesucher. K&uuml;ndigung &uuml;ber Ihre LinkedIn-Kontoeinstellungen.",
    "refund"   => "LinkedIn erstattet keine unbenutzten Abonnementzeitr&auml;ume. Bei unerwarteten Abbuchungen wenden Sie sich an den LinkedIn-Support unter linkedin.com/help.",
    "platforms" => [
      "web" => [
        "label" => "LinkedIn-Website",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>linkedin.com</strong> und melden Sie sich an",
          "Klicken Sie auf Ihr <strong>Profilfoto → Einstellungen &amp; Datenschutz</strong>",
          "Klicken Sie auf <strong>Abonnements &amp; Zahlungen</strong>",
          "Klicken Sie unter Premium-Abonnements auf <strong>Abonnement verwalten</strong>",
          "Klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "LinkedIn bietet vor der K&uuml;ndigung h&auml;ufig g&uuml;nstigere Pl&auml;ne an &mdash; scrollen Sie an den Angeboten vorbei zum K&uuml;ndigungslink.",
      ],
    ],
    "after_cancel" => [
      "Premium-Zugang bis Ende des Abrechnungszeitraums",
      "Profil kehrt zur kostenlosen LinkedIn-Version zur&uuml;ck",
      "InMail-Guthaben verf&auml;llt bei K&uuml;ndigung",
      "Verbindungen, Beitr&auml;ge und Profildaten bleiben erhalten",
    ],
    "faq" => [
      ["Verschwinden meine LinkedIn-Daten nach der K&uuml;ndigung von Premium?",
       "Nein. Alle Verbindungen, Nachrichten und Profilinformationen bleiben erhalten. Nur Premium-Funktionen wie InMail und Profilbesucher werden entfernt."],
      ["Wie k&uuml;ndige ich LinkedIn Sales Navigator?",
       "Gehen Sie zu linkedin.com/sales → Admin → Kontoeinstellungen → Abonnement k&uuml;ndigen. Sales Navigator-K&uuml;ndigungen m&uuml;ssen von einem Konto-Admin durchgef&uuml;hrt werden."],
    ],
    "related" => ["zoom", "dropbox", "microsoft-365", "canva"],
  ],

  "zoom" => [
    "name"     => "Zoom",
    "emoji"    => "📹",
    "color"    => "#2D8CFF",
    "tagline"  => "Zoom Pro kündigen",
    "about"    => "Zoom Pro (13,99 €/Monat) hebt das 40-Minuten-Limit auf und f&uuml;gt 5 GB Cloud-Aufzeichnung hinzu. K&uuml;ndigung &uuml;ber das Zoom-Kontoportal &mdash; Sie behalten Pro bis zum Ende des Zeitraums.",
    "refund"   => "Zoom bietet eine anteilige Erstattung, wenn Sie einen Jahresplan vorzeitig k&uuml;ndigen. Monatspl&auml;ne werden nicht erstattet. Kontaktieren Sie zoom.us/billing.",
    "platforms" => [
      "web" => [
        "label" => "Zoom-Webportal",
        "icon"  => "💻",
        "steps" => [
          "Gehen Sie zu <strong>zoom.us</strong> und melden Sie sich in Ihrem Konto an",
          "Klicken Sie auf <strong>Admin → Kontoverwaltung → Abrechnung</strong>",
          "Oder gehen Sie direkt zu <strong>zoom.us/billing</strong>",
          "Finden Sie Ihren aktuellen Plan und klicken Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
          "W&auml;hlen Sie einen Grund und best&auml;tigen Sie",
        ],
        "note"  => "Wenn Sie &uuml;ber Apple App Store oder Google Play abonniert haben, k&uuml;ndigen Sie dort.",
      ],
    ],
    "after_cancel" => [
      "Pro-Funktionen bis Ende des Abrechnungszeitraums aktiv",
      "Meetings kehren nach Ablauf zum 40-Minuten-Limit zur&uuml;ck",
      "Cloud-Aufzeichnungen werden 30 Tage nach Downgrade gel&ouml;scht",
      "Aufzeichnungen vorher herunterladen",
    ],
    "faq" => [
      ["Kann ich Zoom kostenlos nutzen, nachdem ich Pro gek&uuml;ndigt habe?",
       "Ja. Zoom hat einen kostenlosen Plan mit 100 Teilnehmern und 40-Minuten-Limit f&uuml;r Gruppengespr&auml;che. 1-zu-1-Gespr&auml;che bleiben unbegrenzt."],
      ["Was passiert mit meinen Zoom-Cloud-Aufzeichnungen bei K&uuml;ndigung?",
       "Cloud-Aufzeichnungen werden 30 Tage nach Ablauf Ihres Pro-Abonnements gel&ouml;scht. Laden Sie ben&ouml;tigte Aufzeichnungen vorher herunter."],
    ],
    "related" => ["microsoft-365", "dropbox", "linkedin", "canva"],
  ],

  "magenta-tv" => [
    "name"     => "MagentaTV",
    "emoji"    => "📺",
    "color"    => "#E20074",
    "tagline"  => "MagentaTV k&uuml;ndigen",
    "about"    => "MagentaTV ist der Streamingdienst der Deutschen Telekom mit Live-TV, Mediathek und Zusatzpaketen (ab ca. 10 &euro;/Monat). K&uuml;ndigen Sie online, &uuml;ber die App oder telefonisch.",
    "refund"   => "MagentaTV bietet in der Regel keine R&uuml;ckerstattung f&uuml;r laufende Abrechnungsperioden. Achten Sie auf die Mindestvertragslaufzeit (oft 12 Monate).",
    "platforms" => [
      "web" => [
        "label" => "Telekom Kundencenter",
        "icon"  => "💻",
        "steps" => [
          "Melden Sie sich auf <strong>telekom.de/kundencenter</strong> an",
          "W&auml;hlen Sie <strong>Meine Produkte &amp; Dienste</strong>",
          "Klicken Sie auf <strong>MagentaTV</strong>",
          "W&auml;hlen Sie <strong>K&uuml;ndigen</strong>",
          "Best&auml;tigen Sie die K&uuml;ndigung",
        ],
        "note"  => "Halten Sie Ihre Kundennummer bereit. Die K&uuml;ndigungsfrist betr&auml;gt in der Regel einen Monat zum Ende der Mindestlaufzeit.",
      ],
      "iphone" => [
        "label" => "Telefonisch",
        "icon"  => "📞",
        "steps" => [
          "Rufen Sie die Telekom-Hotline an: <strong>0800 33 0000</strong> (kostenlos, Mo&ndash;Fr 7&ndash;22 Uhr, Sa 8&ndash;20 Uhr)",
          "W&auml;hlen Sie den Bereich <strong>MagentaTV / Festnetz</strong>",
          "Beantragen Sie die K&uuml;ndigung Ihres MagentaTV-Abonnements",
          "Lassen Sie sich eine schriftliche Best&auml;tigung zusenden",
        ],
      ],
    ],
    "after_cancel" => [
      "Zugang bis Ende der bezahlten Laufzeit",
      "Pr&uuml;fen Sie die Mindestvertragslaufzeit (oft 12 Monate)",
      "Zus&auml;tzliche Pakete (Filme, Sport) separat k&uuml;ndigen",
      "Telekom-Router und Hardware nach K&uuml;ndigung zur&uuml;cksenden",
    ],
    "faq" => [
      ["Wie lange ist die K&uuml;ndigungsfrist bei MagentaTV?",
       "Die K&uuml;ndigungsfrist bei MagentaTV betr&auml;gt einen Monat zum Vertragsende. Bei 12-monatiger Mindestlaufzeit m&uuml;ssen Sie sp&auml;testens einen Monat vor Ablauf k&uuml;ndigen, sonst verl&auml;ngert sich der Vertrag automatisch um 12 Monate."],
      ["Kann ich MagentaTV ohne Telekom-Vertrag nutzen?",
       "Ja &mdash; MagentaTV Flex ist ohne Mindestlaufzeit verf&uuml;gbar (monatlich k&uuml;ndbar) und funktioniert auch ohne Telekom-Internetanschluss. Die Grundpakete beginnen ab ca. 10 &euro;/Monat."],
      ["Was ist der Unterschied zwischen MagentaTV und WOW?",
       "MagentaTV ist der Dienst der Deutschen Telekom mit Live-TV und linearem Fernsehen. WOW (ehemals Sky Ticket) fokussiert auf Premium-Serien und Sport ohne lineare TV-Kan&auml;le."],
    ],
    "related" => ["netflix", "sky", "disney-plus", "wow"],
  ],

  "deezer" => [
    "name"     => "Deezer",
    "emoji"    => "🎵",
    "color"    => "#FF0092",
    "tagline"  => "Deezer k&uuml;ndigen",
    "about"    => "Deezer Premium kostet ca. 10,99 &euro;/Monat (Family: 14,99 &euro;/Monat f&uuml;r bis zu 6 Nutzer). K&uuml;ndigen Sie online &uuml;ber Ihr Deezer-Konto.",
    "refund"   => "Deezer erstattet in der Regel keine laufenden Abrechnungsperioden. K&uuml;ndigen Sie vor dem Verl&auml;ngerungsdatum.",
    "platforms" => [
      "web" => [
        "label" => "deezer.com",
        "icon"  => "💻",
        "steps" => [
          "Melden Sie sich auf <strong>deezer.com</strong> an",
          "Klicken Sie oben rechts auf Ihr <strong>Profilbild</strong>",
          "W&auml;hlen Sie <strong>Mein Konto</strong>",
          "Klicken Sie auf <strong>Abonnement verwalten</strong>",
          "W&auml;hlen Sie <strong>Abonnement k&uuml;ndigen</strong> und best&auml;tigen Sie",
        ],
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "&Ouml;ffnen Sie <strong>Einstellungen &rarr; [Ihr Name] &rarr; Abonnements</strong>",
          "Tippen Sie auf <strong>Deezer</strong>",
          "Tippen Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
        "note"  => "Falls Sie &uuml;ber den App Store abonniert haben, k&uuml;ndigen Sie dort.",
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "&Ouml;ffnen Sie <strong>Google Play &rarr; Abonnements</strong>",
          "Tippen Sie auf <strong>Deezer</strong>",
          "Tippen Sie auf <strong>Abonnement k&uuml;ndigen</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Premium-Zugang bis Ende der bezahlten Periode",
      "Offline-Downloads werden nach Ablauf gel&ouml;scht",
      "Ihre Playlists und Favoriten bleiben im kostenlosen Konto erhalten",
      "Deezer kostenlos (mit Werbung) bleibt verf&uuml;gbar",
    ],
    "faq" => [
      ["Bleibt meine Musik nach der K&uuml;ndigung von Deezer Premium erhalten?",
       "Ihre Playlists und gespeicherten Alben bleiben in Ihrem kostenlosen Konto erhalten, aber Sie k&ouml;nnen sie nicht mehr offline h&ouml;ren. Offline-Downloads werden nach Ablauf des Abonnements entfernt."],
      ["Was ist der Unterschied zwischen Deezer und Spotify?",
       "Beide bieten &auml;hnliche Musikbibliotheken. Deezer bietet HiFi-Audio (FLAC) als Zusatzoption und ist in Deutschland etwas g&uuml;nstiger. Spotify hat bessere personalisierte Empfehlungen (Discover Weekly, Radar der Neuheiten)."],
    ],
    "related" => ["spotify", "amazon-music", "apple-music", "youtube-premium"],
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
  ["Kindle Unlimited","kindle-unlimited"],["NordVPN","nordvpn"],
  ["Parship","parship"],["ElitePartner","elitepartner"],
  ["PlayStation Plus","playstation-plus"],["Xbox Game Pass","xbox-game-pass"],
  ["Babbel","babbel"],["Apple Music","apple-music"],
  ["Discord Nitro","discord-nitro"],["Google One","google-one"],
  ["Dropbox","dropbox"],["Tinder","tinder"],["EA Play","ea-play"],
  ["iCloud+","apple-icloud"],["Surfshark","surfshark"],["Bumble","bumble"],
  ["LinkedIn","linkedin"],["Zoom","zoom"],["ExpressVPN","expressvpn"],
  ["MagentaTV","magenta-tv"],["Deezer","deezer"],
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
