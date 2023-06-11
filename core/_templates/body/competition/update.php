<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
        
        $id = $_GET['id'];
        $comp = new unique("competition", $id);

        Load::body("competition","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Update competition</h5>
            <div class="widget-content widget-content-area">
                <form action="" method="POST">

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name </label>
                        <input name="update" type="hidden" value="1">
                        <input name="id" value="<?=$id?>" type="hidden">
                        <input type="text" name="name" value="<?=$comp->getName()?>" class="form-control" id="inputZip"
                            required="">
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Type</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                            <?php
                            //   $dep = new Unique("competition",$user->getDeptId());
                            //   $dept_name = $dep->getName();
                            if($comp->getType() ==1){
                                ?>
                            <option value="1">National</option>
                            <option value="2">International</option>
                            <option value="3">Statelevel</option>
                            <option value="4">Interlevel</option>

                            <?
                            }
                              if($comp->getType() == 2){
                                ?>
                            <option value="2">International</option>
                            <option value="1">National</option>
                            <option value="3">Statelevel</option>
                            <option value="4">Interlevel</option>

                            <?
                              }
                              if($comp->getType() == 3){
                                ?>
                            <option value="3">Interlevel</option>
                            <option value="1">National</option>
                            <option value="2">International</option>
                            <option value="3">Statelevel</option>
                            <?
                              }
                              if($comp->getType() == 4){
                                ?>
                            <option value="4">Statelevel</option>
                            <option value="1">National</option>
                            <option value="2">International</option>
                            <option value="4">Interlevel</option>

                            <?
                              }
                            ?>
                            <?php
                              
                            
                            ?>

                        </select>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Date</label>

                        <input type="date" name="date" value="<?=$comp->getDate()?>" class="form-control" id="inputZip"
                            required="">
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Organizer</label>

                        <input type="text" name="org" value="<?=$comp->getOrganizer()?>" class="form-control" id="inputZip"
                            required="">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Reporting idea</label>

                        <textarea type="text" name="report_idea" rows="2" cols="50" class="form-control" value="" id="inputZip" required >
                        <?= $comp->getReportingIdea()?>
                        </textarea>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Review</label>

                        <textarea type="text" name="review" rows="2" cols="50" class="form-control" value="" id="inputZip" required >
                        <?= $comp->getReview()?>
                        </textarea>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Venue</label>

                        <input type="text" name="venue" value="<?=$comp->getVenue()?>" class="form-control" id="inputZip"
                            required="">
                    </div>

                   
                  


                    <center>
                        <button type="submit" class="btn text-center btn-primary mt-3"> Submit </button>
                    </center>

                </form>
            </div>
        </div>
    </div>
</div>