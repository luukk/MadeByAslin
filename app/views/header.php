<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php
        for ($i=0; $i <count($a); $i++) {
          if($i < 3 ){
            echo '<li><a class="scroll" target="'.strtolower(str_replace(' ','-',$a[$i])).'">'. $a[$i].'</a></li>';
          }
        }
          ?>
        <li><a href="<?php echo $actual_link; echo '&lan=en'; ?>"><img src="app/img/content/engeland.png" width="20" height="20" alt="Taal Engels"/></a></li>
        <li><a href="<?php echo $actual_link; echo '&lan=nl'; ?>"><img src="app/img/content/nederland.png" width="20" height="20" alt="Taal Engels"/></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--End Navi-->
<!--Start Banner-->
<?php

 ?>
<div class="banner rampgebied disaster-area">
    <div class="container">
        <div class="row bannercenter">
            <div class="col-md-12">
              <h1><?php echo $a[3]; ?></h1>
           </div>
        </div>
        <div class="row rowworld">
            <div class="col-md-12 col-sm-12 wereldkaart">
            <div class="gps">
            <div class="gps_ring"></div>
            </div>
            <img src="app/img/content/wereldkaart.png" id="wereldkaartgroot" class="img-responsive" alt="Wereldkaart"/>
            <img src="app/img/content/wereldkaartmiddel.png" id="wereldkaartmiddel" class="img-responsive" alt="Wereldkaart"/>
            </div>
        </div>
        <div class="row mobileaantal">
          <?php
            for ($i=4; $i < count($a); $i++) {
              if($i < 6 ){
                echo '<div class="col-md-2 col-sm-2">';
                if($i == 5){
                  echo '<h3 id="gewonden">0</h3>';
                }else{
                  echo '<h3 id="doden">0</h3>';
                }
              echo '<div class="aantal">
                  <h3>'.$a[$i].'</h3></div>
                </div>';
              }
            }
          ?>
            <div class="col-md-4 col-sm-4 doneerholder">
              <a href="https://www.gofundme.com/aslinzeeman?utm_medium=wdgt">
                <figure>
                    <img src="app/img/content/doneer.png" width="300" height="94" class="img-responsive" id="doneer" alt="Doneer Knop"/>
                    <figcaption>
                      <div id="puls-donate-button"><div id="puls-donate-ring"></div></div>
                    </figcaption>
                </figure>
              </a>

            </div>
            <?php
              for ($i=6; $i < count($a); $i++) {
                if($i < 8 ){
                  echo '<div class="col-md-2 col-sm-2">';
                  if($i == 7){
                    echo '<h3 id="dakloos">0</h3>';
                  }else{
                    echo '<h3 id="alleen">0</h3>';
                  }
                echo '<div class="aantal">
                      <h3>'.$a[$i].'</h3>
                    </div></div>';
                }
              }
            ?>
        </div>
    </div>
</div>
