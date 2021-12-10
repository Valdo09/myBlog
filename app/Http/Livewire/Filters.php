<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Filters extends Component
{
    public $categories;
    public $activeFilters=[];
    public function render()
    {
        $this->activeFilters=array_filter($this->activeFilters,function($val){
            return $val;
        });
        if(empty($this->activeFilters))
        {
            $articles=Article::all();
        }
        else
        {
            $articles=Article::whereIn('category_id',array_keys($this->activeFilters))->get();
        }
        return view('livewire.filters',[
            'articles'=>$articles
        ]);
    }
}
