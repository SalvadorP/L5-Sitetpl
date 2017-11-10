@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
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
                                <p>@lang('messages.welcome1')</p>
                                <footer>@lang('messages.welcome2') <cite title="Source Title">@lang('messages.welcome3')</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card text-white bg-info">
                        <div class="card-body">
                            <blockquote class="card-blockquote">
                            <p>@lang('messages.welcome4')</p>
                            <footer>@lang('messages.welcome5') <cite title="Source Title">@lang('messages.welcome6')</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card border-info">
                        <div class="card-body">
                            <blockquote class="card-blockquote">
                                <ul class="list-group">
                                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                  <li class="list-group-item">
                                    <span class="tag tag-default tag-pill float-xs-left"><i class="{{ $properties['class'] }}"></i></span>
                                      <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                      </a>
                                  </li>
                                  @endforeach
                                </ul>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
