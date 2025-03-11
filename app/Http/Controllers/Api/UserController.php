<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return UserResource::collection($users)
            ->additional([
                'message' => 'Users retrieved successfully'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        return (new UserResource(User::create($request->validated())))
            ->additional([
                'message' => 'User created successfully'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return (new UserResource($user))
            ->additional([
                'message' => 'User retrieved successfully'
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        return (new UserResource(tap($user)->update($request->validated())))
            ->additional([
                'message' => 'User updated successfully'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->id === Auth::id()) {
            throw new HttpResponseException(response()->json([
                'message' => 'You cannot delete yourself'
            ], 403));
        }

        $user->delete();

        return (new UserResource($user))
            ->additional([
                'message' => 'User deleted successfully'
            ]);
    }
}
