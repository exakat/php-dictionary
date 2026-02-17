.. _reflectionexception:
.. meta::
	:description:
		ReflectionException: ReflectionException is thrown whenever the Reflection API encounters an error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ReflectionException
	:twitter:description: ReflectionException: ReflectionException is thrown whenever the Reflection API encounters an error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ReflectionException
	:og:type: article
	:og:description: ReflectionException is thrown whenever the Reflection API encounters an error
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reflectionexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"ReflectionException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Feb 2026 10:31:01 +0000","dateModified":"Tue, 17 Feb 2026 10:31:01 +0000","description":"ReflectionException is thrown whenever the Reflection API encounters an error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ReflectionException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ReflectionException
-------------------

ReflectionException is thrown whenever the Reflection API encounters an error.

Common reasons for encountering a ReflectionException include:

+ Class Not Found
+ Property Not Found
+ Method Not Found
+ Invalid Argument.

.. code-block:: php
   
   <?php
   
       try
       {
           $ref = new ReflectionClass($class);
       }
       catch (ReflectionException $e)
       {
           var_dump($e->getMessage());
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.reflectionexception.php>`__
