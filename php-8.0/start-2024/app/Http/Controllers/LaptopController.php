<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use Illuminate\Support\Facades\DB;
use App\Services\LaptopService;

class LaptopController extends Controller
{
    //
    protected $laptopReopsitoryInterface;
    function __construct(LaptopService $laptopReopsitoryInterface) {
        $this->laptopReopsitoryInterface = $laptopReopsitoryInterface;
    }
    function index() {
        return view("laptop1");
    }

    function laptop2() {
        return view("laptop2");
    }

    function list() {
        $laptops = $this->laptopReopsitoryInterface->getAll();
        // $laptops = DB::table('laptop')->get();
        return view("laptop.index", compact("laptops"));
    }

    function create() {
        return view("laptop.create");
    }

    function createPost(Request $request) {

        // dd($request);
        // DB::table('laptop')->insert([
        //     "name" => $request->name,
        //     "code" => $request->code,
        //     "image" => $request->image,
        // ]);

        $data = [
            "name" => $request->name,
            "code" => $request->code,
            "image" => $request->image,
        ];

        $re = $this->laptopReopsitoryInterface->create($data);

        return redirect()->route('laptop');
    }

    function delete(Request $request) {
        // dd($request);

        // $re = DB::table("laptop")->delete([
        //     "id" => $request->id,
        // ]);

        $re = $this->laptopReopsitoryInterface->delete($request->id);
        // dd($re);
        return redirect()->route('laptop');
    }

    function update(Request $request) {

        $data = $this->laptopReopsitoryInterface->find($request->id);
        $name = $data->name;
        $code = $data->code;
        $image = $data->image;
        $id = $data->id;
        // dd($data);
        return view("laptop.update", compact("name", "code", "image", "id"));
    }

    function updatePost(Request $request) {

        $data = [
            "name" => $request->name,
            "code" => $request->code,
            "image" => $request->image,
        ];

        // dd($request->id);

        $request = $this->laptopReopsitoryInterface->update($request->id,$data);
        return redirect()->route('laptop');
    }
}
