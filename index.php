<?php

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nate's Pizza Ordering App</title>
    </head>
    <body>
        <p>
            What size pizza? <br>
            <form action="index.php" method="get"> 
                <input type="radio" name="size" value="small">Small<br>
                <input type="radio" name="size" value="medium">Medium<br>
                <input type="radio" name="size" value="large">Large<br><br><br><br>
            
            What toppings? <br>
            
                <input type="checkbox" name="topping1" value="pepperoni">Pepperoni<br>
                <input type="checkbox" name="topping2" value="black_olives">Black Olives<br>
                <input type="checkbox" name="topping3" value="green_olives">Green Olives<br> 
                <input type="checkbox" name="topping4" value="green_peppers">Green Peppers<br> 
                <input type="checkbox" name="topping5" value="banana_peppers">Banana Peppers<br>
                <input type="checkbox" name="topping6" value="feta_cheese">Feta Cheese<br>
                
            </form>
        </p>
        
        
        <?php
        
        
        ?>
    </body>
</html>

