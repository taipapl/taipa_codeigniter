<div class="uk-container uk-container-center ">

    <div class="uk-grid uk-margin-bottom">

        <div class="uk-width-1-1">

            <h1><?php echo lang('login_heading'); ?></h1>
        </div>
    </div>

    <div class="uk-grid uk-margin-large-bottom uk-margin-top-remove">

        <div class="uk-width-1-1">

            <div class="uk-panel uk-panel-box">

                <p><?php echo lang('login_subheading'); ?></p>

                <div id="infoMessage"><?php echo $message; ?></div>

                <?php echo form_open("auth/login", 'class="uk-form "'); ?>

                <div class="uk-form-row">

                    <?php echo lang('login_identity_label', 'identity'); ?>

                    <div class="uk-form-controls">
                        <?php echo form_input($identity); ?>
                    </div>

                </div>

                <div class="uk-form-row">
                    <?php echo lang('login_password_label', 'password'); ?>
                    <div class="uk-form-controls">
                        <?php echo form_input($password); ?>
                    </div>
                </div>

                <div class="uk-form-row">
                    <?php echo lang('login_remember_label', 'remember'); ?>
                    <div class="uk-form-controls">
                        <?php echo form_checkbox('remember', '1', false, 'id="remember"'); ?>
                    </div>
                </div>

                <p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="uk-button"'); ?></p>

                <?php echo form_close(); ?>

                <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>

            </div>

        </div>

    </div>

</div>