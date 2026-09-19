<?php

if (!isset($data)) {
    $data = json_decode(file_get_contents('default.pdf.data.json'), 1);
}

$primary = $data['primary_color'] ?? '#9B2C1F';
$accent  = $data['accent_color'] ?? '#D24716';

?>

<!DOCTYPE html>
<html>

<head>

    <style>
        @page {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            margin: 0;
            padding: 0;

            font-family: "Times New Roman", serif;

            color: #111;
        }


        /* =========================================================
   PAGE
========================================================= */
main {
    background:#ece8e1;
            padding:10px 20px 0 20px;
}

        .page {
            width: 100%;
            height: 279mm;

            position: relative;

            background: #ffffff;

            overflow: hidden;
        }


        /* =========================================================
   UNIVERSITY HEADER
========================================================= */

        .university-header {

            width: 100%;

            height: 10.5mm;

            background: <?= $primary ?>;

            color: #ffffff;

            text-align: center;

            font-size: 14px;
            font-weight: bold;

            padding-top: 2.7mm;

        }


        /* =========================================================
   MAIN AREA
========================================================= */

      .main {
        
    padding-left: 4mm;
    padding-right: 4mm;

    /*
       Reserve space for the fixed footer.
       This prevents the button/content from
       colliding with the footer.
    */
    padding-bottom: 38mm;
}


        /* =========================================================
   TITLE AREA
========================================================= */
       /* =========================================================
   TITLE
========================================================= */

.title-area {
    margin-top: 15mm;
    width: 100%;
}

.title-table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
}

.title-left {
    width: 30%;
    text-align: left;
    vertical-align: middle;
}

.title-middle {
    width: 40%;
    text-align: center;
    vertical-align: middle;
}

.title-right {
    width: 30%;
    text-align: right;
    vertical-align: middle;
}


/*
    IMPORTANT:
    These are actual table cells with fixed widths.
    No empty DIV whose dimensions mPDF can collapse.
*/

.decorative-line-left {
    width: 82px;
    height: 4px;
    background: <?= $primary ?>;;
}

.decorative-line-right {
    width: 82px;
    height: 4px;
    background: <?= $primary ?>;;
}


.title {
    color: <?= $primary ?>;;

    font-size: 16px;
    font-weight: bold;

    line-height: 1.2;
}

.subtitle {
    margin-top: 3mm;

    color: #00a651;

    font-size: 14px;
    font-style: italic;
}


.title-separator {
    width: 100%;

    height: 4px;

    background: <?= $primary ?>;;

    margin-top: 7mm;
}

        /* =========================================================
   RED SEPARATOR
========================================================= */

        .title-separator {

            width: 100%;

            height: 1mm;

            background: <?= $primary ?>;;

            margin-top: 7mm;

        }


        /* =========================================================
   DESCRIPTION
========================================================= */
        .description {
            margin-top: 18mm;

            margin-left: 1.5mm;
            margin-right: 1.5mm;

            font-size: 14px;
            line-height: 1.45;
        }


        /* =========================================================
   CONTENTS SECTION
========================================================= */
    
        .contents-section {
    margin-top: 14mm;

    margin-left: 12mm;
    margin-right: 12mm;
}

.contents-box-wrapper {
    border: 0.35mm solid <?= $accent ?>;;

    border-radius: 7mm;

    height: 47mm;

    padding: 9mm 10mm 5mm 10mm;
}


        /*
    Heading is centered independently of the box.
*/

.contents-heading {
    width: 67%;

    height: 9.5mm;

    margin-left: auto;
    margin-right: auto;

    margin-top: -4.8mm;

    background: <?= $accent ?>;

    color: #ffffff;

    border-radius: 1.5mm;

    text-align: center;

    font-size: 14px;

    padding-top: 2.3mm;
    z-index: 1000;
}

/*
    IMPORTANT:

    42mm content height
    + 10mm top padding
    + 5mm bottom padding
    ≈ 57mm total height
*/

.contents-box {

    border: 0.35mm solid <?= $accent ?>;;

    border-radius: 7mm;

    height: 42mm;

    padding: 10mm 10mm 5mm 10mm;
    margin-top:-30px!important;
}
.contents-list {
    list-style: none;

    margin: 3mm 0 0 0;

    padding: 0;

    font-size: 14px;

    line-height: 1.55;
}

.contents-list li {
    padding-left: 6mm;
}

.contents-list .bullet {
    color: <?= $accent ?>;

    display: inline-block;

    width: 6mm;

    margin-left: -6mm;
}

        /* =========================================================
   CONTENT LIST
========================================================= */

        .contents-list {

            margin: 3mm 0 0 0;

            padding-left: 8mm;

            font-size: 14px;

            line-height: 1.55;

        }


        .contents-list li {

            padding-left: 1mm;

        }


        .contents-list li::marker {

            color: <?= $primary ?>;

        }


        /* =========================================================
   ACCESS BUTTON
========================================================= */
.access-wrap {
    text-align: center;

    margin-top: 8mm;

    margin-bottom: 0;
}

.access-button {
    width: 135mm;

    /* height: 9.5mm; */

    margin-left: auto;
    margin-right: auto;

    background: <?= $accent ?>;

    color: #ffffff;

    font-size: 14px;

    text-decoration: underline;

    text-align: center;

    /* padding-top: 2.4mm; */
    padding-bottom: 10px;
    padding-top: 10px;
    display: flex;
    text-align: center;
    justify-content: center;

    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
}
.access-button a {
    color:white;
}
        /* =========================================================
   FOOTER
========================================================= */
.footer {
    position: absolute;

    left: 7mm;
    right: 7mm;

    bottom: 5mm;

    padding-top: 0;
}


        /* footer red line */

   .footer-line {
    width: 100%;

    height: 1mm;

    background: <?= $primary ?>;;

    margin-bottom: 3mm;
}


.footer-note {
    font-size: 13px;

    font-style: italic;

    line-height: 1.35;

    padding: 0 2mm 4mm 2mm;

    border-bottom: 0.3mm solid <?= $accent ?>;;
}


.footer-info {
    width: 100%;

    margin-top: 6mm;

    font-size: 10px;

    color: #777;
}
        .footer-info-table {

            width: 100%;

            border-collapse: collapse;

        }


        .footer-left {

            width: 30%;

            text-align: left;

        }


        .footer-center {

            width: 40%;

            text-align: center;

        }


        .footer-right {

            width: 30%;

            text-align: right;

        }
    </style>

</head>


<body>
    <main>

    <div class="page">


        <!-- =====================================================
         UNIVERSITY HEADER
    ====================================================== -->

        <div class="university-header">

            <?= htmlspecialchars($data['university_name'] ?? '') ?>

        </div>


        <div class="main">


            <!-- =================================================
             TITLE
        ================================================== -->
            <div class="title-area">

    <table class="title-table">

        <tr>

            <!-- LEFT LINE -->
            <td class="title-left">

                <table
                    style="
                        width:82px;
                        border-collapse:collapse;
                    "
                >
                    <tr>
                        <td
                            style="
                                width:82px;
                                height:4px;
                                background:<?= $primary ?>;
                                font-size:1px;
                                line-height:1px;
                            "
                        >
                            &nbsp;
                        </td>
                    </tr>
                </table>

            </td>


            <!-- TITLE -->
            <td class="title-middle">

                <div class="title">

                    <?= htmlspecialchars(
                        $data['title'] ?? ''
                    ) ?>

                </div>

                <div class="subtitle">

                    <?= htmlspecialchars(
                        $data['subtitle'] ?? ''
                    ) ?>

                </div>

            </td>


            <!-- RIGHT LINE -->
            <td class="title-right">

                <table
                    align="right"
                    style="
                        width:82px;
                        border-collapse:collapse;
                    "
                >
                    <tr>
                        <td
                            style="
                                width:82px;
                                height:4px;
                                background:<?= $primary ?>;
                                font-size:1px;
                                line-height:1px;
                            "
                        >
                            &nbsp;
                        </td>
                    </tr>
                </table>

            </td>

        </tr>

    </table>


    <div class="title-separator"></div>

</div>


            <!-- =================================================
             DESCRIPTION
        ================================================== -->

            <div class="description">

                <?= nl2br(
                    htmlspecialchars($data['description'] ?? '')
                ) ?>

            </div>



            <!-- =================================================
             CONTENTS
        ================================================== -->

       <div class="contents-section">

    <div class="contents-box-wrapperx">


        <!-- FLOATING TITLE -->

        <div class="contents-heading">

            <?= htmlspecialchars(
                $data['contents_title'] ?? ''
            ) ?>

        </div>


        <!-- ROUNDED BOX -->

        <div class="contents-box">

            <ul class="contents-list">

                <?php foreach (
                    ($data['contents'] ?? []) as $item
                ): ?>

                    <li>

                        <span class="bullet">○</span>

                        <?= htmlspecialchars($item) ?>

                    </li>

                <?php endforeach; ?>

            </ul>

        </div>


    </div>


    <!-- ACCESS BUTTON -->

    <div class="access-wrap">

       
        <div href="<?= $data['button_link'] ?? ''  ?>" class="access-button">
<a href="<?= $data['button_link'] ?? ''  ?>">
            <?= htmlspecialchars(
                $data['button_text'] ?? ''
            ) ?>
     </a>
        </div>
   

    </div>

</div>

        </div>



        <!-- =====================================================
         FOOTER
    ====================================================== -->

     <div class="footer">

    <div class="footer-line"></div>

    <div class="footer-note">

        <?= htmlspecialchars(
            $data['footer_note'] ?? ''
        ) ?>

    </div>


    <div class="footer-info">

        <table class="footer-info-table">

            <tr>

                <td class="footer-left">

                    <?= htmlspecialchars($data['date'] ?? '') ?>,
                    <?= htmlspecialchars($data['time'] ?? '') ?>

                </td>


                <td class="footer-center">

                    <?= htmlspecialchars(
                        $data['footer_name'] ?? ''
                    ) ?>

                </td>


                <td class="footer-right">

                    <?= htmlspecialchars(
                        $data['page_number'] ?? ''
                    ) ?>

                </td>

            </tr>

        </table>

    </div>

</div>


    </div>

    </main>
</body>

</html>