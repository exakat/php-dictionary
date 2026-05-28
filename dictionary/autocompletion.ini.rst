.. _autocompletion:
.. _autocomplete:
.. _code-completion:
.. meta::
	:description:
		Autocompletion: Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Autocompletion
	:twitter:description: Autocompletion: Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Autocompletion
	:og:type: article
	:og:description: Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/autocompletion.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Autocompletion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Autocompletion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Autocompletion
--------------

Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing. It speeds up development, reduces typos, and surfaces available APIs without requiring constant documentation lookups.

PHP autocompletion relies on static analysis: type declarations in the source, PHPDoc annotations, and type inference where a type is not explicitly specified by may be guessed with a high level of confidence. Autocompletion relies on a LSP server: Language Server Protocol.

Autocompletion also applies to IDE plugins, framework-specific stubs, and tools like stub files to enable completion for external components.

.. code-block:: php
   
   <?php
   
       // Full type information enables accurate autocompletion
       function getUser(int $id): User {
           return new User($id);
       }
   
       $user = getUser(1);
       $user->  // IDE suggests: getName(), getEmail(), getId() …
   
   ?>


See also `Intelephense – PHP language server <https://intelephense.com/>`_, `Laravel IDE Helper <https://github.com/barryvdh/laravel-ide-helper>`_ and `PHP Language Server Protocol <https://microsoft.github.io/language-server-protocol/>`_.

Related : :ref:`Type System <type>`, , :ref:`Type Inference <type-inference>`, :ref:`PHPdoc <phpdoc>`, , :ref:`Integrated Environment of Development (IDE) <ide>`, :ref:`LSP <lsp>`

Related packages : `barryvdh/laravel-ide-helper <https://packagist.org/packages/barryvdh/laravel-ide-helper>`_
