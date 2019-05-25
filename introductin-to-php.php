<?php

/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
echo "<em><strong>Welcome to PHP!</strong></em>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/
$phpmeaning = 'PHP stands for "Hypertext Preprocessor"!';
echo "<em><strong>{$phpmeaning}</strong></em>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/
 echo "<p><em><strong>{$phpmeaning}</strong></em></p>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
$html = "HTML - Stands for Hypertext Markup Language";
$css = "CSS - Stands for Cascading Stylesheet";
$js = "JS - Stands for JavaScript";
$php = "PHP - Stands for Hypertext Preprocessor";
$sql = "SQL - Stands for Structural Query Language";
echo "<em><strong>{$html}</strong></em><br>";
echo "<em><strong>{$css}</strong></em><br>";
echo "<em><strong>{$js}</strong></em><br>";
echo "<em><strong>{$php}</strong></em><br>";
echo "<em><strong>{$sql}</strong></em>";   
   
   
   
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
$list="<ul><em><strong>
    <li>{$html}</li>
    <li>{$css}</li>
    <li>{$js}</li>
    <li>{$php}</li>
    <li>{$sql}</li>
    </strong></em></ul>";

echo $list;
?>
