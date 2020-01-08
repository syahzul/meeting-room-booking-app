<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rooms = Room::orderBy('name')->paginate(6);

        return view('rooms.index', compact('rooms'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $input = request()->all();

        $this->validator($input)->validate();

        auth()->user()->rooms()->create($input);

        flash()->success('Room added!');

        return redirect()->route('rooms.index');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'capacity' => ['required', 'integer', 'max:100'],
            'projector' => ['required', 'boolean'],
            'flip_chart' => ['required', 'boolean'],
            'wifi' => ['required', 'boolean'],
        ]);
    }
}
