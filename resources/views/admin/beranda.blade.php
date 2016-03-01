@extends('admin')

@section('judul_admin')
BERANDA
@endsection

@section('content_admin')
<main>
	<div class="container">
		<div class="row">
			<div class="col s12 m9 l10">
				<p class="caption">
					<h2 class="header">All Content</h2>
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="images/yuna.jpg" alt="" class="circle">
							<span class="title">Agenda</span>
							<p>First Line <br>
								Second Line
							</p>
							<a href="#!" class="secondary-content"><span class="badge">12 Items</span></a>
						</li>
						<li class="collection-item avatar">
							<i class="material-icons circle">folder</i>
							<span class="title">Artikel</span>
							<p>First Line <br>
								Second Line
							</p>
							<a href="#!" class="secondary-content"><span class="badge">12 Items</span></a>
						</li>
						<li class="collection-item avatar">
							<i class="material-icons circle green">insert_chart</i>
							<span class="title">Berita</span>
							<p>First Line <br>
								Second Line
							</p>
							<a href="#!" class="secondary-content"><span class="new badge">12</span></a>
						</li>
						<li class="collection-item avatar">
							<i class="material-icons circle red">play_arrow</i>
							<span class="title">Comment</span>
							<p>First Line <br>
								Second Line
							</p>
							<a href="#!" class="secondary-content"><span class="badge">12 Items</span></a>
						</li>
					</ul>

				</p>
			</div>
		</div>
	</div>


</main>
@endsection