<?php 
/** @var $this  \app\core\View */
/** @var $model  \app\models\Contact */

use app\core\form\Form;
use app\core\form\TextareaField;

$this->title ='Contact';
?>
<div class="container">
    <div class="row">
    
        <div class="col-md-2"></div>
        <div class="col-md-6">
        <h1>Contact Us</h1>

        <?php $form = Form::begin('','post')?>
            <?php echo $form->field($model, 'subject') ?>
            <?php echo $form->field($model, 'email') ?>
            <?php echo new TextareaField($model, 'content') ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php Form::end()?>
        
        </div>
        <div class="col-md-2"></div>
    </div>
</div>