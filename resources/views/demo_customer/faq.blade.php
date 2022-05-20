@extends('layouts.backend.customer.app')
@section('title','FAQ')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/css/pages/page-faq.css" />
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
                    <i class="bx bx-credit-card faq-nav-icon me-1"></i>
                    <span class="align-middle">Payment</span>
                </button>
                </li>
                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">
                    <i class='bx bx-rotate-left faq-nav-icon me-1'></i>
                    <span class="align-middle">Cancellation & Return</span>
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
        
        <!-- FAQ's -->
        <div class="col-lg-9 col-md-8 col-12">
            <div class="tab-content py-0">
            <div class="tab-pane fade show active" id="payment" role="tabpanel">
                <div class="d-flex mb-3 gap-3">
                <div>
                    <span class="badge bg-label-primary rounded-2 p-2">
                    <i class="bx bx-credit-card fs-3 lh-1"></i>
                    </span>
                </div>
                <div>
                    <h5 class="mb-0">
                    <span class="align-middle">Payment</span>
                    </h5>
                    <span>Get help with payment</span>
                </div>
                </div>
                <div id="accordionPayment" class="accordion accordion-header-primary">
                <div class="card accordion-item active">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionPayment-1" aria-controls="accordionPayment-1">
                        Q1: When is payment taken for my order?
                    </button>
                    </h2>
        
                    <div id="accordionPayment-1" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        Payment is taken during the checkout process when you pay for
                        your order. The order number that appears on the confirmation
                        screen indicates payment has been successfully processed.
                    </div>
                    </div>
                </div>
        
                <div class="card accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-2" aria-controls="accordionPayment-2">
                        Q2: How do I pay for my order?
                    </button>
                    </h2>
                    <div id="accordionPayment-2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        We accept Visa®, MasterCard®.
                        Our servers encrypt all information submitted to them, so you
                        can be confident that your credit card information will be kept
                        safe and secure.
                    </div>
                    </div>
                </div>
        
                <div class="card accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-3" aria-controls="accordionPayment-3">
                        Q3: What should I do if I'm having trouble placing an order?
                    </button>
                    </h2>
                    <div id="accordionPayment-3" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        For any technical difficulties you are experiencing with our
                        website, please contact us at our
                        <a href="{{ route('customer.contact') }}">support portal</a>, or you can call us toll-free at
                        <strong>+8801722722690</strong>, or email us at
                        <a href="{{ route('customer.contact') }}">support@ebutify.com</a>
                    </div>
                    </div>
                </div>
        
                <div class="card accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-5" aria-controls="accordionPayment-5">
                        Q4: Does my subscription automatically renew?
                    </button>
                    </h2>
                    <div id="accordionPayment-5" class="accordion-collapse collapse">
                    <div class="accordion-body">Yes, This is subscription based tool. Every month it will renew automatically but if you don't use our service then the tool will automatically remove you after 25 days.</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="cancellation" role="tabpanel">
                <div class="d-flex mb-3 gap-3">
                <div>
                    <span class="badge bg-label-primary rounded-2 p-2">
                    <i class="bx bx-revision fs-3 lh-1"></i>
                    </span>
                </div>
                <div>
                    <h5 class="mb-0"><span class="align-middle">Cancellation & Return</span></h5>
                    <span>Get help with cancellation & return</span>
                </div>
                </div>
                <div id="accordionCancellation" class="accordion accordion-header-primary">
                <div class="card accordion-item active">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionCancellation-1" aria-controls="accordionCancellation-1">
                        Q1: Can I cancel my order?
                    </button>
                    </h2>
        
                    <div id="accordionCancellation-1" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <p>
                        Yes, you can cancel your order anytime when you don't need our tool.
                        </p>
                    </div>
                    </div>
                </div>
        
                <div class="card accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionCancellation-2" aria-controls="accordionCancellation-2">
                        Q2: Can I return my monry?
                    </button>
                    </h2>
                    <div id="accordionCancellation-2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Yes, if you don't like our tool then you can request for refund. We'll quickly back to you for return action.
                    </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
        <!-- /FAQ's -->
        </div>
        
        <!-- Contact -->
        <div class="row mt-5">
        <div class="col-12 text-center mb-4">
            <div class="badge bg-label-primary">Question?</div>
            <h4 class="my-2">You still have a question?</h4>
            <p>If you cannot find a question in our FAQ, you can always contact us. We will answer to you shortly!</p>
        </div>
        </div>
        <div class="row text-center justify-content-center gap-sm-0 gap-3">
        <div class="col-sm-6">
            <div class=" py-3 rounded bg-faq-section text-center">
            <span class="badge bg-label-primary rounded-3 p-2 my-3">
                <i class="bx bx-phone bx-sm"></i>
            </span>
            <h4 class="mb-2"><a class="h4" href="tel:+(880)1722722690">+ (880) 1722722690</a></h4>
            <p>We are always happy to help</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class=" py-3 rounded bg-faq-section text-center">
            <span class="badge bg-label-primary rounded-3 p-2 my-3">
                <i class="bx bx-envelope bx-sm"></i>
            </span>
            <h4 class="mb-2"><a class="h4" href="mailto:support@ebutify.com">support@ebutify.com</a></h4>
            <p>Best way to get a quick answer</p>
            </div>
        </div>
        </div>
        <!-- /Contact -->

</div>
           
@endsection

@push('js')
@endpush