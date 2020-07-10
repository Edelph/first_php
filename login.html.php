<?php
require_once "fonction.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=" bootstrap-4.0.0-dist\css\bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>simple login</title>
</head>
<body>
    <div class="container-fluide row">
    <div class="container-fluide col-md-4">
        <form action="/login.html.php" method="post">
            <div class="mt-3">
                <h2>sign up to our newsletter</h2>
            </div>
            <div class="form-group">
                <input class="form-control" type="text"  placeholder=" Full Name" name="name" class="name" required >
            </div>
            <div class="form-group">
                <input class="form-control" type="tel" contenteditable="false" placeholder=" Phone Number" name="numberphone" class="numberphone" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" placeholder=" Email" name="emaile" class="email" required>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary" >submit</button>
            </div>
        </form>    
    </div>
    <div class="container-fluide col-md-8">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom utilisateur</th>
                    <th>telephone</th>
                    <th>e-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($afficher as  $value) :?>
                    <tr>
                        <td><?=$value[0]?></td>
                        <td><?=$value[1]?></td>
                        <td><?=$value[2]?></td>
                        <td><?=$value[3]?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
    </div>
    </div>

    <?php if (isset($name)):?>
        <div class="container">
        <?=$retoure?>
        </div>
    <?php endif?>
    
   
<script src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>


</body>
</html>