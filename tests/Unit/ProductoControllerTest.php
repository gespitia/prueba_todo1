<?php

namespace Tests\Unit;

use App\Http\Controllers\ProductoController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use PDO;
use PHPUnit\Framework\TestCase;

class ProductoControllerTest extends TestCase
{

    use RefreshDatabase;


    public function testIndex()
    {
        $this->db = Mockery::mock(
            Connection::class.'[select,update,insert,delete]',
            [Mockery::mock(PDO::class)]
        );
        $mock= Mockery::mock('Illuminate\Database\Eloquent\Model');
       // $mock->shouldReceive('index')->once()->andReturn(true);

         $producto = new ProductoController;
       $producto->index();
    }
}
