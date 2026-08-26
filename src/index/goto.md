# Goto
The ``goto`` operator is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label. 

``goto`` one of the very controversial PHP features and has been the subject of much debate due to its potential to create spaghetti code and make code difficult to read and maintain.

Some legit uses of ``goto`` include breaking out of nested loops, implementing state machines, or in some cases for error handling. However, they are rare, and should only considered in last resort.

The target label must be within the same file and context, meaning that it is not possible to jump out of a function or method, nor to jump into one.

``goto`` is case insensitive.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/goto.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/goto.html","name":"Goto","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The goto operator is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/goto.html"]}],"keywords":["control flow","keyword","bad practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/label.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jump.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.goto.php"},{"@type":"CreativeWork","name":"GoTo statement in PHP","url":"https:\/\/www.thecreativedev.com\/goto-statement-in-php\/"},{"@type":"CreativeWork","name":"Why PHP, goto, and bubblesort, are good, actually","url":"https:\/\/topher.io\/writing\/why-php-goto-and-bubblesort-are-good\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"goto"}]}]}</script>
```php
<?php
  
  goto a;
  echo 'Foo';
   
  a:
  echo 'Bar';

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.goto.php)**
## See Also

+ [GoTo statement in PHP](https://www.thecreativedev.com/goto-statement-in-php/)
+ [Why PHP, goto, and bubblesort, are good, actually](https://topher.io/writing/why-php-goto-and-bubblesort-are-good/)

## Related

+ [Goto Labels](label.html)
+ [Colon](colon.html)
+ [Jump](jump.html)
+ [Control Flow](control-flow.html)

## Related packages

+ [symfony/symfony](https://packagist.org/packages/symfony/symfony)
+ [yiisoft/yii2](https://packagist.org/packages/yiisoft/yii2)
