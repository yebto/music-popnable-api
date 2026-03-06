<?php

namespace Yebto\MusicPopnableAPI;

use Yebto\ApiClient\YebtoClient;

class MusicPopnableAPI extends YebtoClient
{
    protected function module(): string
    {
        return 'music-popnable';
    }

    protected function defaults(): array
    {
        return [
            'base_url' => 'https://api.yeb.to/v1',
            'key'      => null,
            'curl'     => [
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
                CURLOPT_USERAGENT      => 'yebto-music-popnable-api-php',
            ],
        ];
    }

    /**
     * Search for songs and artists
     */
    public function search(string $query, array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'search', 'query' => $query], $extra));
    }

    /**
     * Get current music trends
     */
    public function getTrends(array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-trends'], $extra));
    }

    /**
     * Get popular songs
     */
    public function getSongs(array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-songs'], $extra));
    }

    /**
     * Get songs by trend
     */
    public function getSongsByTrend(string $trend, array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-songs-by-trend', 'trend' => $trend], $extra));
    }

    /**
     * Get popular artists
     */
    public function getArtists(array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-artists'], $extra));
    }

    /**
     * Get artists by trend
     */
    public function getArtistByTrend(string $trend, array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-artist-by-trend', 'trend' => $trend], $extra));
    }

    /**
     * Get the daily music chart
     */
    public function getDailyChart(array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-daily-chart'], $extra));
    }

    /**
     * Get the weekly music chart
     */
    public function getWeeklyChart(array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-weekly-chart'], $extra));
    }

    /**
     * Get the monthly music chart
     */
    public function getMonthlyChart(array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-monthly-chart'], $extra));
    }

    /**
     * Get the artist chart
     */
    public function getArtistChart(array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-artist-chart'], $extra));
    }

    /**
     * Get music videos
     */
    public function getVideos(array $extra = []): array
    {
        return $this->post('', array_merge(['action' => 'get-videos'], $extra));
    }
}
