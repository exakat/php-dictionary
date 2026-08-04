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

## See Also

+ [A Beginner's Guide to the PHP Tokenizer Library for Code Parsing](https://reintech.io/blog/beginners-guide-php-tokenizer-library-code-parsing)

Related : [Token](Token), [Phptoken](Phptoken), [Parser](Parser), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Lexical Analysis](Lexical Analysis), [Compiler](Compiler), [Syntax](Syntax), [Linting](Linting), [Reflection](Reflection), [Code Formatter](Code Formatter), [Static Code Analysis (SCA)](Static Code Analysis (SCA))
