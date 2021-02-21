<!DOCTYPE html>
<html>
    
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    
    <body>
        <?php
            //Using the echo command to use HTML inside PHP
            echo "<h1>Gabriel's Site</h1>";
            echo "<hr>";
            echo "<p> This is a site where I play with php </p>"; 
            echo "<p> Check the source code to understand what is going on </p>";
            echo "<hr>";
            echo "<br>";
            //Using Variables
            $characterName = "Gabriel";
            $characterAge = 23;
            echo "There was once a man named $characterName <br>";
            echo "He was $characterAge years old <br>";
            echo "He really liked the name $characterName <br>";
            echo "And also liked being $characterAge <br>";
            
            echo "<br>";
            echo "<hr>";
            echo "<br>"; 
            
            //Data Types
            $phrase = "string"; //String
            $age = 10;          //Integer
            $grade = 6.9;       //Float
            $flatEarth = false;  //Boolean
            $nothing = null;     //Null



            //Strings
            $string = "php basics";
            echo strtoupper($string);  //Puts string in upper case(strtolower can be used for the opposing effect)
            echo "<br>";
            echo strlen($string);      //Returns the length of the string     
            echo "<br>";
            echo $string[0];           //Returns the first element of the string
            echo "<br>";
            $string[0] = "P";          //Reassings an element of the string
            echo $string;
            echo "<br>";
            echo str_replace("Php", "PHP", $string); //Replaces the part of the string that's equal to the first argument with the second argument
            echo "<br>";
            echo substr($string, 4);   //Returns a slice of the string
            echo "<br>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";



            //Numbers 
            echo 77;
            echo "<br>";
            echo 7 + 7;
            echo "<br>";
            $num = 70;
            echo "<br>";
            echo $num;
            echo "<br>";
            $num ++;     //The ++ works as a += 1, -- has the opposing effect
            echo $num;
            echo "<br>";
            echo abs(-100);  //Returns absolute value of a number
            echo "<br>";
            echo pow(2,4);
            echo "<br>";
            echo sqrt(49);
            echo "<br>";
            echo max(2, 19);  //Returns the biggest of two numbers, min() does the opposite
            echo "<br>";
            echo round(3.2);  //Returns the number rounded
            echo "<br>";
            echo ceil(3.2);   //Returns the number rounded up
            echo "<br>";
            echo floor(3.4);   //Returns the number rounded down
            echo "<br>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";



            



        ?>
        <!--Getting Input--> 
        <form action="site.php" method="get">
            Name: <input type="text" name="userName">
            <input type="submit">
        </form>
        Your name is <?php 
        echo $_GET["userName"];
        ?>
        <br>
        <br>
        <hr>
        <br>
        <!--Making a simple calculator--> 
        <form action="site.php" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <input type="submit">
        </form>
        Answer: <?php  echo $_GET["num1"] + $_GET["num2"];?>
        <br>
        <br>
        <hr>
        <br>
        
        
        
        <!--POST method--> 
        <form action="site.php" method="post">
            Password: <input type="password" name="password">
            <input type="submit">
        </form>
        <?php
            //The GET method shows the input as a URL parameter, which isn't secure at all
            //POST will not put the input on the URL parameter
            echo $_POST["password"];
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        
        
        <!--Arrays--> 
        <?php 
            $friends = array("Chimo", "Amaya", "Taku", "Freya");
            echo $friends; //Will print the word "array"
            echo "<br>";
            echo $friends[0]; //Will print the specific element
            echo "<br>";
            echo count($friends) //Will print the number of elements in the array friends
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        
        <!--Checkboxes-->
        <form action="site.php" method="post">
            Tuna:<input type="checkbox" name="fish[]" value="Tuna"><br>
            Sardine:<input type="checkbox" name="fish[]" value="Sardine"><br>
            Mahi Mahi:<input type="checkbox" name="fish[]" value="Mahi Mahi"><br>
            Tilapia:<input type="checkbox" name="fish[]" value="Tilapia"><br>
            <input type="submit">
        </form>
        <?php 
            $fish = $_POST["fish"];
            echo $fish[0];
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        
        <!--Associative Arrays-->
        <form action="site.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>
        <?php 
            $grades = array("Willy" => "F", "Keet" => "A+", "Kandu" => "C");
            $grades["Willy"]; //In associative arrays, instead of accessing through position, you access through a key
            echo $grades[$_POST["student"]];
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        
        <!--Functions-->
        <?php 
            function  sayHi(){
                echo "Hello User";
            }
            sayHi();

            function  sayPersonalHi($Myname){
                echo "Hello, I'm $Myname";
            }
            sayPersonalHi("Gabriel");
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        
        <!--If Statements-->
        <?php 
            function isWhale($whale){
                if($whale == "Blue Whale" || $whale == "Sperm Whale"){
                    return ("$whale is a Whale");
                } 
                elseif ($whale == "Killer Whale" || $whale == "Orca") {
                    return "$whale is surprisingly not a whale";
                }else {
                    return "$whale is not a whale";
                }
            }
            echo isWhale("Orca");
            echo "<br>";
            echo isWhale("Blue Whale");
            echo "<br>";
            echo isWhale("Hulpback Whale");
            echo "<br>";
            echo isWhale("Tyranossaurus Rex");
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        
        <!--Classes and Objects-->
        <?php 
            class Cetacean{        //Classes are custom data types
                var $name;
                var $sizeInCm;
                var $biome;
            }
            $orca = new Cetacean;
            $orca->name = "Orca";
            $orca->sizeInCm = 600;
            $orca->biome = "All Oceans";

            echo $orca-> name;
            
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        
        <!--Constructors and Object functions-->
        <?php 
            class Shark{        
                var $name;
                var $sizeInCm;
                var $biome;

                function __construct($aName, $aSize, $aBiome, $color)     //A constructor is a function that is called when you create an object of that class
                {
                    $this->name = $aName;
                    $this->sizeInCm = $aSize;
                    $this->biome = $aBiome;
                    echo "New Shark Created! It has a beautiful shade of $color";
                }

                function isApex(){   
                    if($this->name == "Great White Shark"){
                        return "This shark is an apex predator";
                    } else {
                        return "This shark is not an apex predator";
                    }
                }
            }
            $bullShark = new Shark("Bull Shark", 300, "All Oceans", "Grey");
            echo "<br>";
            echo $bullShark-> isApex();   
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        
        <!--Getters and Setters-->
        <?php 
            class Crabs{        //Classes are custom data types
                public $name;
                public $sizeInCm;
                private $family;

                function getFamily(){
                    return $this->famimy;
                }

                function setFamily($family){
                    if($family == "True Crabs" || $family == "King Crabs" || $family == "Porcelain Crabs" || $family == "Horseshoe Crabs" ){
                        $this -> family = $family;
                    } else {
                        $this -> family = "Unknown";
                    }
                }
            }    
        ?>
        <br>
        <br>
        <hr>
        <br>
    


        <!--Inheritance-->
        <?php 
            class Whales{        //Classes are custom data types
                var $name;
                var $sizeInCm;
                var $biome;
            }
            class spermWhales extends Whales{  //The spermWhales class has all the functionalities of Whales, and can also have more specific funcionalities and can override functions
                
            }

            
        ?>

        <br>
        <br>
        <hr>
        <br>
        
        <!--Include PHP-->
        <?php 
            $title = "My post";
            $author = "Gabriel";
            $wordCount = 400;
            include "article-header.php";   // Include can acess code from other files and run it
        ?>
        <!--Include HTML-->
        <?php 
        include "footer.html";   // Include can acess code from other files and run it
        ?>
        <br>
        <br>
        <hr>
        <br>
        
        



    </body>

</html>