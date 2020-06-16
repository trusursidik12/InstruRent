    <section class="titlebar ">
        <div class="row">
            <div>
                <h2 id="page-title" class="title">Register</h2>
            </div>
        </div>
    </section>

    <!-- content  -->
    <main class="l-main row">
        <div class="main large-12 small-12 columns">
            <article>
                <div class="body field clearfix ">
                    <div class="woocommerce">
                        <form method="post" class="woocommerce-checkout" enctype="multipart/form-data">
                            <div class="col2-set" id="customer_details">
                                <div class="woocommerce-billing-fields">
                                    <div class="woocommerce-billing-fields__field-wrapper">
                                        <p class="form-row form-row-wide validate-required">
                                            <label for="email">Email address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="email" id="email" placeholder="E-Mail" value="<?= @$email; ?>" required></span>
                                        </p>
                                        <p class="form-row form-row-wide validate-required">
                                            <label for="password">Password&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <span class="woocommerce-input-wrapper"><input type="password" class="input-text " name="password" id="password" placeholder="Password" value="" required></span>
                                        </p>
                                        <p class="form-row form-row-wide validate-required">
                                            <label for="name">Name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="name" id="name" placeholder="Name" value="<?= @$name; ?>" required></span>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="company">Company name&nbsp;<span class="optional">(optional)</span></label>
                                            <span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="company" id="company" placeholder="Company" value="<?= @$company; ?>"></span>
                                        </p>
                                        <p class="form-row form-row-wide validate-required">
                                            <label for="phone">Phone&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="phone" id="phone" placeholder="Phone" value="<?= @$phone; ?>" required></span>
                                        </p>
                                        <p class="form-row form-row-wide validate-required">
                                            <label for="npwp">NPWP&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="npwp" id="npwp" placeholder="NPWP" value="<?= @$npwp; ?>" required></span>
                                        </p>
                                        <p class="form-row form-row-wide validate-required">
                                            <label for="npwp_address">NPWP Address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="npwp_address" id="npwp_address" placeholder="NPWP Address" value="<?= @$npwp_address; ?>" required></span>
                                        </p>
                                        <p class="form-row form-row-wide validate-required">
                                            <label for="address">Address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <span class="woocommerce-input-wrapper"><textarea class="input-text " name="address" id="address" placeholder="House number and street name" required><?= @$address; ?></textarea></span>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <input type="submit" class="woocommerce-button button" name="Register" value="Register">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <!-- /content  -->