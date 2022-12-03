<?php
 use app\core\form\Form;
  $form = new Form();
?>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Register User</h1>

            <?php $form = Form::begin('', 'post') ?>

                <div class="row">
                    <div class="col">
                        <?php echo $form->field($model, 'firstname') ?>
                    </div>
                    <div class="col">
                        <?php echo $form->field($model, 'lastname') ?>
                    </div>
                </div>

                <?php echo $form->field($model, 'email') ?>
                <?php echo $form->field($model, 'password')->passwordField() ?>
                <?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>
                <button class="btn btn-success">Submit</button>

            <?php Form::end() ?>      
       
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
