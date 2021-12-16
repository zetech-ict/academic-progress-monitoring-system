@extends('layouts.dashboard')
@section('content')
    <section class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    @if($user->is_super_admin)
                        <x-dashboard.registration-form />
                    @elseif($user->is_staff)
                <x-dashboard.teachers-dashboard :user="$user"/>
                    @else
                        <x-dashboard.student-dashboard
                            name="{{$user->name}}"
                            reg="{{$user->registration_number}}"
                            comment="{{$student->comment}}"
                            course="{{$student->course}}"
                            unit1="{{$student->unit1}}"
                            marks1="{{$student->marks1}}"
                            unit2="{{$student->unit2}}"
                            marks2="{{$student->marks2}}"
                            unit3="{{$student->unit3}}"
                            marks3="{{$student->marks3}}"
                            unit4="{{$student->unit4}}"
                            marks4="{{$student->marks4}}"
                            unit5="{{$student->unit5}}"
                            marks5="{{$student->marks5}}"
                            image="{{$student->image_link}}"

                        />
                    @endif
        </div>
    </section>

@endsection


