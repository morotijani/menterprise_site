<?php
   require_once  __DIR__ . '/system/DatabaseConnector.php';
   $title = 'Home - ';
   include  __DIR__ . '/system/inc/head.php';
   include  __DIR__ . '/system/inc/topnav.php';
?>

   <!--Hero start-->
   <section class="position-relative py-10">
      <video class="w-100" autoplay muted loop style="object-fit: cover" playsinline>
            <source src="<?= PROOT; ?>assets/media/hero.mp4" type="video/mp4" />
        </video>
        <div class="container position-relative py-lg-10" data-cue="fadeIn">
            <div class="row py-lg-10 justify-content-center text-center">
                  <div class="col-lg-9 col-12">
                     <div class="d-flex flex-column gap-6">
                        <div class="d-flex flex-column gap-4">
                            <h1 class="text-white-stable display-4 mb-0">Embarking On A Journey Of Mining Mastery</h1>
                            <p class="mb-0 text-white-50 lead px-lg-10">
                               Empowering Global Ventures in Exploration, Mining, and Gold and Diamond Trading with M. Enterprise Ghana Limited
                            </p>
                        </div>
                        <div class="d-md-flex d-grid align-items-center justify-content-md-center gap-4">
                           <a href="<?= PROOT; ?>about" class="btn btn-primary rounded-pill">Read more</a>
                           <a href="<?= PROOT; ?>projects" class="link-white icon-link icon-link-hover card-grid-link d-flex justify-content-center">
                              Recent Projects

                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </section>
        <!--Hero end-->

        <section class="my-xl-9 my-5" data-cue="fadeIn">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 offset-lg-3" data-cue="fadeIn">
                        <div class="text-center mb-xl-7 mb-5">
                            <h2 class="h1 mb-3">Latest News & Updates</h2>
                            <p class="mb-0">At least, not exclusively. Reduced recruiting costs, more efficient and effective communication.</p>
                        </div>
                    </div>
               </div>
               <!-- Blog Card -->
               <div class="table-responsive-lg">
                    <div class="row g-5 flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                        <article class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                            <figure class="mb-4 zoom-img">
                                <a href="./blog-single.html">
                                    <img src="<?= PROOT; ?>assets/media/blog/b-1.png" alt="blog" class="img-fluid rounded-3" />
                                </a>
                            </figure>

                        <a href="#!" class="badge bg-primary-subtle text-primary-emphasis rounded-pill text-uppercase">Startup</a>
                        <h3 class="my-3 lh-base h4">
                           <a href="./blog-single.html" class="text-reset">You will destroy yourself financially if you save</a>
                        </h3>
                        <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0">
                           <div class="d-flex align-items-center">
                              <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                              <div class="ms-2">
                                 <a href="#" class="text-reset fs-6">Sandip Chauhan</a>
                              </div>
                           </div>
                           <div class="ms-3"><span class="fs-6">Nov 26, 2023</span></div>
                        </div>
                     </article>
                     <article class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                        <figure class="mb-4 zoom-img">
                           <a href="./blog-single.html">
                              <img src="<?= PROOT; ?>assets/media/blog/b-2.png" alt="blog" class="img-fluid rounded-3" />
                           </a>
                        </figure>

                        <a href="#!" class="badge bg-warning-subtle text-warning-emphasis rounded-pill text-uppercase">Business</a>
                        <h3 class="my-3 lh-base h4">
                           <a href="./blog-single.html" class="text-reset">Block Template for startup business</a>
                        </h3>
                        <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0">
                           <div class="d-flex align-items-center">
                              <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                              <div class="ms-2">
                                 <a href="#" class="text-reset fs-6">Anita Parmar</a>
                              </div>
                           </div>
                           <div class="ms-3"><span class="fs-6">Nov 21, 2023</span></div>
                        </div>
                     </article>
                     <article class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                        <figure class="mb-4 zoom-img">
                           <a href="./blog-single.html">
                              <img src="<?= PROOT; ?>assets/media/blog/b-4.jpg" alt="blog" class="img-fluid rounded-3" />
                           </a>
                        </figure>

                        <a href="#!" class="badge bg-success-subtle text-success-emphasis rounded-pill text-uppercase">Digital</a>
                        <h4 class="my-3 lh-base">
                           <a href="./blog-single.html" class="text-reset">The power of doing nothing at all</a>
                        </h4>
                        <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0">
                           <div class="d-flex align-items-center">
                              <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                              <div class="ms-2">
                                 <a href="#" class="text-reset fs-6">Jitu Chauhan</a>
                              </div>
                           </div>
                           <div class="ms-3"><span class="fs-6">Nov 23, 2023</span></div>
                        </div>
                     </article>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12" data-cue="zoomIn">
                     <div class="mt-lg-8 mt-5">
                        <a href="./blog.html" class="icon-link icon-link-hover text-dark">
                           Read more news
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                              <path
                                 fill-rule="evenodd"
                                 d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
        </section>
        <!--Our articles end-->


        <!--Service we offer start-->
        <section class="py-xl-9 py-5" data-cue="fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-12">
                        <div class="text-center mb-xl-9 mb-1">
                            <small class="text-uppercase ls-md fw-semibold text-primary">Service We Offer</small>
                        </div>
                    </div>
                </div>
                <h2 class="mb-4">We provide expert consultancy in exploration, mining as well as Gold and Diamond trading within Ghana and beyond. We have established ourselves strategically to assist mining groups around the globe with practical skill to improve the mining industry. <br>We provide consultancy services into four (4) thematic areas.</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-grid" data-cue="zoomIn">
                            <div class="card-grid-inner">
                           <h3 class="card-grid-heading">Mineral Exploration</h3>
                           <div class="card-grid-text">
                              <p class="mb-0">Mineral exploration is an investigative activity prior to mining.</p>
                              <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                 Learn More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </a>
                           </div>
                           <div class="d-block d-lg-none">
                              <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                 Learn More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="card-grid-image">
                           <img src="<?= PROOT; ?>assets/media/service-1.jpg" alt="service" class="rounded-3 img-fluid" />
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="card-grid" data-cue="zoomIn">
                        <div class="card-grid-inner">
                           <h3 class="card-grid-heading">Mining Services</h3>
                           <div class="card-grid-text">
                              <p class="mb-0">Our equipment separates gravel from black sand, extracting Ore.</p>
                              <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                 Learn More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </a>
                           </div>
                           <div class="d-block d-lg-none">
                              <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                 Learn More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="card-grid-image">
                           <img src="<?= PROOT; ?>assets/media/service-2.jpg" alt="service" class="rounded-3 img-fluid" />
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="card-grid" data-cue="zoomIn">
                        <div class="card-grid-inner">
                           <h3 class="card-grid-heading">Gold and Diamond Trading</h3>
                           <div class="card-grid-text">
                              <p class="mb-0">Gold Purchasing and Supply, Exploration of Gold/Diamond.</p>
                              <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                 Learn More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </a>
                           </div>
                           <div class="d-block d-lg-none">
                              <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                 Learn More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="card-grid-image">
                           <img src="<?= PROOT; ?>assets/media/service-3.jpg" alt="service" class="rounded-3 img-fluid" />
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="card-grid" data-cue="zoomIn">
                        <div class="card-grid-inner">
                           <h3 class="card-grid-heading">Small Scale Mining Logistics</h3>
                           <div class="card-grid-text">
                              <p class="mb-0">Supplying equipment to Artisanal Mining industry.</p>
                              <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                 Learn More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </a>
                           </div>
                           <div class="d-block d-lg-none">
                              <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                 Learn More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="card-grid-image">
                           <img src="<?= PROOT; ?>assets/media/service-4.jpg" alt="service" class="rounded-3 img-fluid" />
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </section>
         <!--Service we offer end-->
        
         <!--Who we are start-->
        <br><br>
         <section class="my-xl-9 my-5">
            <div class="container">
               <div class="row g-4">
                  <div class="col-xl-5 col-lg-6 col-12" data-cue="slideInLeft">
                     <div class="mb-4">
                        <small class="text-uppercase ls-md fw-semibold">who we are</small>
                        <h2 class="h1 mt-4 mb-3">We are a registered Ghanaian company established in 2010.</h2>
                        <p class="mb-3">under the government of Ghana Act 1962(N0. 151). We provide expert consultancy in exploration, mining as well as Gold and Diamond trading within Ghana and beyond</p>
                        <p class="mb-0">We have established ourselves strategically to assist mining groups around the globe with practical skill to improve the mining industry.</p>
                     </div>

                     <a href="./about.html" class="icon-link icon-link-hover">
                        More about us
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                     </a>
                  </div>
                  <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                     <div class="row g-4" data-cues="slideInUp" data-delay="1000">
                        <div class="col-lg-6 col-md-6 col-12">
                           <a href="#!">
                              <div
                                 class="rounded-3 card-lift"
                                 style="background-image: url(<?= PROOT; ?>assets/media/back-2.jpeg); background-repeat: no-repeat; height: 386px; background-size: cover"></div>
                           </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                           <a href="#!">
                              <div
                                 class="mb-4 rounded-3 card-lift"
                                 style="background-image: url(<?= PROOT; ?>assets/media/back-1.jpeg); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                           </a>
                           <a href="#!">
                              <div
                                 class="mb-2 rounded-3 card-lift"
                                 style="background-image: url(<?= PROOT; ?>assets/media/back-3.jpg); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Who we are end-->

          <!--Expert team start-->
         <section>
            <div class="container" data-cue="fadeIn">
               <div class="row border-top border-bottom">
                  <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                     <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people-fill text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                           </svg>
                        </div>

                        <h4>Expert team</h4>
                        <p class="mb-0">Vivamus eget neque lacus. Pellentesque egauris ex.</p>
                     </div>
                  </div>
                  <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                     <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trophy-fill text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" />
                           </svg>
                        </div>

                        <h4>Award winning agency</h4>
                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur elitorceat .</p>
                     </div>
                  </div>
                  <div class="col-md-4" data-cue="zoomIn">
                     <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-stars text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                           </svg>
                        </div>

                        <h4>10 Year Exp.</h4>
                        <p class="mb-0">Pellen tesque eget, mauris lorem iupsum neque lacus.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Expert team end-->

         <!--Testimonial start-->
         <section class="py-xl-9 py-5">
            <div class="container">
               <div class="row gy-7 gx-lg-7">
                  <div class="col-lg-6 col-12" data-cue="fadeIn">
                     <div class="d-flex flex-column gap-3 mb-6">
                        <div>
                           <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M12.5 7.97559H5C4.46957 7.97559 3.96086 8.1863 3.58579 8.56137C3.21071 8.93644 3 9.44515 3 9.97559V17.9756C3 18.506 3.21071 19.0147 3.58579 19.3898C3.96086 19.7649 4.46957 19.9756 5 19.9756H12.5V20.9756C12.5 22.0365 12.0786 23.0539 11.3284 23.804C10.5783 24.5542 9.56087 24.9756 8.5 24.9756C8.23478 24.9756 7.98043 25.0809 7.79289 25.2685C7.60536 25.456 7.5 25.7104 7.5 25.9756C7.5 26.2408 7.60536 26.4952 7.79289 26.6827C7.98043 26.8702 8.23478 26.9756 8.5 26.9756C10.0908 26.9739 11.616 26.3413 12.7408 25.2164C13.8657 24.0915 14.4983 22.5664 14.5 20.9756V9.97559C14.5 9.44515 14.2893 8.93644 13.9142 8.56137C13.5391 8.1863 13.0304 7.97559 12.5 7.97559ZM12.5 17.9756H5V9.97559H12.5V17.9756ZM27 7.97559H19.5C18.9696 7.97559 18.4609 8.1863 18.0858 8.56137C17.7107 8.93644 17.5 9.44515 17.5 9.97559V17.9756C17.5 18.506 17.7107 19.0147 18.0858 19.3898C18.4609 19.7649 18.9696 19.9756 19.5 19.9756H27V20.9756C27 22.0365 26.5786 23.0539 25.8284 23.804C25.0783 24.5542 24.0609 24.9756 23 24.9756C22.7348 24.9756 22.4804 25.0809 22.2929 25.2685C22.1054 25.456 22 25.7104 22 25.9756C22 26.2408 22.1054 26.4952 22.2929 26.6827C22.4804 26.8702 22.7348 26.9756 23 26.9756C24.5908 26.9739 26.116 26.3413 27.2408 25.2164C28.3657 24.0915 28.9983 22.5664 29 20.9756V9.97559C29 9.44515 28.7893 8.93644 28.4142 8.56137C28.0391 8.1863 27.5304 7.97559 27 7.97559ZM27 17.9756H19.5V9.97559H27V17.9756Z"
                                 fill="#8B3DFF" />
                           </svg>
                        </div>
                        <div>
                           <h2>Client Testimonials</h2>
                           <p class="mb-0">Beyond industry awards, our greatest recognition comes from the satisfaction of our clients.</p>
                        </div>
                     </div>
                     <div
                        class="swiper-container swiper"
                        id="swiper-1"
                        data-pagination-type=""
                        data-speed="400"
                        data-space-between="100"
                        data-pagination="true"
                        data-navigation="false"
                        data-autoplay="true"
                        data-autoplay-delay="3000"
                        data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                        <div class="swiper-wrapper pb-6 mx-auto">
                           <div class="swiper-slide" data-cue="zoomIn">
                              <div class="card shadow-sm">
                                 <div class="card-body">
                                    <div class="d-flex flex-column gap-4">
                                       <div>
                                          <p class="mb-0 fst-italic lead text-dark">
                                             "Our journey with [Your Company Name] has been nothing short of exceptional. Their team's expertise and commitment to delivering results have significantly
                                             contributed to our business growth. "
                                          </p>
                                       </div>
                                       <div class="d-flex align-items-center gap-3">
                                          <div>
                                             <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avtar-xs rounded-circle" />
                                          </div>
                                          <div>
                                             <h5 class="mb-0">Jitu Chauhan</h5>
                                             <small>CTO, Codescandy</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide" data-cue="zoomIn">
                              <div class="card shadow-sm">
                                 <div class="card-body">
                                    <div class="d-flex flex-column gap-4">
                                       <div>
                                          <p class="mb-0 fst-italic lead text-dark">
                                             "As a startup, we were looking for a technology partner who could understand our unique needs and propel us forward. [Your Company Name] not only met but
                                             surpassed our expectations. "
                                          </p>
                                       </div>
                                       <div class="d-flex align-items-center gap-3">
                                          <div>
                                             <img src="../assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avtar-xs rounded-circle" />
                                          </div>
                                          <div>
                                             <h5 class="mb-0">Sandip Chauhan</h5>
                                             <small>Web Designer, Codescandy</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide" data-cue="zoomIn">
                              <div class="card shadow-sm">
                                 <div class="card-body">
                                    <div class="d-flex flex-column gap-4">
                                       <div>
                                          <p class="mb-0 fst-italic lead text-dark">
                                             "[Your Company Name] is not just a service provider; they are true partners. Their team's ability to translate our ideas into innovative solutions has been
                                             crucial to our digital transformation. "
                                          </p>
                                       </div>
                                       <div class="d-flex align-items-center gap-3">
                                          <div>
                                             <img src=".<?= PROOT; ?>assets/media/avatar.p" alt="avatar" class="avatar avtar-xs rounded-circle" />
                                          </div>
                                          <div>
                                             <h5 class="mb-0">Anita parmar</h5>
                                             <small>Lead Developer , Codescandy</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Add more slides as needed -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        <div class="swiper-navigation">
                           <div class="swiper-button-next"></div>
                           <div class="swiper-button-prev"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-12" data-cue="fadeIn">
                     <div class="d-flex flex-column gap-3 mb-6">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trophy text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z" />
                           </svg>
                        </div>
                        <div>
                           <h2>Awards and recognition</h2>
                           <p class="mb-0">Accolades and Recognition: Celebrating [Your Company Name]'s Commitment to Excellence.</p>
                        </div>
                     </div>
                     <div class="row g-4">
                        <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                           <div class="card card-lift text-center">
                              <div class="d-flex justify-content-center align-items-center">
                                 <img src="./assets/images/landings/it-company/it-company-award-logo-1.png" alt="company" />
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                           <div class="card card-lift text-center">
                              <div class="d-flex justify-content-center align-items-center">
                                 <img src="./assets/images/landings/it-company/it-company-award-logo-2.png" alt="company" />
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                           <div class="card card-lift text-center">
                              <div class="d-flex justify-content-center align-items-center">
                                 <img src="./assets/images/landings/it-company/it-company-award-logo-4.png" alt="company" />
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                           <div class="card card-lift text-center">
                              <div class="d-flex justify-content-center align-items-center">
                                 <img src="./assets/images/landings/it-company/it-company-award-logo-3.png" alt="company" />
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                           <div class="card card-lift text-center">
                              <div class="d-flex justify-content-center align-items-center">
                                 <img src="./assets/images/landings/it-company/it-company-award-logo-5.png" alt="company" />
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                           <div class="card card-lift text-center">
                              <div class="d-flex justify-content-center align-items-center">
                                 <img src="./assets/images/landings/it-company/it-company-award-logo-6.png" alt="company" />
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Testimonial end-->

         <!--Form section start-->
         <section class="bg-light py-lg-9 py-5">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-10">
                     <div class="card shadow-lg" data-cue="zoomIn">
                        <div class="row g-0">
                           <div
                              class="col-md-6 d-none d-md-block rounded-start-3"
                              style="
                                 background-image: url(./assets/images/landings/it-company/it-company-form-img.jpg);
                                 background-size: cover;
                                 background-repeat: no-repeat;
                                 background-position: center;
                              ">
                              <!-- for mobile img-->
                           </div>
                           <div class="col-xl-6 col-md-6">
                              <div class="card-body p-md-5">
                                 <form class="row needs-validation g-3" novalidate>
                                    <div class="col-lg-12">
                                       <div>
                                          <h3>Ready to Transform Your Business?</h3>
                                          <p class="mb-0">
                                             Drop us a line about your project at
                                             <span><a href="#!">contact@example.com</a></span>
                                             or via the contact form below, and we will contact you soon.
                                          </p>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                       <label for="companyFirstnameInput" class="form-label">
                                          First Name
                                          <span class="text-danger">*</span>
                                       </label>
                                       <input type="text" class="form-control" id="companyFirstnameInput" required />
                                       <div class="invalid-feedback">Please enter firstname.</div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                       <label for="companyNameInput" class="form-label">
                                          Company
                                          <span class="text-danger">*</span>
                                       </label>
                                       <input type="text" class="form-control" id="companyNameInput" required />
                                       <div class="invalid-feedback">Please enter lastname.</div>
                                    </div>
                                    <div class="col-md-12">
                                       <label for="companyEmailInput" class="form-label">
                                          Work Email
                                          <span class="text-danger">*</span>
                                       </label>
                                       <input type="email" class="form-control" id="companyEmailInput" required />
                                       <div class="invalid-feedback">Please enter email.</div>
                                    </div>
                                    <div class="col-md-12">
                                       <label for="companyPhoneInput" class="form-label">
                                          Phone
                                          <span class="text-danger">*</span>
                                       </label>
                                       <input type="tel" class="form-control" id="companyPhoneInput" required />
                                       <div class="invalid-feedback">Please enter phone.</div>
                                    </div>
                                    <div class="col-md-12">
                                       <label for="companyTextarea" class="form-label">Describe your idea</label>
                                       <textarea class="form-control" id="companyTextarea" placeholder="Write to us" rows="3" required></textarea>
                                       <div class="invalid-feedback">Please write message.</div>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="companyCheckagree" required />
                                          <label class="form-check-label" for="companyCheckagree">
                                             I agree to the
                                             <a href="#!">privacy policy</a>
                                          </label>
                                          <div class="invalid-feedback">You must agree before submitting.</div>
                                       </div>
                                    </div>
                                    <div class="d-grid">
                                       <button class="btn btn-primary rounded-pill" type="submit">Let’s work together!</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Form section end-->

         <!--Logo section start-->
         <section class="py-xl-9 py-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 offset-lg-1" data-cue="fadeIn">
                     <div class="text-center mb-4 mb-lg-7">
                        <!-- <h3 class="mb-0">See how over 700+ customers help the world work</h3> -->
                     </div>
                     <div
                        class="swiper-container swiper"
                        id="swiper-1"
                        data-pagination-type=""
                        data-speed="400"
                        data-space-between="100"
                        data-pagination="true"
                        data-navigation="false"
                        data-autoplay="true"
                        data-autoplay-delay="3000"
                        data-breakpoints='{"480": {"slidesPerView": 2}, "768": {"slidesPerView": 3}, "1024": {"slidesPerView": 5}}'>
                        <div class="swiper-wrapper pb-6">
                           <div class="swiper-slide">
                              <figure class="text-center">
                                 <img src="<?= PROOT; ?>assets/media/client-01.png" class="img-fluid" width="120" height="48" alt="logo" />
                              </figure>
                           </div>
                           <div class="swiper-slide">
                              <figure class="text-center">
                                 <img src="<?= PROOT; ?>assets/media/client-02.png" class="img-fluid" width="120" height="48" alt="logo" />
                              </figure>
                           </div>
                           <div class="swiper-slide">
                              <figure class="text-center">
                                 <img src="<?= PROOT; ?>assets/media/client-03.png" class="img-fluid" width="120" height="48" alt="logo" />
                              </figure>
                           </div>
                           <div class="swiper-slide">
                              <figure class="text-center">
                                 <img src="<?= PROOT; ?>assets/media/client-04.png" class="img-fluid" width="120" height="48" alt="logo" />
                              </figure>
                           </div>
                           <div class="swiper-slide">
                              <figure class="text-center">
                                 <img src="<?= PROOT; ?>assets/media/client-03.png" class="img-fluid" width="120" height="48" alt="logo" />
                              </figure>
                           </div>
                           <!-- Add more slides as needed -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        <div class="swiper-navigation">
                           <div class="swiper-button-next"></div>
                           <div class="swiper-button-prev"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Logo section end-->

<?php include  __DIR__ . '/system/inc/footer.php'; ?>