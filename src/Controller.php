<?php
namespace Local\Crm2;

/**
 * Класс контроллер тестовый бесполезный
 *
 * @package Local\Crm2
 * @author test <test@gmail.com>
 * @version 1.0.0
 */
class Controller
{
    /**
     * Просто переменная а = 10
     *
     * @var int
     */
    public $a = 10;

    /**
     * Простой public метод для класса
     *
     * @param int $b Переменная $b
     * @return int
     */
    public function test1(int $b = 5): int
    {
        return $this->a + $b;
    }
}