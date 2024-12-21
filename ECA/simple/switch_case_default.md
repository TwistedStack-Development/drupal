---
title: ECA Library - Switch Case Default
version: v1
tags:
- bpmn
- library
- simple
- switch-case-default
- if-elsif-else
- PHP
- programming
---
# Switch Case Default

Version v1

<script>url='bpmn_io-eca_lib_0004.xml';archive='bpmn_io-eca_lib_0004.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0004
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0004
```

## Purpose

Demonstrate how typical switch-case PHP constructors could be simulated in ECA models - similar to if-elsif-else statements.

The model is similar to what you would normally do in PHP like this:

```php
switch ($field_select) {
  case &#039;a1&#039;:
  case &#039;a2&#039;:
  case &#039;a3&#039;:
  case &#039;c7&#039;:
    // Set Status to 3
    $field_status = 3;

  case &#039;b1&#039;:
  case &#039;b2&#039;:
    // Set Status to 4
    $field_status = 4;

  default:
    // Set default Status
    $field_status = 2;
}
```

## Dependencies

- config
    - node.type.article
- module
    - eca_content

## Used plugins

### Events

- [Presave content entity (Content: Article)](/plugins/eca/content/events/content_entity_presave.md)

### Conditions

- [Entity: compare field value](/plugins/eca/content/conditions/eca_entity_field_value.md)

### Actions

- [Set Status to 3](/plugins/eca/content/actions/eca_set_field_value.md)
- [Set Status to 4](/plugins/eca/content/actions/eca_set_field_value.md)
- [Set default Status](/plugins/eca/content/actions/eca_set_field_value.md)

## Changelog

`v1`

:   Initial version
