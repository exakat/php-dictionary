.. _middleware:
.. _middleware-pattern:
.. meta::
	:description:
		Middleware Pattern: A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Middleware Pattern
	:twitter:description: Middleware Pattern: A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Middleware Pattern
	:og:type: article
	:og:description: A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/middleware.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Middleware Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Middleware Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Middleware Pattern
------------------

A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime.

Unlike the Decorator pattern, middlewares can be added at runtime, conditionally, from configuration. This pattern is inspired by PSR-15, which standardizes HTTP middleware for request handlers.

The key characteristic is that the $next parameter is typed to the component's own interface, enabling IDE autocompletion and type safety throughout the chain. Implementing the middleware stack requires some glue code to chain the layers together; see the documentation link below for a complete implementation.

.. code-block:: php
   
   <?php
   
   interface HtmlRendererInterface
   {
       public function render(string $template, array $data = []): string;
   }
   
   // The middleware interface mirrors the component interface,
   // with an additional $next parameter typed to HtmlRendererInterface
   interface MiddlewareInterface
   {
       public function render(
           string $template,
           array $data = [],
           HtmlRendererInterface $next,
       ): string;
   }
   
   // Before pattern: modify input, then delegate
   class TimestampMiddleware implements MiddlewareInterface
   {
       public function render(
           string $template,
           array $data = [],
           HtmlRendererInterface $next,
       ): string {
           $data['generatedOn'] = date(DateTime::ATOM);
   
           return $next->render($template, $data);
       }
   }
   
   // Before+After pattern: wrap $next to also process output
   class CacheMiddleware implements MiddlewareInterface
   {
       private array $cache = [];
   
       public function render(
           string $template,
           array $data = [],
           HtmlRendererInterface $next,
       ): string {
           $key = hash('sha256', $template . serialize($data));
   
           if (isset($this->cache[$key])) {
               return $this->cache[$key]; // short-circuit: return early without calling $next
           }
   
           $this->cache[$key] = $next->render($template, $data);
   
           return $this->cache[$key];
       }
   }
   
   ?>


`Documentation <https://maximegosselin.com/posts/using-the-middleware-pattern-to-extend-php-libraries/>`__

See also https://www.php-fig.org/psr/psr-15/, https://backslashphp.github.io/docs/customization/extending-with-middleware/

Related packages : `backslashphp/backslash <https://packagist.org/packages/backslashphp/backslash>`_
