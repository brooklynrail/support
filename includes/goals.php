<?php
  $current_amt = '1500';
  $total_amt = '50000';
  $backers = '3';
  $percentChange = number_format(($current_amt / $total_amt) * 100, 0);
  $future = date_create("2019-12-31");
  $now = date_create(date("Y/m/d"));
  $diff = date_diff($future,$now);
  $days_left = $diff->format("%a");
?>

<section class="goals">

  <div class="progress-bar">
    <div class="progress" style="width:<?php echo $percentChange; ?>%"></div>
  </div>

  <p class="current_amt">$<?php echo number_format($current_amt); ?> <span>donated out of $<?php echo number_format($total_amt); ?></span></p>
  <p><?php echo $backers; ?> <span>donors</span></p>
  <p><?php echo $days_left; ?> <span>days remaining</span></p>

</section>
