<div class="modal" id="modalID" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <form id="deleteForm">
            <div class="modal-body d-flex py-4">
              <p class="m-auto">Are you sure you want to delete?</p>
              <input type="hidden" name="deleteName" id="modalInput">
              <input type="hidden" name="deleteUser" id="deleteUser">
            </div>
            <div class="modal-footer py-2 d-flex justify-content-center">
              <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">No</button>
              <input type="submit" name="delete" value="Yes" class="btn btn-sm btn-danger">
            </div>
          </form>
        </div>
      </div>
    </div>