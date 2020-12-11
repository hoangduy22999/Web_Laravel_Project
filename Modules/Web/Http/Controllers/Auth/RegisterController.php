<?php

namespace Modules\Web\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserInterface;
use Modules\Web\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $userInterface;

    public function __construct(UserInterface $userInterface) {
        $this->userInterface = $userInterface;
    }

    public function register(RegisterRequest $request) {
        $userInfo = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'password' => Hash::make($request->get('password'))
        ];

        $this->userInterface->create($userInfo);

        $credential = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if($this->guard()->attempt($credential)) {
            return response()->json(['status' => true]);
        }
    }

}
