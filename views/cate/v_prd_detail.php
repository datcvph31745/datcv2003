<main>
    <section class="shop-details-area pt-100 pb-95">
       
        <div class="container">
        <?php foreach($prd_detail as $key => $value ) { ?>
            <div class="row">
                <div class="col-lg-7">
                    <div class="shop-details-flex-wrap">
                        <div class="shop-details-nav-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab" aria-controls="item-one" aria-selected="true"><img src="public/layout/img/product/<?php echo $value->image ?>" alt=""></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab" aria-controls="item-two" aria-selected="false"><img src="public/layout/img/product/<?php echo $value->image ?>" alt=""></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three" role="tab" aria-controls="item-three" aria-selected="false"><img src="public/layout/img/product/<?php echo $value->image ?>" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-details-img-wrap">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                    <div class="shop-details-img">
                                        <img width="90%" src="public/layout/img/product/<?php echo $value->image ?>" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                    <div class="shop-details-img">
                                        <img src="public/layout/img/product/<?php echo $value->image ?>" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="item-three" role="tabpanel" aria-labelledby="item-three-tab">
                                    <div class="shop-details-img">
                                        <img src="public/layout/img/product/<?php echo $value->image ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="shop-details-content">
                        <h3 class="title"><?php echo $value->name_product ?></h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        
                        <p class="style-name">Style Name : <?php echo $value->name ?> </p>
                        
                        <div class="price">Price : $ <?php echo $value->price ?>.00</div>
                        <div class="product-details-info">
                            <span>Size <a href="#">Guide</a></span>
                            <div class="sidebar-product-size mb-30">
                                <h4 class="widget-title">Product Size</h4>
                                <div class="shop-size-list">
                                    <ul>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-product-color">
                                <h4 class="widget-title">Color</h4>
                                <div class="shop-color-list">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="perched-info">
                            <div class="cart-plus-minus">
                                <form action="#" class="num-block">
                                    <input type="text" class="in-num" value="1" readonly="">
                                    <div class="qtybutton-box">
                                        <span class="plus"><img src="public/layout/img/icon/plus.png" alt=""></span>
                                        <span class="minus dis"><img src="public/layout/img/icon/minus.png" alt=""></span>
                                    </div>
                                </form>
                            </div>
                            <form action="cart.php" method="POST">
                                        <input type="hidden" name="product_id" value="<?php echo $value->id ?>">
                                        <input type="hidden" value="1" name="so-luong">
                                        <input type="hidden" name="ten-sp" value="<?php echo $value->name_product ?>">
                                        <input type="hidden" name="gia" value="<?php echo $value->price ?>">
                                        <input type="hidden" name="hinh" value="<?php echo $value->image ?>">
                                        <input   class="btn" name="add-cart" type="submit" value="ADD TO CART" style="text-transform: uppercase;color: #e9e9e9;padding: 8px 20px;background: #202026; margin-right: 10px;">
                                    </form>
                            <!-- <a href="cart.php" class="btn">add to cart</a> -->
                            <div class="wishlist-compare">
                                <ul>
                                    <li><a href="#"><i class="far fa-heart"></i> Add to Wishlist</a></li>
                                    <li><a href="#"><i class="fas fa-retweet"></i> Add to Compare List</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-share">
                            <ul>
                                <li>Share :</li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="product-desc-wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description Guide</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="product-desc-title mb-30">
                                    <h4 class="title">Additional information :</h4>
                                </div>
                                <p><?php echo $value-> description ?></p>
                                <div class="color-size-info">
                                    <ul>
                                        <li><span>COLOR :</span> Black, Gray</li>
                                        <li><span>SIZE :</span> XS, S, M, L</li>
                                    </ul>
                                </div>
                                <div class="additional-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Size Name</th>
                                                    <td>28</td>
                                                    <td>49</td>
                                                    <td>36</td>
                                                    <td>55</td>
                                                    <td>44</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Waist Stretch</th>
                                                    <td>19</td>
                                                    <td>38</td>
                                                    <td>31</td>
                                                    <td>55</td>
                                                    <td>44</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Hip (7½” below from waist)</th>
                                                    <td>11</td>
                                                    <td>18</td>
                                                    <td>21</td>
                                                    <td>55</td>
                                                    <td>44</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">length (Out seam)</th>
                                                    <td>28</td>
                                                    <td>31</td>
                                                    <td>19</td>
                                                    <td>55</td>
                                                    <td>44</td>
                                                    <td>34</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't
                                    distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very
                                    useful when the focus is meant to be on design, not content.</p>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="product-desc-title mb-30">
                                    <h4 class="title">Reviews (0) :</h4>
                                </div>
                                <p>Your email address will not be published. Required fields are marked</p>
                                <p class="adara-review-title">Be the first to review “Adara”</p>
                                <div class="review-rating">
                                    <span>Your rating *</span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <form action="#" class="comment-form review-form">
                                    <span>Your review *</span>
                                    <textarea name="message" id="comment-message" placeholder="Your Comment"></textarea>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="comment-check-box">
                                        <input type="checkbox" id="comment-check">
                                        <label for="comment-check">Save my name and email in this browser for the next time I comment.</label>
                                    </div>
                                    <button class="btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="related-product-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="related-product-title">
                            <h4 class="title">You May Also Like...</h4>
                        </div>
                    </div>
                </div>
                <div class="row related-product-active">
                    <?php foreach($also as $key => $value) { ?>
                    <div class="col-xl-3">
                        <div class="new-arrival-item text-center">
                            <div class="thumb mb-25">
                                <a href="shop-details.html"><img src="public/layout/img/product/<?php echo $value->image ?>" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                        <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="shop-details.html">Bomber in Cotton</a></h5>
                                <span class="price">$37.00</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>
    <!-- shop-details-area-end -->

</main>