<?php

namespace Drupal\seller_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RegistrationSellerP1.
 *
 * @package Drupal\seller_registration\Form
 */
class RegistrationSellerP1 extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form1';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['seller_register'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Please fill the form to complete step1 process.'),
    ];

    $form['seller_register']['user_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('User Name:'),
      '#required' => TRUE,
    ];
    $form['seller_register']['email'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email:'),
      '#required' => TRUE,
    ];
    $form['seller_register']['Phone'] = [
      '#type' => 'textfield',
      '#title' => $this->t('phone:'),
      '#required' => TRUE,
    ];
    $form['seller_register']['password'] = [
      '#type' => 'password',
      '#title' => $this->t('password:'),
      '#required' => TRUE,
    ];
    $form['seller_register']['retype_password'] = [
      '#type' => 'password',
      '#title' => $this->t('Retype Password:'),
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

    $form_state->setRedirect('seller_registration.form2');

  }

}
