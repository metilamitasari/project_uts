@extends('templateAdmin.base')


      @section('content')
       <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Data artikel
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <h3>{{$artikel->judul}}</h3>
                            <hr>
                            <p>
                            penulis : {{$artikel->penulis}} <br>
                             tanggal rilis : {{$artikel->tanggal}} <br>
                            </p>
                            <p>
                             isi artikel : <br>
                              {{$artikel->isi}} <br>
                            </p>
                            <p>
                            </p>
                        </br>
                        </br>
                    </br>
                </br>
                        </tbody>
                    </table>
                </div>
            				</tr>
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>
        </div>




@endsection