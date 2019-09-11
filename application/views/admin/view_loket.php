        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Loket</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Loket</h4>
                                <hr>
                                <button type="button" class="btn btn-sm btn-primary" onclick="add_loket()">Add Loket</button>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Loket</th>
                                                <th>IP Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Loket</th>
                                                <th>IP Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no=1;
                                            foreach ($data_loket as $data) {
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['no_loket']; ?></td>
                                                <td><?= $data['ip_address']; ?></td>
                                                <td><a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="delete_loket(<?= $data['loket_id']; ?>)">Delete</a><a href="javascript:void(0)" class="btn btn-sm btn-warning" onclick="edit_loket(<?= $data['loket_id']; ?>)">Edit</a></td>
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
        <div class="modal" id="modal-add-loket">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Loket</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <form class="form-horizontal" id="form-loket">
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-5">
                      <label>No Loket</label>
                    </div>
                    <div class="col-md-7">
                      <select name="no_loket" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                      </select>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="aksi">
                    <input type="hidden" name="loket_id">
                    <div class="row">
                    <div class="col-md-5">
                      <label>IP Address</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="ip_address" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <button onclick="save_loket()" type="button">Save</button>
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