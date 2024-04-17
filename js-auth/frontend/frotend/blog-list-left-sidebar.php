<?php session_start(); ?>

<div class="tab-content">
  <div class="tab-pane fade active show" id="liton_product_grid">
      <div class="ltn__product-tab-content-inner ltn__product-grid-view">
          <div class="row">
              <?php
              $query = "SELECT * FROM medical_products";
              $result = mysqli_query($db, $query);

              if (mysqli_num_rows($result) >= 1) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      // Split the image paths by commas and select the first one
                      $imagePaths = explode(',', $row['product_images']);
                      $firstImagePath = trim($imagePaths[0]);

                      // Output the product HTML
              ?>
              <div class="col-xl-4 col-sm-6 col-6">
                  <div class="ltn__product-item ltn__product-item-3 text-center"
                      style="height:400px;">
                      <div class="product-img">
                          <a href="product-details.php">
                              <img src="uploads/<?php echo $firstImagePath; ?>"
                                  alt="Product Image" style="height:200px;">
                          </a>
                          <div class=" product-badge">
                              <ul>
                                  <li class="sale-badge">New</li>
                              </ul>
                          </div>
                          <div class="product-hover-action">
                              <ul>
                                  <li>
                                      <a href="#" title="Quick View" data-bs-toggle="modal"
                                          data-bs-target="#quick_view_modal<?php echo $row['product_id']; ?>">
                                          <i class="far fa-eye"></i>
                                      </a>
                                  </li>

                              </ul>
                          </div>
                      </div>
                      <!-- MODAL AREA START (Quick View Modal) -->
                      <div class="ltn__modal-area ltn__quick-view-modal-area">
                          <div class="modal fade"
                              id="quick_view_modal<?php echo $row['product_id']; ?>"
                              tabindex="-1">
                              <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close"
                                              data-bs-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              <!-- <i class="fas fa-times"></i> -->
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="ltn__quick-view-modal-inner">
                                              <div class="modal-product-item">
                                                  <div class="row">
                                                      <div class="col-lg-6 col-12">
                                                          <div class="modal-product-img">
                                                              <img src="<?php echo $firstImagePath; ?>"
                                                                  alt="#" />
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-6 col-12">
                                                          <div class="modal-product-info">
                                                              <div class="product-ratting">
                                                                  <ul>
                                                                      <li>
                                                                          <a href="#"><i
                                                                                  class="fas fa-star"></i></a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#"><i
                                                                                  class="fas fa-star"></i></a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#"><i
                                                                                  class="fas fa-star"></i></a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#"><i
                                                                                  class="fas fa-star-half-alt"></i></a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#"><i
                                                                                  class="far fa-star"></i></a>
                                                                      </li>
                                                                      <li
                                                                          class="review-total">
                                                                          <a href="#">
                                                                              ( 95
                                                                              Reviews
                                                                              )</a>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                              <h3>
                                                                  <a
                                                                      href="product-details.php"><?php echo $row['product_name']; ?></a>
                                                              </h3>

                                                              <hr />
                                                              <div
                                                                  class="modal-product-brief">
                                                                  <p>
                                                                      <?php echo $row['product_desc']; ?>
                                                                  </p>
                                                              </div>
                                                              <div
                                                                  class="modal-product-meta ltn__product-details-menu-1 d-none">
                                                                  <ul>
                                                                      <li>
                                                                          <strong>Categories:</strong>
                                                                          <span>
                                                                              <a
                                                                                  href="#">Parts</a>
                                                                              <a
                                                                                  href="#">Car</a>
                                                                              <a
                                                                                  href="#">Seat</a>
                                                                              <a
                                                                                  href="#">Cover</a>
                                                                          </span>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                              <div
                                                                  class="ltn__product-details-menu-2 d-none">
                                                                  <ul>
                                                                      <li>
                                                                          <div
                                                                              class="cart-plus-minus">
                                                                              <input
                                                                                  type="text"
                                                                                  value="02"
                                                                                  name="qtybutton"
                                                                                  class="cart-plus-minus-box" />
                                                                          </div>
                                                                      </li>

                                                                  </ul>
                                                              </div>
                                                              <!-- <hr> -->

                                                              <hr />
                                                              <div class="ltn__social-media">
                                                                  <ul>
                                                                      <li>Share:
                                                                      </li>
                                                                      <li>
                                                                          <a href="#"
                                                                              title="Facebook"><i
                                                                                  class="fab fa-facebook-f"></i></a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#"
                                                                              title="Twitter"><i
                                                                                  class="fab fa-twitter"></i></a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#"
                                                                              title="Linkedin"><i
                                                                                  class="fab fa-linkedin"></i></a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#"
                                                                              title="Instagram"><i
                                                                                  class="fab fa-instagram"></i></a>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                              <label class="float-end mb-0"><a
                                                                      class="text-decoration"
                                                                      href="product-details.php?product=<?php echo $row['product_id']; ?>"
                                                                      type="button"
                                                                      name="product"><small>View
                                                                          Details</small></a></label>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- MODAL AREA END -->
                      <div class="product-info">
                          <h2 class="product-title">
                              <a
                                  href="product-details.php"><?php echo $row['product_name']; ?></a>
                          </h2>
                          <div class="product-price">
                              <span><?php echo $row['product_category']; ?></span>
                          </div>
                      </div>
                  </div>
              </div>
              <?php
                  }
              }
              ?>
          </div>
      </div>
  </div>
</div>