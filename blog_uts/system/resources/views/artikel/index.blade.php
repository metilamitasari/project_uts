@extends('templateAdmin.base')


      @section('content')
        
        <div  class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                <div class="card-header">
                    Filter  
                </div>
                <div class="card-body">
                    <form action="{{url('artikel/filter')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control label">Kategori artikel</label>
                            <input type="text" class="form-control" name="kategori" value="{{$kategori ?? ''}}">
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control label">Harga Min</label>
                                <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ''}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control label">Harga Max</label>
                                <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ''}}">
                            </div>
                        </div>
                    </div>
                        
                        <button class="btn btn-primary float-right"><i class="fa fa-search"> Filter </i></button>
                    </form>
                </div>
            </div>
                </div>
            </div>
            <div class="card">
                @include('templateAdmin.utils.notif')
            	<div class="card-header">
            		<strong>Data Artikel</strong>
            		<a href="{{url('artikel/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</a>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Aksi</th>
            					<th>Judul Artikel</th>
                                <th>Penulis Artikel</th>
                                <th>Isi Artikel</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach($list_artikel as $artikel)
            				<tr>
            					<td>{{$loop->iteration}}</td>
            					<td>
            						<div class="btn-group">
            							<a href="{{url('artikel', $artikel->id)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
            							<a href="{{url('artikel', $artikel->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        @include('templateAdmin.utils.delete', ['url' => url('artikel', $artikel->id)])
            						</div>
            					</td>
            					<td>{{$artikel->judul}}</td>
                                <td>{{$artikel->penulis}}</td>
                                <td>{{$artikel->isi}}</td>   
            				</tr>
            				@endforeach
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>




@endsection