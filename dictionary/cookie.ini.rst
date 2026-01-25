.. _cookie:
.. meta::
	:description:
		Cookie: Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cookie
	:twitter:description: Cookie: Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cookie
	:og:type: article
	:og:description: Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cookie.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cookie","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:21 +0000","dateModified":"Sun, 25 Jan 2026 20:46:21 +0000","description":"Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cookie.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cookie
------

Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser. This stored information persists across browsing sessions, allowing websites to remember specific details about visitors when they return. The primary purposes include tracking user behavior, maintaining login states, personalizing content, and identifying returning visitors to provide customized experiences based on their previous interactions with the site.

.. code-block:: php
   
   <?php
   
   setcookie('aCookieName', 'Cookie value', time()+3600);  /* expire in 1 hour */
   
   ?>


`Documentation <https://www.php.net/manual/en/features.cookies.php>`__

See also https://www.simplilearn.com/tutorials/php-tutorial/cookies-in-php, https://www.geeksforgeeks.org/php-cookies/

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`

Related packages : `dflydev/fig-cookies <https://packagist.org/packages/dflydev/fig-cookies>`_
