@foreach($shopify as $shopify)
    <div class="row mb-3">
        <div class="row card card-body p-3 mx-3">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row cse-content-header">
                
                <div class="col-lg-3 col-md-2 col-sm-6">
                    <a target="_blank" href="{{ $shopify->shopify_link }}" style="color: #17a2b8;"><i class="fas fa-shopping-bag" style="color: #DC143C;"></i> {{ $shopify->shopify_link }}</a>
                </div>

                <div class="col-lg-3 col-md-2 cse-hide">
                    <span><strong>Traffic:</strong> {{ $shopify->shopify_traffic }}/month</span>
                </div>
                
                <div class="col-lg-3 col-md-2 col-sm-6 show-right">
                    <a target="_blank" href="{{ $shopify->shopify_all_link }}" class="cse-see-link-1" style="color: #17a2b8;">See all products <i class="fas fa-chevron-right"></i></a>
                </div>
                </div>

            </div>
            <hr>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body">

                                <div class="post-media player-shopify mb-2">
                                    <img style="height: 100%; width: 100%; display: block; object-fit: fill; border-radius: 5px;" src="{{ $shopify->image_one }}">
                                </div>
                                <div class="shopify-title my-2">
                                    <p class="card-title mb-0 me-2" style="font-weight: 700;">{{ str_limit($shopify->title_one,'25') }}</p>
                                </div>
                                <div class="row mb-1">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a target="_blank" href="{{ $shopify->shopify_one }}" type="button" class="btn btn-success"><i class="fab fa-shopify" style="margin-right: .8rem;"></i>Shopify</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ $shopify->ali_one }}" target="_blank" type="button" class="btn btn-danger"><i class="fas fa-shopping-bag" style="margin-right: .8rem;"></i>Aliexpress</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body">

                                <div class="post-media player-shopify mb-2">
                                    <img style="height: 100%; width: 100%; display: block; object-fit: fill; border-radius: 5px;" src="{{ $shopify->image_two }}">
                                </div>
                                <div class="shopify-title my-2">
                                    <p class="card-title mb-0 me-2" style="font-weight: 700;">{{ str_limit($shopify->title_two,'25') }}</p>
                                </div>
                                <div class="row mb-1">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ $shopify->shopify_two }}" target="_blank" type="button" class="btn btn-success"><i class="fab fa-shopify" style="margin-right: .8rem;"></i>Shopify</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ $shopify->ali_two }}" target="_blank" type="button" class="btn btn-danger"><i class="fas fa-shopping-bag" style="margin-right: .8rem;"></i>Aliexpress</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body">

                                <div class="post-media player-shopify mb-2">
                                    <img style="height: 100%; width: 100%; display: block; object-fit: fill; border-radius: 5px;" src="{{ $shopify->image_three }}">
                                </div>
                                <div class="shopify-title my-2">
                                    <p class="card-title mb-0 me-2" style="font-weight: 700;">{{ str_limit($shopify->title_three,'25') }}</p>
                                </div>
                                <div class="row mb-1">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ $shopify->shopify_three }}" target="_blank" type="button" class="btn btn-success"><i class="fab fa-shopify" style="margin-right: .8rem;"></i>Shopify</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ $shopify->ali_three }}" target="_blank" type="button" class="btn btn-danger"><i class="fas fa-shopping-bag" style="margin-right: .8rem;"></i>Aliexpress</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body">

                                <div class="post-media player-shopify mb-2">
                                    <img style="height: 100%; width: 100%; display: block; object-fit: fill; border-radius: 5px;" src="{{ $shopify->image_four }}">
                                </div>
                                <div class="shopify-title my-2">
                                    <p class="card-title mb-0 me-2" style="font-weight: 700;">{{ str_limit($shopify->title_four,'25') }}</p>
                                </div>
                                <div class="row mb-1">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ $shopify->shopify_four }}" target="_blank" type="button" class="btn btn-success"><i class="fab fa-shopify" style="margin-right: .8rem;"></i>Shopify</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ $shopify->ali_four }}" target="_blank" type="button" class="btn btn-danger"><i class="fas fa-shopping-bag" style="margin-right: .8rem;"></i>Aliexpress</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        
        </div>
    </div>

@endforeach