<?php

namespace App\Http\Livewire;

use App\Form;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAlumni extends Component
{
    use WithPagination;

    public $alumni;

    public function mount(){
        $data = Form::with([
            'pertanyaan', 'penjawab', 'penjawab.jawaban',
            'penjawab.jawaban.pertanyaan'
            ])->where('id', 70)->first();

        $data->pertanyaan = $data->pertanyaan->sortBy('sorting')->all();
        $data['inputdeadline'] = join("T", explode(" ", $data->deadline));

        $table = [];

        foreach($data->penjawab as $index=>$entry){
            $array = [
                'nama' => $entry->jawaban[0]->jawaban,
                'email' => $entry->jawaban[1]->jawaban,
                'linkedin' => $entry->jawaban[2]->jawaban,
                'pekerjaan' => $entry->jawaban[11]->jawaban
            ];
            array_push($table, $array);
        };

        $this->alumni = $table;
    }

    public function render()
    {
        $data = collect($this->alumni);

        return view('livewire.show-alumni', [
            'alumnis' => $data->paginate(5),
        ]);
    }
}
