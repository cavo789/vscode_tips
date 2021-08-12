#!/bin/bash

OUTPUT_FILE="readme.md"

clear

SCRIPT_DIR="$(cd "$(dirname "${0}")" &>/dev/null && pwd)"

# Make sure the script is running from his folder so relative paths are correct
# shellcheck disable=SC2164
pushd "$SCRIPT_DIR" &>/dev/null

"$WRITING_DOC/concat-md/concat-md.sh" --output "$OUTPUT_FILE" --mode pdf --verbose

# shellcheck disable=SC2164
popd &>/dev/null
