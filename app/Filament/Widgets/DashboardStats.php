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
                ->color('primary'),

            Stat::make('Categories', Category::count())
                ->description('Menu Categories')
                ->descriptionIcon('heroicon-m-squares-2x2')
                ->color('success'),

            Stat::make('Menu Items', Menu_item::count())
                ->description('Available Dishes')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->color('warning'),

            Stat::make('Rooms', Rooms::count())
                ->description('Hotel Rooms')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('info'),

            Stat::make('Contacts', Contact::count())
                ->description('Customer Enquiries')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('danger'),

        ];
    }
}