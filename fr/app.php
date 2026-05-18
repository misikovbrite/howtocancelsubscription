<?php
$site_url = "https://howtocancelsubscription.com";

// ── Données des applications ──────────────────────────────────────────────────
$apps_data = [
  "canal-plus" => [
    "name"     => "Canal+",
    "emoji"    => "📺",
    "color"    => "#000000",
    "tagline"  => "Résilier Canal+ en ligne — sans appeler le service client",
    "about"    => "Canal+ est la chaîne payante française. Vous pouvez résilier en ligne, par téléphone ou par courrier recommandé avec accusé de réception.",
    "refund"   => "Canal+ peut rembourser au prorata si résiliation dans les 14 jours suivant la souscription (délai légal de rétractation). Passé ce délai, vous conservez l'accès jusqu'à la fin de la période payée.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>canalplus.com</strong> et connectez-vous",
          "Cliquez sur <strong>Mon Compte</strong> en haut à droite",
          "Cliquez sur <strong>Gérer mon abonnement</strong>",
          "Cliquez sur <strong>Résilier mon abonnement</strong>",
          "Suivez les instructions et cliquez sur <strong>Confirmer la résiliation</strong>",
          "Conservez l'e-mail de confirmation reçu",
        ],
        "note"  => "La résiliation en ligne est la méthode la plus rapide. Si vous ne trouvez pas l'option, appelez le 0800 130 060 (gratuit, lundi–vendredi 8h–20h).",
      ],
      "phone" => [
        "label" => "Téléphone",
        "icon"  => "📞",
        "steps" => [
          "Appelez le <strong>0800 130 060</strong> (appel gratuit)",
          "Horaires : <strong>lundi au vendredi, 8h à 20h</strong>",
          "Dites au conseiller que vous souhaitez <strong>résilier votre abonnement</strong>",
          "Communiquez votre numéro d'abonné ou vos informations personnelles pour vérification",
          "Demandez un <strong>numéro de confirmation</strong> de résiliation",
          "Notez la date effective de résiliation communiquée",
        ],
        "note"  => "Conservez le numéro de confirmation. Si vous avez souscrit en ligne, la résiliation en ligne est souvent plus rapide.",
      ],
    ],
    "after_cancel" => [
      "Vous conservez l'accès à Canal+ jusqu'à la fin de la période payée",
      "L'application Canal+ et Canal+ Go ne seront plus accessibles à l'expiration",
      "Votre décodeur peut être restitué selon les conditions de votre contrat",
      "Vous pouvez vous réabonner à tout moment sur canalplus.com",
    ],
    "faq" => [
      ["Quel est le délai de rétractation pour Canal+ ?",
       "Vous disposez de 14 jours à compter de la souscription pour vous rétracter sans frais, conformément à la loi française. Passé ce délai, vous devez respecter les conditions de votre contrat (engagement éventuel)."],
      ["Puis-je résilier Canal+ si je suis encore engagé ?",
       "Si vous êtes en période d'engagement (12 ou 24 mois), des frais de résiliation anticipée peuvent s'appliquer. Vérifiez votre contrat ou appelez le 0800 130 060 pour connaître le montant exact."],
      ["Que devient Canal+ Go après la résiliation ?",
       "L'accès à Canal+ Go (application de streaming) s'arrête en même temps que votre abonnement principal. Téléchargez vos contenus favoris avant la date d'expiration si vous souhaitez les conserver."],
    ],
    "related" => ["netflix", "disney-plus", "amazon-prime", "deezer"],
  ],

  "free" => [
    "name"     => "Free (Freebox / Free Mobile)",
    "emoji"    => "📡",
    "color"    => "#CD0000",
    "tagline"  => "Résilier Free Freebox ou Free Mobile en ligne",
    "about"    => "Free propose des abonnements Freebox (internet et TV) et Free Mobile. La résiliation est possible en ligne sur espace.free.fr pour la Freebox et sur mobile.free.fr pour Free Mobile.",
    "refund"   => "Remboursement au prorata pour les mois non utilisés sur certains forfaits. Des frais de résiliation sont possibles selon votre contrat. La box doit être retournée sous peine de pénalité.",
    "platforms" => [
      "web" => [
        "label" => "Freebox — Web",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>espace.free.fr</strong> et connectez-vous",
          "Cliquez sur <strong>Mon Abonnement</strong> dans le menu",
          "Cliquez sur <strong>Résilier mon abonnement Freebox</strong>",
          "Suivez les étapes et confirmez la résiliation",
          "Pour sécuriser votre demande, il est recommandé d'envoyer également une <strong>lettre recommandée avec accusé de réception</strong> à Free",
        ],
        "note"  => "Votre box Freebox doit être retournée à Free dans les délais indiqués, sous peine de frais. Conservez le bon de retour.",
      ],
      "mobile" => [
        "label" => "Free Mobile — Web",
        "icon"  => "📱",
        "steps" => [
          "Rendez-vous sur <strong>mobile.free.fr</strong> et connectez-vous",
          "Accédez à <strong>Mon compte</strong>",
          "Cliquez sur <strong>Gérer mon abonnement</strong>",
          "Cliquez sur <strong>Résilier mon forfait</strong>",
          "Confirmez votre demande de résiliation",
        ],
        "note"  => "La résiliation Free Mobile prend effet sous 10 jours. Votre numéro peut être conservé (portabilité) en indiquant votre RIO à votre nouvel opérateur.",
      ],
    ],
    "after_cancel" => [
      "La résiliation Freebox prend effet à la fin de votre préavis contractuel",
      "La résiliation Free Mobile prend effet sous 10 jours ouvrés",
      "Vous devez retourner la box Freebox sous peine de pénalité",
      "Votre numéro de téléphone peut être conservé via la portabilité (RIO)",
    ],
    "faq" => [
      ["Quel est le préavis pour résilier la Freebox ?",
       "Chez Free, il n'y a pas de préavis pour la Freebox si vous n'êtes plus en période d'engagement. La résiliation est effective à la fin du mois en cours selon les conditions du contrat. Hors engagement, la résiliation est sans frais."],
      ["Dois-je retourner ma box Freebox ?",
       "Oui — la Freebox doit être retournée à Free dans les délais indiqués dans votre contrat (généralement 15 à 30 jours). Free fournit une étiquette de retour. Sans retour, des frais peuvent être prélevés."],
      ["Puis-je garder mon numéro Free Mobile en changeant d'opérateur ?",
       "Oui — demandez votre RIO (Relevé d'Identité Opérateur) en composant le 3179 depuis votre téléphone Free Mobile. Communiquez ce code à votre nouvel opérateur qui effectuera la portabilité et résiliera Free Mobile automatiquement."],
    ],
    "related" => ["sfr", "orange", "canal-plus", "deezer"],
  ],

  "sfr" => [
    "name"     => "SFR",
    "emoji"    => "📶",
    "color"    => "#E2001A",
    "tagline"  => "Résilier SFR mobile ou box internet en ligne",
    "about"    => "SFR propose des offres mobile, box internet et TV. La résiliation est possible en ligne via l'espace client ou par téléphone au 1023.",
    "refund"   => "Remboursement des mois restants en cas de résiliation dans les conditions contractuelles. Des frais de résiliation anticipée s'appliquent si vous êtes encore en période d'engagement.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>sfr.fr</strong> et connectez-vous à votre <strong>Espace Client</strong>",
          "Cliquez sur <strong>Gérer mes offres</strong>",
          "Sélectionnez l'offre que vous souhaitez résilier",
          "Cliquez sur <strong>Résilier</strong>",
          "Suivez les étapes et cliquez sur <strong>Confirmer la résiliation</strong>",
          "Conservez l'e-mail ou le SMS de confirmation",
        ],
        "note"  => "Si vous souhaitez conserver votre numéro mobile, demandez votre RIO au 3179 avant de résilier et communiquez-le à votre nouvel opérateur.",
      ],
      "phone" => [
        "label" => "Téléphone",
        "icon"  => "📞",
        "steps" => [
          "Appelez le <strong>1023</strong> (service client SFR)",
          "Dites que vous souhaitez <strong>résilier votre abonnement</strong>",
          "Vérifiez votre identité avec les informations demandées",
          "Demandez un <strong>numéro de dossier</strong> ou une confirmation écrite",
          "Notez la date effective de résiliation",
        ],
        "note"  => "SFR peut vous proposer des offres de rétention. Restez ferme si vous souhaitez bien résilier.",
      ],
    ],
    "after_cancel" => [
      "La résiliation prend effet à la fin de votre préavis ou de votre engagement",
      "Votre box SFR doit être retournée si votre contrat l'exige",
      "Votre numéro mobile peut être conservé via la portabilité (RIO au 3179)",
      "Vous recevrez une confirmation de résiliation par e-mail ou courrier",
    ],
    "faq" => [
      ["Quel est le préavis de résiliation chez SFR ?",
       "Pour les forfaits mobiles SFR, le préavis est généralement de 10 jours. Pour la box internet, il peut être de 30 jours selon le contrat. Vérifiez les conditions particulières de votre offre dans votre espace client."],
      ["Puis-je résilier SFR box avant la fin de l'engagement ?",
       "Oui, mais des frais de résiliation anticipée s'appliquent si vous êtes encore en période d'engagement (12 ou 24 mois). Le montant correspond aux mensualités restantes, parfois avec une réduction. Consultez votre contrat pour le montant exact."],
      ["Comment résilier SFR RED ?",
       "SFR RED se résilie de la même façon, en ligne sur sfr.fr/red ou en contactant le service client RED. Les offres RED sont sans engagement, donc la résiliation est sans frais."],
    ],
    "related" => ["free", "orange", "canal-plus", "netflix"],
  ],

  "amazon-prime" => [
    "name"     => "Amazon Prime",
    "emoji"    => "📦",
    "color"    => "#FF9900",
    "tagline"  => "Résilier Amazon Prime ou désactiver le renouvellement automatique",
    "about"    => "Amazon Prime inclut la livraison gratuite, Prime Video, Prime Music et plus encore. Vous pouvez mettre fin à votre abonnement immédiatement (avec remboursement au prorata si non utilisé) ou désactiver le renouvellement automatique.",
    "refund"   => "Amazon propose un remboursement au prorata si vous résiliez et n'avez pas utilisé les avantages Prime (livraison gratuite, Prime Video, etc.) dans la période de facturation en cours. Choisissez 'Résilier maintenant' pour voir votre éligibilité au remboursement.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>amazon.fr</strong> et connectez-vous",
          "Survolez <strong>Compte et listes</strong> → cliquez sur <strong>Mon compte</strong>",
          "Cliquez sur <strong>Prime</strong> (ou accédez directement à amazon.fr/prime)",
          "Cliquez sur <strong>Gérer l'abonnement</strong>",
          "Cliquez sur <strong>Résilier l'abonnement</strong>",
          "Choisissez : <strong>Résilier maintenant</strong> (remboursement possible) ou <strong>Résilier à la date de renouvellement</strong>",
          "Confirmez votre choix",
        ],
        "note"  => "Choisissez 'Résilier maintenant' si vous n'avez pas encore utilisé Prime ce mois-ci — vous pourriez obtenir un remboursement.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez l'application <strong>Amazon Shopping</strong>",
          "Appuyez sur l'<strong>icône de profil</strong> → <strong>Mon compte</strong>",
          "Appuyez sur <strong>Gérer l'abonnement Prime</strong>",
          "Appuyez sur <strong>Résilier l'abonnement</strong> et confirmez",
        ],
        "note"  => "Amazon Prime n'est pas géré via les abonnements Apple — utilisez toujours l'application Amazon ou le site web.",
      ],
    ],
    "after_cancel" => [
      "Si vous choisissez 'Résilier maintenant', vous pourriez obtenir un remboursement partiel",
      "Prime Video, Prime Music et la livraison gratuite s'arrêtent immédiatement ou à la date de renouvellement",
      "Les réductions Amazon Fresh et Whole Foods sont également supprimées",
      "Vous pouvez vous réabonner à tout moment",
    ],
    "faq" => [
      ["Puis-je obtenir un remboursement en résiliant Amazon Prime ?",
       "Oui — Amazon propose un remboursement partiel si vous résiliez Prime et n'avez utilisé aucun avantage (livraison gratuite, Prime Video, etc.) dans la période de facturation en cours. Le remboursement est au prorata."],
      ["La résiliation d'Amazon Prime annule-t-elle aussi Prime Video ?",
       "Oui — Prime Video est inclus dans Amazon Prime. Résilier Prime annule également l'accès à Prime Video. Vous pouvez souscrire à Prime Video en tant qu'abonnement indépendant séparément."],
      ["Comment résilier l'essai gratuit Amazon Prime ?",
       "Même procédure — allez dans Mon compte → Prime → Résilier l'abonnement → Résilier maintenant. Les résiliations d'essai gratuit prennent effet immédiatement sans frais."],
    ],
    "related" => ["netflix", "audible", "disney-plus", "spotify"],
  ],

  "orange" => [
    "name"     => "Orange",
    "emoji"    => "🟠",
    "color"    => "#FF6600",
    "tagline"  => "Résilier Orange mobile ou Livebox en ligne",
    "about"    => "Orange propose des offres mobile, Livebox internet et TV Orange. La résiliation est possible en ligne via l'espace client ou par téléphone au 3900.",
    "refund"   => "Remboursement au prorata selon les conditions du contrat. Vérifiez votre durée d'engagement dans votre contrat avant de résilier pour éviter des frais de résiliation anticipée.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>orange.fr</strong> et connectez-vous à <strong>Mon espace client</strong>",
          "Cliquez sur <strong>Mes contrats</strong>",
          "Sélectionnez le contrat que vous souhaitez résilier",
          "Cliquez sur <strong>Résilier</strong>",
          "Suivez les étapes et cliquez sur <strong>Confirmer la résiliation</strong>",
          "Conservez l'e-mail de confirmation",
        ],
        "note"  => "Pour les offres Livebox, la résiliation en ligne n'est pas toujours disponible. Vous pouvez également appeler le 3900.",
      ],
      "phone" => [
        "label" => "Téléphone",
        "icon"  => "📞",
        "steps" => [
          "Appelez le <strong>3900</strong> (service client Orange, appel gratuit depuis un mobile Orange)",
          "Dites que vous souhaitez <strong>résilier votre contrat</strong>",
          "Vérifiez votre identité avec les informations demandées",
          "Demandez un <strong>numéro de dossier</strong> de résiliation",
          "Notez la date effective de résiliation",
        ],
        "note"  => "Orange peut vous proposer une offre de rétention. Restez ferme si vous souhaitez effectivement résilier.",
      ],
    ],
    "after_cancel" => [
      "La résiliation prend effet à la fin de votre période d'engagement ou de préavis",
      "Votre Livebox doit être retournée si votre contrat l'exige",
      "Votre numéro mobile peut être conservé par portabilité (RIO au 3179)",
      "Vous recevrez une confirmation de résiliation par e-mail ou courrier",
    ],
    "faq" => [
      ["Quel est le préavis de résiliation chez Orange ?",
       "Pour un forfait mobile Orange, le préavis est généralement de 10 jours. Pour une offre Livebox, il est généralement de 30 jours. Les conditions exactes dépendent de votre contrat — vérifiez dans votre espace client."],
      ["Puis-je résilier ma Livebox Orange avant la fin de l'engagement ?",
       "Oui, mais des frais de résiliation anticipée peuvent s'appliquer. Le montant varie selon la durée restante de votre engagement. Consultez votre espace client ou appelez le 3900 pour connaître le montant exact."],
      ["Comment conserver mon numéro Orange en changeant d'opérateur ?",
       "Composez le 3179 depuis votre mobile Orange pour obtenir votre RIO gratuitement. Communiquez ce code à votre nouvel opérateur — il effectuera la portabilité et résiliera Orange automatiquement."],
    ],
    "related" => ["sfr", "free", "canal-plus", "deezer"],
  ],

  "netflix" => [
    "name"     => "Netflix",
    "emoji"    => "🎬",
    "color"    => "#E50914",
    "tagline"  => "Résilier Netflix en 2 clics — sans appeler le service client",
    "about"    => "Netflix prélève automatiquement votre carte bancaire chaque mois. Vous pouvez résilier à tout moment en ligne — votre accès continue jusqu'à la fin de la période de facturation.",
    "refund"   => "Netflix ne propose pas de remboursement pour les périodes de facturation partielles. Vous conservez l'accès jusqu'à la fin de votre période en cours.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez l'application <strong>Réglages</strong> sur votre iPhone",
          "Appuyez sur votre <strong>nom</strong> en haut",
          "Appuyez sur <strong>Abonnements</strong>",
          "Trouvez et appuyez sur <strong>Netflix</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
          "Appuyez sur <strong>Confirmer</strong> — c'est terminé",
        ],
        "note"  => "Cette méthode ne fonctionne que si vous vous êtes abonné via l'App Store. Si vous vous êtes inscrit sur netflix.com, résiliez-y à la place.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez le <strong>Google Play Store</strong>",
          "Appuyez sur votre <strong>photo de profil</strong> en haut à droite",
          "Appuyez sur <strong>Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>Netflix</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
          "Suivez les instructions pour confirmer",
        ],
        "note"  => "Fonctionne uniquement si vous vous êtes abonné via Google Play. Sinon, résiliez sur netflix.com.",
      ],
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>netflix.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>icône de profil</strong> en haut à droite",
          "Cliquez sur <strong>Compte</strong>",
          "Sous « Abonnement », cliquez sur <strong>Annuler l'abonnement</strong>",
          "Cliquez sur <strong>Terminer l'annulation</strong>",
          "Vous verrez une confirmation — conservez l'e-mail comme preuve",
        ],
        "note"  => "C'est la méthode la plus fiable, quel que soit l'endroit où vous vous êtes initialement abonné.",
      ],
    ],
    "after_cancel" => [
      "Vous conservez l'accès à Netflix jusqu'à la fin de votre période de facturation en cours",
      "Votre historique de visionnage et vos profils sont sauvegardés pendant 10 mois",
      "Vous pouvez vous réabonner à tout moment et reprendre là où vous en étiez",
      "Aucuns frais d'annulation — Netflix est sans engagement",
    ],
    "faq" => [
      ["Puis-je obtenir un remboursement après avoir annulé Netflix ?",
       "Netflix ne propose pas de remboursement pour les jours non utilisés d'une période de facturation. Si vous avez été facturé récemment et souhaitez un remboursement, contactez le support Netflix — ils font parfois des exceptions pour les débits accidentels."],
      ["Que devient mon profil Netflix quand j'annule ?",
       "Vos profils, historique de visionnage et Ma Liste sont sauvegardés pendant 10 mois. Si vous vous réabonnez dans ce délai, tout sera restauré."],
      ["Puis-je mettre en pause Netflix plutôt que d'annuler ?",
       "Oui ! Netflix propose une option de suspension de l'abonnement. Allez dans Compte → Suspendre l'abonnement. Vous pouvez suspendre pour 1 à 3 mois."],
    ],
    "related" => ["disney-plus", "amazon-prime", "canal-plus", "spotify"],
  ],

  "spotify" => [
    "name"     => "Spotify",
    "emoji"    => "🎵",
    "color"    => "#1DB954",
    "tagline"  => "Passer à Spotify gratuit — vos playlists restent pour toujours",
    "about"    => "Résilier Spotify Premium vous fait passer à la version gratuite — vous ne perdez jamais vos playlists ni vos chansons sauvegardées. Vous pouvez annuler à tout moment sans pénalité.",
    "refund"   => "Spotify ne propose pas de remboursement pour le temps Premium non utilisé. Vous conservez Premium jusqu'à votre date de facturation.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>spotify.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>nom de profil</strong> → <strong>Compte</strong>",
          "Faites défiler jusqu'à « Votre abonnement » et cliquez sur <strong>Changer d'abonnement</strong>",
          "Faites défiler jusqu'à « Spotify Gratuit » et cliquez sur <strong>Annuler Premium</strong>",
          "Cliquez sur <strong>Oui, annuler</strong> pour confirmer",
        ],
        "note"  => "La méthode via navigateur fonctionne pour tous les comptes Spotify.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>Spotify</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
          "Appuyez sur <strong>Confirmer</strong>",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play Store → profil → Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>Spotify</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Vous conservez Spotify Premium jusqu'à votre prochaine date de facturation",
      "Après ça, vous passez à Spotify Gratuit — avec des publicités",
      "Toutes vos playlists, chansons aimées et podcasts sont conservés pour toujours",
      "Les téléchargements hors ligne sont supprimés lorsque Premium expire",
    ],
    "faq" => [
      ["Est-ce que je perds mes playlists en annulant Spotify Premium ?",
       "Non — vos playlists, chansons aimées et podcasts suivis sont sauvegardés définitivement sur votre compte. Vous perdez les téléchargements hors ligne et la lecture sans shuffle, mais votre bibliothèque reste intacte."],
      ["Puis-je mettre Spotify Premium en pause plutôt que d'annuler ?",
       "Spotify ne propose pas d'option de pause. Vous pouvez annuler et vous réabonner plus tard — vos données vous attendront."],
      ["J'ai annulé mais Spotify me facture encore",
       "Assurez-vous d'avoir annulé au bon endroit (spotify.com, App Store ou Google Play). Si vous vous êtes inscrit sur Spotify.com mais avez annulé dans l'App Store, le prélèvement continue. Vérifiez les trois endroits."],
    ],
    "related" => ["netflix", "audible", "deezer", "amazon-prime"],
  ],

  "disney-plus" => [
    "name"     => "Disney+",
    "emoji"    => "✨",
    "color"    => "#113CCF",
    "tagline"  => "Résilier Disney+ en ligne — sans appeler le service client",
    "about"    => "Disney+ propose des abonnements avec et sans publicité. Vous pouvez résilier à tout moment via DisneyPlus.com ou le gestionnaire d'abonnements de votre appareil.",
    "refund"   => "Disney+ ne propose pas de remboursement pour la période de facturation en cours. Votre accès continue jusqu'à la fin de la période.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>disneyplus.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>icône de profil</strong> en haut à droite",
          "Cliquez sur <strong>Compte</strong>",
          "Sous « Abonnement », cliquez sur <strong>Annuler l'abonnement</strong>",
          "Cliquez sur <strong>Accepter</strong> pour confirmer",
        ],
        "note"  => "Si vous avez le forfait Disney (Disney+, Hulu, ESPN+), l'annulation ici annule l'ensemble du forfait.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>Disney+</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play Store → profil → Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>Disney+</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via Google Play.",
      ],
    ],
    "after_cancel" => [
      "L'accès à Disney+ continue jusqu'à la fin de la période de facturation",
      "Votre liste de lecture et vos paramètres de profil sont sauvegardés pendant 30 jours",
      "Vous pouvez vous réabonner à tout moment et retrouver vos profils",
    ],
    "faq" => [
      ["Puis-je mettre Disney+ en pause plutôt que d'annuler ?",
       "Non — Disney+ ne propose pas de fonctionnalité de pause. Vous devez annuler et vous réabonner. Votre liste de lecture et vos données de profil sont sauvegardées pendant 30 jours."],
      ["Puis-je obtenir un remboursement de Disney+ ?",
       "Disney+ ne propose pas de remboursement pour les périodes de facturation en cours. Contactez le support Disney+ sur help.disneyplus.com si vous pensez avoir été prélevé par erreur."],
      ["Résilier Disney+ annule-t-il aussi Hulu et ESPN+ ?",
       "Si vous êtes sur le forfait Disney (Disney+, Hulu, ESPN+), oui — annuler Disney+ annule l'ensemble du forfait. Si vous avez des abonnements Hulu ou ESPN+ indépendants, ceux-ci sont séparés."],
    ],
    "related" => ["netflix", "canal-plus", "amazon-prime", "crunchyroll"],
  ],

  "audible" => [
    "name"     => "Audible",
    "emoji"    => "🎧",
    "color"    => "#FF9900",
    "tagline"  => "Conservez vos livres audio même après la résiliation",
    "about"    => "Audible est le service de livres audio d'Amazon. Tous les livres audio que vous avez achetés avec vos crédits restent dans votre bibliothèque pour toujours — même après la résiliation.",
    "refund"   => "Audible propose une politique de retour de 365 jours sur les livres audio. Vous pouvez également obtenir un remboursement au prorata de votre abonnement si vous contactez le support dans les 7 jours suivant le prélèvement.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>audible.fr</strong> et connectez-vous avec votre compte Amazon",
          "Cliquez sur <strong>Compte et listes</strong> en haut à droite",
          "Cliquez sur <strong>Détails de l'abonnement</strong>",
          "Faites défiler vers le bas et cliquez sur <strong>Annuler l'abonnement</strong>",
          "Suivez les instructions — Audible proposera d'abord une option de pause",
          "Sélectionnez <strong>Annuler l'abonnement</strong> pour confirmer",
          "Vous recevrez un e-mail de confirmation",
        ],
        "note"  => "Audible peut essayer de vous retenir avec une option de pause ou une réduction — cliquez à nouveau sur 'Annuler l'abonnement' pour continuer.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>Audible</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
    ],
    "after_cancel" => [
      "Tous les livres audio achetés avec vos crédits restent dans votre bibliothèque pour toujours",
      "Vous perdez le crédit mensuel pour de nouveaux livres audio",
      "Les Audible Originals ajoutés restent accessibles",
      "Vous pouvez vous réabonner à tout moment et les crédits non utilisés peuvent être restaurés",
    ],
    "faq" => [
      ["Est-ce que je garde mes livres Audible après l'annulation ?",
       "Oui — tous les livres audio que vous avez achetés avec des crédits vous appartiennent pour toujours. Vous pouvez toujours y accéder via l'application Audible même sans abonnement."],
      ["Puis-je mettre Audible en pause plutôt que d'annuler ?",
       "Oui — Audible propose une option de pause de 1 à 3 mois. Pendant la pause, vous ne serez pas prélevé et ne recevrez pas de crédits, mais votre bibliothèque reste intacte. Audible proposera cette option avant que vous puissiez finaliser l'annulation."],
      ["J'ai des crédits non utilisés — que se passe-t-il quand j'annule ?",
       "Les crédits Audible non utilisés expirent à l'annulation. Utilisez-les avant d'annuler pour profiter pleinement de votre abonnement."],
    ],
    "related" => ["amazon-prime", "spotify", "netflix", "deezer"],
  ],

  "adobe" => [
    "name"     => "Adobe",
    "emoji"    => "🖌️",
    "color"    => "#FF0000",
    "tagline"  => "Évitez les frais de résiliation anticipée — le timing est important",
    "about"    => "Les abonnements Adobe Creative Cloud ont une fenêtre d'annulation de 14 jours sans frais. Passé ce délai, l'annulation anticipée d'un abonnement annuel coûte 50 % des mois restants. Les abonnements mois par mois peuvent être annulés à tout moment.",
    "refund"   => "Abonnements annuels : frais de résiliation anticipée de 50 % du solde restant. Annulation dans les 14 jours suivant l'achat pour un remboursement complet. Mois par mois : aucuns frais.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>account.adobe.com</strong> et connectez-vous",
          "Cliquez sur <strong>Plans</strong> dans la navigation",
          "Trouvez votre abonnement Creative Cloud et cliquez sur <strong>Gérer le plan</strong>",
          "Cliquez sur <strong>Annuler le plan</strong>",
          "Lisez attentivement les informations sur les frais de résiliation anticipée",
          "Sélectionnez une raison d'annulation et cliquez sur <strong>Continuer</strong>",
          "Confirmez l'annulation",
        ],
        "note"  => "⚠️ Si vous avez un abonnement annuel et que plus de 14 jours se sont écoulés, vous serez facturé de 50 % des mois restants. Envisagez d'attendre le renouvellement.",
      ],
    ],
    "after_cancel" => [
      "L'accès aux applications Creative Cloud continue jusqu'à la fin de la période de facturation",
      "Le stockage cloud passe à 2 Go — téléchargez vos fichiers d'abord",
      "L'application de bureau Creative Cloud et les fichiers synchronisés peuvent être supprimés",
      "Les applications gratuites (Acrobat Reader, Adobe Express) restent accessibles",
    ],
    "faq" => [
      ["Comment éviter les frais de résiliation anticipée d'Adobe ?",
       "Annulez dans les 14 jours suivant le début ou le renouvellement de votre abonnement pour un remboursement complet sans frais. Si plus de 14 jours se sont écoulés, attendez le renouvellement de votre abonnement puis annulez immédiatement pour éviter les frais de 50 %."],
      ["Puis-je passer à un abonnement moins cher au lieu d'annuler Adobe ?",
       "Oui — vous pouvez passer de Toutes les applications à un abonnement à une seule application (ex. Photoshop uniquement) qui est moins cher. Allez dans account.adobe.com → Plans → Changer de plan."],
      ["Que se passe-t-il avec mon stockage Adobe Cloud quand j'annule ?",
       "Votre stockage est réduit au niveau gratuit de 2 Go. Téléchargez vos fichiers avant d'annuler — les fichiers dépassant la limite de 2 Go peuvent être supprimés après 90 jours."],
    ],
    "related" => ["canva", "chatgpt", "netflix", "spotify"],
  ],

  "hbo-max" => [
    "name"     => "Max (HBO Max)",
    "emoji"    => "🎥",
    "color"    => "#002BE7",
    "tagline"  => "Résilier Max en 3 étapes — sans frais d'annulation",
    "about"    => "Max (anciennement HBO Max) est le service de streaming de Warner Bros. Discovery. Vous pouvez annuler à tout moment en ligne ou via l'application sans frais d'annulation.",
    "refund"   => "Max ne propose pas de remboursement pour la période de facturation en cours. Votre accès continue jusqu'à la fin de la période d'abonnement.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>max.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>icône de profil</strong> en haut à droite",
          "Cliquez sur <strong>Compte</strong>",
          "Sous « Plan et paiements », cliquez sur <strong>Annuler le plan</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong> pour confirmer",
        ],
        "note"  => "Fonctionne pour tous les abonnements Max, y compris la formule avec publicité.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>Max</strong> (ou HBO Max)",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play Store → profil → Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>Max</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via Google Play.",
      ],
    ],
    "after_cancel" => [
      "L'accès continue jusqu'à la fin de votre période de facturation en cours",
      "Votre liste de lecture et votre historique de visionnage sont conservés pendant 90 jours",
      "Vous pouvez vous réabonner à tout moment",
      "Aucuns frais d'annulation — Max est sans engagement",
    ],
    "faq" => [
      ["Que se passe-t-il avec ma liste Max quand j'annule ?",
       "Votre liste de lecture et votre historique de visionnage sont sauvegardés pendant 90 jours après l'annulation. Si vous vous réabonnez dans ce délai, tout est restauré."],
      ["Max est-il le même service que HBO Max ?",
       "Oui — HBO Max a été renommé simplement « Max » en mai 2023. C'est le même service avec du contenu Discovery+ en plus. L'annulation fonctionne de la même façon."],
      ["Puis-je obtenir un remboursement de Max ?",
       "Max ne propose généralement pas de remboursement pour la période de facturation en cours. Contactez le support sur help.max.com si vous pensez avoir été prélevé par erreur."],
    ],
    "related" => ["netflix", "disney-plus", "canal-plus", "amazon-prime"],
  ],

  "canva" => [
    "name"     => "Canva Pro",
    "emoji"    => "🎨",
    "color"    => "#7D2AE8",
    "tagline"  => "Résilier Canva Pro à tout moment — vos designs restent pour toujours",
    "about"    => "Canva Pro peut être annulé à tout moment. Vos designs et fichiers restent accessibles sur l'abonnement gratuit après l'annulation.",
    "refund"   => "Canva propose des remboursements dans les 30 jours suivant l'achat si vous n'avez pas utilisé les fonctionnalités premium. Contactez le support pour les demandes de remboursement.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>canva.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>photo de profil</strong> en haut à droite",
          "Cliquez sur <strong>Paramètres du compte</strong>",
          "Cliquez sur <strong>Facturation et plans</strong> dans le menu de gauche",
          "Sous votre abonnement actuel, cliquez sur <strong>Annuler le plan</strong>",
          "Sélectionnez une raison et cliquez sur <strong>Continuer l'annulation</strong>",
          "Confirmez pour terminer",
        ],
        "note"  => "Votre compte gratuit reste actif et tous vos designs sont conservés.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>Canva</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
    ],
    "after_cancel" => [
      "Tous vos designs restent accessibles sur l'abonnement gratuit",
      "Les modèles premium utilisés restent dans vos designs (non modifiables)",
      "Les fonctionnalités Pro (redimensionnement, suppression d'arrière-plan, kit de marque) sont désactivées",
      "Vous pouvez vous réabonner à tout moment pour retrouver les fonctionnalités Pro",
    ],
    "faq" => [
      ["Est-ce que je perds mes designs Canva en annulant Pro ?",
       "Non — tous vos designs sont sauvegardés définitivement dans votre compte gratuit. Vous perdez simplement l'accès aux fonctionnalités Pro comme Magic Resize, la suppression d'arrière-plan et la bibliothèque complète de modèles."],
      ["Puis-je annuler Canva Pro et obtenir un remboursement ?",
       "Canva propose des remboursements dans les 30 jours pour les abonnements annuels si vous n'avez pas utilisé les fonctionnalités premium. Contactez le support Canva via le Centre d'aide pour en faire la demande."],
    ],
    "related" => ["adobe", "chatgpt", "netflix", "spotify"],
  ],

  "crunchyroll" => [
    "name"     => "Crunchyroll",
    "emoji"    => "🎌",
    "color"    => "#F47521",
    "tagline"  => "Résilier Crunchyroll à tout moment — votre liste d'animés reste sauvegardée",
    "about"    => "Crunchyroll propose le streaming d'animés avec des formules Fan, Mega Fan et Ultimate Fan. Vous pouvez annuler votre abonnement en ligne à tout moment sans appeler le support.",
    "refund"   => "Crunchyroll ne propose pas de remboursement pour la période de facturation en cours. Votre accès continue jusqu'à la date de fin d'abonnement.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>crunchyroll.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>icône de profil</strong> en haut à droite",
          "Cliquez sur <strong>Paramètres</strong>",
          "Cliquez sur <strong>Gérer l'abonnement</strong>",
          "Cliquez sur <strong>Annuler Premium</strong>",
          "Sélectionnez une raison et cliquez sur <strong>Continuer</strong>",
          "Confirmez en cliquant sur <strong>Annuler l'abonnement</strong>",
        ],
        "note"  => "Méthode la plus fiable — fonctionne quelle que soit la façon dont vous vous êtes abonné.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>Crunchyroll</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play Store → profil → Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>Crunchyroll</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Vous conservez l'accès Premium jusqu'à la fin de votre période de facturation",
      "Après ça, vous repassez à la version gratuite (avec publicités, simulcasts limités)",
      "Votre liste de lecture et votre historique de visionnage sont préservés sur le plan gratuit",
      "Vous pouvez vous réabonner à tout moment pour retrouver l'accès Premium",
    ],
    "faq" => [
      ["L'annulation de Crunchyroll supprime-t-elle ma liste de lecture ?",
       "Non — votre liste de lecture et votre historique de visionnage sont sauvegardés sur votre compte gratuit. Vous perdez les avantages Premium comme le visionnage sans publicité et l'accès aux simulcasts, mais vos données restent."],
      ["Puis-je obtenir un remboursement de Crunchyroll ?",
       "Crunchyroll ne propose généralement pas de remboursement pour la période de facturation en cours. Si vous avez été facturé par erreur, contactez le support Crunchyroll dans les 24 à 48 heures pour les meilleures chances d'obtenir un remboursement."],
      ["Quelle est la différence entre Crunchyroll Fan, Mega Fan et Ultimate Fan ?",
       "Fan : streaming sans pub sur 1 appareil. Mega Fan : jusqu'à 4 appareils + visionnage hors ligne. Ultimate Fan : tout Mega Fan + manga numérique mensuel. Tous les abonnements s'annulent de la même façon."],
    ],
    "related" => ["netflix", "disney-plus", "canal-plus", "amazon-prime"],
  ],

  "deezer" => [
    "name"     => "Deezer",
    "emoji"    => "🎶",
    "color"    => "#FF0092",
    "tagline"  => "Résilier Deezer Premium — revenir à la version gratuite",
    "about"    => "Deezer est une plateforme française de streaming musical. Résilier Deezer Premium vous ramène à la version gratuite avec publicités. Vos playlists et favoris sont conservés.",
    "refund"   => "Deezer ne propose généralement pas de remboursement pour la période en cours. Votre Premium reste actif jusqu'à la fin de la période payée.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>deezer.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>photo de profil</strong> en haut à droite",
          "Cliquez sur <strong>Paramètres</strong>",
          "Cliquez sur <strong>Mon abonnement</strong>",
          "Cliquez sur <strong>Annuler mon abonnement</strong>",
          "Suivez les instructions et confirmez",
        ],
        "note"  => "Votre compte gratuit reste actif après l'annulation — vos playlists sont conservées.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>Deezer</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play Store → profil → Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>Deezer</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Vous conservez Deezer Premium jusqu'à la fin de votre période de facturation",
      "Après ça, vous repassez à Deezer Gratuit avec publicités",
      "Toutes vos playlists et chansons favorites sont conservées",
      "Les téléchargements hors ligne sont supprimés lorsque Premium expire",
    ],
    "faq" => [
      ["Est-ce que je perds mes playlists en annulant Deezer Premium ?",
       "Non — vos playlists, favoris et podcasts suivis sont sauvegardés définitivement sur votre compte. Vous perdez la qualité audio supérieure, les téléchargements hors ligne et l'écoute sans publicité, mais votre bibliothèque reste intacte."],
      ["Deezer propose-t-il une option de pause ?",
       "Deezer ne propose pas d'option de pause officielle. Vous pouvez annuler et vous réabonner plus tard — vos données vous attendront."],
      ["Comment obtenir un remboursement Deezer ?",
       "Deezer ne gère pas les remboursements directement. Si vous avez souscrit via l'App Store, allez sur reportaproblem.apple.com. Via Google Play, allez dans Historique des commandes et demandez un remboursement."],
    ],
    "related" => ["spotify", "netflix", "amazon-prime", "audible"],
  ],

  "hellofresh" => [
    "name"     => "HelloFresh",
    "emoji"    => "🥗",
    "color"    => "#2D9B30",
    "tagline"  => "Passer une semaine ou résilier HelloFresh en ligne",
    "about"    => "HelloFresh est un service de livraison de kits repas qui prélève automatiquement chaque semaine. Vous pouvez suspendre les livraisons, passer des semaines ou résilier en ligne — sans appeler.",
    "refund"   => "Les remboursements HelloFresh sont traités au cas par cas. Si une boîte arrive endommagée ou avec des articles incorrects, contactez le support dans les 5 jours pour un avoir ou un remboursement.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>hellofresh.fr</strong> et connectez-vous",
          "Cliquez sur votre <strong>nom</strong> en haut à droite → <strong>Paramètres du compte</strong>",
          "Faites défiler jusqu'à « Paramètres du plan » et cliquez sur <strong>Annuler le plan</strong>",
          "Répondez au questionnaire d'annulation",
          "Cliquez sur <strong>Annuler mon abonnement</strong> pour confirmer",
        ],
        "note"  => "Annulez au moins 5 jours avant votre prochaine date de livraison pour éviter d'être facturé pour cette boîte.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez l'application <strong>HelloFresh</strong>",
          "Appuyez sur l'<strong>icône de menu</strong> (en haut à gauche)",
          "Appuyez sur <strong>Paramètres du compte</strong>",
          "Appuyez sur <strong>Annuler le plan</strong> et suivez les instructions",
        ],
        "note"  => "HelloFresh n'est pas géré via les abonnements Apple.",
      ],
    ],
    "after_cancel" => [
      "Toutes les livraisons et prélèvements à venir sont arrêtés",
      "Tous les avoirs ou promotions sur votre compte peuvent être perdus",
      "Vous pouvez réactiver votre compte HelloFresh à tout moment",
      "L'annulation prend effet pour le prochain cycle de facturation",
    ],
    "faq" => [
      ["Puis-je simplement passer des semaines HelloFresh plutôt que d'annuler ?",
       "Oui — HelloFresh vous permet de passer des semaines individuelles depuis votre tableau de bord. Utile si vous voyagez ou avez suffisamment à manger. Le passage est gratuit et plus simple que d'annuler et de se réabonner."],
      ["Quelle est la date limite pour annuler HelloFresh avant d'être facturé ?",
       "Annulez au moins 5 jours avant votre prochaine date de livraison. Si vous annulez après cette limite, vous recevrez et serez facturé pour la prochaine boîte."],
      ["Comment annuler l'essai gratuit HelloFresh ?",
       "Même procédure — Paramètres du compte → Annuler le plan. Annulez avant la fin de l'essai pour éviter d'être facturé pour la première boîte complète."],
    ],
    "related" => ["amazon-prime", "netflix", "spotify", "canal-plus"],
  ],

  "apple-tv" => [
    "name"     => "Apple TV+",
    "emoji"    => "🍎",
    "color"    => "#555555",
    "tagline"  => "Résilier Apple TV+ directement dans les Réglages iPhone",
    "about"    => "Apple TV+ est le service de streaming d'Apple pour les films et séries originaux. Il est géré directement dans votre compte Apple — aucun site tiers nécessaire.",
    "refund"   => "Apple propose des remboursements au cas par cas via reportaproblem.apple.com. En général, les périodes de facturation non utilisées peuvent être remboursées si la demande est faite rapidement.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez l'application <strong>Réglages</strong>",
          "Appuyez sur votre <strong>nom</strong> en haut",
          "Appuyez sur <strong>Abonnements</strong>",
          "Appuyez sur <strong>Apple TV+</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
          "Appuyez sur <strong>Confirmer</strong>",
        ],
        "note"  => "Apple TV+ est toujours géré via Apple — il n'y a pas de site web séparé.",
      ],
      "web" => [
        "label" => "Mac / Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Ouvrez l'application <strong>TV</strong> sur Mac, ou allez sur <strong>tv.apple.com</strong>",
          "Cliquez sur votre <strong>photo de profil</strong>",
          "Cliquez sur <strong>Paramètres du compte</strong>",
          "Cliquez sur <strong>Gérer les abonnements</strong>",
          "Cliquez sur <strong>Modifier</strong> à côté d'Apple TV+",
          "Cliquez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Accessible aussi via l'identifiant Apple sur appleid.apple.com → Médias et achats → Abonnements.",
      ],
    ],
    "after_cancel" => [
      "L'accès à Apple TV+ continue jusqu'à la fin de la période de facturation",
      "Votre liste de lecture et votre progression sont sauvegardées",
      "Les membres du partage familial perdent également l'accès",
      "Vous pouvez vous réabonner à tout moment",
    ],
    "faq" => [
      ["J'ai obtenu Apple TV+ gratuitement avec mon nouvel appareil — comment l'annuler ?",
       "Les essais gratuits Apple TV+ des achats d'appareils se gèrent de la même façon — Réglages → [Votre nom] → Abonnements → Apple TV+ → Annuler. Annulez avant la fin de l'essai pour éviter d'être facturé."],
      ["L'annulation d'Apple TV+ affecte-t-elle mes autres abonnements Apple ?",
       "Non — les abonnements Apple sont indépendants. Annuler Apple TV+ n'affecte pas Apple Music, iCloud+, Apple Arcade ou Apple News+."],
      ["Puis-je obtenir un remboursement pour Apple TV+ ?",
       "Allez sur reportaproblem.apple.com dans les 90 jours suivant le prélèvement et sélectionnez 'Demander un remboursement'. Apple traite les remboursements au cas par cas, généralement sous 5 à 7 jours."],
    ],
    "related" => ["netflix", "disney-plus", "amazon-prime", "canal-plus"],
  ],

  "chatgpt" => [
    "name"     => "ChatGPT Plus",
    "emoji"    => "🤖",
    "color"    => "#10A37F",
    "tagline"  => "Résilier ChatGPT Plus en 3 clics — sans frais cachés",
    "about"    => "ChatGPT Plus est l'abonnement payant d'OpenAI qui donne accès à GPT-4, au raisonnement avancé et à l'accès prioritaire. Vous pouvez annuler à tout moment via les paramètres de votre compte.",
    "refund"   => "OpenAI ne propose pas de remboursement pour le temps ChatGPT Plus non utilisé. Votre abonnement reste actif jusqu'à la fin de la période de facturation.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>chat.openai.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>photo de profil</strong> en bas à gauche",
          "Cliquez sur <strong>Mon abonnement</strong>",
          "Cliquez sur <strong>Gérer mon abonnement</strong>",
          "Cliquez sur <strong>Annuler le plan</strong>",
          "Confirmez l'annulation",
        ],
        "note"  => "ChatGPT Plus est géré via le site OpenAI — pas via les boutiques d'applications.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>ChatGPT</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play Store → profil → Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>ChatGPT</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Vous conservez ChatGPT Plus jusqu'à la fin de votre période de facturation en cours",
      "Après ça, vous repassez à la version gratuite (accès limité)",
      "Tout votre historique de conversations est préservé",
      "Vous pouvez vous réabonner à tout moment pour retrouver l'accès GPT-4",
    ],
    "faq" => [
      ["Que je perds-je en annulant ChatGPT Plus ?",
       "Vous perdez l'accès à GPT-4, l'analyse avancée des données, la génération d'images (DALL·E) et l'accès prioritaire aux serveurs. Vous conservez votre compte et tout votre historique de conversations sur la version gratuite."],
      ["Puis-je obtenir un remboursement pour ChatGPT Plus ?",
       "La politique standard d'OpenAI est de ne pas rembourser la période de facturation en cours. Si vous pensez avoir été prélevé par erreur, contactez le support sur help.openai.com."],
      ["Comment annuler ChatGPT Plus sur iPhone ?",
       "Si vous vous êtes abonné via l'App Store, annulez dans Réglages iPhone → [Votre nom] → Abonnements → ChatGPT → Annuler l'abonnement. Si vous vous êtes abonné sur le site web, annulez sur chat.openai.com."],
    ],
    "related" => ["canva", "adobe", "netflix", "spotify"],
  ],

  "paramount-plus" => [
    "name"     => "Paramount+",
    "emoji"    => "⛰️",
    "color"    => "#0064FF",
    "tagline"  => "Résilier Paramount+ en 3 étapes en ligne",
    "about"    => "Paramount+ diffuse CBS, MTV, Nickelodeon et les films Paramount. Vous pouvez annuler en ligne à tout moment sans appeler.",
    "refund"   => "Paramount+ ne propose pas de remboursement pour la période de facturation en cours. Contactez le support pour les erreurs de facturation.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>paramountplus.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>icône de profil</strong>",
          "Cliquez sur <strong>Compte et paramètres</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Suivez les instructions pour confirmer",
        ],
        "note"  => "Fonctionne pour les abonnements commencés sur paramountplus.com.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>Paramount+</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play Store → profil → Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>Paramount+</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via Google Play.",
      ],
    ],
    "after_cancel" => [
      "L'accès continue jusqu'à la fin de la période de facturation",
      "Votre profil et liste de lecture sont préservés si vous vous réabonnez",
      "Aucuns frais d'annulation",
    ],
    "faq" => [
      ["Paramount+ est-il disponible en France ?",
       "Paramount+ est disponible en France. Selon votre mode d'abonnement (directement ou via un opérateur), les étapes d'annulation peuvent varier. Vérifiez votre espace client ou contactez votre opérateur."],
      ["Puis-je obtenir un remboursement de Paramount+ ?",
       "Paramount+ ne propose pas de remboursement pour les périodes de facturation en cours. Contactez le support sur paramountplus.com/help pour les erreurs de facturation."],
    ],
    "related" => ["netflix", "disney-plus", "canal-plus", "amazon-prime"],
  ],

  "youtube-premium" => [
    "name"     => "YouTube Premium",
    "emoji"    => "▶️",
    "color"    => "#FF0000",
    "tagline"  => "Résilier YouTube Premium — YouTube reste gratuit",
    "about"    => "YouTube Premium supprime les publicités et permet le téléchargement de vidéos. Après annulation, YouTube reste accessible gratuitement avec les publicités.",
    "refund"   => "YouTube Premium ne propose généralement pas de remboursement pour la période en cours. Contactez le support Google pour les erreurs de facturation.",
    "platforms" => [
      "web" => [
        "label" => "Navigateur web",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>youtube.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>photo de profil</strong> en haut à droite",
          "Cliquez sur <strong>Achats et abonnements</strong>",
          "Cliquez sur <strong>Gérer l'abonnement</strong> à côté de YouTube Premium",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez votre annulation",
        ],
        "note"  => "Méthode la plus fiable pour annuler YouTube Premium.",
      ],
      "iphone" => [
        "label" => "iPhone / iPad",
        "icon"  => "📱",
        "steps" => [
          "Ouvrez <strong>Réglages → [Votre nom] → Abonnements</strong>",
          "Appuyez sur <strong>YouTube</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via l'App Store.",
      ],
      "android" => [
        "label" => "Android",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play Store → profil → Paiements et abonnements → Abonnements</strong>",
          "Appuyez sur <strong>YouTube Premium</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong> et confirmez",
        ],
        "note"  => "Uniquement si vous vous êtes abonné via Google Play.",
      ],
    ],
    "after_cancel" => [
      "Vous conservez YouTube Premium jusqu'à la fin de votre période de facturation",
      "Après ça, les publicités reprennent sur YouTube",
      "Les vidéos téléchargées hors ligne seront supprimées",
      "Votre compte YouTube et vos abonnements aux chaînes sont préservés",
    ],
    "faq" => [
      ["YouTube reste-t-il utilisable gratuitement après l'annulation ?",
       "Oui — YouTube est entièrement gratuit avec des publicités. YouTube Premium supprime uniquement les publicités, permet les téléchargements hors ligne et la lecture en arrière-plan. Tout le contenu reste accessible gratuitement."],
      ["L'annulation de YouTube Premium annule-t-elle aussi YouTube Music ?",
       "Oui — YouTube Premium inclut YouTube Music Premium. En annulant YouTube Premium, vous perdez aussi les avantages de YouTube Music Premium (écoute hors ligne, lecture en arrière-plan)."],
      ["Puis-je obtenir un remboursement pour YouTube Premium ?",
       "Contactez le support Google via support.google.com si vous pensez avoir été prélevé par erreur. Google traite les remboursements au cas par cas."],
    ],
    "related" => ["netflix", "spotify", "disney-plus", "deezer"],
  ],

  "meetic" => [
    "name"     => "Meetic",
    "emoji"    => "💑",
    "color"    => "#E2001A",
    "tagline"  => "Annuler abonnement Meetic",
    "about"    => "Meetic est le principal site de rencontres en France. Les abonnements débutent à environ 29,99 €/mois et se renouvellent automatiquement. Annulez avant la date de renouvellement pour éviter le prélèvement suivant.",
    "refund"   => "Meetic n'offre généralement pas de remboursement pour la période en cours. Vous conservez l'accès jusqu'à la fin de votre abonnement.",
    "platforms" => [
      "web" => [
        "label" => "Site Meetic",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>meetic.fr</strong> et connectez-vous",
          "Cliquez sur votre <strong>profil</strong> en haut à droite",
          "Allez dans <strong>Paramètres → Abonnement</strong>",
          "Cliquez sur <strong>Annuler mon abonnement</strong>",
          "Confirmez l'annulation",
        ],
        "note"  => "Annulez au moins 48h avant la date de renouvellement.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages</strong> sur votre iPhone",
          "Appuyez sur votre <strong>identifiant Apple</strong> en haut",
          "Appuyez sur <strong>Abonnements</strong>",
          "Sélectionnez <strong>Meetic</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
        "note"  => "Si vous vous êtes abonné via l'App Store, annulez via l'App Store.",
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play</strong>",
          "Appuyez sur votre <strong>photo de profil</strong>",
          "Allez dans <strong>Paiements et abonnements → Abonnements</strong>",
          "Sélectionnez <strong>Meetic</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès à votre profil jusqu'à la fin de la période",
      "Vos messages et contacts restent accessibles",
      "Votre profil devient non-abonné à l'expiration",
      "Réabonnement possible à tout moment",
    ],
    "faq" => [
      ["Puis-je obtenir un remboursement Meetic ?",
       "Meetic ne rembourse pas la période en cours. Vous pouvez toutefois demander un geste commercial si un problème technique est survenu. Contactez le support via meetic.fr/contact."],
      ["Mon profil est-il supprimé après l'annulation ?",
       "Non — votre profil reste visible mais avec des fonctionnalités limitées (lecture seule des messages). Pour supprimer votre compte, allez dans Paramètres → Supprimer mon compte."],
      ["Quelle est la différence entre Meetic et Tinder ?",
       "Meetic cible les rencontres sérieuses avec des profils détaillés. Tinder est basé sur le swipe et convient davantage aux rencontres informelles. Meetic est plus populaire auprès des 30+ ans en France."],
    ],
    "related" => ["tinder", "bumble", "amazon-prime", "netflix"],
  ],

  "playstation-plus" => [
    "name"     => "PlayStation Plus",
    "emoji"    => "🎮",
    "color"    => "#003791",
    "tagline"  => "Annuler abonnement PlayStation Plus",
    "about"    => "PlayStation Plus propose trois formules : Essential (~8,99 €/mois), Extra (~13,99 €/mois) et Premium (~17,99 €/mois). L'abonnement se renouvelle automatiquement.",
    "refund"   => "PlayStation rembourse les abonnements inutilisés au prorata si vous n'avez téléchargé aucun jeu gratuit du mois. Contactez le support PlayStation pour une demande de remboursement.",
    "platforms" => [
      "web" => [
        "label" => "PlayStation Store (web)",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>store.playstation.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>avatar</strong> en haut à droite",
          "Sélectionnez <strong>Abonnements</strong>",
          "Cliquez sur <strong>Gérer</strong> à côté de PlayStation Plus",
          "Désactivez <strong>Renouvellement automatique</strong>",
        ],
        "note"  => "L'accès reste actif jusqu'à la fin de la période payée.",
      ],
      "iphone" => [
        "label" => "Via console PS4/PS5",
        "icon"  => "🕹️",
        "steps" => [
          "Allez dans <strong>Paramètres</strong> sur votre console",
          "Sélectionnez <strong>Utilisateurs et comptes</strong>",
          "Allez dans <strong>Compte → Paiement et abonnements</strong>",
          "Sélectionnez <strong>Abonnements</strong>",
          "Désactivez le <strong>renouvellement automatique</strong> de PS Plus",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès PS Plus jusqu'à la fin de la période",
      "Les jeux téléchargés via PS Plus deviennent inaccessibles à l'expiration",
      "Vos sauvegardes cloud restent 6 mois après l'expiration",
      "Les jeux achetés restent définitivement dans votre bibliothèque",
    ],
    "faq" => [
      ["Est-ce que je perds mes jeux PS Plus si j'annule ?",
       "Oui — les jeux obtenus gratuitement via PS Plus deviennent inaccessibles. Mais si vous vous réabonnez plus tard, vous retrouvez accès à tous les jeux précédemment réclamés qui sont encore au catalogue."],
      ["Puis-je annuler et garder le multijoueur en ligne ?",
       "Non — le multijoueur en ligne nécessite PS Plus Essential. Sans abonnement actif, vous ne pouvez pas jouer en ligne (sauf les jeux free-to-play)."],
      ["Quelle différence entre Essential, Extra et Premium ?",
       "Essential : jeux mensuels + multijoueur. Extra : + catalogue de 400+ jeux. Premium : + jeux PS1/PS2/PSP classiques et démos."],
    ],
    "related" => ["xbox-game-pass", "nintendo-switch", "tinder", "spotify"],
  ],

  "nordvpn" => [
    "name"     => "NordVPN",
    "emoji"    => "🔒",
    "color"    => "#4687FF",
    "tagline"  => "Annuler abonnement NordVPN",
    "about"    => "NordVPN propose des abonnements 1 mois, 1 an ou 2 ans. Les formules longue durée sont bien moins chères mais se renouvellent automatiquement au tarif plein.",
    "refund"   => "NordVPN offre une garantie satisfait ou remboursé de 30 jours. Si vous annulez dans les 30 jours suivant l'achat, vous êtes remboursé intégralement.",
    "platforms" => [
      "web" => [
        "label" => "Site NordVPN",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>nordvpn.com</strong> et connectez-vous",
          "Allez dans <strong>Mon compte</strong>",
          "Cliquez sur <strong>Abonnements</strong>",
          "Désactivez le <strong>renouvellement automatique</strong>",
          "Confirmez l'annulation",
        ],
        "note"  => "Pour un remboursement dans les 30 jours, contactez le support via le chat en direct.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>NordVPN</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
        "note"  => "Si abonné via l'App Store, la garantie 30j ne s'applique pas — contactez Apple.",
      ],
    ],
    "after_cancel" => [
      "Accès NordVPN jusqu'à la fin de la période payée",
      "Remboursement possible si annulation dans les 30 jours",
      "Vos paramètres et favoris sont conservés",
      "Réabonnement possible à tout moment",
    ],
    "faq" => [
      ["Comment obtenir un remboursement NordVPN ?",
       "Annulez dans les 30 jours suivant l'achat et contactez le support via nordvpn.com/fr/contact. Le remboursement est traité sous 5 à 10 jours ouvrables."],
      ["NordVPN est-il légal en France ?",
       "Oui, l'utilisation d'un VPN est légale en France. NordVPN ne conserve pas de logs et est basé au Panama, hors juridiction de l'UE."],
      ["Quelle est la différence entre NordVPN et Surfshark ?",
       "NordVPN est généralement considéré comme plus rapide et plus stable. Surfshark permet des connexions illimitées simultanées. Les deux offrent une garantie 30j."],
    ],
    "related" => ["surfshark", "expressvpn", "proton-vpn", "apple-icloud"],
  ],

  "tinder" => [
    "name"     => "Tinder",
    "emoji"    => "🔥",
    "color"    => "#FF6B6B",
    "tagline"  => "Annuler abonnement Tinder Gold ou Plus",
    "about"    => "Tinder propose Tinder+ (~9,99 €/mois), Tinder Gold (~24,99 €/mois) et Tinder Platinum. Les abonnements se renouvellent automatiquement chaque mois.",
    "refund"   => "Tinder ne rembourse généralement pas les abonnements en cours. Sur iOS, vous pouvez tenter une demande de remboursement via l'App Store d'Apple.",
    "platforms" => [
      "web" => [
        "label" => "Site Tinder",
        "icon"  => "💻",
        "steps" => [
          "Ouvrez <strong>tinder.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>profil</strong> en haut à gauche",
          "Allez dans <strong>Paramètres</strong>",
          "Sélectionnez <strong>Gérer les paiements</strong>",
          "Annulez le renouvellement automatique",
        ],
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Tinder</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez",
        ],
        "note"  => "Sur iPhone, l'abonnement Tinder est géré via l'App Store.",
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play</strong>",
          "Appuyez sur <strong>Paiements → Abonnements</strong>",
          "Sélectionnez <strong>Tinder</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès Tinder Gold/Plus jusqu'à la fin de la période",
      "Votre profil et vos matchs sont conservés",
      "Retour au profil gratuit à l'expiration",
      "Les super likes et boosts non utilisés sont perdus",
    ],
    "faq" => [
      ["Est-ce que je perds mes matchs si j'annule Tinder Gold ?",
       "Non — vos matchs et conversations sont conservés. Vous perdez uniquement les fonctionnalités premium (Passport, Rewind, Boosts illimités, etc.)."],
      ["Puis-je obtenir un remboursement Tinder ?",
       "Sur iOS : demandez un remboursement via reportaproblem.apple.com. Sur Android : contactez Google Play. Tinder lui-même ne rembourse pas."],
      ["Comment savoir si mon Tinder Gold est bien annulé ?",
       "Dans les Paramètres de l'App Store ou Google Play, vérifiez que Tinder n'apparaît plus sous 'Abonnements actifs'. Vous recevrez aussi un email de confirmation."],
    ],
    "related" => ["bumble", "meetic", "hinge", "netflix"],
  ],

  "linkedin" => [
    "name"     => "LinkedIn Premium",
    "emoji"    => "💼",
    "color"    => "#0077B5",
    "tagline"  => "Annuler abonnement LinkedIn Premium",
    "about"    => "LinkedIn Premium Career, Business ou Sales Navigator coûte entre 29,99 € et 99,99 €/mois. Un mois d'essai gratuit est souvent proposé — pensez à annuler avant la fin.",
    "refund"   => "LinkedIn ne rembourse pas les abonnements déjà facturés. Annulez avant la date de renouvellement pour éviter le prochain prélèvement.",
    "platforms" => [
      "web" => [
        "label" => "Site LinkedIn",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>linkedin.com</strong>",
          "Cliquez sur <strong>Moi → Paramètres et confidentialité</strong>",
          "Allez dans <strong>Abonnement et paiements</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Suivez les étapes et confirmez",
        ],
        "note"  => "LinkedIn tente souvent de vous proposer une pause ou une réduction avant l'annulation.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>LinkedIn</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
        "note"  => "Si abonné via l'app iOS, annulez via l'App Store.",
      ],
    ],
    "after_cancel" => [
      "Accès Premium jusqu'à la fin de la période payée",
      "Retour au profil gratuit à l'expiration",
      "InMails non utilisés expirés à l'annulation",
      "Votre profil et vos connexions restent intacts",
    ],
    "faq" => [
      ["Que se passe-t-il avec mes InMails si j'annule LinkedIn Premium ?",
       "Les InMails non envoyés sont perdus à l'annulation. Utilisez-les avant d'annuler."],
      ["Puis-je toujours voir qui a consulté mon profil après l'annulation ?",
       "Non — voir la liste complète des visiteurs est une fonctionnalité Premium. Avec le compte gratuit, vous ne voyez que les 5 dernières visites."],
      ["LinkedIn Premium vaut-il vraiment le coup ?",
       "Cela dépend de votre situation. Si vous êtes en recherche active d'emploi, le mois d'essai gratuit suffit souvent. Pour les commerciaux, Sales Navigator est plus adapté."],
    ],
    "related" => ["zoom", "dropbox", "microsoft-365", "google-workspace"],
  ],

  "microsoft-365" => [
    "name"     => "Microsoft 365",
    "emoji"    => "💼",
    "color"    => "#D83B01",
    "tagline"  => "Annuler abonnement Microsoft 365",
    "about"    => "Microsoft 365 Personnel (69,99 €/an ou 7 €/mois) ou Famille (99,99 €/an) inclut Word, Excel, PowerPoint, Outlook et 1 To de OneDrive. Annulez en ligne sans appel téléphonique.",
    "refund"   => "Microsoft rembourse au prorata pour les abonnements annuels annulés dans les 30 premiers jours. Après 30 jours, l'accès reste actif jusqu'à la fin de la période.",
    "platforms" => [
      "web" => [
        "label" => "account.microsoft.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>account.microsoft.com</strong>",
          "Cliquez sur <strong>Services et abonnements</strong>",
          "Trouvez <strong>Microsoft 365</strong> et cliquez <strong>Annuler</strong>",
          "Sélectionnez un motif et confirmez",
        ],
        "note"  => "Vos fichiers OneDrive passent en lecture seule après l'expiration — téléchargez-les avant.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Microsoft 365</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
        "note"  => "Si abonné via l'App Store, annulez uniquement par ce biais.",
      ],
    ],
    "after_cancel" => [
      "Accès aux apps Office jusqu'à la fin de la période",
      "OneDrive réduit à 5 Go gratuits à l'expiration",
      "Les fichiers existants restent accessibles (lecture seule si > 5 Go)",
      "Vous pouvez télécharger vos fichiers OneDrive à tout moment",
    ],
    "faq" => [
      ["Est-ce que je perds mes fichiers Word/Excel si j'annule ?",
       "Non — vos fichiers sont conservés. Mais les apps Office passent en mode lecture seule. Vous pouvez utiliser Office.com gratuitement ou télécharger LibreOffice."],
      ["Que devient mon espace OneDrive ?",
       "OneDrive revient à 5 Go gratuits. Si vous avez plus de 5 Go, les fichiers sont conservés mais inaccessibles jusqu'à libération d'espace ou réabonnement."],
      ["Microsoft 365 Famille vaut-il mieux que Personnel ?",
       "Famille (99,99 €/an) permet jusqu'à 6 utilisateurs — revient à ~16 €/personne/an. Personnel (69,99 €/an) pour 1 seul utilisateur. Famille est bien plus rentable si vous partagez."],
    ],
    "related" => ["google-workspace", "dropbox", "apple-icloud", "adobe"],
  ],

  "xbox-game-pass" => [
    "name"     => "Xbox Game Pass",
    "emoji"    => "🟢",
    "color"    => "#107C10",
    "tagline"  => "Annuler abonnement Xbox Game Pass",
    "about"    => "Xbox Game Pass Ultimate (~14,99 €/mois) inclut Game Pass PC, console et Xbox Live Gold. Annulez en ligne sans contact avec un service client.",
    "refund"   => "Microsoft ne rembourse généralement pas le mois en cours. L'accès reste actif jusqu'à la fin de la période payée.",
    "platforms" => [
      "web" => [
        "label" => "account.microsoft.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>account.microsoft.com</strong>",
          "Cliquez sur <strong>Services et abonnements</strong>",
          "Trouvez <strong>Game Pass</strong> et cliquez <strong>Annuler</strong>",
          "Confirmez l'annulation",
        ],
        "note"  => "Annulez à n'importe quel moment — l'accès reste jusqu'à la fin de la période.",
      ],
      "iphone" => [
        "label" => "Via console Xbox",
        "icon"  => "🕹️",
        "steps" => [
          "Appuyez sur le bouton <strong>Xbox</strong> de votre manette",
          "Allez dans <strong>Profil et système → Paramètres</strong>",
          "Sélectionnez <strong>Compte → Abonnements</strong>",
          "Choisissez <strong>Game Pass</strong> et désactivez le renouvellement",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès Game Pass jusqu'à la fin de la période",
      "Les jeux Game Pass deviennent inaccessibles à l'expiration",
      "Les jeux achetés restent définitivement",
      "Les DLC achetés pour des jeux Game Pass restent accessibles si vous possédez le jeu de base",
    ],
    "faq" => [
      ["Est-ce que je perds mes jeux si j'annule Xbox Game Pass ?",
       "Oui — les jeux joués via Game Pass deviennent inaccessibles. Mais si un jeu vous a plu, vous pouvez l'acheter à prix réduit (réduction membre) avant l'expiration."],
      ["Quelle différence entre Game Pass PC et Ultimate ?",
       "Game Pass PC (~9,99 €/mois) couvre uniquement les jeux PC. Ultimate (~14,99 €/mois) couvre console + PC + cloud gaming + Xbox Live Gold."],
      ["Xbox Game Pass est-il disponible en France ?",
       "Oui — Xbox Game Pass est disponible en France sur Xbox Series X|S, Xbox One et PC Windows. Le cloud gaming (xCloud) est inclus dans Ultimate."],
    ],
    "related" => ["playstation-plus", "ea-play", "discord-nitro", "apple-arcade"],
  ],

  "google-one" => [
    "name"     => "Google One",
    "emoji"    => "☁️",
    "color"    => "#4285F4",
    "tagline"  => "Annuler abonnement Google One",
    "about"    => "Google One étend le stockage Google Drive, Gmail et Google Photos au-delà des 15 Go gratuits. Formules dès 1,99 €/mois (100 Go). Annulez facilement depuis votre compte Google.",
    "refund"   => "Google ne rembourse pas les périodes en cours. L'accès reste actif jusqu'à la fin de la période payée.",
    "platforms" => [
      "web" => [
        "label" => "one.google.com",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>one.google.com</strong> et connectez-vous",
          "Cliquez sur <strong>Paramètres</strong> dans le menu gauche",
          "Faites défiler jusqu'à <strong>Annuler l'abonnement</strong>",
          "Confirmez l'annulation",
        ],
        "note"  => "Votre stockage revient à 15 Go gratuits. Les fichiers au-delà de 15 Go restent mais ne peuvent plus être modifiés.",
      ],
      "iphone" => [
        "label" => "App Google One (iOS)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez l'app <strong>Google One</strong>",
          "Appuyez sur les <strong>trois lignes</strong> en haut à gauche",
          "Allez dans <strong>Paramètres → Gérer l'abonnement</strong>",
          "Appuyez sur <strong>Annuler</strong>",
        ],
      ],
      "android" => [
        "label" => "App Google One (Android)",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez l'app <strong>Google One</strong>",
          "Appuyez sur le <strong>menu</strong> en haut à gauche",
          "Sélectionnez <strong>Paramètres</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Stockage revient à 15 Go gratuits à l'expiration",
      "Les fichiers au-delà de 15 Go restent mais ne peuvent être ni modifiés ni uploadés",
      "Google Photos : nouvelles photos comptent dans le quota gratuit",
      "Les avantages membres (cashback, VPN Google) sont perdus",
    ],
    "faq" => [
      ["Est-ce que je perds mes photos Google si j'annule Google One ?",
       "Non — vos photos sont conservées. Mais si vous dépassez 15 Go au total (Drive + Gmail + Photos), vous ne pourrez plus uploader de nouveaux fichiers. Libérez de l'espace ou réabonnez-vous."],
      ["Le VPN Google est-il inclus dans Google One ?",
       "Oui, le VPN Google est inclus dans les formules 2 To et plus. Il sera désactivé si vous passez à un plan inférieur ou annulez."],
      ["Quelle alternative à Google One ?",
       "iCloud+ (Apple), OneDrive (Microsoft 365) ou Dropbox. iCloud+ à 0,99 €/mois pour 50 Go est la moins chère des alternatives."],
    ],
    "related" => ["apple-icloud", "dropbox", "microsoft-365", "adobe"],
  ],

  "duolingo" => [
    "name"     => "Duolingo Super",
    "emoji"    => "🦜",
    "color"    => "#58CC02",
    "tagline"  => "Annuler abonnement Duolingo Super",
    "about"    => "Duolingo Super (anciennement Plus) coûte environ 6,99 €/mois ou 59,99 €/an. Il supprime les publicités, donne des vies illimitées et des streaks repairs. L'app reste gratuite après annulation.",
    "refund"   => "Duolingo offre un remboursement si vous annulez dans les 48h suivant l'achat. Au-delà, contactez le support à support.duolingo.com.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Duolingo</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
        "note"  => "Sur iOS, l'abonnement est géré par l'App Store.",
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play → Abonnements</strong>",
          "Sélectionnez <strong>Duolingo</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
      "web" => [
        "label" => "duolingo.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>duolingo.com</strong>",
          "Cliquez sur votre <strong>profil → Paramètres</strong>",
          "Allez dans <strong>Super Duolingo</strong>",
          "Cliquez sur <strong>Gérer l'abonnement</strong>",
        ],
        "note"  => "La gestion en ligne dépend du mode de souscription (App Store / Google Play / direct).",
      ],
    ],
    "after_cancel" => [
      "Accès à Duolingo gratuit avec publicités",
      "Vos progrès, streaks et cours sont conservés",
      "Retour aux vies limitées (5 par jour)",
      "Les streaks repairs ne sont plus disponibles",
    ],
    "faq" => [
      ["Est-ce que je perds ma progression si j'annule Duolingo Super ?",
       "Non — tous vos progrès, XP, ligues et streak sont conservés. Vous repassez simplement à la version gratuite avec publicités et vies limitées."],
      ["Duolingo est-il vraiment efficace pour apprendre une langue ?",
       "Duolingo est excellent pour maintenir une pratique quotidienne et le vocabulaire de base. Pour une maîtrise avancée, complétez avec Babbel (plus structuré) ou un tuteur natif."],
    ],
    "related" => ["babbel", "spotify", "netflix", "amazon-prime"],
  ],

  "apple-music" => [
    "name"     => "Apple Music",
    "emoji"    => "🎵",
    "color"    => "#FC3C44",
    "tagline"  => "Annuler abonnement Apple Music",
    "about"    => "Apple Music coûte 10,99 €/mois (individuel), 17,99 €/mois (famille, jusqu'à 6 membres) ou 5,99 €/mois (étudiant). Annulez directement depuis votre iPhone ou Mac.",
    "refund"   => "Apple ne rembourse généralement pas les abonnements Apple Music en cours. Annulez avant la date de renouvellement.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Apple Music</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez",
        ],
        "note"  => "Votre musique téléchargée sera supprimée à l'expiration.",
      ],
      "web" => [
        "label" => "Via iTunes (PC Windows)",
        "icon"  => "💻",
        "steps" => [
          "Ouvrez <strong>iTunes</strong> sur Windows",
          "Allez dans <strong>Compte → Afficher mon compte</strong>",
          "Sous <strong>Abonnements</strong>, cliquez <strong>Gérer</strong>",
          "Cliquez <strong>Modifier</strong> à côté d'Apple Music",
          "Sélectionnez <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès Apple Music jusqu'à la fin de la période",
      "Les titres téléchargés hors ligne sont supprimés",
      "Votre bibliothèque musicale personnelle (fichiers propres) est conservée",
      "Les playlists créées restent visibles mais les titres Apple Music deviennent inaccessibles",
    ],
    "faq" => [
      ["Est-ce que je perds mes playlists si j'annule Apple Music ?",
       "Vos playlists sont conservées mais les titres Apple Music ne sont plus lus. Seuls les morceaux que vous possédez (achetés ou importés) restent disponibles."],
      ["Apple Music vs Spotify — lequel choisir ?",
       "Apple Music a une qualité audio légèrement supérieure (lossless, Dolby Atmos) et s'intègre mieux dans l'écosystème Apple. Spotify a un meilleur algorithme de recommandation et est disponible sur plus de plateformes."],
    ],
    "related" => ["spotify", "deezer", "youtube-premium", "amazon-music"],
  ],

  "apple-icloud" => [
    "name"     => "iCloud+",
    "emoji"    => "☁️",
    "color"    => "#147EFB",
    "tagline"  => "Annuler abonnement iCloud+",
    "about"    => "iCloud+ propose 50 Go (0,99 €/mois), 200 Go (2,99 €/mois) ou 2 To (9,99 €/mois). Votre iPhone sauvegarde automatiquement dans iCloud — assurez-vous d'avoir une alternative avant d'annuler.",
    "refund"   => "Apple ne rembourse pas les abonnements iCloud en cours. Annulez avant la date de renouvellement pour éviter le prochain prélèvement.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → iCloud</strong>",
          "Appuyez sur <strong>Gérer le stockage du compte</strong>",
          "Sélectionnez <strong>Changer de formule de stockage</strong>",
          "Choisissez <strong>Rétrograder vers le forfait gratuit</strong>",
          "Confirmez",
        ],
        "note"  => "Le stockage revient à 5 Go gratuits. Les sauvegardes dépassant 5 Go seront supprimées.",
      ],
      "web" => [
        "label" => "iCloud.com",
        "icon"  => "💻",
        "steps" => [
          "Allez sur <strong>icloud.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>nom → Paramètres de compte</strong>",
          "Sous <strong>Stockage iCloud</strong>, cliquez <strong>Gérer</strong>",
          "Sélectionnez <strong>Changer de formule</strong>",
          "Choisissez <strong>Gratuit (5 Go)</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Stockage revient à 5 Go gratuits",
      "Les sauvegardes iPhone peuvent être supprimées si elles dépassent 5 Go",
      "Les photos iCloud restent accessibles si elles rentrent dans 5 Go",
      "Nouvelles sauvegardes automatiques désactivées si quota dépassé",
    ],
    "faq" => [
      ["Est-ce que je perds mes photos si j'annule iCloud+ ?",
       "Non — mais si votre espace dépasse 5 Go, vos photos sur iCloud ne seront plus synchronisées. Téléchargez vos photos sur votre Mac ou PC avant de réduire le stockage."],
      ["Quelle est la meilleure alternative à iCloud+ pour le stockage ?",
       "Google One (2 Go gratuits / 1,99 €/mois pour 100 Go) et OneDrive (5 Go gratuits, inclus avec Microsoft 365) sont les meilleures alternatives."],
    ],
    "related" => ["google-one", "dropbox", "microsoft-365", "apple-music"],
  ],

  "bumble" => [
    "name"     => "Bumble",
    "emoji"    => "🐝",
    "color"    => "#FFC629",
    "tagline"  => "Annuler abonnement Bumble Boost ou Premium",
    "about"    => "Bumble propose Boost (~24,99 €/mois) et Premium (~34,99 €/mois). L'abonnement se renouvelle automatiquement. Annulez via l'App Store ou Google Play.",
    "refund"   => "Bumble ne rembourse généralement pas les abonnements en cours. Sur iOS, tentez une demande via l'App Store d'Apple.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Bumble</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play → Abonnements</strong>",
          "Sélectionnez <strong>Bumble</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez",
        ],
      ],
      "web" => [
        "label" => "bumble.com",
        "icon"  => "💻",
        "steps" => [
          "Ouvrez <strong>bumble.com</strong> et connectez-vous",
          "Allez dans <strong>Paramètres → Gérer l'abonnement</strong>",
          "Cliquez sur <strong>Annuler</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès Boost/Premium jusqu'à la fin de la période",
      "Votre profil et vos matchs sont conservés",
      "Retour au profil gratuit avec fonctionnalités limitées",
      "Les Spotlight et SuperSwipes non utilisés sont perdus",
    ],
    "faq" => [
      ["Est-ce que je perds mes matchs si j'annule Bumble Boost ?",
       "Non — vos matchs et conversations sont conservés. Vous perdez uniquement les fonctionnalités premium comme Extend (prolonger les matchs), SuperSwipe illimités, etc."],
      ["Quelle est la différence entre Bumble Boost et Premium ?",
       "Boost (~24,99 €/mois) ajoute l'extension de matchs, rematch, et voir qui vous a liké. Premium (~34,99 €/mois) ajoute le mode Incognito, les filtres avancés et Spotlight."],
    ],
    "related" => ["tinder", "meetic", "hinge", "netflix"],
  ],

  "zoom" => [
    "name"     => "Zoom",
    "emoji"    => "📹",
    "color"    => "#2D8CFF",
    "tagline"  => "Annuler abonnement Zoom Pro ou Business",
    "about"    => "Zoom Pro coûte 13,99 €/mois/hôte (ou 139,99 €/an). Il supprime la limite de 40 minutes des réunions gratuites. Annulez via votre compte Zoom en ligne.",
    "refund"   => "Zoom offre un remboursement au prorata pour les abonnements annuels annulés dans les 30 premiers jours. Contactez le support Zoom.",
    "platforms" => [
      "web" => [
        "label" => "zoom.us",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>zoom.us</strong>",
          "Cliquez sur <strong>Plans et tarification</strong> ou <strong>Facturation</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Suivez les étapes et confirmez",
        ],
        "note"  => "Pour les abonnements annuels annulés dans les 30j, demandez un remboursement au prorata.",
      ],
    ],
    "after_cancel" => [
      "Retour au plan gratuit (réunions limitées à 40 min)",
      "Historique des réunions conservé",
      "Enregistrements cloud supprimés après 30 jours",
      "Téléchargez vos enregistrements cloud avant l'annulation",
    ],
    "faq" => [
      ["Zoom gratuit est-il suffisant pour un usage personnel ?",
       "Oui — Zoom gratuit permet des réunions jusqu'à 100 participants pendant 40 minutes. Pour des réunions sans limite de temps, Zoom Pro est nécessaire."],
      ["Puis-je annuler Zoom à tout moment ?",
       "Oui — vous pouvez annuler à tout moment. L'accès reste actif jusqu'à la fin de la période. Pour un remboursement, annulez dans les 30 jours."],
    ],
    "related" => ["linkedin", "microsoft-365", "dropbox", "google-workspace"],
  ],

  "dropbox" => [
    "name"     => "Dropbox",
    "emoji"    => "📦",
    "color"    => "#0061FF",
    "tagline"  => "Annuler abonnement Dropbox Plus ou Business",
    "about"    => "Dropbox Plus coûte 9,99 €/mois (2 To, facturé annuellement). Dropbox Business Professional coûte 16,58 €/mois. Annulez facilement depuis votre compte Dropbox.",
    "refund"   => "Dropbox ne rembourse pas les abonnements annuels en cours. Pour les abonnements mensuels, l'accès reste jusqu'à la fin du mois.",
    "platforms" => [
      "web" => [
        "label" => "dropbox.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>dropbox.com</strong>",
          "Cliquez sur votre <strong>avatar → Paramètres</strong>",
          "Allez dans l'onglet <strong>Abonnement</strong>",
          "Cliquez sur <strong>Annuler mon plan</strong>",
          "Confirmez l'annulation",
        ],
        "note"  => "Le stockage revient à 2 Go gratuits. Vos fichiers restent mais ne peuvent être uploadés au-delà.",
      ],
    ],
    "after_cancel" => [
      "Stockage revient à 2 Go gratuits",
      "Vos fichiers sont conservés (accès lecture seule si > 2 Go)",
      "Synchronisation stoppée si quota dépassé",
      "Téléchargez vos fichiers avant de réduire le plan",
    ],
    "faq" => [
      ["Est-ce que je perds mes fichiers si j'annule Dropbox ?",
       "Non — vos fichiers restent dans Dropbox. Mais si vous dépassez 2 Go, vous ne pourrez plus uploader de nouveaux fichiers. Téléchargez vos données au préalable."],
      ["Quelle est la meilleure alternative à Dropbox ?",
       "Google One (100 Go pour 1,99 €/mois), OneDrive (inclus dans Microsoft 365) et iCloud+ (50 Go pour 0,99 €/mois) sont moins chers et bien intégrés à leurs écosystèmes."],
    ],
    "related" => ["google-one", "apple-icloud", "microsoft-365", "notion"],
  ],

  "babbel" => [
    "name"     => "Babbel",
    "emoji"    => "🗣️",
    "color"    => "#5B2D8E",
    "tagline"  => "Annuler abonnement Babbel",
    "about"    => "Babbel propose des abonnements 1 mois (~12,95 €), 3 mois (~8,95 €/mois) ou 12 mois (~6,95 €/mois) pour apprendre 14 langues. Annulez en ligne avant le renouvellement.",
    "refund"   => "Babbel offre une garantie satisfait ou remboursé de 20 jours pour les nouveaux abonnements. Contactez le support à support.babbel.com.",
    "platforms" => [
      "web" => [
        "label" => "babbel.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>babbel.com</strong>",
          "Cliquez sur votre <strong>nom → Paramètres du compte</strong>",
          "Sélectionnez <strong>Abonnement</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez",
        ],
        "note"  => "Annulez au moins 24h avant la date de renouvellement.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Babbel</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
        "note"  => "Si abonné via l'App Store, annulez par ce biais.",
      ],
    ],
    "after_cancel" => [
      "Accès Babbel jusqu'à la fin de la période payée",
      "Vos progrès et cours complétés sont conservés",
      "Retour au mode gratuit très limité",
      "Remboursement 20j pour les nouveaux abonnés",
    ],
    "faq" => [
      ["Babbel est-il mieux que Duolingo pour apprendre une langue ?",
       "Babbel est plus structuré et axé grammaire — idéal pour des bases solides. Duolingo est plus ludique et motivant pour maintenir une pratique quotidienne. Beaucoup utilisent les deux."],
      ["Puis-je garder mes progrès après l'annulation ?",
       "Oui — vos leçons complétées et progressions sont sauvegardées. Si vous vous réabonnez, vous reprenez là où vous vous étiez arrêté."],
    ],
    "related" => ["duolingo", "spotify", "netflix", "amazon-prime"],
  ],

  "twitch" => [
    "name"     => "Twitch",
    "emoji"    => "🟣",
    "color"    => "#9146FF",
    "tagline"  => "Annuler abonnement Twitch",
    "about"    => "Twitch propose des abonnements à des chaînes (4,99 € à 24,99 €/mois) et Twitch Turbo (~8,99 €/mois) qui supprime les publicités sur toutes les chaînes. Les abonnements se renouvellent automatiquement.",
    "refund"   => "Twitch ne rembourse généralement pas les abonnements en cours. Annulez avant la date de renouvellement pour éviter le prochain prélèvement.",
    "platforms" => [
      "web" => [
        "label" => "Site Twitch",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>twitch.tv</strong> et connectez-vous",
          "Cliquez sur votre <strong>avatar</strong> en haut à droite",
          "Sélectionnez <strong>Abonnements</strong>",
          "Trouvez la chaîne ou Twitch Turbo et cliquez <strong>Gérer</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
        ],
        "note"  => "Chaque abonnement à une chaîne est indépendant — annulez-les séparément.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Twitch</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès aux avantages abonné jusqu'à la fin de la période",
      "Badge et emotes abonné supprimés à l'expiration",
      "L'historique de chat reste accessible",
      "Vous pouvez vous réabonner à tout moment",
    ],
    "faq" => [
      ["Comment annuler tous mes abonnements Twitch en même temps ?",
       "Malheureusement, Twitch ne permet pas d'annuler tous les abonnements en un clic. Allez dans votre profil → Abonnements et annulez chaque chaîne individuellement."],
      ["Qu'est-ce que Twitch Turbo et comment l'annuler ?",
       "Twitch Turbo (8,99 €/mois) supprime les publicités sur toutes les chaînes et donne accès à des emotes exclusives. Annulez via twitch.tv → Paramètres → Abonnements → Twitch Turbo."],
    ],
    "related" => ["youtube-premium", "discord-nitro", "spotify", "netflix"],
  ],

  "norton" => [
    "name"     => "Norton",
    "emoji"    => "🛡️",
    "color"    => "#FFD700",
    "tagline"  => "Annuler abonnement Norton",
    "about"    => "Norton 360 (environ 34,99 €/an en renouvellement) propose un antivirus, un VPN, un gestionnaire de mots de passe et une surveillance du dark web. Le renouvellement automatique est activé par défaut.",
    "refund"   => "Norton offre une garantie satisfait ou remboursé de 60 jours pour les nouveaux abonnements. Contactez le support Norton pour obtenir un remboursement.",
    "platforms" => [
      "web" => [
        "label" => "my.norton.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>my.norton.com</strong>",
          "Cliquez sur <strong>Mon abonnement</strong>",
          "Sélectionnez <strong>Désactiver le renouvellement automatique</strong>",
          "Confirmez",
        ],
        "note"  => "Pour un remboursement dans les 60 jours, contactez le support Norton via le chat en direct.",
      ],
    ],
    "after_cancel" => [
      "Protection antivirus active jusqu'à la fin de la période",
      "Garantie remboursement 60 jours pour les nouveaux abonnés",
      "Le VPN Norton et le gestionnaire de mots de passe désactivés à l'expiration",
      "Réabonnement possible à tout moment",
    ],
    "faq" => [
      ["Comment désactiver le renouvellement automatique Norton ?",
       "Connectez-vous sur my.norton.com, allez dans Mon abonnement et désactivez le renouvellement automatique. Vous pouvez aussi appeler le 0800 026 1525 (France)."],
      ["Norton est-il encore pertinent face aux antivirus gratuits ?",
       "Windows Defender (gratuit, intégré à Windows 11) offre une protection de base solide. Norton ajoute un VPN, une surveillance du dark web et une protection multi-appareils. Pour un usage basique, Defender suffit."],
    ],
    "related" => ["mcafee", "nordvpn", "surfshark", "microsoft-365"],
  ],

  "badoo" => [
    "name"     => "Badoo Premium",
    "emoji"    => "💜",
    "color"    => "#6B2D8F",
    "tagline"  => "Annuler abonnement Badoo Premium",
    "about"    => "Badoo Premium (environ 34,99 €/mois) ajoute la possibilité de voir qui vous a liké, le mode Incognito et des filtres avancés. L'abonnement se renouvelle automatiquement.",
    "refund"   => "Badoo ne rembourse généralement pas les abonnements en cours. Annulez avant la date de renouvellement.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Badoo</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play → Abonnements</strong>",
          "Sélectionnez <strong>Badoo</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
      "web" => [
        "label" => "badoo.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>badoo.com</strong>",
          "Allez dans <strong>Paramètres → Confidentialité</strong>",
          "Cliquez sur <strong>Gérer mon abonnement</strong>",
          "Annulez le renouvellement automatique",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès Premium jusqu'à la fin de la période payée",
      "Votre profil et vos contacts restent accessibles",
      "Retour aux fonctionnalités gratuites à l'expiration",
      "Badoo reste disponible gratuitement avec publicités",
    ],
    "faq" => [
      ["Badoo est-il gratuit après l'annulation du Premium ?",
       "Oui — Badoo propose une version gratuite avec publicités. Le Premium ajoute uniquement des fonctionnalités bonus (voir qui vous a liké, Incognito, Super Pouvoirs)."],
      ["Quelle différence entre Badoo et Tinder ?",
       "Badoo est plus populaire en Europe et en Amérique latine, avec un système de jeu basé sur les rencontres locales. Tinder est plus orienté swipe et plus populaire en France chez les 18-25 ans."],
    ],
    "related" => ["tinder", "bumble", "meetic", "happn"],
  ],

  "mcafee" => [
    "name"     => "McAfee",
    "emoji"    => "🔒",
    "color"    => "#C8102E",
    "tagline"  => "Annuler abonnement McAfee",
    "about"    => "McAfee Total Protection (environ 39,99 €/an en renouvellement) inclut un antivirus, un VPN et une surveillance d'identité. Désactivez le renouvellement automatique en ligne.",
    "refund"   => "McAfee offre une garantie satisfait ou remboursé de 30 jours. Contactez le support via mcafee.com/fr ou par téléphone.",
    "platforms" => [
      "web" => [
        "label" => "account.mcafee.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>account.mcafee.com</strong>",
          "Cliquez sur <strong>Mon compte → Abonnements</strong>",
          "Sélectionnez votre abonnement",
          "Cliquez sur <strong>Désactiver le renouvellement automatique</strong>",
          "Confirmez",
        ],
        "note"  => "McAfee propose souvent une réduction avant l'annulation — refusez si vous voulez annuler.",
      ],
    ],
    "after_cancel" => [
      "Protection active jusqu'à la fin de la période",
      "Garantie remboursement 30 jours pour les nouveaux abonnés",
      "Le VPN et la surveillance d'identité désactivés à l'expiration",
      "Windows Defender prend automatiquement le relais",
    ],
    "faq" => [
      ["Comment désactiver le renouvellement automatique McAfee ?",
       "Connectez-vous sur account.mcafee.com, allez dans Abonnements et désactivez le renouvellement. Vous pouvez aussi appeler le 0 800 944 495 (France, gratuit)."],
      ["McAfee vaut-il mieux que Windows Defender ?",
       "Windows Defender offre une protection de base solide et gratuite. McAfee ajoute un VPN, une protection multi-appareils et une surveillance du dark web. Pour un PC Windows, Defender suffit souvent."],
    ],
    "related" => ["norton", "nordvpn", "surfshark", "microsoft-365"],
  ],

  "ea-play" => [
    "name"     => "EA Play",
    "emoji"    => "🎮",
    "color"    => "#FF6600",
    "tagline"  => "Annuler abonnement EA Play",
    "about"    => "EA Play (4,99 €/mois ou 29,99 €/an) donne accès à une bibliothèque de jeux EA, des essais anticipés et des réductions. EA Play Pro (~14,99 €/mois) ajoute les nouveaux jeux EA en accès complet dès le lancement.",
    "refund"   => "EA ne rembourse généralement pas les abonnements en cours. Annulez avant la date de renouvellement pour éviter le prochain prélèvement.",
    "platforms" => [
      "web" => [
        "label" => "EA Account (web)",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>account.ea.com</strong>",
          "Allez dans <strong>Abonnements EA Play</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez",
        ],
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>EA Play</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
      "android" => [
        "label" => "Via PlayStation/Xbox",
        "icon"  => "🕹️",
        "steps" => [
          "Sur <strong>PS5/PS4</strong> : Paramètres → Utilisateurs → Paiements → Abonnements → EA Play",
          "Sur <strong>Xbox</strong> : Profil → Paramètres → Compte → Abonnements → EA Play",
          "Désactivez le renouvellement automatique",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès EA Play jusqu'à la fin de la période payée",
      "Les jeux EA Play deviennent inaccessibles à l'expiration",
      "Les jeux achetés séparément restent dans votre bibliothèque",
      "Les sauvegardes cloud EA sont conservées",
    ],
    "faq" => [
      ["EA Play est-il inclus dans Xbox Game Pass Ultimate ?",
       "Oui — EA Play est inclus dans Xbox Game Pass Ultimate sans frais supplémentaires. Si vous avez Game Pass Ultimate, vous n'avez pas besoin de souscrire EA Play séparément."],
      ["Que se passe-t-il avec mes jeux EA si j'annule EA Play ?",
       "Les jeux accessibles via EA Play (bibliothèque incluse) deviennent inaccessibles. Seuls les jeux que vous avez achetés séparément restent dans votre bibliothèque."],
    ],
    "related" => ["playstation-plus", "xbox-game-pass", "discord-nitro", "apple-arcade"],
  ],

  "google-workspace" => [
    "name"     => "Google Workspace",
    "emoji"    => "🏢",
    "color"    => "#4285F4",
    "tagline"  => "Annuler abonnement Google Workspace",
    "about"    => "Google Workspace (à partir de 6,90 €/utilisateur/mois) inclut Gmail professionnel, Drive, Meet, Docs et plus encore. Géré via Google Admin Console.",
    "refund"   => "Google rembourse au prorata les jours non utilisés pour les abonnements mensuels annulés en cours de mois. Contactez le support Google Workspace.",
    "platforms" => [
      "web" => [
        "label" => "Google Admin Console",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>admin.google.com</strong> avec votre compte administrateur",
          "Allez dans <strong>Facturation → Abonnements</strong>",
          "Sélectionnez <strong>Google Workspace</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez et téléchargez vos données avant",
        ],
        "note"  => "Seul l'administrateur du domaine peut annuler Google Workspace. Exportez vos données via Google Takeout avant l'annulation.",
      ],
    ],
    "after_cancel" => [
      "Accès aux données pendant 60 jours après l'annulation",
      "Exportez tous vos emails, Drive et données avant l'expiration",
      "Le domaine email @votredomaine.com cesse de fonctionner",
      "Les comptes utilisateurs sont désactivés",
    ],
    "faq" => [
      ["Comment récupérer mes données avant d'annuler Google Workspace ?",
       "Utilisez Google Takeout (takeout.google.com) pour exporter Gmail, Drive, Contacts et Calendar. Faites-le avant d'annuler — vous avez 60 jours après l'annulation pour accéder aux données."],
      ["Quelle différence entre Google Workspace et Google One ?",
       "Google Workspace est pour les entreprises (email @votredomaine, outils collaboratifs). Google One est pour les particuliers (stockage Cloud personnel). Ce sont deux produits distincts."],
    ],
    "related" => ["microsoft-365", "dropbox", "zoom", "notion"],
  ],

  "happn" => [
    "name"     => "Happn Premium",
    "emoji"    => "💙",
    "color"    => "#1F2D3D",
    "tagline"  => "Annuler abonnement Happn Premium",
    "about"    => "Happn est une application de rencontres basée sur la géolocalisation, populaire en France. Le Premium (~24,99 €/mois) ajoute les Super Likes illimités, la visibilité prioritaire et les filtres avancés.",
    "refund"   => "Happn ne rembourse généralement pas les abonnements en cours. Annulez via l'App Store ou Google Play avant la date de renouvellement.",
    "platforms" => [
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Happn</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play → Abonnements</strong>",
          "Sélectionnez <strong>Happn</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès Premium jusqu'à la fin de la période payée",
      "Votre profil et vos croisements sont conservés",
      "Retour à la version gratuite avec fonctionnalités limitées",
      "Happn reste utilisable gratuitement après l'annulation",
    ],
    "faq" => [
      ["Happn est-il gratuit ?",
       "Oui — Happn propose une version gratuite qui permet de voir les profils des personnes croisées et d'envoyer des likes. Le Premium ajoute les Super Likes illimités et des filtres avancés."],
      ["Quelle est la particularité de Happn par rapport à Tinder ?",
       "Happn montre uniquement les personnes que vous avez physiquement croisées dans la vie réelle. C'est une app très populaire à Paris et dans les grandes villes françaises."],
    ],
    "related" => ["tinder", "bumble", "badoo", "meetic"],
  ],

  "surfshark" => [
    "name"     => "Surfshark",
    "emoji"    => "🦈",
    "color"    => "#1E3A5F",
    "tagline"  => "Annuler abonnement Surfshark VPN",
    "about"    => "Surfshark (~2,30 €/mois sur l'offre 2 ans) est un VPN avec connexions appareils illimitées. Les abonnements se renouvellent automatiquement au tarif plein après la période promotionnelle.",
    "refund"   => "Surfshark offre une garantie satisfait ou remboursé de 30 jours. Contactez le support via le chat en direct sur surfshark.com.",
    "platforms" => [
      "web" => [
        "label" => "surfshark.com",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>surfshark.com</strong>",
          "Allez dans <strong>Mon compte → Facturation</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez",
        ],
        "note"  => "Pour le remboursement 30j, utilisez le chat en direct sur surfshark.com/contact.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Surfshark</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès VPN jusqu'à la fin de la période payée",
      "Remboursement possible dans les 30 jours",
      "Connexions illimitées jusqu'à l'expiration",
      "Réabonnement possible à tout moment",
    ],
    "faq" => [
      ["Comment obtenir un remboursement Surfshark ?",
       "Contactez le support Surfshark via le chat en direct sur surfshark.com/contact dans les 30 jours suivant votre achat. Le remboursement est traité sous 3 à 5 jours ouvrables."],
      ["Surfshark permet-il vraiment des connexions illimitées ?",
       "Oui — Surfshark est l'un des rares VPN sans limite de connexions simultanées. Vous pouvez protéger tous vos appareils (PC, mobile, TV, tablette) avec un seul abonnement."],
    ],
    "related" => ["nordvpn", "expressvpn", "proton-vpn", "norton"],
  ],

  "ligue-1" => [
    "name"     => "Ligue 1",
    "emoji"    => "⚽",
    "color"    => "#003D8F",
    "tagline"  => "Annuler abonnement Ligue 1",
    "about"    => "La Ligue 1 est diffusée en France principalement sur DAZN (droits principaux, ~13,99 €/mois) et sur beIN Sports. L'annulation se fait directement auprès de votre diffuseur.",
    "refund"   => "DAZN offre une garantie satisfait ou remboursé de 7 jours. beIN Sports ne rembourse généralement pas la période en cours.",
    "platforms" => [
      "web" => [
        "label" => "DAZN (droits principaux)",
        "icon"  => "💻",
        "steps" => [
          "Rendez-vous sur <strong>dazn.com</strong> et connectez-vous",
          "Cliquez sur votre <strong>avatar → Mon compte</strong>",
          "Sélectionnez <strong>Abonnement</strong>",
          "Cliquez sur <strong>Annuler l'abonnement</strong>",
          "Confirmez",
        ],
        "note"  => "DAZN détient les droits principaux de la Ligue 1 depuis 2024. Si vous regardez via Canal+ ou beIN Sports, annulez directement chez eux.",
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>DAZN</strong> (ou beIN Sports)",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Accès aux matchs jusqu'à la fin de la période payée",
      "Les replays des matchs déjà diffusés restent accessibles",
      "Vous pouvez vous réabonner à tout moment",
      "Canal+ propose parfois des offres incluant la Ligue 1",
    ],
    "faq" => [
      ["Où regarder la Ligue 1 en France en 2024 ?",
       "Depuis 2024, DAZN détient les droits principaux (8 matchs/journée, ~13,99 €/mois). beIN Sports diffuse 2 matchs/journée (~15 €/mois). Canal+ diffuse parfois des affiches en clair. Il est possible de combiner DAZN + beIN Sports pour voir tous les matchs."],
      ["Puis-je regarder la Ligue 1 sans abonnement ?",
       "Non, la Ligue 1 n'est pas diffusée gratuitement en France. Amazon Prime Video n'a plus les droits. Il faut au minimum un abonnement DAZN (~13,99 €/mois) pour accéder à la plupart des matchs."],
    ],
    "related" => ["dazn", "canal-plus", "amazon-prime", "disney-plus"],
  ],

  "bouygues" => [
    "name"     => "Bouygues Telecom",
    "emoji"    => "📱",
    "color"    => "#005EB8",
    "tagline"  => "Résilier abonnement Bouygues Telecom",
    "about"    => "Bouygues Telecom propose des offres mobile, box internet (Bbox) et téléphone fixe. La résiliation est possible sans frais après la période d'engagement (généralement 12 ou 24 mois).",
    "refund"   => "Si vous résiliez avant la fin de l'engagement, des frais de résiliation anticipée s'appliquent (jusqu'à plusieurs centaines d'euros selon l'offre). Après l'engagement, la résiliation est gratuite.",
    "platforms" => [
      "web" => [
        "label" => "Espace client Bouygues",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>bouyguestelecom.fr</strong>",
          "Allez dans <strong>Mon espace client → Mes contrats</strong>",
          "Sélectionnez le contrat à résilier",
          "Cliquez sur <strong>Résilier ce contrat</strong>",
          "Confirmez par email ou courrier recommandé si demandé",
        ],
        "note"  => "La résiliation prend effet 10 jours après réception de votre demande.",
      ],
      "iphone" => [
        "label" => "Par courrier recommandé",
        "icon"  => "✉️",
        "steps" => [
          "Envoyez un courrier recommandé avec AR à : Bouygues Telecom — Service Résiliation, TSA 59013, 60643 Chantilly Cedex",
          "Précisez votre numéro de compte et le(s) contrat(s) à résilier",
          "Indiquez votre numéro de ligne et la date souhaitée",
          "Gardez l'accusé de réception comme preuve",
        ],
        "note"  => "Le courrier recommandé reste la méthode la plus sûre pour les résiliations.",
      ],
    ],
    "after_cancel" => [
      "Résiliation effective 10 jours après réception de la demande",
      "Portez votre numéro mobile chez le nouvel opérateur (RIO gratuit)",
      "Retournez le matériel Bbox dans les délais indiqués",
      "La dernière facture inclut les jours proratisés",
    ],
    "faq" => [
      ["Comment obtenir mon code RIO Bouygues Telecom ?",
       "Appelez le <strong>3179</strong> (gratuit, 24h/24) depuis votre mobile Bouygues. Votre code RIO vous sera communiqué automatiquement par SMS. Donnez ce code à votre nouvel opérateur pour porter votre numéro."],
      ["Quels sont les frais de résiliation anticipée chez Bouygues ?",
       "Si vous résiliez avant la fin de votre engagement, vous devez payer les mensualités restantes à 25% du montant initial. Pour une Bbox à 19,99 €/mois avec 12 mois restants : 12 × 19,99 × 25% = ~60 €. Après l'engagement, la résiliation est gratuite."],
    ],
    "related" => ["sfr", "orange", "free", "nordvpn"],
  ],

  "molotov" => [
    "name"     => "Molotov",
    "emoji"    => "📺",
    "color"    => "#FF3C00",
    "tagline"  => "Annuler abonnement Molotov Plus",
    "about"    => "Molotov est une application française de télévision en streaming. Molotov Plus (~5,99 €/mois) ajoute l'enregistrement de programmes, le multi-écrans et des chaînes supplémentaires. La version de base est gratuite.",
    "refund"   => "Molotov ne rembourse généralement pas les abonnements en cours. La version gratuite reste disponible après annulation.",
    "platforms" => [
      "web" => [
        "label" => "molotov.tv",
        "icon"  => "💻",
        "steps" => [
          "Connectez-vous sur <strong>molotov.tv</strong>",
          "Cliquez sur votre <strong>avatar → Mon compte</strong>",
          "Allez dans <strong>Abonnement</strong>",
          "Cliquez sur <strong>Annuler mon abonnement</strong>",
          "Confirmez",
        ],
      ],
      "iphone" => [
        "label" => "iPhone (App Store)",
        "icon"  => "🍎",
        "steps" => [
          "Ouvrez <strong>Réglages → [votre nom] → Abonnements</strong>",
          "Sélectionnez <strong>Molotov</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
      "android" => [
        "label" => "Android (Google Play)",
        "icon"  => "🤖",
        "steps" => [
          "Ouvrez <strong>Google Play → Abonnements</strong>",
          "Sélectionnez <strong>Molotov</strong>",
          "Appuyez sur <strong>Annuler l'abonnement</strong>",
        ],
      ],
    ],
    "after_cancel" => [
      "Retour à la version gratuite avec les chaînes TNT",
      "Les enregistrements programmés sont annulés",
      "Les enregistrements déjà effectués restent accessibles temporairement",
      "TF1, France 2, M6 et les chaînes TNT restent gratuites",
    ],
    "faq" => [
      ["Molotov est-il gratuit ?",
       "Oui — Molotov propose une version gratuite avec toutes les chaînes TNT (TF1, France 2, France 3, Canal+, France 5, M6, Arte, C8, W9, etc.) en direct. Molotov Plus ajoute l'enregistrement et les chaînes payantes."],
      ["Quelle est la différence entre Molotov et MyCanal ?",
       "Molotov est une app d'agrégation de chaînes gratuites + quelques chaînes payantes. MyCanal est l'app officielle de Canal+ avec son propre catalogue de films/séries. Molotov est idéal pour remplacer la TNT classique."],
    ],
    "related" => ["canal-plus", "netflix", "disney-plus", "youtube-premium"],
  ],

];

// ── Routage ──────────────────────────────────────────────────────────────────
$slug = $_GET['app'] ?? '';
$app  = $apps_data[$slug] ?? null;

// Traitement du formulaire de demande de guide
$req_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['req_service'])) {
  $req_service = trim(strip_tags($_POST['req_service'] ?? ''));
  $req_email   = trim(strip_tags($_POST['req_email']   ?? ''));
  if ($req_service) {
    $log = date('Y-m-d H:i:s') . "\tService: $req_service\tEmail: $req_email\tPage: fr/$slug\n";
    file_put_contents(dirname(__DIR__) . '/guide_requests.txt', $log, FILE_APPEND | LOCK_EX);
    @mail('hello@britetodo.com',
      "Guide Request (FR): $req_service",
      "Service: $req_service\nEmail: $req_email\nPage: fr/$slug",
      "From: noreply@howtocancelsubscription.com\r\nReply-To: $req_email"
    );
    $req_sent = true;
  }
}

if (!$app) {
  http_response_code(404);
}

$platforms_count = $app ? count($app['platforms']) : 0;
$platform_names  = $app ? implode(', ', array_map(fn($p) => $p['label'], $app['platforms'])) : '';
$title    = $app ? "Comment résilier {$app['name']} — Guide étape par étape" : "Page introuvable";
$desc     = $app ? "Comment résilier {$app['name']} sur {$platform_names} — étape par étape. {$app['tagline']}. Guide gratuit, moins de 2 minutes." : "";
$canon    = $app ? "https://howtocancelsubscription.com/fr/resilier-$slug/" : "https://howtocancelsubscription.com/fr/";
$platforms = $app ? array_values($app['platforms']) : [];
$first_key = $app ? array_keys($app['platforms'])[0] : '';
?>
<!DOCTYPE html>
<html lang="fr">
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
  <meta property="og:image" content="https://howtocancelsubscription.com/icon_192.png?v=2">
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"HowTo",
    "name":"Comment résilier <?= htmlspecialchars($app['name']) ?>",
    "description":"<?= addslashes($desc) ?>",
    "inLanguage":"fr",
    "totalTime":"PT2M",
    "tool":{"@type":"HowToTool","name":"Navigateur web ou smartphone"},
    "step":[<?php
      $first = reset($app['platforms']);
      echo implode(',', array_map(fn($s,$i) =>
        '{"@type":"HowToStep","position":'.($i+1).',"name":"Étape '.($i+1).'","text":'.json_encode(strip_tags($s)).'}',
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
      {"@type":"ListItem","position":1,"name":"Accueil","item":"https://howtocancelsubscription.com"},
      {"@type":"ListItem","position":2,"name":"Guides français","item":"https://howtocancelsubscription.com/fr/"},
      {"@type":"ListItem","position":3,"name":"Comment résilier <?= htmlspecialchars($app['name']) ?>","item":"<?= $canon ?>"}
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
    }
  </style>
</head>
<body>

<header class="header">
  <a href="/" class="logo"><span>✕</span> HowToCancel<span>Subscription</span></a>
  <a href="/fr/" class="back-btn">← Tous les services</a>
</header>

<?php if (!$app): ?>
<div class="wrap" style="padding-top:40px;text-align:center">
  <h1 style="font-size:28px;margin-bottom:12px">Guide introuvable</h1>
  <p style="color:#666;margin-bottom:24px">Nous n'avons pas encore de guide pour ce service.</p>
  <a href="/fr/" style="background:#ff5c5c;color:#fff;padding:12px 28px;border-radius:50px;font-weight:700">← Retour aux guides</a>
</div>
<?php else: ?>

<!-- Breadcrumb -->
<nav class="breadcrumb">
  <a href="/">Accueil</a>
  <span class="sep">›</span>
  <a href="/fr/">Guides français</a>
  <span class="sep">›</span>
  <span>Résilier <?= htmlspecialchars($app['name']) ?></span>
</nav>

<div class="wrap">

  <!-- App hero -->
  <div class="app-hero">
    <div class="app-icon" style="background:<?= $app['color'] ?>22"><?= $app['emoji'] ?></div>
    <div class="info">
      <h1>Comment résilier <?= htmlspecialchars($app['name']) ?></h1>
      <p class="tagline"><?= $app['tagline'] ?></p>
      <div class="meta">
        <div class="badge good">✓ Sans appel téléphonique</div>
        <div class="badge good">✓ Moins de 2 minutes</div>
        <div class="badge">Guide gratuit</div>
      </div>
    </div>
  </div>

  <!-- About -->
  <div class="info-card" style="margin-top:0;margin-bottom:20px">
    <p style="font-size:14px;color:#555;line-height:1.75"><?= $app['about'] ?></p>
  </div>

  <!-- Steps -->
  <div class="sec-header">
    <h2>Instructions étape par étape</h2>
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
    <h2><span class="ico">✅</span> Après la résiliation</h2>
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
      <div><strong>Politique de remboursement :</strong> <?= $app['refund'] ?></div>
    </div>
    <?php endif; ?>
  </div>

  <!-- FAQ -->
  <?php if (!empty($app['faq'])): ?>
  <div class="sec-header">
    <h2>Questions fréquentes</h2>
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

  <!-- Related guides -->
  <?php if (!empty($app['related'])): ?>
  <div class="sec-header">
    <h2>Guides similaires</h2>
    <div class="sec-line"></div>
  </div>
  <div class="related-grid">
    <?php
    $emojis = [
      "canal-plus"=>"📺","free"=>"📡","sfr"=>"📶","amazon-prime"=>"📦",
      "orange"=>"🟠","netflix"=>"🎬","spotify"=>"🎵","disney-plus"=>"✨",
      "audible"=>"🎧","adobe"=>"🖌️","hbo-max"=>"🎥","canva"=>"🎨",
      "crunchyroll"=>"🎌","deezer"=>"🎶","hellofresh"=>"🥗","apple-tv"=>"🍎",
      "chatgpt"=>"🤖","paramount-plus"=>"⛰️","youtube-premium"=>"▶️",
    ];
    $names = [
      "canal-plus"=>"Canal+","free"=>"Free","sfr"=>"SFR","amazon-prime"=>"Amazon Prime",
      "orange"=>"Orange","netflix"=>"Netflix","spotify"=>"Spotify","disney-plus"=>"Disney+",
      "audible"=>"Audible","adobe"=>"Adobe","hbo-max"=>"Max (HBO Max)","canva"=>"Canva Pro",
      "crunchyroll"=>"Crunchyroll","deezer"=>"Deezer","hellofresh"=>"HelloFresh",
      "apple-tv"=>"Apple TV+","chatgpt"=>"ChatGPT Plus","paramount-plus"=>"Paramount+",
      "youtube-premium"=>"YouTube Premium",
    ];
    foreach ($app['related'] as $rel_slug):
      $rel_name  = $names[$rel_slug]  ?? $rel_slug;
      $rel_emoji = $emojis[$rel_slug] ?? "📱";
      $has_guide = isset($apps_data[$rel_slug]);
    ?>
    <a href="/fr/resilier-<?= $rel_slug ?>/" class="related-card">
      <div class="ico"><?= $rel_emoji ?></div>
      <div>
        <div class="name"><?= $rel_name ?></div>
        <div class="sub"><?= $has_guide ? 'Guide complet →' : 'Guide bientôt disponible' ?></div>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <!-- SEO content block -->
  <div class="seo-block">
    <h2>À propos des abonnements <?= htmlspecialchars($app['name']) ?></h2>
    <p><?= $app['about'] ?> Ce guide couvre toutes les plateformes — <?= $platform_names ?> — pour que vous puissiez résilier depuis l'appareil que vous avez sous la main.</p>

    <h3>Avant de résilier <?= htmlspecialchars($app['name']) ?></h3>
    <p>Avant de résilier, vérifiez quelques points : <strong>sur quelle plateforme vous vous êtes abonné</strong> (App Store, Google Play ou directement sur le site web), car vous devez résilier au même endroit où vous vous êtes inscrit. Si vous vous êtes abonné sur le site web, la résiliation via les Réglages iPhone ne fonctionnera pas — et inversement.</p>
    <p>Notez également votre <strong>prochaine date de facturation</strong>. <?= htmlspecialchars($app['name']) ?> ne supprime pas votre compte lors de la résiliation — vous conservez l'accès jusqu'à la fin de la période. Il n'y a aucune pénalité pour une résiliation anticipée, mais vous ne serez pas remboursé des jours non utilisés, sauf mention contraire dans la politique de remboursement ci-dessus.</p>

    <h3>Puis-je me réabonner après la résiliation ?</h3>
    <p>Oui — vous pouvez vous réabonner à <?= htmlspecialchars($app['name']) ?> à tout moment. Les données de votre compte, vos préférences et votre historique sont généralement conservés pendant 30 à 90 jours après la résiliation, selon le service. Il vous suffit de vous reconnecter et de choisir un nouveau plan.</p>

    <h3>Que faire si je ne trouve pas le bouton de résiliation ?</h3>
    <p>Certains services cachent intentionnellement l'option de résiliation. Suivez exactement les étapes ci-dessus — si vous ne trouvez toujours pas, vérifiez que vous êtes connecté au bon compte (certains utilisateurs ont plusieurs comptes). Vous pouvez également contacter le support de <?= htmlspecialchars($app['name']) ?> directement et demander la résiliation par chat ou e-mail — ils sont légalement tenus de la traiter.</p>
  </div>

  <!-- App promo -->
  <a href="https://apps.apple.com/us/app/cancel-subscriptions-app/id6759456590" class="app-promo-banner" target="_blank" rel="noopener">
    <div class="app-ico"><img src="/icon_180.png?v=2" alt="Application résiliation abonnements" title="Annuler les abonnements — Application iPhone gratuite"></div>
    <div class="info">
      <div class="tag">Application iPhone gratuite</div>
      <h3>Voir tous vos abonnements — application iPhone gratuite</h3>
      <p>Scannez et résiliez vos abonnements depuis votre iPhone — trouvez tous vos abonnements actifs en quelques secondes.</p>
      <div class="dl-btn">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
        Télécharger gratuitement
      </div>
    </div>
  </a>

</div><!-- /wrap -->

<?php endif; ?>

<div class="wrap" style="margin-bottom:0">
  <div class="request-block">
    <div class="request-left">
      <div class="req-icon">🔍</div>
      <div>
        <strong>Vous ne trouvez pas votre service ?</strong>
        <span>Dites-le nous — nous l'ajouterons</span>
      </div>
    </div>
    <?php if ($req_sent): ?>
      <div class="req-success">✓ Merci ! Guide bientôt disponible.</div>
    <?php else: ?>
    <form class="req-form" method="post">
      <input type="text" name="req_service" placeholder="Nom du service…" maxlength="80" required>
      <input type="email" name="req_email" placeholder="Votre e-mail (facultatif)">
      <button type="submit">Envoyer la demande</button>
    </form>
    <?php endif; ?>
  </div>
</div>

<footer>
  <p>© <?= date('Y') ?> HowToCancelSubscription.com — Guides gratuits pour résilier n'importe quel abonnement</p>
  <p style="margin-top:8px"><a href="/">Accueil</a><a href="/fr/">Guides français</a><a href="/privacy/">Politique de confidentialité</a><a href="/contact/">Contact</a></p>
</footer>

<script>
function switchTab(key, btn) {
  document.querySelectorAll('.platform-block').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.getElementById('tab-' + key).classList.add('active');
  btn.classList.add('active');
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
