#!/bin/bash

docker run --rm -v "${PWD}"/:/data bosa/writing_doc concat -o readme.md
