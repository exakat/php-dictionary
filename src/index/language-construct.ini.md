# Language Construct
PHP has a notion of ``language construct``, which are special keywords, with an attached feature. 

Language constructs are: ``echo``, ``require``, ``require_once``, ``include``, ``include_once``, ``return``, ``die``, ``exit``, ``unset``, ``isset``, ``print``, ``empty``.

Language constructs usually do not require parenthesis, and they are mostly known for that. The parenthesis is not necessary, but possible. It makes the language construct look like a function call. 

Also, language construct do not behave like a function, so they can't be used by their name, as a callback. 

There have some special behavior: echo accepts an arbitrary number of argument, while print only accepts one. die and exit work without arguments, but, in the event that an argument is provided, it must be enclosed in parenthesis.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/language-construct.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/language-construct.ini.html","name":"Language Construct","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP has a notion of ``language construct``, which are special keywords, with an attached feature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Language Construct.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

echo 'a', 'b', 'c';

die;

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.keywords.php)**
## See Also

+ [PHP Language Constructs vs Built-in Functions](http://www.phpknowhow.com/basics/language-constructs-vs-built-in-functions/)

## Related

+ [Self](self.ini.html)
+ [static](static.ini.html)
+ [parent](parent.ini.html)
+ [Echo](echo.ini.html)
+ [Empty](empty.ini.html)
+ [Exit](exit.ini.html)
