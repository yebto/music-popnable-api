<?php

namespace Yebto\MusicPopnableAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array search(string $query, array $extra = [])
 * @method static array getTrends(array $extra = [])
 * @method static array getSongs(array $extra = [])
 * @method static array getSongsByTrend(string $trend, array $extra = [])
 * @method static array getArtists(array $extra = [])
 * @method static array getArtistByTrend(string $trend, array $extra = [])
 * @method static array getDailyChart(array $extra = [])
 * @method static array getWeeklyChart(array $extra = [])
 * @method static array getMonthlyChart(array $extra = [])
 * @method static array getArtistChart(array $extra = [])
 * @method static array getVideos(array $extra = [])
 */
class MusicPopnableAPI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'yebto-music-popnable';
    }
}
