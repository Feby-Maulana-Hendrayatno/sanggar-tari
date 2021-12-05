@extends("layouts.template")

@section("content")

<div class="row">
    <div class="col-md-4">
        <form method="POST" action="{{ url('/admin/kemampuan/simpan/') }}">
            {{ csrf_field() }}
            <input type="hidden" name="id_kemampuan" value="{{ $edit->id_kemampuan }}">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="fa fa-edit"></span> Edit Data
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="tingkat_kemampuan"> Tingkat Kemampuan </label>
                        <input type="text" class="form-control" id="tingkat_kemampuan" name="tingkat_kemampuan" placeholder="Masukkan Tingkat Kemampuan" value="{{ $edit->tingkat_kemampuan }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                        <span class="fa fa-save"></span>
                        Simpan
                    </button>
                    <button type="reset" class="btn btn-default btn-sm float-right">
                        <span class="fa fa-refresh"></span>
                        Batal
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Data Kemampuan
                </h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Tingkat Kemampuan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 0 @endphp
                        @foreach($data_kemampuan as $kemampuan)
                        <tr>
                            <td class="text-center">{{ ++$no }}.</td>
                            <td class="text-center">{{ $kemampuan->tingkat_kemampuan }}</td>
                            <td class="text-center">
                                <a href="{{ url('/admin/kemampuan/edit') }}/{{ $kemampuan->id_kemampuan }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form method="POST" action="{{ url('/admin/kemampuan/hapus') }}" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="id_kemampuan" value="{{ $kemampuan->id_kemampuan }}">
                                    <button onclick="return confirm('Yakin ? Ingin Menghapus Data Ini ? ')" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection