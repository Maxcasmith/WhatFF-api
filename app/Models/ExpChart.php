<?php

namespace App\Models;

class ExpChart {
    
    static function getExpByLevel($level) {
        $chart = [
                "LEVEL 1"=> 0
                ,"LEVEL 2"=> 6
                ,"LEVEL 3"=> 33
                ,"LEVEL 4"=> 94
                ,"LEVEL 5"=> 202
                ,"LEVEL 6"=> 372
                ,"LEVEL 7"=> 616
                ,"LEVEL 8"=> 949
                ,"LEVEL 9"=> 1384
                ,"LEVEL 10"=> 1934
                ,"LEVEL 11"=> 2614
                ,"LEVEL 12"=> 3588
                ,"LEVEL 13"=> 4610
                ,"LEVEL 14"=> 5809
                ,"LEVEL 15"=> 7200
                ,"LEVEL 16"=> 8797
                ,"LEVEL 17"=> 10614
                ,"LEVEL 18"=> 12665
                ,"LEVEL 19"=> 14965
                ,"LEVEL 20"=> 17528
                ,"LEVEL 21"=> 20368
                ,"LEVEL 22"=> 24161
                ,"LEVEL 23"=> 27694
                ,"LEVEL 24"=> 31555
                ,"LEVEL 25"=> 35759
                ,"LEVEL 26"=> 40321
                ,"LEVEL 27"=> 45255
                ,"LEVEL 28"=> 50576
                ,"LEVEL 29"=> 56299
                ,"LEVEL 30"=> 62438
                ,"LEVEL 31"=> 69008
                ,"LEVEL 32"=> 77066
                ,"LEVEL 33"=> 84643
                ,"LEVEL 34"=> 92701
                ,"LEVEL 35"=> 101255
                ,"LEVEL 36"=> 110320
                ,"LEVEL 37"=> 119910
                ,"LEVEL 38"=> 130040
                ,"LEVEL 39"=> 140725
                ,"LEVEL 40"=> 151980
                ,"LEVEL 41"=> 163820
                ,"LEVEL 42"=> 176259
                ,"LEVEL 43"=> 189312
                ,"LEVEL 44"=> 202994
                ,"LEVEL 45"=> 217320
                ,"LEVEL 46"=> 232305
                ,"LEVEL 47"=> 247963
                ,"LEVEL 48"=> 264309
                ,"LEVEL 49"=> 281358
                ,"LEVEL 50"=> 299125
                ,"LEVEL 51"=> 317625
                ,"LEVEL 52"=> 336872
                ,"LEVEL 53"=> 356881
                ,"LEVEL 54"=> 377667
                ,"LEVEL 55"=> 399245
                ,"LEVEL 56"=> 421630
                ,"LEVEL 57"=> 444836
                ,"LEVEL 58"=> 468878
                ,"LEVEL 59"=> 493771
                ,"LEVEL 60"=> 519530
                ,"LEVEL 61"=> 546170
                ,"LEVEL 62"=> 581467
                ,"LEVEL 63"=> 610297
                ,"LEVEL 64"=> 640064
                ,"LEVEL 65"=> 670784
                ,"LEVEL 66"=> 702471
                ,"LEVEL 67"=> 735141
                ,"LEVEL 68"=> 768808
                ,"LEVEL 69"=> 803488
                ,"LEVEL 70"=> 839195
                ,"LEVEL 71"=> 875945
                ,"LEVEL 72"=> 913752
                ,"LEVEL 73"=> 952632
                ,"LEVEL 74"=> 992599
                ,"LEVEL 75"=> 1033669
                ,"LEVEL 76"=> 1075856
                ,"LEVEL 77"=> 1119176
                ,"LEVEL 78"=> 1163643
                ,"LEVEL 79"=> 1209273
                ,"LEVEL 80"=> 1256080
                ,"LEVEL 81"=> 1304080
                ,"LEVEL 82"=> 1389359
                ,"LEVEL 83"=> 1441133
                ,"LEVEL 84"=> 1494178
                ,"LEVEL 85"=> 1548509
                ,"LEVEL 86"=> 1604141
                ,"LEVEL 87"=> 1661090
                ,"LEVEL 88"=> 1719371
                ,"LEVEL 89"=> 1778999
                ,"LEVEL 90"=> 1839990
                ,"LEVEL 91"=> 1902360
                ,"LEVEL 92"=> 1966123
                ,"LEVEL 93"=> 2031295
                ,"LEVEL 94"=> 2097892
                ,"LEVEL 95"=> 2165929
                ,"LEVEL 96"=> 2235421
                ,"LEVEL 97"=> 2306384
                ,"LEVEL 98"=> 2378833
                ,"LEVEL 99"=> 2452783
        ];

        return $chart['LEVEL '.$level];
    }

}