# Deprecation
Deprecation is the state of a feature which is still available, but not recommended anymore. The next stage of life for the feature is the removal, usually in a major release.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecation.html","name":"Deprecation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:21 +0000","dateModified":"Mon, 17 Aug 2026 09:06:21 +0000","description":"Deprecation is the state of a feature which is still available, but not recommended anymore","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Deprecation.html"]}],"alternateName":["obsolete"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecated.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sunsetting.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/migration74.deprecated.php#migration74.deprecated.core.nested-ternary"},{"@type":"CreativeWork","name":"Deprecated Code: The Warning You Keep Ignoring Will Eventually Break Everything","url":"https:\/\/www.in-com.com\/blog\/managing-deprecated-code-in-software-development\/"},{"@type":"CreativeWork","name":"Software Engineering at Google - Deprecation","url":"https:\/\/abseil.io\/resources\/swe-book\/html\/ch15.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"deprecation"}]}]}</script>
```php
<?php

1 ? 2 : 3 ? 4 : 5;   // deprecated in PHP 7.4, removed in PHP 8.0
(1 ? 2 : 3) ? 4 : 5; // ok

?>
```

**[Documentation](https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.nested-ternary)**
## See Also

+ [Deprecated Code: The Warning You Keep Ignoring Will Eventually Break Everything](https://www.in-com.com/blog/managing-deprecated-code-in-software-development/)
+ [Software Engineering at Google - Deprecation](https://abseil.io/resources/swe-book/html/ch15.html)

## Related

+ [Deprecated](deprecated.html)
+ [Fatal Error](fatal-error.html)
+ [String Increment](string-increment.html)
+ [Sunsetting](sunsetting.html)
