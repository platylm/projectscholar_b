<div id="content" class="dashboard padding-20">
    <!-- BOXES -->
    <div class="row">
        <!-- Profit Box -->
        <div class="col-md-4 col-sm-6">

            <!-- BOX -->
            <div class="box warning"><!-- default, danger, warning, info, success -->

                <div class="box-title"><!-- add .noborder class if box-body is removed -->
                    <h4> 3 ผลงาน</h4>
                    <i class="fa fa-calendar"></i><br>
                </div>

                <div class="box-body text-center">
									<span class="sparkline"
                                          data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
										331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
									</span>
                </div>

            </div>
            <!-- /BOX -->

        </div>

        <!-- Feedback Box -->
        <div class="col-md-4 col-sm-8">

            <!-- BOX -->
            <div class="box danger"><!-- default, danger, warning, info, success -->

                <div class="box-title"><!-- add .noborder class if box-body is removed -->
                    <h4><a href="#">2 กิจกรรมเชิงวิชาการที่จะทำ</a></h4>
                    <i class="fa fa-calendar"></i><br>
                </div>

                <div class="box-body text-center">
									<span class="sparkline"
                                          data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
										331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
									</span>
                </div>

            </div>
            <!-- /BOX -->

        </div>

        <!-- Online Box -->
        <div class="col-md-4 col-sm-6">

            <!-- BOX -->
            <div class="box success"><!-- default, danger, warning, info, success -->

                <div class="box-title"><!-- add .noborder class if box-body is removed -->
                    <h4>2 กิจกรรมภาคควิชาที่จะทำ</h4>

                    <i class="fa fa-calendar"></i><br>
                </div>

                <div class="box-body text-center">
									<span class="sparkline"
                                          data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
										331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
									</span>
                </div>

            </div>
            <!-- /BOX -->

        </div>


    </div>
    <!-- /BOXES -->


    <div class="row">

        <div class="col-md-12">

            <!--
                PANEL CLASSES:
                    panel-default
                    panel-danger
                    panel-warning
                    panel-info
                    panel-success

                INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
                        All pannels should have an unique ID or the panel collapse status will not be stored!
            -->
            <div id="panel-2" class="panel panel-default">
                <div class="panel-heading">
									<span class="title elipsis">
										<strong>ประกาศ</strong> <!-- panel title -->
									</span>

                    <!-- tabs nav -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><!-- TAB 1 -->
                            <a href="#ttab1_nobg" data-toggle="tab">ข่าวเกี่ยวกับทุนการศึกษา</a>
                        </li>
                        <li class=""><!-- TAB 2 -->
                            <a href="#ttab2_nobg" data-toggle="tab">ข่าวการแข่งขัน</a>
                        </li>
                        <li class=""><!-- TAB 2 -->
                            <a href="#ttab3_nobg" data-toggle="tab">ข่าวกิจกรรมคณะ</a>
                        </li>
                    </ul>
                    <!-- /tabs nav -->


                </div>

                <!-- panel content -->
                <div class="panel-body">

                    <!-- tabs content -->
                    <div class="tab-content transparent">

                        <div id="ttab1_nobg" class="tab-pane active"><!-- TAB 1 CONTENT -->

                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ข่าวเกี่ยวกับทุนการศึกษา</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#">เปิดรับสมัครเข้าศึกษาระดับ ป.ตรี โครงการพิเศษรอบที่
                                                2/2560 ถึง 2 มิ.ย. 60</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">ขอเชิญผู้สนใจเข้าร่วมกิจกรรม StartUp Thailand Regional :
                                                Pitching Challenge</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">ภาควิชาวิทยาการคอมพิวเตอร์นำทีมหารือเทศบาลนครขอนแก่น
                                                เพื่อการนำไปสู่ความเป็นเทศบาลดิจิทัล</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a class="size-12" href="#">
                                    <i class="fa fa-arrow-right text-muted"></i>
                                    More...
                                </a>

                            </div>

                        </div><!-- /TAB 1 CONTENT -->

                        <div id="ttab2_nobg" class="tab-pane"><!-- TAB 2 CONTENT -->

                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ข่าวการแข่งขัน</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#">นักศึกษาฯคว้ารางวัล Good Paper Award จากงานประชุมวิชาการ
                                                TNIAC 2017</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">นักศึกษาภาคคอมฯเข้าร่วมการแข่งขัน AsiagraphReallusion
                                                Award 2017</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">อบรมการสร้างงาน Animation ด้วยโปรแกรม iclone7</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a class="size-12" href="#">
                                    <i class="fa fa-arrow-right text-muted"></i>
                                    More Most Visited
                                </a>

                            </div>

                        </div><!-- /TAB 2 CONTENT -->

                        <div id="ttab3_nobg" class="tab-pane"><!-- TAB 3 CONTENT -->

                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ข่าวกิจกรรมคณะ</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#">นักศึกษาฯคว้ารางวัล Good Paper Award จากงานประชุมวิชาการ
                                                TNIAC 2017</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">นักศึกษาภาคคอมฯเข้าร่วมการแข่งขัน AsiagraphReallusion
                                                Award 2017</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">อบรมการสร้างงาน Animation ด้วยโปรแกรม iclone7</a></td>
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a class="size-12" href="#">
                                    <i class="fa fa-arrow-right text-muted"></i>
                                    More Most Visited
                                </a>

                            </div>

                        </div><!-- /TAB 1 CONTENT -->

                    </div>
                    <!-- /tabs content -->
                </div>
                <!-- /panel content -->

            </div>
            <!-- /PANEL -->

        </div>


        <!-- /PANEL -->

    </div>

    <!-- Start Calender -->
    <div class="row">

        <div class="col-md-12">
            <!-- Panel -->
            <div id="panel-calendar" class="panel panel-default">

                <div class="panel-heading">

								<span class="title elipsis">
									<strong>MY EVENTS</strong> <!-- panel title -->
								</span>

                    <div class="panel-options pull-right"><!-- panel options -->
                        <ul class="options list-unstyled">
                            <li>
                                <a href="#" class="opt dropdown-toggle" data-toggle="dropdown"><span
                                            class="label label-disabled"><span id="agenda_btn">Month</span> <span
                                                class="caret"></span></span></a>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a data-widget="calendar-view" href="#month"><i
                                                    class="fa fa-calendar-o color-green"></i> <span>Month</span></a>
                                    </li>
                                    <li><a data-widget="calendar-view" href="#agendaWeek"><i
                                                    class="fa fa-calendar-o color-red"></i> <span>Agenda</span></a></li>
                                    <li><a data-widget="calendar-view" href="#agendaDay"><i
                                                    class="fa fa-calendar-o color-yellow"></i> <span>Today</span></a>
                                    </li>
                                    <li><a data-widget="calendar-view" href="#basicWeek"><i
                                                    class="fa fa-calendar-o color-gray"></i> <span>Week</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse"
                                   data-placement="bottom"></a></li>
                        </ul>
                    </div><!-- /panel options -->

                </div>

                <!-- panel content -->
                <div class="panel-body">

                    <div id="calendar" data-modal-create="true"><!-- CALENDAR CONTAINER --></div>

                </div>
                <!-- /panel content -->

            </div>
            <!-- /Panel -->

        </div>

    </div>

    <!-- END Calender -->


</div>


<!-- PAGE LEVEL SCRIPT -->
<script type="text/javascript">
    /*
     Toastr Notification On Load

     TYPE:
     primary
     info
     error
     success
     warning

     POSITION
     top-right
     top-left
     top-center
     top-full-width
     bottom-right
     bottom-left
     bottom-center
     bottom-full-width

     false = click link (example: "http://www.stepofweb.com")
     */
    //_toastr("Welcome, you have 2 new orders","top-right","success",false);


    /** SALES CHART
     ******************************************* **/

    loadScript("../" + plugin_path + "chart.flot/jquery.flot.min.js", function () {
        loadScript("../" + plugin_path + "chart.flot/jquery.flot.resize.min.js", function () {
            loadScript("../" + plugin_path + "chart.flot/jquery.flot.time.min.js", function () {
                loadScript("../" + plugin_path + "chart.flot/jquery.flot.fillbetween.min.js", function () {
                    loadScript("../" + plugin_path + "chart.flot/jquery.flot.orderBars.min.js", function () {
                        loadScript("../" + plugin_path + "chart.flot/jquery.flot.pie.min.js", function () {
                            loadScript("../" + plugin_path + "chart.flot/jquery.flot.tooltip.min.js", function () {

                                if (jQuery("#flot-sales").length > 0) {

                                    /* DEFAULTS FLOT COLORS */
                                    var $color_border_color = "#eaeaea", /* light gray 	*/
                                        $color_second = "#6595b4";
                                    /* blue      	*/


                                    var d = [
                                        [1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 77], [1196809200000, 3636], [1196895600000, 3575], [1196982000000, 2736], [1197068400000, 1086], [1197154800000, 676], [1197241200000, 1205], [1197327600000, 906], [1197414000000, 710], [1197500400000, 639], [1197586800000, 540], [1197673200000, 435], [1197759600000, 301], [1197846000000, 575], [1197932400000, 481], [1198018800000, 591], [1198105200000, 608], [1198191600000, 459], [1198278000000, 234], [1198364400000, 4568], [1198450800000, 686], [1198537200000, 4122], [1198623600000, 449], [1198710000000, 468], [1198796400000, 392], [1198882800000, 282], [1198969200000, 208], [1199055600000, 229], [1199142000000, 177], [1199228400000, 374], [1199314800000, 436], [1199401200000, 404], [1199487600000, 544], [1199574000000, 500], [1199660400000, 476], [1199746800000, 462], [1199833200000, 500], [1199919600000, 700], [1200006000000, 750], [1200092400000, 600], [1200178800000, 500], [1200265200000, 900], [1200351600000, 930], [1200438000000, 1200], [1200524400000, 980], [1200610800000, 950], [1200697200000, 900], [1200783600000, 1000], [1200870000000, 1050], [1200956400000, 1150], [1201042800000, 1100], [1201129200000, 1200], [1201215600000, 1300], [1201302000000, 1700], [1201388400000, 1450], [1201474800000, 1500], [1201561200000, 1510], [1201647600000, 1510], [1201734000000, 1510], [1201820400000, 1700], [1201906800000, 1800], [1201993200000, 1900], [1202079600000, 2000], [1202166000000, 2100], [1202252400000, 2200], [1202338800000, 2300], [1202425200000, 2400], [1202511600000, 2550], [1202598000000, 2600], [1202684400000, 2500], [1202770800000, 2700], [1202857200000, 2750], [1202943600000, 2800], [1203030000000, 3245], [1203116400000, 3345], [1203202800000, 3000], [1203289200000, 3200], [1203375600000, 3300], [1203462000000, 3400], [1203548400000, 3600], [1203634800000, 3700], [1203721200000, 3800], [1203807600000, 4000], [1203894000000, 4500]];

                                    for (var i = 0; i < d.length; ++i) {
                                        d[i][0] += 60 * 60 * 1000;
                                    }

                                    var options = {

                                        xaxis: {
                                            mode: "time",
                                            tickLength: 5
                                        },

                                        series: {
                                            lines: {
                                                show: true,
                                                lineWidth: 1,
                                                fill: true,
                                                fillColor: {
                                                    colors: [{
                                                        opacity: 0.1
                                                    }, {
                                                        opacity: 0.15
                                                    }]
                                                }
                                            },
                                            //points: { show: true },
                                            shadowSize: 0
                                        },

                                        selection: {
                                            mode: "x"
                                        },

                                        grid: {
                                            hoverable: true,
                                            clickable: true,
                                            tickColor: $color_border_color,
                                            borderWidth: 0,
                                            borderColor: $color_border_color,
                                        },

                                        tooltip: true,

                                        tooltipOpts: {
                                            content: "Sales: %x <span class='block'>$%y</span>",
                                            dateFormat: "%y-%0m-%0d",
                                            defaultTheme: false
                                        },

                                        colors: [$color_second],

                                    };

                                    var plot = jQuery.plot(jQuery("#flot-sales"), [d], options);
                                }

                            });
                        });
                    });
                });
            });
        });
    });
</script>

<!-- PAGE LEVEL SCRIPTS Calendar-->
<?php
$this->registerJs(<<<JS
            loadScript(plugin_path + "jquery/jquery.cookie.js", function () {
                loadScript(plugin_path + "jquery/jquery-ui.min.js", function () {
                    loadScript(plugin_path + "jquery/jquery.ui.touch-punch.min.js", function () {
                        loadScript(plugin_path + "moment.js", function () {
                            loadScript(plugin_path + "bootstrap.dialog/dist/js/bootstrap-dialog.min.js", function () {
                                loadScript(plugin_path + "fullcalendar/fullcalendar.js", function () {
                                    loadScript(plugin_path + "fullcalendar/gcal.js", function () {

                                        // Load Calendar Demo Script
                                        loadScript(plugin_path + "bootstrap/js/viewdao/demo.calendar.js");

                                    });
                                });
                            });
                        });
                    });
                });
            });

JS
);
?>
