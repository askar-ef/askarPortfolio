<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

/**
 * @OA\Schema(
 *     schema="Photo",
 *     required={"id", "title", "description", "picture"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="title", type="string"),
 *     @OA\Property(property="description", type="string"),
 *     @OA\Property(property="picture", type="string", format="binary"),
 * )
 */


class GalleryApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/gallery",
     *     summary="Get all gallery items",
     *     description="Get a list of all gallery items.",
     *     operationId="getGalleryItems",
     *     tags={"Gallery"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="photo", type="array", @OA\Items(ref="#/components/schemas/Photo")),
     *         )
     *     ),
     *     @OA\Response(response=500, description="Internal server error"),
     * )
     */
    public function index()
    {
        $post = Post::all();

        return response()->json([
            "photo" => $post
        ]);
    }


    /**
     * @OA\Post(
     *     path="/api/gallery",
     *     summary="Create a new photo",
     *     description="Create a new photo with title, description, and an optional picture.",
     *     operationId="createPhoto",
     *     tags={"Gallery"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="title", type="string", description="Photo title", example="Beautiful Sunset"),
     *                 @OA\Property(property="description", type="string", description="Photo description", example="A breathtaking view of the sunset"),
     *                 @OA\Property(property="picture", type="string", format="binary", description="Photo file (optional)"),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Photo created successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Berhasil menambahkan data baru"),
     *         )
     *     ),
     *     @OA\Response(response=422, description="Validation error"),
     *     @OA\Response(response=500, description="Internal server error"),
     * )
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'picture' => 'image|nullable|max:1999',
        ]);

        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $basename = uniqid() . time();
            $filenameSimpan = "{$basename}.{$extension}";
            $path = $request->file('picture')->storeAs('posts_image', $filenameSimpan);
        } else {
            $filenameSimpan = 'noimage.png';
        }

        $post = new Post;
        $post->picture = $filenameSimpan;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return response()->json([
            "message" => "Berhasil menambahkan data baru"
        ], 201);
    }
}
