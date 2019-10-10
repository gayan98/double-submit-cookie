<html>
    <head>
        <title>validate</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
    </head>

    <body>
        
      <div class="container">
        <div class='row' align='right' style='padding-top: 20px;'>
          <a href='logout.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Logout </button></a>
        </div>
        <div class="row" align="center" style="padding-top: 100px;">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2"></div>
                    <div class="col-sm-8">


                      <?php
                                            
                      require_once 'token.php';
                      $val = $_POST["token"];                      
                      if(isset($_POST['name'])){
                        if(token::checkToken($val,$_COOKIE['csrfTokenCookie']))
                        {
                          echo "<div class='alert alert-warning' role='alert'>"."Updated Successfully.You are free of CSRF"."</div>";
                        }
                        else 
                        {
                          echo "<script>alert('CSRF Alert')</script>";
                        }
                      }

           						?>


                    </div>
                  <div class="col-sm-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </body>
  </html>