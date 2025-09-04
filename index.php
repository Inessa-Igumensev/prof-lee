<?php
  require('./code/readEcho.php');
  $ISDEV=true;
  $my_name = "Prof.Lee";
  $welcome = "Welcome to my Website";
  require_once('./code/index.php');
  require_once('./components/card.php');
  showHeader();
  showHero();
?>
  
<section>
  <div class="p-8">
    <div class="grid grid-cols-3 gap-4">
          
      <?php 
        createCard(card_title: "google", card_content: "fgggggg" , card_link:"https//www.google.com");
        createCard(card_title: "amazon", card_content: "ggggggg" , card_link:"https//www.amazon.com");
        createCard(card_title: "ebay", card_content: "fdddddd" , card_link:"https//www.ebay.com");
      ?>
      
    </div>
  </div>
</section>

<?php require_once('./include/footer.php');?>
