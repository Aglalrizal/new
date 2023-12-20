<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function show(product $product){
        // $product = product::first();
        // $product->rate(5);
        // dd(product::first()->ratings);
        $ratings = [];
        for ($i = 0; $i <= 5; $i++) {
            $ratings[$i] = Review::where('product_id', $product->id)
                                    ->where('rating', $i)
                                    ->count();
        }
        $averageRating = Review::where('product_id', $product->id)->avg('rating');
        if ($averageRating === null) {
            $averageRating = 0;
        }
        $total = Review::where('product_id', $product->id)->count();
        if ($total === null) {
            $total = 0;
        }
        $reviews = Review::where('product_id', $product->id)
        ->orderBy('created_at', 'desc')
        ->get()
        ->take(3);
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $reviewed = $user->reviews()->where('product_id', $product->id)->exists();
        return view('show', [
            'product' => $product,
            'avg' => $averageRating,
            'ratings' => $ratings,
            'total' => $total,
            'reviews' => $reviews,
            'reviewed' => $reviewed
        ]);
    }
    public function review(Request $request)
    {
        $userId = auth()->user()->id;
        $product_id = $request->product_id;
        $user = User::find($userId);
        $product = Product::find($product_id);

        if ($user && $product) {
            if (!$user->reviews()->where('product_id', $product_id)->exists()) {
                // Jika review belum ada, buat review baru
                $review = new Review();
                $review->user_id = $userId;
                $review->product_id = $product_id;
                // Isi nilai rating dan komentar dari $request
                $review->rating = $request->rating;
                $review->comment = $request->comment;
                $review->save();

                return back()->with('success', 'Review has been saved!');
            } else {
                return back()->with('fail', 'Failed to save review: Review already exists!');
            }
                } else {
            return back()->with('fail', 'Failed to save review: User or product not found!');
        }
    }
}
