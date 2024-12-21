---
title: ECA Library - Content validation
version: v2
tags:
- bpmn
- library
- forms
- field group
- form field validation
---
# Content validation

Version v2

<script>url='bpmn_io-eca_lib_0009.xml';archive='bpmn_io-eca_lib_0009.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0009
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0009
```

## Purpose

This example model changes the behaviour when editing a content of type &quot;article&quot; in a form:
- It groups the title and body field together
- It makes sure that the body field is not empty, when trying to publish the article.

## Dependencies

- config
    - field.field.node.article.body
    - field.field.node.page.body
    - field.storage.node.body
    - node.type.article
    - node.type.page
- module
    - eca_base
    - eca_content
    - eca_form
    - node
    - text

## Used plugins

### Events

- [Process form ()](/plugins/eca/form/events/form_form_process.md)
- [Validate form ()](/plugins/eca/form/events/form_form_validate.md)

### Conditions

- [Entity: compare field value](/plugins/eca/content/conditions/eca_entity_field_value.md)
- [Entity: field value is empty](/plugins/eca/content/conditions/eca_entity_field_value_empty.md)

### Actions

- [Group title and body into &quot;Authoring&quot;](/plugins/eca/form/actions/eca_form_add_group_element.md)
- [Build node from submitted values](/plugins/eca/form/actions/eca_form_build_entity.md)
- [Chain for AND condition](/plugins/eca/base/actions/eca_void_and_condition.md)
- [Set validation error on body field](/plugins/eca/form/actions/eca_form_field_set_error.md)

## Changelog

`v1`

:   Initial version

`v2`

:   Fixing title field
