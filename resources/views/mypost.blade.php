@extends('comptelayout')
@section('content')
<script src="../js/myposts.js"></script>  

<div class="caroulix" id="example-caroulix" data-ax="caroulix" data-ax-caroulix-autoplay-enabled="true" data-caroulix-indicators-enabled="true">
  <div class="caroulix-arrow caroulix-prev">
    <i class="fa fa-chevron-left"></i>
  </div>
  <div class="caroulix-arrow caroulix-next">
    <i class="fa fa-chevron-right"></i>
  </div>
  <div class="caroulix-item">
    <img src="https://picsum.photos/800/450?random=1" alt="img1" />

  </div>
  <div class="caroulix-item">
    <img src="https://picsum.photos/800/450?random=2" alt="img2" />

  </div>
  <div class="caroulix-item">
    <img src="https://picsum.photos/800/450?random=3" alt="img3" />
  
  </div>
  <div class="caroulix-item">
    <img src="https://picsum.photos/800/450?random=4" alt="img4" />

  </div>
</div>
<!-- {{URL::asset('videos/1-Apprendre Laravel 8 - Introduction.mp4')}} -->
<!-- <video src="{{URL::asset('videos/1-Apprendre Laravel 8 - Introduction.mp4')}}"></video>
video -->


<div id="card_div" class="grix xs1 sm3 md3 lg4 p-2 gutter-xs3">
        <!-- <div class="card shadow-1 rounded-3 reveal">
          <div class="card-header">Card header</div>
          <div class="card-content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
              possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
            </p>
          </div>
          <div class="divider"></div>
          <div class="card-footer">Card footer <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i></div>
        </div> -->
    @if($posts->count() > 0)
        @for($i=0; $i < count($posts); $i++)
        <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title"> POST N° {{ $i+1 }}</span>
                    </div>
                    <div class="card-content">
                        <p>{{ $posts[$i]->contenu }}</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">{{ $posts[$i]->auteurs }}</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    @else

        <div class="light-4 p-2" style="margin: auto; display:flex; width:100wh; height: 100vh;"><p style="margin: auto;">Vous n'avez creer aucun post</p> </div>

    @endif
        <!-- <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title">carte Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple carte. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">This is a link</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
          </div>

        <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title">carte Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple carte. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">This is a link</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
          </div>

        <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title">carte Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple carte. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">This is a link</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title">carte Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple carte. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">This is a link</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
        </div>
  
        <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title">carte Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple carte. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">This is a link</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title">carte Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple carte. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">This is a link</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title">carte Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple carte. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">This is a link</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="card shadow-1 rounded-3 reveal">
            <div class="warCol warS12 warM7">
                <div class="carte">
                    <div class="carte-image">
                        <img src="{{URL::asset('images/sample-1.jpg')}}">
                        <span class="carte-title">carte Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple carte. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="carte-action">
                        <a href="#">This is a link</a>
                        <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                    </div>
                </div>
            </div>
        </div> -->

        
        
</div>



<div class="grix xs1 sm1 md1 lg1">
    <div class="modal shadow-1 white rounded-3" id="modal-example-trash" data-ax="modal" style="max-width: 40vw;" >
        <div class="modal-header"  style="font-size: 1em; text-align: center; font-weight: bold;">
            <span style="color: gray; font-size: 0.9em;">Alerte</span>
            
            <i class="fa fa-times modal-trigger" data-target="modal-example-trash"  style="color: gray; font-size: 0.8em; float: right; top:29px;"></i> <!-- Use font awesome -->
        <p style="padding-top:2em;">Are you sure to delete it ?</p>
        </div>
        <div class="modal-content" style="justify-content: space-between; margin-top: 0.5em;">
            <a class="btn rounded-1 yellow press " href="#" style="width: 49%;">YES</a>
            <button class="btn rounded-1 gray press modal-trigger"  data-target="modal-example-trash" style="float: right; width: 49%">NO</button>
        </div>
    </div>
</div>





@endsection