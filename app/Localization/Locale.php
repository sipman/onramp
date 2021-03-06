<?php

namespace App\Localization;

class Locale
{
    protected $locales = [
        'en',
        'es',
    ];

    public function all()
    {
        return $this->locales;
    }

    public function isValid($locale)
    {
        return in_array($locale, $this->locales);
    }
}
