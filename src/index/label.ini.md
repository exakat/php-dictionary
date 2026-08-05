# Goto Labels
Labels are the receiving end of a goto call. They must be in the same context than the goto they relate to: there, they must be unique. There might be several goto for a single label.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/label.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/label.ini.html","name":"Goto Labels","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Labels are the receiving end of a goto call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Goto Labels.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
goto a;
echo 'Foo';
 
a:
echo 'Bar';
?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.goto.php)**
## Related

+ [Goto](goto.ini.html)
+ [Colon](colon.ini.html)
