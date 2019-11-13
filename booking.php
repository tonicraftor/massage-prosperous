<?php
  $page_index = 3;
  include "header.php";
  include "service_list.php";
?>

<!-- Section -->
<section>
  <div class="sec-page-title float-up">
    <h2>Book Services</h2>
  </div>
</section>
<section>
  <div class="sec-class-book booking-page float-up">
    <?php
    $typecount = count(SERVICELIST);
    for($i = 0; $i < $typecount; $i++):
      $type = SERVICELIST[$i];
    ?>
    <h3 class="desc-title"><?php echo $type['title']; ?></h3>
    <p class="desc-para"><?php echo $type['descr']; ?></p>
    <div class="card-deck">
      <?php
      $listcount = count($type['list']);
      for($j = 0; $j < $listcount; $j++):
        $subtype = $type['list'][$j];
      ?>
      <div class="card">
        <div class="img-linkholder">
          <img src="photos/class-<?php echo $i+1; ?>-<?php echo $j+1; ?>.jpg" alt="<?php echo $subtype['name']; ?>">
          <div class="img-link">
            <a href="service-page.php?type=<?php echo $i; ?>&sub=<?php echo $j; ?>&page=3"></a>
          </div>
        </div>
        <div class="card-body">
          <a class="card-title" href="service-page.php?type=<?php echo $i; ?>&sub=<?php echo $j; ?>&page=3"><?php echo $subtype['name']; ?></a>
          <p class="card-text"><?php echo $subtype['price']; ?><br><a href="membercard.php">
            <img src="img/Member.svg"  title="member price" class="member-icon">
            <?php echo isset($subtype['member_price'])?$subtype['member_price']:'not available'; ?></a></p>
          <a class="book-btn-1" href="schedule.php??type=<?php echo $i; ?>&sub=<?php echo $j; ?>">Book Now</a>
        </div>
      </div>
      <?php endfor; ?>
    </div>
    <?php endfor; ?>
  </div>
</section>

<?php 
 include "footer.php";
?>
