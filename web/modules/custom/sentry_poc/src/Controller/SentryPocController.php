<?php

namespace Drupal\sentry_poc\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class SentryPocController {

  public function normal(): JsonResponse {
    return new JsonResponse("this is working normally.");
  }

  public function slow(): JsonResponse {
    // Simulate performance bottleneck.
    sleep(6);
    return new JsonResponse("this is slow");
  }

  public function error(): JsonResponse {
    // Simulating an error.
    throw new \RuntimeException("this is an error");
  }

}
