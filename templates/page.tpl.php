

<div id="header">
  <div class="row">
    <div class="col-md-12">
      <?php print render ($page['header']); ?>
    </div>
  </div>
</div>    
</header>

<div class="">  
        <div class="banner">
      <?php print render ($page['banner']); ?>
        </div>
</div>  

<div class="container">  
        <div class="oferta">
      <?php print render ($page['oferta']); ?>
        </div>
</div> 

<div class="container">  
        <div class="oferta">
      <?php print render ($page['galeria']); ?>
        </div>
</div> 
  <!--<div class="container-fluid mb15">-->
    <!-- Brand and toggle get grouped for better mobile display 
    <div class="navbar-header" style="margin-top:-30px;">
        <button data-target=".navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
          <span class="sr-only">Skip navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
     </div>
-->

<!--<i class="fa fa-camera-retro fa-5x"></i> fa-5x -->


<div class="container">
  
      <?php print render ($page['content']); ?>
  
</div>
<div class="container">  
        <div class="oferta">
      <?php print render ($page['about']); ?>
        </div>
</div>

<div class="footer">
    <div class="container">
            <div class="row">
                <div class="col-md-4">    
                    <div class="first-menu-footer">
                      <?php print render ($page['footer_one']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="second-menu-footer">
                      <?php print render ($page['footer_second']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="third-menu-footer">
                      <?php print render ($page['footer_third']); ?>
                    </div>
                </div>    
            </div>
          </div>        
</div>