---
title: ECA Library - Display message to specific user roles only
version: v1
tags:
- bpmn
- library
- simple
- message
- condition
---
# Display message to specific user roles only

Version v1

<script>url='bpmn_io-eca_lib_0015.xml';archive='bpmn_io-eca_lib_0015.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0015
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0015
```

## Purpose

This model prints a message on screen, when the user opens the user profile form for editing. The message output is limited to users that have one of the roles editor, customer or auditor.

## Dependencies

- module
    - eca_form
    - eca_user

## Used plugins

### Events

- [Build form ()](/plugins/eca/form/events/form_form_build.md)

### Conditions

- [Role of current user](/plugins/eca/user/conditions/eca_current_user_role.md)

### Actions

- [Display message](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version
