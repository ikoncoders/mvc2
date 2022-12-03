<?php 
use app\core\form\Form;
/** @var $model \app\core\models\User */
$form = new Form();
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Login</h1>

            <?php $form = Form::begin('', 'post') ?>
                
                <?php echo $form->field($model, 'email') ?>
                <?php echo $form->field($model, 'password')->passwordField() ?>                
                <button class="btn btn-success">Submit</button>

            <?php Form::end() ?>      
       
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
