<!DOCTYPE html>
    <html>
        <body>

            <?php  

            // $a = 0;

           /* WHILE LOOP
           
           while ($a <= 8) {
                echo ($a);
                $a++;
            } */
            
           /* DO WHILE LOOP do {
                echo ($a);
                $a++;
            }
            while ($a < 6) */

            /* FOR LOOP for ($a = 0; $a <= 7; $a++) {
                echo($a); 
            } */

            /* FOREACH LOOP $fruits = array('banana' => 'yellow', 'watermelon' => 'pink', 'apple' => 'red');

                foreach ($fruits as $name => $color) {
                    echo($name. ' is '. $color. '<br />');
                }
            */
            

            //1.variants

// echo(" - - 1.variants - - ");
// $i=0;
// while($i<10){
//  if($i%2 == 1){
//      echo($i. " ");
//  }

//  $i++;
// }
// while($i<20){
//  if($i%2 == 0){
//      echo($i. " ");
//  }

//  $i++;
// }
// echo(" - - 2.variants - - ");
// for($i=1; $i<10; $i+=2){
//  echo($i." ");
// }
// for($i=10; $i<20; $i+=2){
//  echo($i." ");
// }

// echo(" - - 3.variants - - ");
// $i=1;
// while($i<10){
//  echo($i. " ");
//  $i +=2 ;
// }
// $i=10;
// while($i<20){
//  echo($i. " ");
//  $i +=2 ;
// }


// echo(" - - 4.variants - - ");
// $i=1;
// while($i<20){
//  if($i < 10){
//      echo($i. " ");
//  }
//  else {
//      echo( ($i-1) . " ");
//  }
//  $i += 2;
// }

// echo(" - - 5.variants - - ");

// for($i=1; $i<20; $i += 2){
//  if($i < 10){
//      echo($i. " ");
//  }
//  else {
//      echo( ($i-1) . " ");
//  }
// }


// echo(" - - 6.variants - - ");

// for($i=1; $i<=10; $i++){
//  if($i <= 5){
//      echo( ($i*2 -1) ." ");
//  }
//  else {
//      echo( ($i * 2 - 2) . " ");
//  }
// }
// echo(" - - 7.variants - - ");

// for($i=10; $i>=1; $i--){
//  if($i <= 5){
//      echo( ($i*2 -1) ." ");
//  }
//  else {
//      echo( ($i * 2 - 2) . " ");
//  }
// }

        function manaFunkcija () {
            // echo('Done! ');
        }

        function manaFunkcijaArParametru($var) {
            // echo($var . ' ');
        }

        function manaFunkcijaArNeobligatoParametru ($var = 'zivis') { // zivis=jebkas
            // echo($var . ' ');
        }

        function multipleParameters($a, $b = 0, $c = "c" , $d = 'finito') {
            // echo ($a . $b . $c . $d);
        }

        function kaapinaat($base, $pow = 2) {
            
            $result = 1;
            for($i = 0; $i < abs($pow); $i++) {
                $result *= $base;
            }

            if($pow <0 ){
                $result = 1/$result;
                }

            $result = round($result, 2); //skaitlis,kuru noapaļot un ar kādu precizitāti=līdz 2 cipariem cipariem aiz komata
            return $result;
        }

        $i=10;
        while($i>0) {
            echo($i . ' ');
            $i--;
            manaFunkcija();
            manaFunkcijaArParametru($i);

            $j = kaapinaat($i, 3); //tiek izsaukta funkcija 3.pakāpē
            // echo(kaapinaat($i)); tas pats, kas zemāk
            echo(' result is: ' . $j . ' ');
            echo(++$j);
        }
        // unset($i); --> lai izdzēstu $i vērtību

        // 2^3 = 2 * 2 * 2 = 4 * 2 = 8;
        // 2^(-3) = 1/(2^3)

        echo(" - - 8.variants - - ");
        $i=10;
        while($i>0){
            //echo($i . " ");
            $i--;
        
        manaFunkcija();
        $super = "Cool";
        manaFunkcijaArNeobligatoParametru($super);
        manaFunkcijaArNeobligatoParametru();
        multipleParameters(1,2,3,4);
        echo(' ');
        multipleParameters(1,2,3);
        echo(' ');
        multipleParameters(1);

        $a = 2.567;
            echo(round($a) . ' '); // noapaļo skaitli uz augšu --> 3
            echo(floor($a)); // paņem skaitli pirms komata --> 2

        function check($var) {
            if($var > 5) {
                return true;
            }
            return false;
        }
                echo( (int) check($a) );

            if ( check($a) ) {
                echo('yay');
            }
            else {
                echo('aww');
            }

        $a = ['a1' => 0, 'a2' => 1];

            echo(" ". $a['a3']);

                if( isset($a['a3']) ){
                    echo($a['a3']);
                }
                else {
                    $portion = (int) $a['a2'] - (int) $a['a1'];
                    echo($a['a2'] + $portion);
                }

        $salad = 'aboli bumbieri arbuzi banani tomati';
        $array = explode(' ', $salad); // google -> string to array php
        // var_dump($array);
        $salad2 = implode(' ', $array);
       //  var_dump($salad2);

        $string = 'Aija';
        $splitString = str_split($string);
        $splitString = implode("-", $splitString);
        $splitString = strtolower($splitString);
        var_dump( $splitString );
        ?>  

    </body>
</html>