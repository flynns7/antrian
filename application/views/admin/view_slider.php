        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Slider</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Slider</h4>
                                <hr>
                                <button type="button" class="btn btn-sm btn-primary" onclick="add_slider()">Add Slider</button>
                                <!-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                <th>Status</th>
                                                <th>Sort Order</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                <th>Status</th>
                                                <th>Sort Order</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data_slider as $data) {
                                        ?>    
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['judul']; ?></td>
                                            <td><a href="javascript:void(0)" onclick="lihat_gambar('<?= $data['gambar']; ?>')">Lihat</a></td>
                                            <td><?= $data['status']; ?></td>
                                            <td><?= $data['sort_order']; ?></td>
                                            <td><a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="delete_slider('<?= $data["slider_id"]; ?>')">Delete</a><a href="javascript:void(0)" class="btn btn-sm btn-warning">Edit</a></td>
                                        </tr>
                                        <?php } ?>
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
        <div class="modal" id="modal-add-slider">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Slider</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <form class="form-horizontal" id="form-slider">
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-5">
                      <label>Judul</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="judul" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-5">
                      <label>Gambar[1MB][2000x2000]</label>
                    </div>
                    <div class="col-md-7">
                      <input type="file" name="gambar" class="form-control" onchange="upload()">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-5">
                      <label>Status</label>
                    </div>
                    <div class="col-md-7">
                        <select name="status" class="form-control">
                            <option value="Enable">Enable</option>
                            <option value="Disable">Disable</option>
                        </select>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-5">
                      <label>Sort Order</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="sort_order" value="0" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <button onclick="save_slider()" type="button">Save</button>
                  </div>
              </form>
                    
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <span id="alert" class="text-left"></span>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>                