<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ItemService;

class ItemController extends Controller
{
    protected $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    public function index()
    {
        
        return response()->json(
            $this->itemService->getAll()
        );
    }

    public function show(string $id)
    {
        return response()->json(
            $this->itemService->findById($id)
        );
    }

    public function store(Request $request)
    {
        $item = $this->itemService->create($request->all());

        return response()->json([
            'message' => 'Item created successfully',
            'data' => $item
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        $item = $this->itemService->update(
            $id,
            $request->all()
        );

        return response()->json([
            'message' => 'Item updated successfully',
            'data' => $item
        ]);
    }

    public function destroy(string $id)
    {
        $this->itemService->delete($id);

        return response()->json([
            'message' => 'Item deleted successfully'
        ]);
    }
}