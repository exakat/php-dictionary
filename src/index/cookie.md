# Cookie
Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser. This stored information persists across browsing sessions, allowing websites to remember specific details about visitors when they return. The primary purposes include tracking user behavior, maintaining login states, personalizing content, and identifying returning visitors to provide customized experiences based on their previous interactions with the site.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cookie.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cookie.html","name":"Cookie","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cookie.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [Headers](headers.ini.html)
+ [Single Sign On (SSO)](sso.ini.html)

## Related packages

+ [dflydev/fig-cookies](https://packagist.org/packages/dflydev/fig-cookies)
