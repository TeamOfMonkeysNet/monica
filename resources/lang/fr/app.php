<?php

return [
    'update' => 'Mettre à jour',
    'save' => 'Sauver',
    'add' => 'Ajouter',
    'cancel' => 'Annuler',
    'delete_confirm' => 'Êtes-vous sûr ?',
    'delete' => 'Supprimer',
    'edit' => 'Éditer',
    'upload' => 'Envoyer',
    'download' => 'Télécharger',
    'save_close' => 'Enregistrer et fermer',
    'close' => 'Fermer',
    'copy' => 'Copier',
    'create' => 'Créer',
    'remove' => 'Enlever',
    'revoke' => 'Révoquer',
    'done' => 'Terminé',
    'back' => 'Précédent',
    'verify' => 'Vérifier',
    'for' => 'pour',
    'new' => 'nouveau',
    'unknown' => 'Je ne sais pas',
    'load_more' => 'Charger plus',
    'loading' => 'Chargement...',
    'with' => 'avec',
    'days' => 'jour|jour|jours',
    'today' => 'aujourd\'hui',
    'yesterday' => 'hier',
    'another_day' => 'un autre jour',
    'date' => 'Date',
    'type' => 'Type',
    'zoom' => 'Zoom',
    'upgrade' => 'Mettre à jour pour débloquer',
    'percent_uploaded' => '{percent}% téléchargé',
    'next' => 'Suivant ❯',
    'previous' => '❮ Précédent',
    'retry' => 'Réessayer',

    'application_title' => 'Monica – gestionnaire de relations personnelles',
    'application_description' => 'Monica est un outil pour gérer vos interactions avec vos proches, vos amis et votre famille.',
    'application_og_title' => 'Ayez de meilleures relations avec vos proches. GRC gratuit en ligne pour les amis et la famille.',

    'markdown_description' => 'Souhaitez-vous formatter votre texte d’une belle manière ? Nous supportons le format Markdown pour ajouter du gras, italique, des listes et plus encore.',
    'markdown_link' => 'Lire la documentation',

    'header_settings_link' => 'Paramètres',
    'header_logout_link' => 'Déconnexion',
    'header_changelog_link' => 'Évolutions du produit',

    'main_nav_cta' => 'Ajouter des gens',
    'main_nav_dashboard' => 'Tableau de bord',
    'main_nav_family' => 'Contacts',
    'main_nav_journal' => 'Journal',
    'main_nav_activities' => 'Activités',
    'main_nav_tasks' => 'Tâches',

    'footer_remarks' => 'Une remarque ?',
    'footer_send_email' => 'Envoyez moi un courriel',
    'footer_privacy' => 'Politique de confidentialité',
    'footer_release' => 'Notes de version',
    'footer_newsletter' => 'Infolettre',
    'footer_source_code' => 'Contribuer',
    'footer_version' => 'Version : :version',
    'footer_new_version' => 'Une nouvelle version est disponible',

    'footer_modal_version_whats_new' => 'Quoi de neuf ?',
    'footer_modal_version_release_away' => 'Vous avez une version de retard par rapport à la dernière version disponible.|Vous avez :number versions de retard par rapport à la dernière version disponible. Vous devriez mettre à jour votre instance.',

    'breadcrumb_dashboard' => 'Tableau de bord',
    'breadcrumb_list_contacts' => 'Liste de contacts',
    'breadcrumb_archived_contacts' => 'Contacts archivés',
    'breadcrumb_journal' => 'Journal',
    'breadcrumb_settings' => 'Paramètres',
    'breadcrumb_settings_export' => 'Exporter',
    'breadcrumb_settings_users' => 'Utilisateurs',
    'breadcrumb_settings_users_add' => 'Ajouter un utilisateur',
    'breadcrumb_settings_subscriptions' => 'Abonnement',
    'breadcrumb_settings_import' => 'Importer',
    'breadcrumb_settings_import_report' => 'Rapport d’import',
    'breadcrumb_settings_import_upload' => 'Téléversez',
    'breadcrumb_settings_tags' => 'Étiquettes',
    'breadcrumb_add_significant_other' => 'Ajouter un partenaire',
    'breadcrumb_edit_significant_other' => 'Mettre à jour un partenaire',
    'breadcrumb_add_note' => 'Ajouter une note',
    'breadcrumb_edit_note' => 'Modifier la note',
    'breadcrumb_api' => 'API',
    'breadcrumb_edit_introductions' => 'Comment vous vous êtes rencontrés',
    'breadcrumb_settings_personalization' => 'Personnalisation',
    'breadcrumb_settings_security' => 'Sécurité',
    'breadcrumb_settings_security_2fa' => 'Authentification à deux facteurs',
    'breadcrumb_profile' => 'Profil de :name',

    'gender_male' => 'Homme',
    'gender_female' => 'Femme',
    'gender_none' => 'Aucun',

    'error_title' => 'Oups ! Une erreur est survenue.',
    'error_unauthorized' => 'Vous n’avez pas le droit de modifier cette ressource.',
    'error_save' => 'Une erreur est intervenue pendant la sauvegarde des données.',
    'error_try_again' => 'Une erreur s’est produite. Merci d’essayer à nouveau.',
    'error_id' => 'Erreur numéro : :id',
    'error_unavailable' => 'Service non disponible',
    'error_maintenance' => 'Maintenance en cours. On revient vite !',
    'error_help' => 'On revient tout de suite.',
    'error_twitter' => 'Suivez <a href="https://twitter.com/:twitter">notre compte Twitter</a> pour être alerté de l’évolution de la situation.',

    'default_save_success' => 'Les modifications ont été enregistrées.',

    'compliance_title' => 'Désolé pour l’interruption.',
    'compliance_desc' => 'Nous avons changé nos <a href=":urlterm" hreflang=":hreflang">Conditions d’Utilisation</a> et notre <a href=":url" hreflang=":hreflang">Politique de Confidentialité</a>. Nous devons vous demander de les consulter et les accepter si vous voulez continuer à utiliser votre compte.',
    'compliance_desc_end' => 'Nous ne faisons rien de méchant avec vos données ou votre compte et nous ne le ferons jamais.',
    'compliance_terms' => 'Accepter les nouvelles conditions et politique de confidentialité',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => 'Relations amoureuses',
    'relationship_type_group_family' => 'Relations familiales',
    'relationship_type_group_friend' => 'Relations amicales',
    'relationship_type_group_work' => 'Relations de travail',
    'relationship_type_group_other' => 'Autre type de relations',

    'relationship_type_partner' => 'conjoint',
    'relationship_type_partner_female' => 'conjointe',
    'relationship_type_partner_with_name' => 'conjoint de :name',
    'relationship_type_partner_female_with_name' => 'conjointe de :name',

    'relationship_type_spouse' => 'épouse',
    'relationship_type_spouse_female' => 'épouse',
    'relationship_type_spouse_with_name' => 'épouse de :name',
    'relationship_type_spouse_female_with_name' => 'épouse de :name',

    'relationship_type_date' => 'rendez-vous',
    'relationship_type_date_female' => 'rendez-vous',
    'relationship_type_date_with_name' => 'rendez-vous de :name',
    'relationship_type_date_female_with_name' => 'rendez-vous de :name',

    'relationship_type_lover' => 'amant',
    'relationship_type_lover_female' => 'amante',
    'relationship_type_lover_with_name' => 'amant de :name',
    'relationship_type_lover_female_with_name' => 'amante de :name',

    'relationship_type_inlovewith' => 'amoureux',
    'relationship_type_inlovewith_female' => 'amoureuse',
    'relationship_type_inlovewith_with_name' => 'une personne dont :name est amoureux',
    'relationship_type_inlovewith_female_with_name' => 'une personne dont :name est amoureuse',

    'relationship_type_lovedby' => 'aimé par',
    'relationship_type_lovedby_female' => 'aimée par',
    'relationship_type_lovedby_with_name' => 'amant secret de :name',
    'relationship_type_lovedby_female_with_name' => 'amante secrète de :name',

    'relationship_type_ex' => 'ex-petit ami',
    'relationship_type_ex_female' => 'ex-petite amie',
    'relationship_type_ex_with_name' => 'ex-petit ami de :name',
    'relationship_type_ex_female_with_name' => 'ex-petite amie de :name',

    'relationship_type_parent' => 'père',
    'relationship_type_parent_female' => 'mère',
    'relationship_type_parent_with_name' => 'père de :name',
    'relationship_type_parent_female_with_name' => 'mère de :name',

    'relationship_type_child' => 'fils',
    'relationship_type_child_female' => 'fille',
    'relationship_type_child_with_name' => 'fils de :name',
    'relationship_type_child_female_with_name' => 'fille de :name',

    'relationship_type_sibling' => 'frère',
    'relationship_type_sibling_female' => 'sœur',
    'relationship_type_sibling_with_name' => 'frère de :name',
    'relationship_type_sibling_female_with_name' => 'sœur de :name',

    'relationship_type_grandparent' => 'grand-père',
    'relationship_type_grandparent_female' => 'grand-mère',
    'relationship_type_grandparent_with_name' => 'grand-père de :name',
    'relationship_type_grandparent_female_with_name' => 'grand-mère de :name',

    'relationship_type_grandchild' => 'petit-fils',
    'relationship_type_grandchild_female' => 'petite-fille',
    'relationship_type_grandchild_with_name' => 'petit-fils de :name',
    'relationship_type_grandchild_female_with_name' => 'petite-fille de :name',

    'relationship_type_uncle' => 'oncle',
    'relationship_type_uncle_female' => 'tante',
    'relationship_type_uncle_with_name' => 'oncle de :name',
    'relationship_type_uncle_female_with_name' => 'tante de :name',

    'relationship_type_nephew' => 'neveu',
    'relationship_type_nephew_female' => 'nièce',
    'relationship_type_nephew_with_name' => 'neuveu de :name',
    'relationship_type_nephew_female_with_name' => 'nièce de :name',

    'relationship_type_cousin' => 'cousin',
    'relationship_type_cousin_female' => 'cousine',
    'relationship_type_cousin_with_name' => 'cousin de :name',
    'relationship_type_cousin_female_with_name' => 'cousine de :name',

    'relationship_type_godfather' => 'parrain',
    'relationship_type_godfather_female' => 'marraine',
    'relationship_type_godfather_with_name' => 'parrain de :name',
    'relationship_type_godfather_female_with_name' => 'marraine de :name',

    'relationship_type_godson' => 'filleul',
    'relationship_type_godson_female' => 'filleule',
    'relationship_type_godson_with_name' => 'filleul de :name',
    'relationship_type_godson_female_with_name' => 'filleule de :name',

    'relationship_type_friend' => 'ami',
    'relationship_type_friend_female' => 'amie',
    'relationship_type_friend_with_name' => 'ami de :name',
    'relationship_type_friend_female_with_name' => 'amie de :name',

    'relationship_type_bestfriend' => 'meilleur ami',
    'relationship_type_bestfriend_female' => 'meilleure amie',
    'relationship_type_bestfriend_with_name' => 'meilleur ami de :name',
    'relationship_type_bestfriend_female_with_name' => 'meilleure amie de :name',

    'relationship_type_colleague' => 'collègue',
    'relationship_type_colleague_female' => 'collègue',
    'relationship_type_colleague_with_name' => 'collègue de :name',
    'relationship_type_colleague_female_with_name' => 'collègue de :name',

    'relationship_type_boss' => 'patron',
    'relationship_type_boss_female' => 'patronne',
    'relationship_type_boss_with_name' => 'patron de :name',
    'relationship_type_boss_female_with_name' => 'patronne de :name',

    'relationship_type_subordinate' => 'employé',
    'relationship_type_subordinate_female' => 'employée',
    'relationship_type_subordinate_with_name' => 'employé de :name',
    'relationship_type_subordinate_female_with_name' => 'employée de :name',

    'relationship_type_mentor' => 'mentor',
    'relationship_type_mentor_female' => 'mentore',
    'relationship_type_mentor_with_name' => 'mentor de :name',
    'relationship_type_mentor_female_with_name' => 'mentore de :name',

    'relationship_type_protege' => 'protégé',
    'relationship_type_protege_female' => 'protégée',
    'relationship_type_protege_with_name' => 'protégé de :name',
    'relationship_type_protege_female_with_name' => 'protégée de :name',

    'relationship_type_ex_husband' => 'ex-mari',
    'relationship_type_ex_husband_female' => 'ex-femme',
    'relationship_type_ex_husband_with_name' => 'ex-mari de :name',
    'relationship_type_ex_husband_female_with_name' => 'ex-femme de :name',

    // emotions
    'emotion_primary_love' => 'Amour',
    'emotion_primary_joy' => 'Joie',
    'emotion_primary_surprise' => 'Suprise',
    'emotion_primary_anger' => 'Colère',
    'emotion_primary_sadness' => 'Tristesse',
    'emotion_primary_fear' => 'Peur',

    'emotion_secondary_affection' => 'Affection',
    'emotion_secondary_lust' => 'Luxure',
    'emotion_secondary_longing' => 'Nostalgie',
    'emotion_secondary_cheerfulness' => 'Bonne humeur',
    'emotion_secondary_zest' => 'Entrain',
    'emotion_secondary_contentment' => 'Satisfaction',
    'emotion_secondary_pride' => 'Fierté',
    'emotion_secondary_optimism' => 'Optimisme',
    'emotion_secondary_enthrallment' => 'Captivation',
    'emotion_secondary_relief' => 'Soulagement',
    'emotion_secondary_surprise' => 'Surprise !',
    'emotion_secondary_irritation' => 'Irritation',
    'emotion_secondary_exasperation' => 'Exaspération',
    'emotion_secondary_rage' => 'Rage',
    'emotion_secondary_disgust' => 'Dégoût',
    'emotion_secondary_envy' => 'Envie',
    'emotion_secondary_suffering' => 'Souffrance',
    'emotion_secondary_sadness' => 'Tristesse',
    'emotion_secondary_disappointment' => 'Déception',
    'emotion_secondary_shame' => 'Honte',
    'emotion_secondary_neglect' => 'Négligence',
    'emotion_secondary_sympathy' => 'Sympathie',
    'emotion_secondary_horror' => 'Horreur',
    'emotion_secondary_nervousness' => 'Nervosité',

    'emotion_adoration' => 'Adoration',
    'emotion_affection' => 'Affection',
    'emotion_love' => 'Amour',
    'emotion_fondness' => 'Tendresse',
    'emotion_liking' => 'Affectation',
    'emotion_attraction' => 'Attraction',
    'emotion_caring' => 'Soucieux',
    'emotion_tenderness' => 'Tendresse',
    'emotion_compassion' => 'Sympathie',
    'emotion_sentimentality' => 'Sentimentalité',
    'emotion_arousal' => 'Excitation',
    'emotion_desire' => 'Désir',
    'emotion_lust' => 'Luxure',
    'emotion_passion' => 'Passion',
    'emotion_infatuation' => 'Engouement',
    'emotion_longing' => 'Nostalgie',
    'emotion_amusement' => 'Amusement',
    'emotion_bliss' => 'Béatitude',
    'emotion_cheerfulness' => 'Bonne humeur',
    'emotion_gaiety' => 'Gaieté',
    'emotion_glee' => 'Allégresse',
    'emotion_jolliness' => 'Gaîté',
    'emotion_joviality' => 'Jovialité',
    'emotion_joy' => 'Joie',
    'emotion_delight' => 'Plaisir',
    'emotion_enjoyment' => 'Jouissance',
    'emotion_gladness' => 'Allégresse',
    'emotion_happiness' => 'Bonheur',
    'emotion_jubilation' => 'Jubilation',
    'emotion_elation' => 'Exultation',
    'emotion_satisfaction' => 'Satisfaction',
    'emotion_ecstasy' => 'Extase',
    'emotion_euphoria' => 'Euphorie',
    'emotion_enthusiasm' => 'Enthousiasme',
    'emotion_zeal' => 'Ferveur',
    'emotion_zest' => 'Entrain',
    'emotion_excitement' => 'Excitation',
    'emotion_thrill' => 'Frisson',
    'emotion_exhilaration' => 'Euphorie',
    'emotion_contentment' => 'Satisfaction',
    'emotion_pleasure' => 'Plaisir',
    'emotion_pride' => 'Fierté',
    'emotion_eagerness' => 'Ardeur',
    'emotion_hope' => 'Espoir',
    'emotion_optimism' => 'Optimisme',
    'emotion_enthrallment' => 'Captivation',
    'emotion_rapture' => 'Ravissement',
    'emotion_relief' => 'Soulagement',
    'emotion_amazement' => 'Stupéfaction',
    'emotion_surprise' => 'Surprise',
    'emotion_astonishment' => 'Étonnement',
    'emotion_aggravation' => 'Aggravation',
    'emotion_irritation' => 'Irritation',
    'emotion_agitation' => 'Agitation',
    'emotion_annoyance' => 'Gêne',
    'emotion_grouchiness' => 'Rogne',
    'emotion_grumpiness' => 'Mauvaise humeur',
    'emotion_exasperation' => 'Exaspération',
    'emotion_frustration' => 'Frustration',
    'emotion_anger' => 'Colère',
    'emotion_rage' => 'Rage',
    'emotion_outrage' => 'Indignation',
    'emotion_fury' => 'Fureur',
    'emotion_wrath' => 'Rage',
    'emotion_hostility' => 'Hostilité',
    'emotion_ferocity' => 'Férocité',
    'emotion_bitterness' => 'Amertume',
    'emotion_hate' => 'Haine',
    'emotion_loathing' => 'Répugnance',
    'emotion_scorn' => 'Mépris',
    'emotion_spite' => 'Dépit',
    'emotion_vengefulness' => 'Vengeance',
    'emotion_dislike' => 'Je n\'aime pas',
    'emotion_resentment' => 'Ressentiment',
    'emotion_disgust' => 'Dégoût',
    'emotion_revulsion' => 'Répulsion',
    'emotion_contempt' => 'Mépris',
    'emotion_envy' => 'Envie',
    'emotion_jealousy' => 'Jalousie',
    'emotion_agony' => 'Agonie',
    'emotion_suffering' => 'Souffrance',
    'emotion_hurt' => 'Douloureux',
    'emotion_anguish' => 'Angoisse',
    'emotion_depression' => 'Dépression',
    'emotion_despair' => 'Désespoir',
    'emotion_hopelessness' => 'Désespoir',
    'emotion_gloom' => 'Morosité',
    'emotion_glumness' => 'Tristesse',
    'emotion_sadness' => 'Tristesse',
    'emotion_unhappiness' => 'Malheur',
    'emotion_grief' => 'Chagrin',
    'emotion_sorrow' => 'Chagrin',
    'emotion_woe' => 'Malheur',
    'emotion_misery' => 'Misère',
    'emotion_melancholy' => 'Mélancolie',
    'emotion_dismay' => 'Consternation',
    'emotion_disappointment' => 'Déception',
    'emotion_displeasure' => 'Mécontentement',
    'emotion_guilt' => 'Culpabilité',
    'emotion_shame' => 'Honte',
    'emotion_regret' => 'Regret',
    'emotion_remorse' => 'Remords',
    'emotion_alienation' => 'Aliénation',
    'emotion_isolation' => 'Isolement',
    'emotion_neglect' => 'Négligence',
    'emotion_loneliness' => 'Solitude',
    'emotion_rejection' => 'Rejet',
    'emotion_homesickness' => 'Mal du pays',
    'emotion_defeat' => 'Échec',
    'emotion_dejection' => 'Découragement',
    'emotion_insecurity' => 'Insécurité',
    'emotion_embarrassment' => 'Embarras',
    'emotion_humiliation' => 'Humiliation',
    'emotion_insult' => 'Insulte',
    'emotion_pity' => 'Dommage',
    'emotion_sympathy' => 'Sympathie',
    'emotion_alarm' => 'Inquiet',
    'emotion_shock' => 'Choc',
    'emotion_fear' => 'Peur',
    'emotion_fright' => 'Frayeur',
    'emotion_horror' => 'Horreur',
    'emotion_terror' => 'Terreur',
    'emotion_panic' => 'Panique',
    'emotion_hysteria' => 'Hystérie',
    'emotion_mortification' => 'Humilié',
    'emotion_anxiety' => 'Anxiété',
    'emotion_nervousness' => 'Nervosité',
    'emotion_tenseness' => 'Tension',
    'emotion_uneasiness' => 'Malaise',
    'emotion_apprehension' => 'Appréhension',
    'emotion_worry' => 'Inquiétude',
    'emotion_distress' => 'Détresse',
    'emotion_dread' => 'Effroi',

    // weather
    'weather_clear-day' => 'Temps clair',
    'weather_clear-night' => 'Nuit claire',
    'weather_rain' => 'Pluie',
    'weather_snow' => 'Neige',
    'weather_sleet' => 'Neige fondue',
    'weather_wind' => 'Vent',
    'weather_fog' => 'Brouillard',
    'weather_cloudy' => 'Nuageux',
    'weather_partly-cloudy-day' => 'Partiellement nuageux',
    'weather_partly-cloudy-night' => 'Partiellement nuageux',
    'weather_current_temperature_celsius' => ':temperature °C',
    'weather_current_temperature_fahrenheit' => ':temperature °F',
    'weather_current_title' => 'Météo actuelle',
];
