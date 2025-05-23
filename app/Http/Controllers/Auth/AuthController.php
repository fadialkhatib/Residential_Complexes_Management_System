<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validate = $request->validate([
                'firstName' => 'required|string|regex:/^[\p{Arabic}a-zA-Z\s]+$/u',
                'lastName' => 'required|string|regex:/^[\p{Arabic}a-zA-Z\s]+$/u',
                'userName' => 'required|string|regex:/^[a-zA-Z0-9_]+$/|unique:users',
                'phonNumber' => 'required|regex:/^\+?[0-9]{10,15}$/',
                'fc_Token' => 'required',
                'gender' => 'required|in:' . implode(',', ['Male', 'Female']),
                'dateOfBirth' => 'required',
                'acountState' => 'required|boolean',
                'lastOnline' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
            ]);
            $user = User::create([
                'firstName' => $validate['firstName'],
                'lastName' => $validate['lastName'],
                'userName' => $validate['userName'],
                'phonNumber' => $validate['phonNumber'],
                'fc_Token' => $validate['fc_Token'],
                'gender' => $validate['gender'],
                'dateOfBirth' => $validate['dateOfBirth'],
                'acountState' => $validate['acountState'],
                'lastOnline' => $validate['lastOnline'],
                'email' => $validate['email'],
                'password' => bcrypt($validate['password']),
            ]);
            $token = $user->createToken('mytoken@FO123')->plainTextToken;

            return response()
                ->json([
                    'message' => 'تم تسجيل الدخول بنجاح',
                    'data' => $user,
                    'token' => $token
                ], 200)
                ->cookie(
                    'token', // اسم الكوكي
                    $token,     // القيمة
                    60,         // المدة بالدقائق
                );
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function login(Request $request)
    {
        try {
            $validate = $request->validate([
                'userName' => 'required|string|regex:/^[a-zA-Z0-9_]+$/',
                'email' => 'required|email',
                'password' => 'required|string|min:8|',
            ]);

            //check username
            $user = User::where('userName', $validate['userName'])->first();
            if (!$user) {
                return response()->json(['message' => 'اسم المستخدم غير صحيح'], 400);
            }

            //check email
            if (!$user->email) {
                return response()->json(['message' => 'الايميل غير صحيح او غير موجود'], 400);
            }

            //check both
            $both = User::where('userName', $validate['userName'])
                ->where('email', $validate['email'])->first();
            if (!$both) {
                return response()->json(['message' => 'اسم المستخدم او الايميل غير متطابقين'], 400);
            }

            //check password
            if (!Hash::check($validate['password'], $user->password)) {
                return response()->json(['message' => 'كلمة المرور غير صحيحة'], 400);
            }
            $token    = $user->createToken('mytoken@FO123')->plainTextToken;

            return response()
                ->json([
                    'message' => 'تم تسجيل الدخول بنجاح',
                    'data' => $user,
                    'token' => $token
                ], 200)
                ->cookie(
                    'token', // اسم الكوكي
                    $token,     // القيمة
                    60,         // المدة بالدقائق
                );
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }


    public function logout()
    {
        try {
            auth()->user()->tokens()->delete();
            return response()->json(['message' => 'Logged Out !'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
