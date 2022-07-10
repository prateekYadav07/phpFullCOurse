<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="site.php" method="getformvalues">
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
    <form action="site.php" method="getformvalues">
        Argument 1 : <input type="number" name="arg1">
        Argument 2 : <input type="number" name="arg2">
        Operation : <input type="text" name="ops">
        <input type="submit">
    </form>

    <?php
    $ans = $_GET["arg1"] + $_GET["ops"] + $_GET["arg2"];
    echo "your answer for " . $_GET["arg1"] . " " . $_GET["ops"] . " " . $_GET["arg2"] . " is " . $ans."<br><hr>";
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