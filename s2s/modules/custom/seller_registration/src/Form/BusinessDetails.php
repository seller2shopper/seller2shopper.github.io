<?php

namespace Drupal\seller_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class BusinessDetails.
 *
 * @package Drupal\seller_registration\Form
 */
class BusinessDetails extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'business_detail';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['business_name'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Business Name')),

    ];
    $form['gstin'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Enter GSTIN')),
    ];
    $form['tan'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Enter tan')),
    ];

    $form['signature'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Enter signature')),
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
