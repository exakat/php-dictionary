.. _webscraping:
.. _web_scraping:
.. meta::
	:description:
		Webscraping: Web scraping is the process of extracting data from websites.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Webscraping
	:twitter:description: Webscraping: Web scraping is the process of extracting data from websites
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Webscraping
	:og:type: article
	:og:description: Web scraping is the process of extracting data from websites
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/webscraping.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Webscraping","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Web scraping is the process of extracting data from websites","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Webscraping.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
