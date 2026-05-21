.. _web-spider:
.. _spider:
.. _crawler:
.. meta::
	:description:
		Web-spider: A web spider, also called a web crawler or bot, is a program that automatically browses the internet and collects information from websites.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Web-spider
	:twitter:description: Web-spider: A web spider, also called a web crawler or bot, is a program that automatically browses the internet and collects information from websites
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Web-spider
	:og:type: article
	:og:description: A web spider, also called a web crawler or bot, is a program that automatically browses the internet and collects information from websites
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/web-spider.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Web-spider","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 14 May 2026 10:34:42 +0000","dateModified":"Thu, 14 May 2026 10:34:42 +0000","description":"A web spider, also called a web crawler or bot, is a program that automatically browses the internet and collects information from websites","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Web-spider.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Web-spider
----------

A web spider, also called a web crawler or bot, is a program that automatically browses the internet and collects information from websites.

A simple robot follows a straightforward process:

+ Visits a webpage
+ Reads its content
+ Follows links to other pages
+ Repeats the process over and over

Web-spiders collect information such as the content, for search engines or AI, related links, for SEO ranking, or security. 

Web-spiders should limit their visits according to the ``robots.txt`` file, available at the top of the website. Some of them don't respect it, or even exploit it to their own advantage.

`Documentation <https://en.wikipedia.org/wiki/Web_crawler>`__

See also `What is a web crawler? | How web spiders work <https://www.cloudflare.com/learning/bots/what-is-a-web-crawler/>`_.

Related : :ref:`Webscraping <webscraping>`, :ref:`robots\.txt <robots.txt>`, :ref:`sitemap <sitemap>`, :ref:`Webserver <webserver>`
