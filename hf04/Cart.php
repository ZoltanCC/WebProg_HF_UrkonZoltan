<?php


class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

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
     * @return CartItem
     */
    public function addProduct(Product $product, int $quantity): CartItem
    {
        //TODO Implement method
        if (isset($this->items[$product->getId()])) {
            $this->items[$product->getId()]->increaseQuantity();
        }
        else {
            $this->items[$product->getId()] = new CartItem($product, $quantity);
        }
        return $this->items[$product->getId()];
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        //TODO Implement method
        if ($this->items[$product->getId()]) {
            unset($this->items[$product->getId()]);
        }
    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        //TODO Implement method
        $n = 0;
        foreach($this->items as $item) {
            $n += $item->getQuantity();
        }
        return $n;
    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        //TODO Implement method
        $n = 0;
        foreach($this->items as $item) {
            $n += $item->getProduct()->getPrice() * $item->getQuantity();
        }
        return $n;
    }
}