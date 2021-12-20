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
            'image' => null,
            'created_at' => '2021-12-19 18:52:14',
            'updated_at' => '2021-12-19 21:34:12',
        ]);
        \App\Models\Question::create([
            'id' => 18,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'f11ecc040d5a0450b7e3f6116814113390773742.png',
            'created_at' => '2021-12-19 18:52:23',
            'updated_at' => '2021-12-20 00:35:24',
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
        \App\Models\Question::create([
            'id' => 35,
            'test_id' => 1,
            'question' => 'A road test will be refused by a driver examiner if:',
            'image' => null,
            'created_at' => '2021-12-20 02:09:45',
            'updated_at' => '2021-12-20 02:09:45',
        ]);
        \App\Models\Question::create([
            'id' => 36,
            'test_id' => 1,
            'question' => 'Is a driver allowed to exceed the speed limit when passing another vehicle?',
            'image' => null,
            'created_at' => '2021-12-20 02:10:59',
            'updated_at' => '2021-12-20 02:10:59',
        ]);
        \App\Models\Question::create([
            'id' => 37,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '1387dd3e02a8b83a5757d1a403bdbb16a368386c.png',
            'created_at' => '2021-12-20 02:13:09',
            'updated_at' => '2021-12-20 02:13:09',
        ]);
        \App\Models\Question::create([
            'id' => 38,
            'test_id' => 1,
            'question' => 'The speed limit in a construction zone must be obeyed:',
            'image' => null,
            'created_at' => '2021-12-20 02:16:11',
            'updated_at' => '2021-12-20 02:16:11',
        ]);
        \App\Models\Question::create([
            'id' => 39,
            'test_id' => 1,
            'question' => 'In a vehicle that does not have anti-lock brakes, threshold braking refers to:',
            'image' => null,
            'created_at' => '2021-12-20 02:17:17',
            'updated_at' => '2021-12-20 02:17:17',
        ]);
        \App\Models\Question::create([
            'id' => 40,
            'test_id' => 1,
            'question' => 'When a driver’s vehicle is approached by an emergency vehicle sounding a siren, from any direction on a two-way road, the driver must:',
            'image' => null,
            'created_at' => '2021-12-20 02:18:26',
            'updated_at' => '2021-12-20 02:18:26',
        ]);
        \App\Models\Question::create([
            'id' => 41,
            'test_id' => 1,
            'question' => 'The recommended braking procedure to bring a vehicle to a normal, smooth stop is:',
            'image' => null,
            'created_at' => '2021-12-20 02:19:22',
            'updated_at' => '2021-12-20 02:19:22',
        ]);
        \App\Models\Question::create([
            'id' => 42,
            'test_id' => 1,
            'question' => 'In Alberta, the law requires that seat belts must be worn:',
            'image' => null,
            'created_at' => '2021-12-20 02:20:38',
            'updated_at' => '2021-12-20 02:20:38',
        ]);
        \App\Models\Question::create([
            'id' => 43,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '0d6f8602803ab74a5d7c8aaad3c1d5d5895ef82e.png',
            'created_at' => '2021-12-20 02:22:06',
            'updated_at' => '2021-12-20 02:22:06',
        ]);
        \App\Models\Question::create([
            'id' => 44,
            'test_id' => 1,
            'question' => 'A driver entering a traffic circle:',
            'image' => null,
            'created_at' => '2021-12-20 02:23:26',
            'updated_at' => '2021-12-20 02:23:26',
        ]);
        \App\Models\Question::create([
            'id' => 45,
            'test_id' => 1,
            'question' => 'A deceleration lane is:',
            'image' => null,
            'created_at' => '2021-12-20 02:24:41',
            'updated_at' => '2021-12-20 02:24:41',
        ]);
        \App\Models\Question::create([
            'id' => 46,
            'test_id' => 1,
            'question' => 'When turning left from a two-way road onto a one-way road, what lane should the vehicle enter?',
            'image' => null,
            'created_at' => '2021-12-20 02:25:35',
            'updated_at' => '2021-12-20 02:25:35',
        ]);
        \App\Models\Question::create([
            'id' => 47,
            'test_id' => 1,
            'question' => 'When two vehicles approach an uncontrolled “T” intersection at right angles to each other at approximately the same time:',
            'image' => null,
            'created_at' => '2021-12-20 02:26:41',
            'updated_at' => '2021-12-20 02:26:41',
        ]);
        \App\Models\Question::create([
            'id' => 48,
            'test_id' => 1,
            'question' => 'Unless otherwise permitted, what lane must a driver be in to turn left from a one-way road?',
            'image' => null,
            'created_at' => '2021-12-20 02:27:45',
            'updated_at' => '2021-12-20 02:27:45',
        ]);
        \App\Models\Question::create([
            'id' => 49,
            'test_id' => 1,
            'question' => 'Which statement describes the steps required to reverse in a straight line?',
            'image' => null,
            'created_at' => '2021-12-20 02:28:57',
            'updated_at' => '2021-12-20 02:28:57',
        ]);
        \App\Models\Question::create([
            'id' => 50,
            'test_id' => 1,
            'question' => 'An acceleration lane is:',
            'image' => null,
            'created_at' => '2021-12-20 02:29:55',
            'updated_at' => '2021-12-20 02:29:55',
        ]);
        \App\Models\Question::create([
            'id' => 51,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '8f767a5073d846b202a41b3c4d6d8ca86489f23b.png',
            'created_at' => '2021-12-20 02:31:21',
            'updated_at' => '2021-12-20 02:31:21',
        ]);
        \App\Models\Question::create([
            'id' => 52,
            'test_id' => 1,
            'question' => 'Under the Graduated Driver Licensing program, a learner with a Class 7 licence is not permitted to drive a vehicle between the hours of:',
            'image' => null,
            'created_at' => '2021-12-20 02:32:14',
            'updated_at' => '2021-12-20 02:32:14',
        ]);
        \App\Models\Question::create([
            'id' => 53,
            'test_id' => 1,
            'question' => 'What does a flashing yellow traffic light mean?',
            'image' => null,
            'created_at' => '2021-12-20 02:33:21',
            'updated_at' => '2021-12-20 02:33:21',
        ]);
        \App\Models\Question::create([
            'id' => 54,
            'test_id' => 1,
            'question' => 'Unless otherwise posted, the school zone speed limits are in effect on school days during the following hours:',
            'image' => null,
            'created_at' => '2021-12-20 02:34:18',
            'updated_at' => '2021-12-20 02:34:18',
        ]);
        \App\Models\Question::create([
            'id' => 55,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'ccfbe278d98f1eb82f29d669358c13290fa7628f.png',
            'created_at' => '2021-12-20 02:35:57',
            'updated_at' => '2021-12-20 02:35:57',
        ]);
        \App\Models\Question::create([
            'id' => 56,
            'test_id' => 1,
            'question' => 'When driving in the right lane on a highway, what should a driver do if another vehicle attempts to merge from an acceleration lane on the right?',
            'image' => null,
            'created_at' => '2021-12-20 02:36:59',
            'updated_at' => '2021-12-20 02:36:59',
        ]);
        \App\Models\Question::create([
            'id' => 57,
            'test_id' => 1,
            'question' => 'Which direction should a vehicle’s front wheels be turned when parked uphill on a two-way road with a curb?',
            'image' => null,
            'created_at' => '2021-12-20 02:37:50',
            'updated_at' => '2021-12-20 02:37:50',
        ]);
        \App\Models\Question::create([
            'id' => 58,
            'test_id' => 1,
            'question' => 'When approaching the rear of a stopped school bus that has its alternately flashing red lights activated, a driver must:',
            'image' => null,
            'created_at' => '2021-12-20 02:38:45',
            'updated_at' => '2021-12-20 02:38:45',
        ]);
        \App\Models\Question::create([
            'id' => 59,
            'test_id' => 1,
            'question' => 'When travelling in urban areas, drivers should scan the road approximately:',
            'image' => null,
            'created_at' => '2021-12-20 02:39:40',
            'updated_at' => '2021-12-20 02:39:40',
        ]);
        \App\Models\Question::create([
            'id' => 60,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'd4d1a06bb5f21a2fe7188f5a14f72ac0d0bfbe34.png',
            'created_at' => '2021-12-20 02:40:56',
            'updated_at' => '2021-12-20 02:41:16',
        ]);
        \App\Models\Question::create([
            'id' => 61,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'bdbac9545d447e29ecaf5e9df20bff42b050bfb0.png',
            'created_at' => '2021-12-20 02:40:59',
            'updated_at' => '2021-12-20 02:42:25',
        ]);
        \App\Models\Question::create([
            'id' => 62,
            'test_id' => 1,
            'question' => 'Before leaving a parallel parking space on the right side of a road:',
            'image' => null,
            'created_at' => '2021-12-20 02:43:27',
            'updated_at' => '2021-12-20 02:43:27',
        ]);
        \App\Models\Question::create([
            'id' => 63,
            'test_id' => 1,
            'question' => 'When approaching the top of a hill on a two-lane highway:',
            'image' => null,
            'created_at' => '2021-12-20 02:44:20',
            'updated_at' => '2021-12-20 02:44:20',
        ]);
        \App\Models\Question::create([
            'id' => 64,
            'test_id' => 1,
            'question' => 'Playground zones are in effect:',
            'image' => null,
            'created_at' => '2021-12-20 02:45:32',
            'updated_at' => '2021-12-20 02:45:32',
        ]);
        \App\Models\Question::create([
            'id' => 65,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '605b628d23ba9b72231e3e75aeb15d44cd0558d3.png',
            'created_at' => '2021-12-20 02:46:52',
            'updated_at' => '2021-12-20 02:46:52',
        ]);
        \App\Models\Question::create([
            'id' => 66,
            'test_id' => 1,
            'question' => 'According to the Basic Licence Driver’s Handbook, most skids are the result of:',
            'image' => null,
            'created_at' => '2021-12-20 02:48:07',
            'updated_at' => '2021-12-20 02:48:07',
        ]);
        \App\Models\Question::create([
            'id' => 67,
            'test_id' => 1,
            'question' => 'How close can a driver legally park a vehicle to a Stop sign?',
            'image' => null,
            'created_at' => '2021-12-20 02:49:10',
            'updated_at' => '2021-12-20 02:49:10',
        ]);
        \App\Models\Question::create([
            'id' => 68,
            'test_id' => 1,
            'question' => 'Parking in a space reserved for persons with disabilities is permitted:',
            'image' => null,
            'created_at' => '2021-12-20 02:50:00',
            'updated_at' => '2021-12-20 02:50:00',
        ]);
        \App\Models\Question::create([
            'id' => 69,
            'test_id' => 1,
            'question' => 'At what minimum distance must headlights be dimmed at night when approaching another vehicle from behind?',
            'image' => null,
            'created_at' => '2021-12-20 02:51:41',
            'updated_at' => '2021-12-20 02:51:41',
        ]);
        \App\Models\Question::create([
            'id' => 70,
            'test_id' => 1,
            'question' => 'When are dual turns permitted at an intersection?',
            'image' => null,
            'created_at' => '2021-12-20 02:52:36',
            'updated_at' => '2021-12-20 02:52:36',
        ]);
        \App\Models\Question::create([
            'id' => 71,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'fa0eb25e41dbed6ab573dd6bfa22368077dc9a6f.png',
            'created_at' => '2021-12-20 02:54:13',
            'updated_at' => '2021-12-20 02:54:13',
        ]);
        \App\Models\Question::create([
            'id' => 72,
            'test_id' => 1,
            'question' => 'Under the Graduated Driver Licensing program, a learner with a Class 7 operator’s license is suspended when they accumulate:',
            'image' => null,
            'created_at' => '2021-12-20 02:55:24',
            'updated_at' => '2021-12-20 02:55:24',
        ]);
        \App\Models\Question::create([
            'id' => 73,
            'test_id' => 1,
            'question' => 'Speed limit signs indicate:',
            'image' => null,
            'created_at' => '2021-12-20 03:03:35',
            'updated_at' => '2021-12-20 03:03:35',
        ]);
        \App\Models\Question::create([
            'id' => 74,
            'test_id' => 1,
            'question' => 'An “uncontrolled intersection”:',
            'image' => null,
            'created_at' => '2021-12-20 03:04:45',
            'updated_at' => '2021-12-20 03:04:45',
        ]);
        \App\Models\Question::create([
            'id' => 75,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '3926d4bdeb86ea4756fc963f25ab27d7bbca04e8.png',
            'created_at' => '2021-12-20 03:07:21',
            'updated_at' => '2021-12-20 03:07:21',
        ]);
        \App\Models\Question::create([
            'id' => 76,
            'test_id' => 1,
            'question' => 'When facing a Merge sign a driver should:',
            'image' => null,
            'created_at' => '2021-12-20 03:08:36',
            'updated_at' => '2021-12-20 03:08:36',
        ]);
        \App\Models\Question::create([
            'id' => 77,
            'test_id' => 1,
            'question' => 'In reduced visibility due to fog, smoke or snow, use the:',
            'image' => null,
            'created_at' => '2021-12-20 03:10:48',
            'updated_at' => '2021-12-20 03:10:48',
        ]);
        \App\Models\Question::create([
            'id' => 78,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '7838417e2781bc46adf365721dfea285d4fd5d4c.png',
            'created_at' => '2021-12-20 03:12:10',
            'updated_at' => '2021-12-20 03:12:10',
        ]);
        \App\Models\Question::create([
            'id' => 79,
            'test_id' => 1,
            'question' => 'Is a driver allowed to turn right at a red traffic control light?',
            'image' => null,
            'created_at' => '2021-12-20 03:13:19',
            'updated_at' => '2021-12-20 03:13:19',
        ]);
        \App\Models\Question::create([
            'id' => 80,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '56f84baa1eb3d864f763b2bfd4541c71d816b7f4.png',
            'created_at' => '2021-12-20 03:14:43',
            'updated_at' => '2021-12-20 03:15:11',
        ]);
        \App\Models\Question::create([
            'id' => 81,
            'test_id' => 1,
            'question' => 'When a vehicle is stopped to allow a pedestrian to cross the road, other vehicles that are approaching from the rear:',
            'image' => null,
            'created_at' => '2021-12-20 03:17:02',
            'updated_at' => '2021-12-20 03:17:02',
        ]);
        \App\Models\Question::create([
            'id' => 82,
            'test_id' => 1,
            'question' => 'When a head restraint is raised to the proper position, the centre of the head restraint is:',
            'image' => null,
            'created_at' => '2021-12-20 03:17:58',
            'updated_at' => '2021-12-20 03:17:58',
        ]);
        \App\Models\Question::create([
            'id' => 83,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '53744307da405ecdd452e3d44bc36c86e685151b.png',
            'created_at' => '2021-12-20 03:19:18',
            'updated_at' => '2021-12-20 03:19:18',
        ]);
        \App\Models\Question::create([
            'id' => 84,
            'test_id' => 1,
            'question' => 'When a “PASSING LANE AHEAD” sign is posted, the driver of a slower moving vehicle should:',
            'image' => null,
            'created_at' => '2021-12-20 03:20:17',
            'updated_at' => '2021-12-20 03:20:17',
        ]);
        \App\Models\Question::create([
            'id' => 85,
            'test_id' => 1,
            'question' => 'When approaching the rear of a school bus that is displaying alternating flashing amber lights, a driver should:',
            'image' => null,
            'created_at' => '2021-12-20 03:21:18',
            'updated_at' => '2021-12-20 03:21:18',
        ]);
        \App\Models\Question::create([
            'id' => 86,
            'test_id' => 1,
            'question' => 'In the Basic Licence Driver’s Handbook, “nighttime” is defined as the period of time:',
            'image' => null,
            'created_at' => '2021-12-20 03:22:23',
            'updated_at' => '2021-12-20 03:22:23',
        ]);
        \App\Models\Question::create([
            'id' => 87,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '1ef3b0057015988ded9606a6b05fd9a282c2a79a.png',
            'created_at' => '2021-12-20 03:23:44',
            'updated_at' => '2021-12-20 03:23:44',
        ]);
        \App\Models\Question::create([
            'id' => 88,
            'test_id' => 1,
            'question' => 'A vehicle exiting a parking lot onto a roadway:',
            'image' => null,
            'created_at' => '2021-12-20 03:24:50',
            'updated_at' => '2021-12-20 03:24:50',
        ]);
        \App\Models\Question::create([
            'id' => 89,
            'test_id' => 1,
            'question' => 'When approaching a railway crossing that has the flashing red light and bell activated:',
            'image' => null,
            'created_at' => '2021-12-20 03:25:55',
            'updated_at' => '2021-12-20 03:25:55',
        ]);
        \App\Models\Question::create([
            'id' => 90,
            'test_id' => 1,
            'question' => 'The recommended method for travelling through a curve on a highway is:',
            'image' => null,
            'created_at' => '2021-12-20 03:27:06',
            'updated_at' => '2021-12-20 03:27:06',
        ]);
        \App\Models\Question::create([
            'id' => 91,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'a80110cf0141f847776d847f3420216824d71417.png',
            'created_at' => '2021-12-20 03:28:28',
            'updated_at' => '2021-12-20 03:28:28',
        ]);
        \App\Models\Question::create([
            'id' => 92,
            'test_id' => 1,
            'question' => 'Why is it not safe to pass a loaded log-haul truck that is turning?',
            'image' => null,
            'created_at' => '2021-12-20 03:29:33',
            'updated_at' => '2021-12-20 03:29:33',
        ]);
        \App\Models\Question::create([
            'id' => 93,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '84414c38c1b5df3138ab415958ffeb1ad91e1feb.png',
            'created_at' => '2021-12-20 03:31:17',
            'updated_at' => '2021-12-20 03:31:17',
        ]);
        \App\Models\Question::create([
            'id' => 94,
            'test_id' => 1,
            'question' => 'When encountering a funeral processions that is crossing an intersection:',
            'image' => null,
            'created_at' => '2021-12-20 03:32:19',
            'updated_at' => '2021-12-20 03:32:19',
        ]);
        \App\Models\Question::create([
            'id' => 95,
            'test_id' => 1,
            'question' => 'If the vehicle’s right tires travel off the paved portion of the roadway:',
            'image' => null,
            'created_at' => '2021-12-20 03:33:06',
            'updated_at' => '2021-12-20 03:33:06',
        ]);
        \App\Models\Question::create([
            'id' => 96,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '01f7d6c8a2648d0cf2ca425ca71330a3d5421afd.png',
            'created_at' => '2021-12-20 03:34:24',
            'updated_at' => '2021-12-20 03:34:24',
        ]);
        \App\Models\Question::create([
            'id' => 97,
            'test_id' => 1,
            'question' => 'When completing an angle park, the vehicle’s front wheel must be within what maximum distance from the nearest curb?',
            'image' => null,
            'created_at' => '2021-12-20 03:35:16',
            'updated_at' => '2021-12-20 03:35:16',
        ]);
        \App\Models\Question::create([
            'id' => 98,
            'test_id' => 1,
            'question' => 'In an urban area, when a pedestrian is standing at a crosswalk with their arm raised at approximately right angles to their body and pointing to the opposite curb, what does this mean?',
            'image' => null,
            'created_at' => '2021-12-20 03:36:21',
            'updated_at' => '2021-12-20 03:36:21',
        ]);
        \App\Models\Question::create([
            'id' => 99,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '46608c1f7c6595ba238c11fd661c34415cc0a858.png',
            'created_at' => '2021-12-20 03:37:48',
            'updated_at' => '2021-12-20 03:37:48',
        ]);
        \App\Models\Question::create([
            'id' => 100,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'f2d8d36d884335b4a41272ace01f14d685c0de1f.png',
            'created_at' => '2021-12-20 03:39:10',
            'updated_at' => '2021-12-20 03:39:23',
        ]);
        \App\Models\Question::create([
            'id' => 101,
            'test_id' => 1,
            'question' => 'When approaching an intersection displaying a steady yellow traffic light:',
            'image' => null,
            'created_at' => '2021-12-20 03:40:32',
            'updated_at' => '2021-12-20 03:40:32',
        ]);
        \App\Models\Question::create([
            'id' => 102,
            'test_id' => 1,
            'question' => 'A solid yellow line together with a broken yellow line marked on the centre of a highway means:',
            'image' => null,
            'created_at' => '2021-12-20 03:41:30',
            'updated_at' => '2021-12-20 03:41:30',
        ]);
        \App\Models\Question::create([
            'id' => 103,
            'test_id' => 1,
            'question' => 'At 9:00 A.M. on a school day, what is the maximum speed permitted in a school zone in a rural area, unless otherwise posted?',
            'image' => null,
            'created_at' => '2021-12-20 03:42:21',
            'updated_at' => '2021-12-20 03:42:21',
        ]);
        \App\Models\Question::create([
            'id' => 104,
            'test_id' => 1,
            'question' => 'On a two-lane highway, when passing other vehicles travelling in the same direction, a driver:',
            'image' => null,
            'created_at' => '2021-12-20 03:43:16',
            'updated_at' => '2021-12-20 03:43:16',
        ]);
        \App\Models\Question::create([
            'id' => 105,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => '51475458aaf9bed1b0c66cc211dc5264ac8eb7b6.png',
            'created_at' => '2021-12-20 03:44:41',
            'updated_at' => '2021-12-20 03:44:41',
        ]);
        \App\Models\Question::create([
            'id' => 106,
            'test_id' => 1,
            'question' => 'What minimum distance from a fire hydrant must a vehicle be parked?',
            'image' => null,
            'created_at' => '2021-12-20 03:45:42',
            'updated_at' => '2021-12-20 03:45:42',
        ]);
        \App\Models\Question::create([
            'id' => 107,
            'test_id' => 1,
            'question' => 'This sign indicates:',
            'image' => 'dbe54d9d1ddb9bb4c720166947f8af56a3ef5d15.png',
            'created_at' => '2021-12-20 03:47:03',
            'updated_at' => '2021-12-20 03:47:03',
        ]);
        \App\Models\Question::create([
            'id' => 108,
            'test_id' => 1,
            'question' => 'If a driver is being followed by a vehicle that is attempting to pass on a two-way road, the driver should:',
            'image' => null,
            'created_at' => '2021-12-20 03:48:05',
            'updated_at' => '2021-12-20 03:48:05',
        ]);
    }
}
