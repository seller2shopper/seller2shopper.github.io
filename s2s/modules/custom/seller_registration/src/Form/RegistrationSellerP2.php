<?php

namespace Drupal\seller_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RegistrationSellerP2.
 *
 * @package Drupal\seller_registration\Form
 */
class RegistrationSellerP2 extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form2';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['seller_register'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Please fill the form to complete step2 process.'),
    ];

    $form['seller_register']['shop_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Shop Name:'),
      '#required' => TRUE,
    ];
    $form['seller_register']['pancard'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Pancard:'),
      '#required' => TRUE,
    ];
    $form['seller_register']['gst'] = [
      '#type' => 'textfield',
      '#title' => $this->t('GST No:'),
      '#required' => TRUE,
    ];

    $form['bank_details'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Please fill up Bank details.'),
    ];

    $form['bank_details']['account_holder'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Account Holder Name:'),
      '#required' => TRUE,
    ];

    $form['bank_details']['bank_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Bank Name'),
      '#required' => TRUE,
    ];
    $form['bank_details']['ifsc_code'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IFSC Code:'),
      '#required' => TRUE,
    ];
    $form['bank_details']['branch'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Branch:'),
      '#required' => TRUE,
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

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $form_state->setRedirect('seller_registration.form3');

  }

}
