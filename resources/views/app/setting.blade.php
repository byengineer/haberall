@extends('app.applayout')

@section('content')

    <div class="row" ng-app="resource">
        <div class="col-md-8">
            <div class="page-section third">
                <!-- Tabbable Widget -->
                <div class="tabbable paper-shadow relative" data-z="0.5">

                    <!-- Tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="app-student-profile.html"><i class="fa fa-cog"></i> <span class="hidden-sm hidden-xs">Ayarları Yönet</span></a></li>

                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content"  >
                        <div id="account"  ng-controller="ResourceController" class="tab-pane active">
                           <h3>Haber Kaynaklarını Seç</h3>
                          <div class="row">
                              <div class="col-md-3" ng-repeat="items in settings">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">

                                          <label for="@{{ items.id }}">
                                              <img src="@{{ items.url }}" class="img-responsive">
                                          </label>

                                      </div>
                                      <div class="panel-body">
                                          <button class="btn btn-blue-500 btn-block" ng-click="addResource(items.id)">Kaydet</button>
                                      </div>

                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <!-- // END Panes -->

                </div>
                <!-- // END Tabbable Widget -->


            </div>
        </div>
        <div class="col-md-4">
            alksdj
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    <script src="js/app/angular-modul/resource-list.js"></script>


@endsection