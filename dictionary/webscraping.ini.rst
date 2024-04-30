.. _webscraping:
.. _web_scraping:

Webscraping
-----------

Web scraping is the process of extracting data from websites. It involves fetching web pages, parsing HTML (or other markup languages), and then extracting the desired information. Web scraping can be done manually by a person or automatically using software tools called web scrapers or web crawling bots.

.. code-block:: php
   
   <?php
   
   // fetching the web page
   $html = file_get_contents('https://www.php.net/');
   
   // retrieving PHP current versions
   preg_match_all('/downloads.php#v(\d+\.\d+\.\d+)\b/', $html, $r);
   
   print_r(array_unique($r[1]));
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Web_scraping>`__

See also `Web Scraping in PHP - The Complete Guide <https://proxiesapi.com/articles/web-scraping-in-php-the-complete-guide>`_

Related packages : `symfony/panther <https://packagist.org/packages/symfony/panther>`_, `roach-php/core <https://packagist.org/packages/roach-php/core>`_, `jaeger/querylist <https://packagist.org/packages/jaeger/querylist>`_
