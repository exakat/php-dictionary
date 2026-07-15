.. _habit:
.. meta::
	:description:
		Habit: A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Habit
	:twitter:description: Habit: A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Habit
	:og:type: article
	:og:description: A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/habit.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/habit.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/habit.ini.html","name":"Habit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Habit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Habit
-----

A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time.

Habits can be beneficial: such as always validating input, writing tests first, or naming variables clearly; they may be harmful, such as suppressing errors with ``@``, using magic numbers, or leaving dead code in place.

Good habits are the foundation of consistent code quality. They turn best practices into second nature. Bad habits are often the source of recurring issues in a codebase, since they are applied without reflection.

Static analysis tools are particularly effective at reporting bad habits: patterns that appear many times across a codebase, reflecting a systematic behaviour rather than a one-off mistake.

.. code-block:: php
   
   <?php
   
       // A bad habit: silencing errors instead of handling them
       $result = @file_get_contents('data.json');
   
       // A good habit: checking return values explicitly
       $result = file_get_contents('data.json');
       if ($result === false) {
           throw new RuntimeException('Could not read data.json');
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Habit>`__

See also `The Power of Habit in Software Engineering <https://martinfowler.com/articles/writingPatterns.html>`_.

Related : :ref:`Best Practices <best-practice>`, :ref:`Coding Conventions <coding-convention>`, :ref:`@, No Scream Operator <noscream>`, :ref:`Dead Code <dead-code>`, :ref:`Magic Numbers <magic-number>`, :ref:`Readability <readability>`, :ref:`Canonical <canonical>`
