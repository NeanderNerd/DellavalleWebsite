<!DOCTYPE html>
<html lang="en">
<!-- #BeginTemplate "Templates/layout1.dwt" -->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136360584-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-136360584-1');
    </script>
    <!-- #BeginEditable "doctitle" -->
    <title>Contact Us - Dellavalle Laboratory Inc.</title>
    <!-- #BeginEditable "description" -->
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
    <!-- #EndEditable -->
</head>

<body>

    <?php include 'PageWrappers/header.php'; ?>

    <div class="clearsmall"></div>

    <?php include 'PageWrappers/leftMenu.php'; ?>

    <section id="contentRight">
        <!-- #BeginEditable "contentRight" -->
        <section id="contentRight0">
            <h1>Contact Us</h1>
            <h3>
                Laboratory</h3>
            <p>
                <strong>Dellavalle
                    Laboratory, Inc.</strong><br />
                1910 W. McKinley Avenue,<br>Fresno CA 93728<br />
                <strong>Phone:</strong> (800) 228-9896 <strong>Local:</strong>
                (559) 233-6129</p>
            <h3>Consulting Offices:</h3>
            <p> <strong>Dellavalle Laboratory, Inc.</strong><br />
                1216 N Douty Street<br>Hanford CA 93230</p>
            <p> <strong>Dellavalle Laboratory, Inc.</strong><br>502 Mace Blvd., #2-B
                <br>Davis CA 95618</p>
            <hr>
            <p>We want to be responsive to your questions or issues. Please help us by filling out the necessary
                information in the areas below.</p>
            <h4>Contact Form</h4>
            <form class="needs-validation" novalidate action="http://www.SnapHost.com/captcha/send.aspx" id="ContactUsCaptchaWebForm" method="post" target="_top">
                <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend" value='c.garrick@dellavallelab.com'>
                <input type="hidden" id="skip_Subject" name="skip_Subject" value="WebsiteFormEmail">
                <input type="hidden" id="skip_WhereToReturn" name="skip_WhereToReturn" value="http://www.dellavallelab.com/thankyou.php">
                <input type="hidden" id="skip_SnapHostID" name="skip_SnapHostID" value="JTCETPXSHYN3" />
                <script type="text/javascript">
                    function ValidateForm(frm) {
                        if (frm.Name.value == "") {
                            alert('Name is required.');
                            frm.Name.focus();
                            return false;
                        }
                        if (frm.FromEmailAddress.value == "") {
                            alert('Email address is required.');
                            frm.FromEmailAddress.focus();
                            return false;
                        }
                        if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") <
                            1) {
                            alert('Please enter a valid email address.');
                            frm.FromEmailAddress.focus();
                            return false;
                        }
                        if (frm.Comments.value == "") {
                            alert('Please enter comments or questions.');
                            frm.Comments.focus();
                            return false;
                        }
                        if (frm.CaptchaCode.value == "") {
                            alert('Enter web form code.');
                            frm.CaptchaCode.focus();
                            return false;
                        }
                        return true;
                    }
                </script>
                <table border="0" cellpadding="5" style="width: 75%" align="center">
                    <tr>
                        <td>Name*:</td>
                        <td style="width: 418px"><input id="Name" name="Name" type="text" maxlength="60" style="width:75%; border:1px solid #999999" /></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td style="width: 418px"><input id="PhoneNumber" name="PhoneNumber" type="text" maxlength="43" style="width:75%; border:1px solid #999999" /></td>
                    </tr>
                    <tr>
                        <td>Email:*:</td>
                        <td style="width: 418px"><input id="FromEmailAddress" name="FromEmailAddress" type="text" maxlength="60" style="width:75%; border:1px solid #999999" /></td>
                    </tr>
                    <tr>
                        <td valign="top" class="left">Comments and questions*:</td>
                        <td style="width: 418px"><textarea name="Comments" id="Comments" rows="7" cols="40" style="width:75%; border:1px solid #999999"></textarea></td>
                    </tr>
                    <div class="col-sm-6">
                        <table class="table table-dark">
                            <tr>
                                <th scope="row" colspan="2" style="padding-bottom:1px;">
                                    <a href="http://www.snaphost.com/captcha" alt="feedback form email" title="feedback form email">
                                        feedback form email
                                    </a>
                                </th>
                            </tr>
                            <tr valign="bottom">
                                <th scope="row">
                                    <a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');">
                                        <span style="font-size:12px;">
                                            reload image
                                        </span>
                                    </a><br />
                                    <a href="http://www.snaphost.com/captcha/ProCaptchaOverview.aspx">
                                        <img id="CaptchaImage" alt="online forms html" style="border-width:0px;" title="online forms html" src="https://www.SnapHost.com/captcha/CaptchaImage.aspx?id=JTCETPXSHYN3" />
                                    </a>
                                </th>
                                <td><br />
                                    <i>Enter Captcha code</i><br />
                                    <input id="skip_CaptchaCode" name="skip_CaptchaCode" type="text" style="width:130px; height:48px; font-size:38px;" maxlength="6" /><br />
                                </td>
                            </tr>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success">Send</button>
                            </div>
                        </table>
                        <script type="text/javascript">
                            function ReloadCaptchaImage(captchaImageId) {
                                var obj = document.getElementById(captchaImageId);
                                var src = '' + obj.src;
                                obj.src = '';
                                var date = new Date();
                                var pos = src.indexOf('&rad=');
                                if (pos >= 0) {
                                    src = src.substr(0, pos);
                                };
                                obj.src = src + '&rad=' + date.getTime();
                                return false;
                            };

                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    var forms = document.getElementsByClassName('needs-validation');
                                    var texts = document.getElementsByClassName('form-group row');
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                            Array.prototype.filter.call(texts, function(text) {
                                                var x = text.getAttribute('id');
                                                if (x == 'name' || x == 'email') {
                                                    text.classList.add('pb-4');
                                                };
                                            });
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                    </div>
                </table>
            </form>
        </section>
        <h6>&nbsp;</h6>
        <!-- #EndEditable -->

</body>

<?php include 'PageWrappers/footer.php'; ?>

<!-- #EndTemplate -->

</html>