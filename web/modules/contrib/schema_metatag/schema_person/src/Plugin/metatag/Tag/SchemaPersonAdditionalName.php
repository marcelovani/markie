<?php

namespace Drupal\schema_person\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_person_additional_name' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_person_additional_name",
 *   label = @Translation("additionalName"),
 *   description = @Translation("An additional name for a Person, can be used for a middle name."),
 *   name = "additionalName",
 *   group = "schema_person",
 *   weight = -30,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaPersonAdditionalName extends SchemaNameBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}