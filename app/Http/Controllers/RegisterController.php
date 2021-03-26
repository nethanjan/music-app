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

    protected $redirectTo = '/search';

    

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

        $genre = array(
            '1' => array(
                '20s',
                'Oldies'
            ),
            '2' => array(
                '30s',
                'Oldies'
            ),
            '3' => array(
                '40s',
                'Oldies'
            ),
            '4' => array(
                '50s',
                'Oldies'
            ),
            '5' => array(
                '60s',
                'Oldies'
            ),
            '6' => array(
                '70s',
                'Oldies'
            ),
            '7' => array(
                '80s'
            ),
            '8' => array(
                'Ambient',
                'Soundscape'
            ),
            '9' => array(
                'Americana',
                'Country'
            ),
            '10' => array(
                'Cinematic',
                'Trailer',
                'Western',
                'Spaghetti Western'
            ),
            '11' => array(
                'Dance',
                'EDM',
                'Electronic'
            ),
            '12' => array(
                'Middle Eastern',
                'New Age',
                'Ethnic',
                'World',
                'French',
                'Polka',
                'Reggae'
            ),
            '13' => array(
                'Country',
                'Folk'
            ),
            '14' => array(
                'Dance',
                'Funk',
                'Funky',
                'Soul'
            ),
            '15' => array(
                'Low Fi',
                'Hip Hop',
                'R&B'
            ),
            '16' => array(
                'Christmas',
                'Holiday'
            ),
            '17' => array(
                'Jazz'
            ),
            '18' => array(
                'Bossa Nova',
                'Latin'
            ),
            '19' => array(
                'Lounge',
                'Elevator Music',
                'Muzac'
            ),
            '20' => array(
                'Lullaby'
            ),
            '21' => array(
                'Mnemonic'
            ),
            '22' => array(
                'Circus',
                'Classical',
                'Orchestral'
            ),
            '23' => array(
                'Dance',
                'Pop',
                'Remix'
            ),
            '24' => array(
                'Indie',
                'Metal',
                'Alternative',
                'Classic Rock',
                'Surf Rock',
                'Rock'
            ),
            '20' => array(
                'Motown'
            )
        );

        while ( ($data = fgetcsv($file, 1000, ",")) !==FALSE )
        {
            $results = [];
            if($i != 1){
                $record_id = $data[0];
                $song = DB::table('songs')->where('recordId', $record_id)->first();
                $genre_for_record = explode(",", $data[1]);

                foreach ($genre_for_record as $song_genre) 
                {
                    foreach ($genre as $main_genre => $sub_genre)
                    {
                        
                        if (in_array(trim($song_genre), $sub_genre)) 
                        {
                            array_push($results, $main_genre);
                        }
                    }
                }
                // echo $record_id;
                $unique_results = array_unique($results);
                foreach ($unique_results as $res) {
                    echo $res;
                }
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
