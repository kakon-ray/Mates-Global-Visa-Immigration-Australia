<div class="content-body">
<!-- row -->
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Application Status</a></li>
        <!--        <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>-->
    </ol>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-xl-3">
    <div class="card h-auto">
        <div class="card-body">
            <div class="c-profile text-center">
                <img src="<?php echo base_url(); ?>others/upload/user_photo/<?php echo $SessionData['user_image']; ?>" width="100" height="100" class="rounded-circle mb-2" alt="">
                <h4><?php echo $SessionData['full_name']; ?></h4>
            </div>
            <?php
            foreach($UserAccount as $UserAccountData)
            {
                $fullname=$UserAccountData['fullname'];
                $email=$UserAccountData['email'];
                $student_visa_country=$UserAccountData['student_visa_country'];
                $applying_from_name=$UserAccountData['applying_from_name'];
                $birth_date=$UserAccountData['birth_date'];
                $contact_address=$UserAccountData['contact_address'];
                $phone_number=$UserAccountData['phone_number'];
            }
            ?>
            <div class="c-details">
                <ul>
                    <li>
                        <span>Email</span>
                        <p><?php echo $SessionData['user_name']; ?></p>
                    </li>
                    <li>
                        <span>Phone</span>
                        <p><?php echo $phone_number; ?></p>
                    </li>
                    <li>
                        <span>Date of birth</span>
                        <p><?php echo $birth_date; ?></p>
                    </li>
                    <li>
                        <span>Contact Address</span>
                        <p><?php echo $contact_address; ?></p>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<div class="col-xl-9">
    <div class="card h-auto">
        <div class="card-header py-3">
            <h4 class="heading mb-0">Application History</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive active-projects style-1">
                <table id="empoloyees-tbl" class="table">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>FULL NAME</th>
                        <th>APPLY DATE</th>
                        <th>STATUS</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php
                        $sl=1;
                        foreach($UserAccount as $UserAccountData)
                        {
                            $fullname=$UserAccountData['fullname'];
                            $email=$UserAccountData['email'];
                            $d_date=$UserAccountData['d_date'];
                            $d_time=$UserAccountData['d_time'];
                            $status=$UserAccountData['status'];

                            if($status==0)
                            {
                                $status_value="<span class=\"badge badge-danger light border-0\">Pending</span>";
                            }
                            else
                            {
                                $status_value="<span class=\"badge badge-success light border-0\">Eligible</span>";
                            }
                    ?>

                    <tr>
                        <td><span>#<?php echo $sl++; ?></span></td>
                        <td>
                            <span><?php echo $fullname; ?></span>
                        </td>
                        <td>
                            <span><?php echo $d_date;  ?> : <?php echo $d_date;  ?></span>
                        </td>
                        <td><?php echo $status_value; ?></td>
                        <td><button type="button" class="btn btn-outline-primary">Details</button></td>
                    </tr>

                    <?php } ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

</div>

</div>
</div>