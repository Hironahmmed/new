@foreach($amazon as $amazon)
    <div class="col-md-6 col-xl-3  mb-3">
        <div class="card">
            <div class="card-body">

                <div class="post-media player-aliexpress mb-2">
                    <img style="height: 100%; width: 100%; display: block; object-fit: fill; border-radius: 5px;" src="{{ $amazon->ali_image }}">
                </div>

                <div class="card-info">
                    <p class="card-title mb-0 me-2" style="font-weight: 700;">{{ str_limit($amazon->title,'25') }}</p>
                </div>

                <div class="row">
                    <div class="btn-group" role="group" aria-label="Basic example">

                        <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                            <div class="d-flex align-items-center">
                            <div class="card-info">
                                <p class="card-title mb-0">{{ $amazon->price }}</p>
                                <div>
                                    <small>Price</small>
                                </div>
                            </div>
                            </div>
                        </div>


                        <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                            <div class="d-flex align-items-center">
                            <div class="card-info">
                                <p class="card-title mb-0">{{ $amazon->review }}</p>
                                <div>
                                    <small>Review</small>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                            <div class="d-flex align-items-center">
                            <div class="card-info">
                                <p class="card-title mb-0">{{ $amazon->rating }}</p>
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
                        <a href="{{ $amazon->ali_link }}" target="_blank" type="button" class="btn btn-primary">Aliexpress</a>
                        <a href="{{ $amazon->amazon_link }}" target="_blank" type="button" class="btn btn-success">Amazon</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endforeach