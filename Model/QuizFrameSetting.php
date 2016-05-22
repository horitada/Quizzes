<?php
/**
 * QuizFrameSetting Model
 *
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Your Name <yourname@domain.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('QuizzesAppModel', 'Quizzes.Model');

/**
 * Summary for QuizFrameSetting Model
 */
class QuizFrameSetting extends QuizzesAppModel {

/**
 * default display quiz item count
 *
 * @var int
 */
	const	QUIZ_DEFAULT_DISPLAY_NUM_PER_PAGE = 10;

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array();

/**
 * Called during validation operations, before validation. Please note that custom
 * validation rules can be defined in $validate.
 *
 * @param array $options Options passed from Model::save().
 * @return bool True if validate operation should continue, false to abort
 * @link http://book.cakephp.org/2.0/en/models/callback-methods.html#beforevalidate
 * @see Model::save()
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
	public function beforeValidate($options = array()) {
		$this->validate = Hash::merge($this->validate, array(
			'frame_key' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					//'message' => 'Your custom message here',
					'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
			),
			'display_type' => array(
				'inList' => array(
					'rule' => array('inList', array(
						QuizzesComponent::DISPLAY_TYPE_SINGLE,
						QuizzesComponent::DISPLAY_TYPE_LIST
					)),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
			'display_num_per_page' => array(
				'number' => array(
					'rule' => array('numeric'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
				'inList' => array(
					'rule' => array('inList', array(1, 5, 10, 20, 50, 100)),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
			'sort_type' => array(
				'inList' => array(
					'rule' => array('inList', array_keys(QuizzesComponent::getSortOrders())),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
		));

		parent::beforeValidate($options);

		return true;
	}

/**
 * getQuizFrameSetting 指定されたframe_keyの設定要件を取り出す
 *
 * @param string $frameKey frame key
 * @return array ... displayNum sortField sortDirection
 */
	public function getQuizFrameSetting($frameKey) {
		$frameSetting = $this->find('first', array(
			'conditions' => array(
				'frame_key' => $frameKey
			),
			'recursive' => -1
		));

		if (!$frameSetting) {
			$frameSetting = $this->prepareFrameSetting($frameKey);
		}

		$setting = $frameSetting['QuizFrameSetting'];
		$displayType = $setting['display_type'];
		$displayNum = $setting['display_num_per_page'];
		list($sort, $dir) = explode(' ', $setting['sort_type']);
		return array($displayType, $displayNum, $sort, $dir);
	}
/**
 * getDefaultFrameSetting
 * return default frame setting
 *
 * @return array
 */
	public function getDefaultFrameSetting() {
		$frame = array(
			'QuizFrameSetting' => array(
				'display_type' => QuizzesComponent::DISPLAY_TYPE_LIST,
				'display_num_per_page' => self::QUIZ_DEFAULT_DISPLAY_NUM_PER_PAGE,
				'sort_type' => 'Questionnaire.modified DESC',
			)
		);
		return $frame;
	}

/**
 * saveFrameSettings
 *
 * @param array $data save data
 * @return bool
 * @throws InternalErrorException
 */
	public function saveFrameSettings($data) {
		$this->loadModels([
			'Quiz' => 'Quizzes.Quiz',
			'QuizFrameDisplayQuiz' => 'Quizzes.QuizFrameDisplayQuiz',
		]);

		//トランザクションBegin
		$this->begin();
		try {
			// 現在の確認
			$quizCount = $this->Quiz->find('count', array(
				'conditions' => $this->Quiz->getBaseCondition()
			));
			// フレーム設定のバリデート
			$this->create();
			$this->set($data);
			if (! $this->validates()) {
				return false;
			}

			// 存在する場合は
			if ($quizCount > 0) {
				// フレームに表示するアンケート一覧設定のバリデート
				// 一覧表示タイプと単独表示タイプ
				$ret = $this->QuizFrameDisplayQuiz->validateFrameDisplayQuiz($data);
				if ($ret === false) {
					$this->validationErrors['QuizFrameDisplayQuiz'] =
						$this->QuizFrameDisplayQuiz->validationErrors;
					return false;
				}
			}
			// フレーム設定の登録
			if (! $this->save($data, false)) {
				throw new InternalErrorException(__d('net_commons', 'Internal Server Error'));
			}

			// フレームに表示するアンケート一覧設定の登録
			// 一覧表示タイプと単独表示タイプ
			if ($quizCount > 0) {
				$ret = $this->QuizFrameDisplayQuiz->saveFrameDisplayQuiz($data);
				if ($ret === false) {
					throw new InternalErrorException(__d('net_commons', 'Internal Server Error'));
				}
			}
			//トランザクションCommit
			$this->commit();
		} catch (Exception $ex) {
			//トランザクションRollback
			$this->rollback();
			CakeLog::error($ex);
			throw $ex;
		}

		return true;
	}

}
