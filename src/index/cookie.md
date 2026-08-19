# Cookie
Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser. This stored information persists across browsing sessions, allowing websites to remember specific details about visitors when they return. The primary purposes include tracking user behavior, maintaining login states, personalizing content, and identifying returning visitors to provide customized experiences based on their previous interactions with the site.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cookie.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cookie.html","name":"Cookie","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cookie.html"]}],"keywords":["web"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/features.cookies.php"},{"@type":"CreativeWork","name":"Cookies in PHP","url":"https:\/\/www.simplilearn.com\/tutorials\/php-tutorial\/cookies-in-php"},{"@type":"CreativeWork","name":"PHP Cookies","url":"https:\/\/www.geeksforgeeks.org\/php-cookies\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cookie"}]}]}</script>
```php
<?php

setcookie('aCookieName', 'Cookie value', time()+3600);  /* expire in 1 hour */

?>
```

**[Documentation](https://www.php.net/manual/en/features.cookies.php)**
## See Also

+ [Cookies in PHP](https://www.simplilearn.com/tutorials/php-tutorial/cookies-in-php)
+ [PHP Cookies](https://www.geeksforgeeks.org/php-cookies/)

## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Headers](headers.html)
+ [Single Sign On (SSO)](sso.html)

## Related packages

+ [dflydev/fig-cookies](https://packagist.org/packages/dflydev/fig-cookies)
