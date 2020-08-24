<?php


namespace App\Http\Controllers;

use App\Http\Requests\ProductsFormRequest;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
        $products = Products::query()->paginate(4);

        $message = $request->session()->get('message');

        return view('products/products', compact('products', 'message'));
    }

    public function create()
    {
        return view('products/create');
    }

    public function store(ProductsFormRequest $request)
    {
        Products::create($request->all());

        $this->createFlashMessage($request, 'Registro adicionado com sucesso!');

        return redirect('/produtos');
    }

    public function edit(Request $request)
    {
        $product = Products::find($request->id);

        return view('products/edit', compact('product'));
    }

    public function save(Request $request)
    {
        $driver = Products::find($request->id);

        $driver->name = $request->name;
        $driver->is_active = $request->is_active;
        $driver->save();

        $this->createFlashMessage($request, 'Registro editado com sucesso!');

        return redirect('/produtos');
    }

    public function destroy(Request $request)
    {
        Products::destroy($request->id);

        $this->createFlashMessage($request, 'Registro excluído com sucesso!');

        return redirect('/produtos');
    }

    private function createFlashMessage($request, $message)
    {
        return $request->session()->flash('message', $message);
    }
}
