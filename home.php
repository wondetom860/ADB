<?php


?>
<!DOCTYPE html>
<html>

<head>
	<title>My Web site</title>
</head>

<body>
	<section class="col-lg-7 connectedSortable">

		<div class="nav-tabs-custom"><!-- .nav-tabs-custom -->
			<!-- Tabs within a box -->
			<ul class="nav nav-tabs pull-right">
				<li class=""><a href="#emp-notice" data-toggle="tab" aria-expanded="false">Employee</a></li>
				<li class=""><a href="#stu-notice" data-toggle="tab" aria-expanded="false">Student</a></li>
				<li class="active"><a href="#all-notice" data-toggle="tab" aria-expanded="true">General</a></li>
				<li class="pull-left header"><i class="fa fa-inbox"></i>Notice Board</li>
			</ul>
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;">
				<div class="tab-content" style="overflow: hidden; width: auto; height: 300px;">
					<!-- Notice -->
					<div class="tab-pane active" id="all-notice">

						<div class="notice-main bg-light-blue">
							<div class="notice-disp-date"> <small class="label label-success"><i class="fa fa-calendar"></i> 30-05-2015</small>
							</div>
							<div class="notice-body">
								<div class="notice-title"><a class="noticeModalLink" href="#" style="color:#FFF" data-value="/EduSec/index.php?r=dashboard%2Fnotice%2Fview-popup&amp;id=3">Summer Vacation</a>&nbsp; </div>
								<div class="notice-desc">Summer Vacation starts from June to 2nd week of July. </div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="stu-notice">

						<div class="notice-main bg-aqua">
							<div class="notice-disp-date"> <small class="label label-success"><i class="fa fa-calendar"></i> 01-06-2015</small>
							</div>
							<div class="notice-body">
								<div class="notice-title"><a class="noticeModalLink" href="#" style="color:#FFF" data-value="/EduSec/index.php?r=dashboard%2Fnotice%2Fview-popup&amp;id=1">Next Week Summer Exam </a>&nbsp; </div>
								<div class="notice-desc">summer Exam will be conducted on Next week. All The Best </div>
							</div>
						</div>
						<div class="notice-main bg-aqua">
							<div class="notice-disp-date"> <small class="label label-success"><i class="fa fa-calendar"></i> 25-05-2015</small>
							</div>
							<div class="notice-body">
								<div class="notice-title"><a class="noticeModalLink" href="#" style="color:#FFF" data-value="/EduSec/index.php?r=dashboard%2Fnotice%2Fview-popup&amp;id=5">Exam From Fill</a>&nbsp; </div>
								<div class="notice-desc">All Students come and fill their exam forms </div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="emp-notice">

						<div class="notice-main bg-teal">
							<div class="notice-disp-date"> <small class="label label-success"><i class="fa fa-calendar"></i> 05-06-2015</small>
							</div>
							<div class="notice-body">
								<div class="notice-title"><a class="noticeModalLink" href="#" style="color:#FFF" data-value="/EduSec/index.php?r=dashboard%2Fnotice%2Fview-popup&amp;id=2">Monthly Report</a>&nbsp; </div>
								<div class="notice-desc">All Employee have to submit their report on month end. </div>
							</div>
						</div>
						<div class="notice-main bg-teal">
							<div class="notice-disp-date"> <small class="label label-success"><i class="fa fa-calendar"></i> 29-05-2015</small>
							</div>
							<div class="notice-body">
								<div class="notice-title"><a class="noticeModalLink" href="#" style="color:#FFF" data-value="/EduSec/index.php?r=dashboard%2Fnotice%2Fview-popup&amp;id=4">Attendance Report</a>&nbsp; </div>
								<div class="notice-desc">All Employees collect their class wise attendance report </div>
							</div>
						</div>
					</div>
				</div>
				<div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300px;"></div>
				<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
			</div> <!--  /.tab-content -->
		</div><!-- /.nav-tabs-custom -->

		<!-- Calendar -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title "><i class="fa fa-calendar"></i> Calendar</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<!--The calendar -->
				<div id="w0" class="fullcalendar fc fc-ltr fc-unthemed" language="es">
					<div class="fc-toolbar">
						<div class="fc-left">
							<div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="disabled">today</button>
						</div>
						<div class="fc-right">
							<div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div>
						</div>
						<div class="fc-center">
							<h2 style="font-size: 20px;font-weight: bold;">June 2019</h2>
						</div>
						<div class="fc-clear"></div>
					</div>
					<div class="fc-view-container" style="">
						<div class="fc-view fc-month-view fc-basic-view" style="">
							<table>
								<thead class="fc-head">
									<tr>
										<td class="fc-widget-header">
											<div class="fc-row fc-widget-header">
												<table>
													<thead>
														<tr>
															<th class="fc-week-number fc-widget-header" style="width: 18px;"><span>W</span></th>
															<th class="fc-day-header fc-widget-header fc-sun">Sun</th>
															<th class="fc-day-header fc-widget-header fc-mon">Mon</th>
															<th class="fc-day-header fc-widget-header fc-tue">Tue</th>
															<th class="fc-day-header fc-widget-header fc-wed">Wed</th>
															<th class="fc-day-header fc-widget-header fc-thu">Thu</th>
															<th class="fc-day-header fc-widget-header fc-fri">Fri</th>
															<th class="fc-day-header fc-widget-header fc-sat">Sat</th>
														</tr>
													</thead>
												</table>
											</div>
										</td>
									</tr>
								</thead>
								<tbody class="fc-body">
									<tr>
										<td class="fc-widget-content">
											<div class="fc-day-grid-container" style="">
												<div class="fc-day-grid">
													<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 59px;">
														<div class="fc-bg">
															<table>
																<tbody>
																	<tr>
																		<td class="fc-week-number fc-widget-content" style="width: 18px;"></td>
																		<td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2019-05-26"></td>
																		<td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2019-05-27"></td>
																		<td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2019-05-28"></td>
																		<td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2019-05-29"></td>
																		<td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2019-05-30"></td>
																		<td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2019-05-31"></td>
																		<td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-06-01"></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="fc-content-skeleton">
															<table>
																<thead>
																	<tr>
																		<td class="fc-week-number" style="width: 18px;"><span>22</span></td>
																		<td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2019-05-26">26</td>
																		<td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2019-05-27">27</td>
																		<td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2019-05-28">28</td>
																		<td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2019-05-29">29</td>
																		<td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2019-05-30">30</td>
																		<td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2019-05-31">31</td>
																		<td class="fc-day-number fc-sat fc-past" data-date="2019-06-01">1</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="fc-week-number" style="width:18px"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 59px;">
														<div class="fc-bg">
															<table>
																<tbody>
																	<tr>
																		<td class="fc-week-number fc-widget-content" style="width: 18px;"></td>
																		<td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-06-02"></td>
																		<td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-06-03"></td>
																		<td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-06-04"></td>
																		<td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-06-05"></td>
																		<td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-06-06"></td>
																		<td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-06-07"></td>
																		<td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-06-08"></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="fc-content-skeleton">
															<table>
																<thead>
																	<tr>
																		<td class="fc-week-number" style="width: 18px;"><span>23</span></td>
																		<td class="fc-day-number fc-sun fc-past" data-date="2019-06-02">2</td>
																		<td class="fc-day-number fc-mon fc-past" data-date="2019-06-03">3</td>
																		<td class="fc-day-number fc-tue fc-past" data-date="2019-06-04">4</td>
																		<td class="fc-day-number fc-wed fc-past" data-date="2019-06-05">5</td>
																		<td class="fc-day-number fc-thu fc-past" data-date="2019-06-06">6</td>
																		<td class="fc-day-number fc-fri fc-past" data-date="2019-06-07">7</td>
																		<td class="fc-day-number fc-sat fc-past" data-date="2019-06-08">8</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="fc-week-number" style="width:18px"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 59px;">
														<div class="fc-bg">
															<table>
																<tbody>
																	<tr>
																		<td class="fc-week-number fc-widget-content" style="width: 18px;"></td>
																		<td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-06-09"></td>
																		<td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-06-10"></td>
																		<td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-06-11"></td>
																		<td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-06-12"></td>
																		<td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-06-13"></td>
																		<td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-06-14"></td>
																		<td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-06-15"></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="fc-content-skeleton">
															<table>
																<thead>
																	<tr>
																		<td class="fc-week-number" style="width: 18px;"><span>24</span></td>
																		<td class="fc-day-number fc-sun fc-past" data-date="2019-06-09">9</td>
																		<td class="fc-day-number fc-mon fc-past" data-date="2019-06-10">10</td>
																		<td class="fc-day-number fc-tue fc-past" data-date="2019-06-11">11</td>
																		<td class="fc-day-number fc-wed fc-past" data-date="2019-06-12">12</td>
																		<td class="fc-day-number fc-thu fc-past" data-date="2019-06-13">13</td>
																		<td class="fc-day-number fc-fri fc-past" data-date="2019-06-14">14</td>
																		<td class="fc-day-number fc-sat fc-past" data-date="2019-06-15">15</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="fc-week-number" style="width:18px"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 59px;">
														<div class="fc-bg">
															<table>
																<tbody>
																	<tr>
																		<td class="fc-week-number fc-widget-content" style="width: 18px;"></td>
																		<td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-06-16"></td>
																		<td class="fc-day fc-widget-content fc-mon fc-today fc-state-highlight" data-date="2019-06-17"></td>
																		<td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-06-18"></td>
																		<td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-06-19"></td>
																		<td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-06-20"></td>
																		<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-06-21"></td>
																		<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-06-22"></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="fc-content-skeleton">
															<table>
																<thead>
																	<tr>
																		<td class="fc-week-number" style="width: 18px;"><span>25</span></td>
																		<td class="fc-day-number fc-sun fc-past" data-date="2019-06-16">16</td>
																		<td class="fc-day-number fc-mon fc-today fc-state-highlight" data-date="2019-06-17">17</td>
																		<td class="fc-day-number fc-tue fc-future" data-date="2019-06-18">18</td>
																		<td class="fc-day-number fc-wed fc-future" data-date="2019-06-19">19</td>
																		<td class="fc-day-number fc-thu fc-future" data-date="2019-06-20">20</td>
																		<td class="fc-day-number fc-fri fc-future" data-date="2019-06-21">21</td>
																		<td class="fc-day-number fc-sat fc-future" data-date="2019-06-22">22</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="fc-week-number" style="width:18px"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 59px;">
														<div class="fc-bg">
															<table>
																<tbody>
																	<tr>
																		<td class="fc-week-number fc-widget-content" style="width: 18px;"></td>
																		<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-06-23"></td>
																		<td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-06-24"></td>
																		<td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-06-25"></td>
																		<td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-06-26"></td>
																		<td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-06-27"></td>
																		<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-06-28"></td>
																		<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-06-29"></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="fc-content-skeleton">
															<table>
																<thead>
																	<tr>
																		<td class="fc-week-number" style="width: 18px;"><span>26</span></td>
																		<td class="fc-day-number fc-sun fc-future" data-date="2019-06-23">23</td>
																		<td class="fc-day-number fc-mon fc-future" data-date="2019-06-24">24</td>
																		<td class="fc-day-number fc-tue fc-future" data-date="2019-06-25">25</td>
																		<td class="fc-day-number fc-wed fc-future" data-date="2019-06-26">26</td>
																		<td class="fc-day-number fc-thu fc-future" data-date="2019-06-27">27</td>
																		<td class="fc-day-number fc-fri fc-future" data-date="2019-06-28">28</td>
																		<td class="fc-day-number fc-sat fc-future" data-date="2019-06-29">29</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="fc-week-number" style="width:18px"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 63px;">
														<div class="fc-bg">
															<table>
																<tbody>
																	<tr>
																		<td class="fc-week-number fc-widget-content" style="width: 18px;"></td>
																		<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-06-30"></td>
																		<td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-07-01"></td>
																		<td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-07-02"></td>
																		<td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-07-03"></td>
																		<td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-07-04"></td>
																		<td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-07-05"></td>
																		<td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-07-06"></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="fc-content-skeleton">
															<table>
																<thead>
																	<tr>
																		<td class="fc-week-number" style="width: 18px;"><span>27</span></td>
																		<td class="fc-day-number fc-sun fc-future" data-date="2019-06-30">30</td>
																		<td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2019-07-01">1</td>
																		<td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2019-07-02">2</td>
																		<td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2019-07-03">3</td>
																		<td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2019-07-04">4</td>
																		<td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2019-07-05">5</td>
																		<td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2019-07-06">6</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="fc-week-number" style="width:18px"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<ul class="legend">
						<li><span class="holiday"></span> Holiday</li>
						<li><span class="importantnotice"></span> Important Notice</li>
						<li><span class="meeting"></span> Meeting</li>
						<li><span class="messages"></span> Messages</li>
					</ul>
				</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</section>
</body>

</html>