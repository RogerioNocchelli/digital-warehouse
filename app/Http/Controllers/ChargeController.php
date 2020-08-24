<?php


namespace App\Http\Controllers;


use App\Charge;
use App\Drivers;
use App\Http\Requests\ChargeFormRequest;
use App\Products;
use App\Cars;
use Illuminate\Http\Request;

class ChargeController extends Controller
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
        $charges = Charge::query()->orderBy('created_at')->get();

        $message = $request->session()->get('message');

        return view('charge/charge', compact('charges', 'message'));
    }

    public function create()
    {
        $drivers = Drivers::all(['name', 'document_number', 'id', 'is_active']);
        $cars = Cars::all(['vehicle_brand', 'vehicle_model', 'id', 'vehicle_license_plate', 'is_active']);
        $products = Products::all(['name', 'id', 'is_active']);

        return view('charge/create', compact('drivers', 'cars', 'products'));
    }

    public function store(ChargeFormRequest $request)
    {
        Charge::create($request->all());

        $this->createFlashMessage($request, 'Registro adicionado com sucesso!');

        return redirect('/carregamentos');
    }

    public function destroy(Request $request)
    {
        Charge::destroy($request->id);

        $this->createFlashMessage($request, 'Registro excluído com sucesso!');

        return redirect('/carregamentos');
    }

    private function createFlashMessage($request, $message)
    {
        return $request->session()->flash('message', $message);
    }
}
