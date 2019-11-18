#!/usr/bin/env php
<?php

/**
 * Generates password string based on given string.
 *
 * @author https://github.com/kkamara
 */

$usage = sprintf("%s generates password string based on given string.
=================
    U s a g e
=================
-p --password\t(required) Text to obfuscate",
basename(__FILE__, ".php")
);

$opt = getopt("p", ["password:"]);

if (! $opt) {
    echo sprintf("%s\n\n", $usage);
    exit;
}

$pwd = $opt['p'] ?? $opt['password'];

echo password_hash($pwd, PASSWORD_DEFAULT) . PHP_EOL;
