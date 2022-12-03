<?php 
/** @var $this  \app\core\View */
$this->title = 'Profile';
?>

<div class="container">
    <div class="row">
    
        <div class="col-md-2"></div>
        <div class="col-md-6">
        <h1>Profile</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject">
             </div>

             <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
             </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>