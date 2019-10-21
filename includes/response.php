<div id="response" class="usa-prose">

  <!-- Start Braintree -->
  <h2><?php echo($header)?></h2>
  <p class="message"><?php echo($message)?></p>

  <div class="receipt">
    <p><strong>The Brooklyn Rail</strong></p>

    <p><?php echo($transaction->createdAt->format('F j, Y'))?> at <?php echo($transaction->createdAt->format('g:i a'))?></p>
    <p>Transaction id: <?php echo($transaction->id)?></p>

    <?php if (@ $transaction->paypal['payerEmail']) { ?>
      <p>PayPal: <?php echo($transaction->paypal['payerEmail'])?></p>
    <?php } ?>

    <?php if (@ $transaction->venmoAccount['username']) { ?>
      <p>Venmo: <?php echo($transaction->venmoAccount['username'])?></p>
    <?php } ?>

    <p>Amount: $<?php echo($transaction->amount)?></p>
  </div>

  <blockquote>“Never doubt that a small group of thoughtful, committed citizens can change the world; indeed, it is the only thing that ever has.”</blockquote>
  <cite>— Margaret Mead</cite>

  <p>In solidarity with love, and courage,<br/>
    — Phong Bui & the Rail</p>
  <hr/>
  <!-- end Braintree -->

  <pre>
    <?php print_r('======================'); ?>
    <?php print_r($transaction); ?>
    <?php print_r('======================'); ?>
  </pre>

  <a class="btn btn-lg btn-primary" href="https://brooklynrail.org/">Read our current issue »</a>

  <div class="meta">
    <p>The <em>Brooklyn Rail</em> is a nonprofit 501(c)(3) organization. Your donation is fully deductible. Donations are non-refundable. Questions? Email us at <a href="mailto:store@brooklynrail.org?subject=Donation%20Question">store@brooklynrail.org</a></p>
    <p><a href="https://brooklynrail.org/contact" title="Contact the Rail">Contact Us</a> | <a title="Terms of Service" href="https://brooklynrail.org/terms-of-service">Terms of Service</a> | <a href="https://store.brooklynrail.org/store_web_pages/index/14" title="Privacy Policy">Privacy Policy</a></p>
  </div>
</div>
