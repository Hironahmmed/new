@extends('layouts.backend.customer.app')
@section('title','eButify Dashboard')
@push('css')

@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-3">
                <div class="card-header border-bottom">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item me-3">
                            <div class="form-check custom-option custom-option-basic active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-within-card-active" aria-controls="navs-pills-within-card-active" aria-selected="true">
                                <label class="form-check-label custom-option-content" for="customRadioTemp1">
                                    <input name="customRadioTemp" class="form-check-input" type="radio" value="prod_K29WGcK9BLdFkw" id="customRadioTemp1" checked />
                                    <span class="custom-option-header">
                                      <span class="h6 mb-0">{{ $data['0']->name }}</span>
                                      <span>$ {{ $data['0']->price }} </span>
                                    </span>
                                    <span class="custom-option-body">
                                      <p class="text-small mb-0"><strong class="badge bg-label-danger">{{ $data['0']->percentage }}% Discount Auto Applied</strong></p>
                                      <small>Cancle any time when you don't need our servic.<br> We do have a 14-day money-back guarantee</small>
                                    </span>
                                </label>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="form-check custom-option custom-option-basic" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-within-card-link" aria-controls="navs-pills-within-card-link" aria-selected="false">
                                <label class="form-check-label custom-option-content" for="customRadioTemp2">
                                  <input name="customRadioTemp" class="form-check-input" type="radio" value="prod_K29WGcK9BLdFkw" id="customRadioTemp2" />
                                  <span class="custom-option-header">
                                    <span class="h6 mb-0">{{ $data['1']->name }}</span>
                                    <span>$ {{ $data['1']->price }}</span>
                                  </span>
                                  <span class="custom-option-body">
                                    <p class="text-small mb-0"><strong class="badge bg-label-danger">{{ $data['1']->percentage }}% Discount Auto Applied</strong></p>
                                    <small>Cancle any time when you don't need our servic.<br> We do have a 14-day money-back guarantee</small>
                                  </span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-within-card-active" role="tabpanel">
                        <div class="row">
                            <!-- Payment left -->
                            <div class="col-xl-8 mb-3 mb-xl-0">
                              <!-- Offer alert -->
                              <div class="alert alert-secondary alert-dismissible" role="alert">
                                <div class="fw-bold">Discount Details</div>
                                <ul class="list-unstyled mb-0">
                                  <li> - {{ $data['0']->percentage }}% Instant Discount for the first time registration.</li>
                                  <li> - Cancle any time when you don't need our servic.</li>
                                  <li> - We do have a 14-day money-back guarantee for Our service. If more than 14 days from the date of Payment have passed, we encourage you to contact the eButify Support Team. We are available 24/7 to give you assistance</li>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                  
                              <!-- Payment Tabs -->
                              <div class="col-xxl-6 col-lg-8">
                                <div class="tab-content" id="paymentTabsContent">
                                  <!-- Credit card -->
                                  <div class="tab-pane fade show active" id="pills-cc" role="tabpanel" aria-labelledby="pills-cc-tab">
                                    <div class="row g-3">
                                      <div class="col-12">
                                        <div class="col-12 col-md-6 mb-2">
                                          <label class="form-label" for="paymentCardName1">Name</label>
                                          <input type="text" id="card-holder-name1" class="form-control" placeholder="Enter Your Name" value="{{ Auth::user()->name }}"/>
                                        </div>
                                        <form id="payment-form">
                                          <label class="form-label mb-1" for="paymentCardName1">Card Details</label>
                                          <input type="hidden" id="subscription-plan1" value="{{ $data['0']->product_code }}">
                                          <input type="hidden" id="coupon1" value="{{ $data['0']->coupon }}">
                                          <div id="card-element1">
                                            <!-- Elements will create form elements here -->
                                          </div>
                                          <div id="error-message">
                                            <!-- Display error message to your customers here -->
                                          </div>
                                        </form>
                                      </div>
                                      {{-- <div class="col-6 col-md-3">
                                        <label class="form-label" for="paymentCardExpiryDate">Exp. Date</label>
                                        <input type="text" id="paymentCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
                                      </div>
                                      <div class="col-6 col-md-3">
                                        <label class="form-label" for="paymentCardCvv">CVV Code</label>
                                        <div class="input-group input-group-merge">
                                          <input type="text" id="paymentCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                                          <span class="input-group-text cursor-pointer" id="paymentCardCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                                        </div>
                                      </div> --}}
                                      <div class="col-12">
                                        <button id="card-button1" data-secret="{{ Auth::user()->createSetupIntent()->client_secret }}" type="button" class="btn btn-primary btn-next me-sm-3 me-1">Submit</button>
                                      </div>
                                    </div>
                                  </div>
                  
                                </div>
                              </div>
                  
                            </div>
                            <!-- Address right -->
                            <div class="col-xl-4">
                              <div class="border rounded p-3">
                  
                                <!-- Price Details -->
                                <h6>Price Details</h6>
                                <dl class="row">
                  
                                  <dt class="col-6 fw-normal">Ragular Price</dt>
                                  <dd class="col-6 text-end">$ {{ $data['0']->price }}/{{ $data['0']->name }}</dd>
                  
                                  <dt class="col-6 fw-normal">Discount Price</dt>
                                  <dd class="col-6 text-end"><span class="badge bg-label-success">Applied</span> ${{ $data['0']->price - $data['0']->discounted_price}}</dd>
                  
                                  <hr>
                  
                                  <dt class="col-6">Now Pay</dt>
                                  <dd class="col-6 fw-semibold text-end mb-0">$ {{ $data['0']->discounted_price }}/{{ $data['0']->name }}</dd>
                  
                                </dl>
                                <!-- Address Details -->
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-within-card-link" role="tabpanel">
                        <div class="row">
                            <!-- Payment left -->
                            <div class="col-xl-8 mb-3 mb-xl-0">
                              <!-- Offer alert -->
                              <div class="alert alert-secondary alert-dismissible" role="alert">
                                <div class="fw-bold">Discount Details</div>
                                <ul class="list-unstyled mb-0">
                                  <li> - {{ $data['1']->percentage }}% Instant Discount for the first time registration.</li>
                                  <li> - Cancle any time when you don't need our servic.</li>
                                  <li> - We do have a 14-day money-back guarantee for Our service. If more than 14 days from the date of Payment have passed, we encourage you to contact the eButify Support Team. We are available 24/7 to give you assistance</li>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                  
                              <!-- Payment Tabs -->
                              <div class="col-xxl-6 col-lg-8">
                                <div class="tab-content" id="paymentTabsContent">
                                  <!-- Credit card -->
                                  <div class="tab-pane fade show active" id="pills-cc" role="tabpanel" aria-labelledby="pills-cc-tab">
                                    <div class="row g-3">
                                      <div class="col-12 col-md-6">
                                        <label class="form-label" for="paymentCardName">Name</label>
                                        <input type="text" id="card-holder-name2" class="form-control" placeholder="John Doe" />
                                      </div>
                                      <form id="payment-form">
                                        <input type="hidden" id="subscription-plan2" value="{{ $data['1']->product_code }}">
                                        <input type="hidden" id="coupon2" value="{{ $data['1']->coupon }}">
                                        <div id="card-element2">
                                          <!-- Elements will create form elements here -->
                                        </div>
                                        <div id="error-message">
                                          <!-- Display error message to your customers here -->
                                        </div>
                                      </form>
                                      <div class="col-12">
                                        <button id="card-button2" data-secret="{{ Auth::user()->createSetupIntent()->client_secret }}" type="button" class="btn btn-primary btn-next me-sm-3 me-1">Submit</button>
                                      </div>
                                    </div>
                                  </div>
                  
                                </div>
                              </div>
                  
                            </div>
                            <!-- Address right -->
                            <div class="col-xl-4">
                              <div class="border rounded p-3">
                  
                                <!-- Price Details -->
                                <h6>Price Details</h6>
                                <dl class="row">
                  
                                  <dt class="col-6 fw-normal">Ragular Price</dt>
                                  <dd class="col-6 text-end">$ {{ $data['1']->price }}/{{ $data['1']->name }}</dd>
                  
                                  <dt class="col-6 fw-normal">Discount Price</dt>
                                  <dd class="col-6 text-end"><span class="badge bg-label-success">Applied</span> ${{ $data['1']->price - $data['1']->discounted_price }}</dd>
                  
                                  <hr>
                  
                                  <dt class="col-6">Now Pay</dt>
                                  <dd class="col-6 fw-semibold text-end mb-0">${{ $data['1']->discounted_price }}/{{ $data['1']->name }}</dd>
                  
                                </dl>
                                <!-- Address Details -->
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Check selected custom option
    window.Helpers.initCustomOptionCheck();
    </script>

</div>

@endsection

@push('js')
<script src="https://js.stripe.com/v3/"></script>
<script>
  window.addEventListener('load', function() {
            const stripe = Stripe('{{env('STRIPE_KEY')}}');
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element1');
            const cardHolderName = document.getElementById('card-holder-name1');
            const cardButton = document.getElementById('card-button1');
            const clientSecret = cardButton.dataset.secret;
            
            const plan = document.getElementById('subscription-plan1').value;

            cardButton.addEventListener('click', async (e) => {
              var coupon = $("#coupon1").val();
                const { setupIntent, error } = await stripe.handleCardSetup(
                    clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
                if (error) {
                    // Display "error.message" to the user...
                    console.log('error');
                } else {
                    // The card has been verified successfully...
                    console.log('handling success', setupIntent.payment_method);
                 	 axios.post('{{ route("customer.subscribe") }}',{
                        payment_method: setupIntent.payment_method,
                        plan : plan,
                        coupon : coupon
                    }).then((data)=>{
                        location.replace(data.data.success_url)
                    });
                }
            });
        })

</script>
<script>
  window.addEventListener('load', function() {
            const stripe = Stripe('{{env('STRIPE_KEY')}}');
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element2');
            const cardHolderName = document.getElementById('card-holder-name2');
            const cardButton = document.getElementById('card-button2');
            const clientSecret = cardButton.dataset.secret;
            
            const plan = document.getElementById('subscription-plan2').value;

            cardButton.addEventListener('click', async (e) => {
              var coupon = $("#coupon2").val();
                const { setupIntent, error } = await stripe.handleCardSetup(
                    clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
                if (error) {
                    // Display "error.message" to the user...
                    console.log('error');
                } else {
                    // The card has been verified successfully...
                    console.log('handling success', setupIntent.payment_method);
                 	 axios.post('{{ route("customer.subscribe") }}',{
                        payment_method: setupIntent.payment_method,
                        plan : plan,
                        coupon : coupon
                    }).then((data)=>{
                        location.replace(data.data.success_url)
                    });
                }
            });
        })

</script>
@endpush