<?php

declare(strict_types=1);

namespace Tavaan\Engine\Admin\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Admin\Form;
use Tavaan\Engine\Admin\Resource;
use Tavaan\Engine\Admin\AdminManager;

/**
 * T-NN scenario tests for the admin engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class AdminScenarioTest extends TestCase
{'    public function t01_form_text_field_renders_input(): void\n    {\n        // Scenario T-01\n$f = new Form();\n        $html = $f->text("name", "Name");\n        $this->assertStringContainsString("<input", $html);\n        $this->assertStringContainsString("type="text"", $html);\n    }\n    public function t02_form_select_field_renders_options(): void\n    {\n        // Scenario T-02\n$f = new Form();\n        $html = $f->select("role", ["admin" => "Admin", "user" => "User"], "Role");\n        $this->assertStringContainsString("<select", $html);\n        $this->assertStringContainsString("Admin", $html);\n        $this->assertStringContainsString("User", $html);\n    }\n    public function t03_resource_columns_and_searchable(): void\n    {\n        // Scenario T-03\n$r = new Resource("posts", "PostController");\n        $r->columns(["id", "title"])->searchable(["title"])->sortable(["id"]);\n        $this->assertSame("Posts", $r->title());\n        $this->assertContains("title", $r->getSearchable());\n    }\n    public function t04_admin_manager_menu(): void\n    {\n        // Scenario T-04\n$mgr = new AdminManager();\n        $mgr->addMenuItem("content", "Posts", "/admin/posts");\n        $mgr->addMenuItem("content", "Pages", "/admin/pages");\n        $menu = $mgr->getMenu();\n        $this->assertCount(2, $menu);\n        $this->assertSame("Posts", $menu[0]["title"]);\n    }'}
