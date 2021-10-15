CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Maintainers


INTRODUCTION
------------

Menu For All allows menu items to make visibility for all roles specially the anonymous users.


REQUIREMENTS
------------

The Menu For All just requires the Custom Menu Links project core:

 * Custom Menu Links (https://www.drupal.org/docs/8/core/modules/menu-link-content)


INSTALLATION
------------

1. Edit your composer.json in your project directory and paste this code in the group of repositories.
```{
      "type": "vcs",
      "url": "git@github.com:hallowichig0/menu_for_all.git"
```

2. In your composer.json, search the installer-paths and add this line of codes to the group of install-paths
```"web/modules/custom/{$name}/": ["type:drupal-custom-module"]```

3. Install using the composer:
```composer require 'hallowichig0/menu_for_all'```

4. You can clone the repository in the module/custom:
```git clone https://github.com/hallowichig0/menu_for_all.git```


MAINTAINERS
-----------

Current maintainers:
 * Jayson Garcia - https://www.drupal.org/u/hallow_ichig0

Credits to Halcyon Web Design for development time.
