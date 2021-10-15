<?php

/**
 * @file
 * Contains \Drupal\menu_for_all\MenuForAllServiceProvider.
 */

namespace Drupal\menu_for_all;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Class MenuForAllServiceProvider.
 */
class MenuForAllServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    $definition = $container->getDefinition('menu.link_tree');
    $definition->setClass('Drupal\menu_for_all\Menu\MenuLinkTree');
  }

}
