<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style type="text/css">
  .form-control{
    position: relative;
    width: 200px;
  }
  #search{
    position: relative;
    left: 300px;
    bottom: 40px;
  }
</style>
              <hr>
            <div class="card-header">
              <h4 class="card-title" style="text-align: center;">Fetching data from database</h4>
            </div>
         <hr>
                <form action="" method="POST">
                  
                    <input type="text" name="get_id"  class="form-control" placeholder="ENTER ID" required>
                  
                  <button type="SUBMIT" name="submit_id" class="btn btn-primary" id="search">SEARCH</button>
                
              
            <?php
            $connection = mysqli_connect("localhost","root","","website");
            if(isset($_POST['submit_id']))
            {
              $id=$_POST['get_id'];
              $query="SELECT * FROM employee WHERE id='$id'";
              $query_run = mysqli_query($connection,$query);
            }
            ?>
              <div class="table-responsive">
                <table class="table table-bordered">
                 <thead>
                  <tr>
                      <th scope="col">id</th>
                      <th scope="col">name</th>
                      <th scope="col">do_yr</th>
                      <th scope="col">age</th>
                      <th scope="col">gender</th>
                      <th scope="col">marital_status</th>
                      <th scope="col">dependent</th>
                      <th scope="col">salary_amt</th>
                      <th scope="col">section_name</th>
                      <th scope="col">address</th>
                  </tr>
              </thead>
              <tbody>
              <?php
              if(mysqli_num_rows($query_run) > 0)
            {
              while ($row = mysqli_fetch_array($query_run))
              {       
                ?>
                  <tr>
                       <td><?php echo $row['id']; ?></td>
                       <td><?php echo $row['name']; ?></td>
                       <td><?php echo $row['do_yr']; ?></td>
                       <td><?php echo $row['age']; ?></td>
                       <td><?php echo $row['gender']; ?></td>
                       <td><?php echo $row['marital_status']; ?></td>
                       <td><?php echo $row['dependent']; ?></td>
                       <td><?php echo $row['salary_amt']; ?></td>
                       <td><?php echo $row['section_name']; ?></td>
                       <td><?php echo $row['address']; ?></td>
                  </tr>
                  <?php 
                    }
                  }
                  else
                  {
                     ?>
                     <tr>
                        <td colspan="6">no record found</td>
                      </tr>
                     <?php
                  }
                  ?>
              </tbody>
              </table>              
          </div>
             <?php 

             ?>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
