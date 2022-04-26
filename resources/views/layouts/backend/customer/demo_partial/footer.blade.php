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
        <div class="mb-4">
          <h3>Add New Card</h3>
          <p>Add new card to complete payment</p>
        </div>


        <div class="paragra">
            <p>this is model body</p>
        </div>

        <div class="col-12 mt-4">
            <a href="" class="btn btn-primary me-sm-3 me-1">Submit</a>
            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->