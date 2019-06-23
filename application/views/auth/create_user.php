<?php $this->load->view('auth/cabecera'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?= lang('create_user_heading'); ?> </h3>
                <p ><?= lang('create_user_subheading'); ?></p >
                <div id="infoMessage"><?= $message; ?></div>
            </div>

            <?= form_open("auth/create_user"); ?>
            <div class="box-body">
                <div class="row clearfix">

                    <div class="col-md-6">
                        <label for="usuario" class="control-label"><span class="text-danger">*</span><?= lang('create_user_fname_label', 'first_name'); ?></label>
                        <div class="form-group">
                            <?= form_input($first_name); ?>
                            <span class="text-danger"><?php echo form_error('first_name'); ?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <?= lang('create_user_lname_label', 'last_name'); ?> <br />
                        <?= form_input($last_name); ?>
                    </div>

                    <?php
                    if ($identity_column !== 'email') {
                        echo '<p >';
                        echo lang('create_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity);
                        echo '</p >';
                    }
                    ?>

                    <div class="col-md-6">
                        <?= lang('create_user_company_label', 'company'); ?>
                        <?= form_input($company); ?>
                    </div>

                    <div class="col-md-6">
                        <?= lang('create_user_email_label', 'email'); ?>
                        <?= form_input($email); ?>
                    </div>

                    <div class="col-md-6">
                        <?= lang('create_user_phone_label', 'phone'); ?>
                        <?= form_input($phone); ?>
                    </div>

                    <div class="col-md-6">
                        <?= lang('create_user_password_label', 'password'); ?> 
                        <?= form_input($password); ?>
                    </div>

                    <div class="col-md-6">
                        <?= lang('create_user_password_confirm_label', 'password_confirm'); ?>
                        <?= form_input($password_confirm); ?>
                    </div>


                    <div class="col-md-6"><?= form_submit('submit', lang('create_user_submit_btn')); ?>

                    </div>
                </div>

                <?= form_close(); ?>

            </div>
        </div>
    </div>  
    <?php $this->load->view('auth/footer'); ?>
      