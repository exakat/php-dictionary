# Lexical Analysis
Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser. It reads a stream of source characters and groups them into meaningful units called tokens.

Each token carries a type, keyword, identifier, operator, literal, comment, whitespace, and the text it was matched from. The lexer discards whitespace and comments, or classifies them as separate token types when they are relevant.

PHP provides ``token_get_all()`` to tokenise a PHP source string into the same tokens the PHP engine itself produces, using the constants defined in the ``T_*`` family, like ``T_ECHO``, ``T_VARIABLE``, ``T_STRING``, etc. This is useful for static analysis tools, code formatters, and documentation generators.

Lexical analysis operates on the surface form of the code and has no notion of program structure or meaning. Those concerns belong to parsing and semantic analysis.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical-analysis.html","name":"Lexical Analysis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:42:25 +0000","dateModified":"Thu, 23 Jul 2026 13:42:25 +0000","description":"Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical-analysis.html"]}],"alternateName":["tokenisation","tokenization","scanning"],"keywords":["analysis","static analysis","compiler"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/token.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parsing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symbolic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-based-analysis.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Lexical_analysis"},{"@type":"CreativeWork","name":"token_get_all()","url":"https:\/\/www.php.net\/manual\/en\/function.token-get-all.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lexical-analysis"}]}]}</script>
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

+ [Lexical Variable](lexical.html)
+ [Analysis](analysis.html)
+ [Abstract Syntactic Tree (AST)](ast.html)
+ [Token](token.html)
+ [Parse](parsing.html)
+ [Semantic Analysis](semantic-analysis.html)
+ [Control Flow Analysis](control-flow-analysis.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Symbolic Analysis](symbolic-analysis.html)
+ [Pattern-Based Analysis](pattern-based-analysis.html)
