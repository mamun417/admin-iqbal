<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Admin\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $posts = Post::with('category', 'images')->active()->latest()->get();

            return $this->success(PostResource::collection($posts), null, 200);

        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), ($e->getCode() === 0) ? 500 : $e->getCode());
        }
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param Post $post
    //  * @return JsonResponse
    //  */
    // public function show(Post $post): JsonResponse
    // {
    //     try {
    //         $post->load('category:id,name', 'images');

    //         return $this->success(new PostResource($post), null, 200);

    //     } catch (Exception $e) {
    //         report($e);
    //         return $this->error($e->getMessage(), ($e->getCode() === 0) ? 500 : $e->getCode());
    //     }
    // }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return JsonResponse
     */
    public function showBySlug(string $slug): JsonResponse
    {
        try {
            $post = Post::with('category:id,name', 'images')->active()->where('slug', $slug)->first();

            return $this->success(new PostResource($post), null, 200);

        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), ($e->getCode() === 0) ? 500 : $e->getCode());
        }
    }
}
