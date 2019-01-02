<!DOCTYPE html>
<html>
<head>
	<title>Fare rule</title>
  <link rel="stylesheet" href="https://bootswatch.com/3/paper/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
  <br><br>
   <span><b>Fare Rule</b></span>
  <div class="row">
   <div class="col-md-4 col-md-offset-2">
      <form action="<?php echo base_url('Flight/f_rule'); ?>" method="POST">
    <div class="row">
       <div class="col-md-6"><input type="text" name="token" class="form-control" placeholder="Enter Token"></div>
      <div class="col-md-6"><input type="submit" name="submit" class="btn btn-danger pull-left" value="Submit"></div>
    </div>
      </form>
   </div>
  </div>

   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <br>
        <table id="mytable" class="table table-bordred table-striped">
       
        <thead>
         <th>SL</th>
          <th>Origin</th>
          <th>Destination</th>
          <th>Airline</th>
          <th>FareRules</th> 
       
        </thead>
        <tbody>
         <?php 
         $i = 1;
         foreach ($fare_rule['FareRule']['FareRuleDetail'] as $val) {
           ?>  
           <tr>
             <td><?php echo $i; ?></td>
             <td><?php echo $val['Origin']; ?></td>
             <td><?php echo $val['Destination']; ?></td>
             <td><?php echo $val['Airline']; ?></td>
             <td><?php echo $val['FareRules']; ?></td>
           </tr>
           <?php $i++; } ?>  
         </tbody>
       
       </table>
     </div>
   </div>
 </div>
</body>
</html>
