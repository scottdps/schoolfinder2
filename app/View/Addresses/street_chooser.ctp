 <?php echo $this->Html->css('jquery-ui-1.10.3.custom.css'); ?>
    <?php echo $this->Html->script('jquery-1.10.1.js');  ?>
    <?php echo $this->Html->script('jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js');  ?>


<script>
    
    
  $(function() {
 
  var Streets= <?php echo $Streets; ?>; 
    $('#numfields').hide();
    $('#street').autocomplete({ 
     source: Streets,
     change: function (event, ui) {

        $('#streetID').val(ui.item.id);
        $.ajax({
            url: 'ajaxGetStreets',
            cache: false,
            type: 'GET',
            success: function (data) {
                $('#addressInstruction').html(data);
           
            },
             error: function (data) {
              //  $('#showMe').html('Error, it has failed');
            //    alert('in error functions')
            }
        });
     } 
 });

  });  
  </script>  



   

<div class="addresses form">
        <div class="SchoolMessage">Dearborn School Finder</div>
        <div class="SchoolMessageSm">
        Type your street name in the text box.  
        <br>If you live at 18700 Audette type the word <strong>audette</strong>. (Capitolization does not matter)
        <br>Select it when it appears in the list, then click "Next->"
        </div>
    <?php
        echo $this->Form->create('Address', array('action' => 'numChooser'));
?>
	<fieldset>
		<legend><?php  echo __(''); ?></legend>
	<?php
        echo "<table border='0'><tr>";
        echo "<td>";
       
        
        echo $this->Form->input('',array('type' => 'text','class' => 'textF2','id' =>'street', 'name' => 'streetName'));
        
        
        echo $this->Form->input('StreetID',array('type' => 'hidden',  'id' =>'streetID','name' => 'streetID' ));
        echo "</td>";
        echo "<td>";
        echo "</td></tr></table>";
       
        
	?> 

	</fieldset>
    
        <?php 
        
        
        
        echo $this->Form->end(__('Next->')); ?>
    
</div>



<div class="actions">

    <ul>
        <li><a href="http://dearbornschools.org"> Return DPS Home page </a></li>
	</ul>
</div>
