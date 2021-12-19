<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Question::create([
            'id' => 1,
            'test_id' => 1,
            'question' => 'Unless otherwise posted, what is the basic speed limit outside a city, town or village on a primary highway?',
            'image' => null,
            'created_at' => '2021-12-19 18:48:23',
            'updated_at' => '2021-12-19 18:48:23',
        ]);
        \App\Models\Question::create([
            'id' => 2,
            'test_id' => 1,
            'question' => 'When backing a passenger vehicle to the left, a driver should:',
            'image' => null,
            'created_at' => '2021-12-19 18:48:44',
            'updated_at' => '2021-12-19 18:48:44',
        ]);
        \App\Models\Question::create([
            'id' => 3,
            'test_id' => 1,
            'question' => 'When approaching an intersection and facing a traffic control light that is showing a green right-turn arrow and a red light, a driver:',
            'image' => null,
            'created_at' => '2021-12-19 18:48:57',
            'updated_at' => '2021-12-19 18:48:57',
        ]);
        \App\Models\Question::create([
            'id' => 4,
            'test_id' => 1,
            'question' => 'Alberta has a demerit point system where a fully licensed (non-learner, nonprobationary) driver is suspended when they accumulate:',
            'image' => null,
            'created_at' => '2021-12-19 18:49:09',
            'updated_at' => '2021-12-19 18:49:09',
        ]);
        \App\Models\Question::create([
            'id' => 5,
            'test_id' => 1,
            'question' => 'When passing a large truck on a two-way highway, a driver should:',
            'image' => null,
            'created_at' => '2021-12-19 18:49:28',
            'updated_at' => '2021-12-19 18:49:28',
        ]);
        \App\Models\Question::create([
            'id' => 6,
            'test_id' => 1,
            'question' => 'Which statement best describes the steps for turning right at a red traffic light?',
            'image' => null,
            'created_at' => '2021-12-19 18:49:42',
            'updated_at' => '2021-12-19 18:49:42',
        ]);
        \App\Models\Question::create([
            'id' => 7,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '1e4ef327b7f2775ad237abd8eb52e32cf356e779.png',
            'created_at' => '2021-12-19 18:49:51',
            'updated_at' => '2021-12-19 21:00:30',
        ]);
        \App\Models\Question::create([
            'id' => 8,
            'test_id' => 1,
            'question' => 'A single solid white line between driving lanes in an urban area means:',
            'image' => null,
            'created_at' => '2021-12-19 18:50:02',
            'updated_at' => '2021-12-19 18:50:02',
        ]);
        \App\Models\Question::create([
            'id' => 9,
            'test_id' => 1,
            'question' => 'A “parking lane” as defined in the Basic Licence Driver’s Handbook is:',
            'image' => null,
            'created_at' => '2021-12-19 18:50:12',
            'updated_at' => '2021-12-19 18:50:12',
        ]);
        \App\Models\Question::create([
            'id' => 10,
            'test_id' => 1,
            'question' => 'Shoulder checking means:',
            'image' => null,
            'created_at' => '2021-12-19 18:50:22',
            'updated_at' => '2021-12-19 18:50:22',
        ]);
        \App\Models\Question::create([
            'id' => 11,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '35f714b618ecccb78f9c449a77cdd5c68397a6e0.png',
            'created_at' => '2021-12-19 18:50:30',
            'updated_at' => '2021-12-19 21:20:31',
        ]);
        \App\Models\Question::create([
            'id' => 12,
            'test_id' => 1,
            'question' => 'A traffic-lane control light with an illuminated red “X” means:',
            'image' => '4f9b00055f32573c979a4e28f25d8735f39fa368.png',
            'created_at' => '2021-12-19 18:50:56',
            'updated_at' => '2021-12-19 21:22:46',
        ]);
        \App\Models\Question::create([
            'id' => 13,
            'test_id' => 1,
            'question' => 'Does a parent have the right to withdraw a previously given “parental consent” for someone under 18 years of age with respect to an operator’s licence?',
            'image' => null,
            'created_at' => '2021-12-19 18:51:29',
            'updated_at' => '2021-12-19 18:51:29',
        ]);
        \App\Models\Question::create([
            'id' => 14,
            'test_id' => 1,
            'question' => 'When approaching a Yield sign, you must:',
            'image' => null,
            'created_at' => '2021-12-19 18:51:41',
            'updated_at' => '2021-12-19 18:51:41',
        ]);
        \App\Models\Question::create([
            'id' => 15,
            'test_id' => 1,
            'question' => 'The term “over-driving” your headlights at night means:',
            'image' => null,
            'created_at' => '2021-12-19 18:51:51',
            'updated_at' => '2021-12-19 18:51:51',
        ]);
        \App\Models\Question::create([
            'id' => 16,
            'test_id' => 1,
            'question' => 'Under the Graduated Driver Licensing program, a driver will receive 2 demerits:',
            'image' => null,
            'created_at' => '2021-12-19 18:52:04',
            'updated_at' => '2021-12-19 18:52:04',
        ]);
        \App\Models\Question::create([
            'id' => 17,
            'test_id' => 1,
            'question' => 'Using the 2-second rule to judge a safe following distance when driving:',
            'image' => 'f11ecc040d5a0450b7e3f6116814113390773742.png',
            'created_at' => '2021-12-19 18:52:14',
            'updated_at' => '2021-12-19 21:34:12',
        ]);
        \App\Models\Question::create([
            'id' => 18,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => null,
            'created_at' => '2021-12-19 18:52:23',
            'updated_at' => '2021-12-19 18:52:23',
        ]);
        \App\Models\Question::create([
            'id' => 19,
            'test_id' => 1,
            'question' => 'A driver approaching a flashing red traffic light must:',
            'image' => null,
            'created_at' => '2021-12-19 18:52:34',
            'updated_at' => '2021-12-19 18:52:34',
        ]);
        \App\Models\Question::create([
            'id' => 20,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'cd613cc7c22fc2085922c4ddd3ff6ebb21ca1208.png',
            'created_at' => '2021-12-19 18:52:44',
            'updated_at' => '2021-12-19 21:37:28',
        ]);
        \App\Models\Question::create([
            'id' => 21,
            'test_id' => 1,
            'question' => 'According to the law in Alberta, it is the driver’s responsibility to ensure that all passengers under what age are properly restrained in the vehicle?',
            'image' => null,
            'created_at' => '2021-12-19 18:52:52',
            'updated_at' => '2021-12-19 18:52:52',
        ]);
        \App\Models\Question::create([
            'id' => 22,
            'test_id' => 1,
            'question' => 'When parallel parking, the vehicle’s wheels closest to the curb must be within what maximum distance?',
            'image' => null,
            'created_at' => '2021-12-19 18:53:02',
            'updated_at' => '2021-12-19 18:53:02',
        ]);
        \App\Models\Question::create([
            'id' => 23,
            'test_id' => 1,
            'question' => 'Who is responsible and legally obligated to report any medical condition, change in health, or physical disability that may affect a driver’s ability to drive?',
            'image' => null,
            'created_at' => '2021-12-19 18:53:16',
            'updated_at' => '2021-12-19 18:53:16',
        ]);
        \App\Models\Question::create([
            'id' => 24,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '4103bd155315cee04fc11ccb79d6be6f5f37077c.png',
            'created_at' => '2021-12-19 18:55:16',
            'updated_at' => '2021-12-19 21:43:02',
        ]);
        \App\Models\Question::create([
            'id' => 25,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'f426f74130fff7a84175e9b63578922da49bab12.png',
            'created_at' => '2021-12-19 18:55:23',
            'updated_at' => '2021-12-19 21:43:20',
        ]);
        \App\Models\Question::create([
            'id' => 26,
            'test_id' => 1,
            'question' => 'Under the Graduated Driver Licensing program, what is the minimum amount of time that a person must serve as a probationary Class 5 driver?',
            'image' => null,
            'created_at' => '2021-12-19 18:56:39',
            'updated_at' => '2021-12-19 18:56:39',
        ]);
        \App\Models\Question::create([
            'id' => 27,
            'test_id' => 1,
            'question' => 'A large "X" painted on the pavement indicates:',
            'image' => null,
            'created_at' => '2021-12-19 18:57:08',
            'updated_at' => '2021-12-19 18:57:08',
        ]);
        \App\Models\Question::create([
            'id' => 28,
            'test_id' => 1,
            'question' => 'A driver is required to report all collisions to the police when persons have been injured or killed, or when combined damage to all vehicles or property is more than:',
            'image' => null,
            'created_at' => '2021-12-19 18:58:06',
            'updated_at' => '2021-12-19 18:58:06',
        ]);
        \App\Models\Question::create([
            'id' => 29,
            'test_id' => 1,
            'question' => 'When a driver is stopping behind another vehicle in traffic:',
            'image' => null,
            'created_at' => '2021-12-19 18:58:35',
            'updated_at' => '2021-12-19 18:58:35',
        ]);
        \App\Models\Question::create([
            'id' => 30,
            'test_id' => 1,
            'question' => 'If another vehicle is following too close, what should a driver do?',
            'image' => null,
            'created_at' => '2021-12-19 19:00:09',
            'updated_at' => '2021-12-19 19:00:09',
        ]);
        \App\Models\Question::create([
            'id' => 31,
            'test_id' => 1,
            'question' => 'When recovering from a skid, a driver should:',
            'image' => null,
            'created_at' => '2021-12-19 21:51:52',
            'updated_at' => '2021-12-19 21:51:52',
        ]);
        \App\Models\Question::create([
            'id' => 32,
            'test_id' => 1,
            'question' => 'A “slow-moving vehicle” sign must be displayed on the rear of any vehicle that normally travels at speeds less than:',
            'image' => null,
            'created_at' => '2021-12-19 21:53:30',
            'updated_at' => '2021-12-19 21:53:30',
        ]);
        \App\Models\Question::create([
            'id' => 33,
            'test_id' => 1,
            'question' => 'A driver attempting to turn left at a steady green traffic light:',
            'image' => null,
            'created_at' => '2021-12-19 22:07:36',
            'updated_at' => '2021-12-19 22:07:36',
        ]);
        \App\Models\Question::create([
            'id' => 34,
            'test_id' => 1,
            'question' => 'A “Weave Zone” is best described as:',
            'image' => null,
            'created_at' => '2021-12-19 22:09:05',
            'updated_at' => '2021-12-19 22:09:05',
        ]);
    }
}
