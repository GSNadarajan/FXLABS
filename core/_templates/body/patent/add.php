<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
   Load::body("patent","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Add patent</h5>
            <p></p>
            <div class="widget-content widget-content-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="1" name="add">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">User_id</label>

                        <input type="text" name="user_id" class="form-control" id="inputZip" required placeholder="Enter the user_id">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name</label>

                        <input type="text" name="name" class="form-control" id="inputZip" required placeholder="Enter the name of the patent">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Register no</label>

                        <input type="number" name="reg_no" class="form-control" id="inputZip" required placeholder="Enter the name of the patent">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Description</label>

                        <input type="text" name="description" class="form-control" id="inputZip" required placeholder="Enter the description">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Reference URL</label>

                        <input type="text" name="ref_url" class="form-control" id="inputZip" required placeholder="Enter the ">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Status</label>

                        <select class="form-control" id="member1" name="status" required>
                          <option value="1">Active</option>
                          <option value="0">Pending</option>
                          <option value="2">Rejected</option>

                        </select>


                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Applied_date</label>

                        <input type="date" name="appl_date" class="form-control" id="inputZip" required placeholder="Applied date">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Approval_date</label>

                        <input type="date" name="approv_date" class="form-control" id="inputZip" required placeholder="Approval date">
                    </div>


        <!-- <center> -->
        <button type="submit" class="btn  btn-primary mt-3"> Submit </button>
        <!-- </center> -->

        </form>
    </div>
</div>
</div>
</div>