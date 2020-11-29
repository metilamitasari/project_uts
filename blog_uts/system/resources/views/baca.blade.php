@extends ('templateAdmin.base')
@section ('content')
<div class="Blog-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="Blogheading">
               <h3>Blog </h3>
            </div>
         </div>
      </div>
   </div>
</div>



      <!-- section --> 
      <div class="section layout_padding blog_blue_bg light_silver">
         <div class="container">
            
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img class="img-responsive" src="{{url('public')}}/images/blog_1.png" alt="#" />
                     </div>
                     <div class="blog_cont_2">
                        <h3>{{$artikel->judul}}</h3>
                        <p class="sublittle">Penulis : {{$artikel->penulis}} | Tanggal : {{$artikel->created_at}}</p>
                        <p>
                           {!! nl2br($artikel->isi) !!}
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->

<
          
      
    
     @endsection