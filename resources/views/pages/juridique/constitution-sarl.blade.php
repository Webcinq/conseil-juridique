@extends('layouts.app')

@section('title', 'Constitution de SARL à Marrakech - Accompagnement expert local, démarches rapides et suivi jusqu\'à l\'immatriculation')
@section('meta-description', 'Lancez votre SARL à Marrakech avec un expert local : rédaction des statuts, démarches administratives et accompagnement post-création.')
@section('keywords', 'constitution SARL marrakech, création société, statuts SARL, immatriculation registre commerce')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('accueil') }}" class="text-blue-600 hover:text-blue-800">Accueil</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="{{ route('conseil-juridique') }}" class="text-blue-600 hover:text-blue-800">Conseil Juridique</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Constitution de SARL</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-purple-100 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-building text-purple-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Constituer une SARL à Marrakech : Accompagnement Professionnel pour une Constitution Rapide et à Moindre Coût
                </h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Vous êtes entrepreneur et vous souhaitez structurer votre activité par la constitution d'une société nouvelle ? 
                    Notre cabinet vous accompagne pas à pas dans la constitution de votre SARL à Marrakech. Grâce à notre expertise juridique 
                    et à une connaissance approfondie des formalités administratives, nous vous aidons à constituer votre société conformément à vos objectifs professionnels.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Constitution -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Constituer une Entreprise avec Notre Expertise Dédiée aux Entrepreneurs</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Nous mettons notre savoir-faire à votre service pour la constitution, le développement et la pérennisation d'une entreprise performante et durable.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Choix Forme Juridique -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-balance-scale text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">1. Choix de la Forme Juridique</h3>
                        <p class="text-blue-100">SARL, SARLAU, SCI, etc.</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Ensemble, nous étudions votre situation et vos besoins spécifiques. En fonction de vos objectifs stratégiques, 
                            nous vous conseillons sur la forme juridique qui s'adapte mieux à votre projet.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Analyse de votre situation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Conseil personnalisé</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Explication des avantages et contraintes</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Rédaction des Actes -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-file-contract text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">2. Rédaction des Actes</h3>
                        <p class="text-green-100">Démarches administratives</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Notre service chargé de la constitution des sociétés rédige les statuts clairs en intégrant des clauses personnalisées 
                            pour bien sécuriser les relations entre les associés.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Rédaction des statuts personnalisés</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Enregistrement des statuts</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Dépôt au greffe</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Publicité légale</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Suivi Post-Constitution -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">3. Suivi Post-Constitution</h3>
                        <p class="text-purple-100">Optimisation et accompagnement</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Après la phase de constitution de la société, nous restons toujours à vos côtés pour vous conseiller dans la gestion opérationnelle 
                            et le développement de votre activité.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Optimisation fiscale et sociale</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Tenue de comptabilité</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Anticipation des besoins futurs</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Pourquoi Nous Choisir -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Pourquoi Choisir Notre Accompagnement ?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-rocket text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Constitution Rapide et Efficace</h3>
                        <p class="text-gray-600">Votre société sera opérationnelle aux environs de <strong>5 jours seulement</strong> !</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-tie text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Accompagnement Sur-Mesure</h3>
                        <p class="text-gray-600">Vous ne serez jamais seul. Nous sommes à vos côtés avec des solutions adaptées à vos besoins.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-handshake text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Partenaire Long Terme</h3>
                        <p class="text-gray-600">Plus qu'un service ponctuel, nous vous offrons un véritable partenariat jusqu'au développement.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-euro-sign text-yellow-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Tarifs Clairs et Attractifs</h3>
                        <p class="text-gray-600">Profitez du meilleur rapport qualité-prix du marché pour la constitution de votre entreprise.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Domiciliation Prestigieuse</h3>
                        <p class="text-gray-600">Bénéficiez d'une adresse de prestige en plein cœur de Marrakech pour un impact immédiat.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-indigo-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Expertise Reconnue</h3>
                        <p class="text-gray-600">Notre approche personnalisée et notre expertise vous garantissent une constitution en toute confiance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Guide des Étapes -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Les Étapes de Constitution d'une SARL</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Découvrez le processus détaillé pour créer votre société en toute transparence
                </p>
            </div>

            <div class="space-y-8">
                <!-- Étape 1 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">1</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Certificat Négatif</h3>
                        <p class="text-gray-600">
                            Le certificat négatif est le 1er document indispensable à la création d'une société. 
                            Pour dénommer la société en constitution il faut trois noms aux choix et une pièce d'identité du demandeur. 
                            Une fois obtenu, ce certificat négatif est valable 90 jours.
                        </p>
                    </div>
                </div>

                <!-- Étape 2 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">2</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Siège Social</h3>
                        <p class="text-gray-600">
                            L'adresse de siège social de la société en cours de constitution doit être précisée dans les statuts. 
                            Ce local qui constitue le domicile juridique et fiscal de l'entreprise doit faire l'objet d'un contrat de bail commercial ou d'un contrat de domiciliation.
                        </p>
                    </div>
                </div>

                <!-- Étape 3 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">3</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Rédaction des Statuts</h3>
                        <p class="text-gray-600">
                            Les statuts doivent être établis par écrit. Ils peuvent être rédigés soit par un acte authentique ou par acte sous seing privé.
                        </p>
                    </div>
                </div>

                <!-- Étape 4 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-yellow-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">4</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Libération du Capital Social</h3>
                        <p class="text-gray-600">
                            La constitution d'une société SARL au Maroc nécessite un capital minimum de 10.000 MAD. 
                            Si le capital social dépasse 100.000 MAD, les fonds provenant de la libération des parts sociales doivent être déposés dans un compte bloqué en banque.
                        </p>
                    </div>
                </div>

                <!-- Étape 5 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-red-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">5</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Enregistrement des Actes</h3>
                        <p class="text-gray-600">
                            L'enregistrement des actes est une étape qui précède l'inscription à la taxe professionnelle et le dépôt des actes au greffe. 
                            Les actes concernés sont les statuts, le contrat de bail, le PV de l'assemblée constitutive, les procurations...
                        </p>
                    </div>
                </div>

                <!-- Étape 6 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">6</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Inscription à la Taxe Professionnelle</h3>
                        <p class="text-gray-600">
                            L'inscription de la société nouvelle aux rôles de la taxe professionnelle se fait auprès de l'administration fiscale 
                            ce qui permet à cette entreprise d'obtenir son identifiant à la taxe professionnelle et son identifiant fiscal (IF).
                        </p>
                    </div>
                </div>

                <!-- Étape 7 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-pink-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">7</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Immatriculation au Registre de Commerce</h3>
                        <p class="text-gray-600">
                            Pour être immatriculé au registre de commerce, une demande doit être déposée au secrétariat-greffe du tribunal de commerce 
                            dont relève le siège social de l'entreprise.
                        </p>
                    </div>
                </div>

                <!-- Étape 8 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-teal-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">8</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Affiliation à la CNSS</h3>
                        <p class="text-gray-600">
                            Au Maroc, toutes les entreprises, qu'elles soient personne physique ou morale, doivent être affiliées à la CNSS. 
                            C'est une obligation légale.
                        </p>
                    </div>
                </div>

                <!-- Étape 9 -->
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center mr-6 font-bold text-lg">9</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Publications Officielles</h3>
                        <p class="text-gray-600">
                            La publication doit se faire dans un journal d'annonces légales et aussi dans le bulletin officiel (BO). 
                            Le texte doit contenir la forme juridique, la dénomination sociale, l'objet social, l'adresse du siège social, 
                            la durée, le capital social, les informations des associés et le numéro d'immatriculation au registre du commerce.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Questions Fréquentes</h2>
                <p class="text-xl text-gray-600">Réponses aux questions les plus courantes sur la constitution de SARL</p>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Quelles sont les étapes pour créer une société au Maroc ?</h3>
                    <p class="text-gray-600">
                        La création d'une société au Maroc comprend plusieurs étapes : choix de la forme juridique (SARL, SA, SNC, etc.), 
                        réservation du nom commercial à l'OMPIC, rédaction des statuts, dépôt du capital social, enregistrement des actes, 
                        inscription aux rôles de la taxe professionnelle, immatriculation au Registre de Commerce (RC), 
                        publication dans un journal d'annonces légales et au BO.
                    </p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Quelles sont les formes juridiques les plus courantes au Maroc ?</h3>
                    <p class="text-gray-600">
                        Les formes les plus courantes sont : <strong>SARL</strong> pour les petites et moyennes entreprises, 
                        <strong>SA</strong> pour les grandes entreprises avec appel à l'épargne, 
                        <strong>SNC</strong> pour des projets immobiliers familiaux ou de confiance mutuelle.
                    </p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Combien de temps prend la constitution d'une SARL ?</h3>
                    <p class="text-gray-600">
                        En moyenne, la création d'une SARL peut prendre entre <strong>3 et 10 jours ouvrables</strong>, 
                        selon la réactivité de l'administration et la complétude du dossier.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="bg-gradient-to-r from-purple-600 to-blue-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Prêt à Constituer Votre SARL ?</h2>
            <p class="text-xl text-purple-100 mb-8 max-w-3xl mx-auto">
                N'attendez plus pour donner vie à votre projet à Marrakech. Contactez-nous dès aujourd'hui et démarrez votre entreprise 
                en toute confiance avec l'aide d'experts dédiés.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Démarrer ma constitution
                </a>
                <a href="{{ route('guide-creation-sarl') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-purple-600 transition-all">
                    Consulter le guide complet
                </a>
            </div>
        </div>
    </section>
@endsection