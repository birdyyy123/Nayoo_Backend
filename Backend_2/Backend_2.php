<html>
<body>

   <?php 

        if ($_GET["product_price"] > $_GET["money"]){
            echo "You don't have enough money to make a purchase.";
        }
        elseif($_GET["money"] == $_GET["product_price"]){
            echo "No change, Thank you.";
        }
        else{
            $B = $_GET["money"] - $_GET["product_price"];
            while($B > 0) {
                if ($B >= 500){
                    $B500 = floor($B / 500);
                    $B = $B % 500;
                    $change["500 bath"] = $B500;
                }
                elseif ($B >= 100){
                    $B100 = floor($B / 100);
                    $B = $B % 100;
                    $change["100 bath"] = $B100;
                }
                elseif ($B >= 50){
                    $B50 = floor($B / 50);
                    $B = $B % 50;
                    $change["50 bath"] = $B50;
                }
                elseif ($B >= 10){
                    $B10 = floor($B / 10);
                    $B = $B % 10;
                    $change["10 bath"] = $B10;
                }
                elseif ($B >= 5){
                    $B5 = floor($B / 5);
                    $B = $B % 5;
                    $change["5 bath"] = $B5;
                }
                else {
                    $B1 = $B;
                    $B = 0;
                    $change["1 bath"] = $B1;
                }
              }
            foreach($change as $change => $change_value) {
                echo $change . " = " . $change_value;
                echo "<br>";
            }
        }

    ?><br>

</body>
</html>