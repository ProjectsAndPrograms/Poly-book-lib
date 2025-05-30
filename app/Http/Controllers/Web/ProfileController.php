<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Download;
use App\Models\User;
use App\Services\FileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    private FileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }
    public function index(User $user)
    {

        $exploredBranches  = Download::join('books', 'downloads.downloadable_id', '=', 'books.id')
            ->join('branch_semester', 'books.branch_semester_id', '=', 'branch_semester.id')
            ->where('downloads.user_id', $user->id)
            ->where('downloads.downloadable_type', Book::class)
            ->selectRaw('COUNT(DISTINCT branch_semester.branch_id) as total')
            ->value('total');


        return view('web.profile.profile', compact('user', 'exploredBranches'));
    }

    public function updateProfileImage(User $user, Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,svg,webp,avif,gif|max:2048'
        ]);

        try {
            $this->fileService->deleteIfExists($user->image);

            $filePath = $this->fileService->uploadFile($request->file('image'), "users", 'public');

            User::where('id', $user->id)->update(['image' => $filePath]);

            return response()->json([
                'success' => true,
                'message' => 'File uploaded successfully!',
                'image_url' => asset('storage/' . $filePath)
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error uploading file: ' . $e->getMessage()
            ], 500);
        }
    }
}
