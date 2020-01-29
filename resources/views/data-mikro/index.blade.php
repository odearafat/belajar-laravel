@extends('layout.main')

@section('title', 'Daftar Data Mikro')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
                <h1>DAFTAR DATA MIKRO</h1>
                    <table class="table">
                    
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Data</th>
                            <th scope="col">Survei/Sensus</th>
                            <th scope="col">Size</th>
                            <th scope="col">File</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($datamikro as $data)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$data->nama_data}}</td>
                                <td>{{$data->survei}}</td>
                                <td>{{$data->size}}</td>
                                <td>{{$data->file}}</td>
                                <td>{{$data->tahun}}</td>
                                <td>
                                    <a href=""class="badge badge-success">Edit</a>      
                                    <a href=""class="badge badge-danger">delete</a>      
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                   
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection

