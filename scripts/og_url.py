#!/usr/bin/env python3
"""Fix <meta property="og:url"> to point at the .html page instead of the source .md file."""
import pathlib, re, sys

SKIP = {"404.html"}
root = pathlib.Path(sys.argv[1] if len(sys.argv) > 1 else "book")

OG_URL_RE = re.compile(r'(property="og:url" content="[^"]*)\.md(")')

changed = 0
for html in root.rglob("*.html"):
    rel = html.relative_to(root).as_posix()
    if rel in SKIP:
        continue
    text = html.read_text(encoding="utf-8")
    updated, count = OG_URL_RE.subn(r"\1.html\2", text)
    if count:
        html.write_text(updated, encoding="utf-8")
        changed += 1

print(f"{changed} file(s) updated")
