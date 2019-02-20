<?php

namespace Drupal\KernelTests\Core\Extension;

use Drupal\KernelTests\KernelTestBase;

/**
 * @coversDefaultClass \Drupal\Core\Extension\ModuleHandler
 *
 * @group Extension
 */
class ModuleHandlerTest extends KernelTestBase {

  /**
   * Tests requesting the name of an invalid module.
   *
   * @covers ::getName
   */
  public function testInvalidGetName() {
    $module_handler = $this->container->get('module_handler');
    $this->assertSame('module_nonsense', $module_handler->getName('module_nonsense'));
  }

}
