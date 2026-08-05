# Goto
The ``goto`` operator is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label. 

``goto`` one of the very controversial PHP features and has been the subject of much debate due to its potential to create spaghetti code and make code difficult to read and maintain.

Some legit uses of ``goto`` include breaking out of nested loops, implementing state machines, or in some cases for error handling. However, they are rare, and should only considered in last resort.

The target label must be within the same file and context, meaning that it is not possible to jump out of a function or method, nor to jump into one.

``goto`` is case insensitive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/goto.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/goto.ini.html","name":"Goto","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:24:01 +0000","dateModified":"Sun, 28 Jun 2026 10:24:01 +0000","description":"The ``goto`` operator is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Goto.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Goto Labels](label.ini.html)
+ [Colon](colon.ini.html)
+ [Jump](jump.ini.html)
+ [Control Flow](control-flow.ini.html)

## Related packages

+ [symfony/symfony](https://packagist.org/packages/symfony/symfony)
+ [yiisoft/yii2](https://packagist.org/packages/yiisoft/yii2)
