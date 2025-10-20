<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool); // prints out:  boolean
echo "<br/>";
echo gettype($a_str);  // prints out:  string
echo "<br/>";

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
    printf("<p>%d [%s]</p>", $an_int, gettype($an_int));
    $an_int = "Ahora soy una cadena";
    printf("<p>%s [%s]</p>", $an_int, gettype($an_int));
    $an_int = TRUE;
    printf("<p>%b [%s]</p>", $an_int, gettype($an_int));
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}