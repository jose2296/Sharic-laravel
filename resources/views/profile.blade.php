@extends('layouts.app')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@section('content')

    <div class="container  ">

    <div class="col-lg-12 col-sm-12">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="{{$info->avatar}}">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">

                <img alt="" src="{{$info->avatar}}">
            </div>
            <div class="card-info"> <span class="card-title">{{$user->name}}</span>

            </div>
        </div>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="desc" class="btn btn-primary active" href="#tab1" data-toggle="tab"><i class="fas fa-user"></i>
                    <div class="hidden-xs">Description</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="top" class="btn btn-default" href="#tab2" data-toggle="tab"><i class="fas fa-music"></i>
                    <div class="hidden-xs">Top Song</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="play" class="btn btn-default" href="#tab3" data-toggle="tab"><i class="fas fa-play"></i>
                    <div class="hidden-xs">Playlists</div>
                </button>
            </div>
        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <h3>This is tab 1</h3>
                </div>
                <div class="tab-pane fade in" id="tab2">
                    <h3>This is tab 2</h3>
                </div>
                <div class="tab-pane fade in" id="tab3">
                    <h3>This is tab 3</h3>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection