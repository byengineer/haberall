@extends('app.applayout')

@section('content')

<div class="row" ng-app="profile">
    <div class="col-md-8">
        <div class="page-section third">
            <!-- Tabbable Widget -->
            <div class="tabbable paper-shadow relative" data-z="0.5">

                <!-- Tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="app-student-profile.html"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                </ul>
                <!-- // END Tabs -->

                <!-- Panes -->
                <div class="tab-content"  >
             <div id="account" class="tab-pane active" ng-controller="Hello">
                 <div ng-hide="@{{loading}}" id="loading"><img src="http://blog.teamtreehouse.com/wp-content/uploads/2015/05/InternetSlowdown_Day.gif" alt=""></div>
                        <form class="form-horizontal" action="@{{profile.formpath}}" method="post">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                                <div class="col-md-6">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">


                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block width-100 bg-grey-100">
                                                <i class="fa fa-photo text-light"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <input type="file" class="btn btn-white btn-sm paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated> Add Image<i class="fa fa-upl"></i></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <input type="text" class="form-control" id="exampleInputFirstName" name="name" value="@{{profile.name}}" placeholder="aslkdj">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                                <div class="col-md-6">
                                    <div class="form-control-material">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" class="form-control" name="email" id="inputEmail3" value="@{{ profile.email }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-md-2 control-label">Change Password</label>
                                <div class="col-md-6">
                                    <div class="form-control-material">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        <label for="inputPassword3">Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group margin-none">
                                <div class="col-md-offset-2 col-md-10">
                                    <button type="submit"  class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                                </div>
                            </div>
                        </form>
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
<script src="js/app/profile.js"></script>


@endsection