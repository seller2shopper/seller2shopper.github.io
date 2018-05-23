<?php

namespace Drupal\seller_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class StoreDetails.
 *
 * @package Drupal\seller_registration\Form
 */
class StoreDetails extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'seller_store';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['shop_name'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Shop Name')),

    ];
    $form['shop_desc'] = [
      '#type' => 'textarea',
      '#required' => TRUE,
      '#cols' => 70,
      '#rows' => 3,
      '#resizable' => none,
      '#maxlength' => 5000,
      '#attributes' => array('placeholder' => t('Please Enter Shop Description within 5000 Letters')),
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $form_values = $form_state->getValues();

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $form_state->setRedirect('user.page');
  }

}
