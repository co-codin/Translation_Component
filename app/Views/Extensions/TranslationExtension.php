<?php

namespace App\Views\Extensions;

use Twig_Extension;
use Twig_SimpleFunction;
use Illuminate\Translation\Translator;

class TranslationExtension extends Twig_Extension
{
  protected $translator;

  public function __construct(Translator $translator)
  {
    $this->translator = $translator;
  }

  public function getFunctions()
  {
    return [
      new Twig_SimpleFunction('trans', [$this, 'trans'])
    ];
  }

  public function trans($key)
  {
    return $this->translator->trans($key);
  }
}
