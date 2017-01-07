@extends('app.applayout')

@section('content')


    <div class="row" data-toggle="isotope" style="margin-top: 20px" ng-app="dashboard">
        <div class="item col-xs-12 col-lg-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- manset haberler -->
                        <div ng-controller="sliderController" class="col-md-8">
                            <ul class="bxSlider"
                                data-bx-slider="mode: 'horizontal', pager: false, controls: true, minSlides: 1, maxSlides:4, slideHidth: 350, infiniteLoop: false, hideControlOnEnd: true">
                                <li ng-repeat="(key,items) in slider" data-notify-when-repeat-finished>
                                    <div class="box-item" style="float: none">
                                        <div class="box-post">
                                        <span class="label label-success">
                                            <a href="#" rel="tag">@{{ items.categories[0] }}</a>
                                        </span>
                                            <h1 class="post-title">
                                                <a href="#">
                                                    @{{ items.title }}
                                                </a>
                                            </h1>
                                            <span class="meta">
                                        <span><i class="glyphicon glyphicon-time"></i> @{{ items.publishedDate }}</span>
                                         </span>
                                        </div>
                                        <a href="@{{ items.link }}" target="_blank">
                                            <img class="img-responsive" style="width: 100% !important;"
                                                 ng-src="@{{items.mediaGroups[0].contents[0].url}}"
                                                 alt="@{{ items.title }}"/>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- manset haberler bitiş-->
                        <div class="col-md-4">
                            <div class="tabbable tabs-vertical tabs-left">
                                <!-- Tabs -->

                                <ul class="nav nav-tabs" tabindex="6" style="overflow: hidden; outline: none;">
                                    @foreach($resources as $key => $list)
                                    <li class="@if($key==0) active @endif"><a href="/dashboard#{{$list->sname}}" data-toggle="tab" aria-expanded="false">{{$list->name}}</a></li>
                                    @endforeach
                                </ul>
                                <!-- // END Tabs -->
                          <!-- Panes -->
                                <div class="tab-content" style="max-height: 398px;overflow-y: scroll;" >
                                    @foreach($resources as $key => $list)
                                        <div id="{{$list->sname}}" class="tab-pane @if($key==0) active @endif" >
                                           @php
                                           $yazar_listesi = $AppController::getYazar($list->yazar_url);
                                           @endphp
                                            @foreach($yazar_listesi[0]->responseData->feed->entries as $i => $y_list)

                                            <div class="list-group-item media v-middle">
                                                <div class="media-body" >
                                                    <h4 class="text-title" style="font-size:1.1em">
                                                        <a href="{{$y_list->link}}"  class="link-text-color">{{$y_list->title}}</a>
                                                    </h4>
                                                </div>
                                                <div class="media-right">
                                                    <button class="yazarModal btn btn-primary btn-xs" data-toggle="modal" data-target="#yazarModal" data-url="{{$y_list->link}}">Oku</button>
                                                </div>
                                            </div>
                                                @endforeach


                                        </div>
                                    @endforeach


                                    </div>

                                </div>
                                <!-- // END Panes -->
                            <!-- Modal -->
                            <div id="yazarModal" class="modal fade" role="dialog" style="z-index: 99999999999999">
                                <div class="modal-dialog modal-lg">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Yazar oku</h4>
                                        </div>
                                        <div class="modal-body" id="yazarBody">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            </div>

                        <script>
                            $(".yazarModal").click(function () {
                                var src = $(this).attr("data-url");
                                var h_yazar = $(this).height();
                                var test = "<iframe src='"+src+"' style='border:0;width: 100%;height:600px;'></iframe >";
                                $("#yazarBody").html(test);
                            });
                        </script>






                    </div>

                    <div class="row" ng-controller="NewsController"  style="margin-top: 20px">
                        <div id='newsLoading'><img src="images/loading.gif"></div>
                        <div id="newContent" style="display:none;">
                            <div class="col-md-4" data-ng-repeat="(key,items) in news">
                                <div class="box-item" style="background-color: #fff;margin-bottom: 20px">
                                    <div class="box-post">
                                    <span class="label label-success">
                                        <a href="#" rel="tag">@{{ items.categories[0] }}</a>
                                    </span>
                                        <h1 class="post-title">
                                            <a href="#">
                                                @{{ items.title }}
                                            </a>
                                        </h1>

                                    </div>
                                    <img src="@{{ items.mediaGroups[0].contents[0].url }}" style="width: 370px;height: 250px"
                                         alt="City in the sky: world's biggest hotel to open in Mecca"
                                         class="img-responsive">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
        <div class="item col-xs-12 col-lg-4">

            <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-heading">
                    <div class="media v-middle">
                        <div class="media-body">
                            <h4 class="text-headline margin-none">Para Durumu</h4>
                            <p class="text-subhead text-light">@{{ali}}</p>
                        </div>
                        <div class="media-right">
                            <a class="btn btn-white btn-flat" href="app-instructor-earnings.html">Reports</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="para-durum">
                        <div class="box">

                            <table>
                                <tr>
                                    <td style="width: 35px"><i class="fa fa-usd fa-2x"> </i></td>
                                    <td>
                                        <span class="text-default">  DOLAR</span>
                                        3.42347
                                        <span class="text-default">%0.5454 <i
                                                    class="fa fa-caret-down fa-lg text-danger"></i></span>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="box">

                            <table>
                                <tr>
                                    <td style="width: 35px"><i class="fa fa-euro fa-2x"> </i></td>
                                    <td>
                                        <span class="text-default">  Euro</span>
                                        3.42347
                                        <span class="text-default">%0.5454 <i
                                                    class="fa fa-caret-up fa-lg text-success"></i></span>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="box">
                            <table>
                                <tr>
                                    <td style="width: 35px"><i class="fa fa-thermometer-full"> </i></td>
                                    <td>
                                        <span class="text-default">  Elazığ</span>

                                        <span class="text-default">%0.5454 <i
                                                    class="fa fa-caret-up fa-lg text-success"></i></span>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <hr/>
                <div class="panel-body">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <h4 class="margin-none">Gross Revenue</h4>
                            <p class="text-display-1 text-warning margin-none">102.4k</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="margin-none">Net Revenue</h4>
                            <p class="text-display-1 text-success margin-none">55k</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="s-container">
                <h4 class="text-headline margin-none">Comments</h4>
                <p class="text-subhead text-light">Latest student comments </p>
            </div>
            <div class="panel panel-default">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                            <div class="media-body">
                                <p class="text-subhead">
                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-1.jpg"
                                                                                  alt="person"
                                                                                  class="width-30 img-circle"/></a>
                                    &nbsp;
                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                    <span class="text-caption text-light">59 min ago</span>
                                </p>
                            </div>
                            <div class="media-right">
                                <div class="width-50 text-right">
                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i
                                                class="fa fa-reply"></i></a>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a
                                    href="app-student-course.html">Basics
                                Of HTML</a></p></li>
                    <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                            <div class="media-body">
                                <p class="text-subhead">
                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-3.jpg"
                                                                                  alt="person"
                                                                                  class="width-30 img-circle"/></a>
                                    &nbsp;
                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                    <span class="text-caption text-light">34 min ago</span>
                                </p>
                            </div>
                            <div class="media-right">
                                <div class="width-50 text-right">
                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i
                                                class="fa fa-reply"></i></a>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a
                                    href="app-student-course.html">Basics
                                Of HTML</a></p></li>
                    <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                            <div class="media-body">
                                <p class="text-subhead">
                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-4.jpg"
                                                                                  alt="person"
                                                                                  class="width-30 img-circle"/></a>
                                    &nbsp;
                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                    <span class="text-caption text-light">54 min ago</span>
                                </p>
                            </div>
                            <div class="media-right">
                                <div class="width-50 text-right">
                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i
                                                class="fa fa-reply"></i></a>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a
                                    href="app-student-course.html">Basics
                                Of HTML</a></p></li>
                    <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                            <div class="media-body">
                                <p class="text-subhead">
                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-4.jpg"
                                                                                  alt="person"
                                                                                  class="width-30 img-circle"/></a>
                                    &nbsp;
                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                    <span class="text-caption text-light">37 min ago</span>
                                </p>
                            </div>
                            <div class="media-right">
                                <div class="width-50 text-right">
                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i
                                                class="fa fa-reply"></i></a>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a
                                    href="app-student-course.html">Basics
                                Of HTML</a></p></li>
                    <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                            <div class="media-body">
                                <p class="text-subhead">
                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-5.jpg"
                                                                                  alt="person"
                                                                                  class="width-30 img-circle"/></a>
                                    &nbsp;
                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                    <span class="text-caption text-light">41 min ago</span>
                                </p>
                            </div>
                            <div class="media-right">
                                <div class="width-50 text-right">
                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i
                                                class="fa fa-reply"></i></a>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a
                                    href="app-student-course.html">Basics
                                Of HTML</a></p></li>
                </ul>

            </div>
        </div>
    </div>

    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    <script src="js/app/angular-modul/dashboard.js"></script>


@endsection
