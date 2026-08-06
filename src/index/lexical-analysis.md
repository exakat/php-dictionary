# Lexical Analysis
Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser. It reads a stream of source characters and groups them into meaningful units called tokens.

Each token carries a type, keyword, identifier, operator, literal, comment, whitespace, and the text it was matched from. The lexer discards whitespace and comments, or classifies them as separate token types when they are relevant.

PHP provides ``token_get_all()`` to tokenise a PHP source string into the same tokens the PHP engine itself produces, using the constants defined in the ``T_*`` family, like ``T_ECHO``, ``T_VARIABLE``, ``T_STRING``, etc. This is useful for static analysis tools, code formatters, and documentation generators.

Lexical analysis operates on the surface form of the code and has no notion of program structure or meaning. Those concerns belong to parsing and semantic analysis.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lexical-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lexical-analysis.html","name":"Lexical Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:42:25 +0000","dateModified":"Thu, 23 Jul 2026 13:42:25 +0000","description":"Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Lexical Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Lexical_analysis)**
## See Also

+ [token_get_all()](https://www.php.net/manual/en/function.token-get-all.php)

## Related

+ [Lexical Variable](lexical.ini.html)
+ [Analysis](analysis.ini.html)
+ [Abstract Syntactic Tree (AST)](ast.ini.html)
+ [Token](token.ini.html)
+ [Parse](parsing.ini.html)
+ [Semantic Analysis](semantic-analysis.ini.html)
+ [Control Flow Analysis](control-flow-analysis.ini.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.ini.html)
+ [Symbolic Analysis](symbolic-analysis.ini.html)
+ [Pattern-Based Analysis](pattern-based-analysis.ini.html)
