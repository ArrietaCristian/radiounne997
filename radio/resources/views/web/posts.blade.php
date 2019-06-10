@extends('layouts.app')


@section('content')

@include('layouts.nav')

<div class="img-responsive radio" style="background-color: black; padding: 0 0 0 0;" align="center">
	@include('web.IR')

 
</div>

<div class="contenedor-galeria container">



	<section>
		<br>
		 <div class="sombra col-md-12 col-s-12 text-left" >  
                <h2><strong style="color: #DAA520;background-color: grey; ">&nbsp AUDIOS/PODCAST &nbsp</strong></h2>
                	
                   <iframe width="100%" height="400"  scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/175169875&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>  
                     
          </div>
    </section> 
    
             
		<br><br>
	<section>
<div class="contenedor-galeria col-md-12">	
<div class="row">
		<div class="col-md-8 col-md-offset-2 col-s-8" id="img2" >
					
			 	<a  href="{{ route('post', $posts->get(0)->slug )}}"> 
			 	   <img class="img2 img-responsive" src="{{$posts->get(0)->cabeceraimagen}}" >                    
                      <h3 class="textosobreimagen2">"{{$posts->get(0)->titulo}}" </h3>


                     
              	</a>
    </div> 
                  
    

		
	<div class=" contenedor-galeria col-md-4">
		<br>
			<div class="row">
				<div class="col-md-12 col-md-offset-2 col-s-12" id="img3">
					<a  href="{{ route('post', $posts->get(1)->slug )}}"> 
			 	   		<img class="img3 img-responsive" src="{{$posts->get(1)->cabeceraimagen}}">                    
                      	<h3 class="textosobreimagen3">"{{$posts->get(1)->titulo}}"  </h3>
              		</a>
         		</div>
           	</div> 
        <br>		
        	<div class="row">
           		<div class=" col-md-12 col-md-offset-2 col-s-12" id="img3" >
           			<a  href="{{ route('post', $posts->get(2)->slug )}}"> 
			 	   		<img class="img3 img-responsive" src="{{$posts->get(2)->cabeceraimagen}}">                    
                      	<h3 class="textosobreimagen3">"{{$posts->get(2)->titulo}}"  </h3>
            		</a>
         		</div> 
        	</div>
    </div>

</div>
</div>	

</section>

	<br>

<section>
<div class="contenedor-galeria col-md-12">	
<div class="row">

	<div class="col-md-8 col-md-offset-2 " id="img2" >
					
			 	<a  href="{{ route('post', $posts->get(3)->slug )}}"> 
			 	   <img class="img2 img-responsive" src="{{$posts->get(3)->cabeceraimagen}}" >                    
                      <h3 class="textosobreimagen2">"{{$posts->get(3)->titulo}}"  </h3>
              	</a>
    </div> 

		<div class="contenedor-galeria col col-md-4">
		<br>
			<div class="row">
				<div class="col-md-12 col-md-offset-2 col-s-12" id="img3">
					<a  href="{{ route('post', $posts->get(4)->slug )}}"> 
			 	   		<img class="img3 img-responsive" src="{{$posts->get(4)->cabeceraimagen}}">                    
                      	<h3 class="textosobreimagen3">"{{$posts->get(4)->titulo}}"  </h3>
              		</a>
         		</div>
           	</div> 
        <br>		
        	<div class="row">
           		<div class=" col-md-12 col-md-offset-2 col-s-12" id="img3" >
           			<a  href="{{ route('post', $posts->get(5)->slug )}}"> 
			 	   		<img class="img3 img-responsive" src="{{$posts->get(5)->cabeceraimagen}}">                    
                      	<h3 class="textosobreimagen3">"{{$posts->get(5)->titulo}}"  </h3>
            		</a>
         		</div> 
        	</div>
    </div>   


   
        
</div>
</div>	

</section>



	<br>
<section>
	
	<div class="row" >
			<div class="contenedor-galeria col-md-3" id="img">
				
           			<br>
							
			 			<a  href="{{ route('post', $posts->get(6)->slug )}}"> 
			 	   			<img class="img img-responsive" src="{{$posts->get(6)->cabeceraimagen}}"> <h3 class="textosobreimagen">"{{$posts->get(6)->titulo}}"  </h3>
              			</a>
         			
            	
        	</div>
       
       <div class="contenedor-galeria col-md-3" id="img">
				
           			<br>
						
			 			<a  href="{{ route('post', $posts->get(7)->slug )}}"> 
			 	   			<img class="img img-responsive" src="{{$posts->get(7)->cabeceraimagen}}"> <h3 class="textosobreimagen">"{{$posts->get(7)->titulo}}"  </h3>
              			</a>
         			
            	
        </div>

        <div class="contenedor-galeria col-md-3" id="img">
			
           			<br>
						
			 			<a  href="{{ route('post', $posts->get(8)->slug )}}"> 
			 	   			<img class="img img-responsive" src="{{$posts->get(8)->cabeceraimagen}}"> <h3 class="textosobreimagen">"{{$posts->get(8)->titulo}}"  </h3>
              			</a>
         			
            	
        </div>

        <div class="contenedor-galeria col-md-3" id="img">
			
           			<br>
						
			 			<a  href="{{ route('post', $posts->get(9)->slug )}}"> 
			 	   			<img class="img img-responsive" src="{{$posts->get(9)->cabeceraimagen}}"> <h3 class="textosobreimagen">"{{$posts->get(9)->titulo}}"  </h3>
              			</a>
         			
            	
        </div>

    </div>


</section>
<br><br>
<a href="{{url('/posts/anteriores/')}}"  style="color: #DAA520; background-color: grey"><h2>* Ver Post anteriores</h2></a>
	<br>

</div>



<div class="TyF">
	<div class="container ">
		<br>
		<div class="row">
			<div class="col-md-6">
				<h3 class="img-responsive"> twitter.com/RadioUNNE997 </h3>
				    <a class="sombra twitter-timeline" data-width="550" data-height="300" data-theme="dark" href="https://twitter.com/RadioUNNE997?ref_src=twsrc%5Etfw">Tweets by RadioUNNE997</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    		</div>

			<div class=" img-responsive  col-md-6">
				<h3 class="img-responsive">facebook.com/RadioUnne99.7</h3>
				<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3"></script>
			<div class="sombra fc fb-page img-responsive" data-href="https://www.facebook.com/RadioUNNE997" data-width="550" data-height="300" data-tabs="timeline"  data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" ><blockquote cite="https://www.facebook.com/RadioUNNE997" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RadioUNNE997">Radio UNNE - 99.7 mhz</a></blockquote></div>
			</div>
			
		</div>
		<br>
	</div>
</div>





	
@endsection