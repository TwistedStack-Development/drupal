---
title: ECA Library - Combined Conditions
version: v1
tags:
- bpmn
- library
- simple
- conditions
---
# Combined Conditions

Version v1

<script>url='bpmn_io-eca_lib_0002.xml';archive='bpmn_io-eca_lib_0002.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0002
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0002
```

## Purpose

This means:

      - event 1: action &quot;do something&quot; is executed if condition 1 and condition 2 are both TRUE
      - event 2: do something is executed when condition 3 or condition 4 is TRUE
      - event 3: do something is executed when condition 5 or 6 AND condition 7 or 8 are TRUE

      With that pattern, you can achieve all possible combinations of AND and OR conditions

## Dependencies

- module
    - eca_base

## Changelog

`v1`

:   Initial version
