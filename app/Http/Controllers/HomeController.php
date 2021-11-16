<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
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
    public function index()
    {
        if (\Auth::user()->hasRole('Super Administrador')) {
                //dd(LogSistema::get());
            $date_current = Carbon::now()->toDateTimeString();

            $prev_date1 = $this->getPrevDate(1);
            $prev_date2 = $this->getPrevDate(2);
            $prev_date3 = $this->getPrevDate(3);
            $prev_date4 = $this->getPrevDate(4);

            $user_count_1  = User::whereBetween('created_at',[$prev_date1,$date_current])->count();
            $user_count_2  = User::whereBetween('created_at',[$prev_date2,$prev_date1])->count();
            $user_count_3  = User::whereBetween('created_at',[$prev_date3,$prev_date2])->count();
            $user_count_4   = User::whereBetween('created_at',[$prev_date4,$prev_date3])->count();

            return view('home',compact('user_count_1',
                                      'user_count_2',
                                      'user_count_3',
                                      'user_count_4',));
        }
        return view('home');
    }



     private function getPrevDate($num){
        return Carbon::now()->subMonths($num)->toDateTimeString();
    }
}
