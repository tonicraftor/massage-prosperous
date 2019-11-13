<?php
  $page_index = 0;
  include "header.php";
  include "service_list.php";
?>

<!-- Section -->
<section>
  <div class="sec-cover">
    <div class="cover-txt respon">
      <h1>MASSAGE</h1>
      <h3>Open: 9:00 - 24:00 (Mon-Sun)<br><span class="small">Check in before: 23:00</span></h3>
      <p><a href="<?php echo SOCIALLINKS['facebook']; ?>"><img src="img/facebook.svg"></a>
        <a href="<?php echo SOCIALLINKS['twitter']; ?>"><img src="img/Twitter.svg"></a>
        <a href="<?php echo SOCIALLINKS['youtube']; ?>"><img src="img/youtube.svg"></a>
        <a href="<?php echo SOCIALLINKS['instagram']; ?>"><img src="img/instagram.svg"></a>
      </p>
    </div>
    <div class="cover-img">
      <video controls autoplay loop muted style="width:100%;">
        <source src="photos/video-1.mp4" type="video/mp4">
        <img src="photos/photo-1.jpg">
      </video>
    </div>
    <div class="page-bar">
      <a href="services.php" class="bar1">Discover Massage</a><a href="booking.php" class="bar2">Book a Massage</a>
    </div>
    
  </div>
</section>
<section>
  <div class="sec-intro">
    <div>
      <div class="float-txt-top float-up">
        <h2 class="float-in">Massage</h2>
        <h4 class="float-in">We believe in using the best massage therapy techniques for our clients.</h4>
        <p class="float-in">The alternative healing therapies that we offer, to restore and reconnect your body, mind and soul to full health, for your life-changing experience.If you wish to improve your holistic health, manage your wellness lifestyle or try one of the best massage in Houston, our massage is the place to start! Contact us now!
        </p>
        <a href="about.php" class="btn-more">Read More</a>
      </div>
      <div class="intro-img-top float-up">
        <img src="photos/photo-2.jpg" alt="photo-2">
      </div>
    </div>
    <div class="float-txt-bottom float-up">
      <h2 class="float-in">Hiring</h2>
      <h4 class="float-in">Licensed professional massage therapists are needed.</h4>
      <p class="float-in"> The Opportunity to Become One of Us. Gender unlimited. Nationality unlimited.
      </p>
      <a href="recruitment.php" class="btn-more">Read More</a>
    </div>
    <div class="intro-img-bottom float-up"></div>
  </div>
</section>
<section>
  <div class="sec-class-book float-up">
    <h2>Book a Massage</h2>
    <?php
    $typecount = count(SERVICELIST);
    for($i = 0; $i < $typecount; $i++):
      $type = SERVICELIST[$i];
    ?>
    <h3><?php echo $type['title']; ?></h3>
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
            <a href="service-page.php?type=<?php echo $i; ?>&sub=<?php echo $j; ?>&page=0"></a>
          </div>
        </div>
        <div class="card-body">
          <a class="card-title" href="service-page.php?type=<?php echo $i; ?>&sub=<?php echo $j; ?>&page=0"><?php echo $subtype['name']; ?></a>
          <p class="card-text"><?php echo $subtype['price']; ?><br><a href="membercard.php">
            <img src="img/Member.svg"  title="member price" class="member-icon">
            <?php echo isset($subtype['member_price'])?$subtype['member_price']:'not available'; ?></a></p>
          <a class="book-btn-1" href="schedule.php?type=<?php echo $i; ?>&sub=<?php echo $j; ?>">Book Now</a>
        </div>
      </div>
      <?php endfor; ?>
    </div>
    <?php endfor; ?>
  </div>
</section>
<!--section>
  <div class="sec-featured">
    <h4>As Featured On</h4>
    <div class="featured-imgs">
      <div class="float-up"><img src="img/featured-1.png" alt="featured-1"></div><div class="float-up"><img src="img/featured-2.png" alt="featured-2"></div><div class="float-up"><img src="img/featured-3.png" alt="featured-3"></div><div class="float-up"><img src="img/featured-4.png" alt="featured-4"></div><div class="float-up"><img src="img/featured-5.png" alt="featured-5"></div>
    </div>
  </div>
</section-->
<section>
  <div class="sec-phone-send float-up">
    <div class="sec-phone-txt">
      <h2>Subscribe</h2>
      <p>&nbsp;</p>
    </div>
    <form id="phoneForm">
      <!--input type="text" size="4" name="state_code" placeholder="+1" autocomplete="country-code"-->
      <input type="email" size="20" name="email" placeholder="Email" autocomplete="email">
      <button type="submit">Send</button>
    </form>
  </div>
</section>
<?php 
 include "footer.php";
?>
