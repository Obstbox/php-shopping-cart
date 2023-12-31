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
     * @return \CartItem
     * @throws \Exception
     */
    public function addProduct(Product $product, int $quantity)
    {
        // find product in cart
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null){
            $cartItem = new CartItem($product, 0);
            $this->items[] = $cartItem;
        }
        $cartItem->increaseQuantity($quantity);
        return $cartItem;
    }

    public function findCartItem(int $product)
    {
        foreach ($this->items as $item) {
            if ($item->getProduct()->getId() === $productId()){
                return $item->getProduct()
            }
        }
        // if not find
        return null;
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
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
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
