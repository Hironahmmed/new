<footer class="content-footer footer bg-footer-theme">
    <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            © <script>
            document.write(new Date().getFullYear())
            </script>
            all rights reserved <a href="https://ebutify.com/" target="_blank" class="footer-link fw-semibold">eButify</a>
        </div>
        <div>
            <a href="{{ route('customer.faq') }}" class="footer-link me-4">FAQ</a>
            <a href="{{ route('customer.contact') }}" class="footer-link me-4">Help</a>
        </div>
    </div>
</footer>

  <!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div>
          <h4 class="text-danger" style="margin-bottom: 0px !important;"><i class="text-danger fas fa-thin fa-bullhorn"></i> Access Deny</h4>
          <p style="margin-bottom: 0px !important;">Demo users can't access these features!</p>
        </div>
        <div class="dropdown-divider"></div>

        <div class="paragra">
            <p>We are sorry to say that our demo part does not contain our full features because the demo tool is only used for demo purposes, that's why so many features are not available for guest users. There are so many features inside the real tool which you don't think about either. <br>To access our tool you need to register and choose a plan after that you can use all features.<br><br>Thanks<br>Rezaul Islam<br>CEO & Founder @ eButify</p>
        </div>

        <div class="col-12 mt-4">
            <a href="{{ route('register') }}" class="btn btn-primary me-sm-3 me-1">Register Now</a>
            <a href="{{ route('login') }}" class="btn btn-success me-sm-3 me-1">Login Now</a>
            <button type="reset" class="btn btn-label-danger btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->