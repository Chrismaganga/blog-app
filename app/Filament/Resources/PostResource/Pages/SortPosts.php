<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\Page;

class SortPosts extends Page
{
    protected static string $resource = PostResource::class;

    protected static string $view = 'filament.resources.post-resource.pages.sort-posts';
}
