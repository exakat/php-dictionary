# Token
A PHP token is the smallest unit of code that has meaning in the language. When the source code is parsed, it is broken down into tokens before being executed. Tokens include keywords, variables, constants, operators, and other syntactic elements.

Tokens of a specific code are accessible via the function ``token_get_all()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/token.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/token.html","name":"Token","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:06:35 +0000","dateModified":"Mon, 06 Jul 2026 10:06:35 +0000","description":"A PHP token is the smallest unit of code that has meaning in the language","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Token.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"token"}]}]}</script>
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

+ [Abstract Syntactic Tree (AST)](ast.html)
+ [Curly Brackets](curly-bracket.html)
+ [Single Sign On (SSO)](sso.html)
+ [Tokenizer](tokenizer.html)
+ [Whitespace](whitespace.html)
+ [JSON Web Token (JWT)](jwt.html)
+ [OAuth](oauth.html)
+ [Homoiconicity](homoiconicity.html)
+ [Hygienic Macro](hygienic-macro.html)
+ [Lexical Analysis](lexical-analysis.html)
+ [Macro](macro.html)
