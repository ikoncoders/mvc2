



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >

    <title><?php echo $this->title ?></title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
            </ul>

            <?php 
            use app\core\Application;
            if(Application::isGuest()): 
            ?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/register">Register</a>
              </li>    
            </ul>
            <?php else:?>
              <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="/profile"> Profile <?php echo Application::$app->user->getDisplayName() ?></a>
              </li> 
             
                <li class="nav-item">
                    <a class="nav-link" href="/logout"> <label for="logut">logut</label></a>
                </li>              
            </ul>
            <?php endif; ?>
           
        </div>
        </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <?php 
    // use app\core\Application;
    // echo'<pre>';
    // var_dump(Application::$app->user);
    ?>
    <div class="container"> 
      <?php if(\app\core\Application::$app->session->getFlash('success')): ?>
          <div class="alert alert-success">
              <?php echo \app\core\Application::$app->session->getFlash('success'); ?>
          </div>
      <?php endif; ?>
    {{content}}
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
