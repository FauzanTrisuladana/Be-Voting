<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VoterCode;

class VoterCodeSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $codes = [
            '8K3P', 'M7W9', 'X4B2', 'R9L1', 'H5T8', '2Y7Q', 'Z1N6', 'V9F4', 'C3J8', 'D0G5',
            'P8A2', 'W4R7', 'K9E1', 'T3S6', 'B0M5', 'L7V2', 'F1X8', 'J9D4', 'N5H0', 'Q3Z6',
            'G8C1', 'Y2P9', 'U4K7', 'E0A5', 'S6W3', '9T1R', '4L8F', '7M2X', '3J9V', '0P5Z',
            '6B3D', '1C7K', '8G0H', '5U2N', '2Q9E', 'A4S8', 'R0W6', 'D7T1', 'M3F9', 'X8Y2',
            'H1P5', 'K6L0', 'V3Z8', 'C9J4', 'B2N7', 'G5E1', 'T8Q3', 'W0U6', 'P4A9', 'J7R2',
            '7K4M', '3X9P', '0V2J', '8N6B', '1F5L', '9G0C', '4D8S', '2T3W', '6E1Y', '5Z7U',
            'R2H9', 'L0A4', 'Y6F1', 'S3M8', 'Q8D5', 'P1C7', 'X9E3', 'U5T0', 'W2K8', 'Z4N6',
            'J8B1', 'M0G5', 'F3V9', 'D7S2', 'H4R6', '5A1X', '9P8T', '2C4G', '7J0U', '0M6N',
            '3K2D', '8W5F', '1V9E', '6Q7Z', '4L3Y', 'B8S0', 'N4E6', 'G1W7', 'A9K2', 'T5J3',
            'E2R8', 'P7Y1', 'D0M9', 'H6V4', 'X3L5', 'K8Z2', 'C1F6', 'U9T4', 'R5Q0', 'W7G3',
            '0X4R', '8J1L', '6N9M', '2E5A', '7D3P', '4U0H', '1S8V', '9T2F', '5B6K', '3G7W',
            'Z2C9', 'M5Y0', 'Q1S8', 'V4P6', 'J9E2', 'F8T3', 'L0N7', 'G3B5', 'A6X1', 'H2D9',
            'K7M4', 'R1U8', 'C5Z0', 'W9A3', 'Y4J6', '2H8E', '7F0Q', '3V5K', '9D1T', '0N4S',
            '6P2W', '1M9B', '8E7J', '5G3C', '4R6U', 'X0A8', 'S7L2', 'D4Y9', 'T1Z5', 'P6F3',
            'J3K7', 'E9N1', 'V2H8', 'M6G0', 'B1W4', 'C8R5', 'U0P2', 'Q7X9', 'G4T1', 'Z5E6',
            '8M2C', '1K6X', '9J0F', '4Z5D', '3P7S', '7W1E', '0U8A', '5L4G', '2N9T', '6R3V',
            'F0Y8', 'H5B2', 'A3M9', 'D1K7', 'K6Q4', 'W8V1', 'T2P5', 'L9J3', 'E4S0', 'C7G2',
            'Y1R6', 'N8Z0', 'X5C3', 'U2E7', 'J6W9', '9A4D', '3E8G', '0F1Z', '6T7M', '2V0P',
            '8S3J', '5C9N', '1Y2U', '7B5X', '4H6L', 'P0R7', 'G2E8', 'M9K1', 'V6T4', 'Q5A2',
            'W3S9', 'Z8H0', 'D2L7', 'B4F1', 'R6C8', 'K1X5', 'H9Y3', 'F7J2', 'L3M0', 'A8V6',
            '3S6T', '8E1C', '5D7B', '0A9V', '2G4M', '9F8W', '4N2Y', '7R0K', '1J5H', '6P3U',
            'E8Q2', 'Y0Z7', 'T6C1', 'V3N9', 'W5M8', 'X2L4', 'J7P0', 'C1K6', 'B9T5', 'U4R8',
            'G0F3', 'M2S1', 'H7A9', 'D5E2', 'P8X6', '7T9L', '2J0S', '5W4C', '8V6F', '1P2G',
            '4M8Z', '9K3E', '0R7D', '3N1A', '6H5Y', 'Q0C4', 'A7U2', 'Z6T9', 'K3G8', 'F5P1',
            'L2D0', 'E9B7', 'V1R4', 'S8X3', 'Y5N2', 'W0J6', 'H4M9', 'C2E1', 'R7F8', 'T9K5',
        ];

        foreach ($codes as $code) {
            VoterCode::create(['code' => $code]);
        }
    }
}
