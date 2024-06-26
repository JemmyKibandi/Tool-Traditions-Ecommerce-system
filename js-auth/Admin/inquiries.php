<?php session_start();
require_once '../frontend/frotend/dbcon.php';
?>
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
    <link rel="shortcut icon" type="image/x-icon" href="../frontend/frotend/assets/img/favicon.png">
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
                                    placeholder="Search for a Product">
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
                        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Product Image
                        </th>
                        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Product Name</th>
                        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Product Amount</th>
                        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Product Category</th>
                        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Product Description
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM product";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr style="background-color: #ffffff;">
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;">
                            <img src="img/ICON.jpg" style="width: 20px; height: 30px; border-radius: 50%;">
                        </td>
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo $row["name"]; ?></td>
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo $row["amount"]; ?></td>
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo $row["category"]; ?></td>
                        <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo $row["description"]; ?></td>

                    </tr>
                    <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    ?>
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

    <!-- Quick View Start -->
    <div class="modal fade" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="server.php" method="post" type="multipart form">
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="productName" name="productName"
                                        placeholder="Enter product name">
                                </div>
                                <div class="mb-3">
                                    <label for="productDesc" class="form-label">Description</label>
                                    <textarea class="form-control" id="productDesc" rows="3" name="productDesc"
                                        placeholder="Enter product description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="productCategory" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="productCategory" name="productCategory"
                                        placeholder="Enter product category">
                                </div>
                                <div class="mb-3">
                                    <label for="productAmount" class="form-label">Amount</label>
                                    <input type="number" step="0.01" class="form-control" id="productAmount"
                                        name="productAmount" name="productAmount" placeholder="Enter product amount">
                                </div>
                                <div style="text-align: center; margin-top: 2rem;">
                                    <button type="submit" name="product_upload_data"
                                        style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;">
                                        UPLOAD
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>