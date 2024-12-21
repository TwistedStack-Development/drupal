---
title: ECA Library - Working with dates and time
version: v1
tags:
- bpmn
- library
- simple
- date
- time
- timezone
---
# Working with dates and time

Version v1

<script>url='bpmn_io-eca_lib_0031.xml';archive='bpmn_io-eca_lib_0031.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0031
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0031
```

## Purpose

This model works with a date and time value from a node field and does various things to it: outputting in different formats, adding some time range, changing timezone, etc.

Especially the timezone feature requires a [patch to the tamper module](https://www.drupal.org/project/tamper/issues/3268276#comment-15000895).

The creation of this module was recorded and the video with additional explanations can be [watched here](https://tube.tchncs.de/w/h8YzBS8cSVdNux1FUcYkhm).

## Dependencies

- config
    - field.field.node.article.field_date_1
    - field.storage.node.field_date_1
    - node.type.article
- module
    - datetime
    - eca_content
    - eca_misc
    - eca_tamper
    - node

## Used plugins

### Events

- [Controller arguments have been resolved](/plugins/eca/misc/events/kernel_controller_arguments.md)

### Conditions

- [Route match](/plugins/eca/misc/conditions/eca_route_match.md)

### Actions

- [Get date value from field date 1](/plugins/eca/content/actions/eca_get_field_value.md)
- [Output plain value](/plugins/core/actions/action_message_action.md)
- [Load node from route](/plugins/eca/misc/actions/eca_token_load_route_param.md)
- [Convert date into timestamp](/plugins/eca/tamper/actions/eca_tamper_strtotime.md)
- [Output timestamp](/plugins/core/actions/action_message_action.md)
- [Format timestamp into day, month, time](/plugins/eca/tamper/actions/eca_tamper_timetodate.md)
- [Output day/month/time](/plugins/core/actions/action_message_action.md)
- [Add 1 week](/plugins/eca/tamper/actions/eca_tamper_math.md)
- [Output 1 week later](/plugins/core/actions/action_message_action.md)
- [Format timestamp into date](/plugins/eca/tamper/actions/eca_tamper_timetodate.md)
- [Format in PST timezone](/plugins/eca/tamper/actions/eca_tamper_timetodate.md)
- [Output PST date](/plugins/core/actions/action_message_action.md)
- [Calculate PST time](/plugins/eca/tamper/actions/eca_tamper_timeoffset.md)

## Changelog

`v1`

:   Initial release
