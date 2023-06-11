<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
        
        $id = $_GET['id'];
        $user = new unique("user", $id);

        Load::body("user","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Update user</h5>
            <div class="widget-content widget-content-area">
                <form action="" method="POST">

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name </label>
                        <input name="update" type="hidden" value="1">
                        <input name="id" value="<?=$id?>" type="hidden">
                        <input type="text" name="name" value="<?=$user->getName()?>" class="form-control" id="inputZip"
                            required="">
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Department</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="dept" required>
                            <?php
                              $dep = new Unique("department",$user->getDeptId());
                              $dept_name = $dep->getName();
                            ?>
                            <option value="<?= $user->getDeptId()?>" selected><?php echo $dept_name?></option>
                            <?php
                              $dept = new Unique("department","-");
                              $total = $dept->getTotal();
                            foreach($total as $key => $values){
                                if($values['name'] != $dept_name ){

                                ?>
                            <option value="<?= $values['id']?>"><?=$values['name']?></option>
                            <?
                            }
                        }
                            ?>

                        </select>
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Email </label>
                        <input type="text" name="email" value="<?=$user->getEmail()?>" class="form-control"
                            id="inputZip" required="">
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Phone</label>
                        <input type="text" name="phone" value="<?=$user->getPhone()?>" class="form-control"
                            id="inputZip" required="">
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Lab</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="lab" required>
                            <?php
                              $lab = new Unique("labs",$user->getLabName());
                              $lab_name = $lab->getName();
                            ?>
                            <option value="<?php echo $user->getLabName()?>" selected><?php echo $lab_name?></option>
                            <?php
                              $labs = new Unique("labs","-");
                              $total = $labs->getTotal();
                            foreach($total as $key => $values){
                                if($values['name'] != $lab_name ){

                                ?>
                            <option value="<?= $values['id']?>"><?=$values['name']?></option>
                            <?
                            }
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