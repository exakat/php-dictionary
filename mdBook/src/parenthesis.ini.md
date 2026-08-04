# Parenthesis
Parenthesis are the ``(`` and ``)``. They must be balanced: each opening parenthesis must have a closing parenthesis, or a PHP syntax error is generated.

Parenthesis are used to make explicit precedence between operations. Parenthesis group all underlying operations as one call: there can be only one expression inside parenthesis. 

Parenthesis are an important token for the parser: they are needed in many situations, such as method definition, method call, ``for()``, ``foreach()``, ``switch()``, ``match()``, etc. Once the syntax has been recognized, such parenthesis are not used anymore.

Parenthesis are idempotent: there is no use in setting parenthesis directly inside another parenthesis.

Sometimes, parenthesis are used for make language structure look like a functioncall. This is useless to the PHP engine, and even, prevent some features.
```php
<?php

// parenthesis in signatures
function foo($parameter) {}

// useless parenthesis
include('/path/to/file.php'); 

// parenthesis 
echo 'a', 'b';    // best practice: no parenthesis
echo ('a' . 'b'); // parenthesis force the concatenation 
echo ('a'), 'b';  // weird, right?

// precedence changing with parenthesis
echo  2 +  3  * 4; // 14
echo (2 +  3) * 4; // 20
echo  2 + (3  * 4); // 14

?>
```

## See Also

+ [On PHP Language Constructs and Parentheses](https://tfrommen.de/on-php-language-constructs-and-parentheses/)

Related : [Argument](Argument), [Balanced](Balanced), [Bracket](Bracket), [Bracketless](Bracketless), [Square Brackets](Square Brackets)
