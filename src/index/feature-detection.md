# Feature Detection
Feature detection is the practice of testing, at runtime, whether a specific capability is actually available before using it, instead of inferring availability indirectly from something like a version number or a ``User-Agent`` string. The check answers 'can I do this?' directly, which stays correct even when the underlying assumption behind a version-based guess breaks, such as a backported feature, a polyfill, or a client that lies about what it is.

Feature detection commonly means checking ``function_exists()`` before calling an optional function, ``extension_loaded()`` before relying on an extension such as ``intl`` or ``gd``, ``class_exists()`` or ``interface_exists()`` before referencing an optional dependency, or ``defined()`` before using a constant that may not exist on every PHP version or build. It is what makes a polyfill possible in the first place: the polyfill itself is only defined once feature detection has established that the native implementation is missing.

The browser equivalent is testing for a JavaScript API's existence directly, such as ``if ('fetch' in window)``, rather than parsing the ``User-Agent`` string to guess which browser and version is making the request. User-Agent sniffing is brittle because the string is freely spoofable and does not necessarily reflect what the client actually supports, whereas feature detection tests the real thing and degrades gracefully, typically by falling back to a polyfill or an alternate code path, when the feature turns out to be missing.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature-detection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature-detection.html","name":"Feature Detection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 07 Sep 2026 09:20:54 +0000","dateModified":"Mon, 07 Sep 2026 09:20:54 +0000","description":"Feature detection is the practice of testing, at runtime, whether a specific capability is actually available before using it, instead of inferring availability indirectly from something like a version number or a User-Agent string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature-detection.html"]}],"keywords":["concept","compatibility"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/user-agent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polyfill.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/browser.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_browser.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Feature_detection_(web_development)"},{"@type":"CreativeWork","name":"Feature detection - MDN Web Docs Glossary","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Glossary\/Feature_detection"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.34","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"feature-detection"}]}]}</script>
```php
<?php

    // feature detection: function
    if (!function_exists('str_contains')) {
        function str_contains(string $haystack, string $needle): bool {
            return strpos($haystack, $needle) !== false;
        }
    }

    // feature detection: extension
    if (extension_loaded('intl')) {
        $fmt = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY);
    } else {
        // fallback formatting without intl
    }

    // feature detection: optional class/dependency
    if (class_exists(\Redis::class)) {
        $cache = new RedisCache();
    } else {
        $cache = new ArrayCache();
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Feature_detection_(web_development))**
## See Also

+ [Feature detection - MDN Web Docs Glossary](https://developer.mozilla.org/en-US/docs/Glossary/Feature_detection)

## Related

+ [User-Agent](user-agent.html)
+ [Polyfill](polyfill.html)
+ [Browser](browser.html)
+ [get\_browser()](get_browser.html)

## Related packages

+ [symfony/polyfill-php83](https://packagist.org/packages/symfony/polyfill-php83)
