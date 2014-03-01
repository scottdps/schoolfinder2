 <?php echo $this->Html->css('jquery-ui-1.10.3.custom.css'); ?>
    <?php echo $this->Html->script('jquery-1.10.1.js');  ?>
    <?php echo $this->Html->script('jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js');  ?>

   
<div class="addresses form">
     <div class="SchoolMessage">
        <?php echo "Schools serving ".$schoolList[0]['Address']['CompleteAddress'];  ?>  
    </div>
      <div id="schoolsInfo">
        <?php 
           if(isset($schoolList[0]['Esschools']['name'])){
                echo '<div class="schoolName">'.$schoolList[0]['Esschools']['name'].'</div>';
                echo '<div class="schoolPhone">'.$schoolList[0]['Esschools']['phone'].'</div>';
                echo '<div class="schoolPhone">'.$schoolList[0]['Esschools']['url'].'</div>';

                echo '<div class="schoolName">'.$schoolList[0]['Msschools']['name'].'</div>';
                echo '<div class="schoolPhone">'.$schoolList[0]['Msschools']['phone'].'</div>';
                echo '<div class="schoolPhone">'.$schoolList[0]['Esschools']['url'].'</div>';
                
                echo '<div class="schoolName">'.$schoolList[0]['Hsschools']['name'].'</div>';
                echo '<div class="schoolPhone">'.$schoolList[0]['Hsschools']['phone'].'</div>';
                echo '<div class="schoolPhone">'.$schoolList[0]['Esschools']['url'].'</div>';
       } else {
           echo '<div class="schoolName">Sorry, we could not find your address"</div>';
       }	
       ?>
  </div>
    
    
    
</div>



<div class="actions">

	<ul>
<li><a href="http://dearbornschools.org"> Return DPS Home page </a></li>
<li><a href="numChooser"> Choose a different address </a></li>
<li><a href="streetChooser"> Choose a different street </a></li>


	</ul>
</div>
