<div class="uk-container uk-container-center">


    <div class="uk-button-group">

        <?=anchor(base_url().'pl','PL', array('class'=>'uk-button uk-button-success uk-button-mini '))?>
        <?=anchor(base_url().'en','EN', array('class'=>'uk-button uk-button-success uk-button-mini'))?>

    </div>

    <div id="container">


		

        <h1> <?=lang('welcome')?> - <?=(!$this->ion_auth->logged_in())?'no login':'login'?> </h1>

        <div id="body">

		<?=anchor(site_url('auth'),'Login', array('class'=>'uk-button uk-button-success'))?>
            <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

            <p>If you would like to edit this page you'll find it located at:</p>
            <code>application/modules/Main/views/main.php</code>

            <p>The corresponding controller for this page is found at:</p>
            <code>application/modules/Main/controllers/Main.php</code>

            <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a
                    href="user_guide/">User Guide</a>.</p>
        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
            <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
        </p>
    </div>

</div>