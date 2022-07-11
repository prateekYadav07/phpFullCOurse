<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="site.php" method="get">
        Username : <input type="text" name="username">
        <input type="submit">
    </form>

    <?php
    /**
     * getting user inputs from a form
     * just use the name attribute of input element
     * method in the form can be anything
     */
    echo "Your name is: " . $_GET["username"] . "<br><hr>";
    ?>

    <h2>Basic Calculator</h2>
    <form action="site.php" method="get">
        Argument 1 : <input type="number" name="arg1">
        Argument 2 : <input type="number" name="arg2">
        Operation : <input type="text" name="ops">
        <input type="submit">
    </form>

    <?php
    $ans = $_GET["arg1"] + $_GET["ops"] + $_GET["arg2"];
    echo "your answer for " . $_GET["arg1"] . " " . $_GET["ops"] . " " . $_GET["arg2"] . " is " . $ans . "<br><hr>";
    ?>

    <form action="site.php" method="post">
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password">
        <input type="submit">
    </form>

    <?php
    /**
     * Post is a way to get form values in a form of array but 
     * difference between POST and GET is that post does it more discretly than GET which 
     * adds user inputs as URL parameters
     */
    echo "Your name is: " . $_POST["username"] . "<br><hr>";
    echo "Your password is: " . $_POST["password"] . "<br><hr>";
    ?>

    <?php
    /**
     * Arrays : basically defined using array();
     * so we can jump indexes while assigning and it'll filll rest with blank Strings
     */

    $superheroes = array("Batman", "Iron Man", "Cap", "Superman", "Thor", "Jason Mamoa");
    $superheroes[7] = "Wonder Women";
    echo count($superheroes) . " " . $superheroes[7] . "<br><hr>";
    ?>

    <form action="site.php" method="post">
        Favorite Superheros <br>
        Iron Man : <input type="checkbox" name="sups[]" value="Iron Man"><br>
        Batman : <input type="checkbox" name="sups[]" value="Batman"><br>
        Deadpool : <input type="checkbox" name="sups[]" value="Deadpool"><br>
        Doctor Strange : <input type="checkbox" name="sups[]" value="Doctor Strange"><br>
        <input type="submit">
    </form>

    <?php
    /**
     * Using checkboxes and arrays to store checked values
     * Order of selection is irrelevant, it takes value in the order values are placed
     */

     $sups = $_POST["sups"];
     echo count($sups)." ".$sups[0]."<br><hr>";
    ?>


    <?php
    // hello world
    echo "Hello world";

    // injecting html 
    echo "<h1>H1 Header</h1>";
    echo "<i>Italic tag</i>";
    echo "<p><b>Bold tag in para tag</b></p>";
    echo "<h3>Okay now i'm bored of injecting html so here's a h3 tag</h3>";
    echo "<hr>";

    /** 
     * variables: exactly like any other language
     * but uses $ to declare it e.g:
     * */

    $name = "Thor 'the Odinson'";
    $age = 1500;
    echo "My name is $name and age is $age yrs and I've killed twice as many villians";
    echo "<hr>";

    /**
     * Data types: basically 4 types
     * String, integer, Float, boolean and (null)
     */

    $phrase = "Wake up to reality";
    $hokages = 7;
    $skills = 9.5;
    $isALoser = true;

    echo $phrase;
    echo "<hr>";

    /**
     * String functions
     */

    $giraffe = "Giraffe is basically a dinosaur of this era <br>";
    echo strtolower($giraffe);
    echo strtoupper($giraffe);
    echo str_replace("dinosaur", "prehistoric creature", $giraffe); // case sensitive replacement
    echo str_ireplace("giraffe", "new giraffe", $giraffe);   // case insensitive replacement
    echo substr_replace($giraffe, "stupid animal", 23);

    /**
     * Math Functions
     * NOTE: Concatenation operator in php is . (dot)
     */

    echo "<hr>";
    echo abs(-34);
    echo "<br>";
    echo pow(3, 3);
    echo "<br>";
    echo round(5.5) . " | " . floor(5.5) . " | " . ceil(5.5);
    echo "<hr>";

    ?>
</body>

</html>