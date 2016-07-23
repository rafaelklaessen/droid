<!-- Status bar -->
<section id="status-bar" class="status-bar">
  <section class="col col-left">
    <section class="item-container">
      <span id="carrier-status" class="carrier-status item">Carrier</span>
    </section>
  </section>
  <section class="col col-right">
    <section class="item-container">
      <span id="wifi-status" class="wifi-status item">
        <img src="<?php echo $systemiconsFolder; ?>/icon-wifi.svg" alt="Full WiFi icon">
      </span>
      <span id="battery-status" class="battery-status item">
        <img src="<?php echo $systemiconsFolder; ?>/icon-battery.svg" alt="Full battery icon">
      </span>
      <time id="time" class="time time-status item">
        <span class="time-hours">6</span><span class="time-seperator">:</span><span class="time-minutes">00</span>
      </time>
    </section>
  </section>
</section>
