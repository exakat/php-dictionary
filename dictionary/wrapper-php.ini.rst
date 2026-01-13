.. _wrapper-php:
.. meta::
	:description:
		php://: The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: php://
	:twitter:description: php://: The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: php://
	:og:type: article
	:og:description: The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper-php.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"php:\/\/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"The ``php:\/\/`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/php:\/\/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


php://
------

The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``. These are the incoming, outgoing and error streams of the executed PHP code.

.. code-block:: php
   
   <?php
   
   // display the raw incoming data
   print_r(file_get_content('php://stdin');
   
   ?>


`Documentation <https://www.php.net/manual/en/class.streamwrapper.php>`__

Related : :ref:`Wrapper <wrapper>`, :ref:`PHP Wrappers <php-wrapper>`
