<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
   Load::body("user","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Add user</h5>
            <p></p>
            <div class="widget-content widget-content-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="1" name="add">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name </label>
                        <input type="text" name="name" class="form-control" id="inputZip" required="" placeholder="Eg: John M">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Register no</label>
                        <input type="number" name="register_no" class="form-control" id="inputZip" required="" placeholder="Eg: 95072012001">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Department</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="dept" required>
                            <?php
                              $dept = new Unique("department","-");
                              $total = $dept->getTotal();
                            //   console::log($total[0]['name']);
                            foreach($total as $key => $values){
                                ?>
                            <option value="<?= $values['id']?>"><?=$values['name']?></option>
                            <?
                            }
                            ?>
                          
                        </select>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Email </label>
                        <input type="text" name="email" class="form-control" id="inputZip" required placeholder="Eg: john@francisxavier.ac.in">
                    </div>


                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Phone </label>
                        <input type="text" name="phone" class="form-control" id="inputZip" required placeholder="Eg: 8923456454">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Lab</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="lab" required>
                            <?php
                              $lab = new Unique("labs","-");
                              $total = $lab->getTotal();
                            //   console::log($total[0]['name']);
                            foreach($total as $key => $values){
                                ?>
                            <option value="<?= $values['id']?>"><?=$values['name']?></option>
                            <?
                            }
                            ?>
                          
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