<?php
namespace Local\Crm2;
use Local\Crm2\Test\Test;
/**
 * Класс контроллер тестовый бесполезный1213123 12312312
 *
 * @package Local\Crm2
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
     * Test
     * @var int
     */
    public $test = Test::test();
    /**
     * Простой public метод для класса
     *
     * @param int $b Переменная $b
     * @return string
     */
    public function test1(int $b = 5): int
    {
        return $this->a + $b;
    }
}