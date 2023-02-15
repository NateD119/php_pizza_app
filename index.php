<?php
$small = HTML_SPECIALCHARS(INPUT_GET, 'size');
$medium = HTML_SPECIALCHARS(INPUT_GET, 'size');
$large = HTML_SPECIALCHARS(INPUT_GET, 'size');

$pepperoni = HTML_SPECIALCHARS(INPUT_GET, 'pepperoni');
$black_olives = HTML_SPECIALCHARS(INPUT_GET, 'black_olives');
$green_olives = HTML_SPECIALCHARS(INPUT_GET, 'green_olives');
$green_peppers = HTML_SPECIALCHARS(INPUT_GET, 'green_peppers');
$banana_peppers = HTML_SPECIALCHARS(INPUT_GET, 'pepperoni');
$feta_cheese = HTML_SPECIALCHARS(INPUT_GET, 'feta_cheese');
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
                <input type="radio" name="size" value="small">Small--$5 plus $.50 per topping<br>
                <input type="radio" name="size" value="medium">Medium--$7 plus $1.00 per topping<br>
                <input type="radio" name="size" value="large">Large--$9 plus $1.50 per topping<br><br>
            
            What toppings? <br>
            
                <input type="checkbox" name="pepperoni" value="pepperoni">Pepperoni<br>
                <input type="checkbox" name="black_olives" value="black_olives">Black Olives<br>
                <input type="checkbox" name="green_olives" value="green_olives">Green Olives<br> 
                <input type="checkbox" name="green_peppers" value="green_peppers">Green Peppers<br> 
                <input type="checkbox" name="banana_peppers" value="banana_peppers">Banana Peppers<br>
                <input type="checkbox" name="feta_cheese" value="feta_cheese">Feta Cheese<br><br><br>
                <input type="submit" value="Submit">
            </form>
        </p>
        
        
        <?php
        $total = 0;
        
        if(name == 'size'){
            if(value == 'small'){
                $total += 5;
            }
            if(value == 'medium'){
                $total += 7;
            }
            if(value == 'large'){
                $total += 9;
            }
        }//end if statement for size
        
        if (value == 'pepperoni'){
            if(name == 'size' && value == 'small'){
                $total += .50;
            }
            if(name == 'size' && value == 'medium'){
                $total += 1.00;
            }
            if(name == 'size' && value == 'large'){
                $total += 1.50;
            }
        }// end pepperoni if statement
        
        if (value == 'black_olives'){
            if(name == 'size' && value == 'small'){
                $total += .50;
            }
            if(name == 'size' && value == 'medium'){
                $total += 1.00;
            }
            if(name == 'size' && value == 'large'){
                $total += 1.50;
            }
        }// end black_olives if statement
        
        if (value == 'green_olives'){
            if(name == 'size' && value == 'small'){
                $total += .50;
            }
            if(name == 'size' && value == 'medium'){
                $total += 1.00;
            }
            if(name == 'size' && value == 'large'){
                $total += 1.50;
            }
        }// end green_olives if statement
        
        if (value == 'green_peppers'){
            if(name == 'size' && value == 'small'){
                $total += .50;
            }
            if(name == 'size' && value == 'medium'){
                $total += 1.00;
            }
            if(name == 'size' && value == 'large'){
                $total += 1.50;
            }
        }// end green_peppers if statement
        
        if (value == 'banana_peppers'){
            if(name == 'size' && value == 'small'){
                $total += .50;
            }
            if(name == 'size' && value == 'medium'){
                $total += 1.00;
            }
            if(name == 'size' && value == 'large'){
                $total += 1.50;
            }
        }// end banana_peppers if statement
        
        if (value == 'feta_cheese'){
            if(name == 'size' && value == 'small'){
                $total += .50;
            }
            if(name == 'size' && value == 'medium'){
                $total += 1.00;
            }
            if(name == 'size' && value == 'large'){
                $total += 1.50;
            }
        }// end feta_cheese if statement
        
        echo "Pizza Total: $total";
        ?>
    </body>
</html>

