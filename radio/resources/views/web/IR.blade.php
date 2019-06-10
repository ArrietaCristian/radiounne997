
@php (date_default_timezone_set('America/Argentina/Buenos_Aires')) 

 @switch($dia=date("l") and $hora=(date("G")) and $min=date('i'))


                      @case($dia==="Monday" and $hora>=00 and $hora<6 and $min>=00 and $min<=59) 

                         @php ($i = 22)
                        
                
                    @break  
                   
                    @case($dia==="Monday" and $hora>=6 and $hora<7 and $min>=00 and $min<=59)                     
                        
                         @php ($i = 19)

                    @break 
                   
                   @case($dia==="Monday" and $hora>=7 and $hora<9 and $min>=00 and $min<=59)  

                         @php ($i = 18)

                    @break 

                    @case($dia==="Monday" and $hora>=9 and $hora<12 and $min>=00 and $min<=59) 

                         @php ($i = 17) 

                
                    @break 

                    @case($dia==="Monday" and $hora>=12 and $hora<13 and $min>=00 and $min<=59)

                         @php ($i = 16)

                
                    @break 
                    
                     @case($dia==="Monday" and $hora>=13 and $hora<14 and $min>=00 and $min<=59)

                         @php ($i = 15)

                 
                    @break 

                     @case($dia==="Monday" and $hora>=14 and $hora<16 and $min>=00 and $min<=59)

                         @php ($i = 22)

                 
                    @break 

                     @case($dia==="Monday" and $hora>=16 and $hora<17 and $min>=00 and $min<=59)

                         @php ($i = 9)

                 
                    @break 

                    @case($dia==="Monday" and $hora>=17 and $hora<19 and $min>=00 and $min<=59)

                         @php ($i = 21)

                 
                    @break 

                    @case($dia==="Monday" and $hora>=19 and $hora<20 and $min>=00 and $min<=59)

                         @php ($i = 7)

                 
                    @break 

                    @case($dia==="Monday" and $hora>=20 and $hora<24 and $min>=00 and $min<=59)

                         @php ($i = 22)

                 
                    @break 

                   




                    @case($dia==="Tuesday" and $hora>=0 and $hora<6 and $min>=00 and $min<=59)  

                         @php ($i = 22)                   
                        
               
                    @break 

                   
                    @case($dia==="Tuesday" and $hora>=6 and $hora<7 and $min>=00 and $min<=59)  

                         @php ($i = 19)                   
                        
                
                    @break 
                   
                   @case($dia==="Tuesday" and $hora>=7 and $hora<9 and $min>=00 and $min<=59) 

                     @php ($i = 18) 

                
                    @break 

                    @case($dia==="Tuesday" and $hora>=9 and $hora<12 and $min>=00 and $min<=59) 

                         @php ($i = 17)

                    @break 

                    @case($dia==="Tuesday" and $hora>=12 and $hora<13 and $min>=00 and $min<=59)

                         @php ($i = 16)

                 
                    @break 
                    
                     @case($dia==="Tuesday" and $hora>=13 and $hora<14 and $min>=00 and $min<=59)

                         @php ($i = 15)

                 
                    @break 

                     @case($dia==="Tuesday" and $hora>=14 and $hora<15 and $min>=00 and $min<=59)

                         @php ($i = 14)

                
                    @break 

                     @case($dia==="Tuesday" and $hora>=15 and $hora<17 and $min>=00 and $min<=59)

                         @php ($i = 11)

                 
                    @break 

                    @case($dia==="Tuesday" and $hora>=17 and $hora<19 and $min>=00 and $min<=59)

                         @php ($i = 21)


                    @break 

                    @case($dia==="Tuesday" and $hora>=19 and $hora<20 and $min>=00 and $min<=59)

                         @php ($i = 7)
                        
                 
                    @break 

                    @case($dia==="Tuesday" and $hora>=20 and $hora<24 and $min>=00 and $min<=59)

                         @php ($i = 22)


                    @break 



                   

                    @case($dia==="Wednesday" and $hora>=0 and $hora<6 and $min>=00 and $min<=29) 

                         @php ($i = 22)                    
                        
                    @break 

                   
                    @case($dia==="Wednesday" and $hora>=5 and $hora<6 and $min>=30 and $min<=59)   

                         @php ($i = 20)                  
                        
               
                    @break 


                    @case($dia==="Wednesday" and $hora>=6 and $hora<7 and $min>=00 and $min<=59)  

                         @php ($i = 19)                   
                        
                    @break 
                   
                   @case($dia==="Wednesday" and $hora>=7 and $hora<9 and $min>=00 and $min<=59)  

                         @php ($i = 18)

                   @break 

                    @case($dia==="Wednesday" and $hora>=9 and $hora<12 and $min>=00 and $min<=59)  

                         @php ($i = 17)

                
                    @break 

                    @case($dia==="Wednesday" and $hora>=12 and $hora<13 and $min>=00 and $min<=59)

                         @php ($i = 16)

                 
                    @break 
                    
                     @case($dia==="Wednesday" and $hora>=13 and $hora<14 and $min>=00 and $min<=59)

                         @php ($i = 15)

                      @break  

                     @case($dia==="Wednesday" and $hora>=14 and $hora<15 and $min>=00 and $min<=59)

                         @php ($i = 13)

                     @break 

                     @case($dia==="Wednesday" and $hora>=15 and $hora<16 and $min>=00 and $min<=59)

                         @php ($i = 10)

                 
                    @break 

                    @case($dia==="Wednesday" and $hora>=16 and $hora<17 and $min>=00 and $min<=59)

                         @php ($i = 9)

                 
                    @break 

                    @case($dia==="Wednesday" and $hora>=17 and $hora<19 and $min>=00 and $min<=59)

                         @php ($i = 21)

                   @break 

                    @case($dia==="Wednesday" and $hora>=19 and $hora<20 and $min>=00 and $min<=59)

                         @php ($i = 7)

                 
                    @break 

                    @case($dia==="Wednesday" and $hora>=20 and $hora<24 and $min>=00 and $min<=59)

                         @php ($i = 22)

                    @break 





                     @case($dia==="Thursday" and $hora>=0 and $hora<6 and $min>=00 and $min<=59)   

                         @php ($i = 22)                  
                        
                
                    @break 

                                       
                    @case($dia==="Thursday" and $hora>=6 and $hora<7 and $min>=00 and $min<=59)   

                         @php ($i = 19)                  
                        
                
                    @break 
                   
                   @case($dia==="Thursday" and $hora>=7 and $hora<9 and $min>=00 and $min<=59)  

                         @php ($i = 18)

                
                    @break 

                    @case($dia==="Thursday" and $hora>=9 and $hora<12 and $min>=00 and $min<=59)  

                         @php ($i = 17)

                
                    @break 

                    @case($dia==="Thursday" and $hora>=12 and $hora<13 and $min>=00 and $min<=59)

                         @php ($i = 16)

                
                    @break 
                    
                     @case($dia==="Thursday" and $hora>=13 and $hora<14 and $min>=00 and $min<=59)

                         @php ($i = 15)

                
                    @break  

                     @case($dia==="Thursday" and $hora>=14 and $hora<16 and $min>=00 and $min<=59)

                         @php ($i = 12)

                
                    @break 

                     @case($dia==="Thursday" and $hora>=16 and $hora<17 and $min>=00 and $min<=59)

                         @php ($i = 22)

                 
                    @break 

                    @case($dia==="Thursday" and $hora>=17 and $hora<19 and $min>=00 and $min<=59)

                         @php ($i = 21)
                           

                    @break 

                    @case($dia==="Thursday" and $hora>=19 and $hora<20 and $min>=00 and $min<=59)

                         @php ($i = 7)

                    @break 

                    @case($dia==="Thursday" and $hora>=20 and $hora<22 and $min>=00 and $min<=59)

                         @php ($i = 6)

                
                    @break 

                    @case($dia==="Thursday"    and $hora>=22 and $hora<24 and $min>=00 and $min<=59)

                         @php ($i = 22)


                    @break 

                    



                     @case($dia==="Friday" and $hora>=0 and $hora<6 and $min>=00 and $min<=59)  

                      @php ($i = 22)                   
                        
                
                    @break 

                                       
                    @case($dia==="Friday" and $hora>=6 and $hora<7 and $min>=00 and $min<=59) 

                     @php ($i = 19)                    
                        
               
                    @break 
                   
                   @case($dia==="Friday" and $hora>=7 and $hora<9 and $min>=00 and $min<=59)  

                     @php ($i = 18)

                
                    @break 

                    @case($dia==="Friday" and $hora>=9 and $hora<12 and $min>=00 and $min<=59)  

                         @php ($i = 17)

                
                    @break 

                    @case($dia==="Friday" and $hora>=12 and $hora<13 and $min>=00 and $min<=59)

                         @php ($i = 16)

                    @break 
                    
                     @case($dia==="Friday" and $hora>=13 and $hora<14 and $min>=00 and $min<=59)

                         @php ($i = 15)

                     @break 

                     @case($dia==="Friday" and $hora>=14 and $hora<16 and $min>=00 and $min<=59)

                         @php ($i = 22)

                     @break 

                     @case($dia==="Friday" and $hora>=16 and $hora<17 and $min>=00 and $min<=59)

                         @php ($i = 8)
                        
                     @break 

                    @case($dia==="Friday" and $hora>=17 and $hora<19 and $min>=00 and $min<=59)

                         @php ($i = 21)

                
                    @break 

                    @case($dia==="Friday" and $hora>=19 and $hora<20 and $min>=00 and $min<=59)

                         @php ($i = 7)

                    @break 

                    @case($dia==="Friday" and $hora>=20 and $hora<22 and $min>=00 and $min<=59)

                         @php ($i = 5)

                    @break  

                    @case($dia==="Friday" and $hora>=22 and $hora<24 and $min>=00 and $min<=59)

                         @php ($i = 22)

                   @break 





                @case($dia==="Saturday" and $hora>=0 and $hora<6 and $min>=00 and $min<=59)   

                     @php ($i = 22)                  
                        
                @break 

                                       
                    @case($dia==="Saturday" and $hora>=6 and $hora<7 and $min>=00 and $min<=59)

                         @php ($i = 20)                     
                        
                    @break 
                   
                   @case($dia==="Saturday" and $hora>=7 and $hora<14 and $min>=00 and $min<=59)  

                         @php ($i = 22)

                
                    @break 

                   

                     @case($dia==="Saturday" and $hora>=14 and $hora<15 and $min>=00 and $min<=59)

                         @php ($i = 3)

                 
                    @break 

                     @case($dia==="Saturday" and $hora>=15 and $hora<17 and $min>=00 and $min<=59)

                         @php ($i = 22)

                     @break 

                    @case($dia==="Saturday" and $hora>=17 and $hora<19 and $min>=00 and $min<=59)

                         @php ($i = 2)

                 
                    @break 

                    @case($dia==="Saturday" and $hora>=19 and $hora<21 and $min>=00 and $min<=59)

                         @php ($i = 1)

                                 
                    @break 

                   
                    @case($dia==="Saturday" and $hora>=21 and $hora<24 and $min>=00 and $min<=59)

                         @php ($i = 22)

                 
                    @break 



                  
                  @case($dia==="Sunday" and $hora>=0 and $hora<7 and $min>=00 and $min<=59) 

                     @php ($i = 22)                    
                        
              
                    @break 
                                       
                    @case($dia==="Sunday" and $hora>=7 and $hora<13 and $min>=00 and $min<=59)    

                         @php ($i = 4)                 
                        
                
                    @break 
                   
                   @case($dia==="Sunday" and $hora>=13 and $hora<22 and $min>=00 and $min<=59)  

                         @php ($i = 22)

               
                    @break 
                   

                     @case($dia==="Sunday" and $hora>=22 and $hora<23 and $min>=00 and $min<=59)

                         @php ($i = 6)

                 
                    @break 

                     @case($dia==="Sunday" and $hora>=23 and $hora<24 and $min>=00 and $min<=59)

                         @php ($i = 22)

                 
                    @break 


                @endswitch  

                

            <video id="MY_VIDEO_1" class="video-js vjs-default-skin" style="text-align: center" controls
                preload="auto" width="340" height="200" poster="{{$img->get($i)->url}}"
                data-setup="{}">
                <source src="http://stream.unne.edu.ar:8000/radio" type="audio/mp4">
                <track src="http://stream.unne.edu.ar:8000/radio" kind="subtitles" label="Radio UNNE"></track>
 
                 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
            </video>

                