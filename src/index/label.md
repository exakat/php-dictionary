# Goto Labels
Labels are the receiving end of a goto call. They must be in the same context than the goto they relate to: there, they must be unique. There might be several goto for a single label.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/label.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/label.html","name":"Goto Labels","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:08:51 +0000","dateModified":"Sat, 15 Aug 2026 12:08:51 +0000","description":"Labels are the receiving end of a goto call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Goto Labels.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"label"}]}]}</script>
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

+ [Goto (Wikipedia)](https://en.wikipedia.org/wiki/Goto)
+ [break](https://www.php.net/manual/en/control-structures.break.php)

## Related

+ [Goto](goto.html)
+ [Colon](colon.html)
