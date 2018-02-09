<?php

namespace Drupal\events_logging\Plugin\EventLog\Storage;

use Drupal\Core\Annotation\Translation;
use Drupal\events_logging\Annotation\StorageBackend;
use Drupal\events_logging\StorageBackendInterface;

/**
 * Class DatabaseStorageBackend.
 *
 * @StorageBackend(
 *   id = "database",
 *   label = @Translation("Database"),
 *   description = @Translation("Store event logs in the database.")
 * )
 */
class DatabaseStorageBackend implements StorageBackendInterface {

  /**
   * {@inheritdoc}
   */
  public function save($data) {
    // TODO: Implement save() method.
  }

  public function deleteAll() {
    // TODO: Implement deleteAll() method.
  }
}
