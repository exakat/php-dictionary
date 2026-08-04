# Lexical Analysis
Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser. It reads a stream of source characters and groups them into meaningful units called tokens.

Each token carries a type, keyword, identifier, operator, literal, comment, whitespace, and the text it was matched from. The lexer discards whitespace and comments, or classifies them as separate token types when they are relevant.

PHP provides ``token_get_all()`` to tokenise a PHP source string into the same tokens the PHP engine itself produces, using the constants defined in the ``T_*`` family, like ``T_ECHO``, ``T_VARIABLE``, ``T_STRING``, etc. This is useful for static analysis tools, code formatters, and documentation generators.

Lexical analysis operates on the surface form of the code and has no notion of program structure or meaning. Those concerns belong to parsing and semantic analysis.
```php
<?php

    $source = '<?php echo $greeting . "world"; ?>';
    $tokens = token_get_all($source);
    
    foreach ($tokens as $token) {
        if (is_array($token)) {
            [$id, $text, $line] = $token;
            echo token_name($id) . ': ' . var_export($text, true) . PHP_EOL;
        } else {
            echo 'SYMBOL: ' . var_export($token, true) . PHP_EOL;
        }
    }

?>
```

## See Also

+ [token_get_all()](https://www.php.net/manual/en/function.token-get-all.php)

Related : [Lexical Variable](Lexical Variable), [Analysis](Analysis), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Token](Token), [Parse](Parse), [Semantic Analysis](Semantic Analysis), [Control Flow Analysis](Control Flow Analysis), [Data Flow Analysis (DFA)](Data Flow Analysis (DFA)), [Symbolic Analysis](Symbolic Analysis), [Pattern-Based Analysis](Pattern-Based Analysis)
