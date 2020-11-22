@extends('app.layouts.master')


@section('content')
    <div role="main" class="main">

        <!--<section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumb">
                            <li><a  href="/">صفحه اصلی</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>عنوان</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div style="direction: rtl; text-align: right" class="col-lg-12">
                    <div class="blog-posts single-post">

                        <article class="post post-large blog-single-post">
                            <div class="post-image">

                            </div>


                            <div class="post-content">
                               // {{ \App\Blog::where('id', 1)->first()->body }}
                            </div>
                        </article>

                    </div>
                </div>


            </div>

        </div>-->

        
				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">صفحه اصلی</a></li>
									<li class="active">درباره ما</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>درباره تطابق</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">

					<div class="row">
						<div class="col">
							<h2 class="word-rotator-title">
								The New Way to <strong>
									<span class="word-rotator" data-plugin-options="{'delay': 2000}">
										<span class="word-rotator-items">
											<span>success.</span>
											<span>advance.</span>
											<span>progress.</span>
										</span>
									</span>
								</strong>
							</h2>
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-lg-10">
							<p class="lead">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh.
							</p>
						</div>
						<div class="col-lg-2">
							<a href="#" class="btn btn-lg btn-primary">Join Our Team!</a>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="tall">
						</div>
					</div>

					<div class="row mt-4">
						<div class="col-lg-7 col-xl-8">
							<h3 class="heading-primary"><strong>Who</strong> We Are</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
							<p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing <span class="alternative-font">metus</span> sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula.</p>
						</div>
						<div class="col-lg-5 col-xl-4">
							<div class="featured-box featured-box-primary">
								<div class="box-content">
									<h4 class="text-uppercase">Behind the scenes</h4>
									<ul class="thumbnail-gallery mb-4 pb-3" data-plugin-lightbox data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
										<li>
											<a title="Benefits 1" href="img/benefits/benefits-1.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-1-thumb.jpg" alt="">
												</span>
											</a>
										</li>
										<li>
											<a title="Benefits 2" href="img/benefits/benefits-2.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-2-thumb.jpg" alt="">
												</span>
											</a>
										</li>
										<li>
											<a title="Benefits 3" href="img/benefits/benefits-3.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-3-thumb.jpg" alt="">
												</span>
											</a>
										</li>
										<li>
											<a title="Benefits 4" href="img/benefits/benefits-4.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-4-thumb.jpg" alt="">
												</span>
											</a>
										</li>
										<li>
											<a title="Benefits 5" href="img/benefits/benefits-5.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-5-thumb.jpg" alt="">
												</span>
											</a>
										</li>
										<li>
											<a title="Benefits 6" href="img/benefits/benefits-6.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-6-thumb.jpg" alt="">
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">

							<h3 class="heading-primary mt-5">Our <strong>History</strong></h3>

							<ul class="history">
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
										<img src="img/office/office-4.jpg" alt="" />
									</div>
									<div class="featured-box">
										<div class="box-content">
											<h4 class="heading-primary"><strong>2012</strong></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,</p>
										</div>
									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
										<img src="img/office/office-3.jpg" alt="" />
									</div>
									<div class="featured-box">
										<div class="box-content">
											<h4 class="heading-primary"><strong>2010</strong></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.</p>
										</div>
									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
										<img src="img/office/office-2.jpg" alt="" />
									</div>
									<div class="featured-box">
										<div class="box-content">
											<h4 class="heading-primary"><strong>2005</strong></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,</p>
										</div>
									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
										<img src="img/office/office-1.jpg" alt="" />
									</div>
									<div class="featured-box">
										<div class="box-content">
											<h4 class="heading-primary"><strong>2000</strong></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,</p>
										</div>
									</div>
								</li>
							</ul>

						</div>
					</div>

				</div>

    </div>
@stop