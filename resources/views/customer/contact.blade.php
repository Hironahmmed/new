@extends('layouts.backend.customer.app')
@section('title','Contact Support')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/css/pages/page-faq.css" />
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="faq-header d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center zindex-1"> Hello, how can we help? </h3>
        <p class="text-center text-body zindex-1 mb-0 px-3">or choose a category to quickly find the help you need</p>
    </div>
        
    <div class="row mt-4">
        <!-- Navigation -->
        <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
            <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
            <ul class="nav nav-align-left nav-pills flex-column">
                <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#payment">
                    <i class="bx bx-paper-plane faq-nav-icon me-1"></i>
                    <span class="align-middle">Contact Form</span>
                </button>
                </li>
                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
                    <i class='bx bx-phone faq-nav-icon me-1'></i>
                    <span class="align-middle">Contact Phone</span>
                </button>
                </li>
                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">
                    <i class='bx bx-envelope faq-nav-icon me-1'></i>
                    <span class="align-middle">Contact E-mail</span>
                </button>
                </li>
            </ul>
            <div class="d-none d-md-block">
                <div class="mt-5">
                <img src="{{ asset('assets/backend/')}}/img/illustrations/boy-working-light.png" class="img-fluid scaleX-n1" alt="FAQ Image">
                </div>
            </div>
            </div>
        </div>
        <!-- /Navigation -->
        
        <!-- Contact Form -->
        <div class="col-lg-9 col-md-8 col-12">
            <div class="tab-content py-0">
                <div class="tab-pane fade show active" id="payment" role="tabpanel">
                    <div id="accordionPayment" class="accordion accordion-header-primary">
                        <div class="card">
                            <div class="card-body">
                                @if(Session::has('message_sent'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message_sent')}}
                                </div>
                                @endif
                                <form action="{{route('customer.email')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="name">Full Name</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" value="{{ Auth::user()->name }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                                        <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="email" name="email" class="form-control" placeholder="your.name@example.com" value="{{ Auth::user()->email }}" disabled>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="subject">Subject</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Feature Request">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="message">Message</label>
                                        <div class="col-sm-10">
                                        <textarea id="message" name="message" class="form-control" placeholder="Hi, can your team update new section for tiktok?" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="delivery" role="tabpanel">
                    <div id="accordionDelivery" class="accordion accordion-header-primary">
                        <div class="col-12 text-center mb-4">
                            <div class="badge bg-label-primary">Question?</div>
                            <h4 class="my-2">You still have a question?</h4>
                            <p>If you cannot find a question in our FAQ, you can always contact us. We will answer to you shortly!</p>
                        </div>
                        <div class=" py-3 rounded bg-faq-section text-center">
                            <span class="badge bg-label-primary rounded-3 p-2 my-3">
                                <i class="bx bx-phone bx-sm"></i>
                            </span>
                            <h4 class="mb-2"><a class="h4" href="tel:+(880)1722722690">+ (880) 1722722690</a></h4>
                            <p>We are always happy to help</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cancellation" role="tabpanel">
                    <div id="accordionCancellation" class="accordion accordion-header-primary">
                    <div class="col-12 text-center mb-4">
                            <div class="badge bg-label-primary">Question?</div>
                            <h4 class="my-2">You still have a question?</h4>
                            <p>If you cannot find a question in our FAQ, you can always contact us. We will answer to you shortly!</p>
                        </div>
                    </div>
                    <div class=" py-3 rounded bg-faq-section text-center">
                    <span class="badge bg-label-primary rounded-3 p-2 my-3">
                        <i class="bx bx-envelope bx-sm"></i>
                    </span>
                    <h4 class="mb-2"><a class="h4" href="mailto:support@ebutify.com">support@ebutify.com</a></h4>
                    <p>Best way to get a quick answer</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Contact Form -->
    </div>
        
</div>
           
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}
  <script type="text/javascript">
      @if($errors->any())
          @foreach($errors->all() as $error)
          toastr.error('{{ $error }}','Error',{
              closeButton:true,
              progressBar:true,
          })
          @endforeach

      @endif
  </script>
@endpush