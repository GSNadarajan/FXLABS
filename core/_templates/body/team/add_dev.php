<main id="main" class="main">
    <!-- <?=load::body(2,"comp","action")?> -->
    <div class="pagetitle">
        <h1> Team</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Team</h5>

                        <!-- General Form Elements -->
                        <form action="" method="POST">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Team name</label>
                                <div class="col-sm-10">
                                    <input type="hidden" value="yes" name="add" />

                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter your team name" value="">
                                </div>
                            </div>
                            <!-- <label for="inputText" class="col-sm-2 mb-3 col-form-label">Team members</label> -->
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Comp name</label>
                                <div class="col-sm-10">


                                    <select class="form-select" name="member1" aria-label="Default select example">
                                        <option selected>Choose competition</option>

                                        <?php
                                        $competition = new unique('competition' , '-');
                                        $comp_name = $competition->getTotal();
                                        foreach($comp_name as $key => $values){
                                            ?>

                                        <option value="<?=$values['id']?>"><?=$values['name']?></option>
                                        <?
                                            }
                                             ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Member 1</label>
                                <div class="col-sm-10">
                                    <select class="form-select" onclick="getmember1()" name="member1" id="member1"
                                        aria-label="Default select example">
                                        <!-- <option >Select member one</option> -->



                                        <?php

                                        // $filter_name = new unique('','-');
                                        // $result = $all_user->get_distinctdata();
                                        $filter_name = unique::get_distinctdata();
                                        foreach($filter_name as $key => $values){
                                        
                                            ?>

                                        <option value="<?=$values['id']?>"><?=$values['name']?></option>
                                        <?
                                            }
                                             ?>
                                    </select>

                                </div>
                            </div>
                            <p id="demo"></p>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Member 2</label>
                                <div class="col-sm-10">
                                    <select class="form-select" onclick="member2()" name="member4"
                                        aria-label="Default select example">
                                        <option selected>Select member two namespace</option>
                                        <script>
                                        var member1 =
                                        </script>
                                        <?php
                                       
                                       $filter_name = unique::get_distinctdata();
                                        foreach($filter_name as $key => $values){
                                            ?>
                                        <!-- <option value="<?=$values['id']?>"><?=$values['name']?></option> -->
                                        <?
                                            }
                                              
                                             ?>

                                    </select>
                                </div>
                            </div>




                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>

                        </form>


                    </div>

                </div>


            </div>
    </section>

</main>
<script type="text/javascript">
function getmember1() {
    // var member_one = document.querySelector('#select1').value;
    var member_one = $('#member1').val();
    console.log(member_one);
    // output =member_one;

    $.ajax({
        type: "POST",
        url: "https://nattu.me/FX-LABS/test.php",
        dataType: "json",
        data: {
            "id": member_one,
        },
        success: function(data) {
            // var sub_cat_name = data[0].name;
            // var sub_cat_id = data[0].id;

           console.log(data)
           var i = 0;
           var $el = $("#member2");
           $el.empty(); // remove old options
                $.each(data, function(key, value) {
                    // console.log("available s-category :",data[i].name);
                    $el.append($("<option></option>").attr("value", data[i].id).text(data[i].name));
                    i++;
                });
        },
        error: function(xhr, status, error) {}
    });
  
}

</script>