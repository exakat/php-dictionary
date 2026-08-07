# Middleware Pattern
A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime.

Unlike the Decorator pattern, middlewares can be added at runtime, conditionally, from configuration. This pattern is inspired by PSR-15, which standardizes HTTP middleware for request handlers.

The key characteristic is that the $next parameter is typed to the component's own interface, enabling IDE autocompletion and type safety throughout the chain. Implementing the middleware stack requires some glue code to chain the layers together; see the documentation link below for a complete implementation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html","name":"Middleware Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:14:19 +0000","dateModified":"Tue, 30 Jun 2026 09:14:19 +0000","description":"A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Middleware Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Middleware Pattern"}]}]}</script>
```php
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
            array $data,
            HtmlRendererInterface $next,
        ): string;
    }
    
    // Before pattern: modify input, then delegate
    class TimestampMiddleware implements MiddlewareInterface
    {
        public function render(
            string $template,
            array $data,
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
            array $data,
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
```

**[Documentation](https://maximegosselin.com/posts/using-the-middleware-pattern-to-extend-php-libraries/)**
## See Also

+ [PSR-15](https://www.php-fig.org/psr/psr-15/)
+ [Extending with Middleware](https://backslashphp.github.io/docs/customization/extending-with-middleware/)

## Related

+ [Design Pattern](design-pattern.html)
+ [Decorator Pattern](decorator.html)
+ [PHP Standards Recommendations (PSR)](psr.html)
+ [Pipeline](pipeline.html)
+ [Response](response.html)
+ [Aspect-Oriented](aspect-oriented.html)
+ [Message Bus](message-bus.html)
+ [Micro-framework](microframework.html)
+ [API Gateway](api-gateway.html)
+ [Cross-cutting Concerns](cross-cutting-concerns.html)
+ [Rate Limiting](rate-limit.html)
+ [Request](request.html)
+ [Slim](slim.html)

## Related packages

+ [backslashphp/backslash](https://packagist.org/packages/backslashphp/backslash)
