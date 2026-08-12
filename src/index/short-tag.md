# Short Tags
PHP uses special tags to identify code that has to be executed. The short tags are a special set of PHP tag, shorter than the usual ``<?php``. It was simply ``<?``.

Short tags may be disabled in ``php.ini`` configuration, with the ``short_open_tag`` directive. 

Short tags are different from echo tags: those tags immediately display data.

From the manual: as short tags can be disabled it is recommended to only use the normal tags ``<?php ?>`` and ``<?= ?>`` to maximise compatibility.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-tag.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-tag.html","name":"Short Tags","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP uses special tags to identify code that has to be executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Short Tags.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"short-tag"}]}]}</script>
```php
<?php

echo 1;
?>

<? 
// this is a short tag
echo 2;

?>
```

**[Documentation](https://www.php.net/manual/en/language.basic-syntax.phptags.php)**
## See Also

+ [PHP RFC: Deprecate short open tags, again](https://wiki.php.net/rfc/deprecate_php_short_tags_v2)

## Related

+ [PHP Tags](php-tag.html)
+ [Echo Tag](echo-tag.html)
+ [Open Tag](open-tag.html)
+ [Close Tag](close-tag.html)
+ [Operators](operator.html)
+ [php\\.ini](php.ini.html)
+ [short\_open\_tag](short_open_tag.html)
