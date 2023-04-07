<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Parliament Days') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 w-full">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="50"
                                                    class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                                    Dates
                                                </th>

                                                @for ($i = 1; $i <= $colNum; $i++)
                                                    <th scope="col" width="20"
                                                        class="px-1 py-1 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5">
                                                        {{ $i }}</th>
                                                @endfor
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <td class="divide-x divide-gray-200">
                                                <div
                                                    class="px-6 py-0.5 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider center-content">
                                                    Day
                                                </div>
                                            </td>

                                            @for ($i = 1; $i <= $colNum; $i++)
                                                <td>
                                                    <div
                                                        class=" @if ($daysNamePerMonth[$i - 1] == 'S') bg-blue-200  @else bg-gray-100 @endif  text-center text-xs font-medium text-gray-500 uppercase">
                                                        <span> {{ $daysNamePerMonth[$i - 1] }} </span>
                                                    </div>
                                                </td>
                                            @endfor

                                            <tr>
                                                <td class=" ">
                                                    <div
                                                        class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                                        {{-- {{ $user->name }} --}}
                                                    </div>
                                                </td>

                                                {{-- {{ dd($parliamentsessiondays->where('session_date', $dates[16])) }}

    {{ dd($parliamentsessiondays) }}
    {{ dd($dates) }} --}}

                                                @for ($i = 1; $i <= $colNum; $i++)
                                                    <td class=" ">
                                                        <div
                                                            class="custom-control custom-checkbox flex justify-center py-1">
                                                            <input name="sessiondays[{{ $dates[$i - 1] }}]"
                                                                type="checkbox"
                                                                class="custom-control-input items-center px-1 py-1 text-indigo-600"
                                                                id="check-{{ $dates[$i - 1] }}"
                                                                aria-describedby="group_id" value="{{ $dates[$i - 1] }}"
                                                                @if (in_array($dates[$i - 1], $parliamentsessiondays->pluck('session_date')->toArray())) checked @endif>
                                                            {{-- <input name="dayoff[{{ $parliamentsessiondays->id }}][session_date][{{ $dates[$i - 1] }}]" type="checkbox"
                    class="custom-control-input items-center px-1 py-1 text-indigo-600"
                    id="check-{{ $parliamentsessiondays->session_date }}-{{ $dates[$i - 1] }}" aria-describedby="group_id"
                    value="{{ $dates[$i - 1] }}"
                    @isset($parliamentsessiondays->session_date) @if (in_array($dates[$i - 1], $parliamentsessiondays->pluck('session_date')->toArray())) checked @endif @endisset> --}}
                                                        </div>
                                                    </td>
                                                @endfor

                                            </tr>

                                            {{-- @include('calendar/onerow', [
                                                $parliamentsessiondays,
                                                $colNum,
                                                $dates,
                                            ]) --}}

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
