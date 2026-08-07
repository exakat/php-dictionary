# Hardening
Hardening refers to the raise of security level in the installation of PHP, and other related technologies. It means reviewing the default or installed configurations and set ups, to make them safer.

For example, by default, PHP displays its version number in the HTTP headers, with ``X-Powered-By``. This may be hidden, so as not to disclose any information, by setting ``expose_php`` directive to off, or ``0`` in the ``php.ini`` file.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hardening.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hardening.html","name":"Hardening","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:53:58 +0000","dateModified":"Fri, 03 Jul 2026 07:53:58 +0000","description":"Hardening refers to the raise of security level in the installation of PHP, and other related technologies","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Hardening.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Hardening"}]}]}</script>
**[Documentation](https://cheatsheetseries.owasp.org/cheatsheets/PHP_Configuration_Cheat_Sheet.html)**
## See Also

+ [How to Hide PHP Version Number in HTTP Header](https://www.tecmint.com/hide-php-version-http-header/)
+ [PHP Hardening: Strategies to Meet Compliance Requirements](https://www.zend.com/blog/php-hardening-strategies)
+ [Modern PHP Security Part 2: Breaching and hardening the PHP engine](https://labs.detectify.com/security-guidance/modern-php-security-part-2-breaching-and-hardening-the-php-engine/)

## Related

+ [expose\_php](expose_php.html)

## Related packages

+ [drupal/core-vendor-hardening](https://packagist.org/packages/drupal/core-vendor-hardening)
+ [jvmtech/neos-hardening](https://packagist.org/packages/jvmtech/neos-hardening)
