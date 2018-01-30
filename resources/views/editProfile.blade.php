@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit profile</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/profile">
                            {{ csrf_field() }}

                                <label for="email" class="col-md-4 control-label">Edit Top Songs</label>
                                <div class="col-md-6">
                                    <input id="topSongs" type="text" class="form-control" name="topSongs" autofocus>
                                </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save changes
                                   </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
