# Redirect
An HTTP redirect instructs the client to navigate to a different URL. PHP performs redirects by sending a ``Location`` header with an appropriate HTTP status code: 301 for permanent redirect, 302 for temporary, or 303 for 'see other'.

After sending the redirect header, execution should stop immediately with ``exit`` to prevent further output being sent to the client.
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

## See Also

+ [HTTP redirects](https://developer.mozilla.org/en-US/docs/Web/HTTP/Redirections)

Related : [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [HTTP Code](HTTP Code), [HTTP Request Headers](HTTP Request Headers), [Response](Response), [Universal Resource Locator (URL)](Universal Resource Locator (URL)), [Search Engine Optimization (SEO)](Search Engine Optimization (SEO)), [SplSubject](SplSubject)
