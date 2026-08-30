---
type: "PHP Feature"
title: "Middleware Pattern"
description: "A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime."
resource: "https://maximegosselin.com/posts/using-the-middleware-pattern-to-extend-php-libraries/"
tags: ["design pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Middleware Pattern

A middleware is a design pattern used to extend the behavior of a component by chaining layers that can modify inputs, outputs, or short-circuit the call, dynamically at runtime.

Unlike the Decorator pattern, middlewares can be added at runtime, conditionally, from configuration. This pattern is inspired by PSR-15, which standardizes HTTP middleware for request handlers.

The key characteristic is that the $next parameter is typed to the component's own interface, enabling IDE autocompletion and type safety throughout the chain. Implementing the middleware stack requires some glue code to chain the layers together; see the documentation link below for a complete implementation.

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

## Documentation
- [https://maximegosselin.com/posts/using-the-middleware-pattern-to-extend-php-libraries/](https://maximegosselin.com/posts/using-the-middleware-pattern-to-extend-php-libraries/)

## See Also
- [PSR-15](https://www.php-fig.org/psr/psr-15/)
- [Extending with Middleware](https://backslashphp.github.io/docs/customization/extending-with-middleware/)

## Related
- [Design Pattern](/features/design-pattern.md)
- [Decorator Pattern](/features/decorator.md)
- [PHP Standards Recommendations (PSR)](/features/psr.md)
- [Pipeline](/features/pipeline.md)
- [Response](/features/response.md)
- [Aspect-Oriented](/features/aspect-oriented.md)
- [Message Bus](/features/message-bus.md)
- [Micro-framework](/features/microframework.md)
- [API Gateway](/features/api-gateway.md)
- [Cross-cutting Concerns](/features/cross-cutting-concerns.md)
- [Rate Limiting](/features/rate-limit.md)
- [Request](/features/request.md)
- [Slim](/features/slim.md)

## Details
- Packagist: [backslashphp/backslash](https://packagist.org/packages/backslashphp/backslash)

