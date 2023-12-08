<?php


class CartItem
{
    private Product $product;
    private int $quantity;

    /**
     * CartItem constructor.
     *
     * @param \Product $product
     * @param int      $quantity
     */
    public function __construct(\Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return \Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


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
