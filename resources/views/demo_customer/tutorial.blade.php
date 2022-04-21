@extends('layouts.backend.customer.app')
@section('title','eButify Tutorial')
@push('css')
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="col-md-6 col-xl-12 mb-3">
        <div class="card">
            <h5 class="card-header">Basic Product Research Tutorials</h5>
            
            <div class="card-body">
                <div class="tutorial-information">
                    <p>
                        Hey User,<br>
                        Do you know how to research potential winning products? No worries, just watch all videos and learn 8 Fugere winning product research strategies.
                    </p>
                </div>
                <div class="container-div">

                    <div class="main-video-container">
                    <video src="{{ asset('assets/backend/')}}/video/vid-1.mp4" loop controls class="main-video"></video>
                    <h3 class="main-vid-title">house flood animation</h3>
                    </div>
                
                    <div class="video-list-container">
                
                        <div class="list active">
                        <video src="{{ asset('assets/backend/')}}/video/vid-1.mp4" class="list-video"></video>
                        <h3 class="list-title">house flood animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-2.mp4" class="list-video"></video>
                        <h3 class="list-title">zoombie walking animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-3.mp4" class="list-video"></video>
                        <h3 class="list-title">emoji falling animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-4.mp4" class="list-video"></video>
                        <h3 class="list-title">3D town animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-5.mp4" class="list-video"></video>
                        <h3 class="list-title">man chasing carrot animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-6.mp4" class="list-video"></video>
                        <h3 class="list-title">door hinge animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-7.mp4" class="list-video"></video>
                        <h3 class="list-title">poeple walking in town animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-8.mp4" class="list-video"></video>
                        <h3 class="list-title">knight chasing virus animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-9.mp4" class="list-video"></video>
                        <h3 class="list-title">3D helicopter animation</h3>
                        </div>
                
                    </div>
                
                </div>
            </div>
            
        </div>
        
    </div>

    <div class="col-md-6 col-xl-12">
        <div class="card">
            <h5 class="card-header">Basic Store Customization Tutorials</h5>
            
            <div class="card-body">
                <div class="tutorial-information">
                    <p>
                        Hey User,<br>
                        Are you a new member? Do you know how to create and customize a Shopify store? If your answer is YES then this is your lucky day. We offer free training where you can learn everything about a store. Don't worry just watch all videos and create a store by yourself.
                    </p>
                </div>
                <div class="container-div">

                    <div class="main-video-container">
                    <video src="{{ asset('assets/backend/')}}/video/vid-1.mp4" loop controls class="main-videos"></video>
                    <h3 class="main-vid-title">house flood animation</h3>
                    </div>
                
                    <div class="video-list-containers">
                
                        <div class="list active">
                        <video src="{{ asset('assets/backend/')}}/video/vid-1.mp4" class="list-video"></video>
                        <h3 class="list-title">house flood animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-2.mp4" class="list-video"></video>
                        <h3 class="list-title">zoombie walking animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-3.mp4" class="list-video"></video>
                        <h3 class="list-title">emoji falling animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-4.mp4" class="list-video"></video>
                        <h3 class="list-title">3D town animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-5.mp4" class="list-video"></video>
                        <h3 class="list-title">man chasing carrot animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-6.mp4" class="list-video"></video>
                        <h3 class="list-title">door hinge animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-7.mp4" class="list-video"></video>
                        <h3 class="list-title">poeple walking in town animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-8.mp4" class="list-video"></video>
                        <h3 class="list-title">knight chasing virus animation</h3>
                        </div>
                
                        <div class="list">
                        <video src="{{ asset('assets/backend/')}}/video/vid-9.mp4" class="list-video"></video>
                        <h3 class="list-title">3D helicopter animation</h3>
                        </div>
                
                    </div>
                
                </div>
            </div>
            
        </div>
        
    </div>

</div>

@endsection
@push('js')
<script src="{{ asset('assets/backend/')}}/js/script-tut.js"></script>
@endpush