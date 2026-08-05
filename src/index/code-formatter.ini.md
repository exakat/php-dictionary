# Code Formatter
A code formatter is an automated tool that apply coding conventions to the source code. 

It may, for example, move the opening bracket of a block on the name of the signature or below; it may add a space between a cast operator and its expression; etc.

Code formatters modifies the presentation of the code, and do not change the underlying execution of it: although, some of the coding conventions may cross that line. For example, rewriting ``!=`` clauses to ``==`` in ``ifthen`` usually leads to voluminous modifications.

Some code formatters only report specifications violations. Others apply corrections automatically.

Popular coding conventions are ``PSR-12``, or per framework, such as ``Symfony Coding Standard``, ``CakePHP``, ``CodeIgniter``, ``Wordpress``, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/code-formatter.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/code-formatter.ini.html","name":"Code Formatter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:08 +0000","dateModified":"Fri, 19 Jun 2026 21:26:08 +0000","description":"A code formatter is an automated tool that apply coding conventions to the source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Code Formatter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Prettyprint)**
## See Also

+ [A curated list of code formatters](https://github.com/rishirdua/awesome-code-formatters)
+ [PHP-Styler: A Back-To-Formula Rewrite](https://paul-m-jones.com/post/2026/04/24/php-styler-a-back-to-formula-rewrite/)

## Related

+ [PHP Standards Recommendations (PSR)](psr.ini.html)

## Related packages

+ [lkrms/pretty-php](https://packagist.org/packages/lkrms/pretty-php)
+ [friendsofphp/php-cs-fixer](https://packagist.org/packages/friendsofphp/php-cs-fixer)
+ [squizlabs/php_codesniffer](https://packagist.org/packages/squizlabs/php_codesniffer)
