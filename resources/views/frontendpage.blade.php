@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @guest
                <div class="row">
                    <div class="col-xs-6">
                        <a href="{{ route('login') }}" class="btn btn-block btn-success">
                            Login
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a href="{{ route('register') }}" class="btn btn-block btn-info">Register</a>
                    </div>
                </div>
                @else
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif                        
                        <div class="card border-info">
                            <div class="card-body">
                                <blockquote class="card-blockquote">
                                    <p>You are logged in!</p>
                                    <footer>Some text on the footer <cite title="Source Title">Cited text</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <blockquote class="card-blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>This is the FRONT END part of the <cite title="Source Title">APP</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection
