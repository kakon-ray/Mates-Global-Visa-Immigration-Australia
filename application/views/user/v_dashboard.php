<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
<div class="page-titles">
<!--    <ol class="breadcrumb">-->
<!--        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>-->
<!--        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>-->
<!--    </ol>-->
</div>
<div class="container-fluid">

<style>
    .video-wrapper {
        width:100%;
        height:35vh;
        overflow: hidden;

    video {
        object-fit: cover;
        width:100%;
        height:100%;
    }
    }
</style>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
                <div class="photo-content">

                    <div class="video-wrapper">
                        <video autoplay muted loop playsinline preload="metadata">
                            <source src="<?php echo base_url(); ?>others/213956_tiny.mp4" type="video/mp4">
                        </video>
                    </div>
<!--                    <div class="cover-photo rounded"></div>-->
                </div>
                <div class="profile-info">
                    <div class="profile-photo">
                        <img src="<?php echo base_url(); ?>others/upload/user_photo/<?php echo $SessionData['user_image']; ?>" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-details">
<!--                        <div class="profile-name px-3 pt-2">-->
<!--                            <h4 class="text-primary mb-0">--><?php //echo $SessionData['full_name']; ?><!--</h4>-->
<!--                            <p>Professional</p>-->
<!--                        </div>-->
<!--                        <div class="profile-email px-2 pt-2">-->
<!--                            <h4 class="text-muted mb-0">--><?php //echo $SessionData['user_name']; ?><!--</h4>-->
<!--                            <p>Email</p>-->
<!--                        </div>-->
                        <div class="dropdown ms-auto">
                            <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                    </g>
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <?php $SiteURLApplyStatus=site_url('user/apply_status'); ?>
                                <li class="dropdown-item"><a href="<?php echo $SiteURLApplyStatus; ?>" ><i class="fa fa-user-circle text-primary me-2"></i> View profile</li></a>
                                <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i>Delete Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-xl-4">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="profile-blog">
                        <h5 class="text-primary d-inline">Latest News</h5>
<!--                        <img src="--><?php //echo base_url(); ?><!--others/cms/images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100 rounded">-->
                        <h4><a href="#" class="text-black">Student Visa (Subclass 500)</a></h4>
                        <p class="mb-0">
                            The Australia Student Visa Subclass 500 is a visa option designed for international students who want to study in
                            Australia. This visa allows students to enroll in a course of study at an Australian educational institution.
                        </p>
                        <div class="text-center">
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send Message</a>
                            </div>
                        </div>
                    </div>

                    <div class="profile-statistics">
                        <!-- Modal -->
                        <div class="modal fade" id="sendMessageModal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Send Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="text-black font-w600 form-label">Subject <span class="required">*</span></label>
                                                        <input type="text" class="form-control" value="Author" name="Author" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="text-black font-w600 form-label">Message <span class="required">*</span></label>
                                                        <textarea rows="4" class="form-control h-50" name="comment" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3 mb-0">
                                                        <input type="submit" value="Send Message" class="submit btn btn-primary" name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-8">
<div class="card h-auto">
<div class="card-body">
<div class="profile-tab">
<div class="custom-tab-1">
<ul class="nav nav-tabs">
    <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link active show">Notifications</a>
    </li>
    <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">Profile</a>
    </li>
    <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Setting</a>
    </li>
</ul>
<div class="tab-content">
<div id="my-posts" class="tab-pane fade active show">
    <div class="my-post-content pt-3">

        <div class="profile-uoloaded-post border-bottom-1 pb-5">

            <?php
              if(count($Notifications) > 0)
              {
                  foreach($Notifications as $NotificationsData)
                  {
                      $notification_title=$NotificationsData['notification_title'];
                      $notification_text=$NotificationsData['notification_text'];
                  }
                  ?>

                  <!--            <img src="images/profile/8.jpg" alt="" class="img-fluid w-100 rounded">-->
                  <a class="post-title" href="#"><h3 class="text-black"><?php echo $notification_title; ?></h3></a>
                  <p>
                      <?php
                      $SiteURLAttachment=site_url('user/attachment_document');
                       echo $notification_text . "&nbsp;:   <a class=\"text-primary d-inline\" href=\"$SiteURLAttachment\">Click Here</a>";
                      ?>

                  </p>
                  <!--            <button class="btn btn-primary me-2"><span class="me-2"><i class="fa fa-heart"></i></span>Like</button>-->
                  <button class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#replyModal"><span class="me-2"><i class="fa fa-reply"></i></span>Reply</button>

            <?php
              }
            else
            {
                ?>

                <div class="alert alert-secondary notification">
                    <p class="notificaiton-title mb-2"><strong>New notifications</strong> don't exist</p>
                    <p>Thanks for stay with us</p>
                </div>

            <?php
            }
            ?>

        </div>


    </div>
</div>
<div id="about-me" class="tab-pane fade">
    <div class="profile-personal-info">
        <h4 class="text-primary mb-4">Personal Information</h4>

        <?php
          foreach($UserAccount as $UserAccountData)
          {
              $fullname=$UserAccountData['fullname'];
              $email=$UserAccountData['email'];
              $student_visa_country=$UserAccountData['student_visa_country'];
              $applying_from_name=$UserAccountData['applying_from_name'];
              $birth_date=$UserAccountData['birth_date'];
              $contact_address=$UserAccountData['contact_address'];
          }
        ?>
        <div class="row mb-2">
            <div class="col-sm-3 col-5">
                <h5 class="f-w-500">Name <span class="pull-end">:</span>
                </h5>
            </div>
            <div class="col-sm-9 col-7"><span><?php echo $fullname; ?></span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-3 col-5">
                <h5 class="f-w-500">Email <span class="pull-end">:</span>
                </h5>
            </div>
            <div class="col-sm-9 col-7"><span><?php echo $email; ?></span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-3 col-5">
                <h5 class="f-w-500">Country for visa <span class="pull-end">:</span></h5>
            </div>
            <div class="col-sm-9 col-7"><span><?php echo $student_visa_country; ?></span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-3 col-5">
                <h5 class="f-w-500">Apply Form <span class="pull-end">:</span></h5>
            </div>
            <div class="col-sm-9 col-7"><span><?php echo $applying_from_name; ?></span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-3 col-5">
                <h5 class="f-w-500">Date Of Birth <span class="pull-end">:</span>
                </h5>
            </div>
            <div class="col-sm-9 col-7"><span><?php echo $birth_date; ?></span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-3 col-5">
                <h5 class="f-w-500">Contact Address <span class="pull-end">:</span></h5>
            </div>
            <div class="col-sm-9 col-7"><span><?php echo $contact_address; ?></span>
            </div>
        </div>

    </div>
</div>
<div id="profile-settings" class="tab-pane fade">
    <div class="pt-3">
        <div class="settings-form">
            <h4 class="text-primary">Account Setting</h4>
            <form>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="<?php echo $SessionData['user_name']; ?>" class="form-control" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Reset Password</label>
                        <input type="text" name="password" value="123456" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image : <small>[Width:600px - Height:600px]</small></label>
                    <input type="file" class="form-control" name="userfile"  multiple="multiple" accept="image/*" onchange="loadFile(event)">
                    <div class="timeline_content_addon3">
                        <img id="output" src="<?php echo base_url(); ?>others/upload/user_photo/<?php echo $SessionData['user_image']; ?>" width="200px" height="200px" />
                    </div>
                    <input type="hidden" name="Image" value="<?php echo $SessionData['user_image']; ?>">
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="replyModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Post Reply</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <textarea class="form-control h-50" rows="4">Message</textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Reply</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--**********************************
    Content body end
***********************************-->


<