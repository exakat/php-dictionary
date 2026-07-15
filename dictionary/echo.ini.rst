.. _echo:
.. meta::
	:description:
		Echo: ``echo`` is a language construct used to output text to the browser or the output stream.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Echo
	:twitter:description: Echo: ``echo`` is a language construct used to output text to the browser or the output stream
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Echo
	:og:type: article
	:og:description: ``echo`` is a language construct used to output text to the browser or the output stream
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/echo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/echo.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/echo.ini.html","name":"Echo","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:42:38 +0000","dateModified":"Thu, 18 Jun 2026 13:42:38 +0000","description":"``echo`` is a language construct used to output text to the browser or the output stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Echo.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Echo
----

``echo`` is a language construct used to output text to the browser or the output stream. It's commonly used to display content on a web page, generate HTML, or provide feedback to users. The echo construct is often used to generate dynamic content that is sent to the client's web browser.

``echo`` is a language construct of PHP, not a function: it may be not be used as a callback. 

``echo`` works without parenthesis: then, it accepts an arbitrary number of arguments.

.. code-block:: php
   
   <?php
   
       echo 'Hello', ' ', 'world!';
   
   ?>


`Documentation <https://www.php.net/manual/en/function.echo.php>`__

See also `The difference between echo and print in PHP <https://roman-huliak.medium.com/the-difference-between-echo-and-print-in-php-5047006f5fc6>`_.

Related : :ref:`Print <print>`, :ref:`Language Construct <language-construct>`, :ref:`php://output <php-output>`, :ref:`print_r() <print_r>`, :ref:`printf() <printf>`, :ref:`STDOUT <stdout>`
