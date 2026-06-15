.. _domain-name:
.. meta::
	:description:
		Domain Name: A domain name is a human-readable label that identifies a network resource, such as a web server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Domain Name
	:twitter:description: Domain Name: A domain name is a human-readable label that identifies a network resource, such as a web server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Domain Name
	:og:type: article
	:og:description: A domain name is a human-readable label that identifies a network resource, such as a web server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/domain-name.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Domain Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A domain name is a human-readable label that identifies a network resource, such as a web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Domain Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Domain Name
-----------

A domain name is a human-readable label that identifies a network resource, such as a web server. It is mapped to an IP address through the Domain Name System DNS.

Domain names appear in URLs, are parsed with ``parse_url()``, and validated with the ``filter`` extension using ``FILTER_VALIDATE_DOMAIN``.

.. code-block:: php
   
   <?php
   
       $host = parse_url('https://www.example.com/path', PHP_URL_HOST);
       // $host = 'www.example.com'
       
       $isValid = filter_var('example.com', FILTER_VALIDATE_DOMAIN);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.parse-url.php>`__

See also `Domain Name System <https://en.wikipedia.org/wiki/Domain_Name_System>`_ and `parse_url() <https://www.php.net/manual/en/function.parse-url.php>`_.

Related : :ref:`Universal Resource Locator (URL) <url>`, :ref:`Domain Name System (DNS) <dns>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Domain <domain>`, :ref:`SplSubject <splsubject>`
