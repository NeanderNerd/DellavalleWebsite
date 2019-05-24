<!DOCTYPE html>
<html lang="en">
<?php
$x = 0;
?>

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

    <!-- Head php attachment -->
    <?php include 'PageWrappers/Head.php'; ?>
    <title>Contact Us - Dellavalle Laboratory, Inc.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php attachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1 class="text-md-left text-center">Contact Us</h1>
            <div class="row text-md-left text-center">
                <div class="col-12">
                    <h3>Laboratory</h3>
                    <p>
                        <strong>Dellavalle Laboratory, Inc.</strong>
                        <br />1910 W. McKinley Avenue,<br>Fresno CA 93728
                        <br /><strong>Phone:</strong> (800) 228-9896
                        <strong>Local:</strong> (559) 233-6129
                    </p>
                    <h3>Consulting Offices:</h3>
                    <p>
                        <strong>Dellavalle Laboratory, Inc.</strong>
                        <br />1216 N Douty Street
                        <br />Hanford CA 93230
                    </p>
                    <p>
                        <strong>Dellavalle Laboratory, Inc.</strong>
                        <br />502 Mace Boulevard, #2-B
                        <br />Davis CA 95618
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <hr>
                    <p>
                        We want to be responsive to your questions or issues. Please help us by filling out the necessary
                        information in the areas below.
                    </p>
                    <h4 class="noBold text-md-left text-center">Contact Form</h4>
                    <form onsubmit="return ValidateForm(this);" class="needs-validation" action="https://www.SnapHost.com/captcha/send.aspx" method="post" id="myform" target="_top">
                        <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend" value='c.garrick@dellavallelab.com' />
                        <input type="hidden" id="skip_Subject" name="skip_Subject" value="WebsiteFormEmail" />
                        <input type="hidden" id="skip_WhereToReturn" name="skip_WhereToReturn" value="http://www.dellavallelab.com/thankyou.php" />
                        <input type="hidden" id="skip_SnapHostID" name="skip_SnapHostID" value="JTCETPXSHYN3" />
                        <input name="skip_ShowUsersIp" type="hidden" value="1" />
                        <div class="form-group row" id="name">
                            <label for="inputName" class="col-sm-2 col-form-label">*Name</label>
                            <div class="col-sm-10">
                                <input name="name" type="text" class="form-control" id="inputName" placeholder="John Doe" required>
                                <div class="invalid-tooltip">
                                    Please provide your first and last name so that we know who we are communicating with.
                                </div>
                                <div class="valid-tooltip">
                                    This looks perfect; Thank You!
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" id="phone">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input name="phone" type="tel" pattern="[0-9]{3} [0-9]{3}-[0-9]{4}" class="form-control" id="inputPhone" placeholder="123 456-7890">
                            </div>
                        </div>
                        <div class="form-group row" id="email">
                            <label for="inputEmail" class="col-sm-2 col-form-label">*Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Example@Dellavallelab.com" required>
                                <div class="invalid-tooltip">
                                    Please provide your email address so we know how to contact you
                                </div>
                                <div class="valid-tooltip">
                                    This looks perfect; Thank You!
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" id="comque">
                            <label for="textQuestion" class="col-sm-2 col-form-label">Comments <br />&amp; Questions</label>
                            <div class="col-sm-10">
                                <textarea name="comments/questions" class="form-control" id="inputText" placeholder="How do I sample soil for a strawberry patch?"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <div class="card-header bg-transparent">
                                        <a href="http://www.snaphost.com/captcha" alt="feedback form email" title="feedback form email">
                                            feedback form email
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');">
                                            <span style="font-size:12px;">
                                                reload image
                                            </span>
                                        </a><br />
                                        <a href="http://www.snaphost.com/captcha/ProCaptchaOverview.aspx">
                                            <img id="CaptchaImage" alt="online forms html" style="border-width:0px;" title="online forms html" src="https://www.SnapHost.com/captcha/CaptchaImage.aspx?id=JTCETPXSHYN3" />
                                        </a>
                                        <br />
                                        <i>Enter Captcha code</i><br />
                                        <input id="skip_CaptchaCode" name="skip_CaptchaCode" type="text" style="width:130px; height:48px; font-size:38px;" maxlength="6" /><br />
                                    </div>
                                </div>
                            </div>
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

                                function ValidateForm(frm) {
                                    if (frm.skip_CaptchaCode.value == "") {
                                        alert('Enter valid Captcha Please');
                                        frm.skip_CaptchaCode.focus();
                                        return false;
                                    }
                                    return true;
                                }
                            </script>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Content for main section end -->

        <!-- Footer php attachemnt -->
        <?php include 'PageWrappers/footer.php'; ?>
</body>

</html>