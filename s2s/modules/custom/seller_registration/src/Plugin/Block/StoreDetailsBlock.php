<?php
/**
 * @file
 * Contains \Drupal\seller_registration\Plugin\Block\StoreDetailsBlock.
 */

namespace Drupal\seller_registration\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'StoreDetailsBlock' block.
 *
 * @Block(
 *   id = "store_details_block",
 *   admin_label = @Translation("Store Details Block"),
 *   category = @Translation("Custom Store Block")
 * )
 */
class StoreDetailsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\seller_registration\Form\StoreDetails');

    return $form;
  }
}