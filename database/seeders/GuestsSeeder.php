<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guests')->insert([
            ['guest_name' => 'James', 'guest_phone' => '0285285904', 'guest_address' => 'Malang'],
            ['guest_name' => 'Mary', 'guest_phone' => '8566369006', 'guest_address' => 'Denpasar'],
            ['guest_name' => 'Robert', 'guest_phone' => '2012285967', 'guest_address' => 'Dumai'],
            ['guest_name' => 'Patricia', 'guest_phone' => '2675038859', 'guest_address' => 'Bitung'],
            ['guest_name' => 'John', 'guest_phone' => '4431334807', 'guest_address' => 'Sorong'],
            ['guest_name' => 'Jennifer', 'guest_phone' => '0355032332', 'guest_address' => 'Lhokseumawe'],
            ['guest_name' => 'Michael', 'guest_phone' => '0402053625', 'guest_address' => 'Bitung'],
            ['guest_name' => 'Linda', 'guest_phone' => '8599870839', 'guest_address' => 'Metro'],
            ['guest_name' => 'David', 'guest_phone' => '4605425444', 'guest_address' => 'Sorong'],
            ['guest_name' => 'Elizabeth', 'guest_phone' => '8410503244', 'guest_address' => 'Sibolga'],
            ['guest_name' => 'William', 'guest_phone' => '7952874616', 'guest_address' => 'Tasikmalaya'],
            ['guest_name' => 'Barbara', 'guest_phone' => '7352000523', 'guest_address' => 'Padangsidimpuan'],
            ['guest_name' => 'Richard', 'guest_phone' => '5141057261', 'guest_address' => 'Bima'],
            ['guest_name' => 'Susan', 'guest_phone' => '8357126510', 'guest_address' => 'Sukabumi'],
            ['guest_name' => 'Joseph', 'guest_phone' => '9985994817', 'guest_address' => 'Padang Panjang'],
            ['guest_name' => 'Jessica', 'guest_phone' => '1773079524', 'guest_address' => 'Sibolga'],
            ['guest_name' => 'Thomas', 'guest_phone' => '5181999827', 'guest_address' => 'Cirebon'],
            ['guest_name' => 'Sarah', 'guest_phone' => '8302719880', 'guest_address' => 'Blitar'],
            ['guest_name' => 'Christopher', 'guest_phone' => '6502880635', 'guest_address' => 'Kota Administrasi Jakarta Barat'],
            ['guest_name' => 'Karen', 'guest_phone' => '0968357863', 'guest_address' => 'Tanjungpinang'],
            ['guest_name' => 'Charles', 'guest_phone' => '7010621650', 'guest_address' => 'Tebing Tinggi'],
            ['guest_name' => 'Lisa', 'guest_phone' => '2001178345', 'guest_address' => 'Prabumulih'],
            ['guest_name' => 'Daniel', 'guest_phone' => '4971946356', 'guest_address' => 'Surakarta'],
            ['guest_name' => 'Nancy', 'guest_phone' => '4881752746', 'guest_address' => 'Nusantara'],
            ['guest_name' => 'Matthew', 'guest_phone' => '8787314975', 'guest_address' => 'Salatiga'],
            ['guest_name' => 'Betty', 'guest_phone' => '9701845235', 'guest_address' => 'Dumai'],
            ['guest_name' => 'Anthony', 'guest_phone' => '8104261287', 'guest_address' => 'Padangsidimpuan'],
            ['guest_name' => 'Sandra', 'guest_phone' => '0994869883', 'guest_address' => 'Palu'],
            ['guest_name' => 'Mark', 'guest_phone' => '3857410615', 'guest_address' => 'Tasikmalaya'],
            ['guest_name' => 'Margaret', 'guest_phone' => '1217926818', 'guest_address' => 'Malang'],
            ['guest_name' => 'Donald', 'guest_phone' => '2151420014', 'guest_address' => 'Cirebon'],
            ['guest_name' => 'Ashley', 'guest_phone' => '9904883914', 'guest_address' => 'Nusantara'],
            ['guest_name' => 'Steven', 'guest_phone' => '9337152049', 'guest_address' => 'Surabaya'],
            ['guest_name' => 'Kimberly', 'guest_phone' => '8075415694', 'guest_address' => 'Bima'],
            ['guest_name' => 'Andrew', 'guest_phone' => '7734689037', 'guest_address' => 'Tidore Kepulauan'],
            ['guest_name' => 'Emily', 'guest_phone' => '5660484177', 'guest_address' => 'Kota Administrasi Jakarta Barat'],
            ['guest_name' => 'Paul', 'guest_phone' => '6602187718', 'guest_address' => 'Pangkalpinang'],
            ['guest_name' => 'Donna', 'guest_phone' => '1069446011', 'guest_address' => 'Blitar'],
            ['guest_name' => 'Joshua', 'guest_phone' => '4843310067', 'guest_address' => 'Parepare'],
            ['guest_name' => 'Michelle', 'guest_phone' => '3919209215', 'guest_address' => 'Cirebon'],
            ['guest_name' => 'Kenneth', 'guest_phone' => '9101685936', 'guest_address' => 'Sukabumi'],
            ['guest_name' => 'Carol', 'guest_phone' => '6550525563', 'guest_address' => 'Depok'],
            ['guest_name' => 'Kevin', 'guest_phone' => '7286422153', 'guest_address' => 'Padang'],
            ['guest_name' => 'Amanda', 'guest_phone' => '8810637450', 'guest_address' => 'Metro'],
            ['guest_name' => 'Brian', 'guest_phone' => '2280464431', 'guest_address' => 'Makassar'],
            ['guest_name' => 'Melissa', 'guest_phone' => '4456798554', 'guest_address' => 'Madiun'],
            ['guest_name' => 'George', 'guest_phone' => '4317399927', 'guest_address' => 'Madiun'],
            ['guest_name' => 'Deborah', 'guest_phone' => '5637622922', 'guest_address' => 'Sibolga'],
            ['guest_name' => 'Timothy', 'guest_phone' => '0620267369', 'guest_address' => 'Lhokseumawe'],
            ['guest_name' => 'Stephanie', 'guest_phone' => '2811955705', 'guest_address' => 'Madiun'],
            ['guest_name' => 'Ronald', 'guest_phone' => '0379553626', 'guest_address' => 'Bitung'],
            ['guest_name' => 'Dorothy', 'guest_phone' => '8238431844', 'guest_address' => 'Medan'],
            ['guest_name' => 'Jason', 'guest_phone' => '1800389889', 'guest_address' => 'Payakumbuh'],
            ['guest_name' => 'Rebecca', 'guest_phone' => '2905630553', 'guest_address' => 'Prabumulih'],
            ['guest_name' => 'Edward', 'guest_phone' => '4090609910', 'guest_address' => 'Pematangsiantar'],
            ['guest_name' => 'Sharon', 'guest_phone' => '9473411114', 'guest_address' => 'Sukabumi'],
            ['guest_name' => 'Jeffrey', 'guest_phone' => '2361403573', 'guest_address' => 'Denpasar'],
            ['guest_name' => 'Laura', 'guest_phone' => '3422712898', 'guest_address' => 'Tanjungbalai'],
            ['guest_name' => 'Ryan', 'guest_phone' => '0755706096', 'guest_address' => 'Pariaman'],
            ['guest_name' => 'Cynthia', 'guest_phone' => '2780691109', 'guest_address' => 'Pagar Alam'],
            ['guest_name' => 'Jacob', 'guest_phone' => '0755831201', 'guest_address' => 'Makassar'],
            ['guest_name' => 'Amy', 'guest_phone' => '3649410860', 'guest_address' => 'Surabaya'],
            ['guest_name' => 'Gary', 'guest_phone' => '0952227572', 'guest_address' => 'Bandung'],
            ['guest_name' => 'Kathleen', 'guest_phone' => '7685588316', 'guest_address' => 'Gunungsitoli'],
            ['guest_name' => 'Nicholas', 'guest_phone' => '7518811223', 'guest_address' => 'Surakarta'],
            ['guest_name' => 'Angela', 'guest_phone' => '8539106443', 'guest_address' => 'Parepare'],
            ['guest_name' => 'Eric', 'guest_phone' => '6278925781', 'guest_address' => 'Gunungsitoli'],
            ['guest_name' => 'Shirley', 'guest_phone' => '6097948654', 'guest_address' => 'Padang Panjang'],
            ['guest_name' => 'Jonathan', 'guest_phone' => '2499949461', 'guest_address' => 'Bandung'],
            ['guest_name' => 'Brenda', 'guest_phone' => '3043106808', 'guest_address' => 'Tasikmalaya'],
            ['guest_name' => 'Stephen', 'guest_phone' => '6383071127', 'guest_address' => 'Bukittinggi'],
            ['guest_name' => 'Emma', 'guest_phone' => '1482305391', 'guest_address' => 'Banda Aceh'],
            ['guest_name' => 'Larry', 'guest_phone' => '6511388376', 'guest_address' => 'Salatiga'],
            ['guest_name' => 'Anna', 'guest_phone' => '2246320048', 'guest_address' => 'Jayapura'],
            ['guest_name' => 'Justin', 'guest_phone' => '9505873312', 'guest_address' => 'Balikpapan'],
            ['guest_name' => 'Pamela', 'guest_phone' => '2058316896', 'guest_address' => 'Bogor'],
            ['guest_name' => 'Scott', 'guest_phone' => '3233704019', 'guest_address' => 'Jayapura'],
            ['guest_name' => 'Nicole', 'guest_phone' => '4853449705', 'guest_address' => 'Lhokseumawe'],
            ['guest_name' => 'Brandon', 'guest_phone' => '2324981385', 'guest_address' => 'Bogor'],
            ['guest_name' => 'Samantha', 'guest_phone' => '1626776281', 'guest_address' => 'Bitung'],
            ['guest_name' => 'Benjamin', 'guest_phone' => '1666461784', 'guest_address' => 'Denpasar'],
            ['guest_name' => 'Katherine', 'guest_phone' => '4707998984', 'guest_address' => 'Tidore Kepulauan'],
            ['guest_name' => 'Samuel', 'guest_phone' => '3067930746', 'guest_address' => 'Sibolga'],
            ['guest_name' => 'Christine', 'guest_phone' => '8664806472', 'guest_address' => 'Surabaya'],
            ['guest_name' => 'Gregory', 'guest_phone' => '3744579681', 'guest_address' => 'Depok'],
            ['guest_name' => 'Helen', 'guest_phone' => '5894735638', 'guest_address' => 'Tidore Kepulauan'],
            ['guest_name' => 'Alexander', 'guest_phone' => '4152053643', 'guest_address' => 'Bukittinggi'],
            ['guest_name' => 'Debra', 'guest_phone' => '2757145253', 'guest_address' => 'Surabaya'],
            ['guest_name' => 'Patrick', 'guest_phone' => '3253732136', 'guest_address' => 'Payakumbuh'],
            ['guest_name' => 'Rachel', 'guest_phone' => '0330691748', 'guest_address' => 'Metro'],
            ['guest_name' => 'Frank', 'guest_phone' => '0805912524', 'guest_address' => 'Sibolga'],
            ['guest_name' => 'Carolyn', 'guest_phone' => '4183548395', 'guest_address' => 'Metro'],
            ['guest_name' => 'Raymond', 'guest_phone' => '6764127144', 'guest_address' => 'Palu'],
            ['guest_name' => 'Janet', 'guest_phone' => '0183168879', 'guest_address' => 'Sorong'],
            ['guest_name' => 'Jack', 'guest_phone' => '5857557495', 'guest_address' => 'Malang'],
            ['guest_name' => 'Maria', 'guest_phone' => '9695091115', 'guest_address' => 'Pariaman'],
            ['guest_name' => 'Dennis', 'guest_phone' => '5429660445', 'guest_address' => 'Lhokseumawe'],
            ['guest_name' => 'Catherine', 'guest_phone' => '6881213500', 'guest_address' => 'Dumai'],
            ['guest_name' => 'Jerry', 'guest_phone' => '2885009088', 'guest_address' => 'Depok'],
            ['guest_name' => 'Heather', 'guest_phone' => '1218104571', 'guest_address' => 'Palu'],

        ]);
    }
}
