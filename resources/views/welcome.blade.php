@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Tabel Pegawai untuk menampilkan data pegawai dari database -->
            <table id="tabel-pegawai" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Foto</th>
                        <th>NPP</th>
                        <th>Nama Pegawai</th>
                        <th>Pangkat</th>
                        <th>Job Grup</th>
                        <th>pangkat Terakhir </th>
                        <th>tahun</th>
                        <th>Predikat</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
