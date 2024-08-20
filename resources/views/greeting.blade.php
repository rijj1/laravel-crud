@extends('layouts.master')

@section('content')
<div class="mt-2">
    <a href="{{ route('greeting', 'en') }}" class="btn btn-primary">English</a>
    <a href="{{ route('greeting', 'hi') }}" class="btn btn-danger">Hindi</a>
</div>
<div class="display-3 mt-2">{{ __('frontend.Welcome to our Website') }}</div>
<p>{{ __('frontend.Heading Paragraph') }}</p>
<div class="row">
    <ul class="row">
        <li>{{ __('frontend.Home') }}</li>
        <li>{{ __('frontend.About') }}</li>
        <li>{{ __('frontend.Contact') }}</li>
        <li>{{ __('frontend.More') }}</li>
    </ul>
</div>
@endsection
