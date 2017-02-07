@extends('adminlte::page')

@section('title', 'Tambah Jabatan')

@section('css')
@endsection

@section('content_header')
    <h1><i class="fa fa-shield"></i>&nbsp; Tambah Jabatan</h1>
@endsection

@section('content')
    <div class="box">
        <div class="box-heading">
            <ol class="breadcrumb">
                <li><a href="{{url('dashboard')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('master/jabatan')}}">Jabatan</a></li>
                <li class="active">Tambah Jabatan</li>
            </ol>
        </div>
        <div class="box-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form role="form" class="form-horizontal" method="post" action="">
                <div class="form-group">
                    <label for="type" class="control-label col-md-3">Jenis</label>
                    <div class="col-md-6">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default active">
                                <input type="radio" name="jenis_jabatan" value="pendidik" autocomplete="off" checked> Pendidik
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="jenis_jabatan" value="tenaga_kependidikan" autocomplete="off"> Tenaga Kependidikan
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="jenis_jabatan" value="profesional" autocomplete="off"> Profesional
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="jenis_jabatan" value="strategis" autocomplete="off"> Strategis
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="jenis_jabatan" value="lainnya" autocomplete="off"> Lainnya
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="control-label col-md-3">Nama Jabatan</label>
                    <div class="col-md-6">
                        <input type="text" name="nama_jabatan" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alias" class="control-label col-md-3">Alias <small>(Optional)</small></label>
                    <div class="col-md-6">
                        <input type="text" name="alias" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="tugas_jabatan" class="control-label col-md-3">Tugas Jabatan <small>(Optional)</small></label>
                    <div class="col-md-6">
                        <textarea name="tugas_jabatan" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="control-label col-md-3">Keterangan <small>(Optional)</small></label>
                    <div class="col-md-6">
                        <textarea name="keterangan" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-6 col-md-offset-3">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-default pull-right">Simpan <i class="fa fa-save"></i></button>
                    
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection
