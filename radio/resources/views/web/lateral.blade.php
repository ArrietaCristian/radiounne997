@section('content')

<div class="col-md-3  img-responsive">    
<div class="row">      
      <div class="col-md-12 col-sm-12 "> 
                 <section class="text-center" style="background:grey" >
                        <h4><strong style="color: white">Últimas Noticias</strong></h4>
                </section>                

              
                
                       <a href="{{ route('post' , $posts->get(0)->slug) }}">

                       <div class="col-md-3">                       
                         <img class="img-responsive img-thumbnail" src="{{$posts->get(0)->cabeceraimagen}}"></div>
                         <div class="col-md-8">
                        <p>{!! str_limit($posts->get(0)->titulo, $limit = 90, $end = '...') !!}</p>
                        </div>
                       </a>
                     
                              

              <div class="row">
                <div class="col-md-12">
                 
                     <a href="{{ route('post' , $posts->get(1)->slug) }}">                       
                      <div class="col-md-3"><img class="img-responsive img-thumbnail" src="{{$posts->get(1)->cabeceraimagen}}"></div>  
                        <p>{!! str_limit($posts->get(1)->titulo, $limit = 90, $end = '...') !!}</p>
                       
                    </a>
                  </div>
                </div> 

                 <div class="row">
                <div class="col-md-12">
                  
                   <a href="{{ route('post' , $posts->get(2)->slug) }}">                   
                   <div class="col-md-3"><img class="img-responsive img-thumbnail" src="{{$posts->get(2)->cabeceraimagen}}"</div>
                        <p>  {!! str_limit($posts->get(2)->titulo, $limit = 90, $end = '...') !!} </p>
                    
                   </a>
                  </div>
                 </div> 
                

               
             
</div>
             
                 </div> 
          
              </div> 
@endsection