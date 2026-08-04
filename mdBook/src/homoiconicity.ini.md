# Homoiconicity
Homoiconicity is a property of a programming language in which code and data share the same representation. A homoiconic language can treat its own programs as data structures that may be inspected, transformed, and generated at runtime using the language itself. Lisp is the canonical example. Lisp programs are lists, and lists are native Lisp data.

PHP is not homoiconic in the classical sense: the source code is text, not a native PHP data structure. However, PHP provides several mechanisms that approximate homoiconic behaviour:

+ ``token_get_all()``: tokenises a PHP source string into an array of token arrays, exposing the lexical structure of code as PHP data.
+ ``eval()``: executes an arbitrary PHP string as code, allowing dynamically constructed programs to run.
+ The Reflection API, with ``ReflectionClass``, ``ReflectionFunction``, etc.: introspects the live structure of classes and functions at runtime.
+ The ``ast`` extension: parses PHP source into an abstract syntax tree represented as native ``ast\Node`` objects, enabling full read access to code structure.
+ ``nikic/php-parser``, a userland library: provides a complete AST with read and write access, making it possible to parse, modify, and regenerate PHP code from PHP itself.

These tools are the foundation of static analysers, code generators, template engines, and macro-like systems built into PHP.
```php
<?php

   // Tokenise PHP source as a PHP array
   $tokens = token_get_all('<?php echo 42; ?>');
   foreach ($tokens as $token) {
       if (is_array($token)) {
           echo token_name($token[0]) . ': ' . $token[1] . "\n";
       }
   }

   // Reflect on a function's structure at runtime
   $ref = new ReflectionFunction('array_map');
   echo $ref->getName() . ' accepts ' . $ref->getNumberOfParameters() . " parameters\n";

   // Build and execute code from data
   $op = '+';
   $result = eval("return 6 {$op} 7;");
   echo $result; // 13

?>
```

## See Also

+ [token_get_all()](https://www.php.net/manual/en/function.token-get-all.php)
+ [PHP Reflection API](https://www.php.net/manual/en/book.reflection.php)
+ [nikic/php-parser](https://github.com/nikic/PHP-Parser)
+ [ast extension](https://github.com/nikic/php-ast)

Related : [Eval()](Eval()), [Reflection](Reflection), [Metaprogramming](Metaprogramming), [Token](Token), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Macro](Macro), [Closure](Closure), [Code Generation](Code Generation)
