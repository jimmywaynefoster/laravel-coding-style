@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">
                <i class="fas fa-edit"></i> Input Data
            </div>

            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('pangkat.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-12">
                                    <label>Tahun</label>
                                    <input type="number" name="year" class="form-control">
                                    <div class="invalid-feedback">NPP tidak boleh kosong.</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group col-md-12">
                                    <label>Pilih Pegawai</label>
                                    <select name="employee" class="form-control">
                                        <option value="" hidden>Pilih Pegawai</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">NPP tidak boleh kosong.</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group col-md-12">
                                    <label>Pilih Penilaian</label>
                                    <select name="score" class="form-control">
                                        <option value="" hidden>Pilih Predikat</option>
                                        @foreach ($scores as $score)
                                            <option value="{{ $score->id }}">{{ $score->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">NPP tidak boleh kosong.</div>
                                </div>
                            </div>
                        </div>

                        <div class="my-md-4 pt-md-1 border-top"> </div>

                        <div class="form-group col-md-5">
                            <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
