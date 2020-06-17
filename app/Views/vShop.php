<section class="titlebar">
    <div class="row">
        <div>
            <h2 id="page-title" class="title">Shop</h2>
        </div>
    </div>
</section>
<div class="row content-wrapper">
    <div class="sidebar shop-sidebar">
        <div id="secondary" class="widget-area">
            <div class="first front-widgets">
                <div id="woocommerce_product_search-2" class="widget woocommerce widget_product_search shop-widgets">
                    <form role="search" method="get" class="woocommerce-product-search">
                        <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                        <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                        <button type="submit" value="Search">Search</button>
                        <input type="hidden" name="post_type" value="product" />
                    </form>
                </div>
                <div id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories shop-widgets">
                    <h4 class="widget-title">Product categories</h4>
                    <ul class="product-categories">
                        <li class="cat-item cat-item-78 cat-parent"><a href="<?= base_url(); ?>/product-category/aqms/">AQMS</a></li>
                        <li class="cat-item cat-item-78 cat-parent"><a href="<?= base_url(); ?>/product-category/weather/">Weather</a></li>
                        <li class="cat-item cat-item-78 cat-parent"><a href="<?= base_url(); ?>/product-category/gas-detector/">Gas Detector</a></li>
                        <li class="cat-item cat-item-78 cat-parent"><a href="<?= base_url(); ?>/product-category/o2-generator/">O2 Generator</a></li>
                        <li class="cat-item cat-item-78 cat-parent"><a href="<?= base_url(); ?>/product-category/ozone-generator/">Ozone Generator</a></li>
                        <li class="cat-item cat-item-78 cat-parent"><a href="<?= base_url(); ?>/product-category/calibrator/">Calibrator</a></li>
                        <li class="cat-item cat-item-78 cat-parent"><a href="<?= base_url(); ?>/product-category/gas-chromatograph/">Gas Chromatograph</a></li>
                        <li class="cat-item cat-item-78 cat-parent"><a href="<?= base_url(); ?>/product-category/particle-and-cell-counter/">Particle and Cell Counter</a></li>
                    </ul>
                </div>
                <div id="woocommerce_layered_nav-2" class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav shop-widgets">
                    <h4 class="widget-title">Filter by City</h4>
                    <ul class="woocommerce-widget-layered-nav-list">
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="<?= base_url(); ?>/shop/?post_type=product&#038;filter_location=jakarta&#038;query_type_location=or">Jakarta</a></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="<?= base_url(); ?>/shop/?post_type=product&#038;filter_location=bandung&#038;query_type_location=or">Bandung</a></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="<?= base_url(); ?>/shop/?post_type=product&#038;filter_location=semarang&#038;query_type_location=or">Semarang</a></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="<?= base_url(); ?>/shop/?post_type=product&#038;filter_location=medan&#038;query_type_location=or">Medan</a></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="<?= base_url(); ?>/shop/?post_type=product&#038;filter_location=surabaya&#038;query_type_location=or">Surabaya</a></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="<?= base_url(); ?>/shop/?post_type=product&#038;filter_location=lampung&#038;query_type_location=or">Lampung</a></li>
                    </ul>
                </div>
            </div><!-- .first -->
        </div><!-- #secondary -->
    </div>

    <div class="main-content">
        <div class='clearfix filter-options'>
            <div class="filter-flex">
                <div class="woocommerce-notices-wrapper"></div>
                <p class="woocommerce-result-count">
                    Showing 1&ndash;8 of 1234 results</p>
                <nav class="gridlist-toggle"><a href="#" id="show_grid" title="Grid view"><span class="dashicons dashicons-grid-view"></span> <em>Grid view</em></a><a href="#" id="show_list" class="active" title="List view"><span class="dashicons dashicons-exerpt-view"></span> <em>List view</em></a></nav>
                <form class="woocommerce-ordering" method="get">
                    <select name="orderby" class="orderby" aria-label="Shop order">
                        <option value="menu_order" selected='selected'>Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by latest</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                    <input type="hidden" name="paged" value="1" />
                    <input type="hidden" name="post_type" value="product" /><input type="hidden" name="product-category" value="-1" /><input type="hidden" name="daterange" value="01/01/2018 - 01/15/2018" />
                </form>
            </div>
        </div>
        <div class="woocommerce">
            <ul class="products columns-3 list ">
                <?php foreach ($products as $key => $product) : ?>
                    <li class="product type-product post-3701 status-publish first instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class='product-image-wrapper'><a href="<?= base_url(); ?>/product/<?= $product["url"]; ?>/"><img style="width:auto;" src="<?= base_url(); ?>/assets/dist/<?= $product["image"]; ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" /></a></div>
                        <div class="product-details-wrapper">
                            <h2 class="woocommerce-loop-product__title">
                                <a href="<?= base_url(); ?>/product/prod_aqm_portable/"><?= $product["name"]; ?></a>
                            </h2>
                            <div class="pricing-location">
                                <div class="pricing-partial rates-3">
                                    <h5>Rent</h5>
                                    <ul>
                                        <li class="pricing pricing-day">
                                            <div>
                                                <p class="label">Day Rate</p>
                                                <div class="price_value">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp. </span><?= $product["dayrate"]; ?></span> <small> / Day</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pricing pricing-week">
                                            <div>
                                                <p class="label">Week Rate</p>
                                                <div class="price_value">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp. </span><?= $product["weekrate"]; ?></span> <small> / Week</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pricing pricing-fourWeek">
                                            <div>
                                                <p class="label">Month Rate</p>
                                                <div class="price_value">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp. </span><?= $product["monthrate"]; ?></span> <small> / Month</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="location"><?= $product["location"]; ?></div>
                            </div>
                            <a href="#" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="products columns-3 list">
                <li class="product type-product post-3701 status-publish first instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/telescopic-handler-copy-4/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-600x600.jpg 600w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/telescopic-handler-copy-4/">35000 – 39000 lbs, Excavator </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>290.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>630.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>3,600.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="with-operator">
                                <h5>Hire with operator</h5>
                                <div>
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>150.00</span> <small> / Hour</small>
                                </div>
                            </div>
                            <div class="location">
                                San Francisco, CA </div>
                        </div>


                        <div class="description">
                            Mel an esse salutandi, eos wisi nonumes democritum id. Eu affert dolore rationibus mel. Porro vocent ut vel. Rebum deleniti voluptua at sed, ut tollit prodesset eum, ea eos nostrud.</div>
                        <a href="?add-to-cart=3701" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3701" data-product_sku="woo-sunglasses-8" aria-label="Add “35000 - 39000 lbs, Excavator” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-6 status-publish instock product_cat-excavator has-post-thumbnail shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-excavator/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-excavator/">35000 – 39000 lbs, Excavator </a>
                        </h2>
                        <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span></div>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>165.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>640.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>3,200.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="with-operator">
                                <h5>Hire with operator</h5>
                                <div>
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>150.00</span> <small> / Hour</small>
                                </div>
                            </div>
                            <div class="location">
                                Columbus, OH </div>
                        </div>


                        <div class="description">
                            The 35,000 to 39,000 lb excavator is primarily used for excavating or earthmoving tasks such as trenching, demolition clearing, foundation digging, general landscaping tasks or backfilling excavated areas.</div>
                        <a href="?add-to-cart=6" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="6" data-product_sku="woo-hoodie" aria-label="Add “35000 - 39000 lbs, Excavator” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-11 status-publish last instock product_cat-backhoe-loader product_cat-earthmoving-equipment has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/wheel-loader/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/wheel-loader/">2800 lbs, Wheel, Skid Steer Loader </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>80.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>299.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>2,099.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="with-operator">
                                <h5>Hire with operator</h5>
                                <div>
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>150.00</span> <small> / Hour</small>
                                </div>
                            </div>
                            <div class="location">
                                Los Angeles, CA </div>
                        </div>


                        <div class="description">
                            The 2,800 lb wheel skid steer loader comes equipped with two lifting arms and tires, making it a great choice for steering and navigating on job sites with rough outdoor terrain. With over 70 horsepower (hp),</div>
                        <a href="?add-to-cart=11" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="11" data-product_sku="woo-cap" aria-label="Add “2800 lbs, Wheel, Skid Steer Loader” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-3694 status-publish first instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/telescopic-handler-copy/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0002__-copy-2-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0002__-copy-2-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0002__-copy-2-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0002__-copy-2-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0002__-copy-2-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0002__-copy-2-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/telescopic-handler-copy/">60000 – 69000 lbs, Excavator </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>290.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>630.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>3,600.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="with-operator">
                                <h5>Hire with operator</h5>
                                <div>
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>150.00</span> <small> / Hour</small>
                                </div>
                            </div>
                            <div class="location">
                                San Francisco, CA </div>
                        </div>


                        <div class="description">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</div>
                        <a href="?add-to-cart=3694" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3694" data-product_sku="woo-sunglasses-1" aria-label="Add “60000 - 69000 lbs, Excavator” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-3700 status-publish instock product_cat-bulldozer product_cat-earthmoving-equipment has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/c9-acert/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/c9-acert/">C9 ACERT </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>290.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>630.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>3,600.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="with-operator">
                                <h5>Hire with operator</h5>
                                <div>
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>150.00</span> <small> / Hour</small>
                                </div>
                            </div>
                            <div class="location">
                                Austin, TX, San Francisco, CA </div>
                        </div>


                        <div class="description">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</div>
                        <a href="?add-to-cart=3700" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3700" data-product_sku="woo-sunglasses-7" aria-label="Add “C9 ACERT” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-3989 status-publish last instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/cat-c4-4-acert-with-twin-turbo/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_0000__-copy-3-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_0000__-copy-3-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_0000__-copy-3-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_0000__-copy-3-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_0000__-copy-3-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_0000__-copy-3-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/cat-c4-4-acert-with-twin-turbo/">Cat C4.4 ACERT with Twin Turbo </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>290.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>630.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>3,600.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="with-operator">
                                <h5>Hire with operator</h5>
                                <div>
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>150.00</span> <small> / Hour</small>
                                </div>
                            </div>
                            <div class="location">
                                San Francisco, CA </div>
                        </div>


                        <div class="description">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</div>
                        <a href="?add-to-cart=3989" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3989" data-product_sku="woo-sunglasses-1-1" aria-label="Add “Cat C4.4 ACERT with Twin Turbo” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-10 status-publish first instock product_cat-telehandler has-post-thumbnail shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/telescopic-handler-2/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img13-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img13-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img13-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img13-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img13-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img13-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/telescopic-handler-2/">Heavy Duty Telehandler </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>65.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>199.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>909.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="location">
                                San Diego, CA </div>
                        </div>


                        <div class="description">
                            Telescopic Handler Isolated on White. Yellow Heavy Duty Telehandler. Rough Terrain Forklift Truck. Side View of Teleporter. Boom Lift. Cherry Pickers. Agriculture Vehicle and Industry Machine</div>
                        <a href="?add-to-cart=10" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="10" data-product_sku="woo-belt" aria-label="Add “Heavy Duty Telehandler” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-26 status-publish instock product_cat-earthmoving-equipment has-post-thumbnail shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-truck/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img3-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img3-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img3-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img3-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img3-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img3-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-truck/">Truck Crane, Isolated </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>750.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>500.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>8,500.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="location">
                                Jacksonville, FL </div>
                        </div>


                        <div class="description">
                            Yellow Truck Crane, Isolated</div>
                        <a href="?add-to-cart=26" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="26" data-product_sku="Woo-beanie-logo" aria-label="Add “Truck Crane, Isolated” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-5 status-publish last instock product_cat-dumpster has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-dumper-2/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img18-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img18-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img18-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img18-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img18-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img18-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-dumper-2/">yellow Dumper </a>
                        </h2>
                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>15.00</span> – <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>20.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                    </li>
                                </ul>
                            </div>

                            <div class="location">
                                Charlotte, NC </div>
                        </div>


                        <div class="description">
                            yellow Dumper industrial truck isolated on the white background. This has clipping path</div>
                        <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-dumper-2/" data-quantity="1" class="button product_type_variable add_to_cart_button" data-product_id="5" data-product_sku="woo-vneck-tee" aria-label="Select options for “yellow Dumper”" rel="nofollow">Select options</a>
                    </div>
                </li>
                <li class="product type-product post-16 status-publish first instock product_cat-construction-site-services product_cat-dumpster has-post-thumbnail shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-dumper/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img7-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img7-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img7-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img7-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img7-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img7-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/yellow-dumper/">yellow Dumper </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>90.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>900.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>7,099.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="location">
                                Columbus, OH </div>
                        </div>


                        <div class="description">
                            yellow Dumper industrial truck isolated on the white background. This has clipping path.</div>
                        <a href="?add-to-cart=16" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="16" data-product_sku="woo-polo" aria-label="Add “yellow Dumper” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-3699 status-publish instock product_cat-bulldozer product_cat-earthmoving-equipment has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/cat-c32-acert/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-600x600.jpg 600w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/cat-c32-acert/">Cat® C32 ACERT™ </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>290.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>630.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>3,600.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="with-operator">
                                <h5>Hire with operator</h5>
                                <div>
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>150.00</span> <small> / Hour</small>
                                </div>
                            </div>
                            <div class="location">
                                San Francisco, CA </div>
                        </div>


                        <div class="description">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</div>
                        <a href="?add-to-cart=3699" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3699" data-product_sku="woo-sunglasses-6" aria-label="Add “Cat® C32 ACERT™” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
                <li class="product type-product post-4038 status-publish last instock product_cat-construction-site-services product_cat-dumpster product_cat-storage-container product_cat-towable-light-tower has-post-thumbnail shipping-taxable purchasable product-type-simple">
                    <div class="product-image-wrapper"><a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/10-cubic-yard-2-ton-max-construction-dumpster/"><img width="700" height="700" src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_image_80-130-700x700.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_image_80-130-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_image_80-130-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_image_80-130-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_image_80-130-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/product_image_80-130-100x100.jpg 100w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
                    <div class="product-details-wrapper">
                        <h2 class="woocommerce-loop-product__title">
                            <a href="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/product/10-cubic-yard-2-ton-max-construction-dumpster/">10 Cubic Yard, 2 Ton Max, Construction Dumpster </a>
                        </h2>


                        <div class="pricing-location">
                            <div class="pricing-partial rates-3">
                                <h5>Hire</h5>
                                <ul>
                                    <li class="pricing pricing-day">
                                        <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>90.00</span> <small> / Day</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-week">
                                        <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>900.00</span> <small> / Week</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pricing pricing-fourWeek">
                                        <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>7,099.00</span> <small> / Month</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="location">
                                Austin, TX, Chicago, IL, Columbus, OH </div>
                        </div>


                        <div class="description">
                            yellow Dumper industrial truck isolated on the white background. This has clipping path.</div>
                        <a href="?add-to-cart=4038" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="4038" data-product_sku="woo-polo-1" aria-label="Add “10 Cubic Yard, 2 Ton Max, Construction Dumpster” to your cart" rel="nofollow">Add to cart</a>
                    </div>
                </li>
            </ul>
            <nav class="woocommerce-pagination">
                <ul class='page-numbers'>
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="<?= base_url(); ?>/shop/page/2/?post_type=product&#038;product-category=-1&#038;daterange=01%2F01%2F2018+-+01%2F15%2F2018">2</a></li>
                    <li><a class="page-numbers" href="<?= base_url(); ?>/shop/page/3/?post_type=product&#038;product-category=-1&#038;daterange=01%2F01%2F2018+-+01%2F15%2F2018">3</a></li>
                    <li><a class="page-numbers" href="<?= base_url(); ?>/shop/page/4/?post_type=product&#038;product-category=-1&#038;daterange=01%2F01%2F2018+-+01%2F15%2F2018">4</a></li>
                    <li><a class="page-numbers" href="<?= base_url(); ?>/shop/page/5/?post_type=product&#038;product-category=-1&#038;daterange=01%2F01%2F2018+-+01%2F15%2F2018">5</a></li>
                    <li><a class="page-numbers" href="<?= base_url(); ?>/shop/page/6/?post_type=product&#038;product-category=-1&#038;daterange=01%2F01%2F2018+-+01%2F15%2F2018">6</a></li>
                    <li><a class="next page-numbers" href="<?= base_url(); ?>/shop/page/2/?post_type=product&#038;product-category=-1&#038;daterange=01%2F01%2F2018+-+01%2F15%2F2018">&rarr;</a></li>
                </ul>
            </nav>
        </div>
    </div>