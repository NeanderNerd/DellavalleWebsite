<!DOCTYPE html>
<html lang="en">
<?php $x = 0; ?>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136360584-1"></script>
    <script>
        window.datalayer = window.datalayer || [];

        function gtag() {
            datalayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-136360584-1');
    </script>

    <!-- Head php attachment -->
    <?php include 'PageWrappers/Head.php'; ?>
    <title>Questions, Comments, Concerns - Dellavalle Laboratory, Inc.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaguin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php Attachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1>Feedback</h1>
            <div class="row">
                <div class="col-12">
                    <h3>Let us know!</h3>
                    <p>
                        Please detail your experience, inquiry, or concern below and click the submit button below. If requested, a Dellavalle Laboratory, Inc. employee
                        will follow up with you. this form may be completed and sent in anonymously & without fear if reprisal.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form onsubmit="return ValidateForm(this);" class="needs-validation" action="http://www.SnapHost.com/captcha/send.aspx" id="qccFormWebForm" method="post" target="_top">
                        <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend" value="c.garrick[[]]dellavallelab.com" />
                        <input type="hidden" id="skip_Subject" name="skip_Subject" value="QCCFormEmail" />
                        <input type="hidden" id="skip_WhereToReturn" name="sjip_WhereToReturn" value="http://www.dellavallelab.com/thankyou.php" />
                        <input type="hidden" id="skip_SnapHostId" name="skip_SnapHostID" value="JTCETPXSHYN3" />
                        <input type="hidden" id="skip_ShowUsersIp" name="skip_ShowUsersIp" value="1" />
                        <script type="text/javascript">
                            function ValidateForm(frm) {
                                if (frm.Contact.value == "yes" || frm.Contact.value == "no") {
                                    if (frm.Name.value == "") {
                                        alert('If you wish to recieve a response, Please provide your name.');
                                        frm.Name.focus();
                                        return false;
                                    }
                                    if (frm.Contact.value == "yes") {
                                        if (frm.Email.value == "") {
                                            alert('If contact is requested, an email address is required.');
                                            frm.Email.focus();
                                            return false;
                                        }
                                        if (frm.Email.value.indexOf("@") < 1 || frm.Email.value.indexOf(".") < 1) {
                                            alert('Please eneter a valid email address.');
                                            frm.Email.focus();
                                            return false;
                                        }
                                    }
                                }
                                if (frm.qcc.value == "") {
                                    alert('Please enter comments or questions.');
                                    frm.qcc.focus();
                                    return false;
                                }
                                if (frm.skip_CaptchaCode.value == "") {
                                    alert('Enter Captcha code.');
                                    frm.skip_CaptchaCode.focus();
                                    return false;
                                }
                                return true;
                            }

                            function ReloadCaptchaImage(captchaImageId) {
                                var obj = document.getElementById(captchaImageId);
                                var src = '' + obj.src;
                                ob.src = '';
                                var date = new Date();
                                var pos = src.indexOf('&rad=');
                                if (pos >= 0) {
                                    src = src.substr(0, pos);
                                };
                                obj.src = src + '&rad=' + date.getTime();
                                return false;
                            }
                        </script>
                        <div class="card border-success">
                            <div class="card-body text-success">
                                <!-- Contact -->
                                <div class="form-group row">
                                    <label for="Contact" class="col-md-2 col-form-label">Contact</label>
                                    <select class="form-control col-md-10" id="Contact" name="Contact">
                                        <option value="yes" selected>Please contact me to follow up</option>
                                        <option value="no">I wish to not be contacted</option>
                                        <option value="anon">I would like to remain anonymous and wish to not be contacted</option>
                                    </select>
                                </div>
                                <!-- QCCC -->
                                <div class="form-group row">
                                    <label for="QCCC" class="col-md-2 col-form-label">Type</label>
                                    <select class="form-control col-md-10" id="QCCC" name="QCCC">
                                        <option value="Question" selected>Question</option>
                                        <option value="Comment">Comment</option>
                                        <option value="Concern">Concern</option>
                                        <option value="Compliment">Compliment</option>
                                    </select>
                                </div>
                                <!-- Name -->
                                <div class="form-group row">
                                    <label for="Name" class="col-md-2 col-form-label">Name</label>
                                    <input name="Name" type="text" class="col-md-10 form-control" id="Name" placeholder="Ok to leave blank if Anonymous." />
                                </div>
                                <!-- Title & Company -->
                                <div class="form-group row">
                                    <label for="Company" class="col-md-2 col-form-label">Title &amp; Company</label>
                                    <input name="Company" type="text" class="col-md-10 form-control" id="Company" />
                                </div>
                                <!-- Client Number -->
                                <div class="form-group row">
                                    <label for="ClientNum" class="col-md-2 col-form-label">Client Number</label>
                                    <input name="ClientNum" type="number" class="col-md-10 form-control" id=ClientNum min="0" placeholder="If unknown or for anonymous leave blank or enter 0." />
                                </div>
                                <!-- Email -->
                                <div class="form-group row">
                                    <label for="Email" class="col-md-2 col-form-label">Email</label>
                                    <input name="Email" type="email" class="col-md-10 form-control" id="Email" />
                                </div>
                                <!-- Phone -->
                                <div class="form-group row">
                                    <label for="Phone" class="col-md-2 col-form-label">Phone</label>
                                    <input name="Phone" type="tel" class="col-md-10 form-control" id="Phone" pattern="[0-9]{3} [0-9]{3}-[0-9]{4}" placeholder="132 465-7980" />
                                </div>
                                <!-- qcc -->
                                <div class="form-group row">
                                    <textarea class="form-control col-md-12" id="qcc" name="qcc" rows="5" cols="70"></textarea>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-success">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="card text-center">
                                            <div class="card-header bg-transparent">
                                                <a href="http://www.snaphost.com/captcha" alt="feedback form email" title="feedback form email">
                                                    feedback form email
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <a href="#" onclick="return ReloadCaptchImage('CaptchaImage');">
                                                    <span style="font-size:12px;">
                                                        reload Image
                                                    </span>
                                                </a>
                                                <br />
                                                <a href="http://www.snaphost.com/captcha/ProCaptchaOverview.aspx">
                                                    <img id="CaptchaImage" alt="online forms html" class="img-thumbnail" title="online forms html" src="https://www.SnapHost.com/captcha/CaptchaImage.aspx?id=JTCETPXSHYN3" />
                                                </a>
                                                <br />
                                                <i>Enter Captcha code</i>
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="skip_submit" type="submit" class="btn btn-success btn-lg btn-block" value="Submit" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Content for main section end -->

        <!-- Footer php attachment -->
        <?php include 'PageWrappers/footer.php'; ?>
</body>

</html>