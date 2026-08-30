---
type: "concept"
title: "Write Context"
description: "The write context, also called output context or sink context, is the location in the final document where a piece of data is emitted: an HTML body, an HTML attribute, a ``<script>`` block, a CSS value, or a URL."
resource: "https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html"
tags: ["security", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Write Context

The write context, also called output context or sink context, is the location in the final document where a piece of data is emitted: an HTML body, an HTML attribute, a ``<script>`` block, a CSS value, or a URL. It determines which encoding function is the correct, safe one to use.

The same untrusted string requires different treatment depending on where it lands. ``htmlspecialchars()`` is correct for text placed in the HTML body or most attributes, but it does not make a string safe to place inside a ``<script>`` block: quotes and angle brackets are neutralized for HTML, not for JavaScript string literals, so a value escaped for one context can still break out of, or inject code into, another. Data written into a JavaScript context should instead be encoded with ``json_encode()``, or a dedicated helper such as Laravel's ``Js::from()``, and data written into a URL should be passed through ``urlencode()`` or ``rawurlencode()``.

Using the wrong write context, for instance HTML-escaping a value before printing it inside a ``<script>`` tag, is a common and easily-missed source of ``XSS``, because the mistake only shows up for inputs containing the specific characters the chosen encoder does not handle.

```php
<?php

    $name = $_GET['name']; // e.g. '</script><script>alert(1)</script>'

?>
<!-- HTML body context: htmlspecialchars() is correct -->
<p>Hello, <?= htmlspecialchars($name) ?></p>

<script>
    // Script context: htmlspecialchars() is NOT enough here.
    // Use a JSON-safe encoder instead.
    const name = <?= json_encode($name, JSON_HEX_TAG | JSON_HEX_APOS) ?>;
</script>
```

## Documentation
- [https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)

## See Also
- [OWASP: DOM based XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/DOM_based_XSS_Prevention_Cheat_Sheet.html)
- [MDN: Cross-site scripting](https://developer.mozilla.org/en-US/docs/Web/Security/Attacks/XSS)

## Related
- [HTML Escaping](/features/escape-html.md)
- [Escape Data](/features/escape-data.md)
- [Encode](/features/encode.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Stored XSS](/features/stored-xss.md)
- [json_encode()](/features/json_encode.md)
- [htmlspecialchars](/features/htmlspecialchars.md)
- [Sanitation](/features/sanitation.md)

