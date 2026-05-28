.. _php-output:
.. meta::
	:description:
		php://output: ``php://output`` is a special write-only stream that gives access the body of the outgoing HTTP response.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: php://output
	:twitter:description: php://output: ``php://output`` is a special write-only stream that gives access the body of the outgoing HTTP response
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: php://output
	:og:type: article
	:og:description: ``php://output`` is a special write-only stream that gives access the body of the outgoing HTTP response
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-output.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"php:\/\/output","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"``php:\/\/output`` is a special write-only stream that gives access the body of the outgoing HTTP response","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/php:\/\/output.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


php://output
------------

``php://output`` is a special write-only stream that gives access the body of the outgoing HTTP response. It does not work with CLI environment.

``php://output`` is also implicitly written when using ``echo``, ``print``, the HTML mode, or ``print_r()``.

.. code-block:: php
   
   <?php
   
       $incoming = file_put_contents('php://output', '<p>hello world</p>');
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.php.php>`__

See also `PHP Output Buffering for dummies <https://medium.com/@eric.morand/php-output-buffering-for-dummies-fad9624554b4>`_.

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Stream <stream>`, :ref:`Echo <echo>`, :ref:`Print <print>`, :ref:`file_put_contents() <file_put_contents>`
