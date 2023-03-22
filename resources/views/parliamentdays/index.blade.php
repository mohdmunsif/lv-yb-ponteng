<div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="flex">
        <div class="block mb-8">
            <a href="http://192.168.0.8/calendar/create"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Do something</a>
        </div>
        <div class="block mb-8">
            <a href="http://192.168.0.8/calendar/create"
                class="bg-red-500 hover:bg-red-700 text-white text-center py-2 px-4 rounded">Lock Calendar</a>
        </div>
    </div>

    <h4 class="text-3xl font-normal leading-normal mt-0 mb-2 text-pink-800">
        Month: March - 2023
    </h4>
    <nav aria-label="navigation">
        <ul class="pagination">
            <a href="http://192.168.0.8/calendar/2023/2"
                class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Previous</span>
                <!-- Heroicon name: solid/chevron-left -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="http://192.168.0.8/calendar/2023/4"
                class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Next</span>
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </ul>
    </nav>

    <form method="POST" action="http://192.168.0.8/calendar/2023/3">
        <input type="hidden" name="_token" value="lmp0P0BmmxKq6fNL09Nibb6JjRRasJ46zz8JVZcD"> <input type="hidden"
            name="_method" value="PATCH">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                            <thead>
                                <tr>
                                    <th scope="col" width="50"
                                        class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        UserId / Dates
                                    </th>

                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        1</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        2</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        3</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        4</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        5</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        6</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        7</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        8</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        9</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        10</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        11</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        12</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        13</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        14</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        15</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        16</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        17</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        18</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        19</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        20</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        21</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        22</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        23</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        24</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        25</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        26</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        27</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        28</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        29</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        30</th>
                                    <th scope="col" width="20"
                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                        31</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="divide-x divide-gray-200">
                                        <div
                                            class="bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            Day
                                        </div>
                                    </td>

                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> W </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> Th </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> F </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-blue-200    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> S </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-blue-200    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> S </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> M </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> T </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> W </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> Th </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> F </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-blue-200    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> S </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-blue-200    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> S </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> M </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> T </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> W </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> Th </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> F </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-blue-200    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> S </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-blue-200    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> S </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> M </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> T </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> W </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> Th </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> F </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-blue-200    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> S </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-blue-200    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> S </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> M </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> T </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> W </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> Th </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="  bg-gray-100    text-center text-xs font-medium text-gray-500 uppercase">
                                            <span> F </span>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            Admin
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[1][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-1-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            Owner
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[2][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-2-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            Manager
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[3][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-3-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            Staff
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[4][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-4-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            Volunteer
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[5][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-5-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            User01
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[6][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-6-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31" checked="">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            User02
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[7][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-7-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            User03
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[8][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-8-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            User04
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[9][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-9-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class=" ">
                                        <div
                                            class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                            User05
                                        </div>
                                    </td>

                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-01]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-01" aria-describedby="group_id"
                                                value="2023-03-01">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-02]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-02" aria-describedby="group_id"
                                                value="2023-03-02">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-03]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-03" aria-describedby="group_id"
                                                value="2023-03-03">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-04]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-04" aria-describedby="group_id"
                                                value="2023-03-04">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-05]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-05" aria-describedby="group_id"
                                                value="2023-03-05">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-06]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-06" aria-describedby="group_id"
                                                value="2023-03-06">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-07]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-07" aria-describedby="group_id"
                                                value="2023-03-07">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-08]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-08" aria-describedby="group_id"
                                                value="2023-03-08">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-09]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-09" aria-describedby="group_id"
                                                value="2023-03-09">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-10]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-10" aria-describedby="group_id"
                                                value="2023-03-10">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-11]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-11" aria-describedby="group_id"
                                                value="2023-03-11">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-12]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-12" aria-describedby="group_id"
                                                value="2023-03-12">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-13]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-13" aria-describedby="group_id"
                                                value="2023-03-13">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-14]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-14" aria-describedby="group_id"
                                                value="2023-03-14">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-15]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-15" aria-describedby="group_id"
                                                value="2023-03-15">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-16]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-16" aria-describedby="group_id"
                                                value="2023-03-16">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-17]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-17" aria-describedby="group_id"
                                                value="2023-03-17">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-18]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-18" aria-describedby="group_id"
                                                value="2023-03-18">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-19]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-19" aria-describedby="group_id"
                                                value="2023-03-19">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-20]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-20" aria-describedby="group_id"
                                                value="2023-03-20">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-21]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-21" aria-describedby="group_id"
                                                value="2023-03-21">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-22]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-22" aria-describedby="group_id"
                                                value="2023-03-22" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-23]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-23" aria-describedby="group_id"
                                                value="2023-03-23">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-24]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-24" aria-describedby="group_id"
                                                value="2023-03-24">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-25]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-25" aria-describedby="group_id"
                                                value="2023-03-25">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-26]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-26" aria-describedby="group_id"
                                                value="2023-03-26">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-27]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-27" aria-describedby="group_id"
                                                value="2023-03-27" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-28]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-28" aria-describedby="group_id"
                                                value="2023-03-28">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-29]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-29" aria-describedby="group_id"
                                                value="2023-03-29">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-30]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-30" aria-describedby="group_id"
                                                value="2023-03-30" checked="">
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="custom-control custom-checkbox flex justify-center py-1">
                                            <input name="dayoff[10][date_booked][2023-03-31]" type="checkbox"
                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                id="check-10-2023-03-31" aria-describedby="group_id"
                                                value="2023-03-31">
                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
            <div class="flex justify-between flex-1 sm:hidden">
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    « Previous
                </span>

                <a href="http://192.168.0.8/calendar/2023/3?page=2"
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next »
                </a>
            </div>

            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700 leading-5">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">10</span>
                        of
                        <span class="font-medium">17</span>
                        results
                    </p>
                </div>

                <div>
                    <span class="relative z-0 inline-flex shadow-sm rounded-md">

                        <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                            <span
                                class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5"
                                aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </span>





                        <span aria-current="page">
                            <span
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                        </span>
                        <a href="http://192.168.0.8/calendar/2023/3?page=2"
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                            aria-label="Go to page 2">
                            2
                        </a>


                        <a href="http://192.168.0.8/calendar/2023/3?page=2" rel="next"
                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                            aria-label="Next &amp;raquo;">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </nav>

        <button type="submit"
            class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 mt-3 rounded">Submit</button>
    </form>

</div>
