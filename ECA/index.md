---
title: ECA Library
tags:
- bpmn
- library
---
# ECA Library

In this library we provide samples and blueprints of models, that you can download and import into your Drupal site
where you can play with and learn from or build on top of them.

## How to contribute a model to the library

You're more than welcome to provide your own models to this library. There are only a couple of rules to follow to
make your submission qualify for review.

### Basic guidelines

All components of the model need to be in English, i.e. not only the meta data but also the labels and variable names 
in the model itself.

The model needs to be built with the [bpmn_io modeller](/modeller/bpmn/bpmn_io/index.md) because those can later be imported in
either modeller on Drupal sites.

### Meta Data

When starting a new model, there is the property panel on the right which contains 3 sections that are all important
to be filled:

#### General

The name of the model will be used as the page title and the navigation item in the ECA Guide and should therefore be
crafted carefully so that it is descriptive but not too long.

The ID needs to follow this pattern: `ECA_Lib_####` where the last 4 characters need to be a unique number which is
being issued by the maintainers of the ECA Guide. And yes, we don't expect to get more than 10.000 models for the
library ;-)

Please contact us at any time, asking for one or many IDs. This is required early in the process because the model ID
can't be changed later on.

The version tag is always `v1` for the initial version of a new model. Should there be updates to an existing model,
we will just increment that number to show users, if they should consider to download an updated version. For more 
details about model version, see [this issue](https://www.drupal.org/project/eca/issues/3338015).

The model should always be executable.

#### Documentation

This is a text area field without any limits regarding content size. Please use that field to fully describe the
model. Ideally, this should contain the purpose (i.e. what problem is to be solved) and the description of the solution
such that a user understands what's being done and why.

Please use markdown to format the content in the documentation.

#### Extension properties

In this section you need to define extra properties:

**Tags**: a comma separated list of tags of which the first one is being used for the category inside the library. All
others are used for search purposes.

**Changelog v1**: Usually the text `Initial version`

**Changelog v2**: This property and subsequent ones will be required for later versions of the model and should describe
what's changed in that respective version.

### Dependencies

Building ECA models creates dependencies, i.e. listening to the [Presave content entity](/plugins/eca/content/events/content_entity_presave.md)
event with the type field being set to a specific node type will make that model dependent on that content type and
bundle. Preparing the model for the ECA Guide, ECA will include all required config entities into the exported archive
that will be made available for download and import into other sites.

For that reason, please try to build example models with the least possible number of dependencies. Especially the need
to install contrib or even worse custom modules should be avoided. This is particularely difficult when using views,
because views can quickly depend on a surprising large number of modules depending on field type, field formatters,
access control or other plugins that views depends upon.

!!! note

    Ideally you should install a new Drupal site with the standard profile in English and then only enable those modules 
    that are really necessary to build the model. That results in the best possible model for others to use on different
    Drupal sites later on.
