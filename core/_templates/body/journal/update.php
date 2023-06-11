<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
        
        $id = $_GET['id'];
        $journal = new unique("journal", $id);

        Load::body("journal","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Update Journal</h5>
            <br>
            <div class="widget-content widget-content-area">
                <form action="" method="POST">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">User_id</label>
                        <input name="update" type="hidden" value="1">
                        <input name="id" value="<?=$id?>" type="hidden">
                        <input type="text" name="user_id" value="<?=$journal->getUserId()?>" class="form-control"
                            id="inputZip" required placeholder="Enter the user_id" required>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Topic </label>
                        <input type="text" name="topic" value="<?=$journal->getTopic()?>" class="form-control"
                            id="inputZip" required>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Description</label>
                        <input type="text" name="description" value="<?=$journal->getDesc()?>" class="form-control"
                            id="inputZip" required>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Published</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="published" required>
                            <?php
                            //   $dep = new Unique("competition",$user->getDeptId());
                            //   $dept_name = $dep->getName();
                            if($journal->getPublished() == 0){
                                ?>
                            <option value="0">not published</option>
                            <option value="1">Published</option>

                            <?
                            }
                              if($journal->getPublished() == 1){
                                ?>
                            <option value="1">Published</option>
                            <option value="0">not published</option>
                            <?
                              }
                                ?>


                        </select>
                    </div>

                


                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Status</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                            <?php
                            //   $dep = new Unique("competition",$user->getDeptId());
                            //   $dept_name = $dep->getName();
                            if($journal->getStatus() == 0){
                                ?>
                            <option value="0">In active</option>
                            <option value="1">Active</option>

                            <?
                            }
                              if($journal->getStatus() == 1){
                                ?>
                            <option value="1">Active</option>
                            <option value="0">In active</option>
                            <?
                              }
                                ?>


                        </select>
                    </div>





                 
                        <button type="submit" class="btn text-center btn-primary mt-3"> Submit </button>
                   

                </form>
            </div>
        </div>
    </div>
</div>