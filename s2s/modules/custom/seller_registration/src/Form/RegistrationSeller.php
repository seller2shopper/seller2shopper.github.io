<?php

namespace Drupal\seller_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RegistrationSellerP1.
 *
 * @package Drupal\seller_registration\Form
 */
class RegistrationSeller extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'seller_registeration_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['seller_user_details'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Seller Register Form.'),
    ];
    $form['seller_user_details']['user_first_name'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('User First Name')),

    ];
    $form['seller_user_details']['password'] = [
      '#type' => 'password',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('password')),
    ];
    $form['seller_user_details']['email'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('email')),
    ];
    $form['seller_user_details']['phone'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => t('Phone number')),
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
    $form_values = $form_state->getValues();
    $user_first_name = $form_values['user_first_name'];
    $password = $form_values['password'];
    $email = $form_values['email'];
    $phone = $form_values['phone'];
    // Query to insert the values in seller details table.
     \Drupal::database()->insert('seller_details')
     ->fields([
          'seller_name' => $user_first_name,
          'password'=> $password,
          'email' => $email,
          'phone' => $phone,
     ])->execute();

    $values = array(
      'name' => $user_first_name,
      'mail' => $email,
      'roles' => array('seller'),
      'pass' => $password,
      'status' => 1,
    );
    $account = entity_create('user', $values);
    $account->save();

    $form_state->setRedirect('user.page');
  }

}
