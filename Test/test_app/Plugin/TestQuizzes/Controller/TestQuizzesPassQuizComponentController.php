<?php
/**
 * QuizzesPassQuizComponentテスト用Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author AllCreator <info@allcreator.net>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * QuizzesPassQuizComponentテスト用Controller
 *
 * @author AllCreator <info@allcreator.net>
 * @package NetCommons\Quizzes\Test\test_app\Plugin\TestQuizzes\Controller
 */
class TestQuizzesPassQuizComponentController extends AppController {

/**
 * 使用コンポーネント
 *
 * @var array
 */
	public $components = array(
		'Quizzes.QuizzesPassQuiz'
	);

/**
 * index
 *
 * @return void
 */
	public function index() {
		$this->autoRender = true;
	}

}
