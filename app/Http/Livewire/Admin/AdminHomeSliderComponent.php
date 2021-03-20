<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;

class AdminHomeSliderComponent extends Component
{
    public function deleteSlide($slide_id) {
    	$slider = HomeSlider::find($slide_id);
    	$slider->delete();
    	session()->flash('message', 'Slide has been deleted successfully!');
    }

    public function render()
    {
    	$sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component', ['sliders' => $sliders])->layout('layouts.base');
    }
}
