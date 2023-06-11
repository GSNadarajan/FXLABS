<?=Load::common("modal")?>

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    
    <?=isset($_GET['deleted'])?alert::delete():""?>
    <div class="widget-content widget-content-area br-6">
        <table id="zero-config" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Organizer</th>
                    <th>Reporting idea</th>
                    <th>Venue</th>
                    <th>Review</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>

                <?php
                $team = new Unique("competition", "-");
                $total = $team->getTotal();
                // print_r($food->getTotal());
                foreach ($total as $key => $values) {
                ?>
                    <tr>
                        <td> <?= $key + 1 ?></td>
                        <td><?= $values['name'] ?></td>
                        <td><?= $values['type'] ?></td>
                        <td><?= $values['date'] ?></td>
                        <td><?= $values['organizer'] ?></td>
                        <td><?= $values['reporting_idea'] ?></td>
                        <td><?= $values['venue'] ?></td>
                        <td><?= $values['review'] ?></td>



                     
                        <td><a href="update.php?id=<?php echo $values['id'] ?>"><button class="btn btn-primary btn-rounded mb-2">Update</button></a></td>

                        <!-- <td><button class="btn btn-primary btn-rounded mb-2">Delete</button></td> -->

                        <td> <a href="#" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" data-placement="top"> <svg style="cursor:pointer" onclick="update_delete(<?php echo $values['id']; ?>,'<?=Session::get("current_dir")?>')" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </a </td>
                    </tr>

                <?
                }




                ?>




            </tbody>

        </table>
    </div>
</div>