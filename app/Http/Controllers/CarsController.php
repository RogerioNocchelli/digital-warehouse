<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarsFormRequest;
use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
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
        $cars = Cars::query()->paginate(4);

        $message = $request->session()->get('message');

        return view('cars/cars', compact('cars', 'message'));
    }

    public function create()
    {
        return view('cars/create');
    }

    public function store(CarsFormRequest $request)
    {
        Cars::create($request->all());

        $this->createFlashMessage($request, 'Registro adicionado com sucesso!');

        return redirect('/veiculos');
    }

    public function edit(Request $request)
    {
        $car = Cars::find($request->id);

        return view('cars/edit', compact('car'));
    }

    public function save(Request $request)
    {
        $car = Cars::find($request->id);

        $car->vehicle_brand = $request->vehicle_brand;
        $car->vehicle_model = $request->vehicle_model;
        $car->vehicle_year_manufacture = $request->vehicle_year_manufacture;
        $car->cart_capacity = $request->cart_capacity;
        $car->cart_number_axles = $request->cart_number_axles;
        $car->is_active = $request->is_active;

        $car->save();

        $this->createFlashMessage($request, 'Registro editado com sucesso!');

        return redirect('/veiculos');
    }

    public function destroy(Request $request)
    {
        Cars::destroy($request->id);

        $this->createFlashMessage($request, 'Registro excluído com sucesso!');

        return redirect('/veiculos');
    }

    private function createFlashMessage($request, $message)
    {
        return $request->session()->flash('message', $message);
    }
}
