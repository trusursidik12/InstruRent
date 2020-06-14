          <!-- content  -->
          <main class="l-main row">
            <div class="main large-12 small-12 columns">
              <article>
                <div class="body field clearfix ">
                  <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1568850484830 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='' data-heighttablet='' data-heightdesktop='230'></div>
                          <div class="wd-heading text-center" data-devia-animate=''>
                            <h2 style="font-size:60px;color:#ffffff;text-shadow: 2px 2px #000000;" class="title_b" data-text="Find your lab instruments and more!">Rent your needs. </h2>
                            <p style="font-size:18px;color:#ffffff;text-shadow: 2px 2px #000000;" class="sub_title_b">Find your lab instruments and more! </p>
                          </div>
                          <div class='wd_empty_space' data-heightmobile='30' data-heighttablet='' data-heightdesktop='40'></div>
                          <script type="text/javascript" src="<?= base_url(); ?>/assets/dist/js/moment.min.js"></script>
                          <script type="text/javascript" src="<?= base_url(); ?>/assets/dist/js/daterangepicker.min.js"></script>
                          <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/dist/css/daterangepicker.css" />
                          <script>
                            jQuery(document).ready(function($) {

                              $('input[name="daterange"]').daterangepicker({
                                opens: 'left'
                              }, function(start, end, label) {
                                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                              });

                              function formatProduct(product) {
                                var img = markup = "";
                                if (!product.image) {} else {
                                  img = '<img src="' + product.image + '" class="img-flag" style=" max-width: 30px; "/>';
                                }
                                markup = '<span>' + img + ' ' + product.text + '</span>';
                                return markup;
                              }

                              var ajaxurl = '<?= base_url(); ?>/wp-admin/admin-ajax.php';
                              $('#product_name').select2({
                                placeholder: 'What are you looking for?',
                                allowClear: true,
                                closeOnSelect: false,
                                minimumInputLength: 2,
                                width: 'resolve',
                                escapeMarkup: function(markup) {
                                  return markup;
                                }, // let our custom formatter work
                                templateResult: formatProduct,
                                templateSelection: formatProduct,
                                tags: true, // Dynamic option creation
                                createTag: function(params) {
                                  var term = $.trim(params.term);

                                  if (term === '') {
                                    return null;
                                  }

                                  return {
                                    id: term,
                                    text: term,
                                    newTag: true // add additional parameters
                                  }
                                },
                                ajax: {
                                  url: ajaxurl, // AJAX URL is predefined in WordPress admin
                                  dataType: 'json',
                                  delay: 100, // delay in ms while typing when to perform a AJAX search
                                  data: function(params) {
                                    return {
                                      q: params.term, // search query
                                      term: $("#term").value, // search query
                                      action: ' ' // AJAX action for admin-ajax.php
                                    };
                                  },
                                  processResults: function(data) {
                                    var options = [];
                                    if (data) {
                                      // data is the array of arrays, and each of them contains ID and the Label of the option
                                      $.each(data, function(index, text) { // do not forget that "index" is just auto incremented value
                                        options.push({
                                          image: text[2],
                                          id: text[1],
                                          text: text[1]
                                        });
                                      });
                                    }
                                    return {
                                      results: options
                                    };
                                  },
                                  cache: true
                                },
                              });
                              $('#product_name').on("select2-close", function() {
                                console.log("close");
                              });
                            });
                          </script>
                          <div class="brands_form  one_line devia-anim item-target" data-devia-animate='{"triggerHandler":"inview","animationTarget":".item-target","duration":"1200","delay":"150",
                              "initValues":{"y":41,"z":-118,"rotateX":-65,"opacity":0},
                              "animations":{"y":0,"z":0,"rotateX":0,"opacity":1,"delay":2,"ease":"easeOutQuint"}}'>
                            <div class='html-before item-target'></div>
                            <form role="search" method="get" action="<?= base_url(); ?>/shop/">
                              <ul class="inline-list">
                                <li class="item-target">
                                  <input type="hidden" name="post_type" value="product">
                                  <select name="s" id="product_name"></select>
                                </li>
                                <li class="item-target">
                                  <select name='product-category' id='term' class='product_categories'>
                                    <option value='-1'>Select category</option>
                                    <option class="level-0" value="boom-lift">Boom Lift (9)</option>
                                    <option class="level-1" value="articulating-boom-lift"> Articulating Boom Lift (5)</option>
                                    <option class="level-1" value="telescopic-boom-lift"> Telescopic Boom Lift (4)</option>
                                    <option class="level-0" value="scissor-lift">Scissor Lift (7)</option>
                                    <option class="level-1" value="electric-scissor-lift"> Electric Scissor Lift (5)</option>
                                    <option class="level-1" value="rough-terrain-scissor-lift"> Rough Terrain Scissor Lift (4)</option>
                                    <option class="level-0" value="forklift">Forklift (5)</option>
                                    <option class="level-1" value="industrial-forklift"> Industrial Forklift (0)</option>
                                    <option class="level-1" value="pallet-jack"> Pallet Jack (1)</option>
                                    <option class="level-1" value="telehandler"> Telehandler (2)</option>
                                    <option class="level-0" value="manlift">Manlift (1)</option>
                                    <option class="level-1" value="self-propelled-manlift"> Self Propelled Manlift (1)</option>
                                    <option class="level-0" value="earthmoving-equipment">Earthmoving Equipment (22)</option>
                                    <option class="level-1" value="backhoe-loader"> Backhoe Loader (1)</option>
                                    <option class="level-1" value="bulldozer"> Bulldozer (6)</option>
                                    <option class="level-1" value="mini-excavator"> Mini Excavator (7)</option>
                                    <option class="level-1" value="excavator"> Excavator (7)</option>
                                    <option class="level-0" value="compaction-equipment">Compaction Equipment (9)</option>
                                    <option class="level-1" value="double-drum-roller"> Double Drum Roller (4)</option>
                                    <option class="level-1" value="single-drum-roller"> Single Drum Roller (6)</option>
                                    <option class="level-0" value="construction-site-services">Construction Site Services (10)</option>
                                    <option class="level-1" value="dumpster"> Dumpster (6)</option>
                                    <option class="level-1" value="storage-container"> Storage Container (7)</option>
                                    <option class="level-1" value="towable-light-tower"> Towable Light Tower (5)</option>
                                    <option class="level-0" value="carry-deck-crane">Carry Deck Crane (9)</option>
                                    <option class="level-1" value="2-5-9-ton"> 2.5 – 9 Ton (5)</option>
                                    <option class="level-1" value="10-30-ton"> 10 – 30 Ton (4)</option>
                                  </select>
                                </li>
                                <li class="daterange item-target">
                                  <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                </li>
                                <li class="item-target">
                                  <div class="submit-button item-target">
                                    <input type="submit" class="button" value="Search">
                                  </div>
                                </li>
                              </ul>
                            </form>
                            <div class='html-after item-target'></div>
                          </div>
                          <div class="wpb_text_column wpb_content_element  vc_custom_1562340542408">
                            <div class="wpb_wrapper">
                              <p style="text-align: center; color: #fff;">Or list all available equipment in <a href="shop/">marketplace.</a></p>
                            </div>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="30" data-heighttablet="130px" data-heightdesktop="200"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='50' data-heighttablet='50' data-heightdesktop='100'></div>
                          <div class="wd-heading text-left" data-devia-animate=''>
                            <h2 style="font-weight:800;" class="title_a" data-text="Let's Choose">
                              Categories </h2>
                            <pclass="sub_title_a">
                              Let's Choose </p>
                              <hr class='hr_a' style=' margin: 10px 0;' />
                          </div>
                          <div class='wd_empty_space' data-heightmobile='20' data-heighttablet='20' data-heightdesktop='60'></div>
                          <div class="woocommerce columns-4">
                            <ul class="products columns-4 grid ">
                              <li class="product-category product first">
                                <a href="<?= base_url(); ?>/product-category/aqms/"><img src="<?= base_url(); ?>/assets/dist/images/cat_aqms.jpg" alt=AQMS" width="700" height="700" />
                                  <h2 class="woocommerce-loop-category__title">
                                    AQMS
                                  </h2>
                                </a></li>
                              <li class="product-category product">
                                <a href="<?= base_url(); ?>/product-category/weather/"><img src="<?= base_url(); ?>/assets/dist/images/cat_weather.jpg" alt="Weather" width="700" height="700" sizes="(max-width: 700px) 100vw, 700px" />
                                  <h2 class="woocommerce-loop-category__title">
                                    Weather
                                  </h2>
                                </a></li>
                              <li class="product-category product">
                                <a href="<?= base_url(); ?>product-category/gas-detector/"><img src="<?= base_url(); ?>/assets/dist/images/cat_gas_detector.jpg" alt="Gas Detector" width="700" height="700" />
                                  <h2 class="woocommerce-loop-category__title">
                                    Gas Detector
                                  </h2>
                                </a></li>
                              <li class="product-category product last">
                                <a href="<?= base_url(); ?>product-category/o2-generator/"><img src="<?= base_url(); ?>/assets/dist/images/cat_o2_generator.jpg" alt="O2 Generator" width="700" height="700" />
                                  <h2 class="woocommerce-loop-category__title">
                                    O2 Generator
                                  </h2>
                                </a></li>
                              <li class="product-category product first">
                                <a href="<?= base_url(); ?>product-category/ozone-generator/"><img src="<?= base_url(); ?>/assets/dist/images/cat_ozone_generator.jpg" alt="Ozone Generator" width="700" height="700" />
                                  <h2 class="woocommerce-loop-category__title">
                                    Ozone Generator
                                  </h2>
                                </a></li>
                              <li class="product-category product">
                                <a href="<?= base_url(); ?>product-category/calibrator/"><img src="<?= base_url(); ?>/assets/dist/images/cat_calibrator.jpg" alt="Calibrator" width="700" height="700" />
                                  <h2 class="woocommerce-loop-category__title">
                                    Calibrator
                                  </h2>
                                </a></li>
                              <li class="product-category product">
                                <a href="<?= base_url(); ?>product-category/gas-chromatograph/"><img src="<?= base_url(); ?>/assets/dist/images/cat_gas_chromatography.jpg" alt="Gas Chromatograph" width="700" height="700" />
                                  <h2 class="woocommerce-loop-category__title">
                                    Gas Chromatograph
                                  </h2>
                                </a></li>
                              <li class="product-category product last">
                                <a href="<?= base_url(); ?>product-category/particle-and-cell-counter/"><img src="<?= base_url(); ?>/assets/dist/images/cat_particle_and_cell_counter.jpg" alt="Particle and Cell Counter" width="700" height="700" sizes="(max-width: 700px) 100vw, 700px" />
                                  <h2 class="woocommerce-loop-category__title">
                                    Particle and Cell Counter
                                  </h2>
                                </a></li>
                            </ul>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="10" data-heighttablet="25" data-heightdesktop="25">
                          </div>
                          <div class="wd-btn-wrap text-center ">
                            <a href="<?= base_url(); ?>equipment-categories/" class="wd-btn btn-solid btn-color-1 hover-color-3 btn-medium btn-none  icon-after">
                              Find More </a>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="100" data-heighttablet="200" data-heightdesktop="200">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid moved-box moved-box--left">
                    <div class="wpb_column vc_column_container vc_col-sm-7">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='0' data-heighttablet='0' data-heightdesktop='0'></div>
                          <div class="wd-heading text-left  devia-anim  " data-split-options='{"type":"lines"}' data-split-text='true' data-split-target='.animation_target' data-devia-animate='{"triggerHandler":"inview","animationTarget":".item_target","duration":"500","delay":"150","initValues":{"y":250,"z":150,"opacity":0},"animations":{"y":0,"z":0,"opacity":1,"ease":"Power3.easeOut"}}'>
                            <h2 style="font-weight:800;" class="title_b animation_target" data-text="SOME FEATURES AND">
                              The Benefits of using AQMS today </h2>
                          </div>
                          <div class='wd_empty_space' data-heightmobile='5' data-heighttablet='5' data-heightdesktop='5'></div>
                          <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                              <p>Designed for best outdoor performance, our integrated air monitoring systems are easy to operate and accurately measure ambient air for any business activities, industrial sites, urban environments, smart city networks, and compliance to government regulation.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-5">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wpb_single_image wpb_content_element vc_align_left">
                            <figure class="wpb_wrapper vc_figure">
                              <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="<?= base_url(); ?>/assets/dist/uploads/aqm.png" width="578" height="704" alt="AQMS" title="AQMS" /></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="20" data-heightdesktop="40">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570125319426 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner vc_custom_1568992250492">
                        <div class="wpb_wrapper">
                          <div class="wd-clients-carousel wd-clients-carousel--small style_1" data-slick='{"arrows":false}' data-clientshow="7">
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153616_envilab.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153559_beraucoal.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153537_badak_lng.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_103235_unilab.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/28-05-2020_144022_adaro_envirocoal.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/28-05-2020_143947_syslab.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/28-05-2020_143914_als.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/28-05-2020_143855_klhk.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153820_vale.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153806_sucofindo.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153748_rum.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153735_otsuka.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153722_nippon_shokubai.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153659_kan.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153645_intertek.png" width="117" height="75" alt="">
                            </div>
                            <div class="wd-clients-carousel-item ">
                              <img class="none " src="<?= base_url(); ?>/assets/dist/partners/29-05-2020_153631_indofood.png" width="117" height="75" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='50' data-heighttablet='50' data-heightdesktop='100'></div>
                          <div class="wd-heading text-left" data-devia-animate=''>
                            <h2 class="title_a" data-text="Our Best">
                              Features </h2>
                            <p class="sub_title_a">
                              Our Best </p>
                            <hr class='hr_a' style=' margin: 10px 0;' />
                          </div>
                          <div class='wd_empty_space' data-heightmobile='20' data-heighttablet='20' data-heightdesktop='50'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                            <div class="text-icon__container  left ">
                              <div class="text-icon__icon-box ">
                                <img src="//placehold.it/408x278/eee/222/&text=+" alt="precision-icon" data-src="<?= base_url(); ?>/assets/dist/icons/precision-icon.svg" data-srcset="" class="lazy">
                              </div>
                              <div class="text-icon__content-box">
                                <h4 class="text-icon__title ">
                                  Precison </h4>
                                <p class="text-icon__text  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                            <div class="text-icon__container  left ">
                              <div class="text-icon__icon-box ">
                                <img src="//placehold.it/408x278/eee/222/&text=+" alt="study-icon" data-src="<?= base_url(); ?>/assets/dist/icons/study-icon.svg" data-srcset="" class="lazy">
                              </div>
                              <div class="text-icon__content-box">
                                <h4 class="text-icon__title ">
                                  Study </h4>
                                <p class="text-icon__text  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                            <div class="text-icon__container  left ">
                              <div class="text-icon__icon-box ">
                                <img src="//placehold.it/408x278/eee/222/&text=+" alt="no-delay-icon" data-src="<?= base_url(); ?>/assets/dist/icons/no-delay-icon.svg" data-srcset="" class="lazy">
                              </div>
                              <div class="text-icon__content-box">
                                <h4 class="text-icon__title ">
                                  No delay </h4>
                                <p class="text-icon__text  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                            <div class="text-icon__container  left ">
                              <div class="text-icon__icon-box ">
                                <img src="//placehold.it/408x278/eee/222/&text=+" alt="study-icon" data-src="<?= base_url(); ?>/assets/dist/icons/study-icon.svg" data-srcset="" class="lazy">
                              </div>
                              <div class="text-icon__content-box">
                                <h4 class="text-icon__title ">
                                  Study </h4>
                                <p class="text-icon__text  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                              <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="<?= base_url(); ?>/assets/dist/uploads/features.png" width="420" height="290" alt="features" title="features" /></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                            <div class="text-icon__container  left ">
                              <div class="text-icon__icon-box ">
                                <img src="<?= base_url(); ?>/assets/dist/icons/precision-icon.svg" class="lazy">
                              </div>
                              <div class="text-icon__content-box">
                                <h4 class="text-icon__title ">
                                  Precison </h4>
                                <p class="text-icon__text  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="50" data-heightdesktop="200"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid moved-box moved-box--right">
                    <div class="wpb_column vc_column_container vc_col-sm-5">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wpb_single_image wpb_content_element vc_align_left">
                            <figure class="wpb_wrapper vc_figure">
                              <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="<?= BASE_URL(); ?>/assets/dist/uploads/rata-icon.png" width="578" height="578" alt="RATA" title="RATA" /></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-7">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='0' data-heighttablet='0' data-heightdesktop='0'></div>
                          <div class="wd-heading text-left  devia-anim  " data-split-options='{"type":"lines"}' data-split-text='true' data-split-target='.animation_target' data-devia-animate='{"triggerHandler":"inview","animationTarget":".item_target","duration":"500","delay":"150","initValues":{"y":250,"z":150,"opacity":0},"animations":{"y":0,"z":0,"opacity":1,"ease":"Power3.easeOut"}}'>
                            <h2 style="font-weight:800;" class="title_b animation_target" data-text="SOME FEATURES AND">
                              RELATIVE ACCURACY TEST AUDIT (RATA) </h2>
                          </div>
                          <div class='wd_empty_space' data-heightmobile='5' data-heighttablet='5' data-heightdesktop='5'></div>
                          <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                              <p>RATA is the Relative Accuracy Test Audit, which is a quality assurance system that compares data from Continuous Emissions Monitoring Systems (CEMS) of a facility to an independent and reliable data source. While CEMS ensure that air emission pollutants are within set limits and standards, it is the RATA that ensures CEMS are producing accurate readings.</p>
                            </div>
                          </div>
                          <div class="wd-btn-wrap text-left ">
                            <a href="#" class="wd-btn btn-solid btn-color-1 hover-color-3 btn-medium btn-none  icon-after"> Find More </a>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="20" data-heightdesktop="36"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid hide">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='50' data-heighttablet='50' data-heightdesktop='140'></div>
                          <div class="wd-heading text-left" data-devia-animate=''>
                            <h2 class="title_a" data-text="Case Studies">
                              Case Studies </h2>
                            <p class="sub_title_a">
                              Case Studies </p>
                            <hr class='hr_a' style=' margin: 10px 0;' />
                          </div>
                          <div class='wd_empty_space' data-heightmobile='40' data-heighttablet='60' data-heightdesktop='60'></div>
                          <div class="row wd-case-std ">
                            <div class="columns small-12 large-6">
                              <div class="wd-case-std__thumbnail">
                                <img src="" alt="bulldozer">
                              </div>
                              <div class="wd-case-std__content">
                                <h4 class="wd-case-std__title">
                                  <a href="#">Best Practices of HR management</a>
                                </h4>
                              </div>
                            </div>
                            <div class="columns small-6 large-3">
                              <div class="wd-case-std__thumbnail">
                                <img src="" alt="2-truck">
                              </div>
                              <div class="wd-case-std__content">
                                <h4 class="wd-case-std__title">
                                  <a href="#">10 Tips to Find Best AQMS</a>
                                </h4>
                              </div>
                            </div>
                            <div class="columns small-6 large-3">
                              <div class="wd-case-std__thumbnail">
                                <img src="" alt="1-backhoe">
                              </div>
                              <div class="wd-case-std__content">
                                <h4 class="wd-case-std__title">
                                  <a href="#">How to Setup a Construction Site</a>
                                </h4>
                              </div>
                            </div>
                            <div class="columns small-6 large-3">
                              <div class="wd-case-std__thumbnail">
                                <img src="" alt="slider-agriculture-bg">
                              </div>
                              <div class="wd-case-std__content">
                                <h4 class="wd-case-std__title">
                                  <a href="#">Fully researched data and enterprise process improvements</a>
                                </h4>
                              </div>
                            </div>
                            <div class="columns small-6 large-3">
                              <div class="wd-case-std__thumbnail">
                                <img src="" alt="2-truck">
                              </div>
                              <div class="wd-case-std__content">
                                <h4 class="wd-case-std__title">
                                  <a href="#">high-impact infrastructures vis-a-vis efficient customer service</a>
                                </h4>
                              </div>
                            </div>
                            <div class="columns small-6 large-3">
                              <div class="wd-case-std__thumbnail">
                                <img src="" alt="Home">
                              </div>
                              <div class="wd-case-std__content">
                                <h4 class="wd-case-std__title">
                                  <a href="#">Professionally cultivate one-to-one customer service</a>
                                </h4>
                              </div>
                            </div>
                            <div class="columns small-6 large-3">
                              <div class="wd-case-std__thumbnail">
                                <img src="" alt="agri_slider">
                              </div>
                              <div class="wd-case-std__content">
                                <h4 class="wd-case-std__title">
                                  <a href="#">Podcasting operational change management</a>
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='100' data-heighttablet='40' data-heightdesktop='170'></div>
                          <div class="wd-heading text-left" data-devia-animate=''>
                            <h2 class="title_a" data-text="Our Latest">
                              Featured Offers </h2>
                            <p class="sub_title_a">
                              Our Latest </p>
                            <hr class='hr_a' style=' margin: 10px 0;' />
                          </div>
                          <div class='wd_empty_space' data-heightmobile='60' data-heighttablet='60' data-heightdesktop='60'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="woocommerce columns-4 ">
                            <ul class="products columns-4 grid ">
                              <li class="product type-product post-3699 status-publish first instock product_cat-bulldozer product_cat-earthmoving-equipment has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                                <div class='product-image-wrapper'><a href="<?= BASE_URL(); ?>/product/prod_aqm_portable_001/"><img width="700" height="700" src="<?= BASE_URL(); ?>/assets/dist/uploads/prod_aqm_portable_001.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 700px) 100vw, 700px" /></a></div>
                                <div class="product-details-wrapper">
                                  <h2 class="woocommerce-loop-product__title">
                                    <a href="<?= BASE_URL(); ?>/product/prod_aqm_portable_001/">Trusur - AQM Portable</a>
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
                                  <a href="?add-to-cart=3699" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3699" data-product_sku="woo-sunglasses-6" aria-label="Add “Trusur - AQM Portable” to your cart" rel="nofollow">Add to cart</a>
                                </div>
                              </li>
                              <li class="product type-product post-3995 status-publish instock product_cat-boom-lift product_cat-telescopic-boom-lift has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                                <div class='product-image-wrapper'><a href="<?= BASE_URL(); ?>/product/prod_calibrator_001/"><img width="700" height="700" src="<?= BASE_URL(); ?>/assets/dist/uploads/prod_calibrator_001.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 700px) 100vw, 700px" /></a></div>
                                <div class="product-details-wrapper">
                                  <h2 class="woocommerce-loop-product__title">
                                    <a href="<?= BASE_URL(); ?>/product/prod_calibrator_001/">Fluke - 5322A Electrical Safety Tester Calibrator</a>
                                  </h2>
                                  <div class="pricing-location">
                                    <div class="pricing-partial rates-3">
                                      <h5>Hire</h5>
                                      <ul>
                                        <li class="pricing pricing-day">
                                          <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>229.00</span> <small> / Day</small>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="pricing pricing-week">
                                          <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>625.00</span> <small> / Week</small>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="pricing pricing-fourWeek">
                                          <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>1,450.00</span> <small> / Month</small>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="with-operator">
                                      <h5>Hire with operator</h5>
                                      <div>
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>120.00</span> <small> / Hour</small>
                                      </div>
                                    </div>
                                    <div class="location">
                                      Los Angeles, CA </div>
                                  </div>
                                  <div class="description">
                                    The 30 ft articulating boom lift gives operators unobstructed access to otherwise hard-to-reach areas with its up, out, and over positioning ability. Its ideal for general contractors, steel erectors, or other heavy-duty construction trades,</div>
                                  <a href="<?= BASE_URL(); ?>/product/prod_calibrator_001/" data-quantity="1" class="button product_type_simple" data-product_id="3995" data-product_sku="woo-hoodie-with-zipper-2" aria-label="Read more about “120ft - 150ft-Straight Boom Lift”" rel="nofollow">Read more</a>
                                  <a href="?add-to-cart=3995" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3995" data-product_sku="woo-sunglasses-1-1" aria-label="Add “Fluke - 5322A Electrical Safety Tester Calibrator” to your cart" rel="nofollow">Add to cart</a>
                                </div>
                              </li>
                              <li class="product type-product post-3989 status-publish instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                                <div class='product-image-wrapper'><a href="<?= BASE_URL(); ?>/product/prod_weather_davis_001/"><img width="700" height="700" src="<?= BASE_URL(); ?>/assets/dist/uploads/prod_weather_davis_001.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 700px) 100vw, 700px" /></a></div>
                                <div class="product-details-wrapper">
                                  <h2 class="woocommerce-loop-product__title">
                                    <a href="<?= BASE_URL(); ?>/product/prod_weather_davis_001/">Davis - Vantage Pro2 6125</a>
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
                                  <a href="?add-to-cart=3989" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3989" data-product_sku="woo-sunglasses-1-1" aria-label="Add “Davis - Vantage Pro2 6125” to your cart" rel="nofollow">Add to cart</a>
                                </div>
                              </li>
                              <li class="product type-product post-3973 status-publish last instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                                <div class='product-image-wrapper'><a href="<?= BASE_URL(); ?>/product/prod_weather_airmar_001/"><img width="700" height="700" src="<?= BASE_URL(); ?>/assets/dist/uploads/prod_weather_airmar_001.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 700px) 100vw, 700px" /></a></div>
                                <div class="product-details-wrapper">
                                  <h2 class="woocommerce-loop-product__title">
                                    <a href="<?= BASE_URL(); ?>/product/prod_weather_airmar_001/">Airmar - 150WX WeatherStation®</a>
                                  </h2>
                                  <div class="pricing-location">
                                    <div class="pricing-partial rates-3">
                                      <h5>Hire</h5>
                                      <ul>
                                        <li class="pricing pricing-day">
                                          <div>
                                            <p class="label">Day Rate</p>
                                            <div class="price_value">
                                              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>20,536.00</span> <small> / Day</small>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="pricing pricing-week">
                                          <div>
                                            <p class="label">Week Rate</p>
                                            <div class="price_value">
                                              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>1,800.00</span> <small> / Week</small>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="pricing pricing-fourWeek">
                                          <div>
                                            <p class="label">Month Rate</p>
                                            <div class="price_value">
                                              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>5,300.00</span> <small> / Month</small>
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
                                      Phoenix, AZ, San Diego, CA, San Francisco, CA, San Jose, CA </div>
                                  </div>
                                  <div class="description">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</div>
                                  <a href="?add-to-cart=3973" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3973" data-product_sku="woo-sunglasses-10-1" aria-label="Add “Airmar - 150WX WeatherStation®” to your cart" rel="nofollow">Add to cart</a>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='50' data-heighttablet='50' data-heightdesktop='120'></div>
                          <div class="wd-heading text-left" data-devia-animate=''>
                            <h2 class="title_a" data-text="The Process">
                              How does it Work </h2>
                            <p class="sub_title_a">
                              The Process </p>
                            <hr class='hr_a' style=' margin: 10px 0;' />
                          </div>
                          <div class='wd_empty_space' data-heightmobile='40' data-heighttablet='60' data-heightdesktop='60'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="header-number wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class=" vc_custom_1570994220145 no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                            <div class="text-icon__container   ">
                              <div class="text-icon__icon-box ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="85">
                                  <path d="M26 23.188V69h-9.844V34.312q-.812.72-1.937 1.376-1.094.624-2.344 1.156-1.25.5-2.594.875-1.344.343-2.656.5v-8.313q3.844-1.125 7.25-2.875t6.156-3.843z" aria-label="1" font-weight="700" font-size="64" font-family="SegoeUI-Bold,'Segoe UI'" fill="#fdb900" />
                                </svg> </div>
                              <div class="text-icon__content-box">
                                <h4 class="text-icon__title ">
                                  Search for the instrument you need </h4>
                                <p class="text-icon__text  ">Get all the blog lists & single post templates you’ll ever need to share your news & stories with the crowd. Get all the blog lists & single post templates you’ll ever need to share your news & stories with the crowd.</p>
                              </div>
                            </div>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="50" data-heighttablet="0" data-heightdesktop="0"></div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                              <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="250" src="<?= BASE_URL(); ?>/assets/dist/images/apps.png" class="vc_single_image-img attachment-full" /></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1569339400324 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner vc_custom_1569339505360">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="290" data-heighttablet="200" data-heightdesktop="0"></div>
                          <div class="wpb_single_image wpb_content_element vc_align_center   show-for-large">
                            <figure class="wpb_wrapper vc_figure">
                              <div class="vc_single_image-wrapper   vc_box_border_grey"><img style="position:relative;top:-50px" width="630" height="236" src="<?= BASE_URL(); ?>/assets/dist/images/the_process_arrows.png" class="vc_single_image-img attachment-full" /></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1569329885436">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner vc_custom_1569340168765">
                        <div class="wpb_wrapper">
                          <div class="wpb_single_image wpb_content_element vc_align_left">
                            <figure class="wpb_wrapper vc_figure">
                              <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="694" height="376" src="<?= BASE_URL(); ?>/assets/dist/images/Group-1539.png" class="vc_single_image-img attachment-full" /></div>
                            </figure>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="50" data-heighttablet="0" data-heightdesktop="0"></div>
                        </div>
                      </div>
                    </div>
                    <div class="header-number wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner vc_custom_1569340175773">
                        <div class="wpb_wrapper">
                          <div class=" vc_custom_1570994395551 no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                            <div class="text-icon__container   ">
                              <div class="text-icon__icon-box ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="85">
                                  <path d="M13.406 60.813h19V69H2.594v-3.375q0-3.438 1.156-6.156 1.156-2.75 2.906-4.907 1.75-2.187 3.813-3.843 2.094-1.688 3.969-3.032 1.968-1.406 3.437-2.687 1.5-1.281 2.5-2.531 1.031-1.282 1.531-2.563.5-1.312.5-2.781 0-2.875-1.625-4.344-1.625-1.468-4.968-1.468-5.782 0-11.063 4.593V27.22q5.844-3.782 13.188-3.782 3.406 0 6.093.907 2.719.875 4.594 2.531 1.875 1.656 2.844 4.031 1 2.344 1 5.25 0 3.094-.969 5.5-.938 2.407-2.531 4.375-1.563 1.969-3.625 3.625-2.063 1.625-4.282 3.157-1.5 1.062-2.906 2.124Q16.781 55.97 15.72 57q-1.063 1-1.688 1.969-.625.968-.625 1.843z" aria-label="2" font-weight="700" font-size="64" fill="#fdb900" />
                                </svg>
                              </div>
                              <div class="text-icon__content-box">
                                <h4 class="text-icon__title ">
                                  Find the Instrument and Order it Online </h4>
                                <p class="text-icon__text  ">Get all the blog lists & single post templates you’ll ever need to share your news & stories with the crowd. Get all the blog lists & single post templates you’ll ever need to share your news & stories with the crowd.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1569339400324 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner vc_custom_1569339505360">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="250" data-heighttablet="200" data-heightdesktop="0"></div>
                          <div class="wpb_single_image wpb_content_element vc_align_center   show-for-large">
                            <figure class="wpb_wrapper vc_figure">
                              <div class="vc_single_image-wrapper   vc_box_border_grey"><img style="position:relative;top:-50px" width="630" height="236" src="<?= BASE_URL(); ?>/assets/dist/images/the_process_arrows-2.png" class="vc_single_image-img attachment-full" /></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1569329901110">
                    <div class="header-number wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner vc_custom_1569340182535">
                        <div class="wpb_wrapper">
                          <div class=" vc_custom_1570994468579 no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                            <div class="text-icon__container   ">
                              <div class="text-icon__icon-box ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="85">
                                  <path d="M3.656 67.531v-8.594q4.5 3.282 10.5 3.282 3.781 0 5.875-1.625 2.125-1.625 2.125-4.532 0-3-2.625-4.624-2.593-1.626-7.156-1.626H8.219V42.25h3.844q8.75 0 8.75-5.813 0-5.468-6.72-5.468-4.5 0-8.75 2.906v-8.063q4.72-2.375 11-2.375 6.876 0 10.688 3.094 3.844 3.094 3.844 8.032 0 8.78-8.906 11v.156q4.75.593 7.5 3.468 2.75 2.844 2.75 7 0 6.282-4.594 9.938-4.594 3.656-12.688 3.656-6.937 0-11.28-2.25z" aria-label="3" font-weight="700" font-size="64" font-family="SegoeUI-Bold,'Segoe UI'" fill="#fdb900" />
                                </svg> </div>
                              <div class="text-icon__content-box">
                                <h4 class="text-icon__title ">
                                  Get The Instrument Shipped to your Working </h4>
                                <p class="text-icon__text  ">Get all the blog lists & single post templates you’ll ever need to share your news & stories with the crowd. Get all the blog lists & single post templates you’ll ever need to share your news & stories with the crowd.</p>
                              </div>
                            </div>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="120" data-heighttablet="0" data-heightdesktop="0"></div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner vc_custom_1569340187354">
                        <div class="wpb_wrapper">
                          <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                              <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1252" height="670" src="<?= BASE_URL(); ?>/assets/dist/uploads/aqm.png" class="vc_single_image-img attachment-full" /></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1569260648992 vc_row-has-fill" style="background-position: center !important;">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="20" data-heighttablet="30" data-heightdesktop="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid dashed-bg vc_custom_1569610275707 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-6">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="30" data-heightdesktop="50"></div>
                          <div class="wd-count-up ">
                            <img width="62" height="62" src="<?= BASE_URL(); ?>/assets/dist/icons/champion-2842_fcb453b6-d2d7-4d18-b67f-ecc793150b3f.png" class="attachment-thumbnail size-thumbnail" alt="" />
                            <h4 class="wd-count-up__counter" data-file="15" style='color: #ffffff'>
                              15 </h4>
                            <h5 class="wd-count-up__title" style='color: #ffffff'>Awwards</h5>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="25" data-heightdesktop="50"></div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-6">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="30" data-heightdesktop="50"></div>
                          <div class="wd-count-up ">
                            <img width="62" height="50" src="<?= BASE_URL(); ?>/assets/dist/icons/team-2715_cef8922e-7aa0-4ddd-96a7-34fde8bdc608.png" class="attachment-thumbnail size-thumbnail" alt="" />
                            <h4 class="wd-count-up__counter" data-file="1024" style='color: #ffffff'>
                              1024 </h4>
                            <h5 class="wd-count-up__title" style='color: #ffffff'>Happy clients</h5>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="25" data-heighttablet="40" data-heightdesktop="50"></div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-6">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="30" data-heightdesktop="50"></div>
                          <div class="wd-count-up ">
                            <img width="50" height="62" src="<?= BASE_URL(); ?>/assets/dist/icons/spacecraft-3240_6a607206-a24b-4dbf-90db-0994df49b8c2.png" class="attachment-thumbnail size-thumbnail" alt="" />
                            <h4 class="wd-count-up__counter" data-file="1024" style='color: #ffffff'>
                              1024 </h4>
                            <h5 class="wd-count-up__title" style='color: #ffffff'>Projects</h5>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="25" data-heightdesktop="50"></div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-6">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="30" data-heightdesktop="50"></div>
                          <div class="wd-count-up ">
                            <img width="64" height="64" src="<?= BASE_URL(); ?>/assets/dist/icons/safe-2291_ffa36413-4b0a-4d71-b890-8c672e1bac8c.png" class="attachment-thumbnail size-thumbnail" alt="" />
                            <h4 class="wd-count-up__counter" data-file="99" style='color: #ffffff'>
                              99 </h4>
                            <h5 class="wd-count-up__title" style='color: #ffffff'>Up Time</h5>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="30" data-heighttablet="25" data-heightdesktop="50">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570182560154 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='40' data-heighttablet='80' data-heightdesktop='80'></div>
                          <div class="wd-heading text-left" data-devia-animate=''>
                            <h2 style="color:#ffffff;" class="title_a" data-text="Our Clients">
                              Testimonials </h2>
                            <p style="color:#ffffff;" class="sub_title_a">
                              Our Clients </p>
                            <hr class='hr_a' style=' margin: 10px 0;' />
                          </div>
                          <div class='wd_empty_space' data-heightmobile='15' data-heighttablet='20' data-heightdesktop='40'></div>
                          <div class="owl-testimonial wd-testimonial wd-testimonial_layout_3" data-slick='{ "slidesToShow": 1, "slidesToScroll": 1}'>
                            <blockquote class="wd-testimonial__item">
                              <div class="wd-testimonial__thumbnail">
                                <div style="background-image: url('<?= BASE_URL(); ?>/assets/dist/uploads/testimon-@2x-833x510.jpg')"></div>
                              </div>
                              <div class="wd-testimonial__info">
                                <div class="excerpt">
                                  So happy to write this testimonial to see that I'm very thankful to you guys even you so awesome and professional Although with service while offering our employees the best training and a working environment in which they can excel. </div>
                                <h5 class="title">
                                  Mark James </h5>
                                <p class="job p-small">
                                  Creative Heads Inc </p>
                              </div>
                            </blockquote>
                            <blockquote class="wd-testimonial__item">
                              <div class="wd-testimonial__thumbnail">
                                <div style="background-image: url('<?= BASE_URL(); ?>/assets/dist/uploads/testimon-@2x-2-833x510.jpg')"></div>
                              </div>
                              <div class="wd-testimonial__info">
                                <div class="excerpt">
                                  I was very surprised by the quality of the equipment of this company, and I will buy from them always and so happy to write this testimonial to see that I'm very thankful to you guys even you so awesome and professional Although moreover. </div>
                                <h5 class="title">
                                  Sammy Lovell </h5>
                                <p class="job p-small">
                                  CTO - Google </p>
                              </div>
                            </blockquote>
                            <blockquote class="wd-testimonial__item">
                              <div class="wd-testimonial__thumbnail">
                                <div style="background-image: url('<?= BASE_URL(); ?>/assets/dist/uploads/testimon_.jpg')"></div>
                              </div>
                              <div class="wd-testimonial__info">
                                <div class="excerpt">
                                  I was very surprised by the quality of the equipment of this company, and I will buy from them always and so happy to write this testimonial to see that I'm very thankful to you guys even you so awesome and professional Although. </div>
                                <h5 class="title">
                                  Veriency Dun </h5>
                                <p class="job p-small">
                                  Creative Heads Inc </p>
                              </div>
                            </blockquote>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="20" data-heighttablet="30" data-heightdesktop="50">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='wd_empty_space' data-heightmobile='60' data-heighttablet='60' data-heightdesktop='75'></div>
                          <div class="wd-heading text-left" data-devia-animate=''>
                            <h2 class="title_a" data-text="Our Latest">
                              Updates </h2>
                            <p class="sub_title_a">
                              Our Latest </p>
                            <hr class='hr_a' style=' margin: 10px 0;' />
                          </div>
                          <div class='wd_empty_space' data-heightmobile='60' data-heighttablet='60' data-heightdesktop='60'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-animation-delay="150" class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class='small-up-1 large-up-3'>
                            <div class="column column-block  animated " data-animated=fadeInUp>
                              <article class="wd-post wd-post--multicolumn post-258 post type-post status-publish format-standard has-post-thumbnail hentry category-news ">
                                <div class="wd-post__thumbnail">
                                  <img width="1100" height="500" class="wp-post-image" src="<?= BASE_URL(); ?>/assets/dist/news/10-tips-to-find-best-aqms.png" /> </div>
                                <div class="wd-post__content">
                                  <div class="wd-post__categories">
                                    <ul class="post-categories">
                                      <li><a href="#" rel="category tag">News</a></li>
                                    </ul>
                                  </div>
                                  <h4 class="wd-post__title">
                                    <a href="#">Best Practices of HR management</a>
                                  </h4>
                                  <ul class="wd-post__meta clearfix">
                                    <li class="wd-post__date">
                                      August 28, 2019 </li>
                                    <li class="wd-post__author">
                                      By:root </li>
                                    <li class="wd-post__comments">
                                      no comments </li>
                                  </ul>
                                  <div class="wd-post__body">
                                    <p>Objectively innovate empowered factory products else best platforms. Holisticly predominate…</p>
                                  </div>
                                  <div class="wd-post__read-more">
                                    <a href="#">
                                      Read More <img src="<?= BASE_URL(); ?>/assets/dist/icons/more.svg" alt="icon">
                                    </a>
                                  </div>
                                </div>
                              </article>
                            </div>
                            <div class="column column-block  animated " data-animated=fadeInUp>
                              <article class="wd-post wd-post--multicolumn post-260 post type-post status-publish format-standard has-post-thumbnail hentry category-updates ">
                                <div class="wd-post__thumbnail">
                                  <img width="1100" height="500" class="wp-post-image" src="<?= BASE_URL(); ?>/assets/dist/news/best-practices-of-hr-management.png" /> </div>
                                <div class="wd-post__content">

                                  <div class="wd-post__categories">
                                    <ul class="post-categories">
                                      <li><a href="#" rel="category tag">Updates</a></li>
                                    </ul>
                                  </div>
                                  <h4 class="wd-post__title">
                                    <a href="#">10 Tips to Find Best AQMS</a>
                                  </h4>
                                  <ul class="wd-post__meta clearfix">
                                    <li class="wd-post__date">
                                      March 30, 2019 </li>
                                    <li class="wd-post__author">
                                      By:root </li>
                                    <li class="wd-post__comments">
                                      no comments </li>
                                  </ul>
                                  <div class="wd-post__body">
                                    <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely…</p>
                                  </div>
                                  <div class="wd-post__read-more">
                                    <a href="#">
                                      Read More <img src="<?= BASE_URL(); ?>/assets/dist/icons/more.svg" alt="icon">
                                    </a>
                                  </div>
                                </div>
                              </article>
                            </div>
                            <div class="column column-block  animated " data-animated=fadeInUp>
                              <article class="wd-post wd-post--multicolumn post-262 post type-post status-publish format-standard has-post-thumbnail hentry category-news ">
                                <div class="wd-post__thumbnail">
                                  <img width="1100" height="500" class="wp-post-image" src="<?= BASE_URL(); ?>/assets/dist/news/how-to-organize-a-construction-site.png" /> </div>
                                <div class="wd-post__content">
                                  <div class="wd-post__categories">
                                    <ul class="post-categories">
                                      <li><a href="#" rel="category tag">News</a></li>
                                    </ul>
                                  </div>
                                  <h4 class="wd-post__title">
                                    <a href="#">How to Setup a Construction Site</a>
                                  </h4>
                                  <ul class="wd-post__meta clearfix">
                                    <li class="wd-post__date">
                                      December 28, 2017 </li>
                                    <li class="wd-post__author">
                                      By:root </li>
                                    <li class="wd-post__comments">
                                      no comments </li>
                                  </ul>
                                  <div class="wd-post__body">
                                    <p>Objectively innovate empowered factory products else best platforms. Holisticly predominate…</p>
                                  </div>
                                  <div class="wd-post__read-more">
                                    <a href="#">
                                      Read More <img src="<?= BASE_URL(); ?>/assets/dist/icons/more.svg" alt="icon">
                                    </a>
                                  </div>
                                </div>
                              </article>
                            </div>
                          </div>
                          <div class="wd_empty_space" data-heightmobile="20" data-heighttablet="40" data-heightdesktop="84"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </main>
          <!-- /content  -->