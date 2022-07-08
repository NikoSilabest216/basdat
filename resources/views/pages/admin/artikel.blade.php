@extends('layouts.admin.master')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">DataTables.Net</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Preview</th>
                                            <th>Kategori</th>
                                            <th>Author</th>
                                        </tr>
                                    <tbody>
                                        @foreach ($articles as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->isi }}</td>
                                                <td>{{ $item->preview }}</td>
                                                <td>
                                                @foreach ($item->categories as $category)
                                                    {{ $category->name }}
                                                @endforeach
                                                </td>
                                                <td>{{ $item->users->name }}</td>
                                                <td><a class="btn btn-success" href="{{ route('artikel.edit', $item->id) }}">Edit</a></td>
                                                <td>
                                                <form action="{{route('artikel.destroy',[$item->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="Delete" />
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
            </div>
            <a class="btn btn-success" href="{{route('artikel.create')}}">Create</a>
        </div>
    </div>
@endsection
