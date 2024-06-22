use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restauranteId')->constrained('restaurantes')->onDelete('cascade');
            $table->string('item');
            $table->decimal('preco', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
