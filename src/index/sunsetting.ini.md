# Sunsetting
Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage. It is also displaying a warning message to alert of the disappearance, and offers alternatives.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sunsetting.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sunsetting.ini.html","name":"Sunsetting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 20:22:15 +0000","dateModified":"Sun, 21 Jun 2026 20:22:15 +0000","description":"Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Sunsetting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Feature](feature.ini.html)
+ [Deprecation](deprecation.ini.html)
