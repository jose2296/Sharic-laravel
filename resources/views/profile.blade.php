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
            <div class="card-info"> <span class="">{{$user->name}}</span>

            </div>
        </div>


        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#topsongs" role="tab">Top Songs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#playlist" role="tab">Playlists</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="description" role="tabpanel">{{$info->info}}</div>
            <div class="tab-pane fade in " id="topsongs" role="tabpanel">Top Songs 2</div>
            <div class="tab-pane fade in " id="playlist" role="tabpanel">Playlist 3</div>
        </div>


    </div>
    </div>
@endsection