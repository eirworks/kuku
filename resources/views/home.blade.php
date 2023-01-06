@extends('layouts.front')

@section('content')
    <div class="w-3/6 m-auto">
        <div class="text-center mb-3">@lang('Shorten a long URL')</div>
        @livewire('link-form')
    </div>
@endsection
