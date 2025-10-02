<?php

namespace Drupal\guillermina_wompi\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controlador invocable mínimo.
 */
class WompiSignatureController {

  /**
   * Invocable: siempre responde un pong.
   */
  public function __invoke(): JsonResponse {
    // Sin type-hints ni DI para evitar problemas de invocabilidad.
    return new JsonResponse(['pong' => true]);
  }
}
