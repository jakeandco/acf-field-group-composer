<?php

namespace ACFComposer;

class Util
{
    /**
     * Recursively modifies an array using a callback function.
     *
     * @param array $array The array to be modified.
     * @param callable $callback The callback function to apply to each element.
     * @return array The modified array.
     */
    protected static function array_modify_recursive(array &$array, callable $callback)
    {
        foreach ($array as $k => &$v) {
            if (is_array($v)) {
                Util::array_modify_recursive($v, $callback);
            } else {
                $callback($v, $k, $array);
            }
        }

        return $array;
    }

    /**
     * Removes 'key' keys recursively from an array.
     *
     * @param array $array The array to process.
     * @return array The array with 'key's removed.
     */
	public static function remove_keys_recursive(array $array)
	{
		return Util::array_modify_recursive($array, function ($value, $key, &$subarray) {
			if ($key === 'key') {
				unset($subarray[$key]);
			}
		});
	}
}
