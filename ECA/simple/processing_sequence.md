---
title: ECA Library - Processing sequence
version: v1
tags:
- bpmn
- library
- simple
- successors
- processing order
---
# Processing sequence

Version v1

<script>url='bpmn_io-eca_lib_0014.xml';archive='bpmn_io-eca_lib_0014.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0014
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0014
```

## Purpose

This model comes with 2 processes, that look similar but do behave differently. They get executed by calling `drush eca:trigger:custom_event procorder` on the console of the Drupal site.

What the 2 processes do is to set a token value, then overwrite that token with a different value and finally print the value out on screen as a message. However, that&#039;s what we expect but not what we get. For the first process (the left one), that&#039;s what we get. But the second one seems to have a mistake: it doesn&#039;t print 12, instead we get the value 5.

This is because the processing order of succeeding actions is not necessarily what we see on screen - where both processes look the same. Instead, the order depends on the order in which the successors got added to the predecessor. The problem being present is, that BPMN, while it relies on that order, doesn&#039;t have any form of indicator that would help us to see that in the visual model.

We have recorded a video which discusses that topic alongside this model and demonstrates how to find out about the order os successors. It then also shows how to fix the order in case it got messed up. You can find that by [following this link](https://tube.tchncs.de/w/a92s9649VVKuMdoXZHbLDq?start=12m45s).

## Dependencies

- module
    - eca_base

## Used plugins

### Events

- [ECA custom event (procorder)](/plugins/eca/base/events/eca_base_eca_custom.md)

### Actions

- [Set token to 1](/plugins/eca/base/actions/eca_token_set_value.md)
- [Overwrite token value to 2](/plugins/eca/base/actions/eca_token_set_value.md)
- [Print message with value](/plugins/core/actions/action_message_action.md)
- [Set token to 5](/plugins/eca/base/actions/eca_token_set_value.md)
- [Overwrite token value to 12](/plugins/eca/base/actions/eca_token_set_value.md)

## Changelog

`v1`

:   Initial version
