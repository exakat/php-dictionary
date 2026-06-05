.. _php-filter:
.. _php-filter-wrapper:
.. meta::
	:description:
		php://filter: ``php://filter`` is a meta-wrapper in PHP that allows applying one or more filter chains to a stream before the data is read or written.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: php://filter
	:twitter:description: php://filter: ``php://filter`` is a meta-wrapper in PHP that allows applying one or more filter chains to a stream before the data is read or written
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: php://filter
	:og:type: article
	:og:description: ``php://filter`` is a meta-wrapper in PHP that allows applying one or more filter chains to a stream before the data is read or written
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-filter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"php:\/\/filter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 04 Jun 2026 06:39:54 +0000","dateModified":"Thu, 04 Jun 2026 06:39:54 +0000","description":"``php:\/\/filter`` is a meta-wrapper in PHP that allows applying one or more filter chains to a stream before the data is read or written","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/php:\/\/filter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


php://filter
------------

``php://filter`` is a meta-wrapper in PHP that allows applying one or more filter chains to a stream before the data is read or written. It is part of the ``php://`` family of built-in stream wrappers.

A filter chain is specified in the URL itself: ``php://filter/read=<filters>/resource=<target>``. Built-in filters include string conversions ``string.toupper``, encoding transforms ``convert.base64-encode``, ``convert.iconv.*``, and compression ``zlib.deflate``.

While legitimately used to read or transform stream data on-the-fly, ``php://filter`` is widely exploited in Local File Inclusion vulnerabilities. By using ``convert.base64-encode``, an attacker can read the raw PHP source of any included file instead of executing it, leaking credentials and logic. Advanced exploit chains using ``iconv`` filters can even achieve remote code execution from an LFI alone.

.. code-block:: php
   
   <?php
   
   // Legitimate use: read a file and base64-encode its contents on the fly
   $encoded = file_get_contents('php://filter/read=convert.base64-encode/resource=config.php');
   
   // Attacker use (LFI context): exfiltrate PHP source code via include
   // include($_GET['page']);
   // => ?page=php://filter/read=convert.base64-encode/resource=index.php
   // Returns base64 of index.php source instead of executing it
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.php.php>`__

See also `PHP Protocol <https://www.php.net/manual/en/wrappers.php.php>`_, `LFI to RCE via php://filter <https://www.synacktiv.com/publications/php-filters-chain-what-is-it-and-how-to-use-it.html>`_ and `PHP filter chains: file read from error-based oracle <https://github.com/synacktiv/php_filter_chain_generator>`_.

Related : :ref:`php:// <wrapper-php>`, :ref:`Wrapper <wrapper>`, :ref:`Stream <stream>`, :ref:`Local File Inclusion <local-file-inclusion>`, :ref:`Remote Code Execution (RCE) <rce>`, :ref:`filter <filter>`, :ref:`Security <security>`, :ref:`Base 64 Encoding <base64>`
