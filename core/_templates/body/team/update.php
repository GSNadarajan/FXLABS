<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php

    $id = $_GET['id'];
    $team = new unique("team", $id);

    Load::body("team", "action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Update team</h5>
            <div class="widget-content widget-content-area">
                <form action="" method="POST">

                    <div class="form-group mt-3 md-2">
                        <label for="inputZip">Team name </label>
                        <input name="update" type="hidden" value="1">
                        <input name="id" value="<?= $id ?>" type="hidden">
                        <input type="text" name="team_name" value="<?= $team->getTeamName() ?>" class="form-control" id="inputZip" required="">
                    </div>
                    <div class="form-group mt-3 md-2">
                        <label for="inputZip">Leader name </label>
                        <input type="text" name="leader_name" value="<?= $team->getLeaderName() ?>" class="form-control" id="inputZip" required="">
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Member one</label>
                        <select class="form-control" id="member1" onclick="getmember1()" name="member1" required>
                            <?php
                             $user_1 = new Unique("user", $team->getUserOne());
                             $u1_id = $user_1->getItem("id", "name", $team->getUserOne());

                            ?>
                            <option value="<?php echo $u1_id;?>" selected><?php echo $team->getUserOne() ?></option>
                            <?php                         
                            
                           $filter_name = unique::get_distinctdata();
                           foreach($filter_name as $key => $values){
                            if($values['id'] != $u1_id){
                                  ?>
                               <option value="<?=$values['id']?>"><?=$values['name']?></option>
                               <?
                               }
                            }
                               ?>
                        </select>
                    </div>
                
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Member two</label>

                        <select class="form-control" id="member2" name="member2" required>
                            <?php
                             $user_2 = new Unique("user", $team->getUserTwo());
                             $u2_id = $user_2->getItem("id", "name", $team->getUserTwo());

                            ?>
                            <option value="<?php echo $u2_id;?>" selected><?php echo $team->getUserTwo() ?></option>

                        </select>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Member three</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="member3" required>
                            <?php
                             $user_3 = new Unique("user", $team->getUserThree());
                             $u3_id = $user_3->getItem("id", "name", $team->getUserThree());

                            ?>
                            <option value="<?php echo $u3_id;?>" selected><?php echo $team->getUserThree() ?></option>
                            <?php
                           
                            
                           $filter_name = unique::get_distinctdata();
                           foreach($filter_name as $key => $values){
                            if($values['id'] != $u1_id && $values['id'] != $u2_id && $values['id'] != $u3_id){
                                  ?>
                               <option value="<?=$values['id']?>"><?=$values['name']?></option>
                               <?
                               }
                            }
                               ?>
                        </select>
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Member four</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="member3" required>
                            <?php
                             $user_4 = new Unique("user", $team->getUserFour());
                             $u4_id = $user_4->getItem("id", "name", $team->getUserFour());

                            ?>
                            <option value="<?php echo $u4_id;?>" selected><?php echo $team->getUserFour() ?></option>
                            <?php
                           
                            
                           $filter_name = unique::get_distinctdata();
                           foreach($filter_name as $key => $values){
                            if($values['id'] != $u1_id && $values['id'] != $u2_id &&  $values['id'] != $u4_id){
                                  ?>
                               <option value="<?=$values['id']?>"><?=$values['name']?></option>
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