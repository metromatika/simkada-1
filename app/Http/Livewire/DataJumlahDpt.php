<?php

namespace App\Http\Livewire;

use App\Models\JumlahDPT;
use LaravelViews\Facades\Header;
use LaravelViews\Facades\UI;
use LaravelViews\Views\TableView;
use LaravelViews\Views\Traits\WithAlerts;
use App\Actions\DeleteAction;

class DataJumlahDpt extends TableView
{
    use WithAlerts;
    /**
     * Sets a model class to get the initial data
     */
    protected $model = JumlahDPT::class;
    public $searchBy = ['village_id'];
    protected $paginate = 10;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            'Kelurahan',
            'L (orang)',
            'P (orang)',
            'Total (orang)'
        ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->village->name,
            UI::editable($model, 'dpt_l'),
            UI::editable($model, 'dpt_p'),
            $model->dpt_jumlah
        ];
    }
    public function update(JumlahDPT $model, $data)
    {
        $model->update(collect($data)->map(function ($value) {
            return strip_tags($value);
        })->toArray());
        $this->success('Data Jumlah DPT, Berhasil diperbaharui!');
    }
    protected function actionsByRow()
    {
        return [
            new DeleteAction,
        ];
    }
}
