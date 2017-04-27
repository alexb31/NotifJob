<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'/>
</head>
<body>
<div class="container">
    <!-- validation -->
    <div class="grids">
        <div class="progressbar-heading grids-heading">
            <h2>User Registration</h2>
        </div>

        <div class="forms-grids">
            <div class="forms3">
                <div class="w3agile-validation w3ls-validation">
                    <div class="panel panel-widget agile-validation register-form">
                        <div class="validation-grids widget-shadow" data-example-id="basic-forms">
                            <div class="input-info">
                                <h3>Register Form :</h3>
                            </div>
                            <div class="form-body form-body-info">
                                <form action="" method="post">

                                    <div class="form-group valid-form">
                                        <input type="text" class="form-control" name="fname"
                                               placeholder="First Name" required=""
                                               value="<?php echo !empty($user['fname']) ? $user['fname'] : ''; ?>">
                                        <?php echo form_error('fname', '<span class="help-block">',
                                            '</span>'); ?>
                                    </div>

                                    <div class="form-group valid-form">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Name" required=""
                                               value="<?php echo !empty($user['name']) ? $user['name'] : ''; ?>">
                                        <?php echo form_error('name', '<span class="help-block">', '</span>'); ?>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <input type="email" class="form-control inputEmail"
                                               name="email" placeholder="Email"
                                               data-error="That email address is invalid"
                                               required=""
                                               value="<?php echo !empty($user['email']) ? $user['email'] : ''; ?>">
                                        <?php echo form_error('email', '<span class="help-block">', '</span>'); ?>
                                    </div>

                                    <div class="form-group valid-form">
                                        <?php echo form_error('skills', '<span 
                                        class="help-block">', '</span>'); ?>
                                        <textarea name="skills" id="skills"
                                                  placeholder="Skills"><?php echo set_value
                                            ("skills",
                                                ""); ?></textarea>
                                    </div>

                                    <div class="form-group valid-form">
                                        <?php echo form_error('experiences', '<span 
                                        class="help-block">', '</span>'); ?>
                                        <textarea name="experiences" id="experiences"
                                                  placeholder="Experiences"><?php echo set_value
                                            ("experiences",
                                                ""); ?></textarea>
                                    </div>

                                    <div class="form-group valid-form">
                                        <input type="date" class="form-control" name="birthday"
                                               placeholder="Birthday" required=""
                                               value="<?php echo !empty($user['birthday']) ?
                                                   $user['birthday'] : ''; ?>">
                                        <?php echo form_error('birthday', '<span class="help-block">', '</span>'); ?>
                                    </div>

                                    <div class="form-group valid-form">
                                        <input type="text" class="form-control" name="phone"
                                               placeholder="Phone"
                                               value="<?php echo !empty($user['phone']) ? $user['phone'] : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control inputPassword"
                                               name="password" placeholder="Password" required="">
                                        <?php echo form_error('password', '<span class="help-block">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                               data-match=".inputPassword"
                                               data-match-error="Whoops, these don't match"
                                               name="conf_password" placeholder="Confirm password"
                                               required="">
                                        <?php echo form_error('conf_password', '<span class="help-block">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="regisSubmit" class="btn-primary"
                                               value="Submit"/>
                                    </div>
                                </form>
                            </div>
                            <p class="footInfo">Already have an account? <a
                                    href="<?php echo base_url(); ?>users/login">Login here</a></p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- //validation -->
</div>
</body>
</html>