<!DOCTYPE html>
<html>

<body>

    <h1>Variable Scope</h1>
    

    
    <?php 
    //declare global variable x and assign its value
    $x = 100;
    
    //create a function and create its identifier
    function test1(){
        echo "<p>the value of x is : 0 </p>";
        echo "<p>because function can't entertain global variable without assigning it as parameter</p>";
    }

    // as usual, we need funct caller
    test1();

    //this part can access the global function
    echo "<b>I can access x with the value of $x </b>"
    ?>
    <hr>
    <?php 
    //create a function
    function test2 (){
        //declare local variables.
        //They are called local because they are inside of a function
        $y = "Claude"; $z = "Dexter";
        echo "<p>$y and $z are always ready. If you've prepared your money.</p>";
    }
    test2();
    
    ?>
    <hr>
    <?php 
    //create a function
    function test3 ($m){
        static $x = 1;
        echo "<h$x>$m$x</h$x>";
        $x++;
    }
    test3("attempt1 h");
    test3("attempt2 h");
    test3("attempt3 h");
    
    ?>

</body>

</html>

