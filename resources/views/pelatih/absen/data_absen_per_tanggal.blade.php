@extends("layouts.template_pelatih")

@section("header")
<div class="container">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">
      	Data Absen Keseluruhan
      </h1>
    </div>
  </div>
</div>
@endsection

@section("content")

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-edit"></i> Absensi Tanggal : <b><?php echo date("d - m - Y") ?></b>
          </h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th>Nama Murid</th>
                <th class="text-center">Status</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
            	@php $no = 0 @endphp
            	@foreach($data_absen as $absen)
            	<tr>
            		<td class="text-center">{{ ++$no }}.</td>
            		<td>{{ $absen->getMurid->nama_murid }}</td>
            		<td class="text-center">
            			@if($absen->status == 1)
            				Hadir
            			@elseif($absen->status == 2)
            				Sakit
            			@elseif($absen->status == 3)
            				Izin
            			@elseif($absen->status == 4)
            				Alfa
            			@else
            				Tidak Ada
            			@endif
            		</td>
            		<td class="text-center">{{ $absen->keterangan }}</td>
            		<td class="text-center">
            			
            		</td>
            	</tr>
            	@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection