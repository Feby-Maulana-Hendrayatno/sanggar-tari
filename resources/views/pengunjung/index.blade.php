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
		<h2 class="section-heading text-uppercase">Sanggar Tari Melati Ayu</h2>
		<h3 class="section-subheading text-muted">Traditional Dance Vibe</h3>
	</div>
	<div class="row text-center">
		<div class="col-md-4">
			<span class="fa-stack fa-4x">
				<i class="fas fa-user-clock fa-stack-2x text-primary"></i>
				<i class="fas fa-user-clock fa-stack-2x text-primary"></i>
			</span>
			<h4 class="my-3">Pelatihan</h4>
			<p class="text-muted">Sanggar tari melati ayu menyediakan jasa pelatihan seni tari tradisional </p>
		</div>
		<div class="col-md-4">
			<span class="fa-stack fa-4x">
				<i class="far fa-handshake fa-stack-2x text-primary"></i>
				<i class="far fa-handshake fa-stack-2x text-primary"></i>
			</span>
			<h4 class="my-3">Event</h4>
			<p class="text-muted">Selain pelatihan kami menyediakan jasa penari untuk diundang dalam resepsi atau event</p>
		</div>
		<div class="col-md-4"> 
			<span class="fa-stack fa-4x">
				<i class="fas fa-wallet fa-stack-2x text-primary"></i>
				<i class="fas fa-wallet fa-stack-2x text-primary"></i>
			</span>
			<h4 class="my-3">Pembayaran</h4>
			<p class="text-muted">Sistem dalam pembayarannya bisa menggunakan Bayar Langsung di tempat atau melalui transfer.</p>
		</div>
	</div>
</div>
</section>
<section>
	<div>
		<div>
		rokhman dan rokhim pada tanggal : 20 april 2007 dan sudah terdaftar di kantor dispora budpar indramayu dengan nomer izin: 431.2/111/DPOKP-IPOK/2010 yang dikeluarkan pada tanggal 9 Desember 2010. Sanggar melati ayu mengajarkan tari daerah nusantara.
sanggar melati ayu indramayu
Adapun penghargaan yang pernah di terima adalah :
<div>
1. Penghargaan Festival Nusa Bali tahun 2002
</div>
<div>
2. Penghargaan International University Student Conference, 17 Februari 2003 di Bandung
</div>
<div>
3. Penghargaan Pembukaan Pekan Olah Raga Daerah IX, April 2003
</div>
<div>	
</div>
2. Penghargaan International University Student Conference, 17 Februari 2003 di Bandung
3. Penghargaan Pembukaan Pekan Olah Raga Daerah IX, April 2003
4. Penghargaan Pertamina dalam rangka konvensi mutu II UP VI, tanggal 17 September 2003
5. Penghargaan Pagelaran Karawitan movatif dari Dewan Kesenian Indramayu, tanggal 6 Maret 2004
6. Penghargaan Pameran Industri Pers tahun 2007 di Jakarta
7. Penghargaan Pertamina dalam rangka peresmian kilang langit biru, tahun 2007
8. Penghargaan Bakti Sosial Seni Budaya dari Dewan Kesenian Indramayu pada tahun 2011
9. Penghargaan dari Kelompok Penggiat Seni Cirebon atau KPSC, 20 mei 2011
10. Penghargaan Lawung Motekar dari Kepala Dinas Pariwisata  Dan Kebudayaan Propinsi Jawa Barat,10 Desember 2011
11. Penghargaan ISI Solo dalam rangka Hari Tari Dunia, 29 April 2012
12. Penghargaan ISI Jogjakarta dalam rangka Sepatu Menari, Mei 2012
13. Penghargaan UPI Bandung dalam rangka Makalangan Tari Kreasi yang berbasis Tari Daerah tahun 2013
14. ISI Solo Dalam rangka Hari Tari Dunia, 29 April 2014
		</div>
	</div>
</section>
<!-- About-->
<section class="page-section" id="about">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">About</h2>
			<h3 class="section-subheading text-muted">Informasi Tentang Sanggar Tari Melati Ayu</h3>
		</div>
		<ul class="timeline">
			<li>
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/1.png" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="subheading">Aplikasi Sanggar Tari</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Aplikasi sanggar tari adalah aplikasi yang menangani pengelolaan data murid, pelatih, jadwal, penyewaan,dan transaksi yang ada di dalam sanggar tari. </p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/2.png" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="subheading">Sumber Data Penelitian</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Sumber data penelitian terdiri dari sumber data primer dan sumber data sekunder, Sumber data primer dilakukan dengan metode wawancara langsung dengan pihak sanggar tari dan juga observasi dokumen dan data secara langsung di Sanggar Tari Melati Ayu yang dilakukan selama 3 (tiga) bulan. Penelitian ini dilakukan dengan tahapan analisis, perancangan, implementasi dan pengujian aplikasi.</p></div>
				</div>
			</li>
			<li>
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/3.png" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="subheading">Tahap Analisis</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Tahap analisis dilakukan setelah memperoleh data primer yang kemudian dituangkan menjadi proses bisnis yang dituliskan di dalam bentuk narasi dan model flowchart.</p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/4.png" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="subheading">Tahap Perancangan</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Setelah tahap analisis dilanjutkan dengan tahap perancangan data dengan menggunakan model Entity Relationship Diagram (ERD), model aliran data dengan menggunakan Flowchart Diagram dan Kamus Data, setelah itu dirancang juga rancangan antar muka aplikasi. Dari Hasil rancangan dibuatlah aplikasi sanggar tari dengan menggunakan database MySQL, dan bahasa pemrograman PHP. </p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image">
					<h4>
						Sanggar 
						<br />
						Tari
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
			<h2 class="section-heading text-uppercase">Kelompok 1</h2>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/1.jpg" alt="..." />
					<h4>Adria Tisnawati Aprilia</h4>
					<p class="text-muted"></p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>	
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/foto1.jpg" alt="..." />
					<h4>Febby Saka Wuni</h4>
					<p class="text-muted"></p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/3.jpg" alt="..." />
					<h4>Feby Maulana Hendrayatno</h4>
					<p class="text-muted"></p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Aplikasi sanggar tari adalah aplikasi yang menangani pengelolaan data murid, pelatih, jadwal, penyewaan, dan transaksi yang ada di dalam sanggar tari.  </p></div>
		</div>
	</div>
</section>

@endsection