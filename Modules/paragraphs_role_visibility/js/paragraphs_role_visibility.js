/**
 * @file
 * Some basic behaviors and utility functions for Paragraphs Role Visibility.
 */

((Drupal, once) => {
  /**
   * Update 'Select all' checkbox based on child checkboxes statuses.
   * @param {Element} selectAllCheckbox
   *  'Select all' checkbox.
   *  @param {NodeList} checkboxes
   *   Child checkboxes.
   */
  const updateSelectAllCheckbox = (selectAllCheckbox, checkboxes) => {
    selectAllCheckbox.checked = Array.from(checkboxes).every(
      (checkbox) => checkbox.checked === true,
    );
  };

  /**
   * Add a select all checkbox, which checks each checkbox at once.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches select all functionality to the behavior form.
   */
  Drupal.behaviors.paragraphsRoleVisibilitySelectAll = {
    attach(context) {
      const elements = once(
        'paragraphs-role-visibility-select-all',
        '[id^="paragraphs-role-visibility"] .form-checkboxes',
        context,
      );

      if (elements.length) {
        elements.forEach((element) => {
          const selectAllCheckbox = element.querySelector(
            '.js-form-item-options-value-all input[type="checkbox"]',
          );
          const checkboxes = element.querySelectorAll(
            '.js-form-type-checkbox:not(.js-form-item-options-value-all) input[type="checkbox"]',
          );

          // Set default 'Select all' checkbox status.
          updateSelectAllCheckbox(selectAllCheckbox, checkboxes);
          selectAllCheckbox.addEventListener('change', () => {
            // Update all checkboxes statuses beside the 'Select all' checkbox.
            checkboxes.forEach((checkbox) => {
              checkbox.checked = selectAllCheckbox.checked;
            });
          });

          checkboxes.forEach((checkbox) => {
            // Update 'Select all' checkbox status by others checkboxes.
            checkbox.addEventListener('change', () => {
              updateSelectAllCheckbox(selectAllCheckbox, checkboxes);
            });
          });
        });
      }
    },
  };
})(Drupal, once);
