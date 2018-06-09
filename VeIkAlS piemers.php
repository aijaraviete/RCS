<!DOCTYPE html>
    <html>
        <body>
            <?php  

            // uzrakstīt funkciju,kas ekrānā izvada V e I k A l S

            function manaFunkcija($string) {
                // 1. echo($string) //veikals
                // 2. dabūt masīvu
                // 3. masīvā nomainīt uz lielajiem burtiem
                // (var iztikt) 4. savienot masīvu par tekstu

                // echo($string);

                $array = str_split($string);
                

                foreach ($array as $key => $value) {
                    if($key % 2 == 0) {
                        $array[$key] = strtoupper(
                            $array[$key]);
                    }
                    else {
                        $array[$key] = strtolower(
                            $array[$key]);
                    }
                    echo($array[$key]. ' ');
                }
                
                // print_r($array);
                $finalArray = implode(' ', $array);
                echo($finalArray);
                // return($finalArray);
            }

            $var = 'veikals';
            manaFunkcija($var);

            $result = manaFunkcija($var);
            echo($result);

            /* Ilvas kods:

            // 1. echo($string) //veikals
	// 2. dabuut masiivu
	// 3. masiivaa nomainiit uz lieliem burtiem
	// VAR IZTIKT 4. savienot masiivu par tekstu

	//echo($string);
	$array = str_split($string);
	
	foreach ($array as $key => $value) {
		if($key % 2 == 0){
			$array[$key] = strtoupper($array[$key]);
		}
		else{
			$array[$key] = strtolower($array[$key]);
		}
		//echo($array[$key]. " ");
	}

	//print_r($array);
	$finalArray = implode(" ", $array);
	echo($finalArray);
	return($finalArray);

	//V e I k A l S
}



$var= 'VEIKALS';
// manaFunkcija($var);
// manaFunkcija('VEIKALS');

$result = manaFunkcija($var);

echo($result);

*/

            ?>
        </body>
    </html>
