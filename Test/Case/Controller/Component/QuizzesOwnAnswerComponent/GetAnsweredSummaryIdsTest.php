<?php
/**
 * QuizzesOwnAnswerComponent::getAnsweredSummaryIds()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author AllCreator <info@allcreator.net>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsControllerTestCase', 'NetCommons.TestSuite');
App::uses('QuizzesComponent', 'Quizzes.Controller/Component');

/**
 * QuizzesOwnAnswerComponent::getAnsweredSummaryIds()のテスト
 *
 * @author AllCreator <info@allcreator.net>
 * @package NetCommons\Quizzes\Test\Case\Controller\Component\QuizzesOwnAnswerComponent
 */
class QuizzesOwnAnswerComponentGetAnsweredSummaryIdsTest extends NetCommonsControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.quizzes.quiz',
		'plugin.quizzes.quiz_answer',
		'plugin.quizzes.quiz_answer_summary',
		'plugin.quizzes.quiz_choice',
		'plugin.quizzes.quiz_correct',
		'plugin.quizzes.quiz_page',
		'plugin.quizzes.quiz_question',
	);

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'quizzes';

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		//テストプラグインのロード
		NetCommonsCakeTestCase::loadTestPlugin($this, 'Quizzes', 'TestQuizzes');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		//ログアウト
		TestAuthGeneral::logout($this);

		parent::tearDown();
	}

/**
 * getAnsweredSummaryIds()のテスト
 *
 * @return void
 */
	public function testGetAnsweredSummaryIds() {
		//テストコントローラ生成
		$this->generateNc('TestQuizzes.TestQuizzesOwnAnswerComponent');

		//ログイン
		TestAuthGeneral::login($this);

		//テストアクション実行
		$this->_testGetAction('/test_quizzes/test_quizzes_own_answer_component/index_with_login',
				array('method' => 'assertNotEmpty'), null, 'view');
		$pattern = '/' . preg_quote('Controller/Component/TestQuizzesOwnAnswerComponent', '/') . '/';
		$this->assertRegExp($pattern, $this->view);

		//テスト実行
		$result = $this->controller->QuizzesOwnAnswer->getAnsweredSummaryIds();
		$this->assertEqual($result, array(31, 32, 33, 35));
		// もう一回呼ぶ
		$result = $this->controller->QuizzesOwnAnswer->getAnsweredSummaryIds();
		$this->assertEqual($result, array(31, 32, 33, 35));
	}
/**
 * getAnsweredSummaryIds()のテスト
 *
 * @return void
 */
	public function testGetAnsweredSummaryIdsNoLogin() {
		//テストコントローラ生成
		$this->generateNc('TestQuizzes.TestQuizzesOwnAnswerComponent');

		//テストアクション実行
		$this->_testGetAction('/test_quizzes/test_quizzes_own_answer_component/index',
			array('method' => 'assertNotEmpty'), null, 'view');
		$pattern = '/' . preg_quote('Controller/Component/TestQuizzesOwnAnswerComponent', '/') . '/';
		$this->assertRegExp($pattern, $this->view);

		//テスト実行
		$result = $this->controller->QuizzesOwnAnswer->getAnsweredSummaryIds();
		$this->assertEmpty($result);
	}
/**
 * getAnsweredSummaryIds()のテスト
 *
 * @return void
 */
	public function testGetAnsweredSummaryIdsNoLogin2() {
		//テストコントローラ生成
		$this->generateNc('TestQuizzes.TestQuizzesOwnAnswerComponent');

		//テストアクション実行
		$this->_testGetAction('/test_quizzes/test_quizzes_own_answer_component/index',
			array('method' => 'assertNotEmpty'), null, 'view');
		$pattern = '/' . preg_quote('Controller/Component/TestQuizzesOwnAnswerComponent', '/') . '/';
		$this->assertRegExp($pattern, $this->view);

		//テスト実行
		$this->_mockForReturn('Session', 'read', '11,12,13', 1);
		$result = $this->controller->QuizzesOwnAnswer->getAnsweredSummaryIds();
		$this->assertEqual($result, array(11, 12, 13));
	}

}
