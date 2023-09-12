@extends('layouts.app')

@section('content')
    <section id="hero-10" class="bg--scroll hero-section">
        <div class="container p-30">
            <div class="row d-flex align-items-center">

                <!-- HERO TEXT -->
                <div class="col-12 text-center color--white p-3">
                    <div class="hero-10-txt wow fadeInRight">

                        <!-- Title -->
                        <h2 class="s-52 w-700">Démarrez une carrière dans le trading</h2>

                        <!-- Text -->
                        <h4 class="s-20 color--grey">Souscrivez à nos formations taillées sur mesure pour faire de
                            vous un
                            trader rentable</h4>

                        <!-- Buttons -->
                        <div class="btns-group">
                        </div>
                    </div>
                </div> <!-- END HERO TEXT -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>

    <div class="container">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FOREXCOM:SPXUSD",
                            "title": "S&P 500"
                        },
                        {
                            "proName": "FOREXCOM:NSXUSD",
                            "title": "US 100"
                        },
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR to USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "Bitcoin"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "Ethereum"
                        }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "light",
                    "isTransparent": true,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
    <!-- ABOUT UST
       ============================================= -->
    <section id="about-us" class="bg--04 bg--fixed py-100 ct-01 content-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInRight">

                        <!-- Section ID -->
                        <span class="section-id"></span>

                        <!-- Title -->
                        <h2 class="s-50 w-700">A propos de nous</h2>

                        <!-- Text -->
                        <p class="p-lg">Albatross est une startup œuvrant sur les marchés
                            des capitaux en général et les marchés financiers en particulier
                            des différentes bourses des valeurs internationales.
                        </p>

                    </div>
                </div> <!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="img-block j-img video-preview right-column wow fadeInLeft">

                        <!-- Play Icon -->
                        <a class="video-popup2" href="https://www.youtube.com/">
                            <div class="video-btn video-btn-xl bg--theme">
                                <div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
                            </div>
                        </a>

                        <!-- Preview Image -->
                        <img class="img-fluid r-20" src="images/img-17.jpg" alt="video-preview">
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END TEXT CONTENT -->

    <!-- DIVIDER LINE -->
    <hr class="divider">

    <!-- SERVICES
       ============================================= -->
    <section id="features-11" class="pt-100 features-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Nos services</h2>

                        <!-- Text -->
                        {{-- <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p> --}}

                    </div>
                </div>
            </div>


            <!-- FEATURES-11 WRAPPER -->
            <div class="fbox-wrapper">
                <div class="row row-cols-1 row-cols-md-2 rows-3">


                    <!-- FEATURE BOX #1 -->
                    <div class="col">
                        <div class="fbox-11 fb-1 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico-wrap">
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">

                                        <!-- Vector Icon -->
                                        <span class="flaticon-graphics"></span>

                                        <!-- Shape -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                transform="translate(100 100)" />
                                        </svg>

                                    </div>
                                </div>
                            </div> <!-- End Icon -->

                            <!-- Text -->
                            <div class="fbox-txt">
                                <h6 class="s-22 w-700">Trading </h6>
                                <p>Nous disposons d’une salle de marché de trading sur les marchés financiers
                                    internationaux par notre partenariat international de gestion des fonds.
                                </p>
                            </div>

                        </div>
                    </div> <!-- END FEATURE BOX #1 -->

                    <!-- FEATURE BOX #3 -->
                    <div class="col">
                        <div class="fbox-11 fb-3 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico-wrap">
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">

                                        <!-- Vector Icon -->
                                        <span class="flaticon-graphic"></span>

                                        <!-- Shape -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                transform="translate(100 100)" />
                                        </svg>

                                    </div>
                                </div>
                            </div> <!-- End Icon -->

                            <!-- Text -->
                            <div class="fbox-txt">
                                <h6 class="s-22 w-700">Académie de formation</h6>
                                <p>Grace à nos formations devenez un Trader particulier d’exceptions et analyste des
                                    marchés financiers aux normes internationales évalués par un test international.
                                    Notre académie de formation de classe internationale de par son contenu nous
                                    permet de démocratiser la notion du trading, des marchés financiers en
                                    république démocratique du Congo et partout ailleurs et aussi de recruter les
                                    étudiants les plus brillants pour notre salle des marchés.

                                </p>
                            </div>

                        </div>
                    </div> <!-- END FEATURE BOX #3 -->

                    <!-- FEATURE BOX #2 -->
                    <div class="col">
                        <div class="fbox-11 fb-2 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico-wrap">
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">

                                        <!-- Vector Icon -->
                                        <span class="flaticon-idea"></span>

                                        <!-- Shape -->
                                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                transform="translate(100 100)" />
                                        </svg>

                                    </div>
                                </div>
                            </div> <!-- End Icon -->

                            <!-- Text -->
                            <div class="fbox-txt">
                                <h6 class="s-22 w-700">Consulting</h6>
                                <p>
                                    Nous accompagnons les entreprises locales (publiques & privées) dans leurs
                                    contrats des partenariats, des Jointes ventures et autres, avec les entreprises
                                    extérieures cotées en bourse afin de capitaliser sur l’impact des levées des
                                    fonds et capitalisations boursières de ces dernières.

                                    Pour permettre aux entreprises locales :
                                <ul>
                                    <li>De s’accaparer du potentiel qu’offre marchés financiers.</li>
                                    <li>De lutter contre la spéculation boursière des actifs de la RDC sur les
                                        différentes bourses des valeurs internationales.</li>
                                    <li>Faciliter la création des valeurs et participer au développement de la
                                        croissance de l’économie nationale.</li>
                                </ul>


                                </p>
                            </div>

                        </div>
                    </div> <!-- END FEATURE BOX #2 -->


                </div> <!-- End row -->
            </div> <!-- END FEATURES-11 WRAPPER -->


        </div> <!-- End container -->
    </section> <!-- END FEATURES-11 -->

    <!-- BOX CONTENT
       ============================================= -->

    <!-- TEXT CONTENT
       ============================================= -->
    <section id="values" class="pt-100 ct-01 content-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-80">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Nos Valeurs</h2>

                        <!-- Text -->
                        <p class="s-21 color--grey">Pourquoi choisir Albatross Finance</p>

                    </div>
                </div>
            </div>

            <!-- SECTION CONTENT (ROW) -->
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInRight">


                        <!-- CONTENT BOX #1 -->
                        <div class="cbox-4">

                            <!-- Icon & Title -->
                            <div class="box-title">
                                <span class="flaticon-paper-sizes color--theme"></span>
                                <h5 class="s-22 w-700">Discipline</h5>
                            </div>

                            <!-- Text -->
                            <div class="cbox-4-txt">
                                <p>La discipline moteur du sérieux et de la détermination reste
                                    l’une nos valeurs qui nous conduisent.
                                </p>
                            </div>

                        </div> <!-- END CONTENT BOX #1 -->


                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-4">

                            <!-- Icon & Title -->
                            <div class="box-title">
                                <span class="flaticon-layers-1 color--theme"></span>
                                <h5 class="s-22 w-700">Persévérance </h5>
                            </div>

                            <!-- Text -->
                            <div class="cbox-4-txt">
                                <p>Sans la persévérance aucun particulier ou entreprise
                                    ne résiste aux tempêtes des marches financières.
                                </p>
                            </div>

                        </div> <!-- END CONTENT BOX #2 -->


                        <!-- CONTENT BOX #3 -->
                        <div class="cbox-4">

                            <!-- Icon & Title -->
                            <div class="box-title">
                                <span class="flaticon-pie-chart color--theme"></span>
                                <h5 class="s-22 w-700">Confiance </h5>
                            </div>

                            <!-- Text -->
                            <div class="cbox-4-txt">
                                <p class="mb-0">Le socle de tout partenariat, nos relations d’affaires sont
                                    battis sur ce petit mot très important « Confiance »
                                </p>
                            </div>

                        </div> <!-- END CONTENT BOX #3 -->
                    </div>
                </div> <!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="img-block right-column wow fadeInLeft">
                        <img class="img-fluid" src="{{ asset('assets/images/img-03.png') }}" alt="content-image">
                    </div>
                </div>
            </div> <!-- END SECTION CONTENT (ROW) -->
        </div> <!-- End container -->
    </section> <!-- END TEXT CONTENT -->

    <section id="team" class="pt-100 team-section">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-80">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Notre Equipe</h2>

                        <!-- Text -->
                        {{-- <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p> --}}

                    </div>
                </div>
            </div>


            <!-- TEAM MEMBERS WRAPPER -->
            <div class="team-members-wrapper">
                <div class="row">
                    <div class="col">
                        <div class="team-member mb-50 wow fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-14">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/images/team-13.jpg') }}"
                                        alt="equipe-albatrossfinance">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="s-20 w-700 color--black">Meschaack Ntumba</h6>
                                <p class="color--grey">CEO</p>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member mb-50 wow fadeInUp">
                            <div class="team-member-photo r-14">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/images/team-13.jpg') }}"
                                        alt="equipe-albatrossfinance">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>
                            <div class="team-member-data">
                                <h6 class="s-20 w-700 color--black">Yves Ndondj</h6>
                                <p class="color--grey">Business Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member mb-50 wow fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-14">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/images/team-13.jpg') }}"
                                        alt="equipe-albatrossfinance">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="s-20 w-700 color--black">Getta</h6>
                                <p class="color--grey">Business Developer</p>
                            </div>

                        </div>
                    </div>
                </div> <!-- End row -->
            </div> <!-- TEAM MEMBERS WRAPPER -->

        </div> <!-- End container -->
    </section> <!-- END TEAM-1 -->

    <div id="modal-2" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">


                <!-- CLOSE BUTTON -->
                <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                    <span class="flaticon-cancel"></span>
                </button>


                <!-- MODAL CONTENT -->
                <div class="modal-body text-center">


                    <!-- IMAGE -->
                    <div class="modal-body-img">
                        <img class="img-fluid" src="{{ asset('assets/images/modal-newsletter-blue.jpg') }}"
                            alt="content-image">
                    </div>


                    <!-- NEWSLETTER FORM -->
                    <div class="modal-body-content">

                        <!-- Title -->
                        <h5 class="s-24 w-700">Restez au courant de nos dernières informations</h5>

                        <!-- Form -->
                        <form class="newsletter-form" method="POST" action="{{ url('newsletter.subscribe') }}">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="name" autocomplete="off" class="form-control"
                                    placeholder="Votre nom complet" required id="s-name">
                            </div>
                            <div class="input-group">
                                <input type="email" name="email" autocomplete="off" class="form-control"
                                    placeholder="Votre addresse mail" required id="s-email">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn--theme hover--theme">Je souscris à la
                                        newsletter</button>
                                </span>
                            </div>

                            <!-- Newsletter Form Notification -->
                            <label for="s-email" class="form-notification"></label>

                        </form>

                    </div> <!-- END NEWSLETTER FORM -->


                </div> <!-- END MODAL CONTENT -->


            </div>
        </div>
    </div> <!-- END MODAL WINDOW (NEWSLETTER FORM) -->


    <section id="faqs-3" class="pt-100 faqs-section">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="s-50 w-700">FAQ</h2>

                        <!-- Text -->
                        <p class="s-21 color--grey">Nous répondons à quelques questions que vous vous posez</p>

                    </div>
                </div>
            </div>


            <!-- FAQs-3 QUESTIONS -->
            <div class="faqs-3-questions" id="faq">
                <div class="row">


                    <!-- QUESTIONS HOLDER -->
                    <div class="col-lg-6">
                        <div class="questions-holder">


                            <!-- QUESTION #1 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>1.</span> Comment se déroulent vos formations ?</h5>

                                <!-- Answer -->
                                <p class="color--grey">Nos sessions de formations se déroulent en présentiel et en
                                    ligne
                                </p>

                            </div>


                            <!-- QUESTION #2 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>2.</span> Est ce nécessaire de souscrire à un coaching
                                    pour devenir un bon trader ?</h5>

                                <!-- Answer -->
                                <p class="color--grey">Un coaching est important parce qu'il permet à votre
                                    encadreur de vous suivre correctement et d'ajuster la formation selon votre
                                    capacité d'apprentissage
                                </p>

                            </div>

                        </div>
                    </div> <!-- END QUESTIONS HOLDER -->


                    <!-- QUESTIONS WRAPPER -->
                    <div class="col-lg-6">
                        <div class="questions-holder">
                            <!-- QUESTION #3 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>3.</span> Est-ce possible de vivre du trading ?</h5>

                                <!-- Answer -->
                                <ul class="simple-list color--grey">

                                    <p class="color--grey">Oui il est possible de vivre du trading. Ne tombez juste
                                        pas dans le piège de croire que le trading est la voie la plus facile vers
                                        l'indépendance financière
                                    </p>

                                </ul>

                            </div>

                            <!-- QUESTION #4 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>4.</span> Est-il possible de devenir trader sans
                                    suivre une formation ?</h5>

                                <!-- Answer -->
                                <p class="color--grey">C'est possible, cependant ce n'est pas conseillé. Le trading
                                    étant une discipline aux risques élevés, il est important de se faire
                                    accompagner pour ne pas commettre les erreurs couramment observées.
                                </p>

                            </div>
                        </div>
                    </div> <!-- END QUESTIONS HOLDER -->

                </div> <!-- End row -->
            </div> <!-- END FAQs-3 QUESTIONS -->
        </div> <!-- End container -->
    </section> <!-- END FAQs-3 -->
@endsection
