---
title: ECA Library - Get next incremental ID
version: v2
tags:
- bpmn
- library
- simple
- increment
- custom event
- state
---
# Get next incremental ID

Version v2

<script>url='bpmn_io-eca_lib_0011.xml';archive='bpmn_io-eca_lib_0011.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0011
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0011
```

## Purpose

This model increments a sidewide ID by 1 and returns that on screen. It uses Drupal&#039;s state service to store the value inbetween requests.

## Dependencies

- module
    - eca_base
    - eca_tamper

## Used plugins

### Events

- [ECA custom event (increment)](/plugins/eca/base/events/eca_base_eca_custom.md)

### Actions

- [Read value from state](/plugins/eca/base/actions/eca_state_read.md)
- [Increment by 1](/plugins/eca/tamper/actions/eca_tamper_math.md)
- [Write value back to state](/plugins/eca/base/actions/eca_state_write.md)
- [Print message](/plugins/core/actions/action_message_action.md)
- [Acquire lock](/plugins/eca/base/actions/eca_lock_acquire.md)

## Changelog

`v1`

:   Initial version

`v2`

:   Add an &quot;Acquire lock&quot; action to make sure it still works with concurrent users.
