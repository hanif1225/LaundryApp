<!-- Modal Add Users -->
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
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                <span class="name_error error-data"></span>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <span class="username_error error-data"></span>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp">
                <span class="no_hp_error error-data"></span>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
                <span class="address_error error-data"></span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <span class="email_error error-data"></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <span class="password_error error-data"></span>
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" class="form-control" id="picture" name="picture" required>
                <span class="picture_error error-data"></span>
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

<!-- Modal Detail User -->
<div class="modal fade" id="form-detail-users" tabindex="-1" aria-labelledby="form-detail-user" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header custom-color">
        <h5 class="modal-title" id="form-detail-user">Form Detail Users</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_user" enctype="multipart/form-data">
          @csrf
            <div class="modal-body">
              <div class="mb-3">
                  <img src="" id="detail_picture" class="img-preview img-fluid mb-3 col-sm-5 mx-auto d-block">
              </div>
              <div class="row">
                <div class="p-4">
                  <div class="card">
                    <div class="card-header text-center">
                      <b>Name</b>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center"><span id=detail_name></span></li>
                    </ul>
                    <div class="card-header text-center">
                      <b>Username</b>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center"><span id=detail_username></span></li>
                    </ul>
                    <div class="card-header text-center">
                      <b>Address</b>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center"><span id=detail_address></span></li>
                    </ul>
                    <div class="card-header text-center">
                      <b>No HP</b>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center"><span id=detail_no_hp></span></li>
                    </ul>
                    <div class="card-header text-center">
                      <b>Email</b>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center"><span id=detail_email></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn" style="background-color: #0e2238; color:white" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>