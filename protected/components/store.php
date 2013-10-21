   <?php
    Yii::app()->clientScript->registerScript('showhidecolorvision' . $model->eye, "
        

 $(document).on('change', '#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_type', function() {
             if($(this).val()=='Not performed') 
             {
                $('#opthalmologicalcolorvisionest-form" . $model->eye . " #Opthalmologicalcolorvisionttest_notperformedcomment').show();
                $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_notperformedcomment').prev().show();
               
             }
             else
             {
                $('#opthalmologicalcolorvisionest-form" . $model->eye . " #Opthalmologicalcolorvisionttest_notperformedcomment').hide();
                $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_notperformedcomment').prev().hide();
             }
               if($(this).val()=='Other') 
             {
                $('#opthalmologicalcolorvisionest-form" . $model->eye . " #Opthalmologicalcolorvisionttest_other').show();
                $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_other').prev().show();
               
             }
             else
             {
                $('#opthalmologicalcolorvisionest-form" . $model->eye . " #Opthalmologicalcolorvisionttest_other').hide();
                $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_other').prev().hide();
             }
             
                if(($(this).val()=='Saturated Panel D-15')||($(this).val()=='Desaturated Panel D-15') ) 
             {
                $('#opthalmologicalcolorvisionest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_confusionindex').show();
                $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_confusionindex').prev().show();
                    $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_angle').show();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_angle').prev().show();
               
             }
             else
             {
                $('#opthalmologicalcolorvisionest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_confusionindex').hide();
                $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_confusionindex').prev().hide();
                     $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_angle').hide();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_angle').prev().hide();
             }
             

           });


        
 $(document).ready(function(){
       
            
//hide all that need to be hidden
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_notperformedcomment').hide();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_notperformedcomment').prev().hide();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_other').hide();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_other').prev().hide();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_confusionindex').hide();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_confusionindex').prev().hide();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_angle').hide();
         $('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_angle').prev().hide();
             
//show depending on which dropdown is selected

$('#opthalmologicalcolorvisiontest-form" . $model->eye . " #Opthalmologicalcolorvisiontest_type').trigger('change');



            }); ", CClientScript::POS_READY);
    

    ?>
        
<?php
Yii::app()->clientScript->registerScript('showhidevisualacuity' . $model->eye, "
        
$(document).on('change', '#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_type', function() {
       // alert($(this).val());
             if($(this).val()=='ETDRS')
             {
                  $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_etdrsnumberofletters').show();
                  $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_etdrsnumberofletters').prev().show();
               
             }
             else{
               $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_etdrsnumberofletters').hide();
                  $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_etdrsnumberofletters').prev().hide();
            }

             if($(this).val()=='Lower than ETDRS')
             {
                  $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_fingercount').show();
                  $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_fingercount').prev().show();
                   $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_handmovement').show();
         $('#opthalmologicalvisualcuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_handmovement').prev().show();
            $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_lightperception').show();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_lightperception').prev().show();
               
             }
             else
             {
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_fingercount').hide();
                  $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_fingercount').prev().hide();
                   $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_handmovement').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_handmovement').prev().hide();
            $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_lightperception').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_lightperception').prev().hide(); 

            }


             if($(this).val()=='LEA')
             {
              $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_learesult').show();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_learesult').prev().show();
             }
             else
             {
             $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_learesult').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_learesult').prev().hide();
             }
             


             if($(this).val()=='Not performed')
             {
              $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_notperformedcomment').show();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_notperformedcomment').prev().show();
             }
             else
             {
             $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_notperformedcomment').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_notperformedcomment').prev().hide();
             }
             });
             
          $(document).on('change', '#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractiontype', function() {
             if($(this).val()=='Autorefractometer') 
             {
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionshere').show();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionshere').prev().show();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractioncylindre').show();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractioncylindre').prev().show();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionaxis').show();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionaxis').prev().show();
             }
             else
             {
                  $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionshere').hide();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionshere').prev().hide();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractioncylindre').hide();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractioncylindre').prev().hide();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionaxis').hide();
                $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionaxis').prev().hide();
             }
           });

        $(document).ready(function(){
        //alert('$model->eye');
            
//hide all that need to be hidden
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_notperformedcomment').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_notperformedcomment').prev().hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_etdrsnumberofletters').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_etdrsnumberofletters').prev().hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_learesult').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_learesult').prev().hide();
          $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_fingercount').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_fingercount').prev().hide();
          $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_handmovement').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_handmovement').prev().hide();
            $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_lightperception').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_lightperception').prev().hide();
          $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionshere').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionshere').prev().hide();
            $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractioncylindre').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractioncylindre').prev().hide();
            $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionaxis').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractionaxis').prev().hide();
            $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_iop').hide();
         $('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_iop').prev().hide();
             
//show depending on which dropdown is selected

$('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_type').trigger('change');
$('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_refractiontype').trigger('change');
$('#opthalmologicalvisualacuitytest-form" . $model->eye . " #Opthalmologicalvisualacuitytest_ioptype').trigger('change');


            });
            
            
    
    
    ", CClientScript::POS_READY);
    

    ?>
	