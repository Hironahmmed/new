@extends('layouts.backend.customer.app')
@section('title','eButify Dashboard')
@push('css')
@endpush
@section('content')

<div class="container-xxl flex-grow-1 container-p-y" id="post-data">
    @include('customer.view.shopifyView')
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
        .done(function(shopifyView){
            if(shopifyView.html == " "){
                $('.ajax-load').html("No More Data");
                return;
            }
            $('.ajax-load').hide();
            $("#post-data").append(shopifyView.html);

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