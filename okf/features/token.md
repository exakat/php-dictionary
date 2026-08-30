---
type: "PHP Feature"
title: "Token"
description: "A PHP token is the smallest unit of code that has meaning in the language."
resource: "https://www.php.net/manual/en/book.tokenizer.php"
tags: ["engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/book.tokenizer.php](https://www.php.net/manual/en/book.tokenizer.php)

## See Also
- [token_get_all](https://www.php.net/token_get_all)
- [List of Parser Tokens](https://www.php.net/manual/en/tokens.php)

## Related
- [Abstract Syntactic Tree (AST)](/features/ast.md)
- [Curly Brackets](/features/curly-bracket.md)
- [Single Sign On (SSO)](/features/sso.md)
- [Tokenizer](/features/tokenizer.md)
- [Whitespace](/features/whitespace.md)
- [JSON Web Token (JWT)](/features/jwt.md)
- [OAuth](/features/oauth.md)
- [Homoiconicity](/features/homoiconicity.md)
- [Hygienic Macro](/features/hygienic-macro.md)
- [Lexical Analysis](/features/lexical-analysis.md)
- [Macro](/features/macro.md)

## Details
- Extension: ext-tokenizer

