<?php

const BR = "<br>";
/*====================================
1. Print the sentence: Welcome to PHP!
=======================================*/ 
    echo "<em><strong>Welcome to PHP!</strong></em>".BR;   

// task separator
    echo "<hr style=\"margin 1rem 0\">";

/*====================================
2. Print the sentence: PHP stands for "Hypertext Preprocessor"!
======================================*/
    $phpmeaning = 'PHP stands for "Hypertext Preprocessor"!';
    echo "<em><strong>".$phpmeaning."</strong></em>".BR;   

// task separator
    echo "<hr style=\"margin 1rem 0\">";

/*====================================
3. Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
====================================*/
    echo "<p><em><strong>".$phpmeaning."</strong></em></p>";

// task separator
    echo "<hr style=\"margin 1rem 0\">";

/*====================================
4. Print the following acronyms - every acronym in a new line:
HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
====================================*/
echo "<em><strong>HTML - Stands for Hypertext Markup Language</strong></em>".BR;
echo "<em><strong>CSS - Stands for Cascading Stylesheet</strong></em>".BR;
echo "<em><strong>JS - Stands for JavaScript</strong></em>".BR;
echo "<em><strong>PHP - Stands for Hypertext Preprocessor</strong></em>".BR;
echo "<em><strong>SQL - Stands for Structural Query Language</strong></em>".BR;      
   
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*====================================
5. Print the following acronyms in unordered list - <ul> ... </ul>:
HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
====================================*/  
$list="<ul><em><strong>
    <li>HTML - Stands for Hypertext Markup Language</li>
    <li>CSS - Stands for Cascading Stylesheet</li>
    <li>JS - Stands for JavaScript</li>
    <li>PHP - Stands for Hypertext Preprocessor</li>
    <li>SQL - Stands for Structural Query Language</li>
    </strong></em></ul>";

echo $list;

?>