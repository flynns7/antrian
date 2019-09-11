        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data User</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data User</h4>
                                <hr>
                                <button type="button" class="btn btn-sm btn-primary" onclick="add_user()">Add User</button>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Nama User</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Nama User</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no=1;
                                            foreach ($data_user as $data) {
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['username']; ?></td>
                                                <td><?= $data['nama']; ?></td>
                                                <td><?= $data['status']; ?></td>
                                                <td><a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="delete_user(<?= $data['user_id']; ?>)">Delete</a><a href="javascript:void(0)" class="btn btn-sm btn-warning" onclick="edit_user(<?= $data['user_id']; ?>)">Edit</a></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->

        <!-- The Modal -->
        <div class="modal" id="modal-add-user">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <form class="form-horizontal" id="form-user">
                  <input type="hidden" name="aksi">
                  <input type="hidden" name="user_id">
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-5">
                      <label>Username</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="username" class="form-control" readonly>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-5">
                      <label>Nama</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="nama" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-5">
                      <label>Password</label>
                    </div>
                    <div class="col-md-7">
                      <input type="password" name="password" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <button onclick="save_user()" type="button">Save</button>
                  </div>
              </form>
                    
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>        