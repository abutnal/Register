<!DOCTYPE html>
<html>
<head>
  <title>Extra Services</title>
  <link rel="stylesheet" href="https://bootswatch.com/3/paper/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <br><br>
            <div class="col-md-4 col-md-offset-4">
              <form action="<?php echo base_url('Flight/extra_services'); ?>" method="POST">
                <div class="row">
                  <div class="col-md-6"> <input type="text" class="form-control" name="token"></div>
                  <div class="col-md-6"> <input type="submit" class="btn btn-warning pull-left" name="submit" value="Submit"></div>
                </div>
               
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table id="mytable" class="table table-bordred table-striped">
        
         <thead>
        
           <th>SL</th>
           <th>MealId</th>
           <th>Origin</th>
           <th>Destination</th>
           <th>Description</th>
           <th>Code</th> 
        
         </thead>
         <tbody>
          <?php 
          $i = 1;
          foreach ($extra_services['ExtraServices']['ExtraServiceDetails']['MealPreference'][0] as $val) {
            ?>  
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $val['MealId']?></td>
              <td><?php echo $val['Origin']; ?></td>
              <td><?php echo $val['Destination']; ?></td>
              <td><?php echo $val['Description']; ?></td>
              <td><?php echo $val['Code']; ?></td>
            </tr>
            <?php $i++; } ?>  
          </tbody>
        
        </table>
      </div>
    </div>
  </div>
</body>
</html>
