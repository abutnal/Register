<!DOCTYPE html>
<html>
<head>
  <title>Flight List</title> 
  <link rel="stylesheet" href="https://bootswatch.com/3/paper/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <br><br>
        <span><b>FLIGHT LIST</b></span>
        <div class="table-responsive">
          <table id="mytable" class="table" style="height: 300px;">
           <thead>
             <th>SL</th>
             <th>Origin</th>
             <th>Destination</th>
             <th>Duration</th>
             <th>Price</th> 
             <th>Refundable</th>
             <th>Token</th> 
           </thead>
           <tbody>
            <?php 
            $i = 1;
            foreach ($flights['Search']['FlightDataList']['JourneyList'][0] as $val) {
              ?>  
              <tr>
                <?php 
                $flag = 0;
                foreach ($val['FlightDetails']['Details'][0] as $FlightDetails) {
                  if (count($FlightDetails) > 1) { 
                    if ($flag == 0) {
                      echo "<tr><td>".$i."</td>";
                    }else{
                      echo "<tr><td></td>";
                    } 
                    
                    ?>
                    <td><?php echo $FlightDetails['Origin']['CityName'].' at '.$FlightDetails['Origin']['DateTime']; ?></td>
                    <td><?php echo $FlightDetails['Destination']['CityName'].' at '.$FlightDetails['Destination']['DateTime']; ?></td>
                    <td><?php echo $FlightDetails['Duration']; ?></td>
                    <?php if ($flag == 0) { ?>
                      <td><?php echo $val['Price']['TotalDisplayFare']." ".$val['Price']['Currency']; ?></td>
                      <td><?php if ($val['Attr']['IsRefundable'] == 1) {echo 'Yes';}else{ echo "No";}  ?></td>
                      <td><?php echo $val['ResultToken']; ?></td>
                    <?php }else{
                      echo "<td></td>";
                    } 
                    $flag++;
                    echo "</tr>"; 
                  }
                }
                ?>
              </tr>
              <?php $i++; } ?>  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
  </html>