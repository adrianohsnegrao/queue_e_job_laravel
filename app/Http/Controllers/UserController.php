<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showFullName()
    {
        $fullName = $this->userService->getName();
        return response()->json(['name' => $name]);
    }

     public function index()
     {
         return response()->json(User::all());
     }

     public function show($id)
     {
         $user = User::find($id);
         if($user){
             return response()->json($user);
         }else{
             return response()->json(['error' => 'User não encontrado'], 404);
         }
     }

     public function store(Request $request)
     {
         $user = new User();
         $user->fill($request->all());
         $user->save();
         return response()->json($user, 201);
     }


     public function update(Request $request, $id)
     {
         $user = User::find($id);
         if($user){
             $user->fill($request->all());
             $user->save();
             return response()->json($user);
         }else{
             return response()->json(['error' => 'User não encontrado'], 404);
         }
     }

     public function destroy($id)
     {
         $user = User::find($id);
         if($user){
             $user->delete();
             return response()->json(['sucess' => 'User removido com sucesso!']);
         }else{
             return response()->json(['error' => 'User não encontrado'], 404);
         }
     }
}
