<?php

    session_start();

    include"../classes/User.php";

    #create an object
    $user_obj = new User;

    #call the getAllusers() from user.php
    $all_users = $user_obj->getAllusers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

 <!--Bootstrap CDN Link-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 <!--Fontawesome CDN Link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--CSS Link-->
      <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px">
      <div class="container">
           <a href="dashoboard.php" class="navbar-brand">
              <h1 class="h3">The Company</h1>
           </a>
          <div class="navbar-nav">
              <span class="navbar-text"><?=$_SESSION['full_name'] ?></span>
              <form action="../actions/logout-action.php" class="d-flex ms-2">
                 <button type="submit" class="text-danger bg-transparent border-0">Logout</button> 
              </form>
          </div>
     </div>
 </nav>   



  <!--Display all the list of users-->

  <main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2 class="text-center">User List</h2>


            <table class="table table-hover align-middle text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>USERNAME</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($user = $all_users->fetch_assoc()) {
                    ?>
                        <tr>
                            <td>
                                <?php
                                    if ($user['photo']) {
                                ?>
                                    <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto dashboard-photo" style="width: 3.5em; height: 3.5em; object-fit">
                                <?php
                                    }else {
                                ?>

                                    <i class="fa-solid fa-user text-secondary d-block text-center dashboard-icon"></i>

                                <?php
                                    }
                                ?>
                            </td>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['first_name']?></td>
                            <td><?= $user['last_name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <?php
                                    if ($_SESSION['id'] == $user['id']) {
                                ?>
                                    <a href="edit-user.php" class="btn btn-outline-warning" title="Edit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="delete-user.php" class="btn btn-outline-danger" title="Delete">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php
                        }
                    
                    ?>
                </tbody>
            </table>

        </div>
    </main>













 


</body>
</html>