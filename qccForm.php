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
    <title>Legal - Security Statements - Dellavalle Laboratory Inc.</title>
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
            will 
        </p>
        <form class="needs-validation" novalidate action="http://www.SnapHost.com/captcha/send.aspx" id="ContactUsCaptchaWebForm" method="post" target="_top">
            <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend" value='c.garrick@dellavallelab.com'>
            <input type="hidden" id="skip_Subject" name="skip_Subject" value="QCCFormEmail">
            <input type="hidden" id="skip_WhereToReturn" name="skip_WhereToReturn" value="thankyou.php">
            <input type="hidden" id="skip_SnapHostID" name="skip_SnapHostID" value="JTCETPXSHYN3" />
            <script type="text/javascript">
                function ValidateForm(frm) {
                    if (frm.FromEmailAddress.value != "" || frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) {
                        alert('If entering an email address, please enter a valid email address.');
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
            <table cellpadding="5" style="width: 75%">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="radio" name="QCCR" value="Question" checked />Question
                        <input type="radio" name="QCCR" value="Comment" />Comment
                        <input type="radio" name="QCCR" value="Concern" />Concern
                        <input type="radio" name="QCCR" value="Compliment" />Compliment
                    </td>
                <tr>
                    <td>Name:</td>
                    <td colspan="3">
                        <input id="Name" name="Name" type="text" placeholder="You may remain anonymous if you wish to be." maxlength="60" style="width: 350px; border: 1px solid #999999" />
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
                        <input id="ClientNum" name="Client Number" type="number" min="0" placeholder="If unknown or for anonymous leave blank or enter 0." style="width: 350px; border: 1px solid #999999" />
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td colspan="3">
                        <input id="Email" name="Email" type="email" style="width: 350px; border: 1px solid #999999" />
                    </td>
                </tr>
            </table>

</body>

<?php include 'PageWrappers/footer.php'; ?>

<!-- #EndTemplate -->

</html>