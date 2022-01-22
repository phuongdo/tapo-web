<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php include('includes/headerall.php'); ?>


</head>

<body>

<div id="main">

    <?php include('includes/header.php'); ?>

    <?php include('includes/nav.php'); ?>

    <div id="page">

        <h3>Quick Help and References</h3>

        <h4>Input</h4>
        <p>
            This is where you must provide information about your structure.
            There are 2 possibilities for providing the structure (i) Entering the
            4 letter PDB ID and its chain;(ii) Upload a file in PDB format. The file must conform to the PDB
            specification. (COMING SOON)

        </p>

        <h4>FAQs?</h4>

        <div class="question">

            <h5>What kind of visualizer does TAPO use for displaying 3D
                structures?</h5>

            <div class="answer">
                Currently, TAPO web-server only supports JMol (Java Applet application). The latest
                versions of Chrome, Firefox and Safari should support Java Plugin
                (see below for enabling Java Plugin in Chrome). <a
                    href="https://www.java.com/en/download/installed.jsp">Click here
                    to check whether your browser supports it..</a>
            </div>
        </div>
        <div class="question">

            <h5>A Java applet is broken. What do I do?</h5>

            <div class="answer">
                There is a pdf document for <a
                    href="/pdb/help/JavaSecuritySettings.pdf">troubleshooting Java
                    applet problems</a>.<br mce_bogus="1">

            </div>
        </div>

        <div class="question">

            <h5>How to enable Java Plugin in Chrome Version 42 and later?</h5>

            <div class="answer">
                <p>Enabling NPAPI in Chrome Version 42 and later As of Chrome
                    Version 42, an additional configuration step is required to
                    continue using NPAPI plugins.</p>

                <p>1. In your URL bar, enter: chrome://flags/#enable-npapi</p>

                <p>2. Click the Enable link for the Enable NPAPI configuration
                    option.</p>

                <p>
                    3. Click the Relaunch button that now appears at the bottom of the
                    configuration page. Developers and System administrators looking
                    for alternative ways to support users of Chrome should see this
                    blog, in particular "Running Web Start applications outside of a
                    browser" and "Additional Deployment Options" section. <br> see
                    more <a href="https: //java.com/en/download/faq/chrome.xml">https:
                        //java.com/en/download/faq/chrome.xml</a> </br>
                </p>

            </div>
        </div>


    </div>
    <!-- end #content -->


    <?php include('includes/footer.php'); ?>

</div>
<!-- End #wrapper -->

</body>

</html>