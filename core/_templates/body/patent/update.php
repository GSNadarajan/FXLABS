<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
        
        $id = $_GET['id'];
        $patent = new unique("patent", $id);

        Load::body("patent","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Update Patent</h5>
            <br>
            <div class="widget-content widget-content-area">
                <form action="" method="POST">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">User_id</label>
                        <input name="update" type="hidden" value="1">
                        <input name="id" value="<?=$id?>" type="hidden">
                        <input type="text" name="user_id" value="<?=$patent->getUserId()?>" class="form-control"
                            id="inputZip" required placeholder="Enter the user_id">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name </label>
                        <input type="text" name="name" value="<?=$patent->getName()?>" class="form-control"
                            id="inputZip" required="">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Description</label>
                        <input type="text" name="description" value="<?=$patent->getDesc()?>" class="form-control"
                            id="inputZip" required="">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Reference URL </label>
                        <input type="text" name="ref_url" value="<?=$patent->getRefUrl()?>" class="form-control"
                            id="inputZip" required="">
                    </div>

                    <!-- skip  -->
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Applied Date</label>

                        <input type="date" name="appl_date" value="<?=$patent->getAppliedDate()?>" class="form-control"
                            id="inputZip" required="">
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Approval Date</label>

                        <input type="date" name="approv_date" value="<?=$patent->getApprovalDate()?>"
                            class="form-control" id="inputZip" required="">
                    </div>


                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Status</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                            <?php
                            //   $dep = new Unique("competition",$user->getDeptId());
                            //   $dept_name = $dep->getName();
                            if($patent->getStatus() == 0){
                                ?>
                            <option value="0">Pending</option>
                            <option value="1">Active</option>
                            <option value="2">Rejected</option>

                            <?
                            }
                              if($patent->getStatus() == 1){
                                ?>
                            <option value="1">Active</option>
                            <option value="0">Pending</option>
                            <option value="2">Rejected</option>


                            <?
                              }
                              if($patent->getStatus() == 2){
                                ?>
                            <option value="2">Rejected</option>
                            <option value="0">Pending</option>
                            <option value="1">Active</option>

                            <?
                              }
                             
                                ?>


                        </select>
                    </div>





                    <center>
                        <button type="submit" class="btn text-center btn-primary mt-3"> Submit </button>
                    </center>

                </form>
            </div>
        </div>
    </div>
</div>