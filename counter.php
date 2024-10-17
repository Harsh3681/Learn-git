<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter Program</title>
</head>
<body>
    
    <?php 
    
    // PHP program to illustrate working of count() 
    $array = array('names' => array('Aakash', 'Ravi', 'Prashant'), 
                    'rollno' => array('5', '10', '15')); 
        
    // recursive count - mode as 1 
    echo("Recursive count: ".count($array,1)."\n"); 
        
    // normal count - mode as 0 
    echo("Normal count: ".count($array,0)."\n"); 
        
    ?> 
</body>
</html>