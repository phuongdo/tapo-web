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
        <div class="company-desc">
            <h3>Development of bioinformatics tools for large-scale analysis of
                arrays of tandem repeats in proteins.</h3>

            <p>Dramatic growth of genomic data presents new challenges for
                scientists: making sense of millions of protein sequences requires
                systematic approaches and information about their 3D structure as
                well as their evolutionary and functional relationships. Today, the
                growth of the sequencing data significantly exceeds the growth of
                capacities to analyze these data. It is obvious that the
                immediate-term focus must be on the development of tools for
                large-scale, efficient, rapid, easy-to-use, whole and multi-genome
                analysis. Over the last two decades, the foremost efforts of
                bioinformatics scientists were devoted to proteins with aperiodic
                sequences having globular 3D structures. However, large portion of
                proteins (approximately every third human protein) also contain
                periodic sequences representing arrays of repeats that are directly
                adjacent to each other. Numerous studies have demonstrated the
                fundamental functional importance of such tandem repeats and their
                involvement in diseases. However, conventional bioinformatics
                approaches for annotation of proteomes developed for globular
                domains have limited success when applied to the regions with
                tandem repeats.
                <br/>
            <center><img src="images/Fig1.png" alt="Fig1 TRs"></center>


            </p>

            <p>The main objective of this project is to fill this gap by
                developing new computational tools for bioinformatics analysis of
                protein tandem repeats.</p>

            <p>The protein tandem repeats are frequently not perfect, containing
                a number of mutations (substitutions, indels) accumulated during
                evolution, and some of them cannot be easily identified. To solve
                this problem, over the last few years, several algorithms and
                software have been developed (see for review, Kajava, 2011).
                Depending on the size and character of the repeats some of them are
                performing better than others, but no best approach exists to cover
                the whole range of repeats. Our plan is to select the most accurate
                and rapid among them that will be able to cover the complete
                spectrum of tandem repeats. They will be used to create a
                meta-server for detection of tandem repeats. Each of these programs
                is using its own measure of the significance of found matches;
                therefore, selection and implementation of a unique measure will be
                one of the necessary steps. Necessary efforts will be made to
                optimize the meta-server for large-scale analysis of proteomes.
                <br/>


            </p>

        </div>
    </div>


    <!-- end #content -->


    <?php include('includes/footer.php'); ?>

</div>
<!-- End #wrapper -->

</body>

</html>