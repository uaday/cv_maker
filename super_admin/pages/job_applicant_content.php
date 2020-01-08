<?php
$i= 0;

if(isset($_POST['submit_job']))
{
    $message=$obj_sup->insert_job_circular($_POST);
}

$result = $obj_sup->select_all_job_applicant_list($_GET['job_id']);
$result2 = $obj_sup->find_job_info($_GET['job_id']);
$row2 = mysqli_fetch_assoc($result2);
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Job Applicant List</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?= $row2['job_name']?> job applicant List
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div>
                            <?php
                            if (isset($_SESSION['message'])) {
                                if ($_SESSION['message'] != 'Job Circular successfully added') {
                                    ?>
                                    <div class="alert alert-danger">
                                        <h3><?php if (isset($_SESSION['message'])) echo $_SESSION['message']; ?></h3>
                                    </div>
                                <?php } else { ?>
                                    <div class="alert alert-success">
                                        <h3><?php if (isset($_SESSION['message'])) echo $_SESSION['message']; ?></h3>
                                    </div>
                                <?php } ?>
                                <?php unset($_SESSION['message']); } ?>
                        </div>
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Applied Date</th>
                                    <th>Rating</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { $i++; ?>
                                    <tr class="odd gradeX text-center">

                                        <td ><label style="margin-top: 10%"><?php echo $row['first_name'].' '. $row['last_name'] ?></label></td>
                                        <td><label  style="margin-top: 10%"><?php echo $row['email'] ?></label></td>
                                        <td><label  style="margin-top: 10%"><?php echo $row['created_on'] ?></label></td>
                                        <td><label  style="margin-top: 10%"><?php echo $row['rating'] ?></label></td>

                                        <td>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body text-center" align="center">
                                                <?php if($row['template'] == 't1'){?>
                                                <a style="margin-top: 10%" type="button" class="btn btn-success btn-circle"
                                                   target="_blank"
                                                   href="./../template/t1_content.php?applicant_id=<?php echo $row['login_id']; ?>"
                                                   title="Delete" ><i
                                                        class="glyphicon glyphicon-list"></i>
                                                </a>
                                                <?php } else {?>
                                                    <a style="margin-top: 10%" type="button" class="btn btn-success btn-circle"
                                                       target="_blank"
                                                       href="./../template/t2_content.php?applicant_id=<?php echo $row['login_id']; ?>"
                                                       title="Delete" ><i
                                                                class="glyphicon glyphicon-list"></i>
                                                    </a>
                                                <?php }?>
                                            </div>
                                        </td>
                                    </tr>


                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <div id="morris-area-chart" class="hidden"></div>

    <div id="morris-bar-chart" class="hidden"></div>

    <div id="morris-donut-chart" class="hidden"></div>
</div>




