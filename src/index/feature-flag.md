# Feature Flag
A feature flag, also known as a feature toggle or feature switch, is a software development technique used to enable or disable certain features or functionalities in an application or system. Instead of deploying new features directly to all users, developers can use feature flags to control the visibility and activation of these features.

Feature flags are typically implemented as conditional statements in the codebase, allowing developers to selectively enable or disable features based on various criteria such as user roles, user segments, environment conditions, or A/B testing groups. This allows for gradual feature rollouts, experimentation, and controlled releases, which can help mitigate risks associated with introducing new features or changes to a system.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature-flag.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature-flag.html","name":"Feature Flag","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A feature flag, also known as a feature toggle or feature switch, is a software development technique used to enable or disable certain features or functionalities in an application or system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Feature Flag.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Feature Flag"}]}]}</script>
```php
<?php

    // feature flag implemented via PHP directives
    if (ini_get('date_is_visible')) {
        echo date('r');
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Feature_toggle)**
## See Also

+ [How to use feature flags in a PHP application](https://configcat.com/blog/2022/09/16/how-to-use-feature-flags-in-php/)
+ [Unleash: Feature flags in PHP](https://chrastecky.dev/programming/unleash-feature-flags-in-php)

## Related

+ [Configuration](configuration.html)
+ [Feature](feature.html)
+ [Feature Testing](feature-testing.html)
+ [Release](release.html)
+ [Switch](switch.html)
+ [Circuit Breaker](circuit-breaker.html)

## Related packages

+ [ylsideas/feature-flags](https://packagist.org/packages/ylsideas/feature-flags)
