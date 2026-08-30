---
type: "PHP Feature"
title: "Code Formatter"
description: "A code formatter is an automated tool that apply coding conventions to the source code."
resource: "https://en.wikipedia.org/wiki/Prettyprint"
tags: ["quality"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Code Formatter

A code formatter is an automated tool that apply coding conventions to the source code. 

It may, for example, move the opening bracket of a block on the name of the signature or below; it may add a space between a cast operator and its expression; etc.

Code formatters modifies the presentation of the code, and do not change the underlying execution of it: although, some of the coding conventions may cross that line. For example, rewriting ``!=`` clauses to ``==`` in ``ifthen`` usually leads to voluminous modifications.

Some code formatters only report specifications violations. Others apply corrections automatically.

Popular coding conventions are ``PSR-12``, or per framework, such as ``Symfony Coding Standard``, ``CakePHP``, ``CodeIgniter``, ``Wordpress``, etc.

```php
<?php

    // two distinct coding conventions.
    function foo() { return 1; }
    
    function goo() 
    {
        return 2;
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Prettyprint](https://en.wikipedia.org/wiki/Prettyprint)

## See Also
- [A curated list of code formatters](https://github.com/rishirdua/awesome-code-formatters)
- [PHP-Styler: A Back-To-Formula Rewrite](https://paul-m-jones.com/post/2026/04/24/php-styler-a-back-to-formula-rewrite/)

## Related
- [PHP Standards Recommendations (PSR)](/features/psr.md)

## Details
- Packagist: [lkrms/pretty-php](https://packagist.org/packages/lkrms/pretty-php)
- Packagist: [friendsofphp/php-cs-fixer](https://packagist.org/packages/friendsofphp/php-cs-fixer)
- Packagist: [squizlabs/php_codesniffer](https://packagist.org/packages/squizlabs/php_codesniffer)

