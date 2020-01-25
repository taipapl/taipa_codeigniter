<div class="uk-container uk-container-center ">

    <h1><?php echo lang('edit_group_heading'); ?></h1>
    <p><?php echo lang('edit_group_subheading'); ?></p>

    <div id="infoMessage"><?php echo $message; ?></div>

    <?php echo form_open(current_url(), 'class="uk-form "'); ?>

    <p>
        <?php echo lang('edit_group_name_label', 'group_name'); ?> <br />
        <?php echo form_input($group_name); ?>
    </p>

    <p>
        <?php echo lang('edit_group_desc_label', 'description'); ?> <br />
        <?php echo form_input($group_description); ?>
    </p>

    <p><?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class="uk-button"'); ?></p>

    <?php echo form_close(); ?>

</div>