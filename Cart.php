<?php


class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    // TODO Generate getters and setters of properties
    
    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @param CartItem
     */
    public function addProduct(Product $product, int $quantity)
    {
        // TODO Implement method
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeProduct(Product $product)
    {
        // TODO Implement method
    }

    /**
     * This return total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        // TODO Implement method
    }

    /**
     * This return total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum()
    {
        // TODO Implement method
    }