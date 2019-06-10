
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

<div class="col-md-12">
<div class="row">
    <div class="col-md-8" style="margin-right: 10px;">
    <div class="row">   
@foreach($posts as $p)
<div class="col-md-12" style=" border:grey 1px solid;border-left: grey 2px solid; border-right: grey 2px solid;">
    <div class="row">


<div class="col-md-4 pull-right">
    
<a href="{{ url('/entrada/' . $p->slug) }}">

<img class="img-responsive " src="{{$p->cabeceraimagen}}" style="width: 210px; height: 160px; margin-right: 0px;">
</a>

</div>




<div class="col-md-8 pull-left" style="margin-left: 0px;">
    
<a href="{{ url('/entrada/' . $p->slug) }}">
<div>

<FONT COLOR="#F1BE00"><h3 style="min-height:45px;margin-left: 0px; margin-top: 10px;">{!! $p->titulo !!}</h3></FONT>

</div>
<div>

<FONT COLOR="black"><h5>{!! str_limit($p->texto, $limit = 200, $end = '...') !!} </h5></FONT>
</div>
</a>
</div>



</div>
</div>



@endforeach

{{$posts->links()}}
</div>
</div>


<div class="col-md-4" style="margin-left: 10px;">

    <br>
   

            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%2FRadioUnne99.7&tabs=timeline&width=280&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
       
        <br>
            <p style="width: 280px;">
                 <a class="twitter-timeline" data-lang="es" data-width="300" data-height="500" href="https://twitter.com/RadioUNNE997?ref_src=twsrc%5Etfw">Tweets by RadioUNNE997</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </p>

</div>

</div>
@endsection
