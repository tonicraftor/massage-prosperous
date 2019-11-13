<?php
  $page_index = 2;
  include "header.php";
  include "service_list.php";
?>

<!-- Section -->
<section>
  <div class="sec-page-title float-up">
    <h2>Massage Services</h2>
  </div>
</section>
<section>
  <div class="sec-services">
    <?php
    $typecount = count(SERVICELIST);
    for($i = 0; $i < $typecount; $i++):
      $type = SERVICELIST[$i];
    ?>
    <div class="float-txt">
      <div class="float-txt-top float-up">
        <h4 class="float-in"><?php echo $type['title']; ?></h4>
        <p class="float-in"><?php echo $type['descr']; ?></p>
      </div>
      <?php
      $listcount = count($type['list']);
      for($j = 0; $j < $listcount; $j++):
        $subtype = $type['list'][$j];
      ?>
      <div class="intro-card">
        <div>
          <div class="img-linkholder">
            <img src="photos/class-<?php echo $i+1; ?>-<?php echo $j+1; ?>.jpg" alt="<?php echo $subtype['name']; ?>">
            <div class="img-link">
              <a href="service-page.php?type=<?php echo $i; ?>&sub=<?php echo $j; ?>&page=2"></a>
            </div>
          </div>
        </div><div>
          <a class="intro-name" href="service-page.php?type=<?php echo $i; ?>&sub=<?php echo $j; ?>&page=2"><?php echo $subtype['name']; ?></a>
          <p class="intro-descr"><?php echo $subtype['descr']; ?></p>
          <a class="book-btn-1" href="booking.php">Join Now</a>
        </div>
      </div>
      <?php endfor; ?>
    </div>
    <?php endfor; ?>
    <div class="clearfix"></div>
  </div>
</section>
<section>
  <div class="sec-services-img fade-in">
  </div>
</section>
<?php 
 include "footer.php";
?>
