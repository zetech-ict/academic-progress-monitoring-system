<div class="flex">
    <div>
    <img class="w-48 h-48 object-cover object-center rounded-full" src="{{$user->image_link}}" />

    <div class="text-white">
        <p class="text-white text-lg py-2">Welcome <span>{{$user->name}}</span></p>
    </div>
</div>


<div class="max-w-3xl mx-auto space-y-6">
    <div class="bg-indigo-700 text-white p-3">
        <h1 class="font-bold">ENTER STUDENT'S PERFORMANCE</h1>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div>
       <a href="#">
           <button class="text-base px-5 py-1 rounded-lg py-5 bg-blue-600 text-white">Edit Student</button>
       </a>
    </div>
    <form method="POST" action="{{route('save_student')}}">
        @csrf
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Student ID:</label>
            <input type="text" name="admission">
        </div>

        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Course</label>
            <input type="text" name="course">
        </div>

        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit ID 1:</label>
            <input type="text" name="unit1">
        </div>
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit Marks 1:</label>
            <input type="text" name="marks1">
        </div>
{{--        2--}}
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit ID 2:</label>
            <input type="text" name="unit2">
        </div>
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit Marks 2:</label>
            <input type="text" name="marks2">
        </div>
{{--        3--}}
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit ID 3:</label>
            <input type="text" name="unit3">
        </div>
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit Marks 3:</label>
            <input type="text" name="marks3">
        </div>

        {{--        4--}}
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit ID 4:</label>
            <input type="text" name="unit4">
        </div>
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit Marks 4:</label>
            <input type="text" name="marks4">
        </div>

        {{--        5--}}
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit ID 5:</label>
            <input type="text" name="unit5">
        </div>
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Unit Marks 5:</label>
            <input type="text" name="marks5">
        </div>

        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Comment:</label>
            <textarea rows="4" cols="50" placeholder="Add comment" name="comment"></textarea>
        </div>
        <div>
            <button class="px-5 py-2 text-base rounded-lg bg-green-500 text-white mt-5" type="submit">Submit</button>
        </div>
    </form>

    <div class="bg-white p-6">
    <form class="space-y-3" method="POST" action="{{ route('save_student') }}">
        @csrf

        <div class="grid grid-cols-3">
            <x-label for="admission" class="text-gray-700 col-span-1" :value="__('Student ID:')" />
            <x-input id="admission" class="col-span-2 block mt-1 w-full" type="text" name="admission" :value="old('admission')" autofocus />
        </div>
        <div class="grid grid-cols-3">
            <x-label for="email" class="text-gray-700 col-span-1" :value="__('Email')" />
            <x-input id="email" class="col-span-2 block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>
        <div class="grid grid-cols-3">
            <x-label for="name" class="text-gray-700 col-span-1" :value="__('Name')" />
            <x-input id="name" class="col-span-2 block mt-1 w-full" type="text" name="name" :value="old('name')" required />
        </div>
        <div class="grid grid-cols-3">
            <x-label for="password" class="text-gray-700 col-span-1" :value="__('Password')" />
            <x-input id="password" class="col-span-2 block mt-1 w-full" type="password" name="password" :value="old('password')" required />
        </div>

        <div class="flex space-x-1 items-center p-2">
            <x-label for="comment" class="text-gray-700 col-span-1 pr-44" :value="__('Comment:')" />
            <textarea rows="4" cols="50" placeholder="Add comment" name="comment"></textarea>
        </div>

        <div class="grid grid-cols-3">
            <div class="col-span-1"></div>
            <div class="col-span-2 flex justify-end">
                <x-button class="bg-indigo-600 hover:bg-indigo-800">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </div>
    </form>
    </div>
</div>


</div>

