.. _toon:
.. meta::
	:description:
		Token Oriented Object Notation (TOON): ``TOON``, which stands for ``Token Oriented Object Notation``, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Token Oriented Object Notation (TOON)
	:twitter:description: Token Oriented Object Notation (TOON): ``TOON``, which stands for ``Token Oriented Object Notation``, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Token Oriented Object Notation (TOON)
	:og:type: article
	:og:description: ``TOON``, which stands for ``Token Oriented Object Notation``, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/toon.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Token Oriented Object Notation (TOON)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Apr 2026 15:18:32 +0000","dateModified":"Tue, 14 Apr 2026 15:18:32 +0000","description":"``TOON``, which stands for ``Token Oriented Object Notation``, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Token Oriented Object Notation (TOON).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Token Oriented Object Notation (TOON)
-------------------------------------

``TOON``, which stands for ``Token Oriented Object Notation``, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow. It's intended for LLM input as a drop-in, lossless representation of JSON data.

.. code-block:: php
   
   
   <?php
   
       // example from https://github.com/toon-format/toon
       $toon = <<<TOON
   context:
     task: Our favorite hikes together
     location: Boulder
     season: spring_2025
   friends[3]: ana,luis,sam
   hikes[3]{id,name,distanceKm,elevationGain,companion,wasSunny}:
     1,Blue Lake Trail,7.5,320,ana,true
     2,Ridge Overlook,9.2,540,luis,false
     3,Wildflower Loop,5.1,180,sam,true    
     TOON;
   
   ?>


`Documentation <https://toonformat.dev/>`__

See also https://github.com/toon-format/toon, https://www.nihardaily.com/133-how-to-use-toon-in-php-reduce-llm-token-consumption-by-50

Related : :ref:`Markdown <markdown>`, 

Related packages : `sbsaga/toon <https://packagist.org/packages/sbsaga/toon>`_, `helgesverre/toon <https://packagist.org/packages/helgesverre/toon>`_
