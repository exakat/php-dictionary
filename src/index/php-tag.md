# PHP Tags
When PHP parses a file, it looks for opening and closing tags, which are ``<?php`` and ``?>`` which tell PHP to start and stop interpreting the code between them. 

The classic PHP tag is ``<?php``, and it also has a short version, for better serving xml tags: ``<?``. This one relies on the ``short_open_tag`` directive.

Previously, PHP supported also Javascript-style and ASP-style tags, though these are now unsupported.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-tag.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-tag.html","name":"PHP Tags","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 10:00:11 +0000","dateModified":"Wed, 05 Aug 2026 10:00:11 +0000","description":"When PHP parses a file, it looks for opening and closing tags, which are ``<","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Tags.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"PHP Tags"}]}]}</script>
```php
<?php
  // This is the classic PHP tag

?>
<?
  // This is the short PHP tag

?><?= "Hello world";
  // This is the short echo PHP tag

?>
```

**[Documentation](https://www.php.net/manual/en/language.basic-syntax.phptags.php)**
## See Also

+ [PHP Syntax and tags](https://www.w3resource.com/php/syntax/syntax.php)

## Related

+ [Short Tags](short-tag.html)
+ [Short Tags](short-open-tag.html)
+ [Echo Tag](echo-tag.html)
