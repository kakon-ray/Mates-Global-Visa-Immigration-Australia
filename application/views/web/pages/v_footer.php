<?php
foreach ($Contact as $ContactData) {
    $contact_address = $ContactData['address'];
    $contact_email = $ContactData['email'];
    $contact_phone = $ContactData['phone'];
}
?>


<footer class="main-footer">
    <div class="auto-container">
        <div class="upper-box">
            <div class="logo"><a href="#"><img src="<?php echo base_url(); ?>others/images/logo3.png" alt=""></a></div>
            <div class="subscribe-form">
                <h5 class="title">Subscribe to Newsletter</h5>
                <form method="post" action="#">
                    <div class="form-group">
                        <input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
                        <button type="button" class="theme-btn btn-style-one"><span class="btn-title">Subscribe</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!--Footer Column-->
                <div class="footer-column col-xl-3 col-lg-4">
                    <div class="footer-widget about-widget">
                        <h5 class="widget-title">Contact</h5>
                        <div class="text"><?php echo $contact_address; ?></div>
                        <ul class="contact-info">
                            <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a><br></li>
                            <li><i class="fa fa-phone-square"></i> <a href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a><br>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Footer Column-->
                <div class="footer-column col-xl-6 col-lg-8 col-md-12 mb-0">
                    <div class="footer-widget links-widget">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Explore</h5>
                                <ul class="user-links">
                                    <?php
                                    $SiteURLCompanyProfilePdf = base_url('others/upload/profile/GlobalConnexProfile.pdf');
                                    ?>
                                    <li><a href="<?php echo $SiteURLCompanyProfilePdf; ?>" target="_blank">Company Profile</a></li>
                                    <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission & Vision</a></li>
                                    <!--<li><a href="--><?php //echo $SiteURLDirectorMessage; 
                                                        ?><!--">Message</a></li>-->
                                    <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                                    <li><a href="<?php echo $SiteURLAssessment; ?>">Assessment</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Visa</h5>
                                <ul class="user-links">
                                    <li><a href="<?php echo $SiteURLStudentVisa; ?>">Students Visa</a></li>
                                    <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Business Visa</a></li>
                                    <li><a href="<?php echo $SiteURLTouristVisa; ?>">Travel Visa</a></li>
                                    <li><a href="<?php echo $SiteURLWorkPermitVisa; ?>">Work Visa</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Country&nbsp;Serve</h5>
                                <ul class="user-links">
                                    <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                                    <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                                    <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                                    <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer Column-->
                <div class="footer-column col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget gallery-widget">
                        <h5 class="widget-title">Gallery</h5>
                        <div class="widget-content">
                            <div class="outer clearfix">
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-1.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-2.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-3.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-4.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-5.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-6.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">&copy; Copyright 2024 by <a href="#">Mates Global</a>
                </div>
                <ul class="social-icon-two">
                    <!--                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                    <li><a href="https://www.facebook.com/globalconnex" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://wa.me/+8801966601743" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://join.skype.com/invite/yD7vhkI0pq2f" target="_blank"><i class="fab fa-skype"></i></a></li>
                    <!--                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--End Main Footer -->
</div><!-- End Page Wrapper -->
<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--<script src="--><?php //echo base_url(); 
                    ?><!--others/js/jquery.js"></script>-->
<!--<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>others/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/jquery.fancybox.js"></script>
<script src="<?php echo base_url(); ?>others/js/wow.js"></script>
<script src="<?php echo base_url(); ?>others/js/appear.js"></script>
<script src="<?php echo base_url(); ?>others/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/owl.js"></script>
<script src="<?php echo base_url(); ?>others/js/script.js"></script>



<!-- form submit -->
<script src="<?php echo base_url(); ?>others/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/jquery.form.min.js"></script>

<!--<script>-->
<!--    (function($) {-->
<!--        $("#contact_form").validate({-->
<!--            submitHandler: function(form) {-->
<!--                var form_btn = $(form).find('button[type="submit"]');-->
<!--                var form_result_div = '#form-result';-->
<!--                $(form_result_div).remove();-->
<!--                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');-->
<!--                var form_btn_old_msg = form_btn.html();-->
<!--                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));-->
<!--                $(form).ajaxSubmit({-->
<!--                    dataType:  'json',-->
<!--                    success: function(data) {-->
<!--                        if( data.status == 'true' ) {-->
<!--                            $(form).find('.form-control').val('');-->
<!--                        }-->
<!--                        form_btn.prop('disabled', false).html(form_btn_old_msg);-->
<!--                        $(form_result_div).html(data.message).fadeIn('slow');-->
<!--                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);-->
<!--                    }-->
<!--                });-->
<!--            }-->
<!--        });-->
<!--    })(jQuery);-->
<!--</script>-->


<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script src="https://unpkg.com/create-file-list@1.0.1/dist/create-file-list.min.js"></script>
<script>
    //https://codepen.io/arif-uddin/pen/gOaagbP

    const fInputs = document.querySelectorAll('.btcd-f-input>div>input')

    function getFileSize(size) {
        let _size = size
        let unt = ['Bytes', 'KB', 'MB', 'GB'],
            i = 0;
        while (_size > 900) {
            _size /= 1024;
            i++;
        }
        return (Math.round(_size * 100) / 100) + ' ' + unt[i];
    }

    function delItem(el) {
        fileList = {
            files: []
        }
        let fInp = el.parentNode.parentNode.parentNode.querySelector('input[type="file"]')
        for (let i = 0; i < fInp.files.length; i++) {
            fileList.files.push(fInp.files[i])
        }
        fileList.files.splice(el.getAttribute('data-index'), 1)

        fInp.files = createFileList(...fileList.files)
        if (fInp.files.length > 0) {
            el.parentNode.parentNode.parentNode.querySelector('.btcd-f-title').innerHTML = `${fInp.files.length} File Selected`
        } else {
            el.parentNode.parentNode.parentNode.querySelector('.btcd-f-title').innerHTML = 'No File Chosen'
        }
        el.parentNode.remove()
    }

    function fade(element) {
        let op = 1; // initial opacity
        let timer = setInterval(function() {
            if (op <= 0.1) {
                clearInterval(timer);
                element.style.display = 'none';
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op -= op * 0.1;
        }, 50);
    }

    function unfade(element) {
        let op = 0.01; // initial opacity
        element.style.opacity = op;
        element.style.display = 'flex';
        let timer = setInterval(function() {
            if (op >= 1) {
                clearInterval(timer);
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op += op * 0.1;
        }, 13);
    }

    function get_browser() {
        let ua = navigator.userAgent,
            tem, M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if (/trident/i.test(M[1])) {
            tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
            return {
                name: 'IE',
                version: (tem[1] || '')
            };
        }
        if (M[1] === 'Chrome') {
            tem = ua.match(/\bOPR|Edge\/(\d+)/)
            if (tem != null) {
                return {
                    name: 'Opera',
                    version: tem[1]
                };
            }
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/(\d+)/i)) != null) {
            M.splice(1, 1, tem[1]);
        }
        return {
            name: M[0],
            version: M[1]
        };
    }

    for (let inp of fInputs) {
        inp.parentNode.querySelector('.btcd-inpBtn>img').src = 'data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDY0IDY0IiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGlkPSJDbGlwIj48cGF0aCBkPSJtMTIuMDggNTcuNzQ5YTkgOSAwIDAgMCAxMi43MjggMGwzMS4xMTItMzEuMTEzYTEzIDEzIDAgMSAwIC0xOC4zODQtMTguMzg1bC0yMC41MDcgMjAuNTA2IDEuNDE1IDEuNDE1IDIwLjUwNi0yMC41MDZhMTEgMTEgMCAxIDEgMTUuNTU2IDE1LjU1NmwtMzEuMTEyIDMxLjExMmE3IDcgMCAwIDEgLTkuOS05LjlsMjYuODctMjYuODdhMyAzIDAgMCAxIDQuMjQyIDQuMjQzbC0xNi4yNjMgMTYuMjY0IDEuNDE0IDEuNDE0IDE2LjI2NC0xNi4yNjNhNSA1IDAgMCAwIC03LjA3MS03LjA3MWwtMjYuODcgMjYuODdhOSA5IDAgMCAwIDAgMTIuNzI4eiIvPjwvZz48L3N2Zz4='
        inp.addEventListener('mousedown', function(e) {
            setPrevData(e)
        })
        inp.addEventListener('change', function(e) {
            handleFile(e)
        })
    }

    let fileList = {
        files: []
    }
    let fName = null
    let mxSiz = null

    function setPrevData(e) {
        if (e.target.hasAttribute('multiple') && fName !== e.target.name) {
            console.log('multiple')
            fName = e.target.name
            fileList = fileList = {
                files: []
            }
            if (e.target.files.length > 0) {
                for (let i = 0; i < e.target.files.length; i += 1) {
                    console.log(e.target.files[i])
                    fileList.files.push(e.target.files[i])
                }
            }
        }
    }

    function handleFile(e) {
        let err = []
        const fLen = e.target.files.length;
        mxSiz = e.target.parentNode.querySelector('.f-max')
        mxSiz = mxSiz != null && (Number(mxSiz.innerHTML.replace(/\D/g, '')) * Math.pow(1024, 2))

        if (e.target.hasAttribute('multiple')) {
            for (let i = 0; i < fLen; i += 1) {
                fileList.files.push(e.target.files[i])
            }
        } else {
            fileList.files.push(e.target.files[0])
        }

        //type validate
        if (e.target.hasAttribute('accept')) {
            let tmpf = []
            let type = new RegExp(e.target.getAttribute('accept').split(",").join("$|") + '$', 'gi')
            for (let i = 0; i < fileList.files.length; i += 1) {
                if (fileList.files[i].name.match(type)) {
                    tmpf.push(fileList.files[i])
                } else {
                    err.push('Wrong File Type Selected')
                }
            }
            fileList.files = tmpf
        }

        // size validate
        if (mxSiz > 0) {
            let tmpf = []
            for (let i = 0; i < fileList.files.length; i += 1) {
                if (fileList.files[i].size < mxSiz) {
                    tmpf.push(fileList.files[i])
                    mxSiz -= fileList.files[i].size
                } else {
                    console.log('rejected', i, fileList.files[i].size)
                    err.push('Max Upload Size Exceeded')
                }
            }
            fileList.files = tmpf
        }

        if (e.target.hasAttribute('multiple')) {
            e.target.files = createFileList(...fileList.files)
        } else {
            e.target.files = createFileList(fileList.files[fileList.files.length - 1])
            fileList = {
                files: []
            }
        }

        // set File list view
        if (e.target.files.length > 0) {
            e.target.parentNode.querySelector('.btcd-f-title').innerHTML = e.target.files.length + ' File Selected'
            e.target.parentNode.parentNode.querySelector('.btcd-files').innerHTML = ''
            for (let i = 0; i < e.target.files.length; i += 1) {
                let img = null
                if (e.target.files[i].type.match(/image-*/)) {
                    img = window.URL.createObjectURL(e.target.files[i])
                } else {
                    img = 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMi4wLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAzNTIgNDI5LjEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM1MiA0MjkuMTsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCgkuc3Qwe2ZpbGw6IzAwNEJCNzt9DQo8L3N0eWxlPg0KPHBhdGggZD0iTTQwOC44LDY2Ljh2MzI3LjRjMCwyNy40LDIyLjgsNDkuOCw1MC4zLDQ5LjhoMjM5LjNjMjcuNSwwLDQ5LjgtMjIuMyw0OS44LTQ5LjhWMTE2Yy0wLjEtMi42LTEuMi01LjItMy4xLTdsLTg4LjktODkuMQ0KCWMtMS45LTEuOS00LjQtMi45LTcuMS0yLjloLTE5MEM0MzEuNiwxNyw0MDguOCwzOS40LDQwOC44LDY2Ljh6IE03MTMuOCwxMDUuOUg2ODNjLTYuMywwLTEyLjQtMi41LTE2LjgtNi45DQoJYy00LjUtNC41LTctMTAuNS02LjktMTYuOHYtMzFMNzEzLjgsMTA1Ljl6IE00MjguOCw2Ni44YzAtMTYuNSwxMy45LTI5LjgsMzAuMy0yOS44aDE4MC4ydjQ1LjFjMCwxMS42LDQuNiwyMi43LDEyLjgsMzENCgljOC4yLDguMiwxOS4zLDEyLjgsMzAuOSwxMi44aDQ1LjF2MjY4LjVjMCwxNi41LTEzLjksMjkuOC0zMC4zLDI5LjhINDU5LjFjLTE2LjYsMC0zMC4zLTEzLjQtMzAuMy0yOS44VjY2Ljh6Ii8+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjc3LjIsMTY2LjlIMTMwLjZjLTUuMSwwLTkuMiw0LjEtOS4yLDkuMnM0LjEsOS4yLDkuMiw5LjJoMTQ2LjVjNS4xLDAsOS4yLTQuMSw5LjItOS4xDQoJQzI4Ni40LDE3MSwyODIuMywxNjYuOSwyNzcuMiwxNjYuOXoiLz4NCjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik05My41LDE2Ni45SDY2LjRjLTUuMSwwLTkuMiw0LjEtOS4yLDkuMnM0LjEsOS4yLDkuMiw5LjJoMjcuMWM1LjEsMCw5LjItNC4xLDkuMi05LjJTOTguNiwxNjYuOSw5My41LDE2Ni45eiINCgkvPg0KPHBhdGggY2xhc3M9InN0MCIgZD0iTTI3Ny4yLDI0MC4zSDEzMC42Yy01LjEsMC05LjIsNC4xLTkuMiw5LjJjMCw1LjEsNC4xLDkuMiw5LjIsOS4yaDE0Ni41YzUuMSwwLDkuMi00LjEsOS4yLTkuMQ0KCVMyODIuMywyNDAuNCwyNzcuMiwyNDAuM3oiLz4NCjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik05My41LDI0MC4zSDY2LjRjLTUuMSwwLTkuMiw0LjEtOS4yLDkuMmMwLDUuMSw0LjEsOS4yLDkuMiw5LjJoMjcuMWM1LjEsMCw5LjItNC4xLDkuMi05LjINCglDMTAyLjcsMjQ0LjQsOTguNiwyNDAuMyw5My41LDI0MC4zeiIvPg0KPHBhdGggY2xhc3M9InN0MCIgZD0iTTI3Ny4yLDMxMy44SDEzMC42Yy01LjEsMC05LjIsNC4xLTkuMiw5LjJjMCw1LjEsNC4xLDkuMiw5LjIsOS4yaDE0Ni41YzUuMSwwLDkuMi00LjEsOS4yLTkuMQ0KCUMyODYuNCwzMTgsMjgyLjMsMzEzLjgsMjc3LjIsMzEzLjh6Ii8+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNOTMuNSwzMTMuOEg2Ni40Yy01LjEsMC05LjIsNC4xLTkuMiw5LjJjMCw1LjEsNC4xLDkuMiw5LjIsOS4yaDI3LjFjNS4xLDAsOS4yLTQuMSw5LjItOS4yDQoJQzEwMi43LDMxNy45LDk4LjYsMzEzLjgsOTMuNSwzMTMuOHoiLz4NCjxnPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0yNjMsNDEyLjFIODljLTQxLjQsMC03NS0zMy42LTc1LTc1di0yNDVjMC00MS40LDMzLjYtNzUsNzUtNzVoMTQ3LjVjOCwwLDE1LjcsMywyMS42LDguNWw2OSw2My42DQoJCWM2LjksNi4zLDEwLjgsMTUuMywxMC44LDI0Ljd2MjIzLjJDMzM4LDM3OC40LDMwNC40LDQxMi4xLDI2Myw0MTIuMXogTTg5LDM3LjNjLTMwLjIsMC01NC43LDI0LjYtNTQuNyw1NC43djI0NQ0KCQljMCwzMC4yLDI0LjYsNTQuNyw1NC43LDU0LjdoMTc0YzMwLjIsMCw1NC43LTI0LjYsNTQuNy01NC43VjExMy44YzAtMy43LTEuNi03LjMtNC4zLTkuOGwtNjktNjMuNmMtMi4yLTItNS0zLjEtNy45LTMuMUg4OXoiLz4NCjwvZz4NCjwvc3ZnPg0K'
                }
                e.target.parentNode.parentNode.querySelector('.btcd-files').insertAdjacentHTML('beforeend', `<div>
                <img src="${img}" alt="img"  title="${e.target.files[i].name}">
                    <div>
                    <span title="${e.target.files[i].name}">${e.target.files[i].name}</span>
                    <br/>
                    <small>${getFileSize(e.target.files[i].size)}</small>
                </div>
                <button type="button" onclick="delItem(this)" data-index="${i}" title="Remove This File"><span>&times;</span></button>
                </div>`)

            }
        }

        // set eror
        if (err.length > 0) {
            for (let i = 0; i < err.length; i += 1) {
                e.target.parentNode.parentNode.querySelector('.btcd-files').insertAdjacentHTML('afterbegin', `
            <div style="background: #fff2f2;color: darkred;display:none" class="btcd-f-err">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjg2LjA1NCIgaGVpZ2h0PSIyODYuMDU0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoKIDxnPgogIDx0aXRsZT5iYWNrZ3JvdW5kPC90aXRsZT4KICA8cmVjdCBmaWxsPSJub25lIiBpZD0iY2FudmFzX2JhY2tncm91bmQiIGhlaWdodD0iNDAyIiB3aWR0aD0iNTgyIiB5PSItMSIgeD0iLTEiLz4KIDwvZz4KIDxnPgogIDx0aXRsZT5MYXllciAxPC90aXRsZT4KICA8ZyBzdHJva2U9Im51bGwiIGlkPSJzdmdfMSI+CiAgIDxwYXRoIHN0cm9rZT0ibnVsbCIgaWQ9InN2Z18yIiBmaWxsPSIjOTEwNjAxIiBkPSJtMTQzLjAyNjk5Nyw1Ni4wMDAwMDVjLTQ4LjA2MDg2NSwwIC04Ny4wMjY5OTcsMzguOTY2MTMxIC04Ny4wMjY5OTcsODcuMDI2OTk3YzAsNDguMDY2MzQyIDM4Ljk2NjEzMSw4Ny4wMjY5OTcgODcuMDI2OTk3LDg3LjAyNjk5N2M0OC4wNjYzNDIsMCA4Ny4wMjY5OTcsLTM4Ljk1NTE3OSA4Ny4wMjY5OTcsLTg3LjAyNjk5N2MwLC00OC4wNjA4NjUgLTM4Ljk2MTI2NCwtODcuMDI2OTk3IC04Ny4wMjY5OTcsLTg3LjAyNjk5N3ptMCwxNTcuNzM2MTY2Yy0zOS4wNTMxNDIsMCAtNzAuNzA5MTY5LC0zMS42NTYwMjcgLTcwLjcwOTE2OSwtNzAuNzA5MTY5czMxLjY1NjAyNywtNzAuNzA5MTY5IDcwLjcwOTE2OSwtNzAuNzA5MTY5czcwLjcwOTE2OSwzMS42NTYwMjcgNzAuNzA5MTY5LDcwLjcwOTE2OXMtMzEuNjU2MDI3LDcwLjcwOTE2OSAtNzAuNzA5MTY5LDcwLjcwOTE2OXptMC4wMDU0NzYsLTExOS41Njk1NThjLTYuMjMzMTIxLDAgLTEwLjk0OTMzNywzLjI1Mjg1NyAtMTAuOTQ5MzM3LDguNTA2OTU2bDAsNDguMTkxMDc3YzAsNS4yNTk1NzYgNC43MTU2MDgsOC41MDE0OCAxMC45NDkzMzcsOC41MDE0OGM2LjA4MTAwNCwwIDEwLjk0OTMzNywtMy4zNzc1OTIgMTAuOTQ5MzM3LC04LjUwMTQ4bDAsLTQ4LjE5MTA3N2MtMC4wMDA2MDgsLTUuMTI5MzY0IC00Ljg2ODMzMywtOC41MDY5NTYgLTEwLjk0OTMzNywtOC41MDY5NTZ6bTAsNzYuMDU2MzY0Yy01Ljk4ODUxOCwwIC0xMC44NjIzMjYsNC44NzM4MDkgLTEwLjg2MjMyNiwxMC44NjcxOTRjMCw1Ljk4MzA0MSA0Ljg3MzgwOSwxMC44NTY4NSAxMC44NjIzMjYsMTAuODU2ODVzMTAuODU2ODUsLTQuODczODA5IDEwLjg1Njg1LC0xMC44NTY4NWMtMC4wMDA2MDgsLTUuOTkzOTk0IC00Ljg2ODMzMywtMTAuODY3MTk0IC0xMC44NTY4NSwtMTAuODY3MTk0eiIvPgogIDwvZz4KICA8ZyBpZD0ic3ZnXzMiLz4KICA8ZyBpZD0ic3ZnXzQiLz4KICA8ZyBpZD0ic3ZnXzUiLz4KICA8ZyBpZD0ic3ZnXzYiLz4KICA8ZyBpZD0ic3ZnXzciLz4KICA8ZyBpZD0ic3ZnXzgiLz4KICA8ZyBpZD0ic3ZnXzkiLz4KICA8ZyBpZD0ic3ZnXzEwIi8+CiAgPGcgaWQ9InN2Z18xMSIvPgogIDxnIGlkPSJzdmdfMTIiLz4KICA8ZyBpZD0ic3ZnXzEzIi8+CiAgPGcgaWQ9InN2Z18xNCIvPgogIDxnIGlkPSJzdmdfMTUiLz4KICA8ZyBpZD0ic3ZnXzE2Ii8+CiAgPGcgaWQ9InN2Z18xNyIvPgogPC9nPgo8L3N2Zz4=" alt="img">
                    <span>${err[i]}</span>
                </div>`)
            }
            const errNods = e.target.parentNode.parentNode.querySelectorAll('.btcd-files>.btcd-f-err')
            for (let i = 0; i < errNods.length; i += 1) {
                unfade(errNods[i])
                setTimeout(() => {
                    fade(errNods[i])
                }, 3000);
                setTimeout(() => {
                    errNods[i].remove()
                }, 4000);
            }
            err = []
        }

    }
</script>

<script>
    $('.message a').click(function() {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });
</script>

<script>
    $(document).ready(function() {
        var max_fields = 5; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $("#add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="border rounded border-dashed p-2" style="margin-top: 2px"><div class="row"><div class="col-xxl-7 col-md-7"><label for="basiInput" class="form-label">Caption :</label><input type="text" class="form-control" id="question" placeholder="Caption text" name="caption_text[' + x + ']" required></div><div class="col-xxl-4 col-md-4"><label for="customername-field" class="form-label">Caption Image :</label><input type="file" class="form-control" id="caption_image" name="caption_image[' + x + ']" accept="image/png, image/jpeg, image/gif, image/webp, image/svg" onchange="readURL' + x + '(this); required"></div><div class="col-xxl-1 col-md-1"><img id="blah' + x + '" src="{{ asset('
                    social / photo.png ') }}" width="100px" hight="100px" alt="your image" /></div></div><br><a href="#" class="btn btn-outline-danger waves-effect waves-light material-shadow-none btn-sm" id="remove_field" style="float: right; margin-top: -10px"> - Remove</a></div>');
            }
        });

        $(wrapper).on("click", "#remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>




<script>
    //  Add educatiion button 
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $("#add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(`
          
                <div class="row">
                 <input type="hidden" name="education_section[${x}]" value="education_section_${x}">
                 <div class="three d-flex align-items-center gap-2">
                     <div style="width: 98%;">
                         <h1><img src="<?php echo base_url(); ?>others/images/graduate.png" width="25" height="25" alt="Personal Details">&nbsp;Education / Skilled Details Academic ${x}:</h1>
                     </div>
                    <div style="width: 2%; margin-bottom:-10px" id="remove_field">
                        <button class="btn btn-danger btn-sm"><i class="fa fa-minus" aria-hidden="true"></i></button>
                </div>

                  </div>
                       <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Name :</label>
                                <input name="EducationInstituteName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Exam/Degree Name :</label>
                                <input name="EducationExamDegreeName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Major In :</label>
                                <input name="EducationMajorIn[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Result :</label>
                                <input name="EducationResult[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">CGPA :</label>
                                <input name="EducationCGPA[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Year of Passing :</label>
                                <input name="EducationYearOfPassing[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

            </div>`);
            }
        });

        $(wrapper).on("click", "#remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            x--;
        })
    });

    //  Add Skills Summery
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_skills_wrap"); //Fields wrapper
        var add_button = $("#add_skills_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(`<div class="row">
                    <input type="hidden" name="slill_section[${x}]" value="slill_section_${x}">
                        <div class="three d-flex align-items-center gap-2">
                            <div style="width: 98%;">
                                <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp;Skills Summery ${x}:</h1>
                            </div>
                            <div style="width: 2%; margin-bottom:-10px" id="remove_skills">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Name :</label>
                                <input name="SkillsInstituteName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Course Name :</label>
                                <input name="SkillsCourseName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Completion Date :</label>
                                <input name="SkillsCompletionDate[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Duration of the Course :</label>
                                <input name="SkillsDurationCourse[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Start From :</label>
                                <input name="SkillsStartFrom[${x}]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">End To :</label>
                                <input name="SkillsEndTo[${x}]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Country :</label>
                                <input name="SkillsCountry[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Address :</label>
                                <input name="SkillsInstituteAddress[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

            </div>`);
            }
        });

        $(wrapper).on("click", "#remove_skills", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            x--;
        })
    });

    //  Add Professional Certificate
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_certificate_wrap"); //Fields wrapper
        var add_button = $("#add_certificate_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(`<div class="row">
                   <input type="hidden" name="professional_certificate[${x}]" value="professional_certificate_${x}">
                 <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/graduation-hat.png" width="25" height="25" alt="Personal Details">&nbsp;Professional Certificate Summery ${x}:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px" id="remove_certificate">
                            <button class="btn btn-danger btn-sm" ><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                      <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Name :</label>
                                <input name="ProfessionalCertificateInstituteName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Certificate Name :</label>
                                <input name="ProfessionalCertificateCertificateName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Start From :</label>
                                <input name="ProfessionalCertificateStartFrom[${x}]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">End To :</label>
                                <input name="ProfessionalCertificateEndTo[${x}]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Country :</label>
                                <input name="ProfessionalCertificateCountry[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Address :</label>
                                <input name="ProfessionalCertificateInstituteAddress[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
            </div>`);
            }
        });

        $(wrapper).on("click", "#remove_certificate", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            x--;
        })
    });

    //  Add Experience Employeement history
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_employe_history_wrap"); //Fields wrapper
        var add_button = $("#add_employe_history_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(`<div class="row">
                 <input type="hidden" name="employment_history[${x}]" value="employment_history${x}">
                   <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                        <h1><img src="<?php echo base_url(); ?>others/images/employement_history.png" width="25" height="25" alt="Personal Details">&nbsp;Employment History Experience ${x}:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px" id="remove_employe_history">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                      <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Company Name :</label>
                                <input name="ExperienceCompanyName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Designation :</label>
                                <input name="ExperienceDesignation[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Department :</label>
                                <input name="ExperienceDepartment[${x}]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Employment Duration :</label>
                                <input name="ExperienceEmploymentDuration[${x}]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Company Address :</label>
                                <input name="ExperienceCompanyAddress[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
            </div>`);
            }
        });

        $(wrapper).on("click", "#remove_employe_history", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            x--;
        })
    });


    //  English Proficiency Certificate
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_english_proficiency_wrap"); //Fields wrapper
        var add_button = $("#add_english_proficiency_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(`<div class="row">
                    <input type="hidden" name="english_proficiency_certificate[${x}]" value="english_proficiency_certificate_${x}">
                   <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                        <h1><img src="<?php echo base_url(); ?>others/images/success.png" width="25" height="25" alt="Personal Details">&nbsp;English Proficiency Certificate ${x}:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px" id="remove_eng_proficiency">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                       <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Name :</label>
                                <input name="ProficiencyInstituteName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Certificate Name :</label>
                                <input name="ProficiencyCertificateName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Skills Breakdown :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="ProficiencySkillsBreakdown[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Listening Score">Listening Score</option>
                                        <option value="Reading Score">Reading Score</option>
                                        <option value="Speaking Score">Speaking Score</option>
                                        <option value="Writing Score">Writing Score</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Overall Score :</label>
                                <input name="ProficiencyOverallScore[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Test Date :</label>
                                <input name="ProficiencyEnglisghTestDate[${x}]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Valid Date :</label>
                                <input name="ProficiencyEnglisghValidDate[${x}]" class="form-control" type="date" required>
                            </div>
                        </div>
 


            </div>`);
            }
        });

        $(wrapper).on("click", "#remove_eng_proficiency", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            x--;
        })
    });

    //  Sponsor’s Certificate Saving Account Summery 
    $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $(".input_sponsors_wrap");
        var add_button = $("#add_sponsor_button");

        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append(`<div class="row">
                <input type="hidden" name="sponsor_saving[${x}]" value="sponsor_saving_${x}">
                  <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                        <h1><img src="<?php echo base_url(); ?>others/images/savings.png" width="25" height="25" alt="Personal Details">&nbsp;Sponsor Financial Details (Saving Account ) Summery ${x} :</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px" id="remove_spnsors_proficiency">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                       <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Sponsor Name :</label>
                                <input name="SavingSponsorName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Relation with Applicant :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SavingRelationWithApplicant[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Uncle">Uncle</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Does the sponsor have a saving account? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SavingAccount[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">sponsor’s account valid for more than 6 months? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SavingSponsorSixMonths[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Available in the sponsor’s account how much? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SavingAccountHowMuch[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="5 to 10 Lac">5 to 10 Lac</option>
                                        <option value="11 to 20 Lac">11 to 20 Lac</option>
                                        <option value="21 to 30 Lac">21 to 30 Lac</option>
                                        <option value="31 to 40 Lac">31 to 40 Lac</option>
                                        <option value="40 to Above">40 to Above</option>
                                        <option value="Nill">Nill</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Bank Name :</label>
                                <input name="SavingBankName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
            </div>`);
            }
        });

        $(wrapper).on("click", "#remove_spnsors_proficiency", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            x--;
        })
    });


    //  Sponsor’s Certificate FDR Account Summery 
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_sponsors_fdr_wrap"); //Fields wrapper
        var add_button = $("#add_sponsor_fdr_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(`<div class="row">
                     <input type="hidden" name="sponsor_fdr[${x}]" value="sponsor_fdr_${x}">
                    <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                          <h1><img src="<?php echo base_url(); ?>others/images/savings.png" width="25" height="25" alt="Personal Details">&nbsp;Sponsor Financial Details (FDR Account Summery) Sponsor ${x}:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px" id="remove_spnsors_fdr_proficiency">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                       <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Sponsor Name :</label>
                                <input name="FdrSponsorName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Relation with Applicant :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="FdrRelationWithApplicant[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Uncle">Uncle</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Does the sponsor have a FDR account? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="FDRAccount[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Sponsor’s account valid for more than 6 months? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="FdrSponsorSixMonths[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Available in the sponsor’s Fdr account how much? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="FdrAccountHowMuch[${x}]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="5 to 10 Lac">5 to 10 Lac</option>
                                        <option value="11 to 20 Lac">11 to 20 Lac</option>
                                        <option value="21 to 30 Lac">21 to 30 Lac</option>
                                        <option value="31 to 40 Lac">31 to 40 Lac</option>
                                        <option value="40 to Above">40 to Above</option>
                                        <option value="Nill">Nill</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Bank Name :</label>
                                <input name="FdrBankName[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
            </div>`);
            }
        });

        $(wrapper).on("click", "#remove_spnsors_fdr_proficiency", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            x--;
        })
    });


    //  Child Details Start
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_add_childs_wrap"); //Fields wrapper
        var add_button = $("#add_childs"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(`<div class="row"> 
                  <input type="hidden" name="child_details[${x}]" value="child_details_${x}">
                    <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                          <h1><img src="<?php echo base_url(); ?>others/images/child.png" width="25" height="25" alt="Personal Details">&nbsp;Child Details ${x}:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px" id="remove_spnsors_fdr_proficiency">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Name of Child : </label>
                                <input name="NameofChild[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Date of Birth : </label>
                                <input name="ChildDateofBirth[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Religion : </label>
                                <input name="ChildReligion[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Nationality : </label>
                                <input name="ChildNationality[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">NID Number (If applicable) : </label>
                                <input name="ChildNIDNumber[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Birth Certificate Number : </label>
                                <input name="ChildBirthCertificateNumber[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Number : </label>
                                <input name="ChildPassportNumber[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Issue Date : </label>
                                <input name="ChildPassportIssueDate[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Expiry Date : </label>
                                <input name="ChildPassportExpiryDate[${x}]" class="form-control" type="text" required>
                            </div>
                        </div>
            </div>`);
            }
        });

        $(wrapper).on("click", "#remove_spnsors_fdr_proficiency", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            x--;
        })
    });
</script>



<!-- ==================================== visitor visa Application Form Start ======================= -->
<script>
    $(document).ready(function() {
        $('.insideAustraliaDiv').hide();
        $('input[name="applying_outside_australialocation"]').on('change', function() {
            // If 'Outside Australia' is selected, show the div
            if ($('#outsideAustralia').is(':checked')) {
                $('.outsideAustraliaDiv').show();
                $('.insideAustraliaDiv').hide();
            }
            // If 'In Australia' is selected, hide the div
            else if ($('#inAustralia').is(':checked')) {
                $('.outsideAustraliaDiv').hide();
                $('.insideAustraliaDiv').show();
            }
        });
    });


    // Question 4
    $(document).ready(function() {
        $('.occasionDIv').hide();
        $('input[name="occasion"]').on('change', function() {
            // If 'Outside Australia' is selected, show the div
            if ($('#occasion_Yes').is(':checked')) {
                $('.occasionDIv').show();
            }
            // If 'In Australia' is selected, hide the div
            else if ($('#occasion_No').is(':checked')) {
                $('.occasionDIv').hide();

            }
        });
    });


    $(document).ready(function() {
        $('.currentLocationDiv').hide();
        $('input[name="currentLocation"]').on('change', function() {
            if ($('#Other').is(':checked')) {
                $('.currentLocationDiv').show();
            } else {
                $('.currentLocationDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="appliedSubclass103"]').on('change', function() {
            if ($('#appliedSubclass103_Yes').is(':checked')) {
                $('.appliedSubclass103Div').show();
            } else if ($('#appliedSubclass103_No').is(':checked')) {
                $('.appliedSubclass103Div').hide();
            }
        });
    });

    $(document).ready(function() {
        $('.CitizenOtherCountryDiv').hide();
        $('input[name="CitizenOtherCountry"]').on('change', function() {
            if ($('#CitizenOtherCountry_Yes').is(':checked')) {
                $('.CitizenOtherCountryDiv').show();
            } else if ($('#CitizenOtherCountry_No').is(':checked')) {
                $('.CitizenOtherCountryDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="OtherCurrentPassports"]').on('change', function() {
            if ($('#OtherCurrentPassports_Yes').is(':checked')) {
                $('.OtherCurrentPassportsDiv').show();
            } else if ($('#OtherCurrentPassports_No').is(':checked')) {
                $('.OtherCurrentPassportsDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="HoldIdentityCard"]').on('change', function() {
            if ($('#HoldIdentityCard_Yes').is(':checked')) {
                $('.HoldIdentityCardDiv').show();
            } else if ($('#HoldIdentityCard_No').is(':checked')) {
                $('.HoldIdentityCardDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="CommunicatingEmail"]').on('change', function() {
            if ($('#CommunicatingEmail_Yes').is(':checked')) {
                $('.CommunicatingEmailDiv').show();
            } else if ($('#CommunicatingEmail_No').is(':checked')) {
                $('.CommunicatingEmailDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="AustraliaWithAnyFamilyMember"]').on('change', function() {
            if ($('#AustraliaWithAnyFamilyMember_Yes').is(':checked')) {
                $('.AustraliaWithAnyFamilyMemberDIv').show();
            } else if ($('#AustraliaWithAnyFamilyMember_No').is(':checked')) {
                $('.AustraliaWithAnyFamilyMemberDIv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="PartnerChildren"]').on('change', function() {
            if ($('#PartnerChildren_Yes').is(':checked')) {
                $('.PartnerChildrenDiv').show();
            } else if ($('#PartnerChildren_No').is(':checked')) {
                $('.PartnerChildrenDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="TravellingAustraliaOtherCountry"]').on('change', function() {
            if ($('#TravellingAustraliaOtherCountry_Yes').is(':checked')) {
                $('.TravellingAustraliaOtherCountryDiv').show();
            } else if ($('#TravellingAustraliaOtherCountry_No').is(':checked')) {
                $('.TravellingAustraliaOtherCountryDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="RelativesAustralia"]').on('change', function() {
            if ($('#RelativesAustralia_Yes').is(':checked')) {
                $('.RelativesAustralia').show();
            } else if ($('#RelativesAustralia_No').is(':checked')) {
                $('.RelativesAustralia').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="ContactsAustralia"]').on('change', function() {
            if ($('#ContactsAustralia_Yes').is(':checked')) {
                $('.ContactsAustraliaDiv').show();
            } else if ($('#ContactsAustralia_No').is(':checked')) {
                $('.ContactsAustraliaDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="CourseStudyAustralia"]').on('change', function() {
            if ($('#CourseStudyAustralia_Yes').is(':checked')) {
                $('.CourseStudyAustraliaDiv').show();
            } else if ($('#CourseStudyAustralia_No').is(':checked')) {
                $('.CourseStudyAustraliaDiv').hide();
            }
        });
    });


    $(document).ready(function() {
        $('input[name="SpentTimeAustralia"]').on('change', function() {
            if ($('#SpentTimeAustralia_Yes').is(':checked')) {
                $('.SpentTimeAustraliaDiv').show();
            } else if ($('#SpentTimeAustralia_No').is(':checked')) {
                $('.SpentTimeAustraliaDiv').hide();
            }
        });
    });


    $(document).ready(function() {
        $('input[name="HealthCareFacility"]').on('change', function() {
            if ($('#HealthCareFacility_Yes').is(':checked')) {
                $('.HealthCareFacilityDiv').show();
            } else if ($('#HealthCareFacility_No').is(':checked')) {
                $('.HealthCareFacilityDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="DoctorDentist"]').on('change', function() {
            if ($('#DoctorDentist_Yes').is(':checked')) {
                $('.DoctorDentistDiv').show();
            } else if ($('#DoctorDentist_No').is(':checked')) {
                $('.DoctorDentistDiv').hide();
            }
        });
    });


    $(document).ready(function() {
        $('input[name="Tuberculosis"]').on('change', function() {
            if ($('#Tuberculosis_Yes').is(':checked')) {
                $('.TuberculosisDiv').show();
            } else if ($('#Tuberculosis_No').is(':checked')) {
                $('.TuberculosisDiv').hide();
            }
        });
    });

    $(document).ready(function() {
        $('input[name="IncurMedicalCosts"]').on('change', function() {
            if ($('#IncurMedicalCosts_Yes').is(':checked')) {
                $('.IncurMedicalCostsDiv').show();
            } else if ($('#IncurMedicalCosts_No').is(':checked')) {
                $('.IncurMedicalCostsDiv').hide();
            }
        });
    });


    $(document).ready(function() {
        $('input[name="MedicalCondition"]').on('change', function() {
            if ($('#MedicalCondition_Yes').is(':checked')) {
                $('.MedicalConditionDiv').show();
            } else if ($('#MedicalCondition_No').is(':checked')) {
                $('.MedicalConditionDiv').hide();
            }
        });
    });


    $(document).ready(function() {
        $('input[name="UndertakenAustralianVisaLast12Month"]').on('change', function() {
            if ($('#UndertakenAustralianVisaLast12Month_Yes').is(':checked')) {
                $('.UndertakenAustralianVisaLast12MonthDIv').show();
            } else if ($('#UndertakenAustralianVisaLast12Month_No').is(':checked')) {
                $('.UndertakenAustralianVisaLast12MonthDIv').hide();
            }
        });
    });


    //  question no 39
    $(document).ready(function() {
        $('.EmploymentStatus_Unemployed_Div').hide();
        $('.EmploymentStatus_Other_Div').hide();
        $('.EmploymentStatus_Student_Div').hide();
        $('.EmploymentStatus_Retired_Div').hide();


        $('input[name="EmploymentStatus"]').on('change', function() {
            if ($('#EmploymentStatus_Employed').is(':checked')) {
                $('.EmploymentStatus_Employed_Div').show();
                $('.EmploymentStatus_Other_Div').hide();
                $('.EmploymentStatus_Student_Div').hide();
                $('.EmploymentStatus_Retired_Div').hide();
                $('.EmploymentStatus_Unemployed_Div').hide();
            } else if ($('#EmploymentStatus_Retired').is(':checked')) {
                $('.EmploymentStatus_Retired_Div').show();
                $('.EmploymentStatus_Unemployed_Div').hide();
                $('.EmploymentStatus_Other_Div').hide();
                $('.EmploymentStatus_Student_Div').hide();
                $('.EmploymentStatus_Employed_Div').hide();
            } else if ($('#EmploymentStatus_Student').is(':checked')) {
                $('.EmploymentStatus_Student_Div').show();
                $('.EmploymentStatus_Unemployed_Div').hide();
                $('.EmploymentStatus_Other_Div').hide();
                $('.EmploymentStatus_Retired_Div').hide();
                $('.EmploymentStatus_Employed_Div').hide();
            } else if ($('#EmploymentStatus_Other').is(':checked')) {
                $('.EmploymentStatus_Other_Div').show();
                $('.EmploymentStatus_Unemployed_Div').hide();
                $('.EmploymentStatus_Student_Div').hide();
                $('.EmploymentStatus_Retired_Div').hide();
                $('.EmploymentStatus_Employed_Div').hide();
            } else if ($('#EmploymentStatus_Unemployed').is(':checked')) {
                $('.EmploymentStatus_Unemployed_Div').show();
                $('.EmploymentStatus_Other_Div').hide();
                $('.EmploymentStatus_Student_Div').hide();
                $('.EmploymentStatus_Retired_Div').hide();
                $('.EmploymentStatus_Employed_Div').hide();
            }
        });
    });


    // Question 41

    $(document).ready(function() {
        $('input[name="ProvidingSupportVisitAustralia"]').on('change', function() {
            if ($('#ProvidingSupportVisitAustralia_Yes').is(':checked')) {
                $('.ProvidingSupportVisitAustraliaDiv').show();
            } else if ($('#ProvidingSupportVisitAustralia_No').is(':checked')) {
                $('.ProvidingSupportVisitAustraliaDiv').hide();
            }
        });
    });



    // Question 42
    $(document).ready(function() {
        $('input[name="PreviousApplications"]').on('change', function() {
            if ($('#PreviousApplications_Yes').is(':checked')) {
                $('.PreviousApplicationsDiv').show();
            } else if ($('#PreviousApplications_No').is(':checked')) {
                $('.PreviousApplicationsDiv').hide();
            }
        });
    });

    // Question 43
    $(document).ready(function() {
        $('input[name="AssistanceReceiveCompletingForm"]').on('change', function() {
            if ($('#AssistanceReceiveCompletingForm_Yes').is(':checked')) {
                $('.AssistanceReceiveCompletingFormDiv').show();
            } else if ($('#AssistanceReceiveCompletingForm_No').is(':checked')) {
                $('.AssistanceReceiveCompletingFormDiv').hide();
            }
        });
    });

    // Question 49
    $(document).ready(function() {
        $('input[name="PaymentMethod"]').on('change', function() {
            if ($('#PaymentMethod_CreditCard').is(':checked')) {
                $('.PaymentMethodDIv').show();
            } else {
                $('.PaymentMethodDIv').hide();
            }
        });
    });
</script>


<script>
    // Function to calculate total
    function calculateTotal() {
        const amountInput = document.getElementById("AdditionalApllicationPayment");
        const additionalApplicantsInput = document.getElementById("AdditionalApllicationAge");
        const totalInput = document.getElementById("AdditionalApplicantChargeOverAged18");

        // Convert input values to numbers (default to 0 if input is empty)
        const amount = parseFloat(amountInput.value) || 0;
        const additionalApplicants = parseInt(additionalApplicantsInput.value) || 0;

        // Calculate total
        const total = amount * additionalApplicants;

        // Display the total in the Total input field
        totalInput.value = total;


        // ========== Final Toltal ======================
        const amountInput1 = document.getElementById("SubsequentAdditionalApllicationPayment");
        const quantity2 = document.getElementById("SubsequentAdditionalApllicationAge");

        const amountConvert = parseFloat(amountInput1.value) || 0;
        const additionalApplicantsCpnvert = parseInt(quantity2.value) || 0;

        const totalInputAmout = document.getElementById("TotalAmount");

        const total2 = amountConvert * additionalApplicantsCpnvert;
        totalInputAmout.value = total + total2;
    }

    // Event listeners to call calculateTotal when inputs change
    document.getElementById("AdditionalApllicationPayment").addEventListener("input", calculateTotal);
    document.getElementById("AdditionalApllicationAge").addEventListener("input", calculateTotal);
</script>



<script>
    // Function to calculate total
    function calculateTotal() {
        const amountInput = document.getElementById("SubsequentAdditionalApllicationPayment");
        const additionalApplicantsInput = document.getElementById("SubsequentAdditionalApllicationAge");
        const totalInput = document.getElementById("SubsequentAdditionalApplicantChargeOverAged18");

        // Convert input values to numbers (default to 0 if input is empty)
        const amount = parseFloat(amountInput.value) || 0;
        const additionalApplicants = parseInt(additionalApplicantsInput.value) || 0;

        // Calculate total
        const total = amount * additionalApplicants;

        // Display the total in the Total input field
        totalInput.value = total;



        // ========== Final Toltal ======================
        const amountInput1 = document.getElementById("AdditionalApllicationPayment");
        const quantity2 = document.getElementById("AdditionalApllicationAge");

        const amountConvert = parseFloat(amountInput1.value) || 0;
        const additionalApplicantsCpnvert = parseInt(quantity2.value) || 0;

        const totalInputAmout = document.getElementById("TotalAmount");

        const total2 = amountConvert * additionalApplicantsCpnvert;
        totalInputAmout.value = total + total2;
    }

    // Event listeners to call calculateTotal when inputs change
    document.getElementById("SubsequentAdditionalApllicationPayment").addEventListener("input", calculateTotal);
    document.getElementById("SubsequentAdditionalApllicationAge").addEventListener("input", calculateTotal);
</script>


</body>

</html>