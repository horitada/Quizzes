<?php
/**
 * QuizPageFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author AllCreator <info@allcreator.net>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * Summary for QuizPageFixture
 */
class QuizPageFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('connection' => 'master');

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'quiz_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'page_title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ページ名', 'charset' => 'utf8'),
		'page_sequence' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'ページ順'),
		'is_page_description' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'comment' => 'ページ先頭に文章を表示するか'),
		'page_description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ページ先頭文章', 'charset' => 'utf8'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_quiz_pages_quizzes1_idx' => array('column' => 'quiz_id', 'unique' => 0),
			'fk_quiz_pages_languages1_idx' => array('column' => 'language_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '6',
			'key' => '2b4441f28bc2a2363b86e11ce5891521',
			'language_id' => '2',
			'quiz_id' => '6',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 1,
			'page_description' => 'ページ先頭の問題文章',
			'created_user' => '1',
			'created' => '2016-06-10 01:30:03',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:30:03'
		),
		array(
			'id' => '7',
			'key' => '9e843110c008351b1c32217c6844ff3a',
			'language_id' => '2',
			'quiz_id' => '7',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:30:36',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:30:36'
		),
		array(
			'id' => '8',
			'key' => 'bf22747dc27c9d0227e0189be8659129',
			'language_id' => '2',
			'quiz_id' => '9',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:31:18',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:31:18'
		),
		array(
			'id' => '9',
			'key' => '3a7fc8ac14aa1e94877c26293a5bcb60',
			'language_id' => '2',
			'quiz_id' => '10',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:34:14',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:34:14'
		),
		array(
			'id' => '10',
			'key' => '1ef20fc94ea3e513d616671fced5f00c',
			'language_id' => '2',
			'quiz_id' => '11',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:35:04',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:35:04'
		),
		array(
			'id' => '11',
			'key' => '6142b446ec98c33837d594b96203f8d4',
			'language_id' => '2',
			'quiz_id' => '12',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:36:06',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:36:06'
		),
		array(
			'id' => '12',
			'key' => '7ad7437d8dc93dc35aa1a0549dc84a28',
			'language_id' => '2',
			'quiz_id' => '13',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:37:46',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:37:46'
		),
		array(
			'id' => '13',
			'key' => '6a8a1e98cddbf4bbe9309a6410422bb2',
			'language_id' => '2',
			'quiz_id' => '14',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:39:11',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:39:11'
		),
		array(
			'id' => '14',
			'key' => 'ab0e124f3bfde5319be22317d84e704a',
			'language_id' => '2',
			'quiz_id' => '15',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:41:40',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:41:40'
		),
		array(
			'id' => '15',
			'key' => '9b2ce117d91f5b41f78a88de5319b4e0',
			'language_id' => '2',
			'quiz_id' => '15',
			'page_title' => null,
			'page_sequence' => '1',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:41:40',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:41:40'
		),
		array(
			'id' => '16',
			'key' => '514348cfb9f0e23b60ca634d7f9e9dc4',
			'language_id' => '2',
			'quiz_id' => '15',
			'page_title' => null,
			'page_sequence' => '2',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:41:40',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:41:40'
		),
		array(
			'id' => '17',
			'key' => '9837b8c86b2e00b8a0c038ce4e12fafd',
			'language_id' => '2',
			'quiz_id' => '16',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 01:55:21',
			'modified_user' => '1',
			'modified' => '2016-06-10 01:55:21'
		),
		array(
			'id' => '18',
			'key' => '218f20034d7fe2d2a4c954e2d9e7fd9e',
			'language_id' => '2',
			'quiz_id' => '17',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 02:08:26',
			'modified_user' => '1',
			'modified' => '2016-06-10 02:08:26'
		),
		array(
			'id' => '19',
			'key' => '218f20034d7fe2d2a4c954e2d9e7fd9e',
			'language_id' => '2',
			'quiz_id' => '18',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 02:10:55',
			'modified_user' => '1',
			'modified' => '2016-06-10 02:10:55'
		),
		array(
			'id' => '20',
			'key' => '3792da9cc27d506d5e1f66fad7a7afe8',
			'language_id' => '2',
			'quiz_id' => '19',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 02:12:11',
			'modified_user' => '1',
			'modified' => '2016-06-10 02:12:11'
		),
		array(
			'id' => '21',
			'key' => '1e5bd60863b2951464e8d4dfcad0b383',
			'language_id' => '2',
			'quiz_id' => '20',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 02:13:03',
			'modified_user' => '1',
			'modified' => '2016-06-10 02:13:03'
		),
		array(
			'id' => '22',
			'key' => '02c96edd0e0c6df85deb47cef8cb6adb',
			'language_id' => '2',
			'quiz_id' => '21',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 02:13:56',
			'modified_user' => '1',
			'modified' => '2016-06-10 02:13:56'
		),
		array(
			'id' => '23',
			'key' => '759a6eaedd3263351e62c1958dfc41f0',
			'language_id' => '2',
			'quiz_id' => '22',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 02:14:33',
			'modified_user' => '1',
			'modified' => '2016-06-10 02:14:33'
		),
		array(
			'id' => '24',
			'key' => '9cdd54354b956809972e5fb4772cb479',
			'language_id' => '2',
			'quiz_id' => '23',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 02:15:38',
			'modified_user' => '1',
			'modified' => '2016-06-10 02:15:38'
		),
		array(
			'id' => '25',
			'key' => '8f39a8d96b5b8fe798efe6698937a692',
			'language_id' => '2',
			'quiz_id' => '24',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '3',
			'created' => '2016-06-10 03:05:55',
			'modified_user' => '3',
			'modified' => '2016-06-10 03:05:55'
		),
		array(
			'id' => '26',
			'key' => 'bb1a921a756f84b55e127535ff286139',
			'language_id' => '2',
			'quiz_id' => '25',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '3',
			'created' => '2016-06-10 03:06:40',
			'modified_user' => '3',
			'modified' => '2016-06-10 03:06:40'
		),
		array(
			'id' => '27',
			'key' => '4b9c52b1aefe67173abb6ffde14d38a6',
			'language_id' => '2',
			'quiz_id' => '26',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '3',
			'created' => '2016-06-10 03:07:18',
			'modified_user' => '3',
			'modified' => '2016-06-10 03:07:18'
		),
		array(
			'id' => '28',
			'key' => 'cc9ec53760002652261069c9be9cf930',
			'language_id' => '2',
			'quiz_id' => '27',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '4',
			'created' => '2016-06-10 03:08:40',
			'modified_user' => '4',
			'modified' => '2016-06-10 03:08:40'
		),
		array(
			'id' => '29',
			'key' => '16f272a31fd9105c8f527cc2a89ab65d',
			'language_id' => '2',
			'quiz_id' => '28',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '4',
			'created' => '2016-06-10 03:09:21',
			'modified_user' => '4',
			'modified' => '2016-06-10 03:09:21'
		),
		array(
			'id' => '30',
			'key' => 'ee7d829b125a4f2fbbed80dc8202934b',
			'language_id' => '2',
			'quiz_id' => '29',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '4',
			'created' => '2016-06-10 03:10:04',
			'modified_user' => '4',
			'modified' => '2016-06-10 03:10:04'
		),
		array(
			'id' => '31',
			'key' => '8f39a8d96b5b8fe798efe6698937a692',
			'language_id' => '2',
			'quiz_id' => '30',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 03:11:03',
			'modified_user' => '1',
			'modified' => '2016-06-10 03:11:03'
		),
		array(
			'id' => '32',
			'key' => 'bb1a921a756f84b55e127535ff286139',
			'language_id' => '2',
			'quiz_id' => '31',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 03:11:26',
			'modified_user' => '1',
			'modified' => '2016-06-10 03:11:26'
		),
		array(
			'id' => '33',
			'key' => '4b9c52b1aefe67173abb6ffde14d38a6',
			'language_id' => '2',
			'quiz_id' => '32',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 03:11:48',
			'modified_user' => '1',
			'modified' => '2016-06-10 03:11:48'
		),
		array(
			'id' => '34',
			'key' => 'cc9ec53760002652261069c9be9cf930',
			'language_id' => '2',
			'quiz_id' => '33',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 03:12:17',
			'modified_user' => '1',
			'modified' => '2016-06-10 03:12:17'
		),
		array(
			'id' => '35',
			'key' => '16f272a31fd9105c8f527cc2a89ab65d',
			'language_id' => '2',
			'quiz_id' => '34',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 03:12:35',
			'modified_user' => '1',
			'modified' => '2016-06-10 03:12:35'
		),
		array(
			'id' => '36',
			'key' => 'ee7d829b125a4f2fbbed80dc8202934b',
			'language_id' => '2',
			'quiz_id' => '35',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 03:12:54',
			'modified_user' => '1',
			'modified' => '2016-06-10 03:12:54'
		),
		array(
			'id' => '37',
			'key' => '2e81ee276d13cc32a875a938c5190e9e',
			'language_id' => '2',
			'quiz_id' => '36',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 03:13:38',
			'modified_user' => '1',
			'modified' => '2016-06-10 03:13:38'
		),
		array(
			'id' => '38',
			'key' => '8d5354d482624b530b00a68f464e2ec2',
			'language_id' => '2',
			'quiz_id' => '37',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '3',
			'created' => '2016-06-10 03:14:46',
			'modified_user' => '3',
			'modified' => '2016-06-10 03:14:46'
		),
		array(
			'id' => '39',
			'key' => 'ca531d21066fb1de2a4e283a10fa27e1',
			'language_id' => '2',
			'quiz_id' => '38',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '4',
			'created' => '2016-06-10 03:15:58',
			'modified_user' => '4',
			'modified' => '2016-06-10 03:15:58'
		),
		array(
			'id' => '40',
			'key' => '8012f72b2341d0579fe44daa8e86bbe8',
			'language_id' => '2',
			'quiz_id' => '39',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '3',
			'created' => '2016-06-10 03:17:08',
			'modified_user' => '3',
			'modified' => '2016-06-10 03:17:08'
		),
		array(
			'id' => '41',
			'key' => 'e94aa937af7d1514bb042fd445eba072',
			'language_id' => '2',
			'quiz_id' => '40',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '4',
			'created' => '2016-06-10 03:18:21',
			'modified_user' => '4',
			'modified' => '2016-06-10 03:18:21'
		),
		array(
			'id' => '42',
			'key' => 'd18cf1bd0fe225fe0a7f55e5a496ffc6',
			'language_id' => '2',
			'quiz_id' => '41',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '3',
			'created' => '2016-06-10 03:19:37',
			'modified_user' => '3',
			'modified' => '2016-06-10 03:19:37'
		),
		array(
			'id' => '43',
			'key' => 'a3361b094e01d852ac6d4c92f86d2f10',
			'language_id' => '2',
			'quiz_id' => '42',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '4',
			'created' => '2016-06-10 05:30:41',
			'modified_user' => '4',
			'modified' => '2016-06-10 05:30:41'
		),
		array(
			'id' => '44',
			'key' => 'd18cf1bd0fe225fe0a7f55e5a496ffc6',
			'language_id' => '2',
			'quiz_id' => '43',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:06:21',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:06:21'
		),
		array(
			'id' => '45',
			'key' => 'a3361b094e01d852ac6d4c92f86d2f10',
			'language_id' => '2',
			'quiz_id' => '44',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:06:52',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:06:52'
		),
		array(
			'id' => '46',
			'key' => 'dff2b305b5b961995a86bab45a780319',
			'language_id' => '2',
			'quiz_id' => '46',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:08:11',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:08:11'
		),
		array(
			'id' => '47',
			'key' => '4758df826d9a5db1df290833ac8d0f8c',
			'language_id' => '2',
			'quiz_id' => '47',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:09:49',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:09:49'
		),
		array(
			'id' => '48',
			'key' => 'fcca48ed9ebe5190330360c754ebbb67',
			'language_id' => '2',
			'quiz_id' => '48',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:11:08',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:11:08'
		),
		array(
			'id' => '49',
			'key' => '909aa1d3ce59a14cb7d3d3166f1a8ec0',
			'language_id' => '2',
			'quiz_id' => '50',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:12:15',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:12:15'
		),
		array(
			'id' => '50',
			'key' => 'e93e4664a98e3ef9c7d7996c43a64f5f',
			'language_id' => '2',
			'quiz_id' => '51',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:14:21',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:14:21'
		),
		array(
			'id' => '51',
			'key' => 'b4795af78524f51abe81c16ada9099f5',
			'language_id' => '2',
			'quiz_id' => '52',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:16:13',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:16:13'
		),
		array(
			'id' => '52',
			'key' => '32213b1ace886285dc0d0446d16e88eb',
			'language_id' => '2',
			'quiz_id' => '53',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:17:05',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:17:05'
		),
		array(
			'id' => '53',
			'key' => '5c8486a2fd07a41240ab2f1531fad1f5',
			'language_id' => '2',
			'quiz_id' => '54',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:18:17',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:18:17'
		),
		array(
			'id' => '54',
			'key' => 'b1fb2447707917892db5a978f97ea11f',
			'language_id' => '2',
			'quiz_id' => '55',
			'page_title' => null,
			'page_sequence' => '0',
			'is_page_description' => 0,
			'page_description' => '',
			'created_user' => '1',
			'created' => '2016-06-10 06:19:45',
			'modified_user' => '1',
			'modified' => '2016-06-10 06:19:45'
		),
	);

}
