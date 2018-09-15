<?php
/*
 * Simple caching manager depends on Alternative PHP Cache
 */
class CachingManager {
    public static function Get($key) {
        if (apcu_exists($key))
            return apcu_fetch($key);
        else
            return null;
    }
    public static function Store($key, $value) {
        apcu_store($key, $value);
    }
    public static function Exists($key) {
        return apcu_exists($key) 
                        && apcu_fetch($key) !== null;
    }
    public static function Reset($key) {
        CachingManager::Store($key, null);
    }
}