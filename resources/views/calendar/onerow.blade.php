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
            <div class="custom-control custom-checkbox flex justify-center py-1">
                <input name="sessiondays[{{ $dates[$i - 1] }}]" type="checkbox"
                    class="custom-control-input items-center px-1 py-1 text-indigo-600" id="check-{{ $dates[$i - 1] }}"
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
