<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deque Counter</title>
</head>
<body>

    <?php 
    
    // Declare a deque 
    $deck = new \Ds\Deque([1, 2, 3, 4, 5, 6]); 
    
    echo("Elements in the Deque\n"); 
    
    // Display the Deque elements 
    print_r($deck); 
    
    echo("\nNumber of elements in the Deque: "); 
    
    print_r($deck->count()); 
    
    ?>
    
</body>
</html>