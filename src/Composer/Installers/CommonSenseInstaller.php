<?php
namespace Composer\Installers;

class CommonSenseInstaller extends BaseInstaller
{
    protected $locations = array(
        // 'core'             => 'core/',
        'pattern'           => 'libraries/{$name}/',
        // 'theme'            => 'themes/{$name}/',
        // 'library'          => 'libraries/{$name}/',
        // 'profile'          => 'profiles/{$name}/',
        // 'drush'            => 'drush/{$name}/',
        // 'custom-theme'     => 'themes/custom/{$name}/',
        // 'custom-module'    => 'modules/custom/{$name}/',
        // 'custom-profile'   => 'profiles/custom/{$name}/',
        // 'drupal-multisite' => 'sites/{$name}/'
    );
}
