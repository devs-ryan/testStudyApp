<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Answer::create([
            'id' => 1,
            'question_id' => 1,
            'is_correct?' => 1,
            'answer' => '100 km/h',
            'created_at' => '2021-12-19 19:27:47',
            'updated_at' => '2021-12-19 19:27:47',
        ]);
        \App\Models\Answer::create([
            'id' => 2,
            'question_id' => 1,
            'is_correct?' => 0,
            'answer' => '90 km/h',
            'created_at' => '2021-12-19 19:28:00',
            'updated_at' => '2021-12-19 19:28:00',
        ]);
        \App\Models\Answer::create([
            'id' => 3,
            'question_id' => 1,
            'is_correct?' => 0,
            'answer' => '110 km/h',
            'created_at' => '2021-12-19 19:28:10',
            'updated_at' => '2021-12-19 19:28:10',
        ]);
        \App\Models\Answer::create([
            'id' => 4,
            'question_id' => 1,
            'is_correct?' => 0,
            'answer' => '80 km/h',
            'created_at' => '2021-12-19 19:28:20',
            'updated_at' => '2021-12-19 19:28:20',
        ]);
        \App\Models\Answer::create([
            'id' => 5,
            'question_id' => 2,
            'is_correct?' => 0,
            'answer' => 'Look in the inside rear-view mirror and make steering adjustments as necessary',
            'created_at' => '2021-12-19 19:53:07',
            'updated_at' => '2021-12-19 19:53:07',
        ]);
        \App\Models\Answer::create([
            'id' => 6,
            'question_id' => 2,
            'is_correct?' => 0,
            'answer' => 'Look over the right shoulder with occasional glances to the front',
            'created_at' => '2021-12-19 19:53:25',
            'updated_at' => '2021-12-19 19:53:25',
        ]);
        \App\Models\Answer::create([
            'id' => 7,
            'question_id' => 2,
            'is_correct?' => 1,
            'answer' => 'Look over the left shoulder with occasional glances to the front',
            'created_at' => '2021-12-19 19:53:42',
            'updated_at' => '2021-12-19 19:53:42',
        ]);
        \App\Models\Answer::create([
            'id' => 8,
            'question_id' => 2,
            'is_correct?' => 0,
            'answer' => 'Without shoulder checking, use the inside and outside rear-view mirrors to ensure the best view to the rear and both sides of the vehicle',
            'created_at' => '2021-12-19 19:54:28',
            'updated_at' => '2021-12-19 19:54:28',
        ]);
        \App\Models\Answer::create([
            'id' => 9,
            'question_id' => 3,
            'is_correct?' => 0,
            'answer' => 'Must stop and wait for a green light before turning in the direction of the arrow',
            'created_at' => '2021-12-19 20:40:46',
            'updated_at' => '2021-12-19 20:40:46',
        ]);
        \App\Models\Answer::create([
            'id' => 10,
            'question_id' => 3,
            'is_correct?' => 0,
            'answer' => 'May go straight through the intersection without stopping',
            'created_at' => '2021-12-19 20:41:00',
            'updated_at' => '2021-12-19 20:41:00',
        ]);
        \App\Models\Answer::create([
            'id' => 11,
            'question_id' => 3,
            'is_correct?' => 1,
            'answer' => 'May proceed when safe, without stopping, in the direction of the arrow',
            'created_at' => '2021-12-19 20:41:09',
            'updated_at' => '2021-12-19 20:41:09',
        ]);
        \App\Models\Answer::create([
            'id' => 12,
            'question_id' => 3,
            'is_correct?' => 0,
            'answer' => 'May turn left without stopping',
            'created_at' => '2021-12-19 20:41:25',
            'updated_at' => '2021-12-19 20:41:25',
        ]);
        \App\Models\Answer::create([
            'id' => 13,
            'question_id' => 4,
            'is_correct?' => 1,
            'answer' => '15 points',
            'created_at' => '2021-12-19 20:42:01',
            'updated_at' => '2021-12-19 20:42:36',
        ]);
        \App\Models\Answer::create([
            'id' => 14,
            'question_id' => 4,
            'is_correct?' => 0,
            'answer' => '8 points',
            'created_at' => '2021-12-19 20:42:10',
            'updated_at' => '2021-12-19 20:42:10',
        ]);
        \App\Models\Answer::create([
            'id' => 15,
            'question_id' => 4,
            'is_correct?' => 0,
            'answer' => '5 points',
            'created_at' => '2021-12-19 20:42:17',
            'updated_at' => '2021-12-19 20:42:17',
        ]);
        \App\Models\Answer::create([
            'id' => 16,
            'question_id' => 4,
            'is_correct?' => 0,
            'answer' => '12 points',
            'created_at' => '2021-12-19 20:42:24',
            'updated_at' => '2021-12-19 20:42:24',
        ]);
        \App\Models\Answer::create([
            'id' => 17,
            'question_id' => 5,
            'is_correct?' => 1,
            'answer' => 'Leave extra room before returning to their lane',
            'created_at' => '2021-12-19 20:43:15',
            'updated_at' => '2021-12-19 20:43:15',
        ]);
        \App\Models\Answer::create([
            'id' => 18,
            'question_id' => 5,
            'is_correct?' => 0,
            'answer' => 'Return to their lane when signalled by the truck’s headlights',
            'created_at' => '2021-12-19 20:43:25',
            'updated_at' => '2021-12-19 20:43:25',
        ]);
        \App\Models\Answer::create([
            'id' => 19,
            'question_id' => 5,
            'is_correct?' => 0,
            'answer' => 'Return to their lane when the truck is no longer visible in any of their rear-view mirrors',
            'created_at' => '2021-12-19 20:43:34',
            'updated_at' => '2021-12-19 20:43:34',
        ]);
        \App\Models\Answer::create([
            'id' => 20,
            'question_id' => 5,
            'is_correct?' => 0,
            'answer' => 'Return to their lane once they have cleared the truck’s front bumper',
            'created_at' => '2021-12-19 20:43:43',
            'updated_at' => '2021-12-19 20:43:43',
        ]);
        \App\Models\Answer::create([
            'id' => 21,
            'question_id' => 6,
            'is_correct?' => 0,
            'answer' => 'Right turns on a red traffic light are never permitted',
            'created_at' => '2021-12-19 20:44:17',
            'updated_at' => '2021-12-19 20:44:17',
        ]);
        \App\Models\Answer::create([
            'id' => 22,
            'question_id' => 6,
            'is_correct?' => 1,
            'answer' => 'Signal and make sure there is no sign prohibiting the turn, stop, look left and right, yield the right-of-way, then proceed',
            'created_at' => '2021-12-19 20:44:28',
            'updated_at' => '2021-12-19 20:44:28',
        ]);
        \App\Models\Answer::create([
            'id' => 23,
            'question_id' => 6,
            'is_correct?' => 0,
            'answer' => 'Reduce speed before the turn, look right for cyclists, signal and proceed',
            'created_at' => '2021-12-19 20:44:47',
            'updated_at' => '2021-12-19 20:44:47',
        ]);
        \App\Models\Answer::create([
            'id' => 24,
            'question_id' => 6,
            'is_correct?' => 0,
            'answer' => 'Signal and reduce speed before the turn, look left, yield to vehicles and proceed',
            'created_at' => '2021-12-19 20:44:58',
            'updated_at' => '2021-12-19 20:44:58',
        ]);
        \App\Models\Answer::create([
            'id' => 25,
            'question_id' => 7,
            'is_correct?' => 0,
            'answer' => 'Route for vehicles over 4500 kg.',
            'created_at' => '2021-12-19 20:46:29',
            'updated_at' => '2021-12-19 20:46:29',
        ]);
        \App\Models\Answer::create([
            'id' => 26,
            'question_id' => 7,
            'is_correct?' => 0,
            'answer' => 'Route for slow moving vehicles',
            'created_at' => '2021-12-19 20:46:39',
            'updated_at' => '2021-12-19 20:46:39',
        ]);
        \App\Models\Answer::create([
            'id' => 27,
            'question_id' => 7,
            'is_correct?' => 0,
            'answer' => 'Reserved lane for buses',
            'created_at' => '2021-12-19 20:46:46',
            'updated_at' => '2021-12-19 20:46:46',
        ]);
        \App\Models\Answer::create([
            'id' => 28,
            'question_id' => 7,
            'is_correct?' => 1,
            'answer' => 'Dangerous goods route',
            'created_at' => '2021-12-19 20:46:57',
            'updated_at' => '2021-12-19 20:46:57',
        ]);
        \App\Models\Answer::create([
            'id' => 29,
            'question_id' => 8,
            'is_correct?' => 0,
            'answer' => 'It is a line separating traffic travelling in opposite directions',
            'created_at' => '2021-12-19 21:10:01',
            'updated_at' => '2021-12-19 21:10:01',
        ]);
        \App\Models\Answer::create([
            'id' => 30,
            'question_id' => 8,
            'is_correct?' => 0,
            'answer' => 'Traffic on the right is moving faster than traffic on the left',
            'created_at' => '2021-12-19 21:10:12',
            'updated_at' => '2021-12-19 21:10:12',
        ]);
        \App\Models\Answer::create([
            'id' => 31,
            'question_id' => 8,
            'is_correct?' => 0,
            'answer' => 'Lane change is permitted',
            'created_at' => '2021-12-19 21:10:21',
            'updated_at' => '2021-12-19 21:12:16',
        ]);
        \App\Models\Answer::create([
            'id' => 32,
            'question_id' => 8,
            'is_correct?' => 1,
            'answer' => 'Lane changing is not permitted',
            'created_at' => '2021-12-19 21:10:35',
            'updated_at' => '2021-12-19 21:12:30',
        ]);
        \App\Models\Answer::create([
            'id' => 33,
            'question_id' => 9,
            'is_correct?' => 0,
            'answer' => 'A lane closest to the curb, where parking is permitted but there are no meters',
            'created_at' => '2021-12-19 21:19:13',
            'updated_at' => '2021-12-19 21:19:13',
        ]);
        \App\Models\Answer::create([
            'id' => 34,
            'question_id' => 9,
            'is_correct?' => 0,
            'answer' => 'All of these responses are correct',
            'created_at' => '2021-12-19 21:19:28',
            'updated_at' => '2021-12-19 21:19:28',
        ]);
        \App\Models\Answer::create([
            'id' => 35,
            'question_id' => 9,
            'is_correct?' => 1,
            'answer' => 'That portion of a primary highway between the edge of the roadway to the right of the direction of traffic and the nearest solid white line, not being the centre line, marked on the roadway',
            'created_at' => '2021-12-19 21:19:41',
            'updated_at' => '2021-12-19 21:19:41',
        ]);
        \App\Models\Answer::create([
            'id' => 36,
            'question_id' => 9,
            'is_correct?' => 0,
            'answer' => 'A lane immediately beside a row of parking meters in an urban area',
            'created_at' => '2021-12-19 21:19:52',
            'updated_at' => '2021-12-19 21:19:52',
        ]);
        \App\Models\Answer::create([
            'id' => 37,
            'question_id' => 11,
            'is_correct?' => 0,
            'answer' => 'Off-road facilities ahead',
            'created_at' => '2021-12-19 21:20:49',
            'updated_at' => '2021-12-19 21:20:49',
        ]);
        \App\Models\Answer::create([
            'id' => 38,
            'question_id' => 11,
            'is_correct?' => 0,
            'answer' => 'Slippery when wet',
            'created_at' => '2021-12-19 21:21:03',
            'updated_at' => '2021-12-19 21:21:03',
        ]);
        \App\Models\Answer::create([
            'id' => 39,
            'question_id' => 11,
            'is_correct?' => 1,
            'answer' => 'Uneven pavement',
            'created_at' => '2021-12-19 21:21:12',
            'updated_at' => '2021-12-19 21:21:12',
        ]);
        \App\Models\Answer::create([
            'id' => 40,
            'question_id' => 11,
            'is_correct?' => 0,
            'answer' => 'Detour ahead',
            'created_at' => '2021-12-19 21:21:48',
            'updated_at' => '2021-12-19 21:21:48',
        ]);
        \App\Models\Answer::create([
            'id' => 41,
            'question_id' => 12,
            'is_correct?' => 0,
            'answer' => 'Prepare for an emergency vehicle travelling in that lane',
            'created_at' => '2021-12-19 21:23:52',
            'updated_at' => '2021-12-19 21:23:52',
        ]);
        \App\Models\Answer::create([
            'id' => 42,
            'question_id' => 12,
            'is_correct?' => 0,
            'answer' => 'Reduce speed to below 30 km/h',
            'created_at' => '2021-12-19 21:24:00',
            'updated_at' => '2021-12-19 21:24:00',
        ]);
        \App\Models\Answer::create([
            'id' => 43,
            'question_id' => 12,
            'is_correct?' => 0,
            'answer' => 'Use that lane only for the purpose of making left turns',
            'created_at' => '2021-12-19 21:24:11',
            'updated_at' => '2021-12-19 21:24:11',
        ]);
        \App\Models\Answer::create([
            'id' => 44,
            'question_id' => 12,
            'is_correct?' => 1,
            'answer' => 'Travel is not permitted in that lane',
            'created_at' => '2021-12-19 21:24:19',
            'updated_at' => '2021-12-19 21:24:19',
        ]);
        \App\Models\Answer::create([
            'id' => 45,
            'question_id' => 13,
            'is_correct?' => 1,
            'answer' => 'Yes, provided the person is still under the age of 18 and is not self-supporting or married',
            'created_at' => '2021-12-19 21:25:14',
            'updated_at' => '2021-12-19 21:25:14',
        ]);
        \App\Models\Answer::create([
            'id' => 46,
            'question_id' => 13,
            'is_correct?' => 0,
            'answer' => 'Yes, provided that both parents verbally agree to withdraw the consent at a registry office',
            'created_at' => '2021-12-19 21:25:22',
            'updated_at' => '2021-12-19 21:25:22',
        ]);
        \App\Models\Answer::create([
            'id' => 47,
            'question_id' => 13,
            'is_correct?' => 0,
            'answer' => 'No, once it is given it remains in effect until the person reaches 18 years of age',
            'created_at' => '2021-12-19 21:25:31',
            'updated_at' => '2021-12-19 21:25:31',
        ]);
        \App\Models\Answer::create([
            'id' => 48,
            'question_id' => 13,
            'is_correct?' => 0,
            'answer' => 'No, but another consent form must be signed by both parents after a licence suspension',
            'created_at' => '2021-12-19 21:25:47',
            'updated_at' => '2021-12-19 21:25:47',
        ]);
        \App\Models\Answer::create([
            'id' => 49,
            'question_id' => 14,
            'is_correct?' => 1,
            'answer' => 'Yield the right-of-way to traffic not facing the sign and all pedestrians in the intersection',
            'created_at' => '2021-12-19 21:26:33',
            'updated_at' => '2021-12-19 21:26:33',
        ]);
        \App\Models\Answer::create([
            'id' => 50,
            'question_id' => 14,
            'is_correct?' => 0,
            'answer' => 'Always sound the horn to warn other traffic within the intersection',
            'created_at' => '2021-12-19 21:26:42',
            'updated_at' => '2021-12-19 21:26:42',
        ]);
        \App\Models\Answer::create([
            'id' => 51,
            'question_id' => 14,
            'is_correct?' => 0,
            'answer' => 'Expect all other vehicles to yield the right-of-way to you',
            'created_at' => '2021-12-19 21:26:50',
            'updated_at' => '2021-12-19 21:26:50',
        ]);
        \App\Models\Answer::create([
            'id' => 52,
            'question_id' => 14,
            'is_correct?' => 0,
            'answer' => 'Come to a stop and proceed after looking to the right and left',
            'created_at' => '2021-12-19 21:27:02',
            'updated_at' => '2021-12-19 21:27:02',
        ]);
        \App\Models\Answer::create([
            'id' => 53,
            'question_id' => 15,
            'is_correct?' => 0,
            'answer' => 'The driver cannot see clearly for 1000 metres',
            'created_at' => '2021-12-19 21:28:06',
            'updated_at' => '2021-12-19 21:28:06',
        ]);
        \App\Models\Answer::create([
            'id' => 54,
            'question_id' => 15,
            'is_correct?' => 0,
            'answer' => 'The low beam headlights are not set properly',
            'created_at' => '2021-12-19 21:28:15',
            'updated_at' => '2021-12-19 21:28:15',
        ]);
        \App\Models\Answer::create([
            'id' => 55,
            'question_id' => 15,
            'is_correct?' => 1,
            'answer' => 'The driver is travelling at a speed which would not permit them to see an object in time to stop',
            'created_at' => '2021-12-19 21:28:25',
            'updated_at' => '2021-12-19 21:28:25',
        ]);
        \App\Models\Answer::create([
            'id' => 56,
            'question_id' => 15,
            'is_correct?' => 0,
            'answer' => 'The driver has had the headlights on for too long a time',
            'created_at' => '2021-12-19 21:29:00',
            'updated_at' => '2021-12-19 21:29:00',
        ]);
        \App\Models\Answer::create([
            'id' => 57,
            'question_id' => 16,
            'is_correct?' => 1,
            'answer' => 'For having more passengers than there are seat belts',
            'created_at' => '2021-12-19 21:30:56',
            'updated_at' => '2021-12-19 21:30:56',
        ]);
        \App\Models\Answer::create([
            'id' => 58,
            'question_id' => 16,
            'is_correct?' => 0,
            'answer' => 'For not wearing a seat belt securely fastened',
            'created_at' => '2021-12-19 21:31:05',
            'updated_at' => '2021-12-19 21:31:05',
        ]);
        \App\Models\Answer::create([
            'id' => 59,
            'question_id' => 16,
            'is_correct?' => 0,
            'answer' => 'For not wearing a seat belt',
            'created_at' => '2021-12-19 21:31:14',
            'updated_at' => '2021-12-19 21:31:14',
        ]);
        \App\Models\Answer::create([
            'id' => 60,
            'question_id' => 16,
            'is_correct?' => 0,
            'answer' => 'For not wearing a seat belt properly adjusted',
            'created_at' => '2021-12-19 21:31:22',
            'updated_at' => '2021-12-19 21:31:22',
        ]);
        \App\Models\Answer::create([
            'id' => 61,
            'question_id' => 17,
            'is_correct?' => 0,
            'answer' => 'Is more accurate on rural highways than in urban centres',
            'created_at' => '2021-12-19 21:32:10',
            'updated_at' => '2021-12-19 21:32:10',
        ]);
        \App\Models\Answer::create([
            'id' => 62,
            'question_id' => 17,
            'is_correct?' => 0,
            'answer' => 'Is not accurate at speeds greater than 100 km/h',
            'created_at' => '2021-12-19 21:32:22',
            'updated_at' => '2021-12-19 21:32:22',
        ]);
        \App\Models\Answer::create([
            'id' => 63,
            'question_id' => 17,
            'is_correct?' => 1,
            'answer' => 'Is accurate at any speed',
            'created_at' => '2021-12-19 21:32:31',
            'updated_at' => '2021-12-19 21:32:31',
        ]);
        \App\Models\Answer::create([
            'id' => 64,
            'question_id' => 17,
            'is_correct?' => 0,
            'answer' => 'Is not accurate at speeds lower than 30 km/h',
            'created_at' => '2021-12-19 21:32:40',
            'updated_at' => '2021-12-19 21:32:40',
        ]);
        \App\Models\Answer::create([
            'id' => 65,
            'question_id' => 18,
            'is_correct?' => 0,
            'answer' => 'Traffic entering from the right',
            'created_at' => '2021-12-19 21:33:20',
            'updated_at' => '2021-12-19 21:33:20',
        ]);
        \App\Models\Answer::create([
            'id' => 66,
            'question_id' => 18,
            'is_correct?' => 0,
            'answer' => 'Winding road ahead',
            'created_at' => '2021-12-19 21:33:26',
            'updated_at' => '2021-12-19 21:33:26',
        ]);
        \App\Models\Answer::create([
            'id' => 67,
            'question_id' => 18,
            'is_correct?' => 1,
            'answer' => 'Curve right',
            'created_at' => '2021-12-19 21:33:36',
            'updated_at' => '2021-12-19 21:33:36',
        ]);
        \App\Models\Answer::create([
            'id' => 68,
            'question_id' => 18,
            'is_correct?' => 0,
            'answer' => 'Concealed intersection on the right',
            'created_at' => '2021-12-19 21:33:47',
            'updated_at' => '2021-12-19 21:33:47',
        ]);
        \App\Models\Answer::create([
            'id' => 69,
            'question_id' => 19,
            'is_correct?' => 0,
            'answer' => 'Stop and wait for the flashing green light',
            'created_at' => '2021-12-19 21:34:52',
            'updated_at' => '2021-12-19 21:34:52',
        ]);
        \App\Models\Answer::create([
            'id' => 70,
            'question_id' => 19,
            'is_correct?' => 0,
            'answer' => 'Reduce speed and proceed with caution',
            'created_at' => '2021-12-19 21:35:02',
            'updated_at' => '2021-12-19 21:35:02',
        ]);
        \App\Models\Answer::create([
            'id' => 71,
            'question_id' => 19,
            'is_correct?' => 1,
            'answer' => 'Stop and proceed only when safe to do so',
            'created_at' => '2021-12-19 21:35:11',
            'updated_at' => '2021-12-19 21:35:11',
        ]);
        \App\Models\Answer::create([
            'id' => 72,
            'question_id' => 19,
            'is_correct?' => 0,
            'answer' => 'Stop until the signal light turns green',
            'created_at' => '2021-12-19 21:35:24',
            'updated_at' => '2021-12-19 21:35:24',
        ]);
        \App\Models\Answer::create([
            'id' => 73,
            'question_id' => 20,
            'is_correct?' => 0,
            'answer' => 'Do not enter',
            'created_at' => '2021-12-19 21:36:25',
            'updated_at' => '2021-12-19 21:36:25',
        ]);
        \App\Models\Answer::create([
            'id' => 74,
            'question_id' => 20,
            'is_correct?' => 0,
            'answer' => 'Slow moving vehicles ahead',
            'created_at' => '2021-12-19 21:36:35',
            'updated_at' => '2021-12-19 21:36:35',
        ]);
        \App\Models\Answer::create([
            'id' => 75,
            'question_id' => 20,
            'is_correct?' => 1,
            'answer' => 'Warning, Yield sign ahead',
            'created_at' => '2021-12-19 21:36:44',
            'updated_at' => '2021-12-19 21:36:44',
        ]);
        \App\Models\Answer::create([
            'id' => 76,
            'question_id' => 20,
            'is_correct?' => 0,
            'answer' => 'Warning, traffic is approaching',
            'created_at' => '2021-12-19 21:36:59',
            'updated_at' => '2021-12-19 21:36:59',
        ]);
        \App\Models\Answer::create([
            'id' => 77,
            'question_id' => 21,
            'is_correct?' => 0,
            'answer' => '18 years',
            'created_at' => '2021-12-19 21:38:02',
            'updated_at' => '2021-12-19 21:38:02',
        ]);
        \App\Models\Answer::create([
            'id' => 78,
            'question_id' => 21,
            'is_correct?' => 0,
            'answer' => '24 years',
            'created_at' => '2021-12-19 21:38:10',
            'updated_at' => '2021-12-19 21:38:10',
        ]);
        \App\Models\Answer::create([
            'id' => 79,
            'question_id' => 21,
            'is_correct?' => 0,
            'answer' => '21 years',
            'created_at' => '2021-12-19 21:38:17',
            'updated_at' => '2021-12-19 21:38:17',
        ]);
        \App\Models\Answer::create([
            'id' => 80,
            'question_id' => 21,
            'is_correct?' => 1,
            'answer' => '16 years',
            'created_at' => '2021-12-19 21:38:25',
            'updated_at' => '2021-12-19 21:38:25',
        ]);
        \App\Models\Answer::create([
            'id' => 81,
            'question_id' => 22,
            'is_correct?' => 0,
            'answer' => '80 centimetres from the curb',
            'created_at' => '2021-12-19 21:39:11',
            'updated_at' => '2021-12-19 21:39:11',
        ]);
        \App\Models\Answer::create([
            'id' => 82,
            'question_id' => 22,
            'is_correct?' => 0,
            'answer' => '30 centimetres from the curb',
            'created_at' => '2021-12-19 21:39:17',
            'updated_at' => '2021-12-19 21:39:17',
        ]);
        \App\Models\Answer::create([
            'id' => 83,
            'question_id' => 22,
            'is_correct?' => 0,
            'answer' => '10 centimetres from the curb',
            'created_at' => '2021-12-19 21:39:25',
            'updated_at' => '2021-12-19 21:39:25',
        ]);
        \App\Models\Answer::create([
            'id' => 84,
            'question_id' => 22,
            'is_correct?' => 1,
            'answer' => '50 centimetres from the curb',
            'created_at' => '2021-12-19 21:39:33',
            'updated_at' => '2021-12-19 21:39:33',
        ]);
        \App\Models\Answer::create([
            'id' => 85,
            'question_id' => 23,
            'is_correct?' => 0,
            'answer' => 'The driver’s employer',
            'created_at' => '2021-12-19 21:39:59',
            'updated_at' => '2021-12-19 21:39:59',
        ]);
        \App\Models\Answer::create([
            'id' => 86,
            'question_id' => 23,
            'is_correct?' => 1,
            'answer' => 'The driver',
            'created_at' => '2021-12-19 21:40:07',
            'updated_at' => '2021-12-19 21:40:07',
        ]);
        \App\Models\Answer::create([
            'id' => 87,
            'question_id' => 23,
            'is_correct?' => 0,
            'answer' => 'The driver’s doctor',
            'created_at' => '2021-12-19 21:40:14',
            'updated_at' => '2021-12-19 21:40:14',
        ]);
        \App\Models\Answer::create([
            'id' => 88,
            'question_id' => 23,
            'is_correct?' => 0,
            'answer' => 'The driver’s insurance company',
            'created_at' => '2021-12-19 21:40:25',
            'updated_at' => '2021-12-19 21:40:25',
        ]);
        \App\Models\Answer::create([
            'id' => 93,
            'question_id' => 24,
            'is_correct?' => 1,
            'answer' => 'Road narrows, left',
            'created_at' => '2021-12-19 21:43:43',
            'updated_at' => '2021-12-19 21:43:43',
        ]);
        \App\Models\Answer::create([
            'id' => 94,
            'question_id' => 24,
            'is_correct?' => 0,
            'answer' => 'Two-way traffic',
            'created_at' => '2021-12-19 21:43:52',
            'updated_at' => '2021-12-19 21:43:52',
        ]);
        \App\Models\Answer::create([
            'id' => 95,
            'question_id' => 24,
            'is_correct?' => 0,
            'answer' => 'Divided highway ends',
            'created_at' => '2021-12-19 21:44:00',
            'updated_at' => '2021-12-19 21:44:00',
        ]);
        \App\Models\Answer::create([
            'id' => 96,
            'question_id' => 24,
            'is_correct?' => 0,
            'answer' => 'Obstruction – keep left',
            'created_at' => '2021-12-19 21:44:10',
            'updated_at' => '2021-12-19 21:44:10',
        ]);
        \App\Models\Answer::create([
            'id' => 97,
            'question_id' => 25,
            'is_correct?' => 0,
            'answer' => 'Rumble strips',
            'created_at' => '2021-12-19 21:44:36',
            'updated_at' => '2021-12-19 21:44:36',
        ]);
        \App\Models\Answer::create([
            'id' => 98,
            'question_id' => 25,
            'is_correct?' => 0,
            'answer' => 'Construction zone',
            'created_at' => '2021-12-19 21:44:45',
            'updated_at' => '2021-12-19 21:44:45',
        ]);
        \App\Models\Answer::create([
            'id' => 99,
            'question_id' => 25,
            'is_correct?' => 1,
            'answer' => 'Bump',
            'created_at' => '2021-12-19 21:44:50',
            'updated_at' => '2021-12-19 21:44:50',
        ]);
        \App\Models\Answer::create([
            'id' => 100,
            'question_id' => 25,
            'is_correct?' => 0,
            'answer' => 'Pavement ends',
            'created_at' => '2021-12-19 21:44:59',
            'updated_at' => '2021-12-19 21:44:59',
        ]);
        \App\Models\Answer::create([
            'id' => 101,
            'question_id' => 26,
            'is_correct?' => 0,
            'answer' => '6 months',
            'created_at' => '2021-12-19 21:45:50',
            'updated_at' => '2021-12-19 21:45:50',
        ]);
        \App\Models\Answer::create([
            'id' => 102,
            'question_id' => 26,
            'is_correct?' => 0,
            'answer' => '18 months',
            'created_at' => '2021-12-19 21:45:57',
            'updated_at' => '2021-12-19 21:45:57',
        ]);
        \App\Models\Answer::create([
            'id' => 103,
            'question_id' => 26,
            'is_correct?' => 1,
            'answer' => '2 years',
            'created_at' => '2021-12-19 21:46:03',
            'updated_at' => '2021-12-19 21:46:03',
        ]);
        \App\Models\Answer::create([
            'id' => 104,
            'question_id' => 26,
            'is_correct?' => 0,
            'answer' => '1 year',
            'created_at' => '2021-12-19 21:46:09',
            'updated_at' => '2021-12-19 21:46:09',
        ]);
        \App\Models\Answer::create([
            'id' => 105,
            'question_id' => 27,
            'is_correct?' => 0,
            'answer' => 'Construction ahead',
            'created_at' => '2021-12-19 21:46:40',
            'updated_at' => '2021-12-19 21:46:40',
        ]);
        \App\Models\Answer::create([
            'id' => 106,
            'question_id' => 27,
            'is_correct?' => 0,
            'answer' => 'The traffic lane is ending',
            'created_at' => '2021-12-19 21:46:49',
            'updated_at' => '2021-12-19 21:46:49',
        ]);
        \App\Models\Answer::create([
            'id' => 107,
            'question_id' => 27,
            'is_correct?' => 1,
            'answer' => 'Railway crossing ahead',
            'created_at' => '2021-12-19 21:46:59',
            'updated_at' => '2021-12-19 21:46:59',
        ]);
        \App\Models\Answer::create([
            'id' => 108,
            'question_id' => 27,
            'is_correct?' => 0,
            'answer' => 'Wild animal crossing ahead',
            'created_at' => '2021-12-19 21:47:08',
            'updated_at' => '2021-12-19 21:47:08',
        ]);
        \App\Models\Answer::create([
            'id' => 109,
            'question_id' => 28,
            'is_correct?' => 0,
            'answer' => '$750',
            'created_at' => '2021-12-19 21:47:34',
            'updated_at' => '2021-12-19 21:47:34',
        ]);
        \App\Models\Answer::create([
            'id' => 110,
            'question_id' => 28,
            'is_correct?' => 1,
            'answer' => '$1000',
            'created_at' => '2021-12-19 21:47:43',
            'updated_at' => '2021-12-19 21:47:43',
        ]);
        \App\Models\Answer::create([
            'id' => 111,
            'question_id' => 28,
            'is_correct?' => 0,
            'answer' => '$250',
            'created_at' => '2021-12-19 21:47:50',
            'updated_at' => '2021-12-19 21:47:50',
        ]);
        \App\Models\Answer::create([
            'id' => 112,
            'question_id' => 28,
            'is_correct?' => 0,
            'answer' => '$500',
            'created_at' => '2021-12-19 21:47:55',
            'updated_at' => '2021-12-19 21:47:55',
        ]);
        \App\Models\Answer::create([
            'id' => 113,
            'question_id' => 29,
            'is_correct?' => 0,
            'answer' => 'Remain a minimum of 10 metres from the vehicle ahead',
            'created_at' => '2021-12-19 21:48:26',
            'updated_at' => '2021-12-19 21:48:26',
        ]);
        \App\Models\Answer::create([
            'id' => 114,
            'question_id' => 29,
            'is_correct?' => 1,
            'answer' => 'Allow sufficient space to move into another lane without reversing',
            'created_at' => '2021-12-19 21:48:35',
            'updated_at' => '2021-12-19 21:48:35',
        ]);
        \App\Models\Answer::create([
            'id' => 115,
            'question_id' => 29,
            'is_correct?' => 0,
            'answer' => 'Maintain sufficient space as determined by the 2-second rule',
            'created_at' => '2021-12-19 21:48:44',
            'updated_at' => '2021-12-19 21:48:44',
        ]);
        \App\Models\Answer::create([
            'id' => 116,
            'question_id' => 29,
            'is_correct?' => 0,
            'answer' => 'Keep back approximately 1 metre from the rear bumper of the vehicle ahead',
            'created_at' => '2021-12-19 21:48:59',
            'updated_at' => '2021-12-19 21:48:59',
        ]);
        \App\Models\Answer::create([
            'id' => 117,
            'question_id' => 30,
            'is_correct?' => 1,
            'answer' => 'Slow down gradually and encourage the other vehicle to pass',
            'created_at' => '2021-12-19 21:49:47',
            'updated_at' => '2021-12-19 21:49:47',
        ]);
        \App\Models\Answer::create([
            'id' => 118,
            'question_id' => 30,
            'is_correct?' => 0,
            'answer' => 'Press hard on the brake pedal',
            'created_at' => '2021-12-19 21:49:57',
            'updated_at' => '2021-12-19 21:49:57',
        ]);
        \App\Models\Answer::create([
            'id' => 119,
            'question_id' => 30,
            'is_correct?' => 0,
            'answer' => 'Increase speed to 10 km/h above the posted speed limit',
            'created_at' => '2021-12-19 21:50:07',
            'updated_at' => '2021-12-19 21:50:07',
        ]);
        \App\Models\Answer::create([
            'id' => 120,
            'question_id' => 30,
            'is_correct?' => 0,
            'answer' => 'Activate the four-way flashers',
            'created_at' => '2021-12-19 21:50:17',
            'updated_at' => '2021-12-19 21:50:17',
        ]);
        \App\Models\Answer::create([
            'id' => 121,
            'question_id' => 31,
            'is_correct?' => 0,
            'answer' => 'Accelerate and steer in the opposite direction of the skid',
            'created_at' => '2021-12-19 21:52:08',
            'updated_at' => '2021-12-19 21:52:08',
        ]);
        \App\Models\Answer::create([
            'id' => 122,
            'question_id' => 31,
            'is_correct?' => 0,
            'answer' => 'Brake and counter-steer',
            'created_at' => '2021-12-19 21:52:16',
            'updated_at' => '2021-12-19 21:52:16',
        ]);
        \App\Models\Answer::create([
            'id' => 123,
            'question_id' => 31,
            'is_correct?' => 1,
            'answer' => 'Steer in the direction the driver wants the front of the vehicle to go',
            'created_at' => '2021-12-19 21:52:31',
            'updated_at' => '2021-12-19 21:52:31',
        ]);
        \App\Models\Answer::create([
            'id' => 124,
            'question_id' => 31,
            'is_correct?' => 0,
            'answer' => 'Brake and hold firmly on the steering wheel',
            'created_at' => '2021-12-19 21:52:40',
            'updated_at' => '2021-12-19 21:52:40',
        ]);
        \App\Models\Answer::create([
            'id' => 125,
            'question_id' => 32,
            'is_correct?' => 0,
            'answer' => '50 km/h',
            'created_at' => '2021-12-19 21:53:47',
            'updated_at' => '2021-12-19 21:53:47',
        ]);
        \App\Models\Answer::create([
            'id' => 126,
            'question_id' => 32,
            'is_correct?' => 1,
            'answer' => '40 km/h',
            'created_at' => '2021-12-19 21:53:53',
            'updated_at' => '2021-12-19 21:53:53',
        ]);
        \App\Models\Answer::create([
            'id' => 127,
            'question_id' => 32,
            'is_correct?' => 0,
            'answer' => '70 km/h',
            'created_at' => '2021-12-19 21:53:59',
            'updated_at' => '2021-12-19 21:53:59',
        ]);
        \App\Models\Answer::create([
            'id' => 128,
            'question_id' => 32,
            'is_correct?' => 0,
            'answer' => '60 km/h',
            'created_at' => '2021-12-19 21:54:04',
            'updated_at' => '2021-12-19 21:54:04',
        ]);
        \App\Models\Answer::create([
            'id' => 129,
            'question_id' => 33,
            'is_correct?' => 0,
            'answer' => 'Has the right-of-way over oncoming traffic',
            'created_at' => '2021-12-19 22:07:48',
            'updated_at' => '2021-12-19 22:07:48',
        ]);
        \App\Models\Answer::create([
            'id' => 130,
            'question_id' => 33,
            'is_correct?' => 0,
            'answer' => 'Must stop before the pedestrian crosswalk line, then proceed',
            'created_at' => '2021-12-19 22:07:55',
            'updated_at' => '2021-12-19 22:07:55',
        ]);
        \App\Models\Answer::create([
            'id' => 131,
            'question_id' => 33,
            'is_correct?' => 0,
            'answer' => 'Has the right-of-way over pedestrians',
            'created_at' => '2021-12-19 22:08:04',
            'updated_at' => '2021-12-19 22:08:04',
        ]);
        \App\Models\Answer::create([
            'id' => 132,
            'question_id' => 33,
            'is_correct?' => 1,
            'answer' => 'Must not cross the path of an approaching vehicle unless it is safe',
            'created_at' => '2021-12-19 22:08:12',
            'updated_at' => '2021-12-19 22:10:33',
        ]);
        \App\Models\Answer::create([
            'id' => 133,
            'question_id' => 34,
            'is_correct?' => 1,
            'answer' => 'A place on a highway where the entrance and exit lanes are close together, and vehicles that are slowing to exit the highway must drive between vehicles that are accelerating to enter the highway',
            'created_at' => '2021-12-19 22:09:17',
            'updated_at' => '2021-12-19 22:09:17',
        ]);
        \App\Models\Answer::create([
            'id' => 134,
            'question_id' => 34,
            'is_correct?' => 0,
            'answer' => 'An area on the highway that is used for emergency parking',
            'created_at' => '2021-12-19 22:09:27',
            'updated_at' => '2021-12-19 22:09:27',
        ]);
        \App\Models\Answer::create([
            'id' => 135,
            'question_id' => 34,
            'is_correct?' => 0,
            'answer' => 'A place where the highway has a series of curves that require the driver to slow down',
            'created_at' => '2021-12-19 22:09:50',
            'updated_at' => '2021-12-19 22:09:50',
        ]);
        \App\Models\Answer::create([
            'id' => 136,
            'question_id' => 34,
            'is_correct?' => 0,
            'answer' => 'A limited access area on a highway where a driver can legally back their vehicle when they miss their exit',
            'created_at' => '2021-12-19 22:09:54',
            'updated_at' => '2021-12-19 22:09:54',
        ]);
        \App\Models\Answer::create([
            'id' => 137,
            'question_id' => 10,
            'is_correct?' => 1,
            'answer' => 'Glancing towards the blind spot in the direction the driver intends to move',
            'created_at' => '2021-12-20 00:28:39',
            'updated_at' => '2021-12-20 00:28:39',
        ]);
        \App\Models\Answer::create([
            'id' => 138,
            'question_id' => 10,
            'is_correct?' => 0,
            'answer' => 'Glancing into the left outside mirror',
            'created_at' => '2021-12-20 00:28:51',
            'updated_at' => '2021-12-20 00:28:51',
        ]);
        \App\Models\Answer::create([
            'id' => 139,
            'question_id' => 10,
            'is_correct?' => 0,
            'answer' => 'Glancing into both the inside and outside mirrors',
            'created_at' => '2021-12-20 00:28:59',
            'updated_at' => '2021-12-20 00:28:59',
        ]);
        \App\Models\Answer::create([
            'id' => 140,
            'question_id' => 10,
            'is_correct?' => 0,
            'answer' => 'Glancing into the right outside mirror',
            'created_at' => '2021-12-20 00:29:09',
            'updated_at' => '2021-12-20 00:29:09',
        ]);
        \App\Models\Answer::create([
            'id' => 141,
            'question_id' => 35,
            'is_correct?' => 0,
            'answer' => 'The vehicle has a seating capacity greater than 7',
            'created_at' => '2021-12-20 02:09:58',
            'updated_at' => '2021-12-20 02:09:58',
        ]);
        \App\Models\Answer::create([
            'id' => 142,
            'question_id' => 35,
            'is_correct?' => 0,
            'answer' => 'The vehicle is registered as a farm vehicle',
            'created_at' => '2021-12-20 02:10:07',
            'updated_at' => '2021-12-20 02:10:07',
        ]);
        \App\Models\Answer::create([
            'id' => 143,
            'question_id' => 35,
            'is_correct?' => 0,
            'answer' => 'The vehicle is a rental vehicle',
            'created_at' => '2021-12-20 02:10:15',
            'updated_at' => '2021-12-20 02:10:15',
        ]);
        \App\Models\Answer::create([
            'id' => 144,
            'question_id' => 35,
            'is_correct?' => 1,
            'answer' => 'The vehicle is not mechanically safe',
            'created_at' => '2021-12-20 02:10:23',
            'updated_at' => '2021-12-20 02:10:23',
        ]);
        \App\Models\Answer::create([
            'id' => 145,
            'question_id' => 36,
            'is_correct?' => 0,
            'answer' => 'Only when passing more than one vehicle at a time',
            'created_at' => '2021-12-20 02:11:12',
            'updated_at' => '2021-12-20 02:11:12',
        ]);
        \App\Models\Answer::create([
            'id' => 146,
            'question_id' => 36,
            'is_correct?' => 0,
            'answer' => 'Yes, but not more than 10 km/h over the speed limit',
            'created_at' => '2021-12-20 02:11:22',
            'updated_at' => '2021-12-20 02:11:22',
        ]);
        \App\Models\Answer::create([
            'id' => 147,
            'question_id' => 36,
            'is_correct?' => 0,
            'answer' => 'Yes, on primary highways only',
            'created_at' => '2021-12-20 02:11:29',
            'updated_at' => '2021-12-20 02:11:29',
        ]);
        \App\Models\Answer::create([
            'id' => 148,
            'question_id' => 36,
            'is_correct?' => 1,
            'answer' => 'No, it is never permitted',
            'created_at' => '2021-12-20 02:11:41',
            'updated_at' => '2021-12-20 02:11:41',
        ]);
        \App\Models\Answer::create([
            'id' => 149,
            'question_id' => 37,
            'is_correct?' => 0,
            'answer' => 'Children playing in residential area',
            'created_at' => '2021-12-20 02:13:23',
            'updated_at' => '2021-12-20 02:13:23',
        ]);
        \App\Models\Answer::create([
            'id' => 150,
            'question_id' => 37,
            'is_correct?' => 0,
            'answer' => 'Pedestrian crosswalk ahead',
            'created_at' => '2021-12-20 02:13:32',
            'updated_at' => '2021-12-20 02:13:32',
        ]);
        \App\Models\Answer::create([
            'id' => 151,
            'question_id' => 37,
            'is_correct?' => 1,
            'answer' => 'School area',
            'created_at' => '2021-12-20 02:13:46',
            'updated_at' => '2021-12-20 02:13:46',
        ]);
        \App\Models\Answer::create([
            'id' => 152,
            'question_id' => 37,
            'is_correct?' => 0,
            'answer' => 'Playground zone',
            'created_at' => '2021-12-20 02:13:57',
            'updated_at' => '2021-12-20 02:13:57',
        ]);
        \App\Models\Answer::create([
            'id' => 153,
            'question_id' => 38,
            'is_correct?' => 0,
            'answer' => 'Only during daylight hours',
            'created_at' => '2021-12-20 02:16:28',
            'updated_at' => '2021-12-20 02:16:28',
        ]);
        \App\Models\Answer::create([
            'id' => 154,
            'question_id' => 38,
            'is_correct?' => 0,
            'answer' => 'Only when a flag person is posted nearby',
            'created_at' => '2021-12-20 02:16:36',
            'updated_at' => '2021-12-20 02:16:36',
        ]);
        \App\Models\Answer::create([
            'id' => 155,
            'question_id' => 38,
            'is_correct?' => 1,
            'answer' => 'At all times',
            'created_at' => '2021-12-20 02:16:46',
            'updated_at' => '2021-12-20 02:16:46',
        ]);
        \App\Models\Answer::create([
            'id' => 156,
            'question_id' => 38,
            'is_correct?' => 0,
            'answer' => 'Only when construction workers are present',
            'created_at' => '2021-12-20 02:16:56',
            'updated_at' => '2021-12-20 02:16:56',
        ]);
        \App\Models\Answer::create([
            'id' => 157,
            'question_id' => 39,
            'is_correct?' => 1,
            'answer' => 'Applying an even braking force to the point just before the wheels lock, and easing off slightly if the wheels lock',
            'created_at' => '2021-12-20 02:17:27',
            'updated_at' => '2021-12-20 02:17:27',
        ]);
        \App\Models\Answer::create([
            'id' => 158,
            'question_id' => 39,
            'is_correct?' => 0,
            'answer' => 'Pumping the brake pedal repeatedly until the vehicle comes to a stop',
            'created_at' => '2021-12-20 02:17:40',
            'updated_at' => '2021-12-20 02:17:40',
        ]);
        \App\Models\Answer::create([
            'id' => 159,
            'question_id' => 39,
            'is_correct?' => 0,
            'answer' => 'Releasing pressure on the brake pedal, then reapplying pressure until the wheels lock',
            'created_at' => '2021-12-20 02:17:52',
            'updated_at' => '2021-12-20 02:17:52',
        ]);
        \App\Models\Answer::create([
            'id' => 160,
            'question_id' => 39,
            'is_correct?' => 0,
            'answer' => 'Applying enough force to the brake pedal to lock the wheels and keep them locked',
            'created_at' => '2021-12-20 02:18:02',
            'updated_at' => '2021-12-20 02:18:02',
        ]);
        \App\Models\Answer::create([
            'id' => 161,
            'question_id' => 40,
            'is_correct?' => 0,
            'answer' => 'Continue at a reduced speed and allow sufficient space for the emergency vehicle to pass',
            'created_at' => '2021-12-20 02:18:36',
            'updated_at' => '2021-12-20 02:18:36',
        ]);
        \App\Models\Answer::create([
            'id' => 162,
            'question_id' => 40,
            'is_correct?' => 0,
            'answer' => 'Turn on their four-way hazard lights',
            'created_at' => '2021-12-20 02:18:46',
            'updated_at' => '2021-12-20 02:18:46',
        ]);
        \App\Models\Answer::create([
            'id' => 163,
            'question_id' => 40,
            'is_correct?' => 0,
            'answer' => 'Stop only when the emergency vehicle has difficulty in passing',
            'created_at' => '2021-12-20 02:18:54',
            'updated_at' => '2021-12-20 02:18:54',
        ]);
        \App\Models\Answer::create([
            'id' => 164,
            'question_id' => 40,
            'is_correct?' => 1,
            'answer' => 'Drive as close as possible to the right curb or edge of the road and stop',
            'created_at' => '2021-12-20 02:19:03',
            'updated_at' => '2021-12-20 02:19:03',
        ]);
        \App\Models\Answer::create([
            'id' => 165,
            'question_id' => 41,
            'is_correct?' => 0,
            'answer' => 'Continually increase brake pressure until the wheels lock',
            'created_at' => '2021-12-20 02:19:44',
            'updated_at' => '2021-12-20 02:19:44',
        ]);
        \App\Models\Answer::create([
            'id' => 166,
            'question_id' => 41,
            'is_correct?' => 0,
            'answer' => 'Shift the vehicle into neutral and apply steady pressure to the brake pedal until the vehicle comes to a stop',
            'created_at' => '2021-12-20 02:19:51',
            'updated_at' => '2021-12-20 02:19:51',
        ]);
        \App\Models\Answer::create([
            'id' => 167,
            'question_id' => 41,
            'is_correct?' => 0,
            'answer' => 'Pump the brake pedal smoothly until the vehicle stops',
            'created_at' => '2021-12-20 02:20:01',
            'updated_at' => '2021-12-20 02:20:01',
        ]);
        \App\Models\Answer::create([
            'id' => 168,
            'question_id' => 41,
            'is_correct?' => 1,
            'answer' => 'Apply brake pressure, ease off slightly just before the vehicle stops, then re-apply sufficient pressure to stop',
            'created_at' => '2021-12-20 02:20:11',
            'updated_at' => '2021-12-20 02:20:11',
        ]);
        \App\Models\Answer::create([
            'id' => 169,
            'question_id' => 42,
            'is_correct?' => 0,
            'answer' => 'Only while carrying passengers',
            'created_at' => '2021-12-20 02:20:53',
            'updated_at' => '2021-12-20 02:20:53',
        ]);
        \App\Models\Answer::create([
            'id' => 170,
            'question_id' => 42,
            'is_correct?' => 1,
            'answer' => 'Properly at all times',
            'created_at' => '2021-12-20 02:21:03',
            'updated_at' => '2021-12-20 02:21:03',
        ]);
        \App\Models\Answer::create([
            'id' => 171,
            'question_id' => 42,
            'is_correct?' => 0,
            'answer' => 'Only when driving at highway speeds',
            'created_at' => '2021-12-20 02:21:13',
            'updated_at' => '2021-12-20 02:21:13',
        ]);
        \App\Models\Answer::create([
            'id' => 172,
            'question_id' => 42,
            'is_correct?' => 0,
            'answer' => 'Only when driving in the city',
            'created_at' => '2021-12-20 02:21:22',
            'updated_at' => '2021-12-20 02:21:22',
        ]);
        \App\Models\Answer::create([
            'id' => 173,
            'question_id' => 43,
            'is_correct?' => 0,
            'answer' => 'Heavy trucks only',
            'created_at' => '2021-12-20 02:22:17',
            'updated_at' => '2021-12-20 02:22:17',
        ]);
        \App\Models\Answer::create([
            'id' => 174,
            'question_id' => 43,
            'is_correct?' => 1,
            'answer' => 'Do not pass',
            'created_at' => '2021-12-20 02:22:23',
            'updated_at' => '2021-12-20 02:22:23',
        ]);
        \App\Models\Answer::create([
            'id' => 175,
            'question_id' => 43,
            'is_correct?' => 0,
            'answer' => 'No vehicles allowed',
            'created_at' => '2021-12-20 02:22:31',
            'updated_at' => '2021-12-20 02:22:31',
        ]);
        \App\Models\Answer::create([
            'id' => 176,
            'question_id' => 43,
            'is_correct?' => 0,
            'answer' => 'Do not enter',
            'created_at' => '2021-12-20 02:22:38',
            'updated_at' => '2021-12-20 02:22:38',
        ]);
        \App\Models\Answer::create([
            'id' => 177,
            'question_id' => 44,
            'is_correct?' => 0,
            'answer' => 'Must yield to traffic on the right',
            'created_at' => '2021-12-20 02:23:41',
            'updated_at' => '2021-12-20 02:23:41',
        ]);
        \App\Models\Answer::create([
            'id' => 178,
            'question_id' => 44,
            'is_correct?' => 1,
            'answer' => 'Must yield to vehicles in the traffic circle',
            'created_at' => '2021-12-20 02:23:49',
            'updated_at' => '2021-12-20 02:23:49',
        ]);
        \App\Models\Answer::create([
            'id' => 179,
            'question_id' => 44,
            'is_correct?' => 0,
            'answer' => 'Has the right-of-way',
            'created_at' => '2021-12-20 02:23:57',
            'updated_at' => '2021-12-20 02:23:57',
        ]);
        \App\Models\Answer::create([
            'id' => 180,
            'question_id' => 44,
            'is_correct?' => 0,
            'answer' => 'Must use the courtesy rule and yield to the vehicle that arrived first',
            'created_at' => '2021-12-20 02:24:05',
            'updated_at' => '2021-12-20 02:24:05',
        ]);
        \App\Models\Answer::create([
            'id' => 181,
            'question_id' => 45,
            'is_correct?' => 1,
            'answer' => 'A lane where vehicles reduce speed when exiting a highway',
            'created_at' => '2021-12-20 02:24:47',
            'updated_at' => '2021-12-20 02:24:47',
        ]);
        \App\Models\Answer::create([
            'id' => 182,
            'question_id' => 45,
            'is_correct?' => 0,
            'answer' => 'The right lane of a four-lane highway for use by slower moving vehicles',
            'created_at' => '2021-12-20 02:24:57',
            'updated_at' => '2021-12-20 02:24:57',
        ]);
        \App\Models\Answer::create([
            'id' => 183,
            'question_id' => 45,
            'is_correct?' => 0,
            'answer' => 'The lane immediately to the right of a solid yellow line on a highway',
            'created_at' => '2021-12-20 02:25:06',
            'updated_at' => '2021-12-20 02:25:06',
        ]);
        \App\Models\Answer::create([
            'id' => 184,
            'question_id' => 45,
            'is_correct?' => 0,
            'answer' => 'A lane on hills for use by slower moving vehicles',
            'created_at' => '2021-12-20 02:25:20',
            'updated_at' => '2021-12-20 02:25:20',
        ]);
        \App\Models\Answer::create([
            'id' => 185,
            'question_id' => 46,
            'is_correct?' => 0,
            'answer' => 'The lane immediately to the right of centre',
            'created_at' => '2021-12-20 02:25:56',
            'updated_at' => '2021-12-20 02:25:56',
        ]);
        \App\Models\Answer::create([
            'id' => 186,
            'question_id' => 46,
            'is_correct?' => 1,
            'answer' => 'The lane nearest the curb on the left side of the one-way road',
            'created_at' => '2021-12-20 02:26:06',
            'updated_at' => '2021-12-20 02:26:06',
        ]);
        \App\Models\Answer::create([
            'id' => 187,
            'question_id' => 46,
            'is_correct?' => 0,
            'answer' => 'The centre lane of the one-way road',
            'created_at' => '2021-12-20 02:26:14',
            'updated_at' => '2021-12-20 02:26:14',
        ]);
        \App\Models\Answer::create([
            'id' => 188,
            'question_id' => 46,
            'is_correct?' => 0,
            'answer' => 'The right lane of the one-way road',
            'created_at' => '2021-12-20 02:26:22',
            'updated_at' => '2021-12-20 02:26:22',
        ]);
        \App\Models\Answer::create([
            'id' => 189,
            'question_id' => 47,
            'is_correct?' => 1,
            'answer' => 'The vehicle on the left must yield the right-of-way',
            'created_at' => '2021-12-20 02:26:57',
            'updated_at' => '2021-12-20 02:26:57',
        ]);
        \App\Models\Answer::create([
            'id' => 190,
            'question_id' => 47,
            'is_correct?' => 0,
            'answer' => 'The vehicle on the left has the right-of-way',
            'created_at' => '2021-12-20 02:27:06',
            'updated_at' => '2021-12-20 02:27:06',
        ]);
        \App\Models\Answer::create([
            'id' => 191,
            'question_id' => 47,
            'is_correct?' => 0,
            'answer' => 'The vehicle going straight through always has the right-of-way',
            'created_at' => '2021-12-20 02:27:14',
            'updated_at' => '2021-12-20 02:27:14',
        ]);
        \App\Models\Answer::create([
            'id' => 192,
            'question_id' => 47,
            'is_correct?' => 0,
            'answer' => 'Both vehicles must stop',
            'created_at' => '2021-12-20 02:27:21',
            'updated_at' => '2021-12-20 02:27:21',
        ]);
        \App\Models\Answer::create([
            'id' => 193,
            'question_id' => 48,
            'is_correct?' => 0,
            'answer' => 'The lane to the right of centre',
            'created_at' => '2021-12-20 02:28:05',
            'updated_at' => '2021-12-20 02:28:05',
        ]);
        \App\Models\Answer::create([
            'id' => 194,
            'question_id' => 48,
            'is_correct?' => 1,
            'answer' => 'The left lane nearest the left curb',
            'created_at' => '2021-12-20 02:28:11',
            'updated_at' => '2021-12-20 02:28:11',
        ]);
        \App\Models\Answer::create([
            'id' => 195,
            'question_id' => 48,
            'is_correct?' => 0,
            'answer' => 'The lane closes to the right curb',
            'created_at' => '2021-12-20 02:28:17',
            'updated_at' => '2021-12-20 02:28:17',
        ]);
        \App\Models\Answer::create([
            'id' => 196,
            'question_id' => 48,
            'is_correct?' => 0,
            'answer' => 'The centre lane',
            'created_at' => '2021-12-20 02:28:23',
            'updated_at' => '2021-12-20 02:28:23',
        ]);
        \App\Models\Answer::create([
            'id' => 197,
            'question_id' => 49,
            'is_correct?' => 0,
            'answer' => 'Keep both hands on the steering wheel and constantly use the inside rear-view mirror for guidance',
            'created_at' => '2021-12-20 02:29:09',
            'updated_at' => '2021-12-20 02:29:09',
        ]);
        \App\Models\Answer::create([
            'id' => 198,
            'question_id' => 49,
            'is_correct?' => 0,
            'answer' => 'Place the right hand at the top of the steering wheel, look over the left shoulder and use the outside left rear-view mirror',
            'created_at' => '2021-12-20 02:29:16',
            'updated_at' => '2021-12-20 02:29:16',
        ]);
        \App\Models\Answer::create([
            'id' => 199,
            'question_id' => 49,
            'is_correct?' => 1,
            'answer' => 'Place the left hand at the top of the steering wheel and look over the right shoulder through the rear window',
            'created_at' => '2021-12-20 02:29:23',
            'updated_at' => '2021-12-20 02:29:23',
        ]);
        \App\Models\Answer::create([
            'id' => 200,
            'question_id' => 49,
            'is_correct?' => 0,
            'answer' => 'Place the left hand at the bottom of the steering wheel and use both outside mirrors',
            'created_at' => '2021-12-20 02:29:31',
            'updated_at' => '2021-12-20 02:29:31',
        ]);
        \App\Models\Answer::create([
            'id' => 201,
            'question_id' => 50,
            'is_correct?' => 1,
            'answer' => 'A lane with broken line markings',
            'created_at' => '2021-12-20 02:30:02',
            'updated_at' => '2021-12-20 02:30:02',
        ]);
        \App\Models\Answer::create([
            'id' => 202,
            'question_id' => 50,
            'is_correct?' => 0,
            'answer' => 'A lane on hills, designated for faster moving vehicles',
            'created_at' => '2021-12-20 02:30:26',
            'updated_at' => '2021-12-20 02:30:26',
        ]);
        \App\Models\Answer::create([
            'id' => 203,
            'question_id' => 50,
            'is_correct?' => 0,
            'answer' => 'The left lane of a four-lane highway, for use when passing slow moving vehicles',
            'created_at' => '2021-12-20 02:30:38',
            'updated_at' => '2021-12-20 02:30:38',
        ]);
        \App\Models\Answer::create([
            'id' => 204,
            'question_id' => 50,
            'is_correct?' => 0,
            'answer' => 'A lane in a merge area for use by vehicles entering the highway',
            'created_at' => '2021-12-20 02:30:46',
            'updated_at' => '2021-12-20 02:30:46',
        ]);
        \App\Models\Answer::create([
            'id' => 205,
            'question_id' => 51,
            'is_correct?' => 1,
            'answer' => 'Lane ends, loss of right lane',
            'created_at' => '2021-12-20 02:31:32',
            'updated_at' => '2021-12-20 02:31:32',
        ]);
        \App\Models\Answer::create([
            'id' => 206,
            'question_id' => 51,
            'is_correct?' => 0,
            'answer' => 'Added lane (free flow)',
            'created_at' => '2021-12-20 02:31:40',
            'updated_at' => '2021-12-20 02:31:40',
        ]);
        \App\Models\Answer::create([
            'id' => 207,
            'question_id' => 51,
            'is_correct?' => 0,
            'answer' => 'Curve right',
            'created_at' => '2021-12-20 02:31:50',
            'updated_at' => '2021-12-20 02:31:50',
        ]);
        \App\Models\Answer::create([
            'id' => 208,
            'question_id' => 51,
            'is_correct?' => 0,
            'answer' => 'Dual turn lane ahead',
            'created_at' => '2021-12-20 02:31:58',
            'updated_at' => '2021-12-20 02:31:58',
        ]);
        \App\Models\Answer::create([
            'id' => 209,
            'question_id' => 52,
            'is_correct?' => 0,
            'answer' => '9:00 A.M. and 5:00 P.M.',
            'created_at' => '2021-12-20 02:32:27',
            'updated_at' => '2021-12-20 02:32:27',
        ]);
        \App\Models\Answer::create([
            'id' => 210,
            'question_id' => 52,
            'is_correct?' => 1,
            'answer' => 'Midnight and 5:00 A.M.',
            'created_at' => '2021-12-20 02:32:33',
            'updated_at' => '2021-12-20 02:32:33',
        ]);
        \App\Models\Answer::create([
            'id' => 211,
            'question_id' => 52,
            'is_correct?' => 0,
            'answer' => '10:00 P.M. and 6:00 A.M.',
            'created_at' => '2021-12-20 02:32:40',
            'updated_at' => '2021-12-20 02:32:40',
        ]);
        \App\Models\Answer::create([
            'id' => 212,
            'question_id' => 52,
            'is_correct?' => 0,
            'answer' => 'Midnight and 7:00 A.M.',
            'created_at' => '2021-12-20 02:32:54',
            'updated_at' => '2021-12-20 02:32:54',
        ]);
        \App\Models\Answer::create([
            'id' => 213,
            'question_id' => 53,
            'is_correct?' => 0,
            'answer' => 'The traffic light will turn green',
            'created_at' => '2021-12-20 02:33:33',
            'updated_at' => '2021-12-20 02:33:33',
        ]);
        \App\Models\Answer::create([
            'id' => 214,
            'question_id' => 53,
            'is_correct?' => 0,
            'answer' => 'Stop until the light stops flashing',
            'created_at' => '2021-12-20 02:33:41',
            'updated_at' => '2021-12-20 02:33:41',
        ]);
        \App\Models\Answer::create([
            'id' => 215,
            'question_id' => 53,
            'is_correct?' => 1,
            'answer' => 'The traffic light will turn red',
            'created_at' => '2021-12-20 02:33:48',
            'updated_at' => '2021-12-20 02:33:48',
        ]);
        \App\Models\Answer::create([
            'id' => 216,
            'question_id' => 53,
            'is_correct?' => 0,
            'answer' => 'Proceed with caution',
            'created_at' => '2021-12-20 02:33:54',
            'updated_at' => '2021-12-20 02:33:54',
        ]);
        \App\Models\Answer::create([
            'id' => 217,
            'question_id' => 54,
            'is_correct?' => 0,
            'answer' => '8:30 A.M. to 1 hour after sunset',
            'created_at' => '2021-12-20 02:34:32',
            'updated_at' => '2021-12-20 02:34:32',
        ]);
        \App\Models\Answer::create([
            'id' => 218,
            'question_id' => 54,
            'is_correct?' => 1,
            'answer' => '8:00 A.M. to 9:30 A.M., 11:30 A.M. to 1:30 P.M. and 3:00 P.M. to 4:30 P.M.',
            'created_at' => '2021-12-20 02:34:39',
            'updated_at' => '2021-12-20 02:35:26',
        ]);
        \App\Models\Answer::create([
            'id' => 219,
            'question_id' => 54,
            'is_correct?' => 0,
            'answer' => '8:30 A.M. to 9:30 A.M., 12:00 P.M. to 1:00 P.M. and 3:30 P.M. to 4:00 P.M.',
            'created_at' => '2021-12-20 02:35:05',
            'updated_at' => '2021-12-20 02:35:05',
        ]);
        \App\Models\Answer::create([
            'id' => 220,
            'question_id' => 54,
            'is_correct?' => 0,
            'answer' => '8:00 A.M. to 4:30 P.M.',
            'created_at' => '2021-12-20 02:35:14',
            'updated_at' => '2021-12-20 02:35:14',
        ]);
        \App\Models\Answer::create([
            'id' => 221,
            'question_id' => 55,
            'is_correct?' => 0,
            'answer' => 'Playground zone',
            'created_at' => '2021-12-20 02:36:12',
            'updated_at' => '2021-12-20 02:36:12',
        ]);
        \App\Models\Answer::create([
            'id' => 222,
            'question_id' => 55,
            'is_correct?' => 1,
            'answer' => 'Pedestrian crosswalk',
            'created_at' => '2021-12-20 02:36:19',
            'updated_at' => '2021-12-20 02:36:19',
        ]);
        \App\Models\Answer::create([
            'id' => 223,
            'question_id' => 55,
            'is_correct?' => 0,
            'answer' => 'Designated school bus stop',
            'created_at' => '2021-12-20 02:36:27',
            'updated_at' => '2021-12-20 02:36:27',
        ]);
        \App\Models\Answer::create([
            'id' => 224,
            'question_id' => 55,
            'is_correct?' => 0,
            'answer' => 'School zone',
            'created_at' => '2021-12-20 02:36:36',
            'updated_at' => '2021-12-20 02:36:36',
        ]);
        \App\Models\Answer::create([
            'id' => 225,
            'question_id' => 56,
            'is_correct?' => 0,
            'answer' => 'Stop to allow the other vehicle in',
            'created_at' => '2021-12-20 02:37:10',
            'updated_at' => '2021-12-20 02:37:10',
        ]);
        \App\Models\Answer::create([
            'id' => 226,
            'question_id' => 56,
            'is_correct?' => 0,
            'answer' => 'Accelerate to close any gap in the traffic flow',
            'created_at' => '2021-12-20 02:37:17',
            'updated_at' => '2021-12-20 02:37:17',
        ]);
        \App\Models\Answer::create([
            'id' => 227,
            'question_id' => 56,
            'is_correct?' => 1,
            'answer' => 'Move into the left lane if it is safe to do so, or be prepared to adjust speed',
            'created_at' => '2021-12-20 02:37:25',
            'updated_at' => '2021-12-20 02:37:25',
        ]);
        \App\Models\Answer::create([
            'id' => 228,
            'question_id' => 56,
            'is_correct?' => 0,
            'answer' => 'Insist that the other vehicle yield the right-of-way',
            'created_at' => '2021-12-20 02:37:32',
            'updated_at' => '2021-12-20 02:37:32',
        ]);
        \App\Models\Answer::create([
            'id' => 229,
            'question_id' => 57,
            'is_correct?' => 0,
            'answer' => 'Parallel to the curb',
            'created_at' => '2021-12-20 02:38:00',
            'updated_at' => '2021-12-20 02:38:00',
        ]);
        \App\Models\Answer::create([
            'id' => 230,
            'question_id' => 57,
            'is_correct?' => 1,
            'answer' => 'To the left',
            'created_at' => '2021-12-20 02:38:10',
            'updated_at' => '2021-12-20 02:38:10',
        ]);
        \App\Models\Answer::create([
            'id' => 231,
            'question_id' => 57,
            'is_correct?' => 0,
            'answer' => 'To the right',
            'created_at' => '2021-12-20 02:38:18',
            'updated_at' => '2021-12-20 02:38:18',
        ]);
        \App\Models\Answer::create([
            'id' => 232,
            'question_id' => 57,
            'is_correct?' => 0,
            'answer' => 'Straight ahead',
            'created_at' => '2021-12-20 02:38:25',
            'updated_at' => '2021-12-20 02:38:25',
        ]);
        \App\Models\Answer::create([
            'id' => 233,
            'question_id' => 58,
            'is_correct?' => 0,
            'answer' => 'Sound the horn to alert any pedestrians and pass at a slow rate of speed',
            'created_at' => '2021-12-20 02:38:58',
            'updated_at' => '2021-12-20 02:38:58',
        ]);
        \App\Models\Answer::create([
            'id' => 234,
            'question_id' => 58,
            'is_correct?' => 1,
            'answer' => 'Stop behind the bus and wait until the alternating red lights stop flashing',
            'created_at' => '2021-12-20 02:39:07',
            'updated_at' => '2021-12-20 02:39:07',
        ]);
        \App\Models\Answer::create([
            'id' => 235,
            'question_id' => 58,
            'is_correct?' => 0,
            'answer' => 'Move to the left lane, reduce speed to 30 km/h and pass cautiously',
            'created_at' => '2021-12-20 02:39:15',
            'updated_at' => '2021-12-20 02:39:15',
        ]);
        \App\Models\Answer::create([
            'id' => 236,
            'question_id' => 58,
            'is_correct?' => 0,
            'answer' => 'Stop behind the bus, look carefully for pedestrians and, if clear, drive past the bus slowly',
            'created_at' => '2021-12-20 02:39:21',
            'updated_at' => '2021-12-20 02:39:21',
        ]);
        \App\Models\Answer::create([
            'id' => 237,
            'question_id' => 59,
            'is_correct?' => 0,
            'answer' => '25 to 30 seconds ahead',
            'created_at' => '2021-12-20 02:39:55',
            'updated_at' => '2021-12-20 02:39:55',
        ]);
        \App\Models\Answer::create([
            'id' => 238,
            'question_id' => 59,
            'is_correct?' => 1,
            'answer' => '12 to 15 seconds ahead',
            'created_at' => '2021-12-20 02:40:04',
            'updated_at' => '2021-12-20 02:40:04',
        ]);
        \App\Models\Answer::create([
            'id' => 239,
            'question_id' => 59,
            'is_correct?' => 0,
            'answer' => '20 to 30 seconds ahead',
            'created_at' => '2021-12-20 02:40:16',
            'updated_at' => '2021-12-20 02:40:16',
        ]);
        \App\Models\Answer::create([
            'id' => 240,
            'question_id' => 59,
            'is_correct?' => 0,
            'answer' => '1 to 6 seconds ahead',
            'created_at' => '2021-12-20 02:40:24',
            'updated_at' => '2021-12-20 02:40:24',
        ]);
        \App\Models\Answer::create([
            'id' => 241,
            'question_id' => 60,
            'is_correct?' => 1,
            'answer' => 'T intersection',
            'created_at' => '2021-12-20 02:41:32',
            'updated_at' => '2021-12-20 02:41:32',
        ]);
        \App\Models\Answer::create([
            'id' => 242,
            'question_id' => 60,
            'is_correct?' => 0,
            'answer' => 'Traffic lane ends',
            'created_at' => '2021-12-20 02:41:42',
            'updated_at' => '2021-12-20 02:41:42',
        ]);
        \App\Models\Answer::create([
            'id' => 243,
            'question_id' => 60,
            'is_correct?' => 0,
            'answer' => 'Concealed intersection',
            'created_at' => '2021-12-20 02:41:50',
            'updated_at' => '2021-12-20 02:41:50',
        ]);
        \App\Models\Answer::create([
            'id' => 244,
            'question_id' => 60,
            'is_correct?' => 0,
            'answer' => 'Trucks entering highway ahead',
            'created_at' => '2021-12-20 02:41:56',
            'updated_at' => '2021-12-20 02:41:56',
        ]);
        \App\Models\Answer::create([
            'id' => 245,
            'question_id' => 61,
            'is_correct?' => 1,
            'answer' => 'Winding road ahead',
            'created_at' => '2021-12-20 02:42:42',
            'updated_at' => '2021-12-20 02:42:42',
        ]);
        \App\Models\Answer::create([
            'id' => 246,
            'question_id' => 61,
            'is_correct?' => 0,
            'answer' => 'Weave zone ahead',
            'created_at' => '2021-12-20 02:42:49',
            'updated_at' => '2021-12-20 02:42:49',
        ]);
        \App\Models\Answer::create([
            'id' => 247,
            'question_id' => 61,
            'is_correct?' => 0,
            'answer' => 'Slippery when wet',
            'created_at' => '2021-12-20 02:42:56',
            'updated_at' => '2021-12-20 02:42:56',
        ]);
        \App\Models\Answer::create([
            'id' => 248,
            'question_id' => 61,
            'is_correct?' => 0,
            'answer' => 'Lane changing permitted',
            'created_at' => '2021-12-20 02:43:03',
            'updated_at' => '2021-12-20 02:43:03',
        ]);
        \App\Models\Answer::create([
            'id' => 249,
            'question_id' => 62,
            'is_correct?' => 0,
            'answer' => 'Turn on the right signal',
            'created_at' => '2021-12-20 02:43:39',
            'updated_at' => '2021-12-20 02:43:39',
        ]);
        \App\Models\Answer::create([
            'id' => 250,
            'question_id' => 62,
            'is_correct?' => 1,
            'answer' => 'Shoulder check to the left',
            'created_at' => '2021-12-20 02:43:47',
            'updated_at' => '2021-12-20 02:43:47',
        ]);
        \App\Models\Answer::create([
            'id' => 251,
            'question_id' => 62,
            'is_correct?' => 0,
            'answer' => 'Shoulder check to the right',
            'created_at' => '2021-12-20 02:43:57',
            'updated_at' => '2021-12-20 02:43:57',
        ]);
        \App\Models\Answer::create([
            'id' => 252,
            'question_id' => 62,
            'is_correct?' => 0,
            'answer' => 'Use an arm signal straight out and up',
            'created_at' => '2021-12-20 02:44:03',
            'updated_at' => '2021-12-20 02:44:03',
        ]);
        \App\Models\Answer::create([
            'id' => 253,
            'question_id' => 63,
            'is_correct?' => 0,
            'answer' => 'Exceeding the speed limit is permitted',
            'created_at' => '2021-12-20 02:44:32',
            'updated_at' => '2021-12-20 02:44:32',
        ]);
        \App\Models\Answer::create([
            'id' => 254,
            'question_id' => 63,
            'is_correct?' => 0,
            'answer' => 'Flash the headlights to warn oncoming vehicles',
            'created_at' => '2021-12-20 02:44:41',
            'updated_at' => '2021-12-20 02:44:41',
        ]);
        \App\Models\Answer::create([
            'id' => 255,
            'question_id' => 63,
            'is_correct?' => 1,
            'answer' => 'Stay to the right portion of the lane',
            'created_at' => '2021-12-20 02:44:48',
            'updated_at' => '2021-12-20 02:44:48',
        ]);
        \App\Models\Answer::create([
            'id' => 256,
            'question_id' => 63,
            'is_correct?' => 0,
            'answer' => 'Keep close to the centre line to prevent others from passing',
            'created_at' => '2021-12-20 02:45:01',
            'updated_at' => '2021-12-20 02:45:01',
        ]);
        \App\Models\Answer::create([
            'id' => 257,
            'question_id' => 64,
            'is_correct?' => 1,
            'answer' => 'From 8:30 A.M. to 1 hour after sunset',
            'created_at' => '2021-12-20 02:45:43',
            'updated_at' => '2021-12-20 02:45:43',
        ]);
        \App\Models\Answer::create([
            'id' => 258,
            'question_id' => 64,
            'is_correct?' => 0,
            'answer' => 'From 8:00 A.M. to 8:00 P.M.',
            'created_at' => '2021-12-20 02:45:53',
            'updated_at' => '2021-12-20 02:45:53',
        ]);
        \App\Models\Answer::create([
            'id' => 259,
            'question_id' => 64,
            'is_correct?' => 0,
            'answer' => 'During daylight hours and until 11:00 P.M.',
            'created_at' => '2021-12-20 02:45:59',
            'updated_at' => '2021-12-20 02:45:59',
        ]);
        \App\Models\Answer::create([
            'id' => 260,
            'question_id' => 64,
            'is_correct?' => 0,
            'answer' => 'Only when school lets out at noon and after 4:30 P.M.',
            'created_at' => '2021-12-20 02:46:07',
            'updated_at' => '2021-12-20 02:46:07',
        ]);
        \App\Models\Answer::create([
            'id' => 261,
            'question_id' => 65,
            'is_correct?' => 0,
            'answer' => '“T” intersection',
            'created_at' => '2021-12-20 02:47:10',
            'updated_at' => '2021-12-20 02:47:10',
        ]);
        \App\Models\Answer::create([
            'id' => 262,
            'question_id' => 65,
            'is_correct?' => 0,
            'answer' => 'Winding road ahead',
            'created_at' => '2021-12-20 02:47:18',
            'updated_at' => '2021-12-20 02:47:18',
        ]);
        \App\Models\Answer::create([
            'id' => 263,
            'question_id' => 65,
            'is_correct?' => 1,
            'answer' => 'Merging traffic',
            'created_at' => '2021-12-20 02:47:24',
            'updated_at' => '2021-12-20 02:47:24',
        ]);
        \App\Models\Answer::create([
            'id' => 264,
            'question_id' => 65,
            'is_correct?' => 0,
            'answer' => 'Road narrows to the right',
            'created_at' => '2021-12-20 02:47:31',
            'updated_at' => '2021-12-20 02:47:31',
        ]);
        \App\Models\Answer::create([
            'id' => 265,
            'question_id' => 66,
            'is_correct?' => 0,
            'answer' => 'Bad brakes',
            'created_at' => '2021-12-20 02:48:17',
            'updated_at' => '2021-12-20 02:48:17',
        ]);
        \App\Models\Answer::create([
            'id' => 266,
            'question_id' => 66,
            'is_correct?' => 0,
            'answer' => 'Icy roads',
            'created_at' => '2021-12-20 02:48:35',
            'updated_at' => '2021-12-20 02:48:35',
        ]);
        \App\Models\Answer::create([
            'id' => 267,
            'question_id' => 66,
            'is_correct?' => 0,
            'answer' => 'Bad tires',
            'created_at' => '2021-12-20 02:48:45',
            'updated_at' => '2021-12-20 02:48:45',
        ]);
        \App\Models\Answer::create([
            'id' => 268,
            'question_id' => 66,
            'is_correct?' => 1,
            'answer' => 'Driver error',
            'created_at' => '2021-12-20 02:48:56',
            'updated_at' => '2021-12-20 02:48:56',
        ]);
        \App\Models\Answer::create([
            'id' => 269,
            'question_id' => 67,
            'is_correct?' => 0,
            'answer' => '10 metres',
            'created_at' => '2021-12-20 02:49:23',
            'updated_at' => '2021-12-20 02:49:23',
        ]);
        \App\Models\Answer::create([
            'id' => 270,
            'question_id' => 67,
            'is_correct?' => 1,
            'answer' => '5 metres',
            'created_at' => '2021-12-20 02:49:30',
            'updated_at' => '2021-12-20 02:49:30',
        ]);
        \App\Models\Answer::create([
            'id' => 271,
            'question_id' => 67,
            'is_correct?' => 0,
            'answer' => '3 metres',
            'created_at' => '2021-12-20 02:49:37',
            'updated_at' => '2021-12-20 02:49:37',
        ]);
        \App\Models\Answer::create([
            'id' => 272,
            'question_id' => 67,
            'is_correct?' => 0,
            'answer' => '1.5 metres',
            'created_at' => '2021-12-20 02:49:43',
            'updated_at' => '2021-12-20 02:49:43',
        ]);
        \App\Models\Answer::create([
            'id' => 273,
            'question_id' => 68,
            'is_correct?' => 0,
            'answer' => 'When all other parking spaces are filled',
            'created_at' => '2021-12-20 02:50:14',
            'updated_at' => '2021-12-20 02:50:14',
        ]);
        \App\Models\Answer::create([
            'id' => 274,
            'question_id' => 68,
            'is_correct?' => 0,
            'answer' => 'While the driver is waiting in the vehicle',
            'created_at' => '2021-12-20 02:50:20',
            'updated_at' => '2021-12-20 02:50:20',
        ]);
        \App\Models\Answer::create([
            'id' => 275,
            'question_id' => 68,
            'is_correct?' => 0,
            'answer' => 'When a driver stops for less than 5 minutes',
            'created_at' => '2021-12-20 02:50:27',
            'updated_at' => '2021-12-20 02:50:27',
        ]);
        \App\Models\Answer::create([
            'id' => 276,
            'question_id' => 68,
            'is_correct?' => 1,
            'answer' => 'When the vehicle has a proper identifying placard or licence plate',
            'created_at' => '2021-12-20 02:50:37',
            'updated_at' => '2021-12-20 02:50:37',
        ]);
        \App\Models\Answer::create([
            'id' => 277,
            'question_id' => 69,
            'is_correct?' => 0,
            'answer' => '60 metres',
            'created_at' => '2021-12-20 02:51:58',
            'updated_at' => '2021-12-20 02:51:58',
        ]);
        \App\Models\Answer::create([
            'id' => 278,
            'question_id' => 69,
            'is_correct?' => 0,
            'answer' => '300 metres',
            'created_at' => '2021-12-20 02:52:06',
            'updated_at' => '2021-12-20 02:52:06',
        ]);
        \App\Models\Answer::create([
            'id' => 279,
            'question_id' => 69,
            'is_correct?' => 1,
            'answer' => '150 metres',
            'created_at' => '2021-12-20 02:52:13',
            'updated_at' => '2021-12-20 02:52:13',
        ]);
        \App\Models\Answer::create([
            'id' => 280,
            'question_id' => 69,
            'is_correct?' => 0,
            'answer' => '100 metres',
            'created_at' => '2021-12-20 02:52:18',
            'updated_at' => '2021-12-20 02:52:18',
        ]);
        \App\Models\Answer::create([
            'id' => 281,
            'question_id' => 70,
            'is_correct?' => 0,
            'answer' => 'Only when turning from a one-way road onto a one-way road',
            'created_at' => '2021-12-20 02:52:48',
            'updated_at' => '2021-12-20 02:52:48',
        ]);
        \App\Models\Answer::create([
            'id' => 282,
            'question_id' => 70,
            'is_correct?' => 1,
            'answer' => 'Only when indicated by pavement markings or traffic control signs',
            'created_at' => '2021-12-20 02:52:56',
            'updated_at' => '2021-12-20 02:52:56',
        ]);
        \App\Models\Answer::create([
            'id' => 283,
            'question_id' => 70,
            'is_correct?' => 0,
            'answer' => 'Any time there are at least 2 lanes on the road being entered',
            'created_at' => '2021-12-20 02:53:08',
            'updated_at' => '2021-12-20 02:53:08',
        ]);
        \App\Models\Answer::create([
            'id' => 284,
            'question_id' => 70,
            'is_correct?' => 0,
            'answer' => 'Only when the road has 6 or more lanes',
            'created_at' => '2021-12-20 02:53:20',
            'updated_at' => '2021-12-20 02:53:20',
        ]);
        \App\Models\Answer::create([
            'id' => 285,
            'question_id' => 71,
            'is_correct?' => 0,
            'answer' => 'Through lane only',
            'created_at' => '2021-12-20 02:54:30',
            'updated_at' => '2021-12-20 02:54:30',
        ]);
        \App\Models\Answer::create([
            'id' => 286,
            'question_id' => 71,
            'is_correct?' => 0,
            'answer' => 'Passing permitted',
            'created_at' => '2021-12-20 02:54:38',
            'updated_at' => '2021-12-20 02:54:38',
        ]);
        \App\Models\Answer::create([
            'id' => 287,
            'question_id' => 71,
            'is_correct?' => 0,
            'answer' => 'No turns permitted',
            'created_at' => '2021-12-20 02:54:45',
            'updated_at' => '2021-12-20 02:54:45',
        ]);
        \App\Models\Answer::create([
            'id' => 288,
            'question_id' => 71,
            'is_correct?' => 1,
            'answer' => 'Two-way traffic',
            'created_at' => '2021-12-20 02:54:52',
            'updated_at' => '2021-12-20 02:54:52',
        ]);
        \App\Models\Answer::create([
            'id' => 289,
            'question_id' => 72,
            'is_correct?' => 1,
            'answer' => '15 demerits',
            'created_at' => '2021-12-20 02:55:39',
            'updated_at' => '2021-12-20 02:55:39',
        ]);
        \App\Models\Answer::create([
            'id' => 290,
            'question_id' => 72,
            'is_correct?' => 0,
            'answer' => '12 demerits',
            'created_at' => '2021-12-20 02:55:48',
            'updated_at' => '2021-12-20 02:55:48',
        ]);
        \App\Models\Answer::create([
            'id' => 291,
            'question_id' => 72,
            'is_correct?' => 0,
            'answer' => '8 demerits',
            'created_at' => '2021-12-20 02:55:56',
            'updated_at' => '2021-12-20 02:55:56',
        ]);
        \App\Models\Answer::create([
            'id' => 292,
            'question_id' => 72,
            'is_correct?' => 0,
            'answer' => '7 demerits',
            'created_at' => '2021-12-20 02:56:10',
            'updated_at' => '2021-12-20 02:56:10',
        ]);
        \App\Models\Answer::create([
            'id' => 293,
            'question_id' => 73,
            'is_correct?' => 0,
            'answer' => 'The speed you should travel under all driving conditions',
            'created_at' => '2021-12-20 03:04:02',
            'updated_at' => '2021-12-20 03:04:02',
        ]);
        \App\Models\Answer::create([
            'id' => 294,
            'question_id' => 73,
            'is_correct?' => 0,
            'answer' => 'The minimum speed permitted on all highways',
            'created_at' => '2021-12-20 03:04:11',
            'updated_at' => '2021-12-20 03:04:11',
        ]);
        \App\Models\Answer::create([
            'id' => 295,
            'question_id' => 73,
            'is_correct?' => 1,
            'answer' => 'The maximum speed permitted when conditions are favourable',
            'created_at' => '2021-12-20 03:04:20',
            'updated_at' => '2021-12-20 03:04:20',
        ]);
        \App\Models\Answer::create([
            'id' => 296,
            'question_id' => 73,
            'is_correct?' => 0,
            'answer' => 'The maximum speed permitted except when passing',
            'created_at' => '2021-12-20 03:04:28',
            'updated_at' => '2021-12-20 03:04:28',
        ]);
        \App\Models\Answer::create([
            'id' => 297,
            'question_id' => 74,
            'is_correct?' => 0,
            'answer' => 'Has a flashing yellow light for one direction of traffic and a flashing red light for the other direction of traffic',
            'created_at' => '2021-12-20 03:05:39',
            'updated_at' => '2021-12-20 03:05:39',
        ]);
        \App\Models\Answer::create([
            'id' => 298,
            'question_id' => 74,
            'is_correct?' => 0,
            'answer' => 'Has traffic signs but no traffic control signal lights',
            'created_at' => '2021-12-20 03:05:46',
            'updated_at' => '2021-12-20 03:05:46',
        ]);
        \App\Models\Answer::create([
            'id' => 299,
            'question_id' => 74,
            'is_correct?' => 1,
            'answer' => 'Has no traffic control signal lights or traffic signs',
            'created_at' => '2021-12-20 03:05:53',
            'updated_at' => '2021-12-20 03:05:53',
        ]);
        \App\Models\Answer::create([
            'id' => 300,
            'question_id' => 74,
            'is_correct?' => 0,
            'answer' => 'Has Yield signs but no Stop signs',
            'created_at' => '2021-12-20 03:06:03',
            'updated_at' => '2021-12-20 03:06:03',
        ]);
        \App\Models\Answer::create([
            'id' => 301,
            'question_id' => 75,
            'is_correct?' => 0,
            'answer' => 'Sharp left curve in the road ahead',
            'created_at' => '2021-12-20 03:07:36',
            'updated_at' => '2021-12-20 03:07:36',
        ]);
        \App\Models\Answer::create([
            'id' => 302,
            'question_id' => 75,
            'is_correct?' => 0,
            'answer' => 'Left turns are prohibited',
            'created_at' => '2021-12-20 03:07:47',
            'updated_at' => '2021-12-20 03:07:47',
        ]);
        \App\Models\Answer::create([
            'id' => 303,
            'question_id' => 75,
            'is_correct?' => 0,
            'answer' => 'Vehicles may turn left or go straight',
            'created_at' => '2021-12-20 03:07:57',
            'updated_at' => '2021-12-20 03:07:57',
        ]);
        \App\Models\Answer::create([
            'id' => 304,
            'question_id' => 75,
            'is_correct?' => 1,
            'answer' => 'Double lane left turn',
            'created_at' => '2021-12-20 03:08:04',
            'updated_at' => '2021-12-20 03:08:04',
        ]);
        \App\Models\Answer::create([
            'id' => 305,
            'question_id' => 76,
            'is_correct?' => 0,
            'answer' => 'Stop at the entrance to the other highway and wait until a gap in traffic occurs before proceeding',
            'created_at' => '2021-12-20 03:08:55',
            'updated_at' => '2021-12-20 03:08:55',
        ]);
        \App\Models\Answer::create([
            'id' => 306,
            'question_id' => 76,
            'is_correct?' => 1,
            'answer' => 'Watch for a gap in traffic on the highway they are entering, adjust to highway speed in the acceleration lane and blend in smoothly',
            'created_at' => '2021-12-20 03:09:03',
            'updated_at' => '2021-12-20 03:09:03',
        ]);
        \App\Models\Answer::create([
            'id' => 307,
            'question_id' => 76,
            'is_correct?' => 0,
            'answer' => 'Stop and yield the right-of-way to traffic already on the highway',
            'created_at' => '2021-12-20 03:09:12',
            'updated_at' => '2021-12-20 03:09:12',
        ]);
        \App\Models\Answer::create([
            'id' => 308,
            'question_id' => 76,
            'is_correct?' => 0,
            'answer' => 'Reduce speed and proceed with caution',
            'created_at' => '2021-12-20 03:09:27',
            'updated_at' => '2021-12-20 03:09:57',
        ]);
        \App\Models\Answer::create([
            'id' => 309,
            'question_id' => 77,
            'is_correct?' => 0,
            'answer' => 'Park lights',
            'created_at' => '2021-12-20 03:11:06',
            'updated_at' => '2021-12-20 03:11:06',
        ]);
        \App\Models\Answer::create([
            'id' => 310,
            'question_id' => 77,
            'is_correct?' => 0,
            'answer' => 'Headlights on high beam',
            'created_at' => '2021-12-20 03:11:14',
            'updated_at' => '2021-12-20 03:11:14',
        ]);
        \App\Models\Answer::create([
            'id' => 311,
            'question_id' => 77,
            'is_correct?' => 1,
            'answer' => 'Headlights on low beam',
            'created_at' => '2021-12-20 03:11:23',
            'updated_at' => '2021-12-20 03:11:23',
        ]);
        \App\Models\Answer::create([
            'id' => 312,
            'question_id' => 77,
            'is_correct?' => 0,
            'answer' => 'Daytime running lights',
            'created_at' => '2021-12-20 03:11:36',
            'updated_at' => '2021-12-20 03:11:36',
        ]);
        \App\Models\Answer::create([
            'id' => 313,
            'question_id' => 78,
            'is_correct?' => 0,
            'answer' => 'Emergency vehicles entering roadway',
            'created_at' => '2021-12-20 03:12:28',
            'updated_at' => '2021-12-20 03:12:28',
        ]);
        \App\Models\Answer::create([
            'id' => 314,
            'question_id' => 78,
            'is_correct?' => 0,
            'answer' => 'The designated lane is closed',
            'created_at' => '2021-12-20 03:12:38',
            'updated_at' => '2021-12-20 03:12:38',
        ]);
        \App\Models\Answer::create([
            'id' => 315,
            'question_id' => 78,
            'is_correct?' => 1,
            'answer' => 'Railway crossing',
            'created_at' => '2021-12-20 03:12:46',
            'updated_at' => '2021-12-20 03:12:46',
        ]);
        \App\Models\Answer::create([
            'id' => 316,
            'question_id' => 78,
            'is_correct?' => 0,
            'answer' => 'Do not enter',
            'created_at' => '2021-12-20 03:12:54',
            'updated_at' => '2021-12-20 03:12:54',
        ]);
        \App\Models\Answer::create([
            'id' => 317,
            'question_id' => 79,
            'is_correct?' => 0,
            'answer' => 'Yes, but only when a sign permits such a turn',
            'created_at' => '2021-12-20 03:13:34',
            'updated_at' => '2021-12-20 03:13:34',
        ]);
        \App\Models\Answer::create([
            'id' => 318,
            'question_id' => 79,
            'is_correct?' => 1,
            'answer' => 'Yes, if the driver reduces speed and there is no traffic or pedestrian in the intersection, and no sign that prohibits such a turn',
            'created_at' => '2021-12-20 03:13:47',
            'updated_at' => '2021-12-20 03:13:47',
        ]);
        \App\Models\Answer::create([
            'id' => 319,
            'question_id' => 79,
            'is_correct?' => 0,
            'answer' => 'Yes, if the driver stops and there is no traffic, pedestrian or sign that prohibits such a turn',
            'created_at' => '2021-12-20 03:14:05',
            'updated_at' => '2021-12-20 03:14:05',
        ]);
        \App\Models\Answer::create([
            'id' => 320,
            'question_id' => 79,
            'is_correct?' => 0,
            'answer' => 'No, right turns on a red traffic light are never permitted',
            'created_at' => '2021-12-20 03:14:16',
            'updated_at' => '2021-12-20 03:14:16',
        ]);
        \App\Models\Answer::create([
            'id' => 321,
            'question_id' => 80,
            'is_correct?' => 1,
            'answer' => 'Lane is reserved for use by the specified vehicles',
            'created_at' => '2021-12-20 03:15:28',
            'updated_at' => '2021-12-20 03:15:28',
        ]);
        \App\Models\Answer::create([
            'id' => 322,
            'question_id' => 80,
            'is_correct?' => 0,
            'answer' => 'One-way traffic only',
            'created_at' => '2021-12-20 03:15:38',
            'updated_at' => '2021-12-20 03:15:38',
        ]);
        \App\Models\Answer::create([
            'id' => 323,
            'question_id' => 80,
            'is_correct?' => 0,
            'answer' => 'Car pool vehicles only',
            'created_at' => '2021-12-20 03:15:49',
            'updated_at' => '2021-12-20 03:15:49',
        ]);
        \App\Models\Answer::create([
            'id' => 324,
            'question_id' => 80,
            'is_correct?' => 0,
            'answer' => 'Lane can be used for dangerous goods vehicles',
            'created_at' => '2021-12-20 03:15:59',
            'updated_at' => '2021-12-20 03:15:59',
        ]);
        \App\Models\Answer::create([
            'id' => 325,
            'question_id' => 81,
            'is_correct?' => 0,
            'answer' => 'May pass the stopped vehicle if there is no oncoming traffic that may impede passing safely',
            'created_at' => '2021-12-20 03:17:15',
            'updated_at' => '2021-12-20 03:17:15',
        ]);
        \App\Models\Answer::create([
            'id' => 326,
            'question_id' => 81,
            'is_correct?' => 1,
            'answer' => 'Must not pass the stopped vehicle. It is illegal',
            'created_at' => '2021-12-20 03:17:24',
            'updated_at' => '2021-12-20 03:17:24',
        ]);
        \App\Models\Answer::create([
            'id' => 327,
            'question_id' => 81,
            'is_correct?' => 0,
            'answer' => 'May pass the stopped vehicle when eye contact is made with the pedestrian and the pedestrian stops',
            'created_at' => '2021-12-20 03:17:33',
            'updated_at' => '2021-12-20 03:17:33',
        ]);
        \App\Models\Answer::create([
            'id' => 328,
            'question_id' => 81,
            'is_correct?' => 0,
            'answer' => 'May pass the stopped vehicle when the pedestrian crossing signal has changed to “Don’t Walk”',
            'created_at' => '2021-12-20 03:17:39',
            'updated_at' => '2021-12-20 03:17:39',
        ]);
        \App\Models\Answer::create([
            'id' => 329,
            'question_id' => 82,
            'is_correct?' => 1,
            'answer' => 'Level with the top of the ears',
            'created_at' => '2021-12-20 03:18:10',
            'updated_at' => '2021-12-20 03:18:10',
        ]);
        \App\Models\Answer::create([
            'id' => 330,
            'question_id' => 82,
            'is_correct?' => 0,
            'answer' => 'Level with the top of the shoulders',
            'created_at' => '2021-12-20 03:18:27',
            'updated_at' => '2021-12-20 03:18:27',
        ]);
        \App\Models\Answer::create([
            'id' => 331,
            'question_id' => 82,
            'is_correct?' => 0,
            'answer' => 'Level with the neck',
            'created_at' => '2021-12-20 03:18:35',
            'updated_at' => '2021-12-20 03:18:35',
        ]);
        \App\Models\Answer::create([
            'id' => 332,
            'question_id' => 82,
            'is_correct?' => 0,
            'answer' => 'Level with the top of the head',
            'created_at' => '2021-12-20 03:18:44',
            'updated_at' => '2021-12-20 03:18:44',
        ]);
        \App\Models\Answer::create([
            'id' => 333,
            'question_id' => 83,
            'is_correct?' => 0,
            'answer' => 'School zone ahead',
            'created_at' => '2021-12-20 03:19:34',
            'updated_at' => '2021-12-20 03:19:34',
        ]);
        \App\Models\Answer::create([
            'id' => 334,
            'question_id' => 83,
            'is_correct?' => 0,
            'answer' => 'Caution log trucks turning',
            'created_at' => '2021-12-20 03:19:42',
            'updated_at' => '2021-12-20 03:19:42',
        ]);
        \App\Models\Answer::create([
            'id' => 335,
            'question_id' => 83,
            'is_correct?' => 1,
            'answer' => 'Traffic control signal advance warning',
            'created_at' => '2021-12-20 03:19:50',
            'updated_at' => '2021-12-20 03:19:50',
        ]);
        \App\Models\Answer::create([
            'id' => 336,
            'question_id' => 83,
            'is_correct?' => 0,
            'answer' => 'Pedestrian crosswalk ahead',
            'created_at' => '2021-12-20 03:19:58',
            'updated_at' => '2021-12-20 03:19:58',
        ]);
        \App\Models\Answer::create([
            'id' => 337,
            'question_id' => 84,
            'is_correct?' => 0,
            'answer' => 'Use the right lane and reduce their speed to half the posted speed limit',
            'created_at' => '2021-12-20 03:20:34',
            'updated_at' => '2021-12-20 03:20:34',
        ]);
        \App\Models\Answer::create([
            'id' => 338,
            'question_id' => 84,
            'is_correct?' => 0,
            'answer' => 'Use the left lane only',
            'created_at' => '2021-12-20 03:20:41',
            'updated_at' => '2021-12-20 03:20:41',
        ]);
        \App\Models\Answer::create([
            'id' => 339,
            'question_id' => 84,
            'is_correct?' => 0,
            'answer' => 'Increase speed',
            'created_at' => '2021-12-20 03:20:49',
            'updated_at' => '2021-12-20 03:20:49',
        ]);
        \App\Models\Answer::create([
            'id' => 340,
            'question_id' => 84,
            'is_correct?' => 1,
            'answer' => 'Move into the right lane when safe',
            'created_at' => '2021-12-20 03:20:56',
            'updated_at' => '2021-12-20 03:20:56',
        ]);
        \App\Models\Answer::create([
            'id' => 341,
            'question_id' => 85,
            'is_correct?' => 1,
            'answer' => 'Be prepared to stop as this is a warning that the alternating flashing red lights will come on once the bus has stopped',
            'created_at' => '2021-12-20 03:21:34',
            'updated_at' => '2021-12-20 03:21:34',
        ]);
        \App\Models\Answer::create([
            'id' => 342,
            'question_id' => 85,
            'is_correct?' => 0,
            'answer' => 'Be prepared to stop as this could be a warning that there is a collision ahead and the traffic flow has stopped',
            'created_at' => '2021-12-20 03:21:41',
            'updated_at' => '2021-12-20 03:21:41',
        ]);
        \App\Models\Answer::create([
            'id' => 343,
            'question_id' => 85,
            'is_correct?' => 0,
            'answer' => 'Stop immediately because the school bus is loading or unloading students',
            'created_at' => '2021-12-20 03:21:50',
            'updated_at' => '2021-12-20 03:21:50',
        ]);
        \App\Models\Answer::create([
            'id' => 344,
            'question_id' => 85,
            'is_correct?' => 0,
            'answer' => 'Use caution as the school bus is approaching a railroad crossing and is about to stop',
            'created_at' => '2021-12-20 03:22:03',
            'updated_at' => '2021-12-20 03:22:03',
        ]);
        \App\Models\Answer::create([
            'id' => 345,
            'question_id' => 86,
            'is_correct?' => 0,
            'answer' => 'Beginning 1 hour before sunset and ending 1 hour after the following sunrise',
            'created_at' => '2021-12-20 03:22:34',
            'updated_at' => '2021-12-20 03:22:34',
        ]);
        \App\Models\Answer::create([
            'id' => 346,
            'question_id' => 86,
            'is_correct?' => 0,
            'answer' => 'Beginning at sunset and ending at the following sunrise',
            'created_at' => '2021-12-20 03:22:41',
            'updated_at' => '2021-12-20 03:22:41',
        ]);
        \App\Models\Answer::create([
            'id' => 347,
            'question_id' => 86,
            'is_correct?' => 0,
            'answer' => 'Between 7:00 P.M. and 7:00 A.M.',
            'created_at' => '2021-12-20 03:22:48',
            'updated_at' => '2021-12-20 03:22:48',
        ]);
        \App\Models\Answer::create([
            'id' => 348,
            'question_id' => 86,
            'is_correct?' => 1,
            'answer' => 'Beginning 1 hour after sunset and ending 1 hour before the following sunrise',
            'created_at' => '2021-12-20 03:22:56',
            'updated_at' => '2021-12-20 03:22:56',
        ]);
        \App\Models\Answer::create([
            'id' => 349,
            'question_id' => 87,
            'is_correct?' => 0,
            'answer' => 'No through traffic or right turns',
            'created_at' => '2021-12-20 03:24:00',
            'updated_at' => '2021-12-20 03:24:00',
        ]);
        \App\Models\Answer::create([
            'id' => 350,
            'question_id' => 87,
            'is_correct?' => 0,
            'answer' => 'Turn left or go straight through',
            'created_at' => '2021-12-20 03:24:06',
            'updated_at' => '2021-12-20 03:24:06',
        ]);
        \App\Models\Answer::create([
            'id' => 351,
            'question_id' => 87,
            'is_correct?' => 0,
            'answer' => 'Turn from a one-way road onto a one-way road',
            'created_at' => '2021-12-20 03:24:17',
            'updated_at' => '2021-12-20 03:24:17',
        ]);
        \App\Models\Answer::create([
            'id' => 352,
            'question_id' => 87,
            'is_correct?' => 1,
            'answer' => 'Straight through or right turn',
            'created_at' => '2021-12-20 03:24:32',
            'updated_at' => '2021-12-20 03:24:32',
        ]);
        \App\Models\Answer::create([
            'id' => 353,
            'question_id' => 88,
            'is_correct?' => 0,
            'answer' => 'Must stop only if there is a Stop sign',
            'created_at' => '2021-12-20 03:25:03',
            'updated_at' => '2021-12-20 03:25:03',
        ]);
        \App\Models\Answer::create([
            'id' => 354,
            'question_id' => 88,
            'is_correct?' => 1,
            'answer' => 'Must come to a complete stop',
            'created_at' => '2021-12-20 03:25:10',
            'updated_at' => '2021-12-20 03:25:10',
        ]);
        \App\Models\Answer::create([
            'id' => 355,
            'question_id' => 88,
            'is_correct?' => 0,
            'answer' => 'Must stop before crossing the sidewalk only if there are predestrians present',
            'created_at' => '2021-12-20 03:25:19',
            'updated_at' => '2021-12-20 03:25:38',
        ]);
        \App\Models\Answer::create([
            'id' => 356,
            'question_id' => 88,
            'is_correct?' => 0,
            'answer' => 'Is not required to stop',
            'created_at' => '2021-12-20 03:25:26',
            'updated_at' => '2021-12-20 03:25:26',
        ]);
        \App\Models\Answer::create([
            'id' => 357,
            'question_id' => 89,
            'is_correct?' => 0,
            'answer' => 'Cross the tracks if the train is a minimum of 250 metres away',
            'created_at' => '2021-12-20 03:26:10',
            'updated_at' => '2021-12-20 03:26:10',
        ]);
        \App\Models\Answer::create([
            'id' => 358,
            'question_id' => 89,
            'is_correct?' => 0,
            'answer' => 'Reduce speed, check for trains, and then proceed across the tracks',
            'created_at' => '2021-12-20 03:26:19',
            'updated_at' => '2021-12-20 03:26:19',
        ]);
        \App\Models\Answer::create([
            'id' => 359,
            'question_id' => 89,
            'is_correct?' => 0,
            'answer' => 'Do not stop and do not change gears while crossing the tracks',
            'created_at' => '2021-12-20 03:26:27',
            'updated_at' => '2021-12-20 03:26:27',
        ]);
        \App\Models\Answer::create([
            'id' => 360,
            'question_id' => 89,
            'is_correct?' => 1,
            'answer' => 'Stop at least 5 metres from the nearest rail until the train has passed',
            'created_at' => '2021-12-20 03:26:37',
            'updated_at' => '2021-12-20 03:26:37',
        ]);
        \App\Models\Answer::create([
            'id' => 361,
            'question_id' => 90,
            'is_correct?' => 1,
            'answer' => 'Reduce speed before the curve, stay in the lane and gently accelerate after entering the curve',
            'created_at' => '2021-12-20 03:27:19',
            'updated_at' => '2021-12-20 03:27:19',
        ]);
        \App\Models\Answer::create([
            'id' => 362,
            'question_id' => 90,
            'is_correct?' => 0,
            'answer' => 'Maintain speed before the curve, brake in the curve, look ahead and accelerate out of the curve',
            'created_at' => '2021-12-20 03:27:28',
            'updated_at' => '2021-12-20 03:27:28',
        ]);
        \App\Models\Answer::create([
            'id' => 363,
            'question_id' => 90,
            'is_correct?' => 0,
            'answer' => 'Cover the brake pedal before the curve, counter-steer toward the outside of the lane and accelerate when exiting',
            'created_at' => '2021-12-20 03:27:35',
            'updated_at' => '2021-12-20 03:27:35',
        ]);
        \App\Models\Answer::create([
            'id' => 364,
            'question_id' => 90,
            'is_correct?' => 0,
            'answer' => 'Accelerate before the curve, cover the brake pedal in the curve and accelerate after leaving the curve',
            'created_at' => '2021-12-20 03:27:41',
            'updated_at' => '2021-12-20 03:27:41',
        ]);
        \App\Models\Answer::create([
            'id' => 365,
            'question_id' => 91,
            'is_correct?' => 0,
            'answer' => 'Yield the right-of-way to pedestrians and traffic',
            'created_at' => '2021-12-20 03:28:42',
            'updated_at' => '2021-12-20 03:28:42',
        ]);
        \App\Models\Answer::create([
            'id' => 366,
            'question_id' => 91,
            'is_correct?' => 0,
            'answer' => 'Dangerous goods vehicle placard: flammable gas',
            'created_at' => '2021-12-20 03:28:48',
            'updated_at' => '2021-12-20 03:28:48',
        ]);
        \App\Models\Answer::create([
            'id' => 367,
            'question_id' => 91,
            'is_correct?' => 1,
            'answer' => 'Slow moving vehicle',
            'created_at' => '2021-12-20 03:28:57',
            'updated_at' => '2021-12-20 03:28:57',
        ]);
        \App\Models\Answer::create([
            'id' => 368,
            'question_id' => 91,
            'is_correct?' => 0,
            'answer' => 'Warning, Yield sign ahead',
            'created_at' => '2021-12-20 03:29:04',
            'updated_at' => '2021-12-20 03:29:04',
        ]);
        \App\Models\Answer::create([
            'id' => 369,
            'question_id' => 92,
            'is_correct?' => 0,
            'answer' => 'The driver of the truck needs to fully concentrate on the turn and does not need the added responsibility of a passing vehicle',
            'created_at' => '2021-12-20 03:29:51',
            'updated_at' => '2021-12-20 03:29:51',
        ]);
        \App\Models\Answer::create([
            'id' => 370,
            'question_id' => 92,
            'is_correct?' => 0,
            'answer' => 'Loaded log-haul trucks obey the 6-second rule for turns',
            'created_at' => '2021-12-20 03:30:00',
            'updated_at' => '2021-12-20 03:30:00',
        ]);
        \App\Models\Answer::create([
            'id' => 371,
            'question_id' => 92,
            'is_correct?' => 1,
            'answer' => 'A danger zone exists as the overhang of the logs from the tail end of the truck could block all the lanes on a highway during the turn',
            'created_at' => '2021-12-20 03:30:12',
            'updated_at' => '2021-12-20 03:30:12',
        ]);
        \App\Models\Answer::create([
            'id' => 372,
            'question_id' => 92,
            'is_correct?' => 0,
            'answer' => 'It is illegal to do so',
            'created_at' => '2021-12-20 03:30:29',
            'updated_at' => '2021-12-20 03:30:29',
        ]);
        \App\Models\Answer::create([
            'id' => 373,
            'question_id' => 93,
            'is_correct?' => 0,
            'answer' => 'Playground zone ahead',
            'created_at' => '2021-12-20 03:31:34',
            'updated_at' => '2021-12-20 03:31:34',
        ]);
        \App\Models\Answer::create([
            'id' => 374,
            'question_id' => 93,
            'is_correct?' => 0,
            'answer' => 'Pedestrian crossing ahead',
            'created_at' => '2021-12-20 03:31:42',
            'updated_at' => '2021-12-20 03:31:42',
        ]);
        \App\Models\Answer::create([
            'id' => 375,
            'question_id' => 93,
            'is_correct?' => 1,
            'answer' => 'School bus stop ahead',
            'created_at' => '2021-12-20 03:31:50',
            'updated_at' => '2021-12-20 03:31:50',
        ]);
        \App\Models\Answer::create([
            'id' => 376,
            'question_id' => 93,
            'is_correct?' => 0,
            'answer' => 'School zone ahead',
            'created_at' => '2021-12-20 03:31:58',
            'updated_at' => '2021-12-20 03:31:58',
        ]);
        \App\Models\Answer::create([
            'id' => 377,
            'question_id' => 94,
            'is_correct?' => 0,
            'answer' => 'Sound the horn before proceeding',
            'created_at' => '2021-12-20 03:32:31',
            'updated_at' => '2021-12-20 03:32:31',
        ]);
        \App\Models\Answer::create([
            'id' => 378,
            'question_id' => 94,
            'is_correct?' => 0,
            'answer' => 'Proceed through the funeral procession only when there is sufficient space between vehicles',
            'created_at' => '2021-12-20 03:32:38',
            'updated_at' => '2021-12-20 03:32:38',
        ]);
        \App\Models\Answer::create([
            'id' => 379,
            'question_id' => 94,
            'is_correct?' => 1,
            'answer' => 'Yield the right-of-way and do not break through the procession',
            'created_at' => '2021-12-20 03:32:44',
            'updated_at' => '2021-12-20 03:32:44',
        ]);
        \App\Models\Answer::create([
            'id' => 380,
            'question_id' => 94,
            'is_correct?' => 0,
            'answer' => 'Flash the high beam headlights before proceeding',
            'created_at' => '2021-12-20 03:32:51',
            'updated_at' => '2021-12-20 03:32:51',
        ]);
        \App\Models\Answer::create([
            'id' => 381,
            'question_id' => 95,
            'is_correct?' => 0,
            'answer' => 'Apply the brakes and counter-steer to return to the paved portion of the roadway',
            'created_at' => '2021-12-20 03:33:23',
            'updated_at' => '2021-12-20 03:33:23',
        ]);
        \App\Models\Answer::create([
            'id' => 382,
            'question_id' => 95,
            'is_correct?' => 0,
            'answer' => 'Keep a firm grip on the steering wheel, ease off the gas pedal, and then gradually return to the paved portion of the roadway',
            'created_at' => '2021-12-20 03:33:31',
            'updated_at' => '2021-12-20 03:33:31',
        ]);
        \App\Models\Answer::create([
            'id' => 383,
            'question_id' => 95,
            'is_correct?' => 1,
            'answer' => 'Accelerate slightly, then turn the steering wheel sharply to return to the paved portion of the roadway',
            'created_at' => '2021-12-20 03:33:40',
            'updated_at' => '2021-12-20 03:33:40',
        ]);
        \App\Models\Answer::create([
            'id' => 384,
            'question_id' => 95,
            'is_correct?' => 0,
            'answer' => 'Move the vehicle completely off the paved portion, then steer back onto the paved portion of the roadway',
            'created_at' => '2021-12-20 03:33:50',
            'updated_at' => '2021-12-20 03:33:50',
        ]);
        \App\Models\Answer::create([
            'id' => 385,
            'question_id' => 96,
            'is_correct?' => 0,
            'answer' => 'A school zone',
            'created_at' => '2021-12-20 03:34:37',
            'updated_at' => '2021-12-20 03:34:37',
        ]);
        \App\Models\Answer::create([
            'id' => 386,
            'question_id' => 96,
            'is_correct?' => 1,
            'answer' => 'School crosswalk ahead',
            'created_at' => '2021-12-20 03:34:43',
            'updated_at' => '2021-12-20 03:34:43',
        ]);
        \App\Models\Answer::create([
            'id' => 387,
            'question_id' => 96,
            'is_correct?' => 0,
            'answer' => 'Playground zone',
            'created_at' => '2021-12-20 03:34:49',
            'updated_at' => '2021-12-20 03:34:49',
        ]);
        \App\Models\Answer::create([
            'id' => 388,
            'question_id' => 96,
            'is_correct?' => 0,
            'answer' => 'Pedestrian activated lights ahead',
            'created_at' => '2021-12-20 03:34:56',
            'updated_at' => '2021-12-20 03:34:56',
        ]);
        \App\Models\Answer::create([
            'id' => 389,
            'question_id' => 97,
            'is_correct?' => 0,
            'answer' => '100  cm',
            'created_at' => '2021-12-20 03:35:34',
            'updated_at' => '2021-12-20 03:35:34',
        ]);
        \App\Models\Answer::create([
            'id' => 390,
            'question_id' => 97,
            'is_correct?' => 1,
            'answer' => '50  cm',
            'created_at' => '2021-12-20 03:35:40',
            'updated_at' => '2021-12-20 03:35:40',
        ]);
        \App\Models\Answer::create([
            'id' => 391,
            'question_id' => 97,
            'is_correct?' => 0,
            'answer' => '25  cm',
            'created_at' => '2021-12-20 03:35:45',
            'updated_at' => '2021-12-20 03:35:45',
        ]);
        \App\Models\Answer::create([
            'id' => 392,
            'question_id' => 97,
            'is_correct?' => 0,
            'answer' => '75 cm',
            'created_at' => '2021-12-20 03:35:55',
            'updated_at' => '2021-12-20 03:35:55',
        ]);
        \App\Models\Answer::create([
            'id' => 393,
            'question_id' => 98,
            'is_correct?' => 1,
            'answer' => 'Drivers must stop and yield to the pedestrian',
            'created_at' => '2021-12-20 03:36:33',
            'updated_at' => '2021-12-20 03:36:33',
        ]);
        \App\Models\Answer::create([
            'id' => 394,
            'question_id' => 98,
            'is_correct?' => 0,
            'answer' => 'The pedestrian is visually impaired and needs assistance to cross the road',
            'created_at' => '2021-12-20 03:36:41',
            'updated_at' => '2021-12-20 03:36:41',
        ]);
        \App\Models\Answer::create([
            'id' => 395,
            'question_id' => 98,
            'is_correct?' => 0,
            'answer' => 'Drivers do not have to yield to the pedestrian until they step off the curb',
            'created_at' => '2021-12-20 03:36:49',
            'updated_at' => '2021-12-20 03:36:49',
        ]);
        \App\Models\Answer::create([
            'id' => 396,
            'question_id' => 98,
            'is_correct?' => 0,
            'answer' => 'Drivers should reduce speed to 20 km/h and be cautious when passing the pedestrian',
            'created_at' => '2021-12-20 03:36:59',
            'updated_at' => '2021-12-20 03:36:59',
        ]);
        \App\Models\Answer::create([
            'id' => 397,
            'question_id' => 99,
            'is_correct?' => 0,
            'answer' => 'Pavement ends',
            'created_at' => '2021-12-20 03:38:03',
            'updated_at' => '2021-12-20 03:38:03',
        ]);
        \App\Models\Answer::create([
            'id' => 398,
            'question_id' => 99,
            'is_correct?' => 0,
            'answer' => 'Construction zone ahead',
            'created_at' => '2021-12-20 03:38:12',
            'updated_at' => '2021-12-20 03:38:12',
        ]);
        \App\Models\Answer::create([
            'id' => 399,
            'question_id' => 99,
            'is_correct?' => 1,
            'answer' => 'Dead end',
            'created_at' => '2021-12-20 03:38:22',
            'updated_at' => '2021-12-20 03:38:22',
        ]);
        \App\Models\Answer::create([
            'id' => 400,
            'question_id' => 99,
            'is_correct?' => 0,
            'answer' => 'Hazard marker',
            'created_at' => '2021-12-20 03:38:33',
            'updated_at' => '2021-12-20 03:38:33',
        ]);
        \App\Models\Answer::create([
            'id' => 401,
            'question_id' => 100,
            'is_correct?' => 0,
            'answer' => 'Divided highway ends',
            'created_at' => '2021-12-20 03:39:39',
            'updated_at' => '2021-12-20 03:39:39',
        ]);
        \App\Models\Answer::create([
            'id' => 402,
            'question_id' => 100,
            'is_correct?' => 1,
            'answer' => 'Divided highway begins',
            'created_at' => '2021-12-20 03:39:46',
            'updated_at' => '2021-12-20 03:39:46',
        ]);
        \App\Models\Answer::create([
            'id' => 403,
            'question_id' => 100,
            'is_correct?' => 0,
            'answer' => 'Obstruction – pass on the left',
            'created_at' => '2021-12-20 03:39:55',
            'updated_at' => '2021-12-20 03:39:55',
        ]);
        \App\Models\Answer::create([
            'id' => 404,
            'question_id' => 100,
            'is_correct?' => 0,
            'answer' => 'Two-way traffic',
            'created_at' => '2021-12-20 03:40:04',
            'updated_at' => '2021-12-20 03:40:04',
        ]);
        \App\Models\Answer::create([
            'id' => 405,
            'question_id' => 101,
            'is_correct?' => 0,
            'answer' => 'Proceed since the light is about to turn green',
            'created_at' => '2021-12-20 03:40:48',
            'updated_at' => '2021-12-20 03:40:48',
        ]);
        \App\Models\Answer::create([
            'id' => 406,
            'question_id' => 101,
            'is_correct?' => 0,
            'answer' => 'Yield to vehicles on the right',
            'created_at' => '2021-12-20 03:40:56',
            'updated_at' => '2021-12-20 03:40:56',
        ]);
        \App\Models\Answer::create([
            'id' => 407,
            'question_id' => 101,
            'is_correct?' => 1,
            'answer' => 'Stop before the intersection unless the stop cannot be made in safety',
            'created_at' => '2021-12-20 03:41:04',
            'updated_at' => '2021-12-20 03:41:04',
        ]);
        \App\Models\Answer::create([
            'id' => 408,
            'question_id' => 101,
            'is_correct?' => 0,
            'answer' => 'Increase speed to clear the intersection',
            'created_at' => '2021-12-20 03:41:11',
            'updated_at' => '2021-12-20 03:41:11',
        ]);
        \App\Models\Answer::create([
            'id' => 409,
            'question_id' => 102,
            'is_correct?' => 0,
            'answer' => 'The road narrows ahead',
            'created_at' => '2021-12-20 03:41:40',
            'updated_at' => '2021-12-20 03:41:40',
        ]);
        \App\Models\Answer::create([
            'id' => 410,
            'question_id' => 102,
            'is_correct?' => 0,
            'answer' => 'If the solid line is on your side, passing is permitted',
            'created_at' => '2021-12-20 03:41:47',
            'updated_at' => '2021-12-20 03:41:47',
        ]);
        \App\Models\Answer::create([
            'id' => 411,
            'question_id' => 102,
            'is_correct?' => 0,
            'answer' => 'If the broken line is on your side, passing is not permitted',
            'created_at' => '2021-12-20 03:41:56',
            'updated_at' => '2021-12-20 03:41:56',
        ]);
        \App\Models\Answer::create([
            'id' => 412,
            'question_id' => 102,
            'is_correct?' => 1,
            'answer' => 'If the broken line is on your side, passing is permitted',
            'created_at' => '2021-12-20 03:42:03',
            'updated_at' => '2021-12-20 03:42:03',
        ]);
        \App\Models\Answer::create([
            'id' => 413,
            'question_id' => 103,
            'is_correct?' => 0,
            'answer' => '50  km/h',
            'created_at' => '2021-12-20 03:42:37',
            'updated_at' => '2021-12-20 03:42:37',
        ]);
        \App\Models\Answer::create([
            'id' => 414,
            'question_id' => 103,
            'is_correct?' => 0,
            'answer' => '20  km/h',
            'created_at' => '2021-12-20 03:42:46',
            'updated_at' => '2021-12-20 03:42:46',
        ]);
        \App\Models\Answer::create([
            'id' => 415,
            'question_id' => 103,
            'is_correct?' => 0,
            'answer' => '40  km/h',
            'created_at' => '2021-12-20 03:42:52',
            'updated_at' => '2021-12-20 03:42:52',
        ]);
        \App\Models\Answer::create([
            'id' => 416,
            'question_id' => 103,
            'is_correct?' => 1,
            'answer' => '30  km/h',
            'created_at' => '2021-12-20 03:42:58',
            'updated_at' => '2021-12-20 03:42:58',
        ]);
        \App\Models\Answer::create([
            'id' => 417,
            'question_id' => 104,
            'is_correct?' => 1,
            'answer' => 'Should pass on the left when safe',
            'created_at' => '2021-12-20 03:43:28',
            'updated_at' => '2021-12-20 03:43:28',
        ]);
        \App\Models\Answer::create([
            'id' => 418,
            'question_id' => 104,
            'is_correct?' => 0,
            'answer' => 'Should pass on the right when safe',
            'created_at' => '2021-12-20 03:43:41',
            'updated_at' => '2021-12-20 03:43:41',
        ]);
        \App\Models\Answer::create([
            'id' => 419,
            'question_id' => 104,
            'is_correct?' => 0,
            'answer' => 'Should always travel 30 km/h faster than the vehicle being passed',
            'created_at' => '2021-12-20 03:43:49',
            'updated_at' => '2021-12-20 03:43:49',
        ]);
        \App\Models\Answer::create([
            'id' => 420,
            'question_id' => 104,
            'is_correct?' => 0,
            'answer' => 'Should not pull out to pass until they are within 3 metres of the vehicle being passed',
            'created_at' => '2021-12-20 03:43:57',
            'updated_at' => '2021-12-20 03:43:57',
        ]);
        \App\Models\Answer::create([
            'id' => 421,
            'question_id' => 105,
            'is_correct?' => 0,
            'answer' => 'Off-road facilities',
            'created_at' => '2021-12-20 03:44:54',
            'updated_at' => '2021-12-20 03:44:54',
        ]);
        \App\Models\Answer::create([
            'id' => 422,
            'question_id' => 105,
            'is_correct?' => 1,
            'answer' => 'Hospital services',
            'created_at' => '2021-12-20 03:45:02',
            'updated_at' => '2021-12-20 03:45:02',
        ]);
        \App\Models\Answer::create([
            'id' => 423,
            'question_id' => 105,
            'is_correct?' => 0,
            'answer' => 'Hotel services',
            'created_at' => '2021-12-20 03:45:13',
            'updated_at' => '2021-12-20 03:45:13',
        ]);
        \App\Models\Answer::create([
            'id' => 424,
            'question_id' => 105,
            'is_correct?' => 0,
            'answer' => 'Primary highway route marker',
            'created_at' => '2021-12-20 03:45:22',
            'updated_at' => '2021-12-20 03:45:22',
        ]);
        \App\Models\Answer::create([
            'id' => 425,
            'question_id' => 106,
            'is_correct?' => 0,
            'answer' => '3  metres',
            'created_at' => '2021-12-20 03:45:57',
            'updated_at' => '2021-12-20 03:45:57',
        ]);
        \App\Models\Answer::create([
            'id' => 426,
            'question_id' => 106,
            'is_correct?' => 0,
            'answer' => '4  metres',
            'created_at' => '2021-12-20 03:46:02',
            'updated_at' => '2021-12-20 03:46:02',
        ]);
        \App\Models\Answer::create([
            'id' => 427,
            'question_id' => 106,
            'is_correct?' => 0,
            'answer' => '2  metres',
            'created_at' => '2021-12-20 03:46:06',
            'updated_at' => '2021-12-20 03:46:06',
        ]);
        \App\Models\Answer::create([
            'id' => 428,
            'question_id' => 106,
            'is_correct?' => 1,
            'answer' => '5  metres',
            'created_at' => '2021-12-20 03:46:12',
            'updated_at' => '2021-12-20 03:46:12',
        ]);
        \App\Models\Answer::create([
            'id' => 429,
            'question_id' => 107,
            'is_correct?' => 0,
            'answer' => 'Construction sign, flag person ahead',
            'created_at' => '2021-12-20 03:47:15',
            'updated_at' => '2021-12-20 03:47:15',
        ]);
        \App\Models\Answer::create([
            'id' => 430,
            'question_id' => 107,
            'is_correct?' => 0,
            'answer' => 'Construction sign, detour ahead',
            'created_at' => '2021-12-20 03:47:23',
            'updated_at' => '2021-12-20 03:47:23',
        ]);
        \App\Models\Answer::create([
            'id' => 431,
            'question_id' => 107,
            'is_correct?' => 0,
            'answer' => 'Caution, falling rock ahead',
            'created_at' => '2021-12-20 03:47:30',
            'updated_at' => '2021-12-20 03:47:30',
        ]);
        \App\Models\Answer::create([
            'id' => 432,
            'question_id' => 107,
            'is_correct?' => 1,
            'answer' => 'Construction sign, people working ahead',
            'created_at' => '2021-12-20 03:47:43',
            'updated_at' => '2021-12-20 03:47:43',
        ]);
        \App\Models\Answer::create([
            'id' => 433,
            'question_id' => 108,
            'is_correct?' => 0,
            'answer' => 'Stay in the lane and move to the left portion of the lane',
            'created_at' => '2021-12-20 03:48:18',
            'updated_at' => '2021-12-20 03:48:18',
        ]);
        \App\Models\Answer::create([
            'id' => 434,
            'question_id' => 108,
            'is_correct?' => 1,
            'answer' => 'Stay in the lane and move to the right portion of the lane',
            'created_at' => '2021-12-20 03:48:24',
            'updated_at' => '2021-12-20 03:48:24',
        ]);
        \App\Models\Answer::create([
            'id' => 435,
            'question_id' => 108,
            'is_correct?' => 0,
            'answer' => 'Turn on the left signal and stay in the lane',
            'created_at' => '2021-12-20 03:48:30',
            'updated_at' => '2021-12-20 03:48:30',
        ]);
        \App\Models\Answer::create([
            'id' => 436,
            'question_id' => 108,
            'is_correct?' => 0,
            'answer' => 'Turn on the right signal and drive in the parking lane',
            'created_at' => '2021-12-20 03:48:38',
            'updated_at' => '2021-12-20 03:48:38',
        ]);
    }
}
