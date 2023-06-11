<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
   Load::body("competition","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Add competition</h5>
            <p></p>
            <div class="widget-content widget-content-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="1" name="add">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name</label>

                        <input type="text" name="name" class="form-control" id="inputZip" required placeholder="Name of the competition">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Type</label>

                        <select class="form-control" id="member1" onclick="getmember1()" name="type" required>
                          <option value="1">National</option>
                          <option value="2">International</option>
                          <option value="3">Interlevel</option>
                          <option value="4">Statelevel</option>

                        </select>


                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Date</label>

                        <input type="date" name="date" class="form-control" id="inputZip" required placeholder="">
                    </div>


                    


                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Organizer</label>

                        <input type="text" name="org" class="form-control" id="inputZip" required placeholder="Name of the organizer">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Reporting idea</label>

                        <textarea type="text" name="report_idea" rows="1" cols="50" class="form-control" id="inputZip" required placeholder="Reporting idea"></textarea>
                    </div>


                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Venue</label>

                        <input type="text" name="venue" class="form-control" id="inputZip" required placeholder="Enter the venue">
                    </div>


                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Review</label>

                        <textarea type="text" name="review"rows="1" cols="50" class="form-control" id="inputZip" required placeholder="Review"></textarea>
                    </div>

                   






        <!-- <center> -->
        <button type="submit" class="btn  btn-primary mt-3"> Submit </button>
        <!-- </center> -->

        </form>
    </div>
</div>
</div>
</div>