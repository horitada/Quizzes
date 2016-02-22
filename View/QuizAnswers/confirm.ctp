<?php
/**
 * questionnaire page setting view template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Allcreator <info@allcreator.net>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>
<?php echo $this->element('Quizzes.scripts'); ?>

<article id="nc-quizzes-confirm">

	<?php echo $this->element('Quizzes.QuizAnswers/answer_test_mode_header'); ?>

	<?php echo $this->element('Quizzes.QuizAnswers/answer_header'); ?>

	<p>
		<?php echo __d('questionnaires', 'Please confirm your answers.'); ?>
	</p>

	<?php echo $this->NetCommonsForm->create('QuizAnswer'); ?>
	<?php echo $this->NetCommonsForm->hidden('Frame.id'); ?>
	<?php echo $this->NetCommonsForm->hidden('Block.id'); ?>
	<?php echo $this->NetCommonsForm->hidden('Quiz.id', array('value' => $quiz['Quiz']['id'])); ?>
	<?php echo $this->NetCommonsForm->hidden('QuizAnswerSummary.id'); ?>

	<?php foreach($quiz['QuizPage'] as $pIndex => $page): ?>
		<?php foreach($page['QuizQuestion'] as $qIndex => $question): ?>

				<div class="well form-control-static">
					<div class="form-group">
					<label class="pull-right text-muted"><?php echo sprintf('(配点%3d点)', $question['allotment']); ?></label>

					<label class="control-label">
						<?php if ($quiz['Quiz']['page_count'] > 1): ?>
							<?php echo sprintf('ページ%2d - 問題%2d：', $pIndex + 1, $qIndex + 1); ?>
						<?php else: ?>
							<?php echo sprintf('問題%2d：', $qIndex + 1); ?>
						<?php endif; ?>
					</label>

					<p >
						<?php echo $question['question_value']; ?>
					</p>

					<?php echo $this->QuizAnswer->answer($question, true); ?>
					</div>
				</div>
		<?php endforeach; ?>
	<?php endforeach; ?>

	<div class="text-center">

		<a class="btn btn-default" href="<?php echo NetCommonsUrl::actionUrl(array(
																	'controller' => 'quiz_answers',
																	'action' => 'view',
																	Current::read('Block.id'),
																	$quiz['Quiz']['key'],
																	'frame_id' => Current::read('Frame.id'))); ?>">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<?php echo __d('questionnaires', 'Start over'); ?>
		</a>

		<?php echo $this->NetCommonsForm->button(
		__d('net_commons', 'Confirm'),
		array(
		'class' => 'btn btn-primary',
		'name' => 'confirm_' . 'questionnaire',
		)) ?>
	</div>
	<?php echo $this->NetCommonsForm->end(); ?>

</article>