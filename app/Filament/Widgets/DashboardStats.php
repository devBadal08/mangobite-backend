<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Menu_item;
use App\Models\Rooms;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('Total Galleries', Gallery::count())
                ->description('Gallery Images')
                ->descriptionIcon('heroicon-m-photo')
                ->url(\App\Filament\Resources\GalleryResource::getUrl())
                ->color('primary'),

            Stat::make('Categories', Category::count())
                ->description('Menu Categories')
                ->descriptionIcon('heroicon-m-squares-2x2')
                ->url(\App\Filament\Resources\CategoryResource::getUrl())
                ->color('success'),

            Stat::make('Menu Items', Menu_item::count())
                ->description('Available Dishes')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->url(\App\Filament\Resources\MenuResource::getUrl())
                ->color('warning'),

            Stat::make('Rooms', Rooms::count())
                ->description('Hotel Rooms')
                ->descriptionIcon('heroicon-m-home-modern')
                ->url(\App\Filament\Resources\RoomResource::getUrl())
                ->color('info'),

            Stat::make('Contacts', Contact::count())
                ->description('Customer Enquiries')
                ->descriptionIcon('heroicon-m-envelope')
                ->url(\App\Filament\Resources\ContactResource::getUrl())
                ->color('danger'),

        ];
    }
}