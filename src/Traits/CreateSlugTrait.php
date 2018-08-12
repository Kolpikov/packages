<?php

namespace Kolpikov\Packages\Traits;

use Kolpikov\LaravelSlug\Slug;

trait CreateSlugTrait
{
    protected function slugify(array $attributes)
    {
        $url = '';

        if (!empty($attributes['url'])) {
            $url = $attributes['url'];
        } else {
            if (isset($attributes['translations'])) {
                foreach ($attributes['translations'] as $translation) {
                    if (!empty($translation['name'])) {
                        $url = $translation['name'];
                        break;
                    }
                }
            } else {
                if (!empty($attributes['name'])) {
                    $url = $attributes['name'];
                } elseif (!empty($attributes['title'])) {
                    $url = $attributes['title'];
                } elseif (!empty($attributes['event_title'])) {
                    $url = $attributes['event_title'];
                }
            }
        }
        if (!empty($url)) {
            if (!empty($attributes['is_service'])) {
                $urlParts = explode('.', $url);
                $newUrlParts = [];
                foreach ($urlParts as $urlPart) {
                    $newUrlParts[] = Slug::make($urlPart);
                }
                $attributes['url'] = implode('.', $newUrlParts);
            } else {
                $attributes['url'] = Slug::make($url);
            }
        }
        return $attributes;
    }
}