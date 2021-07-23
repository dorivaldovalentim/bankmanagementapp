<?php

use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Cards */

        (new App\Models\Card())->create([
            'id' => 1,
            'user_id' => 1,
            'bank_id' => 1,
            'amount' => 59893.06,
            'expenses' => 21993.404,
            'savings' => 2637.003,
            'forme' => 35262.653,
            'number' => '20205593510001',
            'iban' => 'AO06 005500000205593510176',
            'expires_at' => '2023-11-01',
            'created_at' => '2021-01-18 21:25:12',
            'updated_at' => '2021-07-21 04:31:26'
        ]);

        (new App\Models\Card())->create([
            'id' => 2,
            'user_id' => 1,
            'bank_id' => 3,
            'amount' => 271637.84,
            'expenses' => 1357.49,
            'savings' => 269338.455,
            'forme' => 941.895,
            'number' => '14938561010001',
            'iban' => 'AO06 004000004938561010121',
            'expires_at' => '2024-11-01',
            'created_at' => '2021-01-27 00:45:30',
            'updated_at' => '2021-07-21 04:33:20'
        ]);


        /** Needs */
        (new App\Models\Need())->create([
            'id' => 1,
            'user_id' => 1,
            'need' => 'Márcia',
            'amount' => 10000,
            'description' => 'Levar a Márcia a Sair',
            'status' => 1,
            'created_at' => '2021-01-17 07:30:03',
            'updated_at' => '2021-01-17 07:30:23'
        ]);

        (new App\Models\Need())->create([
            'id' => 2,
            'user_id' => 1,
            'need' => 'Calçados',
            'amount' => 10000,
            'description' => 'Comprar calçados',
            'status' => 1,
            'created_at' => '2021-01-17 07:31:24',
            'updated_at' => '2021-01-17 07:32:22'
        ]);

        (new App\Models\Need())->create([
            'id' => 3,
            'user_id' => 1,
            'need' => 'Telefones',
            'amount' => 60000,
            'description' => 'Comprar telefone para a Ludi e para o Leo',
            'status' => 1,
            'created_at' => '2021-01-17 07:32:05',
            'updated_at' => '2021-01-24 14:55:00'
        ]);

        (new App\Models\Need())->create([
            'id' => 4,
            'user_id' => 1,
            'need' => 'Cinema',
            'amount' => 10000,
            'description' => 'Levar a Fátima a sair',
            'status' => 1,
            'created_at' => '2021-01-17 07:33:00',
            'updated_at' => '2021-03-19 05:37:43'
        ]);

        (new App\Models\Need())->create([
            'id' => 5,
            'user_id' => 1,
            'need' => 'Passeios',
            'amount' => 15000,
            'description' => 'Levar as crianças da família a passear',
            'status' => 0,
            'created_at' => '2021-01-17 07:33:58',
            'updated_at' => '2021-04-02 11:01:46'
        ]);

        (new App\Models\Need())->create([
            'id' => 6,
            'user_id' => 1,
            'need' => 'Bluetooths',
            'amount' => 6000,
            'description' => 'Comprar auriculares bluetooths para o Petelson e o Pappy',
            'status' => 1,
            'created_at' => '2021-01-17 07:35:23',
            'updated_at' => '2021-04-02 10:56:58'
        ]);

        (new App\Models\Need())->create([
            'id' => 7,
            'user_id' => 1,
            'need' => 'Aparelhos de som',
            'amount' => 5000,
            'description' => 'Comprar aparelhagem de som para o computador.',
            'status' => 0,
            'created_at' => '2021-01-22 07:51:57',
            'updated_at' => '2021-01-22 07:51:57'
        ]);

        (new App\Models\Need())->create([
            'id' => 8,
            'user_id' => 1,
            'need' => 'Cosméticos',
            'amount' => 10000,
            'description' => 'Comprar cosméticos',
            'status' => 1,
            'created_at' => '2021-01-22 07:57:10',
            'updated_at' => '2021-01-31 15:28:39'
        ]);

        (new App\Models\Need())->create([
            'id' => 9,
            'user_id' => 1,
            'need' => 'Telefones',
            'amount' => 60000,
            'description' => 'Comprar telefones para a Márcia e o Querobim',
            'status' => 0,
            'created_at' => '2021-01-24 16:09:33',
            'updated_at' => '2021-01-24 16:09:33'
        ]);

        (new App\Models\Need())->create([
            'id' => 10,
            'user_id' => 1,
            'need' => 'Roupas',
            'amount' => 10000,
            'description' => 'Preciso comprar roupas',
            'status' => 0,
            'created_at' => '2021-04-25 20:59:11',
            'updated_at' => '2021-04-25 21:00:22'
        ]);

        (new App\Models\Need())->create([
            'id' => 11,
            'user_id' => 1,
            'need' => 'Reestruturação do Quarto',
            'amount' => 100000,
            'description' => 'Preciso reestruturar o quarto',
            'status' => 0,
            'created_at' => '2021-04-26 05:16:33',
            'updated_at' => '2021-04-26 05:16:33'
        ]);


        /** Debit */

        (new App\Models\Debit())->create([
            'id' => 1,
            'name' => 'Stela',
            'user_id' => 1,
            'amount' => 35000,
            'created_at' => '2021-01-15 10:27:03',
            'updated_at' => '2021-04-12 05:11:18'
        ]);

        (new App\Models\Debit())->create([
            'id' => 2,
            'name' => 'Nani',
            'user_id' => 1,
            'amount' => 5000,
            'created_at' => '2021-01-15 10:27:54',
            'updated_at' => '2021-07-02 21:18:13'
        ]);

        (new App\Models\Debit())->create([
            'id' => 3,
            'name' => 'Jefth',
            'user_id' => 1,
            'amount' => 27676,
            'created_at' => '2021-01-15 10:28:00',
            'updated_at' => '2021-07-14 21:57:28'
        ]);

        (new App\Models\Debit())->create([
            'id' => 4,
            'name' => 'Mauro',
            'user_id' => 1,
            'amount' => 26000,
            'created_at' => '2021-01-17 07:37:29',
            'updated_at' => '2021-04-12 05:12:55'
        ]);

        (new App\Models\Debit())->create([
            'id' => 5,
            'name' => 'Fátima',
            'user_id' => 1,
            'amount' => 16000,
            'created_at' => '2021-01-17 22:36:07',
            'updated_at' => '2021-01-18 20:51:01'
        ]);

        (new App\Models\Debit())->create([
            'id' => 6,
            'name' => 'Miguel',
            'user_id' => 1,
            'amount' => 10000,
            'created_at' => '2021-01-18 21:02:13',
            'updated_at' => '2021-01-18 21:16:00'
        ]);

        (new App\Models\Debit())->create([
            'id' => 7,
            'name' => 'Pappy',
            'user_id' => 1,
            'amount' => 69000,
            'created_at' => '2021-01-18 21:02:41',
            'updated_at' => '2021-02-02 22:00:33'
        ]);

        (new App\Models\Debit())->create([
            'id' => 8,
            'name' => 'Beloy',
            'user_id' => 1,
            'amount' => 21000,
            'created_at' => '2021-01-18 21:02:57',
            'updated_at' => '2021-05-29 04:59:00'
        ]);

        (new App\Models\Debit())->create([
            'id' => 9,
            'name' => 'Mammy',
            'user_id' => 1,
            'amount' => 69100,
            'created_at' => '2021-01-18 21:03:15',
            'updated_at' => '2021-06-12 17:59:32'
        ]);

        (new App\Models\Debit())->create([
            'id' => 10,
            'name' => 'Elizângela',
            'user_id' => 1,
            'amount' => 7000,
            'created_at' => '2021-01-18 21:03:41',
            'updated_at' => '2021-01-31 15:32:48'
        ]);

        (new App\Models\Debit())->create([
            'id' => 11,
            'name' => 'René',
            'user_id' => 1,
            'amount' => 30000,
            'created_at' => '2021-01-22 19:11:49',
            'updated_at' => '2021-01-22 19:13:10'
        ]);

        (new App\Models\Debit())->create([
            'id' => 12,
            'name' => 'Cristi',
            'user_id' => 1,
            'amount' => 28000,
            'created_at' => '2021-01-24 16:06:19',
            'updated_at' => '2021-06-27 22:23:58'
        ]);

        (new App\Models\Debit())->create([
            'id' => 13,
            'name' => 'Guida',
            'user_id' => 1,
            'amount' => 0,
            'created_at' => '2021-01-31 15:38:34',
            'updated_at' => '2021-01-31 15:39:11'
        ]);

        (new App\Models\Debit())->create([
            'id' => 14,
            'name' => 'Adilson',
            'user_id' => 1,
            'amount' => 6000,
            'created_at' => '2021-02-02 21:58:18',
            'updated_at' => '2021-02-02 22:00:53'
        ]);

        (new App\Models\Debit())->create([
            'id' => 15,
            'name' => 'Petelson',
            'user_id' => 1,
            'amount' => 8000,
            'created_at' => '2021-02-06 12:43:32',
            'updated_at' => '2021-03-27 13:06:39'
        ]);

        (new App\Models\Debit())->create([
            'id' => 16,
            'name' => 'Anastâcio',
            'user_id' => 1,
            'amount' => 2000,
            'created_at' => '2021-02-11 08:50:55',
            'updated_at' => '2021-02-11 08:51:19'
        ]);

        (new App\Models\Debit())->create([
            'id' => 17,
            'name' => 'Ana Maria',
            'user_id' => 1,
            'amount' => 10000,
            'created_at' => '2021-02-21 23:05:01',
            'updated_at' => '2021-05-26 02:25:37'
        ]);

        (new App\Models\Debit())->create([
            'id' => 18,
            'name' => 'Gigia',
            'user_id' => 1,
            'amount' => 0,
            'created_at' => '2021-03-19 05:34:04',
            'updated_at' => '2021-03-21 22:54:05'
        ]);

        (new App\Models\Debit())->create([
            'id' => 19,
            'name' => 'Tio Félix',
            'user_id' => 1,
            'amount' => 100000,
            'created_at' => '2021-03-27 13:42:42',
            'updated_at' => '2021-03-27 13:44:47'
        ]);

        (new App\Models\Debit())->create([
            'id' => 20,
            'name' => 'Team Five',
            'user_id' => 1,
            'amount' => 5000,
            'created_at' => '2021-04-19 12:56:07',
            'updated_at' => '2021-04-19 12:57:12'
        ]);

        (new App\Models\Debit())->create([
            'id' => 21,
            'name' => 'Reginaldo',
            'user_id' => 1,
            'amount' => 50000,
            'created_at' => '2021-04-23 06:29:32',
            'updated_at' => '2021-05-26 02:19:43'
        ]);

        (new App\Models\Debit())->create([
            'id' => 22,
            'name' => 'Tia Jú',
            'user_id' => 1,
            'amount' => 10000,
            'created_at' => '2021-04-29 23:58:53',
            'updated_at' => '2021-07-08 22:15:15'
        ]);

        (new App\Models\Debit())->create([
            'id' => 23,
            'name' => 'Nari',
            'user_id' => 1,
            'amount' => 10000,
            'created_at' => '2021-05-09 17:03:48',
            'updated_at' => '2021-05-09 17:04:26'
        ]);

        (new App\Models\Debit())->create([
            'id' => 24,
            'name' => 'Ravelino',
            'user_id' => 1,
            'amount' => 0,
            'created_at' => '2021-05-13 04:42:49',
            'updated_at' => '2021-07-02 21:16:54'
        ]);

        (new App\Models\Debit())->create([
            'id' => 25,
            'name' => 'Josefa',
            'user_id' => 1,
            'amount' => 0,
            'created_at' => '2021-06-05 08:18:29',
            'updated_at' => '2021-06-12 18:03:20'
        ]);

        (new App\Models\Debit())->create([
            'id' => 26,
            'name' => 'Laura',
            'user_id' => 1,
            'amount' => 0,
            'created_at' => '2021-06-27 22:23:12',
            'updated_at' => '2021-07-08 22:14:30'
        ]);


        /** DebitLog */

        (new App\Models\Debitslog())->create([
            'id' => 1,
            'user_id' => 1,
            'debit_id' => 1,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado para o seu taxi',
            'created_at' => '2021-01-15 10:27:30',
            'updated_at' => '2021-04-13 21:30:09'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 2,
            'user_id' => 1,
            'debit_id' => 2,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Pediu-me para sei lá o que ??',
            'created_at' => '2021-01-15 10:28:41',
            'updated_at' => '2021-04-13 21:30:09'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 3,
            'user_id' => 1,
            'debit_id' => 2,
            'amount' => 5000,
            'type' => 'I',
            'description' => 'Pagou-me metade na semana a seguir',
            'created_at' => '2021-01-15 10:29:16',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 4,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 3000,
            'type' => 'O',
            'description' => 'Mandou-me comprar Bluetooth',
            'created_at' => '2021-01-15 10:31:52',
            'updated_at' => '2021-04-13 21:30:09'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 5,
            'user_id' => 1,
            'debit_id' => 4,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado',
            'created_at' => '2021-01-17 07:37:52',
            'updated_at' => '2021-04-13 21:30:09'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 6,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Dei a Guida em nome do Jefth',
            'created_at' => '2021-01-17 22:30:48',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 7,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 500,
            'type' => 'O',
            'description' => 'Dei ao René, em  nome do Jefth',
            'created_at' => '2021-01-17 22:31:16',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 8,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 3000,
            'type' => 'I',
            'description' => 'Pagou o dinheiro do Bluetooth',
            'created_at' => '2021-01-17 22:35:06',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 9,
            'user_id' => 1,
            'debit_id' => 5,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado',
            'created_at' => '2021-01-17 22:36:32',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 10,
            'user_id' => 1,
            'debit_id' => 5,
            'amount' => 6000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado',
            'created_at' => '2021-01-18 20:51:01',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 11,
            'user_id' => 1,
            'debit_id' => 8,
            'amount' => 1000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado',
            'created_at' => '2021-01-18 21:06:53',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 12,
            'user_id' => 1,
            'debit_id' => 10,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado, não sei para o que',
            'created_at' => '2021-01-18 21:09:09',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 13,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 1500,
            'type' => 'O',
            'description' => 'Emprestei ao Jefth que deu/emprestou a Stela',
            'created_at' => '2021-01-18 21:11:14',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 14,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 2000,
            'type' => 'O',
            'description' => 'Dei emprestado ao Jefth que deu ao Pappy',
            'created_at' => '2021-01-18 21:12:04',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 15,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 51400,
            'type' => 'O',
            'description' => 'Jefth pediu-me emprestado para comprar um novo telefone',
            'created_at' => '2021-01-18 21:12:34',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 16,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Jefth pediu-me que transferisse para alguém',
            'created_at' => '2021-01-18 21:12:51',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 17,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 2000,
            'type' => 'O',
            'description' => 'Emprestei ao Jefth para o taxi da Níria',
            'created_at' => '2021-01-18 21:13:13',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 18,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Jefth o pediu-me que dê-se a Má',
            'created_at' => '2021-01-18 21:13:36',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 19,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 6000,
            'type' => 'O',
            'description' => 'Jefth emprestou a juri',
            'created_at' => '2021-01-18 21:13:58',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 20,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Emprestei ao Jefth',
            'created_at' => '2021-01-18 21:15:19',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 21,
            'user_id' => 1,
            'debit_id' => 6,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Dei emprestado',
            'created_at' => '2021-01-18 21:16:00',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 22,
            'user_id' => 1,
            'debit_id' => 7,
            'amount' => 14000,
            'type' => 'O',
            'description' => 'Dei emprestado ao Pappy',
            'created_at' => '2021-01-18 21:16:51',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 23,
            'user_id' => 1,
            'debit_id' => 7,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Dei emprestado ao Pappy',
            'created_at' => '2021-01-18 21:17:59',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 24,
            'user_id' => 1,
            'debit_id' => 7,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Dei emprestado ao Pappy',
            'created_at' => '2021-01-18 21:18:11',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 25,
            'user_id' => 1,
            'debit_id' => 7,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Dei emprestado ao Pappy',
            'created_at' => '2021-01-18 21:18:24',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 26,
            'user_id' => 1,
            'debit_id' => 7,
            'amount' => 15000,
            'type' => 'O',
            'description' => 'Dei emprestado ao Pappy',
            'created_at' => '2021-01-18 21:19:18',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 27,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 50000,
            'type' => 'I',
            'description' => 'Jefth reduziu nas suas dívidas',
            'created_at' => '2021-01-18 21:19:46',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 28,
            'user_id' => 1,
            'debit_id' => 11,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Emprestei para o taxi e para arranjar o seu telefone',
            'created_at' => '2021-01-22 19:12:40',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 29,
            'user_id' => 1,
            'debit_id' => 11,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Emprestei para que ele comprasse um telefone',
            'created_at' => '2021-01-22 19:13:10',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 30,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 600,
            'type' => 'I',
            'description' => 'Quilápis em gelado',
            'created_at' => '2021-01-22 19:13:43',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 31,
            'user_id' => 1,
            'debit_id' => 12,
            'amount' => 7000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado',
            'created_at' => '2021-01-24 16:07:57',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 32,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 120,
            'type' => 'I',
            'description' => 'A minha dívida cresceu',
            'created_at' => '2021-01-27 00:46:15',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 33,
            'user_id' => 1,
            'debit_id' => 8,
            'amount' => 700,
            'type' => 'O',
            'description' => 'Paguei a Má',
            'created_at' => '2021-01-31 15:30:07',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 34,
            'user_id' => 1,
            'debit_id' => 8,
            'amount' => 700,
            'type' => 'I',
            'description' => 'Corrigindo o erro',
            'created_at' => '2021-01-31 15:30:34',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 35,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 700,
            'type' => 'O',
            'description' => 'Paguei a Mammy',
            'created_at' => '2021-01-31 15:31:11',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 36,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 200,
            'type' => 'I',
            'description' => 'Aumentei no meu quilape ??',
            'created_at' => '2021-01-31 15:31:46',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 37,
            'user_id' => 1,
            'debit_id' => 10,
            'amount' => 3000,
            'type' => 'I',
            'description' => 'Descontei na mesada da Elizângela',
            'created_at' => '2021-01-31 15:32:48',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 38,
            'user_id' => 1,
            'debit_id' => 13,
            'amount' => 2000,
            'type' => 'O',
            'description' => 'Paguei a energia da Guida',
            'created_at' => '2021-01-31 15:38:51',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 39,
            'user_id' => 1,
            'debit_id' => 13,
            'amount' => 2000,
            'type' => 'I',
            'description' => 'Ela pagou o quilape no mesmo dia, pois já tinha o dinheiro em mão',
            'created_at' => '2021-01-31 15:39:11',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 40,
            'user_id' => 1,
            'debit_id' => 7,
            'amount' => 15000,
            'type' => 'O',
            'description' => 'Emprestei ao Pappy',
            'created_at' => '2021-02-02 22:00:32',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 41,
            'user_id' => 1,
            'debit_id' => 14,
            'amount' => 6000,
            'type' => 'O',
            'description' => 'Emprestei ao Adilson',
            'created_at' => '2021-02-02 22:00:53',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 42,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 220,
            'type' => 'I',
            'description' => 'Sempre a aumentar kkkk',
            'created_at' => '2021-02-06 12:40:45',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 43,
            'user_id' => 1,
            'debit_id' => 15,
            'amount' => 500,
            'type' => 'I',
            'description' => 'Deu-me para guardar',
            'created_at' => '2021-02-06 12:44:03',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 44,
            'user_id' => 1,
            'debit_id' => 15,
            'amount' => 100,
            'type' => 'O',
            'description' => 'Pediu sei lá para o que?',
            'created_at' => '2021-02-06 12:44:18',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 45,
            'user_id' => 1,
            'debit_id' => 15,
            'amount' => 1000,
            'type' => 'I',
            'description' => 'Aumentou no cofre kkk',
            'created_at' => '2021-02-06 12:44:36',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 46,
            'user_id' => 1,
            'debit_id' => 12,
            'amount' => 16000,
            'type' => 'O',
            'description' => 'Pediu-me para comprar um celular',
            'created_at' => '2021-02-11 08:50:43',
            'updated_at' => '2021-04-13 21:30:10'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 47,
            'user_id' => 1,
            'debit_id' => 16,
            'amount' => 2000,
            'type' => 'O',
            'description' => 'Pediu-me, sei nem para o que!',
            'created_at' => '2021-02-11 08:51:19',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 48,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 200,
            'type' => 'I',
            'description' => 'Aumentei no gelado',
            'created_at' => '2021-02-11 08:51:52',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 49,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 100,
            'type' => 'O',
            'description' => 'Aumentando no quilape kkkkk',
            'created_at' => '2021-02-11 08:52:23',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 50,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 200,
            'type' => 'I',
            'description' => 'Corrigindo no quilape kkkkk',
            'created_at' => '2021-02-11 08:52:36',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 51,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 160,
            'type' => 'I',
            'description' => 'Sempre aumentando na dívida',
            'created_at' => '2021-02-13 17:15:00',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 52,
            'user_id' => 1,
            'debit_id' => 17,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Dei emprestado a seu irmão em seu nome',
            'created_at' => '2021-02-21 23:05:26',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 53,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Mandei por referência no dia da compra do baú',
            'created_at' => '2021-03-01 21:34:03',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 54,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 17000,
            'type' => 'O',
            'description' => 'Emprestei para a compra de pneus do carro',
            'created_at' => '2021-03-04 21:54:24',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 55,
            'user_id' => 1,
            'debit_id' => 17,
            'amount' => 5000,
            'type' => 'I',
            'description' => 'Pagou',
            'created_at' => '2021-03-07 08:46:34',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 56,
            'user_id' => 1,
            'debit_id' => 15,
            'amount' => 1400,
            'type' => 'O',
            'description' => 'Já paguei',
            'created_at' => '2021-03-11 21:34:29',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 57,
            'user_id' => 1,
            'debit_id' => 1,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Aumentou na dívida',
            'created_at' => '2021-03-11 21:35:00',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 58,
            'user_id' => 1,
            'debit_id' => 17,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Emprestei a Ana Maria',
            'created_at' => '2021-03-11 22:24:14',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 59,
            'user_id' => 1,
            'debit_id' => 18,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Emprestei',
            'created_at' => '2021-03-19 05:34:20',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 60,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 50000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado e deu a Mammy',
            'created_at' => '2021-03-19 05:36:34',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 61,
            'user_id' => 1,
            'debit_id' => 18,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Já me pagou',
            'created_at' => '2021-03-21 22:53:36',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 62,
            'user_id' => 1,
            'debit_id' => 18,
            'amount' => 10000,
            'type' => 'I',
            'description' => 'Já me pagou (correção)',
            'created_at' => '2021-03-21 22:54:05',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 63,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 50000,
            'type' => 'O',
            'description' => 'Jefth reduziu nas dívidas',
            'created_at' => '2021-03-25 05:46:27',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 64,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 100000,
            'type' => 'I',
            'description' => 'Jefth reduziu nas dívidas (correção)',
            'created_at' => '2021-03-25 05:47:13',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 65,
            'user_id' => 1,
            'debit_id' => 15,
            'amount' => 8000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado para comprar telefone',
            'created_at' => '2021-03-27 13:06:39',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 66,
            'user_id' => 1,
            'debit_id' => 19,
            'amount' => 100000,
            'type' => 'O',
            'description' => 'Investi em uma amizade do Pappy',
            'created_at' => '2021-03-27 13:44:47',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 67,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 105400,
            'type' => 'O',
            'description' => 'Pagou tudo tudinho e zerou as dívidas comigo',
            'created_at' => '2021-04-07 13:57:02',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 68,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 210800,
            'type' => 'I',
            'description' => 'Correção',
            'created_at' => '2021-04-07 13:58:00',
            'updated_at' => '2021-04-13 21:30:12'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 69,
            'user_id' => 1,
            'debit_id' => 1,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Stela pediu-me emprestado',
            'created_at' => '2021-04-12 05:11:17',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 70,
            'user_id' => 1,
            'debit_id' => 4,
            'amount' => 6000,
            'type' => 'O',
            'description' => 'Levou para alguém que estava no hospital',
            'created_at' => '2021-04-12 05:12:55',
            'updated_at' => '2021-04-13 21:30:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 71,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 900,
            'type' => 'O',
            'description' => 'Sabia que já paguei isso faz tempo?',
            'created_at' => '2021-04-13 21:44:34',
            'updated_at' => '2021-04-13 21:44:34'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 72,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 600,
            'type' => 'I',
            'description' => 'Não tenho bem a certeza, mas acho que é isso que tenho do gelado',
            'created_at' => '2021-04-13 21:45:47',
            'updated_at' => '2021-04-13 21:45:47'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 73,
            'user_id' => 1,
            'debit_id' => 20,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Emprestei ao Sandro, Mano Toy e Petelson',
            'created_at' => '2021-04-19 12:57:11',
            'updated_at' => '2021-04-19 12:57:11'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 74,
            'user_id' => 1,
            'debit_id' => 21,
            'amount' => 3000,
            'type' => 'O',
            'description' => 'Recarreguei a net do Reginaldo',
            'created_at' => '2021-04-23 06:30:16',
            'updated_at' => '2021-04-23 06:30:16'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 75,
            'user_id' => 1,
            'debit_id' => 21,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Dei emprestado ao Reginaldo',
            'created_at' => '2021-04-23 06:30:40',
            'updated_at' => '2021-04-23 06:30:40'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 76,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 29000,
            'type' => 'I',
            'description' => 'Recebi o pagamento pelo Legislação Compilada do Alan e retirei a parte do Jefth',
            'created_at' => '2021-04-23 06:34:32',
            'updated_at' => '2021-04-23 06:34:32'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 77,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 9000,
            'type' => 'O',
            'description' => 'Pediu que eu desse a Má',
            'created_at' => '2021-04-23 06:34:59',
            'updated_at' => '2021-04-23 06:34:59'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 78,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 15000,
            'type' => 'O',
            'description' => 'Pediu que eu desse para a Elizângela',
            'created_at' => '2021-04-23 06:35:21',
            'updated_at' => '2021-04-23 06:35:21'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 79,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Pediu que eu mandasse ao Pappy',
            'created_at' => '2021-04-23 06:35:42',
            'updated_at' => '2021-04-23 06:35:42'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 80,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 600,
            'type' => 'O',
            'description' => 'Paguei minhas dívidas',
            'created_at' => '2021-04-25 21:01:49',
            'updated_at' => '2021-04-25 21:01:49'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 81,
            'user_id' => 1,
            'debit_id' => 22,
            'amount' => 1000,
            'type' => 'O',
            'description' => 'Paguei a sua energia',
            'created_at' => '2021-04-29 23:59:17',
            'updated_at' => '2021-04-29 23:59:17'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 82,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 300,
            'type' => 'I',
            'description' => 'Chupando gelado 😅😅',
            'created_at' => '2021-04-30 00:00:08',
            'updated_at' => '2021-04-30 00:00:08'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 83,
            'user_id' => 1,
            'debit_id' => 21,
            'amount' => 23000,
            'type' => 'I',
            'description' => 'Pagou tudinho logo após receber o salário',
            'created_at' => '2021-05-02 22:07:44',
            'updated_at' => '2021-05-02 22:07:44'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 84,
            'user_id' => 1,
            'debit_id' => 23,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Pediu-me para iniciar um negócio',
            'created_at' => '2021-05-09 17:04:26',
            'updated_at' => '2021-05-09 17:04:26'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 85,
            'user_id' => 1,
            'debit_id' => 24,
            'amount' => 40000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado',
            'created_at' => '2021-05-13 04:43:15',
            'updated_at' => '2021-05-13 04:43:15'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 86,
            'user_id' => 1,
            'debit_id' => 24,
            'amount' => 40000,
            'type' => 'I',
            'description' => 'Pagou logo no dia seguinte',
            'created_at' => '2021-05-15 16:34:37',
            'updated_at' => '2021-05-15 16:34:37'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 87,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 600,
            'type' => 'I',
            'description' => 'Chupei mais alguns gelados',
            'created_at' => '2021-05-15 16:39:27',
            'updated_at' => '2021-05-15 16:39:27'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 88,
            'user_id' => 1,
            'debit_id' => 21,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Precisava de ajuda para o filho que estava no hospital',
            'created_at' => '2021-05-16 07:03:36',
            'updated_at' => '2021-05-16 07:03:36'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 89,
            'user_id' => 1,
            'debit_id' => 21,
            'amount' => 30000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado para fazer uma análise ao olho',
            'created_at' => '2021-05-26 02:19:42',
            'updated_at' => '2021-05-26 02:19:42'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 90,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 50000,
            'type' => 'O',
            'description' => 'Pediu-me para suprir algumas necessidades do pedido da Elizângela',
            'created_at' => '2021-05-26 02:25:06',
            'updated_at' => '2021-05-26 02:25:06'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 91,
            'user_id' => 1,
            'debit_id' => 17,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Emprestei ao Catarino',
            'created_at' => '2021-05-26 02:25:37',
            'updated_at' => '2021-05-26 02:25:37'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 92,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 60000,
            'type' => 'O',
            'description' => 'Ainda relacionado ao pedido',
            'created_at' => '2021-05-29 04:57:48',
            'updated_at' => '2021-05-29 04:57:48'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 93,
            'user_id' => 1,
            'debit_id' => 24,
            'amount' => 1500,
            'type' => 'O',
            'description' => 'Pediu-me emprestado para comprar comida',
            'created_at' => '2021-05-29 04:58:27',
            'updated_at' => '2021-05-29 04:58:27'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 94,
            'user_id' => 1,
            'debit_id' => 8,
            'amount' => 20000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado para lidar com algumas coisas do pedido',
            'created_at' => '2021-05-29 04:59:00',
            'updated_at' => '2021-05-29 04:59:00'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 95,
            'user_id' => 1,
            'debit_id' => 25,
            'amount' => 1000,
            'type' => 'O',
            'description' => 'Carreguei o saldo dela',
            'created_at' => '2021-06-05 08:18:58',
            'updated_at' => '2021-06-05 08:18:58'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 96,
            'user_id' => 1,
            'debit_id' => 25,
            'amount' => 849.73,
            'type' => 'O',
            'description' => 'Paguei o almoço para ela',
            'created_at' => '2021-06-05 08:19:22',
            'updated_at' => '2021-06-05 08:19:22'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 97,
            'user_id' => 1,
            'debit_id' => 9,
            'amount' => 40000,
            'type' => 'I',
            'description' => 'Jefth mandouu-se 62.000,00 KZs, eu fiquei com 40.000,00 KZs e dei 22.000,00 a Má',
            'created_at' => '2021-06-12 17:59:32',
            'updated_at' => '2021-06-12 17:59:32'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 98,
            'user_id' => 1,
            'debit_id' => 25,
            'amount' => 1849.73,
            'type' => 'I',
            'description' => 'Na verdade ela pagou 2.000,00 KZs, mas enfim rsrsrsrs',
            'created_at' => '2021-06-12 18:03:20',
            'updated_at' => '2021-06-12 18:03:20'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 99,
            'user_id' => 1,
            'debit_id' => 2,
            'amount' => 5000,
            'type' => 'I',
            'description' => 'Pediu-me para sei lá o que',
            'created_at' => '2021-06-27 20:49:27',
            'updated_at' => '2021-06-27 20:49:27'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 100,
            'user_id' => 1,
            'debit_id' => 22,
            'amount' => 1000,
            'type' => 'I',
            'description' => 'Pagou a sua dívida',
            'created_at' => '2021-06-27 21:40:39',
            'updated_at' => '2021-06-27 21:40:39'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 101,
            'user_id' => 1,
            'debit_id' => 12,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Dei-lhe emprestado para a entrada no trabalho do qual a Elizângela falava',
            'created_at' => '2021-06-27 22:23:58',
            'updated_at' => '2021-06-27 22:23:58'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 102,
            'user_id' => 1,
            'debit_id' => 26,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Dei-lhe emprestado para a entrada no trabalho do qual a Elizângela falava',
            'created_at' => '2021-06-27 22:24:19',
            'updated_at' => '2021-06-27 22:24:19'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 103,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 427,
            'type' => 'O',
            'description' => 'Pediu-me que comprasse bolachas',
            'created_at' => '2021-07-02 20:40:29',
            'updated_at' => '2021-07-02 20:40:29'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 104,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 15000,
            'type' => 'O',
            'description' => 'Pediu que eu tirasse no multicaixa sei lá para o que',
            'created_at' => '2021-07-02 20:42:04',
            'updated_at' => '2021-07-02 20:42:04'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 105,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 249,
            'type' => 'O',
            'description' => 'Mais uma vez pediu que eu comprasse bolacha',
            'created_at' => '2021-07-02 20:42:26',
            'updated_at' => '2021-07-02 20:42:26'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 106,
            'user_id' => 1,
            'debit_id' => 24,
            'amount' => 1500,
            'type' => 'I',
            'description' => 'Já pagou até faz tempo ksksks',
            'created_at' => '2021-07-02 21:16:54',
            'updated_at' => '2021-07-02 21:16:54'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 107,
            'user_id' => 1,
            'debit_id' => 2,
            'amount' => 5000,
            'type' => 'O',
            'description' => 'Como assim Nani não me deve?? Se calhar até seriam 10.000 KZs',
            'created_at' => '2021-07-02 21:18:13',
            'updated_at' => '2021-07-02 21:18:13'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 108,
            'user_id' => 1,
            'debit_id' => 26,
            'amount' => 5000,
            'type' => 'I',
            'description' => 'Já foi paga',
            'created_at' => '2021-07-08 22:14:30',
            'updated_at' => '2021-07-08 22:14:30'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 109,
            'user_id' => 1,
            'debit_id' => 22,
            'amount' => 10000,
            'type' => 'O',
            'description' => 'Pediu-me emprestado',
            'created_at' => '2021-07-08 22:15:15',
            'updated_at' => '2021-07-08 22:15:15'
        ]);

        (new App\Models\Debitslog())->create([
            'id' => 110,
            'user_id' => 1,
            'debit_id' => 3,
            'amount' => 7000,
            'type' => 'O',
            'description' => 'Dei empestado ao René em nome do Jefth para comprar grelhas para as colunas',
            'created_at' => '2021-07-08 22:15:07',
            'updated_at' => '2021-07-08 22:15:07'
        ]);


        /** Transations */
        
        (new App\Models\Transation())->create([
            'id' => 1,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 166059.12,
            'before_transation' => 0,
            'after_transation' => 166059.12,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi da outra conta',
            'created_at' => '2021-01-30 11:18:14',
            'updated_at' => '2021-01-30 11:18:14'
        ]);

        (new App\Models\Transation())->create([
            'id' => 2,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 275072.43,
            'before_transation' => 0,
            'after_transation' => 275072.43,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o meu salário',
            'created_at' => '2021-01-31 15:35:30',
            'updated_at' => '2021-01-31 15:35:30'
        ]);

        (new App\Models\Transation())->create([
            'id' => 3,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 13820,
            'before_transation' => 275072.43,
            'after_transation' => 261252.43,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei cosméticos',
            'created_at' => '2021-01-31 15:37:25',
            'updated_at' => '2021-01-31 15:37:25'
        ]);

        (new App\Models\Transation())->create([
            'id' => 4,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 40000,
            'before_transation' => 261252.43,
            'after_transation' => 221252.43,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Dei a Mammy',
            'created_at' => '2021-01-31 15:37:39',
            'updated_at' => '2021-01-31 15:37:39'
        ]);

        (new App\Models\Transation())->create([
            'id' => 5,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 221252.43,
            'after_transation' => 219252.43,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Paguei a energia da Guida',
            'created_at' => '2021-01-31 15:38:07',
            'updated_at' => '2021-01-31 15:38:07'
        ]);

        (new App\Models\Transation())->create([
            'id' => 6,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 6000,
            'before_transation' => 219252.43,
            'after_transation' => 213252.43,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Emprestei ao Adilson',
            'created_at' => '2021-02-02 21:59:28',
            'updated_at' => '2021-02-02 21:59:28'
        ]);

        (new App\Models\Transation())->create([
            'id' => 7,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 15000,
            'before_transation' => 213252.43,
            'after_transation' => 198252.43,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Emprestei ao Pappy',
            'created_at' => '2021-02-02 21:59:44',
            'updated_at' => '2021-02-02 21:59:44'
        ]);

        (new App\Models\Transation())->create([
            'id' => 8,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2483.17,
            'before_transation' => 198252.43,
            'after_transation' => 195769.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns bolos ??',
            'created_at' => '2021-02-06 12:42:51',
            'updated_at' => '2021-02-06 12:42:51'
        ]);

        (new App\Models\Transation())->create([
            'id' => 9,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 4050,
            'before_transation' => 195769.26,
            'after_transation' => 191719.26,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Recarreguei a DSTV',
            'created_at' => '2021-02-11 08:47:31',
            'updated_at' => '2021-02-11 08:47:31'
        ]);

        (new App\Models\Transation())->create([
            'id' => 10,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 191719.26,
            'after_transation' => 189719.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Emprestei ao Anastâcio',
            'created_at' => '2021-02-11 08:48:28',
            'updated_at' => '2021-02-11 08:48:28'
        ]);

        (new App\Models\Transation())->create([
            'id' => 11,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1850,
            'before_transation' => 189719.26,
            'after_transation' => 187869.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Curti com o Querobim e outros',
            'created_at' => '2021-02-11 08:49:12',
            'updated_at' => '2021-02-11 08:49:12'
        ]);

        (new App\Models\Transation())->create([
            'id' => 12,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 16000,
            'before_transation' => 187869.26,
            'after_transation' => 171869.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Emprestei a Cristi',
            'created_at' => '2021-02-11 08:49:30',
            'updated_at' => '2021-02-11 08:49:30'
        ]);

        (new App\Models\Transation())->create([
            'id' => 13,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 6000,
            'before_transation' => 171869.26,
            'after_transation' => 165869.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Tirei para suprir algumas necessidades',
            'created_at' => '2021-02-11 08:49:59',
            'updated_at' => '2021-02-11 08:49:59'
        ]);

        (new App\Models\Transation())->create([
            'id' => 14,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3000,
            'before_transation' => 165869.26,
            'after_transation' => 162869.26,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Paguei a Energia',
            'created_at' => '2021-02-21 15:20:47',
            'updated_at' => '2021-02-21 15:20:47'
        ]);

        (new App\Models\Transation())->create([
            'id' => 15,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1237,
            'before_transation' => 162869.26,
            'after_transation' => 161632.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos',
            'created_at' => '2021-02-21 15:21:09',
            'updated_at' => '2021-02-21 15:21:09'
        ]);

        (new App\Models\Transation())->create([
            'id' => 16,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1500,
            'before_transation' => 161632.26,
            'after_transation' => 160132.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei chip da Movicel',
            'created_at' => '2021-02-21 23:06:24',
            'updated_at' => '2021-02-21 23:06:24'
        ]);

        (new App\Models\Transation())->create([
            'id' => 17,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 4000,
            'before_transation' => 160132.26,
            'after_transation' => 156132.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Paguei ao Petelson e tirei uma parte para o meu taxi',
            'created_at' => '2021-02-21 23:06:52',
            'updated_at' => '2021-02-21 23:06:52'
        ]);

        (new App\Models\Transation())->create([
            'id' => 18,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 6000,
            'before_transation' => 156132.26,
            'after_transation' => 150132.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => '5000 emprestei ao irmão do Catarino e 1000 para o taxi',
            'created_at' => '2021-02-21 23:07:24',
            'updated_at' => '2021-02-21 23:07:24'
        ]);

        (new App\Models\Transation())->create([
            'id' => 19,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 150132.26,
            'after_transation' => 149132.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei saldo para o Pappy',
            'created_at' => '2021-02-21 23:07:41',
            'updated_at' => '2021-02-21 23:07:41'
        ]);

        (new App\Models\Transation())->create([
            'id' => 20,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 149132.26,
            'after_transation' => 148132.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei saldo para a Joselma',
            'created_at' => '2021-02-21 23:07:56',
            'updated_at' => '2021-02-21 23:07:56'
        ]);

        (new App\Models\Transation())->create([
            'id' => 21,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1038,
            'before_transation' => 148132.26,
            'after_transation' => 147094.26,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei algums mimos',
            'created_at' => '2021-02-27 03:42:02',
            'updated_at' => '2021-02-27 03:42:02'
        ]);

        (new App\Models\Transation())->create([
            'id' => 22,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 20000,
            'before_transation' => 147094.26,
            'after_transation' => 127094.26,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Emprestei ao Jefth',
            'created_at' => '2021-02-27 03:42:35',
            'updated_at' => '2021-02-27 03:42:35'
        ]);

        (new App\Models\Transation())->create([
            'id' => 23,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 127094.26,
            'after_transation' => 125094.26,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Recarreguei os meus chips',
            'created_at' => '2021-02-27 03:42:59',
            'updated_at' => '2021-02-27 03:42:59'
        ]);

        (new App\Models\Transation())->create([
            'id' => 24,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 25000,
            'before_transation' => 166059.12,
            'after_transation' => 141059.12,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Tirei para comprar o meu telefone (a outra parte tirei em despesas)',
            'created_at' => '2021-02-27 03:45:32',
            'updated_at' => '2021-02-27 03:45:32'
        ]);

        (new App\Models\Transation())->create([
            'id' => 25,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 26000,
            'before_transation' => 141059.12,
            'after_transation' => 115059.12,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Tirei para comprar o meu telefone (a outra parte tirei em para mim)',
            'created_at' => '2021-02-27 03:46:22',
            'updated_at' => '2021-02-27 03:46:22'
        ]);

        (new App\Models\Transation())->create([
            'id' => 26,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 270220.63,
            'before_transation' => 115059.12,
            'after_transation' => 385279.75,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o meu salário',
            'created_at' => '2021-03-01 19:01:53',
            'updated_at' => '2021-03-01 19:01:53'
        ]);

        (new App\Models\Transation())->create([
            'id' => 27,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 1000,
            'before_transation' => 385279.75,
            'after_transation' => 384279.75,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei saldo para a Maria',
            'created_at' => '2021-03-01 19:03:54',
            'updated_at' => '2021-03-01 19:03:54'
        ]);

        (new App\Models\Transation())->create([
            'id' => 28,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 270220.63,
            'before_transation' => 125094.26,
            'after_transation' => 395314.89,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o meu salário',
            'created_at' => '2021-03-01 19:11:22',
            'updated_at' => '2021-03-01 19:11:22'
        ]);

        (new App\Models\Transation())->create([
            'id' => 29,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 270220.63,
            'before_transation' => 384279.75,
            'after_transation' => 114059.12,
            'where' => 'Geral',
            'type' => 'O',
            'description' => 'Não recebi nessa conta kkk',
            'created_at' => '2021-03-01 21:31:23',
            'updated_at' => '2021-03-01 21:31:23'
        ]);

        (new App\Models\Transation())->create([
            'id' => 30,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 10000,
            'before_transation' => 395314.89,
            'after_transation' => 385314.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Fiz alguma coisa',
            'created_at' => '2021-03-01 21:35:04',
            'updated_at' => '2021-03-01 21:35:04'
        ]);

        (new App\Models\Transation())->create([
            'id' => 31,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 200,
            'before_transation' => 114059.12,
            'after_transation' => 113859.12,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Fiz a segunda via do meu cartão SIM da Unitel',
            'created_at' => '2021-03-01 21:41:46',
            'updated_at' => '2021-03-01 21:41:46'
        ]);

        (new App\Models\Transation())->create([
            'id' => 32,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2500,
            'before_transation' => 113859.12,
            'after_transation' => 111359.12,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Fiz a segunda via do meu cartão SIM da Movicel ecomprei um outro para a Elizângela',
            'created_at' => '2021-03-01 21:42:15',
            'updated_at' => '2021-03-01 21:42:15'
        ]);

        (new App\Models\Transation())->create([
            'id' => 33,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 6610,
            'before_transation' => 111359.12,
            'after_transation' => 104749.12,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei sandálias para mim',
            'created_at' => '2021-03-01 21:43:05',
            'updated_at' => '2021-03-01 21:43:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 34,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 500,
            'before_transation' => 104749.12,
            'after_transation' => 104249.12,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguma coisa',
            'created_at' => '2021-03-01 21:43:32',
            'updated_at' => '2021-03-01 21:43:32'
        ]);

        (new App\Models\Transation())->create([
            'id' => 35,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 5000,
            'before_transation' => 104249.12,
            'after_transation' => 99249.12,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Acerto de contas',
            'created_at' => '2021-03-01 21:44:37',
            'updated_at' => '2021-03-01 21:44:37'
        ]);

        (new App\Models\Transation())->create([
            'id' => 36,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 385314.89,
            'after_transation' => 384314.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei saldo para a Maria',
            'created_at' => '2021-03-01 21:48:43',
            'updated_at' => '2021-03-01 21:48:43'
        ]);

        (new App\Models\Transation())->create([
            'id' => 37,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 384314.89,
            'after_transation' => 382314.89,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Acerto de contas',
            'created_at' => '2021-03-01 21:49:07',
            'updated_at' => '2021-03-01 21:49:07'
        ]);

        (new App\Models\Transation())->create([
            'id' => 38,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 50000,
            'before_transation' => 382314.89,
            'after_transation' => 332314.89,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Dei assim:\r\n15000 => Elizângela\r\n10000 => Ludmila\r\n15000 => Pappy\r\n10000 => Mammy',
            'created_at' => '2021-03-02 21:26:05',
            'updated_at' => '2021-03-02 21:26:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 39,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2634,
            'before_transation' => 332314.89,
            'after_transation' => 329680.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei bolachas (mimos)',
            'created_at' => '2021-03-03 19:31:57',
            'updated_at' => '2021-03-03 19:31:57'
        ]);

        (new App\Models\Transation())->create([
            'id' => 40,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 25000,
            'before_transation' => 329680.89,
            'after_transation' => 304680.89,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Taxi, uma parte para a Mammy e outra para o pedido da Elizângela',
            'created_at' => '2021-03-03 19:33:11',
            'updated_at' => '2021-03-03 19:33:11'
        ]);

        (new App\Models\Transation())->create([
            'id' => 41,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 5000,
            'before_transation' => 304680.89,
            'after_transation' => 299680.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Pappy comprou remédios para mim',
            'created_at' => '2021-03-03 19:41:58',
            'updated_at' => '2021-03-03 19:41:58'
        ]);

        (new App\Models\Transation())->create([
            'id' => 42,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 299680.89,
            'after_transation' => 298680.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei saldo na Unitel',
            'created_at' => '2021-03-03 19:44:09',
            'updated_at' => '2021-03-03 19:44:09'
        ]);

        (new App\Models\Transation())->create([
            'id' => 43,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 22000,
            'before_transation' => 298680.89,
            'after_transation' => 276680.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Pappy',
            'created_at' => '2021-03-04 21:52:27',
            'updated_at' => '2021-03-04 21:52:27'
        ]);

        (new App\Models\Transation())->create([
            'id' => 44,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 10000,
            'before_transation' => 276680.89,
            'after_transation' => 266680.89,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei fios de energia',
            'created_at' => '2021-03-07 08:45:15',
            'updated_at' => '2021-03-07 08:45:15'
        ]);

        (new App\Models\Transation())->create([
            'id' => 45,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 4050,
            'before_transation' => 266680.89,
            'after_transation' => 262630.89,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei a DSTV',
            'created_at' => '2021-03-07 08:45:47',
            'updated_at' => '2021-03-07 08:45:47'
        ]);

        (new App\Models\Transation())->create([
            'id' => 46,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 20000,
            'before_transation' => 262630.89,
            'after_transation' => 242630.89,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Emprestei a Stela',
            'created_at' => '2021-03-10 04:45:09',
            'updated_at' => '2021-03-10 04:45:09'
        ]);

        (new App\Models\Transation())->create([
            'id' => 47,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3000,
            'before_transation' => 242630.89,
            'after_transation' => 239630.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Paguei a energia',
            'created_at' => '2021-03-10 04:45:26',
            'updated_at' => '2021-03-10 04:45:26'
        ]);

        (new App\Models\Transation())->create([
            'id' => 48,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 756,
            'before_transation' => 99249.12,
            'after_transation' => 98493.12,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei mimos',
            'created_at' => '2021-03-11 22:22:52',
            'updated_at' => '2021-03-11 22:22:52'
        ]);

        (new App\Models\Transation())->create([
            'id' => 49,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 5000,
            'before_transation' => 98493.12,
            'after_transation' => 93493.12,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Emprestei a Ana Maria',
            'created_at' => '2021-03-11 22:23:14',
            'updated_at' => '2021-03-11 22:23:14'
        ]);

        (new App\Models\Transation())->create([
            'id' => 50,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2270,
            'before_transation' => 93493.12,
            'after_transation' => 91223.12,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei alguns remédios',
            'created_at' => '2021-03-14 22:04:28',
            'updated_at' => '2021-03-14 22:04:28'
        ]);

        (new App\Models\Transation())->create([
            'id' => 51,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 670,
            'before_transation' => 239630.89,
            'after_transation' => 238960.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Não lembro',
            'created_at' => '2021-03-14 22:05:34',
            'updated_at' => '2021-03-14 22:05:34'
        ]);

        (new App\Models\Transation())->create([
            'id' => 52,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 500,
            'before_transation' => 238960.89,
            'after_transation' => 238460.89,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Também não lembro',
            'created_at' => '2021-03-14 22:05:50',
            'updated_at' => '2021-03-14 22:05:50'
        ]);

        (new App\Models\Transation())->create([
            'id' => 53,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2266.25,
            'before_transation' => 238460.89,
            'after_transation' => 236194.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei remédios',
            'created_at' => '2021-03-14 22:06:14',
            'updated_at' => '2021-03-14 22:06:14'
        ]);

        (new App\Models\Transation())->create([
            'id' => 54,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 236194.64,
            'after_transation' => 234194.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Paguei a energia da Tia Ju',
            'created_at' => '2021-03-19 05:31:19',
            'updated_at' => '2021-03-19 05:31:19'
        ]);

        (new App\Models\Transation())->create([
            'id' => 55,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 10000,
            'before_transation' => 234194.64,
            'after_transation' => 224194.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'I gave to my Father',
            'created_at' => '2021-03-19 05:31:50',
            'updated_at' => '2021-03-19 05:31:50'
        ]);

        (new App\Models\Transation())->create([
            'id' => 56,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1134,
            'before_transation' => 224194.64,
            'after_transation' => 223060.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos',
            'created_at' => '2021-03-19 05:32:07',
            'updated_at' => '2021-03-19 05:32:07'
        ]);

        (new App\Models\Transation())->create([
            'id' => 57,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 10000,
            'before_transation' => 223060.64,
            'after_transation' => 213060.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'I gave to father again',
            'created_at' => '2021-03-19 05:32:24',
            'updated_at' => '2021-03-19 05:32:24'
        ]);

        (new App\Models\Transation())->create([
            'id' => 58,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 249,
            'before_transation' => 213060.64,
            'after_transation' => 212811.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei água para o Pappy',
            'created_at' => '2021-03-19 05:32:45',
            'updated_at' => '2021-03-19 05:32:45'
        ]);

        (new App\Models\Transation())->create([
            'id' => 59,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 5000,
            'before_transation' => 212811.64,
            'after_transation' => 207811.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Emprestei a Gigia',
            'created_at' => '2021-03-19 05:33:47',
            'updated_at' => '2021-03-19 05:33:47'
        ]);

        (new App\Models\Transation())->create([
            'id' => 60,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1500,
            'before_transation' => 207811.64,
            'after_transation' => 206311.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei o meu cartão SIM',
            'created_at' => '2021-03-19 05:35:05',
            'updated_at' => '2021-03-19 05:35:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 61,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 700,
            'before_transation' => 206311.64,
            'after_transation' => 205611.64,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei material para o curativo',
            'created_at' => '2021-03-19 05:41:49',
            'updated_at' => '2021-03-19 05:41:49'
        ]);

        (new App\Models\Transation())->create([
            'id' => 62,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 700,
            'before_transation' => 205611.64,
            'after_transation' => 204911.64,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei material para o curativo',
            'created_at' => '2021-03-19 05:41:50',
            'updated_at' => '2021-03-19 05:41:50'
        ]);

        (new App\Models\Transation())->create([
            'id' => 63,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 700,
            'before_transation' => 204911.64,
            'after_transation' => 205611.64,
            'where' => 'Despesas',
            'type' => 'I',
            'description' => 'Correção',
            'created_at' => '2021-03-21 22:52:37',
            'updated_at' => '2021-03-21 22:52:37'
        ]);

        (new App\Models\Transation())->create([
            'id' => 64,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 8000,
            'before_transation' => 205611.64,
            'after_transation' => 197611.64,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Dei ao Pappy para cumprir com uma medicação',
            'created_at' => '2021-03-21 22:55:34',
            'updated_at' => '2021-03-21 22:55:34'
        ]);

        (new App\Models\Transation())->create([
            'id' => 65,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2101.19,
            'before_transation' => 197611.64,
            'after_transation' => 195510.45,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei algumas frutas e água para o Pappy',
            'created_at' => '2021-03-21 22:56:20',
            'updated_at' => '2021-03-21 22:56:20'
        ]);

        (new App\Models\Transation())->create([
            'id' => 66,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000,
            'before_transation' => 91223.12,
            'after_transation' => 89223.12,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Recarreguei a net',
            'created_at' => '2021-03-25 05:43:12',
            'updated_at' => '2021-03-25 05:43:12'
        ]);

        (new App\Models\Transation())->create([
            'id' => 67,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 50000,
            'before_transation' => 89223.12,
            'after_transation' => 139223.12,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Transferi a partir da conta no atlantico',
            'created_at' => '2021-03-25 05:44:03',
            'updated_at' => '2021-03-25 05:44:03'
        ]);

        (new App\Models\Transation())->create([
            'id' => 68,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 50000,
            'before_transation' => 195510.45,
            'after_transation' => 145510.45,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Transferi para a outra conta',
            'created_at' => '2021-03-25 05:44:39',
            'updated_at' => '2021-03-25 05:44:39'
        ]);

        (new App\Models\Transation())->create([
            'id' => 69,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 10000,
            'before_transation' => 145510.45,
            'after_transation' => 135510.45,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Dei ao Querobim para pagar seu estágio',
            'created_at' => '2021-03-25 05:45:59',
            'updated_at' => '2021-03-25 05:45:59'
        ]);

        (new App\Models\Transation())->create([
            'id' => 70,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 4000,
            'before_transation' => 135510.45,
            'after_transation' => 131510.45,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Paguei alguns remédios para a medicação do Pappy',
            'created_at' => '2021-03-27 13:09:55',
            'updated_at' => '2021-03-27 13:09:55'
        ]);

        (new App\Models\Transation())->create([
            'id' => 71,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 8000,
            'before_transation' => 139223.12,
            'after_transation' => 131223.12,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Paguei alguns remédios para a medicação do Pappy',
            'created_at' => '2021-03-27 13:27:36',
            'updated_at' => '2021-03-27 13:27:36'
        ]);

        (new App\Models\Transation())->create([
            'id' => 72,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3434.64,
            'before_transation' => 131223.12,
            'after_transation' => 127788.48,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei algumas frutas',
            'created_at' => '2021-03-27 13:30:03',
            'updated_at' => '2021-03-27 13:30:03'
        ]);

        (new App\Models\Transation())->create([
            'id' => 73,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 17425.31,
            'before_transation' => 127788.48,
            'after_transation' => 110363.17,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Retirei tudo da outra conta (131.510,45 KZs)',
            'created_at' => '2021-03-27 13:32:51',
            'updated_at' => '2021-03-27 13:32:51'
        ]);

        (new App\Models\Transation())->create([
            'id' => 74,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 17425.31,
            'before_transation' => 110363.17,
            'after_transation' => 127788.48,
            'where' => 'Para mim',
            'type' => 'I',
            'description' => 'Retirei tudo da outra conta (131.510,45 KZs)(Correção)',
            'created_at' => '2021-03-27 13:33:22',
            'updated_at' => '2021-03-27 13:33:22'
        ]);

        (new App\Models\Transation())->create([
            'id' => 75,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 17425.31,
            'before_transation' => 127788.48,
            'after_transation' => 145213.79,
            'where' => 'Para mim',
            'type' => 'I',
            'description' => 'Retirei tudo da outra conta (131.510,45 KZs) (correção 2)',
            'created_at' => '2021-03-27 13:33:43',
            'updated_at' => '2021-03-27 13:33:43'
        ]);

        (new App\Models\Transation())->create([
            'id' => 76,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 17425.31,
            'before_transation' => 131510.45,
            'after_transation' => 114085.14,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Mandei tudo para a outra conta (131.510,45 KZs)',
            'created_at' => '2021-03-27 13:35:13',
            'updated_at' => '2021-03-27 13:35:13'
        ]);

        (new App\Models\Transation())->create([
            'id' => 77,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 113587.92,
            'before_transation' => 145213.79,
            'after_transation' => 258801.71,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Retirei tudo da outra conta (131.510,45 KZs)',
            'created_at' => '2021-03-27 13:36:03',
            'updated_at' => '2021-03-27 13:36:03'
        ]);

        (new App\Models\Transation())->create([
            'id' => 78,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 113587.92,
            'before_transation' => 114085.14,
            'after_transation' => 497.22,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Mandei tudo para a outra conta (131.510,45 KZs)',
            'created_at' => '2021-03-27 13:36:52',
            'updated_at' => '2021-03-27 13:36:52'
        ]);

        (new App\Models\Transation())->create([
            'id' => 79,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 497.22,
            'before_transation' => 258801.71,
            'after_transation' => 259298.93,
            'where' => 'Despesas',
            'type' => 'I',
            'description' => 'Retirei tudo da outra conta (131.510,45 KZs)',
            'created_at' => '2021-03-27 13:38:12',
            'updated_at' => '2021-03-27 13:38:12'
        ]);

        (new App\Models\Transation())->create([
            'id' => 80,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 497.22,
            'before_transation' => 497.22,
            'after_transation' => 0,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Mandei tudo para a outra conta (131.510,45 KZs)',
            'created_at' => '2021-03-27 13:38:46',
            'updated_at' => '2021-03-27 13:38:46'
        ]);

        (new App\Models\Transation())->create([
            'id' => 81,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 100000,
            'before_transation' => 259298.93,
            'after_transation' => 159298.93,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Investi em uma amizade do Pappy (tio Félix)',
            'created_at' => '2021-03-27 13:41:48',
            'updated_at' => '2021-03-27 13:41:48'
        ]);

        (new App\Models\Transation())->create([
            'id' => 82,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 5000,
            'before_transation' => 159298.93,
            'after_transation' => 154298.93,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Tratei de algumas despesas (taxi, quilapes e outros)',
            'created_at' => '2021-04-01 04:52:41',
            'updated_at' => '2021-04-01 04:52:41'
        ]);

        (new App\Models\Transation())->create([
            'id' => 83,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000,
            'before_transation' => 154298.93,
            'after_transation' => 152298.93,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Dei ao Pappy para comprar alguns remédios',
            'created_at' => '2021-04-01 04:53:04',
            'updated_at' => '2021-04-01 04:53:04'
        ]);

        (new App\Models\Transation())->create([
            'id' => 84,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3996.71,
            'before_transation' => 152298.93,
            'after_transation' => 148302.22,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei algumas frutas',
            'created_at' => '2021-04-01 04:53:45',
            'updated_at' => '2021-04-01 04:53:45'
        ]);

        (new App\Models\Transation())->create([
            'id' => 85,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 870,
            'before_transation' => 148302.22,
            'after_transation' => 147432.22,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Paguei almoço a Josefa',
            'created_at' => '2021-04-01 04:54:54',
            'updated_at' => '2021-04-01 04:54:54'
        ]);

        (new App\Models\Transation())->create([
            'id' => 86,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000.77,
            'before_transation' => 147432.22,
            'after_transation' => 145431.45,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Não lembro 😅😅',
            'created_at' => '2021-04-01 04:55:42',
            'updated_at' => '2021-04-01 04:55:42'
        ]);

        (new App\Models\Transation())->create([
            'id' => 87,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000,
            'before_transation' => 145431.45,
            'after_transation' => 143431.45,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Dei ao Pappy para algumas despesas do carro',
            'created_at' => '2021-04-01 04:56:15',
            'updated_at' => '2021-04-01 04:56:15'
        ]);

        (new App\Models\Transation())->create([
            'id' => 88,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 4884.94,
            'before_transation' => 143431.45,
            'after_transation' => 138546.51,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos',
            'created_at' => '2021-04-01 04:56:59',
            'updated_at' => '2021-04-01 04:56:59'
        ]);

        (new App\Models\Transation())->create([
            'id' => 89,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 1566,
            'before_transation' => 138546.51,
            'after_transation' => 136980.51,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Não lembro, mas acho que comprei material para o curativo',
            'created_at' => '2021-04-01 04:59:30',
            'updated_at' => '2021-04-01 04:59:30'
        ]);

        (new App\Models\Transation())->create([
            'id' => 90,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 684,
            'before_transation' => 136980.51,
            'after_transation' => 136296.51,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei luvas para o curativo',
            'created_at' => '2021-04-02 08:59:57',
            'updated_at' => '2021-04-02 08:59:57'
        ]);

        (new App\Models\Transation())->create([
            'id' => 91,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 271154.03,
            'before_transation' => 0,
            'after_transation' => 271154.03,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o meu salário de Março',
            'created_at' => '2021-04-02 13:15:58',
            'updated_at' => '2021-04-02 13:15:58'
        ]);

        (new App\Models\Transation())->create([
            'id' => 92,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 271154.03,
            'before_transation' => 271154.03,
            'after_transation' => 0,
            'where' => 'Tudo',
            'type' => 'O',
            'description' => NULL,
            'created_at' => '2021-04-02 13:16:48',
            'updated_at' => '2021-04-02 13:16:48'
        ]);

        (new App\Models\Transation())->create([
            'id' => 93,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 271154.03,
            'before_transation' => 136296.51,
            'after_transation' => 407450.54,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o salário de lá do Atlântico',
            'created_at' => '2021-04-02 13:17:57',
            'updated_at' => '2021-04-02 13:17:57'
        ]);

        (new App\Models\Transation())->create([
            'id' => 94,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 13389.99,
            'before_transation' => 407450.54,
            'after_transation' => 420840.53,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei algumas coisas para a Manuela (minha madrinha)',
            'created_at' => '2021-04-04 08:32:29',
            'updated_at' => '2021-04-04 08:32:29'
        ]);

        (new App\Models\Transation())->create([
            'id' => 95,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 121000,
            'before_transation' => 394060.55,
            'after_transation' => 515060.55,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi de bónus pelo desenvolvimento do site NORS (eram 130.000,00 KZs, mais a parte do Jefth e como ele já me devia e fazendo os cálculos isso foi o que ficou para mim)',
            'created_at' => '2021-04-06 13:27:46',
            'updated_at' => '2021-04-06 13:27:46'
        ]);

        (new App\Models\Transation())->create([
            'id' => 96,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 60000,
            'before_transation' => 515060.55,
            'after_transation' => 575060.55,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Tratamento de despesas',
            'created_at' => '2021-04-06 13:29:36',
            'updated_at' => '2021-04-06 13:29:36'
        ]);

        (new App\Models\Transation())->create([
            'id' => 97,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 44000,
            'before_transation' => 455060.55,
            'after_transation' => 499060.55,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei um telefone para a Mammy',
            'created_at' => '2021-04-06 13:30:07',
            'updated_at' => '2021-04-06 13:30:07'
        ]);

        (new App\Models\Transation())->create([
            'id' => 98,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3000,
            'before_transation' => 411060.55,
            'after_transation' => 414060.55,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Paguei a energia',
            'created_at' => '2021-04-06 13:31:33',
            'updated_at' => '2021-04-06 13:31:33'
        ]);

        (new App\Models\Transation())->create([
            'id' => 99,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 4050,
            'before_transation' => 408060.55,
            'after_transation' => 412110.55,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Recarreguei a DSTV',
            'created_at' => '2021-04-07 13:52:47',
            'updated_at' => '2021-04-07 13:52:47'
        ]);

        (new App\Models\Transation())->create([
            'id' => 100,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 1500,
            'before_transation' => 404010.55,
            'after_transation' => 405510.55,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei o meu chip da Movicel',
            'created_at' => '2021-04-07 13:53:15',
            'updated_at' => '2021-04-07 13:53:15'
        ]);

        (new App\Models\Transation())->create([
            'id' => 101,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 9000,
            'before_transation' => 402510.55,
            'after_transation' => 411510.55,
            'where' => 'Para mim',
            'type' => 'I',
            'description' => 'Lembra da parte do bónus do Jefth?',
            'created_at' => '2021-04-07 13:54:27',
            'updated_at' => '2021-04-07 13:54:27'
        ]);

        (new App\Models\Transation())->create([
            'id' => 102,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 20000,
            'before_transation' => 411510.55,
            'after_transation' => 431510.55,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Dei ao Pappy',
            'created_at' => '2021-04-08 18:20:25',
            'updated_at' => '2021-04-08 18:20:25'
        ]);

        (new App\Models\Transation())->create([
            'id' => 103,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 14865,
            'before_transation' => 391510.55,
            'after_transation' => 406375.55,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei cosméticos',
            'created_at' => '2021-04-10 11:47:19',
            'updated_at' => '2021-04-10 11:47:19'
        ]);

        (new App\Models\Transation())->create([
            'id' => 104,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 30000,
            'before_transation' => 376645.55,
            'after_transation' => 406645.55,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Gestão de dívidas',
            'created_at' => '2021-04-10 11:49:13',
            'updated_at' => '2021-04-10 11:49:13'
        ]);

        (new App\Models\Transation())->create([
            'id' => 105,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 25000,
            'before_transation' => 346645.55,
            'after_transation' => 371645.55,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Gestão de dívidas',
            'created_at' => '2021-04-10 11:50:08',
            'updated_at' => '2021-04-10 11:50:08'
        ]);

        (new App\Models\Transation())->create([
            'id' => 106,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000,
            'before_transation' => 321645.55,
            'after_transation' => 323645.55,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Mandei para o Edgar',
            'created_at' => '2021-04-12 05:16:58',
            'updated_at' => '2021-04-12 05:16:58'
        ]);

        (new App\Models\Transation())->create([
            'id' => 107,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 6500,
            'before_transation' => 319645.55,
            'after_transation' => 326145.55,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Prestes a comprar uma t-shirt e um casaco da PERSISTENTE',
            'created_at' => '2021-04-12 05:17:29',
            'updated_at' => '2021-04-12 05:17:29'
        ]);

        (new App\Models\Transation())->create([
            'id' => 108,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3148.43,
            'before_transation' => 313145.55,
            'after_transation' => 316293.98,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei algumas frutas e chocolates',
            'created_at' => '2021-04-13 20:59:04',
            'updated_at' => '2021-04-13 20:59:04'
        ]);

        (new App\Models\Transation())->create([
            'id' => 109,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3724.66,
            'before_transation' => 309997.12,
            'after_transation' => 313721.78,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos',
            'created_at' => '2021-04-19 12:40:56',
            'updated_at' => '2021-04-19 12:40:56'
        ]);

        (new App\Models\Transation())->create([
            'id' => 110,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 5000,
            'before_transation' => 306272.46,
            'after_transation' => 311272.46,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Emprestei aos caras do Team Five',
            'created_at' => '2021-04-19 12:48:37',
            'updated_at' => '2021-04-19 12:48:37'
        ]);

        (new App\Models\Transation())->create([
            'id' => 111,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 5000,
            'before_transation' => 301272.46,
            'after_transation' => 306272.46,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Tirei para comprar combustível e táxi',
            'created_at' => '2021-04-19 13:00:50',
            'updated_at' => '2021-04-19 13:00:50'
        ]);

        (new App\Models\Transation())->create([
            'id' => 112,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000,
            'before_transation' => 296272.46,
            'after_transation' => 298272.46,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Dei ao Pappy para ajudar na compra de bombas de gasolina',
            'created_at' => '2021-04-19 13:04:41',
            'updated_at' => '2021-04-19 13:04:41'
        ]);

        (new App\Models\Transation())->create([
            'id' => 113,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3000,
            'before_transation' => 294272.46,
            'after_transation' => 297272.46,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Recarreguei o meu saldo de dados',
            'created_at' => '2021-04-19 13:09:54',
            'updated_at' => '2021-04-19 13:09:54'
        ]);

        (new App\Models\Transation())->create([
            'id' => 114,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000,
            'before_transation' => 291272.46,
            'after_transation' => 293272.46,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Recarreguei a minha net',
            'created_at' => '2021-04-23 06:25:41',
            'updated_at' => '2021-04-23 06:25:41'
        ]);

        (new App\Models\Transation())->create([
            'id' => 115,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2650,
            'before_transation' => 289272.46,
            'after_transation' => 291922.46,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Dei para comprar os ingredientes do Jantar',
            'created_at' => '2021-04-23 06:27:18',
            'updated_at' => '2021-04-23 06:27:18'
        ]);

        (new App\Models\Transation())->create([
            'id' => 116,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 20000,
            'before_transation' => 286622.46,
            'after_transation' => 306622.46,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestado ao Reginaldo',
            'created_at' => '2021-04-23 06:29:12',
            'updated_at' => '2021-04-23 06:29:12'
        ]);

        (new App\Models\Transation())->create([
            'id' => 117,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 7000,
            'before_transation' => 266622.46,
            'after_transation' => 273622.46,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Tirei para pagar as minhas peças de roupa da Persistente',
            'created_at' => '2021-04-23 06:32:02',
            'updated_at' => '2021-04-23 06:32:02'
        ]);

        (new App\Models\Transation())->create([
            'id' => 118,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3000,
            'before_transation' => 259622.46,
            'after_transation' => 262622.46,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Recarreguei a net do Uncle',
            'created_at' => '2021-04-23 06:32:50',
            'updated_at' => '2021-04-23 06:32:50'
        ]);

        (new App\Models\Transation())->create([
            'id' => 119,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3000,
            'before_transation' => 256622.46,
            'after_transation' => 259622.46,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Tirei para alguma coisa e não lembro para o que',
            'created_at' => '2021-04-23 06:33:32',
            'updated_at' => '2021-04-23 06:33:32'
        ]);

        (new App\Models\Transation())->create([
            'id' => 120,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 50000,
            'before_transation' => 0,
            'after_transation' => 50000,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o pagamento pelo Legislação Compilada',
            'created_at' => '2021-04-23 06:37:10',
            'updated_at' => '2021-04-23 06:37:10'
        ]);

        (new App\Models\Transation())->create([
            'id' => 121,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 5848.2,
            'before_transation' => 50000,
            'after_transation' => 55848.2,
            'where' => 'Geral',
            'type' => 'O',
            'description' => 'Descontado pela transferência internacional',
            'created_at' => '2021-04-23 06:38:40',
            'updated_at' => '2021-04-23 06:38:40'
        ]);

        (new App\Models\Transation())->create([
            'id' => 122,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 15000,
            'before_transation' => 44151.8,
            'after_transation' => 59151.8,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Jefth mandou-me dar para a Elizângela',
            'created_at' => '2021-04-23 06:40:03',
            'updated_at' => '2021-04-23 06:40:03'
        ]);

        (new App\Models\Transation())->create([
            'id' => 123,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 9000,
            'before_transation' => 29151.8,
            'after_transation' => 38151.8,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Jefth mandou-me dar para a Má',
            'created_at' => '2021-04-23 06:40:35',
            'updated_at' => '2021-04-23 06:40:35'
        ]);

        (new App\Models\Transation())->create([
            'id' => 124,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 10000,
            'before_transation' => 20151.8,
            'after_transation' => 30151.8,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Jefth mandou-me dar ao Pappy',
            'created_at' => '2021-04-23 06:41:08',
            'updated_at' => '2021-04-23 06:41:08'
        ]);

        (new App\Models\Transation())->create([
            'id' => 125,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1140,
            'before_transation' => 10151.8,
            'after_transation' => 11291.8,
            'where' => 'Geral',
            'type' => 'O',
            'description' => 'Descontos de algumas cenas (IVA e outros)',
            'created_at' => '2021-04-23 06:42:05',
            'updated_at' => '2021-04-23 06:42:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 126,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1500,
            'before_transation' => 9011.8,
            'after_transation' => 10511.8,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei o meu saldo',
            'created_at' => '2021-04-26 05:14:17',
            'updated_at' => '2021-04-26 05:14:17'
        ]);

        (new App\Models\Transation())->create([
            'id' => 127,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 7511.8,
            'after_transation' => 8511.8,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Recarreguei energia da Tia Jú',
            'created_at' => '2021-04-29 23:56:58',
            'updated_at' => '2021-04-29 23:56:58'
        ]);

        (new App\Models\Transation())->create([
            'id' => 128,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 271171.43,
            'before_transation' => 6511.8,
            'after_transation' => 277683.23,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o salário 😊',
            'created_at' => '2021-04-29 23:58:03',
            'updated_at' => '2021-04-29 23:58:03'
        ]);

        (new App\Models\Transation())->create([
            'id' => 129,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 4270.58,
            'before_transation' => 253622.46,
            'after_transation' => 257893.04,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei o meu almoço enquanto estava na empresa',
            'created_at' => '2021-04-30 00:02:23',
            'updated_at' => '2021-04-30 00:02:23'
        ]);

        (new App\Models\Transation())->create([
            'id' => 130,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000,
            'before_transation' => 249351.88,
            'after_transation' => 251351.88,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Josefa pagou um quilape que eu já nem lembrava que existia 🤣😂😅',
            'created_at' => '2021-05-02 21:52:49',
            'updated_at' => '2021-05-02 21:52:49'
        ]);

        (new App\Models\Transation())->create([
            'id' => 131,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 20000,
            'before_transation' => 251351.88,
            'after_transation' => 271351.88,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Uncle pagou a sua dívida',
            'created_at' => '2021-05-02 21:53:21',
            'updated_at' => '2021-05-02 21:53:21'
        ]);

        (new App\Models\Transation())->create([
            'id' => 132,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3000,
            'before_transation' => 271351.88,
            'after_transation' => 274351.88,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Uncle pagou a dívida do saldo que eu havia carregado para ele',
            'created_at' => '2021-05-02 21:53:53',
            'updated_at' => '2021-05-02 21:53:53'
        ]);

        (new App\Models\Transation())->create([
            'id' => 133,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 277683.23,
            'after_transation' => 278683.23,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei a Energia da Tia Jú',
            'created_at' => '2021-05-02 21:57:32',
            'updated_at' => '2021-05-02 21:57:32'
        ]);

        (new App\Models\Transation())->create([
            'id' => 134,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3500,
            'before_transation' => 276683.23,
            'after_transation' => 280183.23,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei saldo para o Vasco',
            'created_at' => '2021-05-02 21:58:48',
            'updated_at' => '2021-05-02 21:58:48'
        ]);

        (new App\Models\Transation())->create([
            'id' => 135,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 273183.23,
            'after_transation' => 275183.23,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei saldo para o Benvindo',
            'created_at' => '2021-05-02 21:59:43',
            'updated_at' => '2021-05-02 21:59:43'
        ]);

        (new App\Models\Transation())->create([
            'id' => 136,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3420,
            'before_transation' => 271183.23,
            'after_transation' => 274603.23,
            'where' => 'Geral',
            'type' => 'O',
            'description' => 'Descontos de blá blá blá',
            'created_at' => '2021-05-02 22:01:08',
            'updated_at' => '2021-05-02 22:01:08'
        ]);

        (new App\Models\Transation())->create([
            'id' => 137,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 4050,
            'before_transation' => 267763.23,
            'after_transation' => 271813.23,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei a DSTV',
            'created_at' => '2021-05-02 22:01:29',
            'updated_at' => '2021-05-02 22:01:29'
        ]);

        (new App\Models\Transation())->create([
            'id' => 138,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 5000,
            'before_transation' => 263713.23,
            'after_transation' => 268713.23,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei a energia',
            'created_at' => '2021-05-02 22:01:45',
            'updated_at' => '2021-05-02 22:01:45'
        ]);

        (new App\Models\Transation())->create([
            'id' => 139,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 60000,
            'before_transation' => 258713.23,
            'after_transation' => 318713.23,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Mesada dos familiares',
            'created_at' => '2021-05-02 22:02:31',
            'updated_at' => '2021-05-02 22:02:31'
        ]);

        (new App\Models\Transation())->create([
            'id' => 140,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 198713.23,
            'after_transation' => 199713.23,
            'where' => 'Despesas',
            'type' => 'I',
            'description' => 'Mentira! Já tinha carregado a energia da tia Jú',
            'created_at' => '2021-05-02 22:04:24',
            'updated_at' => '2021-05-02 22:04:24'
        ]);

        (new App\Models\Transation())->create([
            'id' => 141,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 20000,
            'before_transation' => 199713.23,
            'after_transation' => 219713.23,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Dei ao Pappy para  resolver alguns problemas do carro',
            'created_at' => '2021-05-02 22:05:41',
            'updated_at' => '2021-05-02 22:05:41'
        ]);

        (new App\Models\Transation())->create([
            'id' => 142,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 83228.96,
            'before_transation' => 179713.23,
            'after_transation' => 262942.19,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Mandei para a outra conta',
            'created_at' => '2021-05-02 22:13:39',
            'updated_at' => '2021-05-02 22:13:39'
        ]);

        (new App\Models\Transation())->create([
            'id' => 143,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 83228.96,
            'before_transation' => 274351.88,
            'after_transation' => 357580.84,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Recebi do salário da outra conta',
            'created_at' => '2021-05-02 22:15:31',
            'updated_at' => '2021-05-02 22:15:31'
        ]);

        (new App\Models\Transation())->create([
            'id' => 144,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3500,
            'before_transation' => 96484.27,
            'after_transation' => 99984.27,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei o meu cartão da Movicel',
            'created_at' => '2021-05-09 17:18:03',
            'updated_at' => '2021-05-09 17:18:03'
        ]);

        (new App\Models\Transation())->create([
            'id' => 145,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 15000,
            'before_transation' => 357580.84,
            'after_transation' => 372580.84,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei ao Pappy para ajudar com algumas despesas do óbito da Domingas (minha avó)',
            'created_at' => '2021-05-09 17:43:32',
            'updated_at' => '2021-05-09 17:43:32'
        ]);

        (new App\Models\Transation())->create([
            'id' => 146,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1682.51,
            'before_transation' => 92984.27,
            'after_transation' => 94666.78,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguma coisa da qual não lembro 😅😅',
            'created_at' => '2021-05-09 18:44:41',
            'updated_at' => '2021-05-09 18:44:41'
        ]);

        (new App\Models\Transation())->create([
            'id' => 147,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 7000,
            'before_transation' => 91301.76,
            'after_transation' => 98301.76,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Tirei para o taxi e paguei algumas despesas',
            'created_at' => '2021-05-09 18:45:15',
            'updated_at' => '2021-05-09 18:45:15'
        ]);

        (new App\Models\Transation())->create([
            'id' => 148,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 84301.76,
            'after_transation' => 85301.76,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Recarreguei saldo para o Rufino',
            'created_at' => '2021-05-09 18:45:41',
            'updated_at' => '2021-05-09 18:45:41'
        ]);

        (new App\Models\Transation())->create([
            'id' => 149,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 477,
            'before_transation' => 83301.76,
            'after_transation' => 83778.76,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos para mim',
            'created_at' => '2021-05-09 18:45:59',
            'updated_at' => '2021-05-09 18:45:59'
        ]);

        (new App\Models\Transation())->create([
            'id' => 150,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 82824.76,
            'after_transation' => 84824.76,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Tirei para o taxi',
            'created_at' => '2021-05-11 19:06:55',
            'updated_at' => '2021-05-11 19:06:55'
        ]);

        (new App\Models\Transation())->create([
            'id' => 151,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 40000,
            'before_transation' => 342580.84,
            'after_transation' => 382580.84,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestado ao Ravelino',
            'created_at' => '2021-05-13 04:40:44',
            'updated_at' => '2021-05-13 04:40:44'
        ]);

        (new App\Models\Transation())->create([
            'id' => 152,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1500,
            'before_transation' => 80824.76,
            'after_transation' => 82324.76,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei chip para a Mammy',
            'created_at' => '2021-05-13 04:41:42',
            'updated_at' => '2021-05-13 04:41:42'
        ]);

        (new App\Models\Transation())->create([
            'id' => 153,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 5000,
            'before_transation' => 79324.76,
            'after_transation' => 84324.76,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Enviei ao Pappy para poder lidar com algumas despesas do carro',
            'created_at' => '2021-05-13 04:42:13',
            'updated_at' => '2021-05-13 04:42:13'
        ]);

        (new App\Models\Transation())->create([
            'id' => 154,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 636,
            'before_transation' => 74324.76,
            'after_transation' => 74960.76,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos',
            'created_at' => '2021-05-15 16:30:26',
            'updated_at' => '2021-05-15 16:30:26'
        ]);

        (new App\Models\Transation())->create([
            'id' => 155,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2928.2,
            'before_transation' => 73688.76,
            'after_transation' => 76616.96,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei maçãs',
            'created_at' => '2021-05-15 16:31:13',
            'updated_at' => '2021-05-15 16:31:13'
        ]);

        (new App\Models\Transation())->create([
            'id' => 156,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1100,
            'before_transation' => 70760.56,
            'after_transation' => 71860.56,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei alguns medicamentos para a Kina',
            'created_at' => '2021-05-15 16:31:46',
            'updated_at' => '2021-05-15 16:31:46'
        ]);

        (new App\Models\Transation())->create([
            'id' => 157,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 40000,
            'before_transation' => 302580.84,
            'after_transation' => 342580.84,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Ravelino pagou pelo dinheiro que havia emprestado a Ele',
            'created_at' => '2021-05-15 16:33:50',
            'updated_at' => '2021-05-15 16:33:50'
        ]);

        (new App\Models\Transation())->create([
            'id' => 158,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 20000,
            'before_transation' => 342580.84,
            'after_transation' => 362580.84,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestados ao Uncle',
            'created_at' => '2021-05-26 02:14:02',
            'updated_at' => '2021-05-26 02:14:02'
        ]);

        (new App\Models\Transation())->create([
            'id' => 159,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 20000,
            'before_transation' => 322580.84,
            'after_transation' => 342580.84,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Não lembro porquê tirei',
            'created_at' => '2021-05-26 02:28:21',
            'updated_at' => '2021-05-26 02:28:21'
        ]);

        (new App\Models\Transation())->create([
            'id' => 160,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 30000,
            'before_transation' => 302580.84,
            'after_transation' => 332580.84,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestado ao Uncle para fazer umas consultas ao olho',
            'created_at' => '2021-05-26 02:29:07',
            'updated_at' => '2021-05-26 02:29:07'
        ]);

        (new App\Models\Transation())->create([
            'id' => 161,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 50000,
            'before_transation' => 272580.84,
            'after_transation' => 322580.84,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestado a Mammy para suprir algumas necessidades do pedido da Elizângela',
            'created_at' => '2021-05-26 02:30:07',
            'updated_at' => '2021-05-26 02:30:07'
        ]);

        (new App\Models\Transation())->create([
            'id' => 162,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 7000,
            'before_transation' => 222580.84,
            'after_transation' => 229580.84,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Enviei ao Pappy para ajudar com o carro do Tio Lemos',
            'created_at' => '2021-05-26 02:30:30',
            'updated_at' => '2021-05-26 02:30:30'
        ]);

        (new App\Models\Transation())->create([
            'id' => 163,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 10000,
            'before_transation' => 215580.84,
            'after_transation' => 225580.84,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Tirei para ajudar a colega da Ludmila',
            'created_at' => '2021-05-26 02:31:10',
            'updated_at' => '2021-05-26 02:31:10'
        ]);

        (new App\Models\Transation())->create([
            'id' => 164,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 60000,
            'before_transation' => 69660.56,
            'after_transation' => 129660.56,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Tirei e acho que dei emprestado ao Jefth',
            'created_at' => '2021-05-29 04:47:06',
            'updated_at' => '2021-05-29 04:47:06'
        ]);

        (new App\Models\Transation())->create([
            'id' => 165,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 5000,
            'before_transation' => 9660.56,
            'after_transation' => 14660.56,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei saldo de dados para mim',
            'created_at' => '2021-05-29 04:49:01',
            'updated_at' => '2021-05-29 04:49:01'
        ]);

        (new App\Models\Transation())->create([
            'id' => 166,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 926.06,
            'before_transation' => 4660.56,
            'after_transation' => 5586.62,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Mimos',
            'created_at' => '2021-05-29 04:49:49',
            'updated_at' => '2021-05-29 04:49:49'
        ]);

        (new App\Models\Transation())->create([
            'id' => 167,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 795,
            'before_transation' => 3734.5,
            'after_transation' => 4529.5,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Mimos',
            'created_at' => '2021-05-29 04:50:05',
            'updated_at' => '2021-05-29 04:50:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 168,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 795,
            'before_transation' => 2939.5,
            'after_transation' => 3734.5,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'E mais mimos',
            'created_at' => '2021-05-29 04:50:24',
            'updated_at' => '2021-05-29 04:50:24'
        ]);

        (new App\Models\Transation())->create([
            'id' => 169,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 271882.15,
            'before_transation' => 2144.5,
            'after_transation' => 274026.65,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o salário de Maio',
            'created_at' => '2021-05-29 04:52:43',
            'updated_at' => '2021-05-29 04:52:43'
        ]);

        (new App\Models\Transation())->create([
            'id' => 170,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 60000,
            'before_transation' => 205580.84,
            'after_transation' => 265580.84,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestado a Mammy',
            'created_at' => '2021-05-29 04:54:58',
            'updated_at' => '2021-05-29 04:54:58'
        ]);

        (new App\Models\Transation())->create([
            'id' => 171,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 5601.63,
            'before_transation' => 145580.84,
            'after_transation' => 151182.47,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns remédios para mim',
            'created_at' => '2021-05-29 04:56:09',
            'updated_at' => '2021-05-29 04:56:09'
        ]);

        (new App\Models\Transation())->create([
            'id' => 172,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 1500,
            'before_transation' => 139979.21,
            'after_transation' => 141479.21,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Dei emprestado ao Ravelino para comprar comida',
            'created_at' => '2021-05-29 04:57:03',
            'updated_at' => '2021-05-29 04:57:03'
        ]);

        (new App\Models\Transation())->create([
            'id' => 173,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3500,
            'before_transation' => 274026.65,
            'after_transation' => 277526.65,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei o meu saldo na Movicel',
            'created_at' => '2021-05-30 22:21:10',
            'updated_at' => '2021-05-30 22:21:10'
        ]);

        (new App\Models\Transation())->create([
            'id' => 174,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 270526.65,
            'after_transation' => 272526.65,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei a energia da Guida',
            'created_at' => '2021-05-30 22:21:48',
            'updated_at' => '2021-05-30 22:21:48'
        ]);

        (new App\Models\Transation())->create([
            'id' => 175,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 500,
            'before_transation' => 268526.65,
            'after_transation' => 269026.65,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei anestesia para uma operação na minha ferida no pé',
            'created_at' => '2021-05-30 22:22:29',
            'updated_at' => '2021-05-30 22:22:29'
        ]);

        (new App\Models\Transation())->create([
            'id' => 176,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 20000,
            'before_transation' => 268026.65,
            'after_transation' => 288026.65,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Paguei a mesada do Pappy',
            'created_at' => '2021-05-30 22:22:59',
            'updated_at' => '2021-05-30 22:22:59'
        ]);

        (new App\Models\Transation())->create([
            'id' => 177,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 40000,
            'before_transation' => 138479.21,
            'after_transation' => 178479.21,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestado a Mammy (ainda no assunto do pedido)',
            'created_at' => '2021-05-30 22:25:58',
            'updated_at' => '2021-05-30 22:25:58'
        ]);

        (new App\Models\Transation())->create([
            'id' => 178,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 81564.65,
            'before_transation' => 248026.65,
            'after_transation' => 329591.3,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Mandei para a outra conta',
            'created_at' => '2021-05-30 22:27:33',
            'updated_at' => '2021-05-30 22:27:33'
        ]);

        (new App\Models\Transation())->create([
            'id' => 179,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 81564.65,
            'before_transation' => 98479.21,
            'after_transation' => 180043.86,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Recebi do salário da outra conta',
            'created_at' => '2021-06-05 08:01:14',
            'updated_at' => '2021-06-05 08:01:14'
        ]);

        (new App\Models\Transation())->create([
            'id' => 180,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 62000,
            'before_transation' => 180043.86,
            'after_transation' => 242043.86,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Jefth mandou para eu dar a Mammy',
            'created_at' => '2021-06-05 08:07:39',
            'updated_at' => '2021-06-05 08:07:39'
        ]);

        (new App\Models\Transation())->create([
            'id' => 181,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 636,
            'before_transation' => 166462,
            'after_transation' => 167098,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Mimos',
            'created_at' => '2021-06-05 08:17:37',
            'updated_at' => '2021-06-05 08:17:37'
        ]);

        (new App\Models\Transation())->create([
            'id' => 182,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 849.73,
            'before_transation' => 165826,
            'after_transation' => 166675.73,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Paguei o almoço para a Josefa',
            'created_at' => '2021-06-05 08:20:01',
            'updated_at' => '2021-06-05 08:20:01'
        ]);

        (new App\Models\Transation())->create([
            'id' => 183,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 164976.27,
            'after_transation' => 165976.27,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei a net da Josefa',
            'created_at' => '2021-06-05 08:21:36',
            'updated_at' => '2021-06-05 08:21:36'
        ]);

        (new App\Models\Transation())->create([
            'id' => 184,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1567.5,
            'before_transation' => 163976.27,
            'after_transation' => 165543.77,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei alguns remédios para mim',
            'created_at' => '2021-06-05 08:22:03',
            'updated_at' => '2021-06-05 08:22:03'
        ]);

        (new App\Models\Transation())->create([
            'id' => 185,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 11037.76,
            'before_transation' => 162408.77,
            'after_transation' => 173446.53,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos e um livro das WITCH para o aniversário do Sandro Lukeny',
            'created_at' => '2021-06-05 08:23:27',
            'updated_at' => '2021-06-05 08:23:27'
        ]);

        (new App\Models\Transation())->create([
            'id' => 186,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 5000,
            'before_transation' => 242043.86,
            'after_transation' => 247043.86,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Lidei com despesas',
            'created_at' => '2021-06-12 17:31:47',
            'updated_at' => '2021-06-12 17:31:47'
        ]);

        (new App\Models\Transation())->create([
            'id' => 187,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 60000,
            'before_transation' => 151371.01,
            'after_transation' => 211371.01,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Recebi do Jefth para dar á Má (de uma kixikila que por acaso não sei como se escreve kkkkk)',
            'created_at' => '2021-06-12 17:56:13',
            'updated_at' => '2021-06-12 17:56:13'
        ]);

        (new App\Models\Transation())->create([
            'id' => 188,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 50000,
            'before_transation' => 211371.01,
            'after_transation' => 261371.01,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Paguei mesada da Ludi e a Eli, dei uma parte a Má (despesas)',
            'created_at' => '2021-06-12 18:24:21',
            'updated_at' => '2021-06-12 18:24:21'
        ]);

        (new App\Models\Transation())->create([
            'id' => 189,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 4050,
            'before_transation' => 161371.01,
            'after_transation' => 165421.01,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Recarreguei a DSTV',
            'created_at' => '2021-06-12 18:25:04',
            'updated_at' => '2021-06-12 18:25:04'
        ]);

        (new App\Models\Transation())->create([
            'id' => 190,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 58000,
            'before_transation' => 157321.01,
            'after_transation' => 215321.01,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Ainda falando em despesas rsrsr',
            'created_at' => '2021-06-12 18:30:40',
            'updated_at' => '2021-06-12 18:30:40'
        ]);

        (new App\Models\Transation())->create([
            'id' => 191,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3000,
            'before_transation' => 99321.01,
            'after_transation' => 102321.01,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Recarreguei a energia da Guida',
            'created_at' => '2021-06-12 18:32:21',
            'updated_at' => '2021-06-12 18:32:21'
        ]);

        (new App\Models\Transation())->create([
            'id' => 192,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 96321.01,
            'after_transation' => 97321.01,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Recarreguei a energia da Tia Jú',
            'created_at' => '2021-06-27 22:08:50',
            'updated_at' => '2021-06-27 22:08:50'
        ]);

        (new App\Models\Transation())->create([
            'id' => 193,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 20000,
            'before_transation' => 95321.01,
            'after_transation' => 115321.01,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Mandei para a Níria',
            'created_at' => '2021-06-27 22:09:45',
            'updated_at' => '2021-06-27 22:09:45'
        ]);

        (new App\Models\Transation())->create([
            'id' => 194,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 5000,
            'before_transation' => 75321.01,
            'after_transation' => 80321.01,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Carreguei o meu saldo de dados',
            'created_at' => '2021-06-27 22:10:27',
            'updated_at' => '2021-06-27 22:10:27'
        ]);

        (new App\Models\Transation())->create([
            'id' => 195,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 3000,
            'before_transation' => 237043.86,
            'after_transation' => 240043.86,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Paguei a nossa energia',
            'created_at' => '2021-06-27 22:11:29',
            'updated_at' => '2021-06-27 22:11:29'
        ]);

        (new App\Models\Transation())->create([
            'id' => 196,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 800,
            'before_transation' => 234043.86,
            'after_transation' => 234843.86,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei auriculares',
            'created_at' => '2021-06-27 22:11:57',
            'updated_at' => '2021-06-27 22:11:57'
        ]);

        (new App\Models\Transation())->create([
            'id' => 197,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 10000,
            'before_transation' => 233243.86,
            'after_transation' => 243243.86,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestado a Cristi e a Laura',
            'created_at' => '2021-06-27 22:22:44',
            'updated_at' => '2021-06-27 22:22:44'
        ]);

        (new App\Models\Transation())->create([
            'id' => 198,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 477,
            'before_transation' => 223243.86,
            'after_transation' => 223720.86,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei mimos',
            'created_at' => '2021-06-27 22:24:53',
            'updated_at' => '2021-06-27 22:24:53'
        ]);

        (new App\Models\Transation())->create([
            'id' => 199,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 4000,
            'before_transation' => 222766.86,
            'after_transation' => 226766.86,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Tirei para lidar com algumas despesas',
            'created_at' => '2021-06-27 22:25:18',
            'updated_at' => '2021-06-27 22:25:18'
        ]);

        (new App\Models\Transation())->create([
            'id' => 200,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 1375,
            'before_transation' => 218766.86,
            'after_transation' => 220141.86,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'O idiota comprou mais alguns mimos',
            'created_at' => '2021-06-27 22:26:01',
            'updated_at' => '2021-06-27 22:26:01'
        ]);

        (new App\Models\Transation())->create([
            'id' => 201,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 25000,
            'before_transation' => 217391.86,
            'after_transation' => 242391.86,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Mandei para o Pappy, problemas de saúde',
            'created_at' => '2021-06-27 22:27:22',
            'updated_at' => '2021-06-27 22:27:22'
        ]);

        (new App\Models\Transation())->create([
            'id' => 202,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 40000,
            'before_transation' => 70321.01,
            'after_transation' => 110321.01,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Mandei ao Pappy, questões de saúde',
            'created_at' => '2021-06-27 22:29:05',
            'updated_at' => '2021-06-27 22:29:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 203,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 10186.52,
            'before_transation' => 30321.01,
            'after_transation' => 40507.53,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Não lembro 😤😤',
            'created_at' => '2021-06-27 22:30:49',
            'updated_at' => '2021-06-27 22:30:49'
        ]);

        (new App\Models\Transation())->create([
            'id' => 204,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 9528.75,
            'before_transation' => 20134.49,
            'after_transation' => 29663.24,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Que ódio! Não lembro',
            'created_at' => '2021-06-27 22:35:24',
            'updated_at' => '2021-06-27 22:35:24'
        ]);

        (new App\Models\Transation())->create([
            'id' => 205,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 10605.74,
            'after_transation' => 11605.74,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Eu me odeio',
            'created_at' => '2021-06-27 22:35:58',
            'updated_at' => '2021-06-27 22:35:58'
        ]);

        (new App\Models\Transation())->create([
            'id' => 206,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 275072.43,
            'before_transation' => 9605.74,
            'after_transation' => 284678.17,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Recebi o salário de Junho',
            'created_at' => '2021-07-02 20:37:35',
            'updated_at' => '2021-07-02 20:37:35'
        ]);

        (new App\Models\Transation())->create([
            'id' => 207,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 249,
            'before_transation' => 284678.17,
            'after_transation' => 284927.17,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Dei emprestado ao Jefth',
            'created_at' => '2021-07-02 20:38:20',
            'updated_at' => '2021-07-02 20:38:20'
        ]);

        (new App\Models\Transation())->create([
            'id' => 208,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 350,
            'before_transation' => 284429.17,
            'after_transation' => 284779.17,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei um chip para a Net',
            'created_at' => '2021-07-02 20:43:37',
            'updated_at' => '2021-07-02 20:43:37'
        ]);

        (new App\Models\Transation())->create([
            'id' => 209,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 60000,
            'before_transation' => 284079.17,
            'after_transation' => 344079.17,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Usei para pagar algumas despesas',
            'created_at' => '2021-07-02 20:44:10',
            'updated_at' => '2021-07-02 20:44:10'
        ]);

        (new App\Models\Transation())->create([
            'id' => 210,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 224079.17,
            'after_transation' => 225079.17,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Carreguei saldo para o Pappy',
            'created_at' => '2021-07-02 20:44:41',
            'updated_at' => '2021-07-02 20:44:41'
        ]);

        (new App\Models\Transation())->create([
            'id' => 211,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 747,
            'before_transation' => 192391.86,
            'after_transation' => 193138.86,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos para o Jefth',
            'created_at' => '2021-07-02 20:46:31',
            'updated_at' => '2021-07-02 20:46:31'
        ]);

        (new App\Models\Transation())->create([
            'id' => 212,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 16000,
            'before_transation' => 191644.86,
            'after_transation' => 207644.86,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei 15.000 KZs emprestado ao Jefth e 1.000 KZs para o meu táxi',
            'created_at' => '2021-07-02 20:47:33',
            'updated_at' => '2021-07-02 20:47:33'
        ]);

        (new App\Models\Transation())->create([
            'id' => 213,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 82992.98,
            'before_transation' => 223079.17,
            'after_transation' => 306072.15,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Mandei para o BAI',
            'created_at' => '2021-07-02 20:58:05',
            'updated_at' => '2021-07-02 20:58:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 214,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 15000,
            'before_transation' => 140086.19,
            'after_transation' => 155086.19,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Mandei para a outra conta (o dinheiro que dei emprestado ao Jefth)',
            'created_at' => '2021-07-02 21:02:02',
            'updated_at' => '2021-07-02 21:02:02'
        ]);

        (new App\Models\Transation())->create([
            'id' => 215,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 9650,
            'before_transation' => 125086.19,
            'after_transation' => 134736.19,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Comprei cosméticos',
            'created_at' => '2021-07-03 18:03:26',
            'updated_at' => '2021-07-03 18:03:26'
        ]);

        (new App\Models\Transation())->create([
            'id' => 216,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 82992.98,
            'before_transation' => 175644.86,
            'after_transation' => 258637.84,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Recebi do salário da outra conta',
            'created_at' => '2021-07-08 22:08:04',
            'updated_at' => '2021-07-08 22:08:04'
        ]);

        (new App\Models\Transation())->create([
            'id' => 217,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 15000,
            'before_transation' => 258637.84,
            'after_transation' => 273637.84,
            'where' => 'Poupanças',
            'type' => 'I',
            'description' => 'Devolvi um dinheiro que tinha emprestado',
            'created_at' => '2021-07-08 22:08:37',
            'updated_at' => '2021-07-08 22:08:37'
        ]);

        (new App\Models\Transation())->create([
            'id' => 218,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 7000,
            'before_transation' => 115436.19,
            'after_transation' => 122436.19,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Dei empestado ao René em nome do Jefth para comprar grelhas para as colunas',
            'created_at' => '2021-07-08 22:11:07',
            'updated_at' => '2021-07-08 22:11:07'
        ]);

        (new App\Models\Transation())->create([
            'id' => 219,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3108,
            'before_transation' => 108436.19,
            'after_transation' => 111544.19,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei alguns mimos',
            'created_at' => '2021-07-08 22:11:33',
            'updated_at' => '2021-07-08 22:11:33'
        ]);

        (new App\Models\Transation())->create([
            'id' => 220,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 4050,
            'before_transation' => 105328.19,
            'after_transation' => 109378.19,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Recarreguei a DSTV',
            'created_at' => '2021-07-08 22:12:05',
            'updated_at' => '2021-07-08 22:12:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 221,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 10000,
            'before_transation' => 101278.19,
            'after_transation' => 111278.19,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Fiz depósito com um dinheiro da Níria',
            'created_at' => '2021-07-08 22:13:30',
            'updated_at' => '2021-07-08 22:13:30'
        ]);

        (new App\Models\Transation())->create([
            'id' => 222,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 25000,
            'before_transation' => 111278.19,
            'after_transation' => 136278.19,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Depositei na conta da Níria',
            'created_at' => '2021-07-08 22:17:53',
            'updated_at' => '2021-07-08 22:17:53'
        ]);

        (new App\Models\Transation())->create([
            'id' => 223,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1455.7,
            'before_transation' => 86278.19,
            'after_transation' => 87733.89,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Despesas',
            'created_at' => '2021-07-14 22:00:24',
            'updated_at' => '2021-07-14 22:00:24'
        ]);

        (new App\Models\Transation())->create([
            'id' => 224,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2351.25,
            'before_transation' => 84822.49,
            'after_transation' => 87173.74,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Mimos',
            'created_at' => '2021-07-14 22:00:46',
            'updated_at' => '2021-07-14 22:00:46'
        ]);

        (new App\Models\Transation())->create([
            'id' => 225,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 12000,
            'before_transation' => 82471.24,
            'after_transation' => 94471.24,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Mandei ao Pappy para pagar seus assuntos de saúde',
            'created_at' => '2021-07-14 22:01:19',
            'updated_at' => '2021-07-14 22:01:19'
        ]);

        (new App\Models\Transation())->create([
            'id' => 226,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1500,
            'before_transation' => 70471.24,
            'after_transation' => 71971.24,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Despesas',
            'created_at' => '2021-07-20 05:10:00',
            'updated_at' => '2021-07-20 05:10:00'
        ]);

        (new App\Models\Transation())->create([
            'id' => 227,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 3000,
            'before_transation' => 68971.24,
            'after_transation' => 71971.24,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Recarreguei a minha net',
            'created_at' => '2021-07-20 05:10:19',
            'updated_at' => '2021-07-20 05:10:19'
        ]);

        (new App\Models\Transation())->create([
            'id' => 228,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 2000,
            'before_transation' => 65971.24,
            'after_transation' => 67971.24,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Gestão de despesas',
            'created_at' => '2021-07-20 05:10:45',
            'updated_at' => '2021-07-20 05:10:45'
        ]);

        (new App\Models\Transation())->create([
            'id' => 229,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1868.18,
            'before_transation' => 63971.24,
            'after_transation' => 65839.42,
            'where' => 'Para mim',
            'type' => 'O',
            'description' => 'Comprei algumas coisas para comer',
            'created_at' => '2021-07-21 04:28:05',
            'updated_at' => '2021-07-21 04:28:05'
        ]);

        (new App\Models\Transation())->create([
            'id' => 230,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1000,
            'before_transation' => 62103.06,
            'after_transation' => 63103.06,
            'where' => 'Despesas',
            'type' => 'O',
            'description' => 'Mandei ao Pappy para pegar táxi',
            'created_at' => '2021-07-21 04:28:54',
            'updated_at' => '2021-07-21 04:28:54'
        ]);

        (new App\Models\Transation())->create([
            'id' => 231,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 1710,
            'before_transation' => 61103.06,
            'after_transation' => 62813.06,
            'where' => 'Geral',
            'type' => 'O',
            'description' => 'Comissão Subs => 1.500,00 || Impostos => 210',
            'created_at' => '2021-07-21 04:30:57',
            'updated_at' => '2021-07-21 04:30:57'
        ]);

        (new App\Models\Transation())->create([
            'id' => 232,
            'user_id' => 1,
            'card_id' => 1,
            'amount' => 500,
            'before_transation' => 59393.06,
            'after_transation' => 59893.06,
            'where' => 'Geral',
            'type' => 'I',
            'description' => 'Josefa pagando uma dívida',
            'created_at' => '2021-07-21 04:31:26',
            'updated_at' => '2021-07-21 04:31:26'
        ]);

        (new App\Models\Transation())->create([
            'id' => 233,
            'user_id' => 1,
            'card_id' => 2,
            'amount' => 2000,
            'before_transation' => 273637.84,
            'after_transation' => 275637.84,
            'where' => 'Poupanças',
            'type' => 'O',
            'description' => 'Dei emprestado a Josefa',
            'created_at' => '2021-07-21 04:33:20',
            'updated_at' => '2021-07-21 04:33:20'
        ]);
    }
}
