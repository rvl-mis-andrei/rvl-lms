<?php
namespace App\Services\SystemServices;

use Illuminate\Support\Facades\Cache;
use App\Models\System\Route as RoleRoute;
use Illuminate\Support\Facades\Log;

class WebRoute
{
    public function getMisRoutes()
    {
        try {
            return Cache::rememberForever('system_routes_mis', function () {
                return RoleRoute::where([['status', 1], ['role', 1]])->get(['id','url', 'method', 'name']);
            });
        } catch (\Exception $e) {
            Log::error('Error retrieving MIS routes: ' . $e->getMessage());
            return array();
        }
    }

    public function getHRSSRoutes()
    {
        try {
            return Cache::rememberForever('system_routes_mis', function () {
                return RoleRoute::where([['status', 1], ['role',2]])->get(['id','url', 'method', 'name']);
            });
        } catch (\Exception $e) {
            Log::error('Error retrieving MIS routes: ' . $e->getMessage());
            return array();
        }
    }

    public function getGuestRoutes()
    {
        try {
            return Cache::rememberForever('system_routes_mis', function () {
                return RoleRoute::where([['status', 1], ['role',3]])->get(['id','url', 'method', 'name']);
            });
        } catch (\Exception $e) {
            Log::error('Error retrieving MIS routes: ' . $e->getMessage());
            return array();
        }
    }
}

?>
