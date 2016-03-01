@extends('admin')

@section('judul_admin')
Tambah Agenda
@endsection

@section('content_admin')
<main>
	<p class="caption">
		<h3 class="header">Tambah Agenda</h3>
		<div class="row">
			<form class="col s12" METHOD="post" action="">
				<div class="row">
					<!-- <div class="input-field col s12 m4 center-on-small-only">
						<i class="mdi-action-account-circle prefix"></i>
						<input name="nama" id="icon_prefix" type="text" class="validate">
						<label for="icon_prefix">Nama</label>
					</div>
					<div class="input-field col s12 m4 center-on-small-only">
						<i class="mdi-communication-phone prefix"></i>
						<input name="telepon" id="icon_telephone" type="tel" class="validate">
						<label for="icon_telephone">Telepon</label>
					</div>
				</div> -->
				<div class="row">
					<div class="input-field col s12 ">
						<i class="mdi-content-create prefix"></i>
						<input name="nama_agenda" id="nama_agenda" type="text" class="validate" required>
						<label for="nama_agenda" data-error="data tidak valid" data-success="data valid">Nama Agenda</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="mdi-maps-place prefix"></i>
						<input name="alamat" id="address" type="text" class="validate" required>
						<label for="address" data-error="data tidak valid" data-success="data valid">Alamat</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m4 center-on-small-only">
						<i class="material-icons">today</i>
						<input name="jadwal" id="jadwal" type="date" class="validate" required>
						<label for="jadwal" data-error="data tidak validate" data-success="data valid"></label>
					</div>
				</div>
				<div class="row">
				<div class="input-field col s12 m4 center-on-small-only">
					<input type="checkbox" id="konfirmasi" class="validate" required>
      				<label for="konfirmasi" data-error="data tidak valid" data-success="data valid">Apakah anda yakin?</label>
      				</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<button class="btn waves-effect waves-light right" type="submit"  value="send">Tambah Agenda
							<i class="mdi-content-send right"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</p>
</main>
@endsection