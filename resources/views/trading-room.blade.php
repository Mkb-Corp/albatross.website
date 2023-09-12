@extends('layouts.app')

@section('content')
    ============================================= -->
    <section id="about-2" class="rel inner-page-hero about-section division">


        <!-- ABOUT-2 TITLE -->
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-10 col-xl-9">
                    <div class="about-2-title mb-60">

                        <!-- Title -->
                        <h2 class="s-52 w-700 mb-30">Découvrez l'univers du trading</h2>

                        <!-- Text -->
                        <p class="mb-0">Nous proposons en république démocratique du Congo dans
                            la ville de Lubumbashi une salle de marché doté d’une connexion
                            internet haute débit. <br>
                            Une salle des marchés est un endroit idéal pour développer
                            son activité de trading indépendant. Mais chez ALBATROSS FINANCE
                            c’est aussi un centre de formation de trading où les étudiants peuvent
                            apprendre avec des professionnels indépendants.

                        </p>

                    </div>
                </div>
            </div>
        </div> <!-- END ABOUT-2 TITLE -->


        <!-- ABOUT-2 IMAGES -->
        <div class="container-fluid">
            <div class="row">


                <!-- IMAGES-1 -->
                <div class="col-md-5">
                    <div class="text-end">


                        <!-- IMAGE-1 -->
                        <div class="about-2-img a-2-1 r-12">
                            <img class="img-fluid" src="{{ asset('assets/images/a2-1.jpg') }}" alt="about-image">
                        </div>


                        <!-- IMAGE-2 -->
                        <div class="about-2-img a-2-2 r-12">
                            <img class="img-fluid" src="{{ asset('assets/images/a2-2.jpg') }}" alt="about-image">
                        </div>


                    </div>
                </div> <!-- END IMAGES-1 -->


                <!-- IMAGES-2 -->
                <div class="col-md-7">


                    <!-- IMAGE-3 -->
                    <div class="about-2-img a-2-3 r-12">
                        <img class="img-fluid" src="{{ asset('assets/images/a2-3.jpg') }}" alt="about-image">
                    </div>


                    <div class="row">

                        <!-- TEXT -->
                        <div class="col-md-7 col-lg-6">
                            <div class="a2-txt bg--black-400 pattern-01 bg--fixed color--white r-12">

                                <!-- Icon -->
                                <div class="a2-txt-quote ico-40 o-20">
                                    <span class="flaticon-quote"></span>
                                </div>

                                <!-- Text -->
                                <p>Notre salle de marché est idéale pour un trader qui cherche à se perfectionner aux côtés
                                    d’un expert de la finance.
                                </p>

                            </div>
                        </div>

                        <!-- IMAGE-4 -->
                        <div class="col-md-5 col-lg-6">
                            <div class="about-2-img a-2-4 r-12">
                                <img class="img-fluid" src="{{ asset('assets/images/a2-4.jpg') }}" alt="about-image">
                            </div>
                        </div>

                    </div> <!-- End row -->


                </div> <!-- END IMAGES-2 -->


            </div> <!-- End row -->
        </div> <!-- END ABOUT-2 IMAGES -->
    </section>

    <div id="about-3" class="pt-100 about-section division">
        <div class="container">
            <div class="row">


                <!-- ABOUT-3 TEXT -->
                <div class="col-md-6">
                    <div id="a3-1" class="txt-block">

                        <p>Dans la salle de marchés, une partie est réservée aux
                            membres permanents. Ces traders pro utilisent ce lieu
                            pour avoir un espace calme et dédié à leur activité de
                            trader indépendant. Une seconde partie est réservée aux
                            élèves traders afin de mettre en pratique les cours de
                            trading dispensés à l’arcade par nos coachs</p>

                    </div>
                </div> <!-- END ABOUT-3 TEXT -->


                <!-- ABOUT-3 TEXT -->
                <div class="col-md-6">
                    <div id="a3-2" class="txt-block">
                        <p>
                            A chaque session de coaching, les nouveaux élèves
                            entrent dans le monde fascinant de la finance en
                            rejoignant notre salle des marchés .
                        </p>
                    </div>
                </div> <!-- END ABOUT-3 TEXT -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div>

    <div id="statistic-5" class="py-100 statistic-section division">
				<div class="container">


					<!-- STATISTIC-1 WRAPPER -->
					<div class="statistic-5-wrapper">
						<div class="row row-cols-1 row-cols-md-3">


							<!-- STATISTIC BLOCK #1 -->
							<div class="col">
								<div id="sb-5-1" class="wow fadeInUp">
									<div class="statistic-block">

										<!-- Digit -->
										<div class="statistic-digit">
											<h2 class="s-44 w-700">
												<span class="count-element">150</span>+
											</h2>
										</div>

										<!-- Text -->
										<div class="statistic-txt">
											<h5 class="s-19 w-700">Traders</h5>
											<p>formés en présentiel</p>
										</div>

									</div>
								</div>
							</div>	<!-- END STATISTIC BLOCK #1 -->


							<!-- STATISTIC BLOCK #2 -->
							<div class="col">
								<div id="sb-5-2" class="wow fadeInUp">
									<div class="statistic-block">

										<!-- Digit -->
										<div class="statistic-digit">
											<h2 class="s-44 w-700">
												<span class="count-element">200</span>+
											</h2>
										</div>

										<!-- Text -->
										<div class="statistic-txt">
											<h5 class="s-19 w-700">Traders</h5>
											<p>formés en ligne</p>
										</div>

									</div>
								</div>
							</div>	<!-- END STATISTIC BLOCK #2 -->


							<!-- STATISTIC BLOCK #3 -->
							<div class="col">
								<div id="sb-5-3" class="wow fadeInUp">
									<div class="statistic-block">

										<!-- Digit -->
										<div class="statistic-digit">
											<h2 class="s-44 w-700">
												<span class="count-element">15</span>
											</h2>
										</div>

										<!-- Text -->
										<div class="statistic-txt">
											<h5 class="s-19 w-700">Traders actifs</h5>
											<p>quotidiennement dans nos locaux.</p>
										</div>

									</div>
								</div>
							</div>	<!-- END STATISTIC BLOCK #3 -->


						</div>  <!-- End row -->
					</div>	<!-- END STATISTIC-5 WRAPPER -->


				</div>	 <!-- End container -->
			</div
@endsection
