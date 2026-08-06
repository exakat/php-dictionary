# Redirect
An HTTP redirect instructs the client to navigate to a different URL. PHP performs redirects by sending a ``Location`` header with an appropriate HTTP status code: 301 for permanent redirect, 302 for temporary, or 303 for 'see other'.

After sending the redirect header, execution should stop immediately with ``exit`` to prevent further output being sent to the client.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/redirect.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/redirect.html","name":"Redirect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:44:36 +0000","dateModified":"Mon, 13 Jul 2026 18:44:36 +0000","description":"An HTTP redirect instructs the client to navigate to a different URL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Redirect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Temporary redirect
    header('Location: /new-page');
    exit;
    
    // Permanent redirect
    header('Location: https://example.com/new-page', true, 301);
    exit;

?>
```

**[Documentation](https://www.php.net/manual/en/function.header.php)**
## See Also

+ [HTTP redirects](https://developer.mozilla.org/en-US/docs/Web/HTTP/Redirections)

## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [HTTP Code](http-code.ini.html)
+ [HTTP Request Headers](http-headers.ini.html)
+ [Response](response.ini.html)
+ [Universal Resource Locator (URL)](url.ini.html)
+ [Search Engine Optimization (SEO)](seo.ini.html)
+ [SplSubject](splsubject.ini.html)
