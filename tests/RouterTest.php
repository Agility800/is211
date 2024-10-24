<?php 
namespace Test;

use PHPUnit\Framework\TestCase;
use Routers\Router;

class RouterTest extends TestCase {
    public function test_router() {
        $router = new Router();
        $html = $router->route( "http://localhost/orders" );
        $pos= mb_strpos($html, "Создать заказ");
        $this->assertNotEquals(false, $pos);
    }
    
    public function test_router1() {
        $router = new Router();
        $html = $router->route( "http://localhost" );
        $pos= mb_strpos($html, "Приглашаем в наш онлайн-магазин");
        $this->assertNotEquals(false, $pos);
    }
    
    public function test_router2() {
        $router = new Router();
        $html = $router->route( "http://localhost/product" );
        $pos= mb_strpos($html, "Добавить в корзину");
        if ($pos === false) {
            $pos = -1;
        }
    }
}
