# Pangram

## Instructions

Determine if a sentence is a pangram. A pangram (Greek: παν γράμμα, pan gramma, "every letter") is a sentence using every letter of the alphabet at least once. The best known English pangram is:

The quick brown fox jumps over the lazy dog.

The alphabet used consists of ASCII letters a to z, inclusive, and is case insensitive. Input will not contain non-ASCII symbols.

Original en: Basado en un reto de HackerRank llamado Pangrams

## Requiered

- PHP 8.0
- Composer installed

## Install

- composer install

## Run Tests

- vendor/bin/phpunit
or
- composer test

### Pasos:

1. Definir el alfabeto que vamos a utilizar.
2. Convertir, en este caso, todas las palabras a minúsculas.
3. Separar las palabras por letras.
4. Comprobar que no se repita ninguna letra.
5. Comparar el alfabeto elegido con las letras que componen la frase.
6. Comprobar que se cumplan todas las condiciones.
