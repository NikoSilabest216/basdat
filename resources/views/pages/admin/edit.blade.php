@extends('layouts.admin.master')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <form method="POST" action="{{route('artikel.update',[$data->id])}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="email2">Judul Artikel</label>
                                            <input name="title" type="text" class="form-control" id="email2" placeholder="Enter Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="preview">Preview</label>
                                            <input name="preview" type="text" class="form-control" id="preview" placeholder="preview">
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Isi</span>
                                                </div>
                                                <textarea name="isi" class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-action text-right"style="">
                                            <input type="submit" class="btn btn-success" value="Edit" />
                                        </div>
                                    </form>
                                    <a class="btn btn-danger" href="{{route('artikel.index')}}">Batal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('another-script')
    $(document).ready(function() {
    $('#categories').select2();
    });F
@endsection
