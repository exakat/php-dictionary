#!/usr/bin/env python3
"""Build Changelog.txt: the words added, removed and updated in src/index.

A word is an entry of src/index/*.md. By default the working tree (including
uncommitted changes) is compared with HEAD. Use --since <rev> to compare with
another commit.

The result is written to Changelog.txt at the repository root, in a section
titled with the date of the run. If that date already has a section, the
section is replaced. Newest sections come first.
"""
import argparse
import datetime
import re
import subprocess
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
INDEX_DIR = "src/index"
CHANGELOG = ROOT / "Changelog.txt"
DATE_LINE = re.compile(r"^\d{4}-\d{2}-\d{2}$")


def git(*args, input_text=None):
    result = subprocess.run(
        ["git", "-C", str(ROOT), *args],
        input=input_text,
        capture_output=True,
        text=True,
        check=True,
    )
    return result.stdout


def committed_entries(rev):
    """Map each word to the blob id of its .md entry at revision rev."""
    entries = {}
    for line in git("ls-tree", "-r", rev, "--", INDEX_DIR).splitlines():
        meta, path = line.split("\t", 1)
        if Path(path).parent.as_posix() == INDEX_DIR and path.endswith(".md"):
            entries[Path(path).stem] = meta.split()[2]
    return entries


def working_entries():
    """Map each word to the blob id its .md entry would have if committed now."""
    files = sorted(p for p in (ROOT / INDEX_DIR).glob("*.md") if p.is_file())
    if not files:
        return {}
    paths = [p.relative_to(ROOT).as_posix() for p in files]
    hashes = git("hash-object", "--stdin-paths", input_text="\n".join(paths) + "\n").split()
    return {p.stem: h for p, h in zip(files, hashes)}


def compare(base, current):
    by_name = lambda words: sorted(words, key=str.lower)
    new = by_name(current.keys() - base.keys())
    removed = by_name(base.keys() - current.keys())
    updated = by_name(w for w in base.keys() & current.keys() if base[w] != current[w])
    return new, removed, updated


def render_section(new, removed, updated):
    lines = []
    for title, words in (("New words", new), ("Removed words", removed), ("Updated words", updated)):
        lines.append(f"{title} ({len(words)}):")
        lines.extend(f"  {word}" for word in words)
        if not words:
            lines.append("  (none)")
    return lines


def read_sections(text):
    """Split the changelog into a preamble and (date, body lines) sections."""
    preamble, sections = [], []
    for line in text.splitlines():
        if DATE_LINE.match(line):
            sections.append((line, []))
        elif sections:
            sections[-1][1].append(line)
        else:
            preamble.append(line)
    return preamble, sections


def update_changelog(date, body):
    text = CHANGELOG.read_text(encoding="utf-8") if CHANGELOG.exists() else ""
    preamble, sections = read_sections(text)

    if any(title == date for title, _ in sections):
        sections = [(title, body) if title == date else (title, lines) for title, lines in sections]
    else:
        sections.insert(0, (date, body))

    output = list(preamble)
    for title, lines in sections:
        lines = list(lines)
        while lines and not lines[-1].strip():
            lines.pop()
        if output and output[-1].strip():
            output.append("")
        output.append(title)
        output.extend(lines)

    CHANGELOG.write_text("\n".join(output) + "\n", encoding="utf-8")


def main():
    parser = argparse.ArgumentParser(description="Build Changelog.txt from changes in src/index.")
    parser.add_argument("--since", default="HEAD", help="revision to compare the working tree with (default: HEAD)")
    args = parser.parse_args()

    base = committed_entries(args.since)
    current = working_entries()
    new, removed, updated = compare(base, current)

    today = datetime.date.today().isoformat()
    update_changelog(today, render_section(new, removed, updated))
    print(f"{CHANGELOG}: {today}: {len(new)} new, {len(removed)} removed, {len(updated)} updated")


if __name__ == "__main__":
    main()
