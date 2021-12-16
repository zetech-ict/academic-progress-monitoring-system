<div class="max-w-3xl mx-auto space-y-6">
    <div class="bg-indigo-700 text-white p-3">
        <h1 class="font-bold">EDIT STUDENT'S PERFORMANCE</h1>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="#">
        @csrf
        <div class="flex space-x-1 items-center p-2">
            <label class="text-white text-lg">Student ID:</label>
            <input type="text" name="admission" value="{{old('admission', $student->admission)}}">
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
</div>
