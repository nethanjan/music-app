<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/search-by-genre';

    

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function test()
    {
        $file_n = storage_path('/app/songmappings.csv');
        $file = fopen($file_n, "r");
        $array = array();
        $i = 1;

        $energy = array(
            '1' => array(
                'Ambient',
                'Down-Tempo',
                'Grooving',
                'Laid Back',
                'Mellow',
                'Peaceful',
                'Slow',
                'Soft',
                'Warm'
            ),
            '2' => array(
                'Bouncy',
                'Building',
                'Carefree',
                'Upbeat',
                'Uplifting'
            ),
            '3' => array(
                'Aggressive',
                'Driving',
                'Energetic',
                'Energy',
                'Fast',
                'Intense',
                'Lively',
                'Party'
            )
        );

        while ( ($data = fgetcsv($file, 1000, ",")) !==FALSE )
        {
            $results = [];
            if($i != 1){
                $record_id = $data[0];
                $song = DB::table('songs')->where('recordId', $record_id)->first();
                $energy_for_record = explode(",", $data[1]);
                // dd($energy_for_record);
                foreach ($energy_for_record as $song_energy) 
                {
                    foreach ($energy as $main_energy => $sub_energy)
                    {
                        
                        if (in_array(trim($song_energy), $sub_energy)) 
                        {
                            array_push($results, $main_energy);
                        }
                    }
                }
                // echo $record_id;
                $unique_results = array_unique($results);

                foreach ($unique_results as $res) {
                    echo $res;
                }
                dd($unique_results);
            }

            $i++;
        }
        fclose($file);
    }

    public function home()
    {
        return view('home');
    }

    public function show()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $validator = $request->validate([
            'fname'     => 'required',
            'lname'     => 'required',
            'email'     => 'required|unique:users|email',
            'password'  => 'required|min:6'
        ], 
        [
            'fname.required' => 'First name is required',
            'lname.required' => 'Last name is required',
            'email.required' => 'Email address is required',
            'email.email' => 'Email address must be valid email',
            'email.unique' => 'Email address is already registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters'
        ]);

        $user = User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        auth()->login($user);

        return redirect()->route('verify');
        
    }

    public function verify()
    {
        return view('verify');
    }
}
