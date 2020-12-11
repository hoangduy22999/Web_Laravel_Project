<?php


namespace Modules\Web\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Modules\Web\Http\Requests\LoginRequest;
use App\Repositories\User\UserInterface;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $userInterface;

    /**
     * Create a new controller instance.
     *
     * @param UserInterface $userInterface
     */

    public function __construct(UserInterface $userInterface) {
        $this->userInterface = $userInterface;
    }

    public function login(LoginRequest $request)
    {
        $credential = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if($this->guard()->attempt($credential)) {
            return response()->json(['status' => true]);
        }

        return response()->json(['status' => false, 'email' => $request->input('email')]);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->back();
    }

    public function guard() {
        return Auth::guard('web');
    }
}
