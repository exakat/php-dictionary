# Search Engine Optimization (SEO)
Search Engine Optimization, or SEO, is the practice of improving a website so that search engines rank it higher in search results. From a PHP developer's perspective, SEO involves both the content served and the technical implementation.

Key technical SEO factors influenced by PHP code include:

+ Generating clean, semantic HTML
+ Managing canonical URLs and redirects, HTTP codes 301/302
+ Serving proper HTTP status codes, HTTP codes 404, 410, etc.
+ Controlling caching headers for fast page loads
+ Generating XML sitemaps and robots.txt dynamically
+ Handling ``<meta>`` tags, Open Graph, and structured data, like JSON-LD
+ Producing human-readable, keyword-rich URLs, or slugs

PHP-based CMSs and frameworks such as WordPress, Drupal, Symfony, and Laravel all have dedicated SEO plugins or packages.

Common pitfalls include duplicate content, when missing canonical tags, slow response times, broken links, and incorrect use of HTTP status codes.
```php
<?php

    // Canonical URL header
    header('Link: <https://example.com/page>; rel="canonical"');

    // Permanent redirect
    header('Location: https://example.com/new-url', true, 301);
    exit;

?>
```

## See Also

+ [Google Search Central — SEO documentation](https://developers.google.com/search/docs)
+ [SEO for developers](https://web.dev/learn/)

Related : [World Wide Web (WWW)](World Wide Web (WWW)), [HyperText Markup Language (HTML)](HyperText Markup Language (HTML)), [Webserver](Webserver), [HTTP Request Headers](HTTP Request Headers), [sitemap](sitemap), [Universal Resource Locator (URL)](Universal Resource Locator (URL)), [Redirect](Redirect), [Slug](Slug), [Cache](Cache), [Canonical](Canonical)
