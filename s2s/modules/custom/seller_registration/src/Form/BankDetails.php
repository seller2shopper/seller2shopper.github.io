<?php

namespace Drupal\seller_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RegistrationSellerP1.
 *
 * @package Drupal\seller_registration\Form
 */
class BankDetails extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'seller_bank_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['account_holder_name'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Account Holder Name')),

    ];
    $form['account_number'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Account Number')),

    ];
    $form['ifsc_code'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('IFSC Code')),

    ];

    $form['branch'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Branch Name')),
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
