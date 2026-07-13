.. _type-checking:
.. _type-verification:
.. meta::
	:description:
		Type Checking: Type checking is the process of verifying that the types of expressions, variables, arguments, and return values are consistent with their declarations and usage.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type Checking
	:twitter:description: Type Checking: Type checking is the process of verifying that the types of expressions, variables, arguments, and return values are consistent with their declarations and usage
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Type Checking
	:og:type: article
	:og:description: Type checking is the process of verifying that the types of expressions, variables, arguments, and return values are consistent with their declarations and usage
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-checking.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Type Checking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 14:51:21 +0000","dateModified":"Fri, 10 Jul 2026 14:51:21 +0000","description":"Type checking is the process of verifying that the types of expressions, variables, arguments, and return values are consistent with their declarations and usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Checking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Checking
-------------

Type checking is the process of verifying that the types of expressions, variables, arguments, and return values are consistent with their declarations and usage. It can take place before execution, as static type checking, or during execution, as runtime type checking, and the two complement each other.

Static type checking is performed by tools before the script ever runs. These tools rely on type inference to deduce the type of every expression, then compare those inferred types against declared signatures and usage. Because PHP does not natively support generics, static checkers extend the language with PHPDoc-style ``@template`` annotations that let a single class or function describe type-safe behaviour for multiple element types; those annotations exist only for the checker and are fully erased at runtime.

Runtime type checking is enforced by the PHP engine at the moment a typed boundary is crossed: when a function is called, when a value is assigned to a typed property, or when a function returns. In strict mode, ``declare(strict_types=1)``, PHP rejects values that do not match the declared type instead of coercing them, throwing a ``TypeError``. Explicit guards such as ``is_string()``, ``instanceof``, or ``assert()`` are also runtime checks that programmers add themselves.

The two phases sit at different points in the order of execution: static analysis happens entirely before the script starts, while runtime enforcement happens progressively as each statement executes. A type error caught statically prevents a whole class of bugs from ever reaching production; a runtime error caught by PHP's engine surfaces only when the relevant code path is actually reached.


.. code-block:: php
   
   <?php
   
       declare(strict_types=1);
   
       // Static type checking that verifies this signature is used correctly
       // Runtime type checking: PHP rejects a non-string argument at call time
       function shout(string $message): string {
           return strtoupper($message);
       }
   
       // PHPDoc generics: @template T informs static checkers; erased at runtime
       /**
        * @template T
        * @param T $value
        * @return T
        */
       function identity(mixed $value): mixed {
           return $value;
       }
   
       // Explicit runtime check narrows the type for both static and runtime phases
       function process(mixed $value): string {
           if (!is_string($value)) {
               throw new \TypeError('Expected string');
           }
           // inferred as string from here by static checkers AND enforced at runtime
           return strtoupper($value);
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Type_system#Type_checking>`__

See also `PHP RFC: Scalar Type Declarations <https://wiki.php.net/rfc/scalar_type_hints_v5>`_, `PHPStan – Understanding Types <https://phpstan.org/writing-php-code/phpdoc-types>`_, `Psalm – Typing in Psalm <https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/>`_ and `Runtime type checking is great <https://blog.jez.io/runtime-type-checking/>`_.

Related : :ref:`Type Inference <type-inference>`, :ref:`Static Code Analysis (SCA) <sca>`, :ref:`Runtime Checks <runtime-checks>`, :ref:`Gradual Type Checking <gradual-type-checking>`, :ref:`Generics <generics>`, :ref:`Types Erasure <type-erasure>`, :ref:`Order Of Execution <order-of-execution>`, :ref:`strict_types <strict_types>`, :ref:`Type System <type-hint>`, :ref:`TypeError <typeerror>`, :ref:`Type Juggling <type-juggling>`, :ref:`Type Coverage <type-coverage>`, :ref:`instanceof <instanceof>`, :ref:`is_a() <is_a>`, :ref:`Array Shape <array-shape>`, :ref:`Nominal Type <nominal-type>`, :ref:`Phantom Type <phantom-type>`, :ref:`Refinement Type <refinement-type>`, :ref:`Strict <strict>`, :ref:`Structural Typing <structural-typing>`, :ref:`Type Narrowing <type-narrowing>`
