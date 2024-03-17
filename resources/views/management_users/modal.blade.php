<!-- Modal Form Users -->
<div class="modal fade" id="form-users" tabindex="-1" aria-labelledby="form-user-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form-user-modal">Form Users</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_user" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
                <label for="fname" class="form-label">Name</label>
                <input type="text" class="form-control" id="fname" name="fname">
            </div>
            <div class="mb-3">
                <label for="fusername" class="form-label">Username</label>
                <input type="text" class="form-control" id="fusername" name="fusername">
            </div>
            <div class="mb-3">
                <label for="fno_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="fno_hp" name="fno_hp">
            </div>
            <div class="mb-3">
                <label for="faddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="faddress" name="faddress">
            </div>
            <div class="mb-3">
                <label for="femail" class="form-label">Email</label>
                <input type="email" class="form-control" id="femail" name="femail">
            </div>
            <div class="mb-3">
                <label for="fpassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="fpassword" name="fpassword">
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" class="form-control" id="picture" name="picture">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>