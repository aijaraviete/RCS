<!DOCTYPE html>
    <html>
        <body>
            <?php  


                // $string = 'veikals';
                // $reverseString = strrev();
                // echo($reverseString);
                // $lengthString = strlen();
                // echo($lengthString);

                function manaFunkcija($string) {

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
                }
                
                $finalArray = implode(' ', $array);
                echo($finalArray);
            }

            $string = 'aija';
            $jaunastring = manaFunkcija($string);





            class Klase {

                public $name;
                public $surname;
                public $address;

                public function setName($name) {
                    $this->name = $name; // ??? sintakse ->
                }

                public function getName() {
                    return ($this->name);
                }

                public function setSurname($surname) {
                    $this->surname = $surname;
                }

                public function getSurname() {
                    return ($this->surname);
                }
               
            }
            
            $user = new Klase;

            $user->setName('Aija');
            $user->setSurname('Rāviete');
            
            echo 'First Name: ' . $user->getName();
            echo 'Surname: ' . $user->getSurname();



            



            ?>
        </body>
    </html>
