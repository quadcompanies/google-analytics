<?php

namespace QuadCompanies\GoogleAnalytics;

use Illuminate\Support\Facades\View;

class GoogleAnalytics
{
    /**
     * Render the Google Analytics script.
     *
     * @param string|null $measurementId
     * @param array $tagIds
     * @return string
     */
    public static function render(?string $measurementId = null, array $tagIds = []): string
    {
        $tagIds = array_merge(config('google-analytics.tag_ids', []), $tagIds);

        return View::make('google-analytics::gtag', [
            'measurementId' => $measurementId,
            'tagIds' => $tagIds,
        ])->render();
    }
}
