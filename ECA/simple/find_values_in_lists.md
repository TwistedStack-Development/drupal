---
title: ECA Library - Find values in lists
version: v1
tags:
- bpmn
- library
- simple
- comparison
- lists
---
# Find values in lists

Version v1

<script>url='bpmn_io-eca_lib_0013.xml';archive='bpmn_io-eca_lib_0013.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0013
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0013
```

## Purpose

This model defines a serialized list with all of the list items being separated by a pipe character from each other. It then defines 5 different values and verfies if they are contained in the list, displaying either a success or failure message.

The comparison requires the pipe character also surounding the values in order to not get false positives, e.g. the value &quot;x&quot; us not an item in the list, whereas &quot;xyz&quot; is.

## Dependencies

- module
    - eca_base
    - eca_tamper

## Used plugins

### Events

- [ECA custom event (compare)](/plugins/eca/base/events/eca_base_eca_custom.md)

### Conditions

- [Compare two scalar values](/plugins/eca/base/conditions/eca_scalar.md)

### Actions

- [Set value abc](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set value xyz](/plugins/eca/base/actions/eca_token_set_value.md)
- [Success message](/plugins/core/actions/action_message_action.md)
- [Print value](/plugins/core/actions/action_message_action.md)
- [Set value def](/plugins/eca/base/actions/eca_token_set_value.md)
- [Failure message](/plugins/core/actions/action_message_action.md)
- [Define the list](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set value x](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set value to mno](/plugins/eca/base/actions/eca_token_set_value.md)
- [Increment counter](/plugins/eca/tamper/actions/eca_tamper_math.md)
- [Initialize counter](/plugins/eca/base/actions/eca_token_set_value.md)

## Changelog

`v1`

:   Initial version
