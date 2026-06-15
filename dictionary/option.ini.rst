.. _option:
.. meta::
	:description:
		Option: An option represents a value that may or may not be present.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Option
	:twitter:description: Option: An option represents a value that may or may not be present
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Option
	:og:type: article
	:og:description: An option represents a value that may or may not be present
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/option.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Option","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An option represents a value that may or may not be present","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Option.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Option
------

An option represents a value that may or may not be present. For example, optional values are typically expressed as nullable types ``?type``, default parameter values, or named arguments with defaults.

Some functional libraries introduce an explicit ``Option`` or ``Maybe`` type to avoid null references entirely.

By extension, options are possible alternatives to execute a feature. It may tweak the way it is performed, the format of the result, or any other behavior. Such options often have a default configuration which makes them easy to adopt, until the need for specialisation arise.

Options are sometimes used as synonyms as configuration or directive: this is the case when the option has to be provided and has no default. An initial choice must be done.


.. code-block:: php
   
   <?php
   
   // Nullable type: value may be absent
   function findUser(?int $id): ?User {
       if ($id === null) {
           return null;
       }
       return User::find($id);
   }
   
   // Default value as option
   function greet(string $name = 'World'): string {
       return 'Hello, ' . $name;
   }
   
   ?>


See also `Option type <https://en.wikipedia.org/wiki/Option_type>`_.

Related : :ref:`Named Parameters <named-parameter>`, :ref:`Default Parameter <default-parameter>`, :ref:`Configuration <configuration>`, :ref:`Flag <flag>`, :ref:`SplSubject <splsubject>`
