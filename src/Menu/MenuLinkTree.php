<?php

/**
 * @file
 * Contains \Drupal\menu_for_all\Menu\MenuLinkTree.
 */

namespace Drupal\menu_for_all\Menu;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Menu\MenuLinkTree as MenuLinkTreeCore;

/**
 * Override \Drupal\Core\Menu\MenuLinkTree.
 *
 * @see \Drupal\menu_for_all\MenuForAllServiceProvider::alter()
 */
class MenuLinkTree extends MenuLinkTreeCore {

  /**
   * {@inheritdoc}
   */
  protected function createInstances(array $data_tree) {
    $tree = parent::createInstances($data_tree);
    foreach ($tree as $key => $element) {
      $tree[$key]->access = AccessResult::allowed();
    }
    return $tree;
  }

}
