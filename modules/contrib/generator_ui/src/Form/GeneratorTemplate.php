<?php

/**
 * @file
 * Contains \Drupal\generator_ui\Form\GeneratorInfo .
 *
 */

namespace Drupal\generator_ui\Form;

//Use the necessary libraries
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\Url;
use Drupal\generator_ui\Controller\GeneratorController;


class GeneratorTemplate extends Generator {

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'template';

  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['into'] = array(
      '#markup' => t('<h2>' . 'Please fill the blanks to create your template in D8' . '</h2>'),
      "#weight" => -2
    );
    $form['twig_file'] = array(
      "#type" => 'hidden',
      "#value" => array(
        'contact-template' => 'generatorTemplate.html.twig.twig',
        "controller" => 'controller-template.php.twig',
        'template.module.yml.twig',
        'template.routing.yml.twig'
      ),
    );
    $form['controller'] = array(
      '#type' => 'textfield',
      '#title' => t('Name of the controller class'),
      '#default_value' => 'Example',
      '#description' => t('Must ends with "Controller" word.'),
    );
    $form = parent::buildForm($form, $form_state);
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    return parent::validateForm($form, $form_state);
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public
  function submitForm(array &$form, FormStateInterface $form_state) {
    return parent::submitForm($form, $form_state);

  }


}