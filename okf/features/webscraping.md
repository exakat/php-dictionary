---
type: "PHP Feature"
title: "Webscraping"
description: "Web scraping is the process of extracting data from websites."
resource: "https://en.wikipedia.org/wiki/Web_scraping"
tags: ["usage"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Webscraping

Web scraping is the process of extracting data from websites. It involves fetching web pages, parsing HTML, or other markup languages, and then extracting the desired information. Web scraping can be done manually by a person or automatically using software tools called web scrapers or web crawling bots.

```php
<?php

    // fetching the web page
    $html = file_get_contents('https://www.php.net/');
    
    // retrieving PHP current versions
    preg_match_all('/downloads.php#v(\d+\.\d+\.\d+)\b/', $html, $r);
    
    print_r(array_unique($r[1]));

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Web_scraping](https://en.wikipedia.org/wiki/Web_scraping)

## See Also
- [Web Scraping in PHP - The Complete Guide](https://proxiesapi.com/articles/web-scraping-in-php-the-complete-guide)

## Related
- [Client URL (CURL)](/features/curl.md)
- [Web-spider](/features/web-spider.md)
- [CAPTCHA](/features/captcha.md)
- [robots.txt](/features/robots.txt.md)

## Details
- Packagist: [symfony/panther](https://packagist.org/packages/symfony/panther)
- Packagist: [roach-php/core](https://packagist.org/packages/roach-php/core)
- Packagist: [jaeger/querylist](https://packagist.org/packages/jaeger/querylist)

