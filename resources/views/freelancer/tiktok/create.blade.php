@extends('layouts.backend.freelancer.app')
@section('title','Create TikTok Ads')
@section('content')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/tagify/tagify.css" />
    
    <!-- include summernote css/js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/css/emojionearea.min.css">
@endpush
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container-xxl">
    <a href="{{ route('freelancer.tiktok.index') }}" class="btn btn-danger">Back</a>
    </div>
    <div class="row">
    
    <!-- Form Repeater -->
    <div class="col-12">
        <div class="card">
        <h5 class="card-header">Product Upload</h5>
        <div class="card-body">
            <form class="form-repeater" action="{{ route('freelancer.tiktok.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div data-repeater-list="group-a">
                    <div data-repeater-item>
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                        <label class="form-label" for="title">Product Name</label>
                        <input type="text" id="title" name="title" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                        <label class="form-label" for="sell_on">Sell</label>
                        <input type="text" id="sell_on" name="sell_on" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                        <label class="form-label" for="cost">Cost</label>
                        <input type="text" id="cost" name="cost" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                        <label class="form-label" for="profit">Profit</label>
                        <input type="text" id="profit" name="profit" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                        <label class="form-label" for="order">Order</label>
                        <input type="text" id="order" name="order" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                        <label class="form-label" for="revinue">Revinue</label>
                        <input type="text" id="revinue" name="revinue" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                        <label class="form-label" for="alaxa">Alaxa</label>
                        <input type="text" id="alaxa" name="alaxa" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <label for="opportunity" class="form-label">Oppertunity Level</label>
                            <select id="opportunity" name="opportunity[]" class="select2 form-select" multiple>
                                <option value="Trending">Trending</option>
                                <option value="Untapped">Untapped</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <label class="form-label" for="aliexpress_link">Aliexpress Link</label>
                        <input type="text" id="aliexpress_link" name="aliexpress_link" class="form-control"/>
                        </div>
                        
                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                        <label class="form-label" for="tiktok_link">Tiktok Link</label>
                        <input type="text" id="tiktok_link" name="tiktok_link" class="form-control"/>
                        </div>

                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                        <label class="form-label" for="form-repeater-1-3">Shopify Website</label>
                        <input type="text" id="shopify_website" name="shopify_website" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                        <label class="form-label" for="youtube_link">Youtube Link</label>
                        <input type="text" id="youtube_link" name="youtube_link" class="form-control"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <label class="form-label" for="shopify_link">Shopify Product Link</label>
                        <input type="text" id="shopify_link" name="shopify_link" class="form-control"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                            <p style="text-align: center;" class="form-label">Aliexpress Image Link</p>
                            <div class="mb-3">
                            <input type="text" id="image_one" name="image_one" class="form-control" placeholder="Image link one"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="image_two" name="image_two" class="form-control" placeholder="Image link two"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="image_three" name="image_three" class="form-control" placeholder="Image link three"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="image_four" name="image_four" class="form-control" placeholder="Image link four"/>
                            </div>
                            <div class="mb-0">
                            <input type="text" id="image_five" name="image_five" class="form-control" placeholder="Image link five"/>
                            </div>
                        </div>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                            <p style="text-align: center;" class="form-label">Competitor link</p>
                            <div class="mb-3">
                            <input type="text" id="competitor1" name="competitor1" class="form-control" placeholder="Competitor link one"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="competitor2" name="competitor2" class="form-control" placeholder="Competitor link two"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="competitor3" name="competitor3" class="form-control" placeholder="Competitor link three"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="competitor4" name="competitor4" class="form-control" placeholder="Competitor link four"/>
                            </div>
                            <div class="mb-0">
                            <input type="text" id="competitor5" name="competitor5" class="form-control" placeholder="Competitor link five"/>
                            </div>
                        </div>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                            <p style="text-align: center;" class="form-label">Upload Gif Image</p>
                            <div class="mb-0">
                            <input type="file" id="gif1" name="gif1" class="filepond">
                            </div>
                            <div class="mb-0">
                            <input type="file" id="gif2" name="gif2" class="filepond">
                            </div>
                            <div class="mb-0">
                            <input type="file" id="gif3" name="gif3" class="filepond">
                            </div>
                        </div>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                            <p style="text-align: center;" class="form-label">Other Source</p>
                            <div class="mb-3">
                            <input type="text" id="amazon" name="amazon" class="form-control" placeholder="Amazon link"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="ebay" name="ebay" class="form-control" placeholder="eBay link"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="form-repeater-1-1" class="form-control" id="page_name" name="page_name" placeholder="FB Page Name"/>
                            </div>
                            <div class="mb-3">
                                <select id="action" name="action" class="select2 form-select from-control">
                                    <option>Select</option>
                                    <option value="Buy Now">Buy Now</option>
                                    <option value="Shop Now">Shop Now</option>
                                    <option value="Learn More">Learn More</option>
                                    <option value="Get offer">Get offer</option>
                                    <option value="Book Now">Book Now</option>
                                    <option value="Contact Us">Contact Us</option>
                                    <option value="Order Now">Order Now</option>
                                    <option value="Open Link">Open Link</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <select id="saturation" name="saturation" class="select2 form-select from-control">
                                    <option>Select</option>
                                    <option value="Saturated">Saturated</option>
                                    <option value="Unsaturated">Unsaturated</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <!-- Category -->
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <label for="collection" class="form-label">Category</label>
                        <select id="collection" name="collection[]" class="select2 form-select" multiple>
                            @foreach($collections as $collection)
                            <option value="{{ $collection->name }}">{{ $collection->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                            <label for="age" class="form-label">Tmpression</label>
                            <input type="text" class="form-control" id="impression" name="impression" placeholder="Impression"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                            <label for="days" class="form-label">Days</label>
                            <input type="text" class="form-control" id="days" name="days" placeholder="Days"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-1 col-12 mb-0">
                            <label for="ad_cost" class="form-label">Ad Cost</label>
                            <input type="text" class="form-control" id="ad_cost" name="ad_cost" placeholder="Cost"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                            <label for="conversation" class="form-label">Conversation</label>
                            <input type="text" class="form-control" id="conversation" name="conversation" placeholder="Conversation"/>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <label for="country" class="form-label">Country</label>
                        <select id="country" name="country[]" class="select2 form-select" multiple>
                            @foreach($countries as $country)
                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                            <p style="text-align: center;" class="form-label">Ads Information</p>
                            <div class="mb-3">
                            <input type="text" id="ad_create_date" name="ad_create_date" class="form-control" placeholder="Post Creation Date"/>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="ad_seen_date" name="ad_seen_date" class="form-control" placeholder="Last Seen Date"/>
                            </div>
                            <div class="mb-3">
                            <select id="platform" name="platform[]" class="select2 form-select" multiple>
                                @foreach($platforms as $platform)
                                <option value="{{ $platform->name }}">{{ $platform->name }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="mb-3">
                                <select id="formate" name="formate" class="select2 form-select">
                                    <option>Select</option>
                                    <option value="Video">Video</option>
                                    <option value="Image">Image</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <select id="privacy" name="privacy" class="select2 form-select">
                                    <option>Select</option>
                                    <option value="Public">Public</option>
                                    <option value="Private">Private</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                        <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                            <div class="mb-0">
                            <label for="TagifyBasic" class="form-label">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="filepond">
                            </div>
                            <div class="mb-0">
                            <label for="TagifyBasic" class="form-label">Video</label>
                            <input type="file" id="video" name="video" class="filepond">
                            </div>
                            <div class="mb-0">
                            <label for="TagifyBasic" class="form-label">Page Logo</label>
                            <input type="file" id="page_logo" name="page_logo" class="filepond">
                            </div>
                        </div>
                        </div>
                        <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                        <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                            <label for="content" class="form-label">Facebook Ad Content</label>
                            <textarea class="form-control" name="ad_content" id="ad_content"></textarea>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6 col-xl-12 col-12 mb-0">
                        <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                            <label for="TagifyBasic" class="form-label">Product Description</label>
                            <textarea class="form-control" name="body" id="summernote"></textarea>
                            <script>
                                $('#summernote').summernote({
                                placeholder: 'Description',
                                tabsize: 2,
                                height: 120,
                                toolbar: [
                                    ['style', ['style']],
                                    ['font', ['bold', 'underline', 'clear']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']]
                                ]
                                });
                            </script>
                        </div>
                        
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit For Review</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    <!-- /Form Repeater -->
    </div>

</div>
                
@endsection
@push('js')
<script src="{{ asset('assets/backend/')}}/js/forms-selects.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/tagify/tagify.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/emojionearea.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

  <!-- Introduce FilePond Of js -->
  <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
  <script>

    const inputElements = document.querySelectorAll('input.filepond');
    // loop over input elements
    Array.from(inputElements).forEach(inputElement => {
    
    // Create a FilePond instance
    const pond = FilePond.create(inputElement);
      FilePond.setOptions({
        server: {
          url: '/upload',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        }
      });
      
    })

    $(document).ready(function() {
    $("#ad_content").emojioneArea();
  });

</script>
@endpush