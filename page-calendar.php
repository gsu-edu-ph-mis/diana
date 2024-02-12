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
		<main id="main" class="row pt-5 pb-5 text-left" role="main">
			<div class="col-md-8 mb-5">
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
							$event->description = trim($event->description);
							$priority = (!isset($event->description) || $event->description == false) ? 0 : (int)$event->description - 1;
							if(kalendaryo_is_between_dates($day['date'], $momentEventStart, $momentEventEnd)){
								$day['events'][$priority][] = $event->summary;
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
					<div class="table-responsive mb-5">
					<table class="table table-calendar">
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
									// sort($cell['events'])
								?>
								<td class="p-4 position-relative" style="<?php if($cell['type']==='prefix' || $cell['type']==='suffix'): ?>color:#aaa<?php else: ?>color:#000;<?php endif; ?>">
									<div class="calendar-day">
										<div><?= $cell['date']->format('d'); ?></div>
										<div class="calendar-events">
										<?php for($p = 0; $p <= 5; $p++): ?>
											<?php if(isset($cell['events'][$p])): ?>
												<?php for($x = 0; $x < count($cell['events'][$p]); $x++): ?>
													<div class="calendar-entry"><?php echo $cell['events'][$p][$x]; ?></div>
												<?php endfor; ?>
											<?php endif; ?>
										<?php endfor; ?>
										</div>
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
					<!-- .table-responsive -->

					<p><em>Tip: To add this to your Google Calendar, visit the <a href="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FManila&showCalendars=0&showPrint=0&showTabs=0&src=Y183ZXIwMzJvbTlsamN1Y2Z1ZDQ3cmFkOWp0a0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23F09300">Calendar Link</a> <br class="d-md-block">and click the google calendar button at the bottom (<img src="<?= get_stylesheet_directory_uri(); ?>/images/calendar-add.jpg" alt="add">)</em></p>
				<?php
				endif;
				?>
			</div>
			<div class="col-md-4 mb-5">
				<div class="calendar-box mb-4">
					<!-- 23-24 -->
					<h2 class="h4 mb-4 text-center">For Academic Year 2023-2024</h2>
					<div class="title-first bg-gsu-blue text-center text-white p-3">
						<h3 class="h4 mb-0">First Semester</h3>
						<p class="mb-0">August - December, 2023</p>
					</div>
					<div class="body">
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue">
							<div class="col-md-12 text-center">
								<div class="p-2">Enrollment Schedule</div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">4<sup>th</sup> Year</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-07-17">July 17 - 21, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">3<sup>rd</sup> Year</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-07-24">July 24 - 28, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">2<sup>nd</sup> Year</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-08-04">July 31 - Aug 4, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Incoming 1<sup>st</sup> Year and All Programs/ Year Levels/ Transferees</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-08-04">Aug 7 - Aug 18, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Beginning of Classes</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-08-22">Aug 22, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Changing, Adding and Dropping</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-08-29">Aug 29 - Sep 8, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Orientation Program/ Campus/ College Acquaintance Party</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-08-29">Sep 4 - 9, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Middle Term Exam</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-10-11">October 9 - 11, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Cultural Activities</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-10-19">October 19 - 21, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Final Exam</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-12-19">December 19 - 20, 2023</a></div>
							</div>
						</div>
					</div>
					<div class="title bg-gsu-blue text-center text-white p-3">
						<h3 class="h4 mb-0">Second Semester</h3>
						<p class="mb-0">January 31, 2024 - June 28, 2024</p>
					</div>
					<div class="body">
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue">
							<div class="col-md-5">
								<div class="p-2">Midterm Exam</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2024-04-01">April 1 – 2, 2024</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Final Exam (Graduating)</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2024-06-10">June 10 – 11, 2024</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Final Exam (Non-graduating)</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2024-06-13">June 13 – 14, 2024</a></div>
							</div>
						</div>
					</div>
					<div class="title bg-gsu-blue text-center text-white p-3">
						<h3 class="h4 mb-0">Summer Class</h3>
						<p class="mb-0">July 01 – August 09, 2024</p>
					</div>
					<div class="body">
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue">
							<div class="col-md-5">
								<div class="p-2">Midterm Exam</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2024-07-18">July 18 – 19, 2024</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Final Exam </div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2024-08-05">August 05 – 06, 2024</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="calendar-box">
					<h2 class="h4 mb-4 text-center">For Academic Year 2022-2023</h2>
					<div class="title-first bg-gsu-blue text-center text-white p-3">
						<h3 class="h4 mb-0">First Semester</h3>
						<p class="mb-0">August 22, 2022 - January 14, 2023</p>
					</div>
					<div class="body">
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue">
							<div class="col-md-5">
								<div class="p-2">Midterm Exam</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2022-10-01">October 24 - 26, 2022</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Christmas Break</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2022-12-01">December 21, 2022 - January 3, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Final Exam</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-01-01">January 12 - 13, 2022</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Semestral Break</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-01-01">January 15 - 29, 2023</a></div>
							</div>
						</div>
					</div>
					<div class="title bg-gsu-blue text-center text-white p-3">
						<h3 class="h4 mb-0">Second Semester</h3>
						<p class="mb-0">January 30, 2023 - June 16, 2023</p>
					</div>
					<div class="body">
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue">
							<div class="col-md-5">
								<div class="p-2">Midterm Exam</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-03-01">March 20 - 21, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Final Exam (Graduating)</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-05-01">May 29 - 30, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Final Exam (Non-graduating)</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-06-01">June 5 - 7, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Semestral Break</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-06-01">June 18 - 25, 2023</a></div>
							</div>
						</div>
					</div>
					<div class="title bg-gsu-blue text-center text-white p-3">
						<h3 class="h4 mb-0">Summer Class</h3>
						<p class="mb-0">June 26, 2023 - August 4, 2023</p>
					</div>
					<div class="body">
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue">
							<div class="col-md-5">
								<div class="p-2">Midterm Exam</div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-07-01">July 12, 2023</a></div>
							</div>
						</div>
						<div class="d-flex align-items-center border-style-solid border-width-2 border-color-gsu-blue border-top-0">
							<div class="col-md-5">
								<div class="p-2">Final Exam </div>
							</div>
							<div class="col-md-7">
								<div class="p-2"><a href="?date=2023-08-01">August 4, 2023</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
