@extends('layouts.dashboard')
@section('content')
    <section class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    @if($user->is_super_admin)
                        <x-dashboard.registration-form />
                    @elseif($user->is_staff)
                <x-dashboard.teachers-dashboard name="{{$user->name}}"/>
                    @else
                        <x-dashboard.student-dashboard name="{{$user->name}}" reg="{{$user->registration_number}}"/>
                    @endif
        </div>
    </section>

@endsection


