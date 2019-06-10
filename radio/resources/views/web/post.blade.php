@extends('layouts.app')

@section('content')

<div class="img-responsive radio" style="background-color: black;" align="center" style="padding-top: 0px">
	<video id="MY_VIDEO_1" class="video-js vjs-default-skin" style="text-align: center" controls
 preload="auto" width="140" height="100" poster="http://localhost:8000/public/img/MzYuuZtWiX0iL3NvVCESTQFlbLf8SPNlaL396nAp.jpeg"
 data-setup="{}">
 <source src="http://stream.unne.edu.ar:8000/radio" type="audio/mp4">
 
 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>
</div>

<div class="container col-md-12 pull-center">
	<br><br>
	<div class="row">
		<div class="col-md-9 text-center">
				
			<div class="panel panel-default">
					<h1>{!! $post->titulo !!}</h1>

						

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8 text-left" style="margin-left: 7%">
						Categoria
						<a href="{{route('categoria', $post->category->slug)}}">{!! $post->category->descripcion !!}</a>
					</div>
					<div class="col-md-3 pull-rigth" style="margin-right: 0px;">
						<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.RadioUNNE997.com/" target="_blank" ><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a>
                
                		<a href="http://www.twitter.com/home?status=@RadioUNNE997" target="_blank"><img src="https://lh5.googleusercontent.com/-xZVxH6CsUaQ/UefWwgi8o3I/AAAAAAAAEdk/reo5XS6z8-8/s32-no/twitter.png" class="pull-rigth"></a>
            
                		<a href="https://plus.google.com/share?url=http://www.RadioUNNE997.com/" target="_blank"><img src="https://lh5.googleusercontent.com/-5Q7Sj0SXhOA/UefWwcrnZ-I/AAAAAAAAEdg/auK3wqGCbZE/s32-no/googleplus.png" class="pull-rigth" ></a> 
					</div>
				</div>
			</div>
		<div class="panel-body pull-center" >
				@if($post->cabeceraimagen)
				<img src="{{$post->cabeceraimagen}}"  align="center">
				@endif
				<hr width="100%" style="background:gold" align="center"> 
				<h3>{!!$post->texto!!}</h3>
				
				<hr style="background:gold">
				<h5>Etiquetas: </h5>
				@foreach($post->tags as $tag)
				<a href="{{route('tag', $tag->slug)}}">
					{!! $tag->descripcion !!}
				</a>
				@endforeach
				<hr style="background-color: gold" align="center">
		</div>
		


		<div class="text-left">
			<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2FradioUNNE997&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		</div>


		<div class="text-left">
			<a class="twitter-follow-button"
		  href="https://twitter.com/RadioUNNE997"
		  data-size="large">
		Follow @RadioUNNE997</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>

		<br>
		
	<span style="border: 2px gold solid;">&nbsp Visita número: {!! $post->totalV !!} &nbsp</span>
		
	
	</div>
		<br>
</div>

                  

<div class="col-md-3  img-responsive">  
<br><br>  
<div class="row">      
      <div class="col-md-12 col-sm-12 "> 
                 <section class="text-center" style="background:grey" >
                        <h4><strong style="color: white">Últimas Noticias</strong></h4>
                </section>                
            </div>
              
                 <div class="row">
                <div class="col-md-12">
                	<br>
                       <a href="{{ route('post' , $posts->get(0)->slug) }}">
                       	<div class="row">
                       <div class="col-md-6">                       
                         <img class="img-responsive img-thumbnail" src="{{$posts->get(0)->cabeceraimagen}}"></div>
                         <div class="col-md-6">
                        <p>{!! str_limit($posts->get(0)->titulo, $limit = 90, $end = '...') !!}</p>
                        </div>
                    </div>
                       </a>
                     
                     </div>
                </div>          

              <div class="row">
                <div class="col-md-12">
                 <br>
                     <a href="{{ route('post' , $posts->get(1)->slug) }}"> 
                     <div class="row">                      
                      <div class="col-md-6"><img class="img-responsive img-thumbnail" src="{{$posts->get(1)->cabeceraimagen}}"></div> 
                      <div class="col-md-6"> 
                        <p>{!! str_limit($posts->get(1)->titulo, $limit = 90, $end = '...') !!}</p>
                    </div>
                       </div>
                    </a>
                  </div>
                </div> 

                 <div class="row">
                <div class="col-md-12">
                  <br>
                   <a href="{{ route('post' , $posts->get(2)->slug) }}">
                   <div class="row">                   
                   <div class="col-md-6"><img class="img-responsive img-thumbnail" src="{{$posts->get(2)->cabeceraimagen}}"> </div>
                   <div class="col-md-6">
                        <p>  {!! str_limit($posts->get(2)->titulo, $limit = 90, $end = '...') !!} </p>
                    </div>
                </div>
                    
                   </a>
                  </div>
                 </div> 
                

               
             
</div>
<br><br>
<div class="row">

		 <div class="col-md-12 col-sm-12 "> 

			<section class="text-center" style="background:grey">
                        <h4><strong style="color: white">Lo más visto</strong></h4>
            </section>
           </div>
             
            <div class="row">
                <div class="col-md-12">
                	<br>
                  <a href="{{ route('post' ,  $TV->get(0)->slug) }}">
                  		<div class="row">
                            <div class="col-md-6"><img class="img-responsive img-thumbnail" src="{{$TV->get(0)->cabeceraimagen}}">
                            </div>
                            <div class="col-md-6">                           
                                <p>{!! str_limit($TV->get(0)->titulo, $limit = 90, $end = '...') !!} </p>
                            </div>
                        </div>
                            </a>
                          </div>
                        </div>


                       <div class="row ">
                <div class="col-md-12">
                	<br>
                  <a href="{{ route('post' ,  $TV->get(1)->slug) }}">
                  		<div class="row">
                            <div class="col-md-6"><img class="img-responsive img-thumbnail" src="{{$TV->get(1)->cabeceraimagen}}">
                            </div>
                            <div class="col-md-6">                           
                                <p>{!! str_limit($TV->get(1)->titulo, $limit = 90, $end = '...') !!} </p>
                            </div>
                        </div>
                            </a>
                          </div>
                        </div>

             <div class="row ">
                <div class="col-md-12">
                	<br>
                  <a href="{{ route('post' ,  $TV->get(2)->slug) }}">
                  		<div class="row">
                            <div class="col-md-6"><img class="img-responsive img-thumbnail" src="{{$TV->get(2)->cabeceraimagen}}">
                            </div>
                            <div class="col-md-6">                           
                                <p>{!! str_limit($TV->get(2)->titulo, $limit = 90, $end = '...') !!} </p>
                            </div>
                        </div>
                            </a>
                          </div>
                        </div>

             
               
              


</div>
</div>
@stop