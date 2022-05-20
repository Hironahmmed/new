@extends('layouts.backend.customer.app')
@section('title','Pricing Page')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/css/pages/page-pricing.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <!-- Pricing Free Trial -->
        <div class="pricing-free-trial">
            <div class="container">
            <div class="position-relative">
                <div class="d-flex justify-content-between flex-column flex-md-row align-items-center px-5 pt-3">
                <!-- image -->
                <div class="text-center">
                    <img src="{{ asset('assets/backend/')}}/img/illustrations/boy-working-light.png" class="img-fluid scaleX-n1" alt="Api Key Image" width="300" data-app-light-img="{{ asset('assets/backend/')}}/img/illustrations/boy-working-light.png">
                </div>
                <div class="text-center text-md-end mt-3">
                    <h3 class="text-primary">Still not convinced? Start with a 7-day FREE trial!</h3>
                    <p class="fs-5">You will get full access to with all the features for 7 days.</p>
                    <a href="{{ route('customer.checkout') }}" class="btn btn-primary my-3 my-md-5">Start 7-day FREE trial</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--/ Pricing Free Trial -->
        <!-- Plans Comparison -->
        <div class="pricing-plans-comparison">
            <div class="container py-5 mt-0 my-md-4">
            <div class="row">
                <div class="col-12 text-center mb-4">
                <div class="badge bg-label-primary badge-sm">Plans</div>
                <h2 class="my-2">Pick a plan that works best for you</h2>
                <p>Stay cool, we have a 14 day money back guarantee!</p>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-12">
                <div class="table-responsive">
                    <table class="table text-center mb-0">
                    <thead>
                        <tr>
                            <th scope="col">
                                <p class="h5 mb-2">Features</p>
                                <span class="text-body">Native front features</span>
                            </th>
                            <th scope="col" class="pt-3">
                                <p class="h5 mb-2 position-relative">Monthly
                                <span class="badge rounded-pill bg-warning badge-center mt-n3 position-absolute"><i class="bx bxs-star"></i></span>
                                </p>
                                <span class="text-body"><s>$25.00/Mo</s> <span class="badge bg-label-danger badge-sm">$15/Mo</span></span>
                            </th>
                            <th scope="col">
                                <p class="h5 mb-2">Yearly</p>
                                <span class="text-body"><s>$25.00/Mo</s> <span class="badge bg-label-danger badge-sm">$7.50/Mo</span></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>7-days free trial</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>No View limit</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Facebook Ads</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>TikTok Ads</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Trending Product</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Unsatpped Product</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Saturated Product</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Unsaturated Product</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>AliExpress Expolre</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Amazon Explore</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Shopify Store Explore</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Product Support</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Email Support</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Videos For Ad</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Competitor's Analytics</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>AliExpress Supplier</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Audience Data</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Product Image</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Product Descriptions</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Gif Image</td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                            <td>
                                <i class="bx bx-check text-success bx-sm"></i>
                            </td>
                        </tr>
                        <tr>
                        <td class="border-0"></td>
                        <td class="border-0">
                            <a href="{{ route('customer.checkout') }}" class="btn text-nowrap btn-primary">Choose Plan</a>
                        </td>
                        <td class="border-0">
                            <a href="{{ route('customer.checkout') }}" class="btn text-nowrap btn-label-primary">Choose Plan</a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--/ Plans Comparison -->
        <!-- FAQS -->
        <div class="pricing-faqs bg-alt-pricing rounded-bottom">
            <div class="container py-5">
            <div class="row mt-0 mt-md-5">
                <div class="col-12 text-center mb-4">
                <div class="badge bg-label-primary badge-sm">FAQ</div>
                <h4 class="my-2">Frequently Asked Questions</h4>
                <p>Let us help answer the most common questions you might have.</p>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-12">
                <div id="faq" class="accordion accordion-header-primary">
                    <div class="card accordion-item">
                        <h6 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                            How do you process payments?
                            </button>
                        </h6>
                        <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                            We accept Visa®, MasterCard®. So you can be confident that your credit card information will be kept
                            safe and secure.
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                    <h6 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                        What payment methods do you accept?
                        </button>
                    </h6>
                    <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                        Stripe accepts all types of credit and debit cards.
                        </div>
                    </div>
                    </div>

                    <div class="card accordion-item">
                    <h6 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
                        Do you have a money-back guarantee?
                        </button>
                    </h6>
                    <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                        Yes! You may request a refund within 14 days of your purchase without any additional explanations.
                        </div>
                    </div>
                    </div>

                    <div class="card accordion-item">
                    <h6 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false" aria-controls="faq-5">
                        I have more questions. Where can I get help?
                        </button>
                    </h6>
                    <div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                        Please <a href="{{ route('customer.contact') }}">contact</a> us if you have any other questions or concerns. We’re here to help!
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--/ FAQS -->
    </div>
  
</div>
@endsection

@push('js')
@endpush