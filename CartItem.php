<?php


class CartItem
{
    private Product $product;
    private int $quantity;

    public function increaseQuantity()
    {
        // TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more 
        // than whatever is Product::$availableQuantity
    }

    public function decreaseQuantity()
    {
        // TODO $quantity must be decreased by one.
        // Bonus: $quantity must not become less than 1.
    }
}
