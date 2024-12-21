---
title: ECA Library - Access to form fields with tokens
version: v1
tags:
- bpmn
- library
- forms
- tokens
- syntax
- debugging
---
# Access to form fields with tokens

Version v1

<script>url='bpmn_io-eca_lib_0028.xml';archive='bpmn_io-eca_lib_0028.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0028
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0028
```

## Purpose

This model demonstrates how to access form field values during validation or submission, how to find out the proper token syntax for each form field type, and also an alternative approach by building a temporary entity from form field values to use the more transparent entity token syntax.

The creation of this module was recorded and the video with additional explanations [can be watch here](https://tube.tchncs.de/w/oFTsbEQ8RHQZKkswkzmaFf).

## Dependencies

- config
    - field.field.node.article.field_flag
    - field.field.node.article.field_text
    - field.field.node.location.field_flag
    - field.field.node.location.field_text
    - field.storage.node.field_flag
    - field.storage.node.field_text
    - node.type.article
    - node.type.location
- module
    - eca_form
    - menu_ui
    - node

## Used plugins

### Events

- [Validate form ()](/plugins/eca/form/events/form_form_validate.md)

### Actions

- [Message](/plugins/core/actions/action_message_action.md)
- [Build entity](/plugins/eca/form/actions/eca_form_build_entity.md)
- [Message on the entity](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version
