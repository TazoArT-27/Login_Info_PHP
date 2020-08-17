<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <?php include 'links.php' ?>
</head>
<body>
<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Password</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include 'connection.php';
        $selectQuery = "select * from registration";
        $query = mysqli_query($condition, $selectQuery);
        $nums = mysqli_num_rows($query);
        
        while($res = mysqli_fetch_array($query)){
            //echo $res['firstname']."</br>";
            ?>
            <tr>
                <td><?php echo $res['id'] ?></th>
                <td><?php echo $res['firstname'] ?></td>
                <td><?php echo $res['lastname'] ?></td>
                <td><?php echo $res['email'] ?></td>
                <td><?php echo $res['phonenumber'] ?></td>
                <td><?php echo $res['password'] ?></td>
                <td><a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="far fa-edit"></i></a></td>
                <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="far fa-trash-alt"></i></a></td>
            </tr>
            <?php
        }

   ?>
        
    </tbody>
    </table>
</div>


<script>
  $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>

</html>

   