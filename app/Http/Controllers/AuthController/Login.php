<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class Login extends Controller
{
    protected $request_url;
    protected $device_details;
    protected $ip_address;
    protected $message;
    protected $data;
    private $role;
    private $role_url;

    public function __construct(Request $request)
    {
        $this->data = [
            'request_url' => $request->segment(2) ?? 'mis',
            'referer_url' => collect(explode('/', parse_url($request->header('referer'), PHP_URL_PATH)))->last(),
            'device_Details' => $this->_device(),
            'ip_address' => $request->ip(),
        ];

        $this->role = [
            'mis'   => 1,
            'hrss'  => 2,
            'guest' => 3,
        ];

        $this->role_url = [
            1 => ['default' => 'mis/dashboard'],
            2 => ['default' => 'admin/dashboard'],
            3 => ['default' => 'system-admin/dashboard'],
        ];

        $this->message = [
            0=>'Login Success',
            1=>'Login Failed, Contact MIS for Assistance',
            2=>'Login Failed, Account is Deactivated',
            3=>'Oops, Check your username or password',
            4=>'This login is for ',
        ];
    }

    public function index()
    {
        return match($this->data['request_url']){

            'mis'    => view('auth.0001'),

            'hrss'        => view('auth.0002'),

            'guest' => view('auth.0003'),

            default => false,
        };
    }

    protected function login(LoginRequest $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            $access = Auth::user()->account_role;
            if($access && ($access->status)){
                if($this->role[$this->data['referer_url']] == $access->role_id){
                    $this->_throttle($this->data['ip_address'],'clear');
                    $this->_throwResponse($this->message[0],200,'success',$this->role_url[$access->role_id]['default']);
                }
                Auth::logout();
                $this->_throwResponse($this->message[4]. "'".ucfirst($this->data['referer_url'])."' account only",401,'error',csrf_token());
            }
            Auth::logout();
            $this->_throttle($this->data['ip_address']);
            $this->_throwResponse($this->message[1],401,'error',csrf_token());
        }
        $this->_throttle($this->data['ip_address']);
        $this->_throwResponse($this->message[3],401,'error',csrf_token());
    }

    protected function logout()
    {
        if(Auth::check()){
            $user = Auth::user()->account_role;
            $role_id = $user->checkUserRole($this->data['referer_url']);
            $emp_id = $user->emp_id;

            Auth::logout();
            Cache::forget("ims_{$emp_id}");

            return redirect("/$this->role_url[$role_id]");
        }
    }
}
