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