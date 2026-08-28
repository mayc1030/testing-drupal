<?php

declare(strict_types=1);

namespace Drupal\hola_mundo\Controller;

use Drupal\Core\Controller\ControllerBase;


final class HolaMundoController extends ControllerBase {

  /**
   * Genera el contenido de la página Hola Mundo.
   *
   * @return array
   *   Un render array de Drupal con el marcado a mostrar.
   */
  public function build(): array {
    return [
      '#theme' => 'item_list',
      '#items' => [
        $this->t('¡Hola Mundo desde Drupal 10!'),
      ],
      '#title' => $this->t('Mensaje del Controlador'),
      '#attributes' => [
        'class' => ['hola-mundo-wrapper'],
      ],
      '#prefix' => '<div class="hola-mundo-container">',
      '#suffix' => '</div>',
    ];
  }

}
