<!DOCTYPE html>
<html lang="en">
<?php $x = 0; ?>

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
    <title>Contact Us - Dellavalle Laboratory Inc.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php atachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1>Contact Us</h1>
            <div class="row">
                <div class="col-12">
                    <h3>Laboratory</h3>
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
                    <h4 class="noBold">Contact Form</h4>
                    <form action="https://www.SnapHost.com/captcha/send.aspx" method="post" id="myform" target="_top">
                        <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend" value="c.garrick@dellavallelab.com" />
                        <input type="hidden" id="skip_Subject" name="skip_Subject" value="WebsiteFormEmail" />
                        <input type="hidden" id="skip_WhereToReturn" name="skip_WhereToReturn" value="/thankyou.php" />
                        <input type="hidden" id="skip_SnapHostID" name="skip_SnapHostID" value="JTCETPXSHYN3" />
                        <input name="skip_ShowUsersIp" type="hidden" value="1" />
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" type="text" class="form-control" id="inputName" placeholder="John Doe" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input name="Phone" type="text" class="form-control" id="inputPhone" placeholder="(123) 456 - 7890" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="Email" type="text" class="form-control" id="inputEmail" placeholder="Example@Dellavallelab.com" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="textQuestion" class="col-sm-2 col-form-label">Comments <br />&amp; Questions</label>
                            <div class="col-sm-10">
                                <textarea name="Comments/Questions" class="form-control" id="inputText" placeholder="How do I sample soil for a strawberry patch?"></textarea>
                            </div>
                        </div>
                        <div class="form-group row center">
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
                                        }
                                </script>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success">Send</button>
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