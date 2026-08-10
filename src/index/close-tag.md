# Close Tag
PHP commands are placed between the PHP tags: ``<?php`` and ``?>``.  The second tag is called the closing tag. 

Closing tag allow to finish a PHP tag, and switch back to non-interpreted code. The text following the closing tag is then display raw, until the next PHP tag. 

When a file online contains PHP code, the closing tag is not necessary. Its absence even prevents the accidental adding of white space, which create output errors.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/close-tag.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/close-tag.html","name":"Close Tag","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP commands are placed between the PHP tags: ``<","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Close Tag.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Close Tag"}]}]}</script>
```php
<?php
// here, PHP code

// the closing tag
?>Here, raw text, always displayed
<?php
// more PHP code

// No final closing tag
```

**[Documentation](https://www.php.net/manual/en/language.basic-syntax.phptags.php)**
## See Also

+ [You shouldn't use PHP Closing Tags](https://www.youtube.com/watch?v=mXzUwcDBtkA)
+ [Should You Close PHP Tags? The Debate Continues…](https://www.sitepoint.com/closing-php-tags-debate/)

## Related

+ [Open Tag](open-tag.html)
+ [Short Tags](short-tag.html)
