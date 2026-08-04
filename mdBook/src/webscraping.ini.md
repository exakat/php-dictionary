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

## See Also

+ [Web Scraping in PHP - The Complete Guide](https://proxiesapi.com/articles/web-scraping-in-php-the-complete-guide)

Related : [Client URL (CURL)](Client URL (CURL)), [Web-spider](Web-spider), [CAPTCHA](CAPTCHA), [robots\.txt](robots\.txt)
