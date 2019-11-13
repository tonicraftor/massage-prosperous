<?php
  $page_index = 2;
  include "header.php";
  include "service_list.php";
  $getarr = filter_input_array(INPUT_GET);
  $type = SERVICELIST[$getarr['type']];
  $subtype = $type['list'][$getarr['sub']];
?>

<!-- Section -->
<section>
  <div class="sec-service-page">
    <a class="link-go-back" href="<?php echo PAGELIST[$getarr['page']][1];?>">&lt;&nbsp;Back</a>
    <h4 class="service-title"><?php echo $subtype['name'];?></h4>
    <p class="service-price"><?php echo $subtype['price']; ?><br><a href="membercard.php">
      <img src="img/Member.svg"  title="member price" class="member-icon">
      <?php echo isset($subtype['member_price'])?$subtype['member_price']:'not available'; ?></a></p>
    <a class="book-btn-1" href="schedule.php?type=<?php echo $getarr['type']; ?>&sub=<?php echo $getarr['sub']; ?>">Book Now</a>
    <div class="service-img">
      <img src="photos/class-<?php echo $getarr['type']+1;?>-<?php echo $getarr['sub']+1;?>.jpg" alt="<?php echo $subtype['name'];?>">
    </div>
    <div class="service-desc">
      <p><?php echo $type['descr'];?><br><br><?php echo $subtype['descr'];?></p>
      <p>Order Online</p>
      <hr>
      <div>
        <h4 class="service-title"><?php echo $subtype['name'];?></h4>
        <p class="service-price"><?php echo $subtype['price']; ?><br><a href="membercard.php">
          <img src="img/Member.svg"  title="member price" class="member-icon">
          <?php echo isset($subtype['member_price'])?$subtype['member_price']:'not available'; ?></a></p>
        <a class="book-btn-1" href="schedule.php?type=<?php echo $getarr['type']; ?>&sub=<?php echo $getarr['sub']; ?>">Book Now</a><br><br>
      </div>
      <hr>
      <br><br>
      <p>Location &amp; Contact Details</p>
      <p class="font-weight-bold">Email: newbendesign@gmail.com</p>
    </div>
  </div>
</section>

<?php 
 include "footer.php";
?>
