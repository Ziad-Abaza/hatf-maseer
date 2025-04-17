<?php

namespace App\Http\Controllers\Dash;

use App\Models\Marketer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class MarketerController extends Controller
{
    public function __construct()
    {
        // Protect routes with permissions
        $this->middleware('permission:marketer-list')->only(['index']);
        $this->middleware('permission:marketer-create')->only(['create', 'store']);
        $this->middleware('permission:marketer-edit')->only(['edit', 'update']);
        $this->middleware('permission:marketer-delete')->only(['destroy']);
    }

    /**
     *  Display a listing of the resource.
     */
    public function index()
    {
        $marketers = Marketer::paginate(10);
        return view('dash.marketers.index', compact('marketers'));
    }

    /**
     * to show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.marketers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|unique:marketers,phone',
        ]);

        $asciiName = Str::ascii($request->name);
        $nameInitials = strtoupper(substr(preg_replace('/[^A-Za-z]/', '', $asciiName), 0, 2));

        $day = now()->format('d');

        $phone = preg_replace('/\D/', '', $request->phone);
        $lastTwoPhoneDigits = substr($phone, -2);

        $referralCode = $day . $lastTwoPhoneDigits . $nameInitials;

        Marketer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'referral_code' => $referralCode,
        ]);

        session()->flash('message', __('share.message.create'));
        return redirect()->route('marketers.index')->with('success', __('share.message.create'));
    }


    /**
     * show the specified resource.
     */
    public function show(Marketer $marketer)
    {
        return view('dash.marketers.show', compact('marketer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marketer $marketer)
    {
        return view('dash.marketers.edit', compact('marketer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marketer $marketer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|unique:marketers,phone,' . $marketer->id,
        ]);

        $marketer->update([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        session()->flash('message', __('share.message.update'));
        return redirect()->route('marketers.index')->with('success', __('share.message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marketer $marketer)
    {
        $marketer->delete();
        session()->flash('message', __('share.message.delete'));
        return redirect()->route('marketers.index')->with('success', __('share.message.delete'));
    }
}
