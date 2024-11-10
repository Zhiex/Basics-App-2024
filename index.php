<title>PHP BASICS</title>
<style>
    /* CSS COMMENT*/
    .alert {
        color: yellow;
        background-color: red;
    }
    .passed {
        color: yellow;
        background-color: green;
    }
</style>
<HEAd>
    <body>
       <!--THIS IS HTML COMMENT-->

        <?php
         /* Multiline comment
         1. comment
         2.Echo, Display
         3.Variables & operator
         4.Control Flow
         5.ds/FunctionLooping
         6.Metho
         7. Data Structures -Arrays,Tree ,Heap, Graph
         */
        $var1 = 1234; // Signle-line comment
        echo "My first Vairbale now holds" . $var1 . "<br>";  // String Concatenation
          //echo "Double quote";
        
         $l = 10.5;
         $w = 7.25;
         $area = $l * $w;

         echo 'Length:' . $l . '<br>';
         echo 'Width: ' . $w . '<br>';
        echo ' Area: ' . $area . '</br>';
         //echo 'single quote';
         /* Is this a php comment? */
        ?>
          <h2>Temperature Calculator</h2>
        <?php 
         $celsius =  50; //°C
         $fahrenheit = ($celsius * (9/5)) + 32; //(50°C x 9/5) + 32 = 122°F 
        ?>
        <table border="1">
            <tr>
                <td>Celsius:</td>
                <td width="100" align="right">
                    <b><?php echo $celsius; ?> °C</b>
                </td>
                <tr>
                    <td>Fahrenheit:</td>
                    <td  width="100" align="right">
                    <b><?php echo $fahrenheit; ?> °F</b>
                    </td>
                </tr>
            </tr>
        </table>
        
        <h2> Grading Scale </h2> 
        <?php
        $grade = 40;
        echo "Grade = " . $grade . "<br>";
        echo "Grade Remark =";
        $alert = false;
      
        /*CONTROL FLOW
        100 -75 = GooD
        50 - 75 = PASSING
         49 and Below = Failed
         */ 
        if ($grade >= 75 && $grade <= 100) {
          echo "GooD";
          $alert = false;

        } elseif ($grade >= 50 && $grade <= 74 ){
        echo "Passing";   
        $alert = false;
    } elseif ($grade >= 0 && $grade <= 49 ){
        echo "Failed";
        $alert = true;
        }else{
        echo " Invalid Grade";
        $alert = true;
            }
            ?>
            <marquee 
            class=" <?php echo ($alert) ? 'alert' : ' passed' ?>"
            >ALERT!</marquee>
      <h2>LOOPING</h2>
    <?php  echo 1; ?>
    <?php  echo 2; ?>
    <?php  echo 3; ?>
    <?php  echo 4; ?>
    <?php  echo 5; ?>
       <br>

      <?php
      // do, while, for
    
      for ($i = 1; $i <= 20; $i++) { //initialization, checking, updating
        echo $i  . ' ';
        }
      ?>
        <h2>Function</h2>
        <?php
        //Function Definition/declaration
        function getDateToday() {  //identifier is the name of the function
         return date('Y-m-d H: i:s');
        }
        echo getDateToday() . '<br>'; //Function call

        function printCapitallized($str) {
             echo strtoupper($str);
        }
        printCapitallized("RIZAL");
         ?>
 
        <h2>Data Structures -array</h2>
        <?php 
        //FIXED NUMBER
        $score1 = 10;
        $score2 = 15;
        $score3 = 16;
        $score4 = 12;
        $score5 = 17.5;
        $sum = $score1 + $score2 + $score3 +$score4 +$score5;
        $ave = $sum / 5;
       ?>
        sum: <b><?php echo $sum; ?> </b><br>
        Average: <b> <?php echo $ave; ?> </b><br>
        <hr>
    <?php 
        //using Aarray
        //       0   1   2   3   3  4 
    $scores  = [10, 15, 16, 12, 17.5];
    $sum = 0;
    for ($i = 0; $i < count($scores); $i++) {
        $sum += $scores[$i];

    }
    $ave = $sum / count($scores);
    ?>
     sum: <b><?php echo $sum; ?> </b><br>
     Average: <b> <?php echo $ave; ?> </b><br>
    </body>

 
</HEAd>