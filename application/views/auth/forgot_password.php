<div class="uk-container uk-container-center ">

    <div class="uk-grid uk-margin-bottom">

        <div class="uk-width-1-1">

            <h1><?php echo lang('forgot_password_heading'); ?></h1>
        </div>
    </div>


    <div class="uk-grid uk-margin-large-bottom uk-margin-top-remove">

        <div class="uk-width-1-1">

            <div class="uk-panel uk-panel-box">


                <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>

                <div id="infoMessage"><?php echo $message; ?></div>

                <?php echo form_open("auth/forgot_password", array('class' => 'uk-panel uk-panel-box uk-form')); ?>

                <div class="uk-form-row uk-margin-bottom">

                    <?php echo form_input($identity); ?>
                </div>

                <div class="uk-form-row uk-margin-bottom">
                    <?php echo form_submit('submit', lang('forgot_password_submit_btn'), array('class' => 'uk-button uk-button-default')); ?>
                </div>

                <?php echo form_close(); ?>


            </div>

        </div>

    </div>

</div>