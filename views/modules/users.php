<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Manage Users
    </h1>

    <ol class="breadcrumb">
      <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Manage Users</li>
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box">

      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
          Add User
        </button>
      </div>

      <div class="box-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Username</th>
              <th>Picture</th>
              <th>Role</th>
              <th>Status</th>
              <th>Last Login</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Admin User</td>
              <td>Admin</td>
              <td><img src="views/img/users/default/anonymous.png" width="40px" class="img-thumbnail"></td>
              <td>Administrator</td>
              <td><button class="btn btn-success">Activated</button></td>
              <td>2020-05-05 21:15:50</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->

    </div>

  </section>

</div>

<!-- ============================================
ADD USER MODAL
============================================= -->

<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">
      <form action="#" method="post" role="form" enctype="multipart/form-data">

        <div class="modal-header" style="background-color: #3c8dbc;color: #fff;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Add User</h4>
        </div>

        <div class="modal-body">

          <div class="box-body">
            <!-- Name -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="newName" placeholder="Enter Name" required>
              </div>
            </div>

            <!-- Name -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" name="newUser" placeholder="Enter User" required>
              </div>
            </div>

            <!-- Password -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control input-lg" name="newPassword" placeholder="Enter Password" required>
              </div>
            </div>

            <!-- Select Profile -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select name="newProfile" class="form-control input-lg">
                  <option value="">Select Profile</option>
                  <option value="Administrator">Administrator</option>
                  <option value="Special">Special</option>
                  <option value="Seller">Seller</option>
                </select>
              </div>
            </div>

            <!-- Picture -->
            <div class="form-group">
              <div class="panel">Picture</div>
              <input type="file" name="newPicture" id="newPicture">
              <p class="help-block">Maximum of 200mb</p>
              <img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="100px">
            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>

      </form>

    </div>

  </div>
</div>
