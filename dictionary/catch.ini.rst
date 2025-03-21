.. _catch:
.. meta::
	:description:
		Catch: Catch is the complement clause of try : it defines which exception is caught.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Catch
	:twitter:description: Catch: Catch is the complement clause of try : it defines which exception is caught
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Catch
	:og:type: article
	:og:description: Catch is the complement clause of try : it defines which exception is caught
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/catch.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Catch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Catch is the complement clause of try : it defines which exception is caught","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Catch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Catch
-----

Catch is the complement clause of try : it defines which exception is caught. Optionally, it defines which variable holds the exception when it happens (since PHP 8.0).

Multiple catches may be used. They are applied in the order of coding, and the first clause which succeed is the last.


.. code-block:: php
   
   <?php
   
   try {
       callSomeMethod();
   } catch (\SomeException $e) {
       display("Warning");
   } catch (\SomeSeriousException $e) {
       display("Alert");
   } catch (\Exception) {
       // process the error here
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php>`__

See also `Non-capturing exception catches in PHP 8 <https://www.amitmerchant.com/non-capturing-exception-catches-php8/>`_

Related : :ref:`Try-catch <try-catch>`, :ref:`Finally <finally>`, :ref:`Throwable <throwable>`
