<?php
function greet($name, $color = "blue"){
    echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
}

greet("John", "red");
greet("Jane", "green");
greet("Bryan");
?>


<h1><?php bloginfo(); ?></h1>
<p><?php bloginfo('description'); ?></p>
