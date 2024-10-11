<?php return array (
  'providers' => 
  array (
    0 => 'Modules\\Core\\Providers\\CoreServiceProvider',
    1 => 'Modules\\Core\\Providers\\UpdaterServiceProvider',
    2 => 'Modules\\Core\\Providers\\PurifierServiceProvider',
    3 => 'Modules\\Core\\Providers\\OAuthServiceProvider',
    4 => 'Modules\\Core\\Providers\\ReCaptchaServiceProvider',
    5 => 'Webpatser\\Countries\\CountriesServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Modules\\Core\\Providers\\CoreServiceProvider',
    1 => 'Webpatser\\Countries\\CountriesServiceProvider',
  ),
  'deferred' => 
  array (
    'Modules\\Core\\Updater\\Updater' => 'Modules\\Core\\Providers\\UpdaterServiceProvider',
    'Modules\\Core\\Updater\\Patcher' => 'Modules\\Core\\Providers\\UpdaterServiceProvider',
    'purifier' => 'Modules\\Core\\Providers\\PurifierServiceProvider',
    'Modules\\Core\\Contracts\\OAuth\\StateStorage' => 'Modules\\Core\\Providers\\OAuthServiceProvider',
    'recaptcha' => 'Modules\\Core\\Providers\\ReCaptchaServiceProvider',
  ),
  'when' => 
  array (
    'Modules\\Core\\Providers\\UpdaterServiceProvider' => 
    array (
    ),
    'Modules\\Core\\Providers\\PurifierServiceProvider' => 
    array (
    ),
    'Modules\\Core\\Providers\\OAuthServiceProvider' => 
    array (
    ),
    'Modules\\Core\\Providers\\ReCaptchaServiceProvider' => 
    array (
    ),
  ),
);