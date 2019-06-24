<!DOCTYPE html>
<html lang="en" class="Home">
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
    <title>Questions, Comments, Concerns - Dellavalle Laboratory Inc.</title>
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
        <h1>Questions, Comments, Concerns</h1>
        <h3>Let us know!</h3>
        <p>
            Please detail your experience, inquiry, or concern below and click the submit button below. If requested, a Dellavalle Laboratory, Inc. employee
            will follow up with you. This form may be completed and sent in anonymously & without fear of reprisal.
        </p>
        <form onsubmit="return ValidateForm(this);" class="needs-validation" action="http://www.SnapHost.com/captcha/send.aspx" id="qccFormWebForm" method="post" target="_top">
            <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend" value='g.dunn[[]]dellavallelab.com'>
            <input type="hidden" id="skip_Subject" name="skip_Subject" value="QCCFormEmail">
            <input type="hidden" id="skip_WhereToReturn" name="skip_WhereToReturn" value="http://www.Dellavallelab.com/thankyou.php">
            <input type="hidden" id="skip_SnapHostID" name="skip_SnapHostID" value="JTCETPXSHYN3" />
            <script type="text/javascript">
                function ValidateForm(frm) {
                    if (frm.contact.value == "yes" || frm.contact.value == "no") {
                        if (frm.Name.value == "") {
                            alert('If you wish to receive a response, Please provide your name.');
                            frm.Name.focus();
                            return false;
                        }
                    }
                    if (frm.contact.value == "yes") {
                        if (frm.Email.value == "") {
                            alert('If contact is requested, email address is required.');
                            frm.Email.focus();
                            return false;
                        }
                        if (frm.Email.value.indexOf("@") < 1 || frm.Email.value.indexOf(".") < 1) {
                            alert('Please enter a valid email address.');
                            frm.Email.focus();
                            return false;
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
                    obj.src = '';
                    var date = new Date();
                    var pos = src.indexOf('&rad=');
                    if (pos >= 0) {
                        src = src.substr(0, pos);
                    };
                    obj.src = src + '&rad=' + date.getTime();
                    return false;
                }
            </script>
            <table border="0" cellpadding="5" style="width: 75%" align="center">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td colspan="4" style="border: 1px solid #eaeaea">
                        <input type="radio" name="contact" value="yes" checked />Please contact me to follow up
                        <input type="radio" name="contact" value="no" /> I wish to not be contacted
                        <br />
                        <input type="radio" name="contact" value="nothing" />I would like to remain anonymous and wish to not be contacted
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="border: 1px solid #eaeaea">
                        <input type="radio" name="QCCC" value="Question" checked />Question
                        <input type="radio" name="QCCC" value="Comment" />Comment
                        <input type="radio" name="QCCC" value="Concern" />Concern
                        <input type="radio" name="QCCC" value="Compliment" />Compliment
                    </td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td colspan="3">
                        <input id="Name" name="Name" type="text" maxlength="60" style="width: 350px; border: 1px solid #999999" />
                    </td>
                </tr>
                <tr>
                    <td>Title & Company:</td>
                    <td colspan="3">
                        <input id="Company" name="Company" type="text" maxlength="180" style="width: 350px; border: 1px solid #999999" />
                    </td>
                </tr>
                <tr>
                    <td>Client Number:</td>
                    <td colspan="3">
                        <input id="ClientNum" name="ClientNum" type="number" min="0" placeholder="If unknown or for anonymous leave blank or enter 0." style="width: 350px; border: 1px solid #999999" />
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td colspan="3">
                        <input id="Email" name="Email" type="email" style="width: 350px; border: 1px solid #999999" />
                    </td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td colspan="3">
                        <input id="Phone" name="Phone" type="tel" pattern="[0-9]{3} [0-9]{3}-[0-9]{4}" style="width: 195px; border: 1px solid #999999" />
                        <span>Format: 123 456-7890</span>
                    </td>
                </tr>
                <tr rowspan="5">
                    <td colspan="4">
                        <textarea id="qcc" name="qcc" rows="5" cols="70" style="border: 1px solid #999999"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
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
                            </table>
                            <div class="col-sm-6">
                                <input name="skip_Submit" type="submit" class="btn btn-success" value="Send" />
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
</body>

<?php include 'PageWrappers/footer.php'; ?>

<!-- #EndTemplate -->

</html>