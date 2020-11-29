@extends('templateAdmin.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-header">
          Tambah Data artikel
        </div>
        <div class="card-body">
          <form action="{{url('artikel', $artikel->id)}}" method="post">
            @csrf
            @method("PUT")
          <div class="form-group">
            <label for="" class="control-label">judul</label>
            <input type="text" class="form-control" name="judul" value="{{$artikel->judul}}">
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="" class="control-label">penulis</label>
                <input type="text" class="form-control" name="penulis" value="{{$artikel->penulis}}">
              </div>
            </div>
            </div>
          <div class="form-group">
            <label for="" class="control-label">isi artikel</label>
            <textarea name="isi" class="form-control">{{$artikel->isi}}</textarea>
          </div>
          <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
          </form>
        </div>
      </div>
    
    </div>
  </div>
</div>
@endsection