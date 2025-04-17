<?php

namespace App\Livewire\FrontEnd;

use Livewire\Component;
use App\Models\Contacts;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class Contact extends Component
{
    public $name = '';
    public $phone = '';
    public $email = '';
    public $company = '';
    public $position = '';
    public $city = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'company' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        $referralCode = request()->cookie('referral_code');
        Log::info('Referral Code from Cookie:', ['code' => $referralCode]);

        $marketer = \App\Models\Marketer::where('referral_code', $referralCode)->first();
        Log::info('Marketer Found:', ['marketer' => $marketer]);

        Contacts::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'company' => $this->company,
            'position' => $this->position,
            'city' => $this->city,
            'message' => $this->message,
            'marketer_id' => $marketer?->id,
        ]);

        session()->flash('message', __('share.message.create'));
        flash()->addSuccess(__('share.message.create'));

        $this->reset(['name', 'phone', 'email', 'company', 'position', 'city', 'message']);

        if ($referralCode) {
            Cookie::queue(Cookie::forget('referral_code'));
        }
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.front-end.contact');
    }
}
