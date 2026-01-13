.. _http-encoding:
.. _percent-encoding:
.. meta::
	:description:
		HTTP Encoding: URL encoding, also known as percent-encoding, is a mechanism used to convert characters into a format that can be transmitted over the Internet.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: HTTP Encoding
	:twitter:description: HTTP Encoding: URL encoding, also known as percent-encoding, is a mechanism used to convert characters into a format that can be transmitted over the Internet
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: HTTP Encoding
	:og:type: article
	:og:description: URL encoding, also known as percent-encoding, is a mechanism used to convert characters into a format that can be transmitted over the Internet
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/http-encoding.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"HTTP Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"URL encoding, also known as percent-encoding, is a mechanism used to convert characters into a format that can be transmitted over the Internet","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/HTTP Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


HTTP Encoding
-------------

URL encoding, also known as percent-encoding, is a mechanism used to convert characters into a format that can be transmitted over the Internet. URLs (Uniform Resource Locators) can only contain a limited set of characters, consisting mainly of alphanumeric characters along with a few special characters such as hyphens, underscores, periods, and tilde (~).

When a URL contains characters outside this set, such as spaces or non-alphanumeric characters like ampersands, question marks, or slashes, URL encoding is used to represent those characters in a safe and compatible format.

URL encoding works by replacing each non-alphanumeric character with a percent sign (%) followed by two hexadecimal digits that represent the ASCII (or Unicode) code of the character. For example:

+ Space (' ') is encoded as %20.
+ Ampersand ('&') is encoded as %26.
+ Question mark ('?') is encoded as %3F.
+ Slash ('/') is encoded as %2F.

URL encoding ensures that URLs remain valid and functional across different systems and protocols. It is commonly used in web browsers, HTTP requests, and other internet-related technologies to transmit data safely and reliably. Most programming languages provide built-in functions or libraries to perform URL encoding and decoding operations.

PHP provides urlencode() and urldecode() to handle coding and decoding this format. 


.. code-block:: php
   
   <?php
   
   $text = "This is the Euro symbol '€'.";
   
   // builds a valid URL 
   $url = 'https://www.somesite.com/'.urlencode($text);
   
   // https://www.somesite.com/This+is+the+Euro+symbol+%27%E2%82%AC%27.
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Percent-encoding>`__

See also `urlencode() <https://www.php.net/urlencode>`_, `urldecode() <https://www.php.net/urldecode>`_

Related : :ref:`Text Encoding <text-encoding>`
