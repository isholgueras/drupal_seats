<?php

namespace Drupal\seats\Controller;

use Drupal\Core\Controller\ControllerBase;

class SeatsConfigController extends ControllerBase {

  /**
   * Returns the page where you can generate the seats layout
   *
   * @return string
   */
  public function configureLayout() {
    return [
      '#markup' => 'Here will be the seats config page',
      ];
  }
}