<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
   Load::body("team","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Add team</h5>
            <p></p>
            <div class="widget-content widget-content-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="1" name="add">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Team Name </label>
                        <input type="text" placeholder="Enter the team name"  name="team_name" class="form-control" id="inputZip" required="">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Leader name</label>

                        <input type="text" placeholder="Enter the Leader name" name="leader_name" class="form-control" id="inputZip" required>
                    </div>
                    <label for="inputZip"> Add team members </label>
                    <select id="add_brand" name="members[]" class="form-control tagging" multiple required>
                      <?php
                        $users = new Unique("user","");
                        $result = $users->getTotal();
                        foreach($result as $key => $value){
                            ?>
                        <option value="<?=$value['id']?>"><?=$value['name']?></option>
                            <?php
                        }
                        ?>
                    </select>
               
            </div> 
        </div>



        <!-- <center> -->
        <button type="submit" class="btn  btn-primary mt-3"> Submit </button>
        <!-- </center> -->

        </form>
    </div>
</div>
</div>
</div>