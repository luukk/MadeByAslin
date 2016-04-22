<div class="thefooter doneren donate">
    <div class="container">
        <div class="row nepalees">
            <div class="col-md-8">
              <?php
                 $birth = 2016-$age;
                 for($i = 14; $i<count($a); $i++){

                 if($i ==14){
                   if($lan != 'en' || $lan !='nl'){


                   if($birth <18){

                 $substring = substr($a[$i],0,9);
                 $subsecond = substr($a[$i],11);

                  echo "<p>"."$substring"." jou"."$subsecond"."</p>";
                } elseif($lan == "en"){
                    $substring = str_replace("She","He",$a[$i]);
                 $substring = substr($a[$i],0,9);

                    $substring = str_replace("She","He",$a[$i]);
                    echo "<p>"."$substring"." "."</p>";

                }else{
                  $substring = str_replace("Zij","Hij",$a[$i]);
                 $substring = substr($a[$i],0,9);

                    $substring = str_replace("Zij","Hij",$a[$i]);


                    echo "<p>"."$substring"." "."</p>";
                }
              }else{
               echo "<p>"."$a[$i]"."</p>";
              }
                 }
                 }
                 ?>
            </div>
            <div class="col-md-4">
            <?php


            $birth = 2016-$age;
            if($birth < 18){
              ?>

              <img src="app/img/content/nepalees.png" class="img-responsive" alt="Nepalees kind"/>
              <?php
            }else{
              ?>
             <img src="app/img/content/Nepalees-ballentje.png" class="img-responsive" alt="Nepalees kind"/>
             <?php
             }

            ?>

            </div>
        </div>
 </div>

 <div class="white" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <?php
                for($i = 8; $i<count($a); $i++){
                if($i ==8){
                 echo "<h3>"."$a[$i]"."</h3>";
                }
                }
                ?>

                <div class="blackshit"><span class="euro">€</span><span class="text-right pull-right">2000,00</span></div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                 <?php
                for($i = 9; $i<count($a); $i++){
                if($i ==9){
                 echo "<h3>"."$a[$i]"."</h3>";
                }
                }
                ?>
                <div class="blackshit "><span class="euro">€</span><span class="text-right pull-right">40,00</span></div>
                </div>
            </div>
        </div>
 </div>

    <div class="container">
     <div class="row doneer">
         <div class="col-md-8">
            </div>
            <div class="col-md-4 donatefooter">
              <a href="https://www.gofundme.com/aslinzeeman?utm_medium=wdgt">
              <figure>
                  <img src="app/img/content/doneer.png" width="300" height="94" class="img-responsive" id="doneer" alt="Doneer Knop"/>
                  <figcaption>
                    <div id="puls-donate-button"><div id="puls-donate-ring"></div></div>
                  </figcaption>
              </figure>
            </a>
                </div>
     </div>
    </div>
</div>
    <footer>
          <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-8 col-sx-12 sitemap">
              <h3>Sitemap</h3>
                <?php
                for($i = 10; $i<count($a); $i++){
                if($i ==10){
                 echo "<p class='scroll' target='rampgebied'>"."$a[$i]"."</p>";
                }
                }

                for($i = 11; $i<count($a); $i++){
                if($i ==11){
                 echo "<p class='scroll' target='aanpak'>"."$a[$i]"."</p>";
                }
                }
                 for($i = 12; $i<count($a); $i++){
                if($i ==12){
                 echo "<p class='scroll' target='doneer'>"."$a[$i]"."</p>";
                }
                }
                ?>

              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
              <?php
                for($i = 13; $i<count($a); $i++){
                if($i ==13){
                 echo "<h3>"."$a[$i]"."</h3>";
                }
                }
              ?>
              <p>
              <i class="fa fa-facebook-official"></i><p>Facebook</p>
              <i class="fa fa-twitter-square"></i> <p>Twitter</p>
              </p>
              <p>
              <i class="fa fa-instagram"></i><p>Instagram</p>
              <i class="fa fa-envelope"></i><p>Mail</p>
              </p>
              </div>
          </div>
    </footer>
</body>
</html>
