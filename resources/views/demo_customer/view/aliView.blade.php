@foreach($aliexpress as $aliexpress)
        <div class="col-md-6 col-xl-3  mb-3">
            <div class="card">
                <div class="card-body">

                    <div class="post-media player-aliexpress mb-2">
                        <img style="height: 100%; width: 100%; display: block; object-fit: fill; border-radius: 5px;" src="{{ $aliexpress->ali_image }}">
                    </div>

                    <div class="card-info">
                        <p class="card-title mb-0 me-2" style="font-weight: 700;">{{ str_limit($aliexpress->title,'20') }}</p>
                    </div>

                    <div class="row">
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0">{{ $aliexpress->price }}</p>
                                    <div>
                                        <small>Price</small>
                                    </div>
                                </div>
                                </div>
                            </div>


                            <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0">{{ $aliexpress->order }}</p>
                                    <div>
                                        <small>Order</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0">{{ $aliexpress->rating }}</p>
                                    <div>
                                        <small>Rating</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ $aliexpress->ali_link }}" target="_blank" type="button" class="btn btn-primary"><i class="fas fa-info-circle" style="margin-right: .8rem;"></i>View Aliexpress</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    @endforeach