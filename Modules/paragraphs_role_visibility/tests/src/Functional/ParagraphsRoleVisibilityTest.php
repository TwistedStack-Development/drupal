<?php

namespace Drupal\Tests\paragraphs_role_visibility\Functional;

use Drupal\node\NodeInterface;
use Drupal\Tests\paragraphs\Functional\WidgetStable\ParagraphsTestBase;

/**
 * Tests Paragraphs Role Visibility behavior plugin.
 *
 * @group paragraphs_role_visibility
 */
class ParagraphsRoleVisibilityTest extends ParagraphsTestBase {

  /**
   * Paragraph type for test.
   *
   * @var string
   */
  protected string $paragraphType = 'text_paragraph';

  /**
   * Modules to enable.
   *
   * @var string[]
   */
  protected static $modules = [
    'node',
    'paragraphs_role_visibility',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    // Add a 'text_paragraph' paragraph type.
    $this->addParagraphsType($this->paragraphType);
    $this->addFieldtoParagraphType($this->paragraphType, 'field_text', 'text_long');

    // Add paragraphed content type.
    $this->addParagraphedContentType('paragraphed_test');

    // Add 'paragraph_admin' role.
    $this->drupalCreateRole([
      'create paragraphed_test content',
      'edit any paragraphed_test content',
      'edit behavior plugin settings',
      'administer paragraphs types',
    ], 'paragraph_admin', 'Paragraph admin');
  }

  /**
   * Tests the behavior visibility settings for users.
   *
   * @dataProvider testCases
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function testParagraphsRoleVisibility($values, $user_should_see) {
    // Create admin user and login to edit paragraph settings.
    $admin = $this->drupalCreateUser();
    $admin->addRole('paragraph_admin');
    $admin->save();
    $this->drupalLogin($admin);

    // Enable the 'Paragraph visibility' plugin.
    $this->enableParagraphRoleVisibilityPlugin();

    // Create a test node.
    $node = $this->createTestNode();

    // Update paragraph visibility settings.
    $this->drupalGet('node/' . $node->id() . '/edit');
    $edit = [
      'field_paragraphs[0][behavior_plugins][paragraphs_role_visibility][wrapper][roles][anonymous]' => $values['roles']['anonymous'],
      'field_paragraphs[0][behavior_plugins][paragraphs_role_visibility][wrapper][roles][authenticated]' => $values['roles']['authenticated'],
      'field_paragraphs[0][behavior_plugins][paragraphs_role_visibility][wrapper][roles][paragraph_admin]' => $values['roles']['paragraph_admin'],
      'field_paragraphs[0][behavior_plugins][paragraphs_role_visibility][wrapper][operand]' => $values['operand'],
    ];
    $this->submitForm($edit, 'Save');

    // Create a test user.
    $user = $this->drupalCreateUser();
    if ($values['add_role_to_user']) {
      // Add 'paragraph_admin role' to test user if needed.
      $user->addRole('paragraph_admin');
      $user->save();
    }

    // Check if user can see the paragraph or not.
    $this->drupalLogin($user);
    $this->drupalGet('node/' . $node->id());
    $text = $this->getSession()->getPage()->getText();
    $user_should_see ? $this->assertStringContainsString('Paragraph text', $text, 'User can view the paragraph as expected') : $this->assertStringNotContainsString('Paragraph text', $text, 'User can not view the paragraph as expected');
  }

  /**
   * Test cases for testParagraphsRoleVisibility().
   */
  public function testCases(): array {
    return [
      'The user must have any role, but he does not have' => [
        [
          'add_role_to_user' => FALSE,
          'roles' => [
            'anonymous' => TRUE,
            'authenticated' => FALSE,
            'paragraph_admin' => TRUE,
          ],
          'operand' => 'or',
        ],
        FALSE,
      ],
      'The user must have any role, and he does have' => [
        [
          'add_role_to_user' => TRUE,
          'roles' => [
            'anonymous' => TRUE,
            'authenticated' => FALSE,
            'paragraph_admin' => TRUE,
          ],
          'operand' => 'or',
        ],
        TRUE,
      ],
      'The user must have all roles, but he does not have' => [
        [
          'add_role_to_user' => FALSE,
          'roles' => [
            'anonymous' => FALSE,
            'authenticated' => TRUE,
            'paragraph_admin' => TRUE,
          ],
          'operand' => 'and',
        ],
        FALSE,
      ],
      'The user must have all roles, and he does have' => [
        [
          'add_role_to_user' => TRUE,
          'roles' => [
            'anonymous' => FALSE,
            'authenticated' => TRUE,
            'paragraph_admin' => TRUE,
          ],
          'operand' => 'and',
        ],
        TRUE,
      ],
    ];
  }

  /**
   * Create a test node.
   */
  private function createTestNode(): NodeInterface {
    $title = $this->randomString();
    $this->drupalGet('node/add/paragraphed_test');
    $edit = [
      'title[0][value]' => $title,
      'field_paragraphs[0][subform][field_text][0][value]' => 'Paragraph text',
    ];
    $this->submitForm($edit, 'Save');
    return $this->getNodeByTitle($title, TRUE);
  }

  /**
   * Enable the 'Paragraph visibility' plugin to have a behavior form.
   */
  private function enableParagraphRoleVisibilityPlugin(): void {
    $this->drupalGet('/admin/structure/paragraphs_type/' . $this->paragraphType);
    $edit = [
      'behavior_plugins[paragraphs_role_visibility][enabled]' => TRUE,
    ];
    $this->submitForm($edit, 'Save');
    // Check that plugin is enabled.
    $this->assertSame(['paragraphs_role_visibility' => ['enabled' => TRUE]], $this->config("paragraphs.paragraphs_type.$this->paragraphType")
      ->get('behavior_plugins'));
  }

}
