.. _ip:
.. meta::
	:description:
		IP: Internet Protocol: In the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: IP
	:twitter:description: IP: Internet Protocol: In the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: IP
	:og:type: article
	:og:description: Internet Protocol: In the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ip.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"IP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"Internet Protocol: In the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/IP.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


IP
--

Internet Protocol: In the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks. IP addresses are unique numerical labels assigned to each device connected to a network, allowing them to communicate with each other.

PHP usually handles IP addresses as strings. It also has dedicated functions to manage them, in particular converting IPs to integer, with ip2long(), or solving them with DNS, with gethostbyaddr(). 

PHP also provides IP in its configuration, such as ``$_SERVER['SERVER_ADDR']``, which is the IP of the current webserver.

.. code-block:: php
   
   <?php
   
   echo $_SERVER['SERVER_ADDR']; 
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/IP_address>`__
