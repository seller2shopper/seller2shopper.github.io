<?php
/**
 * @file
 * Contains \Drupal\seller_registration\Plugin\Block\BusinessDetailsBlock.
 */

namespace Drupal\seller_registration\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'BuinsessDetailsBlock' block.
 *
 * @Block(
 *   id = "business_details_block",
 *   admin_label = @Translation("Business Details block"),
 *   category = @Translation("Custom Business block")
 * )
 */
class BusinessDetailsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\seller_registration\Form\BusinessDetails');

    return $form;
  }
}
