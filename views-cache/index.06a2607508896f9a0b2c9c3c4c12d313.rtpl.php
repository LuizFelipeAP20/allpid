<?php if(!class_exists('Rain\Tpl')){exit;}?>



        <!-- Overlapping Screen-->
        <section class="section section-overlap bg-decorate">
            <div class="section-overlap-image" style="background-image: url(images/screens-1-1046x720.jpg)"></div>
            <div class="section-overlap-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <div class="wow-outer"style="margin-left: 150px;">
                                <h6 class="font-weight-sbold text-primary wow slideInDown">.......................</h6>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <h1 class="wow-outer" style="margin-left: 150px;"><span class="font-weight-bold wow-outer"><span class="wow slideInUp"></span></span><span class="font-weight-exlight wow-outer"><span class="wow slideInUp" data-wow-delay=".1s" 
                                >ALLPID</span></span>
                            </h1>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4 col-offset-1">
                            <div class="wow-outer">
                                <h4 class="font-weight-light wow slideInUp" data-wow-delay=".2s"> A oportunidade para uma carreira independente.</h4>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Projects - Modern Layout-->
        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row row-50">
                    <div class="col-12 text-center">
                        <h3 class="section-title wow-outer"><span class="wow slideInUp">FOTOS</span></h3>
                    </div>
                    <div class="col-12 isotope-wrap">
                        <div class="isotope offset-top-2" data-isotope-layout="masonry" data-lightgallery="group" data-lg-thumbnail="false">
                            <div class="row row-30">
                                
                              
                            
                            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                                <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                    <!-- Thumbnail Corporate-->

                                    <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInDown"><img class="thumbnail-corporate-image" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="" width="370" height="464" />
                                        <img class="thumbnail-corporate-image" src=" /images/marc.png" alt="" width="370" height="464" />
                                        <div class="thumbnail-corporate-caption">
                                           
                                            <a class="thumbnail-corporate-link" href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ><span class="icon mdi mdi-magnify"></span><span class="icon mdi mdi-magnify"></span></a>
                                        </div>
                                        <div class="thumbnail-corporate-dummy"></div>
                                    </article>
                                </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Advantages and Achievements-->
        <section class="section section-lg text-center bg-default">
            <div class="container">
                <h3 class="section-title wow-outer"><span class="wow slideInUp">ALLPID</span></h3>
                <p class="wow-outer"><span class="text-width-1 wow slideInDown">A plataforma ???ALLPID??? surgiu na an??lise de reflex??o na constru????o de apoiar usu??rios amadores, com acesso as tecnologias acess??veis, profissionais e artistas para criar um acervo dos seus conte??dos para indicar e divulgar aos curiosos e interessados, considerando a liberdade cultural, indica????o de um conte??do exclusivo a um cliente espec??fico, produ????es criativas e desenhos art??sticos, digitais ou a m??o livre.
                </span></p>
                <div class="row row-33">
                    <div class="col-6 col-md-4 wow-outer">
                        <!-- Counter Minimal-->
                        <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                            <div class="counter-minimal-icon linearicons-camera2"></div>
                            <div class="counter-minimal-main">
                                <div class>Fot??grafos</div>
                            </div>

                        </article>
                    </div>
                    <div class="col-6 col-md-4 wow-outer">
                        <!-- Counter Minimal-->
                        <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                            <div class="counter-minimal-icon linearicons-shutter"></div>
                            <div class="counter-minimal-main">
                                <div>Designers</div>
                            </div>

                        </article>
                    </div>
                    <div class="col-6 col-md-4 wow-outer">
                        <!-- Counter Minimal -->
                        <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                            <div class="counter-minimal-icon linearicons-picture"></div>
                            <div class="counter-minimal-main">
                                <div class>Ilustradores</div>
                            </div>
                    </div>
        </section>
        <!-- Testimonials-->
        <section class="section section-lg bg-gray-100 text-center">
            <div class="container">
                <h3 class="section-title">Time</h3>
                <div class="slick-widget-testimonials wow fadeIn">
                    <div class="slick-slider carousel-child" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="5" data-lg-items="5" data-xl-items="5" data-center-mode="true"
                        data-slide-to-scroll="1">
                        <div class="item wow-outer"><img class="wow slideInLeft" src="images/testimonials-person-1-96x96.jpg" alt="" width="96" height="96" />
                        </div>
                        <div class="item wow-outer"><img class="wow slideInLeft" src="images/testimonials-person-2-96x96.jpg" alt="" width="96" height="96" />
                        </div>
                        <div class="item wow-outer"><img class="wow slideInLeft" src="images/testimonials-person-3-96x96.jpg" alt="" width="96" height="96" />
                        </div>
                        <div class="item wow-outer"><img class="wow slideInLeft" src="images/testimonials-person-4-96x96.jpg" alt="" width="96" height="96" />
                        </div>
                        <div class="item wow-outer"><img class="wow slideInLeft" src="images/testimonials-person-5-96x96.jpg" alt="" width="96" height="96" />
                        </div>
                        <div class="item wow-outer"><img class="wow slideInLeft" src="images/testimonials-person-6-96x96.jpg" alt="" width="96" height="96" />
                        </div>
                    </div>
                    <!-- Slick Carousel-->
                    <div class="slick-slider carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
                        <div class="item">
                            <!-- Quote Light 1-->
                            <blockquote class="quote-light">
                                <cite class="quote-light-cite">ALLPID</cite>
                                <p class="quote-light-caption"></p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <!-- Quote Light 2-->
                            <blockquote class="quote-light">
                                <cite class="quote-light-cite">Iris Salvador</cite>
                                <p class="quote-light-caption">Desenvolvedora</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <!-- Quote Light 3-->
                            <blockquote class="quote-light">
                                <cite class="quote-light-cite">Josias Motta</cite>
                                <p class="quote-light-caption">Product Oner</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <!-- Quote Light 4 -->
                            <blockquote class="quote-light">
                                <cite class="quote-light-cite">Lucas Souza</cite>
                                <p class="quote-light-caption">Scrum Master</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <!-- Quote Light 3-->
                            <blockquote class="quote-light">
                                <cite class="quote-light-cite">Luiz Felipe</cite>
                                <p class="quote-light-caption">Desenvolvedor</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <!-- Quote Light 3-->
                            <blockquote class="quote-light">
                                <cite class="quote-light-cite">Marcio J??nior</cite>
                                <p class="quote-light-caption">Desenvolvedor</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        </section>
        