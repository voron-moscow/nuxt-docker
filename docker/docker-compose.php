version: "3.8"

services:
  client:
    image: node:18.16.1-alpine
    volumes:
      - ../client:/var/www/html
    working_dir: /var/www/html
    command: sh -c "npm rebuild esbuild && yarn dev"
    ports:
      - "3000:3000"
      - "24678:24678"