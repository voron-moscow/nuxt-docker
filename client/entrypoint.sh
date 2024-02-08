#!/bin/sh

npm rebuild esbuild && yarn build

exec "$@"