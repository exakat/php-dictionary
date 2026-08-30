---
type: "concept"
title: "Named Return Values"
description: "Go lets a function declare names for its return values as part of its signature, such as ``func divmod(a, b int) (q, r int)``."
resource: "https://go.dev/tour/basics/7"
tags: ["concept", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Named Return Values

Go lets a function declare names for its return values as part of its signature, such as ``func divmod(a, b int) (q, r int)``. Those names act as ordinary local variables, pre-initialized to their zero value, that the function can assign to throughout its body; a bare ``return`` statement, with no expression, returns their current values. Combined with ``defer``, a named return value can even be modified after the ``return`` statement has been reached but before the function actually exits, which is how Go idiomatically attaches an error to a return value from within a deferred recovery.

Naming the return values also documents, directly in the signature, what each returned position represents, which plain positional return types do not.

PHP has no named return values. A ``return`` statement always requires an explicit expression, PHP's return type declaration only names a type, never the value itself, and a returned array or object's fields are named through the value itself, not through the function's signature. The closest equivalent is documenting the meaning of each key in a returned array or object through PHPDoc, which conveys names to the reader but is not enforced or usable as an implicit accumulator the way Go's named returns are.

## Documentation
- [https://go.dev/tour/basics/7](https://go.dev/tour/basics/7)

## See Also
- [Named return values [best practice] · YourBasic Go](https://yourbasic.org/golang/named-return-values-parameters/)
- [Go Tutorial => Named Return Values](https://riptutorial.com/go/example/1253/named-return-values)

## Related
- [Return](/features/return.md)
- [Return Type](/features/return-type.md)
- [Defer Statement](/features/defer.md)
- [Multiple Return Values](/features/multiple-return-value.md)

