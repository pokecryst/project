<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use Exception;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    // Search users by keyword
    public function userSearchByKeyword(Request $request)
    {
        $keyword = $request->get('keyword');

        $users = User::where('name', 'like', '%' . $keyword . '%')->paginate(5);
        $totalUsers = User::where('name', 'like', '%' . $keyword . '%')->count();

        return view('admin.user.user', [
            'users' => $users,
            'totalusers' => $totalUsers,
        ]);
    }

    // View all users
    public function viewUsers()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        $totalUsers = User::count();

        return view('admin.user.user', [
            'users' => $users,
            'totalusers' => $totalUsers,
        ]);
    }

    // Show the add user form
    public function addUser()
    {
        return view('admin.user.add_user');
    }

    // Save a new user
    // public function saveUser(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'phone' => 'nullable|string|max:15',
    //         'address' => 'nullable|string|max:255',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     try {
    //         User::create([
    //             'name' => $validatedData['name'],
    //             'email' => $validatedData['email'],
    //             'phone' => $validatedData['phone'],
    //             'address' => $validatedData['address'],
    //             'password' => Hash::make($validatedData['password']),
    //             'user_status' => 1, // Default user status
    //         ]);

    //         toastr()->closeButton()->addSuccess('User Added Successfully');
    //         return redirect()->route('view_user')->with('msg', 'User added successfully.');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withInput()->withErrors(['msg' => 'Failed to add user: ' . $e->getMessage()]);
    //     }
    // }

    // Delete a user
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        toastr()->closeButton()->addSuccess('User Deleted Successfully');
        return redirect()->back();
    }

    // Show the edit user form
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit_user', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'usertype' => 'required|string',
            // Optionally add validation for 'status' if needed
        ]);

        $user = User::findOrFail($id);

        // Update user details
        $user->update($request->except('password')); // Exclude password from mass assignment

        // Optionally update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Check if the admin is setting the user status to inactive
        if ($request->has('user_status') && $request->user_status == 0) {
            $user->user_status = 0; // Set status to inactive
            $user->save();

            // If the user is currently logged in, log them out
            if (Auth::id() === $user->id) {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Your account is inactive.');
            }
        } else {
            $user->user_status = 1; // Optionally set back to active
        }

        $user->save();

        return redirect()->route('view_user')->with('msg', 'User updated successfully.');
    }


    // View all users
    public function vieworder()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        $totalUsers = User::count();

        return view('admin.user.user', [
            'users' => $users,
            'totalusers' => $totalUsers,
        ]);
    }





    /// CATEGORY
    public function indexCategory()
    {
        $categories = Categories::all();
        return view('admin.categories.index', compact('categories'));
    }

    // ADD CATEGORY
    public function addCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:255',
        ]);
        Categories::create([
            'cat_name' => $request->category_name,
        ]);

        return redirect()->back()->with('success', 'Category created successfully.');
    }

    // Show Option 
    public function editCategory($id)
    {
        $category = Categories::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    // Update Category
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $category = Categories::find($id);
        $category->update([
            'cat_name' => $request->category_name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    // Del Categories
    public function destroyCategory($id)
    {
        $category = Categories::find($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
