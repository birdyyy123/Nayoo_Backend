<html>
<body>
    

   <?php 
        //ร้าน 1
        $C1 = floor($_GET["money"] / 20);
        if ($C1 >= 10){
            $cound1 = floor($_GET["money"] / 20);
            $change1 = $_GET["money"] % 20;
        }
        else {
            $cound1 = floor($_GET["money"] / 25);
            $change1 = $_GET["money"] % 25;
        }
        $store1["number of pieces"] = $cound1;
        $store1["change"] = $change1;

        echo "Store1 have number of pieces = " . $store1["number of pieces"] . " , " , "change = " . $store1["change"] ;
        echo "<br>";



        //ร้าน 2


        $X = $_GET["money"];
        $number = floor($_GET["money"]/30);
        $cound2 = 0;
        if ($X >= 90){
            while ($X > 1){
                $X = floor($X / 90); // 3 ชิ้น แถม 1 ชิ้น
                $cound2 ++;
            }
        }
        $Sum = $number + $cound2;
        $change2 = $_GET["money"] % 30;

        $store2["number of pieces"] = $Sum;
        $store2["change"] = $change2;


        echo "Store2 have number of pieces = " . $store2["number of pieces"] . " , " , "change = " . $store2["change"] ;
        echo "<br>";


        if ($store1["number of pieces"] > $store2["number of pieces"]){
            echo "store1 is good.";
        }
        elseif ($store1["number of pieces"] == $store2["number of pieces"]){
            if($store1["change"] > $store2["change"]){
                echo "store1 is good.";
            }
            elseif($store1["change"] < $store2["change"]){
                echo "store2 is good.";
            }
            else {
                echo "the same";
            }
        }
        else {
            echo "store2 is good.";
        }

    ?>

</body>
</html>