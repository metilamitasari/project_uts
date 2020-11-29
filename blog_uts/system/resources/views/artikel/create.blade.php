@extends('templateAdmin.base')

      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            	<div class="card-header">
            		<strong>Tambah Data Artikel</strong>
            	</div>
            	<div class="card-body">
            		<form action="{{url('artikel')}}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="nama">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                      </div>
                      <div class="form-group">
                        <label for="nama">Penulis Artikel</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                      </div>
                      <div class="form-group">
                        <label for="nama">Isi Artikel</label>
                        <textarea class="form-control" id="isi" name="isi" rows="10"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
              </div>
            </div>
          </div>
        </div>




@endsection