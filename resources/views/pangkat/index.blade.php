@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-check-circle"></i> Sukses!</strong> {{ $message }}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <!-- Tabel Pegawai untuk menampilkan data pegawai dari database -->
            <table id="tabel-pegawai" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NPP</th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>tahun</th>
                        <th>Predikat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($employees as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->employee->nip }}</td>
                                <td>{{ $item->employee->name }}</td>
                                <td>{{ $item->employee->position->name }} {{ $item->employee->level->name }}</td>
                                <td>{{ $item->year }}</td>
                                <td>{{ $item->score->name }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
