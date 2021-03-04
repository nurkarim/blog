<?php

namespace App\CustomClasses;

use App\User;
use Carbon\Carbon;
use Image;
use DateTime;
class Helper
{
    public static function imageUpload($file, $customName, $path)
    {
        $imageName = $customName . "." . $file->getClientOriginalExtension();
        if ($file->isValid()) {
            $file->move($path, $imageName);
            return $imageName;
        }
        return false;
    }


    //only time
    public static function prvDate()
    {
        return date("Y-m-d", strtotime('-1 day'));
    }

    public static function onlyTime($date)
    {
        return date("h:i A", strtotime($date));
    }

    public static function dateTime()
    {
        return date('Y-m-d H:i:s');
    }

    public static function stringDate($date)
    {
        return date("d M Y", strtotime($date));
    }

    public static function onlydmY($date)
    {
        return date("d-m-Y", strtotime($date));
    }

    public static function secondsToTime($seconds)
    {
        $hours = floor($seconds / 3600);
        $seconds -= $hours * 3600;
        $minutes = floor($seconds / 60);
        $seconds -= $minutes * 60;
        $hours = ($hours < 9) ? '0' . $hours : $hours;
        $minutes = ($minutes < 9) ? '0' . $minutes : $minutes;
        $seconds = ($seconds < 9) ? '0' . $seconds : $seconds;
        return "$hours:$minutes:$seconds";
    }

    public static function secondsToTime2($seconds)
    {
        $hours = floor($seconds / 3600);
        $seconds -= $hours * 3600;
        $minutes = floor($seconds / 60);
        $seconds -= $minutes * 60;
        $hours = ($hours < 9) ? '0' . $hours : $hours;
        $minutes = ($minutes < 9) ? '0' . $minutes : $minutes;
        $seconds = ($seconds < 9) ? '0' . $seconds : $seconds;
        return "$hours hours, $minutes mins, $seconds sec";
    }

    public static function timeToSecond($time)
    {
        $parsed = date_parse($time);
        return $seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
    }

    public static function createDateRangeArray($strDateFrom, $strDateTo)
    {
        // takes two dates formatted as YYYY-MM-DD and creates an
        // inclusive array of the dates between the from and to dates.
        // could test validity of dates here but I'm already doing
        // that in the main script
        $aryRange = array();
        $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
        $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));
        if ($iDateTo >= $iDateFrom) {
            array_push($aryRange, date('Y-m-d', $iDateFrom)); // first entry
            while ($iDateFrom < $iDateTo) {
                $iDateFrom += 86400; // add 24 hours
                array_push($aryRange, date('Y-m-d', $iDateFrom));
            }
        }
        return $aryRange;
    }

    public static function timeSummation($times)
    {
        $seconds = 0;
        foreach ($times as $time) {
            list($g, $i, $s) = explode(':', $time);
            $seconds += $g * 3600;
            $seconds += $i * 60;
            $seconds += $s;
        }
        $hours = floor($seconds / 3600);
        $seconds -= $hours * 3600;
        $minutes = floor($seconds / 60);
        $seconds -= $minutes * 60;
        if ($hours < 10) {
            $hours = '0' . $hours;
        }
        if ($minutes < 10) {
            $minutes = '0' . $minutes;
        }
        if ($seconds < 10) {
            $seconds = '0' . $seconds;
        }
        return "{$hours}:{$minutes}:{$seconds}";
    }

    public static function timeDiff($time1, $time2)
    {
        $time1 = date_create("1/1/1980 $time1");
        $time2 = date_create("1/1/1980 $time2");
        if ($time1 == false || $time2 == false) {
            return "00:00:00";
        } else {
            $diff = date_diff($time2, $time1);
            $date = $diff->h . ':' . $diff->i . ':' . $diff->s;
            return date("H:i:s", strtotime($date));
        }

    }

    public static function isTopNavEnabled()
    {
        return config('edashboard.top_nav_enable');
    }

    public static function leftNavMenus()
    {
        return config('edashboard.menus');
    }


    public static function notifications()
    {
        return $notifications = auth()->user()->unreadNotifications;
    }

    public  static function weekdays()
    {
        return [
          [
              'title'=>'Sunday',
              'name'=>'Sun',
          ],
            [
                'title'=>'Monday',
                'name'=>'Mon',
            ],
            [
                'title'=>'Tuesday',
                'name'=>'Tue',
            ],
            [
                'title'=>'Wednesday',
                'name'=>'Wed',
            ],
            [
                'title'=>'Thursday',
                'name'=>'Thu',
            ],
            [
                'title'=>'Friday',
                'name'=>'Fri',
            ],
            [
                'title'=>'Saturday',
                'name'=>'Sat',
            ]
        ];
    }



    public static function timeZoneList()
    {
        return array (
            '(UTC-11:00) Midway Island' => 'Pacific/Midway',
            '(UTC-11:00) Samoa' => 'Pacific/Samoa',
            '(UTC-10:00) Hawaii' => 'Pacific/Honolulu',
            '(UTC-09:00) Alaska' => 'US/Alaska',
            '(UTC-08:00) Pacific Time (US &amp; Canada)' => 'America/Los_Angeles',
            '(UTC-08:00) Tijuana' => 'America/Tijuana',
            '(UTC-07:00) Arizona' => 'US/Arizona',
            '(UTC-07:00) Chihuahua' => 'America/Chihuahua',
            '(UTC-07:00) La Paz' => 'America/Chihuahua',
            '(UTC-07:00) Mazatlan' => 'America/Mazatlan',
            '(UTC-07:00) Mountain Time (US &amp; Canada)' => 'US/Mountain',
            '(UTC-06:00) Central America' => 'America/Managua',
            '(UTC-06:00) Central Time (US &amp; Canada)' => 'US/Central',
            '(UTC-06:00) Guadalajara' => 'America/Mexico_City',
            '(UTC-06:00) Mexico City' => 'America/Mexico_City',
            '(UTC-06:00) Monterrey' => 'America/Monterrey',
            '(UTC-06:00) Saskatchewan' => 'Canada/Saskatchewan',
            '(UTC-05:00) Bogota' => 'America/Bogota',
            '(UTC-05:00) Eastern Time (US &amp; Canada)' => 'US/Eastern',
            '(UTC-05:00) Indiana (East)' => 'US/East-Indiana',
            '(UTC-05:00) Lima' => 'America/Lima',
            '(UTC-05:00) Quito' => 'America/Bogota',
            '(UTC-04:00) Atlantic Time (Canada)' => 'Canada/Atlantic',
            '(UTC-04:30) Caracas' => 'America/Caracas',
            '(UTC-04:00) La Paz' => 'America/La_Paz',
            '(UTC-04:00) Santiago' => 'America/Santiago',
            '(UTC-03:30) Newfoundland' => 'Canada/Newfoundland',
            '(UTC-03:00) Brasilia' => 'America/Sao_Paulo',
            '(UTC-03:00) Buenos Aires' => 'America/Argentina/Buenos_Aires',
            '(UTC-03:00) Georgetown' => 'America/Argentina/Buenos_Aires',
            '(UTC-03:00) Greenland' => 'America/Godthab',
            '(UTC-02:00) Mid-Atlantic' => 'America/Noronha',
            '(UTC-01:00) Azores' => 'Atlantic/Azores',
            '(UTC-01:00) Cape Verde Is.' => 'Atlantic/Cape_Verde',
            '(UTC+00:00) Casablanca' => 'Africa/Casablanca',
            '(UTC+00:00) Edinburgh' => 'Europe/London',
            '(UTC+00:00) Greenwich Mean Time : Dublin' => 'Etc/Greenwich',
            '(UTC+00:00) Lisbon' => 'Europe/Lisbon',
            '(UTC+00:00) London' => 'Europe/London',
            '(UTC+00:00) Monrovia' => 'Africa/Monrovia',
            '(UTC+00:00) UTC' => 'UTC',
            '(UTC+01:00) Amsterdam' => 'Europe/Amsterdam',
            '(UTC+01:00) Belgrade' => 'Europe/Belgrade',
            '(UTC+01:00) Berlin' => 'Europe/Berlin',
            '(UTC+01:00) Bern' => 'Europe/Berlin',
            '(UTC+01:00) Bratislava' => 'Europe/Bratislava',
            '(UTC+01:00) Brussels' => 'Europe/Brussels',
            '(UTC+01:00) Budapest' => 'Europe/Budapest',
            '(UTC+01:00) Copenhagen' => 'Europe/Copenhagen',
            '(UTC+01:00) Ljubljana' => 'Europe/Ljubljana',
            '(UTC+01:00) Madrid' => 'Europe/Madrid',
            '(UTC+01:00) Paris' => 'Europe/Paris',
            '(UTC+01:00) Prague' => 'Europe/Prague',
            '(UTC+01:00) Rome' => 'Europe/Rome',
            '(UTC+01:00) Sarajevo' => 'Europe/Sarajevo',
            '(UTC+01:00) Skopje' => 'Europe/Skopje',
            '(UTC+01:00) Stockholm' => 'Europe/Stockholm',
            '(UTC+01:00) Vienna' => 'Europe/Vienna',
            '(UTC+01:00) Warsaw' => 'Europe/Warsaw',
            '(UTC+01:00) West Central Africa' => 'Africa/Lagos',
            '(UTC+01:00) Zagreb' => 'Europe/Zagreb',
            '(UTC+02:00) Athens' => 'Europe/Athens',
            '(UTC+02:00) Bucharest' => 'Europe/Bucharest',
            '(UTC+02:00) Cairo' => 'Africa/Cairo',
            '(UTC+02:00) Harare' => 'Africa/Harare',
            '(UTC+02:00) Helsinki' => 'Europe/Helsinki',
            '(UTC+02:00) Istanbul' => 'Europe/Istanbul',
            '(UTC+02:00) Jerusalem' => 'Asia/Jerusalem',
            '(UTC+02:00) Kyiv' => 'Europe/Helsinki',
            '(UTC+02:00) Pretoria' => 'Africa/Johannesburg',
            '(UTC+02:00) Riga' => 'Europe/Riga',
            '(UTC+02:00) Sofia' => 'Europe/Sofia',
            '(UTC+02:00) Tallinn' => 'Europe/Tallinn',
            '(UTC+02:00) Vilnius' => 'Europe/Vilnius',
            '(UTC+03:00) Baghdad' => 'Asia/Baghdad',
            '(UTC+03:00) Kuwait' => 'Asia/Kuwait',
            '(UTC+03:00) Minsk' => 'Europe/Minsk',
            '(UTC+03:00) Nairobi' => 'Africa/Nairobi',
            '(UTC+03:00) Riyadh' => 'Asia/Riyadh',
            '(UTC+03:00) Volgograd' => 'Europe/Volgograd',
            '(UTC+03:30) Tehran' => 'Asia/Tehran',
            '(UTC+04:00) Abu Dhabi' => 'Asia/Muscat',
            '(UTC+04:00) Baku' => 'Asia/Baku',
            '(UTC+04:00) Moscow' => 'Europe/Moscow',
            '(UTC+04:00) Muscat' => 'Asia/Muscat',
            '(UTC+04:00) St. Petersburg' => 'Europe/Moscow',
            '(UTC+04:00) Tbilisi' => 'Asia/Tbilisi',
            '(UTC+04:00) Yerevan' => 'Asia/Yerevan',
            '(UTC+04:30) Kabul' => 'Asia/Kabul',
            '(UTC+05:00) Islamabad' => 'Asia/Karachi',
            '(UTC+05:00) Karachi' => 'Asia/Karachi',
            '(UTC+05:00) Tashkent' => 'Asia/Tashkent',
            '(UTC+05:30) Chennai' => 'Asia/Calcutta',
            '(UTC+05:30) Kolkata' => 'Asia/Kolkata',
            '(UTC+05:30) Mumbai' => 'Asia/Calcutta',
            '(UTC+05:30) New Delhi' => 'Asia/Calcutta',
            '(UTC+05:30) Sri Jayawardenepura' => 'Asia/Calcutta',
            '(UTC+05:45) Kathmandu' => 'Asia/Katmandu',
            '(UTC+06:00) Almaty' => 'Asia/Almaty',
            '(UTC+06:00) Astana' => 'Asia/Dhaka',
            '(UTC+06:00) Dhaka' => 'Asia/Dhaka',
            '(UTC+06:00) Ekaterinburg' => 'Asia/Yekaterinburg',
            '(UTC+06:30) Rangoon' => 'Asia/Rangoon',
            '(UTC+07:00) Bangkok' => 'Asia/Bangkok',
            '(UTC+07:00) Hanoi' => 'Asia/Bangkok',
            '(UTC+07:00) Jakarta' => 'Asia/Jakarta',
            '(UTC+07:00) Novosibirsk' => 'Asia/Novosibirsk',
            '(UTC+08:00) Beijing' => 'Asia/Hong_Kong',
            '(UTC+08:00) Chongqing' => 'Asia/Chongqing',
            '(UTC+08:00) Hong Kong' => 'Asia/Hong_Kong',
            '(UTC+08:00) Krasnoyarsk' => 'Asia/Krasnoyarsk',
            '(UTC+08:00) Kuala Lumpur' => 'Asia/Kuala_Lumpur',
            '(UTC+08:00) Perth' => 'Australia/Perth',
            '(UTC+08:00) Singapore' => 'Asia/Singapore',
            '(UTC+08:00) Taipei' => 'Asia/Taipei',
            '(UTC+08:00) Ulaan Bataar' => 'Asia/Ulan_Bator',
            '(UTC+08:00) Urumqi' => 'Asia/Urumqi',
            '(UTC+09:00) Irkutsk' => 'Asia/Irkutsk',
            '(UTC+09:00) Osaka' => 'Asia/Tokyo',
            '(UTC+09:00) Sapporo' => 'Asia/Tokyo',
            '(UTC+09:00) Seoul' => 'Asia/Seoul',
            '(UTC+09:00) Tokyo' => 'Asia/Tokyo',
            '(UTC+09:30) Adelaide' => 'Australia/Adelaide',
            '(UTC+09:30) Darwin' => 'Australia/Darwin',
            '(UTC+10:00) Brisbane' => 'Australia/Brisbane',
            '(UTC+10:00) Canberra' => 'Australia/Canberra',
            '(UTC+10:00) Guam' => 'Pacific/Guam',
            '(UTC+10:00) Hobart' => 'Australia/Hobart',
            '(UTC+10:00) Melbourne' => 'Australia/Melbourne',
            '(UTC+10:00) Port Moresby' => 'Pacific/Port_Moresby',
            '(UTC+10:00) Sydney' => 'Australia/Sydney',
            '(UTC+10:00) Yakutsk' => 'Asia/Yakutsk',
            '(UTC+11:00) Vladivostok' => 'Asia/Vladivostok',
            '(UTC+12:00) Auckland' => 'Pacific/Auckland',
            '(UTC+12:00) Fiji' => 'Pacific/Fiji',
            '(UTC+12:00) International Date Line West' => 'Pacific/Kwajalein',
            '(UTC+12:00) Kamchatka' => 'Asia/Kamchatka',
            '(UTC+12:00) Magadan' => 'Asia/Magadan',
            '(UTC+12:00) Marshall Is.' => 'Pacific/Fiji',
            '(UTC+12:00) New Caledonia' => 'Asia/Magadan',
            '(UTC+12:00) Solomon Is.' => 'Asia/Magadan',
            '(UTC+12:00) Wellington' => 'Pacific/Auckland',
            '(UTC+13:00) Nuku\'alofa' => 'Pacific/Tongatapu'
        );
    }

    public static function envWrite($key, $value){
        $env = file_get_contents(isset($env_path) ? $env_path : base_path('.env')); //fet .env file
        $env = str_replace("$key=" . env($key), "$key=", $env); //replace value

        $value = preg_replace('/\s+/', '', $value); //replace special ch
        $key = strtoupper($key); //force upper for security
        $env = file_get_contents(isset($env_path) ? $env_path : base_path('.env')); //fet .env file
        $env = str_replace("$key=" . env($key), "$key=" . $value, $env); //replace value
        /** Save file eith new content */
        $env = file_put_contents(isset($env_path) ? $env_path : base_path('.env'), $env);
        return true;
    }




    public  static function monthList(){
        return [
            [
                'id'=>'01',
                'sort_name'=>'JAN',
                'full_name'=>'January',
            ],
            [
                'id'=>'02',
                'sort_name'=>'FEB',
                'full_name'=>'February',
            ],
            [
                'id'=>'03',
                'sort_name'=>'MAR',
                'full_name'=>'March',
            ],
            [
                'id'=>'04',
                'sort_name'=>'APR',
                'full_name'=>'April',
            ],
            [
                'id'=>'05',
                'sort_name'=>'MAY',
                'full_name'=>'May',
            ],
            [
                'id'=>'06',
                'sort_name'=>'JUN',
                'full_name'=>'Jun',
            ],
            [
                'id'=>'07',
                'sort_name'=>'JULY',
                'full_name'=>'July',
            ],
            [
                'id'=>'08',
                'sort_name'=>'AUG',
                'full_name'=>'August',
            ],
            [
                'id'=>'09',
                'sort_name'=>'SEP',
                'full_name'=>'September',
            ],
            [
                'id'=>'10',
                'sort_name'=>'OCT',
                'full_name'=>'October',
            ],
            [
                'id'=>'11',
                'sort_name'=>'NOV',
                'full_name'=>'November',
            ],
            [
                'id'=>'12',
                'sort_name'=>'DEC',
                'full_name'=>'December',
            ],
        ];
    }

    function basePath($image)
    {

        if (!blank($image)):
            if ($image->disk    == 'local') :

                //return public_path();

                if (strpos(php_sapi_name(), 'cli') !== false || defined('LARAVEL_START_FROM_PUBLIC')) {
                    return url('/');
                }else{
                    return url('/public');
                }


            else :
                return "https://s3." . config('filesystems.disks.s3.region') . ".amazonaws.com/" . config('filesystems.disks.s3.bucket');
            endif;
        endif;

    }

    function isFileExist($item  = '', $file = '')
    {
        if (!blank($item) and !blank($file)) :

            if ($item->disk     == 'local') :

                if (strpos(php_sapi_name(), 'cli') !== false) {
                    $file = $file;
                }else{
                    $file = 'public/'.$file;
                }

                if (File::exists($file)) :
                    return true;
                endif;
            else :

                if (Storage::disk('s3')->exists($file)) :
                    return true;
                endif;
            endif;
        endif;

        return false;
    }
}
