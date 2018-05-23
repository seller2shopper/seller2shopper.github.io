<?php
/**
 * @file
 * Contains \Drupal\seller_registration\Plugin\Block\BankDetailsBlock.
 */

namespace Drupal\seller_registration\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'BankDetailsBlock' block.
 *
 * @Block(
 *   id = "bank_details_block",
 *   admin_label = @Translation("Bank Details Block"),
 *   category = @Translation("Custom Bank Block")
 * )
 */
class BankDetailsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\seller_registration\Form\BankDetails');
    return $form;
  }
}