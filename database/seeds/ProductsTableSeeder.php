<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'title' => 'Praesent dictum orci',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae turpis et purus consequat dictum nec eu ante. Praesent eget eros enim. Praesent eu nunc metus. Vestibulum ac maximus ligula. Praesent a lacinia nisi, non rhoncus odio. In quis odio imperdiet, pellentesque orci sit amet, pellentesque nisl. Sed vitae dignissim magna. Suspendisse vel mi gravida, volutpat augue a, feugiat turpis. Nulla eu sollicitudin tortor. Nam bibendum elit nec turpis lacinia efficitur. In neque ante, pellentesque sed mauris id, condimentum suscipit massa. Fusce quis ligula at erat luctus maximus egestas non dolor. Aenean aliquam est nisi, quis volutpat mi sagittis sed. Praesent sit amet lobortis lectus. Duis tellus est, ullamcorper sed metus in, viverra pretium libero. Curabitur porttitor orci ac justo venenatis, et dapibus justo vulputate.',
            'image_path' => 'goods_001.jpg',
            'price' => 41
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Etiam semper ornare',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at maximus dolor, dignissim euismod ex. Nullam sit amet convallis dolor. Suspendisse erat diam, rhoncus at pharetra et, blandit in ligula. Etiam at auctor sem. Mauris vehicula sodales metus vel fermentum. Proin lacinia sem risus, vitae porta metus tempus in. Vestibulum convallis, odio non placerat accumsan, nunc leo aliquam orci, non lacinia ante nisi non nisi. In cursus sapien eu orci lacinia gravida. Sed eu nunc vitae magna semper tristique vitae a dui. Vestibulum eu finibus nisl. Sed rutrum egestas nisl, sed iaculis ipsum placerat vel. Praesent pulvinar imperdiet est quis pharetra. Suspendisse aliquet nulla vitae feugiat feugiat. Quisque sit amet dui lectus. Aenean commodo tellus massa, quis iaculis nisl aliquam a. Maecenas ullamcorper ultricies sollicitudin.',
            'image_path' => 'goods_002.jpg',
            'price' => 25
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Sed sed risus',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis quam orci. Proin non metus bibendum, eleifend nibh eget, hendrerit mi. Aliquam sollicitudin finibus mollis. Phasellus erat tellus, placerat vitae imperdiet at, sagittis ac felis. Suspendisse faucibus placerat nisi, vel mollis orci cursus at. Sed ac pulvinar risus, id pharetra elit. Etiam bibendum, nulla ac porta suscipit, est tortor dapibus augue, venenatis ultrices diam est elementum sem. Morbi malesuada varius nulla, ut elementum est semper sit amet. Suspendisse scelerisque metus vitae sagittis bibendum. Phasellus ullamcorper tellus id leo dignissim venenatis nec ac ante. Pellentesque nisl nibh, sollicitudin vitae aliquam a, molestie vel sapien. Donec non libero blandit, maximus sapien ut, dictum tellus. Sed tincidunt, elit imperdiet tempor placerat, ligula sapien aliquam turpis, non fringilla ex diam vel ante.',
            'image_path' => 'goods_003.jpg',
            'price' => 29
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Vivamus non sodales',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, massa non posuere aliquet, mauris eros tincidunt nibh, sit amet bibendum quam neque et sapien. Morbi porttitor malesuada fermentum. Sed vestibulum, nunc ac porttitor efficitur, justo neque mollis massa, vel porttitor lectus massa vel sem. Integer suscipit nisl metus, sed luctus sem tincidunt et. Sed aliquam nunc non euismod laoreet. Sed id dolor auctor, volutpat dui in, dignissim metus. Vestibulum sit amet semper tortor. Duis eget erat et est volutpat malesuada. Aenean efficitur orci lacus, efficitur semper felis tincidunt a. Aenean fringilla ligula et sapien aliquet, vitae rhoncus sapien mattis.',
            'image_path' => 'goods_004.jpg',
            'price' => 27
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Sed magna diam',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel mollis mauris. Suspendisse pharetra egestas semper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus velit dolor, sodales et vestibulum sit amet, scelerisque at tellus. Fusce eu cursus neque. Pellentesque quis tincidunt nibh. Vestibulum fermentum eu est eu blandit. Integer sem nunc, maximus quis facilisis in, convallis vel nisi. Sed ac pellentesque lacus. Curabitur euismod ultricies egestas. Mauris ipsum lectus, pretium sit amet metus in, pellentesque aliquam magna. Praesent finibus a nunc ultrices pulvinar.',
            'image_path' => 'goods_005.jpg',
            'price' => 44
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Nam eu arcu',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porta auctor nisl, id porttitor mauris gravida quis. Ut non elit venenatis, gravida elit sit amet, pharetra arcu. Mauris id tempus sem, nec dapibus orci. Aliquam ac nibh egestas, fringilla nibh non, tincidunt leo. Pellentesque nec lacinia tortor, sed laoreet enim. Duis et urna sed ante consectetur iaculis dapibus sit amet purus. Aliquam et gravida odio, sit amet luctus augue. Mauris ultrices sagittis enim non mollis. Phasellus tempus elit non quam semper, id varius ex dignissim. Proin sed pellentesque eros, vehicula efficitur nunc. Aliquam ultrices dolor sit amet neque semper, sed efficitur tellus blandit. Morbi non rhoncus nibh. Etiam blandit ante quis sapien lobortis laoreet. Vestibulum maximus commodo justo nec efficitur.',
            'image_path' => 'goods_006.jpg',
            'price' => 26
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Vestibulum at ultricies',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisl tortor, fermentum quis sem ut, accumsan aliquet est. In interdum porta lacus ut posuere. Curabitur egestas erat rutrum sem vehicula condimentum. Sed sit amet consectetur velit, vitae elementum neque. Maecenas sodales arcu sed lorem euismod, id dignissim elit dictum. Duis lacus ipsum, fermentum in finibus vel, tristique vitae orci. Nam ullamcorper a ipsum in pulvinar.',
            'image_path' => 'goods_007.jpg',
            'price' => 29
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Praesent pretium, diam',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi massa libero, molestie vitae urna a, sagittis vestibulum elit. Cras et nibh odio. Sed ut augue blandit, lacinia est eget, laoreet velit. Praesent ante mauris, imperdiet id facilisis eget, cursus eu nunc. Integer sit amet enim eget magna vulputate aliquet. Sed augue mauris, finibus at urna sit amet, malesuada bibendum quam. Sed ornare egestas ante ac auctor. Nam pharetra consectetur magna vel iaculis. Vestibulum at finibus dui. Maecenas mollis efficitur dui ut tempus. Aenean laoreet urna vitae accumsan suscipit. Nulla in arcu a odio ultrices vestibulum at at mi. Nullam congue lacinia lacinia. Phasellus eu placerat libero.',
            'image_path' => 'goods_008.jpg',
            'price' => 22
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Phasellus varius massa',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec mauris commodo, ultricies mauris vel, iaculis elit. Fusce varius ipsum at nisl convallis, sed sodales turpis fringilla. Quisque lacinia ac nisl id blandit. Sed ac turpis tortor. Fusce gravida sed arcu sit amet pharetra. Vivamus pellentesque, ante sed hendrerit semper, diam ligula consectetur felis, quis luctus lectus ipsum in urna. In dictum volutpat velit sit amet elementum. Sed nisl augue, feugiat ac elit in, gravida facilisis mauris. Vestibulum porta nisi vitae leo lacinia, nec mollis ante pellentesque. Praesent efficitur pharetra auctor. Proin rutrum elementum erat et commodo.',
            'image_path' => 'goods_009.jpg',
            'price' => 22
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Quisque in orci',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices urna quis risus ultricies porttitor. Curabitur ornare est lacus, eget posuere ex condimentum a. Donec imperdiet nibh neque, ut consequat leo fermentum et. Sed ut metus semper, feugiat leo non, imperdiet ligula. Curabitur vestibulum, sapien ut eleifend tempus, tortor arcu condimentum lorem, efficitur lobortis felis nunc nec arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla ligula urna, rhoncus eget facilisis eu, dictum et erat. Vivamus cursus, ante ut interdum maximus, ex justo ultrices lacus, vitae interdum lectus justo in est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur fringilla iaculis turpis. Donec nec ligula sapien. Nunc tincidunt dui nec lacus rhoncus sagittis. Proin nec neque et mi sagittis dignissim.',
            'image_path' => 'goods_010.jpg',
            'price' => 22
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Vestibulum feugiat leo',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod aliquam est at viverra. Pellentesque non venenatis ligula. Vivamus rutrum id sapien nec aliquam. Nullam fermentum, turpis in congue efficitur, nunc eros consectetur mi, non suscipit odio tellus mollis risus. Proin nec velit tincidunt, lacinia nulla vitae, posuere purus. Quisque venenatis urna ut consectetur faucibus. Aliquam scelerisque mi non efficitur faucibus. Sed aliquet ac eros nec pellentesque. Praesent dignissim mauris id libero finibus semper. Sed ornare velit faucibus enim facilisis imperdiet.',
            'image_path' => 'goods_011.jpg',
            'price' => 22
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Suspendisse in magna',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet scelerisque lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In mauris nulla, lobortis at arcu quis, pharetra pharetra justo. Integer diam odio, consequat eget consequat non, fringilla eget ligula. Integer nec elementum metus. Maecenas neque justo, ullamcorper vitae sapien nec, congue lobortis ligula. Quisque fermentum magna eget vulputate imperdiet. Suspendisse varius molestie elit, quis congue metus hendrerit at. Aenean eu vulputate sem.',
            'image_path' => 'goods_012.jpg',
            'price' => 22
        ]);
        $product->save();
    }
}
