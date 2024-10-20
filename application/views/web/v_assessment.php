<!--<section class="page-title" style="background-image: url(--><?php //echo base_url(); ?><!--others/images/background/page-title.jpg);">-->
<!--    <div class="auto-container">-->
<!--        <div class="title-outer">-->
<!--            <h1 class="title">Student&nbsp;Assessment</h1>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<!--Contact Details Start-->
<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Assessment Form</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">

            <script>
                function show_field(str)
                {
                    if (str=="")
                    {
                        document.getElementById("txtHint").innerHTML="";
                        return;
                    }
                    if (window.XMLHttpRequest)
                    {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    }
                    else
                    {
                        // code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange=function()
                    {
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

                        }
                    }
                    xmlhttp.open("GET","<?php echo base_url(); ?>web/martial_status?q="+str,true);
                    xmlhttp.send();
                }
            </script>


                <script>
                    function show_form_category(str)
                    {
                        if (str=="")
                        {
                            document.getElementById("txtHintForm").innerHTML="";
                            return;
                        }
                        if (window.XMLHttpRequest)
                        {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp=new XMLHttpRequest();
                        }
                        else
                        {
                            // code for IE6, IE5
                            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function()
                        {
                            if (xmlhttp.readyState==4 && xmlhttp.status==200)
                            {
                                document.getElementById("txtHintForm").innerHTML=xmlhttp.responseText;

                            }
                        }
                        xmlhttp.open("GET","<?php echo base_url(); ?>web/form_category?q="+str,true);
                        xmlhttp.send();
                    }
                </script>

                <script>
                    function country_apply(str)
                    {
                        if (str=="")
                        {
                            document.getElementById("CountryApply").innerHTML="";
                            return;
                        }
                        if (window.XMLHttpRequest)
                        {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp=new XMLHttpRequest();
                        }
                        else
                        {
                            // code for IE6, IE5
                            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function()
                        {
                            if (xmlhttp.readyState==4 && xmlhttp.status==200)
                            {
                                document.getElementById("CountryApply").innerHTML=xmlhttp.responseText;

                            }
                        }
                        xmlhttp.open("GET","<?php echo base_url(); ?>web/who_country_apply?q="+str,true);
                        xmlhttp.send();
                    }
                </script>

                <script>
                    function show_field_children(str)
                    {
                        if (str=="")
                        {
                            document.getElementById("ChildrenField").innerHTML="";
                            return;
                        }
                        if (window.XMLHttpRequest)
                        {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp=new XMLHttpRequest();
                        }
                        else
                        {
                            // code for IE6, IE5
                            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function()
                        {
                            if (xmlhttp.readyState==4 && xmlhttp.status==200)
                            {
                                document.getElementById("ChildrenField").innerHTML=xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET","<?php echo base_url(); ?>web/children_form?q="+str,true);
                        xmlhttp.send();
                    }
                </script>

            <script>
                function show_field_guardian(str)
                {
                    if (str=="")
                    {
                        document.getElementById("txtHintGuardian").innerHTML="";
                        return;
                    }
                    if (window.XMLHttpRequest)
                    {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    }
                    else
                    {
                        // code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange=function()
                    {
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            document.getElementById("txtHintGuardian").innerHTML=xmlhttp.responseText;

                        }
                    }
                    xmlhttp.open("GET","<?php echo base_url(); ?>web/guardian_applicants_section?q="+str,true);
                    xmlhttp.send();
                }
            </script>


                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="#" method="post">

                    <div class="row">

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Full Name :</label>
                                <input name="form_name" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Phone Number :</label>
                                <input name="form_email" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Email Address :</label>
                                <input name="form_email" class="form-control required email" type="email"  required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Contact Address :</label>
                                <input name="form_email" class="form-control" type="text"  required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Date of birth :</label>
                                <input name="form_name" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="lebel_title">Select Category for Visa :</label>
                                    <select class="default-select  form-control wide" name="VisaCategory" onChange="show_form_category(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Student Visa">Student Visa</option>
                                        <option value="Work Visa">Work Visa</option>
                                        <option value="Job Seeker Visa">Job Seeker Visa</option>
                                        <option value="PR Visa">PR Visa</option>
                                        <option value="Visitor Business Visa">Visitor & Business Visa</option>
<!--                                        <option value="Investor Visa">Investor Visa</option>-->
                                        <option value="Student Guardian Visa">Student Guardian Visa</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="txtHintForm"></div>
                    <div id="txtHint"></div>
                    <div id="ChildrenField"></div>
                    <div id="txtHintGuardian"></div>


                    <div class="mb-3 text-center">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>
                    </div>
                </form>
                <!-- Contact Form Validation-->
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->


