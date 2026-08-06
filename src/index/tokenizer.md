# Tokenizer
The PHP Tokenizer is a built-in extension that breaks down PHP source code into its fundamental components called tokens. This lexical analysis step is the first phase of PHP's compilation pipeline.

The tokenizer converts raw PHP source code into a sequence of tokens such as ``T_VARIABLE``, ``T_STRING``, ``T_FUNCTION``, ``T_CLASS``, ``T_WHITESPACE``, ``T_COMMENT``, and many others. Each token represents a meaningful unit of the language.

Key use cases for the tokenizer:

+ Static analysis tools: PHPStan, Psalm, and other analyzers use tokenization to parse code without executing it
+ Code formatting: PHP-CS-Fixer and similar tools rely on tokens to understand and transform code structure
+ Syntax highlighting: IDEs and editors tokenize code for real-time highlighting
+ Code transformation: refactoring tools use token streams to safely rewrite code while preserving structure
+ Linting: syntax checkers detect errors by analyzing token sequences

PHP provides ``token_get_all()`` to obtain a token array from source code, and the ``token_name()`` function to map token IDs to human-readable names. The ``PhpToken`` class offers an object-oriented interface with methods like ``is()``, ``id()``, and ``text()`` for more convenient token manipulation.

The tokenizer handles PHP's full syntax including heredocs, nowdocs, attributes, and nested structures, producing a flat token stream that can be traversed sequentially.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/tokenizer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/tokenizer.html","name":"Tokenizer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:45:55 +0000","dateModified":"Tue, 14 Jul 2026 05:45:55 +0000","description":"The PHP Tokenizer is a built-in extension that breaks down PHP source code into its fundamental components called tokens","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Tokenizer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Tokenizing PHP source code
    $code = '<?php function hello(string $name): string { return "Hi " . $name; }';
    $tokens = token_get_all($code);

    foreach ($tokens as $token) {
        if (is_array($token)) {
            echo token_name($token[0]) . ' => ' . var_export($token[1], true) . "\n";
        } else {
            echo 'LITERAL => ' . var_export($token, true) . "\n";
        }
    }

    // Using PhpToken class (PHP 8.0+)
    $tokens = PhpToken::getAll($code);
    foreach ($tokens as $token) {
        if ($token->is(T_FUNCTION)) {
            echo 'Found function at position ' . $token->line . "\n";
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/book.tokenizer.php)**
## See Also

+ [A Beginner's Guide to the PHP Tokenizer Library for Code Parsing](https://reintech.io/blog/beginners-guide-php-tokenizer-library-code-parsing)

## Related

+ [Token](token.ini.html)
+ [Phptoken](phptoken.ini.html)
+ [Parser](parser.ini.html)
+ [Abstract Syntactic Tree (AST)](ast.ini.html)
+ [Lexical Analysis](lexical-analysis.ini.html)
+ [Compiler](compiler.ini.html)
+ [Syntax](syntax.ini.html)
+ [Linting](linting.ini.html)
+ [Reflection](reflection.ini.html)
+ [Code Formatter](code-formatter.ini.html)
+ [Static Code Analysis (SCA)](static-analysis.ini.html)
