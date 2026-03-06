# YEB MusicPopnableAPI

PHP SDK for the YEB Music API (Popnable). Search songs, trends, charts and artists.

Works standalone (plain PHP) or with Laravel (Facade + auto-discovery).

## Requirements

- PHP 8.1+
- cURL extension
- [YEB API Key](https://yeb.to) (free tier available)

## Installation

```bash
composer require yebto/music-popnable-api
```

## Standalone Usage

```php
use Yebto\MusicPopnableAPI\MusicPopnableAPI;

$api = new MusicPopnableAPI(['key' => 'your-api-key']);
$result = $api->search('example');
```

## Laravel Usage

Add your API key to `.env`:

```
YEB_KEY_ID=your-api-key
```

Use via Facade:

```php
use MusicPopnableAPI;

$result = MusicPopnableAPI::search('example');
```

Or via dependency injection:

```php
use Yebto\MusicPopnableAPI\MusicPopnableAPI;

public function handle(MusicPopnableAPI $api)
{
    $result = $api->search('example');
}
```

### Publish Config

```bash
php artisan vendor:publish --tag=yebto-music-popnable-config
```

## Available Methods

| Method | Description |
|--------|-------------|
| `search($query)` | Search for songs and artists |
| `getTrends()` | Get current music trends |
| `getSongs()` | Get popular songs |
| `getSongsByTrend($trend)` | Get songs by trend |
| `getArtists()` | Get popular artists |
| `getArtistByTrend($trend)` | Get artists by trend |
| `getDailyChart()` | Get the daily music chart |
| `getWeeklyChart()` | Get the weekly music chart |
| `getMonthlyChart()` | Get the monthly music chart |
| `getArtistChart()` | Get the artist chart |
| `getVideos()` | Get music videos |


All methods accept an optional `$extra` array parameter for additional API options.

## Error Handling

```php
use Yebto\ApiClient\Exceptions\ApiException;
use Yebto\ApiClient\Exceptions\AuthenticationException;
use Yebto\ApiClient\Exceptions\RateLimitException;

try {
    $result = $api->search('example');
} catch (AuthenticationException $e) {
    // Missing or invalid API key (401)
} catch (RateLimitException $e) {
    // Too many requests (429)
} catch (ApiException $e) {
    echo $e->getMessage();
    echo $e->getHttpCode();
}
```

## Free API Access

Register at [yeb.to](https://yeb.to) with Google OAuth to get a free API key.

## Support

- Documentation: [docs.yeb.to](https://docs.yeb.to)
- Email: support@yeb.to
- Issues: [GitHub Issues](https://github.com/yebto/music-popnable-api/issues)

## License

MIT - NETOX Ltd.
