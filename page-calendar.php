<?php
/**
 * Template Name: Calendar
 *
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

get_header(); ?>
<div class="section section-page-title">
	<div class="container">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</div>
</div>
<div class="site-content">
	<div class="container">
		<main id="main" class="row pt-5 pb-5  text-left" role="main">
			<div class="col-md-12">
				<?php
				require_once str_replace('\\', '/', get_template_directory()).'/inc/ICal/Event.php';
				require_once str_replace('\\', '/', get_template_directory()).'/inc/ICal/ICal.php';

				$events = [];
				try {
					$ical = new Ical\ICal(str_replace('\\', '/', get_template_directory()).'/inc/ICal/basic.ics', array(
						'defaultSpan'                 => 2,     // Default value
						'defaultTimeZone'             => 'UTC',
						'defaultWeekStart'            => 'MO',  // Default value
						'disableCharacterReplacement' => false, // Default value
						'filterDaysAfter'             => null,  // Default value
						'filterDaysBefore'            => null,  // Default value
						'httpUserAgent'               => null,  // Default value
						'skipRecurrence'              => false, // Default value
					));
					$events = $ical->events();
					// print_r($events);
					// print_r($ical->cal);

				} catch (\Exception $e) {
					die($e);
				}
				
				$date = $_GET['date'];
				if($date){
					$d = DateTime::createFromFormat('Y-m-d', $date);
				} else {
					$d = new DateTime();
				}

				if(!$d):

					print_r('Invalid date.');

				else:
					$weekStart = 0;
					$weekDays = kalendaryo_get_week_days($weekStart);
					$daysArray = kalendaryo_get_days($d, $weekStart);
					$daysArray = array_map(function($day) use ($events){
						// print_r($ical);
						for ($x = 0; $x < count($events); $x++){
							$event = $events[$x];

							$momentEventStart = DateTime::createFromFormat('Ymd', $event->dtstart);
							$momentEventEnd = DateTime::createFromFormat('Ymd', $event->dtend);
							if(isDateBetweenDates($day['date'], $momentEventStart, $momentEventEnd)){
							// if($event->dtstart === $day['key']){

								// print_r($day['date']);

								$day['events'][] = $event->summary;
							}
						}
						return $day;
					}, $daysArray);
					$daysArray = array_merge($weekDays, $daysArray);
					$matrix = array_chunk($daysArray, 7);
					
					// print_r($matrix);
					?> 

					<h2 class="h2 text-center mb-5">
						<a href="?date=<?= (clone $d)->modify('first day of previous month')->format('Y-m-d'); ?>" class="btn btn-light">&lt;</a>
						<span><?= $d->format('F Y'); ?></span>
						<a href="?date=<?= (clone $d)->modify('first day of next month')->format('Y-m-d'); ?>" class="btn btn-light">&gt;</a>
					</h2>
					<div class="table-responsive">
					<table class="table">
						<?php for($row = 0; $row < count($matrix); $row++): ?>
							<tr>
							<?php
							$rowNow = $matrix[$row];
							for($column = 0; $column < count($rowNow); $column++):
								$cell = $rowNow[$column];
								// print_r($cell);
								if($row <= 0):
								?>
									<th width="14%" class=""><?= $cell; ?></th>
								<?php
								else:
								?>
								<td class="p-4 position-relative" style="<?php if($cell['type']==='prefix' || $cell['type']==='suffix'): ?>color:#aaa<?php else: ?>color:#000;<?php endif; ?>">
									<div style="min-height: 80px;">
										<?= $cell['date']->format('d'); ?>
										<?php for($x = 0; $x < count($cell['events']); $x++): ?>
											<div class="position-absolutex"><?php echo $cell['events'][$x]; ?></div>
										<?php endfor; ?>
									</div>
								</td>
								<?php

								endif;

							endfor;
							?>
							</tr>
							<?php
						endfor;
						?>
					</table>
					</div>
				<?php
				endif;
				?>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
