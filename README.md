# Sylius Recaptcha Plugin

[![License](https://img.shields.io/packagist/l/stefandoorn/sylius-recaptcha-plugin.svg)](https://packagist.org/packages/stefandoorn/sylius-recaptcha-plugin)
[![Version](https://img.shields.io/packagist/v/stefandoorn/sylius-recaptcha-plugin.svg)](https://packagist.org/packages/stefandoorn/sylius-recaptcha-plugin)
[![Build Status](https://travis-ci.org/stefandoorn/SyliusRecaptchaPlugin.svg?branch=master)](https://travis-ci.org/stefandoorn/SyliusRecaptchaPlugin)

## Features

* Add Recaptcha to Contact Form to prevent spam

## Installation

1. Require plugin with composer:

    ```bash
    composer require stefandoorn/sylius-recaptcha-plugin:^1.0@dev
    ```

2. Follow installation instructions from Recaptcha bundle: https://github.com/excelwebzone/EWZRecaptchaBundle

3. Add plugin class to your `AppKernel`.

    ```php
    $bundles = [
       new \StefanDoorn\SyliusRecaptchaPlugin\SyliusRecaptchaPlugin(),
    ];
    ```
    
    or to your `bundles.php`:
    
    ```php
    return [
       // ...
       StefanDoorn\SyliusRecaptchaPlugin\SyliusRecaptchaPlugin::class => ['all' => true],
    ];
    ```
