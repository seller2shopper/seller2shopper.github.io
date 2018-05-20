<?php

namespace Drupal\seller_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RegistrationSellerP2.
 *
 * @package Drupal\seller_registration\Form
 */
class RegistrationSellerP3 extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form3';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['seller_register'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Please fill the form to complete step3 process.'),
    ];

    $form['seller_register']['address1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Address Line1'),
      '#required' => TRUE,
    ];
    $form['seller_register']['address2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('address Line2'),
      '#required' => TRUE,
    ];
    $form['seller_register']['pincode'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Pincode'),
      '#required' => TRUE,
    ];
    $form['seller_register']['city'] = [
      '#type' => 'textfield',
      '#title' => $this->t('City'),
      '#required' => TRUE,
    ];
    $form['seller_register']['state'] = [
      '#type' => 'textfield',
      '#title' => $this->t('State'),
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
    $form_state->setRedirect('user.page');
  }

}
