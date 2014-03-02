 <?php echo $this->Html->css('jquery-ui-1.10.3.custom.css'); ?>
    <?php echo $this->Html->script('jquery-1.10.1.js');  ?>
    <?php echo $this->Html->script('jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js');  ?>


<script>
    
    
  $(function() {
 
  var streetNumber = <?php echo $streetNumber; ?>; 
    $('#streetNumber').autocomplete({ 
     source: streetNumber,
     change: function (event, ui) {

        $('#addressID').val(ui.item.id);
        $.ajax({
            url: 'ajaxGetNumber',
            cache: false,
            type: 'GET',
            success: function (data) {
                //$('#addressInstruction').html(data);

            },
             error: function (data) {
                $('#showMe').html('Error, it has failed');
              //  alert('in error functions')
            }
        });
     } 
 });

  });  
  </script>  



  




<div class="addresses form">
    
    <div class="SchoolMessage">Dearborn School Finder</div>
        <div class="SchoolMessageSm">
        Type in your street number on 
        <?php echo $streetName.' '; ?>
        in the text box.  
        <br>Select it when it appears in the list, then click "Next->"
        </div>

    
    
<?php echo $this->Form->create('Address', array('action' => 'showSchools'));
?>
	<fieldset>
		
	<?php
        
         
        echo "<table border='0'><tr>";
        echo "<td>";
        echo $this->Form->input('',array('type' => 'text','class' => 'textF2','id' =>'streetNumber', 'name' => 'streetNumber'));
        echo $this->Form->input('StreetID',array('type' => 'hidden',  'id' =>'addressID','name' => 'addressID' ));
        echo "</td>";
        echo "<td>";
        echo "</td></tr></table>";
       
       
	?> 

	</fieldset>
        <?php echo $this->Form->end(__('Next->')); ?>  
</div>



<div class="actions">
	<ul>
            <li><a href="http://dearbornschools.org"> Return DPS Home page </a></li>
            <li><a href="streetChooser"> Choose a different street </a></li>
	</ul>
</div>
