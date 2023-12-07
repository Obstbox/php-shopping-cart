<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    /** 
     * Add Product $product into cart. If product already exists in the class
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever 
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @param void
     * @param CartItem
     */
    public function addToCart(Cart $cart, int $quantity)
    {
        // TODO Implement method
    }

    /** Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        // TODO Implement method
    }
}
