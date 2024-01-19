<div class="modal fade noteModal" id="noteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-0">
                <button type="button" class="close bg-transparent" data-bs-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form action="{{ url('admin/notes') }}" method="POST">
                    @csrf
                    <div class="form-group mb-25">
                        <label class="mb-2" for="text">Title</label>
                        <input type="text" class="form-control" placeholder="Note Title"
                            id="text" name="title">
                    </div>
                    <div class="form-group mb-25">
                        <label class="mb-2" for="textarea">Description</label>
                        <textarea id="textarea" class="form-control" placeholder="Note Description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mb-2" for="select-search">Note Label</label>
                        <select class="form-control" id="select-search" name="label">
                            <option>Social</option>
                            <option>Work</option>
                            <option>Personal</option>
                            <option>Important</option>
                        </select>
                    </div>
                    <div
                        class="modal-footer note-submit-btn d-flex justify-content-end flex-wrap border-top-0 m-n1 px-30 pb-25">
                        <button type="button" class="btn btn-sm btn-danger"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
