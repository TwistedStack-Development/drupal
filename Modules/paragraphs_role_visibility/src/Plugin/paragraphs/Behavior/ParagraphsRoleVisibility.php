<?php

namespace Drupal\paragraphs_role_visibility\Plugin\paragraphs\Behavior;

use Drupal\Component\Utility\Html;
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\paragraphs\ParagraphInterface;
use Drupal\paragraphs\ParagraphsBehaviorBase;
use Drupal\user\Entity\Role;

/**
 * Allows to set role access for paragraph item visibility.
 *
 * @ParagraphsBehavior(
 *   id = "paragraphs_role_visibility",
 *   label = @Translation("Paragraph visibility"),
 *   description = @Translation("Set access for viewing paragraph by roles."),
 *   weight = 0
 * )
 *
 * @package Drupal\paragraphs_role_visibility\Plugin\paragraphs\Behavior
 */
class ParagraphsRoleVisibility extends ParagraphsBehaviorBase {

  /**
   * {@inheritDoc}
   */
  public function buildBehaviorForm(ParagraphInterface $paragraph, array &$form, FormStateInterface $form_state) {
    $roles_options = [];
    $roles = Role::loadMultiple();
    if (is_array($roles)) {
      $roles_options['all'] = $this->t('Select all');
      foreach ($roles as $role) {
        $roles_options[$role->id()] = $role->label();
      }
    }

    $form['wrapper'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Paragraph visibility by roles'),
    ];

    $form['wrapper']['roles'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Available roles'),
      '#description' => $this->t('Make paragraph visible for selected roles.'),
      '#options' => $roles_options,
      '#default_value' => $paragraph->getBehaviorSetting($this->getPluginId(), [
        'wrapper',
        'roles',
      ], array_keys($roles_options)),
      '#id' => HTML::getUniqueId('paragraphs-role-visibility'),
      '#required' => TRUE,
    ];

    $form['wrapper']['operand'] = [
      '#type' => 'radios',
      '#title' => $this->t('Operand for selected roles'),
      '#description' => $this->t('Choose if user should have ANY/ALL of selected roles to see the paragraph.'),
      '#options' => [
        'or' => $this->t('Any'),
        'and' => $this->t('All'),
      ],
      '#default_value' => $paragraph->getBehaviorSetting($this->getPluginId(), [
        'wrapper',
        'operand',
      ], 'or'),
      '#required' => TRUE,
    ];

    $form['wrapper']['roles']['all']['#wrapper_attributes']['class'][] = 'js-form-item-options-value-all';
    $form['#attached']['library'][] = 'paragraphs_role_visibility/paragraphs_role_visibility';
    return $form;
  }

  /**
   * {@inheritDoc}
   */
  protected function filterBehaviorFormSubmitValues(ParagraphInterface $paragraph, array &$form, FormStateInterface $form_state) {
    // Remove 'Select all' value before processing, because it used only for UI.
    $form_state->unsetValue(['wrapper', 'roles', 'all']);
    return parent::filterBehaviorFormSubmitValues($paragraph, $form, $form_state);
  }

  /**
   * {@inheritDoc}
   */
  public function settingsSummary(Paragraph $paragraph) {
    $selected_roles = $paragraph->getBehaviorSetting($this->getPluginId(), [
      'wrapper',
      'roles',
    ]);
    $value = (!$selected_roles) ? $this->t('all roles') : implode(", ", array_keys($selected_roles));

    return [
      [
        'label' => $this->t('Paragraph visible for'),
        'value' => $value,
      ],
    ];
  }

  /**
   * {@inheritDoc}
   */
  public function view(array &$build, Paragraph $paragraph, EntityViewDisplayInterface $display, $view_mode) {}

}
