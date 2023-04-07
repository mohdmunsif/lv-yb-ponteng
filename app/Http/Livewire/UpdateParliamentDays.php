<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Str;
use Livewire\WithPagination;
use function view;
use Illuminate\Support\Facades\Log;


use App\Models\Entity;
use App\Models\ParliamentSessionDay;

use Carbon\Carbon;
use Carbon\CarbonPeriod;


class UpdateParliamentDays extends Component
{
    use WithPagination;

    public Entity $entity;

    public array $active;

    public int $editedEntityGroupId = 0;

    public bool $showModal = false;

    protected $listeners = ['delete'];


    public $colNum;
    public $dates;
    public $month;
    public $monthName;
    public $year;
    public $nextyear;
    public $nextmonth;
    public $prevyear;
    public $prevmonth;
    public $daysNamePerMonth;


    public array $arr_entity_groups = [];

    public $entities;
    public $grouplist;
    public $entityGroups;

    public $parliamentDays;


    public function mount(ParliamentSessionDay $parliamentDays)
    {

        // $this->parliamentDays = $parliamentDays;

        $this->parliamentDays = ParliamentSessionDay::all();
        // $this->parliamentDays = ParliamentSessionDay::whereBetween('session_date',[$dateStart,$dateEnd])->get();

        // $this->entity = $entity;
        // $this->entity = $entity;
        // $this->entities = Entity::all();
        // $this->grouplist = Group::all();
        // $this->entityGroups = EntityGroup::all()->sortBy([['group_id', 'asc'], ['entity_id', 'asc']]);
        // $setOfEntityIds = $this->entities->pluck('id')->toArray();
        // $setOfGroupIds = $this->grouplist->pluck('id')->toArray();

        // $this->arr_entity_groups = array_fill_keys($setOfEntityIds, array_fill_keys($setOfGroupIds, false));


        // foreach ($this->entityGroups as $singleEntityGroup) {
        //     $this->arr_entity_groups[$singleEntityGroup->entity_id][$singleEntityGroup->group_id] = true;
        // };
    }

    public function render()
    {

        return view('livewire.update-parliament-days', [
            'parliamentDays' => $this->parliamentDays,
        ]);

        // return view('livewire.entity-group-list', [
        //     'entities' => $this->entities,  'grouplist' => $this->grouplist, 'entityGroups' => $this->entityGroups,  'arr_entity_groups' => $this->arr_entity_groups,
        // ]);
    }


    public function dehydrate()
    {
        // dd($this->arr_entity_groups);
    }

    public function save()
    {
        $this->validate();

        if ($this->editedEntityGroupId === 0) {
            $this->group->position = Group::max('position') + 1;
        }

        $this->group->save();

        $this->reset('showModal', 'editedEntityGroupId');
    }


    public function editGroup($entityGroupId)
    {
        $this->editedEntityGroupId = $entityGroupId;

        $this->group = Group::find($entityGroupId);
    }

    public function cancelGroupEdit()
    {
        $this->reset('editedEntityGroupId');
    }

    public function deleteConfirm($method, $id = null)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type'  => 'warning',
            'title' => 'Are you sure?',
            'text'  => '',
            'id'    => $id,
            'method' => $method,
        ]);
    }

    public function delete($id)
    {
        Group::findOrFail($id)->delete();
    }


    public function updateOrder($list)
    {
        foreach ($list as $item) {
            $cat = $this->groups->firstWhere('id', $item['value']);

            if ($cat['position'] != $item['order']) {
                Group::where('id', $item['value'])->update(['position' => $item['order']]);
            }
        }
    }

    protected function rules(): array
    {
        return [
            'group.name'     => ['required', 'string', 'min:3'],
            'group.slug'     => ['nullable', 'string'],
            'group.position' => ['nullable', 'integer'],
        ];
    }


    public function getMaxDay($year, $month)
    {
        $date = Carbon::createFromDate($year, $month, 1);
        $maxDay = $date->format('t');
        return $maxDay;
    }

    function getWeekday($date)
    {
        return date('w', strtotime($date));
    }


    public function updatedArrEntityGroups($value)
    {
        $arrGroups = [];

        $setOfEntityIds = $this->entities->pluck('id')->toArray();
        $setOfGroupIds = $this->grouplist->pluck('id')->toArray();

        // $this->arr_entity_groups = array_fill_keys($setOfEntityIds, array_fill_keys($setOfGroupIds, false));

        // dd($this->arr_entity_groups);

        foreach ($setOfEntityIds as $singleEntityId) {
            foreach ($setOfGroupIds as $singleGroupId) {

                if ($this->arr_entity_groups[$singleEntityId][$singleGroupId]) {
                    array_push($arrGroups, $singleGroupId);
                };
            }

            Log::info('Single Entity ID: ' . $singleEntityId);
            Log::info('Array Group: ' . implode(";", $arrGroups));
            // dd($singleEntityId);

            // $tempEntity = Entity::find($singleEntityId)->first();
            $tempEntity = Entity::find($singleEntityId);

            // $tempEntity->groups()->syncWithPivotValues($arrGroups,[]);
            // $tempEntity->groups()->syncWithPivotValues([1,3,5],[]);

            $tempEntity->groups()->sync($arrGroups);
            // $tempEntity->groups()->syncWithoutDetaching([1,2]);
            $arrGroups = [];
        }

        // foreach ($this->entityGroups as $singleEntityGroup) {

        //     // $this->entity = Entity::find($singleEntityGroup);

        //     $tempEntity = Entity::find($singleEntityGroup)->first();

        //     $arrGroups = [];

        //     if ($this->arr_entity_groups[$singleEntityGroup->entity_id][$singleEntityGroup->group_id]) {
        //         array_push($arrGroups, $singleEntityGroup->group_id);
        //     };

        //     $tempEntity->groups()->sync($arrGroups);

        // };




        $carbonYearMonth = Carbon::create($year, $month);
        $monthName = $carbonYearMonth->translatedFormat('F');

        $prevDate = Carbon::create($year, $month)->subMonth();
        $nextDate = Carbon::create($year, $month)->addMonth();

        //        get the following by passing function parameter
        $columnNum = $this->getMaxDay($year, $month);

        //        generate the period of that month
        $period = CarbonPeriod::create($year . '-' . $month . '-' . '01', $year . '-' . $month . '-' . $columnNum);

        $dateStart = Carbon::create($year . '-' . $month . '-' . '01');
        $dateEnd = Carbon::create($year . '-' . $month . '-' . $columnNum);

        // Iterate over the period
        //        foreach ($period as &$date) {
        //            $date = $date->format('Y-m-d');
        //        }

        // Convert the period to an array of dates, along with the array of Day for the date
        $dates = $period->toArray();
        $daysNameArr = array('S', 'M', 'T', 'W', 'Th', 'F', 'S'); //this is the days per week, Sunday is Day 0, Saturday is Day 6
        $daysNamePerMonth = array(); //empty array

        for ($i = 0; $i < sizeof($dates); $i++) {
            $temp = $dates[$i];
            $dates[$i] = $temp->toDateString();

            //            populate the dayname array corresponding to the array of dates
            array_push($daysNamePerMonth, $daysNameArr[$this->getWeekday($dates[$i])]);
        }

        // dd(ParliamentSessionDay::whereBetween('session_date',[$dateStart,$dateEnd])->get());

    }
}
