<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
   Load::body("journal","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Add Journal</h5>
            <p></p>
            <div class="widget-content widget-content-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="1" name="add">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Register no</label>
                        <input type="number" name="register_no" class="form-control"  id="reg_no" onchange="NameBasedReg_no()" required placeholder="Enter the register number">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name</label>
                        <input disabled type="text" name="name"  class="form-control"  id="name"  placeholder="Eg: John M" style="color:black">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Topic</label>

                        <input type="text" name="topic" class="form-control" id="inputZip" required placeholder="Enter the name of the topic">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Description</label>

                        <input type="text" name="description" class="form-control" id="inputZip" required placeholder="Enter the description">
                    </div>

                

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Published</label>

                        <select class="form-control" name="published" required>
                        <option value="1">Published</option>
                          <option value="0">Not publised</option>

                        </select>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Status</label>

                        <select class="form-control" name="status" required>
                          <option value="1">Active</option>
                          <option value="0">Not active</option>

                        </select>


                    </div>

                  


        <!-- <center> -->
        <button type="submit" class="btn  btn-primary mt-3"> Submit </button>
        <!-- </center> -->

        </form>
    </div>
</div>
</div>
</div>