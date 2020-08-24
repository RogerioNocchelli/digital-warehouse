<?php

namespace App\Http\Controllers;

use App\Drivers;
use App\Http\Requests\DriversFormRequest;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $drivers = Drivers::query()->paginate(4);

        $message = $request->session()->get('message');

        return view('drivers/drivers', compact('drivers', 'message'));
    }

    public function create()
    {
        return view('drivers/create');
    }

    public function store(DriversFormRequest $request)
    {
        Drivers::create($request->all());

        $this->createFlashMessage($request, 'Registro adicionado com sucesso!');

        return redirect('/motoristas');
    }

    public function edit(Request $request)
    {
        $driver = Drivers::find($request->id);

        return view('drivers/edit', compact('driver'));
    }

    public function save(Request $request)
    {
        $driver = Drivers::find($request->id);

        $driver->name = $request->name;
        $driver->phone_number = $request->phone_number;
        $driver->zip_code = $request->zip_code;
        $driver->street = $request->street;
        $driver->number = $request->number;
        $driver->neighborhood = $request->neighborhood;
        $driver->city = $request->city;
        $driver->state = $request->state;
        $driver->is_active = $request->is_active;
        $driver->save();

        $this->createFlashMessage($request, 'Registro editado com sucesso!');

        return redirect('/motoristas');
    }

    public function destroy(Request $request)
    {
        Drivers::destroy($request->id);

        $this->createFlashMessage($request, 'Registro excluído com sucesso!');

        return redirect('/motoristas');
    }

    private function createFlashMessage($request, $message)
    {
        return $request->session()->flash('message', $message);
    }
}
