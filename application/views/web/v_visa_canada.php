<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Apply&nbsp;Visa&nbsp;Canada</h1>
        </div>
    </div>
</section>
<!--Start Services Details-->
<section class="services-details">
    <div class="auto-container">
        <div class="row">
            <!--Start Services Details Content-->
            <?php
            foreach($VisaCategory as $VisaCategoryData)
            {
                $VisaCategoryId=$VisaCategoryData['id'];
                $VisaCategoryName=$VisaCategoryData['category_name'];
                ?>
                <div class="col-xl-12 col-lg-12">
                    <div class=" mt-25">
                        <h3><?php echo $VisaCategoryName; ?></h3>
                        <ul class="accordion-box wow fadeInRight">
                            <!--Block-->
                            <?php
                            foreach($VisaCategoryItems as $VisaCategoryItemsData)
                            {
                                if($VisaCategoryItemsData['visa_category_id']==$VisaCategoryId)
                                {
                                    $title=$VisaCategoryItemsData['title'];
                                    $details=$VisaCategoryItemsData['details'];
                                    $hrflink=$VisaCategoryItemsData['hrflink'];
                                    $link=$VisaCategoryItemsData['link'];
                                    ?>
                                    <li class="accordion block">
                                        <div class="acc-btn"><?php echo $title; ?>
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    <?php echo $details; ?><br>
                                                    <a href="<?php echo $hrflink; ?>" target="_blank" style="text-align: right; float: right; font-weight: bold; color: #39F; text-decoration: underline;">Click here for details</a>
                                                    <br><br>
                                                    <a href="https://matesglobal.com/web/student_assessment" class="theme-btn btn-style-one"><span class="btn-title">Apply Now</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!--End Services Details Content-->
    </div>
</div>
</section>
<!--End Services Details-->

