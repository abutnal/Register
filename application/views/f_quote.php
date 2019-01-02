<!DOCTYPE html>
<html>
<head>
  <title>Fare quote</title> 
  <link rel="stylesheet" href="https://bootswatch.com/3/paper/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
  <div class="container">
    <br><br>
    <span><b>Fare Quote</b></span>
    <div class="row">
    <div class="col-md-4 col-md-offset-2">
      <form action="<?php echo base_url('Flight/f_quote'); ?>" method="POST">
        <div class="row">
          <div class="col-md-6">
            <input type="text" placeholder="Enter Token" class="form-control" name="token">
          </div>
          <div class="col-md-6"><input type="submit" name="submit" class="btn btn-warning pull-left" value="Submit"></div>
        </div>
      </form>
    </div>
  </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <br>
        <div class="table-responsive">
          <table id="mytable" class="table table-bordred table-striped">
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
            $flag = 0;
            $i = 1;
            foreach ($fare_quote['UpdateFareQuote']['FareQuoteDetails']['JourneyList']['FlightDetails']['Details'][0] as $val) {          
              ?> 
              <tr>
                <?php
                if (count($val) > 1) { 
                  if ($flag == 0) {
                    echo "<tr><td>".$i."</td>";
                  }else{
                    echo "<tr><td></td>";
                  } 
                  ?>

                  <td><?php echo $val['Origin']['CityName'].' at '.$val['Origin']['DateTime']; ?></td>
                  <td><?php echo $val['Destination']['CityName'].' at '.$val['Destination']['DateTime']; ?></td>
                  <td><?php echo $val['Duration']; ?></td>
                  <?php
                  if ($flag == 0) { ?>
                    <td><?php echo $fare_quote['UpdateFareQuote']['FareQuoteDetails']['JourneyList']['Price']['TotalDisplayFare']." ".$fare_quote['UpdateFareQuote']['FareQuoteDetails']['JourneyList']['FlightDetails']['Currency']; ?></td>
                    <td><?php if ($fare_quote['UpdateFareQuote']['FareQuoteDetails']['JourneyList']['Attr']['IsRefundable'] == true) {echo 'Yes';}else{ echo "No";}  ?></td>
                    <td><?php echo $fare_quote['UpdateFareQuote']['FareQuoteDetails']['JourneyList']['ResultToken']; ?></td>
                    <?php

                  }else{
                    echo "<td></td>";
                  } $flag++;
                  ?>
                  <?php echo "</tr>"; }$i++;} ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


    </body>

    </html>