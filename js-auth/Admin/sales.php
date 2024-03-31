<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tool Traditions Power Tools</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../frontend/frotend/assets/images/favicon.png">
    <link rel="stylesheet" href="../frontend/frotend/assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="../frontend/frotend/assets/css/style.min.css">


</head>

<body
    style="background: #ffffff; /* Old browsers */ background: -moz-linear-gradient(top,  #ffffff 0%, #d7b9ff 100%); /* FF3.6-15 */ background: -webkit-linear-gradient(top,  #ffffff 0%,#d7b9ff 100%); /* Chrome10-25,Safari5.1-6 */ background: linear-gradient(to bottom,  #ffffff 0%,#d7b9ff 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */">
    <!-- Header Start -->
    <?php include_once('headerNormal.php'); ?>
    <!-- Header End -->
    <!-- Header Mobile Start -->
    <?php include_once('headerPhone.php'); ?>
    <!-- Header Mobile End -->
    <!-- off Canvas Start -->
    <?php include_once('topPart.php'); ?>
    <!-- off Canvas End -->

    <div class="menu-overlay"></div>

    <!-- ACTIVITIES Section Start -->
    <div class="section section-padding mt-n6">
        <div class="container">
            <div style="width: 100%; margin: 20px auto;">
                <div
                    style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); overflow: hidden;">
                    <div style="padding: 20px;">
                        <div style="float: left; width: 50%;">
                            <h5 style="margin-top: 0;">All Sales</h5>
                        </div>
                        <div style="float: right; width: 50%; text-align: right;">
                            <div class="header-search" style="text-align: right;">
                                <input type="text"
                                    style="background-color: #d7b9ff; padding: 5px 10px; border-radius: 15px; border: none;"
                                    placeholder="Search a sale">
                                <button
                                    style="background-color: #d7b9ff; padding: 5px 10px; border-radius: 15px; border: none;"><i
                                        class="icon-search"></i></button>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>

            <table
                style="width: 100%; border-collapse: collapse; border-radius: 10px; overflow: hidden; border: 5px solid black;">
                <thead>
                    <tr style="background-color: #f2f2f2;">
                        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Header 1</th>
                        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Header 2</th>
                        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Header 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #ffffff;">
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;">Data 1</td>
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;">Data 2</td>
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;">Data 3</td>
                    </tr>
                    <tr style="background-color: #f2f2f2;">
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;">Data 4</td>
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;">Data 5</td>
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;">Data 6</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- ACTIVITIES Section End -->
    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icon-chevron-up"></i>
    </a>

    <!-- Modernizer & jQuery JS -->
    <script src="../frontend/frotend/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="../frontend/frotend/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="../frontend/frotend/assets/js/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="../frontend/frotend/assets/js/main.js"></script>


</body>

</html>