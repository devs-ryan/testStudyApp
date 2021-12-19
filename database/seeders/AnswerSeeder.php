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
            'question_id' => 17,
            'is_correct?' => 0,
            'answer' => 'Traffic entering from the right',
            'created_at' => '2021-12-19 21:33:20',
            'updated_at' => '2021-12-19 21:33:20',
        ]);
        \App\Models\Answer::create([
            'id' => 66,
            'question_id' => 17,
            'is_correct?' => 0,
            'answer' => 'Winding road ahead',
            'created_at' => '2021-12-19 21:33:26',
            'updated_at' => '2021-12-19 21:33:26',
        ]);
        \App\Models\Answer::create([
            'id' => 67,
            'question_id' => 17,
            'is_correct?' => 1,
            'answer' => 'Curve right',
            'created_at' => '2021-12-19 21:33:36',
            'updated_at' => '2021-12-19 21:33:36',
        ]);
        \App\Models\Answer::create([
            'id' => 68,
            'question_id' => 17,
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
    }
}
