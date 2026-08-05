# Token
A PHP token is the smallest unit of code that has meaning in the language. When the source code is parsed, it is broken down into tokens before being executed. Tokens include keywords, variables, constants, operators, and other syntactic elements.

Tokens of a specific code are accessible via the function ``token_get_all()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/token.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/token.ini.html","name":"Token","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:06:35 +0000","dateModified":"Mon, 06 Jul 2026 10:06:35 +0000","description":"A PHP token is the smallest unit of code that has meaning in the language","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Token.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

print_r(token_get_all("<?php phpinfo()"));

/**
Array
(
    [0] => Array
        (
            [0] => 389
            [1] => <?php 
            [2] => 1
        )

    [1] => Array
        (
            [0] => 262
            [1] => phpinfo
            [2] => 1
        )

    [2] => (
    [3] => )
)
*/

?>
```

**[Documentation](https://www.php.net/manual/en/book.tokenizer.php)**
## See Also

+ [token_get_all](https://www.php.net/token_get_all)
+ [List of Parser Tokens](https://www.php.net/manual/en/tokens.php)

## Related

+ [Abstract Syntactic Tree (AST)](ast.ini.html)
+ [Curly Brackets](curly-bracket.ini.html)
+ [Single Sign On (SSO)](sso.ini.html)
+ [Tokenizer](tokenizer.ini.html)
+ [Whitespace](whitespace.ini.html)
+ [JSON Web Token (JWT)](jwt.ini.html)
+ [OAuth](oauth.ini.html)
+ [Homoiconicity](homoiconicity.ini.html)
+ [Hygienic Macro](hygienic-macro.ini.html)
+ [Lexical Analysis](lexical-analysis.ini.html)
+ [Macro](macro.ini.html)
