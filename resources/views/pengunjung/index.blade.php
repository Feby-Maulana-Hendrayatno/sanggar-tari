@extends("layouts.template_pengunjung")

@section("page_content")

<header class="masthead">
	<div class="container">
		<div class="masthead-subheading">Welcome To Our Studio!</div>
		<div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
		<a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
	</div>
</header>
<!-- Services-->
<section class="page-section" id="services">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Services</h2>
			<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		</div>
		<div class="row text-center">
			<div class="col-md-4">
				<span class="fa-stack fa-4x">
					<i class="fas fa-circle fa-stack-2x text-primary"></i>
					<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="my-3">E-Commerce</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<span class="fa-stack fa-4x">
					<i class="fas fa-circle fa-stack-2x text-primary"></i>
					<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="my-3">Responsive Design</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<span class="fa-stack fa-4x">
					<i class="fas fa-circle fa-stack-2x text-primary"></i>
					<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="my-3">Web Security</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
		</div>
	</div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Portfolio</h2>
			<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 1-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/1.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Threads</div>
						<div class="portfolio-caption-subheading text-muted">Illustration</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 2-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/2.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Explore</div>
						<div class="portfolio-caption-subheading text-muted">Graphic Design</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 3-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/3.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Finish</div>
						<div class="portfolio-caption-subheading text-muted">Identity</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<!-- Portfolio item 4-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/4.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Lines</div>
						<div class="portfolio-caption-subheading text-muted">Branding</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
				<!-- Portfolio item 5-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/5.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Southwest</div>
						<div class="portfolio-caption-subheading text-muted">Website Design</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<!-- Portfolio item 6-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/6.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Window</div>
						<div class="portfolio-caption-subheading text-muted">Photography</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About-->
<section class="page-section" id="about">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">About</h2>
			<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		</div>
		<ul class="timeline">
			<li>
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/1.jpg" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>2009-2011</h4>
						<h4 class="subheading">Our Humble Beginnings</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/2.jpg" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>March 2011</h4>
						<h4 class="subheading">An Agency is Born</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
				</div>
			</li>
			<li>
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/3.jpg" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>December 2015</h4>
						<h4 class="subheading">Transition to Full Service</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/4.jpg" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>July 2020</h4>
						<h4 class="subheading">Phase Two Expansion</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image">
					<h4>
						Be Part
						<br />
						Of Our
						<br />
						Story!
					</h4>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Our Amazing Team</h2>
			<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/1.jpg" alt="..." />
					<h4>Parveen Anand</h4>
					<p class="text-muted">Lead Designer</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/2.jpg" alt="..." />
					<h4>Diana Petersen</h4>
					<p class="text-muted">Lead Marketer</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/3.jpg" alt="..." />
					<h4>Larry Parker</h4>
					<p class="text-muted">Lead Developer</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
		</div>
	</div>
</section>
<!-- Clients-->
<div class="py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ url('/landing') }}/assets/img/logos/microsoft.svg" alt="..." /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ url('/landing') }}/assets/img/logos/google.svg" alt="..." /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ url('/landing') }}/assets/img/logos/facebook.svg" alt="..." /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ url('/landing') }}/assets/img/logos/ibm.svg" alt="..." /></a>
			</div>
		</div>
	</div>
</div>

@endsection