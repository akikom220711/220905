<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\StatusRequest;
use App\Models\User;
use App\Models\Status;
use App\Models\Company;

class SalesController extends Controller
{
    public function index(){
        return view('auth');
    }
    public function checkUser(Request $request){
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect('/home');
        }else {
            return view('auth');
        }
    }
    public function goToRegistPage(){
        return view('regist');
    }
    public function registration(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/');
    }
    public function home(){
        $user = Auth::user();
        $status = Status::all();
        $company = $user -> company;
        $selected_company = null;
        $param = ['user' => $user, 'status' => $status, 'company' => $company, 'selected_company' => $selected_company];
        return view('home', $param);
    }
        public function select(Request $request){
        $user = Auth::user();
        $status = Status::all();
        $company = $user -> company;
        $selected_company = Company::where('id', '=', $request['selected'])->get();
        $param = ['user' => $user, 'status' => $status, 'company' => $company, 'selected_company' => $selected_company];
        return view('select', $param);
    }
    public function edit(CompanyRequest $request){
        $form = $request -> all();
        unset($form['_token']);
        Company::find($form['id']) -> update($form);
        return redirect('/home');
    }
    public function add(CompanyRequest $request){
        $form = $request -> all();
        unset($form['_token']);
        Company::create($form);
        return redirect('/home');
    }
    public function search(SearchRequest $request){
        $user = Auth::user();
        $status = Status::all();
        $form = $request -> all();
        $selected_company = null;

        $key_word = $form['search'];
        $results = Company::where('user_id', '=', $user['id'])
                    ->where('company_name', 'like binary', "%$key_word%")
                    ->orwhere('user_id', '=', $user['id'])
                    ->where('head_name', 'like binary', "%$key_word%")
                    ->get();
        
        $param = ['user' => $user, 'status' => $status, 'company' => $results, 'selected_company' => $selected_company];
        return view('home', $param);
    }
    public function goToSetting(){
        return view('setting');
    }
    public function setStatus(StatusRequest $request){
        $status = Status::all();
        $form = $request -> all();
        unset($form['_token']);

        $counter = 0;
        foreach ($form as $txt){
            $counter++;
            $form_array[$counter]= ['id' => $counter, 'status' => $txt];
        }

        $counter = 0;
        foreach ($form as $txt){
            $counter++;
            if ($txt != null){
                Status::find($counter) -> update($form_array[$counter]);
            }
        }
        
        return redirect('/home');
    }
}
