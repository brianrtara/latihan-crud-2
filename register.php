<?php include "app/register.php" ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        
    </head>
    <body>
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-3 col-lg-offset-4" style="margin-top: 100px">
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                           
                           <form action="" method="POST" role="form">
                               <legend>REGISTER</legend>
                           
                               <div class="form-group">
                                   <label for="">nama</label>
                                   <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                               </div>

                              <div class="form-group">
                                   <label for="">email</label>
                                   <input type="email" class="form-control" id="" name="email" placeholder="email">
                               </div>
                               
                               <div class="form-group">
                                   <label for="">username</label>
                                   <input type="text" class="form-control" id="" name="username" placeholder="username">
                               </div>

                               <div class="form-group">
                                   <label for="">password</label>
                                   <input type="password" class="form-control" id="" name="password" placeholder="password">
                               </div>

                               <button type="submit" name="submit" class="btn btn-primary">REGISTER</button>
                           </form>
                           
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
            
        </div>
        

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
