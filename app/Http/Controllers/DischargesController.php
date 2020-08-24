<?php


namespace App\Http\Controllers;

use App\Discharge;
use App\Drivers;
use App\Http\Requests\DischargesFormRequest;
use App\Products;
use App\Cars;
use Illuminate\Http\Request;

class DischargesController extends Controller
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
        $discharges = Discharge::query()->orderBy('created_at')->get();

        $message = $request->session()->get('message');

        return view('discharges/discharges', compact('discharges', 'message'));
    }

    public function create()
    {
        $drivers = Drivers::all(['name', 'document_number', 'id', 'is_active']);
        $cars = Cars::all(['vehicle_brand', 'vehicle_model', 'id', 'vehicle_license_plate', 'is_active']);
        $products = Products::all(['name', 'id', 'is_active']);

        return view('discharges/create', compact('drivers', 'cars', 'products'));
    }

    public function store(DischargesFormRequest $request)
    {
        Discharge::create($request->all());

        $this->createFlashMessage($request, 'Registro adicionado com sucesso!');

        return redirect('/descarregamentos');
    }

    public function destroy(Request $request)
    {
        Discharge::destroy($request->id);

        $this->createFlashMessage($request, 'Registro excluído com sucesso!');

        return redirect('/descarregamentos');
    }

    private function createFlashMessage($request, $message)
    {
        return $request->session()->flash('message', $message);
    }
}
