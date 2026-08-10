# Language Construct
PHP has a notion of ``language construct``, which are special keywords, with an attached feature. 

Language constructs are: ``echo``, ``require``, ``require_once``, ``include``, ``include_once``, ``return``, ``die``, ``exit``, ``unset``, ``isset``, ``print``, ``empty``.

Language constructs usually do not require parenthesis, and they are mostly known for that. The parenthesis is not necessary, but possible. It makes the language construct look like a function call. 

Also, language construct do not behave like a function, so they can't be used by their name, as a callback. 

There have some special behavior: echo accepts an arbitrary number of argument, while print only accepts one. die and exit work without arguments, but, in the event that an argument is provided, it must be enclosed in parenthesis.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/language-construct.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/language-construct.html","name":"Language Construct","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP has a notion of ``language construct``, which are special keywords, with an attached feature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Language Construct.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Language Construct"}]}]}</script>
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

+ [Self](self.html)
+ [static](static.html)
+ [parent](parent.html)
+ [Echo](echo.html)
+ [Empty](empty.html)
+ [Exit](exit.html)
