<?php


class CartItem
{
    private Product $product;
    private int $quantity;

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties
    /**
     * @param Product $product
     * @param int $quantity
     */
    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function increaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
        if ($this->quantity + 1 > $this->product->getAvailableQuantity()) {
            return;
        }
        $this->quantity++;
    }

    public function decreaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: Quantity must not become less than 1
        if ($this->quantity - 1 < 1) {
            return;
        }
        $this->quantity--;
    }

}