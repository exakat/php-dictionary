# Webscraping
Web scraping is the process of extracting data from websites. It involves fetching web pages, parsing HTML, or other markup languages, and then extracting the desired information. Web scraping can be done manually by a person or automatically using software tools called web scrapers or web crawling bots.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webscraping.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webscraping.html","name":"Webscraping","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Web scraping is the process of extracting data from websites","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Webscraping.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"webscraping"}]}]}</script>
```php
<?php

    // fetching the web page
    $html = file_get_contents('https://www.php.net/');
    
    // retrieving PHP current versions
    preg_match_all('/downloads.php#v(\d+\.\d+\.\d+)\b/', $html, $r);
    
    print_r(array_unique($r[1]));

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Web_scraping)**
## See Also

+ [Web Scraping in PHP - The Complete Guide](https://proxiesapi.com/articles/web-scraping-in-php-the-complete-guide)

## Related

+ [Client URL (CURL)](curl.html)
+ [Web-spider](web-spider.html)
+ [CAPTCHA](captcha.html)
+ [robots\\.txt](robots.txt.html)

## Related packages

+ [symfony/panther](https://packagist.org/packages/symfony/panther)
+ [roach-php/core](https://packagist.org/packages/roach-php/core)
+ [jaeger/querylist](https://packagist.org/packages/jaeger/querylist)
