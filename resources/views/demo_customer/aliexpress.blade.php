@extends('layouts.backend.customer.demoapp')
@section('title','Aliexpress Explore')
@push('css')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endpush
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row" id="post-data">
        @include('customer.view.aliView')
    </div>

</div>
<div class="ajax-load text-center" style="display: none;">
    <p><img style="height: 30px;" src="{{ asset('assets/backend/')}}/img/site/loading-ad.gif" alt="Loading..."> Loading More Data</p>
</div>

@endsection

@push('js')
<script>
    function loadMoreData(page){
        $.ajax({
            url:'?page=' + page,
            type:'get',
            beforeSend: function(){
                $(".ajax-load").show();
            }
        })
        .done(function(aliView){
            if(aliView.html == " "){
                $('.ajax-load').html("No More Data");
                return;
            }
            $('.ajax-load').hide();
            $("#post-data").append(aliView.html);

        })
        .fail(function(jqXHR,ajaxOptions,thrownError){
            alert("Server not responding...");
        })
    }
    var page = 1;
    $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height() >= $(document).height()){
            page++;
            loadMoreData(page);
        }
    })
</script>
@endpush