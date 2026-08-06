# Short Tags
PHP uses special tags to identify code that has to be executed. The short tags are a special set of PHP tag, shorter than the usual ``<?php``. It was simply ``<?``.

Short tags may be disabled in ``php.ini`` configuration, with the ``short_open_tag`` directive. 

Short tags are different from echo tags: those tags immediately display data.

From the manual: as short tags can be disabled it is recommended to only use the normal tags ``<?php ?>`` and ``<?= ?>`` to maximise compatibility.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/short-tag.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/short-tag.html","name":"Short Tags","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:22:16 +0000","dateModified":"Mon, 06 Jul 2026 10:22:16 +0000","description":"PHP uses special tags to identify code that has to be executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Short Tags.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [PHP Tags](php-tag.ini.html)
+ [Echo Tag](echo-tag.ini.html)
+ [Open Tag](open-tag.ini.html)
+ [Close Tag](close-tag.ini.html)
+ [Operators](operator.ini.html)
+ [php\\.ini](php.ini.ini.html)
+ [short\_open\_tag](short_open_tag.ini.html)
