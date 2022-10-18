<?php
/**
 * @copyright 2016 Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\Files_Retention\Tests\Settings;

use OCA\Files_Retention\Settings\Admin;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Services\IInitialState;
use OCP\IConfig;
use OCP\IURLGenerator;
use Test\TestCase;

class AdminTest extends TestCase {
	/** @var Admin */
	private $admin;

	private $initialStateService;
	private $url;
	private $config;

	protected function setUp(): void {
		parent::setUp();

		$this->initialStateService = $this->createMock(IInitialState::class);
		$this->url = $this->createMock(IURLGenerator::class);
		$this->config = $this->createMock(IConfig::class);
		$this->admin = new Admin($this->initialStateService, $this->url, $this->config);
	}

	public function testGetForm() {
		$expected = new TemplateResponse('files_retention', 'admin', [], '');
		$this->assertEquals($expected, $this->admin->getForm());
	}

	public function testGetSection() {
		$this->assertSame('workflow', $this->admin->getSection());
	}

	public function testGetPriority() {
		$this->assertSame(80, $this->admin->getPriority());
	}
}
