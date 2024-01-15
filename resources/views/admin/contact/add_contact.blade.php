<div class="modal fade add-contact " id="add-contact" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content radius-xl">
            <div class="modal-header">
                <h6 class="modal-title fw-500" id="staticBackdropLabel">Contact
                    Information
                </h6>
                <button type="button" class="close shadow-none border-0 bg-transparent" data-bs-dismiss="modal"
                    aria-label="Close">
                    <img src="img/svg/x.svg" alt="x" class="svg">
                </button>
            </div>
            <div class="modal-body">
                <div class="add-new-contact">
                    <form action="{{ url('admin/contacts') }}" method="POST">
                        @csrf
                        <div class="form-group mb-20">
                            <label>Name:</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="name">
                        </div>
                        <div class="form-group mb-20">
                            <label>Email Address:</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group mb-20">
                            <label>Phone Number:</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="form-group mb-20">
                            <label>Address:</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Address" name="address">
                        </div>
                        <div class="form-group mb-20">
                            <label>Occupation:</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Occupation" name="occupation">
                        </div>
                        <div class="button-group d-flex pt-20">
                            <button class="btn btn-primary btn-default btn-squared " type="submit">add
                                new
                                Contact
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
