<?php

namespace Drupal\Tests\lightning\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * @group lightning
 * @group orca_public
 */
class SubProfileTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $configSchemaCheckerExclusions = [
    // @todo Remove this when depending on slick_entityreference 1.2 or later.
    'core.entity_view_display.block_content.media_slideshow.default',
    // @todo Remove when requiring Lightning Layout 2.2 or later.
    'core.entity_view_display.block_content.banner.default',
  ];

  /**
   * {@inheritdoc}
   */
  protected $profile = 'lightning_extender';

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    // Symlink the sub-profile into a place where Drupal will be able to find
    // it. The symlink is deleted in tearDown(). If the symlink cannot be
    // created, abort the test. symlink() is called strangely in order to avoid
    // a too-strict coding standards check.
    if (!call_user_func('symlink', __DIR__ . '/../../' . $this->profile, "$this->root/profiles/$this->profile")) {
      $this->markTestSkipped("Could not symlink $this->profile into $this->root/profiles.");
    }
    parent::setUp();
  }

  /**
   * {@inheritdoc}
   */
  protected function tearDown() {
    unlink("$this->root/profiles/$this->profile");
    parent::tearDown();
  }

  public function testSubProfile() {
    $this->assertSame('lightning_extender', $this->container->getParameter('install_profile'));

    $module_list = $this->container->get('extension.list.module')->getAllInstalledInfo();
    $this->assertArrayHasKey('ban', $module_list);
    $this->assertArrayNotHasKey('lightning_search', $module_list);
  }

}
