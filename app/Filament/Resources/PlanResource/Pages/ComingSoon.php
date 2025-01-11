<?php

namespace App\Filament\Resources\PlanResource\Pages;

use App\Filament\Resources\PlanResource;
use Filament\Resources\Pages\Page;

class ComingSoon extends Page
{
    protected static string $resource = PlanResource::class;
    protected static string $view = 'filament.resources.plan-resource.pages.coming-soon';
    protected static ?string $navigationIcon = 'heroicon-o-clock'; // Icon for the page
    protected static ?string $navigationLabel = 'Coming Soon'; // Label in the sidebar
    protected static ?string $title = 'Coming Soon'; // Page title
}
