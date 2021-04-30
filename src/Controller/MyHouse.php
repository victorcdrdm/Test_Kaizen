<?php


namespace App\Controller;


class myHouse
{
    protected string $color;

    protected int $size;

    public function generate(int $number)
    {
        $array = [];
        for ($i=0; $i<$number;$i++) {
            $array[] = $this;
        }
        return $array;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}
