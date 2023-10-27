<button type="button" class="btn btn-success"
        data-bs-toggle="modal" data-bs-target="#AddModal">
    Add Product
</button>

<!-- Modal -->
<div class="modal fade" id="AddModal" tabindex="-1"
     aria-labelledby="AddModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5"
                    id="modal-title">Create Product</h1>
                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>

                <div class="modal-body">
                    <div class="errorMessages">

                    </div>
                    <div class="mb-3">
                        <label for="name">Name Product</label>
                        <input type="text" id="name" placeholder="Insert Name Product"
                               class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price Product</label>
                        <input type="number" id="price" placeholder="Insert Price Product"
                               class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button"
                            class="btn btn-primary add_product">Save Product</button>
                </div>
        </div>
    </div>
</div>