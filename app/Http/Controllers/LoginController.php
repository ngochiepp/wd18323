<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function home()
    {
        return view('clien.home');
    }
    public function account()
    {
        return view('admin.account');
    }

    public function listUser(User $user)
    {
        $users = User::where('id', '!=', $user->id)
            ->where('role', 'user')
            ->paginate(5);
        return view('clien.home', compact('users'));
    }
    public function onAccount(User $user)
    {
        $user['active'] = 1;
        $user->update();
        return redirect()->back()->with('userOnAccount', "Hoạt động tài khoản $user->fullName");
    }
    public function offAccount(User $user)
    {
        $user['active'] = 0;
        $user->update();
        return redirect()->back()->with('userOfAccount', "Ngừng hoạt động tài khoản $user->fullName");
    }
    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->back()->with('deleteuserseccess', 'Xóa thành công tài khoản');
    }
    public function login()
    {
        return view('clien.login');
    }
    public function submitlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Lấy dữ liệu đăng nhập
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.categories')->with('loginSuccess', 'Đăng nhập thành công!');
            } else {
                Auth::logout(); // Đăng xuất nếu đã đăng nhập
                return redirect()->route('clien.submitlogin')->with('loginError', 'Tài khoản của bạn đã bị vô hiệu hóa!');
            }
        }
        return redirect()->route('admin.login')->with('loginError', 'Tài khoản hoặc mật khẩu không đúng!');
    }
    public function formRegister(Request $request)
    {
        return view('clien.register');
    }
    public function logout()
    {
        Auth::logout();
        return view('clien.login')->with('logoutSuccess', 'Đăng xuất thành công!');
    }
    public function  submitregister(Request $request)
    {
        $data = $request->except('avatar');
        $data = $request->validate([
            'fullname' => ['required'],
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'max:25'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif|max:2048'],
        ]);
        // up load hình ảnh 
        if ($request->hasFile('avatar')) {
            $avatar_path = $request->file('avatar')->store('image');
            $data['avatar'] = $avatar_path;
        }
        User::create($data);
        return redirect()->route('submitlogin')->with('registerSuccess', 'Đăng ký thành công');
    }
    public function register()
    {

        return view('clien.register');
    }
    public function formUpdatePassword(User $user)
    {
        return view('asm.admin.accountUpdatePass', compact('user'));
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'passNew' => 'required|min:3|max:50',
            'passNewAgain' => 'required|min:3|max:50',
        ]);
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($request['password'] === $request['passNew']) {
                return redirect()->back()->with('passNewError', 'Mật khẩu mới không được giống mật khẩu cũ');
            }
            if ($request['passNew'] !== $request['passNewAgain']) {
                return redirect()->back()->with('passAgainError', 'Nhập lại mật khẩu mới');
            } else {
                $user->password = Hash::make($request['passNew']);
                // $user->save();
                return redirect()->back()->with('passUpdateSuccess', 'Cập nhật mật khẩu thành công!');
            }
        } else {
            return redirect()->back()->with('passError', 'Sai mật khẩu');
        }
    }
}
