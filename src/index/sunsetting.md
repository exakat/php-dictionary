# Sunsetting
Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage. It is also displaying a warning message to alert of the disappearance, and offers alternatives.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sunsetting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sunsetting.html","name":"Sunsetting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 20:22:15 +0000","dateModified":"Sun, 21 Jun 2026 20:22:15 +0000","description":"Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Sunsetting.html"]}],"keywords":["lifecycle"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Deprecation"},{"@type":"CreativeWork","name":"How to Sunset a Feature (2025)","url":"https:\/\/producthq.org\/agile\/product-management\/how-to-sunset-a-feature\/"},{"@type":"CreativeWork","name":"How to sunset a feature","url":"https:\/\/www.intercom.com\/blog\/how-to-sunset-a-feature\/"},{"@type":"CreativeWork","name":"The Quiet Shift Reshaping PHP Security","url":"https:\/\/www.linkedin.com\/pulse\/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sunsetting"}]}]}</script>
```php
<?php

    //Deprecated: foo(): Implicitly marking parameter $i as nullable is deprecated, the explicit nullable type must be used instead 
    function foo(int $i = null) {}

    #[Deprecated]
    function goo(int $i = null) {}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Deprecation)**
## See Also

+ [How to Sunset a Feature (2025)](https://producthq.org/agile/product-management/how-to-sunset-a-feature/)
+ [How to sunset a feature](https://www.intercom.com/blog/how-to-sunset-a-feature/)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related

+ [Feature](feature.html)
+ [Deprecation](deprecation.html)
