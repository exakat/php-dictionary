# short\_open\_tag
``short_open_tag`` is a php.ini directive that controls whether the short PHP opening tag ``<?`` is recognised by the parser.

When ``short_open_tag = Off``, only ``<?php`` and ``<?=`` are valid opening tags. This is the recommended setting and the default since version 7.0.

The directive also affects ASP-style tags ``<% %>``, which were removed entirely in version 7.0.

Using short tags in production code is discouraged because the code breaks silently when ``short_open_tag`` is disabled, which frequently happens on shared hosting or when moving between environments.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short_open_tag.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short_open_tag.html","name":"short_open_tag","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:32:10 +0000","dateModified":"Mon, 06 Jul 2026 19:32:10 +0000","description":"``short_open_tag`` is a php","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short_open_tag.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"short_open_tag"}]}]}</script>
```php
<?php
    // php.ini
    // short_open_tag = Off   (recommended)
    // short_open_tag = On    (legacy / risky)
    
    // With short_open_tag = On, these are equivalent:
    //   <?php echo $x; ?>
    //   <? echo $x; ?>
    
    // <?= is always available since PHP 5.4, regardless of the directive.
    echo $x;
?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.short-open-tag)**
## See Also

+ [PHP RFC: Deprecate short open tags, again](https://wiki.php.net/rfc/deprecate_php_short_tags_v2)

## Related

+ [Short Tags](short-tag.html)
+ [Open Tag](open-tag.html)
+ [Echo Tag](echo-tag.html)
+ [Close Tag](close-tag.html)
+ [PHP Tags](php-tag.html)
+ [php\\.ini](php.ini.html)
