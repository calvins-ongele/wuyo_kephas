<?php
$primary = $data['primary_color'];
$accent  = $data['accent_color'];
?>

<!DOCTYPE html>

<html>

<head>

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background: #ebe8e0;
            font-family: "Times New Roman", serif;
            color: #111;
        }


        /* --------------------------------------------------
   PAGE
-------------------------------------------------- */

        .page {
            width: 100%;
            height: 100%;
            background: white;
            position: relative;
        }


        /* --------------------------------------------------
   TOP UNIVERSITY BAR
-------------------------------------------------- */

        .university-header {
            height: 34px;
            background: <?= $primary ?>;
            color: white;

            text-align: center;

            font-size: 14px;
            font-weight: bold;

            padding-top: 8px;
        }


        /* --------------------------------------------------
   MAIN CONTENT
-------------------------------------------------- */

        .content {
            padding-left: 11px;
            padding-right: 11px;
        }


        /* --------------------------------------------------
   TITLE SECTION
-------------------------------------------------- */

        .title-section {
            position: relative;

            text-align: center;

            padding-top: 57px;
            padding-bottom: 20px;
        }


        /*
 Small lines beside title
*/

        .title-line-left,
        .title-line-right {
            position: absolute;

            top: 57px;

            height: 4px;

            background: #cc0000;
        }

        .title-line-left {
            left: 0;
            width: 82px;
        }

        .title-line-right {
            right: 0;
            width: 82px;
        }


        .title {
            color: #cc0000;

            font-size: 16px;
            font-weight: bold;

            margin: 0;
        }


        .subtitle {
            color: #00a651;

            font-size: 14px;

            font-style: italic;

            margin-top: 11px;
        }


        /*
 Red separator underneath title
*/

        .title-separator {
            height: 4px;

            background: #cc0000;

            margin-top: 20px;
        }


        /* --------------------------------------------------
   DESCRIPTION
-------------------------------------------------- */

        .description {
            font-size: 14px;

            line-height: 1.42;

            margin-top: 49px;

            margin-left: 10px;
            margin-right: 10px;
        }


        /* --------------------------------------------------
   CONTENTS BOX
-------------------------------------------------- */

        .contents-wrapper {
            position: relative;

            margin-top: 45px;

            margin-left: 33px;
            margin-right: 33px;

            height: 165px;

            border: 1px solid #96665e;

            border-radius: 26px;

            padding: 36px 40px 20px 40px;
        }


        /*
 Orange title sitting over the border
*/

        .contents-title {
            position: absolute;

            top: -17px;

            left: 73px;
            right: 73px;

            height: 37px;

            background: <?= $accent ?>;

            color: white;

            border-radius: 6px;

            text-align: center;

            padding-top: 9px;

            font-size: 14px;
        }


        /* --------------------------------------------------
   BULLET LIST
-------------------------------------------------- */

        .contents-list {
            margin: 0;

            padding-left: 20px;

            font-size: 14px;

            line-height: 1.55;
        }


        .contents-list li {
            padding-left: 2px;
        }


        /*
 Make bullets hollow red circles
*/

        .contents-list li::marker {
            color: #cc0000;
        }


        /* --------------------------------------------------
   ACCESS BUTTON
-------------------------------------------------- */

        .access-button {
            width: 415px;

            height: 35px;

            background: <?= $accent ?>;

            margin: 22px auto 0 auto;

            color: white;

            text-align: center;

            font-size: 14px;

            text-decoration: underline;

            padding-top: 9px;
        }


        /* --------------------------------------------------
   FOOTER
-------------------------------------------------- */

        .footer {
            position: absolute;

            left: 0;
            right: 0;

            bottom: 13px;

            padding-left: 11px;
            padding-right: 11px;
        }


        /*
 Footer red separator
*/

        .footer-line {
            height: 3px;

            background: #cc0000;

            margin-bottom: 11px;
        }


        /*
 Footer message
*/

        .footer-note {
            font-size: 13px;

            font-style: italic;

            line-height: 1.35;

            padding-bottom: 11px;

            border-bottom: 1px solid #f0a08d;
        }


        /*
 Bottom information
*/

        .footer-bottom {
            margin-top: 25px;

            font-size: 10px;

            color: #777;

            position: relative;
        }


        .footer-date {
            position: absolute;

            left: 0;
        }


        .footer-name {
            text-align: center;
        }


        .footer-page {
            position: absolute;

            right: 0;
        }
    </style>

</head>


<body>

    <div class="page">


        <!-- =========================================
         UNIVERSITY HEADER
    ========================================== -->

        <div class="university-header">

            <?= htmlspecialchars($data['university_name']) ?>

        </div>


        <div class="content">


            <!-- =========================================
             TITLE
        ========================================== -->

            <div class="title-section">

                <div class="title-line-left"></div>

                <div class="title-line-right"></div>


                <div class="title">

                    <?= htmlspecialchars($data['title']) ?>

                </div>


                <div class="subtitle">

                    <?= htmlspecialchars($data['subtitle']) ?>

                </div>


                <div class="title-separator"></div>

            </div>



            <!-- =========================================
             DESCRIPTION
        ========================================== -->

            <div class="description">

                <?= nl2br(htmlspecialchars($data['description'])) ?>

            </div>



            <!-- =========================================
             CONTENTS
        ========================================== -->

            <div class="contents-wrapper">


                <div class="contents-title">

                    <?= htmlspecialchars($data['contents_title']) ?>

                </div>


                <ul class="contents-list">

                    <?php foreach ($data['contents'] as $item): ?>

                        <li>
                            <?= htmlspecialchars($item) ?>
                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>



            <!-- =========================================
             ACCESS BUTTON
        ========================================== -->

            <div class="access-button">

                <?= htmlspecialchars($data['button_text']) ?>

            </div>


        </div>



        <!-- =========================================
         FOOTER
    ========================================== -->

        <div class="footer">


            <div class="footer-line"></div>


            <div class="footer-note">

                <?= htmlspecialchars($data['footer_note']) ?>

            </div>


            <div class="footer-bottom">


                <span class="footer-date">

                    <?= htmlspecialchars($data['date']) ?>

                    ,

                    <?= htmlspecialchars($data['time']) ?>

                </span>


                <div class="footer-name">

                    <?= htmlspecialchars($data['footer_name']) ?>

                </div>


                <span class="footer-page">

                    <?= htmlspecialchars($data['page_number']) ?>

                </span>


            </div>

        </div>


    </div>

</body>

</html>