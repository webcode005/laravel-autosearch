<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class TypeaheadController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
 
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
        //   $filterResult = User::where('name', 'LIKE', '%'. $query. '%')->get();

        $filterResult = User::select('name','email')
                                ->where('name', 'LIKE', '%'. $query. '%')->get();

                                $data = array();
                                foreach ($filterResult as $hsl)
                                    {
                                        $data[] = $hsl->name;
                                        $data[] = $hsl->email;
                                    }
                               // echo json_encode($data);

          return response()->json($data);
    } 
}