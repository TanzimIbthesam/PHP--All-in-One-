<?php 
//array_column();
//// An array that represents a possible record set returned from a database
//array_column(array, column_key, index_key)
$playersprofile=array(
     array(
     'Name'=>'Messi',
     'Position'=>'Attacking Mid',
     'Age'=>29,
     'Club'=>'F.C Barcelona'
    ),
      array(
        'Name'=>'Ronaldo',
        'Position'=>'Left Winger',
        'Age'=>31,
        'Club'=>'RealMadrid FC'
    ),
     array(
        'Name'=>'Mbappe',
        'Position'=>' Winger',
        'Age'=>21,
        'Club'=>'PSG'
        )

        
    );
    echo '<pre>';
    // print_r($playersprofile);
    $name=array_column($playersprofile,'Position');
    print_r($name);
    
    echo '</pre>';
    


?>