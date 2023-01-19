<?php
overall_header(__("Hire Me"));
?>
<div id="post_ad_email_exist" class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-align-top my-mfp-zoom-in mfp-ready"
     tabindex="-1" style="display: none">
    <div class="mfp-container mfp-inline-holder">
        <div class="mfp-content">
            <div class="zoom-anim-dialog dialog-with-tabs popup-dialog">
                <ul class="popup-tabs-nav" style="pointer-events: none;">
                    <li class="active"><a href="#exist_acc"><?php _e("Link to existing accounts") ?></a></li>
                </ul>
                <div class="popup-tabs-container">
                    <div class="popup-tab-content" id="exist_acc" style="">
                        <form accept-charset="utf-8" id="email_exists_login">
                            <p id="email_exists_success" style="display: none;">
                                <span class="status-available"><?php _e("Account Linked Successful. Redirecting...") ?></span>
                            </p>

                            <p><span id="quickad_email_already_linked"></span>
                                <br><?php _e("Enter your password below to link accounts:") ?></p>

                            <p id="email_exists_error" style="display: none;"></p>

                            <div class="form-group">
                                <span><?php _e("Username") ?>:</span>
                                <strong id="quickad_username_display"></strong>
                            </div>
                            <div class="form-group">
                                <span><?php _e("Email Address") ?>:</span>
                                <strong id="quickad_email_display"></strong>
                            </div>
                            <div>
                                <span><?php _e("Password") ?>:</span>
                                <input type="password" class="with-border margin-bottom-0" id="password"
                                       name="password">
                                <a href="<?php url("LOGIN") ?>?fstart=1" target="_blank" id="fb_forgot_password_btn">
                                    <small><?php _e("Forgot Password?") ?></small>
                                </a>
                            </div>
                            <div>
                                <input type="hidden" name="email" id="email" value=""/>
                                <input type="hidden" name="username" id="username" value=""/>
                                <button id="link_account" type="button" value="Submit" class="button ripple-effect">
                                    <?php _e("Link Account") ?>
                                </button>
                            </div>
                        </form>
                        <div id="email_exists_user">
                            <p><?php _e("The email address you entered is linked with a Job Seeker account. Please change the email address or login with an Employer account") ?></p>
                            <button type="button" class="button ripple-effect" id="change-email">
                                <?php _e("Change Email Address") ?>
                            </button>
                        </div>
                    </div>
                </div>
                <button type="button" class="mfp-close"></button>
            </div>
        </div>
    </div>
    <div class="mfp-bg my-mfp-zoom-in mfp-ready"></div>
</div>

<!-- Titlebar
================================================== -->
<div id="titlebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php _e("Hire Me") ?></h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="<?php url("INDEX") ?>"><?php _e("Home") ?></a></li>
                        <li><?php _e("Hire Me") ?></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-12">
                <div id="post_error"></div>
                <div class="payment-confirmation-page dashboard-box margin-top-0 padding-top-0 margin-bottom-50"
                     style="display: none">
                    <div class="headline">
                        <h3><?php _e("Success") ?></h3>
                    </div>
                    <div class="content with-padding padding-bottom-10">
                        <i class="la la-check-circle"></i>

                        <h2 class="margin-top-30"><?php _e("Success") ?></h2>

                        <p><?php _e("Posted successfully uploaded. Please wait for approval. Thanks") ?></p>
                    </div>
                </div>
                <form id="post_job_form" action="<?php url("HIRE") ?>?action=hire" method="post"
                      enctype="multipart/form-data" accept-charset="UTF-8">
                    <div class="dashboard-box margin-top-0">
                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-briefcase"></i><?php _e("Project Details") ?></h3>
                        </div>
                        <div class="content with-padding padding-bottom-10">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5><?php _e("Choose a name for your project") ?> *</h5>
                                        <input type="text" class="with-border" name="title">
                                    </div>

                                    <div class="submit-field">
                                        <h5><?php _e("Tell us more about your project") ?> *</h5>
                                        <p><?php _e("Start with a bit about yourself or your business, and include an overview of what you need done.") ?></p>
                                        <textarea cols="30" rows="5" class="with-border text-editor" name="content"></textarea>
                                    </div>
                                     
                                    <div class="submit-field">
                                        <h5><?php _e("Choose a date for your project") ?> *</h5>
                                        <p><?php _e("From") ?> *</p>
                                        <input type="date" class="with-border" name="title">
                                        <p><?php _e("To") ?> *</p>
                                        <input type="date" class="with-border" name="title">
                                    </div>

                                    <div class="submit-field">
                                        <h5><?php _e("How do you want to pay?") ?> *</h5>
                                        <span class="radio-btn">
                                            <input id="fixed_price" class="projecttypRadio" type="radio" name="salary_type" value="0" onFocus="return show1();" checked="checked"/>
                                            <label for="fixed_price"><?php _e("Daily Price") ?></label>
                                        </span>
                                        <span class="radio-btn">
                                            <input id="" class="projecttypRadio" type="radio" name="salary_type" value="1" onFocus="return show1();"/>
                                            <label for="hourly_price"><?php _e("Hourly Price") ?></label>
                                        </span>
                                        
                                    </div>
                                    <div class="submit-field">
                                        <h5><?php _e("What is your estimated budget?") ?> (<?php _esc($config['currency_code'])?>)</h5>

                                        <?php
                                        //This Function is called for set default currency code
                                        set_user_currency($config['specific_country']);
                                        ?>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-12">
                                                <div class="input-with-icon">
                                                    <input class="with-border" type="text" placeholder="<?php _e("amount") ?>"
                                                           name="salary_min">
                                                    <i class="currency"><?php _esc($config['currency_sign'])?></i>
                                                </div>
                                            </div>
                                          
                                           
                                        </div>
                                        
                                    </div>


                                    <div id="ResponseCustomFields">
                                        <?php
                                        foreach ($customfields as $customfield){
                                            if($customfield['type']=="text-field"){
                                                echo '<div class="sidebar-widget">
                                                    <h3 class="label-title">'._esc($customfield['title'],false).'</h3>
                                                    '._esc($customfield['textbox'],false).'
                                                </div>';
                                            }
                                            if($customfield['type']=="textarea"){
                                                echo '<div class="sidebar-widget">
                                                    <h3 class="label-title">'._esc($customfield['title'],false).'</h3>
                                                    '._esc($customfield['textarea'],false).'
                                                </div>';
                                            }
                                            if($customfield['type']=="radio-buttons"){
                                                echo '<div class="sidebar-widget">
                                                    <h3 class="label-title">'._esc($customfield['title'],false).'</h3>
                                                    '._esc($customfield['radio'],false).'
                                                </div>';
                                            }
                                            if($customfield['type']=="drop-down"){
                                                echo '<div class="sidebar-widget">
                                                    <h3 class="label-title">'._esc($customfield['title'],false).'</h3>
                                                    <select class="selectpicker with-border" name="custom['._esc($customfield["id"],false).']">
                                                        <option value="" selected>'.__("Select").' '._esc($customfield["title"],false).'</option>
                                                        '._esc($customfield["selectbox"],false).'
                                                    </select>
                                                </div>';
                                            }
                                            if($customfield['type']=="checkboxes"){
                                                echo '<div class="sidebar-widget">
                                                    <h3 class="label-title">'._esc($customfield['title'],false).'</h3>
                                                    '._esc($customfield['checkbox'],false).'
                                                </div>';
                                            }
                                        }
                                        ?>
                                    </div>

                                    <div class="submit-field d-none">
                                        <h5>Attachments</h5>
                                        <!-- Attachments -->
                                        <div class="attachments-container margin-top-0 margin-bottom-0">
                                            <div class="attachment-box ripple-effect">
                                                <span>Cover Letter</span>
                                                <i>PDF</i>
                                                <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                            </div>
                                            <div class="attachment-box ripple-effect">
                                                <span>Contract</span>
                                                <i>DOCX</i>
                                                <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <!-- Upload Button -->
                                        <div class="uploadButton margin-top-0">
                                            <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
                                            <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                                            <span class="uploadButton-file-name">Maximum file size: 10 MB</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                     
                   
                    <input type="hidden" name="submit">

                    <div class="row margin-top-30 margin-bottom-80" style="align-items: center;">
                        <div class="col-6">
                            <button type="submit" id="submit_job_button" name="Submit" class="button ripple-effect big">
                                <i class=""></i> <?php _e("Hire") ?></button>
                        </div>
                        <div class="col-6">
                            <div id="ad_total_cost_container" class="text-right" style="display: none">
                                <strong>
                                    <?php _e("Total") ?>:
                                    <span class="currency-sign"><?php _esc($user_currency_sign)?></span>
                                    <span id="totalPrice">0</span>
                                    <span class="currency-code"><?php _esc($config['currency_code'])?></span>
                                </strong>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 hide-under-992px">
                <div class="dashboard-box margin-top-0">
                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-feather-alert-circle"></i> <?php _e("Tips!") ?></h3>
                    </div>
                    <div class="content with-padding padding-bottom-10">
                        <ul class="list-2">
                            <li><?php _e("Enter a brief description of the company and job.") ?></li>
                            <li><?php _e("Add your company logo.") ?></li>
                            <li><?php _e("Choose the correct category and sub-category of the job.") ?></li>
                            <li><?php _e("Check again before submit the job.") ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="<?php _esc(TEMPLATE_URL);?>/css/category-modal.css" type="text/css" rel="stylesheet">
<link href="<?php _esc(TEMPLATE_URL);?>/css/owl.post.carousel.css" type="text/css" rel="stylesheet">
<link href="<?php _esc(TEMPLATE_URL);?>/css/select2.min.css" rel="stylesheet"/>
<script src="<?php _esc(TEMPLATE_URL);?>/js/select2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/i18n/<?php _esc($config['lang_code']) ?>.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/js/owl.carousel-category.min.js"></script>

<script>
    var ajaxurl = "<?php _esc($config['app_url'])?>user-ajax.php";
    var lang_edit_cat = "<i class='icon-feather-check-circle'></i> &nbsp;<?php _e("Edit Category") ?>";

    $('#company-select').on('change', function () {
        if ($('#company-select').val() == 0) {
            $('.new-company').slideDown('fast');
        } else {
            $('.new-company').slideUp('fast');
        }
    });
    $('#company-select').trigger('change');

    function show1(){
        var ele = document.getElementById("show1");
        if(ele.style.display == "block") {
            ele.style.display = "none";
        }
        else {
            ele.style.display = "block";
        }
    }
</script>
<script src="<?php _esc(TEMPLATE_URL);?>/js/jquery.form.js"></script>
<script src="<?php _esc(TEMPLATE_URL);?>/js/job_post.js"></script>
<?php overall_footer(); ?>