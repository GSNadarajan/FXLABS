<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
        
        $id = $_GET['id'];
        $category = new unique("category", $id);

        Load::body("category","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Add your Product here!</h5>
            <p></p>
            <div class="widget-content widget-content-area">
                <form action="" method="POST">

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name </label>
                        <input name="update" type="hidden" value="1">
                        <input name="id" value="<?=$id?>" type="hidden">
                        <input type="text" name="name" value="<?=$category->getName()?>" class="form-control" id="inputZip" required="">
                    </div>

                    <center>
                        <button type="submit" class="btn text-center btn-primary mt-3"> Submit </button>
                    </center>

                </form>
                </div>
        </div>
    </div>
</div>