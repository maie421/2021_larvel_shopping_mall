<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_list=User::orderBy('created_at','DESC')->paginate(2);
        return view('/shopping/member',compact('user_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUser $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $user_is_check = User::where ( 'email' , '=' , $request->email )->count();
        if($user_is_check > 0){
            notify()->error('이미 존재하는 회원입니다.');
        }else{
            $user           = new User();
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->password = Hash::make($request->password);
            $success=$user->save();
            if($success){
                notify()->success('회원 추가 성공');
            }else{
                notify()->error('회원 추가 실패');

            }
        }
        return redirect()->route('member_form');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
