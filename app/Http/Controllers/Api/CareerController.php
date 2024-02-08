<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Admin\Controller;
use App\Models\Career;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Http\JsonResponse;

class CareerController extends Controller
{
    use ApiResponser;

    public function index(): JsonResponse
    {
        try {
            $careers = Career::active()->latest()->get();

            return $this->success($careers, null, 200);

        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), ($e->getCode() === 0) ? 500 : $e->getCode());
        }
    }

    public function showBySlug(string $slug): JsonResponse
    {
        try {
            $career = Career::where('slug', $slug)->firstOrFail();

            return $this->success($career, null, 200);

        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), ($e->getCode() === 0) ? 500 : $e->getCode());
        }
    }
}
