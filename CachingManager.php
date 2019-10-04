<?php
/*
 * Simple caching manager depends on Alternative PHP Cache
 */
class CachingManager {
    /**
     * Gets a value by $key
     * @param $key
     * @return mixed|null
     */
    public static function Get($key) {
        if (apcu_exists($key))
            return apcu_fetch($key);
        else
            return null;
    }

    /**
     * Stores a key-value pair
     * @param $key
     * @param $value
     */
    public static function Store($key, $value) {
        apcu_store($key, $value);
    }

    /**
     * Checks if a key-value exists
     * @param $key
     * @return bool
     */
    public static function Exists($key) {
        return apcu_exists($key) 
                        && apcu_fetch($key) !== null;
    }

    /**
     * clear a key-value pair by setting it to null
     * @param $key
     */
    public static function Reset($key) {
        CachingManager::Store($key, null);
    }
}