
<div class="flex">
    <div>
        <img class="w-48 h-48 object-cover object-center rounded-full" src="{{$image}}" >
        <div class="bg-indigo-700 mt-10">
            <p class="text-white text-lg px-5 py-2">Name: <span>{{$name}}</span></p>
            <p class="text-white text-lg px-5 py-2">Admission: <span>{{$reg}}</span></p>
            <p class="text-white text-lg px-5 py-2">Course: <span>{{$course}}</span></p>
            <p>{{$studentName}}</p>
        </div>
    </div>

    <div class="max-w-3xl mx-auto space-y-6">

        <div class="bg-indigo-700 text-white p-3">
            <h1 class="font-bold">CURRENT SEMESTER PERFORMANCE</h1>
        </div>
        <div class="flex space-x-10 text-white text-lg justify-evenly">
            <div class="bg-indigo-700 p-2">{{$unit1}}</div>
            <div class="bg-indigo-700 p-2">{{$unit2}}</div>
            <div class="bg-indigo-700 p-2">{{$unit3}}</div>
            <div class="bg-indigo-700 p-2">{{$unit4}}</div>
            <div class="bg-indigo-700 p-2">{{$unit5}}</div>
        </div>
        <div class="flex space-x-10 text-black text-lg justify-evenly mt-1 pb-20">
            <div class="bg-white px-4 py-2">{{$marks1}}</div>
            <div class="bg-white px-4 py-2">{{$marks2}}</div>
            <div class="bg-white px-4 py-2">{{$marks3}}</div>
            <div class="bg-white px-4 py-2">{{$marks4}}</div>
            <div class="bg-white px-4 py-2">{{$marks5}}</div>
        </div>

        <div class="bg-white p-6 mt-10">
            <p>{{$comment}}</p>
        </div>
    </div>

    <div class="bg-white px-2 py-1">
        <div class="bg-indigo-700 py-2 px-4 text-white text-lg">Grading System</div>
        <div class="mt-5">
            <div class="flex justify-between text-lg font-semibold pr-5">
                <p>100-80</p>
                <span>A</span>
            </div>
            <div class="flex justify-between text-lg font-semibold pr-5">
                <p>79-65</p>
                <span>B</span>
            </div>
            <div class="flex justify-between text-lg font-semibold pr-5">
                <p>64-45</p>
                <span>C</span>
            </div>
            <div class="flex justify-between text-lg font-semibold pr-5">
                <p>54-35</p>
                <span>D</span>
            </div>
            <div class="flex justify-between text-lg font-semibold pr-5">
                <p>34-25</p>
                <span>E</span>
            </div>
            <div class="flex justify-between text-lg font-semibold pr-5">
                <p>24-0</p>
                <span>F</span>
            </div>
        </div>
    </div>

</div>
