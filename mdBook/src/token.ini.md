# Token
A PHP token is the smallest unit of code that has meaning in the language. When the source code is parsed, it is broken down into tokens before being executed. Tokens include keywords, variables, constants, operators, and other syntactic elements.

Tokens of a specific code are accessible via the function ``token_get_all()``.

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

## See Also

+ [token_get_all](https://www.php.net/token_get_all)
+ [List of Parser Tokens](https://www.php.net/manual/en/tokens.php)

Related : [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Curly Brackets](Curly Brackets), [Single Sign On (SSO)](Single Sign On (SSO)), [Tokenizer](Tokenizer), [Whitespace](Whitespace), [JSON Web Token (JWT)](JSON Web Token (JWT)), [OAuth](OAuth), [Homoiconicity](Homoiconicity), [Hygienic Macro](Hygienic Macro), [Lexical Analysis](Lexical Analysis), [Macro](Macro)
